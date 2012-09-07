<div id="listaCasos" name="listaCasos"><!--Lista de Actores--->

	<ul class="button-group">
		<li><input type="button" class="button"  value="Agregar Caso" onclick="mostrarAgregarCasos()" /> </li>
		<li><input type="button" class="button" value="Eliminar Caso" onclick="esconderCasos()" /> </li>
    </ul>

			<?php echo form_open('form_c/menu'); ?> 
			<!--buscador de la lista de casos--->
			<div class="eight columns">
					<input id="casosABuscar" type="text"  name="casosABuscar" value="<?php echo set_value('casosABuscar'); ?>" placeholder="Nombre del asos" />
			</div>
				
			<div class="four columns">
					<input  type="button" class="small button" value="Buscar" title="Buscar" />
			</div><!--termina buscador de la lista de actores--->
			</form>	
			
			<?php echo br(2);?>	
			<div class="twelve columns">Nombre</div>
			<?php echo br(2);?>	


<!------------Lista ind-------------------->
			
			<div  id="listaActorIndiv" class="PruebaScorll">	
					<!----</?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
					
							<div class="twelve columns" onclick="mostarDatosListaElem()">
								
								<div class="four columns"><!--Imprimo nombres-->
										<!----  ?=$item['nombre']?--->
										nombre de casos
										<?php echo br(2);?>	
								</div>
							</div>
							
					<!--?php endforeach;?><Termina lista de los actores-->
			</div>
			
	</div> 
