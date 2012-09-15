
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span>Nombre:   </span>
				<span id="nombre"><?=(isset($datosActor)) ? $datosActor[$actorId]['nombre'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Apellidos:  </span>
				<span id="apellidosSiglas"><?=(isset($datosActor)) ? $datosActor[$actorId]['apellidosSiglas'] : ''; ?></span>
			 
			  </p>
			 
			  <p>
				<span>Alias:   </span>
				<span id="alias"><?=(isset($datosActor)) ? $datosActor[$actorId]['alias'] : ''; ?></span>
			  
			  </p>
			  
			  </div>
			  
			<div class="six columns">
			  
			<div class="six columns">
			 
			  <p>
				<span>Género:   </span>
				<span id="generoid"><?=(isset($datosActor)) ? $datosActor[$actorId]['generoid'] : ''; ?></span>
			
			  </p>
			</div>
			
			<div class="six columns">
			  
			  <p>
				<span>Edad:   </span>
				<span id="edad"><?=(isset($datosActor)) ? $datosActor[$actorId]['edad'] : ''; ?></span>
			  </p>
			</div>
			 
			  <p>
				<span>Estado Civil:   </span>
				<span id="estadoCivil_estadoCivilId"><?=(isset($datosActor)) ? $datosActor[$actorId]['estadoCivil_estadoCivilId'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Nacionalidad:   </span>
				 <span id="nacionalidadId"><?=(isset($datosActor)) ? $datosActor[$actorId]['nacionalidadId'] : ''; ?></span>
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
				<span id="hijos" ><?=(isset($datosActor)) ? $datosActor[$actorId]['hijos'] : ''; ?></span>
		  </p>
		 </div>
		  
		 <div class="six columns">									
		   <p>			
			<span>¿Habla español?:   </span>
			<span id="espaniol"><?=(isset($datosActor)) ? $datosActor[$actorId]['espaniol'] : ''; ?></span>
		  </p>
		 </div>
		
		 
		  <p>
			<span>Grupo Indígena:   </span>
				<span id="gruposIndigenas_grupoIndigenaId"><?=(isset($datosActor)) ? $datosActor[$actorId]['gruposIndigenas_grupoIndigenaId'] : ''; ?></span>
		  </p>

			
		</div>
		<div class="six columns">
		  
		 
		  <p>
			<span>Nivel de Escolaridad:   </span>
			<span id="escolaridadId"><?=(isset($datosActor)) ? $datosActor[$actorId]['escolaridadId'] : ''; ?></span>									 
		  </p>
		 
		  <p>						
			<span>Última Ocupación:   </span>
			<span id="ocupacionesCatalogo_ultimalOcupacionid"><?=(isset($datosActor)) ? $datosActor[$actorId]['ocupacionesCatalogo_ultimalOcupacionid'] : ''; ?></span>
			
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
								<div id="paisesCatalogo_paisId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
								  <p>		
								<span>Estado: </span>
									<div id="estadosCatalogo_estadoId"><?=(isset($datosActor)) ? $datosActor[$actorId]['estadosCatalogo_estadoId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
							  <p>										
								<span>Municipio: </span>
									<div id="municipiosCatalogos_municipiosId" ><?=(isset($datosActor)) ? $datosActor[$actorId]['municipiosCatalogos_municipiosId'] : ''; ?></div>
									</select>
							  </p>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
				  <p>
					<span>País de tránsito: </span>
						<div id="paisTransitoId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisTransitoId'] : ''; ?></div>
					  </p>
																
					  <p>
					<span>País destino: </span>
						<div id="paisDestinoId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisDestinoId'] : ''; ?></div>
					  </p>
						
					
					  <p>
					<span>Intentos de cruce por el país de tránsito: </span>
						<id="infoMigratoria_IntCrucesTransitoV" ></id>
						
					  </p>
						
				<span>Comentarios:</span>
				  <div id="comentarios" ><?=(isset($datosActor)) ? $datosActor[$actorId]['nombre'] : ''; ?></div>
				
				  <p>
				<span>Expulsiones del país de destino: </span>
					<div id="expCruceDestino"><?=(isset($datosActor)) ? $datosActor[$actorId]['expCruceDestino'] : ''; ?></div>
				  </p>
					
					</div>
					<div class="six columns">
						
						
					  <p>
					<span>Motivo del viaje: </span>
						<div id="motivoViaje"><?=(isset($datosActor)) ? $datosActor[$actorId]['motivoViaje'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Tipo de estancia:</span>
						<div id="tipoEstanciaId"><?=(isset($datosActor)) ? $datosActor[$actorId]['tipoEstanciaId'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Realiza el viaje:</span>
						<div id="realizaViaje" ><?=(isset($datosActor)) ? $datosActor[$actorId]['realizaViaje'] : ''; ?></div>
						
					
						
					  <p>								
					<span>Intentos de cruce al país destino: </span>
						<div id="intCrucesDest" ><?=(isset($datosActor)) ? $datosActor[$actorId]['intCrucesDest'] : ''; ?></div>
					  </p>
						
					  <p>
					<span>Expulsiones del país de tránsito: </span>
						<div id="expCruceTransito"> <?=(isset($datosActor)) ? $datosActor[$actorId]['expCruceTransito'] : ''; ?></div>
					  </p>
					 
				</div>
					
				</fieldset><!--Termina datos de nacimiento-->
			
	
				<?php echo br(1);?>

					<?=$relEntreActores; ?>
				<?php echo br(1);?>				
				
                        <input class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncTrans()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosTrans">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>
					
				<?php echo br(1);?>
</div>
