
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span>Nombre:   </span>
				<span id="actores_nombreV"></span>
			  </p>
			 
			  <p>
				<span>Apellidos:  </span>
				<span id="actores_apellidosSiglasV"></span>
			 
			  </p>
			 
			  <p>
				<span>Alias:   </span>
				<span id="alias_aliasV"></span> 
			  
			  </p>
			  
			  </div>
			  
			<div class="six columns">
			  
			<div class="six columns">
			 
			  <p>
				<span>Género:   </span>
				<span id="infoGralActor_generoidV"></span>
			
			  </p>
			</div>
			
			<div class="six columns">
			  
			  <p>
				<span>Edad:   </span>
				<span id="infoGralActor_edadV"></span>
			  </p>
			</div>
			 
			  <p>
				<span>Estado Civil:   </span>
				<span id="infoGralActor_estadoCivil_estadoCivilV"></span>
			  </p>
			 
			  <p>
				<span>Nacionalidad:   </span>
				 <span id="infoGralActor_nacionalidadV"></span>
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
				<span id="infoGralActor_hijosV" ></span>
		  </p>
		 </div>
		  
		 <div class="six columns">									
		   <p>			
			<span>¿Habla español?:   </span>
			<span id="infoGralActor_espaniolV"></span>
		  </p>
		 </div>
		
		 
		  <p>
			<span>Grupo Indígena:   </span>
				<span id="infoGralActor_grupoIndigenaV"></span>
		  </p>

			
		</div>
		<div class="six columns">
		  
		 
		  <p>
			<span>Nivel de Escolaridad:   </span>
			<span id="infoGralActor_escolaridadV"></span>									 
		  </p>
		 
		  <p>						
			<span>Última Ocupación:   </span>
			<span id="infoGralActor_ocupacionesCatalogo_ultimalOcupacionidV"></span>
			
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
								<div id="datosDeNacimiento_paisesCatalogo_paisIdV"></div>
								  </p>
							</div>
							
							<div class="four columns">
								  <p>		
								<span>Estado: </span>
									<div id="datosDeNacimiento_estadosCatalogo_estadoIdV"></div>
								  </p>
							</div>
							
							<div class="four columns">
							  <p>										
								<span>Municipio: </span>
									<div id="datosDeNacimiento_municipiosCatalogos_municipiosIdV" ></div>
									</select>
							  </p>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
				  <p>
					<span>País de tránsito: </span>
						<div id="infoMigratoria_paisTransitoIdV"></div>
					  </p>
																
					  <p>
					<span>País destino: </span>
						<div id="infoMigratoria_paisDestinoIdV"></div>
					  </p>
						
					
					  <p>
					<span>Intentos de cruce por el país de tránsito: </span>
						<id="infoMigratoria_IntCrucesTransitoV" ></id>
						
					  </p>
						
				<span>Comentarios:</span>
				  <div id="infoMigratoria_comentariosV" ></div>
				
				  <p>
				<span>Expulsiones del país de destino: </span>
					<div id="infoMigratoria_expCruceDestinov"></div>
				  </p>
					
					</div>
					<div class="six columns">
						
						
					  <p>
					<span>Motivo del viaje: </span>
						<div id="infoMigratoria_motivoViajeV"></div>
					  </p>
						
						
					  <p>
					<span>Tipo de estancia:</span>
						<div id="infoMigratoria_tipoEstanciaIdV"></div>
					  </p>
						
						
					  <p>
					<span>Realiza el viaje:</span>
						<div id="infoMigratoria_realizaViajeV" ></div>
						
					
						
					  <p>								
					<span>Intentos de cruce al país destino: </span>
						<div id="infoMigratoria_IntCrucesDestV" ></div>
					  </p>
						
					  <p>
					<span>Expulsiones del país de tránsito: </span>
						<div id="infoMigratoria_expCruceTransitoV"> </div>
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
