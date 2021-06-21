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
		$data=[
            'alasan'=>$this->input->post('alasan', true),
            'status'=>$this->input->post('status', true),
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