<?php 
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="Homepage";
		$data['slider']=$this->Slider_model->get_home_slider(FALSE,3);
		$this->load->view("templates/header");
		$this->load->view("home_view",$data);
		$this->load->view("templates/footer");
	}

	
}


