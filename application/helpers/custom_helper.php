<?php 
function check_logged_in()
{
	$ci =& get_instance();
	if (!$ci->session->userdata('logged_in')) {
			$info=$ci->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
}	
 
?>
