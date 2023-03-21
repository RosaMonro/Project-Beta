<?php
// CARGAR CSS Y JS

    wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js' );
    wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );

    ?>