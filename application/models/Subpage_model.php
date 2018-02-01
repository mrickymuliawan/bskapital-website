<?php 
	
class Subpage_model extends CI_Model
{
	
	public function get_home_subpage($slug = FALSE,$limit = FALSE,$offset= FALSE){ //for home
		if ($limit) {
			$this->db->limit($limit,$offset);
		}
		if ($slug === false) {
			$this->db->order_by('sub_page_id','DESC');
			$this->db->join('page','page.page_id = sub_page.page_id');
			$query = $this->db->get('sub_page');
			return $query->result_array();
		}

		$this->db->join('user','user.user_id = subpage.user_id');
		$query=$this->db->get_where('sub_page',array('slug' => $slug));
		return $query->row_array();
	}
	// CRUD FUNCTION
	public function create_subpage($image_name)
	{
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'sub_title'=>$this->input->post('sub_title'),
			'content'=>$this->input->post('content'),
			'page_id'=>$this->input->post('page_id'),
			'slug'=>strtolower($slug),
			'image_name'=>$image_name
			);
		return $this->db->insert('sub_page',$data);
		
	}
	public function get_admin_subpage($page_title, $sub_page_id=FALSE){
		if ($sub_page_id==FALSE) {
			$this->db->order_by('sub_page_id','DESC');
			$this->db->select('sub_page.*,page.title page_title');
			$this->db->join('page','page.page_id = sub_page.page_id');
			$query=$this->db->get_where('sub_page',array('page.title'=>$page_title));
			return $query->result_array();
		}
		$query=$this->db->get_where('sub_page',array('sub_page_id'=>$sub_page_id));
		return $query->row_array();
	}
	public function update_subpage()
	{
		$sub_page_id=$this->input->post('sub_page_id');
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'slug'=>strtolower($slug)
			);
		$this->db->where('sub_page_id',$sub_page_id);
		return $this->db->update('sub_page',$data);
		
	}

	public function delete_subpage($sub_page_id)
	{	
		
		$this->db->where('sub_page_id',$sub_page_id);
		$this->db->delete('sub_page');
		return true;
		
	}


	public function get_admin_page($page_title){
		$query=$this->db->get_where('page',array('title'=>"$page_title"));
		return $query->row_array();
	}

}
