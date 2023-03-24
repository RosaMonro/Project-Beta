<?php get_header( '404' ); ?>

    <div class="card-404">

        <p class="margin-0  h1">Yepa!</p>
        <p class="h3  margin-0">Fallo sináptico 404</p>
        <img class="card-404__image"  src="<?php bloginfo ( 'template_url' ); ?>/images/brain-404.png" alt="">
        <a class="link" href="<?php echo esc_url ( home_url('/')); ?>">Déjanos llevarte de vuelta<img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>

    </div>
    
<?php get_footer( '404' ); ?>