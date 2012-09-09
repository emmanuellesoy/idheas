<div id="formularioInfoGral">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Información general</h2><!--título de la sub-pestaña--->  
	<div>
		<!--Comienzan datos-->
		<div class="twelve columns">
		<div class="six columns">
			
			<p>
				<label for="nombre">Nombre: </label>
				<input type="text"  name="casos_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required />
			</p>
			<p>
				<label for="personas">Personas afectadas:</label>
				<input type="number"  name="casos_personasAfectadas" value="<?php echo set_value('personas'); ?>" size="40" maxlength="60" />
			</p>
					
		</div>
		<div class="twelve columns">
		<div class="six columns">
	<label for="edad">Fecha inicial</label>
			<select onclick="fechaInicialCasos(value)">
						<option  value="1" checked="checked" >fecha exacta</option>
						<option  value="2">fecha aproximada</option>
						<option  value="3">Se desconce el día</option>
						<option  value="4">Se desconce el día y el mes</option>
			</select>
		</div>
		
		<div class="six columns">
			<?php echo br(1);?>	
			<p class="Escondido" id="fechaExactaV">
				<input type="text" id="fechaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaAproxV">
				<input type="text" id="fechaAprox"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaSinDiaV">
				<input type="text" id="fechaSinDia"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

			</p >

			<p class="Escondido" id="fechaSinDiaSinMesV">
				<input type="text" id="fechaSinDiaSinMes" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

			</p>
		</div>
	</div> <!---termina opciones de fechaInicial-->
		<div class="twelve columns">
				<label for="edad">Fecha terminal</label>
			<div class="six columns">
				<select onclick="fechaTerminalCasos(value)">
							<option  value="1" checked="checked" >fecha exacta</option>
							<option  value="2">fecha aproximada</option>
							<option  value="3">Se desconce el día</option>
							<option  value="4">Se desconce el día y el mes</option>
				</select>
			</div>
			<div class="six columns">
				<p class="Escondido" id="fechaExactaV2">
					<input type="text" id="fechaExacta2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaAproxV2">
					<input type="text" id="fechaAprox2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaSinDiaV2">
					<input type="text" id="fechaSinDia2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

				</p >

				<p class="Escondido" id="fechaSinDiaSinMesV2">
					<input type="text" id="fechaSinDiaSinMes2" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

				</p>
			</div>
		</div> <!---termina opciones de fechaTermino-->
		</div>
		
			<?php echo br(2);?>	
		<!--Comienzan subpestañas--------------->
	  	<div id="subPestanias" data-collapse>
			<h2 class="twelve columns">Lugares</h2>
			<div>
	  				<table>
			            <thead>
			              <tr>
			                <th>País</th>
			                <th>Estado</th>
			                <th>Municipio</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td>Content</td>
			                <td>This is longer content</td>
			                <td>Content</td>
			                <td>
								<input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" />
								<input type="button" class="[tiny, small, medium, large] button"  value="Eliminar" onclick="" />
			                </td>
			              </tr>
			            </tbody>
			          </table>
			        <td><input type="button" class="[tiny, small, medium, large] button"  value="Añadir" onclick="" /></td>
	  			</div>
		</div>
		
	  	<div id="subPestanias" data-collapse>
			<h2 class="twelve columns">Descripción</h2>
				<div class="twelve columns">
					<textarea id="tinyeditor" style="width: 400px; height: 200px" wrap="hard"  name="editorCasos"></textarea>
					<script>
					var instance = new TINY.editor.edit('editor', {
						id: 'tinyeditor',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
			   </div>	  
		</div><!--fin acordeon descripción-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2 class="twelve columns">Resumen</h2>
				<div class="twelve columns">
					<textarea id="infoCaso_resumen" style="width: 400px; height: 200px" wrap="hard"  name="infoCaso_resumen"></textarea>
					<script>
					var instance = new TINY.editor.edit('infoCaso_resumen', {
						id: 'infoCaso_resumen',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
			   </div>	  

	  	</div><!--fin acordeon observaciones-->

	  	<div id="subPestanias" data-collapse>
	  		<h2 class="twelve columns">Obsevaciones</h2>
	  		
			<div class="twelve columns">
					<textarea id="infoCaso_observaciones" style="width: 400px; height: 200px" wrap="hard"  name="infoCaso_observaciones"></textarea>
					<script>
					var instance = new TINY.editor.edit('infoCaso_observaciones', {
						id: 'infoCaso_observaciones',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
			</div>	
	  	</div><!--fin acordeon observaciones-->

	</div>
</div><!--fin acordeon información general-->
</div>
<!-------------------Termina primer pestaña------------------------------------->


<!-------------------------Comienza la parte de Acto---------------------------->
<div id="formularioCasoActo">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Acto</h2><!--título de la sub-pestaña--->  
	<div>
			<fieldset>
				  <legend>Información general</legend>
				  
                    <p>
                        <label for="genero">Derecho afectado</label>
                        
                        
            <div  id="listaActorIndiv" class="PruebaScorll">	
			</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <label for="genero">Acto</label>
                    </p>
                    
                    		<div class="twelve columns">
		<div class="six columns">
	<label for="edad">Fecha de inicio</label>
			<select onclick="fechaInicialCasosActos(value)">
						<option  value="1" checked="checked" >fecha exacta</option>
						<option  value="2">fecha aproximada</option>
						<option  value="3">Se desconce el día</option>
						<option  value="4">Se desconce el día y el mes</option>
			</select>
		</div>
		
		<div class="six columns">
			<?php echo br(1);?>	
			<p class="Escondido" id="fechaExactaVAct">
				<input type="text" id="fechaExactaAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaAproxVAct">
				<input type="text" id="fechaAproxAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaSinDiaVAct">
				<input type="text" id="fechaSinDiaAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

			</p >

			<p class="Escondido" id="fechaSinDiaSinMesVAct">
				<input type="text" id="fechaSinDiaSinMesAct" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

			</p>
		</div>
	</div> <!---termina opciones de fechaInicial-->
		<div class="twelve columns">
				<label for="edad">Fecha de término</label>
			<div class="six columns">
				<select onclick="fechaTerminalCasosActos(value)">
							<option  value="1" checked="checked" >fecha exacta</option>
							<option  value="2">fecha aproximada</option>
							<option  value="3">Se desconce el día</option>
							<option  value="4">Se desconce el día y el mes</option>
				</select>
			</div>
			<div class="six columns">
				<p class="Escondido" id="fechaExactaVAct2">
					<input type="text" id="fechaExactaAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaAproxVAct2">
					<input type="text" id="fechaAproxAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaSinDiaVAct2">
					<input type="text" id="fechaSinDiaAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

				</p >

				<p class="Escondido" id="fechaSinDiaSinMesVAct2">
					<input type="text" id="fechaSinDiaSinMesAct2" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

				</p>
			</div>
		</div> <!---termina opciones de fechaTermino-->
				<?php echo br(1);?>	
	</fieldset>
			
			<?php echo br(2);?>	
			
			
			<fieldset>
				  <legend>Personas afectadas y lugar</legend>
		<div class="six columns">

			<p>
				<label for="personas">Personas afectadas:</label>
				<input type="number"  name="nucleoCaso_noPersonasAfectadas" value="<?php echo set_value('personas'); ?>" size="40" maxlength="60" />
			</p>

			<p>
				<label for="pais">País</label>
				<select id="nucleoCaso_paisesCatalogo_paisId" name="nucleoCaso_paisesCatalogo_paisId">						
				<?php foreach($pais as $key => $item):?> 
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
			
		</div>
				  
		<div class="six columns">

			<p>
				<label for="estado">Estado</label>
				<select id="nucleoCaso_estadosCatalogo_estadoId" name="nucleoCaso_estadosCatalogo_estadoId">						
				<?php foreach($estado as $key => $item):?>
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
			</div><!----Termina primer mitad de datos de Nacimiento ---->

		<div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->

			<p>
				<label for="municipio">Municipio</label>
				<select id="nucleoCaso_municipiosCatalogo_municipioId" name="nucleoCaso_municipiosCatalogo_municipioId">						
				<?php foreach($municipio as $key => $item):?> 
					<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
		</div>
				  
			</fieldset>
	</div>
	  
	</div><!--fin acordeon información general-->

</div>
<!-----------------------Termina la parte de Acto------------------------------->


<!-----------------Comienza la parte de Intervención---------------------------->
<div id="formularioIntervencion">
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Intervención</h2><!--título de la sub-pestaña--->  
	<div>
		
		<fieldset>
			
			<?php echo br(2);?>	
		
			<fieldset>
				  <legend>Información general</legend>
					
					<div class="six columns">
						<p>
							<label for="tipoIntervencion">Tipo de intervención</label>
							<select id="tipoIntervencion" name="intervenciones_tipoIntervencionId">						
							<?php foreach($pais as $key => $item):?> 
									<option value="<?=$item?>"><?=$key?></option>
							<?php endforeach;?>
							</select>
						</p>
						</div>
					
					<div class="six columns">	
						<p>
							<label for="fecha">Fecha: </label>
							<input type="text" id="datepickerIntervencion"name="intervenciones_fecha" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>
					</div>
						<div class="twelve columns">
								<p>
									<label for="tipoIntervencion">Impacto</label>									
									<textarea id="intervenciones_impacto" style="width: 400px; height: 200px" name="intervenciones_impacto" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('intervenciones_impacto', {
										id: 'intervenciones_impacto',
										width: 584,
										height: 175,
										cssclass: 'tinyeditor',
										controlclass: 'tinyeditor-control',
										rowclass: 'tinyeditor-header',
										dividerclass: 'tinyeditor-divider',
										controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
										footer: false,
										xhtml: false,
										bodyid: 'editor',
										toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
										resize: {cssclass: 'resize'}
									});
									</script>
								</p>	 
						</div>
						<div class="twelve columns">
								<p>
									<label for="tipoRespuesta">En respuesta</label>
									<textarea id="intervenciones_respuesta" style="width: 400px; height: 200px" name="intervenciones_respuesta" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('intervenciones_respuesta', {
										id: 'intervenciones_respuesta',
										width: 584,
										height: 175,
										cssclass: 'tinyeditor',
										controlclass: 'tinyeditor-control',
										rowclass: 'tinyeditor-header',
										dividerclass: 'tinyeditor-divider',
										controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
										footer: false,
										xhtml: false,
										bodyid: 'editor',
										toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
										resize: {cssclass: 'resize'}
									});
									</script>
								</p>	 
						</div>
					<?php echo br(2);?>	

			</fieldset>
			
					<div class="twelve columns">
						<div class="six columns">
							<fieldset>
								  <legend>Interventor </legend>
								  
									<label for="Interventor">Persona</label>
							</fieldset>
						</div>
						<div class="six columns">
							<fieldset>
								  <legend>Receptor </legend>
									<label for="receptor">Persona</label>
							</fieldset>
						</div>
						<?php echo br(2);?>	
					</div>
			
			
			<?php echo br(2);?>	
			
			<div id="subPestanias" data-collapse>
			<h2 class="twelve columns">Personas por las que se interviene</h2>
				<div >
					  <span>Agregar</span>
				</div>	  
			</div><!--fin acordeon descripción-->
	  	
		</fieldset>	
			
	</div>
</div><!--fin acordeon información general-->
</div>
<!-----------------------Termina la parte de Intervención----------------------->



<!-----------------Comienza la parte de Fuente documental------------------------>
<div id="formularioFuenteDocumental">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Fuente documental</h2><!--título de la sub-pestaña--->  
	<div>
	
		<fieldset>
			  <legend>fuente documental</legend>
						<div class="twelve columns">
								<p>
									<label for="nombreFuente">Nombre de la fuente</label>
									<textarea id="infoAdicional_nombreFuente" style="width: 400px; height: 200px" name="infoAdicional_nombreFuente" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_nombreFuente', {
										id: 'infoAdicional_nombreFuente',
										width: 584,
										height: 175,
										cssclass: 'tinyeditor',
										controlclass: 'tinyeditor-control',
										rowclass: 'tinyeditor-header',
										dividerclass: 'tinyeditor-divider',
										controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
										footer: false,
										xhtml: false,
										bodyid: 'editor',
										toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
										resize: {cssclass: 'resize'}
									});
									</script>
								</p>	 
						
						</div>
						
						
						
						<div class="twelve columns">
								<p>
									<label for="tipoRespuesta">Información adicional</label>
									<textarea id="infoAdicional_infoAdicionalFuenteDocumental" style="width: 400px; height: 200px" name="infoAdicional_infoAdicionalFuenteDocumental" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_infoAdicionalFuenteDocumental', {
										id: 'infoAdicional_infoAdicionalFuenteDocumental',
										width: 584,
										height: 175,
										cssclass: 'tinyeditor',
										controlclass: 'tinyeditor-control',
										rowclass: 'tinyeditor-header',
										dividerclass: 'tinyeditor-divider',
										controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
										footer: false,
										xhtml: false,
										bodyid: 'editor',
										toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
										resize: {cssclass: 'resize'}
									});
									</script>
									
									
								</p>	 
						</div>
								<p>
									<label for="tipoFuente">Tipo de la fuente</label>
									<span>Nombre</span>
									<label for="FechaPubli">Fecha de publicación</label>
										<input type="text" id="infoAdicional_fechaPublicacion" name="infoAdicional_fechaPublicacion" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />
									
									<span>Notas</span>
									
									<label for="fuenteLiga">Liga</label>
									<textarea id="infoAdicional_url" style="width: 400px; height: 200px" name="infoAdicional_url" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_url', {
										id: 'infoAdicional_url',
										width: 584,
										height: 100,
										cssclass: 'tinyeditor',
										controlclass: 'tinyeditor-control',
										rowclass: 'tinyeditor-header',
										dividerclass: 'tinyeditor-divider',
										controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
										footer: false,
										xhtml: false,
										bodyid: 'editor',
										toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
										resize: {cssclass: 'resize'}
									});
									</script>
									<label for="FechaPubli">Fecha de acceso</label>
										<input type="text" id="infoAdicional_fechaAcceso" name="infoAdicional_fechaAcceso" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />
									
								</p>
								
						<div class="twelve columns">
							<div class="six columns">
									<p>
										<label for="idioma">Idioma</label>
										<select id="infoAdicional_idiomaCatalogo_idiomaId" name="infoAdicional_idiomaCatalogo_idiomaId">						
										<?php foreach($pais as $key => $item):?> 
												<option value="<?=$item?>"><?=$key?></option>
										<?php endforeach;?>
										</select>

									</p>
							</div>
							<div class="six columns">
									<p>
										<label for="nivConfiabilidad">Nivel de confiabilidad</label>
										<select id="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId" name="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId">						
										<?php foreach($pais as $key => $item):?> 
												<option value="<?=$item?>"><?=$key?></option>
										<?php endforeach;?>
										</select>

									</p>
							</div>
							
							<div class="twelve columns">
									<p>
										<label for="comentFuente">Comentarios</label>
										<textarea id="infoAdicional_comentarios" style="width: 400px; height: 200px" name="infoAdicional_comentarios" wrap="hard"  > </textarea>
										<script>
										var instance = new TINY.editor.edit('infoAdicional_comentarios', {
											id: 'infoAdicional_comentarios',
											width: 584,
											height: 175,
											cssclass: 'tinyeditor',
											controlclass: 'tinyeditor-control',
											rowclass: 'tinyeditor-header',
											dividerclass: 'tinyeditor-divider',
											controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
											footer: false,
											xhtml: false,
											bodyid: 'editor',
											toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
											resize: {cssclass: 'resize'}
										});
										</script>
									</p>	 
							
							</div>
							
							
							<div class="twelve columns">
									<p>
										<label for="comentFuente">Observaciones</label>
										<textarea id="infoAdicional_observaciones" style="width: 400px; height: 200px" name="infoAdicional_observaciones" wrap="hard"  > </textarea>
										<script>
										var instance = new TINY.editor.edit('infoAdicional_observaciones', {
											id: 'infoAdicional_observaciones',
											width: 584,
											height: 175,
											cssclass: 'tinyeditor',
											controlclass: 'tinyeditor-control',
												rowclass: 'tinyeditor-header',
											dividerclass: 'tinyeditor-divider',
											controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
											footer: false,
											xhtml: false,
											bodyid: 'editor',
											toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
											resize: {cssclass: 'resize'}
										});
										</script>
									</p>	 
							
							</div>
							
					
						
						</div>
								
								
		</fieldset>
	</div>

	</div>
