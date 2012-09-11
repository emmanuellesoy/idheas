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
