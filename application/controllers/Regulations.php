<?php 
class Regulations extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="Regulations";
		$this->load->view("templates/header");
		$this->load->view("regulations/regulations_index",$data);
		$this->load->view("templates/footer");
	}

	
}


