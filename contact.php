<?php
// ... write code
?>
<?php include("header.php") ?>
<?php include("navbar.php") ?>


<?php 
if (!isset($_POST['submit'])) {
    $email = false;
    $name = false;
    $website = false;
    $message = false;
    ?>
<form action="contact.php" method="post">
    <div class="row">
        <div class="col-25">
            <label for='name'>Naam:</label>
        </div>
        <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Uw naam..."><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for='email'>Email:</label>
        </div>
        <div class="col-75">
            <input type='text' id='email' name='email' placeholder="Uw email-adres..."><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for='website'>Website:</label>
        </div>
        <div class="col-75">
            <input type='text' id='website' name='website' placeholder="Uw website..."><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for='message'>Bericht:</label>
        </div>
        <div class="col-75">
            <textarea id="message" name="message" placeholder="Schrijf iets..." style="height:200px"></textarea><br>
        </div>
    </div>


    <div class="row">
        <input type='submit' name='submit' value='Verstuur'>
    </div>
</form>
<?php 
} else {
    include_once ("functions.php");
    sendMail($_POST);
    // $adminEmail = $_POST['email'];
    // $name = $_POST['name'];
    // $website = $_POST['website'];
    // $message = $_POST['message'];
    // $subject = "Dit is een test email voor de cursus";
    // $from = "From: spamrentier@gmail.com";
    // if (mail($adminEmail, $subject, $message . $from)) {
    //     echo "<p>Mail verzonden</p>";
    // } else {
    //     echo "<p>Mail niet verzonden</p>";
    // }
}

?>


<?php include("footer.php") ?>