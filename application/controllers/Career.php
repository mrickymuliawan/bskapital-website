<?php 
class Career extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="Career";
		$this->load->view("templates/header");
		$this->load->view("career/career_index",$data);
		$this->load->view("templates/footer");
	}

	
}


