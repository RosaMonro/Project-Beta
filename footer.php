        <footer>

                <div class="prefooter">
                    <p><strong>Descarga el paquete PREMIUM</strong> y ahorra tiempo en la preparación de tus sesiones con todas las 
                        aplicaciones disponibles de SinaptikAPP. </p>

                    <a href="" target="_blank">
                        <img class="button--google" src="<?php bloginfo ( 'template_url' ); ?>/images/Botones/google.png" alt="Botón con enlace a la playstore">
                    </a>
                </div>


                <div class="footer">

                    <div class="footer__left">

                        <img class="logo--yellow" src="<?php bloginfo ( 'template_url' ); ?>/images/logo/logo-amarillo.svg" alt="logo sinaptikapp">                
                        <p class="text--white">Recibe novedades y consejos con nuestra NEWSLETTER</p>               
                        <input class="input--footer" type="email" name="email" id="email" placeholder="Email" required aria-label="Escribe tu correo electrónico">
                        <input class="h6  button--footer" type="submit" value="Suscríbete">

                    </div>

                    <div class="footer__right">

                        <a class="h2  footer__contact-link"  href="<?php echo get_permalink( get_page_by_path( 'hablanos' ) ); ?>">Hablemos</a>
                        <p class="text--white">hola@sinaptikapp.com</p>
                        <p class="text--white">XXX.XXX.XXX</p>

                    </div>
                </div>

                <div class="footer-links">

                    <div>
                        <a href=""><img class="footer-links__icon" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/instagram.svg" alt="icono con enlace a instragram"></a>
                        <a href=""><img class="footer-links__icon" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/whatsapp.svg" alt="icono con enlace a whatsapp"></a>
                        <a href=""><img class="footer-links__icon" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/linkedin.svg" alt="icono con enlace a linkedin"></a>
                        <a href=""><img class="footer-links__icon" src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/twitter.svg" alt="icono con enlace a twitter"></a>
                    </div>

                    <div>
                        <a class="footer-links--legal" href="">Política de privacidad. </a>
                        <a class="footer-links--legal" href="">Aviso legal. </a>
                        <a class="footer-links--legal" href="">Cookies. </a>
                    </div>

                </div>

        </footer>

        <script src="menu.js"></script>

        <?php wp_footer(); ?>

    </body>
</html>