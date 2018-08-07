<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    function referral_faq_template($index, $faq) {
        $title = $faq['title'];
        $description = $faq['description'];
        $template = 
<<<HTML
        <div class="card">
            <div class="card-header" id="heading$index" data-toggle="collapse" data-target="#collapse$index" aria-expanded="false" aria-controls="collapse$index">
                <h5 class="mb-0">
                    <i class="fas fa-chevron-circle-up" style="display:none;"></i><i class="fas fa-chevron-circle-down" style="display:none;"></i>
                    $title
                </h5>
            </div>

            <div id="collapse$index" class="collapse" aria-labelledby="heading$index" data-parent="#accordion">
                <div class="card-body">
                    $description
                </div>
            </div>
        </div>
HTML;
        // this is the template for html of faqs
        echo $template;
    }

    $data = get_post_meta($post->ID, "referral-faq-meta-box", true);
    if (count($data) > 0) {
        echo '<div id="accordion">';
        foreach($data as $index=>$faq) {
            referral_faq_template($index, $faq);
        }
        echo '</div>';
    }

?>