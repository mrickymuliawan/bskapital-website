<?php 
class Regulation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($offset = 0)
	{
		// pagination
		$config['base_url'] = base_url('regulation/index');
		$config['total_rows'] = $this->db->count_all('regulation');
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="" class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['title']="Regulations";
		$data['breadcrumb']=breadcrumb();
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,$config['per_page'],$offset);
		$data['news']=$this->News_model->get_home_news(FALSE,2,FALSE);
		$this->load->view("templates/header");
		$this->load->view("regulation/regulation_index",$data);
		$this->load->view("templates/footer");
	}
	public function view($slug){
		$data['regulation'] = $this->Regulation_model->get_home_regulation($slug);
		$data['news']=$this->News_model->get_home_news(FALSE,2,FALSE);
		if (empty($data['regulation'])) {
			show_404();
		}
		$data['title'] = $data['regulation']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("regulation/regulation_view",$data);
		$this->load->view("templates/footer");	
	}

	// ADMIN
	public function admin(){
		check_logged_in();
		$data['title']="Regulation";
		$data['regulation']=$this->Regulation_model->get_admin_regulation(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/regulation/regulation_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		check_logged_in();
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
		check_logged_in();
		$data['title']="Edit regulation";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['regulation']=$this->Regulation_model->get_admin_regulation($regulation_id);
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
		check_logged_in();
		$this->Regulation_model->delete_regulation($regulation_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/regulation/');			
	}
	
}


