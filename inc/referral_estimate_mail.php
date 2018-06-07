<?php
session_start();
if( isset( $_POST['referral_estimate_nonce'] ) ) {
    isset($_POST['fname'], $_POST['lname']) ? $name = $_POST['fname'] . ' ' . $_POST['lname'] : null;
    isset($_POST['phone']) ? $phone = $_POST['phone'] : null;
    isset($_POST['email']) ? $email = $_POST['email'] : null;
    isset($_POST['address']) ? $address = $_POST['address'] : null;
    isset($_POST['city']) ? $city = $_POST['city'] : null;
    isset($_POST['state']) ? $state = $_POST['state'] : null;
    isset($_POST['zip']) ? $zip = $_POST['zip'] : null;
    if (isset($_POST['concerns']) && ( !empty($_POST['concerns']) ) ) {
        $concerns = $_POST['concerns'];
    } else {
        $concerns = 'No Concerns Given';
    }
    
    $count = 1;
    foreach ($_POST['service'] as $key => $value) {
        $count < count($_POST['service']) ? $service .= $value . ', ' : $service .= 'and ' . $value;
        $count++;
    }
    $subject = "Cleaning Estimate Requested";
    $message = <<<HTML
<p>$name has requested a free estimate for $service with these areas and concerns: $concerns</p>
<address>$name<br>$phone<br>$email<br>$address<br>$city $state, $zip</address>
HTML;
    // echo $message;
    $to = "office@referralfw.com";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: ' . $name . "\r\n";

    mail($to, $subject, $message, $headers);

    $_SESSION['estimate'] = true;
    header("HTTP/1.1 303 See Other");
    header("Location: https://$_SERVER[HTTP_HOST]/about/trust/");
}

?>