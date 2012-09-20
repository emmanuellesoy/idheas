<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casos_c extends CI_Controller {
 
      public function __construct(){
           
          parent::__construct();
          
          $this->load->model(array('casos_m', 'catalogos_m', 'actores_m'));
          
            $this->load->helper(array('html', 'url'));					
            
            $this->load->library('form_validation');
          
       }
       
       public function traerCatalogos(){
           
           $catalogos = array('estadosCatalogo', 'estatusPerpetradorCatalogo', 'estatusVictimaCatalogo', 'gruposIndigenas', 'idiomaCatalogo', 'nivelConfiabilidadCatalogo', 'ocupacionesCatalogo', 'paisesCatalogo', 'relacionActoresCatalogo', 'tipoFuenteCatalogo', );

            foreach($catalogos as $catalogo){

                $datos[$catalogo] = $this->catalogos_m->mTraerDatosCatalogoNombre($catalogo);

            }

            $datos['actos'] = $this->catalogos_m->mTraerDatosCatalogoActos();

            $datos['derechos'] = $this->catalogos_m->mTraerDatosCatalogoDerechosAfectados();

            $datos['tipoIntervencion'] = $this->catalogos_m->mTraerDatosCatalogoTipoIntervencion();
            
            $datos['tipoLugar'] = $this->catalogos_m->mTraerDatosCatalogoTipoLugar();

            $datos['tipoPerpetrador'] = $this->catalogos_m->mTraerDatosCatalogoTipoPerpetrador();

            return($datos);

       }
       
       public function mostrar_caso($casoId = 0){
           
           $datos['catalogos'] = $this->traerCatalogos();
           
           $datos['datosCaso'] = $this->casos_m->mTraerDatosCaso($casoId);
           
        
        $datos['listaCasos']=$this->load->view('casos/listaCasos_v',$datos, true);
        $datos['casos'] = $this->load->view('casos/informacionGeneral_v', '',true);
        $datos['casosNucleo'] = $this->load->view('casos/nucleoCaso_v', '',true);
        $datos['infoAdicional'] = $this->load->view('casos/infoAdicional_v','', true);

        $this->load->view('casos/principalCasos_v',$datos);
           //Aqui va la vista general
       }
       
       public function mostrar_formulario($casoId = 0){
           
           if($casoId == 0){
               
               $datos['action'] = 'agregar_caso';
               
           } else {
               
               $datos['action'] = 'editar_caso';
               
           }
           
          $datos['datosCaso'] = $this->casos_m->mTraerDatosCaso($casoId);
          $datos['listaCasos']=$this->load->view('casos/listaCasos_v',$datos, true);
          $datos['infoGral'] = $this->load->view('casos/formularioInfoGral_v','', true);
          $this->load->view('formularios/formularioCasosGeneral_v',$datos);
           
           //Aqui va el formulario para nuevo-editar
           
       }
       
       public function agregar_caso(){
           
           foreach($_POST as $campo => $valor){ 
   		
                    $pos = strpos($campo, '_');
                    
                    $nombre_tabla = substr($campo, 0, $pos);
                    
                    $nombre_campo = substr($campo, ++$pos);
                    
                    $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 
                        
                }
           
           $casoId = $this->casos_m->mAgregarCaso($datos);
           
           redirect(base_url.'index.php/casos_c/mostrar_caso/'.$casoId);
           
       }
       
       public function editar_caso($casoId){
           
           if(isset($casoId) > 0){
               
               foreach($_POST as $campo => $valor){ 
   		
                    $pos = strpos($campo, '_');
                    
                    $nombre_tabla = substr($campo, 0, $pos);
                    
                    $nombre_campo = substr($campo, ++$pos);
                    
                    $datos['tablas'][$nombre_tabla][$nombre_campo] = $valor; 
                        
                }
           
            $this->casos_m->mActualisaDatosCaso($casoId, $datos);
               
           }
                
           redirect(base_url.'index.php/casos_c/mostrar_caso/'.$casoId);
           
       }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/casos_c.php */