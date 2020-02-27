<?php
class Login extends CI_Controller{
 function __construct(){

	parent::__construct();
		
	$this->load->model('Login_model');
}

public function index()
 {
 		// print_r($this->session->userdata('login'));
 	
		 $this->load->view('pages/login');
		 $this->session->sess_destroy();
 		
}
public function login_validate()
{
	$data=array("email"=>$this->input->post('email'),
				"password"=>$this->input->post('password'));

	$result=$this->Login_model->admin_Login($data);
	if($result)
	{
		redirect('Home');
	}
	else
	{
	   
	   $this->session->set_flashdata('msg','Invalid Email Or Password');
		redirect('Login');
	}
}
public function logOut(){
	$this->session->sess_destroy();
	redirect('Login');
}



}