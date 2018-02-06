<?php 
class Career extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="Career";
		$data['breadcrumb']=breadcrumb();
		$data['career']=$this->Career_model->get_home_career(FALSE);
		$this->load->view("templates/header");
		$this->load->view("career/career_index",$data);
		$this->load->view("templates/footer");
	}
	public function view($slug){
		$data['career'] = $this->Career_model->get_home_career($slug);
		if (empty($data['career'])) {
			show_404();
		}
		$data['title'] = $data['career']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("career/career_view",$data);
		$this->load->view("templates/footer");	
	}
	// ADMIN
	public function admin(){
		check_logged_in();
		$data['title']="Career";
		$data['career']=$this->Career_model->get_admin_career(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/career/career_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		check_logged_in();
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
		check_logged_in();
		$data['title']="Edit career";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['career']=$this->Career_model->get_admin_career($career_id);
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
		check_logged_in();
		$this->Career_model->delete_career($career_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/career/');			
	}
	
}


