<?php

/**
 * Enregistrement du nouveau menu pour la barre de navigation
 * On le retrouvera dans l'administration des menus de Wordpress, avec pour nom Main Navigation
 * Il sera utilisable uniquement sur le thème : Portfolio
 */
add_action('after_setup_theme', function() {
    register_nav_menu('header', __('Main navigation', 'portfolio'));
});

/**
 * On enregistre une nouvelle classe CSS pour les listes li contenant les liens
 * de navigation générées par le menu
 */
add_filter('nav_menu_css_class', function($classes) {
    $classes[] = 'nav-item';
    return $classes;
});

/**
 * On rajoute une nouvelle classe CSS pour les liens a href="" du menu de navigation
 */
add_filter('nav_menu_link_attributes', function ($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
});