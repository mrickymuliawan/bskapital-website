<?php 
	
class Slider_model extends CI_Model
{
	
	public function get_home_slider($slug = FALSE,$limit = FALSE){ //for home
		if ($limit) {
			$this->db->limit($limit);
		}
		if ($slug === false) {
			$this->db->order_by('slider_id','DESC');
			// $this->db->join('user','user.user_id = slider.user_id');
			$query = $this->db->get('slider');
			return $query->result_array();
		}

		$this->db->join('user','user.user_id = slider.user_id');
		$query=$this->db->get_where('slider',array('slug' => $slug));
		return $query->row_array();
	}
	// CRUD FUNCTION
	public function create_slider($image_name)
	{
		$data=array(
			'title'=>$this->input->post('title'),
			'sub_title'=>$this->input->post('sub_title'),
			'content'=>$this->input->post('content'),
			'user_id'=>$this->session->userdata('user_id'),
			'image_name'=>$image_name
			);
		return $this->db->insert('slider',$data);
		
	}
	public function get_admin_slider($slider_id=FALSE){
		if ($slider_id==FALSE) {
			$this->db->order_by('slider_id','DESC');
			$this->db->join('user','user.user_id = slider.user_id');
			$query=$this->db->get('slider');
			return $query->result_array();
		}
		$query=$this->db->get_where('slider',array('slider_id'=>$slider_id));
		return $query->row_array();
	}
	public function update_slider($image_name)
	{
		$slider_id=$this->input->post('slider_id');
		$data=array(
			'title'=>$this->input->post('title'),
			'sub_title'=>$this->input->post('sub_title'),
			'content'=>$this->input->post('content'),
			'image_name'=>$image_name
			);
		$this->db->where('slider_id',$slider_id);
		return $this->db->update('slider',$data);
		
	}

	public function delete_slider($slider_id)
	{	
		
		$this->db->where('slider_id',$slider_id);
		$this->db->delete('slider');
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
