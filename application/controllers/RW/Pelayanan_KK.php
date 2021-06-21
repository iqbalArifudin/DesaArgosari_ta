<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan_KK extends CI_Controller
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
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['kk'] = $this->KK_model->tampilKKRW();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar', $data);
        $this->load->view('template RW/topbar', $data);
        $this->load->view('RW/Pelayanan/KK/index', $data);
        $this->load->view('template RW/footer', $data);
    }

    public function hapus($id_kepala_kel)
    {
        if ($this->KK_model->hapusDataKK($id_kepala_kel) == false) {
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
            redirect('RW/Pelayanan_KK');
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
            redirect('RW/Pelayanan_KK', 'refresh');
        }
    }

    public function edit($id_kepala_kel)
    {
        $this->load->library('form_validation');
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        $this->form_validation->set_rules('status', 'status', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template RW/header', $data);
            $this->load->view('template RW/sidebar', $data);
            $this->load->view('template RW/topbar', $data);
            $this->load->view('RW/Pelayanan/KK/detail', $data);
            $this->load->view('template RW/footer', $data);
        } else {
            $this->KK_model->ubahKK($id_kepala_kel);
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
            redirect('RW/Pelayanan_KK', 'refresh');
        }
    }

    public function detail($id_kepala_kel)
    {
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar');
        $this->load->view('template RW/topbar');
        $this->load->view('RW/Pelayanan/KK/detail', $data);
        $this->load->view('template RW/footer');
    }
}
        /* End of fils RT.php */