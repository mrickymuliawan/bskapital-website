<?php 
	
class Career_model extends CI_Model
{
	

	// CRUD FUNCTION
	public function create_career($image_name)
	{
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'user_id'=>$this->session->userdata('user_id'),
			'slug'=>$slug
			);
		return $this->db->insert('career',$data);
		
	}
	public function get_career($career_id=FALSE){
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
			'slug'=>$slug
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
