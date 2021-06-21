<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pengaduan extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Notif_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduan();
        $data['notifikasi'] = $this->Notif_model->tampilNotif();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Pengaduan/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function hapus($id_pengaduan)
        {
            if($this->Pengaduan_model->hapusDatapengaduan($id_pengaduan) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/Pengaduan');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('admin/Pengaduan','refresh');
            } 
        }

        public function edit($id_pengaduan){
            $this->load->library('form_validation');
            $data ['pengaduan'] = $this->Pengaduan_model->getPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');
            // $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/Pengaduan/edit' ,$data);
            }
            else{
                    $this->Pengaduan_model->ubahPengaduan($id_pengaduan);
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
            $text = 'Pengaduan Anda Diajukan Ke Kepala Desa';
            $this->Notif_model->tambahNotifPengaduan($text);
                    redirect('admin/Pengaduan','refresh');
            }
        }
    
        public function detail($id_pengaduan){
            $data['pengaduan']=$this->Pengaduan_model->getDetailPengaduan($id_pengaduan);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/Pengaduan/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 

    }
        /* End of fils admin.php */
?>