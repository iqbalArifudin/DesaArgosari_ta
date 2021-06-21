<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('penduduk_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman RT';
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RT/header', $data);
        $this->load->view('template RT/sidebar');
        $this->load->view('template RT/topbar');
        $this->load->view('RT/home', $data);
        $this->load->view('template RT/footer');
    }
}
        /* End of fils admin.php */