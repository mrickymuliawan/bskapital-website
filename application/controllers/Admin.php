<?php 
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$path=FCPATH."assets/images/news/";
		$file="dimaria1.jpg";
		$file_path=$path.$file;
		if (file_exists($file_path)) {
			unlink($file_path);
			echo "deleted";
		}
		else{
			echo "tidak ada";
		}
	}
	public function login(){
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
					'email'=>$email,
					'logged_in'=>true
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('info','login successful');
				redirect('admin/user');
			}
			else{
				$this->session->set_flashdata('info','login failed');
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

	// REGULATION
	public function regulation($page="index",$regulation_id=NULL)
	{		
		if (!$this->session->userdata('logged_in')) {
			$info=$this->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
		switch ($page) {
			case 'index':
				$data['title']="regulation";
				$data['regulation']=$this->Regulation_model->get_regulation(); 
				$this->load->view("admin/templates/header");
				$this->load->view("admin/templates/sidebar",$data);
				$this->load->view("admin/regulation/regulation_index",$data);
				$this->load->view("admin/templates/footer");
				break;
			
			case 'create':
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
			break;

			case 'edit':
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
			break;
			case 'delete':
				$this->Regulation_model->delete_regulation($regulation_id);
				$this->session->set_flashdata('info','Data successfuly deleted');
				redirect('admin/regulation/');	
			break;
			default:
				show_404();
			break;
		}	
	}

	// NEWS
	public function news($page="index",$news_id=NULL)
	{		
		if (!$this->session->userdata('logged_in')) {
			$info=$this->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
		switch ($page) {
			case 'index':
				$data['title']="News";
				$data['news']=$this->News_model->get_news(); 
				$this->load->view("admin/templates/header");
				$this->load->view("admin/templates/sidebar",$data);
				$this->load->view("admin/news/news_index",$data);
				$this->load->view("admin/templates/footer");
				break;
			
			case 'create':
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
					redirect('admin/news/');
				}
			break;

			case 'edit':
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
					redirect('admin/news/');
				}
			break;
			case 'delete':
				$this->News_model->delete_news($news_id);
				$this->session->set_flashdata('info','Data successfuly deleted');
				redirect('admin/news/');	
			break;
			default:
				show_404();
			break;
		}	
	}

	// USER
	public function user($page='index',$user_id=NULL)
	{		
		if (!$this->session->userdata('logged_in')) {
			$info=$this->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
		switch ($page) {
			case 'index':
				$data['title']="User";
				$data['user']=$this->User_model->get_user(); 
				$this->load->view("admin/templates/header");
				$this->load->view("admin/templates/sidebar",$data);
				$this->load->view("admin/user/user_index",$data);
				$this->load->view("admin/templates/footer");
			break;

			case 'create':
				$data['title']="Create User";
				$this->form_validation->set_rules('email','email','required|valid_email|callback_check_email_exists');
				$this->form_validation->set_rules('name','name','required');
				
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
			break;

			case 'edit':
				$data['title']="Edit User";
				$this->form_validation->set_rules('email','email','required');
				$this->form_validation->set_rules('name','name','required');
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
			break;

			case 'delete':
				$this->User_model->delete_user($user_id);
				$this->session->set_flashdata('info','Data successfuly deleted');
				redirect('admin/user/');	
			break;

			case 'resetpassword':
				$this->User_model->resetpassword_user($user_id);
				$this->session->set_flashdata('info','Data successfuly updated');
				redirect('admin/user/');	
			break;

			default:
				show_404();
			break;

		}

		
	}
	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists','email already registered');
		if ($this->User_model->check_email_exists($email)) {
			return true; // data belum ada
		}
		else{
			return false; // data sudah ada
		}
	}
}


