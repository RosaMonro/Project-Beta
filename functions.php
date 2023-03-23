<?php

// CARGAR CSS Y JS

//     wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . 'menu.js' );
//     wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . 'css/style.css' ) );


function my_scripts_and_css()
{
    // REMOVE GUTENBERG CSS

    wp_dequeue_style ( 'wp-block-library' );
    wp_dequeue_style ( 'wp-block-library-theme' );
    wp_dequeue_style ( 'wc-blocks-style' );

    // MY STUFF

    if ( !is_admin() )
    {
        if ( is_page ( 'Contact' ) )
        {
            wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
        }

        wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
    }
}

add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );



//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );



//  REGISTRO DE MENÚS

    register_nav_menu ( 'topbar-menu', 'Cabecera del sitio' );
    register_nav_menu ( 'mobile-menu', 'Cabecera del sitio en mobile' );
    // register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
    // register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );


//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );



// WIDGET PARA EL FOOTER -> no está en docu de Idel. Borrar??

    function mytheme_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Widgets', 'mytheme' ),
            'id'            => 'footer-widgets',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'mytheme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'mytheme_widgets_init' );


// //  REGISTRO DE TIPOS DE ENTRADA Y TAXONOMÍAS

//     function my_custom_post_types()
//     {
//         register_post_type ( 'apps', array
//         (
//             'public' => true,
//             'label' => 'aplicaciones'
//         ));
//     }
//     add_action ( 'init', 'my_custom_post_types' );


?>