<?php 
class Regulation extends CI_Controller
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
		$data['title']="Regulations";
		$this->load->view("templates/header");
		$this->load->view("regulation/regulation_index",$data);
		$this->load->view("templates/footer");
	}

	public function admin(){
		$data['title']="regulation";
		$data['regulation']=$this->Regulation_model->get_regulation(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/regulation/regulation_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		$data['title']="Create regulation";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		if ($this->form_validation->run() === false) {
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/regulation/regulation_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{

			$this->Regulation_model->create_regulation();
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/regulation/');
		}
	}
	public function edit($regulation_id){
		$data['title']="Edit regulation";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['regulation']=$this->Regulation_model->get_regulation($regulation_id);
			if (empty($data['regulation'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/regulation/regulation_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->Regulation_model->update_regulation();
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/regulation/');
		}
	}
	public function delete($regulation_id){
		$this->Regulation_model->delete_regulation($regulation_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/regulation/');			
	}
	
}


