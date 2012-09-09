<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actores_c extends CI_Controller {

	  public function __construct()
       {
            parent::__construct();
            
            $this->load->helper('url');
            
            $this->load->model(array('actores_m'));
            
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
            
		foreach($_POST as $campo => $valor){ 
   		
                    $pos = strpos($campo, '_');
                    
                    $nombre_tabla = substr($campo, 0, $pos);
                    
                    $nombre_campo = substr($campo, ++$pos);
                    
                    $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 
                        
                }
                
		$this->load->model('actores_m', 'am');
		 
		$datos['agregado'] = $this->am->mAgregarActor($datos);
                
                redirect(base_url().'index.php/form_c');
                
	}
	
	/* 
	 * Este clase lista los actores dependiendo del tipo de actor (individual, transmigrante, colectivo)
	 * @param tipoActorId
	 * */
	
	public function listarActores(){
            
                $tipoActorId = $this->input->post('tipoActorId');
		
		$this->load->model('actores_m', 'am');
		
		$datos = $this->am->mListaActores($tipoActorId);
		
		print_r($datos);
		
	}
	
	/* 
	 * Este trae todos los datos de un actor
	 * @param actorId, tipoActorId
	 * */
	
	public function TraeDatosActores(){
		
		$this->load->model('actores_m', 'am');
		
		$datos = $this->am->mTraerActores();
		
		print_r($datos);
		
	}
        
        public function cTraerDatosActor(){
        
        $actorId = 12;
            
        print_r($datos['actor'] = $this->actores_m->mTraeDatosActores($actorId, 1));
        
        $datos['_actorId'] = $actorId;
        
        $this->load->view('formulariosCargados/formularioIndividual_v', $datos);
        
        
        
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/actores_c.php */
