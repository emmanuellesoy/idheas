	<?php echo validation_errors(); ?>
		<?php echo form_open('actores_c/agregarActor'); ?>
			<?$hidden = array('tipoActorId' => '1');?>
				
			<div	id="Actores" >
					<fieldset>
						  <legend>Información general</legend>
						<div class="six columns"><!----Primer mitad de información general---->
						 
						  <p>
							<label for="nombre">Nombre</label>
							<input type="text" id="actores_nombre" name="actores_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required />
						  </p>
						 
						  <p>
							<label for="apellidos">Apellidos</label>
							<input type="text" id="actores_apellidosSiglas" name="actores_apellidosSiglas" value="<?php echo set_value('apellidosSiglas'); ?>" size="60" maxlength="60" required />
						 
						  </p>
						 
						  <p>
							<label for="alias">Alias</label>
							<input type="text" id="alias_alias" name="alias_alias" value="<?php echo set_value('alias'); ?>" size="30" maxlength="20" />
						  
						  </p>
						  
						  </div><!----Termina primer mitad de información general---->
						  
						<div class="six columns"><!----Segunda mitad de información general---->
						  
						<div class="six columns">
						 
						  <p>
							<label for="genero">Género</label>
							<input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" checked="checked" value="1" /> Hombre
							<input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="2" /> Mujer
						
						  </p>
						</div>
						
						<div class="six columns">
						  
						  <p>
							<label for="edad">Edad</label>
							<select>						
							<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
							
										<option id="infoGralActor_edad" name="infoGralActor_edad" value="<?=$item?>"> <?=$item?></option>
							<?php endforeach;?>
							</select>
						  </p>
						  
						</div>
						 
						  <p>
							<label for="estadoCivil">Estado Civil</label>
							<select>						
							<?php foreach($estadoCivil as $item):?> <!--muestra los estados civiles-->
										<option id="infoGralActor_estadoCivil_estadoCivil" name="infoGralActor_estadoCivil_estadoCivil" value="<?=$item?>"> <?=$item?></option>
							<?php endforeach;?>
							</select>
						  </p>
						 
						  <p>
							<label for="nacionalidad">Nacionalidad</label>
							<select>						
							<?php foreach($nacionalidad as $item):?> <!--muestra todas las nacionalidades-->
										<option id="infoGralActor_nacionalidad" name="infoGralActor_nacionalidad" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
						  </p>
						
						</div> 	<!----Segunda mitad de información general---->
						
					</fieldset>	<!--Termina información general-->
					
					<?php echo br(3);?>
					
					<fieldset><!----Detalles---->
						  <legend>Detalles</legend>
						<div class="six columns"><!----Primer mitad de detalles---->
					 
						 <div class="six columns">
						  <p>
								<label for="hijos">Hijos</label>
								<select>						
								<?php foreach($edad as $item):?> 
											<option id="infoGralActor_hijos" name="infoGralActor_hijos" value="<?=$item?>"><?=$item?></option>
								<?php endforeach;?>
								</select>
						  </p>
						 </div>
						  
						 <div class="six columns">									
						   <p>			
							<label for="genero">¿Habla español?</label>
							<input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol" checked="checked" value="1" /> Si
							<input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol" value="2" /> No
							
						  </p>
						 </div>
						
						 
						  <p>
						<label for="grupoIndigena">Grupo Indígena</label>
							<select>						
							<?php foreach($grupoIndigena as $item):?> 
										<option id="infoGralActor_grupoIndigena" name="infoGralActor_grupoIndigena" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
							
						  </p>
				
							
						</div><!----Termina primer mitad de detalles---->
						
						<div class="six columns"><!----Segunda mitad de detalles---->
						  
						 
						  <p>
							<label for="nivelEscolaridad">Nivel de Escolaridad</label>
							<select>						
							<?php foreach($escolaridad as $item):?> 
										<option id="infoGralActor_escolaridad" name="infoGralActor_escolaridad" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
						 
						  </p>
						 
						  <p>						
							<label for="UltimaOcupacion">Última Ocupación</label>
							<select>						
							<?php foreach($ultimaOcupacion as $item):?> 
										<option id="infoGralActor_ocupacionesCatalogo_ultimalOcupacionid" name="infoGralActor_ocupacionesCatalogo_ultimalOcupacionid" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
							
						  </p>
						 
						</div>	<!----Termina segunda mitad de detalles---->
						
					</fieldset><!--Termina Detalles-->
					
					<?php echo br(3);?>
					
					<fieldset><!----Datos de Nacimiento ---->
						  <legend>Datos de Nacimiento</legend>
						<div class="six columns"><!----Primer mitad de datos de Nacimiento ---->
						 
						  <p>
							<label for="pais">País</label>
							<select>						
							<?php foreach($pais as $item):?> 
										<option id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
							
						  </p>
						 
						  <p>
							<label for="estado">Estado</label>
							<select>						
							<?php foreach($estado as $item):?>
										<option id="datosDeNacimiento_estadosCatalogo_estadoId" name="datosDeNacimiento_estadosCatalogo_estadoId" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
							
						  </p>
						  </div><!----Termina primer mitad de datos de Nacimiento ---->
						
						<div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->
						 
						  <p>
							<label for="municipio">Municipio</label>
							<select>						
							<?php foreach($municipio as $item):?> 
										<option id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
						 
						  </p>
						 
						  <p>
							<label for="fechaNacimiento">Fecha de nacimiento</label>
							<input type="text" id="datepicker"name="datosDeNacimiento_fechaNacimiento" value="<?php echo set_value('fechaNacimiento'); ?>" placeholder="AAAA-MM-DD" />
							
						  </p>
															  
						</div>  <!----Termina segunda mitad de datos de Nacimiento ---->
						
					</fieldset><!--Termina datos de nacimiento-->
					
					<?php echo br(3);?>
					
					<fieldset><!--Información de contacto--->
						  <legend>Información de contacto</legend>
						<div class="six columns"><!--Primer mitad de información de contacto--->
						 
						  <p>
						<label for="telefono">Teléfono</label>
							<input type="text" id="infoContacto_telefono" name="infoContacto_telefono" value="<?php echo set_value('telefono'); ?>" size="30" maxlength="20" />
						 
						  </p>
						  
						  <p>
						<label for="telefonomovil">Teléfono móvil</label>
							<input type="text" id="infoContacto_telefonoMovil" name="infoContacto_telefonoMovil" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="30" />
						 
						  </p>
						  </div><!--Termina primer mitad de la nformación de contacto--->
						  
						<div class="six columns"><!--Segunda mitad de nformación de contacto--->
						  
						  <p>
						<label for="correo">Correo electrónico</label>
							<input type="email" id="infoContacto_correoE" name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>" size="60" maxlength="40"  />
						  </p>
						</div>  <!--Segunda mitad de nformación de contacto--->
						
					</fieldset><!--Termina información del contacto-->
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Dirección</legend>
						<div class="six columns">
						  
						  <p>
							<label for="tipoDir">Tipo de dirección</label>
							<select>						
							<?php foreach($tipoDir as $item):?> 
										<option id="direccionActor_tipoDireccionId" name="direccionActor_tipoDireccionId" value="<?=$item?>"><?=$item?></option>
							<?php endforeach;?>
							</select>
						 
						 <p>
							<label for="ubicacion">Ubicación</label>
								<input type="text" id="direccionActor_direccion" name="direccionActor_direccion" value="<?php echo set_value('ubicacion'); ?>" size="30"  />
						 </p>
						 
						 
						<p>
							<label for="codigoPos">Código Postal</label>
								<input type="text" id="actores_codigoPostal" name="actores_codigoPostal" value="<?php echo set_value('codigoPos'); ?>" size="30"  />
						 </p>
						 
						</div>
						<div class="six columns">
						

						<p>
							<label for="paisdir">País</label>
								<select>						
								<?php foreach($pais as $item):?> 
											<option id="direccionActor_paisesCatalogo_paisId" name="direccionActor_paisesCatalogo_paisId" value="<?=$item?>"><?=$item?></option>
								<?php endforeach;?>
								</select>
						</p>
