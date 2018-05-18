<?php 
    function referral_team_member_template($count, $certifications = '', $order = 0, $name = '', $title = '', $video = '', $feedback_name = '', $feedback_quote = '') {
        return <<<HTML
<div class="form-row mb-3">
    <div class="col-md-11">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="referral-team-meta-box[$count][order]">Order:</label>
                <input type="number" class="form-control h-auto" id="referral-team-meta-box[$count][order]" name="referral-team-meta-box[$count][order]" placeholder="#" value="$order">
                <small class="form-text text-muted">Team Member Order</small>
            </div>
            <div class="form-group col-md-10">
                <label for="referral-team-meta-box[$count][name]">Team Member Name: <span class="small text-danger">Don&apos;t Forget To Save</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" id="referral-team-meta-box[$count][name]" name="referral-team-meta-box[$count][name]" placeholder="Team Member Name" value="$name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary edit" type="button" data-reference="#referral-team-meta-box[$count][details]">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </button>
                    </div>
                </div>
                <small class="form-text text-muted">Team Member Name:</small>
            </div>
        </div>
        <div class="form-row">
            <div class="collapse col" id="referral-team-meta-box-$count-details">
                <div class="form-group">
                    <label for="referral-team-meta-box[$count][title]">Business Title:</label>
                    <input type="text" class="form-control" id="referral-team-meta-box[$count][title]" name="referral-team-meta-box[$count][title]" placeholder="Business Title" value="$title">
                    <small class="form-text text-muted">Team Member Business Title</small>
                </div>
                <div class="form-group">
                    <label for="referral-team-meta-box[$count][video]">Video Introduction:</label>
                    <input type="text" class="form-control" id="referral-team-meta-box[$count][video]" name="referral-team-meta-box[$count][video]" placeholder="Video Introduction" value="$video">
                    <small class="form-text text-muted">Team Member Video Introduction</small>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="referral-team-meta-box[$count][feedback-name]">Written Testimonial - Customer Name: </label>
                            <div class="input-group">
                                <input type="text" id="referral-team-meta-box[$count][feedback-name]" class="form-control" name="referral-team-meta-box[$count][feedback-name]" value="$feedback_name">
                            </div>
                            <small class="form-text text-muted">The Customer's name for the quote.</small>
                        </div>
                        <div class="form-group">
                            <label for="referral-team-meta-box[$count][feedback-quote]">Written Testimonial - Quote:</label>
                            <textarea id="referral-team-meta-box[$count][feedback-quote]" class="form-control" name="referral-team-meta-box[$count][feedback-quote]" rows="5">$feedback_quote</textarea>
                            <small class="form-text text-muted">The Feedback that the Customer gave.</small>
                        </div>
                    </div>
                </div>
                <div class="certifications">
                    $certifications
                </div>
                <div class="w-100 text-right">
                    <button class="btn btn-success add-certification" type="button" data-count="$count">
                        <i class="fas fa-plus-square"></i> Add Certification
                    </button>
                </div>
            </div>
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
    function referral_team_certification_template($count_item, $count_certification = 0, $certification = '') {
        return <<<HTML
<div class="form-row">
    <div class="form-group col-12">
        <label for="referral-team-meta-box[$count_item][certifications][$count_certification]">Certificaiton Title: </label>
        <div class="input-group">
            <input type="text" id="referral-team-meta-box[$count_item][certifications][$count_certification]" class="form-control" name="referral-team-meta-box[$count_item][certifications][$count_certification]" value="$certification">
            <div class="input-group-append">
                <button class="btn btn-danger remove-certification" type="button" data-count="$count_item">
                    <i class="fas fa-minus-square"></i> Remove
                </button>
            </div>
        </div>
        <small class="form-text text-muted">The Certification Title.</small>
    </div>
</div>
HTML;
    }
?>