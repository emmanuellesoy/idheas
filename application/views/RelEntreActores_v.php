<div id="RelacionEntreActores">
	<fieldset>
		<legend>Relacion entre actores </legend>

<?= print_r($relaciones); ?>

		<div class="twelve columns">

			<div id="pestania" data-collapse>
				<h2>Actores individuales o transmigrantes</h2>
				<div>
					<!--Comienza relacion con otros actores-->
					<div class="twelve columns">
						<div id="subPestanias" data-collapse>
							<h2>Relacion con otros actores </h2>
								<div>
									<table>
										<thead>
										  <tr>
											<th>Persona</th>
											<th>Tipo de relación</th>
											<th>Persona Relacionada</th>
											<th>Fecha de incio</th>
											<th>Fecha de témino</th>
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
											<td><input type="button" class="tiny button"  value="Editar" onclick="ventanaRelacionOtrosActoresEditar('<?=$actorId ?>' , '<?=(isset($relacionActoresId)) ? $relacionActoresId : '' ; ?>')" />
											<input type="button" class="tiny button"  value="Eliminar" onclick="" /></td>
										  </tr>
										</tbody>
									</table>
									<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaRelacionOtrosActores('<?=$actorId ?>')" />


								</div>
						</div>
					</div>
					<!--Termina realcion con otros actores-->
					
					<!--Comienza citado como persona relacionada-->
					<div class="twelve columns">
						<div id="subPestanias" data-collapse>
							<h2>Citado como persona relacionada</h2>
								<div>
									<table>
										<thead>
										  <tr>
											<th>Persona</th>
											<th>Tipo de relación</th>
											<th>Persona Relacionada</th>
											<th>Fecha de incio</th>
											<th>Fecha de témino</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>Content</td>
											<td>This is longer content</td>
											<td>Content</td>
											<td>Content</td>
											<td>Content</td>
										  </tr>
										</tbody>
									</table>
								</div>
						</div>
					</div>
					<!--Termina citado como persona relacionada-->
					
				</div>
			</div>
		</div>
		
					<!--Comienza actores colectivos---->
					<div class="twelve columns">
						<div id="pestania" data-collapse>
							<h2>Actores colectivos </h2>
								<div>
									<table>
										<thead>
										  <tr>
											<th>Persona</th>
											<th>Tipo de relación</th>
											<th>Actor colectivo relacionado </th>
											<th>Fecha de incio</th>
											<th>Fecha de témino</th>
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
											<td><input type="button" class="tiny button"  value="Editar" onclick="ventanaRelacionOtrosActoresColEditar('<?=$actorId ?>' , '<?=(isset($relacionActoresId)) ? $relacionActoresId : '' ; ?>')" />
											<input type="button" class="tiny button"  value="Eliminar" onclick="" /></td>
										  </tr>
										</tbody>
									</table>
									<input type="button" class="tiny button"  value="Nuevo" onclick="ventanaRelacionOtrosActoresCol('<?=$actorId ?>')" />
								</div>
						</div>
					</div>
					<!--Termina actores colectivos-->
					
					
	</fieldset>
</div>
