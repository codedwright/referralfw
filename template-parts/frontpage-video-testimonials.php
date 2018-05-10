<?php
    
    $frontpage_video_header = <<<HTML
<div class="bg-primary text-light">
    <div class="container py-5">
        <div class="row">
            <h1 class="w-100 text-center text-uppercase">Video Reviews</h1>
        </div>
        <!-- will pause on hover -->
        <div class="row px-5 text-center">
            <div class="video col">
                <div class="carousel slide" data-ride="carousel" data-interval="18000">
                    <div class="carousel-inner">
HTML;

    $frontpage_video_footer = <<<HTML
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    global $post;
    $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
    if(isset($data['video'])) {
        $video = $data['video'];
        $videoLength = count($video);
        $frontpage_video_body = '';
        if ($videoLength >= 4){
            $videoLength = count($data['video']);
            for ($i = 0; $i < $videoLength; $i++) { 
                if($i == 0) {
                    $frontpage_video_body .= frontpage_video_template($video[$i]['url'], $video[$i + 1]['url'], $video[$i + 2]['url'], ' active');
                } else if($i < ($videoLength - 2)) { // have 4 items on i=2
                    $frontpage_video_body .= frontpage_video_template($video[$i]['url'], $video[$i + 1]['url'], $video[$i + 2]['url'], null);
                } else if($i == ($videoLength - 2)){
                    $frontpage_video_body .= frontpage_video_template($video[$i]['url'], $video[$i + 1]['url'], $video[0]['url'], null);
                } else if($i == ($videoLength - 1)){
                    $frontpage_video_body .= frontpage_video_template($video[$i]['url'], $video[0]['url'], $video[1]['url'],  null);
                }
            }
        } else {
            $frontpage_video_body = 'You need to add more video testimonials to your frontpage template.';
        }
    } else {
        $frontpage_video_body = 'You need to add 3 or more video testimonials to your frontpage template.';
    }
    
    function frontpage_video_template($url1 = '', $url2 = '', $url3 = '', $active = '') {
        return <<<HTML
<div class="carousel-item$active">
    <div class="d-none d-md-flex row">
        <div class="col-md-4 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item p-2" src="https://www.youtube.com/embed/$url1?controls=0&rel=0&showinfo=0&modestbranding=1" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item p-2" src="https://www.youtube.com/embed/$url2?controls=0&rel=0&showinfo=0&modestbranding=1" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item p-2" src="https://www.youtube.com/embed/$url3?controls=0&rel=0&showinfo=0&modestbranding=1" allowfullscreen></iframe>
        </div>
    </div>
    <div class="d-flex d-md-none row">
        <div class="col-md-12 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item p-2" src="https://www.youtube.com/embed/$url1?controls=0&rel=0&showinfo=0&modestbranding=1" allowfullscreen></iframe>
        </div>
    </div>
</div>
HTML;
    }

    echo $frontpage_video_header . $frontpage_video_body . $frontpage_video_footer;

?>