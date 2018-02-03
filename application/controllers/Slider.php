<?php 
class Slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($offset = 0)
	{
		// pagination
		$config['base_url'] = base_url('slider/index');
		$config['total_rows'] = $this->db->count_all('slider');
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

		$data['title']="slider";
		$data['breadcrumb']=breadcrumb();
		$data['slider']=$this->Slider_model->get_home_slider(FALSE,$config['per_page'],$offset);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		$this->load->view("templates/header");
		$this->load->view("slider/slider_index",$data);
		$this->load->view("templates/footer");
	}
	public function view($slug){
		$data['slider'] = $this->Slider_model->get_home_slider($slug);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		if (empty($data['slider'])) {
			show_404();
		}
		$data['title'] = $data['slider']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("slider/slider_view",$data);
		$this->load->view("templates/footer");	
	}

	// ADMIN
	public function admin(){
		check_logged_in();
		$data['title']="slider";
		$data['slider']=$this->Slider_model->get_admin_slider(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/slider/slider_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		check_logged_in();
		$data['title']="Create slider";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		if ($this->form_validation->run() === false) {
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/slider/slider_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			//  upload image
			$config['upload_path']='./assets/images/slider';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['remove_spaces']=TRUE;
			$config['max_size']='2048';
			$config['max_width']='5000';
			$config['max_height']='5000';
			$this->load->library('upload',$config);

			//if user not choose image, dont upload or just save image name to DB
			if (empty($_FILES['userfile']['name'])) {
				$image_name='default-slider.jpg';
			}
			// else if user choose image, do upload
			else{
				if (!$this->upload->do_upload()) { //function to upload image to directory
						// show errors to user
						$error=$this->upload->display_errors();
						$this->session->set_flashdata('error',$error);
						redirect('admin/slider/create');
					}
				$image_name=$this->upload->data('file_name'); //image name

				// compress image
				$config2['image_library']='gd2';
				$config2['source_image']='./assets/images/slider/'.$image_name;
				$config2['width']=500;
				$config2['height']=500;
				$config2['quality']='50%';
				$this->load->library('image_lib', $config2);
				if (!$this->image_lib->resize()) {
					die($this->image_lib->display_errors());
				}
				
			}
			
			$this->Slider_model->create_slider($image_name);
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/slider');
		}
	}
	public function edit($slider_id){
		check_logged_in();
		$data['title']="Edit slider";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['slider']=$this->Slider_model->get_admin_slider($slider_id);
			if (empty($data['slider'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/slider/slider_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			//  upload image
			$config['upload_path']='./assets/images/slider';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['remove_spaces']=TRUE;
			$config['max_size']='2048';
			$config['max_width']='5000';
			$config['max_height']='5000';
			$this->load->library('upload',$config);
			$image_name=$this->input->post('image_name');

			//if user choose image
			if (!empty($_FILES['userfile']['name'])) {
				
				$path=FCPATH."assets/images/slider/";
				$image_name=$this->input->post('image_name');
				$image_path=$path.$image_name;
				// delete file if exist or if image name isnt default-slider.jpg
				if (file_exists($image_path) && $image_name!='default-slider.jpg') { 
					unlink($image_path);
				}

				if (!$this->upload->do_upload()) { //function to upload image to directory
						// show errors to user
						$error=$this->upload->display_errors();
						$this->session->set_flashdata('error',$error);
						redirect('admin/slider/create');
					}
				$image_name=$this->upload->data('file_name'); //image name

				// compress image
				$config2['image_library']='gd2';
				$config2['source_image']='./assets/images/slider/'.$image_name;
				$config2['width']=500;
				$config2['height']=500;
				$config2['quality']='50%';
				$this->load->library('image_lib', $config2);
				if (!$this->image_lib->resize()) {
					die($this->image_lib->display_errors());
				}
				
			}
			$this->Slider_model->update_slider($image_name);
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/slider');
		}
	}
	public function delete($slider_id){
		check_logged_in();
		$query=$this->Slider_model->get_admin_slider($slider_id);
		
		$path=FCPATH."assets/images/slider/";
		$image_name=$query['image_name'];
		$image_path=$path.$image_name;
		// delete file if exist or if image name isnt default-slider.jpg
		if (file_exists($image_path) && $image_name!='default-slider.jpg') { 
			unlink($image_path);
		}
		$this->Slider_model->delete_slider($slider_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/slider');	
	}
}


