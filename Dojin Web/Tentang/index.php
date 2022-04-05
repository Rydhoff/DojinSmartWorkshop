<?php 
	session_start();
	if ($_SESSION['login'] !=  true) {
		header("location:Login/index.php");
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tentang</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#7BBDFF" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#7BBDFF" />
	<meta name="msapplication-navbutton-color" content="#7BBDFF" />
	<link rel="shortcut icon" href="assets/Dojin.png">
</head>
<body>
	<div class="container">
		<h2>Tentang Aplikasi Web</h1>
		<div class="desc">
			<div class="desk"><p>Dojin Smart Workshop adalah sebuah aplikasi berbasis web yang bisa memonitoring atau mengontrol kondisi aktif atau tidaknya peralatan elektronik serta mengecek suhu dan kelembapan pada area bengkel</p></div>
			<div class="img"><img src="../assets/Dojin.png" ></div>
		</div>
	</div>
</body>
</html>