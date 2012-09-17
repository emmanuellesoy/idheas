<?php

class vistaCasos_c extends CI_Controller {

public function __construct() {
        parent::__construct();
        
        
			$this->load->model(array('actores_m', 'casos_m', 'catalogos_m'));
    
            $this->load->helper(array('html', 'url'));					
	
            $this->load->library('form_validation');
    }

public function index()
	{
				$anio=date("Y");  
				$datosCasos['anioCaso']=range(1994, $anio);
				$DatosGenerales['edad']= range(0,100);
				$DatosGenerales['hijos']= range(0,20);
				$DatosGenerales['intentos']= range(0,20);
				$DatosGenerales['estadoCivil']= $this->catalogos_m->mTraerDatosCatalogoNombre('estadoCivil');
;				$DatosGenerales['nacionalidad']= array('Mexicano' => 1, 'Salvadoreño' => 2, 'Colombiano' => 3, 'Argentino' => 4,'Frances' => 5); 
				$DatosGenerales['grupoIndigena']= $this->catalogos_m->mTraerDatosCatalogoNombre('gruposIndigenas');
				$DatosGenerales['escolaridad']= array('Primaria' => 1, 'Secundaria' => 2, 'Preparatoria' => 3, 'Carrera' => 4, 'Ninguna' => 5); 
				$DatosGenerales['ultimaOcupacion']= $this->catalogos_m->mTraerDatosCatalogoNombre('ocupacionesCatalogo');
				$DatosGenerales['lugares']= $this->catalogos_m->mTraerDatosCatalogoPaises();
				$DatosGenerales['motivos']= array('Negocios' => 1, 'Trabajo' => 2, 'No se' => 3, 'Se acabo mi creatividad' => 4); 
				$DatosGenerales['estancia']= array('Vacaional' => 1, 'Largo tiempo' => 2, 'No se' => 3, 'Permanente' => 4); 
				$DatosGenerales['tipoDir']= array('Casa', 'Departamento', 'Hostal', 'Hotel'); 
				$DatosGenerales['tipoActorColectivo']= $this->catalogos_m->mTraerDatosCatalogoNombre('tipoActorColectivo');
				$DatosGenerales['actividad']= $this->catalogos_m->mTraerDatosCatalogoOcupacion();
				$DatosGenerales['derechosAfectados']= $this->catalogos_m->mTraerDatosCatalogoDerechosAfectados();
				$DatosGenerales['actos']= $this->catalogos_m->mTraerDatosCatalogoActos();
				$DatosGenerales['id']= 'id="ActorIndv" ';

				$data['infoGral'] = $this->load->view('casos/formularioInfoGral_v', $DatosGenerales , true);
				$data['selPersona'] = $this->load->view('casos/formularioSelecPersonas_v', $DatosGenerales , true);
				$data['fuentesInfoGral'] = $this->load->view('casos/formularioDetallesInfoPersonal_v', $DatosGenerales , true);
				$data['intervencion'] = $this->load->view('casos/formularioIntervencion', $DatosGenerales , true);
				$data['relacionCasos'] = $this->load->view('casos/formularioRelacionCasos_v', $DatosGenerales , true);
				$data['casos'] = $this->load->view('casos/informacionGeneral_v', $DatosGenerales , true);
				$data['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', $DatosGenerales , true);
				$data['infoAdicional'] = $this->load->view('casos/infoAdicional_v', $DatosGenerales , true);

		$this->load->view('menu_v',$data);

	}
}


?>	