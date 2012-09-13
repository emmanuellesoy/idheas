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
				
					
					<label for="tipoActor">Tipo de actor colectivo</label>
					<span id="infoGralActores_tipoActorColectivoIdSelect">
						<select name="infoGralActores_tipoActorColectivoId" id="infoGralActores_tipoActorColectivoId">
							<option > </option>
							<?php foreach($tipoActorColectivo['tipoActorColectivo'] as $key => $item):?>
								<option value="<?=$item['tipoActorColectivoId']; ?>"><?=$item['descripcion']; ?></option>
							<?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActores_tipoActorColectivoId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActores_tipoActorColectivoId" class="Escondido twelve columns"></span>
			
				</div> <!--cierra six columns-->
				
				<div class="six columns">
						<p>
							<label >Foto </label>
							<input type="file" name="actores_foto"/>
						</p>
					
					<label for="actividad">Actividad</label>
					<span id="infoGralActores_actividadSelect">
						<select name="infoGralActores_actividad" id="infoGralActores_actividad">
							<option > </option>
							<?php foreach($actividad['colectivo'] as $key => $item):?>
								<option value="<?=$item['ocupacionId']; ?>"><?=$item['descripcion']; ?></option>
							<?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActores_actividad" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActores_actividad" class="Escondido twelve columns"></span>
				</div>	<!--six columns--> 
				  
			
			</fieldset>	<!--Termina Información general-->
			<?php echo br(2);?>
			
			<fieldset>
				  <legend>Dirección</legend>
				  
				<div class="six columns">  
				 <p>
					<label for="ubicacion">Ubicación</label>
						<input type="text"  name="direccionActor_direccion" value="<?php echo set_value('ubicacion'); ?>" size="30"  />
				 </p>

				<label for="paisdir">País</label>
					<div id="2direccionActor_paisesCatalogo_paisIdSelect" class="twelve columns">
						<select name="direccionActor_paisesCatalogo_paisId" id="2direccionActor_paisesCatalogo_paisId">
							<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
									<option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
							<?php endforeach;?>
						</select>
						<input id="Botonmas2direccionActor_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto2(this)" />	
					</div>
					<span id="TextoEspecial_2direccionActor_paisesCatalogo_paisId" class="Escondido twelve columns">	</span>
					
					
					<label for="estadodir">Estado</label>
					<span id="2direccionActor_estadosCatalogo_estadoIdSelect" class="twelve columns">
						<select name="direccionActor_estadosCatalogo_estadoId"  id="2direccionActor_estadosCatalogo_estadoId" >
							<option > </option>
							<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
							<?php endforeach;?>
						</select>
						<input id="Botonmas2direccionActor_estadosCatalogo_estadoId" type="button" class="tiny button"  value="+" onclick="mostrarTexto2(this)" />	
					</span>
					<span id="TextoEspecial_2direccionActor_estadosCatalogo_estadoId" class="Escondido twelve columns"></span>
				
			  </div>
				  
			<div class="six columns">
				
					<label for="municipioId">Municipio</label>
					<span id="2direccionActor_municipiosCatalogo_municipioIdSelect" >
						<select name="direccionActor_municipiosCatalogo_municipioId" id="direccionActor_municipiosCatalogo_municipioId">
							<option > </option>
							<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
							<?php endforeach;?>
						</select>
						<input id="Botonmas2direccionActor_municipiosCatalogo_municipioId" type="button" class="tiny button"  value="+" onclick="mostrarTexto2(this)" />	
					</span>
					<span id="TextoEspecial_2direccionActor_municipiosCatalogo_municipioId" class="Escondido twelve columns"></span>
				
					<p>
						<label for="codigoPos">Código Postal</label>
						<input type="text"  name="actores_codigoPostal" value="<?php echo set_value('codigoPos'); ?>" size="30"  />
					 </p>
			
			</div> <!--six columns -->
					 
					
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
				
				</div> <!-- six columns -->
				  
				<div class="six columns">
					
				<p>
					<label for="correo">Correo electrónico</label>
						<input type="email" id="infoContacto_correoE" name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>" size="30"  />
				</p> 
				
				<p>
					<label for="paginaPersonal">Página web</label>
						<input type="text" id="infoGralActores_paginaWeb" name="infoGralActores_paginaWeb" value="<?php echo set_value('telefonomovil'); ?>" size="30" maxlength="100" />
				 </p>
				 
				 </div> <!--six columns-->
				  
			</fieldset><!--Termina información de contacto-->
						
		<?php echo br(2);?>
		
		<div class="row">
		<div  class="four columns offset-by-eight" >
			
		<input class="medium button" type="submit" value="Guardar" />
		<input onClick="mostrarColectivo()" class="medium button" type="reset" value="Cancelar"  />
		</div>
		</div>

		</div>
		</form>	
		
		
