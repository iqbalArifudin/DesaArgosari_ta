<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KK_model extends CI_Model
{

    public function tampilKK()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tampilKK_all()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tampilKel()
    {
        $this->db->select('keluarga.*, kepala_keluarga.*');
        $this->db->join('kepala_keluarga', 'keluarga.id_kepala_kel = kepala_keluarga.id_kepala_kel');
        return $this->db->get('keluarga')->result();
    }

    public function tampilKelsaja($id_kepala_kel)
    {
        $this->db->select('keluarga.*, kepala_keluarga.*');
        $this->db->join('kepala_keluarga', 'keluarga.id_kepala_kel = kepala_keluarga.id_kepala_kel');
        $this->db->where('kepala_keluarga.id_kepala_kel', $id_kepala_kel);
        return $this->db->get('keluarga')->result();
    }

    public function tampilKKPegawai()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        $this->db->where('status !=', 'Diajukan Ke Ketua RW');
        $this->db->where('status !=', 'Diajukan Ke Pelayanan');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tampilKKAdmin()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        $this->db->where('status !=', 'Ditolak');
        $this->db->where('status !=', 'Diajukan Ke Ketua RW');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tampilKKRW()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tambahKepalaKel($upload, $upload1, $upload2, $upload3, $upload4)
    {
        $data = [
            'id_kepala_kel' => $this->input->post('id_kepala_kel', true),
            'id_penduduk' => $this->session->userdata('id_penduduk'),
            'nama_kpl' => $this->input->post('nama_kpl', true),
            'NIK_kpl' => $this->input->post('NIK_kpl', true),
            'alamat_kpl' => $this->input->post('alamat_kpl', true),
            'kode_pos_kpl' => $this->input->post('kode_pos_kpl', true),
            'RT_kpl' => $this->input->post('RT_kpl', true),
            'RW_kpl' => $this->input->post('RW_kpl', true),
            'provinsi_kpl' => $this->input->post('provinsi_kpl', true),
            'kabupaten_kpl' => $this->input->post('kabupaten_kpl', true),
            'kecamatan_kpl' => $this->input->post('kecamatan_kpl', true),
            'kelurahan_kpl' => $this->input->post('kelurahan_kpl', true),
            'suratnikah_l' => $upload['file']['file_name'],
            'suratnikah_p' => $upload1['file']['file_name'],
            'kk1' => $upload2['file']['file_name'],
            'kk2' => $upload3['file']['file_name'],
            'surat_rt_rw' => $upload4['file']['file_name'],
            'status' => 'Diajukan',
            'alasan' => 'Belum Diterima',

        ];
        $this->db->insert('kepala_keluarga', $data);
    }

    public function tambahDataKel($id)
    {
        $data = [
            // 'id_keluarga' => $this->input->post('id_keluarga', true),
            'id_kepala_kel' => $id,
            'NIK_kel' => $this->input->post('NIK_kel', true),
            'nama_kel' => $this->input->post('nama_kel', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'agama' => $this->input->post('agama', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'pendidikan' => $this->input->post('pendidikan', true),
        ];
        $this->db->insert('keluarga', $data);
    }

    public function upload()
    {
        $config['upload_path'] = './assets/foto_kk/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('suratnikah_l')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function upload1()
    {
        $config['upload_path'] = './assets/foto_kk/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('suratnikah_p')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function upload2()
    {
        $config['upload_path'] = './assets/foto_kk/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kk1')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function upload3()
    {
        $config['upload_path'] = './assets/foto_kk/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kk2')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function upload4()
    {
        $config['upload_path'] = './assets/foto_kk/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('surat_rt_rw')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function ubahKeluarga($id_keluarga)
    {
        $data = [
            'id_keluarga' => $this->input->post('id_keluarga', true),
            'NIK_kel' => $this->input->post('NIK_kel', true),
            'nama_kel' => $this->input->post('nama_kel', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'agama' => $this->input->post('agama', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'pendidikan' => $this->input->post('pendidikan', true),
        ];
        $this->db->where('id_keluarga', $id_keluarga);
        $this->db->update('keluarga', $data);
    }

    public function hapusDataKK($id_kepala_kel)
    {
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        if (
            $this->db->delete('kepala_keluarga')
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function hapusDataKel($id_keluarga)
    {
        $this->db->where('id_keluarga', $id_keluarga);
        if (
            $this->db->delete('keluarga')
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function ubahKK($id_kepala_kel)
    {
        $data = [
            'status' => $this->input->post('status', true),
            'alasan' => $this->input->post('alasan', true),
        ];
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        $this->db->update('kepala_keluarga', $data);
    }

    public function ubahDataKK($id_kepala_kel)
    {
        $data = [
            'status' => $this->input->post('status', true),
            'alasan' => $this->input->post('alasan', true),
        ];
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        $this->db->update('kepala_keluarga', $data);
    }



    public function getKK($id_kepala_kel)
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        return $this->db->get('kepala_keluarga')->result();
    }


    public function getDetailKeluarga($id_keluarga)
    {
        $this->db->select('keluarga.*, kepala_keluarga.*');
        $this->db->join('kepala_keluarga', 'keluarga.id_kepala_kel = kepala_keluarga.id_kepala_kel');
        $this->db->where('id_keluarga', $id_keluarga);
        return $this->db->get('keluarga')->result();
    }

    public function getDetailKK($id_kepala_kel)
    {
        $this->db->select('keluarga.*, penduduk.*,  kepala_keluarga.*');
        $this->db->join('kepala_keluarga', 'keluarga.id_kepala_kel = kepala_keluarga.id_kepala_kel');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('keluarga.id_kepala_kel', $id_kepala_kel);
        return $this->db->get('keluarga')->result();
    }


    public function getTampilKepala($id_kepala_kel)
    {
        $this->db->select('kepala_keluarga.*, penduduk.*');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        return $this->db->get('kepala_keluarga')->result();
    }

    public function download($id_kepala_kel)
    {
        $query = $this->db->get_where('kepala_keluarga', array('id_kepala_kel' => $id_kepala_kel));
        return $query->row_array();
    }
}