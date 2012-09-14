<?php

class login_c extends CI_Controller {

    function index()
	{
		$this->load->helper(array('html', 'url'));					
		
			$this->load->view('login');

		
	}


}
?>

