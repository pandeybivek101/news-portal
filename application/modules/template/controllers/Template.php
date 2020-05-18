<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function get_admin_template($data=NULL){
		$this->load->view('template/admin_template_v', $data);
	}

	function get_public_template($data=NULL){
		$this->load->view('template/user_template_v', $data);
	}


}