<?php

class Form_c extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('actores_m', 'casos_m', 'catalogos_m'));
    }

    function index()
	{
		//CARGA DE LAS LIBRERIAS
		$this->load->helper(array('html', 'url'));					
		$this->load->library('form_validation');
		// TERMINA CARGA DE LAS LIBRERIAS

		if ($this->form_validation->run('login') == FALSE) //SI ES FALSA LA VALIDACION DEL LOGUEO 
		{
			$this->load->view('login');
		}
		else
		{       
                    
                        $Lista['listaActores'] = $this->actores_m->mTraerActores();


/*******************************************************************************************/
				$Lista['lista_casos'] = array(
						'1'=>array(
						   		 'nombre'   => 'G.O.', 
								 'url'   => 'http://static.allkpop.com/wp-content/uploads/2011/08/20110830_go_mblaq-460x613.jpg',
							),
						'2'=>array(
								'nombre'   => 'Joon lee', 
								 'url'   => 'http://24.media.tumblr.com/tumblr_m065d3a4Nu1r7m3tvo5_r1_250.jpg',
							),
						'3'=>array(
						   		 'nombre'   => 'fei', 
								 'url'   => 'http://images4.wikia.nocookie.net/__cb20111031210505/drama/es/images/f/f3/Min_miss_a_362840.jpg',
							),
						'4'=>array(
						   		 'nombre'   => 'G.O.', 
								 'url'   => 'http://static.allkpop.com/wp-content/uploads/2011/08/20110830_go_mblaq-460x613.jpg',
							),
						'5'=>array(
						   		 'nombre'   => 'G.O.', 
								 'url'   => 'http://static.allkpop.com/wp-content/uploads/2011/08/20110830_go_mblaq-460x613.jpg',
							),
						'6'=>array(
						   		 'nombre'   => 'G.O.', 
								 'url'   => 'http://static.allkpop.com/wp-content/uploads/2011/08/20110830_go_mblaq-460x613.jpg',
							));
				///TERMINA INFORMACIÓN DE LA LISTA DE ACTORES
				
				/*************************************************************************************/
				//DATOS PARA LOS FORMULARIOS
				
				///inicia en 1994 termina en  la var que recibe el año del servidor
				$anio=date("Y");  
				$datosCasos['anioCaso']=range(1994, $anio);
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
				$DatosGenerales['id']= 'id="ActorIndv" ';
				$Lista['vista'] = "0";
				//TERMINA INFORMACIÓN DE DATOS PARA LOS FORMULARIOS
				/*************************************************************************************/
				//CARGA DE FORMULARIOS
				$data['colectivo'] = $this->load->view('formularios/formularioColectivo_v', $DatosGenerales  , true);
				$data['transmigrante'] = $this->load->view('formularios/formularioTransmigrante_v', $DatosGenerales , true);
				$data['individual'] = $this->load->view('formularios/FormularioIndividual_v', $DatosGenerales , true);
                $datosCasos['listaActores'] = $this->actores_m->mTraerActores();
                $DatosGenerales['listaActores'] = $this->actores_m->mTraerActores();
				$DatosGenerales['detalleLugar'] = $this->load->view('casos/formulariodetalleLugar_v', $DatosGenerales , true);
				$datosCasos['actor'] = $this->load->view('casos/formularioActo_v', $DatosGenerales , true);
				$datosCasos['infoGral'] = $this->load->view('casos/formularioInfoGral_v', $DatosGenerales , true);
				$datosCasos['selPersona'] = $this->load->view('casos/formularioSelecPersonas_v', $DatosGenerales , true);
				$datosCasos['fuenteDoc'] = $this->load->view('casos/formularioFuenteDoc_v', $DatosGenerales , true);
				$datosCasos['fuentesInfoGral'] = $this->load->view('casos/formulariofuentesInfoPersonal_v', $DatosGenerales , true);
				$datosCasos['intervencion'] = $this->load->view('casos/formularioIntervencion', $DatosGenerales , true);
				$datosCasos['relacionCasos'] = $this->load->view('casos/formularioRelacionCasos_v', $DatosGenerales , true);
				$datosCasos['ficha'] = $this->load->view('casos/formularioSeguimientoCaso_v', $DatosGenerales , true);
				$datosCasos['casos'] = $this->load->view('casos/informacionGeneral_v', $DatosGenerales , true);
				$datosCasos['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', $DatosGenerales , true);
				$datosCasos['infoAdicional'] = $this->load->view('casos/infoAdicional_v', $DatosGenerales , true);
				//TERMINA CARGA DE FORMULARIOS
				
				/*************************************************************************************/
				//AGREGAR VISTAS A CASOS USOS
				$data['listaCasos']=$this->load->view('casos/listaCasos_v',$datosCasos, true);
				$data['vistaCasos']=$this->load->view('casos/principalCasos_v',$datosCasos, true);
				
				/*************************************************************************************/
				//CARGA DE VISTAS
				$data['listaActoresTransmigrante'] = $this->load->view('listaActoresTransmigrante_v',$Lista, true);
				$data['listaActoresColectivo'] = $this->load->view('listaActoresColectivos_v',$Lista, true);
				$data['listaActores'] = $this->load->view('listaActores',$Lista, true);
				$VistasCasosForm['casosMenu'] = $this->load->view('formulariosCargados/casos_v', $Lista , true);
				//$data['individualVista'] = $this->load->view('formulariosCargados/formularioIndividual_v', $VistasCasosForm , true);
				//$data['transmigranteVista'] = $this->load->view('formulariosCargados/formularioTransmigrante_v', $VistasCasosForm , true);
				//$data['colectivoVista'] = $this->load->view('formulariosCargados/formularioColectivo_v', $VistasCasosForm , true);
				
				//CARGA DE LA VISTA MENU
				$this->load->view('menu_v',$data);
		}
	}


	function menu()
	{
	
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if ($this->form_validation->run('listaActores') == FALSE)
		{
				
				$this->load->view('welcome_message');
		}
		else
		{
				$this->load->view('SigueientePagina');
		}
	}
}
?>
