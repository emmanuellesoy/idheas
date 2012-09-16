
<!-------------------Comienza la parte de seguimiento del caso------------------------------------->
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
<div id="formularioDetallerLugar">
	<div id="pestania" data-collapse >
		<h2 class="open">Detalle de la información de seguimiento del caso</h2><!--título de la sub-pestaña-->  
			<div>
				<div class="twelve columns">
					<div class="six columns">
						<p>
							<label for="clave">Clave</label>
							<input type="text" id="fichas_fichaId" name="fichas_fichaId" value="" required />
						</p>
					</div>
					<div class="six columns">
						<p>
							<label for="claveTitulo">Título</label>
							<input type="text" id="fichas_titulo" name="fichas_titulo" value="" size="60"  />

						</p>
					</div>
				</div>


			<div class="twelve columns">
				<div class="six columns">
					<label for="edad">Fecha de recepción</label>
					<select onclick="fichadeRecepcion(value)">
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
					</div>
					
					<div class="six columns">
					<?php echo br(1);?>	
						<p class="Escondido" id="fichaExactaVR">
							<input type="text" id="fichaExactaR"  placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaAproxVR">
							<input type="text" id="fichaAproxR"  placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaSinDiaVR">
							<input type="text" id="fichaSinDiaR" placeholder="AAAA-MM-00" />

						</p >

						<p class="Escondido" id="fichaSinDiaSinMesVR">
							<input type="text" id="fichaSinDiaSinMesR" placeholder="AAAA-00-00" />

						</p>
					</div>
				</div> <!---termina opciones de fechaInicial-->


			<div class="twelve columns">
				<div class="six columns">
					<label for="edad">Fecha inicial</label>
					<select onclick="fichadeRecepcionInicial(value)">
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
					</div>
					
					<div class="six columns">
					<?php echo br(1);?>	
						<p class="Escondido" id="fichaExactaV">
							<input type="text" id="fichaExacta"    placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaAproxV">
							<input type="text" id="fichaAprox"   placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaSinDiaV">
							<input type="text" id="fichaSinDia"   placeholder="AAAA-MM-00" />

						</p >

						<p class="Escondido" id="fichaSinDiaSinMesV">
							<input type="text" id="fichaSinDiaSinMes"  placeholder="AAAA-00-00" />

						</p>
					</div>
				</div> <!---termina opciones de fechaInicial-->
			
			<div class="twelve columns">
					<p>
						<label for="comentFichas">Comentarios</label>
						<textarea id="fichas_Comentarios" style="width: 400px; height: 200px" name="fichas_Comentarios" wrap="hard"  > </textarea>
						<script>
						var instance = new TINY.editor.edit('fichas_Comentarios', {
							id: 'fichas_Comentarios',
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
					</p>	 
			
			</div>	
		</div>
	
	</div>
</div>

			<input class="medium button" type="submit" />
<!-------------------Termina la parte de seguimiento del caso------------------------------------->
</body>	
</html>
