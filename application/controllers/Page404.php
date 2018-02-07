<?php 
class Page404 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page404_view');
		$this->load->view('templates/footer');
	}
}


