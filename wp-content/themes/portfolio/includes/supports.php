<?php
//  Pour la sécurité, obligatoire ici ou sur functions.php
defined('ABSPATH') or die('');

/**
 * Prise en compte des différents éléments de Wordpress
 */
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});

/**
 * Support des fichiers SVG
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});