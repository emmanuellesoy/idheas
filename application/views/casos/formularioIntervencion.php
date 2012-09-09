
<!-----------------Comienza la parte de Intervención---------------------------->
<div id="formularioIntervencion">
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Intervención</h2><!--título de la sub-pestaña--->  
	<div>
		
		<fieldset class="twelve columns">
			
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
	  	
		</fieldset>	
			
	</div>
</div><!--fin acordeon información general-->
</div>
<!-----------------------Termina la parte de Intervención----------------------->
