<!---Comienza la parte de detalles del lugar-->
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
		<script src="<?php echo base_url(); ?>statics/javascripts/ventanas.js" ></script>
		<!---script que hace posible el acordion-->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

	</head>
	
	<body>
	<div id="FormularioRelacionIndividuos">
		<form action="<?=base_url(); ?>index.php/actores_c/cRelacionaActores" method="post" accept-charset="utf-8">

			<input type="hidden" name="actorId" value="<?=$actorId;?>" />	

			<input type="hidden"  id="tipoRelacionIndividualColectivoId" name="tipoRelacionIndividualColectivoId" value="1"/>
			<input type="hidden" id="actorRelacionadoId" name="actorRelacionadoId" value="1" />
			<input type="hidden" id="relacionActoresId" name="relacionActoresId" value="<?=$relacionActoresId?>" />

			<div class="twelve columns">
				<label for="TipoRel">Tipo de relación</label>
				<select id="relacionActores" name="actoresActorId">
					<?php if(isset($tipoRelacion)){ ?>
						<?php foreach($tipoRelacion['relacionActoresCatalogo'] as $index => $item):?> 
								<option value="<?php print_r($item['tipoRelacionId']); ?>"><?php print_r($item['nombre']); ?> </option>
						<?php endforeach;?><!--Termina lista de los actores-->
					<?php } ?>
				</select>
			</div>
			<br /><br />
			<label for="PerRelacionada">Persona Relacionada</label>

						<div  id="listaPersonaRelacionada" class="casosScorll">
								<?php if(isset($listaActores['individual'])){ ?>
								<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
								
										<div class="cambiarColor twelve columns" id="personaRelacionada<?=$item['actorId']?>" onclick="personaRelacionada('<?=$item['actorId']?>')">  <!--funcion interventor-->
											<div class="seven columns"><!--imprimo imagenes-->
												<?php echo img($item['actorId']);?>
													<?=$item['nombre']?>
													<?php echo br(2);?>	
											</div>
										</div>
										
								<?php endforeach;?><!--Termina lista de los actores-->
								<?php } ?>
									
								<?php if(isset($listaActores['transmigrante'])){ ?>
									<?php foreach($listaActores['transmigrante'] as $index => $item):?> <!--muestra cada elemento de la lista-->
									
											<div class="cambiarColor twelve columns" id="personaRelacionada<?=$item['actorId']?>" onclick="personaRelacionada('<?=$item['actorId']?>')"> 
												<div class="seven columns" ><!--imprimo imagenes-->
													<?php echo img($item['actorId']);?>
														<?=$item['nombre']?>
														<?php echo br(2);?>	
												</div>
											</div>
											
									<?php endforeach;?><!--Termina lista de los actores-->
								<?php } ?>
						</div>
		

			<br /><br />
			<div class="twelve columns">
				<label for="edad">Fecha inicial</label>
					<?php echo br(1);?>	

						<input type="text" id="fechaExactaRP" name="fechaInicial" <?=(isset($relaciones) ? 'value="'.$relaciones[$actorId]['fechaInicial'].'"' : ''); ?> placeholder="AAAA-MM-DD" />

			</div> <!---termina opciones de fechaInicial---->
				
			<div class="twelve columns" >
					<label for="Termonio">Fecha término</label>
						<input type="text" id="fechaExacta2RP" name="fechaTermino" <?=(isset($relaciones) ? 'value="'.$relaciones[$actorId]['fechaTermino'].'"' : ''); ?> placeholder="AAAA-MM-DD" />

			</div> <!---termina opciones de fechaTermino-->
			
			<br /><br />
			<div  id="pestania" data-collapse>
				<h2 class="open">Comentarios</h2>
				<div class="twelve columns">
					<textarea id="TextoRelActores" style="width: 400px; height: 200px" wrap="hard"  name="comentarios"></textarea>
					<script>
					var instance = new TINY.editor.edit('editor', {
						id: 'TextoRelActores',
						width: 500,
						height: 175,
						cssclass: 'tinyeditor',
						controlclass: 'tinyeditor-control',
						rowclass: 'tinyeditor-header',
						dividerclass: 'tinyeditor-divider',
						controls: ['bold', 'italic', 'underline', '|', 'leftalign','centeralign', 'rightalign', 'blockjustify', '|', 'undo', 'redo'],
						footer: false,
						xhtml: false,
						content:<?=(isset($relaciones) ? 'value="'.$relaciones[$actorId]['comentarios'].'"' : ''); ?>,
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
			   </div>	  
			
			</div>	
		<input class="medium button" type="submit" value="Guardar" />
		<input class="medium button" type="button" value="Cancelar"  onclick="cerrarVentana()"/>
			
		</form>		
	</div>	
	</body>
</html>
