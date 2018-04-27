<?php 
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

add_action('admin_head', 'referral_meta_box_dropdown');

function referral_meta_box_dropdown() {
    global $current_screen;
    if('page' != $current_screen->id) return;

    echo <<<HTML
        <script type="text/javascript">
        jQuery(document).ready( function($) {

            /**
             * Adjust visibility of the meta box at startup
            */
            if($('#page_template').val() == 'faq.php') {
                // show the meta box
                $('#referral-faq-meta-box').slideDown();
            } else if($('#page_template').val() == 'gallery.php') {
                // show the meta box
                $('#referral-gallery-meta-box').slideDown();
            } else {
                // hide your meta box
                $('.meta-box-sortables>[id^=referral-]').slideUp();
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
                $('.meta-box-sortables>[id^=referral-]').slideUp();
                if($(this).val() == 'faq.php') {
                    // show the meta box
                    $('[id^=referral-faq-meta-box]').slideDown();
                } else if($(this).val() == 'gallery.php') {
                    // show the meta box
                    $('#referral-gallery-meta-box').slideDown();
                } else {
                    // hide your meta box
                    //$('#referral-faq-meta-box').slideUp();
                }

                // Debug only
                if (typeof console == "object") 
                    console.log ('live change value = ' + $(this).val());
            });                 
        });    
        </script>
HTML;
}
?>