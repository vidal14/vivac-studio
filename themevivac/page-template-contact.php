<?php /* Template name: Contacto */ ?>

<?php get_header(); the_post(); ?>


          <section class="preload">
            <div class="preload-dos">
                <svg id="svg-preload" viewBox="0 0 37.8 33.5"><path d="M36.9 29.2L20.7 7.9l3.2-4.2c.5-.6.4-1.5-.3-2-.6-.5-1.5-.4-2 .3l-2.7 3.6L16.2 2c-.5-.6-1.4-.7-2-.3-.6.5-.7 1.4-.3 2l3.2 4.2L1 29.2c-.5.6-.4 1.5.3 2 .3.2.6.3.9.3.4 0 .9-.2 1.1-.6l14.2-18.7v18.4c0 .8.6 1.4 1.4 1.4s1.4-.6 1.4-1.4V12.1L34.7 31c.3.4.7.6 1.1.6.3 0 .6-.1.9-.3.5-.6.7-1.5.2-2.1z"/></svg>
                <div class="preload-ocultar"></div>
            </div>
        </section>



    <!--CONTACTO -->

    <section style="background-image:url(<?php the_field ( 'contacto_imagen_background' ); ?>)" class="wrapper-section background-ajusts">
        <span><?php _e ( 'hello!', 'vivactheme' ); ?></span>
    </section>

    <!-- Info contacto -->

        <section class="contacto-wrapper">
            <section class="contacto-headings">
                <p class="view enterDown"><?php the_field ( 'contacto_texto_uno' ); ?></p>
                <div class="separador-wrapper"><span class="view longitud"></span></div> 
                <p class="view enterDown"><?php the_field ( 'contacto_texto_dos' ); ?>
                </p>
            </section>

            
                <span class="boton-form boton-activar view enterDown"><?php _e ( 'di hola >', 'vivactheme' ); ?></span>
        

            <section class="contacto-directions">
                <h2 class="view enterDown"><?php the_field ( 'contacto_movil' ); ?></h2>
                <h2 class="view enterDown"> <strong><?php the_field ( 'contacto_correo' ); ?></strong> </h2>
                <h2 class="view enterDown"><?php the_field ( 'contacto_direccion' ); ?></h2>
            </section>
        </section>
   
    <!-- MAPA -->

    <section id="mapa" class="view enterDown"></section>






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
                    <h1><?php _e ( 'nuestros proyectos', 'vivactheme' ); ?></h1>
                    <span class="arrow">
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </section>
        </section>
    </section>




<?php get_footer(); ?>