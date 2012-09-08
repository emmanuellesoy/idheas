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
		 		
		/* Trae todos los datos de actosN1Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN1Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN1Catalogo'] = $row;
		}
		
		/* Trae todos los datos de actosN2Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN2Catalogo'] = $row;
		}
		
		/* Trae todos los datos de actosN3Catalogo*/
		$this->db->select('*');
		$this->db->from('actosN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['actosN3Catalogo'] = $row;
		}
		
		/* Trae todos los datos de actosN4Catalogo*/
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
		
		/* Trae todos los datos de derechosAfactadosN2Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN2Catalogos'] = $row;
		}
		
		/* Trae todos los datos de derechosAfactadosN3Catalogo */
		$this->db->select('*');
		$this->db->from('derechosAfactadosN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['derechosAfactadosN3Catalogos'] = $row;
		}
		
		/* Trae todos los datos de derechosAfactadosN4Catalogo */
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
	
	
	/* Este modelo trae los datos de los catálogos TipoIntervencion */
	
	public function mTraerDatosCatalogoTipoIntervencion(){
		
		/* Trae todos los datos de tipoIntervenciónN1Catalogo */
		$this->db->select('*');
		$this->db->from('tipoIntervencionN1Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoIntervencionN1Catalogo'] = $row;
		}
		
		/* Trae todos los daos de tipoIntervenciónN2Catalogo */
		$this->db->select('*');
		$this->db->from('tipoIntervencionN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoIntervencionN2Catalogo'] = $row;
		}
		
		/* Trae todos los datos de tipoIntervenciónN3Catalogo */
		$this->db->select('*');
		$this->db->from('tipoIntervencionN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoIntervencionN3Catalogo'] = $row;
		}
		
		/* Trae todos los datos de tipoIntervenciónN4Catalogo */
		$this->db->select('*');
		$this->db->from('tipoIntervencionN4Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoIntervencionN4Catalogo'] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;	
	}/* Fin de mTraerDatosCatalogoTipoIntervencion*/
	
	/* Este modelo trae los datos de los catálogos TipoLugar */
	
	public function mTraerDatosCatalogoTipoLugar(){
		
		/* Trae todos los datos de tipoLugarN1Catalogo */
		$this->db->select('*');
		$this->db->from('tipoLugarN1Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoLugarN1Catalogo'] = $row;
		}
		
		/* Trae todos los datos de tipoLugarN2Catalogo */
		$this->db->select('*');
		$this->db->from('tipoLugarN2Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoLugarN2Catalogo'] = $row;
		}
		
		/* Trae todos los datos de tipoLugarN3Catalogo */
		$this->db->select('*');
		$this->db->from('tipoLugarN3Catalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['tipoLugarN3Catalogo'] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
	}/* Fin de mTraerDatosCatalogoTipoLugar*/
	
	/* Este modelo trae los datos de los catálogos Paises-Estados-Municipios */
	
	public function mTraerDatosCatalogoPaises(){
		
		/* Trae todos los datos de paisesCatalogo */
		$this->db->select('*');
		$this->db->from('paisesCatalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['paisesCatalogo'][$row['paisId']] = $row;
		}
		
		/* Trae todos los datos de estadosCatalogo */
		$this->db->select('*');
		$this->db->from('estadosCatalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['estadosCatalogo'][$row['estadoId']] = $row;
		}
		
		/* Trae todos los datos de municipiosCatalogo */
		$this->db->select('*');
		$this->db->from('municipiosCatalogo');
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos['municipiosCatalogo'][$row['municipioId']] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
		
	}/* Fin de mTraerDatosCatalogoPaises */
}