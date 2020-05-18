<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function register_user($data){
		$query=$this->db->insert('users', $data);
		return $query;
	}

	public function login($username, $password){
		$users=$this->db->where('username', $username)->get('users')->first_row();
		if($users){
			if(password_verify($password, $users->password)){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}

	public function get_user_id($username){
		$userid=$this->db->where('username', $username)->get('users')->first_row();
		return $userid->id;
	}

	public function get_user_data(){
		$username=$this->session->userdata('username');
		$user=$this->db->where('username', $username)->get('users')->first_row();
		return $user;
	}

	public function update_users($id, $data){
		$this->db->where('id', $id);
		$query=$this->db->update('users', $data);
		return $query;
	}

	public function check_password($userpassword, $newuserpassword){
		if(password_verify($newuserpassword, $userpassword)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
