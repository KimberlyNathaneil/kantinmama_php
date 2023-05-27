<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> user page </title>

    <!-- css file link -->
    <link rel="stylesheet" href="stylea.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3> hi, <span> admin </span> </h3>
            <h1> Selamat Datang <span> <?php echo $_SESSION['user_name'] ?> </span> </h1>
            <p> Ini ada halaman admin </p>
            <a href="login_form.php" class="btn"> Login </a>
            <a href="register_form.php" class="btn"> register </a>
            <a href="logout.php" class="btn"> Logout </a>
        </div>
    </div>
</body>
</html>