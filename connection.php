<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "is_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>