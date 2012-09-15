<?php echo validation_errors(); ?>
<?php $editar_crear = (isset($editar)) ? 'editarActor' : 'agregarActor'; ?>
<?php $config=array('enctype'=>'image/jpeg'); echo form_open('actores_c/'.$editar_crear); ?>
<input type="hidden" value="1" name="actores_tipoActorId" />
<?php 
    if(isset($datosActor)){
        ?><input type="hidden" value="<?=$actorId ?>" name="actores_actorId" /><?php
    }
?>
<div	id="Actores" >
    <fieldset>
        <legend>Información general</legend>
            <div class="six columns"><!----Primer mitad de información general---->
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="actores_nombre" name="actores_nombre"  <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['nombre'].'"' : ''); ?> size="30" required />
                </p>

                <p>
                    <label for="apellidos">Apellidos</label>
                    
                    <input type="text" id="actores_apellidosSiglas" name="actores_apellidosSiglas" <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['apellidosSiglas'].'"' : ''); ?> size="60" required />

                </p>

                <p>
                    <label for="alias_alias">Alias</label>
                    <input type="text" id="alias_alias" name="alias_alias" <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['alias'].'"' : ''); ?> size="30" />

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
                        <label for="infoGralActor_generoid">Género</label>
                        <?php
                        if(isset($datosActor)){
                        if($datosActor[$actorId][$actorId]['generoId'] == 1){
                        ?>
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" checked="checked" value="1" /> Hombre
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="2" /> Mujer
                        <?php } else { ?>
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="1" /> Hombre
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" checked="checked" value="2" /> Mujer 
                         <?php }
                        } else { ?>
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" checked="checked" value="1" /> Hombre
                        <input type="radio" id="infoGralActor_generoid" name="infoGralActor_generoid" value="2" /> Mujer
                        <?php } ?>

                    </p>
                </div>

                <div class="four columns">

                    <p>
                        <label for="edad">Edad</label>
                        <select id="infoGralActor_edad" name="infoGralActor_edad">
                            <option></option>
                        <?php if(isset($datosActor)){
                            foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
                                <option value="<?=$item?>" <?=($datosActor[$actorId][$actorId]['edad'] == $item) ? 'selected="selected"' : '' ; ?>> <?=$item?></option>
                            <?php endforeach;
                        } else {
                            foreach($edad as $item):?> <!--muestra todas las edades de 1 a 100-->
                                <option value="<?=$item?>"> <?=$item?></option>
                            <?php endforeach;
                        } ?>
                        </select>
                    </p>

                </div>
				

				<div >	
                        <label for="estadoCivil">Estado Civil</label>
                        <span id="infoGralActor_estadoCivil_estadoCivilIdSelect" class="twelve columns">
                            <select id="infoGralActor_estadoCivil_estadoCivilId" name="infoGralActor_estadoCivil_estadoCivilId"  >
                                <option></option>
                                <?php if(isset($datosActor)){
                                    foreach($estadoCivil['estadoCivil'] as $key => $item): ?> <!--muestra los estados civiles-->
                                        <option  value="<?=$item['estadoCivilId']?>" <?=($datosActor[$actorId][$actorId]['estadoCivil_estadoCivilId'] == $item) ? 'selected="selected"' : '' ; ?> > <?=$item['descripcion']?></option>
                                    <?php endforeach; } else { ?>
                                    <?php foreach($estadoCivil['estadoCivil'] as $key => $item):?> <!--muestra los estados civiles-->
                                        <option  value="<?=$item['estadoCivilId']?>" > <?=$item['descripcion']?></option>
                                    <?php endforeach; } ?>
                            </select>
                            <input id="BotonmasinfoGralActor_estadoCivil_estadoCivilId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
                        </span>
						<span id="TextoEspecial_infoGralActor_estadoCivil_estadoCivilId" class="Escondido twelve columns">
						</span>
				</div> 
                 


                    <div >
						<br /><br />
                        <label for="nacionalidad">Nacionalidad</label>
						<span class="twelve columns" id="infoGralActor_nacionalidadIdSelect">
                        <select id="infoGralActor_nacionalidadId" name="infoGralActor_nacionalidadId">						
						<option > </option>
                        <?php foreach($nacionalidad as $key => $item):?> <!--muestra todas las nacionalidades-->
                                <option value="<?=$item?>"><?=$key?></option>
                        <?php endforeach;?>
                        </select>
						<input id="BotonmasinfoGralActor_nacionalidadId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
                        </span>
						<span id="TextoEspecial_infoGralActor_nacionalidadId" class="Escondido twelve columns">
						</span>
                    </div>

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
								<option > </option>
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


                <label for="grupoIndigena">Grupo Indígena</label>
						<span class="twelve columns" id="infoGralActor_gruposIndigenas_grupoIndigenaIdSelect">
                        <select id="infoGralActor_gruposIndigenas_grupoIndigenaId" name="infoGralActor_gruposIndigenas_grupoIndigenaId">
							<option > </option>
                        <?php foreach($grupoIndigena['gruposIndigenas'] as $key => $item):?> 
                                <option value="<?=$item['grupoIndigenaId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
                        </select>
						<input id="BotonmasinfoGralActor_gruposIndigenas_grupoIndigenaId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
                        </span>
						<span id="TextoEspecial_infoGralActor_gruposIndigenas_grupoIndigenaId" class="Escondido twelve columns">
						</span>



                </div><!----Termina primer mitad de detalles---->

                <div class="six columns"><!----Segunda mitad de detalles---->


                        <label for="nivelEscolaridad">Nivel de Escolaridad</label>
                    <span class="twelve columns" id="infoGralActor_escolaridadIdSelect">
                        <select id="infoGralActor_escolaridadId" name="infoGralActor_escolaridadId">						
							<option > </option>
                        <?php foreach($escolaridad as $key => $item):?> 
                                <option value="<?=$item?>"><?=$key?></option>
                        <?php endforeach;?>
                        </select>
					<input id="BotonmasinfoGralActor_escolaridadId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_escolaridadId" class="Escondido twelve columns">
					</span>


                        <label for="UltimaOcupacion">Última Ocupación</label>
                    <span class="twelve columns" id="infoGralActor_OcupacionesCatalogo_UltimaOcupacionIdSelect" >
                        <select id="infoGralActor_OcupacionesCatalogo_UltimaOcupacionId" name="infoGralActor_OcupacionesCatalogo_UltimaOcupacionId">						
							<option > </option>
                        <?php foreach($ultimaOcupacion['ocupacionesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['ocupacionId']; ?>"><?=$item['descripcion']; ?></option>
                        <?php endforeach;?>
                        </select>
					<input id="BotonmasinfoGralActor_OcupacionesCatalogo_UltimaOcupacionId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_OcupacionesCatalogo_UltimaOcupacionId" class="Escondido twelve columns">
					</span>



                </div>	<!----Termina segunda mitad de detalles---->

        </fieldset><!--Termina Detalles-->

        <?php echo br(3);?>

        <fieldset><!----Datos de Nacimiento ---->
                    <legend>Datos de Nacimiento</legend>
                <div class="six columns"><!----Primer mitad de datos de Nacimiento ---->

                        <label for="pais">País</label>
                    <span class="twelve columns" id="datosDeNacimiento_paisesCatalogo_paisIdSelect">
                        <select id="datosDeNacimiento_paisesCatalogo_paisId" name="datosDeNacimiento_paisesCatalogo_paisId">						
							<option > </option>
                        <?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>
					<input id="BotonmasdatosDeNacimiento_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_datosDeNacimiento_paisesCatalogo_paisId" class="Escondido twelve columns">
					</span>


                        <label for="estado">Estado</label>
                    <span class="twelve columns" id="datosDeNacimiento_estadosCatalogo_estadoIdSelect">
                        <select id="datosDeNacimiento_estadosCatalogo_estadoId" name="datosDeNacimiento_estadosCatalogo_estadoId">						
							<option > </option>
                        <?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>
					<input id="BotonmasinfoGralActor_OcupacionesCatalogo_UltimaOcupacionId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
					</span>
					<span id="TextoEspecial_infoGralActor_OcupacionesCatalogo_UltimaOcupacionId" class="Escondido twelve columns">
					</span>


                    </div><!----Termina primer mitad de datos de Nacimiento ---->

                <div class="six columns"><!----Segunda mitad de datos de Nacimiento ---->

                    <label for="municipio">Municipio</label>
                    <span id="datosDeNacimiento_municipiosCatalogo_municipioIdSelect" class="twelve columns" >
                        <select id="datosDeNacimiento_municipiosCatalogo_municipioId" name="datosDeNacimiento_municipiosCatalogo_municipioId">						
							<option > </option>
                        <?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
                                <option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
                        <?php endforeach;?>
                        </select>
						<input id="BotonmasdatosDeNacimiento_municipiosCatalogo_municipioId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_datosDeNacimiento_municipiosCatalogo_municipioId" class="Escondido twelve columns">
					</span>

                    <p>
                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="text" id="datepicker"name="datosDeNacimiento_fechaNacimiento" <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['fechaNacimiento'].'"' : ''); ?> placeholder="AAAA-MM-DD" />

                    </p>

                </div>  <!----Termina segunda mitad de datos de Nacimiento ---->

        </fieldset><!--Termina datos de nacimiento-->

        <?php echo br(3);?>

        <fieldset><!--Información de contacto-->

                    <legend>Información de contacto</legend>
                <div class="six columns"> <!--Primer mitad de información de contacto-->

                    <p>
                    <label for="telefono">Teléfono</label>
                        <input type="text" id="infoContacto_telefono" name="infoContacto_telefono"  <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['telefono'].'"' : ''); ?>  size="30" />
                   </p>

                    <p>
                    <label for="infoContacto_telefonoMovil">Teléfono móvil</label>
                        <input type="text" id="infoContacto_telefonoMovil" name="infoContacto_telefonoMovil" <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['telefonoMovil'].'"' : ''); ?> size="30" />
                    </p>
                    
                </div><!--Termina primer mitad de la nformación de contacto--->

                <div class="six columns"><!--Segunda mitad de nformación de contacto--->

                    <p>
                <label for="infoContacto_correoE">Correo electrónico</label>
                        <input type="email" id="infoContacto_correoE" name="infoContacto_correoE"  <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['correoE'].'"' : ''); ?>  size="60"  />
                    </p>
                </div>  <!--Segunda mitad de nformación de contacto--->

        </fieldset><!--Termina información del contacto-->

        <?php echo br(3);?>

        <fieldset>
                    <legend>Dirección</legend>
                <div class="six columns">

                        <label for="direccionActor_tipoDireccionId">Tipo de dirección</label>
                    <span class="twelve columns" id="direccionActor_tipoDireccionIdSelect">
							<select  id="direccionActor_tipoDireccionId" name="direccionActor_tipoDireccionId">			
							<option > </option>
								<?php foreach($tipoDir as $item):?> 
														<option value="<?=$item?>"><?=$item?></option>
								<?php endforeach;?>
							</select>
							<input id="BotonmasdireccionActor_tipoDireccionId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_direccionActor_tipoDireccionId" class="Escondido twelve columns">
					</span>

                    
                    <p>
                        <label for="direccionActor_direccion">Ubicación</label>
                                <input type="text" id="direccionActor_direccion" name="direccionActor_direccion"  <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['direccion'].'"' : ''); ?>  size="30"  />
                    </p>


                <p>
                        <label for="actores_codigoPostal">Código Postal</label>
                                <input type="text" id="actores_codigoPostal" name="actores_codigoPostal"  <?=(isset($datosActor) ? 'value="'.$datosActor[$actorId][$actorId]['codigoPostal'].'"' : ''); ?>  size="30"  />
                    </p>

                </div>
                <div class="six columns">


                        <label for="paisdir">País</label>
                    <span class="twelve columns" id="direccionActor_paisesCatalogo_paisIdSelect">
                                <select id="direccionActor_paisesCatalogo_paisId" name="direccionActor_paisesCatalogo_paisId">						
							<option > </option>
                                <?php foreach($lugares['paisesCatalogo'] as $key => $item):?> 
                                    <option value="<?=$item['paisId']; ?>"><?=$item['nombre']; ?></option>
                                <?php endforeach;?>
                                </select>
							<input id="BotonmasdireccionActor_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
						</span>
						<span id="TextoEspecial_direccionActor_paisesCatalogo_paisId" class="Escondido twelve columns">
					</span>






