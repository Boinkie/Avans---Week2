<?php 

function sendMail ($input){
    $adminEmail = $input['email'];
    $message = $input['message'];
    $subject = "Dit is een test email voor de cursus";
    $from = "From: spamrentier@gmail.com";
    if (mail($adminEmail, $subject, $message . $from)) {
        echo "<p>Mail verzonden</p>";
    } else {
        echo "<p>Mail niet verzonden</p>";
    }
}
