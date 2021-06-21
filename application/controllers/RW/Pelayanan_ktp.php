<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan_ktp extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Ktp_model');
    }

    public function index()
    {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['ktp'] = $this->Ktp_model->tampilKtpRW();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar', $data);
        $this->load->view('template RW/topbar', $data);
        $this->load->view('RW/Pelayanan/Ktp/index', $data);
        $this->load->view('template RW/footer', $data);
    }

    public function hapus($id_ktp)
    {
        if ($this->Ktp_model->hapusDataKtp($id_ktp) == false) {
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
            redirect('RW/Pelayanan_ktp');
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
            redirect('RW/Pelayanan_ktp', 'refresh');
        }
    }

    public function edit($id_ktp)
    {
        $this->load->library('form_validation');
        $data['ktp'] = $this->Ktp_model->getKtp($id_ktp);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('status', 'status', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template RW/header', $data);
            $this->load->view('template RW/sidebar', $data);
            $this->load->view('template RW/topbar', $data);
            $this->load->view('RW/Pelayanan/Ktp/detail', $data);
            $this->load->view('template RW/footer', $data);
        } else {
            $this->Ktp_model->ubahKtprw($id_ktp);
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
            redirect('RW/Pelayanan_ktp', 'refresh');
        }
    }

    public function detail($id_ktp)
    {
        $data['ktp'] = $this->Ktp_model->getDetailKtp($id_ktp);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar');
        $this->load->view('template RW/topbar');
        $this->load->view('RW/Pelayanan/Ktp/detail', $data);
        $this->load->view('template RW/footer');
    }
}
        /* End of fils RT.php */