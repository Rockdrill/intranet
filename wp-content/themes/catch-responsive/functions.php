<?php
/**
 * Functions and definitions
 *
 * Sets up the theme using core catchresponsive-core and provides some helper functions using catchresponsive-custon-functions.
 * Others are attached to action and
 * filter hooks in WordPress to change core functionality
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

//define theme version
if ( !defined( 'CATCHRESPONSIVE_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();
	
	define ( 'CATCHRESPONSIVE_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Implement the core functions
 */
require get_template_directory() . '/inc/catchresponsive-core.php';



function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/mi-logo.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');