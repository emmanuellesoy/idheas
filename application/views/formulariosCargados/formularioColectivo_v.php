<?php
    if(isset($carga_ajax)){
        ?>
<div	id="ActoresV" >
				<!--******************************************-->
						
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width" />

		<title>i(dh)eas</title>
		
		  <!-- Estilo de la página CSS-->
		<?php $link = array(
			'href' => 'statics/stylesheets/foundation.min.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>
				
		<?php $link = array(
			'href' => 'statics/stylesheets/app.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
		
		
		<?php $link = array(
			'href' => 'statics/CSS/menu_v.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
		
	
<!---------Acordion css ------>		
		<?php $link = array(
			'href' => 'statics/CSS/collapse.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
				
		<?php $link = array(
			'href' => 'statics/CSS/tinyeditor.css',
			'rel' => 'stylesheet',
			);
			echo link_tag($link); 
		?>  
                <script type="text/javascript">var base_url = "<?=base_url(); ?>"</script>
		<!--Scripts foundation-->
		<script src="<?php echo base_url(); ?>statics/javascripts/modernizr.foundation.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/foundation.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/app.js" ></script>
		
		<!--Scripts jquery-->		
		<script src="<?php echo base_url(); ?>statics/jquery-ui-1.8.23.custom/js/jquery-1.8.0.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/menu_v.js" ></script>
		<!---script que hace posible el acordion-->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

				<!--******************************************-->

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