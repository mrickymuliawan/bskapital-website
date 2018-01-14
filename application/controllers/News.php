<?php 
class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']="News";
		$this->load->view("templates/header");
		$this->load->view("news/news_index",$data);
		$this->load->view("templates/footer");
	}

	
}


