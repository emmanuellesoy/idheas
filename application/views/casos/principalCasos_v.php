<div id="pestania" data-collapse>
	<h2 class="twelve columns">Información general</h2><!--título de la sub-pestaña--->  
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
			<select onclick="fechaInicialCasos(value)">
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
				<label for="edad">Fecha terminal</label>
			<div class="six columns">
				<select onclick="fechaTerminalCasos(value)">
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
		<!--Comienzan subpestañas--------------->
	  	<div id="subPestanias" data-collapse>
		<h2 class="twelve columns">Descripción</h2>
				<div >
				  <textarea  placeholder="Escribir alguna descripción" rows="10" cols="20" name="infoCaso_descripcion" id="infoAdicional_descripcion" wrap="hard" ></textarea>
			</div>	  
		</div><!--fin acordeon descripción-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2 class="twelve columns">Resumen</h2>
	  		<div>
				<textarea  placeholder="Añadir un resumen" rows="10" cols="20" name="infoCaso_resumen" id="infoCaso_resumen" wrap="hard" ></textarea>
	  		</div>
	  	</div><!--fin acordeon observaciones-->

	  	<div id="subPestanias" data-collapse>
	  		<h2 class="twelve columns">Obsevaciones</h2>
	  		<div>
				<textarea  placeholder="Escribir algun comentario" rows="10" cols="20" name="infoAdicional_observaciones" id="infoAdicional_observaciones" wrap="hard" ></textarea>
	  		</div>
	  	</div><!--fin acordeon observaciones-->

	</div>
	  
</div><!--fin acordeon información general-->
<!-------------------Termina primer pestaña------------------------------------->


<!-------------------------Comienza la parte de Acto---------------------------->
<div id="formularioCasoActo">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Acto</h2><!--título de la sub-pestaña--->  
	<div>
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
	</div>
	  
	</div><!--fin acordeon información general-->

</div>
<!-----------------------Termina la parte de Acto------------------------------->


<!-----------------Comienza la parte de Intervención---------------------------->
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Intervención</h2><!--título de la sub-pestaña--->  
	<div>
		
		<fieldset>
			
			<?php echo br(2);?>	
		
			<fieldset>
				  <legend>Información general</legend>
					
					<div class="six columns">
						<p>
							<label for="tipoIntervencion">Tipo de intervención</label>
							<select id="tipoIntervencion" name="intervenciones_tipoIntervencionId">						
							<?php foreach($pais as $key => $item):?> 
									<option value="<?=$item?>"><?=$key?></option>
							<?php endforeach;?>
							</select>
						</p>
						</div>
					
					<div class="six columns">	
						<p>
							<label for="fecha">Fecha: </label>
							<input type="text" id="datepickerIntervencion"name="intervenciones_fecha" value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

						</p>
					</div>
					<div class="twelve columns">
						<div class="six columns">
								<p>
									<label for="tipoIntervencion">Impacto</label>
									<textarea  rows="10" cols="20" name="intervenciones_impacto" id="intervenciones_impacto" wrap="hard" ></textarea>
								</p>	 
						</div>
						<div class="six columns">
								<p>
									<label for="tipoRespuesta">En respuesta</label>
									<textarea  rows="10" cols="20" name="intervenciones_respuesta" id="intervenciones_respuesta" wrap="hard" ></textarea>
								</p>	 
						</div>
					<?php echo br(2);?>	
					</div>

			</fieldset>
			
					<div class="twelve columns">
						<div class="six columns">
							<fieldset>
								  <legend>Interventor </legend>
								  
									<label for="Interventor">Persona</label>
							</fieldset>
						</div>
						<div class="six columns">
							<fieldset>
								  <legend>Receptor </legend>
									<label for="receptor">Persona</label>
							</fieldset>
						</div>
						<?php echo br(2);?>	
					</div>
			
			
			<?php echo br(2);?>	
			
			<div id="subPestanias" data-collapse>
			<h2 class="twelve columns">Personas por las que se interviene</h2>
				<div >
					  <span>Agregar</span>
				</div>	  
			</div><!--fin acordeon descripción-->
	  	
		</fieldset>	
			
	</div>
</div><!--fin acordeon información general-->
<!-----------------------Termina la parte de Intervención----------------------->

<!-----------------Comienza la parte de Fuente documental------------------------>
<div id="formularioCasoActo">
	<div id="pestania" data-collapse>
	<h2 class="twelve columns">Fuente documental</h2><!--título de la sub-pestaña--->  
	<div>
	
		<fieldset>
			  <legend>fuente documental</legend>
			  <div class="twelve columns">
						<div class="six columns">
								<p>
									<label for="nombreFuente">Nombre de la fuente</label>
									<textarea  rows="10" cols="20" name="infoAdicional_nombreFuente" id="infoAdicional_nombreFuente" wrap="hard" ></textarea>
								</p>	 
								
								<p>
									<label for="tipoFuente">Tipo de la fuente</label>
									<span>Nombre</span>
									<span><o></o>Notas</span>
								</p>
						</div>
						<div class="six columns">
								<p>
									<label for="tipoRespuesta">Información adicional</label>
									<textarea  rows="10" cols="20" name="infoAdicional_infoAdicionalFuenteDocumental" id="infoAdicional_infoAdicionalFuenteDocumental" wrap="hard" ></textarea>
								</p>	 
						</div>
					<?php echo br(2);?>	
			  </div>
		</fieldset>
	</div>

	</div>
</div>
<!-----------------termina la parte de Fuente documental------------------------>
