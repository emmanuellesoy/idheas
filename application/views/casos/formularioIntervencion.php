<!-------------------Comienza la parte de detalles del lugar------------------------------------>
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
		
	
		<!---------Acordion css -------->		
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
	
<!-----------------Comienza la parte de Intervención---------------------------->

<form action='<?=base_url(); ?>index.php/casos_c/agregar_general' method="post" accept-charset="utf-8">
<div id="formularioIntervencion">
<div id="pestania" data-collapse>
	<h2 class="open twelve columns">Intervención</h2><!--título de la sub-pestaña-->  
	<div>
		
			
		<br /><br />		
		
			<fieldset>
				<input type="hidden" value="<?=$casoId; ?>" name="lugares_casos_casoId" id="lugares_casos_casoId" />
				  <legend>Información general</legend>
					
					<div class="six columns">
						<p>
							<label for="tipoIntervencion">Tipo de intervención</label>
							<select id="tipoIntervencion" name="intervenciones_tipoIntervencionId">						
							<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
							<option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
							<?php endforeach;?>
							</select>
						</p>
						</div>
					
					<div class="six columns">	
						<p>
							<label for="fecha">Fecha: </label>
							<input type="text" id="datepickerIntervencion"name="intervenciones_fecha"  placeholder="AAAA-MM-DD" />

						</p>
					</div>
						<div class="twelve columns">
								<p>
									<label for="tipoIntervencion">Impacto</label>									
									<textarea id="intervenciones_impacto" style="width: 400px; height: 200px" name="intervenciones_impacto" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('intervenciones_impacto', {
										id: 'intervenciones_impacto',
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
						</div>
						<div class="twelve columns">
								<p>
									<label for="tipoRespuesta">En respuesta</label>
									<textarea id="intervenciones_respuesta" style="width: 400px; height: 200px" name="intervenciones_respuesta" wrap="hard"  > </textarea>
									<script>
									var instance = new TINY.editor.edit('intervenciones_respuesta', {
										id: 'intervenciones_respuesta',
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
						</div>
					<?php echo br(2);?>	

			</fieldset>
			
						<?php echo br(1);?>	
					<div class="twelve columns">
						<div class="six columns">
							
							<fieldset>
								  <legend>Interventor </legend>
									<label for="Interventor">Persona</label>
									
										<div  id="listaActoresinterventor" class="casosScorll">
												<?php if($listaActores['individual']){ ?>
												<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
												
														<div class="twelve columns" onclick="">  <!--funcion interventor-->
															<div class="five columns"><!--imprimo imagenes-->
																<?php echo img($item['actorId']);?>
																<?php echo br(2);?>	
															</div>
															
															<div class="seven columns"><!--Imprimo nombres-->
																	<?=$item['nombre']?>
																	<?php echo br(2);?>	
															</div>
														</div>
														
												<?php endforeach;?><!--Termina lista de los actores-->
												<?php } ?>
													
												<?php if(isset($listaActores['transmigrante'])){ ?>
													<?php foreach($listaActores['transmigrante'] as $index => $item):?> <!--muestra cada elemento de la lista-->
													
															<div class="twelve columns" onclick=""><!---función interventor---->
																<div class="five columns"><!--imprimo imagenes-->
																	<?php echo img($item['actorId']);?>
																	<?php echo br(2);?>	
																</div>
																
																<div class="seven columns"><!--Imprimo nombres-->
																		<?=$item['nombre']?>
																		<?php echo br(2);?>	
																</div>
															</div>
															
													<?php endforeach;?><!--Termina lista de los actores-->
												<?php } ?>
												
										</div>
								
							<div id="subpestanias" data-collapse>
								<h2 class="twelve columns">Actor colectivo</h2><!--título de la sub-pestaña-->  
								<div>
									<div id="listaActorColect" class="PruebaScorll">
													<?php if(isset($listaActores['colectivo'])){ ?>
											<?php foreach($listaActores['colectivo'] as $index => $item):?> <!--muestra cada elemento de la lista-->
											
													<div class="twelve columns" onclick="">
														<div class="five columns"><!--imprimo imagenes-->
															<?php echo img($item['actorId']);?>
															<?php echo br(2);?>	
														</div>
														
														<div class="seven columns"><!--Imprimo nombres-->
																<?=$item['nombre']?>
																<?php echo br(2);?>	
														</div>
													</div>
													
											<?php endforeach;?><!--Termina lista de los actores-->
																<?php } ?>
									</div>
											
																
									</div>	
								</div>	
									
								<span><b>Tipo de relación</b></span>
							</fieldset>
						</div>
						
						<div class="six columns">
							<fieldset>
								  <legend>Receptor </legend>
									<label for="receptor">Persona</label>
									
									
										<div  id="listaActoresreceptor" class="casosScorll">
												<?php if($listaActores['individual']){ ?>
												<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
												
														<div class="twelve columns" onclick="">  <!--funcion interventor-->
															<div class="five columns"><!--imprimo imagenes-->
																<?php echo img($item['actorId']);?>
																<?php echo br(2);?>	
															</div>
															
															<div class="seven columns"><!--Imprimo nombres-->
																	<?=$item['nombre']?>
																	<?php echo br(2);?>	
															</div>
														</div>
														
												<?php endforeach;?><!--Termina lista de los actores-->
												<?php } ?>
													
												<?php if(isset($listaActores['transmigrante'])){ ?>
													<?php foreach($listaActores['transmigrante'] as $index => $item):?> <!--muestra cada elemento de la lista-->
													
															<div class="twelve columns" onclick=""><!---función interventor---->
																<div class="five columns"><!--imprimo imagenes-->
																	<?php echo img($item['actorId']);?>
																	<?php echo br(2);?>	
																</div>
																
																<div class="seven columns"><!--Imprimo nombres-->
																		<?=$item['nombre']?>
																		<?php echo br(2);?>	
																</div>
															</div>
															
													<?php endforeach;?><!--Termina lista de los actores-->
												<?php } ?>
												
										</div>
										
							<div id="subpestanias" data-collapse>
								<h2 class="twelve columns">Actor colectivo</h2><!--título de la sub-pestaña--->  
								<div>
									<div id="listaActorColect" class="PruebaScorll">
													<?php if(isset($listaActores['colectivo'])){ ?>
											<?php foreach($listaActores['colectivo'] as $index => $item):?> <!--muestra cada elemento de la lista-->
											
													<div class="twelve columns" onclick="mostarDatosListaElem()">
														<div class="five columns"><!--imprimo imagenes-->
															<?php echo img($item['actorId']);?>
															<?php echo br(2);?>	
														</div>
														
														<div class="seven columns"><!--Imprimo nombres-->
																<?=$item['nombre']?>
																<?php echo br(2);?>	
														</div>
													</div>
													
											<?php endforeach;?><!--Termina lista de los actores-->
																<?php } ?>
									</div>
											
																
									</div>	
								</div>	
									
								<span><b>Tipo de relación</b></span>
									
							</fieldset>
						</div>
						<?php echo br(2);?>	
					</div>
			
			
			<?php echo br(2);?>	
			
			<div id="subPestanias" data-collapse>
			<h2 class="twelve columns">Personas por las que se interviene</h2>
				<div >
					  <span>Agregar</span>
	  
						<div  id="listaActorpersonasinterviene" class="casosScorll">
								<?php if($listaActores['individual']){ ?>
								<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
								
										<div class="twelve columns" onclick="">  <!--funcion interventor-->
											<div class="five columns"><!--imprimo imagenes-->
												<?php echo img($item['actorId']);?>
												<?php echo br(2);?>	
											</div>
											
											<div class="seven columns"><!--Imprimo nombres-->
													<?=$item['nombre']?>
													<?php echo br(2);?>	
											</div>
										</div>
										
								<?php endforeach;?><!--Termina lista de los actores-->
								<?php } ?>
									
								<?php if(isset($listaActores['transmigrante'])){ ?>
									<?php foreach($listaActores['transmigrante'] as $index => $item):?> <!--muestra cada elemento de la lista-->
									
											<div class="twelve columns" onclick=""><!---función interventor---->
												<div class="five columns"><!--imprimo imagenes-->
													<?php echo img($item['actorId']);?>
													<?php echo br(2);?>	
												</div>
												
												<div class="seven columns"><!--Imprimo nombres-->
														<?=$item['nombre']?>
														<?php echo br(2);?>	
												</div>
											</div>
											
									<?php endforeach;?><!--Termina lista de los actores-->
								<?php } ?>
								
						</div>
								
				</div>	  
			</div><!--fin acordeon descripción-->
	
			<input class="medium button" type="submit" value="Guardar"/>		
	</div>
	
</div><!--fin acordeon información general-->
</div>
</form>
<!-----------------------Termina la parte de Intervención---------------------->

</body>
</html>
