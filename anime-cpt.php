<?php
// Registro del Custom Post Type para Animes
function anime_create_custom_post_type() {
    $labels = array(
        'name'               => 'Animes',
        'singular_name'      => 'Anime',
        'menu_name'          => 'Animes',
        'name_admin_bar'     => 'Anime',
        'add_new'            => 'Agregar Nuevo',
        'add_new_item'       => 'Agregar Nuevo Anime',
        'new_item'           => 'Nuevo Anime',
        'edit_item'          => 'Editar Anime',
        'view_item'          => 'Ver Anime',
        'all_items'          => 'Todos los Animes',
        'search_items'       => 'Buscar Animes',
        'not_found'          => 'No se encontraron Animes',
        'not_found_in_trash' => 'No se encontraron Animes en la papelera',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'anime'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,  // Habilita el editor Gutenberg
    );

    register_post_type('anime', $args);
}
add_action('init', 'anime_create_custom_post_type');
