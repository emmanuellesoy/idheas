<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DemoCasosJulio extends CI_Controller {
	
	public function __construct(){
            parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->library('form_validation');
            // Your own constructor code
    }
	
	function index(){
	
		$datos['textos'] = 'Hola_Mundo';
	
		$this->load->view('casos/informacionGeneral_v', $datos);
		
		//$this->load->view('casos/informacionGeneral_v', $datos);
		
	}
	
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/actores_c.php */