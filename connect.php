<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "item_db";
$conn2 = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn2) {
    die("Something went wrong");
}
?>