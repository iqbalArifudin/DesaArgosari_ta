<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
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
            $data['title'] = 'Halaman Pegawai';
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
           $this->load->view('template pegawai/header',$data);
           $this->load->view('template pegawai/sidebar');
           $this->load->view('template pegawai/topbar'); 
           $this->load->view('pegawai/home', $data);
           $this->load->view('template pegawai/footer');   
        }

        public function chart(){
            
        }

    }
        /* End of fils admin.php */
    

?>