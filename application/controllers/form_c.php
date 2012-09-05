<?php

class Form_c extends CI_Controller {

	function index()
	{
		//CARGA DE LAS LIBRERIAS
		$this->load->helper(array('html', 'url'));					
		$this->load->library('form_validation');
                $this->load->model('actores_m');
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
				$DatosGenerales['edad']= range(0,100);
				$DatosGenerales['hijos']= range(0,20);
				$DatosGenerales['intentos']= range(0,20);
				$DatosGenerales['estadoCivil']= array('Casado' => 1, 'Soltero' => 2, 'Viudo' => 3); 
				$DatosGenerales['nacionalidad']= array('narniano' => 1, 'salvadoreño' => 2, 'gnomo' => 3, 'mordoriano' => 4,'gondoriano' => 5); 
				$DatosGenerales['grupoIndigena']= array('Totonaca' => 1, 'Otomi' => 2, 'Maya' => 3, 'Zapoteca' => 4); 
				$DatosGenerales['escolaridad']= array('Primaria' => 1, 'Secundaria' => 2, 'Preparatoria' => 3, 'Carrera' => 4, 'Ninguna' => 5); 
				$DatosGenerales['ultimaOcupacion']= array('Sicario' => 1, 'Presidente' => 2, 'Candidato presidencial' => 3, 'Corredor de bolsa' => 4);
				$DatosGenerales['pais']= array('Mexico' => 1, 'Salvador' => 2, 'Chile' => 3, 'Korea' => 4); 
				$DatosGenerales['estado']= array('Distrito Federal' => 1, 'Chiapas' => 2, 'Morelia' => 3, 'Cuernavaca' => 4); 
				$DatosGenerales['municipio']= array('Tlahuac' => 1, 'Iztapalapa' => 2, 'No se' => 3, 'Se acabo mi creatividad' => 4); 
				$DatosGenerales['motivos']= array('Negocios' => 1, 'Trabajo' => 2, 'No se' => 3, 'Se acabo mi creatividad' => 4); 
				$DatosGenerales['estancia']= array('Vacaional' => 1, 'Largo tiempo' => 2, 'No se' => 3, 'Permanente' => 4); 
				$DatosGenerales['tipoDir']= array('Casa', 'Departamento', 'Hostal', 'Hotel'); 
				$DatosGenerales['tipoActor']= array('Agencia' => 1, 'Institucion publica' => 2, 'Institucion privada' => 3); 
				$DatosGenerales['actividad']= array('Alimentar gatitos' => 1, 'Agencia de mercenarios' => 2, 'No tengo idea' => 3); 
				$DatosGenerales['id']= 'id="ActorIndv" ';
				$Lista['vista'] = "0";
				//TERMINA INFORMACIÓN DE DATOS PARA LOS FORMULARIOS
				/*************************************************************************************/
				//CARGA DE FORMULARIOS
				$data['colectivo'] = $this->load->view('formularios/formularioColectivo_v', $DatosGenerales  , true);
				$data['transmigrante'] = $this->load->view('formularios/formularioTransmigrante_v', $DatosGenerales , true);
				$data['individual'] = $this->load->view('formularios/FormularioIndividual_v', $DatosGenerales , true);
				$data['casos'] = $this->load->view('casos/informacionGeneral_v', $DatosGenerales , true);
				$data['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', $DatosGenerales , true);
				$data['infoAdicional'] = $this->load->view('casos/infoAdicional_v', $DatosGenerales , true);
				//TERMINA CARGA DE FORMULARIOS
				
				/*************************************************************************************/
				//AGREGAR VISTAS A CASOS USOS
				$VistasCasos['casosMenu'] = $this->load->view('formulariosCargados/casos_v', $Lista , true);
				
				
				/*************************************************************************************/
				//CARGA DE VISTAS
				$data['listaActoresTransmigrante'] = $this->load->view('listaActoresTransmigrante_v',$Lista, true);
				$data['listaActoresColectivo'] = $this->load->view('listaActoresColectivos_v',$Lista, true);
				$data['listaActores'] = $this->load->view('listaActores',$Lista, true);
				$data['individualVista'] = $this->load->view('formulariosCargados/formularioIndividual_v', $VistasCasos , true);
				
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
