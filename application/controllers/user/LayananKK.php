<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LayananKK extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pegawai_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Ktp_model');
        $this->load->model('KK_model');
    }

    public function index()
    {
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['kk1'] = $this->KK_model->tampilKK($this->session->userdata('id_penduduk'));
        $data['kk'] = $this->KK_model->tampilKel();
        $data['penduduk1'] = $this->Penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template_layanan/header', $data);
        $this->load->view('template_layanan/sidebar', $data);
        $this->load->view('template_layanan/topbar', $data);
        $this->load->view('user/Pelayanan/KK/index', $data);
        $this->load->view('template_layanan/footer', $data);
    }

    public function tambahKK()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $data['kk1'] = $this->KK_model->tampilKK($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar');
            $this->load->view('user/Pelayanan/KK/tambahkepala', $data);
            $this->load->view('template_layanan/footer', $data);
        } else {
            $upload = $this->KK_model->upload();
            $upload1 = $this->KK_model->upload1();
            $upload2 = $this->KK_model->upload2();
            $upload3 = $this->KK_model->upload3();
            $upload4 = $this->KK_model->upload4();
            if ($upload['result'] == 'success') {
                $this->KK_model->tambahKepalaKel($upload, $upload1, $upload2, $upload3, $upload4);
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data berhasil di tambahkan ! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('user/LayananKK', 'refresh');
            } else {
                echo $upload['error'];
            }
        }
    }

    public function tambahKel()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kel', 'nama_kel', 'required');
        $data['kk1'] = $this->KK_model->tampilKK($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar');
            $this->load->view('user/Pelayanan/KK/tambahkel', $data);
            $this->load->view('template_layanan/footer', $data);
        } else {
            // print_r($this->uri->segment(3));die;
            $this->KK_model->tambahDataKel($this->uri->segment(4));
            redirect('user/LayananKK/detail/' . $this->uri->segment(4), 'refresh');
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            echo "data berhasil ditambah";
        }
    }


    public function hapus($id_kepala_kel)
    {
        if ($this->KK_model->hapusDataKK($id_kepala_kel) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/LayananKK');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil di hapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/LayananKK', 'refresh');
        }
    }

    public function hapusKel($id_keluarga)
    {
        if ($this->KK_model->hapusDataKel($id_keluarga) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/LayananKK/edit/' . $this->uri->segment(4));
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil di hapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/LayananKK/edit/' . $this->uri->segment(4), 'refresh');
        }
    }

    public function edit($id_kepala_kel)
    {
        $data['kk1'] = $this->KK_model->getKK($id_kepala_kel);
        $data['keluarga'] = $this->KK_model->tampilKelsaja($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('nama_kpl', 'nama_kpl', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar', $data);
            $this->load->view('template_layanan/topbar', $data);
            $this->load->view('user/Pelayanan/KK/edit', $data);
            $this->load->view('template_layanan/footer', $data);
        } else {
            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['suratnikah_l']['name'];
            $upload_file1 = $_FILES['suratnikah_p']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_kk/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('suratnikah_l')) {
                    $old_file = $data['kepala_keluarga']['suratnikah_l'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_kk/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('suratnikah_l', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            } else if ($upload_file1) {
                $config['upload_path'] = './assets/foto_kk/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('suratnikah_p')) {
                    $old_file = $data['kepala_keluarga']['suratnikah_p'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_kk/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('suratnikah_p', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_kepala_kel = $this->input->post('id_kepala_kel');
            $nama_kpl = $this->input->post('nama_kpl');
            $NIK_kpl = $this->input->post('NIK_kpl');
            $alamat_kpl = $this->input->post('alamat_kpl');
            $kode_pos_kpl = $this->input->post('kode_pos_kpl');
            $RT_kpl = $this->input->post('RT_kpl');
            $RW_kpl = $this->input->post('RW_kpl');
            $provinsi_kpl = $this->input->post('provinsi_kpl');
            $kabupaten_kpl = $this->input->post('kabupaten_kpl');
            $kecamatan_kpl = $this->input->post('kecamatan_kpl');
            $kelurahan_kpl = $this->input->post('kelurahan_kpl');

            $this->db->set('nama_kpl', $nama_kpl);
            $this->db->set('NIK_kpl', $NIK_kpl);
            $this->db->set('alamat_kpl', $alamat_kpl);
            $this->db->set('kode_pos_kpl', $kode_pos_kpl);
            $this->db->set('RT_kpl', $RT_kpl);
            $this->db->set('RW_kpl', $RW_kpl);
            $this->db->set('provinsi_kpl', $provinsi_kpl);
            $this->db->set('kabupaten_kpl', $kabupaten_kpl);
            $this->db->set('kecamatan_kpl', $kecamatan_kpl);
            $this->db->set('kelurahan_kpl', $kelurahan_kpl);
            $this->db->where('id_kepala_kel', $id_kepala_kel);
            $this->db->update('kepala_keluarga');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('user/LayananKK');
        }
    }


    public function editKel($id_keluarga)
    {
        $this->load->library('form_validation');
        $data['kk1'] = $this->KK_model->tampilKK($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel($id_keluarga);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('nama_kel', 'nama_kel', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar', $data);
            $this->load->view('template_layanan/topbar', $data);
            $this->load->view('user/Pelayanan/KK/editKel', $data);
            $this->load->view('template_layanan/footer', $data);
        } else {
            $this->KK_model->ubahKeluarga($id_keluarga);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                         Kritik atau Saran Berhasil Diedit !
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
            );
            redirect('user/LayananKK/detailKel/' . $this->uri->segment(3), 'refresh');
        }
    }

    public function detail($id_kepala_kel)
    {
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        // $this->KK_model->getDetailKK($this->uri->segment(3));
        $this->load->view('template_layanan/header', $data);
        $this->load->view('template_layanan/sidebar');
        $this->load->view('template_layanan/topbar');
        $this->load->view('user/Pelayanan/KK/detail_kpl', $data);
        $this->load->view('template_layanan/footer');
    }

    public function detailKel($id_keluarga)
    {
        $data['kk1'] = $this->KK_model->getDetailKeluarga($id_keluarga);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $this->load->view('template_layanan/header', $data);
        $this->load->view('template_layanan/sidebar');
        $this->load->view('template_layanan/topbar');
        $this->load->view('user/Pelayanan/KK/detail_keluarga', $data);
        $this->load->view('template_layanan/footer');
    }

    public function detail_all($id_kepala_kel)
    {
        $data['kk'] = $this->KK_model->getDetailKK($id_kepala_kel);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['keluarga'] = $this->KK_model->tampilKel();
        $data['kepala'] = $this->KK_model->getTampilKepala($id_kepala_kel);
        $this->load->view('template_layanan/header', $data);
        $this->load->view('template_layanan/sidebar');
        $this->load->view('template_layanan/topbar');
        $this->load->view('user/Pelayanan/KK/detail_all', $data);
        $this->load->view('template_layanan/footer');
    }
}
        /* End of fils admin.php */