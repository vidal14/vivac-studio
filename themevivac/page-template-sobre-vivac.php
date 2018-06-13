<?php /* Template name: Sobre Vivac */ ?>

<?php get_header(); the_post(); ?>

      <section class="preload">
            <div class="preload-dos">
                <svg id="svg-preload" viewBox="0 0 37.8 33.5"><path d="M36.9 29.2L20.7 7.9l3.2-4.2c.5-.6.4-1.5-.3-2-.6-.5-1.5-.4-2 .3l-2.7 3.6L16.2 2c-.5-.6-1.4-.7-2-.3-.6.5-.7 1.4-.3 2l3.2 4.2L1 29.2c-.5.6-.4 1.5.3 2 .3.2.6.3.9.3.4 0 .9-.2 1.1-.6l14.2-18.7v18.4c0 .8.6 1.4 1.4 1.4s1.4-.6 1.4-1.4V12.1L34.7 31c.3.4.7.6 1.1.6.3 0 .6-.1.9-.3.5-.6.7-1.5.2-2.1z"/></svg>
                <div class="preload-ocultar"></div>
            </div>
    </section>


<!--NOSOTROS -->

    <section style="background-image:url(<?php the_field ( 'nosotros_imagen_background' ); ?>)" class="wrapper-section background-ajusts">
        <span><?php _e ( 'sobre vivac.', 'vivactheme' ); ?></span>
    </section>

    <section class="nosotros-info" id="loveo">
        <p class="view enterDown"> <?php the_field ( 'nosotros_cita' ); ?> </p>
        <div class="separador-wrapper"><span class="view longitud"></span></div> 
        <p class="view enterDown">
            <?php the_field ( 'nosotros_texto_uno' ); ?>
        </p>
        <p class="view enterDown">
        <?php the_field ( 'nosotros_texto_dos' ); ?>
        </p>
    </section>







    <!-- SERVICIOS -->
    <section style="background-image:url(<?php the_field ( 'servicios_imagen_background' ); ?>)"class="wrapper-section background-ajusts">
        <span><?php _e ( 'qué hacemos.', 'vivactheme' ); ?></span>
    </section>

    

    <!-- Diseño gráfico -->
        <section class="servicios-wrapper">
            <div class="separador-wrapper"><span class="view longitud"></span></div> 
            <section class="servicios-tipo">
                <section class="servicios-headings servicios-headings-diseño view headingsLeft">
                    <h1><?php the_field ( 'servicios_diseno_titulo' ); ?></h1>
                    <p><?php the_field ( 'servicios_diseno_texto_uno' ); ?></p>
                    <p><?php the_field ( 'servicios_diseno_texto_dos' ); ?>
                    </p>
                </section>
                <section class="servicios-fondo" ></section>
                <section style="background-image:url(<?php the_field ( 'servicios_diseno_imagen' ); ?>)" class="servicios-imagen servicios-imagen-diseño view imageRight" ></section>
                <section class="servicios-trabajos servicios-trabajos-diseño ">
                    <span class="view trabajosRight" data-wow-delay="0.25s"><?php the_field ( 'servicios_diseno_servicio_uno' ); ?></span>
                    <span class="view trabajosRight" data-wow-delay="0.35s"><?php the_field ( 'servicios_diseno_servicio_dos' ); ?></span>
                    <span class="view trabajosRight" data-wow-delay="0.45s"><?php the_field ( 'servicios_diseno_servicio_tres' ); ?></span>
                    <span class="view trabajosRight" data-wow-delay="0.55s"><?php the_field ( 'servicios_diseno_servicio_cuatro' ); ?></span>
                    <span class="view trabajosRight" data-wow-delay="0.65s"><?php the_field ( 'servicios_diseno_servicio_cinco' ); ?></span>
                </section>
            </section>

            <!-- Diseño web -->

            <section class="servicios-tipo">
                <section class="servicios-headings servicios-headings-web view headingsRight">
                    <h1><?php the_field ( 'servicios_diseno_titulo' ); ?></h1>
                    <p ><?php the_field ( 'servicios_web_texto_uno' ); ?>
                    </p>
                    <p><?php the_field ( 'servicios_web_texto_dos' ); ?>
                    </p>
                </section>
                <section class="servicios-fondo"></section>
                <section style="background-image:url(<?php the_field ( 'servicios_web_imagen' ); ?>)" class="servicios-imagen servicios-imagen-web view imageLeft"></section>
                <section class="servicios-trabajos servicios-trabajos-web">
                    <span class="view trabajosLeft" data-wow-delay="0.25s"><?php the_field ( 'servicios_web_servicio_uno' ); ?></span>
                    <span class="view trabajosLeft" data-wow-delay="0.35s"><?php the_field ( 'servicios_web_servicio_dos' ); ?></span>
                    <span class="view trabajosLeft" data-wow-delay="0.45s"><?php the_field ( 'servicios_web_servicio_tres' ); ?></span>
                    <span class="view trabajosLeft" data-wow-delay="0.55s"><?php the_field ( 'servicios_web_servicio_cuatro' ); ?></span>
                    <span class="view trabajosLeft" data-wow-delay="0.65s"><?php the_field ( 'servicios_web_servicio_cinco' ); ?></span>
                </section>
            </section>
        
        </section>



   

    <!-- SIGUIENTE SECCIÓN -->

    <section class="siguiente-wrapper">
        <section class="siguiente">
            <section class="siguiente-contacto boton-activar">
                <h2><?php _e ( 'HELLO', 'vivactheme' ); ?></h2>
                <a href="#">
                    <h1><?php _e ( 'contacta con nosotros', 'vivactheme' ); ?></h1>
                    <span class="arrow">
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </section>
            <hr>
            <section class="siguiente-seccion">
                <h2><?php _e ( 'SIGUIENTE', 'vivactheme' ); ?></h2>
                <a href="#">
                    <h1> <?php _e ( 'nuestros proyectos', 'vivactheme' ); ?> </h1>
                    <span class="arrow">
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </section>
        </section>
    </section>


<?php get_footer(); ?>