<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Profil extends CI_Controller {
    
        
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
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Profil',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function profil($id_penduduk){
        $data['penduduk'] = $this->Penduduk_model->getDetail($id_penduduk);
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/Profil' ,$data);
            $this->load->view('template admin/footer'); 
        }
        
        public function edit($id_penduduk)
        {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->Penduduk_model->getPenduduk($id_penduduk);
            $this->form_validation->set_rules('NIK', 'NIK', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar');
                $this->load->view('template admin/topbar'); 
                $this->load->view('admin/Edit_profil' ,$data);
                $this->load->view('template admin/footer'); 
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
                        $this->db->set('foto', $new_file);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

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
                redirect('admin/Profil');
            }
        }

    public function changePassword()
    {
        $data['penduduk1'] = $this->db->get_where('penduduk', ['id_penduduk' => $this->session->userdata('id_penduduk')])->row_array();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('password', 'Current password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template admin/header', $data);
            $this->load->view('template admin/sidebar', $data);
            $this->load->view('template admin/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('template admin/footer', $data);
        } else {
            $password = $this->input->post('password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($password, $data['penduduk1']['password'])) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Kata Sandi Salah ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('admin/Profil/changePassword');
            } else {
                if ($password == $new_password) {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Password Tidak boleh sama ! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('admin/Profil/changePassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('id_penduduk', $this->session->userdata('id_penduduk'));
                    $this->db->update('penduduk');
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                   Password Berhasil Di Ubah 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('admin/Profil/changePassword');
                }
            }
        }
    }
        

    }
        /* End of fils admin.php */
?>