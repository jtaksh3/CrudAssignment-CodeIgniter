<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		$data['users'] = $this->users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
	}

	public function addnew(){
		$this->load->view('addform.php');
	}

	public function insert(){
		$user['Name'] = $this->input->post('name');
		$user['Email'] = $this->input->post('email');
		$user['Mobile_no'] = $this->input->post('mobile');
		$user['Date_of_birth'] = $this->input->post('dob');
		$user['Pincode'] = $this->input->post('pincode');
		
		$query = $this->users_model->insertuser($user);

		if($query){
			header('location:'.base_url().$this->index());
		}

	}

	public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['Name'] = $this->input->post('name');
		$user['Email'] = $this->input->post('email');
		$user['Mobile_no'] = $this->input->post('mobile');
		$user['Date_of_birth'] = $this->input->post('dob');
		$user['Pincode'] = $this->input->post('pincode');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->users_model->deleteuser($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>