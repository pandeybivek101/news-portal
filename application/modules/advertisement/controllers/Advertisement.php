<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends Auth_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Advertisement_m');
		$this->load->helper('news/timestamp');
		$this->load->library(['form_validation', 'session']);
	}


	public function list_advertisement(){
		$data['title']='Advertisement List';
		$data['content']='advertisement/list_advertisement_v';
		$data['advertisement']=$this->Advertisement_m->get_all_advertisement_list();
		$this->template->get_admin_template($data);
	}

	public function create_advertise(){
		$input=$this->input->post();
		if($input){
			if($this->form_validation->run('advertise')){
				$advertiseData=array(
					'title'=>$input['title'],
					'link'=>$input['link'],
					'rank'=>$input['rank'],
					'status'=>$input['status'],
					'created_date'=>get_current_timestamp(),

					//will change later
					'created_by'=>get_user_id(),
				);
				$this->Advertisement_m->insert_advertisment($advertiseData);
				$this->session->set_flashdata('message', 'Advertisement Created Successfully');
				return redirect('advertisement/create_advertise');

			}
		}
		$data['title']='Create Advertisement';
		$data['content']='advertisement/create_advertise_v';
		$this->template->get_admin_template($data);
	}

	public function update_advertise($id){
		$input=$this->input->post();
		if($input){
			if($this->form_validation->run('advertise')){
				$advertiseData=array(
					'title'=>$input['title'],
					'link'=>$input['link'],
					'rank'=>$input['rank'],
					'status'=>$input['status'],
					'modified_date'=>get_current_timestamp(),

					//will change later
					'modified_by'=>get_user_id(),
				);
				$this->Advertisement_m->update_advertisement($id, $advertiseData);
				$this->session->set_flashdata('message', 'Advertisement Updated Successfully');
				return redirect('advertisement/update_advertise/'.$id);

			}
		}
		$data['title']='Update Advertisement';
		$data['content']='advertisement/update_advertise_v';
		$data['values']=$this->Advertisement_m->get_advertise_row($id);
		$this->template->get_admin_template($data);
	}

	public function delete_advertise($id){
		$this->Advertisement_m->delete_advertisement($id);
		return redirect('advertisement/list_advertisement');
	}

}


