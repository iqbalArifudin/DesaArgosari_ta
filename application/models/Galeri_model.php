<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model
{   

    public function tampilGaleri()
    {
        return $this->db->get('galeri')->result();
    }

    public function tambahGaleri($upload){
		$data=[
            'id_galeri'=>$this->input->post('id_galeri', true),
            'keterangan'=>$this->input->post('keterangan', true),
            'tanggal'=>$this->input->post('tanggal', true),
            'foto'=>$upload['file']['file_name'],
		];
	$this->db->insert('galeri', $data);
    }
    public function upload(){    
        $config['upload_path'] = './assets/galeri/';    
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
    
   
    public function hapus($id_galeri)
	{
        $this->db->where('id_galeri', $id_galeri);
        if(
            $this->db->delete('galeri')
            
        ){
            return true;
        }else{
            return false;
        }
    }

    public function getGaleri($id_galeri){  
        $this->db->select('galeri.*');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get('galeri')->result();
	}

    public function getDetail($id_galeri){
        $this->db->select('galeri.*');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get('galeri')->result();  
    }
    
}    