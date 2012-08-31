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
			
			$datosActorDummy = array(
				'tipoActorId' => '1',
				'tablas' => array(
					'actores' => array('nombre' => 'Jon', 'apellidosSiglas' => 'Hernandez Martinez', 'tipoActorId' => '1', 'codigoPostal' => '10000'),
					'datosDeNacimiento' => array('fechaNacimiento' => '1985-12-24', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1' ),
					'infoContacto' => array('telefono' => '58565856', 'telefonoMovil' => '0445558565856', 'correoE' => 'ejemplo@ejemplo.com', 'fax' => '')
				)
			);
			
			$datosActorIndividual = array(
				'tipoActorId' => '1',
				'tablas' => array(
					'actores' => array('nombre' => 'Pepito', 'apellidosSiglas' => 'Sirio Martinez', 'tipoActorId' => '1', 'codigoPostal' => '10000'),
					'datosDeNacimiento' => array('fechaNacimiento' => '24-12-1985', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1' ),
					'infoContacto' => array('telefono' => '58565856', 'telefonoMovil' => '0445558565856', 'correoE' => 'ejemplo@ejemplo.com', 'fax' => ''),
		                        'direccionActor' => array('direccion' => 'Calle: Desconocida Esq Lo que sea, Colonia: La otra, Delegación, Otra cosa Nada, Solo porprobar. Juguemos Zombie Island','paisesCatalogo_paisId' => '1','estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1'),
		                        'infoGralActor' => array('generoId' => '1', 'edad' => 21, 'nacionalidad' => 'Ingles', 'hijos' => 4, 'escolaridad' => 'primaria', 'espaniol' => 'Si', 'estadoCivil_estadoCivilId' => 1, 'ocupacionesCatalogo_ultimaOcupacionId' => 1, 'gruposIndigenas_grupoIndigenaId' => 1)
				)
			);
        
	        $datosActorTransmigrante = array(
				'tipoActorId' => '2',
				'tablas' => array(
					'actores' => array('nombre' => 'Joan', 'apellidosSiglas' => 'Hernandez Martinez', 'tipoActorId' => '2', 'codigoPostal' => '10000'),
					'datosDeNacimiento' => array('fechaNacimiento' => '24-12-1985', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1' ),
		                        'infoMigratoria' => array('paisTransitoId' => 1, 'paisDestinoId' => 1, 'intCruceDestino' => 1, 'intCruceTransito' => 1, 'expCruceDestino' => 1, 'expCruceTransito' => 1, 'motivoViaje' => 'Ganar más dinero', 'tipoEstanciaId' => 1, 'realizaViaje' => 'Solo', 'comentarios' => 'No sabe escribir.'),
		                        'infoGralActor' => array('generoId' => '1', 'edad' => 21, 'nacionalidad' => 'Ingles', 'hijos' => 4, 'escolaridad' => 'primaria', 'espaniol' => 'Si', 'estadoCivil_estadoCivilId' => 1, 'ocupacionesCatalogo_ultimaOcupacionId' => 1, 'gruposIndigenas_grupoIndigenaId' => 1)
				)
			);
        
	        $datosActorColectivo = array(
				'tipoActorId' => '3',
				'tablas' => array(
					'actores' => array('nombre' => 'Jan', 'apellidosSiglas' => 'Hernandez Martinez', 'tipoActorId' => '3', 'codigoPostal' => '10000'),
					'infoContacto' => array('telefono' => '58565856', 'telefonoMovil' => '0445558565856', 'correoE' => 'ejemplo@ejemplo.com', 'fax' => ''),
		                        'direccionActor' => array('direccion' => 'Calle: Desconocida Esq Lo que sea, Colonia: La otra, Delegación, Otra cosa Nada, Solo porprobar. Juguemos Zombie Island','paisesCatalogo_paisId' => '1','estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1'),
		                        'infoGralActores' => array('tipoActorColectivoId' => 1, 'actividad' => 'Seguridad Publica', 'paginaWeb' => 'http://www.algoasi.com.mx')
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

		/* 
		 * Este modelo hace la consulta para traer todos los actores dependiendo del tipo de actor (individual, transmigrante, colectivo)
		 * @param actorId, tipoActorId
		 * */

		public function mListaActores(){
			
			$tipoActorId = 3;

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
			
			return $listaActores;
			
		}
		
		/* 
		 * Este modelo hace la consulta para traer todos los datos de un actor
		 * @param actorId, tipoActorId
		 * */
		
		public function mTraeDatosActores(){
			
			$actorId = 13;
			$tipoActorId = 1;
			
			
			switch ($tipoActorId) {
				
				/* Si es el actor es del tipo invividual*/
				case '1': 

						$this->db->select('*');
						$this->db->from('actores');
						$this->db->join('datosDeNacimiento','datosDeNacimiento.actores_actorId = actores.actorId', 'left');
						$this->db->join('infoContacto','infoContacto.actores_actorId = actores.actorId','left');
						$this->db->join('direccionActor','direccionActor.actores_actorId = actores.actorId','left');
						$this->db->join('infoGralActor','infoGralActor.actores_actorId = actores.actorId','left');
						$this->db->where('actorId',$actorId);
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
						
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
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
					
						return $datos;
					
					break;
				
				/* Si es el actor es del tipo colectivo*/
				case '3':
					
						$this->db->select('*');
						$this->db->from('actores');
						$this->db->join('infoContacto','infoContacto.actores_actorId = actores.actorId','left');
						$this->db->join('infoGralActores','infoGralActores.actores_actorId = actores.actorId','left');
						$this->db->where('actorId',$actorId);
						
						$consulta = $this->db->get();
						
						/* Pasa la consulta a un cadena */
						foreach ($consulta->result_array() as $row) {
							$datos[$row['actorId']] = $row;
						}
					
						return $datos;
						
					break;

				default:
						
						/* Si el tipo de actor no existe regresa un mensaje */
						$mensaje = 'Tipo de Actor incorrecto';
						return $mensaje;
						
					break;
			}// fin del Switch

		} /* Fin de mTraeDatosActores() */
		
		/* Este modelo busca a un actor por nombre o apellidosSiglas 
	 	* @param cadena 
	 	*/
	
		public function buscarActores(){
			
			
		}
		
	}
	
?>