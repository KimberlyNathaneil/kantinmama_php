<?php

include 'connection/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home_page.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows != 0) {
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home_page.php");
	} else {
		echo "<script>alert('Uh oh.. Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_user_php.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Kantin Mama</title>
</head>
<body>
    <header>
        <a href="#" class="logo"> Kantin Mama </a>
        <div class="bx bx-menu" id="icon_menu"> </div>

            <ul class="navbar">
            <li><a href="index.php"> Beranda </a></li>
            <li><a href="index.php"> Tentang Kami </a></li>
            <li><a href="index.php"> Menu </a></li>
            <!-- <li><a href="#services"> Service Kami </a></li> -->
            <li><a href="index.php"> Kontak </a></li>
            <li><a href="user_page.php"> Profil </a></li>
        </ul>
    </header>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Masuk</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Masuk</button>
			</div>
			<p class="login-register-text">Belum punya akun? <a href="register.php">Daftar Disini</a>.</p>
		</form>
	</div>
</body>
</html>
