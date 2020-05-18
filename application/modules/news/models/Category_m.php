<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_categories_list()
	{
		$query=$this->db->get('tbl_category');
		return $query->result();
	}

	public function save_category($data){
		$query=$this->db->insert('tbl_category', $data);
	}

}
