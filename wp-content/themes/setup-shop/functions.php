<?php
/**
 * Olie Larner
 * Ecommerce Science functions and definitions
 */

// Add style sheet to Back End

function my_acf_admin_head() {
    ?>
    <link rel="stylesheet" href="http://localhost:8888/Setup_Shop/setup-shop-fe/src/styles/global.css">
    <link rel="stylesheet" href="http://localhost:8888/Setup_Shop/setup-shop-fe/src/styles/tailwind.css">
    <style>
        .wp-block {
    max-width: 1200px!important;
            }
    </style>
    <?php
}


// Add Site Settings

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'site-settings',
        'show_in_graphql' => true
    ));
	
}

// Featured Image

add_theme_support( 'post-thumbnails' );

// Register Custom Menu

function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_header_menu' );

  add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$slug = get_field('slug', $item);
		
	}
	
	
	// return
	return $items;
	
}

// Register blocks

if (function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){
    acf_register_block_type(
        array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('Hero for the main page'),
            'render_template' =>
            'template-parts/blocks/home/hero.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('hero', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'features',
            'title' => __('Features'),
            'description' => __('Features for the main page'),
            'render_template' =>
            'template-parts/blocks/home/features.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('features', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'case-study-banner',
            'title' => __('Case Study Banner'),
            'description' => __('Case Study Banner for the main page'),
            'render_template' =>
            'template-parts/blocks/home/case-study.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('case study', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'featured-articles',
            'title' => __('Featured Articles'),
            'description' => __('Featured Articles for the main page'),
            'render_template' =>
            'template-parts/blocks/home/featured-articles.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('featured articles', 'home'),
        )
    );
}