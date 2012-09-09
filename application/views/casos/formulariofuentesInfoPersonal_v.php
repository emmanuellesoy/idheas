
<!-----------------Comienza la parte de fuentes de información personal ------------------------>
<div id="formularioFuenteInfoPer">
<div id="pestania" data-collapse>
	<h2 class="twelve columns">Detalle de información personal</h2><!--título de la sub-pestaña--->  
	<div>
		<div class="twelve columns">
			<div class="six columns">
				<input type="button" class="medium button"  value="Persona" onclick="" />
				lista de personas
			</div>

			<div class="six columns">
				<input type="button" class="medium button"  value="Actor colectivo" onclick="" />		
				lista de actores colectivos
			</div>		
		</div>
		
		<div class="twelve columns">
			<div class="six columns">
				<label for="tipoFuente">Tipo de fuente</label>
						<select id="infoAdicional_tipoFuenteId">
									<option  value="1" checked="checked" >fecha exacta</option>
									<option  value="2">fecha aproximada</option>
									<option  value="3">Se desconce el día</option>
									<option  value="4">Se desconce el día y el mes</option>
						</select>
			</div>
					
			<div class="six columns">
				<?php echo br(1);?>	
					<input type="text" id="fechaExacta"  value="<?php echo set_value('fecha'); ?>" placeholder="AAAA-MM-DD" />

				</p>
	</div>

	
		<div class="twelve columns">
			<div class="six columns">
					<p>
						<label for="idioma">Idioma</label>
						<select id="infoAdicional_idiomaCatalogo_idiomaId" name="infoAdicional_idiomaCatalogo_idiomaId">						
						<?php foreach($pais as $key => $item):?> 
								<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>

					</p>
			</div>
			<div class="six columns">
					<p>
						<label for="nivConfiabilidad">Nivel de confiabilidad</label>
						<select id="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId" name="infoAdicional_nivelConfiabilidadCatalogo_nivelConfiabilidadId">						
						<?php foreach($pais as $key => $item):?> 
								<option value="<?=$item?>"><?=$key?></option>
						<?php endforeach;?>
						</select>

					</p>
			</div>
			
		<fieldset>
			<legend>Actor reportado</legend>
				lista de actores 
		<div class="twelve columns">
			<div class="six columns">
				<input type="button" class="medium button"  value="Persona" onclick="" />
				lista de personas
			</div>

			<div class="six columns">
				<input type="button" class="medium button"  value="Actor colectivo" onclick="" />		
				lista de actores colectivos
			</div>		
		</div>
		</fieldset>	
			
		</div>
	</div>
		
		
</div>
</div>

<!-------------------Termina la parte de fuentes de información personal------------------------------------->
