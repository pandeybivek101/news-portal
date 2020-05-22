<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Home_m');
		$this->load->helper(['home', 'url', 'form']);
	}

	public function index()
	{
		$data['title']='home';
		$data['content']='home/landing_v';
		$data['slidernews']=$this->Home_m->slider_news();
		$data['latestnews']=$this->Home_m->get_latest();
		$data['catlist']=$this->Home_m->get_featured();
		$this->template->get_public_template($data);
	}

	public function specific_news($id){
		if ($_POST) {
			$insertdata=array(
				'name'=>$_POST['name'],
				'email'=>$_POST['email'],
				'comment'=>$_POST['comment'],
				'news_id'=>$id,
			);
			$this->Home_m->insert_comment($insertdata);
			return redirect('home/specific_news/'.$id);
		}
		$data['title']='Detail News';
		$data['content']='home/single_news_v';
		$data['news']=$this->Home_m->get_news($id);
		$data['comments']=$this->Home_m->get_comments($id);
		$this->template->get_public_template($data);
	}
}
