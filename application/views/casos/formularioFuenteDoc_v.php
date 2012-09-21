<html>
	<head>
		
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width" />

		<title>i(dh)eas</title>
		
		  <!-- Estilo de la página CSS-->
		<?php $link = array(
			'href' => 'statics/stylesheets/foundation.min.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>
				
		<?php $link = array(
			'href' => 'statics/stylesheets/app.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
		
		
		<?php $link = array(
			'href' => 'statics/CSS/menu_v.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
		
	
		<!---Acordion css -->		
		<?php $link = array(
			'href' => 'statics/CSS/collapse.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
				
		<?php $link = array(
			'href' => 'statics/CSS/tinyeditor.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
                <script type="text/javascript">var base_url = "<?=base_url(); ?>"</script>
		<!--Scripts foundation-->
		<script src="<?php echo base_url(); ?>statics/javascripts/modernizr.foundation.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/foundation.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/app.js" ></script>
		
		<!--Scripts jquery-->		
		<script src="<?php echo base_url(); ?>statics/jquery-ui-1.8.23.custom/js/jquery-1.8.0.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/menu_v.js" ></script>
		<!---script que hace posible el acordion-->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

	</head>
	<body>

<form action='<?=base_url(); ?>index.php/casos_c/agregar_general' method="post" accept-charset="utf-8">
		<!-----------------Comienza la parte de Fuente documental------------------------>
		<div id="formularioFuenteDocumental" class="twelve columns">
			<div id="pestania" data-collapse>
			<h2 class="open">Fuente documental</h2><!--título de la sub-pestaña-->  
			<div>
			
				<fieldset>
					  <legend>fuente documental</legend>
						<div class="twelve columns">
								<p>
									<label for="nombreFuente">Nombre de la fuente</label>
									<textarea id="infoAdicional_nombreFuente" style="width: 400px; height: 200px" name="tipoFuenteDocumental_nombre" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_nombreFuente', {
										id: 'infoAdicional_nombreFuente',
										width: 500,
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
						
								<p>
									<label for="tipoRespuesta">Información adicional</label>
									<textarea id="infoAdicional_infoAdicionalFuenteDocumental" style="width: 400px; height: 200px" name="tipoFuenteDocumental_infoAdicional" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_infoAdicionalFuenteDocumental', {
										id: 'infoAdicional_infoAdicionalFuenteDocumental',
										width: 500,
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

								<p>


									<label for="tipoFuente">Tipo de la fuente</label>

									<div class="six columns">
											<p>
												<label for="idioma">Idioma</label>
												<select id="tipoFuenteDocumental_idiomaCatalogo_idiomaId" name="tipoFuenteDocumental_idiomaCatalogo_idiomaId">						
												<?php foreach($pais as $key => $item):?> 
														<option value="<?=$item?>"><?=$key?></option>
												<?php endforeach;?>
												</select>

											</p>
									</div>
									<div class="six columns">
											<p>
												<label for="nivConfiabilidad">Nivel de confiabilidad</label>
												<select id="tipoFuenteDocumental_nivelConfiabilidadCatalogo_nivelConfiabilidadId" name="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId">						
												<?php foreach($pais as $key => $item):?> 
														<option value="<?=$item?>"><?=$key?></option>
												<?php endforeach;?>
												</select>

											</p>
									</div>

									<label for="FechaPubli">Fecha de publicación</label>
										<input type="text" id="infoAdicional_fechaPublicacion" name="tipoFuenteDocumental_fecha" value="" placeholder="AAAA-MM-DD" />
									
									<span>Notas</span>
									
									<label for="fuenteLiga">Liga</label>
									<textarea id="infoAdicional_url" style="width: 400px; height: 200px" name="tipoFuenteDocumental_url" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('infoAdicional_url', {
										id: 'infoAdicional_url',
										width: 500,
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
										<input type="text" id="infoAdicional_fechaAcceso" name="tipoFuenteDocumental_fechaAcceso" value="" placeholder="AAAA-MM-DD" />
									
								</p>
								
							
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

						</div>										
										
				</fieldset>
			</div>

			</div>
			
		<input class="medium button" type="submit" />		
		</div>
		<!-----------------termina la parte de Fuente documental------------------------>

	</form>
	</body>
</html>

