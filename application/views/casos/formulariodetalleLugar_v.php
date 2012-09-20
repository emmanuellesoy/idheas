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
		<!---script que hace posible el acordion---->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

	</head>
	
<body>

<form action="controllers/actores_c/agregarActor" method="post" accept-charset="utf-8">
		<div >
		
			<p class="four columns">
				<label for="pais">País</label>
				<select id="lugares_paisesCatalogo_paisId" name="lugares_paisesCatalogo_paisId">						
				<?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
						<option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>

			</p>

			<p class="four columns">
				<label for="estado">Estado</label>
				<select id="lugares_estadosCatalogo_estadoId" name="lugares_estadosCatalogo_estadoId">
				<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
						<option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>
			</p>

			<p class="four columns">
				<label for="municipio">Municipio</label>
				<select id="lugares_municipiosCatalogo_municipioId" name="lugares_municipiosCatalogo_municipioId">						
				<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
						<option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
				<?php endforeach;?>
				</select>
			</p>
			
			<input class="medium button" type="submit" />
		</div>
</div>
</body>
</html>

