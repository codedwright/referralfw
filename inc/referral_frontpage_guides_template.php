<?php

function referral_frontpage_guides_template($description = '', $linked = '') {
    return <<<HTML
    <div class="card w-100 mw-100 p-0 m-0">
        <div class="card-header p-0" id="guides-section">
            <h5 class="w-100 mb-0">
                <a class="p-2 d-block text-center text-secondary" data-toggle="collapse" href="#guides-form" role="button" aria-expanded="true" aria-controls="collapseOne">
                    Free Guides Section
                </a>
            </h5>
        </div>

        <div id="guides-form" class="collapse" aria-labelledby="guides-section" data-parent="#frontpage-meta-box">
            <div class="card-body">
                <h5>Free Guides Description</h5>
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[guides][description]">Description</label>
                    <input type="text" class="form-control" name="referral-frontpage-meta-box[guides][description]" id="referral-frontpage-meta-box[guides][description]" value="$description">
                    <small class="form-text text-muted">Use Less Than 10 Words!</small>
                </div>
                <h5>Linked Guides</h5>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="referral-frontpage-meta-box[guides][linked]" id="referral-frontpage-meta-box[guides][linked]" value="checked" $linked>
                    <label class="form-check-label" for="referral-frontpage-meta-box[guides][linked]">Check if you would like to link the cards to the pdf guide downloads.</label>
                </div>
            </div>
        </div>
    </div>
HTML;
}

?>