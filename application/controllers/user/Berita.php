<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        // $this->load->model('admin/user/user_model');
    }

    public function index()
    {
        // load view admin/overview.php
        $data['title'] = 'Halaman User';
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['berita'] = $this->Berita_model->tampilBerita();
        $data['pegawai'] = $this->Pegawai_model->tampilPegawai();
        $this->load->view('template user/header', $data);
        $this->load->view('user/Berita', $data);
        $this->load->view('template user/footer', $data);
    }

    public function detail($id_berita)
    {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['berita'] = $this->Berita_model->getDetail($id_berita);
        $this->load->view('template user/header', $data);
        $this->load->view('user/Detail_berita', $data);
        $this->load->view('template user/footer', $data);
    } 
}
        /* End of fils konsep.php */