<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*
	 * Esta clase agrega un nuevo actor a la base de datos
	 * @param: $datosActor[array]
	 * @return: $mensaje[string], devuelve un mensaje "hecho" si se realizo exitosamente la consulta,
	 * de lo contrario devuelve "No Agregado".
	 */
	 
	class Actores_m extends CI_Model {
	    
	    public function __construct () {
	        
	         parent::__construct();
	         
	         $this->load->database();
	    
	    }
		
		/* Este modelo agrega un actor
		 * @param $datosActor
		 */
		
		public function mAgregarActor($datosActor){

			/* inserta el array actores en la tabla actores de la BD */
			$this->db->insert('actores', $datosActor['tablas']['actores']);
			
			/* Obtine el Id del último actor insertado*/
			$this->db->select_max('actorId');
			$consulta = $this->db->get('actores');
			
			/* Recorre el array $consulta para traer la cadena del actorId */
			if($consulta->num_rows() > 0){
        		foreach ($consulta->result_array() as $row) {
            		$ultimoActorId = $row['actorId'];
        		}
        	}
			
			/* Agrega el actorId al arreglo en el campo actores_actorId en las tablas...*/
			
			foreach($datosActor['tablas'] as $key => $value){
				if($key != 'actores'){
					$datosActor['tablas'][$key]['actores_actorId'] = $ultimoActorId;
				}
			}
				
        	/*	$datosActor['tablas']['datosDeNacimiento']['actores_actorId'] = $ultimoActorId;	*/
			
			/* Inserta en la BD los arrays */
			
			foreach($datosActor['tablas'] as $key => $value){
				if($key != 'actores'){
					$this->db->insert($key,$datosActor['tablas'][$key]);
				}
			}
			/*	$this->db->insert('datosDeNacimiento',$datosActor['tablas']['datosDeNacimiento']); */
			
		}/* Fin de mAgregarActor*/

		
		/* 
		 * Este modelo hace la consulta para traer todos los actores dependiendo del tipo de actor (individual, transmigrante, colectivo)
		 * @param tipoActorId
		 * */

		public function mListaActores($tipoActorId){

			$this->db->select('actorId, nombre');
			$this->db->from('actores');
			$this->db->where('tipoActorId',$tipoActorId);
			
			$consulta = $this->db->get();
			
			/* Pasa la consulta a un cadena */
			if($consulta->num_rows() != 0){
				foreach($consulta->result_array() as $key => $value){
					$listaActores[$value['actorId']] = $value;
				}
			}
			
			/* Regresa la cadena al controlador */
			return $listaActores;
			
		}
		
		/* 
		 * Este modelo hace la consulta para traer todos los datos de un actor
		 * @param actorId, tipoActorId
		 * */
		
		public function mTraeDatosActores($actorId,$tipoActorId){
			
			switch ($tipoActorId) {
				
				/* Si es el actor es del tipo invividual*/
				case '1': 

						$this->db->select('*');
						$this->db->from('actores');
						$this->db->join('datosDeNacimiento','datosDeNacimiento.actores_actorId = actores.actorId', 'left');
						$this->db->join('infoContacto','infoContacto.actores_actorId = actores.actorId','left');
						$this->db->join('direccionActor','direccionActor.actores_actorId = actores.actorId','left');
						$this->db->join('infoGralActor','infoGralActor.actores_actorId = actores.actorId','left');
						$this->db->join('alias','alias.actores_actorId = actores.actorId','left');
						$this->db->where('actorId',$actorId);
						$this->db->where('estadoActivo',1);
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
						
						/* Regresa la cadena al controlador*/
						return $datos;
						
					break;
					
				/* Si es el actor es del tipo transmigrante*/	
				case '2':
					
						$this->db->select('*');
						$this->db->from('actores');
						$this->db->join('datosDeNacimiento','datosDeNacimiento.actores_actorId = actores.actorId', 'left');
						$this->db->join('infoMigratoria','infoMigratoria.actores_actorId = actores.actorId','left');
						$this->db->join('infoGralActor','infoGralActor.actores_actorId = actores.actorId','left');
						$this->db->where('actorId',$actorId);
						$this->db->where('estadoActivo',1);
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
						
						/* Regresa la cadena al controlador*/
						return $datos;
					
					break;
				
				/* Si es el actor es del tipo colectivo*/
				case '3':
					
						$this->db->select('*');
						$this->db->from('actores');
						$this->db->join('infoContacto','infoContacto.actores_actorId = actores.actorId','left');
						$this->db->join('infoGralActores','infoGralActores.actores_actorId = actores.actorId','left');
						$this->db->where('actorId',$actorId);
						$this->db->where('estadoActivo',1);
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
						
						/* Regresa la cadena al controlador*/
						return $datos;
						
					break;

				default:
						
						/* Si el tipo de actor no existe regresa un mensaje */
						$mensaje = 'Tipo de Actor incorrecto';
						return $mensaje;
						
					break;
			}// fin del Switch

		} /* Fin de mTraeDatosActores() */
		
		
		/* Este modelo busca a un actor por nombre, apellidosSiglas o inicial 
	 	* @param cadena 
	 	*/
		public function mBuscarActoresNombre($cadena){
			
			$this->db->select('actorId, nombre, apellidosSiglas');
			$this->db->from('actores');
			$this->db->like('nombre', $cadena);
			$this->db->or_like('apellidosSiglas', $cadena);
			$consulta = $this->db->get();
			
			/* Pasa la consulta a un cadena */
			foreach ($consulta->result_array() as $key => $value) {
				$datos[$value['actorId']] = $value;
			}
			
			/* Regresa la cadena al controlador*/
			return $datos;

			
		}/* Fin de mBuscarActores() */
		
		/* Este modelo trae los actores en arreglos organizados por tipo (individual, transigrante, colectivo)*/
		
		public function mTraerActores(){
			
			$this->db->select('actorId, tipoActorId, nombre, foto');
			$this->db->from('actores');
			$this->db->where('estadoActivo',1);
			
			$consulta= $this->db->get();	
			
			foreach ($consulta->result_array() as $value) {
                            
				switch (trim($value['tipoActorId'])) {
                                    
					case '1':
                                            
						$datos['individual'][$value['actorId']] = $value;
							
						break;
						
					case '2':
                                            
						$datos['transmigrante'][$value['actorId']] = $value;
						
						break;
					
					case '3':
                                            
						$datos['colectivo'][$value['actorId']] = $value;
					
						break;
						
					default:
                                            
                                            
						$datos = 'No se pudo hacer la consulta';
						
						break;
				}/* fin del switch */
				
			}/* fin foreach */
                        
		/* Regresa la cadena al controlador*/
		return $datos;
			
		}/* fin de traerActores */
		
		/* Este modelo actualiza los datos de un actor
		 * @param ($actorId, $datosActor)
		 * */
		
		public function mActualizaDatosActor($actorId,$datosActor)
		{
			$this->db->where('actorId', $actorId);
			$this->db->update('actores',$datosActor['tablas']['actores']);
			
			foreach($datosActor['tablas'] as $key => $value){
				if($key != 'actores'){
					$this->db->where('actores_actorId', $actorId);
					$this->db->update($key,$datosActor['tablas'][$key]);
				}
			}
			
			/* Regresa la cadena al controlador*/
			return ($mensaje = 'Hecho');
					
		}/* Fin de mActualizaDatosActor */
		
		/* Este modelo cambia el estado de un actor a inactivo, en lugar de eliminarlo de la base de datos
		 * @param ($actorId)
		 * */
		
		public function mCambiaEstadoActivoActor($actorId){
			
			$estado = array('estadoActivo' => 0);
			
			$this->db->where('actorId', $actorId);
			$this->db->update('actores',$estado);
			
			/* Regresa la cadena al controlador*/
			return ($mensaje = 'Hecho');
			
		}/* Fin de mCambiaEstadoActivoActor */
		
		/* Este modelo elimina la relacion en un caso de un perpetrador
		 * @param ($perpetradorId)
		 * */
		
		public function mEliminaPerpetrador($perpetradorId){
			
			$this->db->where('perpetradorId', $perpetradorId);
			$this->db->delete('perpetradrores');
			
			/* Regresa la cadena al controlador*/
			return ($mensaje = 'Hecho');
			
		}/*Fin de mEliminaPerpetrador*/
		
		/*Este modelo relaciona dos actores
<<<<<<< HEAD
         * @param 
         * $datos = array(
         *         'relacionActoresId' => '1' ,
           'actorId' => '1' ,
           'actorRelacionadoId' => '1' ,
           'tipoRelacionId' => '1'
         *         'tipoRelacionIndividualColectivoId' => '1'
        );
         * */
        public function mRelacionaActores($datos){

            $this->db->insert('relacionActores',$datos);

            /* Regresa la cadena al controlador*/
            return ($mensaje = 'Hecho');
        }/* Fin de mRelacionaActores */
		
		public function mEliminaRelacionActores($relacionId){

		    $this->db->where('relacionActoresId', $relacionId);
			$this->db->delete('relacionActores');
		
		    /* Regresa la cadena al controlador*/
		    return ($mensaje = 'Hecho');
	    }/* Fin de mRelacionaActores */	
		
	}
	
?>
