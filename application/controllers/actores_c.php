<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actores_c extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('html', 'url'));
        
        //$this->load->library(array('traer_catalogos_l'));
        
        $this->load->model(array('actores_m', 'general_m'));
        
    }
    
    function traer_catalogos(){
        
        $datos['paisesCatalogo'] = $this->general_m->obtener_todo('paisesCatalogo', 'paisId', 'nombre');
        
        $datos['estadosCatalogo'] = $this->general_m->obtener_todo('estadosCatalogo', 'estadoId', 'nombre');
        
        $datos['municipiosCatalogo'] = $this->general_m->obtener_todo('municipiosCatalogo', 'municipioId', 'nombre');
        
        $datos['gruposIndigenasCatalogo'] = $this->general_m->obtener_todo('gruposIndigenas', 'grupoIndigenaId', 'descripcion');
        
        $datos['estadosCivilesCatalogo'] = $this->general_m->obtener_todo('estadoCivil', 'estadoCivilId', 'descripcion');
        
        $datos['ocupacionesCatalogo'] = $this->general_m->obtener_todo('ocupacionesCatalogo', 'ocupacionId', 'descripcion');
        
        $datos['nacionalidadesCatalogo'] = $this->general_m->obtener_todo('nacionalidadesCatalogo', 'nacionalidadId', 'nombre');
        
        $datos['relacionActoresCatalogo'] = $this->general_m->obtener_todo('relacionActoresCatalogo', 'tipoRelacionId', 'nombre');
        
        return $datos;
        
    }
    
    function mostrar_actor($actorId = 0, $tipoActorId = 0){
        
        if($actorId > 0){
            
            $datos['catalogos'] = $this->traer_catalogos();
            
            $datos['datosActor'] = $this->actores_m->traer_datos_actor_m($actorId, $tipoActorId);
            
        }
        
        $datos['is_active'] = 'actores';
        
        $datos['is_actor_type'] = $tipoActorId;
        
        $datos['head'] = $this->load->view('general/head_v', $datos, true);
        
        /*
         * se selecciona el tipo de actor y se trae la vista segun el tipo de actor
         */
        
        switch ($tipoActorId){
            
            case(1):
                
                $datos['form'] = $this->load->view('actores/individual_v', $datos, true);
                
            break;
        
            case(2): $datos['form'] = $this->load->view('actores/transmigrante_v', $datos, true);
                
            break;
        
            case(3): $datos['form'] = $this->load->view('actores/colectivo_v', $datos, true);
                
            break;
            
        }
        
        if($tipoActorId > 0){
            
            $datos['listado'] = $this->actores_m->listado_actores_m($tipoActorId);
            
        }
        
        $datos['lista'] = $this->load->view('actores/lista_v', $datos, true);
        
        $datos['content'] = $this->load->view('actores/principal_v', $datos, true);
        
        $datos['body'] = $this->load->view('general/body_v', $datos, true);
            
        $this->load->view('general/principal_v', $datos);
        
    }
    
    function agregar_actor($tipoActorId = 0){
        
        $datos['catalogos'] = $this->traer_catalogos();
        
        if($tipoActorId > 0){
            
            $datos['action'] = base_url().'index.php/actores_c/agregar_actor_bd';
            
                switch ($tipoActorId){

                    case(1):

                        $datos['form'] = $this->load->view('actores/agregar_editar_individual_v', $datos, true);

                    break;

                    case(2): 

                        $datos['form'] = $this->load->view('actores/agregar_editar_transmigrante_v', '', true);

                    break;

                    case(3): 

                        $datos['form'] = $this->load->view('actores/agregar_editar_colectivo_v', '', true);

                    break;
                
                    default : redirect(base_url().'index.php/actores_c/mostrar_actor');
                        
                    break;

                }
                
                $datos['is_active'] = 'actores';
        
                $datos['is_actor_type'] = $tipoActorId;

                $datos['head'] = $this->load->view('general/head_v', $datos, true);
                
                $datos['lista'] = $this->load->view('actores/lista_v', $datos, true);
        
                $datos['content'] = $this->load->view('actores/principal_v', $datos, true);

                $datos['body'] = $this->load->view('general/body_v', $datos, true);

                $this->load->view('general/principal_v', $datos);
            
        } else {
            
            redirect(base_url().'index.php/actores_c/mostrar_actor');
            
        }
        
    }
    
    function agregar_actor_bd(){
        
        foreach($_POST as $campo => $valor){ 

            $pos = strpos($campo, '_');

            $nombre_tabla = substr($campo, 0, $pos);

            $nombre_campo = substr($campo, ++$pos);

            $datos[$nombre_tabla][$nombre_campo] = $valor; 

        }
                
        $datos['agregado'] = $this->actores_m->agregar_actor_m($datos);
        
        redirect(base_url().'index.php/actores_c/mostrar_actor/'.$datos['agregado'].'/'.$_POST['actores_tipoActorId']);
        
    }
    
}

/* End of file actores_c.php */
/* Location: ./application/controllers/actores_c.php */