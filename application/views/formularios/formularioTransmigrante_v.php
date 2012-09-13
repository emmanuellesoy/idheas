<?php echo validation_errors(); ?>
<?php $config=array('enctype'=>'image/jpeg'); echo form_open('actores_c/agregarActor'); ?>
<input type="hidden" value="2" name="actores_tipoActorId" />
			
		<div id="Actores" >
				
				
				<fieldset>
					  <legend>Información general</legend>
					<div class="six columns">
					 
					  <p>
						<label for="nombre">Nombre</label>
						<input type="text"  name="actores_nombre" size="30"  required/>
					  </p>
					 
					  <p>
						<label for="apellidos">Apellidos</label>
						<input type="text"  name="actores_apellidosSiglas" size="60" required/>
					 
					  </p>
					 
					  <p>
						<label for="alias">Alias</label>
						<input type="text" name="alias_alias" size="30" />
					  
					  </p>
					 
					  
					</div>
				<div class="six columns">
					 
					<div class="seven columns">
					  <p>
						<label for="genero">Género</label>
						<input type="radio" name="infoGralActor_generoid" checked="checked" value="<?php echo set_value('Hombre'); ?>" /> Hombre
						<input type="radio" name="infoGralActor_generoid" value="<?php echo set_value('Mujer'); ?>" /> Mujer
					
					  </p>
					  </div>
					 
					<div class="five columns">
					  <p>
						<label for="edad">Edad</label>
						<select name="infoGralActor_edad" id="infoGralActor_edad">					
									<option  > </option>	
						<?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
									<option  value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
					  </p>
					</div>
					
					<div class="twelve columns">	
						<p>
						<label >Foto </label>
						<input type="file" name="actores_foto"/>
						</p>
					</div>		
						
					<label for="estadoCivil">Estado Civil</label>
					<span class="twelve columns" id="infoGralActor_estadoCivil_estadoCivilIdSelect">
						<select id="infoGralActor_estadoCivil_estadoCivilId"  name="infoGralActor_estadoCivil_estadoCivilId">
							<option > </option>
							<?php foreach($estadoCivil['estadoCivil'] as $key => $item):?>
								<option value="<?=$item['estadoCivilId']; ?>"><?=$item['descripcion']; ?></option>
						<?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActor_estadoCivil_estadoCivilId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoGralActor_estadoCivil_estadoCivilId" class="Escondido twelve columns">
					</span>
					 
					<label for="nacionalidadID">Nacionalidad</label>
					<span class="twelve columns" id="infoGralActor_nacionalidadIdSelect">	
						<select name="infoGralActor_nacionalidadId" id="InfoGralActor_nacionalidad">
							<option > </option>
							<?php foreach($nacionalidad as $key => $item):?>
								<option value="<?=$item?>"><?=$key?></option>
							<?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActor_nacionalidadId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoGralActor_nacionalidadId" class="Escondido twelve columns">
					</span>
					
				</div>
					 
				</fieldset>	<!--Termina información general-->
				
				
				<?php echo br(2);?>
				
				<fieldset>
					  <legend>Detalles</legend>
				<div class="six columns">
				 
					 
					<label for="hijos">Hijos</label>
					<span class="twelve columns" id="infoGralActor_hijosSelect">
						<select name="infoGralActor_hijos" id="infoGralActor_hijos" >						
						<option > </option>
						<?php foreach($hijos as $item):?> 
									<option value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActor_hijos" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_hijos" class="Escondido twelve columns">
				</span>
					 
					 
					<label for="grupoIndigena">Grupo Indígena</label>
					<span class="twelve columns" id="infoGralActor_gruposIndigenas_grupoIndigenaIdSelect">
						<select name="infoGralActor_gruposIndigenas_grupoIndigenaId" id="infoGralActor_gruposIndigenas_grupoIndigenaId">
						<option > </option>
						<?php foreach($grupoIndigena['gruposIndigenas'] as $key => $item):?> 
                                <option value="<?=$item['grupoIndigenaId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActor_gruposIndigenas_grupoIndigenaId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_gruposIndigenas_grupoIndigenaId" class="Escondido twelve columns">
				</span>
						
					  
					 
					  <p>			
						<label for="genero">¿Habla español?</label>
						<input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol"  checked="checked" value="<?php echo set_value('Si'); ?>" /> Si
						<input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol" value="<?php echo set_value('No'); ?>" /> No
						
					  </p>
					  
					</div>
					<div class="six columns">
					 
						<label for="nivelEscolaridad">Nivel de Escolaridad</label>
						<span class="twelve columns" id="infoGralActor_escolaridadIdSelect">
							<select name="infoGralActor_escolaridadId" id="infoGralActor_escolaridadId">
								<option > </option>
							<?php foreach($escolaridad as $key => $item):?>
													<option value="<?=$item?>"><?=$key?></option>
							<?php endforeach;?>
							</select>
							<input id="BotonmasinfoGralActor_escolaridadId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
					<span id="TextoEspecial_infoGralActor_escolaridadId" class="Escondido twelve columns">
					</span>
					 
					 
						<label for="UltimaOcupacion">Última Ocupación</label>
						<span class="twelve columns" id="infoGralActor_ocupacionesCatalogo_ultimaOcupacionidSelect">
						<select name="infoGralActor_ocupacionesCatalogo_ultimaOcupacionid" id="infoGralActor_ocupacionesCatalogo_ultimaOcupacionid">
							<option > </option>
						<?php foreach($ultimaOcupacion['ocupacionesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['ocupacionId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
						</select>
						<input id="BotonmasinfoGralActor_ocupacionesCatalogo_ultimaOcupacionid" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_ocupacionesCatalogo_ultimaOcupacionid" class="Escondido twelve columns">
				</span>
						
					</div>
					 
						
				</fieldset><!--Termina Detalles-->
				
				
				
				<?php echo br(2);?>
				
				
				<fieldset>	
					  <legend>Información Migratoria</legend>
				
				<div class="twelve columns">
						<fieldset>		
							<legend>Lugar de origen</legend>
				
							<div class="four columns">		
							
								<label for="pais">País</label>
								<span class="twelve columns" id="datosDeNacimiento_paisesCatalogo_paisIdSelect">
									<select id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId">
									<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
								<?php endforeach;?>
									</select>
								<input id="BotonmasdatosDeNacimiento_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
							</span>
							<span id="TextoEspecial_datosDeNacimiento_paisesCatalogo_paisId" class="Escondido twelve columns">
						</span>
				
					</div>
							
							<div class="four columns">
								<label for="estado">Estado</label>
						<span id="datosDeNacimiento_estadosCatalogo_estadoIdSelect" class="twelve columns" >
									<select name="datosDeNacimiento_estadosCatalogo_estadoId">
										<option > </option>
										<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
										<option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
										<?php endforeach;?>
									</select>
							<input id="BotonmasdatosDeNacimiento_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_datosDeNacimiento_paisesCatalogo_paisId" class="Escondido twelve columns">
					</span>
							</div>
							
							<div class="four columns">
							  <span id="datosDeNacimiento_municipiosCatalogo_municipioIdSelect" class="twelve columns">
								<label for="municipio">Municipio</label>
									<select id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId">
										<option > </option>
										<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
												<option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
										<?php endforeach;?>
									</select>
									<input id="BotonmasdatosDeNacimiento_municipiosCatalogo_municipioId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
								</span>
								<span id="TextoEspecial_datosDeNacimiento_municipiosCatalogo_municipioId" class="Escondido twelve columns">
							</span>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
					
					<label for="paistrans">País de tránsito</label>
						<span id="infoMigratoria_paisTransitoIdSelect" class="twelve columns">
						<select name="infoMigratoria_paisTransitoId" id="infoMigratoria_paisTransitoId">
							<option > </option>
						<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_paisTransitoId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_paisTransitoId" class="Escondido twelve columns">
					</span>
			
					<label for="paisdest">País destino</label>
					<span id="infoMigratoria_paisDestinoIdSelect" class="twelve columns">
						<select name="infoMigratoria_paisDestinoId" id="infoMigratoria_paisDestinoId">
							<option > </option>
						<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_paisDestinoId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_paisDestinoId" class="Escondido twelve columns">	</span>
					
					<label for="intcrucepaistran">Intentos de cruce por el país de tránsito</label>
					<span id="infoMigratoria_intCruceTransitoSelect" class="twelve columns">
						<select name="infoMigratoria_intCruceTransito" id="infoMigratoria_intCruceTransito" >						
						<option > </option>
						<?php foreach($intentos as $item):?> 
									<option value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_intCruceTransito" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_intCruceTransito" class="Escondido twelve columns">
					</span>
						
				<label for="comentario">Comentarios</label>
				  <textarea  placeholder="Escribir algun comentario" rows="10" cols="100" name="infoMigratoria_comentarios" id="infoMigratoria_comentarios" wrap="hard" ></textarea>
				  
					
				</div>
					
				<div class="six columns">
					
					<label for="expulpaisdest">Expulsiones del país de destino</label>
					<span id="infoMigratoria_expCruceDestinoSelect" class="twelve columns">
						<select name="infoMigratoria_expCruceDestino" id="infoMigratoria_expCruceDestino">						
						<option > </option>
						<?php foreach($intentos as $item):?> 
									<option  value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_expCruceDestino" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_expCruceDestino" class="Escondido twelve columns">
					</span>
				</div>		
				
				<div class="six columns">		
					<label for="motivoViaje">Motivo del viaje</label>
						<span id="infoMigratoria_motivoViajeSelect" class="twelve columns" >
						<select name="infoMigratoria_motivoViaje" id="infoMigratoria_motivoViaje">
							<option > </option>
						<?php foreach($motivos as $key => $item):?>
												<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_motivoViaje" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_motivoViaje" class="Escondido twelve columns">
					</span>
						
						
					<label for="tipoEstancia">Tipo de estancia</label>
					<span id="infoMigratoria_tipoEstanciaIdSelect" class="twelve columns">
						<select name="infoMigratoria_tipoEstanciaId" id="infoMigratoria_tipoEstanciaId">
							<option > </option>
						<?php foreach($estancia as $key => $item):?>
												<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>
							<input id="BotonmasinfoMigratoria_tipoEstanciaId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_infoMigratoria_tipoEstanciaId" class="Escondido twelve columns">
					</span>
				</div>
				
				<div class="six columns">				
				 <p>								
					<label for="intcrucespaisdets">Intentos de cruce al país destino</label>
					<option > </option>
						<select name="infoMigratoria_intCruceDestino" id="infoMigratoria_intCruceDestino" >						
						<?php foreach($intentos as $item):?> 
									<option value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
				</p>
						
				 <p>
					<label for="expulpaistrans">Expulsiones del país de tránsito</label>
					<option > </option>
						<select name="infoMigratoria_expCruceTransito">						
						<?php foreach($intentos as $item):?> 
									<option  value="<?=$item?>"><?=$item?></option>
						<?php endforeach;?>
						</select>
					  </p>
					  
					
				<p class="twelve columns">
					<label for="realizaViaje">Realiza el viaje</label>
						<input type="radio" name="infoMigratoria_realizaViaje" checked="checked" value="<?php echo set_value('noAcom'); ?>" /> No acompañado
						<input type="radio" name="infoMigratoria_realizaViaje" value="<?php echo set_value('acom'); ?>" /> Acompañado
				</p>
						
					
					 
				</div>	
				</fieldset><!--Termina datos de nacimiento-->
				
				<?php echo br(1);?>
			<input class="medium button" type="submit" />
				<?php echo br(2);?>
		<div class="row">
		<div  class="four columns offset-by-eight" >
			
		<input class="medium button" type="submit" value="Guardar" />
		<input class="medium button" type="reset" value="Cancelar" onclick="mostrarTransmigrante()" />
		</div>
		</div>
			</div>
			
				
			
			</form>	
