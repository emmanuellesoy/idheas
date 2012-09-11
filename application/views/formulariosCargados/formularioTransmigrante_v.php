
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span>Nombre:   </span>
				<span id="nombre_transmigrante"></span>
			  </p>
			 
			  <p>
				<span>Apellidos:  </span>
				<span id="apellidosSiglas_transmigrante"></span>
			 
			  </p>
			 
			  <p>
				<span>Alias:   </span>
				<span id="alias_transmigrante"></span>
			  
			  </p>
			  
			  </div>
			  
			<div class="six columns">
			  
			<div class="six columns">
			 
			  <p>
				<span>Género:   </span>
				<span id="generoid_transmigrante"></span>
			
			  </p>
			</div>
			
			<div class="six columns">
			  
			  <p>
				<span>Edad:   </span>
				<span id="edad_transmigrante"></span>
			  </p>
			</div>
			 
			  <p>
				<span>Estado Civil:   </span>
				<span id="estadoCivil_estadoCivilId_transmigrante"></span>
			  </p>
			 
			  <p>
				<span>Nacionalidad:   </span>
				 <span id="nacionalidadId_transmigrante"></span>
			  </p>
			
			</div> 
		</fieldset>	<!--Termina información general-->
		<?php echo br(3);?>
		<fieldset> <!--Detalles-->
		<legend>Detalles:   </legend>
		<div class="six columns">
	 
		 <div class="six columns">
		  <p>
				<span>Hijos:   </span>
				<span id="hijos_transmigrante" ></span>
		  </p>
		 </div>
		  
		 <div class="six columns">									
		   <p>			
			<span>¿Habla español?:   </span>
			<span id="espaniol_transmigrante"></span>
		  </p>
		 </div>
		
		 
		  <p>
			<span>Grupo Indígena:   </span>
				<span id="gruposIndigenas_grupoIndigenaId_transmigrante"></span>
		  </p>

			
		</div>
		<div class="six columns">
		  
		 
		  <p>
			<span>Nivel de Escolaridad:   </span>
			<span id="escolaridad_transmigrante"></span>									 
		  </p>
		 
		  <p>						
			<span>Última Ocupación:   </span>
			<span id="ocupacionesCatalogo_ultimalOcupacionid_transmigrante"></span>
			
		  </p>
		 
		</div>	
	</fieldset><!--Termina Detalles-->

		<?php echo br(3);?>		
				<fieldset>	
					  <legend>Información Migratoria</legend>
				
				<div class="twelve columns">
						<fieldset>		
							<legend>Lugar de origen</legend>
				
							<div class="four columns">		
								  <p>		
								<span >País: </span>
								<div id="paisesCatalogo_paisId_transmigrante"></div>
								  </p>
							</div>
							
							<div class="four columns">
								  <p>		
								<span>Estado: </span>
									<div id="estadosCatalogo_estadoId_transmigrante"></div>
								  </p>
							</div>
							
							<div class="four columns">
							  <p>										
								<span>Municipio: </span>
									<div id="municipiosCatalogos_municipiosId_transmigrante" ></div>
									</select>
							  </p>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
				  <p>
					<span>País de tránsito: </span>
						<div id="paisTransitoId_transmigrante"></div>
					  </p>
																
					  <p>
					<span>País destino: </span>
						<div id="paisDestinoId_transmigrante"></div>
					  </p>
						
					
					  <p>
					<span>Intentos de cruce por el país de tránsito: </span>
						<id="infoMigratoria_IntCrucesTransitoV" ></id>
						
					  </p>
						
				<span>Comentarios:</span>
				  <div id="comentarios_transmigrante" ></div>
				
				  <p>
				<span>Expulsiones del país de destino: </span>
					<div id="expCruceDestino_transmigrante"></div>
				  </p>
					
					</div>
					<div class="six columns">
						
						
					  <p>
					<span>Motivo del viaje: </span>
						<div id="motivoViaje_transmigrante"></div>
					  </p>
						
						
					  <p>
					<span>Tipo de estancia:</span>
						<div id="tipoEstanciaId_transmigrante"></div>
					  </p>
						
						
					  <p>
					<span>Realiza el viaje:</span>
						<div id="realizaViaje_transmigrante" ></div>
						
					
						
					  <p>								
					<span>Intentos de cruce al país destino: </span>
						<div id="intCrucesDest_transmigrante" ></div>
					  </p>
						
					  <p>
					<span>Expulsiones del país de tránsito: </span>
						<div id="expCruceTransito_transmigrante"> </div>
					  </p>
					 
				</div>
					
				</fieldset><!--Termina datos de nacimiento-->
			
	
				<?php echo br(1);?>
				
				
                        <input class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncTrans()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosTrans">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>
					
				<?php echo br(1);?>
</div>
