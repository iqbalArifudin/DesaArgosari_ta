<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akta_kelahiran_model extends CI_Model
{

    public function tampilAll()
    {
        $this->db->select('akta_kelahiran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'akta_kelahiran.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('akta_kelahiran')->result();
    }

    public function tampilAkta($id_penduduk){
        $this->db->select('akta_kelahiran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'akta_kelahiran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('akta_kelahiran.id_penduduk', $id_penduduk);
        return $this->db->get('akta_kelahiran')->result();
    }
    public function tampilAktaPegawai()
    {
        $this->db->select('akta_kelahiran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'akta_kelahiran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        return $this->db->get('akta_kelahiran')->result();
    }


    public function tambahAkta($upload, $upload1, $upload2, $upload3, $upload4,  $upload5)
    {

        // data notifikasi
        $dataNotif  = array(

            'akses'         => "RT",
            'id_penduduk'   => $this->session->userdata('id_penduduk'),
            'id_ktp'        => $this->input->post('id_ktp', true),
            'text'          => "Pengajuan Akta Kelahiran baru",
        );

		$data=[
            'id_akta'=>$this->input->post('id_akta', true),
            'id_penduduk'=>$this->session->userdata('id_penduduk'),
            'nama_akta'=>$this->input->post('nama_akta', true),
            'tempat_lahir_akta' => $this->input->post('tempat_lahir_akta', true),
            'tanggal_lahir_akta' => $this->input->post('tanggal_lahir_akta', true),
            'fc_kk'=>$upload['file']['file_name'],
            'fc_ktp_saksi'=>$upload1['file']['file_name'],
            'fc_ktp_ayah'=>$upload2['file']['file_name'],
            'fc_ktp_ibu'=>$upload3['file']['file_name'],
            'surat_kelahiran' => $upload4['file']['file_name'],
            'surat_rt_rw' => $upload5['file']['file_name'],
            'status'=>'Diajukan',
            'keterangan'=>$this->input->post('keterangan', true),
            'alasan'=>'Belum Diterima',
		];
	$this->db->insert('akta_kelahiran', $data);
        // buat notifikasi 
        $judul      = "Pengajuan Akta Kelahiran Baru";
        $deskripsi  = "Terdapat pengajuan Akta Kelahiran baru pada " . date('d F Y H.i A');
        $hak_aksestujuan = "RT";

        insertDataNotifikasi(
            $judul,
            $deskripsi,
            $dataNotif,
            $hak_aksestujuan
        );
    }
    
    public function upload(){    
        $config['upload_path'] = './assets/persyaratan_akta/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fc_kk')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function upload1(){    
        $config['upload_path'] = './assets/persyaratan_akta/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fc_ktp_saksi')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function upload2(){    
        $config['upload_path'] = './assets/persyaratan_akta/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fc_ktp_ayah')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function upload3(){    
        $config['upload_path'] = './assets/persyaratan_akta/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fc_ktp_ibu')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function upload4()
    {
        $config['upload_path'] = './assets/persyaratan_akta/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('surat_kelahiran')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function upload5()
    {
        $config['upload_path'] = './assets/persyaratan_akta/';
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

   
    public function hapusData($id_akta)
	{
        $this->db->where('id_akta', $id_akta);
        if(
            $this->db->delete('akta_kelahiran')
        ){
            return true;
        }else{
            return false;
        }
    }

    public function ubahDataAkta($id_akta)
    {

        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('akta_kelahiran', ['id_akta' => $id_akta])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_akta'        => $this->input->post('id_akta', true),
            'text'          => "Pelayanan Akta Kelahiran " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan Akta Kelahiran";
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
                'id_akta'        => $this->input->post('id_akta', true),
                'text'          => 'Pengajuan Akta Kelahiran baru',
            );

            // buat notifikasi 
            $judulRW      = "Pengajuan Akta Kelahiran";
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
        $this->db->where('id_akta', $id_akta);
        $this->db->update('akta_kelahiran', $data);
    }

    public function ubahDataAktarw($id_akta)
    {

        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('akta_kelahiran', ['id_akta' => $id_akta])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_akta'        => $this->input->post('id_akta', true),
            'text'          => "Pelayanan Akta Kelahiran " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan Akta Kelahiran";
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
                'id_akta'        => $this->input->post('id_akta', true),
                'text'          => 'Pengajuan Akta Kelahiran baru',
            );

            // buat notifikasi 
            $judulAdmin     = "Pengajuan Akta Kelahiran";
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
        $this->db->where('id_akta', $id_akta);
        $this->db->update('akta_kelahiran', $data);
    }

    public function ubahDataAktaAdmin($id_akta)
    {

        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('akta_kelahiran', ['id_akta' => $id_akta])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_akta'        => $this->input->post('id_akta', true),
            'text'          => "Pelayanan Akta Kelahiran " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan Akta Kelahiran";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Diajukan Ke Kepala Desa"
        ) {


            // buat notifikasi untuk RW
            $dataNotifPegawai  = array(

                'akses'         => "Pegawai", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_akta'        => $this->input->post('id_akta', true),
                'text'          => 'Pengajuan Akta Kelahiran baru',
            );

            // buat notifikasi 
            $judulPegawai    = "Pengajuan Akta Kelahiran";
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
        $this->db->where('id_akta', $id_akta);
        $this->db->update('akta_kelahiran', $data);
    }

    public function ubahDataAktaPegawai($id_akta)
    {

        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('akta_kelahiran', ['id_akta' => $id_akta])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_akta'        => $this->input->post('id_akta', true),
            'text'          => "Pelayanan Akta Kelahiran " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengajuan Akta Kelahiran";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);



        // notifikasi untuk RW (dengan catatan status di acc)
        if (
            $status == "Disetujui"
        ) {


            // buat notifikasi untuk RW
            $dataNotifPegawai  = array(

                'akses'         => "Admin", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_akta'        => $this->input->post('id_akta', true),
                'text'          => 'Pelayanan Akta Kelahiran Disetujui',
            );

            // buat notifikasi 
            $judulPegawai    = "Pengajuan Akta Kelahiran";
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
        $this->db->where('id_akta', $id_akta);
        $this->db->update('akta_kelahiran', $data);
    }

    public function getAkta($id_akta){  
        $this->db->select('akta_kelahiran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'akta_kelahiran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_akta', $id_akta);
        return $this->db->get('akta_kelahiran')->result();
    }
    
    public function getDetailAkta($id_akta){
        $this->db->select('akta_kelahiran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'akta_kelahiran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_akta', $id_akta);
        return $this->db->get('akta_kelahiran')->result();
    }

    public function download($id_akta){
        $query = $this->db->get_where('akta_kelahiran',array('id_akta'=>$id_akta));
        return $query->row_array();
    }
    
}    