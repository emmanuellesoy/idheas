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
                
            $tipos = array('image/gif','image/jpeg','image/bmp','image/pjpeg');
                
                $maximo = 1024000; //1000Kb
                
                if (is_uploaded_file($_FILES['actores_foto']['tmp_name'])){ // Se ha subido?
                
                    
                }
                
                if (in_array($_FILES['actores_foto']['type'],$tipos) && $_FILES['actores_foto']['size'] <= $maximo){ // Es correcto?
                
                    $fp = fopen($_FILES['actores_foto']['tmp_name'], 'r'); //Abrimos la imagen
                
                    $imagen = fread($fp, filesize($_FILES['actores_foto']['tmp_name'])); //Extraemos el contenido de la imagen
                
                    $imagen = addslashes($imagen);
                
                    fclose($fp); //Cerramos imagen
                    
                }
            
		foreach($_POST as $campo => $valor){ 
   		
                    $pos = strpos($campo, '_');
                    
                    $nombre_tabla = substr($campo, 0, $pos);
                    
                    $nombre_campo = substr($campo, ++$pos);
                    
                    $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 
                        
                }
                
		//$this->load->model('actores_m', 'am');
		 
		//$datos['agregado'] = $this->am->mAgregarActor($datos);
                
                //print_r($datos);
                
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
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/actores_c.php */
