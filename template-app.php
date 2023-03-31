<?php get_header(); the_post(); ?>

    <main>

    <?php /* Template name: aplicaciones */ ?>

    <div class="product__title">
            <h1 class="margin-bottom-0"><?php the_title(); ?></h1>
            <a href="https://play.google.com/store/apps/details?id=com.MonteroGames.ColorinesNeuroGames" target="_blank" alt="enlace a la play store">
                <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>
    </div>

        <section>

            <?php the_content(); ?>

        </section>
        
    
    </main>

<?php get_footer(); ?>