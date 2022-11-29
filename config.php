<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_registrasi";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connect Failed.')</script>");
}

?>