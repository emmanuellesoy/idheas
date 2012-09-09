<!-------------------------Comienza la parte de Acto---------------------------->
<div id="formularioCasoActo">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Acto</h2><!--título de la sub-pestaña--->  
	<div>
	<?php $config=array('enctype'=>'image/jpeg');?>
			<fieldset>
				  <legend>Información general</legend>
				  
                    <p>
                        <label for="genero">Derecho afectado</label>
                        
                        
            <div  id="listaActorIndiv" class="PruebaScorll">	
			</div>
                        
                        
                        
                        
                        
                        
                        
                        <label for="genero">Acto</label>
                    </p>
                    
                    		<div class="twelve columns">
		<div class="six columns">
	<label for="edad">Fecha de inicio</label>
			<select onclick="fechaInicialCasosActos(value)">
						<option  value="1" checked="checked" >fecha exacta</option>
						<option  value="2">fecha aproximada</option>
						<option  value="3">Se desconce el día</option>
						<option  value="4">Se desconce el día y el mes</option>
			</select>
		</div>
		
		<div class="six columns">
			<?php echo br(1);?>	
			<p class="Escondido" id="fechaExactaVAct">
				<input type="text" id="fechaExactaAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaAproxVAct">
				<input type="text" id="fechaAproxAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

			</p>

			<p class="Escondido" id="fechaSinDiaVAct">
				<input type="text" id="fechaSinDiaAct"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

			</p >

			<p class="Escondido" id="fechaSinDiaSinMesVAct">
				<input type="text" id="fechaSinDiaSinMesAct" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

			</p>
		</div>
	</div> <!---termina opciones de fechaInicial-->
		<div class="twelve columns">
				<label for="edad">Fecha de término</label>
			<div class="six columns">
				<select onclick="fechaTerminalCasosActos(value)">
							<option  value="1" checked="checked" >fecha exacta</option>
							<option  value="2">fecha aproximada</option>
							<option  value="3">Se desconce el día</option>
							<option  value="4">Se desconce el día y el mes</option>
				</select>
			</div>
			<div class="six columns">
				<p class="Escondido" id="fechaExactaVAct2">
					<input type="text" id="fechaExactaAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaAproxVAct2">
					<input type="text" id="fechaAproxAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>

				<p class="Escondido" id="fechaSinDiaVAct2">
					<input type="text" id="fechaSinDiaAct2"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-00" />

				</p >

				<p class="Escondido" id="fechaSinDiaSinMesVAct2">
					<input type="text" id="fechaSinDiaSinMesAct2" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-00-00" />

				</p>
			</div>
		</div> <!---termina opciones de fechaTermino-->
				<?php echo br(1);?>	
	</fieldset>
			
			<?php echo br(2);?>	
			
			
			<fieldset>
				  <legend>Personas afectadas y lugar</legend>
		<div class="six columns">

			<p>
				<label for="personas">Personas afectadas:</label>
				<input type="number"  name="nucleoCaso_noPersonasAfectadas" value="<?php echo set_value('personas'); ?>" size="40" maxlength="60" />
			</p>

			<p>
				<label for="pais">País</label>
				<select id="nucleoCaso_paisesCatalogo_paisId" name="nucleoCaso_paisesCatalogo_paisId">						
				<?php foreach($pais as $key => $item):?> 
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
			
		</div>
				  
		<div class="six columns">

			<p>
				<label for="estado">Estado</label>
				<select id="nucleoCaso_estadosCatalogo_estadoId" name="nucleoCaso_estadosCatalogo_estadoId">						
				<?php foreach($estado as $key => $item):?>
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
			</div><!----Termina primer mitad de datos de Nacimiento ---->

		<div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->

			<p>
				<label for="municipio">Municipio</label>
				<select id="nucleoCaso_municipiosCatalogo_municipioId" name="nucleoCaso_municipiosCatalogo_municipioId">						
				<?php foreach($municipio as $key => $item):?> 
					<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
		</div>
				  
			</fieldset>
		<input class="large button" type="submit" />
	</form>
	</div>
	   
	</div><!--fin acordeon información general-->

</div>
<!-----------------------Termina la parte de Acto------------------------------->

