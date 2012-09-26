<ul class="tabs-content">
    <li class="active" ><!--Pestaña Actores Individuales--->
    <dl class="tabs"><!--Pestañas de Actores-->
        <dd class="<?=($is_actor_type == 1) ? 'active' : ''; ?>" ><a href="<?=base_url(); ?>index.php/actores_c/mostrar_actor/0/1">Actor individual</a></dd>
        <dd class="<?=($is_actor_type == 2) ? 'active' : ''; ?>"><a href="<?=base_url(); ?>index.php/actores_c/mostrar_actor/0/2">Actor transmigrante</a></dd>
        <dd class="<?=($is_actor_type == 3) ? 'active' : ''; ?>"><a href="<?=base_url(); ?>index.php/actores_c/mostrar_actor/0/3">Actor colectivo</a></dd>
    </dl>
    <ul class="tabs-content">
        <li class="active" id="simple1Tab">
        <!---Contenido de la pestaña Actor individual--->
        <?php if(!isset($action)){ ?>
        <div class="three columns">
            <form method="post" action="<?=base_url(); ?>index.php/actores_c/agregar_actor/<?=$is_actor_type; ?>">
                <input type="submit" value="Agregar Actor" class="tiny button" />
            </form>
            <?=(isset($lista)) ? $lista : '' ;?> <!---Se llama a listaActores-->
        </div>
        <?php } ?>
        <div class="<?=(isset($action)) ? 'twelve columns' : 'nine columns' ; ?>">
            <div><?=(isset($form)) ? $form : '' ;?></div>
        </div>

        <!--Termina contenido de la pestaña Actor individual-->
        </li>
    </ul>
</ul>