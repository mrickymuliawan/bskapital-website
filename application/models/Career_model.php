<?php 
	
class Career_model extends CI_Model
{
	
	public function get_home_career($slug = FALSE){ //for home

		if ($slug === false) {
			$this->db->order_by('career_id','DESC');
			$this->db->join('user','user.user_id = career.user_id');
			$query = $this->db->get('career');
			return $query->result_array();
		}

		$this->db->join('user','user.user_id = career.user_id');
		$query=$this->db->get_where('career',array('slug' => $slug));
		return $query->row_array();
	}
	// CRUD FUNCTION
	public function create_career($image_name)
	{
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'user_id'=>$this->session->userdata('user_id'),
			'slug'=>strtolower($slug)
			);
		return $this->db->insert('career',$data);
		
	}
	public function get_admin_career($career_id=FALSE){
		if ($career_id==FALSE) {
			$query=$this->db->get('career');
			return $query->result_array();
		}
		$query=$this->db->get_where('career',array('career_id'=>$career_id));
		return $query->row_array();
	}
	public function update_career()
	{
		$career_id=$this->input->post('career_id');
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'slug'=>strtolower($slug)
			);
		$this->db->where('career_id',$career_id);
		return $this->db->update('career',$data);
		
	}

	public function delete_career($career_id)
	{	

		$this->db->where('career_id',$career_id);
		$this->db->delete('career');
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
