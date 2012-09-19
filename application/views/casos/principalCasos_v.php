<html>
	<body>
	
		<!---Encabezado de la página---->
			<div class="twelve columns">
			  <div class="panel" >
			  <div div="logo" >
				<?php echo img('statics/IMG/logo.png');?>
			  </div>
			  </div>
			</div>
		  <!---Termina el encabezado de la página-->
		  
		  <!--Contenido de la página-->
			<div class="two columns">				

			<dl class="nice vertical tabs">
				  <dd class="active"><a href="#vertical1">Actores</a></dd>
				  <dd><a href="#vertical2">Casos</a></dd>
				  <dd><a href="#vertical3">Reporte</a></dd>
				</dl>
				
			</div>
		
			<div class="ten columns">
				<ul class="tabs-content">
				
				  <li class="active" id="vertical1Tab"><!--Pestaña Actores Individuales--->
					
					<dl class="tabs"><!--Pestañas de Actores-->
						<dd class="active" ><a href="#simple1">Actor individual</a></dd>
						<dd ><a href="#simple2">Actor transmigrante</a></dd>
						<dd ><a href="#simple3">Actor colectivo</a></dd>
					</dl>

					<ul class="tabs-content">
					  <li class="active" id="simple1Tab">
						  <!---Contenido de la pestaña Actor individual--->
								<div class="three columns">
										<?php echo $listaActores;?> <!---Se llama a listaActores-->
								</div>
								
								
								<div class="nine columns">
									<div class="cargarDatosActor"></div>
									<div id="formInd"class="Escondido" ><?php echo $individual;?> </div>
								</div>
								
							<!--Termina contenido de la pestaña Actor individual-->
					  </li>
					  
					  
					  <li id="simple2Tab"  >
						  
						  <!---Contenido de la pestaña Actor transmigrante-->
								<div class="three columns">									
										<?php echo $listaActoresTransmigrante;?> <!---Se llama a listaActores-->
									</div>
								
								
									<div class="nine columns">
									<div class="cargarDatosActor"></div>
									<div id="formTrans"class="Escondido" ><?php echo $transmigrante;?></div>
												
									</div>
								
							<!--Termina contenido de la pestaña Actor transmigrante-->
						  
						</li>
						
					  <li id="simple3Tab" onclick="mostrarListaActorCol()">
						
						  <!---Contenido de la pestaña Actor Colectivo-->
								<div class="three columns">
										<?php echo $listaActoresColectivo;?> <!---Se llama a listaActores-->
									</div>
								
								
									<div class="nine columns">
									<div class="cargarDatosActor"></div>
								<div id="formCol"class="Escondido" ><?php echo $colectivo;?></div>
								</div>
								
							<!--Termina contenido de la pestaña Actor Colectivo-->
							
					  </li>
					
					
					</ul>

					  </li> <!--Termina Pestaña Actores individuales---->
				  
				  <li id="vertical2Tab"><!--Pestaña Actores transmigrantes---->  
				  
								<div class="three columns">
									<?php echo $listaCasos;?> <!---Se llama a la lista de casos---->
								</div>
								
								
								<div class="nine columns">
									<div id="vistaDeCasos">
										<?php echo $casos?>
										<?php echo $casosNucleo?>
										<?php echo $infoAdicional?>
									</div>
									
									<div id="vistaDeFormCasos" class="Escondido">
										<?php echo $infoGral?>
									</div>
								</div>
								
				  
				  </li><!--Termina Pestaña Actores transmigrantes---->
				  
				  <li id="vertical3Tab"><!--Pestaña Actores Colectivos---->  
				  
									<p>Contenido de colectivos</p>
									
				  </li><!--Termina Pestaña Actores Colectivos---->
				  
				</ul>
			  
			</div>
		<!--Termina el contenido de la página-->
	
	</body>
	
</html>
