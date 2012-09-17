<?php

class vistaCasos_c extends CI_Controller {

public function __construct() {
        parent::__construct();
        
        
			$this->load->model(array('actores_m', 'casos_m', 'catalogos_m'));
    
            $this->load->helper(array('html', 'url'));					
	
    }

public function index()
	{
				$anio=date("Y");  
				$datosCasos['anioCaso']=range(1994, $anio);
				$data['edad']= range(0,100);
				$data['hijos']= range(0,20);
				$data['intentos']= range(0,20);
				$data['estadoCivil']= $this->catalogos_m->mTraerDatosCatalogoNombre('estadoCivil');
;				$data['nacionalidad']= array('Mexicano' => 1, 'Salvadoreño' => 2, 'Colombiano' => 3, 'Argentino' => 4,'Frances' => 5); 
				$data['grupoIndigena']= $this->catalogos_m->mTraerDatosCatalogoNombre('gruposIndigenas');
				$data['escolaridad']= array('Primaria' => 1, 'Secundaria' => 2, 'Preparatoria' => 3, 'Carrera' => 4, 'Ninguna' => 5); 
				$data['ultimaOcupacion']= $this->catalogos_m->mTraerDatosCatalogoNombre('ocupacionesCatalogo');
				$data['lugares']= $this->catalogos_m->mTraerDatosCatalogoPaises();
				$data['motivos']= array('Negocios' => 1, 'Trabajo' => 2, 'No se' => 3, 'Se acabo mi creatividad' => 4); 
				$data['estancia']= array('Vacaional' => 1, 'Largo tiempo' => 2, 'No se' => 3, 'Permanente' => 4); 
				$data['tipoDir']= array('Casa', 'Departamento', 'Hostal', 'Hotel'); 
				$data['tipoActorColectivo']= $this->catalogos_m->mTraerDatosCatalogoNombre('tipoActorColectivo');
				$data['actividad']= $this->catalogos_m->mTraerDatosCatalogoOcupacion();
				$data['derechosAfectados']= $this->catalogos_m->mTraerDatosCatalogoDerechosAfectados();
				$data['actos']= $this->catalogos_m->mTraerDatosCatalogoActos();
				$data['id']= 'id="ActorIndv" ';


				$data['listaCasos']=$this->load->view('casos/listaCasos_v',$data, true);
				$data['infoGral'] = $this->load->view('casos/formularioInfoGral_v', $data , true);
				$data['selPersona'] = $this->load->view('casos/formularioSelecPersonas_v', $data , true);
				$data['fuentesInfoGral'] = $this->load->view('casos/formularioDetallesInfoPersonal_v', $data , true);
				$data['intervencion'] = $this->load->view('casos/formularioIntervencion', $data , true);
				$data['relacionCasos'] = $this->load->view('casos/formularioRelacionCasos_v', $data , true);
				$data['casos'] = $this->load->view('casos/informacionGeneral_v', $data , true);
				$data['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', $data , true);
				$data['infoAdicional'] = $this->load->view('casos/infoAdicional_v', $data , true);

		$this->load->view('casos/principalCasos_v',$data);

	}
}


?>	