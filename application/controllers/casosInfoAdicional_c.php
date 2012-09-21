<?php

class casosInfoAdicional_c extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('actores_m', 'casos_m', 'catalogos_m'));
    }
/**Las siguientes funciones pertenecen a la parte de Nucleo Caso **/

    function index($casoId) /***Funcion que carga los detalles de la información personal***/
	{
		$this->load->helper(array('html', 'url'));					
		
        $DatosGenerales['lugares']= $this->catalogos_m->TraerDatosCatalogoPaises();
                
        $DatosGenerales['casoId'] = $casoId; 
		$DatosGenerales['derechosAfectados']= $this->catalogos_m->mTraerDatosCatalogoDerechosAfectados();
		$DatosGenerales['actos']= $this->catalogos_m->mTraerDatosCatalogoActos();
		$DatosGenerales['lugares']= $this->catalogos_m->mTraerDatosCatalogoPaises();
	
		$this->load->view('casos/formularioFuenteDoc_v', $DatosGenerales);
	
		
	}
	
	
    function fuentesDeInformacion($casoId) /**función que carga el seguimiento de casos**/
	{
		$this->load->helper(array('html', 'url'));					
		
        $DatosGenerales['casoId'] = $casoId; 
		$DatosGenerales['derechosAfectados']= $this->catalogos_m->mTraerDatosCatalogoDerechosAfectados();
		$DatosGenerales['actos']= $this->catalogos_m->mTraerDatosCatalogoActos();
	
		$this->load->view('casos/formularioFuenteDoc_v', $DatosGenerales);

	}
	
    function relacionEntreCasos() /**función que carga el seguimiento de casos**/
	{
		$this->load->helper(array('html', 'url'));					
		
                        $Lista['listaActores'] = $this->actores_m->mTraerActores();

		$this->load->view('casos/formularioIntervencion',$Lista);
	}

/**Terminan las funciones que pertenecen a la parte de información general de la sección de casos**/	
}


?>

