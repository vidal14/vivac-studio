<?php

    // CARGA DE SCRIPTS Y WEBFONTS
    function enqueue_scripts_and_css()
    {   
        wp_enqueue_script ( 'wow-js', get_bloginfo ( 'template_url' ) . '/js/wow.min.js' );
        wp_enqueue_script ( 'vue-js', get_bloginfo ( 'template_url' ) . '/js/vue.min.js' );
        wp_register_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js');
        wp_enqueue_script('TweenMax');
        wp_register_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDr5D5jGGca41f1bT32WVZK1wRulfEJ2Sk');
        wp_enqueue_script('google');
        // wp_enqueue_script ( 'timelinelite-js', get_bloginfo ( 'template_url' ) . '/js/TimelineLite.min.js' );
        // wp_enqueue_script ( 'tweenlite-js', get_bloginfo ( 'template_url' ) . '/js/TweenLite.min.js' );
        wp_enqueue_script ( 'jquery' );
        wp_enqueue_script ( 'theme-scripts', get_template_directory_uri(). '/js/main.js' );
    }
    add_action ( 'wp_enqueue_scripts', 'enqueue_scripts_and_css' );


    // SOPORTE PARA IMÁGENES DESTACADAS

    add_theme_support ( 'post-thumbnails' );


     // QUICK VIEW AJAX

    function ejemploProyecto()
    {
        $postID = $_POST['postID'];

        ?>

                 <div id="proyecto-info" class="proyecto-info">

                        <div class="proyecto-heading">
                            <div class="proyecto-titulos">
                                <h2><?php the_field ( 'index_categoria', $postID ); ?></h2>
                                <h1><?php the_field ( 'proyecto_titulo', $postID ); ?></h1>
                            </div>
                            <img src="<?php the_field ( 'proyecto_imagen', $postID ); ?>" alt="">
                            
                        </div>

                        <div class="proyecto-descripcion">
                            <h2><?php _e ( 'Descripción:', 'vivactheme' ); ?></h2>
                            <?php echo apply_filters ( 'the_content', get_post_field ( 'post_content', $postID ) ); ?>
                        </div>
                        
                    </div>
                    <div class="proyecto-imagenes">
                        <?php

                            // check if the repeater field has rows of data
                            if( have_rows('imagen_interior', $postID ) ):

                                // loop through the rows of data
                                while ( have_rows('imagen_interior', $postID ) ) : the_row();?>

                                    

                                    <img src="<?php the_sub_field('imagen_dentro', $postID);?>" alt="">
                                    

                            <?php endwhile;

                            else :

                                // no rows found

                            endif;

                        ?>
                    </div>

        <?php

        wp_die();
    }

    add_action ( 'wp_ajax_nopriv_ejemploProyecto', 'ejemploProyecto' );
    add_action ( 'wp_ajax_ejemploProyecto', 'ejemploProyecto' );
    
    
    
    
     // QUICK VIEW AJAX SECTION PROYECTOS

    function proyectosWeb()
    {
         $postCategory = $_POST['postCategory'];

        ?>          
                <?php $webs = new WP_Query ( array ( 'category_name' => $postCategory ) ); ?> 
                <?php if ( $webs -> have_posts() ) : ?>
                
                
                <?php while ( $webs -> have_posts() ) : $webs -> the_post(); ?>
                

                   <article id="project" class="prueba-container-project project-in" data-ajax="<?php echo admin_url ( 'admin-ajax.php' ); ?>" data-post="<?php the_ID(); ?>">
                        <div class="proyecto-imagen">
                             <!-- <img src="img/project-cvj.jpg" alt=""> -->
                            <?php the_post_thumbnail ( array ( 500, 500 ) ); ?>
                        </div>
                        <div class="proyecto-headings">
                
                            <h3><?php the_category(); ?></h3>
                            <h1><?php the_title(); ?></h1>
                
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
                
                <?php endif; ?>
        <?php

        wp_die();
    }

    add_action ( 'wp_ajax_nopriv_proyectosWeb', 'proyectosWeb' );
    add_action ( 'wp_ajax_proyectosWeb', 'proyectosWeb' );


    // REGISTRO DE MENÚS

    register_nav_menu ( 'main-menu', 'Menú principal' );
    register_nav_menu ( 'language-menu', 'Menú idioma' );
    register_nav_menu ( 'social-menu', 'Menú redes sociales' );
    


    // ACTIVACIÓN DE LA PÁGINA DE OPCIONES DE ACF

    if ( function_exists ( 'acf_add_options_page') ) acf_add_options_page();

?>
