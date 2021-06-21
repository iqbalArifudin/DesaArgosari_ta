<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kritik extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');  
            $this->load->model('Kritik_saran_model');  
        }
        
        public function index()
        {
        $data['saran'] = $this->Kritik_saran_model->tampilSaran();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template_layanan/header',$data);
        $this->load->view('template_layanan/sidebar',$data);
        $this->load->view('template_layanan/topbar',$data); 
        $this->load->view('user/Kritik_saran/index',$data);
        $this->load->view('template_layanan/footer',$data);  
        }

        public function tambahSaran(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $data['saran'] = $this->Kritik_saran_model->tampilSaran();
            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar');
                $this->load->view('template_layanan/topbar'); 
                $this->load->view('user/Kritik_saran/tambah' ,$data);
                $this->load->view('template_layanan/footer');  
            }
            else{
                $this->Kritik_saran_model->tambahDataSaran();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Kritik atau Saran Anda Berhasil Dikirim ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('user/Kritik', 'refresh');
            }
        }

        public function edit($id_saran){
            $this->load->library('form_validation');
            $data ['saran'] = $this->Kritik_saran_model->getSaran($id_saran);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar',$data);
                $this->load->view('template_layanan/topbar',$data); 
                $this->load->view('user/Kritik_saran/edit' ,$data);
                $this->load->view('template_layanan/footer',$data);
            }
            else{
                    $this->Kritik_saran_model->ubahSaran($id_saran);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                             Kritik atau Saran Berhasil Diedit !
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            </div>'
            );
                    redirect('user/Kritik','refresh');
            }
        }

        public function hapus($id_saran)
        {
            if($this->Kritik_saran_model->hapusData($id_saran) == false)
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
                redirect('user/Kritik');
            }else{
                $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
                redirect('user/Kritik','refresh');
            }
           
        }


    }
        /* End of fils admin.php */
?>