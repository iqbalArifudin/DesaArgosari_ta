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
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduanPegawai();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/Pengaduan/index',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function hapus($id_pengaduan)
        {
            if($this->Pengaduan_model->hapusDatapengaduan($id_pengaduan) == false)
            {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                           Data Tidak Dapat Dihapus ! 
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>'
            );
                redirect('pegawai/Pengaduan');
            }else{
                $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                           Data Behasil Dihapus ! 
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>'
            );
                redirect('pegawai/Pengaduan','refresh');
            } 
        }

        public function edit($id_pengaduan){
            $this->load->library('form_validation');
            $data ['pengaduan'] = $this->Pengaduan_model->getPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $data['pengaduan1'] = $this->Pengaduan_model->tampilPengaduanPegawai();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');
            // $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar',$data);
                $this->load->view('template pegawai/topbar',$data); 
                $this->load->view('pegawai/Pengaduan/edit' ,$data);
            }
            else{
            $this->Pengaduan_model->ubahPengaduanPegawai($id_pengaduan);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                       Status Berhasil Di Update ! 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>'
            );
                    redirect('pegawai/Pengaduan','refresh');
            }
        }
    
        public function detail($id_pengaduan){
            $data['pengaduan']=$this->Pengaduan_model->getDetailPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/Pengaduan/detail' ,$data);
            $this->load->view('template pegawai/footer'); 
        } 

        public function download($id_pengaduan){
            $this->load->helper('download');
            $fileinfo = $this->Pengaduan_model->download($id_pengaduan);
            $file = './assets/foto_pengaduan/'.$fileinfo['bukti'];
            force_download($file, NULL);
        }

    }
        /* End of fils admin.php */
?>