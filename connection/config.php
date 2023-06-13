<?php

// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "admin_kantinmama";

$server = "localhost";
$user = "n1566458_kantin_mama";
$pass = "AK9QwqhNZm1c";
$database = "n1566458_kantin_mama";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
