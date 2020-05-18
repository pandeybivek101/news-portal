<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*public function get_all_news()
	{
		$query=$this->db->get('news');
		return $query->result();

	}*/

	public function get_all_news()
	{
		$this->db->select('news.*, users.name');
		$this->db->from('news');
		$this->db->join('users', 'users.id=news.user_id');
		$query = $this->db->get();
		return $query->result();
	}


	public function insert_to_news($data){
		$query=$this->db->insert('news', $data);
		return $query;
	}

	
	public function delete_from_news($id){
		$this->db->where('id', $id);
		$query=$this->db->delete('news');
		return $query;
	}

	public function get_individual_news($id){
		$this->db->where('id', $id);
		$query=$this->db->get('news')->first_row();
		return $query;
	}

	public function update_news($id, $data){
		$this->db->where('id', $id);
		$query=$this->db->update('news', $data);
		return $query;
	}

}
