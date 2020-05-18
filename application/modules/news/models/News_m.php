<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_news_list()
	{
		$this->db->select('tbl_news.*, tbl_category.name');
		$this->db->from('tbl_news');
		$this->db->join('tbl_category', 'tbl_news.category_id=tbl_category.id');
		$query=$this->db->get();
		return $query->result();
	}

}
