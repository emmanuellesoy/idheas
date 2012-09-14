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
				</dl>
				
			</div>
		
			<div class="ten columns">
				<ul class="tabs-content">
				
				  <li class="active" id="vertical1Tab"><!--Pestaña Actores Individuales--->
					
					<dl class="tabs"><!--Pestañas de Actores-->
						<dd class="active" ><a href="#simple1">Editar actor <?=(isset($datosActor) ? ' '.$datosActor[$actorId][$actorId]['nombre'].' ' : ''); ?> </a></dd>
					</dl>

					<ul class="tabs-content">
					    <li class="active" id="simple1Tab">
						  <!---Contenido de la pestaña Actor individual--->
								
								<div class="elven columns">
									
								<div id="formCargInd" class="Escondido"><?=(isset($formulario)) ? $formulario : '';?></div>
								<div id="formInd" ><?php echo $formulario;?> </div>
								
								</div>
								
							<!--Termina contenido de la pestaña Actor individual-->
					    </li>
					  
					  
					    <li id="simple2Tab"  >
						</li>
						
					    <li id="simple3Tab" onclick="mostrarListaActorCol()">
						</li>
					
					
					</ul>

					  </li> <!--Termina Pestaña Actores individuales--->
				  
				  <li id="vertical2Tab"><!--Pestaña Actores transmigrantes--->  
				  
					
				  </li><!--Termina Pestaña Actores transmigrantes--->
				  
				  <li id="vertical3Tab"><!--Pestaña Actores Colectivos--->  
				  				
				  </li><!--Termina Pestaña Actores Colectivos--->
				  
				</ul>
			  
			</div>
		<!--Termina el contenido de la página-->
	
	</body>
	
</html>
