<?php
$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
?>