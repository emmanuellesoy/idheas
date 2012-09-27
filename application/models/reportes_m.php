<?php

    class Reportes_m extends CI_Model {

        function __construct(){
            
            parent::__construct();
            
            $this->load->database();
        
        }
		
			public function mReporteLargo(){
				$casoId =1;
		
				/* Trae todos los datos de casos*/
				$this->db->select('*');
				$this->db->from('casos');
				$this->db->where('casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['casos'] = $row;
					}
				}
				
				
				/* Trae todos los datos de infoCaso*/
				$this->db->select('*');
				$this->db->from('infoCaso');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['infoCaso'] = $row;
					}
				}
				
				/* Trae todos los datos de fichas*/
				$this->db->select('*');
				$this->db->from('fichas');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['fichas'][$row['fichaId']] = $row;
					}
				}
				
				/* Trae todos los datos de lugares*/
				$this->db->select('*');
				$this->db->from('lugares');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['lugares'][$row['lugarId']] = $row;
					}
				}
				
				/* Trae todos los datos de nucleoCaso*/
				$this->db->select('*');
				$this->db->from('nucleoCaso');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['nucleoCaso'] = $row;
					}
					echo 'HOla';
				}
				
				/* Trae todos los datos de intervenciones*/
				$this->db->select('*');
				$this->db->from('intervenciones');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['intervenciones'][$row['intervencionId']] = $row;
					}
				}
		
				/* Trae todos los datos de actos*/
				$this->db->select('*');
				$this->db->from('actos');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['actos'][$row['actoId']] = $row;
					}
					
					foreach ($datos['actos'] as $row) {
						$this->db->select('*');
						$this->db->from('victimas');
						$this->db->where('actos_actoId', $row['actoId']);
						$consulta = $this->db->get();
						
						if ($consulta->num_rows() > 0){				
							/* Pasa la consulta a un cadena */
							foreach ($consulta->result_array() as $row) {
								$datos['victimas'][$row['victimaId']] = $row;
							}
							
							foreach ($datos['victimas'] as $row) {
								$this->db->select('*');
								$this->db->from('perpetradores');
								$this->db->where('victimas_victimaId', $row['victimaId']);
								$consulta = $this->db->get();
								
								if ($consulta->num_rows() > 0){				
									/* Pasa la consulta a un cadena */
									foreach ($consulta->result_array() as $row) {
										$datos['actos']['victimas']['perpetradores'][$row['perpetradorVitimaId']] = $row;
									}
								}
							}/*Fin foreach Victimas*/
						}
					}/*Fin foreach actos*/
					
					foreach ($datos['actos'] as $row) {
						$this->db->select('*');
						$this->db->from('derechoAfectado');
						$this->db->where('actos_actoId', $row['actoId']);
						$consulta = $this->db->get();
						
						if ($consulta->num_rows() > 0){				
							/* Pasa la consulta a un cadena */
							foreach ($consulta->result_array() as $row) {
								$datos['derechoAfectado'][$row['derechoAfectadoCasoId']] = $row;
							}
						}
					}/* Fin foreach de derechoAfectado*/
				}
				
				
				/* Trae todos los datos de fuenteInfoPersonal*/
				$this->db->select('*');
				$this->db->from('fuenteInfoPersonal');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['fuenteInfoPersonal'][$row['fuenteInfoPersonalId']] = $row;
					}
				}
				
				/* Trae todos los datos de fuenteInfoPersonal*/
				$this->db->select('*');
				$this->db->from('tipoFuenteDocumental');
				$this->db->where('casos_casoId',$casoId);
				$consulta = $this->db->get();
							
				if ($consulta->num_rows() > 0){				
					/* Pasa la consulta a un cadena */
					foreach ($consulta->result_array() as $row) {
						$datos['tipoFuenteDocumental'][$row['tipoFuenteDocumentalId']] = $row;
					}
				}
				
				if (isset($datos)) {
					return $datos;
				}else{
					return $mensaje = 'No hay datos en la base de datos';
				}
				
			}/* Fin de mReporteLargo*/
			
			public function mReporteCorto($casoId){
		
		
				/* Trae todos los datos de casos*/
				$this->db->select('nombre');
				$this->db->from('casos');
				$this->db->where('casoId',$casoId);
				$consulta = $this->db->get();
							
				
				
			}/* Fin de mReporteCorto*/
			
			
	}
	
?>