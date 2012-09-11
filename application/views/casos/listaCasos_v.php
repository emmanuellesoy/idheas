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


				  <pre><?php print_r($listaCasos); ?></pre>
<!------------Lista ind--------------------
				<div  id="listaActorIndiv" class="PruebaScorll">
		
					< ?php if($listaCasos){ ?>
                    < ?php foreach($listaCasos  as $item):?> 
			
							<div class="twelve columns" onclick="mostarDatosListaElem()">
										< ?=$item['nombre']?>
										< ?php echo br(2);?>	
							</div>
							
                    < ?php } ?>
					< ?php endforeach;? >
	</div>--Termina lista de los actores-->
			
	
		
	</div> 
