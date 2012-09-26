<?php

    class Actores_m extends CI_Model {

        function __construct(){
            
            parent::__construct();
            
            $this->load->database();
        
        }
        
        /*
         * @Descripcion: Esta funcion agregar un actor
         * @Parametros: $datos [Array]
         * @Return: $mensaje [string]
         * @Ejemplo: $datos = array('actores' => array('nombre' => 'Fulano', 'apellidosSiglas' => 'De Tal'), 'alias' => array('alias' => 'El gato', 'actores_actorId' => 1));
         */
        
        function agregar_actor_m($datos){
            
            $this->db->insert('actores', $datos['actores']);
            
            $obtener_id = $this->db->select_max('actorId')->from('actores')->get();
            
            if($obtener_id->num_rows() > 0){
                
                foreach ($obtener_id->result_array() as $row) {
                
                    $actorId = $row['actorId'];
        	
                }
                
            }
            
            foreach($datos as $tabla => $campo){
                
                if($tabla != 'actores' && $tabla != ''){
                    
                    $datos[$tabla]['actores_actorId'] = $actorId;
                    
                    $this->db->insert($tabla, $datos[$tabla]);
                    
                }
                
            }
                    
        }
        
        function listado_actores_m($tipoActorId){
            
            $consulta = $this->db->select('actorId, nombre, apellidosSiglas')->from('actores')->where('tipoActorId',$tipoActorId)->where('estadoActivo', 1)->get();
	
            if($consulta->num_rows() > 0){
                
                foreach($consulta->result_array() as $actor){
                
                    $lista[$actor['actorId']] = $actor;
                    
                }
                
            } else {
                
                $lista = null;
                
            }
	
            return $lista;
            
        }
        
        function traer_datos_actor_m($actorId, $tipoActorId){
            
            switch ($tipoActorId) {

                /* Si es el actor es del tipo invividual*/
                case '1': 

                $this->db->select('estadoActivo');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);

                $estadoActivo = $this->db->get();

                foreach ($estadoActivo->result_array() as $value) {
                $es_activo = $value;
                }


                /* Si el actor solicitado está activo*/
                if($es_activo['estadoActivo'] == 1){

                /* Trae todos los datos de actores*/
                $this->db->select('*');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);
                $this->db->where('estadoActivo',1);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['actores'] = $row;
                }
                }

                /* Trae todos los datos de datosDeNacimiento */
                $this->db->select('*');
                $this->db->from('datosDeNacimiento');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['datosDeNacimiento'] = $row;
                }
                }

                /* Trae todos los datos de infoContacto */
                $this->db->select('*');
                $this->db->from('infoContacto');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoContacto'] = $row;
                }
                }

                /* Trae todos los datos de direccionActor */
                $this->db->select('*');
                $this->db->from('direccionActor');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['direccionActor'] = $row;
                }
                }

                /* Trae todos los datos de infoGralActor */
                $this->db->select('*');
                $this->db->from('infoGralActor');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoGralActor'] = $row;
                }
                }

                /* Trae todos los datos de alias */
                $this->db->select('*');
                $this->db->from('alias');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                    /* Pasa la consulta a un cadena */
                    foreach ($consulta->result_array() as $row) {
                        $datos['alias'] = $row;
                    }
                }

                /* Trae todos los datos de relacionActores */
                $this->db->select('*');
                $this->db->from('relacionActores');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                    /* Pasa la consulta a un cadena */
                    foreach ($consulta->result_array() as $row) {
                        $datos['relacionActores'][$row['relacionActoresIdId']] = $row;
                    }
                }
                
                if(isset($datos['relacionActores'])){
                    
                    $this->db->select('actorId, nombre, apellidosSiglas');
                    
                    $this->db->from('actores');
                    
                    foreach($datos['relacionActores'] as $relacion){
                        
                        $this->db->where('actorId', $relacion['actorRelacionadoId']);
                        
                    }
                    
                    $consulta = $this->db->get();
                    
                    foreach ($consulta->result_array() as $datosActor){
                        
                        $datos['actoresRelacionados'][$datosActor['actorId']]['nombre'] = $datosActor['nombre'].' '.$datosActor['apellidosSiglas'];
                        
                    }
                    
                }
                
                }
                
                /* Regresa la cadena al controlador*/
                return $datos;						
                
                break;

                /* Si es el actor es del tipo transmigrante*/	
                case '2':

                $this->db->select('estadoActivo');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);

                $estadoActivo = $this->db->get();

                foreach ($estadoActivo->result_array() as $value) {
                $es_activo = $value;
                }


                /* Si el actor solicitado está activo*/
                if($es_activo['estadoActivo'] == 1){

                /* Trae todos los datos de actores*/
                $this->db->select('*');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);
                $this->db->where('estadoActivo',1);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['actores'] = $row;
                }
                }

                /* Trae todos los datos de datosDeNacimiento */
                $this->db->select('*');
                $this->db->from('datosDeNacimiento');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['datosDeNacimiento'] = $row;
                }
                }

                /* Trae todos los datos de infoMigratoria */
                $this->db->select('*');
                $this->db->from('infoMigratoria');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoMigratoria'] = $row;
                }
                }

                /* Trae todos los datos de infoContacto */
                $this->db->select('*');
                $this->db->from('infoContacto');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoContacto'] = $row;
                }
                }

                /* Trae todos los datos de direccionActor */
                $this->db->select('*');
                $this->db->from('direccionActor');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['direccionActor'] = $row;
                }
                }

                /* Trae todos los datos de infoGralActor */
                $this->db->select('*');
                $this->db->from('infoGralActor');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoGralActor'] = $row;
                }
                }

                /* Trae todos los datos de alias */
                $this->db->select('*');
                $this->db->from('alias');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['alias'] = $row;
                }
                }

                /* Trae todos los datos de relacionActores */
                $this->db->select('*');
                $this->db->from('relacionActores');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['relacionActores'] = $row;
                }
                }
                }
                /* Regresa la cadena al controlador*/
                return $datos;					
                break;

                /* Si es el actor es del tipo colectivo*/
                case '3':

                $this->db->select('estadoActivo');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);

                $estadoActivo = $this->db->get();

                foreach ($estadoActivo->result_array() as $value) {
                $es_activo = $value;
                }


                /* Si el actor solicitado está activo*/
                if($es_activo['estadoActivo'] == 1){

                /* Trae todos los datos de actores*/
                $this->db->select('*');
                $this->db->from('actores');
                $this->db->where('actorId',$actorId);
                $this->db->where('estadoActivo',1);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['actores'] = $row;
                }
                }

                /* Trae todos los datos de infoContacto */
                $this->db->select('*');
                $this->db->from('infoContacto');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoContacto'] = $row;
                }
                }

                /* Trae todos los datos de infoGralActor */
                $this->db->select('*');
                $this->db->from('infoGralActores');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['infoGralActores'] = $row;
                }
                }

                /* Trae todos los datos de relacionActores */
                $this->db->select('*');
                $this->db->from('relacionActores');
                $this->db->where('actores_actorId',$actorId);
                $consulta = $this->db->get();

                if ($consulta->num_rows() > 0){				
                /* Pasa la consulta a un cadena */
                foreach ($consulta->result_array() as $row) {
                $datos['relacionActores'] = $row;
                }
                }
                }

                return $datos;

                break;

                default:

                /* Si el tipo de actor no existe regresa un mensaje */
                $mensaje = 'Tipo de Actor incorrecto';
                return $mensaje;

                break;
        }// fin del Switch
        
        }
        
    }

?>
