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
	
		<!---Encabezado de la página--->
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
										<?php echo $listaActores;?> <!---Se llama a listaActores--->
								</div>
								
								
								<div class="nine columns cargarDatosActor">
									
								<div id="formCargInd"><?=(isset($individualVista)) ? $individualVista : '';?></div>
								<div id="formInd"class="Escondido" ><?php echo $individual;?> </div>
								</div>
								
							<!--Termina contenido de la pestaña Actor individual-->
					  </li>
					  
					  
					  <li id="simple2Tab"  >
						  
						  <!---Contenido de la pestaña Actor transmigrante--->
								<div class="three columns">									
										<?php echo $listaActoresTransmigrante;?> <!---Se llama a listaActores--->
									</div>
								
								
									<div class="nine columns">
								<div id="formCargTrans"><?php echo $transmigranteVista;?></div>
								<div id="formTrans"class="Escondido" ><?php echo $transmigrante;?></div>
												
									</div>
								
							<!--Termina contenido de la pestaña Actor transmigrante-->
						  
						</li>
						
					  <li id="simple3Tab" onclick="mostrarListaActorCol()">
						
						  <!---Contenido de la pestaña Actor Colectivo--->
								<div class="three columns">
										<?php echo $listaActoresColectivo;?> <!---Se llama a listaActores--->
									</div>
								
								
									<div class="nine columns">
										<div id="formCargCol"><?php echo $colectivoVista;?></div>
										<div id="formCol"class="Escondido" ><?php echo $colectivo;?></div>
								</div>
								
							<!--Termina contenido de la pestaña Actor Colectivo-->
							
					  </li>
					
					
					</ul>

					  </li> <!--Termina Pestaña Actores individuales--->
				  
				  <li id="vertical2Tab"><!--Pestaña Actores transmigrantes--->  
				  
								<div class="three columns">
									<?php echo $listaCasos;?> <!---Se llama a la lista de casos--->
								</div>
								
								
								<div class="nine columns">
									<div id="vistaDeCasos">
										<?php echo $casos?>
										<?php echo $casosNucleo?>
										<?php echo $infoAdicional?>
									</div>
									
									<div id="vistaDeFormCasos" class="Escondido">
										<?php echo $vistaCasos?>
									</div>
								</div>
								
				  
				  </li><!--Termina Pestaña Actores transmigrantes--->
				  
				  <li id="vertical3Tab"><!--Pestaña Actores Colectivos--->  
				  
									<p>Contenido de colectivos</p>
									
				  </li><!--Termina Pestaña Actores Colectivos--->
				  
				</ul>
			  
			</div>
		<!--Termina el contenido de la página-->
	
	</body>
	
</html>
