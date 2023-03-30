<?php get_header(); ?>

<main>
    <div class="card__last-post">

        <?php
            $args = array( 'posts_per_page' => 1 ); // Obtiene el último post
            $latest_post = get_posts( $args );

            if ( $latest_post ) {
                foreach ( $latest_post as $post ) :
                    $current_post_id = $post->ID; // Obtiene el ID de la entrada actual
                    setup_postdata( $post ); ?>
                    
                    <!-- HTML para mostrar la última entrada -->
                    <div class="latest-post">
                        <h1 class="h2"><?php the_title(); ?></h1>
                        <div class="card-post">
                            <div class="blog__image  blog-single__image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="post-thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                            </div>
                            <div class="blog__text">
                                <?php the_excerpt(); ?>
                                <a class="link" href="<?php the_permalink(); ?>">Quiero saber más <img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach;
                wp_reset_postdata();
            }
        ?>

    </div>


<!-- --------------------------------------------------------------------------------------------- -->
        <!-- Loop de entradas después de "última entrada" -->


    <div class="card-catalog--3post">

        <?php

                $news = new WP_Query ( array
                (
                    'post_type' => 'post',
                    'post__not_in' => array( $current_post_id ), //evita que se repita la entrada en la que está en el loop
                    'posts_per_page' => 3
                ));
            ?>


        <?php while ( $news -> have_posts() ) : $news -> the_post(); ?>

            <div class="card-summary">
                <h2 class="h3--small"><?php the_title(); ?></h2>
                <div class="blog-single__image"><?php the_post_thumbnail( 'medium' ); ?></div>
                <div class="card-summary__text"><?php the_excerpt(); ?></div>
                <div>
                    <a class="link" href="<?php the_permalink(); ?>">Quiero saber más <img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>
                </div>
            </div>

        <?php endwhile; ?>

    </div>



        <section class="card-cta">

            <img class="cta__logo--black" src="<?php bloginfo ( 'template_url' ); ?>/images/logo/logo-negro.svg" alt="">

            <p>Adquiere todas nuestras aplicaciones en su versión completa PREMIUM y una suscripción a nuestra NEWSLETTER
                para estar al día de nuevos lanzamientos, consejos y mucho más.</p>

            <a href="" target="_blank">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>

        </section>

    </main>

<?php get_footer(); ?>