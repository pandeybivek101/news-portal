<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function active_category(){
		$this->db->where('status', '1');
		$query=$this->db->get('tbl_category');
		return $query->result();
	}
		
}
