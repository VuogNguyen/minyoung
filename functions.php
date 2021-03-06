<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

add_theme_support('automatic-feed-links');

/**
 * Add/Remove some scripts
 */

function wpbuild_scripts(){
	
	if(is_admin()){ return; }
	
	// Remove WP jQuery version
	wp_deregister_script('jquery');
	
}

add_action('init', 'wpbuild_scripts');

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
	'header_menu' => __( 'Header Menu', 'minyoung' ),
));

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

