<?php 
function check_logged_in()
{
	$ci =& get_instance();
	if (!$ci->session->userdata('logged_in')) {
			$info=$ci->session->set_flashdata('info','please login first');
			redirect('admin/login');
		}
}	
function breadcrumb()
{
	$ci =& get_instance();
	$length=count($ci->uri->segment_array());
	if ($length>2) {
		$length-=2;
	}
	elseif ($ci->uri->segment(2) =='index') {
		$length-=1;
	}
	$breadcrumb="<li class='breadcrumb-item'><a href=".base_url().">Home</a></li>";
	for ($i=1; $i <=$length ; $i++) { 
		if ($i<$length) {
			$breadcrumb.=
			"<li class='breadcrumb-item'>
			<a href=".base_url($ci->uri->segment($i)).">
			".ucfirst($ci->uri->segment($i))."
			</a></li>";
		}
		else{
			$breadcrumb.="<li class='breadcrumb-item active'>".ucfirst($ci->uri->segment($i))."</li>";
		}
	}
	return $breadcrumb;
}	
 
?>
