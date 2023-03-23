<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Maitree&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/style.css">
    <title><?php wp_title ( '' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    
    <header class="topbar">
        
        <a href="<?php echo esc_url ( home_url('/')); ?>">
            <img  class="topbar__logo--bicolor"  src="<?php bloginfo ( 'template_url' ); ?>/images/logo/logo-bicolor.svg" alt="logotipo de sinaptikapp">
        </a>

        <div>
            <ul class="menu">
                <li class="menu__item"><a  class="menu__item-link  p" href="">Inicio</a></li>
                <li class="menu__item"><a  class="menu__item-link  p" href="">Aplicaciones</a></li>
                <li class="menu__item"><a  class="menu__item-link  p" href="">Blog</a></li>
                <li class="menu__item"><a  class="menu__item-link  p" href="">Conócenos</a></li>
                <li class="menu__item"><a  class="menu__item-link  p" href="">Háblanos</a></li>
            </ul>
                
            <div>
                <img  class="topbar__burger-icon  btn"  onclick="toggleMenu()"  src="/images/iconos/Burger icon.svg" alt="menú" >
                <ul class="burger-menu  hide">
                    <li class="burger-menu__item"><a class="burger-menu__item-link h2" href="">Inicio</a></li>
                    <li class="burger-menu__item"><a class="burger-menu__item-link h2" href="">Aplicaciones</a></li>
                    <li class="burger-menu__item"><a class="burger-menu__item-link h2" href="">Blog</a></li>
                    <li class="burger-menu__item"><a class="burger-menu__item-link h2" href="">Conócenos</a></li>
                    <li class="burger-menu__item"><a class="burger-menu__item-link h2" href="">Háblanos</a></li>
                </ul>    
            </div>
        </div> 
                    
    </header>


    