<?php get_header(); the_post(); ?>

<main>
        <div class="product__title">
            <h1 class="margin-bottom-0"><?php the_title(); ?></h1>
            <a href="https://play.google.com/store/apps/details?id=com.MonteroGames.ColorinesNeuroGames" target="_blank" alt="enlace a la play store">
                <img class="button--google" src="/images/Botones/google.png" alt="Botón con enlace a la playstore">
            </a>
        </div>

        <section>

            <article class="product">

                <div class="product__firstDescription">

                        <div class="product__mockup">
                            <img class="mockup"  src="/images/Mockups/Secuencial.jpg" alt="Imágenes de los diferentes modos de la aplicación llamada Secuencial">
                        </div>

                        <div class="product__text">
                            <p>Con Secuencial podrás trabajar span atencional tanto a nivel verbal como espacial,
                                memoria de trabajo y velocidad de procesamiento entre otras funciones. </p>
                            <p>La tarea consiste en observar cómo se iluminan los discos, retener la secuencia 
                                creciente y repetirla.</p>
                            <p>Da un paso más allá en tus sesiones y dale una vuelta de tuerca a la actividad modificando
                                las variables disponibles y combinándolas para adaptar tanto el nivel del paciente como tus 
                                necesidades como terapeuta. </p>
                        </div>
                </div>

            </article> 
            
            <article class="product">

                <div class="product__secondDescription--reverse">

                        <div class="product__text">
                            <p>Selecciona el tipo de estímulo. Dispones de números, colores y luces para eliminar el componente verbal. </p>
                            <p>Puedes elegir que se repita la secuencia completa en cada ensayo, o que solo se ilumine el nuevo estímulo
                                gracias a la modalidad “a ciegas”.</p>
                            <p>Decide si quieres trabajar el span directo o inverso modificando la opción de “orden”.</p>
                            <p>También podrás añadir distractores e incluso elegir la frecuencia de aparición de los mismos. </p>
                        </div>

                        <div class="product__mockup">
                            <img class="mockup" src="/images/Mockups/Secuencial-modo.png" alt="Imágen del mednú de la aplicación Secuencial">
                        </div>
                </div>

            </article>

        </section>

    </main>

<?php get_footer(); ?>