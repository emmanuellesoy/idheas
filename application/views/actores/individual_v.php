<fieldset>
    <legend>Información general</legend>
    <div class="four columns">
        <h6>Nombre<h6>
        <label id="nombre"><?=(isset($datosActor['actores']['nombre'])) ? $datosActor['actores']['nombre'] : ''; ?></label>
        <h6>Apellidos</h6>
        <label id="apellidosSiglas"><?=(isset($datosActor['actores']['apellidosSiglas'])) ? $datosActor['actores']['apellidosSiglas'] : ''; ?></label>
        <h6>Alias</h6>
        <label id="alias"><?=(isset($datosActor['alias']['alias'])) ? $datosActor['alias']['alias'] : ''; ?></label>
    </div>
    <div class="four columns">
        <h6>Género</h6>
        <label id="generoId"><?=(isset($datosActor['infoGralActor']['generoId']) == 1) ? 'Hombre' : 'Mujer'; ?></label>
        <h6>Estado Civil: </h6>
        <label id="estadoCivil_estadoCivilId"><?=(isset($datosActor['infoGralActor']['estadoCivil_estadoCivilId'])) ? $catalogos['estadosCivilesCatalogo'][$datosActor['infoGralActor']['estadoCivil_estadoCivilId']]['descripcion'] : ''; ?></label>
        <h6>Nacionalidad: </h6>
        <label id="nacionalidadId"><?=(isset($datosActor['infoGralActor']['nacionalidadId'])) ? $catalogos['nacionalidadesCatalogo'][$datosActor['infoGralActor']['nacionalidadId']]['nombre'] : ''; ?></label>
    </div>
    <div class="four columns">
        <h6>Edad</h6>
        <label id="edad"><?=(isset($datosActor['infoGralActor']['edad'])) ? $datosActor['infoGralActor']['edad'].' años' : ''; ?></label>
    </div>
</fieldset>
<!--Termina información general-->
<fieldset>
        <legend>Detalles</legend>
    <div class="six columns">
        <h6>Hijos</h6>
        <label id="hijos" ><?=(isset($datosActor['infoGralActor']['hijos'])) ? $datosActor['infoGralActor']['hijos'] : ''; ?></label>
        <h6>¿Habla español?</h6>
        <label id="espaniol"><?=(isset($datosActor['infoGralActor']['espaniol'])) ? $datosActor['infoGralActor']['espaniol'] : ''; ?></span>
        <h6>Grupo Indígena</h6>
        <label id="gruposIndigenas_grupoIndigenaId"><?=(isset($datosActor['infoGralActor']['gruposIndigenas_grupoIndigenaId'])) ? $catalogos['gruposIndigenasCatalogo'][$datosActor['infoGralActor']['gruposIndigenas_grupoIndigenaId']]['descripcion'] : ''; ?></label>
    </div>
    <div class="six columns">
        <h6>Nivel de Escolaridad</h6>
        <label id="escolaridadId"><?=(isset($datosActor['infoGralActor']['escolaridadId'])) ? $datosActor['infoGralActor']['escolaridadId'] : ''; ?></label> 
        <h6>Última Ocupación:   </h6>
        <label id="ocupacionesCatalogo_ultimaOcupacionId"><?=(isset($datosActor['infoGralActor']['ocupacionesCatalogo_ultimaOcupacionId'])) ? $catalogos['ocupacionesCatalogo'][$datosActor['infoGralActor']['ocupacionesCatalogo_ultimaOcupacionId']]['descripcion'] : ''; ?></label>
    </div>
</fieldset>
<!--Termina Detalles-->
<fieldset>
    <legend>Datos de Nacimiento</legend>
    <div class="six columns">
        <h6>Pais</h6>
        <label id="paisesCatalogo_paisId"><?=(isset($datosActor['datosDeNacimiento']['paisesCatalogo_paisId'])) ? $catalogos['paisesCatalogo'][$datosActor['datosDeNacimiento']['paisesCatalogo_paisId']]['nombre'] : ''; ?></label>
        <h6>Estado</h6>
        <label id="estadosCatalogo_estadoId"><?=(isset($datosActor['datosDeNacimiento']['estadosCatalogo_estadoId'])) ? $catalogos['estadosCatalogo'][$datosActor['datosDeNacimiento']['estadosCatalogo_estadoId']]['nombre'] : ''; ?></label>
        <h6>Municipio</h6>
        <label id="municipiosCatalogo_municipioId"><?=(isset($datosActor['datosDeNacimiento']['municipiosCatalogo_municipioId'])) ? $catalogos['municipiosCatalogo'][$datosActor['datosDeNacimiento']['municipiosCatalogo_municipioId']]['nombre'] : ''; ?></label>
    </div>
    <div class="six columns">
        <h6>Fecha de nacimiento</h6>
        <label id="fechaNacimiento"><?=(isset($datosActor['datosDeNacimiento']['fechaNacimiento'])) ? $datosActor['datosDeNacimiento']['fechaNacimiento'] : ''; ?></label>
    </div>
