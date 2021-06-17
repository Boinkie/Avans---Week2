<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="email">
    <input type="text" name="naam">
    <input type="submit" value="Verzenden">
</form>

<?php
function sendEmail($email, $body) { 
    echo $email;
    echo '<br>';
    echo $body;
}
if (isset($_POST['email']) && isset($_POST['body'])) {
    sendEmail($_POST['email'], $_POST['body']);
}

?>
    
</body>
</html>