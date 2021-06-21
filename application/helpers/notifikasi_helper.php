<?php


function insertDataNotifikasi($judul, $deskripsi, $dataNotif, $event)
{


        // tabel notifikasi database yang digunakan 
        $table = "notifikasi";

        $ci=& get_instance();
        $ci->load->database(); 


        // notifikasi 
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
          );
          $pusher = new Pusher\Pusher(
            '737a56fc6f362506cd75',
            '8cdc9614fbcc58794b74',
            '1221600',
            $options
          );
        
          $data['judul']     = $judul;
          $data['deskripsi'] = $deskripsi;
  $pusher->trigger('my-channel', $event, $data);


        $ci->db->insert( $table, $dataNotif );
}