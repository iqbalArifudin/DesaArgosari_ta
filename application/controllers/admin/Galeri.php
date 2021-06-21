<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        $this->load->model('Galeri_model');
        $this->load->model('Penduduk_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['galeri'] = $this->Galeri_model->tampilGaleri();
        // $data['berita'] = $this->db->get('berita')->result();
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/galeri/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function tambahgaleri(){
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['galeri'] = $this->Galeri_model->tampilGaleri();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar');
                $this->load->view('template admin/topbar'); 
                $this->load->view('admin/galeri/tambah' ,$data);
                $this->load->view('template admin/footer');  
            }
            else{
            $upload = $this->Galeri_model->upload();
                if ($upload['result'] == 'success'){
                $this->Galeri_model->tambahGaleri($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('admin/Galeri', 'refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_galeri)
        {
        if ($this->Galeri_model->hapus($id_galeri) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/galeri');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('admin/Galeri', 'refresh');
            }
           
        }

        public function edit($id_galeri)
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['galeri'] = $this->Galeri_model->getGaleri($id_galeri);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/galeri/edit',$data);
                $this->load->view('template admin/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/galeri/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_file = $data['gaeleri']['foto'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/galeri/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_berita = $this->input->post('id_galeri');
            $keterangan = $this->input->post('keterangan');
            $tanggal = $this->input->post('tanggal');

            $this->db->set('keterangan', $keterangan);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id_galeri', $id_galeri);
            $this->db->update('galeri');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/Galeri');
        }
    }
    
        public function detail($id_galeri){
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['galeri'] = $this->Galeri_model->getDetail($id_galeri);
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/galeri/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 

    }
        /* End of fils admin.php */
?>