<div><!--Lista de Actores-->   
    <form  method="post" accept-charset="utf-8" id="formEditarActor">
        <input id="actores_nombre" type="text"  name="actores_nombre"  placeholder="Buscar por nombre o apellido" class="seven columns" />
    </form>
    <div class="twelve columns">
        <h1><div class="six columns">Foto</div></h1>
        <h1><div class="six columns">Nombre</div></h1>
    </div>
    <!------------Lista ind-------------------->
    <div  id="listaActorIndiv" class="PruebaScorll">
        <?php if(isset($listado) && $listado != null){
            foreach($listado as $actor): ?>
                <div class="twelve columns">
                    <img class="five columns" src="<?=base_url(); ?>statics/media/img/actores/<?=$actor['actorId']; ?>.jpg" />
                    <a href="<?=base_url(); ?>index.php/actores_c/mostrar_actor/<?=$actor['actorId']; ?>/<?=$is_actor_type; ?>" class="seven columns">
                        <?=$actor['nombre'].' '.$actor['apellidosSiglas']; ?>
                    </a>
                </div>
                <hr />
            <?php endforeach; 
        } ?>
    </div><!--Termina lista de los actores-->
</div>