

							<?php echo validation_errors(); ?>

							<?php echo form_open('form/menu'); ?>
								<fieldset>
									  <legend>Información general</legend>
									 
									<label for="nombre">Nombre</label>
										<input type="text"  name="nombreActor" value="<?php echo set_value('nombreActor'); ?>" size="50" maxlength="30" required/>
									 
									<label for="apellidos">Apellidos</label>
										<input type="text"  name="apellidosActor" value="<?php echo set_value('apellidos'); ?>" size="50" maxlength="30" required/>
									 
									<label for="alias">Alias</label>
										<input type="text" name="nombreActor" value="<?php echo set_value('alias'); ?>" size="50" maxlength="30" required/>
									  
									<label for="genero">Género</label>
										<input type="radio" name="genero" value="<?php echo set_value('Hombre'); ?>" /> Hombre
										<input type="radio" name="genero" value="<?php echo set_value('Mujer'); ?>" /> Mujer
										
									<label for="edad">Edad</label>
										<select>						
										<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="edad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									<label for="estadoCivil">Estado civil</label>
										<select>						
										<?php foreach($estadoCivil as $item):?> <!--muestra todos los estados civiles-->
													<option name="estadoCivil" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									
									<label for="nacionalidad">Nacionalidad</label>
										<select>						
										<?php foreach($nacionalidad as $item):?> <!--muestra todas las nacionalidades-->
													<option name="nacionalidad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
								</fieldset>	<!--Termina información general-->
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Detalles</legend>
									 
									<label for="hijos">Hijos</label>
										<select>						
										<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="hijos" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
										
									<label for="grupoIndigena">Grupo Indígena</label>
										<select>						
										<?php foreach($grupoIndigena as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="grupoIndigena" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									<label for="nivelEscolaridad">Nivel de Escolaridad</label>
										<select>						
										<?php foreach($escolaridad as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="escolaridad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									
									<label for="UltimaOcupacion">Última Ocupación</label>
										<select>						
										<?php foreach($ultimaOcupacion as $item):?> <!--muestra todas las edades de 1 a 100-->
													<option name="ultimaOcupacion" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									<label for="genero">¿Habla español?</label>
										<input type="radio" name="hablaEsp" value="<?php echo set_value('Si'); ?>" /> Si
										<input type="radio" name="hablaEsp" value="<?php echo set_value('No'); ?>" /> No
										
										
								</fieldset><!--Termina Detalles-->
								
								
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Datos de Nacimiento</legend>
									 
									<label for="pais">País</label>
										<select>						
										<?php foreach($pais as $item):?> 
													<option name="pais" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
										
									<label for="estado">Estado</label>
										<select>						
										<?php foreach($estado as $item):?>
													<option name="estado" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									<label for="municipio">Municipio</label>
										<select>						
										<?php foreach($municipio as $item):?> 
													<option name="municipio" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									
									<label for="fechaNacimiento">Fecha de nacimiento</label>
									
										<input type="date"  name="fechaNacimiento" value="<?php echo set_value('fechaNacimiento'); ?>" size="50" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" placeholder="MM/DD/AAAA"required/>
										
									<label for="genero">¿Habla español?</label>
										<input type="radio" name="hablaEsp" value="<?php echo set_value('Si'); ?>" /> Si
										<input type="radio" name="hablaEsp" value="<?php echo set_value('No'); ?>" /> No
										
										
								</fieldset><!--Termina datos de nacimiento-->
								
								<?php echo br(3);?>
								
								<fieldset>
									
									  <legend>Información de contacto</legend>
									 
									<label for="telefono">Teléfono</label>
										<input type="text"  name="telefono" value="<?php echo set_value('telefono'); ?>" size="50"  required/>
									 
									<label for="telefonomovil">Teléfono móvil</label>
										<input type="text"  name="telefonomovil" value="<?php echo set_value('telefonomovil'); ?>" size="50" maxlength="15" required/>
									 
									<label for="correo">Correo electrónico</label>
										<input type="email"  name="correo" value="<?php echo set_value('correo'); ?>" size="50"  required/>
									  
								</fieldset><!--Termina información del contacto-->
								
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Dirección</legend>
									  
									<label for="tipoDir">Tipo de dirección</label>
										<select>						
										<?php foreach($tipoDir as $item):?> 
													<option name="tipoDir" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
									 
									<label for="ubicacion">Ubicación</label>
										<input type="text"  name="ubicacion" value="<?php echo set_value('ubicacion'); ?>" size="50"  required/>
									 
									<label for="paisdir">País</label>
										<select>						
										<?php foreach($pais as $item):?> 
													<option name="paisdir" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
										
									<label for="estadodir">Estado</label>
										<select>						
										<?php foreach($estado as $item):?>
													<option name="estadodir" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									<label for="municipiodir">Municipio</label>
										<select>						
										<?php foreach($municipio as $item):?> 
													<option name="municipiodir" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>
										
									<label for="codigoPos">Código Postal</label>
										<input type="text"  name="codigoPos" value="<?php echo set_value('codigoPos'); ?>" size="50"  required/>
									 
									 
										
								</fieldset><!--Termina datos de nacimiento-->
									
							<input type="submit" />
							</form>	
