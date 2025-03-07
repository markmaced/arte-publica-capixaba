<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array('jquery'), $theme->get( 'Version' ) );
	wp_enqueue_script('jquery');
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
	wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
	wp_add_inline_script('aos-js', 'AOS.init();');
	wp_enqueue_script('sweetAlert' , 'https://cdn.jsdelivr.net/npm/sweetalert2@11');
	wp_localize_script(
		'tailpress',
		'wpurl',
		array(
			'ajax' => admin_url('admin-ajax.php'),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

$functions_path = get_template_directory() . '/functions/';

require_once($functions_path . 'theme-options.php');
require_once($functions_path . 'search-collections.php');
require_once($functions_path . 'random-items-collections.php');
require_once($functions_path . 'breadcrumbs.php');
require_once($functions_path . 'tipo-de-ficha.php');
require_once($functions_path . 'filter-library.php');
require_once($functions_path . 'log-to-file.php');
require_once($functions_path). 'get-cities-by-region-with-links.php';

global $urlapi; $urlapi = "https://www.artepublicacapixaba.com.br";

/**
	* Registrando novo tipo de Post: Membros
	*/
	
	add_action('init', 'glossario_register');
 
	function glossario_register() {
	
		$labels = array(
			'name' => __('Glossário'),
			'singular_name' => __('Glossário'),
			'add_new' => __('Inserir novo termo'),
			'add_new_item' => __('Inserir termo'),
			'edit_item' => __('Editar termo'),
			'new_item' => __('Novo termo'),
			'view_item' => __('Ver termo'),
			'search_items' => __('Buscar termo'),
			'not_found' =>  __('Nenhum termo encontrado'),
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
			'menu_icon' => 'dashicons-image-filter',
			'rewrite' => true,
			'capability_type' => 'page',
			'hierarchical' => false,
			'menu_position' => null,
			'exclude_from_search' => true,
			'supports' => array('title')
			); 
	
		register_post_type( 'glossario' , $args );
	}
	
	add_filter('enter_title_here', 'my_title_place_holder_glossario' , 20 , 2 );
	function my_title_place_holder_glossario($title , $post){
	
		   if( $post->post_type == 'glossario' ){
				$my_title = "Termo";
				return $my_title;
		   }
	
		   return $title;
	
	}
    
 add_action('init', 'membros_register');

 function membros_register() {
 
	 $labels = array(
		 'name' => __('Colaboradores'),
		 'singular_name' => __('Colaborador'),
		 'add_new' => __('Inserir novo colaborador'),
		 'add_new_item' => __('Inserir colaborador'),
		 'edit_item' => __('Editar colaborador'),
		 'new_item' => __('Novo colaborador'),
		 'view_item' => __('Ver colaborador'),
		 'search_items' => __('Buscar candidato'),
		 'not_found' =>  __('Nenhum colaborador encontrado'),
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
		 'menu_icon' => 'dashicons-groups',
		 'rewrite' => true,
		 'capability_type' => 'page',
		 'hierarchical' => false,
		 'menu_position' => null,
		 'exclude_from_search' => true,
		 'supports' => array('title', 'thumbnail', 'page-attributes')
		 ); 
 
	 register_post_type( 'membro' , $args );
 }
 
 add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
 function my_title_place_holder($title , $post){
 
		if( $post->post_type == 'membro' ){
			 $my_title = "Nome do colaborador";
			 return $my_title;
		}
 
		return $title;
 
 }
