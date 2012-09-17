<div id="listaCasos" name="listaCasos"><!--Lista de Actores---->

	<ul class="button-group">
		<li><input type="button" class="small button"  value="Agregar Caso" onclick="mostrarAgregarCasos()" /> </li>
		<li><input type="button" class="small button" value="Eliminar Caso" onclick="esconderCasos()" /> </li>
    </ul>

			<?php echo form_open('form_c/menu'); ?> 
			<!--buscador de la lista de casos---->
			<div class="eight columns">
					<input id="casosABuscar" type="text"  name="casosABuscar" placeholder="Nombre del casos" />
			</div>
				
			<div class="four columns">
					<input  type="button" class="tiny button" value="Buscar" title="Buscar" />
			</div><!--termina buscador de la lista de actores---->
			</form>	
			
			<?php echo br(2);?>	
			<div class="twelve columns">Nombre</div>
			<?php echo br(2);?>	


<!--*************Lista de casos*************-->
				<div  id="listaCasos" class="PruebaScorll">
		
					<?php if(isset($listaCasos) != 'No hay casos en la base de datos '):?>
                    <?php foreach($listaCasos  as $item):?> 
			
							<div class="twelve columns" onclick="mostarDatosListaElem()">
										<?=$item['nombre']?>
										<?php echo br(2);?>	
							</div>
							
					<?php endforeach;?>
					<?php endif;?> 
	</div>
			
	
		
	</div> 
