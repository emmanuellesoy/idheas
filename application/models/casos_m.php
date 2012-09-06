<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Casos_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	    $this->load->database();
	}
	
	public function mAgregarCaso(){
		
		$datos = 'hecho';
		
		$datosCasos = array(
		'tablas' => array(
			'casos' => array('nombre' => 'Caso Omasky', 'personasAfectadas' => '2', 'fechaInicial' => '2012-03-01'),
			'infoCaso' => array('descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'resumen' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'observaciones' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. '),
			'infoAdicional' => array('nombreFuente' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'fechaPublicacion' => '1998-12-31', 'tipoFuenteId' => '1', 'url' => 'http://google.com.mx', 'fechaAcceso' => '2010-12-26', 'comentarios' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'observaciones' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'nivelConfiabilidadCatalogo_nivelConfiabilidadId' => '1', 'idiomaCatalogo_idiomaId' => '1'),
			'fichas' => array('titulo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. ', 'fecha' => '2010-02-02', 'comentarios' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia tortor metus, et condimentum quam. Proin enim purus, posuere eu facilisis ac, feugiat a arcu. Proin ut orci diam. Curabitur facilisis euismod metus nec varius. Donec pulvinar ante eget lectus eleifend non volutpat velit pharetra. Nam sed dui diam, sit amet commodo ante. Fusce lobortis lectus a erat aliquam rhoncus. Cras quis porttitor enim. Aenean vitae est nec ligula rhoncus dapibus sit amet id magna. Nulla molestie urna eget ligula consequat a pretium quam ultricies. '),
			'lugares' => array('paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1'),
			'nucleoCaso' => array('fechaInicio' => '2009-01-05', 'fechaTermino' => '2010-06-09', 'noPersonasAfectadas' => '3', 'paisesCatalogo_paisId' => '1', 'estadosCatalogo_estadoId' => '1', 'municipiosCatalogo_municipioId' => '1')
			)
		);
		
		/* inserta el array casos en la tabla casos de la BD */
		$this->db->insert('casos', $datosCasos['tablas']['casos']);
		
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
			
		foreach($datosCasos['tablas'] as $key => $value){
			if($key != 'casos'){
				$datosCasos['tablas'][$key]['casos_casoId'] = $ultimoCasoId;
			}
		}
		
		/* Inserta en la BD los arrays */
		foreach($datosCasos['tablas'] as $key => $value){
			if($key != 'casos'){
				$this->db->insert($key,$datosCasos['tablas'][$key]);
			}
		}
		
		
		return $datos;
		
	}/* Fin de mAgregarCaso() */
	
	/* Este modelo trae los datos de un actor dependiendo de su id
	 * @Param idCaso
	 * */
	
	public function mTraerDatosCaso(){
		$casoId = 1;
		
		$this->db->select('*');
		$this->db->from('casos');
		$this->db->join('infoCaso','infoCaso.casos_casoId = casos.casoId', 'left');
		$this->db->join('infoAdicional','infoAdicional.casos_casoId = casos.casoId','left');
		$this->db->join('fichas','fichas.casos_casoId = casos.casoId','left');
		$this->db->join('lugares','lugares.casos_casoId = casos.casoId','left');
		$this->db->join('nucleoCaso','nucleoCaso.casos_casoId = casos.casoId','left');
		$this->db->where('casoId',$casoId);
		
		$consulta = $this->db->get();
						
		/* Pasa la consulta a un cadena */
		foreach ($consulta->result_array() as $row) {
			$datos[$row['casoId']] = $row;
		}
		
		/* Regresa la cadena al controlador*/
		return $datos;
	}
}
