<?php get_header(); the_post(); ?>

<main>

        <div class="card-intro">
            
            <h1 class="card-intro__title"><?php the_title(); ?></h1>
            <img class="button--google" src="/images/Botones/google.png" alt="Botón con enlace a la playstore">

        </div>

        <div class="card-profile">

                <h2>Rosa Montero</h2>

                <div class="profile__bg--teal"></div>

                <div class="card-profile--rosa">
 
                    <div class="card-profile-info">
                        <img class="profile__icon"  src="/images/iconos/about iconos/brain-line-icon.svg" alt="Icono de un cerebro">
                        <h3>Neuropsicóloga</h3>
                        <p class="profile__text">Licenciada en Psicología<br>Máster en Neuropsicología</p>
                    </div>

                    <div class="card-profile-info">
                        <img class="profile__icon"  src="/images/iconos/about iconos/software-development-icon.svg" alt="Icono de un cerebro">
                        <h3>Web Developer</h3>
                        <p class="profile__text">Formación en desarrollo web Front-End, <br>UX/UI y Marketing digital.</p>
                    </div>

                </div>

        </div>

        <div class="card-profile">

                <h2>Daniel Montero</h2>

                <div class="profile__bg--yellow"></div>

                <div class="card-profile--daniel">

                    <div class="card-profile-info">
                        <img class="profile__icon"  src="/images/iconos/about iconos/dna-icon.svg" alt="Icono de un cerebro">
                        <h3>Biólogo</h3>
                        <p class="profile__text">Licenciado en Biología<br>Máster en formación para el profesorado</p>
                    </div>

                    <div class="card-profile-info">
                        <img class="profile__icon"  src="/images/iconos/about iconos/mobile-app-dev-icon.svg" alt="Icono de un cerebro">
                        <h3>Web Developer</h3>
                        <p class="profile__text">Formación en desarrollo de aplicaciones móviles <br> y programación de juegos.</p>
                    </div>

                </div>
                
        </div>

    </main>

<?php get_footer(); ?>