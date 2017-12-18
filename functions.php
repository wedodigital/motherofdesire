<?php
/**
 * Your code here.
 *
 */

//Enqueue Script

function load_custom_wp_admin_style() { //FOR ADMIN
        wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/admin-style.css');
        wp_enqueue_style( 'custom_wp_admin_css' );

        wp_enqueue_style( 'Khula-font', 'https://fonts.googleapis.com/css?family=Khula:300,400,700');
        wp_register_style( 'font_css', get_stylesheet_directory_uri() . '/fonts.css');
        wp_enqueue_style( 'font_css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function load_custom_wp_style_script() { //FOR FRONT DESIGN
		wp_enqueue_style( 'Khula-font', 'https://fonts.googleapis.com/css?family=Khula:300,400,700');

        wp_register_style( 'font_css', get_stylesheet_directory_uri() . '/fonts.css');
        wp_enqueue_style( 'font_css' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_wp_style_script' );

remove_action('admin_notices', 'registration_admin_notice', 1);

function dt_change_default_sidebar() {

	global $DT_META_BOXES;

	if ( $DT_META_BOXES ) {

			if ( isset($DT_META_BOXES[ 'dt_page_box-sidebar' ]) ) {
				$DT_META_BOXES[ 'dt_page_box-sidebar' ]['fields'][0]['std'] = 'disabled'; // use disabled to disable sidebar 
			}

	}
}
add_action( 'admin_init', 'dt_change_default_sidebar', 30 );