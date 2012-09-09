<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregar_catalogos_c extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('file', 'url'));
        
        $this->load->model('agregar_catalogos_m');
        
    }
    
    /*
     * @name: Agrega los catalogos de derechos afectados
     * @param: no_aplica
     * @descripcion: Esta función agrega el catalogo de paises a la bse de datos.
     * 
     */
    
    public function cAgregarDerechosCatalogos(){
        
        $derechosN1 = read_file('statics/catalogos/derechosAfectados/Derechos_Nivel1.csv');
        
        $derechosN1 = explode('&', $derechosN1);
        
        foreach($derechosN1 as $derechoN1){
            
            $obtener_datos = explode('¬', $derechoN1);
                
              $derechos['derechosAfectadosN1Catalogo'][trim($obtener_datos[0])] = array('derechoAfectadoN1Id' => trim($obtener_datos[0]), 'descripcion' => trim($obtener_datos[1]));

        }

        $derechosN2 = read_file('statics/catalogos/derechosAfectados/Derechos_Nivel2.csv');
        
        $derechosN2 = explode('&', $derechosN2);
        
        foreach($derechosN2 as $derechoN2){
            
            $obtener_datos = explode('¬', $derechoN2);
                
              $derechos['derechosAfectadosN2Catalogo'][trim($obtener_datos[0])] = array('derechoAfectadoN2Id' => trim($obtener_datos[0]), 'descripcion' => trim($obtener_datos[1]), 'derechosAfectadosN1Catalogo_derechoAfectadoN1Id' => trim($obtener_datos[2]), 'notas' => trim($obtener_datos[3]));

        }
        
        $derechosN3 = read_file('statics/catalogos/derechosAfectados/Derechos_Nivel3.csv');
        
        $derechosN3 = explode('&', $derechosN3);
        
        foreach($derechosN3 as $derechoN3){
            
            $obtener_datos = explode('¬', $derechoN3);
                
              $derechos['derechosAfectadosN3Catalogo'][trim($obtener_datos[0])] = array('derechoAfectadoN3Id' => trim($obtener_datos[0]), 'descripcion' => trim($obtener_datos[1]), 'derechosAfectadosN2Catalogo_derechoAfectadoN2Id' => trim($obtener_datos[2]), 'notas' => trim($obtener_datos[3]));

        }
        
        $derechosN4 = read_file('statics/catalogos/derechosAfectados/Derechos_Nivel4.csv');
        
        $derechosN4 = explode('&', $derechosN4);
        
        foreach($derechosN4 as $derechoN4){
            
            $obtener_datos = explode('¬', $derechoN4);
                
              $derechos['derechosAfectadosN4Catalogo'][trim($obtener_datos[0])] = array('derechoAfectadoN4Id' => trim($obtener_datos[0]), 'descripcion' => trim($obtener_datos[1]), 'derechosAfectadosN3Catalogo_derechoAfectadoN3Id' => trim($obtener_datos[2]), 'notas' => trim($obtener_datos[3]));

        }
        
        $this->agregar_catalogos_m->mAgregarDerechosCatalogos($derechos);
        
    }
    
    public function cAgregarCatalogosLugares(){
        
        $paises = read_file('statics/catalogos/catalogosLugares/paises.csv');
        
        $estados = read_file('statics/catalogos/catalogosLugares/CatalogosEdos.csv');
        
        $municipios = read_file('statics/catalogos/catalogosLugares/CatalogosMunicipios.csv');
        
        $paises = explode('&', $paises);
        
        $estados = explode('&', $estados);
        
        $municipios = explode('&', $municipios);
        
        foreach($paises as $pais){
            
            $datos_pais = explode('¬', $pais);
            
            $lugares['paisesCatalogo'][$datos_pais[0]] = array('paisId' => trim($datos_pais[0]), 'nombre' => trim($datos_pais[1]));
            
        }
        
        foreach($estados as $estado){
            
            $datos_estado = explode('¬', $estado);
            
            $lugares['estadosCatalogo'][trim($datos_estado[0])] = array('estadoId' => trim($datos_estado[0]), 'nombre' => trim($datos_estado[1]), 'paises_paisId' => trim($datos_estado[2]));
            
        }
        
        foreach($municipios as $municipio){
            
            $datos_municipio = explode('¬', $municipio);
            
            $lugares['municipiosCatalogo'][trim($datos_municipio[0])] = array('municipioId' => trim($datos_municipio[0]), 'nombre' => trim($datos_municipio[1]), 'estados_estadoId' => trim($datos_municipio[2]));
            
        }
        
        $this->agregar_catalogos_m->mAgregarCatalogos($lugares);
        
    }
    
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */