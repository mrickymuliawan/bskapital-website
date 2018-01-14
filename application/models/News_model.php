<?php 
	
class News_model extends CI_Model
{
	

	// CRUD FUNCTION
	public function create_news($image_name)
	{
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'user_id'=>$this->session->userdata('user_id'),
			'slug'=>$slug,
			'image_name'=>$image_name
			);
		return $this->db->insert('news',$data);
		
	}
	public function get_news($news_id=FALSE){
		if ($news_id==FALSE) {
			$this->db->order_by('news_id','DESC');
			$this->db->join('user','user.user_id = news.user_id');
			$query=$this->db->get('news');
			return $query->result_array();
		}
		$query=$this->db->get_where('news',array('news_id'=>$news_id));
		return $query->row_array();
	}
	public function update_news()
	{
		$news_id=$this->input->post('news_id');
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'slug'=>$slug
			);
		$this->db->where('news_id',$news_id);
		return $this->db->update('news',$data);
		
	}

	public function delete_news($news_id)
	{	
		
		$this->db->where('news_id',$news_id);
		$this->db->delete('news');
		return true;
		
	}


	// HELPER FUNCTION
	// public function check_email_exists($email){
	// 	$query=$this->db->get_where('user',array('email'=>$email));
	// 	if ($query->num_rows()<1) {
	// 		return true; //data belum ada
	// 	}
	// 	else{
	// 		return false; //data sudah ada
	// 	}
	// }


}
