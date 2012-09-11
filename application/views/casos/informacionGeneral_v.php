<div id="pestania" data-collapse>
	<h2>Información general</h2><!--título de la sub-pestaña--->  
	<div>
		<div id="casos_nombre">
	  		<p>Nombre:</p>
	  	</div>
	  	<div id="casos_personasAfectadas">
	  		<p>Personas Afectadas:</p>
	  	</div>
	  	<div id="casos_fechaInicial">
	  		<p>Fecha inicial:</p>
	  	</div>
	  	<div id="casos_fechaTermino">
	  		<p>Fecha término:</p>
	  	</div>
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Lugares</h2>
	  		<div>
	  			<div>
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
			                <td>Content</td>
			                <td>This is longer content</td>
			                <td>Content</td>
			                <td><input type="button" class="tiny button"  value="Editar" onclick="ventanaDetalleLugar()" />
			                <input type="button" class="tiny button"  value="Eliminar" onclick="" /></td>
			              </tr>
			            </tbody>
			          </table>
				<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaDetalleLugar()" />	  
	  			</div>
	  		</div>
	  	</div><!--fin acordeon lugares-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Descripción</h2>
	  		<div>
	  			<div id="infoCaso_descripcion" class="panel">
  					<p>Descripción del caso...</p>
				</div>	  			  
	  		</div>
	  	</div><!--fin acordeon descripción-->
	  	
	  	<div id="subPestanias" data-collapse>
	  		<h2>Obsevaciones</h2>
	  		<div>
	  			<div id="infoCaso_descripcion" class="panel">
  					<p>Observaciones del caso...</p>
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
