<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ActoresC extends CI_Controller {

	  public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

	public function eliminarActor(){
		
		$this->load->view('formulario');
		
	}

	public function cEliminaActor()
	{
		
		/*
		 * Primero se crea el arreglo $datos para pasarlos a la
		 * funcion mAgregarActor que se encarga de insertar en la base de datos
		 * un nuevo actor.
		 */
		 
		
   		
		$actorId = $this->input->post('actorId'); 

		
		$this->load->model('actores_m', 'am');
		$this->am->mCambiaEstadoActivoActor($actorId);
		
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/cActores.php */
