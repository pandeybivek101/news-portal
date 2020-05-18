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
}
