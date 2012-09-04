

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
                                        <?php foreach($estadoCivil as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
										<label for="nacionalidad">Nacionalidad</label>
										<select name="InfoGralActor_nacionalidad" id="InfoGralActor_nacionalidad">
                                        <?php foreach($nacionalidad as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
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
										<select name="InfoGralActor_edad" id="InfoGralActor_edad">						
										<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option  value="<?=$item?>"><?=$item?></option>
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
										<select name="InfoGralActor_hijos" id="InfoGralActor_hijos" >						
										<?php foreach($hijos as $item):?> 
													<option value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
									<label for="grupoIndigena">Grupo Indígena</label>
										<select name="InfoGralActor_grupoIndigena" id="InfoGralActor_grupoIndigena">
                                        <?php foreach($grupoIndigena as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
										
									  </p>
									  
									 
									  <p>			
										<label for="genero">¿Habla español?</label>
										<input type="radio" id="InfoGralActor_grupoIndigena" name="InfoGralActor_grupoIndigena"  checked="checked" value="<?php echo set_value('Si'); ?>" /> Si
										<input type="radio" id="InfoGralActor_grupoIndigena"name="InfoGralActor_espaniol" value="<?php echo set_value('No'); ?>" /> No
										
									  </p>
									  
									</div>
									<div class="six columns">
									 
									  <p>
										<label for="nivelEscolaridad">Nivel de Escolaridad</label>
										<select name="InfoGralActor_escolaridad" id="InfoGralActor_escolaridad">
                                        <?php foreach($escolaridad as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
									 
									  </p>
									 
									  <p>						
										<label for="UltimaOcupacion">Última Ocupación</label>
										<select name="InfoGralActor_ocupacionesCatalogo_ultimalOcupacionid" id="InfoGralActor_ocupacionesCatalogo_ultimalOcupacionid">
                                        <?php foreach($ultimaOcupacion as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
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
													<?php foreach($pais as $key => $item):?>
																			<option value="<?=$item?>"><?=$key?></option>
													<?php endforeach;?>
													</select>
												  </p>
											</div>
											
											<div class="four columns">
												  <p>		
												<label for="estado">Estado</label>
													<select name="datosDeNacimiento_estadosCatalogo_estadoId">
														<?php foreach($estado as $key => $item):?>
																				<option value="<?=$item?>"><?=$key?></option>
														<?php endforeach;?>
													</select>
												  </p>
											</div>
											
											<div class="four columns">
											  <p>										
												<label for="municipio">Municipio</label>
													<select id="datosDeNacimiento_municipiosCatalogos_municipiosId" name="datosDeNacimiento_municipiosCatalogos_municipiosId">
														<?php foreach($municipio as $key => $item):?>
																				<option value="<?=$item?>"><?=$key?></option>
														<?php endforeach;?>
													</select>
											  </p>
											</div>
											
										</fieldset>	<!--Termina lugar de origen-->									
								</div>
									
								
								<div class="six columns">
								  <p>
									<label for="paistrans">País de tránsito</label>
										<select name="infoMigratoria_paisTransitoId" id="infoMigratoria_paisTransitoId">
                                        <?php foreach($pais as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
									  </p>
																				
									  <p>
									<label for="paisdest">País destino</label>
										<select name="infoMigratoria_paisDestinoId" id="infoMigratoria_paisDestinoId">
                                        <?php foreach($pais as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
									  </p>
										
									
									  <p>
									<label for="intcrucespaistran">Intentos de cruce por el país de tránsito</label>
										<select name="infoMigratoria_IntCrucesTransito" id="infoMigratoria_IntCrucesTransito" >						
										<?php foreach($intentos as $item):?> 
													<option value="<?=$item?>"><?=$item?></option>
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
										<select name="infoMigratoria_expCruceDestino" id="infoMigratoria_expCruceDestino">						
										<?php foreach($intentos as $item):?> 
													<option  value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
										
									  <p>
									<label for="motivoViaje">Motivo del viaje</label>
										<select name="infoMigratoria_motivoViaje" id="infoMigratoria_motivoViaje">
                                        <?php foreach($motivos as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
                                        <?php endforeach;?>
										</select>
									  </p>
										
										
									  <p>
									<label for="tipoEstancia">Tipo de estancia</label>
										<select name="infoMigratoria_tipoEstanciaId" id="infoMigratoria_tipoEstanciaId">
                                        <?php foreach($estancia as $key => $item):?>
                                                                <option value="<?=$item?>"><?=$key?></option>
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
										<select name="infoMigratoria_IntCrucesDest" id="infoMigratoria_IntCrucesDest" >						
										<?php foreach($intentos as $item):?> 
													<option value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
										
									  <p>
									<label for="expulpaistrans">Expulsiones del país de tránsito</label>
										<select name="infoMigratoria_expCruceTransito">						
										<?php foreach($intentos as $item):?> 
													<option  value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
								</div>
									
								</fieldset><!--Termina datos de nacimiento-->
							<input class="large button" type="submit" />
							</div>
							
								<?php echo br(2);?>
								
							
							</form>	
