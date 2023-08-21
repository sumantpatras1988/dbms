<?php
session_start();
$err = "";
$con = mysqli_connect('localhost', 'root', '', 'login') or die('conn errrr');

if (isset($_POST['btn'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";
    $q = mysqli_query($con, $sql);
    $num = mysqli_num_rows($q);
    if ($num == 1) {
        $_SESSION['login'] = $user;
        header('location: home.php');
    } else {
        $err = "Invalid Username or password ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Login User</h1>
        <form action="" method="post" class="mt-5">
            <p class="text-center text-danger">
                <?php echo $err; ?>
            </p>
            <input type="text" name="user" placeholder="Username" class="form-control">
            <br>
            <input type="password" name="pass" placeholder="password" class="form-control">
            <br>
            <input type="submit" value="login" name="btn" class="btn btn-primary">
        </form>
    </div>
</body>

</html>