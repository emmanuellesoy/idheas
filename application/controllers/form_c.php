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
				$DatosGenerales['edad']= range(1,100);
				$DatosGenerales['hijos']= range(0,20);
				$DatosGenerales['intentos']= range(0,20);
				$DatosGenerales['estadoCivil']= array('Casado', 'Soltero', 'viudo'); 
				$DatosGenerales['nacionalidad']= array('narniano', 'salvadoreño', 'gnomo', 'mordoriano','gondoriano'); 
				$DatosGenerales['grupoIndigena']= array('totonaca', 'otomi', 'maya', 'zapoteca'); 
				$DatosGenerales['escolaridad']= array('primaria', 'secundaria', 'preparatoria', 'carrera'); 
				$DatosGenerales['ultimaOcupacion']= array('sicario', 'presidente', 'candidato presidencial', 'corredor de bolsa'); 
				$DatosGenerales['pais']= array('Mexico', 'Salvador', 'chile', 'korea'); 
				$DatosGenerales['estado']= array('DF', 'chiapas', 'morelia', 'cuernavaca'); 
				$DatosGenerales['municipio']= array('tlahuac', 'iztapalapa', 'nose', 'se acabo mi creatividad'); 
				$DatosGenerales['motivos']= array('negocios', 'trabajo', 'nose', 'se acabo mi creatividad'); 
				$DatosGenerales['estancia']= array('vacaional', 'largo tiempo', 'nose', 'permanente'); 
				$DatosGenerales['tipoDir']= array('casa', 'departamento', 'hostal', 'hotel'); 
				$DatosGenerales['tipoActor']= array('agencia', 'institucion publica', 'institucion privada', ); 
				$DatosGenerales['actividad']= array('alimentar gatitos', 'agencia de mercenarios', 'no tengo idea', ); 
				$DatosGenerales['id']= 'id="ActorIndv" ';
				$Lista['vista'] = "0";
				//TERMINA INFORMACIÓN DE DATOS PARA LOS FORMULARIOS
				
				/*************************************************************************************/
				//CARGA DE FORMULARIOS
				$data['colectivo'] = $this->load->view('formularios/formularioColectivo_v', $DatosGenerales  , true);
				$data['transmigrante'] = $this->load->view('formularios/formularioTransmigrante_v', $DatosGenerales , true);
				$data['individual'] = $this->load->view('formularios/FormularioIndividual_v', $DatosGenerales , true);
				//TERMINA CARGA DE FORMULARIOS
				/*************************************************************************************/
				//CARGA DE VISTAS
				$data['listaActores'] = $this->load->view('listaActores',$Lista, true);
				$data['individualVista'] = $this->load->view('formulariosCargados/formularioIndividual_v', ' ' , true);
				
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
