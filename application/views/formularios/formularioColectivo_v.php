


							<?php echo validation_errors(); ?>
							<?php echo form_open('form/menu'); ?> 
						<div	id="Actores" >
										<fieldset >
									  <legend>Información general</legend>
									  <p>
										<label for="nombre">Nombre</label>
										<input type="text"  name="actores_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required/>
									 </p>
									 <p>
									<label for="siglas">Siglas:</label>
										<input type="text"  name="actores_apellidosSiglas" value="<?php echo set_value('apellidosSiglas'); ?>" size="60" maxlength="60" required/>
									</p>
									
									 <p>
									<label for="tipoActor">Tipo de actor colectivo</label>
										<select>						
										<?php foreach($tipoActor as $item):?> 
													<option name="InfoGralActores_tipoActorColectivoId" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>									
									 </p>
										 
									 <p>
									<label for="actividad">Actividad</label>
										<select>						
										<?php foreach($actividad as $item):?> <!--muestra todos los estados civiles-->
													<option name="InfoGralActores_actividad" value="<?=$item?>"><?=$item?></option>
										<?php endforeach;?>
										</select>									
									 </p>
								</fieldset>	<!--Termina Información general-->
								<?php echo br(3);?>
								
								<fieldset>
									  <legend>Dirección</legend>
									  
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
									 
										
								</fieldset><!--Termina dirección-->
								
								<?php echo br(3);?>
								<fieldset>
									
									  <legend>Información de contacto</legend>
									 <p>
										<label for="telefono">Teléfono</label>
											<input type="text"  name="infoContacto_telefono" value="<?php echo set_value('telefono'); ?>" size="30"  required/>
									</p>
									 
									 <p>
										<label for="fax">Fax</label>
											<input type="text"  name="infoContacto_fax" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="15" required/>
									</p>
									
									<p>
										<label for="correo">Correo electrónico</label>
											<input type="email"  name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>" size="30"  required/>
									</p> 
									
									<p>
										<label for="paginaPersonal">Página web</label>
											<input type="text"  name="infoGralActores_paginaWeb" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="15" />
									 </p>
									  
								</fieldset><!--Termina información de contacto-->
								
								<?php echo br(3);?>
								
									<button type=submit>Guardar</button>

							</div>
							</form>	
							
							
