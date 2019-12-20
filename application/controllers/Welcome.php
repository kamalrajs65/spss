<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('welcomemodel');

	}



	public function index()
	{
		$data['res_banner']=$this->welcomemodel->get_home_banner();
		$data['res_dept']=$this->welcomemodel->get_dept_name();
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	public function terms()
	{
		$this->load->view('terms');
	}
	public function privacy()
	{
		$this->load->view('privacy');
	}
	public function refund()
	{
		$this->load->view('refund');
	}


	public function login()
	{
		$data=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_role');
		if($user_type=="1"){
			redirect('home/dashboard');
		}else{
				$this->load->view('admin/login.php');
		}


	}




	public function forgotpassword()
	{

		$this->load->view('admin/forgot_password.php');

	}



}
