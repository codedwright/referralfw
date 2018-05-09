<?php

// Theme Support
function referralfw_theme_setup(){
	// Logo Support
	// add_theme_support('custom-logo');

	// Featured Image
	add_theme_support('post-thumbnails');

	// register_nav_menus(array(
	// 	'primary'	=> __('Primary Menu')
	// ));
}

add_action('after_setup_theme', 'referralfw_theme_setup');

function referralfw_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		// if ( $post && $post->post_parent ) {
		// 	wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
		// 	exit;
		// } else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		// }
	}
}
add_action( 'template_redirect', 'referralfw_redirect_attachment_page' );


require_once('inc/referral_nav_walker.php');
require_once('inc/referral_submenu_walker.php');
require_once('inc/referral_playlist_taxonomy.php');
require_once('inc/referral_meta_box_dropdown.php');
require_once('inc/referral_frontpage_meta_box.php');
require_once('inc/referral_faq_meta_box.php');
require_once('inc/referral_gallery_meta_box.php');
require_once('inc/referral_gallery_generator.php');

function add_theme_scripts() {
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_register_script( 'jquery-new', get_template_directory_uri() . '/assets/js/jquery.js', true );
    wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery-new', 'popper' ), true );
    wp_enqueue_script( 'referralfw_scripts', get_template_directory_uri() . '/assets/js/referralfw.js', array ( 'jquery' ));//, array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );