<?php 
class Services extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="Services";
		$this->load->view("templates/header");
		$this->load->view("services/services_index",$data);
		$this->load->view("templates/footer");
	}

	
}


