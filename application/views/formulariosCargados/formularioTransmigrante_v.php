<?php
    if(isset($carga_ajax)){
        ?>
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span>Nombre:   </span>
				<span id="nombre"><?=(isset($datosActor[$actorId]['nombre'])) ? $datosActor[$actorId]['nombre'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Apellidos:  </span>
				<span id="apellidosSiglas"><?=(isset($datosActor[$actorId]['apellidosSiglas'])) ? $datosActor[$actorId]['apellidosSiglas'] : ''; ?></span>
			 
			  </p>
			 
			  <p>
				<span>Alias:   </span>
				<span id="alias"><?=(isset($datosActor[$actorId]['alias'])) ? $datosActor[$actorId]['alias'] : ''; ?></span>
			  
			  </p>
			  
			  </div>
			  
			<div class="six columns">
			  
			<div class="six columns">
			 
			  <p>
				<span>Género:   </span>
				<span id="generoid"><?=(isset($datosActor[$actorId]['generoid'])) ? $datosActor[$actorId]['generoid'] : ''; ?></span>
			
			  </p>
			</div>
			
			<div class="six columns">
			  
			  <p>
				<span>Edad:   </span>
				<span id="edad"><?=(isset($datosActor[$actorId]['edad'])) ? $datosActor[$actorId]['edad'] : ''; ?></span>
			  </p>
			</div>
			 
			  <p>
				<span>Estado Civil:   </span>
				<span id="estadoCivil_estadoCivilId"><?=(isset($datosActor[$actorId]['estadoCivil_estadoCivilId'])) ? $datosActor[$actorId]['estadoCivil_estadoCivilId'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Nacionalidad:   </span>
				 <span id="nacionalidadId"><?=(isset($datosActor[$actorId]['nacionalidadId'])) ? $datosActor[$actorId]['nacionalidadId'] : ''; ?></span>
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
				<span id="hijos" ><?=(isset($datosActor[$actorId]['hijos'])) ? $datosActor[$actorId]['hijos'] : ''; ?></span>
		  </p>
		 </div>
		  
		 <div class="six columns">									
		   <p>			
			<span>¿Habla español?:   </span>
			<span id="espaniol"><?=(isset($datosActor[$actorId]['espaniol'])) ? $datosActor[$actorId]['espaniol'] : ''; ?></span>
		  </p>
		 </div>
		
		 
		  <p>
			<span>Grupo Indígena:   </span>
				<span id="gruposIndigenas_grupoIndigenaId"><?=(isset($datosActor[$actorId]['gruposIndigenas_grupoIndigenaId'])) ? $datosActor[$actorId]['gruposIndigenas_grupoIndigenaId'] : ''; ?></span>
		  </p>

			
		</div>
		<div class="six columns">
		  
		 
		  <p>
			<span>Nivel de Escolaridad:   </span>
			<span id="escolaridadId"><?=(isset($datosActor[$actorId]['escolaridadId'])) ? $datosActor[$actorId]['escolaridadId'] : ''; ?></span>									 
		  </p>
		 
		  <p>						
			<span>Última Ocupación:   </span>
			<span id="ocupacionesCatalogo_ultimalOcupacionid"><?=(isset($datosActor[$actorId]['ocupacionesCatalogo_ultimalOcupacionid'])) ? $datosActor[$actorId]['ocupacionesCatalogo_ultimalOcupacionid'] : ''; ?></span>
			
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
								<div id="paisesCatalogo_paisId"><?=(isset($datosActor[$actorId]['paisesCatalogo_paisId'])) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
								  <p>		
								<span>Estado: </span>
									<div id="estadosCatalogo_estadoId"><?=(isset($datosActor[$actorId]['estadosCatalogo_estadoId'])) ? $datosActor[$actorId]['estadosCatalogo_estadoId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
							  <p>										
								<span>Municipio: </span>
									<div id="municipiosCatalogos_municipiosId" ><?=(isset($datosActor[$actorId]['municipiosCatalogos_municipiosId'])) ? $datosActor[$actorId]['municipiosCatalogos_municipiosId'] : ''; ?></div>
									</select>
							  </p>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
				  <p>
					<span>País de tránsito: </span>
						<div id="paisTransitoId"><?=(isset($datosActor[$actorId]['paisTransitoId'])) ? $datosActor[$actorId]['paisTransitoId'] : ''; ?></div>
					  </p>
																
					  <p>
					<span>País destino: </span>
						<div id="paisDestinoId"><?=(isset($datosActor[$actorId]['paisDestinoId'])) ? $datosActor[$actorId]['paisDestinoId'] : ''; ?></div>
					  </p>
						
					
					  <p>
					<span>Intentos de cruce por el país de tránsito: </span>
						<id="infoMigratoria_IntCrucesTransitoV" ></id>
						
					  </p>
						
				<span>Comentarios:</span>
				  <div id="comentarios" ><?=(isset($datosActor[$actorId]['comentarios'])) ? $datosActor[$actorId]['comentarios'] : ''; ?></div>
				
				  <p>
				<span>Expulsiones del país de destino: </span>
					<div id="expCruceDestino"><?=(isset($datosActor[$actorId]['expCruceDestino'])) ? $datosActor[$actorId]['expCruceDestino'] : ''; ?></div>
				  </p>
					
					</div>
					<div class="six columns">
						
						
					  <p>
					<span>Motivo del viaje: </span>
						<div id="motivoViaje"><?=(isset($datosActor[$actorId]['motivoViaje'])) ? $datosActor[$actorId]['motivoViaje'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Tipo de estancia:</span>
						<div id="tipoEstanciaId"><?=(isset($datosActor[$actorId]['tipoEstanciaId'])) ? $datosActor[$actorId]['tipoEstanciaId'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Realiza el viaje:</span>
						<div id="realizaViaje" ><?=(isset($datosActor[$actorId]['realizaViaje'])) ? $datosActor[$actorId]['realizaViaje'] : ''; ?></div>
						
					
						
					  <p>								
					<span>Intentos de cruce al país destino: </span>
						<div id="intCrucesDest" ><?=(isset($datosActor[$actorId]['intCrucesDest'])) ? $datosActor[$actorId]['intCrucesDest'] : ''; ?></div>
					  </p>
						
					  <p>
					<span>Expulsiones del país de tránsito: </span>
						<div id="expCruceTransito"> <?=(isset($datosActor[$actorId]['expCruceTransito'])) ? $datosActor[$actorId]['expCruceTransito'] : ''; ?></div>
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
<?php } ?>