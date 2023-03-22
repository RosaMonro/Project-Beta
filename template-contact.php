<?php get_header(); the_post(); ?>

<main>

    <?php /* Template name: háblanos */ ?>


        <div class="contact">

            <h2 class="h1"><?php the_title(); ?></h2>

            <form class="h5 label-color" action="" method="post">

                <label for="nombre">Cómo te llamas</label>
                    <input type="text" name="name" id="nombre" required aria-label="Escribe tu nombre">

                <label for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" required aria-label="Escribe tu correo electrónico">

                <label for="asunto">De qué se trata</label>
                    <input type="text" name="text" id="asunto" required aria-label="Escribe el asunto">

                <label for="msg">Deja tu comentario</label>
                    <textarea rows="4"  name="mensaje" id="msg" required aria-label="Escribe tu comentario"></textarea>

                <div>
                    <label class="p" for="aceptar">Estoy de acuerdo con la <a class="link-priv" href="">política de privacidad</a> de esta página</label>
                        <input type="checkbox" name="política de privacidad" id="aceptar" required aria-label="Acepto la política de privacidad">
                </div>    
                                
            </form> 
            
            <div class="">                
                <input class="h6  button--form" type="submit" value="Enviar">
            </div>

        </div>

    </main>

<?php get_footer(); ?>