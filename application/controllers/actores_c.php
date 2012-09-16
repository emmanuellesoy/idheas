<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actores_c extends CI_Controller {

	  public function __construct()
       {
            parent::__construct();
            
            $this->load->model(array('actores_m', 'catalogos_m', 'casos_m'));
    
            $this->load->helper(array('html', 'url'));					
	
            $this->load->library('form_validation');
            
       }

	public function index(){
		
		$this->load->view('formulario');
		
	}

	public function agregarActor()
	{
		
		/*
		 * Primero se crea el arreglo $datos para pasarlos a la
		 * funcion mAgregarActor que se encarga de insertar en la base de datos
		 * un nuevo actor.
		 */
            
		foreach($_POST as $campo => $valor){ 
   		
                    $pos = strpos($campo, '_');
                    
                    $nombre_tabla = substr($campo, 0, $pos);
                    
                    $nombre_campo = substr($campo, ++$pos);
                    
                    $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 
                        
                }
                
		$this->load->model('actores_m', 'am');
                
                $config['upload_path'] = './statics/actores_fotos';
                
                $config['file_name'] = $datos['agregado'];
		
                $config['allowed_types'] = 'jpg';
		
                $config['max_size']	= '3000000';
		
                $this->load->library('upload', $config);
                
                $nombre_foto = base_url().'statics/actores_fotos'.$datos['agregado'].'jpeg';
                
                //$image = imagecreatefromjpeg($nombre_foto);
                
                //ob_start();
                
                //imagejpeg($nombre_foto);
                
                //$foto = ob_get_contents();
                
                //ob_end_clean();
                
                //$datos['tablas']['actores']['foto'] = $foto;
		
		$datos['agregado'] = $this->am->mAgregarActor($datos);
                
                redirect(base_url().'index.php/form_c');
                
	}
	
	/* 
	 * Este clase lista los actores dependiendo del tipo de actor (individual, transmigrante, colectivo)
	 * @param tipoActorId
	 * */
	
	public function listarActores(){
            
                $tipoActorId = $this->input->post('tipoActorId');
		
		$this->load->model('actores_m', 'am');
		
		$datos = $this->am->mListaActores($tipoActorId);
		
		print_r($datos);
		
	}
	
	/* 
	 * Este trae todos los datos de un actor
	 * @param actorId, tipoActorId
	 * */
	
	public function TraeDatosActores(){
		
		$this->load->model('actores_m', 'am');
		
		$datos = $this->am->mTraerActores();
		
		print_r($datos);
		
	}
        
    public function cTraerDatosActor($actorId, $tipoActorId){
        
        $datos['lista_casos'] = array(
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
        
        $datos['carga_ajax'] = 1;
            
        $datos['datosActor'] = $this->actores_m->mTraeDatosActores($actorId, $tipoActorId);
        
        $datos['listaCasos'] = $this->casos_m->mTraerDatosCaso(1);
        
        $datos['actorId'] = $actorId;
        
        $datos['relEntreActores'] = $this->load->view('RelEntreActores_v', $datos, true);
        
        $datos['casosMenu'] = $this->load->view('formulariosCargados/casos_v', $datos, true);
        
        if($tipoActorId == 1){
        
            $this->load->view('formulariosCargados/formularioIndividual_v', $datos);
        
        } elseif ($tipoActorId == 3) {
        
            $this->load->view('formulariosCargados/formularioColectivo_v', $datos);
        
        } else {
        
            $this->load->view('formulariosCargados/formularioTransmigrante_v', $datos);
        
        }
        
        
        
    }
    
    public function traerEditar($actorId =1, $tipoActorId =1){
        
        $data['editar'] = 1;
        
        $data['actorId'] = $actorId;
        
        $anio=date("Y");  
        $data['anioCaso']=range(1994, $anio);
        $data['edad']= range(0,100);
        $data['hijos']= range(0,20);
        $data['intentos']= range(0,20);
        $data['estadoCivil']= $this->catalogos_m->mTraerDatosCatalogoNombre('estadoCivil');;
        $data['nacionalidad']= array('Mexicano' => 1, 'Salvadoreño' => 2, 'Colombiano' => 3, 'Argentino' => 4,'Frances' => 5); 
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
        $data['datosActor'][$actorId] = $this->actores_m->mTraeDatosActores($actorId, $tipoActorId);
	$data['relEntreActores'] = $this->load->view('RelEntreActores_v', $data, true);
        switch($tipoActorId){
                    case '1':
                    $form['formulario'] = $this->load->view('formularios/FormularioIndividual_v', $data , true);
                    break;
                    case '2':
                    $form['formulario'] = $this->load->view('formularios/formularioTransmigrante_v', $data , true);
                    break;
                    case '3':
                    $form['formulario'] = $this->load->view('formularios/formularioColectivo_v', $data , true);
                    break;
            }
        
        
        $this->load->view('vistaeditarFormIndv', $form);

        
    }
    
    public function editarActor(){
        
        foreach($_POST as $campo => $valor){ 
   		
            $pos = strpos($campo, '_');

            $nombre_tabla = substr($campo, 0, $pos);

            $nombre_campo = substr($campo, ++$pos);

            $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 

        }
        
        $this->actores_m->mActualizaDatosActor($_POST['actores_actorId'],$datos);
        
        redirect(base_url().'index.php/actores_c/traerEditar/'.$_POST['actores_actorId'].'/'.$_POST['actores_tipoActorId']);
        
    }
    
    public function cRelacionaActores(){
        
        foreach($_POST as $campo => $valor){ 
   		
            $pos = strpos($campo, '_');

            $nombre_tabla = substr($campo, 0, $pos);

            $nombre_campo = substr($campo, ++$pos);

            $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 

        }
        
        $this->actores_m->mRelacionaActores($_POST['actores_actorId'],$datos);
        
    }
    
    
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/actores_c.php */
