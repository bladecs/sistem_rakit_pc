<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Model {
	public function insert_report($data){
		$this->db->insert('tb_report',$data);
	}
	public function data_komponen(){
		return $this->db->get('tb_komponen')->result();
	}
	public function komponen($where){
		$this->db->where($where);
		return $this->db->get('tb_komponen')->result();
	}
	public function pesan_komponen($where) {
		$this->db->where('nama', $where);
		return $this->db->get('tb_komponen')->row();
	}
	public function pesanan($data){
		$this->db->insert('tb_pesan',$data);
	}
	public function edit_komponen($where){
		$this->db->where($where);
		return $this->db->get('tb_pesan')->row();
	}
	public function update_pesanan($data,$where){
		$this->db->where($where);
		$this->db->update('tb_pesan',$data);
	}
	public function confirm_pesanan($data,$where){
		$this->db->where($where);
		$this->db->update('tb_pesan',$data);
	}
	public function delete_pesanan($where){
		$this->db->where($where);
		$this->db->delete('tb_pesan');
	}
	public function data_pesanan($where){
		$this->db->where($where);
		return $this->db->get('tb_pesan')->result();
	}
	public function insert_cart($data){
		$this->db->insert('tb_cart',$data);
	}
	public function update_cart($data,$where){
		$this->db->where($where);
		$this->db->update('tb_cart',$data);
	}
	public function data_cart($where){
		$this->db->where($where);
		return $this->db->get('tb_cart')->result();
	}
	public function delete_cart($where){
		$this->db->where($where);
		$this->db->delete('tb_cart');
	}
}
?>
