<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Catalogos_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	    $this->load->database();
	}
	
	/* Este modelo trae los datos de un catálogo que sólo tienen un nivel de alcance
	 * @param $nombreCatalogo
	 * */
	
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
	
	
	/* Este modelo trae los datos de los catálogos Actos */
	
	public function mTraerDatosCatalogoActos(){
		 		
		/* Trae todos los daos de actosN1Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN1Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN1Catalogo'] = $row;
		}
		
		/* Trae todos los daos de actosN2Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN2Catalogo'] = $row;
		}
		
		/* Trae todos los daos de actosN3Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN3Catalogo'] = $row;
		}
		
		/* Trae todos los daos de actosN4Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN4Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN4Catalogo'] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
		
		
	}/* Fin de mTraerDatosCatalogoActos*/
	
	/* Este modelo trae los datos de los catálogos DerechosAfectados */
	
	public function mTraerDatosCatalogoDerechosAfectados(){
		
		/* Trae todos los daos de derechosAfactadosN1Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN1Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN1Catalogos'] = $row;
		}
		
		/* Trae todos los daos de derechosAfactadosN2Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN2Catalogos'] = $row;
		}
		
		/* Trae todos los daos de derechosAfactadosN3Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN3Catalogos'] = $row;
		}
		
		/* Trae todos los daos de derechosAfactadosN4Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN4Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN4Catalogos'] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
	} /* fin de mTraerDatosCatalogoDerechosAfectados */
	
	
}