<?php 
class News extends CI_Controller
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
		$data['title']="News";
		$this->load->view("templates/header");
		$this->load->view("news/news_index",$data);
		$this->load->view("templates/footer");
	}

	public function admin(){
		if (!$this->session->userdata('logged_in')) {
			$info=$this->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
		$data['title']="Newss";
		$data['news']=$this->News_model->get_news(); 
		$this->load->view("admin/templates/header");
		$this->load->view("admin/templates/sidebar",$data);
		$this->load->view("admin/news/news_index",$data);
		$this->load->view("admin/templates/footer");
	}
	public function create(){
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
		$data['title']="Edit News";
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if ($this->form_validation->run() === false) {
			$data['news']=$this->News_model->get_news($news_id);
			if (empty($data['news'])) {
				show_404_();
			}
			$this->load->view("admin/templates/header");
			$this->load->view("admin/templates/sidebar",$data);
			$this->load->view("admin/news/news_edit",$data);
			$this->load->view("admin/templates/footer");	
		}
		else{
			$this->News_model->update_news();
			$this->session->set_flashdata('info','Data successfuly updated');
			redirect('admin/news');
		}
	}
	public function delete($news_id){
		$query=$this->News_model->get_news($news_id);
		
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


