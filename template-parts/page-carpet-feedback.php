<?php
$ratings = array(
    "5"=>"Strongly Agree", 
    "4"=>"Agree",
    "3"=>"Neutral",
    "2"=>"Disagree", 
    "1"=>"Strongly Disagree"
);
$rating_questions = array(
    "questionOne"=>"Our telephone representative was friendly and helpful.", 
    "questionTwo"=>"Our technicians arrived in the arrival time window given, or if running behind, called to keep you updated.", 
    "questionThree"=>"Our technicians demonstrated a positive attitude while working in your home.",
    "questionFour"=>"Our technicians protected your home by using items such as a door mat, corner guards, floor protectors and a door drape.",
    "questionFive"=>"Our technicians discussed your concerns while inspecting the areas to be cleaned and then let you know what to expect.",
    "questionSix"=>"Our technicians reviewed the final results with you and informed you of any permanent conditions.",
    "questionSeven"=>"Our technicians helped set up the areas to dry quickly.",
    "questionEight"=>"Our technicians performed a thorough cleaning.",
    "questionNine"=>"Our technicians informed you of our other services.",
    "questionTen"=>"Would you use our service again, and recommend us to your friends, neighbors, and co-workers?"
);
$open_questions = array(
    "questionEleven"=>"If you were recommending a friend to our company, what would you tell them?", 
    "questionTwelve"=>"How does Referral differ from other carpet cleaners you have used in the past?",
    "questionThirteen"=>"What's one thing we could do different to provide you with better service?"
);
echo <<<HTML
<div class="card border-primary mb-3">
    <div class="card-header bg-primary text-light text-center">
        <h1>Cleaning Feedback Form</h1>
    </div>
    <div class="card-body">
        <p class="card-text">We want to do everything possible to make your cleaning experience the best it can be! So please tell us what we
            are doing that makes you really happy, or if there’s anything else we could be doing better. Your feedback and
            ideas about your experience are very important to us, we appreciate your input! Submitting positive feedback enters you into our Monthly Contest to earn a $25 Cleaning Credit or a $25 Gift Card of Your Choice!
        </p>
        <p class="card-text">
            We work very hard to deliver the best experience possible, but we aren’t perfect, so once in a while we may goof up. If, by chance, we overlooked anything, please call us at 260-483-4383 or fill out the feedback form below and we will follow up to take care of it right away!
        </p>
        <div class="form-row py-3">
            <div class="col-md-6">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
            </div>
            <div class="col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row pb-3">
            <div class="col">
                <label for="date">Date of Service</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>

        </div>
    </div>
HTML;
$index = 1;
foreach($rating_questions as $question_number => $question) {
    echo <<<HTML
<div class="card-body bg-light">
    <h5 class="card-title text-dark m-0"><span class="pr-2">$index.</span> $question</h5>
</div>
<div class="card-body">
    <div class="card-text d-md-flex justify-content-md-between">
HTML;
    foreach($ratings as $answer_value => $answer_words) {
        echo <<<HTML
<div class="form-check">
    <input class="form-check-input" type="radio" name="$question_number" id="$question_number$answer_value" value="$answer_value">
    <label class="form-check-label" for="$question_number$answer_value">$answer_words</label>
</div>
HTML;
    }
    echo <<<HTML
    </div>
</div>
HTML;
    $index++;
}
foreach($open_questions as $question_number => $question) {
    echo <<<HTML
<div class="card-body bg-light">
    <h5 class="card-title text-dark m-0"><span class="pr-2">$index.</span> $question</h5>
</div>
<div class="card-body">
    <div class="card-text d-flex justify-content-between">
        <div class="form-group w-100">
            <textarea class="form-control" name="$question_number" id="$question_number" rows="4" placeholder="Type Your Response Here"></textarea>
        </div>
    </div>
</div>
HTML;
    $index++;
}
echo <<<HTML
    <div class="card-body bg-light text-right">
        <div class="form-check form-check-inline">
            <label class="form-check-label card-title text-dark m-0 pr-3 font-weight-bold" for="consent">Check If May We Use Your Feedback </label>
            <input class="form-check-input m-0" type="checkbox" id="consent" value="true" checked>
        </div>
    </div>
    <div class="card-footer bg-primary text-light text-right">
        <button type="submit" class="btn btn-outline-light">Submit Feedback</button>
    </div>
</div>
HTML;
            
?>