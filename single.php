<?php get_header(); the_post(); ?>

<main>
        <section class="blog-single">


                <h1 class="h3 blog-single__title"><?php the_title(); ?></h1>

                <?php the_content(); ?>


        </section>

        <section>

            <div class="card-catalog">

                <?php
                    $news = new WP_Query ( array
                    (
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    ));
                ?>

                <?php while ( $news -> have_posts() ) : $news -> the_post(); ?>

                        <div class="card-summary">
                            <h2 class="h3"><?php the_title(); ?></h2>
                            <div><img class="blog-single__image" src="/images/Mockups/Secuencial.jpg" alt="Imágenes de los diferentes modos de la aplicación llamada Secuencial"></div>
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

            <p class="h3">Descarga el pack</p>

            <a href="" target="_blank">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>

        </section>

    </main>

<?php get_footer(); ?>