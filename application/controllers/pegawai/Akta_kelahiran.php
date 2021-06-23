<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akta_kelahiran extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Akta_kelahiran_model');
    }

    public function index()
    {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->Akta_kelahiran_model->tampilAktaPegawai();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template pegawai/header', $data);
        $this->load->view('template pegawai/sidebar', $data);
        $this->load->view('template pegawai/topbar', $data);
        $this->load->view('pegawai/Pelayanan/Akta_kelahiran/index', $data);
        $this->load->view('template pegawai/footer', $data);
    }

    public function hapus($id_akta)
    {
        if ($this->Akta_kelahiran_model->hapusData($id_akta) == false) {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Gagal Di hapus, Karena Data User di pakai ! 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>'
            );
            redirect('pegawai/Akta_kelahiran');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Berhasil Dihapus ! 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>'
            );
            redirect('pegawai/Akta_kelahiran', 'refresh');
        }
    }

    public function edit($id_akta)
    {
        $this->load->library('form_validation');
        $data['akta'] = $this->Akta_kelahiran_model->getAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template pegawai/header', $data);
            $this->load->view('template pegawai/sidebar', $data);
            $this->load->view('template pegawai/topbar', $data);
            $this->load->view('pegawai/Pelayanan/Akta_kelahiran/edit', $data);
            $this->load->view('template pegawai/footer', $data);
        } else {
            $this->Akta_kelahiran_model->ubahDataAktaPegawai($id_akta);
            $this->session->set_flashdata('pesan3', 'Data Berhasil Di edit');
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       Status Berhasil Diubah ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
            );
            redirect('pegawai/Akta_kelahiran', 'refresh');
        }
    }

    public function detail($id_akta)
    {
        $data['akta'] = $this->Akta_kelahiran_model->getDetailAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template pegawai/header', $data);
        $this->load->view('template pegawai/sidebar');
        $this->load->view('template pegawai/topbar');
        $this->load->view('pegawai/Pelayanan/Akta_kelahiran/detail', $data);
        $this->load->view('template pegawai/footer');
    }

    public function downloadkk($id_akta)
    {
        $this->load->helper('download');
        $fileinfo = $this->Akta_kelahiran_model->download($id_akta);
        $file = './assets/persyaratan_akta/' . $fileinfo['fc_kk'];
        force_download($file, NULL);
    }

    public function downloadktp_a($id_akta)
    {
        $this->load->helper('download');
        $fileinfo = $this->Akta_kelahiran_model->download($id_akta);
        $file = './assets/persyaratan_akta/' . $fileinfo['fc_ktp_ayah'];
        force_download($file, NULL);
    }

    public function downloadktp_i($id_akta)
    {
        $this->load->helper('download');
        $fileinfo = $this->Akta_kelahiran_model->download($id_akta);
        $file = './assets/persyaratan_akta/' . $fileinfo['fc_ktp_ibu'];
        // $file3 = './assets/persyaratan_akta/' . $fileinfo['fc_ktp_saksi'];
        force_download($file, NULL);
    }

    public function downloadktp_s($id_akta)
    {
        $this->load->helper('download');
        $fileinfo = $this->Akta_kelahiran_model->download($id_akta);
        $file = './assets/persyaratan_akta/' . $fileinfo['fc_ktp_saksi'];
        force_download($file, NULL);
    }

    public function downloadktp_sk($id_akta)
    {
        $this->load->helper('download');
        $fileinfo = $this->Akta_kelahiran_model->download($id_akta);
        $file = './assets/persyaratan_akta/' . $fileinfo['surat_kelahiran'];
        force_download($file, NULL);
    }
}
        /* End of fils admin.php */