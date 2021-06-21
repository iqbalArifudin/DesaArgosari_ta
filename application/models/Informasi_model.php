<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends CI_Model
{

    public function tampilInformasi()
    {
        return $this->db->get('informasi')->result();
    }

    public function tambahInformasi()
    {
        $data = [
            'id_informasi' => $this->input->post('id_informasi', true),
            'keterangan' => $this->input->post('keterangan', true),
        ];
        $this->db->insert('informasi', $data);
    }

    public function hapusData($id_informasi)
    {
        $this->db->where('id_informasi', $id_informasi);
        if (
            $this->db->delete('informasi')

        ) {
            return true;
        } else {
            return false;
        }
    }

    public function ubahInformasi($id_informasi)
    {
        $data = [
            'keterangan' => $this->input->post('keterangan', true),
        ];
        $this->db->where('id_informasi', $id_informasi);
        $this->db->update('informasi', $data);
    }


    public function getInformasi($id_informasi)
    {
        $this->db->select('informasi.*');
        $this->db->where('id_informasi', $id_informasi);
        return $this->db->get('informasi')->result();
    }

    public function getDetail($id_informasi)
    {
        $this->db->select('informasi.*');
        $this->db->where('id_informasi', $id_informasi);
        return $this->db->get('informasi')->result();
    }
}