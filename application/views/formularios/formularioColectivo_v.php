		<?php echo validation_errors(); ?>
		<?php $config=array('enctype'=>'image/jpeg'); echo form_open('actores_c/agregarActor', $config); ?>
		<input type="hidden" value="3" name="actores_tipoActorId" />
		
	<div	id="Actores" >
					<fieldset >
				  <legend>Información general</legend>
				  
				<div class="six columns">
				  <p>
					<label for="nombre">Nombre</label>
					<input type="text"  name="actores_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required/>
				 </p>
				 <p>
				<label for="siglas">Siglas:</label>
					<input type="text"  name="actores_apellidosSiglas" value="<?php echo set_value('apellidosSiglas'); ?>" size="40" maxlength="60" required/>
				</p>
				
				</div>
				  
				<div class="six columns">
				
				<div class="six columns">
				 <p>
				<label for="tipoActor">Tipo de actor colectivo</label>
					<select name="infoGralActores_tipoActorColectivoId" id="infoGralActores_tipoActorColectivoId">
						<?php foreach($tipoActorColectivo['tipoActorColectivo'] as $key => $item):?>
                                                        <option value="<?=$item['tipoActorColectivoId']; ?>"><?=$item['descripcion']; ?></option>
						<?php endforeach;?>
					</select>									
				 </p>
				</div>
				<div class="six columns">
					<p>
						<label >Foto </label>
						<input type="file" name="actores_foto"/>
					</p>
				</div>	 
				 <p>
				<label for="actividad">Actividad</label>
					<select name="infoGralActores_actividad" id="infoGralActores_actividad">
					<?php foreach($actividad['colectivo'] as $key => $item):?>
                                                            <option value="<?=$item['ocupacionId']; ?>"><?=$item['descripcion']; ?></option>
					<?php endforeach;?>
					</select>									
				 </p>
				  
		<div class="six columns">
			
			</fieldset>	<!--Termina Información general-->
			<?php echo br(2);?>
			
			<fieldset>
				  <legend>Dirección</legend>
				  
				<div class="six columns">  
				 <p>
					<label for="ubicacion">Ubicación</label>
						<input type="text"  name="direccionActor_direccion" value="<?php echo set_value('ubicacion'); ?>" size="30"  />
				 </p>

				<p>
					<label for="paisdir">País</label>
						<select name="direccionActor_paisesCatalogo_paisId" id="direccionActor_paisesCatalogo_paisId">
					<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
						</select>
				</p>
					
				<p>
					<label for="estadodir">Estado</label>
						<select name="direccionActor_estadosCatalogo_estadoId"  id="direccionActor_estadosCatalogo_estadoId" >
							<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
						</select>
				</p>
				
			  </div>
				  
			<div class="six columns">
				<p>
					<label for="direccionActor_municipiosCatalogo_municipioId">Municipio</label>
						<select name="direccionActor_municipiosCatalogo_municipioId" id="direccionActor_municipiosCatalogo_municipioId">
							<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
						</select>
				</p>	
				
				<p>
					<label for="codigoPos">Código Postal</label>
						<input type="text"  name="actores_codigoPostal" value="<?php echo set_value('codigoPos'); ?>" size="30"  />
				 </p>
			
			</div>
					 
					
			</fieldset><!--Termina dirección-->
			
			<?php echo br(2);?>
			<fieldset>
				
				  <legend>Información de contacto</legend>
				  
				<div class="six columns">
				 <p>
					<label for="telefono">Teléfono</label>
						<input type="text" id="infoContacto_telefono" name="infoContacto_telefono" value="<?php echo set_value('telefono'); ?>" size="30"  />
				</p>
				 
				 <p>
					<label for="fax">Fax</label>
						<input type="text" id="infoContacto_fax" name="infoContacto_fax" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="15" />
				</p>
				
				</div>
				  
				<div class="six columns">
					
				<p>
					<label for="correo">Correo electrónico</label>
						<input type="email" id="infoContacto_correoE" name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>" size="30"  />
				</p> 
				
				<p>
					<label for="paginaPersonal">Página web</label>
						<input type="text" id="infoGralActores_paginaWeb" name="infoGralActores_paginaWeb" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="100" />
				 </p>
				 
				 </div>
				  
			</fieldset><!--Termina información de contacto-->
						
				<?php echo br(1);?>					
				<input class="medium button" type="submit" />
		<?php echo br(2);?>

		</div>
		</form>	
		
		
