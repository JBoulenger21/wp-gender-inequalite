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
		'name'                => 'sections',
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
      'name' => 'Cause Consequence',
      'all_items' => 'Causes Consequences',  // affiché dans le sous menu
      'singular_name' => 'Cause',
      'add_new_item' => 'Ajouter une cause consequence',
      'edit_item' => 'Modifier la cause consequence',
      'menu_name' => 'Cause Consequence'
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


add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'sections_custom_post_type' );
add_action( 'init', 'cause_custom_post_types' );
add_action( 'init', 'presentation_custom_post_type' );

