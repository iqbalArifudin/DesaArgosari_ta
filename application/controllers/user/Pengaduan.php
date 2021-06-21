<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pengaduan extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');  
            $this->load->model('Pengaduan_model');
        $this->load->model('Notif_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        // $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduan();
        $data['notifikasi'] = $this->Notif_model->tampilNotif();
        $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduanPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template_layanan/header',$data);
        $this->load->view('template_layanan/sidebar',$data);
        $this->load->view('template_layanan/topbar',$data); 
        $this->load->view('user/Pengaduan/index',$data);
        $this->load->view('template_layanan/footer',$data);  
        }

        public function tambahpengaduan(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('jenis_pengaduan', 'jenis_pengaduan', 'required');
            $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduanPenduduk($this->session->userdata('id_penduduk'));
            // $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduan();
            $data['pengaduan2'] = $this->Pengaduan_model->tampilJenisPengaduan();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar');
                $this->load->view('template_layanan/topbar'); 
                $this->load->view('user/Pengaduan/tambah' ,$data);
                $this->load->view('template_layanan/footer',$data);  

            }
            else{
                $upload = $this->Pengaduan_model->upload();
                if ($upload['result'] == 'success'){
                    $this->Pengaduan_model->tambahDataPengaduan($upload);
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data berhasil di tambahkan ! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('user/Pengaduan','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_pengaduan)
        {
            if($this->Pengaduan_model->hapusDatapengaduan($id_pengaduan) == false)
            {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/Pengaduan');
            }else{
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil di hapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/Pengaduan','refresh');
            }
           
        }

        public function edit($id_pengaduan)
        {
        $data ['pengaduan'] = $this->Pengaduan_model->getPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('NIK', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar',$data);
                $this->load->view('template_layanan/topbar',$data); 
                $this->load->view('user/Pengaduan/edit',$data);
                $this->load->view('template_layanan/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['bukti']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_pengaduan/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti')) {
                    $old_file = $data['pengaduan']['bukti'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_pengaduan/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('bukti', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_pengaduan = $this->input->post('id_pengaduan');
            $jenis_pengaduan = $this->input->post('jenis_pengaduan');
            $alasan = $this->input->post('alasan');
            $keterangan = $this->input->post('keterangan');

            $this->db->set('jenis_pengaduan', $jenis_pengaduan);
            $this->db->set('alasan', $alasan);
            $this->db->set('keterangan', $keterangan);
            $this->db->where('id_pengaduan', $id_pengaduan);
            $this->db->update('pengaduan');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('user/Pengaduan');
        }
    }
    
        public function detail($id_pengaduan){
            $data['pengaduan']=$this->Pengaduan_model->getDetailPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar'); 
            $this->load->view('user/Pengaduan/detail' ,$data);
            $this->load->view('template_layanan/footer'); 
        } 

    }
        /* End of fils admin.php */
?>