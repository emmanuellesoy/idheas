<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actores_c extends CI_Controller {

	  public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

	public function index(){
		
		$this->load->view('formulario');
		
	}

	public function agregarActor()
	{
		
		/*
		 * Primero se crea el arreglo $datos para pasarlos a la
		 * funcion mAgregarActor que se encarga de insertar en la base de datos
		 * un nuevo actor.
		 */
		 
		/*foreach($_POST as $nombre_campo => $valor){ 
   		
			$datos[$nombre_campo] = $valor; 
		
		}*/
		
		//print_r($datos);
		 
		$this->load->model('actores_m', 'am');
		 
		$datos['agregado'] = $this->am->mAgregarActor();
	}
	
	public function listarActores(){
		
		$this->load->model('actores_m', 'am');
		
		$datos = $this->am->mListaActores();
		
		print_r($datos);
		
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/cActores.php */
