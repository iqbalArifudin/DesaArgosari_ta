<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KK_model extends CI_Model
{

    public function tampilKK($id_penduduk)
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->where('kepala_keluarga.id_penduduk', $id_penduduk);
        $this->db->order_by('tgl_mengajukan', 'DESC');
        return $this->db->get('kepala_keluarga')->result();
    }

    public function tampilKK_all()
    {
        $this->db->select('kepala_keluarga.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kepala_keluarga.id_penduduk = penduduk.id_penduduk');
        $this->db->order_by('tgl_mengajukan', 'DESC');
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
        // data notifikasi
        $dataNotif  = array(

            'akses'         => "RT",
            'id_penduduk'   => $this->session->userdata('id_penduduk'),
            'id_kepala_kel' => $this->input->post('id_kepala_kel', true),
            'text'          => "Pengajuan KK baru",
        );


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
        // buat notifikasi 
        $judul      = "Pengajuan KK Baru";
        $deskripsi  = "Terdapat pengajuan KK baru pada " . date('d F Y H.i A');
        $hak_aksestujuan = "RT";

        insertDataNotifikasi(
            $judul,
            $deskripsi,
            $dataNotif,
            $hak_aksestujuan
        );
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
        // $data = [
        //     'status' => $this->input->post('status', true),
        //     'alasan' => $this->input->post('alasan', true),
        // ];
        // $this->db->where('id_kepala_kel', $id_kepala_kel);
        // $this->db->update('kepala_keluarga', $data);


        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKKById = $this->db->get_where('kepala_keluarga', ['id_kepala_kel' => $id_kepala_kel])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKKById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_kepala_kel'        => $this->input->post('id_kepala_kel', true),
            'text'          => "Pelayanan KK " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan KK";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Diajukan Ke Ketua RW"
        ) {


            // buat notifikasi untuk RW
            $dataNotifRW  = array(

                'akses'         => "RW", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_ktp'        => $this->input->post('id_ktp', true),
                'text'          => 'Pengajuan KK baru',
            );

            // buat notifikasi 
            $judulRW      = "Pengajuan KTP";
            $deskripsiRW  = "Status " . $status;

            $hak_aksestujuanRW = "RW";
            $event = $hak_aksestujuanRW;

            insertDataNotifikasi($judulRW, $deskripsiRW, $dataNotifRW, $event);
        }


        // - - - - - - - - - -
        $data = [
            'status' => $status,
            'alasan' => $alasan,
        ];
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        $this->db->update('kepala_keluarga', $data);
    }

    public function ubahKKrw($id_kepala_kel)
    {
        // $data = [
        //     'status' => $this->input->post('status', true),
        //     'alasan' => $this->input->post('alasan', true),
        // ];
        // $this->db->where('id_kepala_kel', $id_kepala_kel);
        // $this->db->update('kepala_keluarga', $data);


        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKKById = $this->db->get_where('kepala_keluarga', ['id_kepala_kel' => $id_kepala_kel])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKKById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_kepala_kel'        => $this->input->post('id_kepala_kel', true),
            'text'          => "Pelayanan KK " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan KK";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Diajukan Ke Pelayanan"
        ) {


            // buat notifikasi untuk RW
            $dataNotifAdmin  = array(

                'akses'         => "Admin", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_ktp'        => $this->input->post('id_ktp', true),
                'text'          => 'Pengajuan KK baru',
            );

            // buat notifikasi 
            $judulAdmin      = "Pengajuan KTP";
            $deskripsiAdmin  = "Status " . $status;

            $hak_aksestujuanAdmin = "Admin";
            $event = $hak_aksestujuanAdmin;

            insertDataNotifikasi($judulAdmin, $deskripsiAdmin, $dataNotifAdmin, $event);
        }


        // - - - - - - - - - -
        $data = [
            'status' => $status,
            'alasan' => $alasan,
        ];
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        $this->db->update('kepala_keluarga', $data);
    }

    public function ubahDataKKAdmin($id_kepala_kel)
    {
        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKKById = $this->db->get_where('kepala_keluarga', ['id_kepala_kel' => $id_kepala_kel])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKKById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_kepala_kel'        => $this->input->post('id_kepala_kel', true),
            'text'          => "Pelayanan KK " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan KK";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Diajukan Ke Kepala Desa"
        ) {


            // buat notifikasi untuk RW
            $dataNotifPegawai = array(

                'akses'         => "Pegawai", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_ktp'        => $this->input->post('id_ktp', true),
                'text'          => 'Pengajuan KK baru',
            );

            // buat notifikasi 
            $judulPegawai     = "Pengajuan KTP";
            $deskripsiPegawai  = "Status " . $status;

            $hak_aksestujuanPegawai = "Pegawai";
            $event = $hak_aksestujuanPegawai;

            insertDataNotifikasi($judulPegawai, $deskripsiPegawai, $dataNotifPegawai, $event);
        }


        // - - - - - - - - - -
        $data = [
            'status' => $status,
            'alasan' => $alasan,
        ];
        $this->db->where('id_kepala_kel', $id_kepala_kel);
        $this->db->update('kepala_keluarga', $data);
    }

    public function ubahDataKKPegawai($id_kepala_kel)
    {
        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKKById = $this->db->get_where('kepala_keluarga', ['id_kepala_kel' => $id_kepala_kel])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKKById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_kepala_kel'        => $this->input->post('id_kepala_kel', true),
            'text'          => "Pelayanan KK " . $status . "Kepala Desa",
        );

        // buat notifikasi 
        $judul      = "Pengajuan KK";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Disetujui"
        ) {


            // buat notifikasi untuk RW
            $dataNotifStj = array(

                'akses'         => "Admin", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_ktp'        => $this->input->post('id_ktp', true),
                'text'          => 'Pelayanan KK Disetujui',
            );

            // buat notifikasi 
            $judulStj     = "Layanan KK";
            $deskripsiStj  = "Status " . $status;

            $hak_aksestujuanStj = "Admin";
            $event = $hak_aksestujuanStj;

            insertDataNotifikasi($judulStj, $deskripsiStj, $dataNotifStj, $event);
        }


        // - - - - - - - - - -
        $data = [
            'status' => $status,
            'alasan' => $alasan,
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