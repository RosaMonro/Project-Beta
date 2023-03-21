<?php

// CARGAR CSS Y JS

    wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . 'menu.js' );
    wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . 'css/style.css' ) );


//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );

    // function quitar_estilos_backend() {
    //     wp_deregister_style( 'wp-admin' );
    //  }
    //  add_action( 'admin_enqueue_scripts', 'quitar_estilos_backend' );


//  REGISTRO DE MENÚS

    register_nav_menu ( 'topbar-menu', 'Cabecera del sitio' );
    register_nav_menu ( 'mobile-menu', 'Cabecera del sitio en mobile' );
    // register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
    // register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );



?>