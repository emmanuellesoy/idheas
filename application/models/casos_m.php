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
			return $ultimoCasoId;
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
		
	}/* Fin de mAgregarCaso() */
	
	/* Este modelo trae los datos de un actor dependiendo de su id
	 * @Param casoId
	 * */
	
	public function mTraerDatosCaso($casoId){
		
		$this->db->select('*');
		$this->db->from('casos');
		$this->db->join('infoCaso','infoCaso.casos_casoId = casos.casoId', 'left');
		$this->db->join('fichas','fichas.casos_casoId = casos.casoId','left');
		$this->db->join('lugares','lugares.casos_casoId = casos.casoId','left');
		$this->db->join('nucleoCaso','nucleoCaso.casos_casoId = casos.casoId','left');
		$this->db->join('relacionCasos','relacionCasos.casos_casoId = casos.casoId','left');
		$this->db->join('intervenciones','intervenciones.casos_casoId = casos.casoId','left');
		$this->db->join('actos','actos.casos_casoId = casos.casoId','left');
		$this->db->where('casoId',$casoId);
		
		$consulta = $this->db->get();
		if($consulta->num_rows() != 0){						
			/* Pasa la consulta a un cadena */
			foreach ($consulta->result_array() as $row) {
				$datos[$row['casoId']] = $row;
			}
			/* Regresa la cadena al controlador*/
			return $datos;
		}else{
			$datos = 'No hay casos en la base de datos';
			return $datos;			
		}
	}/* Fin de mTraer DatosCaso*/
	
	/* Este modelo actualiza los datos de un caso
	 * @param ($casoId, $datosCaso)
	 * */
	 
	 public function mListaCasos(){
	 	$this->db->select('casoId, nombre');
		$this->db->from('casos');
		
		$consulta = $this->db->get();
		
		/* Pasa la consulta a un cadena */
		if($consulta->num_rows() != 0){
			foreach($consulta->result_array() as $key => $value){
				$listaCasos[$value['casoId']] = $value;
			}
			/* Regresa la cadena al controlador */
			return $listaActores;
		}else{
			return ($mensaje = 'Aún no tienes casos en la base de datos');
		}
		
		
		 
	 }
		
	public function mActualizaDatosCaso($casoId,$datosCaso){
		
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

	/*Este modelo relaciona dos actores
     * @param $datos 
     * */
    public function mRelacionaCasos($datos){

	    $this->db->insert('relacionCasos',$datos);
	
	    /* Regresa la cadena al controlador*/
	    return ($mensaje = 'Hecho');
    }/* Fin de mRelacionaActores */
   
	/*Este modelo elimina todas las relaciones caso-caso
	 * @param $relacionId
	 * */
   	public function mEliminaRelacionCasos($relacionId){

	    $this->db->where('relacionId', $relacionId);
		$this->db->delete('relacionCasos');
	
	    /* Regresa la cadena al controlador*/
	    return ($mensaje = 'Hecho');
    }/* Fin de mEliminaRelacionCasos */	
    
    /* Este modelo trae todas las relaciones caso-caso
	 * @param $casoId
	 * */
    public function mTraeRelacionesCaso($casoId){
			
		$this->db->select('*');
		$this->db->from('relacionCasos');
		$this->db->where('casos_casoId',$casoId);
		
		$consulta = $this->db->get();
		
		if ($consulta->num_rows() > 0){				
				/* Pasa la consulta a un cadena */
				foreach ($consulta->result_array() as $row) {
                    $relaciones[$casoId] = $row;
                    $relaciones[$casoId]['casoIdB'] = $this->db->select('*')->from('casos')->where('casoId', $row['casoIdB'])->get()->result_array();
				}
				return $relaciones;
			}
		
		/* Regresa la cadena al controlador*/
		return $datos;
			
	}/* Fin de mTraeRelacionesCaso 	*/
	
	/* Actualiza los datos de una relacion caso-caso
	 * @param $relacionId $datosRelacion
	 * */
	public function mActualizaDatosRelacionCaso($relacionId,$datosRelacion){
		$this->db->where('relacionId', $relacionId);
		$this->db->update('relacionCasos',$datosRelacion);
		
		/* Regresa la cadena al controlador*/
		return ($mensaje = 'Hecho');
	}/* Fin de mActualizaDatosRelacionCaso */
}
