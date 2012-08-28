<?php

class Agregar_catalogos_m extends CI_Model {
    
    public function __construct () {
        
         parent::__construct();
         
         $this->load->database();
    
    }
    
    public function agregarPaisesM($datos){
        
        $this->db->insert_batch('paisesCatalogo', $datos); 
        
    }
    
    public function agregarEstatusPerpretadorM($datos) {
        
        $this->db->insert_batch('estatusPerpetradorCatalogo', $datos); 
        
    }
    
    public function agregarEstatusVictimaM($datos) {
        
        $this->db->insert_batch('estatusVictimaCatalogo', $datos); 
        
    }
    
}
    
?>