</fieldset>
<!--Termina datos de nacimiento-->
<fieldset>
    <legend>Información de contacto</legend>
    <div class="six columns">
        <h6>Teléfono</h6>
        <label id="telefono"><?=(isset($datosActor['infoContacto']['telefono'])) ? $datosActor['infoContacto']['telefono'] : ''; ?></label>
        <h6>Teléfono móvil</h6>
        <label id="telefonoMovil"><?=(isset($datosActor['infoContacto']['telefonoMovil'])) ? $datosActor['infoContacto']['telefonoMovil'] : ''; ?></label>
    </div>
    <div class="six columns">
        <h6>Correo electrónico</h6>
        <label id="correoE"><?=(isset($datosActor['infoContacto']['correoE'])) ? $datosActor['infoContacto']['correoE'] : ''; ?></label>
    </div>
</fieldset>
<!--Termina información del contacto-->
<fieldset>
    <legend>Dirección</legend>
    <div class="six columns">
        <h6>Tipo de dirección</h6>
        <label id="tipoDireccionId"><?=(isset($datosActor['direccionActor']['tipoDireccionId'])) ? $datosActor['direccionActor']['tipoDireccionId'] : ''; ?></label>
        <h6>Ubicación</h6>
        <label id="direccion"><?=(isset($datosActor['direccionActor']['direccion'])) ? $datosActor['direccionActor']['direccion'] : ''; ?></label>
        <h6>Código Postal</h6>
        <label id="codigoPostal"><?=(isset($datosActor['direccionActor']['codigoPostal'])) ? $datosActor['direccionActor']['codigoPostal'] : ''; ?></label>
    </div>
    <div class="six columns">
        <h6>País</h6>
        <label id="paisesCatalogo_paisId"><?=(isset($datosActor['direccionActor']['paisesCatalogo_paisId'])) ? $catalogos['paisesCatalogo'][$datosActor['direccionActor']['paisesCatalogo_paisId']]['nombre'] : ''; ?></label>
        <h6>Estado</h6>
        <label id="estadosCatalogo_estadoId"><?=(isset($datosActor['direccionActor']['estadosCatalogo_estadoId'])) ? $catalogos['estadosCatalogo'][$datosActor['direccionActor']['estadosCatalogo_estadoId']]['nombre'] : ''; ?></label>
        <h6>Municipio</h6>
        <label id="municipiosCatalogo_municipioId"><?=(isset($datosActor['direccionActor']['municipiosCatalogo_municipioId'])) ? $catalogos['municipiosCatalogo'][$datosActor['direccionActor']['municipiosCatalogo_municipioId']]['nombre'] : ''; ?></label>
    </div>
</fieldset><!--Termina datos dirección-->
<fieldset>
    <legend>Relacion entre actores </legend>
        <h4>Actores individuales o transmigrantes</h4>
        <!--Comienza relacion con otros actores-->
        <div data-collapse>
            <h5>Relacion con otros actores </h5>
            <table>
                <thead>
                    <tr>
                        <th>Persona</th>
                        <th>Tipo de relación</th>
                        <th>Persona Relacionada</th>
                        <th>Fecha de incio</th>
                        <th>Fecha de témino</th>
                        <th>Acción(es)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($datosActor['relacionActores'])){
                        foreach($datosActor['relacionActores'] as $relacion){
                            ?><tr>
                                <td><?=$datosActor['actores']['nombre'].' '.$datosActor['actores']['apellidosSiglas']; ?></td>
                                <td><?=$catalogos['relacionActoresCatalogo'][$relacion['tipoRelacionId']]['nombre']; ?></td>
                                <td><?=$datosActor['actoresRelacionados'][$relacion['actorRelacionadoId']]['nombre']; ?></td>
                                <td><?=$relacion['fechaDeInicio']; ?></td>
                                <td><?=$relacion['fechaDeTermino']; ?></td>
                            </tr><?php
                        }
                    } ?>
                </tbody>
            </table>
            <input type="button" class="tiny button"  value="Nuevo" />
        </div>
        <!--Comienza citado como persona relacionada-->
        <div data-collapse>
            <h5>Citado como persona relacionada</h5>
            <table>
                <thead>
                    <tr>
                        <th>Persona</th>
                        <th>Tipo de relación</th>
                        <th>Persona Relacionada</th>
                        <th>Fecha de incio</th>
                        <th>Fecha de témino</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!--Termina citado como persona relacionada-->
        <!--Comienza actores colectivos---->
        <div data-collapse>
            <h4>Actores colectivos </h4>
            <table>
                <thead>
                    <tr>
                        <th>Persona</th>
                        <th>Tipo de relación</th>
                        <th>Actor colectivo relacionado </th>
                        <th>Fecha de incio</th>
                        <th>Fecha de témino</th>
                        <th>Acción(es)</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <input type="button" class="tiny button"  value="Nuevo" />
        </div>
        <!--Termina actores colectivos-->
</fieldset>
<fieldset>
    <legend>Mostrar Casos</legend>
        <?=(isset($casosRelacionados)) ? $casosRelacionados : ''; ?>
</fieldset>