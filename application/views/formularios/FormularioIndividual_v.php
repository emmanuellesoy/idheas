<?php echo validation_errors(); ?>
<?php $config=array('enctype'=>'image/jpeg'); echo form_open('actores_c/agregarActor'); ?>
<input type="hidden" value="1" name="actores_tipoActorId" />
<div	id="Actores" >
    <fieldset>
        <legend>Información general</legend>
            <div class="six columns"><!----Primer mitad de información general---->
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="actores_nombre" name="actores_nombre"  required />
                </p>

                <p>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="actores_apellidosSiglas" name="actores_apellidosSiglas" value="<?php echo set_value('apellidosSiglas'); ?>"  required />

                </p>

                <p>
                    <label for="alias">Alias</label>
                    <input type="text" id="alias_alias" name="alias_alias" value="<?php echo set_value('alias'); ?>"  />

                </p>
            </div><!----Termina primer mitad de información general---->
            <div class="six columns"><!----Segunda mitad de información general---->

				<div class="twelve columns">	
					<p>
					<label >Foto </label>
					<input type="file" name="actores_foto" size="15"/>
					</p>
				</div>

                <div class="eight columns">				
				
                    <p>
                        <label for="genero">Género</label>
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="1" /> Hombre
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="2" /> Mujer

                    </p>
                </div>

                <div class="four columns">

                    <p>
                        <label for="edad">Edad</label>
                        <select id="infoGralActor_edad" name="infoGralActor_edad">						
                        <?php foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->

                                <option value="<?=$item?>"> <?=$item?></option>
                        <?php endforeach;?>
                        </select>
                    </p>

                </div>
				

				<div class="twelve columns">					
                    <p id="infoGralActor_estadoCivil_estadoCivilIdSelect" class="eleven columns">
                        <label for="estadoCivil">Estado Civil</label>
                        <select id="infoGralActor_estadoCivil_estadoCivilId" name="infoGralActor_estadoCivil_estadoCivilId">						
                        <?php foreach($estadoCivil['estadoCivil'] as $key => $item):?> <!--muestra los estados civiles-->
                                <option  value="<?=$item['estadoCivilId']?>"> <?=$item['descripcion']?></option>
                        <?php endforeach;?>
                        </select>
                    </p>
                 </div> 
                 
                    <p class="one columns">
						<input id="BotonmasinfoGralActor_estadoCivil_estadoCivilId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</p>	  
				<div id="TextoEspecial_infoGralActor_estadoCivil_estadoCivilId" class="Escondido twelve columns">
					ñlSDMÑLASM DÑL
					ÑLDSMFÑALSMDÑLSAM
						<input id="BotonmenosinfoGralActor_estadoCivil_estadoCivilId" type="button" class="tiny button"  value="-" onclick="mostrarTexto(this)" />	
				</div>

                    <p>
                        <label for="nacionalidad">Nacionalidad</label>
                        <select id="infoGralActor_nacionalidadId" name="infoGralActor_nacionalidadId">						
                        <?php foreach($nacionalidad as $key => $item):?> <!--muestra todas las nacionalidades-->
                                <option value="<?=$item?>"><?=$key?></option>
                        <?php endforeach;?>
                        </select>
                    </p>

                </div> 	<!----Segunda mitad de información general---->

        </fieldset>	<!--Termina información general-->

        <?php echo br(3);?>

        <fieldset><!----Detalles---->
                    <legend>Detalles</legend>
                <div class="six columns"><!----Primer mitad de detalles---->

                    <div class="six columns">
                    <p>
                                <label for="hijos">Hijos</label>
                                <select id="infoGralActor_hijos" name="infoGralActor_hijos">						
                                <?php foreach($edad as $item):?> 
                                        <option value="<?=$item?>"><?=$item?></option>
                                <?php endforeach;?>
                                </select>
                    </p>
                    </div>

                    <div class="six columns">									
                    <p>			
                        <label for="genero">¿Habla español?</label>
                        <input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol" checked="checked" value="1" /> Si
                        <input type="radio" id="infoGralActor_espaniol" name="infoGralActor_espaniol" value="2" /> No

                    </p>
                    </div>


                    <p>
                <label for="grupoIndigena">Grupo Indígena</label>
                        <select id="infoGralActor_gruposIndigenas_grupoIndigenaId" name="infoGralActor_gruposIndigenas_grupoIndigenaId">
                        <?php foreach($grupoIndigena['gruposIndigenas'] as $key => $item):?> 
                                <option value="<?=$item['grupoIndigenaId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
                        </select>

                    </p>


                </div><!----Termina primer mitad de detalles---->

                <div class="six columns"><!----Segunda mitad de detalles---->


                    <p>
                        <label for="nivelEscolaridad">Nivel de Escolaridad</label>
                        <select id="infoGralActor_escolaridadId" name="infoGralActor_escolaridadId">						
                        <?php foreach($escolaridad as $key => $item):?> 
                                <option value="<?=$item?>"><?=$key?></option>
                        <?php endforeach;?>
                        </select>

                    </p>

                    <p>						
                        <label for="UltimaOcupacion">Última Ocupación</label>
                        <select id="infoGralActor_OcupacionesCatalogo_UltimaOcupacionId" name="infoGralActor_OcupacionesCatalogo_UltimaOcupacionId">						
                        <?php foreach($ultimaOcupacion['ocupacionesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['ocupacionId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
                        </select>

                    </p>

                </div>	<!----Termina segunda mitad de detalles---->

        </fieldset><!--Termina Detalles-->

        <?php echo br(3);?>

        <fieldset><!----Datos de Nacimiento ---->
                    <legend>Datos de Nacimiento</legend>
                <div class="six columns"><!----Primer mitad de datos de Nacimiento ---->

                    <p>
                        <label for="pais">País</label>
                        <select id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId">						
                        <?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>

                    </p>

                    <p>
                        <label for="estado">Estado</label>
                        <select id="datosDeNacimiento_estadosCatalogo_estadoId" name="datosDeNacimiento_estadosCatalogo_estadoId">						
                        <?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>

                    </p>
                    </div><!----Termina primer mitad de datos de Nacimiento ---->

                <div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->

                    <p>
                        <label for="municipio">Municipio</label>
                        <select id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId">						
                        <?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>

                    </p>

                    <p>
                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="text" id="datepicker"name="datosDeNacimiento_fechaNacimiento" value="<?php echo set_value('fechaNacimiento'); ?>" placeholder="AAAA-MM-DD" />

                    </p>

                </div>  <!----Termina segunda mitad de datos de Nacimiento ---->

        </fieldset><!--Termina datos de nacimiento-->

        <?php echo br(3);?>

        <fieldset><!--Información de contacto--->
                    <legend>Información de contacto</legend>
                <div class="six columns"><!--Primer mitad de información de contacto--->

                    <p>
                    <label for="telefono">Teléfono</label>
                        <input type="text" id="infoContacto_telefono" name="infoContacto_telefono" value="<?php echo set_value('telefono'); ?>"  />
                   </p>

                    <p>
                    <label for="infoContacto_telefonoMovil">Teléfono móvil</label>
                        <input type="text" id="infoContacto_telefonoMovil" name="infoContacto_telefonoMovil" value="<?php echo set_value('telefonomovil'); ?>"  />
                    </p>
                    
                </div><!--Termina primer mitad de la nformación de contacto--->

                <div class="six columns"><!--Segunda mitad de nformación de contacto--->

                    <p>
                <label for="infoContacto_correoE">Correo electrónico</label>
                        <input type="email" id="infoContacto_correoE" name="infoContacto_correoE" value="<?php echo set_value('correo'); ?>"  />
                    </p>
                </div>  <!--Segunda mitad de nformación de contacto--->

        </fieldset><!--Termina información del contacto-->

        <?php echo br(3);?>

        <fieldset>
                    <legend>Dirección</legend>
                <div class="six columns">

                    <p>
                        <label for="direccionActor_tipoDireccionId">Tipo de dirección</label>
                        <select  id="direccionActor_tipoDireccionId" name="direccionActor_tipoDireccionId">			
                        <?php foreach($tipoDir as $item):?> 
                                                <option value="<?=$item?>"><?=$item?></option>
                        <?php endforeach;?>
                        </select>

                    </p>
                    
                    <p>
                        <label for="direccionActor_direccion">Ubicación</label>
                                <input type="text" id="direccionActor_direccion" name="direccionActor_direccion" value="<?php echo set_value('ubicacion'); ?>" size="30"  />
                    </p>


                <p>
                        <label for="actores_codigoPostal">Código Postal</label>
                                <input type="text" id="actores_codigoPostal" name="actores_codigoPostal" value="<?php echo set_value('codigoPos'); ?>" size="30"  />
                    </p>

                </div>
                <div class="six columns">


                <p>
                        <label for="paisdir">País</label>
                                <select id="direccionActor_paisesCatalogo_paisId" name="direccionActor_paisesCatalogo_paisId">						
                                <?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                    <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                                <?php endforeach;?>
                                </select>
                </p>






<!----/**************************************************************/---->										

                <p>

						<div class="six columns">
							<label for="estadodir">Estado</label>
										<select id="direccionActor_estadosCatalogo_estadoId" name="direccionActor_estadosCatalogo_estadoId">						
										<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
										</select>	

						</div>
						
						<div class="six columns">
							<label >Agregar</label>
									<input  type='button' onclick="agregarQuitar()" value='Agregar Campo'>
									<div class="Escondido" id="mostrarEstadodirInd">
									
									<div class="seven columns">
											<input  type='text' id="opcionTipoDirInd" >	
				
									</div>
									<div class="five columns">
											<input  type="button" onclick="AgrearEstadodirInd()" value='+'  >

											<input  type='button' onclick="QuitarEstadodirInd()" value='-'  >
									</div>
								</div>
						</div>						

				<?php echo br(1);?>
                <p>
                        <label for="municipiodir">Municipio</label>
                                <select id="direccionActor_municipiosCatalogo_municipioId" name="direccionActor_municipiosCatalogo_municipioId">						
                                <?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                                </select>
                </p>	


                </div>
        </fieldset><!--Termina datos dirección-->

				<?php echo br(1);?>
		<div class="row">
		<div  class="four columns offset-by-eight" >
			
		<input class="medium button" type="submit" value="Guardar" />
		<input class="medium button" type="reset" value="Cancelar" />
		</div>
		</div>
<?php echo br(2);?>
</div>
</form>	


