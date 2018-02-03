<?php 
class People extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($slug=FALSE)
	{
		$data['page_title']='people';
		$data['sub_page_list'] = $this->Subpage_model->get_home_subpage($data['page_title']);
		//jika slug kosong atau jika index: ambil row pertama
		if ($slug==FALSE && $data['sub_page_list']) {
			$slug=$data['sub_page_list'][0]['slug'];
		}
		$data['sub_page'] = $this->Subpage_model->get_home_subpage($data['page_title'],$slug);
		if (empty($data['sub_page'])) {
			show_404();
		}
		$data['title'] = $data['sub_page']['title'];
		$data['breadcrumb']=breadcrumb();
		$this->load->view("templates/header");
		$this->load->view("subpage/subpage_view",$data);
		$this->load->view("templates/footer");	
	}

	
}


