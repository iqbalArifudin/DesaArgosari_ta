<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('Notif_model');
    }

    public function get($hak_akses, $id_penduduk = null)
    {

        $this->Notif_model->showNotification($hak_akses, $id_penduduk);
    }
}

    /* End of file Notifikasi.php */