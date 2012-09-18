<?php

class relacionesEntreActores_c extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('actores_m', 'casos_m', 'catalogos_m'));
    	$this->load->helper(array('html', 'url'));
    }
/**Las siguientes funciones pertenecen a la parte de informacion de la sección de casos**/

    function index($actorId=0, $relacionActoresId=0) /***Funcion que carga los detallaes del lugar***/
	{
		$data['relaciones'] = $this->actores_m->mTraerRelacionesActores($actorId);
		$data['actorId']=$actorId;
		$data['relacionActoresId']=$relacionActoresId;
		$data['tipoRelacion']= $this->catalogos_m->mTraerDatosCatalogoNombre('relacionActoresCatalogo');
		$data['listaActores'] = $this->actores_m->mTraerActores();
		
		$this->load->view('formularios/formRelEntreActoresIndividuales',$data);
		
		
	}
	
	
	
    function RelOtrosActores($actorId=0, $relacionActoresId=0) /**función que carga el seguimiento de casos**/
	{
		
		$data['relacionActorIndCol']= $this->catalogos_m->mTraerDatosCatalogoNombre('relacionActoresCatalogo');
		$data['listaActores'] = $this->actores_m->mTraerActores();
		$data['actorId']=$actorId;
		$data['relacionActoresId']=$relacionActoresId;
		
		$this->load->view('formularios/formRelEntreIndividuaColectivo_v',$data);
	}

/**Terminan las funciones que pertenecen a la parte de información general de la sección de casos**/	
}


?>
