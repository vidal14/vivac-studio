<?php /* Template name: Proyectos */ ?>

<?php get_header(); the_post(); ?>

          <section class="preload">
            <div class="preload-dos">
                <svg id="svg-preload" viewBox="0 0 37.8 33.5"><path d="M36.9 29.2L20.7 7.9l3.2-4.2c.5-.6.4-1.5-.3-2-.6-.5-1.5-.4-2 .3l-2.7 3.6L16.2 2c-.5-.6-1.4-.7-2-.3-.6.5-.7 1.4-.3 2l3.2 4.2L1 29.2c-.5.6-.4 1.5.3 2 .3.2.6.3.9.3.4 0 .9-.2 1.1-.6l14.2-18.7v18.4c0 .8.6 1.4 1.4 1.4s1.4-.6 1.4-1.4V12.1L34.7 31c.3.4.7.6 1.1.6.3 0 .6-.1.9-.3.5-.6.7-1.5.2-2.1z"/></svg>
                <div class="preload-ocultar"></div>
            </div>
        </section>
        
        
    <!-- PROYECTOS -->
    <section style="background-image:url(<?php the_field ( 'proyectos_imagen_background' ); ?>)" class="wrapper-section background-ajusts">
        <span><?php _e ( 'proyectos.', 'vivactheme' ); ?></span>
    </section>



        <!-- Filtro de los proyectos -->
    <section class="proyectos-filtro">
        <span><?php _e ( 'MOSTRAR', 'vivactheme' ); ?></span>
        <hr>
        <button id="category-all" data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>"data-category="" class="active">
             <?php _e ( 'todo', 'vivactheme' ); ?>
        </button>
        <button id="category-web" data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>" data-category="web">
            <?php _e ( 'web', 'vivactheme' ); ?>
        </button>
        <button data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>" data-category="identidad">
            <?php _e ( 'identidad', 'vivactheme' ); ?>
        </button>
        <button data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>"data-category="packaging">
            <?php _e ( 'packaging', 'vivactheme' ); ?>
        </button>
        <button data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>"data-category="editorial">
            <?php _e ( 'editorial', 'vivactheme' ); ?>
        </button>
    </section>
    
    

        <!-- Todos los proyectos -->
<section class="global-container">
    <div id="contain-proyectos" class="container-projects" >


            <?php $projects = new WP_Query ( array ( 'post_type' => 'post', 'posts_per_page' => 8 ) ); ?>

            <?php while ( $projects -> have_posts() ) : $projects -> the_post(); ?>

        <!-- Proyecto -->

        <article class="prueba-container-project project-in view inUp" data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>" data-post="<?php the_ID(); ?>" >
                <div class="proyecto-imagen">
                    <?php the_post_thumbnail ( array ( 500, 500 ) ); ?>
                </div>
                <div class="proyecto-headings">
                
                    <h3><?php the_category(); ?></h3>
                    <h1><?php the_title(); ?></h1>
                
                </div>
        </article>
        
        

        <?php endwhile; wp_reset_postdata(); ?>

        
    </div>    
    
</section>



     <!-- EJEMPLO AJAX -->

<section class="proyecto-wrapper">
        <span class="proyecto-wrapper-left"></span>
        <div class="proyecto-wrapper-right">
            <div id="form-icon" class="form-icon-dos">
                        <span></span>
                        <span></span>
                    </div>
            <div id="contain" class="proyecto-info-wrapper">
                

            </div>
    
        </div>
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
                    <h1> <?php _e ( 'sobre vivac', 'vivactheme' ); ?> </h1>
                    <span class="arrow">
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </section>
        </section>
    </section>


<?php get_footer(); ?>