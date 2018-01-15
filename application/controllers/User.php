<?php 
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			$info=$this->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
	}
	public function index()
	{
		$data['title']="User";
		$data['user']=$this->User_model->get_user(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/user/user_index",$data);
		$this->load->view("admin/templates/footer");
	}

	public function admin(){
		$data['title']="User";
		$data['user']=$this->User_model->get_user(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/user/user_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		$data['title']="Create User";
		$this->form_validation->set_rules('email','email','required|valid_email|callback_check_email_exists');
		$this->form_validation->set_rules('first_name','first name','required');
		$this->form_validation->set_rules('last_name','last name','required');

		if ($this->form_validation->run() === false) {
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/user/user_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$enc_password =md5($this->input->post('email'));
			$this->User_model->create_user($enc_password);
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/user/');
		}
	}
	public function edit($user_id){
		$data['title']="Edit User";
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('first_name','first name','required');
		$this->form_validation->set_rules('last_name','last name','required');

		if ($this->form_validation->run() === false) {
			$data['user']=$this->User_model->get_user($user_id);
			if (empty($data['user'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/user/user_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->User_model->update_user();
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/user/');
		}
	}
	public function delete($user_id){
		$this->User_model->delete_user($user_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/user/');	
	}
	public function changepassword($user_id){
		$data['title']="Change Password";
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('user_id','user_id','required|callback_check_password');
		$this->form_validation->set_rules('oldpassword','oldpassword','required');
		$this->form_validation->set_rules('newpassword','newpassword','required');

		if ($this->form_validation->run() === false) {
			$data['user']=$this->User_model->get_user($user_id);
			if (empty($data['user'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/user/user_change_password",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->User_model->changepassword($user_id);
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/user/');
		}	
	}
	public function resetpassword($user_id){
		$this->User_model->resetpassword_user($user_id);
		$this->session->set_flashdata('info','Data successfuly updated');
		redirect('admin/user/');	
	}


	// support function
	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists','email already registered');
		if ($this->User_model->check_email_exists($email)) {
			return true; // data belum ada
		}
		else{
			return false; // data sudah ada
		}
	}

	public function check_password($user_id){
		$this->form_validation->set_message('check_password','invalid password');
		if ($this->User_model->check_password($user_id)) {
			return true; // password benar
		}
		else{
			return false; // password salah
		}
	}
}


