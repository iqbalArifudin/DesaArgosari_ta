<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
        $data['title'] = 'Halaman RW';
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar');
        $this->load->view('template RW/topbar');
        $this->load->view('RW/home', $data);
        $this->load->view('template RW/footer');
    }
}
        /* End of fils admin.php */