<?php

defined('BASEPATH') or exit('No direct script access allowed');

class akta_kelahiran extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('akta_kelahiran_model');
    }

    public function index()
    {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->akta_kelahiran_model->tampilAll();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template RT/header', $data);
        $this->load->view('template RT/sidebar', $data);
        $this->load->view('template RT/topbar', $data);
        $this->load->view('RT/Pelayanan/Akta_kelahiran/index', $data);
        $this->load->view('template RT/footer', $data);
    }

    public function hapus($id_akta)
    {
        if ($this->akta_kelahiran_model->hapusData($id_akta) == false) {
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
            redirect('RT/akta_kelahiran');
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
            redirect('RT/Akta_kelahiran', 'refresh');
        }
    }

    public function edit($id_akta)
    {
        $this->load->library('form_validation');
        $data['akta'] = $this->akta_kelahiran_model->getAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('status', 'status', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template RT/header', $data);
            $this->load->view('template RT/sidebar', $data);
            $this->load->view('template RT/topbar', $data);
            $this->load->view('RT/Pelayanan/Akta_kelahiran/detail', $data);
            $this->load->view('template RT/footer', $data);
        } else {
            $this->akta_kelahiran_model->ubahDataAkta($id_akta);
            $this->session->set_flashdata('pesan3', 'Data Berhasil Di edit');
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       Data Telah Di update ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
            );
            redirect('RT/Akta_kelahiran', 'refresh');
        }
    }

    public function detail($id_akta)
    {
        $data['akta'] = $this->akta_kelahiran_model->getDetailAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RT/header', $data);
        $this->load->view('template RT/sidebar');
        $this->load->view('template RT/topbar');
        $this->load->view('RT/Pelayanan/Akta_kelahiran/detail', $data);
        $this->load->view('template RT/footer');
    }
}
        /* End of fils RT.php */