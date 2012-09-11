
			<div	id="ActoresV" >
					<fieldset>
						  <legend>Información general</legend>
						<div class="six columns">
						 
						  <p>
							<span >Nombre: </span>
							<span id="nombre"></span>
						  </p>
						 
						  <p>
							<span >Apellidos: </span>
							<span id="apellidosSiglas"></span>
						 
						  </p>
						 
						  <p>
							<span >Alias: </span>
							<span id="alias"></span> 
						  
						  </p>
						  
						  </div>
						  
						<div class="six columns">
						  
						<div class="six columns">
						 
						  <p>
							<span >Género:

                                                        </span>
							<span id="generoId"></span>
						
						  </p>
						</div>
						
						<div class="six columns">
						  
						  <p>
							<span >Edad: años</span>
							<span id="edad"></span>
						  </p>
						</div>
						 
						  <p>
							<span >Estado Civil: </span>
							<span id="estadoCivil_estadoCivil"></span>
						  </p>
						 
						  <p>
							<span >Nacionalidad: </span>
							 <span id="nacionalidadId"></span>
						  </p>
						
						</div> 
					</fieldset>	<!--Termina información general-->
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Detalles:   </legend>
						<div class="six columns">
					 
						 <div class="six columns">
						  <p>
								<span >Hijos:   </span>
								<span id="hijos" ></span>
						  </p>
						 </div>
						  
						 <div class="six columns">									
						   <p>			
							<span >¿Habla español?:   </span>
							<span id="espaniol"></span>
						  </p>
						 </div>
						
						 
						  <p>
							<span >Grupo Indígena:   </span>
								<span id="gruposIndigenas_grupoIndigenaId"></span>
						  </p>
				
							
						</div>
						<div class="six columns">
						  
						 
						  <p>
							<span >Nivel de Escolaridad:   </span>
							<span id="escolaridadId"></span>									 
						  </p>
						 
						  <p>						
							<span >Última Ocupación:   </span>
							<span id="ocupacionesCatalogo_ultimaOcupacionId"></span>
							
						  </p>
						 
						</div>	
					</fieldset><!--Termina Detalles-->
					
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Datos de Nacimiento:   </legend>
						<div class="six columns">
						 
						  <p>
							<span >País:   </span>
							<span id="paisesCatalogo_paisId"></span>										
						  </p>
						 
						  <p>
							<span >Estado:   </span>
							<span id="estadosCatalogo_estadoId"></span>
							
						  </p>
						  </div>
						<div class="six columns">
						 
						  <p>
							<span >Municipio:   </span>
							<span id="municipiosCatalogo_municipioId"></span>
						 
						  </p>
						 
						  <p>
							<span >Fecha de nacimiento:   </span>
							<span id="fechaNacimiento"></span>
						  </p>
															  
						</div>  
					</fieldset><!--Termina datos de nacimiento-->
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Información de contacto:   </legend>
						<div class="six columns">
						 
						  <p>
						<span >Teléfono:   </span>
							<span id="telefono"></span>
						  </p>
						  
						  <p>
						<span >Teléfono móvil:   </span>
							<span id="telefonoMovil"></span> 
						  </p>
						  </div>
						<div class="six columns">
						  
						  <p>
						<span >Correo electrónico:   </span>
							<span id="correoE"></span>
						  </p>
						</div>  
					</fieldset><!--Termina información del contacto-->
					
					<?php echo br(3);?>
					
					<fieldset>
						  <legend>Dirección:   </legend>
						<div class="six columns"> 
						  
						 <p>
							<span>Tipo de dirección:   </span>
							<span id="tipoDireccionId"></span>
						 
						 </p>
						 <p>
							 
							<span>Ubicación:   </span>
								<span id="direccion"></span>
						 </p>
						 
						 
						<p>
							<span>Código Postal:   </span>
								<span id="codigoPostal"></span>
						 </p>
						 
						</div>
						 
						<div class="six columns">
						

						<p>
							<span>País:   </span>
								<span id="paisesCatalogo_paisId"></span>
						</p>				

						<p>
						
							<span>Estado:   </span>

									<span id="estadosCatalogo_estadoId"></span>
						
						</p>

<!----/**************************************************************/---->									
						

						<p>
							<span>Municipio:   </span>
								<span id="municipiosCatalogo_municipioId"></span>
						</p>	
						
						 
							
							
						</div>
					</fieldset><!--Termina datos dirección-->
						
				
				<?php echo br(1);?>
				
				
                        <input id="mostrarEstadodir" class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncInd()" value='Mostrar casos'>

                        <div class="Escondido" id="mostrarCasosIndividual">
                                <div class="twelve columns">
									<?php echo $casosMenu?>
                                </div>
                        </div>

                </div>

				
