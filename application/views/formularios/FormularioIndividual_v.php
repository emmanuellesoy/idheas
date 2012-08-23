

							<?php echo validation_errors(); ?>
							<?$hidden = array('Tipoactor' => 'Individual');?>
							
							<?php echo form_open('form/menu','', $hidden); ?>
							
						<div	id="Actores" >
								<fieldset>
									  <legend>Información general</legend>
									 
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
									 
									  <p>
										<label for="genero">Género</label>
										<input type="radio" name="InfoGralActor_generoid" value="<?php echo set_value('Hombre'); ?>" /> Hombre
										<input type="radio" name="InfoGralActor_generoid" value="<?php echo set_value('Mujer'); ?>" /> Mujer
									
									  </p>
									 
									  <p>
										<label for="edad">Edad</label>
										<select>						
										<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="InfoGralActor_edad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									  </p>
									 
									  <p>
										<label for="estadoCivil">Estado Civil</label>
										<select>						
										<?php foreach($nacionalidad as $item):?> <!--muestra todas las nacionalidades-->
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
									
									 
								</fieldset>	<!--Termina información general-->
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Detalles</legend>
								 
									 
									  <p>
									<label for="hijos">Hijos</label>
										<select>						
										<?php foreach($edad as $item):?> 
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
									 
									  <p>			
										<label for="genero">¿Habla español?</label>
										<input type="radio" name="InfoGralActor_espaniol" value="<?php echo set_value('Si'); ?>" /> Si
										<input type="radio" name="InfoGralActor_espaniol" value="<?php echo set_value('No'); ?>" /> No
										
									  </p>
									 
										
								</fieldset><!--Termina Detalles-->
								
								
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Datos de Nacimiento</legend>
									 
									  <p>
										<label for="pais">País</label>
										<select>						
										<?php foreach($pais as $item):?> 
													<option name="datosDeNacimiento_paisesCatalogo_paisId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									  </p>
									 
									  <p>
										<label for="estado">Estado</label>
										<select>						
										<?php foreach($estado as $item):?>
													<option name="datosDeNacimiento_estadosCatalogo_estadoId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									  </p>
									 
									  <p>
										<label for="municipio">Municipio</label>
										<select>						
										<?php foreach($municipio as $item):?> 
													<option name="datosDeNacimiento_municipiosCatalogo_municipioId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									  </p>
									 
									  <p>
										<label for="fechaNacimiento">Fecha de nacimiento</label>
									
										<input type="date"  name="datosDeNacimiento_fechaNacimiento" value="<?php echo set_value('fechaNacimiento'); ?>" size="50" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" placeholder="MM/DD/AAAA"required/>
										
									  </p>
									  									  
									  
								</fieldset><!--Termina datos de nacimiento-->
								
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Información de contacto</legend>
									 
									  <p>
									<label for="telefono">Teléfono</label>
										<input type="text"  name="infoContacto_telefono" value="<?php echo set_value('telefono'); ?>" size="30" maxlength="20" required/>
									 
									  </p>
									  
									  <p>
									<label for="telefonomovil">Teléfono móvil</label>
										<input type="text"  name="infoContacto_telefonoMovil" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="30" required/>
									 
									  </p>
									  
									  <p>
									<label for="correo">Correo electrónico</label>
										<input type="email"  name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>" size="60" maxlength="40"  required/>
									  </p>
									  
								</fieldset><!--Termina información del contacto-->
								
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Dirección</legend>
									  
									  <p>
										<label for="tipoDir">Tipo de dirección</label>
										<select>						
										<?php foreach($tipoDir as $item):?> 
													<option name="direccionActor_tipoDireccionId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									 <p>
										<label for="ubicacion">Ubicación</label>
											<input type="text"  name="direccionActor_direccion" value="<?php echo set_value('ubicacion'); ?>" size="30"  required/>
									 </p>

									<p>
										<label for="paisdir">País</label>
											<select>						
											<?php foreach($pais as $item):?> 
														<option name="direccionActor_paisesCatalogo_paisId" value="<?=$item?>"><?=$item?></option>
											<?php endforeach;?>
											</select>
									</p>
										
									<p>
										<label for="estadodir">Estado</label>
											<select>						
											<?php foreach($estado as $item):?>
														<option name="direccionActor_estadosCatalogo_estadoId" value="<?=$item?>"><?=$item?></option>
											<?php endforeach;?>
											</select>
									</p>
									
									<p>
										<label for="municipiodir">Municipio</label>
											<select>						
											<?php foreach($municipio as $item):?> 
														<option name="direccionActor_municipiosCatalogo_municipioId" value="<?=$item?>"><?=$item?></option>
											<?php endforeach;?>
											</select>
									</p>	
									
									<p>
										<label for="codigoPos">Código Postal</label>
											<input type="text"  name="actores_codigoPostal" value="<?php echo set_value('codigoPos'); ?>" size="30"  required/>
									 </p>
									 
										
										
									 
										
								</fieldset><!--Termina datos dirección-->
									
							<input type="submit" />
							</div>
							</form>	
