<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casos_c extends CI_Controller {
 
      public function __construct(){
           
          parent::__construct();
          
          $this->load->model(array('casos_m', 'catalogos_m', 'actores_m'));
          
            $this->load->helper(array('html', 'url'));					
            
            $this->load->library('form_validation');
          
       }
       
       public function index(){
               $Lista['listaActores'] = $this->actores_m->mTraerActores();
            $DatosGenerales['edad']= range(0,100);
            $DatosGenerales['hijos']= range(0,20);
            $DatosGenerales['intentos']= range(0,20);
            $DatosGenerales['estadoCivil']= $this->catalogos_m->mTraerDatosCatalogoNombre('estadoCivil');;
            $DatosGenerales['nacionalidad']= array('Mexicano' => 1, 'Salvadoreño' => 2, 'Colombiano' => 3, 'Argentino' => 4,'Frances' => 5); 
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
            $DatosGenerales['detalleLugar'] = $this->load->view('casos/formulariodetalleLugar_v', $DatosGenerales , true);
            $datosCasos['actor'] = $this->load->view('casos/formularioActo_v', $DatosGenerales , true);
            $datosCasos['infoGral'] = $this->load->view('casos/formularioInfoGral_v', $DatosGenerales , true);
            $datosCasos['selPersona'] = $this->load->view('casos/formularioSelecPersonas_v', $DatosGenerales , true);
            $datosCasos['fuenteDoc'] = $this->load->view('casos/formularioFuenteDoc_v', $DatosGenerales , true);
            $datosCasos['fuentesInfoGral'] = $this->load->view('casos/formularioDetallesInfoPersonal_v', $DatosGenerales , true);
            $datosCasos['intervencion'] = $this->load->view('casos/formularioIntervencion', $DatosGenerales , true);
            $datosCasos['relacionCasos'] = $this->load->view('casos/formularioRelacionCasos_v', $DatosGenerales , true);
            $datosCasos['ficha'] = $this->load->view('casos/formularioSeguimientoCaso_v', $DatosGenerales , true);
            $datosCasos['casos'] = $this->load->view('casos/informacionGeneral_v', $DatosGenerales , true);
            $datosCasos['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', $DatosGenerales , true);
            $datosCasos['infoAdicional'] = $this->load->view('casos/infoAdicional_v', $DatosGenerales , true);
           
           $this->load->view('casos/principalCasos_v', $datosCasos);
           
       }
       
       public function cAgregarCaso(){
           
           $expression = $this->casos_m->mAgregarCaso();
           
           print_r($expression);
           
       }
       
       public function cTraerDatosCaso(){
           
           $expression = $this->casos_m->mTraerDatosCaso();
           
           print_r($expression);
           
       }
       
       
       
       
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/casos_c.php */