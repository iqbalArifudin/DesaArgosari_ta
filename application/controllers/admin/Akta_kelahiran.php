<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Akta_kelahiran extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Akta_kelahiran_model');
        $this->load->library('pdf'); 
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->Akta_kelahiran_model->tampilAll();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Pelayanan/Akta_kelahiran/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function hapus($id_akta)
        {
        if ($this->Akta_kelahiran_model->hapusData($id_akta) == false)
            {
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
            redirect('admin/Akta_kelahiran');
            }else{
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
            redirect('admin/Akta_kelahiran', 'refresh');
            } 
        }

        public function edit($id_akta){
            $this->load->library('form_validation');
        $data['akta'] = $this->Akta_kelahiran_model->getAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/Pelayanan/Akta_kelahiran/detail' ,$data);
                $this->load->view('template admin/footer',$data);
            }
            else{
            $this->Akta_kelahiran_model->ubahDataAktaAdmin($id_akta);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
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
            redirect('admin/Akta_kelahiran', 'refresh');
            }
        }
    
        public function detail($id_akta){
        $data['akta'] = $this->Akta_kelahiran_model->getDetailAkta($id_akta);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/Pelayanan/Akta_kelahiran/detail' ,$data);
        $this->load->view('template admin/footer');
    }

    public function pdf()
    {
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat Pengantar Akta.pdf";
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->load_view('admin/Pelayanan/Akta_kelahiran/surat_akta_pdf');
    }


    }
        /* End of fils admin.php */