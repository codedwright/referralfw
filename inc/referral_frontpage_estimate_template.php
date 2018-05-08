<?php

function referral_frontpage_estimate_template($information = '') {
    return <<<HTML
    <div class="card w-100 mw-100 p-0 m-0">
        <div class="card-header p-0" id="estimate-section">
            <h5 class="w-100 mb-0">
                <a class="p-2 d-block text-center text-secondary" data-toggle="collapse" href="#estimate-form" role="button" aria-expanded="true" aria-controls="collapseOne">
                    Estimate Section
                </a>
            </h5>
        </div>

        <div id="estimate-form" class="collapse" aria-labelledby="estimate-section" data-parent="#frontpage-meta-box">
            <div class="card-body">
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[estimate]">Estimate</label>
                    <textarea class="form-control" id="referral-frontpage-meta-box[estimate]" name="referral-frontpage-meta-box[estimate]" rows="3">$information</textarea>
                    <small class="form-text text-muted">This is the area of text next to the Request Free Estimate button.</small>
                </div>
            </div>
        </div>
    </div>
HTML;
}

?>