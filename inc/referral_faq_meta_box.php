<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    function referral_faq_meta_box_template($count, $template = null) {
        if ($template === null){
            $title = $description = '';
        } else{
            $title = $template['title'];
            $description = $template['description'];
        }
        return '
        <div class="row my-1">
            <div class="col-11">
                <div class="form-group">
                    <label for="referral-faq-meta-box['.$count.'][title]">Title: </label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-light text-secondary">
                            <span class="input-group-text"><i class="fas fa-chevron-circle-down"></i></span>
                        </div>
                        <input type="text" id="referral-faq-meta-box['.$count.'][title]" class="form-control" name="referral-faq-meta-box['.$count.'][title]" value="'.$title.'">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary edit" type="button"><i class="fas fa-pencil-alt"></i> Edit</button>
                        </div>
                    </div>
                    <small class="form-text text-muted">This is where you put the QUESTION of your FAQ.</small>
                </div>
                <div class="form-group collapse">
                    <label for="referral-faq-meta-box['.$count.'][description]">Description: <span class="small text-danger">Don&apos;t Forget To Save</span>
                    </label>
                    <textarea id="referral-faq-meta-box['.$count.'][description]" class="form-control" name="referral-faq-meta-box['.$count.'][description]"  rows="5">'.$description.'</textarea>
                    <small class="form-text text-muted">This is where you ANSWER your FAQ.</small>
                </div>
            </div>
            <div class="col-1">
                <span class="btn btn-danger remove h-100 referral-faq-'.$count.'">
                    <i class="fas fa-minus-square h-100 align-middle"></i>
                </span>
            </div>    
        </div>
        <hr>
        ';
    }
    
    
    //add custom field - price
    add_action("add_meta_boxes", "referral_faq_meta_box_init");
    
    function referral_faq_meta_box_init() {
        
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/meta-boxes.css');
        add_meta_box(
            'referral-faq-meta-box', // Unique ID
            esc_html__('FAQ Dropdowns', 'referralfw'), // Title
            'referral_faq_meta_box', // Callback function
            'page', // Admin page (or post type)
            'normal', // Context normal, advanced, and side
            'default' // Priority default, core, high, and low
        );    
    }
    
    function referral_faq_meta_box() {
        global $post;

        $data = get_post_meta($post->ID,"referral-faq-meta-box",true);
        ?>
        <div class="bootstrap">
            <div id="referral-faq">
            <?php wp_nonce_field( basename( __FILE__ ), 'referral_faq_nonce' ); ?>
            <p class="h2 text-info w-100">Click " Edit" To Expand <span class="text-danger float-right">Don't Forget To Save</span></p>
        <?php
        
        $c = 0;
        if (count($data) > 0){
            foreach((array)$data as $faq ){
                if (isset($faq['title']) || isset($faq['description'])){
                    echo referral_faq_meta_box_template($c, $faq);
                    $c++;
                }
            }

        }
        echo '</div>';
    
        ?>
            <span class="btn btn-success add"><i class="fas fa-plus-square"></i> <?php echo __('Add FAQ'); ?></span>
            <small class="form-text text-danger">Don't Forget To Save</small>
            <script>
                var $ =jQuery.noConflict();
                    $(document).ready(function() {
                        $('#referral-faq').on('click', '.remove', function() {
                            $(this).parent().parent().remove();
                            // alert('remove');
                        });
                        $('#referral-faq').on('click', '.edit', function() {
                            $(this).parent().parent().parent().next().slideToggle();
                            $(this).parent().prev().prev().children().children().toggleClass('fa-chevron-circle-up');
                            $(this).parent().prev().prev().children().children().toggleClass('fa-chevron-circle-down');
                            // alert('remove');
                        });
                        var count = <?php echo $c - 1; ?>; // substract 1 from $c
                        $(".add").click(function() {
                            count = count + 1;
                            //$('#price_items').append('<li><label>Nr :</label><input type="text" name="price_data[' + count + '][n]" size="10" value=""/><label>Description :</label><input type="text" name="price_data[' + count + '][d]" size="50" value=""/><label>Price :</label><input type="text" name="price_data[' + count + '][p]" size="20" value=""/><span class="remove">Remove</span></li>');
                        $('#referral-faq').append('<? echo implode('',explode("\n",referral_faq_meta_box_template('count'))); ?>'.replace(/count/g, count));
                            return false;
                        });
                    
                });
            </script>
        <?php
        echo '</div>';
    }
    
    
    //Save product price
    add_action('save_post', 'referral_faq_save', 10, 2);
    
    function referral_faq_save( $post_id ) { 
        global $post;
        /* Verify the nonce before proceeding. */
        if ( !isset( $_POST['referral_faq_nonce'] ) || !wp_verify_nonce( $_POST['referral_faq_nonce'], basename( __FILE__ ) ) )
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
        if ( isset($_POST['referral-faq-meta-box']) ){
            $data = $_POST['referral-faq-meta-box'];
            update_post_meta($post_id, 'referral-faq-meta-box', $data);
        } else {
            delete_post_meta($post_id, 'referral-faq-meta-box');
        }
    } 

?>