

							<?php echo validation_errors(); ?>
							<?$hidden = array('Tipoactor' => 'Transmigrante');?>

							<?php echo form_open('form/menu','', $hidden); ?>
						<div id="Actores" >
								
								
								<fieldset>
									  <legend>Información general</legend>
									<div class="six columns">
									 
									  <p>
										<label for="nombre">Nombre</label>
										<input type="text"  name="actores_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required/>
									  </p>
									 
									  <p>
										<label for="apellidos">Apellidos</label>
										<input type="text"  name="actores_apellidosSiglas" value="<?php echo set_value('apellidosSiglas'); ?>" size="60" maxlength="60" required/>
									 
									  </p>
									 
									  <p>
										<label for="alias">Alias</label>
										<input type="text" name="alias_alias" value="<?php echo set_value('alias'); ?>" size="30" maxlength="20" required/>
									  
									  </p>
									 
									  
									</div>
									<div class="six columns">
																	 
									  <p>
										<label for="estadoCivil">Estado Civil</label>
										<select>						
										<?php foreach($estadoCivil as $item):?> <!--muestra todas las nacionalidades-->
													<option name="InfoGralActor_estadoCivil_estadoCivil" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
										<label for="nacionalidad">Nacionalidad</label>
										<select>						
										<?php foreach($nacionalidad as $item):?> <!--muestra todas las nacionalidades-->
													<option name="InfoGralActor_nacionalidad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
									<div class="six columns">
										<label for="genero">Género</label>
										<input type="radio" name="InfoGralActor_generoid" checked="checked" value="<?php echo set_value('Hombre'); ?>" /> Hombre
										<input type="radio" name="InfoGralActor_generoid" value="<?php echo set_value('Mujer'); ?>" /> Mujer
									
									  </p>
									  </div>
									 
									<div class="six columns">
									  <p>
										<label for="edad">Edad</label>
										<select>						
										<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="InfoGralActor_edad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									</div>
									
									</div>
									 
								</fieldset>	<!--Termina información general-->
								
								
								<?php echo br(2);?>
								
								<fieldset>
									  <legend>Detalles</legend>
								<div class="six columns">
								 
									 
									  <p>
									<label for="hijos">Hijos</label>
										<select>						
										<?php foreach($hijos as $item):?> 
													<option name="InfoGralActor_hijos" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
									<label for="grupoIndigena">Grupo Indígena</label>
										<select>						
										<?php foreach($grupoIndigena as $item):?> 
													<option name="InfoGralActor_grupoIndigena" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									  </p>
									  
									 
									  <p>			
										<label for="genero">¿Habla español?</label>
										<input type="radio" name="InfoGralActor_espaniol" checked="checked" value="<?php echo set_value('Si'); ?>" /> Si
										<input type="radio" name="InfoGralActor_espaniol" value="<?php echo set_value('No'); ?>" /> No
										
									  </p>
									  
									</div>
									<div class="six columns">
									 
									  <p>
										<label for="nivelEscolaridad">Nivel de Escolaridad</label>
										<select>						
										<?php foreach($escolaridad as $item):?> 
													<option name="InfoGralActor_escolaridad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									  </p>
									 
									  <p>						
										<label for="UltimaOcupacion">Última Ocupación</label>
										<select>						
										<?php foreach($ultimaOcupacion as $item):?> 
													<option name="InfoGralActor_ocupacionesCatalogo_ultimalOcupacionid" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									  </p>
									</div>
									 
										
								</fieldset><!--Termina Detalles-->
								
								
								
								<?php echo br(2);?>
								
								
								<fieldset>	
									  <legend>Información Migratoria</legend>
								
								<div class="twelve columns">
										<fieldset>		
											<legend>Lugar de origen</legend>
								
											<div class="four columns">		
												  <p>		
												<label for="pais">País</label>
													<select>						
													<?php foreach($pais as $item):?> 
																<option name="datosDeNacimiento_paisesCatalogo_paisId" value="<?=$item?>"><?=$item?></option>
													<?php endforeach;?>
													</select>
												  </p>
											</div>
											
											<div class="four columns">
												  <p>		
												<label for="estado">Estado</label>
													<select>						
													<?php foreach($estado as $item):?>
																<option name="datosDeNacimiento_estadosCatalogo_estadoId" value="<?=$item?>"><?=$item?></option>
													<?php endforeach;?>
													</select>
												  </p>
											</div>
											
											<div class="four columns">
											  <p>										
												<label for="municipio">Municipio</label>
													<select>						
													<?php foreach($municipio as $item):?> 
																<option name="datosDeNacimiento_municipiosCatalogos_municipiosId" value="<?=$item?>"><?=$item?></option>
													<?php endforeach;?>
													</select>
											  </p>
											</div>
											
										</fieldset>	<!--Termina lugar de origen-->									
								</div>
									
								
								<div class="six columns">
								  <p>
									<label for="paistrans">País de tránsito</label>
										<select>						
										<?php foreach($pais as $item):?> 
													<option name="infoMigratoria_paisTransitoId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
																				
									  <p>
									<label for="paisdest">País destino</label>
										<select>						
										<?php foreach($pais as $item):?> 
													<option name="infoMigratoria_paisDestinoId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
									
									  <p>
									<label for="intcrucespaistran">Intentos de cruce por el país de tránsito</label>
										<select>						
										<?php foreach($intentos as $item):?> 
													<option name="infoMigratoria_IntCrucesTransito" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 	
								<label for="comentario">Comentarios</label>
								  <textarea rows="10" cols="100" name="infoMigratoria_comentarios" wrap="hard">
									  Escribir algun comentario
									</textarea>
									
									</div>
									<div class="six columns">
									
									  <p>
									<label for="expulpaisdest">Expulsiones del país de destino</label>
										<select>						
										<?php foreach($intentos as $item):?> 
													<option name="infoMigratoria_expCruceDestino" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
										
									  <p>
									<label for="motivoViaje">Motivo del viaje</label>
										<select>						
										<?php foreach($motivos as $item):?> 
													<option name="infoMigratoria_motivoViaje" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
										
									  <p>
									<label for="tipoEstancia">Tipo de estancia</label>
										<select>						
										<?php foreach($estancia as $item):?> 
													<option name="infoMigratoria_tipoEstanciaId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
										
									  <p>
									<label for="realizaViaje">Realiza el viaje</label>
										<input type="radio" name="infoMigratoria_realizaViaje" checked="checked" value="<?php echo set_value('noAcom'); ?>" /> No acompañado
										<input type="radio" name="infoMigratoria_realizaViaje" value="<?php echo set_value('acom'); ?>" /> Acompañado
									  </p>
										
									
										
									  <p>								
									<label for="intcrucespaisdets">Intentos de cruce al país destino</label>
										<select>						
										<?php foreach($intentos as $item):?> 
													<option name="infoMigratoria_IntCrucesDest" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
									  <p>
									<label for="expulpaistrans">Expulsiones del país de tránsito</label>
										<select>						
										<?php foreach($intentos as $item):?> 
													<option name="infoMigratoria_expCruceTransito" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
								</div>
									
								</fieldset><!--Termina datos de nacimiento-->
							<input class="large button" type="submit" />
							</div>
							
								<?php echo br(2);?>
								
							
							</form>	
