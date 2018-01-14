<?php 
	
class Regulation_model extends CI_Model
{
	

	// CRUD FUNCTION
	public function create_regulation($image_name)
	{
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'user_id'=>$this->session->userdata('user_id'),
			'slug'=>$slug
			);
		return $this->db->insert('regulation',$data);
		
	}
	public function get_regulation($regulation_id=FALSE){
		if ($regulation_id==FALSE) {
			$query=$this->db->get('regulation');
			return $query->result_array();
		}
		$query=$this->db->get_where('regulation',array('regulation_id'=>$regulation_id));
		return $query->row_array();
	}
	public function update_regulation()
	{
		$regulation_id=$this->input->post('regulation_id');
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'slug'=>$slug
			);
		$this->db->where('regulation_id',$regulation_id);
		return $this->db->update('regulation',$data);
		
	}

	public function delete_regulation($regulation_id)
	{	

		$this->db->where('regulation_id',$regulation_id);
		$this->db->delete('regulation');
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
