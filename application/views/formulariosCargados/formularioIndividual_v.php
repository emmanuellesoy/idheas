        <div	id="ActoresV" >
                        <fieldset>
                                    <legend>Información general</legend>
                                <div class="six columns">

                                    <p>
                                        <span >Nombre: </span>
                                        <span id="nombre"><?=(isset($datosActor)) ? $datosActor[$actorId]['nombre'] : ''; ?></span>
                                    </p>

                                    <p>
                                        <span >Apellidos: </span>
                                        <span id="apellidosSiglas"><?=(isset($datosActor)) ? $datosActor[$actorId]['apellidosSiglas'] : ''; ?></span>

                                    </p>

                                    <p>
                                        <span >Alias: </span>
                                        <span id="alias"><?=(isset($datosActor)) ? $datosActor[$actorId]['alias'] : ''; ?></span> 

                                    </p>

                                    </div>

                                <div class="six columns">

                                <div class="six columns">

                                    <p>
                                        <span >Género:

                                        </span>
                                        <span id="generoId"><?=(isset($datosActor)) ? $datosActor[$actorId]['generoId'] : ''; ?></span>

                                    </p>
                                </div>

                                <div class="six columns">

                                    <p>
                                        <span >Edad: </span>
                                        <span id="edad"><?=(isset($datosActor)) ? $datosActor[$actorId]['edad'].' años' : ''; ?></span>
                                    </p>
                                </div>

                                    <p>
                                        <span >Estado Civil: </span>
                                        <span id="estadoCivil_estadoCivilId"><?=(isset($datosActor)) ? $datosActor[$actorId]['estadoCivil_estadoCivilId'] : ''; ?></span>
                                    </p>

                                    <p>
                                        <span >Nacionalidad: </span>
                                            <span id="nacionalidadId"><?=(isset($datosActor)) ? $datosActor[$actorId]['nacionalidadId'] : ''; ?></span>
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
                                                <span id="hijos" ><?=(isset($datosActor)) ? $datosActor[$actorId]['hijos'] : ''; ?></span>
                                    </p>
                                    </div>

                                    <div class="six columns">									
                                    <p>			
                                        <span >¿Habla español?:   </span>
                                        <span id="espaniol"><?=(isset($datosActor)) ? $datosActor[$actorId]['espaniol'] : ''; ?></span>
                                    </p>
                                    </div>


                                    <p>
                                        <span >Grupo Indígena:   </span>
                                                <span id="gruposIndigenas_grupoIndigenaId"><?=(isset($datosActor)) ? $datosActor[$actorId]['gruposIndigenas_grupoIndigenaId'] : ''; ?></span>
                                    </p>


                                </div>
                                <div class="six columns">


                                    <p>
                                        <span >Nivel de Escolaridad:   </span>
                                        <span id="escolaridadId"><?=(isset($datosActor)) ? $datosActor[$actorId]['escolaridadId'] : ''; ?></span>									 
                                    </p>

                                    <p>						
                                        <span >Última Ocupación:   </span>
                                        <span id="ocupacionesCatalogo_ultimaOcupacionId"><?=(isset($datosActor)) ? $datosActor[$actorId]['ocupacionesCatalogo_ultimaOcupacionId'] : ''; ?></span>

                                    </p>

                                </div>	
                        </fieldset><!--Termina Detalles-->


                        <?php echo br(3);?>

                        <fieldset>
                                    <legend>Datos de Nacimiento:   </legend>
                                <div class="six columns">

                                    <p>
                                        <span >País:   </span>
                                        <span id="paisesCatalogo_paisId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></span>										
                                    </p>

                                    <p>
                                        <span >Estado:   </span>
                                        <span id="paisesCatalogo_paisId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></span>

                                    </p>
                                    </div>
                                <div class="six columns">

                                    <p>
                                        <span >Municipio:   </span>
                                        <span id="municipiosCatalogo_municipioId"><?=(isset($datosActor)) ? $datosActor[$actorId]['municipiosCatalogo_municipioId'] : ''; ?></span>

                                    </p>

                                    <p>
                                        <span >Fecha de nacimiento:   </span>
                                        <span id="fechaNacimiento"><?=(isset($datosActor)) ? $datosActor[$actorId]['fechaNacimiento'] : ''; ?></span>
                                    </p>

                                </div>  
                        </fieldset><!--Termina datos de nacimiento-->

                        <?php echo br(3);?>

                        <fieldset>
                                    <legend>Información de contacto:   </legend>
                                <div class="six columns">

                                    <p>
                                <span >Teléfono:   </span>
                                        <span id="telefono"><?=(isset($datosActor)) ? $datosActor[$actorId]['telefono'] : ''; ?></span>
                                    </p>

                                    <p>
                                <span >Teléfono móvil:   </span>
                                        <span id="telefonoMovil"><?=(isset($datosActor)) ? $datosActor[$actorId]['telefonoMovil'] : ''; ?></span> 
                                    </p>
                                    </div>
                                <div class="six columns">

                                    <p>
                                <span >Correo electrónico:   </span>
                                        <span id="correoE"><?=(isset($datosActor)) ? $datosActor[$actorId]['correoE'] : ''; ?></span>
                                    </p>
                                </div>  
                        </fieldset><!--Termina información del contacto-->

                        <?php echo br(3);?>

                        <fieldset>
                                    <legend>Dirección:   </legend>
                                <div class="six columns"> 

                                    <p>
                                        <span>Tipo de dirección:   </span>
                                        <span id="tipoDireccionId"><?=(isset($datosActor)) ? $datosActor[$actorId]['tipoDireccionId'] : ''; ?></span>

                                    </p>
                                    <p>

                                        <span>Ubicación:   </span>
                                                <span id="direccion"><?=(isset($datosActor)) ? $datosActor[$actorId]['direccion'] : ''; ?></span>
                                    </p>


                                <p>
                                        <span>Código Postal:   </span>
                                                <span id="codigoPostal"><?=(isset($datosActor)) ? $datosActor[$actorId]['codigoPostal'] : ''; ?></span>
                                    </p>

                                </div>

                                <div class="six columns">


                                <p>
                                        <span>País:   </span>
                                                <span id="paisesCatalogo_paisId"><?=(isset($datosActor)) ? $datosActor[$actorId]['paisesCatalogo_paisId'] : ''; ?></span>
                                </p>				

                                <p>

                                        <span>Estado:   </span>

                                                        <span id="estadosCatalogo_estadoId"><?=(isset($datosActor)) ? $datosActor[$actorId]['estadosCatalogo_estadoId'] : ''; ?></span>

                                </p>

<!----/**************************************************************/---->									


                                <p>
                                        <span>Municipio:   </span>
                                                <span id="municipiosCatalogo_municipioId"><?=(isset($datosActor)) ? $datosActor[$actorId]['municipiosCatalogo_municipioId'] : ''; ?></span>
                                </p>	




                                </div>
                        </fieldset><!--Termina datos dirección-->


                <?php echo br(1);?>

                
                <?php echo br(1);?>
        <input id="mostrarEstadodir" class="[tiny, small, medium, large] button"   type='button' onclick="mostrarfuncInd()" value='Mostrar casos'>
    <div class="Escondido" id="mostrarCasosIndividual">
        <div class="twelve columns">
            <?php echo $casosMenu?>
        </div>
    </div>
</div>


