<?php 
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		show_404();
	}
	public function login(){
		if ($this->session->userdata('logged_in')) {
				$info=$this->session->set_flashdata('info','Welcome back');
				redirect('admin/news');
		}
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		
		if ($this->form_validation->run() === false) {
			$this->load->view("admin/login");
		}
		else{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$result=$this->User_model->login($email,$password);
			if ($result) {
				$user_data=array(
					'user_id'=>$result['user_id'],
					'first_name'=>$result['first_name'],
					'email'=>$email,
					'logged_in'=>true
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('info','login successful');
				redirect('admin/news');
			}
			else{
				$this->session->set_flashdata('error','invalid email or password');
				redirect('admin/login');
			}
			
		}
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('info','logout successful');
		redirect('admin/login');
	}

}


