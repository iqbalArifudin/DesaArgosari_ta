<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pelayanan_ktp extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');
        $this->load->model('Penduduk_model'); 
            $this->load->model('Ktp_model');  
            $this->load->library('pdf');
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['ktp'] = $this->Ktp_model->tampilKtpPegawai();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/Pelayanan/Ktp/index',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function hapus($id_ktp)
        {
            if($this->Ktp_model->hapusDataKtp($id_ktp) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('pegawai/Pelayanan_ktp');
            }else{
                $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                   Data Berhasil Di Hapus ! 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>'
            );
                redirect('pegawai/Pelayanan_ktp','refresh');
            } 
        }

        public function edit($id_ktp){
            $this->load->library('form_validation');
            $data ['ktp'] = $this->Ktp_model->getKtp($id_ktp);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');
            // $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar',$data);
                $this->load->view('template pegawai/topbar',$data); 
                $this->load->view('pegawai/Pelayanan/Ktp/edit' ,$data);
                $this->load->view('template pegawai/footer',$data);
            }
            else{
            $this->Ktp_model->ubahKtpPegawai($id_ktp);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                               Status Berhasil Di Update ! 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>'
            );
                    redirect('pegawai/Pelayanan_ktp','refresh');
            }
        }
    
        public function detail($id_ktp){
            $data['ktp']=$this->Ktp_model->getDetailKtp($id_ktp);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/Pelayanan/Ktp/detail' ,$data);
            $this->load->view('template pegawai/footer'); 
        } 
        public function download($id_ktp){
            $this->load->helper('download');
            $fileinfo = $this->Ktp_model->download($id_ktp);
            $file = './assets/foto_ktp/'.$fileinfo['fc_kk'];
            force_download($file, NULL);
        }

    public function download1($id_ktp)
    {
        $this->load->helper('download');
        $fileinfo = $this->Ktp_model->download($id_ktp);
        $file = './assets/foto_ktp/' . $fileinfo['surat_rt_rw'];
        force_download($file, NULL);
    }

        public function pdf()
    {
    
        $data['ktp'] = $this->Ktp_model->tampilKtp();
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat Pengantar KTP.pdf"; 
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->load_view('pegawai/Pelayanan/Ktp/surat_ktp_pdf', $data);	
    }

    }
        /* End of fils admin.php */
    

?>