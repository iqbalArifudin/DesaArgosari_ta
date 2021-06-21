<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pelayanan_kk extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('KK_model'); 
        }
        
        public function index()
        {
            $data['title'] = 'Halaman Admin';
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['kk'] = $this->KK_model->tampilKKAdmin();
           $this->load->view('template admin/header',$data);
           $this->load->view('template admin/sidebar');
           $this->load->view('template admin/topbar'); 
           $this->load->view('admin/Pelayanan/KK/index', $data);
           $this->load->view('template admin/footer');   
        }

    public function edit($id_kepala_kel)
    {
        $this->load->library('form_validation');
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header', $data);
            $this->load->view('template admin/sidebar', $data);
            $this->load->view('template admin/topbar', $data);
            $this->load->view('admin/Pelayanan/KK/detail', $data);
            $this->load->view('template admin/footer', $data);
        } else {
            $this->KK_model->ubahDataKK($id_kepala_kel);
            $this->session->set_flashdata('pesan3', 'Data Berhasil Di edit');
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       Data Telah Diajukan Ke Kepala Desa ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
            );
            redirect('admin/Pelayanan_kk', 'refresh');
        }
    }

    public function detail($id_kepala_kel)
    {
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $this->load->view('template admin/header', $data);
        $this->load->view('template admin/sidebar');
        $this->load->view('template admin/topbar');
        $this->load->view('admin/Pelayanan/KK/detail', $data);
        $this->load->view('template admin/footer');
    } 

    }
        /* End of fils admin.php */
    

?>