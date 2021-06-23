<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Penduduk_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPenduduk();
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/penduduk/index',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function tambahpenduduk(){
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->tampilPenduduk();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('NIK', 'NIK', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar');
                $this->load->view('template pegawai/topbar'); 
                $this->load->view('pegawai/penduduk/tambah' ,$data);
                $this->load->view('template pegawai/footer');  
            }
            else{
            $upload = $this->Penduduk_model->upload();
                if ($upload['result'] == 'success'){
                $this->Penduduk_model->tambahPenduduk($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('pegawai/Penduduk', 'refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_penduduk)
        {
        if ($this->Penduduk_model->hapusDataPenduduk($id_penduduk) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
            redirect('pegawai/Penduduk');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('pegawai/Penduduk', 'refresh');
            }
           
        }

        public function edit($id_penduduk)
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->getPenduduk($id_penduduk);
        $this->form_validation->set_rules('NIK', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar',$data);
                $this->load->view('template pegawai/topbar',$data); 
                $this->load->view('pegawai/penduduk/edit',$data);
                $this->load->view('template pegawai/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_penduduk/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_file = $data['berita']['foto'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_penduduk/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto_penduduk', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_penduduk = $this->input->post('id_penduduk');
            $NIK = $this->input->post('NIK');
            $no_KK = $this->input->post('no_KK');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $agama = $this->input->post('agama');
            $status_perkawinan = $this->input->post('status_perkawinan');
            $pekerjaan = $this->input->post('pekerjaan');
            $gol_darah = $this->input->post('gol_darah');
            $alamat = $this->input->post('alamat');
            $RT = $this->input->post('RT');
            $RW = $this->input->post('RW');
            $desa = $this->input->post('desa');
            $password = $this->input->post('password');

            $this->db->set('NIK', $NIK);
            $this->db->set('no_KK', $no_KK);
            $this->db->set('nama', $nama);
            $this->db->set('tempat_lahir', $tempat_lahir);
            $this->db->set('tanggal_lahir', $tanggal_lahir);
            $this->db->set('agama', $agama);
            $this->db->set('status_perkawinan', $status_perkawinan);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('gol_darah', $gol_darah);
            $this->db->set('alamat', $alamat);
            $this->db->set('RT', $RT);
            $this->db->set('RW', $RW);
            $this->db->set('desa', $desa);
            $this->db->set('password', $password);
            $this->db->where('id_penduduk', $id_penduduk);
            $this->db->update('penduduk');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('pegawai/penduduk');
        }
    }
    
        public function detail($id_penduduk){
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->getDetail($id_penduduk);
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/penduduk/detail' ,$data);
            $this->load->view('template pegawai/footer'); 
        } 

    }
        /* End of fils pegawai.php */
?>