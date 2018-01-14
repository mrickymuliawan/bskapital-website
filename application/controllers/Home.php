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
		$this->load->view("templates/header");
		$this->load->view("page/home",$data);
		$this->load->view("templates/footer");
	}

	
}


