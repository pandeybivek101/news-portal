<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Advertisement_m');
	}


	public function list_advertisement(){
		$data['title']='Advertisement List';
		$data['content']='advertisement/list_advertisement_v';
		$data['advertisement']=$this->Advertisement_m->get_all_advertisement_list();
		$this->template->get_admin_template($data);
	}

}


