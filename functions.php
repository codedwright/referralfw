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
require_once('referral_faq_meta_box.php');
require_once('referral_submenu_walker.php');
require_once('referral_nav_walker.php');
// require_once('faq_menu_boxes.php');

// function init_widgets($id){
// 	register_sidebar(array(
// 		'name'		=> 'YouTube Testimonials',
// 		'id'		=> 'youtube',
// 		'before_widget'	=> '<section class="row content-region-1 pt50 pb40"><div class="container"><div class="col-md-12">',
// 		'after_widget'	=> '</div></div></section>',
// 		'before_title'	=>	'<h1>',
// 		'after_title'	=>	'</h1>'
// 	));
// }
//
// add_action('widgets_init', 'init_widgets');


