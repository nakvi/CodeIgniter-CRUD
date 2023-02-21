<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
//  Function show to list of user
	public function list() {
	$this->load->model('User_model');
	$users=	$this->User_model->list();
	$data=array();
	$data['users']=$users;
	$this->load->view('list',$data);
	}

//function store data into databse
	public function create()
	{
		$this->load->model('User_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
      if($this->form_validation->run() == false)
     {
	$this->load->view('create');
     }else {
		$formArray = array();
		$formArray['name'] =$this->input->post('name');
		$formArray['email'] =$this->input->post('email');
		$formArray['created_at'] =date('Y-m-d');
		$this->User_model->create($formArray);
	$this->session->set_flashdata('success','Record added successfully');
	redirect(base_url().'index.php/User/create');

	  }
	}
		//Function for Edit user Record
		public function edit($userId)
		{
			$this->load->model('User_model');
			$user=	$this->User_model->getUser($userId);
			// print_r($user); die();
			$data=array();
			$data['user']=$user;
				$this->load->view('edit',$data);
			}

		//Function for Update user Record
		public function update($userId)
		{

			$this->load->model('User_model');
			$formArray = array();
			$formArray['name'] =$this->input->post('name');
			$formArray['email'] =$this->input->post('email');
			$this->User_model->updateUser($userId,$formArray);
			$this->session->set_flashdata('success','Record updated successfully');
			redirect(base_url().'index.php/User/list');
		}
		//Function for Delete user Record
		public function delete($userId)
		{
			$this->load->model('User_model');
			$this->User_model->deleteUser($userId);
			redirect(base_url().'index.php/User/list');

		}
}