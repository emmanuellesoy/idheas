<?php
    if(isset($carga_ajax)){
        ?>
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span >Nombre:   </span>
				<span id="nombre"><?=(isset($datosActor[$actorId]['nombre'])) ? $datosActor[$actorId]['nombre'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span >Siglas:  </span>
				<span id="apellidosSiglas"><?=(isset($datosActor[$actorId]['apellidosSiglas'])) ? $datosActor[$actorId]['apellidosSiglas'] : ''; ?></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Tipo de actor colectivo:  </span>
				<span id="tipoActorColectivoId"><?=(isset($datosActor[$actorId]['tipoActorColectivoId'])) ? $datosActor[$actorId]['tipoActorColectivoId'] : ''; ?></span>
			 
			  </p>
			
				
			  <p>
				<span >Actividad:  </span>
				<span id="actividad"><?=(isset($datosActor[$actorId]['actividad'])) ? $datosActor[$actorId]['actividad'] : ''; ?></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		
		<?php echo br(3);?>
		
		<fieldset> <!--Dirección-->
			  <legend>Dirección</legend>
			<div class="six columns">
			 
			  <p>
				<span >Ubicación:   </span>
				<span id="direccion"><?=(isset($datosActor[$actorId]['direccion'])) ? $datosActor[$actorId]['direccion'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span >País:  </span>
				<span id="paisesCatalogo_paisId"><?=(isset($datosActor[$actorId]['paisesCatalogo_paisId'])) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></span>
			 
			  </p>
			 
			  <p>
				<span >Estado:  </span>
				<span id="estadosCatalogo_estadoId"><?=(isset($datosActor[$actorId]['estadosCatalogo_estadoId'])) ? $datosActor[$actorId]['estadosCatalogo_estadoId'] : ''; ?></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Municipio:  </span>
				<span id="municipiosCatalogo_municipioId"><?=(isset($datosActor[$actorId]['municipiosCatalogo_municipioId'])) ? $datosActor[$actorId]['municipiosCatalogo_municipioId'] : ''; ?></span>
			 
			  </p>
			
				
			  <p>
				<span >Código postal:  </span>
				<span id="actores_codigoPostal"><?=(isset($datosActor[$actorId]['actores_codigoPostal'])) ? $datosActor[$actorId]['actores_codigoPostal'] : ''; ?></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		<?php echo br(3);?>
		
		
		<fieldset> <!--Dirección-->
			  <legend>Información de contacto</legend>
			<div class="six columns">
			 
			  <p>
				<span >Teléfono:   </span>
				<span id="telefono"><?=(isset($datosActor[$actorId]['telefono'])) ? $datosActor[$actorId]['telefono'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span >Fax:  </span>
				<span id="fax"><?=(isset($datosActor[$actorId]['fax'])) ? $datosActor[$actorId]['fax'] : ''; ?></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Correo electrónico:  </span>
				<span id="correoE"><?=(isset($datosActor[$actorId]['correoE'])) ? $datosActor[$actorId]['correoE'] : ''; ?></span>
			 
			  </p>
			
				
			  <p>
				<span >Página web:  </span>
				<span id="paginaWeb"><?=(isset($datosActor[$actorId]['paginaWeb'])) ? $datosActor[$actorId]['paginaWeb'] : ''; ?></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		<?php echo br(1);?>

					<?=$relEntreActores; ?>
				<?php echo br(1);?>				
				
                        <input id="mostrarEstadodir" class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncCol()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosCol">
                                <div class="twelve columns">
									<?=$casosMenu?>
                                </div>
                        </div>
					
				<?php echo br(1);?>
</div>
<?php } ?>