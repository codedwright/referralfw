<?php
    function referral_frontpage_video_testimonial_helper_template($count, $url = '') {
        return <<<HTML
        <div class="row my-1">
            <div class="col-11">
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[video][$count][url]">YouTube Video Testimonials: </label>
                    <div class="input-group">
                        <input type="text" id="referral-frontpage-meta-box[video][$count][url]" class="form-control" name="referral-frontpage-meta-box[video][$count][url]" value="$url">
                    </div>
                    <small class="form-text text-muted">Testimonial video YouTube URL (ex: uh6cTthzfTw (11 characters)).</small>
                </div>
            </div>
            <div class="col-1">
                <span class="btn btn-danger remove h-100">
                    <i class="fas fa-minus-square h-100 align-middle"></i>
                </span>
            </div> 
        </div>
HTML;
    }

    function referral_frontpage_video_testimonial_template() {
        $header = <<<HTML
        <div class="card w-100 mw-100 p-0 m-0">
            <div class="card-header p-0" id="video-section">
                <h5 class="w-100 mb-0">
                    <a class="p-2 d-block text-center text-secondary" data-toggle="collapse" href="#video-form" role="button" aria-expanded="true" aria-controls="collapseOne">
                        Video Testimonial Section
                    </a>
                </h5>
            </div>

            <div id="video-form" class="collapse" aria-labelledby="video-section" data-parent="#frontpage-meta-box">
                <div class="card-body">
HTML;

        $body = '';
        global $post;
        $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
        $count = 0;
        if (count($data['video']) > 0){
            foreach((array)$data['video'] as $video ){
                if (isset($video['url'])){
                    $body .= referral_frontpage_video_testimonial_helper_template($count, $video['url']);
                    $count++;
                }
            }
        } else {
            $body = referral_frontpage_video_testimonial_helper_template( '0' );
        }
        $label = __('Add Video Testimonial');
        $footer = <<<HTML
                </div>
                <div class="card-footer">
                    <span class="btn btn-success add"><i class="fas fa-plus-square"></i> $label</span>
                </div>
            </div>
        </div>
        <script>
            (function($) {
                videoCount = $count;                
                $('#video-form').on('click', '.remove', function() {
                    if(videoCount > 1) {
                        $(this).parent().parent().remove();
                        videoCount--;
                    } else {
                        document.getElementById('referral-frontpage-meta-box[video][0][url]').setAttribute('value', '');
                    }
                });
                document.querySelector('#video-form .add').addEventListener("click", function() {
                    var append = document.querySelector('#video-form .card-body').childNodes[1].outerHTML.split('[video][0]').join('[video][' + videoCount + ']');            
                    document.querySelector('#video-form .card-body').insertAdjacentHTML('beforeend', append);
                    document.getElementById('referral-frontpage-meta-box[video][' + videoCount + '][url]').setAttribute('value', '');
                    videoCount++;
                });
            })( jQuery );
        </script>
HTML;
        return $header . $body . $footer;
    }
?>