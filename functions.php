<?php
/**
 * 
 * Remove kadence alerts
 * 
 * */
update_option( 'kadence_starter_plugin_notice', true, false );


/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}
add_post_type_support( 'page', 'excerpt' );