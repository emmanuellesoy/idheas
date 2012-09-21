
<div id="pestania" data-collapse>
	<h2>Información adicional</h2><!--título de la sub-pestaña-->  
	<div>

		<div id="subPestanias" data-collapse>
  		<h2>Fuente documental</h2>
	  		<div>
  				 <div>
  				 	<table>
			            <thead>
			              <tr>
			                <th>Nombre de fuente</th>
			                <th>Tipo de fuente</th>
			                <th>Actor reportado</th>
			                <th>Fecha de publicación</th>
			                <th>Fecha de acceso</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td>Content</td>
			                <td>This is longer content</td>
			                <td>Content</td>
			                <td>Content</td>
			                <td>Content</td>
			                <td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="ventanaFuenteDoc(<?=$casoId; ?>)" /></td>
			              </tr>
			            </tbody>
		          </table>
		          <input type="button" class="[tiny, small, medium, large] button"  value="Nuevo" onclick="ventanaFuenteDoc(<?=$casoId; ?>)" />
  				 </div>
	  		</div>
	  	</div><!--fin acordeon Fuente documental-->

		<div id="subPestanias" data-collapse>
	  		<h2>Fuentes de información</h2>
	  		<div>
				  	<div id="subPestanias" data-collapse>
				  		<h2>Fuentes de información personal</h2>
					  		<div>
					  			<div>
					  				<table>
							            <thead>
							              <tr>
							                <th>Nombre de fuente</th>
							                <th>Tipo de fuente</th>
							                <th>Actor reportado</th>
							                <th>Fecha</th>
							                <th>Acción(es)</th>
							              </tr>
							            </thead>
							            <tbody>
							              <tr>
							                <td>Content</td>
							                <td>This is longer content</td>
							                <td>Content</td>
							                <td>Content</td>
							                <td><input type="button" class="small button"  value="Detalles" onclick="" /></td>
							              </tr>
							            </tbody>
					          		</table>
					          		<input type="button" class="small button"  value="nuevo" onclick="" />
					  			</div>
					  		</div>
					  	</div><!--fin acordeon Fuentes de información personal-->

	  		</div>
	  	</div><!--fin acordeon Fuentes de información-->
	  	
	  	<div id="subPestanias twelve columns" data-collapse>
	  		<h2>Relación entre casos</h2>
	  		<div>
	  			<div>
	  				<table>
			            <thead>
			              <tr>
			                <th>Caso</th>
			                <th>Tipo de relación</th>
			                <th>Caso relacionado</th>
			                <th>Feche de inicio</th>
			                <th>Feche de término</th>
			                <th>Acción(es)</th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td> <span id="infoCaso_descripcion"><?=(isset($datosCaso['relacionCasos'][1]['casoIdB'])) ? $datosCaso['relacionCasos'][1]['casoIdB'] : ''; ?></span> </td>
			                <td> <span id="infoCaso_descripcion"><?=(isset($datosCaso['relacionCasos'][1]['relacionId'])) ? $datosCaso['relacionCasos'][1]['relacionId'] : ''; ?></span> </td>
			                <td> <span id="infoCaso_descripcion"><?=(isset($datosCaso['relacionCasos'][1]['relacionId'])) ? $datosCaso['relacionCasos'][1]['relacionId'] : ''; ?></span> </td>
			                <td>Content</td>
			                <td>Content</td>
			                <td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
			              </tr>
			            </tbody>
	          		</table>
	  			</div>
	  		</div>
	  	</div><!--fin acordeon Relación entre casos-->
	</div>
	  
</div><!--fin acordeon Información adicional-->
