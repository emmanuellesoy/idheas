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
	<div id="FormularioRelacionIndividuos">
		<form action="" method="post" accept-charset="utf-8">
			
			<div class="twelve columns">
				<label for="TipoRel">Tipo de relación</label>
				<select id="infoGralActor_hijos" name="relacionActores_tipoRelacionId">
					<option > </option>
				</select>
			</div>
			<br /><br />
			<label for="PerRelacionada">Persona Relacionada</label>
			
			<br /><br />
			<div class="twelve columns">
				<div class="six columns">
				<label for="edad">Fecha inicial</label>
					<select onclick="fechaInicialCasosRP(value)" >
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				
				<div class="six columns">
					<?php echo br(1);?>	
					<p class="Escondido" id="fechaExactaVRP">
						<input type="text" id="fechaExactaRP" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxVRP">
						<input type="text" id="fechaAproxRP" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaVRP">
						<input type="text" id="fechaSinDiaRP" placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesVRP">
						<input type="text" id="fechaSinDiaSinMesRP" placeholder="AAAA-00-00" />

					</p>
				</div>
		</div> <!---termina opciones de fechaInicial-->
				
				
			<div class="twelve columns">
					<label for="Termonio">Fecha término</label>
				<div class="six columns">
					<select onclick="fechaTerminalCasosRP(value)" >
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				<div class="six columns">
					<p class="Escondido" id="fechaExactaV2RP">
						<input type="text" id="fechaExacta2RP" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxV2RP">
						<input type="text" id="fechaAprox2RP" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaV2RP">
						<input type="text" id="fechaSinDia2RP"  placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesV2RP">
						<input type="text" id="fechaSinDiaSinMes2RP" placeholder="AAAA-00-00" />

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
			   </div>	  
			
		</form>		
	</div>	
	</body>
</html>
