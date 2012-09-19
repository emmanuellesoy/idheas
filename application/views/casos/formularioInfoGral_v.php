
<?php echo form_open(base_url().''); ?>

	<div id="formularioInfoGral">
		<div id="pestania" data-collapse>
		<h2 class="open twelve columns">Información general</h2><!--título de la sub-pestaña--->  
		<div>
			<!--Comienzan datos-->
			<div class="twelve columns">
			<div class="six columns">
				
				<p>
					<label for="nombre">Nombre: </label>
					<input type="text"  name="casos_nombre" value="<?php echo set_value('nombre'); ?>" size="30" maxlength="30" required />
				</p>
				<p>
					<label for="personas">Personas afectadas:</label>
					<input type="number"  name="casos_personasAfectadas" value="<?php echo set_value('personas'); ?>" size="40" maxlength="60" />
				</p>
						
			</div>
			<div class="twelve columns">
				<div class="six columns">
				<label for="edad">Fecha inicial</label>
					<select onclick="fechaInicialCasos(value)" name="casos_fechaInicial">
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				
				<div class="six columns">
					<?php echo br(1);?>	
					<p class="Escondido" id="fechaExactaV">
						<input type="text" id="fechaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxV">
						<input type="text" id="fechaAprox"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaV">
						<input type="text" id="fechaSinDia"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesV">
						<input type="text" id="fechaSinDiaSinMes" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

					</p>
				</div>
		</div> <!---termina opciones de fechaInicial-->
			<div class="twelve columns">
					<label for="edad">Fecha término</label>
				<div class="six columns">
					<select onclick="fechaTerminalCasos(value)" name="caos_fechaTermino" >
								<option  value="1" checked="checked" >fecha exacta</option>
								<option  value="2">fecha aproximada</option>
								<option  value="3">Se desconce el día</option>
								<option  value="4">Se desconce el día y el mes</option>
					</select>
				</div>
				<div class="six columns">
					<p class="Escondido" id="fechaExactaV2">
						<input type="text" id="fechaExacta2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaAproxV2">
						<input type="text" id="fechaAprox2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

					</p>

					<p class="Escondido" id="fechaSinDiaV2">
						<input type="text" id="fechaSinDia2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

					</p >

					<p class="Escondido" id="fechaSinDiaSinMesV2">
						<input type="text" id="fechaSinDiaSinMes2" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

					</p>
				</div>
			</div> <!---termina opciones de fechaTermino-->
			</div>
			
				<?php echo br(2);?>	
		  	<div id="subPestanias" data-collapse>
				<h2 class="twelve columns">Descripción</h2>
					<div class="twelve columns">
						<textarea id="tinyeditor" style="width: 400px; height: 200px" wrap="hard"  name="infocaso_descripccion"></textarea>
						<script>
						var instance = new TINY.editor.edit('editor', {
							id: 'tinyeditor',
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
			</div><!--fin acordeon descripción-->
		  	
		  	<div id="subPestanias" data-collapse>
		  		<h2 class="twelve columns">Resumen</h2>
					<div class="twelve columns">
						<textarea id="infoCaso_resumen" style="width: 400px; height: 200px" wrap="hard"  name="infoCaso_resumen"></textarea>
						<script>
						var instance = new TINY.editor.edit('infoCaso_resumen', {
							id: 'infoCaso_resumen',
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

		  	</div><!--fin acordeon observaciones-->

		  	<div id="subPestanias" data-collapse>
		  		<h2 class="twelve columns">Obsevaciones</h2>
		  		
				<div class="twelve columns">
						<textarea id="infoCaso_observaciones" style="width: 400px; height: 200px" wrap="hard"  name="infoCaso_observaciones"></textarea>
						<script>
						var instance = new TINY.editor.edit('infoCaso_observaciones', {
							id: 'infoCaso_observaciones',
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
		  	</div><!--fin acordeon observaciones-->

		</div>
		</div><!--fin acordeon información general-->
	</div>

	<input class="small button" type="submit" />
</form>
<!-------------------Termina primer pestaña------------------------------------->
