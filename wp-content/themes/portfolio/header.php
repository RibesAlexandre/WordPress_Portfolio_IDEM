<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2">Business Name or Tagline</h1>
                <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
            </div>
        </div>
    </div>
</header>

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
            wp_nav_menu([
                'theme_location'    =>  'header',
                'container'         =>  false,
                'menu_class'        =>  'navbar-nav ml-auto'
            ])
            ?>
        </div>
    </div>
</nav>