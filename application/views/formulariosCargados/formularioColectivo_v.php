
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span >Nombre:   </span>
				<span id="nombre_colectivo"></span>
			  </p>
			 
			  <p>
				<span >Siglas:  </span>
				<span id="apellidosSiglas_colectivo"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Tipo de actor colectivo:  </span>
				<span id="tipoActorColectivoId_colectivo"></span>
			 
			  </p>
			
				
			  <p>
				<span >Actividad:  </span>
				<span id="actividad_colectivo"></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		
		<?php echo br(3);?>
		
		<fieldset> <!--Dirección-->
			  <legend>Dirección</legend>
			<div class="six columns">
			 
			  <p>
				<span >Ubicación:   </span>
				<span id="direccion_colectivo"></span>
			  </p>
			 
			  <p>
				<span >País:  </span>
				<span id="paisesCatalogo_paisId_colectivo"></span>
			 
			  </p>
			 
			  <p>
				<span >Estado:  </span>
				<span id="estadosCatalogo_estadoId_colectivo"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Municipio:  </span>
				<span id="municipiosCatalogo_municipioId_colectivo"></span>
			 
			  </p>
			
				
			  <p>
				<span >Código postal:  </span>
				<span id="actores_codigoPostal_colectivo"></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		<?php echo br(3);?>
		
		
		<fieldset> <!--Dirección-->
			  <legend>Información de contacto</legend>
			<div class="six columns">
			 
			  <p>
				<span >Teléfono:   </span>
				<span id="telefono_colectivo"></span>
			  </p>
			 
			  <p>
				<span >Fax:  </span>
				<span id="fax_colectivo"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Correo electrónico:  </span>
				<span id="correoE_colectivo"></span>
			 
			  </p>
			
				
			  <p>
				<span >Página web:  </span>
				<span id="paginaWeb_colectivo"></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		<?php echo br(1);?>
				
				
                        <input id="mostrarEstadodir" class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncCol()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosCol">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>
					
				<?php echo br(1);?>
</div>
