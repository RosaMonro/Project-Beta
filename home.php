<?php get_header(); ?>

<main>

        <div class="card__last-post">
            <h1 class="h2">Lorem Ipsum</h1>
            <div class="card-post">
                <div class="blog__image">
                    <img class="blog-single__image" src="/images/Entradas/brain-mobile.jpg" alt="">
                </div>
                <div class="blog__text">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quia voluptatem modi consequatur, beatae, architecto,
                    nulla omnis quasi autem laborum et? Nemo molestiae aliquid nobis error repudiandae, maxime quasi earum.</p>
                    <a class="link" href="">Quiero saber más <img class="link-arrow" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/flecha.svg" alt="icono flecha"></a>
                </div>
            </div>
        </div>
<!-- --------------------------------------------------------------------------------------------- -->
        <!-- Loop de entradas después de "última entrada" -->


        <div class="card-catalog--3post">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="card-summary">
                    <h2 class="h3--small"><?php the_title(); ?></h2>
                    <div><img class="blog-single__image" src="/images/Mockups/Secuencial.jpg" alt="Imágenes de los diferentes modos de la aplicación llamada Secuencial"></div>
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

            <p class="h3  cta__text--black">Descarga el pack</p>

            <a href="" target="_blank">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>

        </section>

    </main>

<?php get_footer(); ?>