<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_model extends CI_Model {

    public function tampilPengaduan()
    {
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('pengaduan')->result();
    }

    public function tampilJenisPengaduan()
    {
          $pengaduansaja = 'pengaduan';
        $query = $this->db->order_by('id_pengaduan', 'DESC')->get_where('pengaduan', array('jenis_pengaduan' => $pengaduansaja));
            return $query->result();
    }

    public function tampilPengaduanPenduduk($id_penduduk){
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('pengaduan.id_penduduk', $id_penduduk);
        return $this->db->get('pengaduan')->result();
    }

    public function tampilPengaduanPegawai()
    {
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        return $this->db->get('pengaduan')->result();
    }

    public function tambahDataPengaduan($upload){
        // data notifikasi
        $dataNotif  = array(

            'akses'         => "Admin",
            'id_penduduk'   => $this->session->userdata('id_penduduk'),
            'id_pengaduan'        => $this->input->post('id_pengaduan', true),
            'text'          => "Pengaduan baru",
        );
		$data=[
            'id_pengaduan'=>$this->input->post('id_pengaduan', true),
            'id_penduduk'=>$this->session->userdata('id_penduduk'),
            'jenis_pengaduan'=>$this->input->post('jenis_pengaduan', true),
            'alasan'=>'-',
            'keterangan'=>$this->input->post('keterangan', true),
            'bukti'=>$upload['file']['file_name'],
            'status'=>'Diajukan',
		];
	$this->db->insert('pengaduan', $data);

        // buat notifikasi 
        $judul      = "Pengaduan Baru";
        $deskripsi  = "Terdapat pengaduan baru pada " . date('d F Y H.i A');
        $hak_aksestujuan = "Admin";

        insertDataNotifikasi(
            $judul,
            $deskripsi,
            $dataNotif,
            $hak_aksestujuan
        );
    }
    
    public function upload(){    
        $config['upload_path'] = './assets/foto_pengaduan/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('bukti')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    
   
    public function hapusDatapengaduan($id_pengaduan)
	{
        $this->db->where('id_pengaduan', $id_pengaduan);
        if(
            $this->db->delete('pengaduan')
        ){
            return true;
        }else{
            return false;
        }
    }
    
    public function ubahPengaduan($id_pengaduan){
        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_ktp'        => $this->input->post('id_ktp', true),
            'text'          => "Pengaduan " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengaduan";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);

        if (
            $status == "Diajukan Ke Kepala Desa"
        ) {


            // buat notifikasi untuk RW
            $dataNotifPegawai  = array(

                'akses'         => "Pegawai", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_pengaduan'        => $this->input->post('id_pengaduan', true),
                'text'          => 'Pengaduan baru',
            );

            // buat notifikasi 
            $judulPegawai     = "Pengaduan";
            $deskripsiPegawai  = "Status " . $status;

            $hak_aksestujuanPegawai = "Pegawai";
            $event = $hak_aksestujuanPegawai;

            insertDataNotifikasi($judulPegawai, $deskripsiPegawai, $dataNotifPegawai, $event);
        }

        $data = [
            'status' => $status,
            'alasan' => $alasan,
        ];
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update('pengaduan', $data);
    }


    public function ubahPengaduanPegawai($id_pengaduan)
    {
        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array(); // sorthand query 

        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */

        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_ktp'        => $this->input->post('id_ktp', true),
            'text'          => "Pengaduan " . $status,
        );

        // buat notifikasi 
        $judul      = "Pengaduan";
        $deskripsi  = "Status " . $status;

        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan . '-' . $penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event);

        $data = [
            'status' => $status,
            'alasan' => $alasan,
        ];
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update('pengaduan', $data);

    }


    public function getPengaduan($id_pengaduan){  
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->get('pengaduan')->result();
    }
    
    public function getDetailPengaduan($id_pengaduan){
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->get('pengaduan')->result();
    }

    public function download($id_pengaduan){
        $query = $this->db->get_where('pengaduan',array('id_pengaduan'=>$id_pengaduan));
        return $query->row_array();
    }

    public function getIdPenduduk($id_pengaduan)
    {
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pengaduan', $id_pengaduan);
        $hasil = $this->db->get('pengaduan')->row();
        return $hasil->id_penduduk;
    }
    
}    