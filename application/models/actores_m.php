<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*
	 * Esta clase agrega un nuevo actor a la base de datos
	 * @param: $datosActor[array]
	 * @return: $mensaje[string], devuelve un mensaje "hecho" si se realizo exitosamente la consulta,
	 * de lo contrario devuelve "No Agregado".
	 */
	$datosActor = array(
		'tipoActorId' => '1',
		'tablas' => array(
			'actores' => array('nombre' => 'Juan', 'apellidosSiglas' => 'Hernandez Martinez', 'tipoActorId' => '1', 'codigoPostal' => '10000'),
			'datosDeNacimiento' => array('fechaNacimiento' => '24-12-1985', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_paisId' => '1', 'municipiosCatalogo_paisId' => '1' ),
			'infoContacto' => array('telefono' => '58565856', 'telefonoMovil' => '0445558565856', 'correoE' => 'ejemplo@ejemplo.com', 'fax' => '')
		)
	);
	 
	 
	class Actores_m extends CI_Model {
	    
	    public function __construct () {
	        
	         parent::__construct();
	         
	         $this->load->database();
	    
	    }
		
		public function mAgregarActor($datosActor){
			
			if($datosActor['tipoActorId'] == 1){
			
				$this->db->insert('actores', $datosActor['tablas']['actores']);
				$this->db->select_max('actorId');
				$ultimoActorId = $this->db->get('actores');
				
			}
			
			/*Antes
			$this->db->insert('actores', $datosActor);
			*/
			
			
		}
		
	}
	
?>