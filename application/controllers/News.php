<?php 
class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($offset = 0)
	{
		// pagination
		$config['base_url'] = base_url('news/index');
		$config['total_rows'] = $this->db->count_all('news');
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

		$data['title']="News";
		$data['breadcrumb']=breadcrumb();
		$data['news']=$this->News_model->get_home_news(FALSE,$config['per_page'],$offset);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		$this->load->view("templates/header");
		$this->load->view("news/news_index",$data);
		$this->load->view("templates/footer");
	}
	public function view($slug){
		$data['news'] = $this->News_model->get_home_news($slug);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,3,FALSE);
		if (empty($data['news'])) {
			show_404();
		}
		$data['title'] = $data['news']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("news/news_view",$data);
		$this->load->view("templates/footer");	
	}

	// ADMIN
	public function admin(){
		check_logged_in();
		$data['title']="News";
		$data['news']=$this->News_model->get_admin_news(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/news/news_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
		check_logged_in();
		$data['title']="Create News";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		if ($this->form_validation->run() === false) {
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/news/news_create",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			//  upload image
			$config['upload_path']='./assets/images/news';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['remove_spaces']=TRUE;
			$config['max_size']='2048';
			$config['max_width']='5000';
			$config['max_height']='5000';
			$this->load->library('upload',$config);

			//if user not choose image, dont upload or just save image name to DB
			if (empty($_FILES['userfile']['name'])) {
				$image_name='default-news.jpg';
			}
			// else if user choose image, do upload
			else{
				if (!$this->upload->do_upload()) { //function to upload image to directory
						// show errors to user
						$error=$this->upload->display_errors();
						$this->session->set_flashdata('error',$error);
						redirect('admin/news/create');
					}
				$image_name=$this->upload->data('file_name'); //image name

				// compress image
				$config2['image_library']='gd2';
				$config2['source_image']='./assets/images/news/'.$image_name;
				$config2['width']=500;
				$config2['height']=500;
				$config2['quality']='50%';
				$this->load->library('image_lib', $config2);
				if (!$this->image_lib->resize()) {
					die($this->image_lib->display_errors());
				}
				
			}
			
			$this->News_model->create_news($image_name);
			$this->session->set_flashdata('info','Data successfuly created');
			redirect('admin/news');
		}
	}
	public function edit($news_id){
		check_logged_in();
		$data['title']="Edit News";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['news']=$this->News_model->get_admin_news($news_id);
			if (empty($data['news'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/news/news_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			//  upload image
			$config['upload_path']='./assets/images/news';
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['remove_spaces']=TRUE;
			$config['max_size']='2048';
			$config['max_width']='5000';
			$config['max_height']='5000';
			$this->load->library('upload',$config);
			$image_name=$this->input->post('image_name');

			//if user choose image
			if (!empty($_FILES['userfile']['name'])) {
				
				// upload new image
				if (!$this->upload->do_upload()) { //function to upload image to directory
						// show errors to user
						$error=$this->upload->display_errors();
						$this->session->set_flashdata('error',$error);
						redirect("admin/news/edit/$news_id");
					}
				$image_name=$this->upload->data('file_name'); //new image name

				// delete old image
				$path=FCPATH."assets/images/news/";
				$old_image_name=$this->input->post('image_name');
				$image_path=$path.$old_image_name;
				// delete file if exist or if image name isnt default-news.jpg
				if (file_exists($image_path) && $old_image_name!='default-news.jpg') { 
					unlink($image_path);
				}

				// compress image
				$config2['image_library']='gd2';
				$config2['source_image']='./assets/images/news/'.$image_name;
				$config2['width']=500;
				$config2['height']=500;
				$config2['quality']='50%';
				$this->load->library('image_lib', $config2);
				if (!$this->image_lib->resize()) {
					die($this->image_lib->display_errors());
				}
				
			}
			$this->News_model->update_news($image_name);
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/news');
		}
	}
	public function delete($news_id){
		check_logged_in();
		$query=$this->News_model->get_admin_news($news_id);
		
		$path=FCPATH."assets/images/news/";
		$image_name=$query['image_name'];
		$image_path=$path.$image_name;
		// delete file if exist or if image name isnt default-news.jpg
		if (file_exists($image_path) && $image_name!='default-news.jpg') { 
			unlink($image_path);
		}
		$this->News_model->delete_news($news_id);
		$this->session->set_flashdata('info','Data successfuly deleted');
		redirect('admin/news');	
	}
}


