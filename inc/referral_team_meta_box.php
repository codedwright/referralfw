<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    
    require_once('referral_team_template.php');
    
    //add custom field - price
    add_action("add_meta_boxes", "referral_team_meta_box_init");
    
    function referral_team_meta_box_init() {
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/meta-boxes.css');
        add_meta_box(
            'referral-team-meta-box', // Unique ID
            esc_html__('The Referral Team', 'referralfw'), // Title
            'referral_team_meta_box', // Callback function
            'page', // Admin page (or post type)
            'normal', // Context normal, advanced, and side
            'default' // Priority default, core, high, and low
        );    
    }
    
    function referral_team_meta_box() {
        global $post;

        $data = get_post_meta($post->ID, "referral-team-meta-box", true);

        $nonce = wp_nonce_field( basename( __FILE__ ), 'referral_team_nonce' );
        $referral_team_meta_box_header = <<<HTML
<div class="bootstrap">
    <div id="referral-team">
    $nonce
    <p class="h2 text-info w-100">Click " Edit" To Expand <span class="text-danger float-right">Don't Forget To Save</span></p>
    <div class="team-members">
HTML;
        
        $count_team = 0;
        $referral_team_meta_box_body = '';
        if (count($data) > 0 && !empty($data)){
            foreach((array)$data as $team ) {
                var_dump($team);
                $count_certifications = 0;
                $certifications = '';
                if(isset($team['certifications'])) {
                    foreach((array)$team['certifications'] as $certification) {
                        $certifications .= referral_team_certification_template($count_team, $count_certifications, $certification);
                        $count_certifications++;
                    }
                    $referral_team_meta_box_body .= referral_team_member_template(
                        $count_team, 
                        $certifications,
                        isset($team['order']) ? $team['order'] : '',
                        isset($team['name']) ? $team['name'] : '',
                        isset($team['title']) ? $team['title'] : '',
                        isset($team['video']) ? $team['video'] : '',
                        isset($team['feedback-name']) ? $team['feedback-name'] : '',
                        isset($team['feedback-quote']) ? $team['feedback-quote'] : ''
                    );
                } else if(isset($team['name'])) {
                    $referral_team_meta_box_body .= referral_team_member_template(
                        $count_team, 
                        '',
                        isset($team['order']) ? $team['order'] : '',
                        isset($team['name']) ? $team['name'] : '',
                        isset($team['title']) ? $team['title'] : '',
                        isset($team['video']) ? $team['video'] : '',
                        isset($team['feedback-name']) ? $team['feedback-name'] : '',
                        isset($team['feedback-quote']) ? $team['feedback-quote'] : ''
                    );
                } else {
                    $referral_team_meta_box_body .= referral_team_member_template($count_team);
                }
                $count_team++;
            }
        } else {
            $referral_team_meta_box_body .= referral_team_member_template(0, referral_team_certification_template(0));
        }
        $label = __('Add Team Member');
        $referral_team_meta_box_footer = <<<HTML
</div>
<span class="btn btn-success add"><i class="fas fa-plus-square"></i> $label</span>
<small class="form-text text-danger">Don't Forget To Save</small>
<script>
    var teamCount = $count_team;
    var certificationCount = $count_certifications;
    $('#referral-team').on('click', '.remove', function() {
        if(teamCount > 0) {
            $(this).parent().parent().remove();
            teamCount--;
        }
    });
    $('#referral-team .remove').on('click', function() {
        alert('remove')
        document.querySelector('#referral-team-meta-box[0][order]').setAttribute('value', '');
        document.querySelector('#referral-team-meta-box[0][name]').setAttribute('value', '');
        document.querySelector('#referral-team-meta-box[0][title]').setAttribute('value', '');
        document.querySelector('#referral-team-meta-box[0][video]').setAttribute('value', '');
        document.querySelector('#referral-team-meta-box[0][feedback-name]').setAttribute('value', '');
        document.querySelector('#referral-team-meta-box[0][feedback-quote]').innerHTML = '';
    });
    $('#referral-team').on('click', '.remove-certification', function() {
        var teamMember = event.target.dataset.count;
        var certificationCount = document.querySelector('#referral-team-meta-box-' + teamMember + '-details .certifications').getElementsByClassName('form-row').length;
        if(certificationCount > 1) {
            event.target.parentElement.parentElement.parentElement.parentElement.css('display', 'none');
        } else {
            event.target.parentElement.previousSibling.previousSibling.setAttribute('value', '');
        }
        // alert('remove');
    });
    $('#referral-team').on('click', '.edit', function() {
        $(this).parent().parent().parent().parent().next().children('div.collapse').slideToggle();
        // alert(target);
    });
    $('#referral-team .add').on('click', function() {
        // alert('add');
        teamCount++;
        var append = document.querySelector('#referral-team .team-members').childNodes[0].outerHTML.split('referral-team-meta-box[0]').join('referral-team-meta-box[' + teamCount + ']').split('box-0-').join('box-' + teamCount + '-').split('data-count="0"').join('data-count="' + teamCount + '"');            
        
        document.querySelector('#referral-team .team-members').insertAdjacentHTML('beforeend', append);
        document.getElementById('referral-team-meta-box[' + teamCount + '][order]').setAttribute('value', '');
        document.getElementById('referral-team-meta-box[' + teamCount + '][name]').setAttribute('value', '');
        document.getElementById('referral-team-meta-box[' + teamCount + '][title]').setAttribute('value', '');
        document.getElementById('referral-team-meta-box[' + teamCount + '][video]').setAttribute('value', '');
        document.getElementById('referral-team-meta-box[' + teamCount + '][feedback-name]').setAttribute('value', '');
        document.getElementById('referral-team-meta-box[' + teamCount + '][feedback-quote]').innerHTML = '';
        $('#referral-team-meta-box-' + teamCount + '-details').slideUp();
        var certifications = document.querySelector('#referral-team-meta-box-' + teamCount + '-details .certifications');
        if(certifications.childNodes.length > 2) {
            while (certifications.childNodes.length > 2) {
                certifications.removeChild(certifications.lastChild);
            }
        }
        document.getElementById('referral-team-meta-box[' + teamCount + '][certifications][0]').setAttribute('value', '');
    });
    document.querySelector('#referral-team').addEventListener("click", function() {
        if(event.target.classList.contains('add-certification')) {
            var teamMember = event.target.dataset.count;
            certificationCount = document.querySelector('#referral-team-meta-box-' + teamMember + '-details .certifications').getElementsByClassName('form-row').length;
            var append = document.querySelector('#referral-team-meta-box-0-details .certifications').childNodes[1].outerHTML.split('[0][certifications][0]').join('[' + teamMember + '][certifications][' + certificationCount + ']').split('data-count="0"').join('data-count="' + teamMember + '"');            
            document.querySelector('#referral-team-meta-box-' + teamMember + '-details .certifications').insertAdjacentHTML('beforeend', append);
            document.querySelector('#referral-team-meta-box-' + teamMember + '-details .certifications .form-row:last-child .input-group .form-control').setAttribute('value', '');
        }
    });
</script>
</div>
HTML;
    echo $referral_team_meta_box_header . $referral_team_meta_box_body . $referral_team_meta_box_footer;
    }
    
    
    //Save product price
    add_action('save_post', 'referral_team_save', 10, 2);
    
    function referral_team_save( $post_id ) { 
        global $post;
        /* Verify the nonce before proceeding. */
        if ( !isset( $_POST['referral_team_nonce'] ) || !wp_verify_nonce( $_POST['referral_team_nonce'], basename( __FILE__ ) ) )
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
        if ( isset($_POST['referral-team-meta-box']) ){
            $data = $_POST['referral-team-meta-box'];
            update_post_meta($post_id, 'referral-team-meta-box', $data);
        } else {
            delete_post_meta($post_id, 'referral-team-meta-box');
        }
    } 

?>