</div>
<!-----------------termina la parte de Fuente documental------------------------>


<!-----------------Comienza la parte de fuentes de información personal ------------------------>
<div id="formularioFuenteInfoPer">
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Detalle de información personal</h2><!--título de la sub-pestaña--->  
	<div>
		<div class="twelve columns">
			<div class="six columns">
				<input type="button" class="medium button"  value="Persona" onclick="" />
				lista de personas
			</div>

			<div class="six columns">
				<input type="button" class="medium button"  value="Actor colectivo" onclick="" />		
				lista de actores colectivos
			</div>		
		</div>
		
		<div class="twelve columns">
			<div class="six columns">
				<label for="tipoFuente">Tipo de fuente</label>
						<select id="infoAdicional_tipoFuenteId">
									<option  value="1" checked="checked" >fecha exacta</option>
									<option  value="2">fecha aproximada</option>
									<option  value="3">Se desconce el día</option>
									<option  value="4">Se desconce el día y el mes</option>
						</select>
			</div>
					
			<div class="six columns">
				<?php echo br(1);?>	
					<input type="text" id="fechaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>
	</div>

	
		<div class="twelve columns">
			<div class="six columns">
					<p>
						<label for="idioma">Idioma</label>
						<select id="infoAdicional_idiomaCatalogo_idiomaId" name="infoAdicional_idiomaCatalogo_idiomaId">						
						<?php foreach($pais as $key => $item):?> 
								<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>

					</p>
			</div>
			<div class="six columns">
					<p>
						<label for="nivConfiabilidad">Nivel de confiabilidad</label>
						<select id="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId" name="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId">						
						<?php foreach($pais as $key => $item):?> 
								<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>

					</p>
			</div>
			
		<fieldset>
			<legend>Actor reportado</legend>
				lista de actores 
		<div class="twelve columns">
			<div class="six columns">
				<input type="button" class="medium button"  value="Persona" onclick="" />
				lista de personas
			</div>

			<div class="six columns">
				<input type="button" class="medium button"  value="Actor colectivo" onclick="" />		
				lista de actores colectivos
			</div>		
		</div>
		</fieldset>	
			
		</div>
	</div>
		
		
