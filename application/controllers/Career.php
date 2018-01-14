<?php 
class Career extends CI_Controller
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
		$data['title']="Career";
		$this->load->view("templates/header");
		$this->load->view("career/career_index",$data);
		$this->load->view("templates/footer");
	}

	public function admin(){
		$data['title']="Career";
		$data['career']=$this->Career_model->get_career(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/career/career_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		$data['title']="Create career";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		if ($this->form_validation->run() === false) {
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/career/career_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{

			$this->Career_model->create_career();
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/career/');
		}
	}
	public function edit($career_id){
		$data['title']="Edit career";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['career']=$this->Career_model->get_career($career_id);
			if (empty($data['career'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/career/career_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->Career_model->update_career();
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/career/');
		}
	}
	public function delete($career_id){
		$this->Career_model->delete_career($career_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/career/');			
	}
	
}


