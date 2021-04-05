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

require_once('widgets/social.php');

add_action('widgets_init', function() {
    register_widget(Portfolio_Social_Widget::class);

    register_sidebar([
        'id'                =>  'footer',
        'name'              =>  __('Footer', 'portfolio'),
        'before_title'      =>  '<h5>',
        'after_title'       =>  '</h5>',
        'before_widget'     =>  '<div class="col-4 col-md">',
        'after_widget'      =>  '</div>',
    ]);

});

