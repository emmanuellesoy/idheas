<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogos_c extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
    
        $this->load->model(array('catalogos_m'));
        
    }


    public function cTraerDatosCatalogoActos(){
        
        $datos = $this->catalogos_m->mTraerDatosCatalogoActos();
        
        print_r($datos);
        
    }
    
    public function cTraerDatosCatalogoNombre(){
        
        $datos = $this->catalogos_m->mTraerDatosCatalogoNombre();
        
        print_r($datos);
        
    }
    
}

?>