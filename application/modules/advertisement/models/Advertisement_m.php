<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_advertisement_list()
	{
		$query=$this->db->get('tbl_advertise');
		return $query->result();
	}

	public function insert_advertisment($data){
		$query=$this->db->insert('tbl_advertise', $data);
		return $query;
	}

	public function get_advertise_row($id){
		$query=$this->db->where('id', $id)->get('tbl_advertise')->row();
		return $query;
	}

	public function update_advertisement($id, $data){
		$query=$this->db->where('id', $id)->update('tbl_advertise', $data);
		return $query;
	}

	public function delete_advertisement($id){
		return $this->db->where('id', $id)->delete('tbl_advertise');
	}
}
