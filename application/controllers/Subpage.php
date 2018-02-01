<?php 
class Subpage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($offset = 0)
	{
		// pagination
		$config['base_url'] = base_url('subpage/index');
		$config['total_rows'] = $this->db->count_all('subpage');
		$config['per_subpage'] = 5;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'subpage-link');

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="subpage-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="subpage-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="subpage-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="subpage-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="subpage-item active"><a href="" class="subpage-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="subpage-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['title']="subpage";
		$data['breadcrumb']=breadcrumb();
		$data['subpage']=$this->Subpage_model->get_home_subpage(FALSE,$config['per_subpage'],$offset);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		$this->load->view("templates/header");
		$this->load->view("subpage/subpage_index",$data);
		$this->load->view("templates/footer");
	}
	public function view($slug){
		$data['subpage'] = $this->Subpage_model->get_home_subpage($slug);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		if (empty($data['subpage'])) {
			show_404();
		}
		$data['title'] = $data['subpage']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("subpage/subpage_view",$data);
		$this->load->view("templates/footer");	
	}

	// ADMIN
	public function admin($page_title){
		check_logged_in();
		$data['title']="subpage";
		$data['page']=$this->Subpage_model->get_admin_page($page_title);
		$data['subpage']=$this->Subpage_model->get_admin_subpage($page_title,FALSE); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/subpage/subpage_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create($page_title){
		check_logged_in();
		$data['title']="Create subpage";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		if ($this->form_validation->run() === false) {
			$data['page']=$this->Subpage_model->get_admin_page($page_title);
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/subpage/subpage_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			//  upload image
			$config['upload_path']='./assets/images/subpage';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['remove_spaces']=TRUE;
			$config['max_size']='2048';
			$config['max_width']='5000';
			$config['max_height']='5000';
			$this->load->library('upload',$config);

			//if user not choose image, dont upload or just save image name to DB
			if (empty($_FILES['userfile']['name'])) {
				$image_name='default-subpage.jpg';
			}
			// else if user choose image, do upload
			else{
				if (!$this->upload->do_upload()) { //function to upload image to directory
						// show errors to user
						$error=$this->upload->display_errors();
						$this->session->set_flashdata('error',$error);
						redirect('admin/subpage/create');
					}
				$image_name=$this->upload->data('file_name'); //image name

				// compress image
				$config2['image_library']='gd2';
				$config2['source_image']='./assets/images/subpage/'.$image_name;
				$config2['width']=500;
				$config2['height']=500;
				$config2['quality']='50%';
				$this->load->library('image_lib', $config2);
				if (!$this->image_lib->resize()) {
					die($this->image_lib->display_errors());
				}
				
			}
			
			$this->Subpage_model->create_subpage($image_name);
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/subpage');
		}
	}
	public function edit($page_title,$subpage_id){
		check_logged_in();
		$data['title']="Edit subpage";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['subpage']=$this->Subpage_model->get_admin_subpage($page_title,$subpage_id);
			if (empty($data['subpage'])) {
				show_404();
			}
			
			$data['page']=$this->Subpage_model->get_admin_page($page_title);
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/subpage/subpage_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->Subpage_model->update_subpage();
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect("admin/subpage/$page_title");
		}
	}
	public function delete($subpage_id){
		check_logged_in();
		$query=$this->Subpage_model->get_admin_subpage($subpage_id);
		
		$path=FCPATH."assets/images/subpage/";
		$image_name=$query['image_name'];
		$image_path=$path.$image_name;
		// delete file if exist or if image name isnt default-subpage.jpg
		if (file_exists($image_path) && $image_name!='default-subpage.jpg') { 
			unlink($image_path);
		}
		$this->Subpage_model->delete_subpage($subpage_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect("admin/subpage/$page_title");	
	}
}


