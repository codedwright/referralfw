<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    require_once('referral_frontpage_introduction_template.php');
    require_once('referral_frontpage_estimate_template.php');
    require_once('referral_frontpage_guides_template.php');
    require_once('referral_frontpage_written_testimonial_template.php');
    require_once('referral_frontpage_video_testimonial_template.php');

    function referral_frontpage_meta_box_template() {
        global $post;
        $frontpage = get_post_meta($post->ID,"referral-frontpage-meta-box",true);
        $nonce = wp_nonce_field( basename( __FILE__ ), 'referral_frontpage_nonce' );
        // if (count($data) > 0){
        //     foreach((array)$data as $frontpage ){
                if (isset($frontpage['introduction']) || isset($frontpage['estimate']) || isset($frontpage['guides']) ){
                    $introduction = referral_frontpage_introduction_template($frontpage['introduction']['title'], $frontpage['introduction']['description'], $frontpage['introduction']['video']);
                    $estimate = referral_frontpage_estimate_template($frontpage['estimate']);
                    $guides = referral_frontpage_guides_template($frontpage['guides']['description'], $frontpage['guides']['linked']);            
                } else {
                    $introduction = referral_frontpage_introduction_template();
                    $estimate = referral_frontpage_estimate_template();
                    $guides = referral_frontpage_guides_template();
                }
                $written = referral_frontpage_written_testimonial_template();
                $video = referral_frontpage_video_testimonial_template();
        //     }
        // }
        return 
<<< HTML
        <div class="bootstrap">
            <div id="referral-frontpage">
                <p class="h2 text-info w-100">Click A Section Heading To Expand <span class="text-danger float-right">Don't Forget To Save</span></p>
                $nonce
                <div id="frontpage-meta-box">
                    $introduction
                    $estimate
                    $guides
                    $written
                    $video
                </div>
                <small class="form-text text-danger">Don't Forget To Save</small>
            </div>
        </div>
HTML;
    }
    
    
    //add custom field - price
    add_action("add_meta_boxes", "referral_frontpage_meta_box_init");
    
    function referral_frontpage_meta_box_init() {
        
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js');
        // wp_register_script( 'jquery-new', get_template_directory_uri() . '/assets/js/jquery.js', true );
        wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', true );
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery', 'popper' ), true );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/meta-boxes.css');
        add_meta_box(
            'referral-frontpage-meta-box', // Unique ID
            esc_html__('frontpage Dropdowns', 'referralfw'), // Title
            'referral_frontpage_meta_box', // Callback function
            'page', // Admin page (or post type)
            'normal', // Context normal, advanced, and side
            'default' // Priority default, core, high, and low
        );    
    }
    
    function referral_frontpage_meta_box() {
        echo referral_frontpage_meta_box_template();
    }
    
    
    //Save product price
    add_action('save_post', 'referral_frontpage_save', 10, 2);
    
    function referral_frontpage_save( $post_id ) { 
        global $post;
        /* Verify the nonce before proceeding. */
        if ( !isset( $_POST['referral_frontpage_nonce'] ) || !wp_verify_nonce( $_POST['referral_frontpage_nonce'], basename( __FILE__ ) ) )
            return $post_id;

        /* Get the post type object. */
        $post_type = get_post_type_object( $post->post_type );

        /* Check if the current user has permission to edit the post. */
        if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
            return $post_id;

        // to prevent metadata or custom fields from disappearing... 
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
            return $post_id;
        
        // OK, we're authenticated: we need to find and save the data
        if ( isset($_POST['referral-frontpage-meta-box']) ){
            $data = $_POST['referral-frontpage-meta-box'];
            update_post_meta($post_id, 'referral-frontpage-meta-box', $data);
        } else {
            delete_post_meta($post_id, 'referral-frontpage-meta-box');
        }
    } 

?>