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
		
	
<!---------Acordion css -------->		
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
		<!---script que hace posible el acordion---->
		<script src="<?php echo base_url(); ?>statics/javascripts/jquery.collapse.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/datepickerEsp.js" ></script>
		<script src="<?php echo base_url(); ?>statics/javascripts/tiny.editor.packed.js" ></script>

				<!--******************************************-->

	
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span>Nombre:   </span>
				<span id="nombre"><?=(isset($datosActor['actores']['nombre'])) ? $datosActor['actores']['nombre'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Apellidos:  </span>
				<span id="apellidosSiglas"><?=(isset($datosActor['actores']['apellidosSiglas'])) ? $datosActor['actores']['apellidosSiglas'] : ''; ?></span>
			 
			  </p>
			 
			  <p>
				<span>Alias:   </span>
				<span id="alias"><?=(isset($datosActor['alias']['alias'])) ? $datosActor['alias']['alias'] : ''; ?></span>
			  
			  </p>
			  
			  </div>
			  
			<div class="six columns">
			  
			<div class="six columns">
			 
			  <p>
				<span>Género:   </span>
				<span id="generoid"><?=(isset($datosActor['infoGralActor']['generoid'])) ? $datosActor['infoGralActor']['generoid'] : ''; ?></span>
			
			  </p>
			</div>
			
			<div class="six columns">
			  
			  <p>
				<span>Edad:   </span>
				<span id="edad"><?=(isset($datosActor['infoGralActor']['edad'])) ? $datosActor['infoGralActor']['edad'] : ''; ?></span>
			  </p>
			</div>
			 
			  <p>
				<span>Estado Civil:   </span>
				<span id="estadoCivil_estadoCivilId"><?=(isset($datosActor['infoGralActor']['estadoCivil_estadoCivilId'])) ? $datosActor['infoGralActor']['estadoCivil_estadoCivilId'] : ''; ?></span>
			  </p>
			 
			  <p>
				<span>Nacionalidad:   </span>
				 <span id="nacionalidadId"><?=(isset($datosActor['infoGralActor']['nacionalidadId'])) ? $datosActor['infoGralActor']['nacionalidadId'] : ''; ?></span>
			  </p>
			
			</div> 
		</fieldset>	<!--Termina información general-->
		<?php echo br(3);?>
		<fieldset> <!--Detalles-->
		<legend>Detalles:   </legend>
		<div class="six columns">
	 
		 <div class="six columns">
		  <p>
				<span>Hijos:   </span>
				<span id="hijos" ><?=(isset($datosActor['infoGralActor']['hijos'])) ? $datosActor['infoGralActor']['hijos'] : ''; ?></span>
		  </p>
		 </div>
		  
		 <div class="six columns">									
		   <p>			
			<span>¿Habla español?:   </span>
			<span id="espaniol"><?=(isset($datosActor['infoGralActor']['espaniol'])) ? $datosActor['infoGralActor']['espaniol'] : ''; ?></span>
		  </p>
		 </div>
		
		 
		  <p>
			<span>Grupo Indígena:   </span>
				<span id="gruposIndigenas_grupoIndigenaId"><?=(isset($datosActor['infoGralActor']['gruposIndigenas_grupoIndigenaId'])) ? $datosActor['infoGralActor']['gruposIndigenas_grupoIndigenaId'] : ''; ?></span>
		  </p>

			
		</div>
		<div class="six columns">
		  
		 
		  <p>
			<span>Nivel de Escolaridad:   </span>
			<span id="escolaridadId"><?=(isset($datosActor['infoGralActor']['escolaridadId'])) ? $datosActor['infoGralActor']['escolaridadId'] : ''; ?></span>									 
		  </p>
		 
		  <p>						
			<span>Última Ocupación:   </span>
			<span id="ocupacionesCatalogo_ultimalOcupacionid"><?=(isset($datosActor['infoGralActor']['ocupacionesCatalogo_ultimalOcupacionid'])) ? $datosActor['infoGralActor']['ocupacionesCatalogo_ultimalOcupacionid'] : ''; ?></span>
			
		  </p>
		 
		</div>	
	</fieldset><!--Termina Detalles-->

		<?php echo br(3);?>		
				<fieldset>	
					  <legend>Información Migratoria</legend>
				
				<div class="twelve columns">
						<fieldset>		
							<legend>Lugar de origen</legend>
				
							<div class="four columns">		
								  <p>		
								<span >País: </span>
								<div id="paisesCatalogo_paisId"><?=(isset($datosActor['datosDeNacimiento']['paisesCatalogo_paisId'])) ? $datosActor['datosDeNacimiento']['paisesCatalogo_paisId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
								  <p>		
								<span>Estado: </span>
									<div id="estadosCatalogo_estadoId"><?=(isset($datosActor['datosDeNacimiento']['estadosCatalogo_estadoId'])) ? $datosActor['datosDeNacimiento']['estadosCatalogo_estadoId'] : ''; ?></div>
								  </p>
							</div>
							
							<div class="four columns">
							  <p>										
								<span>Municipio: </span>
									<div id="municipiosCatalogos_municipiosId" ><?=(isset($datosActor['datosDeNacimiento']['municipiosCatalogos_municipiosId'])) ? $datosActor['datosDeNacimiento']['municipiosCatalogos_municipiosId'] : ''; ?></div>
									</select>
							  </p>
							</div>
							
						</fieldset>	<!--Termina lugar de origen-->									
				</div>
					
				
				<div class="six columns">
				  <p>
					<span>País de tránsito: </span>
						<div id="paisTransitoId"><?=(isset($datosActor['infoMigratoria']['paisTransitoId'])) ? $datosActor['infoMigratoria']['paisTransitoId'] : ''; ?></div>
					  </p>
																
					  <p>
					<span>País destino: </span>
						<div id="paisDestinoId"><?=(isset($datosActor['infoMigratoria']['paisDestinoId'])) ? $datosActor['infoMigratoria']['paisDestinoId'] : ''; ?></div>
					  </p>
						
					
					  <p>
					<span>Intentos de cruce por el país de tránsito: </span>
						<div id="infoMigratoria_IntCrucesTransitoV" ><?=(isset($datosActor['infoMigratoria']['intCruceTransito'])) ? $datosActor['infoMigratoria']['intCruceTransito'] : ''; ?></div>
						
					  </p>
						
				<span>Comentarios:</span>
				  <div id="comentarios" ><?=(isset($datosActor['infoMigratoria']['comentarios'])) ? $datosActor['infoMigratoria']['comentarios'] : ''; ?></div>
				
				  <p>
				<span>Expulsiones del país de destino: </span>
					<div id="expCruceDestino"><?=(isset($datosActor['infoMigratoria']['expCruceDestino'])) ? $datosActor['infoMigratoria']['expCruceDestino'] : ''; ?></div>
				  </p>
					
					</div>
					<div class="six columns">
						
						
					  <p>
					<span>Motivo del viaje: </span>
						<div id="motivoViaje"><?=(isset($datosActor['infoMigratoria']['motivoViaje'])) ? $datosActor['infoMigratoria']['motivoViaje'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Tipo de estancia:</span>
						<div id="tipoEstanciaId"><?=(isset($datosActor['infoMigratoria']['tipoEstanciaId'])) ? $datosActor['infoMigratoria']['tipoEstanciaId'] : ''; ?></div>
					  </p>
						
						
					  <p>
					<span>Realiza el viaje:</span>
						<div id="realizaViaje" ><?=(isset($datosActor['infoMigratoria']['realizaViaje'])) ? $datosActor['infoMigratoria']['realizaViaje'] : ''; ?></div>
						
					
						
					  <p>								
					<span>Intentos de cruce al país destino: </span>
						<div id="intCrucesDest" ><?=(isset($datosActor['infoMigratoria']['intCrucesDest'])) ? $datosActor['infoMigratoria']['intCrucesDest'] : ''; ?></div>
					  </p>
						
					  <p>
					<span>Expulsiones del país de tránsito: </span>
						<div id="expCruceTransito"> <?=(isset($datosActor['infoMigratoria']['expCruceTransito'])) ? $datosActor['infoMigratoria']['expCruceTransito'] : ''; ?></div>
					  </p>
					 
				</div>
					
				</fieldset><!--Termina datos de nacimiento-->
			
	
				<?php echo br(1);?>

					<?=$relEntreActores; ?>
				<?php echo br(1);?>				
				
                        <input class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncTrans()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosTrans">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>
					
				<?php echo br(1);?>
</div>
<?php } ?>