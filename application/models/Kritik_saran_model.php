<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik_saran_model extends CI_Model {

    public function tampilSaran()
    {
        $this->db->select('kritik_saran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kritik_saran.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('kritik_saran')->result();
    }

    public function tampilSaranPenduduk($id_penduduk){
        $this->db->select('kritik_saran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kritik_saran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('kritik_saran.id_penduduk', $id_penduduk);
        return $this->db->get('kritik_saran')->result();
    }

    public function tambahDataSaran(){
		$data=[
			'id_saran'=>$this->input->post('id_saran', true),
            'id_penduduk'=>$this->session->userdata('id_penduduk'),
            'keterangan'=>$this->input->post('keterangan', true),
		];
	$this->db->insert('kritik_saran', $data);
    }
    
   
    public function hapusData($id_saran)
	{
        $this->db->where('id_saran', $id_saran);
        if(
            $this->db->delete('kritik_saran')
        ){
            return true;
        }else{
            return false;
        }
    }
    
    public function ubahSaran($id_saran){
		$data=[
            'keterangan'=>$this->input->post('keterangan', true),
		];
        $this->db->where('id_saran', $id_saran);	
        $this->db->update('kritik_saran', $data);
    }


    public function getSaran($id_saran){  
        $this->db->select('kritik_saran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'kritik_saran.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_saran', $id_saran);
        return $this->db->get('kritik_saran')->result();
    }

    
}    