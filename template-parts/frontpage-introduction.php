<?php
    $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
    if(isset($data['introduction'])) {
        $frontpage_introduction_title = $data['introduction']['title'];
        $frontpage_introduction_description = $data['introduction']['description'];
        $frontpage_introduction_video = $data['introduction']['video'];
    } else {
        $frontpage_introduction_title = '';
        $frontpage_introduction_description = 'You need to fill out the information section on your frontpage template.';
        $frontpage_introduction_video = 'CyMOFYYzVcc';
    }        
        $frontpage_introduction = <<<HTML
<div class="bg-light">
    <div class="container">
        <div class="row p-5 align-items-center">
            <div class="col-md-8 pr-md-5">
                <h1 class="text-uppercase">$frontpage_introduction_title</h1>
                <p>$frontpage_introduction_description</p>
            </div>
            <div class="col-md-4 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item pb-1" src="https://www.youtube.com/embed/$frontpage_introduction_video?controls=0&rel=0&showinfo=0&modestbranding=1" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
HTML;
    echo $frontpage_introduction;
    
?>