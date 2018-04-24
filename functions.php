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
// require_once('referral_faq_meta_box.php');
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

require_once('playlist-taxonomy.php');
require_once('referral_faq.php');
/* 
 * Change Meta Box visibility according to Page Template
 *
 * Observation: this example swaps the Featured Image meta box visibility
 *
 * Usage:
 * - adjust $('#postimagediv') to your meta box
 * - change 'page-portfolio.php' to your template's filename
 * - remove the console.log outputs
 */

add_action('admin_head', 'wpse_50092_script_enqueuer');

function wpse_50092_script_enqueuer() {
    global $current_screen;
    if('page' != $current_screen->id) return;

    echo <<<HTML
        <script type="text/javascript">
        jQuery(document).ready( function($) {

            /**
             * Adjust visibility of the meta box at startup
            */
            if($('#page_template').val() == 'page-templates/page_sidebar.php') {
                // show the meta box
                $('#referral-faq-meta-box').slideDown();
            } else {
                // hide your meta box
                $('#referral-faq-meta-box').slideUp();
            }

            // Debug only
            // - outputs the template filename
            // - checking for console existance to avoid js errors in non-compliant browsers
            if (typeof console == "object") 
                console.log ('default value = ' + $('#page_template').val());

            /**
             * Live adjustment of the meta box visibility
            */
            $('#page_template').on('change', function(){
                    if($(this).val() == 'page-templates/page_sidebar.php') {
                    // show the meta box
                    $('#referral-faq-meta-box').slideDown();
                } else {
                    // hide your meta box
                    $('#referral-faq-meta-box').slideUp();
                }

                // Debug only
                if (typeof console == "object") 
                    console.log ('live change value = ' + $(this).val());
            });                 
        });    
        </script>
HTML;
}