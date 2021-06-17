<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$visits = ++$_SESSION['count'];
setcookie('count', $visits , time() + 2592000 , "/");
?>
<?php include("header.php") ?>
<?php include("navbar.php") ?>

<?php
if ($visits > 1) {
        echo("<p>Je hebt deze pagina $visits keer bezocht!</p>");
    } else { // First visit
        echo('<p>Je hebt deze website nog niet eerder bezocht, welkom!</p>');
    }
    ?>
<a href="logout.php">Klik hier om uit te loggen</a><br>


<form action="test.php" method="GET">
<input type='text' id='subject' name='subject' value="dit is een test"><br>
<input type='text' id='message' name='message' value="hallo wereld"><br>
<a href="test.php"><input type="submit" value="Verstuur"/></a>
</form>



<?php include("footer.php") ?>