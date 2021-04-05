<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= home_url('/') ?>" title="<?= __('Homepage', 'portfolio'); ?>">
            <img src="<?= get_theme_mod('logo'); ?>" alt="LOGO">
            <span><?php bloginfo('name'); ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php
            //  Affichage de notre barre de navigation, générée grâce à Wordpress
            wp_nav_menu([
                'theme_location'    =>  'header',
                'container'         =>  false,
                'menu_class'        =>  'navbar-nav ml-auto'
            ])
            ?>
        </div>
    </div>
</nav>