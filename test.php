<?php
// ... write code
?>
<?php include("header.php") ?>
<?php include("navbar.php") ?>

<h1>Onderwerp: <?php echo $_GET['subject']?></h1>
<p>Bericht: <?php echo $_GET['message']?></p>

<?php include("footer.php") ?>