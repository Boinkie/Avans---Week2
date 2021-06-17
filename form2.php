<form method="post">
    <label for="email">Email</label>
    <input type="text" name="email"><br>
    <label for="body">Body</label>
    <input type="text" name="body"><br>
    <label for="subject">Subject</label>
    <input type="text" name="subject"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
function verstuurMail($email, $subject, $body) {
    mail($email, $subject, $body);
}
if(isset($_POST['body']) && isset($_POST['subject'])) {
    verstuurMail('spamrentier@gmail.com', $_POST['subject'], $_POST['body']);
} else {
    echo "Vul het formulier in a.u.b.";
}
?>

