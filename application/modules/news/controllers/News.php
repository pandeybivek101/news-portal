<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['News_m', 'Category_m']);
		$this->load->helper(['form', 'uimage']);
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
			if($this->form_validation->run('category')){
				$insertdata=array(
				'name'=>$_POST['name'],
				'rank'=>$_POST['rank'],
				'status'=>$_POST['status'],
				'created_date'=>get_current_timestamp(),

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

	public function update_category($id){
		if($_POST){
			if($this->form_validation->run('category')){
				$updatedata=array(
				'name'=>$_POST['name'],
				'rank'=>$_POST['rank'],
				'status'=>$_POST['status'],
				'modified_date'=>get_current_timestamp(),

				//will change in future with session userdata
				'modified_by'=>'admin',
			);
			$this->Category_m->update_category($updatedata, $id);
			$this->session->set_flashdata('message','Successfully Updated');
			return redirect('news/update_category/'.$id);
			}
		}
		$data['title']='Update Category';
		$data['content']='news/update_category_v';
		$data['values']=$this->Category_m->get_row_record($id);
		$this->template->get_admin_template($data);
	}

	public function delete_category($id){
		$this->Category_m->delete_category($id);
		return redirect('news/list_category');
	}


	public function create_news(){
		if($_POST){
			if($this->form_validation->run('news')){
	            $insertdata=array(
	            	'title'=>$_POST['title'],
	            	'category_id'=>$_POST['category_id'],
	            	'short_description'=>$_POST['short_description'],
	            	'description'=>$_POST['description'],
	            	'feature_image'=>upload_image('image'),
	            	'feature_key'=>$_POST['feature_key'],
	            	'status'=>$_POST['status'],
	            	'created_date'=>get_current_timestamp(),

	            	//will chane later after ion auth added
	            	'created_by'=>'admin',
	            );
	            $this->News_m->insert_news($insertdata);
	            $this->session->set_flashdata('message', 'News Inserted Successfully');
	            return redirect('news/create_news');
			}	
		}
		$data['title']='Create News';
		$data['content']='news/create_news_v';
		$data['category_lists']=$this->Category_m->get_all_categories_list();
		$this->template->get_admin_template($data);
	}

}
