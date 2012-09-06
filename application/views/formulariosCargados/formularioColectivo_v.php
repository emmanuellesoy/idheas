
<div	id="ActoresV" >
		<fieldset> <!--Información general-->
			  <legend>Información general</legend>
			<div class="six columns">
			 
			  <p>
				<span >Nombre:   </span>
				<span id="actores_nombreV"></span>
			  </p>
			 
			  <p>
				<span >Siglas:  </span>
				<span id="actores_apellidosSiglasV"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Tipo de actor colectivo:  </span>
				<span id="infoGralActores_tipoActorColectivoIdV"></span>
			 
			  </p>
			
				
			  <p>
				<span >Actividad:  </span>
				<span id="infoGralActores_actividadV"></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		
		<?php echo br(3);?>
		
		<fieldset> <!--Dirección-->
			  <legend>Dirección</legend>
			<div class="six columns">
			 
			  <p>
				<span >Ubicación:   </span>
				<span id="direccionActor_direccionV"></span>
			  </p>
			 
			  <p>
				<span >País:  </span>
				<span id="direccionActor_paisesCatalogo_paisIdV"></span>
			 
			  </p>
			 
			  <p>
				<span >Estado:  </span>
				<span id="direccionActor_estadosCatalogo_estadoIdV"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Municipio:  </span>
				<span id="direccionActor_municipiosCatalogo_municipioIdV"></span>
			 
			  </p>
			
				
			  <p>
				<span >Código postal:  </span>
				<span id="actores_codigoPostalV"></span>
			  </p>
			
			</div>
		</fieldset>	<!--Termina información general-->
		<?php echo br(3);?>
		
		
		<fieldset> <!--Dirección-->
			  <legend>Información de contacto</legend>
			<div class="six columns">
			 
			  <p>
				<span >Teléfono:   </span>
				<span id="infoContacto_telefonoV"></span>
			  </p>
			 
			  <p>
				<span >Fax:  </span>
				<span id="infoContacto_faxV"></span>
			 
			  </p>
			 
			</div> 
			
			
			<div class="six columns">
				
			  <p>
				<span >Correo electrónico:  </span>
				<span id="infoContacto_correoEV"></span>
			 
			  </p>
			
				
			  <p>
				<span >Página web:  </span>
				<span id="infoGralActores_paginaWebV"></span>
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
