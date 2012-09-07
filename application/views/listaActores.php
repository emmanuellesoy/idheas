<div id="ListasActores" name="ListasActores"><!--Lista de Actores--->

	<ul class="button-group">
		<li><input type="button" class="button"  value="Agregar Actor" onclick="mostrarFormlulario()" /> </li>
		<li><input type="button" class="button" value="Eliminar Actor" onclick="esconderFormlulario()" /> </li>
    </ul>

			<?php echo form_open('form_c/menu'); ?> 
			<!--buscador de la lista de actores--->
			<div class="eight columns">
					<input id="actores_nombre" type="text"  name="actores_nombre" value="<?php echo set_value('actores_nombre'); ?>" placeholder="Nombre, Apellido" />
				</div>
				<div class="four columns">
					<input  type="button" class="small button" value="Buscar" title="Buscar" />
				</div><!--termina buscador de la lista de actores--->
			</form>	
			
			<?php echo br(2);?>	
			<div class="twelve columns">
				<b><div class="six columns">Foto</div>
				<div class="six columns">Nombre</div></b>
			<?php echo br(2);?>	
			</div>


<!------------Lista ind-------------------->
			
			<div  id="listaActorIndiv" class="PruebaScorll">
                            <?php print_r($listaActores); ?>
					<?php foreach($listaActores['individual']  as $index => $item):?> <!--muestra cada elemento de la lista-->
					
							<div class="twelve columns" onclick="mostarDatosListaElem()">
								<div class="five columns"><!--imprimo imagenes-->
									<?php echo img($item['actorId']);?>
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
