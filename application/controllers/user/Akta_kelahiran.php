<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Akta_kelahiran extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Akta_kelahiran_model');
        $this->load->library('pdf');
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->Akta_kelahiran_model->tampilAkta($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar',$data);
            $this->load->view('template_layanan/topbar',$data); 
            $this->load->view('user/Pelayanan/Akta_kelahiran/index',$data);
            $this->load->view('template_layanan/footer',$data);  
        }

        public function tambahAkta(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_akta', 'nama_akta', 'required');
        $data['akta'] = $this->Akta_kelahiran_model->tampilAkta($this->session->userdata('id_penduduk'));
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar');
                $this->load->view('template_layanan/topbar'); 
                $this->load->view('user/Pelayanan/Akta_kelahiran/tambah' ,$data);
                $this->load->view('template_layanan/footer',$data);  

            }         
            else{
            $upload = $this->Akta_kelahiran_model->upload();
            $upload1 = $this->Akta_kelahiran_model->upload1();
            $upload2 = $this->Akta_kelahiran_model->upload2();
            $upload3 = $this->Akta_kelahiran_model->upload3();
            $upload4 = $this->Akta_kelahiran_model->upload4();
            $upload5 = $this->Akta_kelahiran_model->upload5();
                if ($upload['result'] == 'success'){
                $this->Akta_kelahiran_model->tambahAkta($upload, $upload1, $upload2, $upload3, $upload4, $upload5);
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data berhasil di tambahkan ! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                redirect('user/Akta_kelahiran', 'refresh');
                } else {
                    echo $upload['error'];
                }
            }
        }

        public function hapus($id_akta)
        {
        if ($this->Akta_kelahiran_model->hapusData($id_akta) == false)
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
            redirect('user/Akta_kelahiran');
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
            redirect('user/Akta_kelahiran', 'refresh');
            }
           
        }

        public function edit($id_akta)
        {
        $data['akta'] = $this->Akta_kelahiran_model->getAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('nama_akta', 'nama_akta', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar',$data);
                $this->load->view('template_layanan/topbar',$data); 
                $this->load->view('user/Pelayanan/Akta_kelahiran/edit',$data);
                $this->load->view('template_layanan/footer',$data);  
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['fc_kk']['name'];
            $upload_file1 = $_FILES['fc_ktp_saksi']['name'];
            $upload_file2 = $_FILES['fc_ktp_ayah']['name'];
            $upload_file3 = $_FILES['fc_ktp_ibu']['name'];
            $upload_file4 = $_FILES['surat_kelahiran']['name'];
            $upload_file5 = $_FILES['surat_rt_rw']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fc_kk')) {
                    $old_file = $data['akta_kelahiran']['fc_kk'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('fc_kk', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } elseif ($upload_file1) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fc_ktp_saksi')) {
                    $old_file = $data['akta_kelahiran']['fc_ktp_saksi'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('fc_ktp_saksi', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } elseif ($upload_file2) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fc_ktp_ayah')) {
                    $old_file = $data['akta_kelahiran']['fc_ktp_ayah'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('fc_ktp_ayah', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } elseif ($upload_file3) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fc_ktp_ibu')) {
                    $old_file = $data['akta_kelahiran']['fc_ktp_ibu'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('fc_ktp_ibu', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } elseif ($upload_file4) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('surat_kelahiran')) {
                    $old_file = $data['akta_kelahiran']['surat_kelahiran'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('surat_kelahiran', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } elseif ($upload_file5) {
                $config['upload_path'] = './assets/persyaratan_akta/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '50000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('surat_rt_rw')) {
                    $old_file = $data['akta_kelahiran']['surat_rt_rw'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/persyaratan_akta/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('surat_rt_rw', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }

                $id_akta = $this->input->post('id_akta');
                $nama_akta = $this->input->post('nama_akta');
                $tempat_lahir_akta = $this->input->post('tempat_lahir_akta');
                $tanggal_lahir_akta = $this->input->post('tanggal_lahir_akta');
                $keterangan = $this->input->post('keterangan');

                $this->db->set('nama_akta', $nama_akta);
                $this->db->set('tempat_lahir_akta', $tempat_lahir_akta);
                $this->db->set('tanggal_lahir_akta', $tanggal_lahir_akta);
                $this->db->set('keterangan', $keterangan);
                $this->db->where('id_akta', $id_akta);
                $this->db->update('akta_kelahiran');

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('user/Akta_kelahiran');
            }
        }
    }
    
        public function detail($id_akta){
        $data['akta'] = $this->Akta_kelahiran_model->getDetailAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar'); 
            $this->load->view('user/Pelayanan/Akta_kelahiran/detail' ,$data);
        $this->load->view('template_layanan/footer');
    }

    public function pdf()
    {
        $data['akta'] = $this->Akta_kelahiran_model->tampilAll();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat Penerbitan Akta Kelahiran RT/RW.pdf";
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->load_view('user/Pelayanan/Akta_kelahiran/surat_rt_rw_akta_pdf', $data);
    }

    }
        /* End of fils admin.php */
?>