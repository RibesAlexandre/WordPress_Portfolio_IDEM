<?php

/**
 * Plugin Name: Portfolio Work Plugin by Alexandre Ribes
 */
add_action('init', function () {
    register_post_type('work', [
        'label' => 'Réalisation',
        'menu_icon' => 'dashicons-admin-customizer',
        'show_in_rest'  =>  true,
        'labels' => [
            'name' => 'Réalisations',
            'singular_name' => 'Réalisation',
            'edit_item' => 'Editer une réalisation',
            'new_item' => 'Créer une réalisation',
            'view_item' => 'Voir la réalisation',
            'view_items' => 'Voir les réalisations',
            'search_items' => 'Rechercher dans les réalisations',
            'not_found' => 'Aucune réalisation trouvée',
            'not_found_in_trash' => 'Aucune réalisation trouvée dans la corbeille',
            'all_items' => 'Toutes les réalisations',
            'archives' => 'Archive des réalisations',
            'attributes' => 'Attributs des réalisations',
            'insert_into_item' => 'Insérer dans la réalisation',
            'uploaded_to_this_item' => 'Uploader dans cette réalisation',
            'filter_items_list' => 'Filtrer la liste des réalisations',
            'items_list_navigation' => 'Naviger dans la liste des réalisations',
            'items_list' => 'Liste des réalisations',
            'item_published' => 'Réalisation publiée',
            'item_published_privately' => __('Work published privately.', 'portfolio'),
            'item_reverted_to_draft' => __('Work reverted to draft.', 'portfolio'),
            'item_scheduled' => __('Work scheduled.', 'portfolio'),
            'item_updated' => __('Work updated.', 'portfolio'),
        ],
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'taxonomies' => ['work_category'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'rewrite'               =>  [
            'slug'      =>  'mes-realisations',
        ],
    ]);
    register_taxonomy('work_category', 'work', [
        'meta_box_cb' => 'post_categories_meta_box',
        'show_in_rest'  =>  true,
        'labels' => [
            'name' => 'Catégories',
            'singular_name' => 'Catégorie',
            'search_items' => 'Rechercher dans les catégories',
            'popular_items' => 'Catégories populaires',
            'all_items' => 'Toutes les catégories',
            'edit_item' => 'Editer une catégorie',
            'view_item' => 'Voir une catégorie',
            'update_item' => 'Mettre à jour la catégorie',
            'add_new_item' => 'Ajouter une nouvelle catégorie',
            'new_item_name' => 'Nouveau nom de catégorie',
            'separate_items_with_commas' => __('Separate Categories with commas', 'portfolio'),
            'add_or_remove_items' => __('Add or remove Categories', 'portfolio'),
            'choose_from_most_used' => __('Choose from the most used Categories', 'portfolio'),
            'not_found' => __('No Categories found.', 'portfolio'),
            'no_terms' => __('No Categories', 'portfolio'),
            'items_list_navigation' => __('Categories list navigation', 'portfolio'),
            'items_list' => __('Categories list', 'portfolio'),
            'back_to_items' => __('&larr; Back to Categories', 'portfolio'),
        ]
    ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');