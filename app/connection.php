<?php
//IN PROGRESS. . .
function connection() {
$host = "localhost";
$user = "root";
$password = "Alan#7702_271012";

$db = "loggerman";

$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect, $db);
}
?>
