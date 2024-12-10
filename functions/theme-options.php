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