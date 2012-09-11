<!-------------------Comienza la parte de detalles del lugar------------------------------------->
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
		<!---script que hace posible el acordion--->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

	</head>
	
<body>
<form action="controllers/actores_c/agregarActor" method="post" accept-charset="utf-8">
	
<!-------------------------Comienza la parte de Acto---------------------------->
<div id="formularioCasoActo">
	<div id="pestania" data-collapse>
	<h2 class="open twelve columns">Acto</h2><!--título de la sub-pestaña--->  
	<div>
			<fieldset>
				  <legend>Información general</legend>
                    <p>
                        <label for="derecho">Derecho afectado</label>
                        <div id="textoDerechoAfectado"></div>
                        
			<?php echo br(2);?>
			            <div  id="listaActorIndiv" class="casosScorll">	
                        <ul>
							<?php foreach($derechosAfectados['derechosAfectadosN1Catalogos'] as $derechoAfectado):?> 
								<li  id="pestaniaCasos" >
									<div onclick="nombrederechoAfectado('<?=$derechoAfectado['descripcion'];?>','<?=$derechoAfectado['derechoAfectadoN1Id'];?>')" >
										<?php echo $derechoAfectado['descripcion'];?>
									</div>
									<ul class="Escondido" id="<?=$derechoAfectado['derechoAfectadoN1Id'];?>DAN1" >
									
									<?php foreach($derechosAfectados['derechosAfectadosN2Catalogos'] as $derechoAfectadoN2):?>
										<?php if($derechoAfectadoN2['derechosAfectadosN1Catalogo_derechoAfectadoN1Id'] == $derechoAfectado['derechoAfectadoN1Id']):?>
											<li class=" pestaniaCasos" >
												<div  onclick="nombrederechoAfectadosub1('<?=$derechoAfectadoN2['descripcion'];?>','<?=$derechoAfectadoN2['derechoAfectadoN2Id'];?>')">
												<?php echo $derechoAfectadoN2['descripcion'];?>
												</div>
												<ul class="Escondido"  id="<?=$derechoAfectadoN2['derechoAfectadoN2Id'];?>DAN2" >
									
													<?php foreach($derechosAfectados['derechosAfectadosN3Catalogos'] as $derechoAfectadoN3):?>
														<?php if($derechoAfectadoN3['derechosAfectadosN2Catalogo_derechoAfectadoN2Id'] == $derechoAfectadoN2['derechoAfectadoN2Id']):?>
															<li class=" pestaniaCasos" >
																<div  onclick="nombrederechoAfectadosub2('<?=$derechoAfectadoN3['descripcion'];?>','<?=$derechoAfectadoN3['derechoAfectadoN3Id'];?>')">
																<?php echo $derechoAfectadoN3['descripcion'];?>
																</div>
																
																	<ul class="Escondido" id="<?=$derechoAfectadoN3['derechoAfectadoN3Id'];?>DAN3" >
														
																		<?php foreach($derechosAfectados['derechosAfectadosN4Catalogos'] as $derechoAfectadoN4):?>
																			<?php if($derechoAfectadoN4['derechosAfectadosN3Catalogo_derechoAfectadoN3Id'] == $derechoAfectadoN3['derechoAfectadoN3Id']):?>
																				<li class=" pestaniaCasos" >
																					<div  onclick="nombrederechoAfectadosub3('<?=$derechoAfectadoN4['descripcion'];?>','<?=$derechoAfectadoN3['derechoAfectadoN3Id'];?>')">
																					<?php echo $derechoAfectadoN4['descripcion'];?>
																					</div>
																				</li>
																			<?php endif;?>
																		<?php endforeach;?>
																	</ul>
																
															</li>
														<?php endif;?>
													<?php endforeach;?>
													</ul>

											</li>
										<?php endif;?>
									<?php endforeach;?>
									</ul>
								</li>
							<?php endforeach;?>
						</ul>
			</div>
  
                        
                        <label for="Acto">Acto</label>
                        <div id="textoDerechoAfectadoN2"></div>
			<?php echo br(2);?>	
                        
                  
			<div  id="listaActorIndiv" class="casosScorll">	
                        <ul style="text-decoration:none;">
							<?php foreach($actos['actosN1Catalogo'] as $acto):?> 
								<li  id="pestaniaCasos" >
									<div onclick="nombreacto('<?=$acto['descripcion'];?>','<?=$acto['actoId'];?>')" >
										<?php echo $acto['descripcion'];?>
									</div>
									
									<ul class="Escondido" id="<?=$acto['actoId'];?>act1" >
									
									<?php foreach($actos['actosN2Catalogo'] as $actoN2):?>
										<?php if($actoN2['actosN1Catalogo_actoId'] == $acto['actoId']):?>
											<li class="pestaniaCasos" onclick="nombreactosub1('<?=$actoN2['descripcion'];?>','<?=$actoN2['actoN2Id'];?>')">
												<?php echo $actoN2['descripcion'];?>
												<ul class="Escondido"  id="<?=$actoN2['actoN2Id'];?>act2" >
									
													<?php foreach($actos['actosN3Catalogo'] as $actoN3):?>
														<?php if($actoN3['actosN2Catalogo_actoN2Id'] == $actoN2['actoN2Id']):?>
															<li class=" pestaniaCasos"  >
																<div  onclick="nombreactosub2('<?=$actoN3['descripcion'];?>','<?=$actoN3['actoN3Id'];?>')">
																<?php echo $actoN3['descripcion'];?>
																</div>
																
																	<ul class="Escondido" id="<?=$actoN3['actoN3Id'];?>act3" >
														
																		<?php foreach($actos['actosN4Catalogo'] as $actoN4):?>
																			<?php if($actoN4['actosN3Catalogo_actoN3Id'] == $actoN3['actoN3Id']):?>
																				<li class=" pestaniaCasos" >
																					<div  onclick="nombreactosub3('<?=$actoN4['descripcion'];?>','<?=$actoN3['actoN3Id'];?>')">
																					<?php echo $actoN4['descripcion'];?>
																					</div>
																				</li>
																			<?php endif;?>
																		<?php endforeach;?>
																	</ul>
																
															</li>
														<?php endif;?>
													<?php endforeach;?>
													</ul>

											</li>
										<?php endif;?>
									<?php endforeach;?>
									</ul>
								</li>
							<?php endforeach;?>
						</ul>
			</div>
			
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
			<br />
			<p class="Escondido" id="fechaExactaVAct">
				<input type="text" id="fechaExactaAct"   placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaAproxVAct">
				<input type="text" id="fechaAproxAct"   placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaSinDiaVAct">
				<input type="text" id="fechaSinDiaAct"   placeholder="AAAA-MM-00" />

			</p >

			<p class="Escondido" id="fechaSinDiaSinMesVAct">
				<input type="text" id="fechaSinDiaSinMesAct"  placeholder="AAAA-00-00" />

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
					<input type="text" id="fechaExactaAct2"   placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaAproxVAct2">
					<input type="text" id="fechaAproxAct2"   placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaSinDiaVAct2">
					<input type="text" id="fechaSinDiaAct2"   placeholder="AAAA-MM-00" />

				</p >

				<p class="Escondido" id="fechaSinDiaSinMesVAct2">
					<input type="text" id="fechaSinDiaSinMesAct2"  placeholder="AAAA-00-00" />

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
				<input type="number"  name="nucleoCaso_noPersonasAfectadas"  />
			</p>

			<p>
				<label for="pais">País</label>
				<select id="nucleoCaso_paisesCatalogo_paisId" name="nucleoCaso_paisesCatalogo_paisId">
				<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
						<option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>

			</p>
			
		</div>
				  
		<div class="six columns">

			<p>
				<label for="estado">Estado</label>
				<select id="nucleoCaso_estadosCatalogo_estadoId" name="nucleoCaso_estadosCatalogo_estadoId">
				<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
						<option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>

			</p>
			</div><!----Termina primer mitad de datos de Nacimiento ---->

		<div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->

			<p>
				<label for="municipio">Municipio</label>
				<select id="nucleoCaso_municipiosCatalogo_municipioId" name="nucleoCaso_municipiosCatalogo_municipioId">
				<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
						<option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>

			</p>
		</div>
				  
			</fieldset>
			
	</div>
	   
	</div><!--fin acordeon información general-->

			<input class="medium button" type="submit" />
</div>
<!-----------------------Termina la parte de Acto------------------------------->
</form>
</body>
</html>

