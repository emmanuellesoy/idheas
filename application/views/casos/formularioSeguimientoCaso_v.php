
<!-------------------Comienza la parte de seguimiento del caso------------------------------------->

<div id="formularioDetallerLugar">
	<div id="pestania" data-collapse>
		<h2 class="twelve columns">Detalle de la información de seguimiento del caso</h2><!--título de la sub-pestaña--->  
			<div>
				<div class="twelve columns">
					<div class="six columns">
						<p>
							<label for="clave">Clave</label>
							<input type="text" id="fichas_fichaId" name="fichas_fichaId" value="<?php echo set_value('ficha'); ?>" size="30" maxlength="30" required />
						</p>
					</div>
					<div class="six columns">
						<p>
							<label for="claveTitulo">Título</label>
							<input type="text" id="fichas_titulo" name="fichas_titulo" value="<?php echo set_value('titulo'); ?>" size="60" maxlength="60" required />

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
							<input type="text" id="fichaExactaR"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaAproxVR">
							<input type="text" id="fichaAproxR"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaSinDiaVR">
							<input type="text" id="fichaSinDiaR"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

						</p >

						<p class="Escondido" id="fichaSinDiaSinMesVR">
							<input type="text" id="fichaSinDiaSinMesR" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

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
							<input type="text" id="fichaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaAproxV">
							<input type="text" id="fichaAprox"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>

						<p class="Escondido" id="fichaSinDiaV">
							<input type="text" id="fichaSinDia"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

						</p >

						<p class="Escondido" id="fichaSinDiaSinMesV">
							<input type="text" id="fichaSinDiaSinMes" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

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
					</p>	 
			
			</div>	
		</div>
	
	</div>
</div>
<!-------------------Termina la parte de seguimiento del caso------------------------------------->

