<?php

class Form_c extends CI_Controller {

	function index()
	{
		$this->load->helper('html');
						
		$this->load->library('form_validation');

		if ($this->form_validation->run('login') == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
				$Lista['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
				$Lista['imagen']= "http://nyan-cat.com/images/nyan-cat.gif";
								
				$DatosGenerales['edad']= range(1,90);
				$DatosGenerales['estadoCivil']= array('Clean House', 'Call Mom', 'Run Errands');
				$DatosGenerales['id']= 'id="ActorIndv" ';
				
				$data['formulario'] = $this->load->view('formularios/formularioColectivo_v', $DatosGenerales , true);
				$data['listaActores'] = $this->load->view('listaActores',$Lista, true);
				$this->load->view('menu',$data);
		}
	}


	function menu()
	{
	
		$this->load->helper('html');
		$this->load->helper('formC');
		$this->load->library('form_validation');
				$this->load->helper('html');

		if ($this->form_validation->run('menu') == FALSE)
		{
			$this->load->view('menu');
		}
		else
		{
				$this->load->view('SigueientePagina');
		}
	}
}
?>
