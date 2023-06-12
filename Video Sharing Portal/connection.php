<?php

$hostname = "localhost";
$username = "keremdemix";
$password = "WYy1_OvwU.9r7cIc";
$database = "videodb";


$conn = mysqli_connect($hostname, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>