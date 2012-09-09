<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Casos_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	    $this->load->database();
	}
	
	/* Este modelo agrega un caso a la base de datos
	 * @Param $datosCaso
	 * */
	
	public function mAgregarCaso($datosCaso){
		
		/* inserta el array casos en la tabla casos de la BD */
		$this->db->insert('casos', $datosCaso['tablas']['casos']);
		
		/* Obtine el Id del último caso insertado*/
		$this->db->select_max('casoId');
		$consulta = $this->db->get('casos');
		
		/* Recorre el array $consulta para traer la cadena del actorId */
		if($consulta->num_rows() > 0){
    		foreach ($consulta->result_array() as $row) {
        		$ultimoCasoId = $row['casoId'];
    		}
    	}
		
		/* Agrega el casoId al arreglo en el campo casos_casoId en las tablas...*/
			
		foreach($datosCaso['tablas'] as $key => $value){
			if($key != 'casos'){
				$datosCaso['tablas'][$key]['casos_casoId'] = $ultimoCasoId;
			}
		}
		
		/* Inserta en la BD los arrays */
		foreach($datosCaso['tablas'] as $key => $value){
			if($key != 'casos'){
				$this->db->insert($key,$datosCaso['tablas'][$key]);
			}
		}
		
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
		
	}/* Fin de mAgregarCaso() */
	
	/* Este modelo trae los datos de un actor dependiendo de su id
	 * @Param casoId
	 * */
	
	public function mTraerDatosCaso($casoId){
		
		$this->db->select('*');
		$this->db->from('casos');
		$this->db->join('infoCaso','infoCaso.casos_casoId = casos.casoId', 'left');
		$this->db->join('infoAdicional','infoAdicional.casos_casoId = casos.casoId','left');
		$this->db->join('fichas','fichas.casos_casoId = casos.casoId','left');
		$this->db->join('lugares','lugares.casos_casoId = casos.casoId','left');
		$this->db->join('nucleoCaso','nucleoCaso.casos_casoId = casos.casoId','left');
		$this->db->join('relacionCasos','relacionCasos.casos_casoId = casos.casoId','left');
		$this->db->join('intervenciones','intervenciones.casos_casoId = casos.casoId','left');
		$this->db->join('actos','actos.casos_casoId = casos.casoId','left');
		$this->db->where('casoId',$casoId);
		
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos[$row['casoId']] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
	}/* Fin de mTraer DatosCaso*/
	
	/* Este modelo actualiza los datos de un caso
	 * @param ($casoId, $datosCaso)
	 * */
		
	public function mActualisaDatosCaso($casoId,$datosCaso){
		
		$this->db->where('casoId', $casoId);
		$this->db->update('casos',$datosCaso['tablas']['casos']);
		
		foreach($datosCaso['tablas'] as $key => $value){
			if($key != 'casos'){
				$this->db->where('casos_casoId', $casoId);
				$this->db->update($key,$datosCaso['tablas'][$key]);
			}
		}
			
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
		
	}/* Fin de mActualisaDatosCaso */
	
	/* Este modelo cambia el estado de un caso a inactivo, en lugar de eliminarlo de la base de datos
	 * @param ($casoId)
	 * */
	
	public function mCambiaEstadoActivoCaso($casoId){

		$estado = array('estadoActivo' => 0);
		
		$this->db->where('casoId', $casoId);
		$this->db->update('casos',$estado);
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
			
	}/* Fin de mCambiaEstadoActivoCaso */
	
	/* Este modelo elimina una ficha relacionada a un caso
	 * @param ($fichaId)
	 * */
	
	public function mEliminaFichas($fichaId){
			
		$this->db->where('fichaId', $fichaId);
		$this->db->delete('fichas');
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
		
	}/*Fin de mEliminaFichas*/
	
	/* Este modelo elimina la relacion en un caso de una intervención
	 * @param ($intervencionId)
	 * */
	
	public function mEliminaIntervenciones($intervencionId){
			
		$this->db->where('intervencionId', $intervencionId);
		$this->db->delete('intervenciones');
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
		
	}/*Fin de mEliminaIntervenciones*/
	
			
	/* Este modelo elimina la relacion en un caso de un perpetrador
	 * @param ($actoId)
	 * */
	
	public function mEliminaActo($actoId){
		
		$this->db->where('actoId', $actoId);
		$this->db->delete('actos');
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
		
	}/*Fin de mEliminaActo*/
}
