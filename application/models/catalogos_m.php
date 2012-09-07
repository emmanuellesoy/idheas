<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Catalogos_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	    $this->load->database();
	}
	
	public function mTraerDatosCatalogoNombre(){
		
		$nombreCatalogo = 'estatusPerpetradorCatalogo';
		
		$this->db->select('*');
		$this->db->from($nombreCatalogo);
		
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		
		foreach ($consulta->result_array() as $row) {
			$datos[$nombreCatalogo][] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
		
		
	}/* Fin de mTraerDatosCatalogoNombre*/
	
	public function mTraerDatosCatalogoActos(){
		
		$nombreCatalogo = 'estatusPerpetradorCatalogo';
		
		$this->db->select('*');
		$this->db->from($nombreCatalogo);
		
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos[$row['casoId']] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
		
		
	}/* Fin de mTraerDatosCatalogoActos*/
	
}