<div id="pestania" data-collapse>	
	<h2>Casos</h2><!--título de la pestaña--->  
	<div>
		<div id="subPestanias" data-collapse>	
  
			<h2>Información general</h2><!--título de la pestaña--->  
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
			 </div>
				
			<h2>Lugares</h2><!--título de la pestaña--->  
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
							<td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
						  </tr>
						</tbody>
					  </table>
						  
					</div><!--fin acordeon lugares-->

			<h2>Núcleo caso</h2><!--título de la pestaña--->  
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
										<td>Content</td>
										<td>This is longer content</td>
										<td>Content</td>
										<td>Content</td>
										<td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
									  </tr>
									</tbody>
								  </table>
							</div>
							  
						</div>
						<!--fin acordeon Derechos afectados y actos-->
						<h2>Intervenciones</h2>
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
									  <tr>
										<td>Content</td>
										<td>This is longer content</td>
										<td>Content</td>
										<td>Content</td>
										<td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
									  </tr>
									</tbody>
								  </table>
							</div>
							  
						</div>
						<!--fin acordeon Intervenciones-->
						<h2>Personas asociadas al caso</h2><!--título de la pestaña--->
						<div>
							<div class="twelve" id="subPestanias" data-collapse>	
								  <h2>Victimas</h2><!--título de la pestaña--->
								  <div>
																				
													<div class="six">		
														<div class="PruebaScorll">		
															<?php foreach($lista_casos as $index => $item):?> <!--muestra cada elemento de la lista-->
															
																	<div class="twelve columns" onclick="mostarDatosListaElem()">
																		<div class="five columns"><!--imprimo imagenes-->
																			<?php echo img($item['url']);?>
																			<?php echo br(2);?>	
																		</div>
																		
																		<div class="seven columns"><!--Imprimo nombres-->
																				<?=$item['nombre']?>
																				<?php echo br(2);?>	
																		</div>
																	</div>
																	
															<?php endforeach;?><!--Termina lista de los actores-->
														</div>
													</div>
									  
								  </div>
								  <h2>Perpetradores</h2><!--título de la pestaña--->
								  <div>
									  
									  
														
													<div class="six">		
														<div class="PruebaScorll">		
															<?php foreach($lista_casos as $index => $item):?> <!--muestra cada elemento de la lista-->
															
																	<div class="twelve columns" onclick="mostarDatosListaElem()">
																		<div class="five columns"><!--imprimo imagenes-->
																			<?php echo img($item['url']);?>
																			<?php echo br(2);?>	
																		</div>
																		
																		<div class="seven columns"><!--Imprimo nombres-->
																				<?=$item['nombre']?>
																				<?php echo br(2);?>	
																		</div>
																	</div>
																	
															<?php endforeach;?><!--Termina lista de los actores-->
														</div>
													</div>
									  
								  </div>
								  <h2>Interventores</h2><!--título de la pestaña--->
								  <div>
									  
									  
														
													<div class="six">		
														<div class="PruebaScorll">		
															<?php foreach($lista_casos as $index => $item):?> <!--muestra cada elemento de la lista-->
															
																	<div class="twelve columns" onclick="mostarDatosListaElem()">
																		<div class="five columns"><!--imprimo imagenes-->
																			<?php echo img($item['url']);?>
																			<?php echo br(2);?>	
																		</div>
																		
																		<div class="seven columns"><!--Imprimo nombres-->
																				<?=$item['nombre']?>
																				<?php echo br(2);?>	
																		</div>
																	</div>
																	
															<?php endforeach;?><!--Termina lista de los actores-->
														</div>
													</div>
									  
								  </div>
								  <h2>Receptores</h2><!--título de la pestaña--->
								  <div>
									  
									  
														
													<div class="six">		
														<div class="PruebaScorll">		
															<?php foreach($lista_casos as $index => $item):?> <!--muestra cada elemento de la lista-->
															
																	<div class="twelve columns" onclick="mostarDatosListaElem()">
																		<div class="five columns"><!--imprimo imagenes-->
																			<?php echo img($item['url']);?>
																			<?php echo br(2);?>	
																		</div>
																		
																		<div class="seven columns"><!--Imprimo nombres-->
																				<?=$item['nombre']?>
																				<?php echo br(2);?>	
																		</div>
																	</div>
																	
															<?php endforeach;?><!--Termina lista de los actores-->
														</div>
													</div>
									  
								  </div>
								  <h2>Fuentes de información personal</h2><!--título de la pestaña--->
								  <div>
									  
									  
														
													<div class="six">		
														<div class="PruebaScorll">		
															<?php foreach($lista_casos as $index => $item):?> <!--muestra cada elemento de la lista-->
															
																	<div class="twelve columns" onclick="mostarDatosListaElem()">
																		<div class="five columns"><!--imprimo imagenes-->
																			<?php echo img($item['url']);?>
																			<?php echo br(2);?>	
																		</div>
																		
																		<div class="seven columns"><!--Imprimo nombres-->
																				<?=$item['nombre']?>
																				<?php echo br(2);?>	
																		</div>
																	</div>
																	
															<?php endforeach;?><!--Termina lista de los actores-->
														</div>
													</div>
									  
								  </div>
								  <h2>Fuente documental</h2><!--título de la pestaña--->
								  <div>
								  </div>
							</div>
						
						</div>

					</div>
				</div>

			<h2>Relación entre casos</h2><!--título de la pestaña--->
			<div>
				<table>
					<thead>
					  <tr>
						<th>Caso</th>
						<th>Tipo de relación</th>
						<th>Caso Relacionado</th>
						<th>Fecha inicio</th>
						<th>Fecha término</th>
						<th>Acción(es)</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Content</td>
						<td>Content</td>
						<td>Content</td>
						<td>Content</td>
						<td>Content</td>
						<td><input type="button" class="[tiny, small, medium, large] button"  value="Detalles" onclick="" /></td>
					  </tr>
					</tbody>
				</table>
							
			</div>
		</div>

	</div>
</div>
	
