<?php

	function get_username_by_id($id){
		if($id==NULL){
			return NULL;
		}else{
			$cd = & get_instance();
			$cd->load->database();
			$cd->db->where('id', $id);
			$users=$cd->db->get('users')->row();
			return $users->username;
		}
	}


	function get_user_id(){
		$cd = & get_instance();
		$cd->load->database();
		$cd->db->where('email', $cd->session->userdata('identity'));
		$id=$cd->db->get('users')->row();
		return $id->id;
	}
?>