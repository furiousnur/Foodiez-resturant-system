<?php
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "foodiez";

$con = mysqli_connect($host, $db_user, $db_pass, $db_name);

//$con = new mysqli($hostname, $username, $passward, $db_name);


if (!$con) {
    echo "Database connection failed".mysqli_error($con);

    header('location: errDb.php');
    exit;
}
else {
    // echo "Successfully Connected";
}
 ?>
