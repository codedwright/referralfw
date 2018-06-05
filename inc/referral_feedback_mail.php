<?php
session_start();
if( isset( $_POST['referral_feedback_nonce'] ) ) {
    isset($_POST['fname'], $_POST['lname']) ? $name = $_POST['fname'] . ' ' . $_POST['lname'] : '';
    isset($_POST['date']) ? $date = date('l F jS, Y', strtotime($_POST['date'])) : '';
    $ratings = array(
        "5"=>"Strongly Agree", 
        "4"=>"Agree",
        "3"=>"Neutral",
        "2"=>"Disagree", 
        "1"=>"Strongly Disagree"
    );
    if(!isset($_POST['questionFourteen'])) {
        $subject = "Cleaning Feedback Form";
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
    } else {
        $subject = "Restoration Feedback Form";
        $rating_questions = array(
            "questionOne"=>"Our telephone representative was friendly and helpful.", 
            "questionTwo"=>"Our technicians responded to your emergency quickly and acted with a sense of urgency.", 
            "questionThree"=>"Your concerns/expectations were discussed while inspecting the affected areas to be restored and our technicians let you know what to expect.",
            "questionFour"=>"Our technicians conducted a thorough inspection of the damage and made you aware of our findings.",
            "questionFive"=>"Our technicians explained the steps required to restore your property.",
            "questionSix"=>"Our technicians kept you updated about the restoration progress during the project.",
            "questionSeven"=>"Our technicians showed respect and care while handling your possessions and working in your home.",
            "questionEight"=>"Our technicians demonstrated a positive attitude while working in your home.",
            "questionNine"=>"Our technicians completed the work and returned your home to normal as soon as possible.",
            "questionTen"=>"Our technicians clearly explained our paperwork and helped guide you through the insurance claim process.",
            "questionEleven"=>"Our technicians performed a thorough cleaning of all affected areas.", 
            "questionTwelve"=>"Our technicians reviewed the final results with you.",
            "questionThirteen"=>"Upon completion of the project, your property was restored to the same or better condition than before the damage.",
            "questionFourteen"=>"Our technician informed you of our other cleaning services.",
            "questionFifteen"=>"You would use our service again, and recommend us to your friends, neighbors, and co-workers."
        );
        $open_questions = array(
            "questionSixteen"=>"If you were recommending a friend to our company, what would you tell them?",
            "questionSeventeen"=>"What's one thing we could do different to provide you with better service? "
        );
    }
    $message = <<<HTML
    <div style="margin-top:0;margin-bottom:0;">From: $name </div>
    <div style="margin-top:0;margin-bottom:0;">Date: $date </div>
HTML;
    $total_rating = 0;
    $count_questions = 0;
    foreach($rating_questions as $question_number => $question) {
        $rating_value = $ratings[$_POST[$question_number]];
        $total_rating += $_POST[$question_number];
        $count_questions++;
        $message .= <<<HTML
<p>$_POST[$question_number] — $rating_value — $question</p>
HTML;
    }
    foreach($open_questions as $question_number => $question) {
        $message .= <<<HTML
<p>$question<br>$_POST[$question_number]</p>
HTML;
    }
    if(isset($_POST['concent'])) $_POST['concent'] ? $message .= 'You may use my comments for reference.' : $message .= 'You may <b>not</b> use my comments for reference!';
    // echo $message;
    $to = "office@referralfw.com";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: ' . $name . "\r\n";
    
    // mail($to, $subject, $message, $headers);

    if($total_rating > ($count_questions * 5 / 2)) {
        $_SESSION['feedback'] = true;
        header("HTTP/1.1 303 See Other");
        header("Location: https://$_SERVER[HTTP_HOST]/contact/review/");
    } else {
        header("HTTP/1.1 303 See Other");
        header("Location: https://$_SERVER[HTTP_HOST]/");
    }

}

?>