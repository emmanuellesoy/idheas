
	<pre><?php print_r($catalogos);?></pre>
<div id="pestania" data-collapse>
	<h2>Información general</h2><!--título de la sub-pestaña---->  
	<div>

		<div id="casos_nombre">
	  		<p>Nombre:
          	<span id="casos_nombre"><?=(isset($datosCaso[$casoId]['nombre'])) ? $datosCaso[$casoId]['nombre'] : ''; ?></span>
          	</p>
	  	</div>
	  	<div id="casos_personasAfectadas">
	  		<p>Personas Afectadas:
          	<span id="casos_pesonasAfectadas"><?=(isset($datosCaso[$casoId]['personasAfectadas'])) ? $datosCaso[$casoId]['personasAfectadas'] : ''; ?></span>
          	</p>
	  	</div>
	  	<div id="casos_fechaInicial">
	  		<p>Fecha inicial:
          	<span id="casos_fechaInicial"><?=(isset($datosCaso[$casoId]['fechaInicial'])) ? $datosCaso[$casoId]['fechaInicial'] : ''; ?></span>
          	</p>
	  	</div>
	  	<div id="casos_fechaTermino">
	  		<p>Fecha término:
          	<span id="casos_fechaInicial"><?=(isset($datosCaso[$casoId]['fechaInicial'])) ? $datosCaso[$casoId]['fechaInicial'] : ''; ?></span>
          	</p>
	  	</div>
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Lugares</h2>
	  		<div>
	  			<div>
	  				<!------------------------------ Comienza tabla lugare-------------------------------------->
	  				<table>
			            <thead>
			              <tr>
			                <th>País</th>
			                <th>Estado</th>
			                <th>Municipio</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td> <?=(isset($datosCaso[$casoId]['paisesCatalogo_paisId'])) ? $catalogos['paisesCatalogo']['paisesCatalogo'][--$datosCaso[$casoId]['paisesCatalogo_paisId']]['nombre'] : ''; ?> </td>
			                <td> <?=(isset($datosCaso[$casoId]['estadosCatalogo_estadoId'])) ? $catalogos['estadosCatalogo']['estadosCatalogo'][--$datosCaso[$casoId]['estadosCatalogo_estadoId']]['nombre'] : ''; ?> </td>
			                <td><?=(isset($datosCaso[$casoId]['municipiosCatalogo_municipioId'])) ? $catalogos['municipiosCatalogo']['municipiosCatalogo'][--$datosCaso[$casoId]['municipiosCatalogo_municipioId']]['nombre'] : ''; ?></td>
			                <td><input type="button" class="tiny button"  value="Editar" onclick="ventanaDetalleLugar()" />
			                <input type="button" class="tiny button"  value="Eliminar" onclick="" /></td>
			              </tr>
			            </tbody>
			          </table>
				<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaDetalleLugar()" />	  
	  				<!------------------------------ Termina tabla lugare-------------------------------------->
	  			</div>
	  		</div>
	  	</div><!--fin acordeon lugares-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Descripción</h2>
	  		<div>
	  			<div id="infoCaso_descripcion" class="panel">
  					<p>
          			<span id="infoCaso_descripcion"><?=(isset($datosCaso[$casoId]['descripcion'])) ? $datosCaso[$casoId]['descripcion'] : ''; ?></span>
          			</p>
				</div>	  			  
	  		</div>
	  	</div><!--fin acordeon descripción-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Obsevaciones</h2>
	  		<div>
	  			<div id="infoCaso_descripcion" class="panel">
  					<p>
          			<span id="infoCaso_descripcion"><?=(isset($datosCaso[$casoId]['observaciones'])) ? $datosCaso[$casoId]['observaciones'] : ''; ?></span>
  					</p>
				</div>	  			  
	  		</div>
	  	</div><!--fin acordeon observaciones-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Seguimiento del caso</h2>
	  		<div>
	  			<div>
	  				<table>
			            <thead>
			              <tr>
			                <th>Id</th>
			                <th>Título</th>
			                <th>Fecha de recibo</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td>Content</td>
			                <td>This is longer content</td>
			                <td>Content</td>
			                <td><input type="button" class="tiny button"  value="Editar" onclick="ventanaFicha()" /></td>
			                <td><input type="button" class="tiny button"  value="Eliminar" onclick="" /></td>
			              </tr>
			            </tbody>
			          </table>
	  			</div>
	  		<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaFicha()" />	  
	  		</div>
	  	</div><!--fin acordeon Seguimiento del caso-->
	</div>
	  
</div><!--fin acordeon información general-->
