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
    <?php wp_head(); ?>
</head>

<body>

    
    <header class="topbar">
        
        <div class="topbar__logo--bicolor">
            <a href="<?php echo esc_url ( home_url('/')); ?>">
                <img  class="topbar__logo--bicolor"  src="<?php bloginfo ( 'template_url' ); ?>/images/logo/logo-bicolor.svg" alt="logotipo de sinaptikapp">
            </a>
        </div>

        <div>

            <ul class="desktop-menu">

                <?php wp_nav_menu ( array ( 'theme_location' => 'topbar-menu', 'container' => false ) ); ?>

            </ul>



            <img  class="topbar__burger-icon  btn"  onclick="toggleMenu()"  src="<?php bloginfo ( 'template_url' ); ?>/images/iconos/Burger icon.svg" alt="menú" >
                            
            <ul class="burger-menu  hide">

                <?php wp_nav_menu ( array ( 'theme_location' => 'topbar-menu-mobile', 'container' => false ) ); ?>

            </ul>    

                
        </div> 

        
                    
    </header>


    