<?php 

function register_menu_theme() {
    register_nav_menus(
        array(
            'menu-principal' => __('Principal'),
            // 'menu-rodape' => __('Menu Rodapé'),
        )
    );
}
add_action('init', 'register_menu_theme');

add_action('init', 'repositorio_register');
function repositorio_register() {

    $labels = array(
        'name' => __('Biblioteca Virtual'),
        'singular_name' => __('Biblioteca Virtual'),
        'add_new' => __('Inserir novo item'),
        'add_new_item' => __('Inserir item'),
        'edit_item' => __('Editar item'),
        'new_item' => __('Novo item'),
        'view_item' => __('Novo item'),
        'search_items' => __('Buscar item'),
        'not_found' =>  __('Nenhum item encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );

    $args = array(
        'has_archive' => false,
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-media-document',
        'rewrite' => true,
        'capability_type' => 'page',
        'hierarchical' => false,
        'menu_position' => null,
        'exclude_from_search' => true,
        'supports' => array('title', 'thumbnail')
        ); 

    register_post_type( 'repositorio' , $args );
}