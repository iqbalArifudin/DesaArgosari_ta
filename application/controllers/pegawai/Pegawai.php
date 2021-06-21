<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pegawai'] = $this->Pegawai_model->tampilPegawai();
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/pegawai/index',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function tambahpegawai(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pegawai'] = $this->Pegawai_model->tampilPegawai();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukPegawai();
            // $data['penduduk'] = $this->Penduduk_model->tampilPendudukPegawai();
            if($this->form_validation->run() == FALSE){
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar');
                $this->load->view('template pegawai/topbar'); 
                $this->load->view('pegawai/pegawai/tambah' ,$data);
                $this->load->view('template pegawai/footer');  
            }
            else{
            $upload = $this->Pegawai_model->upload();
                if ($upload['result'] == 'success'){
                $this->Pegawai_model->tambahDataPegawai($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                    redirect('pegawai/pegawai','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_pegawai)
        {
        if ($this->Pegawai_model->hapusDatapegawai($id_pegawai) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('pegawai/pegawai');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('pegawai/Pegawai', 'refresh');
            }
           
        }

        public function edit($id_pegawai)
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pegawai'] = $this->Pegawai_model->getPegawai($id_pegawai);
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukPegawai();
            $this->form_validation->set_rules('id_penduduk', 'id_penduduk', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('template pegawai/header', $data);
                $this->load->view('template pegawai/sidebar', $data);
                $this->load->view('template pegawai/topbar', $data);
                $this->load->view('pegawai/pegawai/edit', $data);
                $this->load->view('template pegawai/footer', $data);
            } else {

            //check jika ada gambar yang akan di upload
                $upload_file = $_FILES['foto']['name'];
                if ($upload_file) {
                    $config['upload_path'] = './assets/foto_pegawai/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size']     = '10000';
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto')) {
                        $old_file = $data['pegawai']['foto'];
                        if ($old_file != 'default.png') {
                            unlink(FCPATH . './assets/foto_pegawai/' . $old_file);
                        }
                        $new_file = $this->upload->data('file_name');
                        $this->db->set('foto_pegawai', $new_file);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $id_pegawai = $this->input->post('id_pegawai');
                $id_penduduk = $this->input->post('id_penduduk');
                $jabatan = $this->input->post('jabatan');
                $no_hp = $this->input->post('no_hp');

                $this->db->set('id_penduduk', $id_penduduk);
                $this->db->set('jabatan', $jabatan);
                $this->db->set('no_hp', $no_hp);
                $this->db->where('id_pegawai', $id_pegawai);
                $this->db->update('pegawai');


                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
            redirect('pegawai/Pegawai');
            }
        }
    
        public function detail($id_pegawai){
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pegawai'] = $this->Pegawai_model->getDetailPegawai($id_pegawai);
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/pegawai/detail' ,$data);
            $this->load->view('template pegawai/footer'); 
        } 
        

    }
        /* End of fils pegawai.php */
?>