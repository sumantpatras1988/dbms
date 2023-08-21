<?php
session_start();
$login = $_SESSION['login'];
if ($login == true) {
} else {
    header('location: logout.php');
}

?>

<h1>

    welcome : <?php echo $login; ?>
</h1><br>

<br><br>
<a href="logout.php">Logout</a>