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
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Kritik_saran/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

    }
        /* End of fils admin.php */
?>