<!----/**************************************************************/---->										

						<p>
						
							<label for="estadodir">Estado</label>
							<div class="six columns">

									<select id="listaEstadodir">						
									<?php foreach($estado as $item):?>
												<option id="direccionActor_estadosCatalogo_estadoId" name="direccionActor_estadosCatalogo_estadoId" value="<?=$item?>"><?=$item?></option>
									<?php endforeach;?>
									</select>	

							</div>	
						
						<div class="six columns">
							<input id="mostrarEstadodir" type='button' onclick="mostarEstadodirfunc()" value='Agregar Campo'>

							<div class="Escondido" id="showEstadodir">
								<div class="seven columns">
								<input  type='text' id="opcionTipoDir" >	
								</div>
								
								<input  type='button' onclick="QuitarEstadodir()" value='-'  />
								<input  type="button" onclick="AgrearEstadodir()" value='+'  />
								
							</div>

						</div>
						
						</p>

<!----/**************************************************************/---->									
						

						<p>
							<label for="municipiodir">Municipio</label>
								<select>						
								<?php foreach($municipio as $item):?> 
											<option id="direccionActor_municipiosCatalogo_municipioId" name="direccionActor_municipiosCatalogo_municipioId" value="<?=$item?>"><?=$item?></option>
								<?php endforeach;?>
								</select>
						</p>	
						
						 
							
							
						</div>
					</fieldset><!--Termina datos dirección-->
						
				<input class="large button" type="submit" />
				</div>
				<?php echo br(1);?>
				</form>	


