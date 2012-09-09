<!-------------------Comienza la parte de detalles del lugar------------------------------------->
<div id="formularioDetallerLugar">
	<div id="subPestanias" data-collapse>
		<h2 class="twelve columns">Detalle del lugar</h2><!--título de la sub-pestaña--->  
		<div>
		<?php $config=array('enctype'=>'image/jpeg'); echo form_open('actores_c/agregar_caso_c'); ?>
			<p class="four columns"> <!----Primer mitad de datos de Nacimiento ---->
				<label for="pais">País</label>
				<select id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId">						
				<?php foreach($pais as $key => $item):?> 
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>

			<p class="four columns">
				<label for="estado">Estado</label>
				<select id="datosDeNacimiento_estadosCatalogo_estadoId" name="datosDeNacimiento_estadosCatalogo_estadoId">						
				<?php foreach($estado as $key => $item):?>
						<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>

			<p class="four columns">
				<label for="municipio">Municipio</label>
				<select id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId">						
				<?php foreach($municipio as $key => $item):?> 
					<option value="<?=$item?>"><?=$key?></option>
				<?php endforeach;?>
				</select>

			</p>
			
		<input class="medium button" type="submit" />
		</form>	
		</div>
	</div>
</div>

