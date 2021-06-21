<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{   

    public function tampilPenduduk()
    {
        return $this->db->get('penduduk')->result();
    }

    public function tampilPendudukSaja($id_penduduk)
    {
        return $this->db->get('penduduk', ['id_penduduk' => $id_penduduk])->result();
    }
    
    public function tampilPendudukPegawai()
    {
          $pegawaisaja = 'Pegawai';
        $query = $this->db->order_by('id_penduduk', 'DESC')->get_where('penduduk', array('hak_akses' => $pegawaisaja));
            return $query->result();
    }

    public function tambahPenduduk($upload){
		$data=[
            'id_penduduk'=>$this->input->post('id_penduduk', true),
            'NIK'=>$this->input->post('NIK', true),
            'no_KK'=>$this->input->post('no_KK', true),
            'nama'=>$this->input->post('nama', true),
            'tempat_lahir'=>$this->input->post('tempat_lahir', true),
            'tanggal_lahir'=>$this->input->post('tanggal_lahir', true),
            'agama'=>$this->input->post('agama', true),
            'status_perkawinan'=>$this->input->post('status_perkawinan', true),
            'pekerjaan'=>$this->input->post('pekerjaan', true),
            'gol_darah'=>$this->input->post('gol_darah', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'alamat'=>$this->input->post('alamat', true),
            'RT'=>$this->input->post('RT', true),
            'RW'=>$this->input->post('RW', true),
            'desa'=>'ARGOSARI',
            'Kecamatan'=>'JABUNG',
            'kabupaten'=>'MALANG',
            'kode_pos'=>'65155',
            'provinsi'=>'JAWA TIMUR',
            'foto'=>$upload['file']['file_name'],
            'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'hak_akses'=>$this->input->post('hak_akses', true),
		];
	$this->db->insert('penduduk', $data);
    }
    public function upload(){    
        $config['upload_path'] = './assets/foto_penduduk/';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']     = '10000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    
   
    public function hapusDataPenduduk($id_penduduk)
	{
        $this->db->where('id_penduduk', $id_penduduk);
        if(
            $this->db->delete('penduduk')
            
        ){
            return true;
        }else{
            return false;
        }
    }

    public function getPenduduk($id_penduduk){  
        $this->db->select('penduduk.*');
        $this->db->where('id_penduduk', $id_penduduk);
        return $this->db->get('penduduk')->result();
	}

    public function getDetail($id_penduduk){
        $this->db->select('penduduk.*');
        $this->db->where('id_penduduk', $id_penduduk);
        return $this->db->get('penduduk')->result();  
    }
    
}    