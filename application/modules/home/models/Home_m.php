<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function slider_news(){
		$this->db->where('slider_key', '1');
		$this->db->where('status', '1');
		$query=$this->db->get('tbl_news');
		return $query->result();
	}

	public function get_latest(){
		$this->db->where('status', '1');
		$this->db->order_by('created_date', 'asc');
		$this->db->limit(3);
		$query=$this->db->get('tbl_news');
		return $query->result();
	}

	public function get_featured(){
		$this->db->select('name');
		$this->db->where('status', '1');
		$query=$this->db->get('tbl_category');
		return $query->result();
	}

	public function get_news($id){
		$this->db->where('id', $id);
		$query=$this->db->get('tbl_news')->row();
		return $query;
	}

	public function get_comments($id){
		$this->db->where('news_id', $id);
		$this->db->order_by('comment_date', 'asc');
		$query=$this->db->get('tbl_comment')->result();
		return $query;
	}
		
}
