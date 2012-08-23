	
		<div id="ListasActores" name="ListasActores">
			<?php foreach($todo_list as $item):?> <!--muestra cada elemento de la lista-->
				<div id="lista" name="lista">
					<div id="Imagen" name="Imagen">
					<?php echo img($imagen);?>
					</div>
					<div id="Nombre" name="Nombre">
						<?=$item?>
					</div>
				</div>
			<?php endforeach;?>
		</div> <!--Termina lista de los actores-->
