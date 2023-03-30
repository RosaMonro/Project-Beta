<?php get_header(); the_post(); ?>

<main>
        <section class="blog-single">


                <h1 class="h3 blog-single__title"><?php the_title(); ?></h1>

                <div class="card-summary__text  cursive"><?php the_excerpt(); ?></div>
                <div class="blog-single__image  blog-single__image--big"><?php the_post_thumbnail( 'large' ); ?></div>

                <?php the_content(); ?>




        </section>
 
        <section>

            <div class="card-catalog--3post">

                <?php
                    $current_post_id = get_the_ID(); // Obtiene el ID de la entrada actual

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

        </section>

        <section class="card-cta">

            <img class="cta__logo--black" src="<?php bloginfo ( 'template_url' ); ?>/images/logo/logo-negro.svg" alt="">

            <p>Adquiere todas nuestras aplicaciones en su versión completa PREMIUM y una suscripción a nuestra NEWSLETTER
                para estar al día de nuevos lanzamientos, consejos y mucho más.</p>

            <a href="<?php the_permalink();?>" target="_blank">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>

        </section>

    </main>

<?php get_footer(); ?>