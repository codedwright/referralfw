<?php
    
    $frontpage_written_header = <<<HTML
<div class="bg-light">
    <div class="container py-5">
        <div class="row">
            <h1 class="w-100 text-center text-uppercase">Written Reviews</h1>
        </div>
        <!-- will pause on hover -->
        <div class="row px-5 text-center">
            <div class="written col p-5">
                <div class="carousel slide" data-ride="carousel" data-interval="10000">
                    <div class="carousel-inner">
HTML;
    $frontpage_written_footer = <<<HTML
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    global $post;
    $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
    if(isset($data['written'])) {
        $written = $data['written'];
        $writtenLength = count($written);
        $frontpage_written_body = '';
        if ($writtenLength >= 3){
            $writtenLength = count($data['written']);
            for ($i = 0; $i < $writtenLength; $i++) { 
                if($i == 0) {
                    $frontpage_written_body .= frontpage_written_template($written[$i]['name'], $written[$i]['text'], $written[$i + 1]['name'], $written[$i + 1]['text'], ' active');
                } else if($i < ($writtenLength - 1)) { // have 4 items on i=2
                    $frontpage_written_body .= frontpage_written_template($written[$i]['name'], $written[$i]['text'], $written[$i + 1]['name'], $written[$i + 1]['text'], null);
                } else if($i == ($writtenLength - 1)){
                    $frontpage_written_body .= frontpage_written_template($written[$i]['name'], $written[$i]['text'], $written[0]['name'], $written[0]['text'], null);
                }
            }
        } else {
            $frontpage_written_body = 'You need to add more written testimonials to your frontpage template.';
        }
    } else {
        $frontpage_written_body = 'You need to 3 or more written testimonials to your frontpage template.';
    }
    
    function frontpage_written_template($name1 = '', $text1 = '', $name2 = '', $text2 = '', $active = '') {
        return <<<HTML
<div class="carousel-item$active">
    <div class="d-none d-md-flex row">
        <div class="col-6 px-5">
            <blockquote>$text1</blockquote>
            <small class="w-100 text-right">-$name1</small>
        </div>
        <div class="col-6 px-5">
            <blockquote>$text2</blockquote>
            <small class="w-100 text-right">-$name2</small>
        </div>
    </div>
    <div class="d-flex d-md-none row">
        <div class="col-12">
            <blockquote>$text1</blockquote>
            <small class="w-100 text-right">-$name1</small>
        </div>
    </div>
</div>
HTML;
    }

    echo $frontpage_written_header . $frontpage_written_body . $frontpage_written_footer;

?>