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
			                <td><input type="button" class="small button"  value="Detalles" onclick="detallesDelLugar()" /></td>
			              </tr>
			            </tbody>
			          </table>
	  			</div>
	  		
	  		<div id="detallesLugar" class="Escondido"> <?php echo $detalleLugar?>	</div>	  
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
			                <td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
			              </tr>
			            </tbody>
			          </table>
	  			</div>
	  			  
	  		</div>
	  	</div><!--fin acordeon Seguimiento del caso-->
	</div>
	  
</div><!--fin acordeon información general-->
