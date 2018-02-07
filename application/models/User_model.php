<?php 
	
class User_model extends CI_Model
{
	
	// LOGIN FUNCTION
	public function login($email,$password){
		$result=$this->db->get_where('user',array('email'=>$email,'password'=>$password));
		if ($result->num_rows()>0) {
			return $result->row_array();
		}
		else{
			return false;
		}
	}

	// CRUD FUNCTION
	public function create_user($enc_password)
	{
		$data=array(
			'email'=>strtolower($this->input->post('email')),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'role'=>$this->input->post('role'),
			'password'=>$enc_password
			);
		return $this->db->insert('user',$data);
		
	}
	public function get_user($user_id=FALSE){
		if ($user_id==FALSE) {
			$query=$this->db->get('user');
			return $query->result_array();
		}
		$query=$this->db->get_where('user',array('user_id'=>$user_id));
		return $query->row_array();
	}
	public function update_user()
	{
		$user_id=$this->input->post('user_id');
		$data=array(
			'email'=>$this->input->post('email'),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'role'=>$this->input->post('role')
			);
		$this->db->where('user_id',$user_id);
		return $this->db->update('user',$data);
		
	}

	public function delete_user($user_id)
	{
		$this->db->where('user_id',$user_id);
		$this->db->delete('user');
		return true;
		
	}
	public function resetpassword_user($user_id)
	{
		$query=$this->db->get_where('user',array('user_id'=>$user_id))->row_array();
		$email=md5($query['email']);
		$data=array(
			'password'=>$email
			);
		$this->db->where('user_id',$user_id);
		return $this->db->update('user',$data);
		
	}
	public function changepassword($user_id)
	{
		$newpassword=md5($this->input->post('newpassword'));
		$data=array(
			'password'=>$newpassword
			);
		$this->db->where('user_id',$user_id);
		return $this->db->update('user',$data);
		
	}
	// HELPER FUNCTION
	public function check_email_exists($email){
		$query=$this->db->get_where('user',array('email'=>$email));
		if ($query->num_rows()<1) {
			return true; //data belum ada
		}
		else{
			return false; //data sudah ada
		}
	}
	public function check_password($user_id){
		$oldpassword=md5($this->input->post('oldpassword'));
		$query=$this->db->get_where('user',array('user_id'=>$user_id))->row_array();
		if ($query['password'] == $oldpassword) {
			return true; //password benar
		}
		else{
			return false; //password salah
		}
	}

}
