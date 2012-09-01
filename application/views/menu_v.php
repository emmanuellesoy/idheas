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
			'href' => 'statics/stylesheets/foundation.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
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
		<!--Scripts foundation-->
		<script src="<?php echo base_url(); ?>statics/javascripts/modernizr.foundation.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/foundation.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/app.js" ></script>
<script>
function myFunction()
{

}
</script>

	</head>
	
	<body>
	
		<!---Encabezado de la página--->
			<div class="twelve columns">
			  <div class="panel">
				<p>Este será mi header</p>
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
				
				  <li class="active" id="vertical1"><!--Pestaña Actores Individuales--->
					
					<dl class="tabs"><!--Pestañas de Actores-->
						<dd class="active"><a href="#simple1">Actor individual</a></dd>
						<dd><a href="#simple2">Actor transmigrante</a></dd>
						<dd><a href="#simple3">Actor colectivo</a></dd>
					</dl>

					<ul class="tabs-content">
					  <li class="active" id="simple1Tab">
						  <!---Contenido de la pestaña Actor individual--->
								<div class="three columns">
										<?php echo $listaActores;?> <!---Se llama a listaActores--->
								</div>
								
								
								<div class="nine columns">
									 
											<?php echo $individual;?>
								</div>
								
							<!--Termina contenido de la pestaña Actor individual-->
					  </li>
					  
					  
					  <li id="simple2Tab">
						  
						  <!---Contenido de la pestaña Actor transmigrante--->
								<div class="three columns">
									
									<p>Lista de actores</p>
										<?php echo $listaActores;?> <!---Se llama a listaActores--->
									</div>
								
								
									<div class="nine columns">
												<?php echo $transmigrante;?>
									</div>
								
							<!--Termina contenido de la pestaña Actor transmigrante-->
						  
						</li>
						
					  <li id="simple3Tab">
						
						  <!---Contenido de la pestaña Actor Colectivo--->
								<div class="three columns">
									
									<p>Lista de actores</p>
										<?php echo $listaActores;?> <!---Se llama a listaActores--->
									</div>
								
								
									<div class="nine columns">
												<?php echo $colectivo;?>
									</div>
								
							<!--Termina contenido de la pestaña Actor Colectivo-->
							
					  </li>
					
					
					</ul>

					  </li> <!--Termina Pestaña Actores individuales--->
				  
				  <li id="vertical2Tab"><!--Pestaña Actores transmigrantes--->  
				  
									<p>Contenido de casos</p>
				  
				  </li><!--Termina Pestaña Actores transmigrantes--->
				  
				  <li id="vertical3Tab"><!--Pestaña Actores Colectivos--->  
				  
									<p>Contenido de colectivos</p>
									
				  </li><!--Termina Pestaña Actores Colectivos--->
				  
				</ul>
			  
			</div>
		<!--Termina el contenido de la página-->
    
		<!---pie de página--->
		<div class="row">
			<div class="twelve columns">
			  <div class="panel">
				<p>Este es mi pie de página </p>
			  </div>
			</div>
		</div>
		  <!---Termina el pie de página-->
	
	</body>
	
</html>


  				
