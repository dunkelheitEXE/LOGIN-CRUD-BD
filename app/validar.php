<?php

$user = $_POST['user'];
$password = $_POST['password'];
session_start();
$_SESSION['user'] = $user;

#host, user, password, DataBase
$conection = mysqli_connect("localhost", "root", "Alan#7702_271012", "loggerman");

$consult = "SELECT * FROM modders WHERE moddername = '$user' and itspassword = '$password'";
$result = mysqli_query($conection, $consult);

$filas = mysqli_num_rows($result);

if ($filas) {
    header("location:home.php");
} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class=bad>AUTENTICATION ERROR</h1>

    <?php
}

mysqli_free_result($result);
mysqli_close($conection);

?>
