<?php

function montheme_supports(){
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
}

function montheme_register_assets()
{
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css', []);
  wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['popper'], false, true);
  wp_register_script('popper','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
  wp_enqueue_style('style',get_stylesheet_uri());
}

function montheme_title_separator(){
  return '|';
}

function register_my_menu() {
register_nav_menu('navigation-hf',__('navigation-hf'));
}

function themename_custom_header_setup() {
  $args = array(
      'default-image'      => get_template_directory_uri() . 'assets/images/banner.png',
      'width'              => 1577,
      'height'             => 741,
      'flex-width'         => true,
      'flex-height'        => true,
  );
  add_theme_support( 'custom-header', $args );
}

function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 150,
  'width'       => 150,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }

function introduction_custom_post_type() {
	$labels = array(
		'name'                => 'introduction',
		'singular_name'       => 'introduction',
		'menu_name'           => 'introduction',
		'all_items'           => 'Toutes les introductions',
		'view_item'           => 'Voir les introductions',
		'add_new_item'        => 'Ajouter une nouvelle introduction',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer la introduction',
		'update_item'         => 'Modifier la introduction',
		'search_items'        => 'Rechercher une introduction',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'introduction',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-format-status',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'introduction', $args );
}

function presentation_custom_post_type() {
	$labels = array(
		'name'                => 'presentation',
		'singular_name'       => 'presentation',
		'menu_name'           => 'presentation',
		'all_items'           => 'Toutes les presentations',
		'view_item'           => 'Voir les presentations',
		'add_new_item'        => 'Ajouter une nouvelle presentation',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer la presentation',
		'update_item'         => 'Modifier la presentation',
		'search_items'        => 'Rechercher une presentation',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'presentation',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-edit-large',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'presentation', $args );
}

function sections_custom_post_type() {
	$labels = array(
		'name'                => 'Pages',
		'singular_name'       => 'sections',
		'menu_name'           => 'sections',
		'all_items'           => 'Toutes les sections',
		'view_item'           => 'Voir les sections',
		'add_new_item'        => 'Ajouter une nouvelle section',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer la section',
		'update_item'         => 'Modifier la section',
		'search_items'        => 'Rechercher une section',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'sections',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-info',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'sections', $args );
}

function cause_custom_post_types() {
  // CPT causes conséquences
  $labels = array(
      'name' => 'Cause',
      'all_items' => 'Causes',  // affiché dans le sous menu
      'singular_name' => 'Cause',
      'add_new_item' => 'Ajouter une cause consequence',
      'edit_item' => 'Modifier la cause consequence',
      'menu_name' => 'Cause'
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor','thumbnail' ),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
  );
  register_post_type( 'cause', $args );
}
function chiffre_custom_post_type() {
	$labels = array(
		'name'                => 'Données chiffrées',
		'singular_name'       => 'Données chiffrées',
		'menu_name'           => 'Données chiffrées',
		'all_items'           => 'introductions',
		'view_item'           => 'Voir Données chiffrées',
		'add_new_item'        => 'Ajouter une nouvelle donnée',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer la presentation',
		'update_item'         => 'Modifier la presentation',
		'search_items'        => 'Rechercher une presentation',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'données chiffrées',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-edit-large',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'chiffre', $args );
}

function consequence_custom_post_types() {
  // CPT causes conséquences
  $labels = array(
      'name' => 'Consequence',
      'all_items' => 'Consequences',  // affiché dans le sous menu
      'singular_name' => 'Consequence',
      'add_new_item' => 'Ajouter une cause consequence',
      'edit_item' => 'Modifier la cause consequence',
      'menu_name' => 'Consequence'
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor','thumbnail' ),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
  );
  register_post_type( 'consequence', $args );
}
function legislation_custom_post_type() {
	$labels = array(
		'name'                => 'legislation',
		'singular_name'       => 'legislation',
		'menu_name'           => 'legislation',
		'all_items'           => 'Toutes les articles',
		'view_item'           => 'Voir les articles',
		'add_new_item'        => 'Ajouter une nouvelle presentation',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer un article',
		'update_item'         => 'Modifier un article',
		'search_items'        => 'Rechercher un article',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'legislation',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-edit-large',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'legislation', $args );
}


add_filter( 'excerpt_length', function () {
	return 100;
}, 999 );
add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'sections_custom_post_type' );
add_action( 'init', 'cause_custom_post_types' );
add_action( 'init', 'consequence_custom_post_types' );
add_action( 'init', 'presentation_custom_post_type' );
add_action( 'init', 'introduction_custom_post_type' );
add_action( 'init', 'chiffre_custom_post_type' );
add_action( 'init', 'legislation_custom_post_type' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
