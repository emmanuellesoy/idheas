<div id="pestania" data-collapse>
	<h2>Núcleo caso</h2><!--título de la sub-pestaña---->  
	<div>
	  	<div id="subPestanias" data-collapse>
	  		<h2>Derechos afectados y actos</h2>
	  		<div>
	  			<div>
	  				<table>
			            <thead>
			              <tr>
			                <th>Derecho humano</th>
			                <th>Acto</th>
			                <th>Fecha inicio</th>
			                <th>Fecha término</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td><span id="descho_fichaId"><?=(isset($datosCaso['nucleoCaso'][1]['actoViolatorioId'])) ? $datosCaso['nucleoCaso'][1]['actoViolatorioId'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($datosCaso['nucleoCaso'][1]['actoId'])) ? $datosCaso['nucleoCaso'][1]['actoId'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($datosCaso['nucleoCaso']['fechaInicio'])) ? $datosCaso['nucleoCaso']['fechaInicio'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($datosCaso['nucleoCaso']['fechaTermino'])) ? $datosCaso['nucleoCaso']['fechaTermino'] : ''; ?></span></td>
			                <td><input type="button" class="tiny button"  value="Editar" onclick="ventanaDerAfectados()" />
			                <input type="button" class="tiny button"  value="Eliminar" onclick="ventanaDerAfectados()" /></td>
			              </tr>
			            </tbody>
			          </table>
			    <input type="button" class="tiny button"  value="Nuevo" onclick="ventanaDerAfectados(<?=$casoId; ?>)" />
	  			</div>
	  			  
	  		</div>
	  	</div><!--fin acordeon Derechos afectados y actos-->
	  	<div id="subPestanias" data-collapse>
	  		<h2 class="open">Intervenciones</h2>
	  		<div>
	  			<div>
	  				<table>
			            <thead>
			              <tr>
			                <th>Receptor</th>
			                <th>Interventor</th>
			                <th>Tipo de intervención</th>
			                <th>Fecha</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <?php if(isset($datosCaso['lugares'])){ ?>
			              <?php foreach ($datosCaso['intervenciones'] as $inter) {?>
			              	 <tr>
			                <td><span id="descho_fichaId"><?=(isset($inter['receptorId'])) ? $inter['receptorId'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($inter['interventorId'])) ? $inter['interventorId'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($inter['tipoIntervencionId'])) ? $inter['tipoIntervencionId'] : ''; ?></span></td>
			                <td><span id="descho_fichaId"><?=(isset($inter['fecha'])) ? $inter['fecha'] : ''; ?></span></td>
			                <td><input type="button" class="tiny button"  value="Editar" onclick="ventanaInterevenciones()" />
			                <input type="button" class="tiny button"  value="Eliminar" onclick="ventanaInterevenciones()" /></td>
			              </tr> <?php } }?>
			            </tbody>
			          </table>
				<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaInterevenciones(<?=$casoId; ?>)" />	  
	  			</div>
	  			  
	  		</div>
	  	</div><!--fin acordeon Intervenciones-->
	</div>
	  
</div><!--fin acordeon Núcleo caso-->
