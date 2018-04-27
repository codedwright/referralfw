<?php
    function referral_gallery_meta_box_template() {
        return 
<<<HTML
        <div class="bootstrap">
            <div class="card w-100 mw-100 p-0 m-0">
                <div class="card-header">
                    How To Edit A Gallery
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Switch the text editor from "Visual" to "Text".</li>
                    <li class="list-group-item">Click "Add Media" button above the text editor.</li>
                    <li class="list-group-item">Select from the left sidebar "Create Gallery"</li>
                    <li class="list-group-item">Choose any images you'd like to use or upload new files.</li>
                    <li class="list-group-item">Once choosen, select "Create New Gallery" button near bottom right corner.</li>
                    <li class="list-group-item">Choose Gallery Settings in right sidebar, and click "Insert Gallery" button near lower right corner.</li>
                    <li class="list-group-item">--If you ever want to edit the gallery, switch the text editor from "Text" to "Visual", hover over the gallery and click the pencil icon.</li>
                </ul>
            </div>
        </div>
HTML;
    }

    add_action("add_meta_boxes", "referral_gallery_meta_box_init");
    
    function referral_gallery_meta_box_init() {
        
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/meta-boxes.css');
        add_meta_box(
            'referral-gallery-meta-box', // Unique ID
            esc_html__('Gallery Information', 'referralfw'), // Title
            'referral_gallery_meta_box', // Callback function
            'page', // Admin page (or post type)
            'normal', // Context normal, advanced, and side
            'default' // Priority default, core, high, and low
        );    
    }
    
    function referral_gallery_meta_box() {
        echo referral_gallery_meta_box_template();
    }

?>