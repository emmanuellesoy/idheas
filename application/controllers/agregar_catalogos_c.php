<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregar_catalogos_c extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper('url');
        
        $this->load->helper('file');
        
    }
    
    /*
     * @name: agrgegar_paises
     * @param: no_aplica
     * @descripcion: Esta función agrega el catalogo de paises a la bse de datos.
     * 
     */
    
    public function agregarPaisesC(){
        
        $string = read_file('statics/catalogos/paises.csv');
        
        $rows = explode(';', $string);
        
        foreach($rows as $row){
            
            $obtener_datos = explode(',', $row);
            
            if(isset($obtener_datos[0]) || $obtener_datos[0] != ''){
                
                $query[] = array('nombre' => trim($obtener_datos[0]));
                
            }
        }
        
        $this->load->model('agregar_catalogos_m');
        
        $this->agregar_catalogos_m->agregarPaisesM($query);
        
        echo 'Paises insertados exitosamente';
        
    }
    
    public function agregarEstadosPaisC(){
        
        $string = read_file('statics/catalogos/estadosPaises.csv');
        
        $rows = explode(';', $string);
        
        //print_r($rows);
        
        foreach ($rows as $row){
            
            $obtener_datos= explode('|', $row);
            
            $query[] = array('nombre' => trim($obtener_datos[1]), 'paises_paisId' => trim($obtener_datos[0]));
            
        }
        
        $this->load->model('agregar_catalogos_m');
        
        $result = $this->agregar_catalogos_m->agregarEstadosPaisesM($query);
        
        print_r($result);
        
    }


    /*
     * @name: agrgegar_paises
     * @param: no_aplica
     * @descripcion: Esta función agrega el catalogo de paises a la bse de datos.
     * 
     */
    
    public function agregarEstatusPerpretadorC(){
        
        $string = read_file('statics/catalogos/estatusPerpretador.csv');
        
        $rows = explode(';', $string);
        
        foreach($rows as $row){
            
            $obtener_datos = explode(',', $row);
            
            if(isset($obtener_datos[0]) || $obtener_datos[0] != ''){
                
                $notas = ($obtener_datos[1] == 'Nulo') ? '' : $obtener_datos[1];
                
                $query[] = array('descripcion' => $obtener_datos[0], 'notas' => $notas);
                
            }
        }
        
        $this->load->model('agregar_catalogos_m');
        
        $this->agregar_catalogos_m->agregarEstatusPerpretadorM($query);
        
        ?><?php print_r($query); ?><?php
        
    }
    
    public function agregarEstatusVictimaC(){
        
        $string = read_file('statics/catalogos/estatusVictima.csv');
        
        $rows = explode('$', $string);
        
        //print_r($rows);
        
        foreach($rows as $row){
            
            $obtener_datos = explode('|', $row);
            
            print_r($obtener_datos);
            
            if(isset($obtener_datos[0]) || $obtener_datos[0] != ''){
                
                $notas = ($obtener_datos[0] == 'Nulo') ? '' : $obtener_datos[0];
                
                $query[] = array('descripcion' => $obtener_datos[0], 'notas' => $notas);
                
                
                
            }
        }
        
        //$this->load->model('agregar_catalogos_m');
        
        //$this->agregar_catalogos_m->agregarEstatusVictimaM($query);
        
        ?><?php print_r($query); ?><?php
        
    }
    
    
    
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */