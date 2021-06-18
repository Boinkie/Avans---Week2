<?php 

// functie om een email te versturen met $_POST data
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

// Functie om aantal bezoeken te tellen met session
function sessionCount ($input) {
if (!isset($input)) {
    $input = 0;
}
$visits = ++$input;
setcookie('count', $visits , time() + 2592000 , "/");
if ($visits > 1) {
    echo("<p>Je hebt deze pagina $visits keer bezocht!</p>");
} else { // First visit
    echo('<p>Je hebt deze website nog niet eerder bezocht, welkom!</p>');
}
}
