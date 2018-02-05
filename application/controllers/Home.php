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
		$data['about']=$this->Subpage_model->get_home_subpage('about','homepage',1);
		$data['services']=$this->Subpage_model->get_home_subpage('services',FALSE,3);
		$data['news']=$this->News_model->get_home_news(FALSE,1,FALSE);
		$data['regulation']=$this->Regulation_model->get_home_regulation(FALSE,6,FALSE);
		$data['career']=$this->Career_model->get_home_career(FALSE,2);
		$this->load->view("templates/header");
		$this->load->view("home_view",$data);
		$this->load->view("templates/footer");
	}

	
}


