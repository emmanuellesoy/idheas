<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class General_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	    $this->load->database();
	}
	
	public function llenaTabla($datos){
		foreach($datos['tablas'] as $key => $value){
				$this->db->insert($key,$datos['tablas'][$key]);
		}
		
		return ($mensaje = 'Listo datos insertados');
	}	
	
}
