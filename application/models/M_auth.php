<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_auth extends CI_Model {
	public function read($where){
		$this->db->where($where);
		return $this->db->get('tb_user')->row_array();
	}
	public function insert($data){
		$this->db->insert('tb_user',$data);
	}
}
?>
