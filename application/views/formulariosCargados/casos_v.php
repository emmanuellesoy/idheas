<div id="demo" data-collapse>	
	  <h2>Fruits</h2><!--título de la pestaña--->
	  <div>
	  </div>
	  <h2>Hint</h2><!--título de la pestaña--->
	  <div>
			<div id="demo1" data-collapse>
				  <h2>Fruits</h2><!--título de la sub-pestaña--->
				  <div>
						<div id="demo" data-collapse>
							<h2>Fruits</h2><!--título de la pestaña--->
							<div>
							</div>
						</div>
				  </div>
				  <h2>Hint</h2><!--título de la sub-pestaña--->
				  <div>
								  
													
						<div  class="four columns">		
								<?php foreach($todo_list as $index => $item):?> <!--muestra cada elemento de la lista-->
								
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

				  <h2>Third</h2><!--título de la sub-pestaña--->
				  <div>
				  </div>
			</div>
	  </div>
	  <h2>Third</h2><!--título de la pestaña--->
	  <div>
	  </div>
</div>
