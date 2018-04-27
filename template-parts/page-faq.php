<?php
//https://wordpress.stackexchange.com/questions/25478/custom-post-type-metabox-array
    function referral_faq_template($index, $faq) {
        $title = $faq['title'];
        $description = $faq['description'];
        $template = 
<<<HTML
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        $title
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    $description
                </div>
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