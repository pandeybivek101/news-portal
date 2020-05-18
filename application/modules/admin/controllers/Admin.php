<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index()
	{
		$data['title']='Dashboard';
		$data['record']='admin/index_v';
		$this->template->get_admin_template($data);	
	}

	public function about()
	{
		$data['record']='admin/about_v';
		$this->template->get_admin_template($data);
	}
}
