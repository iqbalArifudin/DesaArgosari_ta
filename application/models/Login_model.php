<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class Login_model extends CI_Model
{
	// public function login($NIK, $password){
	// 	$this->db->select('*');
	// 	$this->db->from('penduduk');
	// 	$this->db->where('NIK', $NIK);
	// 	$this->db->where('password', $password);
	// 	$this->db->limit(1);

	// 	$query=$this->db->get();
	// 	if ($query->num_rows()==1) {
	// 		return $query->result();
	// 	}
	// 	else{
	// 		return false;
	// 	}

	// }

	function cekuserdaftar($NIK){
		$query = $this->db->query("SELECT * FROM penduduk WHERE NIK = '$NIK' ");
		if ($query->num_rows()==1){
			return $query->result();
		}else {
			return false;
		}
	}

	function ceklogin($NIK, $password){
		$query = $this->db->query("SELECT * FROM penduduk WHERE NIK = '$NIK' and password ='$password'");
		if ($query->num_rows()==1){
			return $query->result();
		}else {
			return false;
		}
	}
}
?>