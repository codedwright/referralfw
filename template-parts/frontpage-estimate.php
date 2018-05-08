<?php
    $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
    if(isset($data['estimate'])) {
        $frontpage_estimate_description = $data['estimate'];
    } else {
        $frontpage_estimate_description = 'You need to fill out the estimate section on your frontpage template.';
    }
    
    $frontpage_estimate = <<<HTML
<div class="bg-dark text-light">
    <div class="container">
        <div class="row pt-3 py-lg-5 align-items-center">
            <div class="col-md-8">
                <p>$frontpage_estimate_description</p>
            </div>
            <div class="col-md-4 py-3">
                <a class="btn btn-lg btn-outline-light btn-block text-uppercase text-center" href="#">Free Estimate</a>
            </div>
        </div>
    </div>
</div>
HTML;
    echo $frontpage_estimate;
?>