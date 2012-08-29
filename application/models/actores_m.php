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
		
		public function mAgregarActor(){
			
			$datosActor = array(
				'tipoActorId' => '1',
				'tablas' => array(
					'actores' => array('nombre' => 'Jon', 'apellidosSiglas' => 'Hernandez Martinez', 'tipoActorId' => '1', 'codigoPostal' => '10000'),
					'datosDeNacimiento' => array('fechaNacimiento' => '1985-12-24', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1' ),
					'infoContacto' => array('telefono' => '58565856', 'telefonoMovil' => '0445558565856', 'correoE' => 'ejemplo@ejemplo.com', 'fax' => '')
				)
			);
			

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
			/* Agrego el actorId al arreglo en el campo actores_actorId en las tablas...*/
			
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
		}

		public function mListaActores(){
			
			$tipoActorId = '1';
			
			$this->db->select('actorId, nombre');
			
			$this->db->from('actores');
			
			$this->db->where('tipoActorId', 2);
			
			$consulta = $this->db->get();
			
			if($consulta->num_rows() != 0){
				
				foreach($consulta->result_array() as $key => $value){
					
					$listaActores[$value['actorId']] = $value;
					
				}
				
			}
			
			return $listaActores;
			
		}
		
	}
	
?>