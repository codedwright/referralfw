<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    function referral_faq_template($cnt, $template = null) {
        if ($template === null){
            $title = $description = '';
        } else{
            $title = $template['title'];
            $description = $template['description'];
        }
        return '
        <div class="row my-1">
            <div class="col-8">
                <div class="form-group">
                    <label for="referral-faq-meta-box['.$cnt.'][title]">Title: </label>
                    <input type="text" id="referral-faq-meta-box['.$cnt.'][title]" class="form-control" name="referral-faq-meta-box['.$cnt.'][title]" value="'.$title.'">
                    <small id="emailHelp" class="form-text text-muted">This is where you put the Heading of your FAQ answer.</small>
                </div>
                <div class="form-group">
                    <label for="referral-faq-meta-box['.$cnt.'][description]">Description: </label>
                    <textarea id="referral-faq-meta-box['.$cnt.'][description]" class="form-control" name="referral-faq-meta-box['.$cnt.'][description]"  rows="5">'.$description.'</textarea>
                </div>
            </div>
            <div class="col-4">
                <span class="btn btn-danger remove h-100 referral-faq-'.$cnt.'">
                    <i class="fas fa-minus-square h-100 align-middle"></i>
                </span>
            </div>
        </div>
        ';
    }
    
    
    //add custom field - price
    add_action("add_meta_boxes", "object_init");
    
    function object_init(){
        
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js');
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/admin-bootstrap.css');
        add_meta_box(
            'referral-faq-meta-box', // Unique ID
            esc_html__('FAQ Dropdowns', 'referralfw'), // Title
            'referral_faq_meta_box', // Callback function
            'page', // Admin page (or post type)
            'normal', // Context normal, advanced, and side
            'default' // Priority default, core, high, and low
        );    
    }
    
    function referral_faq_meta_box(){
        global $post;

        $data = get_post_meta($post->ID,"referral-faq-meta-box",true);
        ?>
        <div class="bootstrap">
            <div id="referral-faq">
        <?php
        
        $c = 0;
        if (count($data) > 0){
            foreach((array)$data as $faq ){
                if (isset($faq['title']) || isset($faq['description'])){
                    echo referral_faq_template($c, $faq);
                    $c++;
                }
            }

        }
        echo '</div>';
    
        ?>
            <span class="btn btn-success add"><i class="fas fa-plus-square"></i> <?php echo __('Add FAQ'); ?></span>
            <script>
                var $ =jQuery.noConflict();
                    $(document).ready(function() {
                        $('#referral-faq').on('click', '.remove', function() {
                            $(this).parent().parent().remove();
                            // alert('remove');
                        });
                        var count = <?php echo $c - 1; ?>; // substract 1 from $c
                        $(".add").click(function() {
                            count = count + 1;
                            //$('#price_items').append('<li><label>Nr :</label><input type="text" name="price_data[' + count + '][n]" size="10" value=""/><label>Description :</label><input type="text" name="price_data[' + count + '][d]" size="50" value=""/><label>Price :</label><input type="text" name="price_data[' + count + '][p]" size="20" value=""/><span class="remove">Remove</span></li>');
                        $('#referral-faq').append('<? echo implode('',explode("\n",referral_faq_template('count'))); ?>'.replace(/count/g, count));
                            return false;
                        });
                    
                });
            </script>
        <?php
        echo '</div>';
    }
    
    
    //Save product price
    add_action('save_post', 'referral_faq_save');
    
    function referral_faq_save($post_id){ 
    global $post;
    
    
        // to prevent metadata or custom fields from disappearing... 
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id; 
        // OK, we're authenticated: we need to find and save the data
        if (isset($_POST['referral-faq-meta-box'])){
            $data = $_POST['referral-faq-meta-box'];
            update_post_meta($post_id,'referral-faq-meta-box',$data);
        }else{
            delete_post_meta($post_id,'referral-faq-meta-box');
        }
    } 

?>