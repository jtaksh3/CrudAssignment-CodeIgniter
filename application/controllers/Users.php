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

		/* Load form helper */ 
         $this->load->helper(array('form'));
			
         /* Load form validation library */ 
         $this->load->library('form_validation');

		$user['Name'] = $this->input->post('name');
		$user['Email'] = $this->input->post('email');
		$user['Mobile_no'] = $this->input->post('mobile');
		$user['Date_of_birth'] = $this->input->post('dob');
		$user['Pincode'] = $this->input->post('pincode');
		
		$this->form_validation->set_rules('name', 'Name', array('required'));
		$this->form_validation->set_rules('email', 'Email', array('required', 'regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]', 'is_unique[users.email]'));
		$this->form_validation->set_rules('mobile', 'Mobile no', array('required', 'regex_match[/^[6-9]\d{9}$/]', 'is_unique[users.Mobile_No]'));
		$this->form_validation->set_rules('dob', 'Date of Birth', array('required'));
		$this->form_validation->set_rules('pincode', 'Pincode', array('required', 'exact_length[6]'));

		if ($this->form_validation->run() == FALSE) { 
		    echo validation_errors();
         } 

         else {
		    $query = $this->users_model->insertuser($user);

		    if($query){ 
			    header('location:'.base_url().$this->index());
	     	}
	     }

	}

	public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){

		/* Load form helper */ 
         $this->load->helper(array('form'));
			
         /* Load form validation library */ 
         $this->load->library('form_validation');

		$user['Name'] = $this->input->post('name');
		$user['Email'] = $this->input->post('email');
		$user['Mobile_no'] = $this->input->post('mobile');
		$user['Date_of_birth'] = $this->input->post('dob');
		$user['Pincode'] = $this->input->post('pincode');

		$this->form_validation->set_rules('name', 'Name', array('required'));
		$this->form_validation->set_rules('email', 'Email', array('required', 'regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]', 'is_unique[users.email]'));
		$this->form_validation->set_rules('mobile', 'Mobile no', array('required', 'regex_match[/^[6-9]\d{9}$/]', 'is_unique[users.Mobile_No]'));
		$this->form_validation->set_rules('dob', 'Date of Birth', array('required'));
		$this->form_validation->set_rules('pincode', 'Pincode', array('required', 'exact_length[6]'));

		if ($this->form_validation->run() == FALSE) { 
		    echo validation_errors();
         } 

         else {

     		$query = $this->users_model->updateuser($user, $id);

	    	if($query){
		    	header('location:'.base_url().$this->index());
		    }
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