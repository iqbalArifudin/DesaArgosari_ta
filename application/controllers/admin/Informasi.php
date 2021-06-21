<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Informasi_model');
    }

    public function index()
    {
        $data['informasi'] = $this->Informasi_model->tampilInformasi();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template admin/header', $data);
        $this->load->view('template admin/sidebar', $data);
        $this->load->view('template admin/topbar', $data);
        $this->load->view('admin/Informasi/index', $data);
        $this->load->view('template admin/footer', $data);
    }

    public function tambahInformasi()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['informasi'] = $this->Informasi_model->tampilInformasi();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header', $data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar');
            $this->load->view('admin/Informasi/tambah', $data);
            $this->load->view('template admin/footer');
        } else {
            $this->Informasi_model->tambahInformasi();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Kritik atau Saran Anda Berhasil Dikirim ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/Informasi', 'refresh');
        }
    }

    public function edit($id_informasi)
    {
        $this->load->library('form_validation');
        $data['informasi'] = $this->Informasi_model->getInformasi($id_informasi);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header', $data);
            $this->load->view('template admin/sidebar', $data);
            $this->load->view('template admin/topbar', $data);
            $this->load->view('admin/Informasi/edit', $data);
            $this->load->view('template admin/footer', $data);
        } else {
            $this->Informasi_model->ubahInformasi($id_informasi);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                             Kritik atau Saran Berhasil Diedit !
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            </div>'
            );
            redirect('admin/Informasi', 'refresh');
        }
    }

    public function hapus($id_informasi)
    {
        if ($this->Informasi_model->hapusData($id_informasi) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('admin/Informasi');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('admin/Informasi', 'refresh');
        }
    }
}
        /* End of fils admin.php */