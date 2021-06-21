<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PelayananKK extends CI_Controller
{


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
        $data['kk'] = $this->KK_model->tampilKKPegawai();
        $this->load->view('template pegawai/header', $data);
        $this->load->view('template pegawai/sidebar');
        $this->load->view('template pegawai/topbar');
        $this->load->view('pegawai/Pelayanan/KK/index', $data);
        $this->load->view('template pegawai/footer');
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
            $this->load->view('template pegawai/header', $data);
            $this->load->view('template pegawai/sidebar', $data);
            $this->load->view('template pegawai/topbar', $data);
            $this->load->view('pegawai/Pelayanan/KK/edit', $data);
            $this->load->view('template pegawai/footer', $data);
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
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        $this->load->view('template pegawai/header', $data);
        $this->load->view('template pegawai/sidebar');
        $this->load->view('template pegawai/topbar');
        $this->load->view('pegawai/Pelayanan/KK/detail', $data);
        $this->load->view('template pegawai/footer');
    }

    public function download($id_kepala_kel)
    {
        $this->load->helper('download');
        $fileinfo = $this->KK_model->download($id_kepala_kel);
        $file = './assets/foto_kk/' . $fileinfo['surat_rt_rw'];
        force_download($file, NULL);
    }

    public function download1($id_kepala_kel)
    {
        $this->load->helper('download');
        $fileinfo = $this->KK_model->download($id_kepala_kel);
        $file = './assets/foto_kk/' . $fileinfo['suratnikah_l'];
        force_download($file, NULL);
    }

    public function download2($id_kepala_kel)
    {
        $this->load->helper('download');
        $fileinfo = $this->KK_model->download($id_kepala_kel);
        $file = './assets/foto_kk/' . $fileinfo['suratnikah_p'];
        force_download($file, NULL);
    }

    public function download3($id_kepala_kel)
    {
        $this->load->helper('download');
        $fileinfo = $this->KK_model->download($id_kepala_kel);
        $file = './assets/foto_kk/' . $fileinfo['kk1'];
        force_download($file, NULL);
    }

    public function download4($id_kepala_kel)
    {
        $this->load->helper('download');
        $fileinfo = $this->KK_model->download($id_kepala_kel);
        $file = './assets/foto_kk/' . $fileinfo['kk1'];
        force_download($file, NULL);
    }
}
        /* End of fils admin.php */