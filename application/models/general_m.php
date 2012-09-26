<?php

    
    class General_m extends CI_Model {

        function __construct(){
            
            parent::__construct();
            
            $this->load->database();
        
        }
        
        public function obtener_todo($tabla, $llave_primaria = null, $order_by = null){
            
            if(!$order_by){
                
                $consulta = $this->db->select('*')->from($tabla)->get();
                
            } else {
                
                $consulta = $this->db->select('*')->from($tabla)->order_by($order_by)->get();
                
            }
            
            if($llave_primaria){
                
                foreach($consulta->result_array() as $fila){
                 
                    $datos[$fila[$llave_primaria]] = $fila;
                    
                }
                    
            } else {
                
                foreach($consulta->result_array() as $fila){
                 
                    $datos = $fila;
                    
                }
                    
            }
             
            if(isset($datos)){
                
                return $datos;
                
            } else {
                
                return null;
                
            }
            
        }
            
    }

?>