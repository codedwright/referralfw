<?php

function referral_frontpage_introduction_template($title = '', $description = '', $video = '') {
    return <<<HTML
    <div class="card w-100 mw-100 p-0 m-0">
        <div class="card-header p-0" id="introduction-section">
            <h5 class="w-100 mb-0">
                <a class="p-2 d-block text-center text-secondary" data-toggle="collapse" href="#introduction-form" role="button" aria-expanded="true" aria-controls="collapseOne">
                    Introduction Section
                </a>
            </h5>
        </div>

        <div id="introduction-form" class="collapse show" aria-labelledby="introduction-section" data-parent="#frontpage-meta-box">
            <div class="card-body">
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[introduction][title]">Title</label>
                    <input type="text" class="form-control" id="referral-frontpage-meta-box[introduction][title]" name="referral-frontpage-meta-box[introduction][title]" value="$title">
                    <small class="form-text text-muted">Make Sure This Is Under 1 Words!</small>
                </div>
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[introduction][description]">Introduction</label>
                    <textarea class="form-control" id="referral-frontpage-meta-box[introduction][description]" name="referral-frontpage-meta-box[introduction][description]" rows="3">$description</textarea>
                    <small class="form-text text-muted">This is the area of text under the title.</small>
                </div>
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[introduction][video]">Video</label>
                    <input type="text" class="form-control" id="referral-frontpage-meta-box[introduction][video]" name="referral-frontpage-meta-box[introduction][video]" value="$video">
                    <small class="form-text text-muted">Welcome video YouTube URL (ex: uh6cTthzfTw (11 characters)).</small>
                </div>
            </div>
        </div>
    </div>
HTML;
}

?>