</div>
<!-------------------Termina la parte de fuentes de información personal------------------------------------->
</div>


<!-------------------Comienza la parte de relación entre casos------------------------------------->
<div id="formularioRelacionCasos">
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Detalle de la relación entre casos</h2><!--título de la sub-pestaña--->  
	<div>
		<span>Nombre del caso</span>	
		<span>tipo de relación</span>	
			select con relaciones
		
		<div class="twelve columns">
				
			<div class="two columns">
				
				<span>Nombre del caso</span>	
					
			</div>
			
			<div class="four columns">
				
				<span>fecha inicial</span>
				
			</div>
			
			<div class="four columns">
				
				<span>fecha de término</span>
				
			</div>
			
			 <div class="two columns">

			<input type="button" class="[tiny, small, medium, large] button"  value="seleccionar" onclick="" />
				
			</div>
		
		</div>


		<div class="twelve columns">
				<p>
					<label for="comentFuente">Comentarios</label>
					<textarea id="relacionCasos_comentarios" style="width: 400px; height: 200px" name="relacionCasos_comentarios" wrap="hard"  > </textarea>
					<script>
					var instance = new TINY.editor.edit('relacionCasos_comentarios', {
						id: 'relacionCasos_comentarios',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
				</p>	 
		
		</div>
		
		
		<div class="twelve columns">
				<p>
					<label for="comentFuente">Observaciones</label>
					<textarea id="relacionCasos_observaciones" style="width: 400px; height: 200px" name="relacionCasos_observaciones" wrap="hard"  > </textarea>
					<script>
					var instance = new TINY.editor.edit('relacionCasos_observaciones', {
						id: 'relacionCasos_observaciones',
						width: 584,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
							rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
				</p>	 
		
		</div>
		

	
		
	</div>
	
</div>
</div>
<!-------------------Termina la parte de relación entre casos------------------------------------->


<!-------------------Comienza la parte de detalles del lugar------------------------------------->
<div id="formularioDetallerLugar">
	<div id="pestania" data-collapse>
		<h2 class="twelve columns">Detalle de la relación entre casos</h2><!--título de la sub-pestaña--->  
		<div>
			<p class="four columns"> <!----Primer mitad de datos de Nacimiento ---->
				<label for="pais">País</label>
				<select id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId">						
				<?php foreach($pais as $key => $item):?> 
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>

			<p class="four columns">
				<label for="estado">Estado</label>
				<select id="datosDeNacimiento_estadosCatalogo_estadoId" name="datosDeNacimiento_estadosCatalogo_estadoId">						
				<?php foreach($estado as $key => $item):?>
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>

			<p class="four columns">
				<label for="municipio">Municipio</label>
				<select id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId">						
				<?php foreach($municipio as $key => $item):?> 
					<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
		</div>
	</div>
</div>


<!-------------------Comienza la parte de seguimiento del caso------------------------------------->

<div id="formularioDetallerLugar">
	<div id="pestania" data-collapse>
		<h2 class="twelve columns">Detalle de la información de seguimiento del caso</h2><!--título de la sub-pestaña--->  
			<div>
				<div class="twelve columns">
					<div class="six columns">
						<p>
							<label for="clave">Clave</label>
							<input type="text" id="fichas_fichaId" name="fichas_fichaId" value="<?php echo set_value('ficha'); ?>" size="30" maxlength="30" required />
						</p>
					</div>
					<div class="six columns">
						<p>
							<label for="claveTitulo">Título</label>
							<input type="text" id="fichas_titulo" name="fichas_titulo" value="<?php echo set_value('titulo'); ?>" size="60" maxlength="60" required />

						</p>
					</div>
				</div>
			<p>
				<label for="municipiodir">Fecha de recepción</label>
				<select id="direccionActor_municipiosCatalogo_municipioId" name="direccionActor_municipiosCatalogo_municipioId">						
				<?php foreach($municipio as $key => $item):?> 
										<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>
			</p>	

			<div class="twelve columns">
				<div class="six columns">
					<label for="edad">Fecha inicial</label>
					<select onclick="fichadeRecepcion(value)">
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
					</div>
					
					<div class="six columns">
					<?php echo br(1);?>	
						<p class="Escondido" id="fichaExactaV">
							<input type="text" id="fichaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaAproxV">
							<input type="text" id="fichaAprox"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaSinDiaV">
							<input type="text" id="fichaSinDia"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

						</p >

						<p class="Escondido" id="fichaSinDiaSinMesV">
							<input type="text" id="fichaSinDiaSinMes" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

						</p>
					</div>
				</div> <!---termina opciones de fechaInicial-->
			
			<div class="twelve columns">
					<p>
						<label for="comentFichas">Comentarios</label>
						<textarea id="fichas_Comentarios" style="width: 400px; height: 200px" name="fichas_Comentarios" wrap="hard"  > </textarea>
						<script>
						var instance = new TINY.editor.edit('fichas_Comentarios', {
							id: 'fichas_Comentarios',
							width: 584,
							height: 175,
							cssclass: 'tinyeditor',
							controlclass: 'tinyeditor-control',
							rowclass: 'tinyeditor-header',
							dividerclass: 'tinyeditor-divider',
							controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
							footer: false,
							xhtml: false,
							bodyid: 'editor',
							toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
							resize: {cssclass: 'resize'}
						});
						</script>
					</p>	 
			
			</div>	
		</div>
	
	</div>
</div>
<!-------------------Termina la parte de seguimiento del caso------------------------------------->



<!-------------------Comienza la parte de seguimiento del caso------------------------------------->

<div id="formularioDetallerLugar">
	<div id="pestania" data-collapse>
		<h2 class="twelve columns">Intevención</h2><!--título de la sub-pestaña--->  
		<div class="twelve columns">
		<dl class="tabs">
		  <dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
		  <dd><a href="#simple2">Simple Tab 2</a></dd>
		  <dd><a href="#simple3">Simple Tab 3</a></dd>
		</dl>

		<ul class="tabs-content">
		  <li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
		  <li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
		  <li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
		</ul>
				
		</div>
	</div>
</div>
<!-------------------Termina la parte de seguimiento del caso------------------------------------->









