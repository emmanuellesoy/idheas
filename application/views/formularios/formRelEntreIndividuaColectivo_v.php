<!-------------------Comienza la parte de detalles del lugar------------------------------------->
<html>

	<head>
		
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width" />

		<title>i(dh)eas</title>
		
		  <!-- Estilo de la página CSS -->
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

		<form action="actores_c/" method="post" accept-charset="utf-8">
			<input type="hidden"  id="relacionActores_tipoRelacionInd" name="relacionActores_tipoRelacionInd" value=""/>
			
			<label>Persona</label>

			<label for="PerRelacionada">Persona Relacionada</label>

			<div  id="listaPersonaRelacionada" class="casosScorll">
					<?php if($listaActores['individual']){ ?>
					<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
					
							<div class="cambiarColor twelve columns" id="personaRelacionadaCol<?=$item['actorId']?>" onclick="personaRelacionadaColectivo('<?=$item['actorId']?>')">  <!--funcion interventor-->
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
						
								<div class="cambiarColor twelve columns" id="personaRelacionadaCol<?=$item['actorId']?>" onclick="personaRelacionadaColectivo('<?=$item['actorId']?>')"> 
									<div class="seven columns" ><!--imprimo imagenes-->
										<?php echo img($item['actorId']);?>
											<?=$item['nombre']?>
											<?php echo br(2);?>	
									</div>
								</div>
								
						<?php endforeach;?><!--Termina lista de los actores-->
					<?php } ?>
					
			</div>


			
			<input type="hidden" value="" id="relacionActores_actoresActorId" />
			
			<label>Tipo de relación</label>
			<span id="tipoRelTexto"></span>
			
			<br/><br/>
			<label>Notas</label>
			<span id="tipoRelNotas"></span>
			
			<br/><br/>
			
			<div  id="listaActorIndiv" class="casosScorll">	
				<ul>
					<?php foreach($relacionActorIndCol as $relacionActor):?> 
						<?php foreach($relacionActor as $row):?> 
							<li onclick="relacionIndCol('<?= $row['nombre'];?>','<?= $row['notas'];?>','<?= $row['tipoRelacionId'];?> ')"><?php echo $row['notas'];?></li>
								
						<?php endforeach;?>
					<?php endforeach;?>
				</ul>
			</div>


			
			<label>Actor colectivo</label>
			<input type="hidden"  id="relacionActores_tipoRelacionIndividualColectivoId" name="relacionActores_tipoRelacionIndividualColectivoId" value=""/>

			<div  id="listaPersonaRelacionada" class="casosScorll">
					<?php if(isset($listaActores['colectivo'])){ ?>
						<?php foreach($listaActores['colectivo'] as $index => $item):?> <!--muestra cada elemento de la lista-->
						
								<div class="cambiarColor2 twelve columns" id="personaRelacionadaCol2<?=$item['actorId']?>" onclick="personaRelacionadaColectivoCol('<?=$item['actorId']?>')"> 
									<div class="seven columns" ><!--imprimo imagenes-->
										<?php echo img($item['actorId']);?>
											<?=$item['nombre']?>
											<?php echo br(2);?>	
									</div>
								</div>
			</div>
								
						<?php endforeach;?><!--Termina lista de los actores-->
					<?php } ?>
			<br/><br/>
			
			
			<div class="twelve columns">
				<div class="six columns">
				<label for="edad">Fecha inicial</label>
					<select onclick="fechaInicialCasosRIC(value)" >
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				
				<div class="six columns">
					<?php echo br(1);?>	
					<p class="Escondido" id="fechaExactaVRIC">
						<input type="text" id="fechaExactaRP" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxVRIC">
						<input type="text" id="fechaAproxRIC" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaVRIC">
						<input type="text" id="fechaSinDiaRIC" placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesVRIC">
						<input type="text" id="fechaSinDiaSinMesRIC" placeholder="AAAA-00-00" />

					</p>
				</div>
		</div> <!---termina opciones de fechaInicial-->
				
				
			<div class="twelve columns">
					<label for="Termonio">Fecha término</label>
				<div class="six columns">
					<select onclick="fechaTerminalCasosRIC(value)" >
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				<div class="six columns">
					<p class="Escondido" id="fechaExactaV2RIC">
						<input type="text" id="fechaExacta2RIC" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxV2RIC">
						<input type="text" id="fechaAprox2RIC" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaV2RIC">
						<input type="text" id="fechaSinDia2RIC"  placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesV2RIC">
						<input type="text" id="fechaSinDiaSinMes2RIC" placeholder="AAAA-00-00" />

					</p>
				</div>
			</div> <!---termina opciones de fechaTermino-->
			
			<br /><br />
			<div  id="pestania" data-collapse>
				<h2 class="open">Comentarios</h2>
				<div class="twelve columns">
					<textarea id="TextoRelActores" style="width: 400px; height: 200px" wrap="hard"  name="relacionActores_comentarios"></textarea>
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
						bodyid: 'editor',
						toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
						resize: {cssclass: 'resize'}
					});
					</script>
			   </div>	  
			
			<input class="medium button" type="submit" value="Guardar" />
			
		</form>
		
	</body>
</html>
