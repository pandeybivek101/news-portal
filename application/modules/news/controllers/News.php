<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['News_m', 'Category_m']);
		$this->load->helper(['form', 'date_helper']);
		$this->load->library(['session', 'form_validation']);
	}


	public function index(){
		$data['title']='News List';
		$data['content']='news/list_news_v';
		$data['news_lists']=$this->News_m->get_all_news_list();
		$this->template->get_admin_template($data);
	}


	public function create_category(){
		if($_POST){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('rank', 'Rank', 'required|numeric');
			if($this->form_validation->run()){
				$insertdata=array(
				'name'=>$_POST['name'],
				'rank'=>$_POST['rank'],
				'status'=>$_POST['status'],
				'created_date'=>date(),

				//will change in future with session userdata
				'created_by'=>'admin',
			);
			$this->Category_m->save_category($insertdata);
			$this->session->set_flashdata('message','Successfully Inserted');
			return redirect('news/create_category');
			}
		}
		$data['title']='Create Category';
		$data['content']='news/create_category_v';
		$this->template->get_admin_template($data);
	}


	public function list_category(){
		$data['title']='Category List';
		$data['content']='news/list_category_v';
		$data['category_lists']=$this->Category_m->get_all_categories_list();
		$this->template->get_admin_template($data);
	}
}
