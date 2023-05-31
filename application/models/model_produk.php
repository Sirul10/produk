<?php

class Model_produk extends CI_Model{
	public function tampil_data(){
		return $this->db->get('products');
	}
	public function tambah_produk($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_produk($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function update_data($where, $data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function lihat_data($id)
	{
		$result = $this->db->where('id', $id)->get('products');
		if ($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}
}