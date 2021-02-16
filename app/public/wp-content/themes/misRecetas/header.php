<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/prueba_3/css/estilos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/prueba_3/css/grid.css">


    <?php wp_head(); ?>
</head>

<body class="cuerpo-ppal">
    <div class="container">

        <header id="header" class="block-center-row pdg-top-1 pdg-btn-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/logo-recetas-bruno.png" alt="">
        </header>

        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'Menu-1',
                    'Menu-1' => 'primary-menu',
                    'menu-item-1-container_class' => 'nav-bar'
                    )
                );
        ?>

        <div>
            <nav class="nav-bar">
                <ul>
                    <li class="txt-mayus-bold"><a href="<?php echo get_stylesheet_directory_uri(); ?>/prueba_3/html/index.html">INICIO</a></li>
                    <li class="txt-mayus-bold"><a href="<?php echo get_stylesheet_directory_uri(); ?>/prueba_3/html/recetas.html">RECETAS</a></li>
                    <li class="txt-mayus-bold"><a href="<?php echo get_stylesheet_directory_uri(); ?>/prueba_3/html/contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
        </div>