<?php 

    function referral_team_template($count_team, $certifications_array = '', $name = '', $title = '', $video = '', $feedback_name = '', $feedback_quote = '') {
        if(!empty($feedback_name) || !empty($feedback_quote)) {
            $team_feedback = <<<HTML
<div class="card-footer bg-primary text-right text-light p-5">
    <blockquote class="text-left">$feedback_quote</blockquote>
    <small>$feedback_name</small>
</div>
HTML;
        }
        if(strlen($video) != 11) {
            $img_src = $video;
            $embed = <<<HTML
<div class="embed-responsive embed-responsive-16by9">
    <img class="embed-responsive-item w-auto" style="right: 0;" src="$img_src" alt="$name Team Page Photo">
</div>
HTML;
        } else {
            $embed = <<<HTML
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/$video?rel=0" allowfullscreen></iframe>
</div>
HTML;
        }
        $count_certifications = 0;
        foreach((array)$certifications_array as $certification) {
            $certifications .= <<<HTML
<li>$certification</li>
HTML;
        }
        return <<<HTML
<div class="col-md-6 my-2 px-2 px-md-5">
    <div class="card team">
        <div class="card-body p-0">
            $embed
            <div class="bg-primary text-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="display-4 text-center">
                                $name
                            </h2>
                            <h3 class="h5 text-center">
                                $title
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark collapse" id="$count_team">
                <div class="container">
                    <div class="row">
                        <div class="col mt-3">
                            <ul class="small text-white">
                                $certifications
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-light bg-light box-shadow">
                <div class="container d-flex justify-content-between text-dark font-weight-bold">
                    <strong class="h4 m-0">Certifications</strong>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#$count_team">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        $team_feedback
    </div>
</div>
HTML;
    }

    $data = get_post_meta($post->ID, "referral-team-meta-box", true);
    $count_team = 0;
    // var_dump($data);
    if (count($data) > 0 && !empty($data)){
        foreach($data as $team ) {
            // var_dump($team);
            echo referral_team_template(
                $count_team, 
                isset($team['certifications']) ? $team['certifications'] : null,
                isset($team['name']) ? $team['name'] : '',
                isset($team['title']) ? $team['title'] : '',
                isset($team['video']) ? $team['video'] : '',
                isset($team['feedback-name']) ? $team['feedback-name'] : '',
                isset($team['feedback-quote']) ? $team['feedback-quote'] : ''
            );
            $count_team++;
        }
    }

?>