<!----/**************************************************************/---->										


		<span class="twelve columns" id="direccionActor_estadosCatalogo_estadoIdSelect">
				<label for="estadodir">Estado</label>
							<select id="direccionActor_estadosCatalogo_estadoId" name="direccionActor_estadosCatalogo_estadoId">						
							<option > </option>
								<?php foreach($lugares['estadosCatalogo'] as $key => $item):?> 
								<option value="<?=$item['estadoId']; ?>"><?=$item['nombre']; ?></option>
								<?php endforeach;?>
							</select>	
				<input id="BotonmasdireccionActor_paisesCatalogo_paisId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
			</span>
			<span id="TextoEspecial_direccionActor_paisesCatalogo_paisId" class="Escondido twelve columns">
		</span>

			
	<?php echo br(1);?>
			<label for="municipiodir">Municipio</label>
			<span class="twelve columns" id="direccionActor_municipiosCatalogo_municipioIdSelect">
					<select id="direccionActor_municipiosCatalogo_municipioId" name="direccionActor_municipiosCatalogo_municipioId">						
							<option > </option>
						<?php foreach($lugares['municipiosCatalogo'] as $key => $item):?> 
						<option value="<?=$item['municipioId']; ?>"><?=$item['nombre']; ?></option>
						<?php endforeach;?>
					</select>
					<input id="BotonmasdireccionActor_municipiosCatalogo_municipioId" type="button" class="tiny button"  value="+" onclick="mostrarTexto(this)" />	
				</span>
				<span id="TextoEspecial_direccionActor_municipiosCatalogo_municipioId" class="Escondido twelve columns"></span>


        </fieldset><!--Termina datos dirección-->

				<?php echo br(1);?>
		<div class="row">
		<div  class="four columns offset-by-eight" >
			
		<input class="medium button" type="submit" value="Guardar" />
		<input class="medium button" type="reset" value="Cancelar"  onclick="mostrarIndividual()" />
		</div>
		</div>
<?php echo br(2);?>
</div>
</form>	



