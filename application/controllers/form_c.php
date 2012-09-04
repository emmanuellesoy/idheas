<?php

class Form_c extends CI_Controller {

	function index()
	{
		//CARGA DE LAS LIBRERIAS
		$this->load->helper('html');
		$this->load->helper('url');						
		$this->load->library('form_validation');
		// TERMINA CARGA DE LAS LIBRERIAS

		if ($this->form_validation->run('login') == FALSE) //SI ES FALSA LA VALIDACION DEL LOGUEO 
		{
			$this->load->view('login');
		}
		else
		{
				///INFORMACIÓN DE LA LISTA DE ACTORES
				$Lista['todo_list'] = array(
						'1'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'42'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'3'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'4'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'5'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'6'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'7'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'8'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'9'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'10'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'3'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'4'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'5'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'6'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'7'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'8'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'9'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'10'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'13'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'14'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'15'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'16'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'17'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'18'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
							),
						'19'=>array(
						   		 'nombre'   => 'Choi Siwon', 
								 'url'   => 'http://4.bp.blogspot.com/_p0CXJ3C8MF8/TMfCrRuFL9I/AAAAAAAAABw/7vPcLNz_j6E/s1600/18.jpg',
							),
						'11'=>array(
								'nombre'   => 'Sujy', 
								 'url'   => 'http://c1.vingle.net/card_images/69853/original/Miss-A_Suzy-Miss-A_k-pop.jpg',
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
				//TERMINA CARGA DE FORMULARIOS
				
				/*************************************************************************************/
				//AGREGAR VISTAS A CASOS USOS
				$VistasCasos['casosMenu'] = $this->load->view('formulariosCargados/casos_v', ' ' , true);
				
				
				/*************************************************************************************/
				//CARGA DE VISTAS
				$data['listaActores'] = $this->load->view('listaActores',$Lista, true);
				$data['individualVista'] = $this->load->view('formulariosCargados/formularioIndividual_v', $VistasCasos , true);
				
				$data['casosMenu'] = $this->load->view('formulariosCargados/casos_v', ' ' , true);
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
