<?php
class Home extends CI_Controller{
// function __construct(){
// 	parent::__construct();
// 	if(!$this->session->userdata('login')){
// 		redirect('Login-Page');
// 	}
// }

public function index()
{
 		// print_r($this->session->userdata('login'));
		$this->load->view('layout/header');
		 $this->load->view('pages/dashboard');
		 $this->load->view('layout/footer');
		 
 		
 	}



}