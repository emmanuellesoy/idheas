
			<div	id="ActoresV" >
					<fieldset>
						  <legend>Información general</legend>
						<div class="six columns">
						 
						  <p>
							<span >Nombre: <?=$actor[$_actorId]['nombre']; ?></span>
							<span id="actores_nombreV"></span>
						  </p>
						 
						  <p>
							<span >Apellidos: <?=$actor[$_actorId]['apellidosSiglas']; ?></span>
							<span id="actores_apellidosSiglasV"></span>
						 
						  </p>
						 
						  <p>
							<span >Alias: <?=$actor[$_actorId]['alias']; ?></span>
							<span id="alias_aliasV"></span> 
						  
						  </p>
						  
						  </div>
						  
						<div class="six columns">
						  
						<div class="six columns">
						 
						  <p>
							<span >Género:
                                                        <?php 
                                                            if($actor[$_actorId]['generoId'] == 1){
                                                                
                                                                echo 'Hombre';
                                                                
                                                            } else {
                                                                
                                                                echo 'Mujer';
                                                                
                                                            }
                                                        ?>
                                                        </span>
							<span id="infoGralActor_generoidV"></span>
						
						  </p>
						</div>
						
						<div class="six columns">
						  
						  <p>
							<span >Edad: <?=$actor[$_actorId]['edad']; ?> años</span>
							<span id="infoGralActor_edadV"></span>
						  </p>
						</div>
						 
						  <p>
							<span >Estado Civil: <?=$estadoCivil; ?></span>
							<span id="infoGralActor_estadoCivil_estadoCivilV"></span>
						  </p>
						 
						  <p>
							<span >Nacionalidad: <?=$nacionalidadId; ?></span>
							 <span id="infoGralActor_nacionalidadV"></span>
						  </p>
						
						</div> 
					</fieldset>	<!--Termina información general-->
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Detalles:   </legend>
						<div class="six columns">
					 
						 <div class="six columns">
						  <p>
								<span >Hijos:   </span>
								<span id="infoGralActor_hijosV" ></span>
						  </p>
						 </div>
						  
						 <div class="six columns">									
						   <p>			
							<span >¿Habla español?:   </span>
							<span id="infoGralActor_espaniolV"></span>
						  </p>
						 </div>
						
						 
						  <p>
							<span >Grupo Indígena:   </span>
								<span id="infoGralActor_grupoIndigenaV"></span>
						  </p>
				
							
						</div>
						<div class="six columns">
						  
						 
						  <p>
							<span >Nivel de Escolaridad:   </span>
							<span id="infoGralActor_escolaridadV"></span>									 
						  </p>
						 
						  <p>						
							<span >Última Ocupación:   </span>
							<span id="infoGralActor_ocupacionesCatalogo_ultimalOcupacionidV"></span>
							
						  </p>
						 
						</div>	
					</fieldset><!--Termina Detalles-->
					
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Datos de Nacimiento:   </legend>
						<div class="six columns">
						 
						  <p>
							<span >País:   </span>
							<span id="datosDeNacimiento_paisesCatalogo_paisIdV"></span>										
						  </p>
						 
						  <p>
							<span >Estado:   </span>
							<span id="datosDeNacimiento_estadosCatalogo_estadoIdV"></span>
							
						  </p>
						  </div>
						<div class="six columns">
						 
						  <p>
							<span >Municipio:   </span>
							<span id="datosDeNacimiento_municipiosCatalogo_municipioIdV"></span>
						 
						  </p>
						 
						  <p>
							<span >Fecha de nacimiento:   </span>
							<span id="datosDeNacimiento_fechaNacimientoV"></span>
						  </p>
															  
						</div>  
					</fieldset><!--Termina datos de nacimiento-->
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Información de contacto:   </legend>
						<div class="six columns">
						 
						  <p>
						<span >Teléfono:   </span>
							<span id="infoContacto_telefonoV"></span>
						  </p>
						  
						  <p>
						<span >Teléfono móvil:   </span>
							<span id="infoContacto_telefonoMovilV"></span> 
						  </p>
						  </div>
						<div class="six columns">
						  
						  <p>
						<span >Correo electrónico:   </span>
							<span id="infoContacto_correoEV"></span>
						  </p>
						</div>  
					</fieldset><!--Termina información del contacto-->
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Dirección:   </legend>
						<div class="six columns"> 
						  
						 <p>
							<span>Tipo de dirección:   </span>
							<span id="direccionActor_tipoDireccionIdV"></span>
						 
						 </p>
						 <p>
							 
							<span>Ubicación:   </span>
								<span id="direccionActor_direccionV"></span>
						 </p>
						 
						 
						<p>
							<span>Código Postal:   </span>
								<span id="actores_codigoPostalV"></span>
						 </p>
						 
						</div>
						 
						<div class="six columns">
						

						<p>
							<span>País:   </span>
								<span id="direccionActor_paisesCatalogo_paisIdV"></span>
						</p>				

						<p>
						
							<span>Estado:   </span>

									<span id="direccionActor_estadosCatalogo_estadoIdV"></span>
						
						</p>

<!----/**************************************************************/---->									
						

						<p>
							<span>Municipio:   </span>
								<span id="direccionActor_municipiosCatalogo_municipioIdV"></span>
						</p>	
						
						 
							
							
						</div>
					</fieldset><!--Termina datos dirección-->
						
				
				<?php echo br(1);?>
				
				
                        <input id="mostrarEstadodir" class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncInd()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosIndividual">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>

                </div>

				
