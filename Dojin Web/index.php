<?php 
	session_start();
	if ($_SESSION['login'] !=  true) {
		header("location:Login/");
	}

	require 'connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data = mysqli_fetch_array($sql);

	$aktif = $data['lampur1'] + $data['lampu2r1'] + $data['acr1'] + $data['kipasr1'] + $data['proyektorr1'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#7BBDFF" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#7BBDFF" />
	<meta name="msapplication-navbutton-color" content="#7BBDFF" />
	<link rel="shortcut icon" href="assets/Dojin.png">
</head>
<body>
	<header>
		<div class="logo">
			<img src="assets/neskar.png">
		</div>
		<div class="main-title">
			<h2>Bengkel</h2>
		</div>
		<div class="logo">
			<img src="assets/tei.png">
		</div>
	</header>

	<main>
		<div class="sub-title">Teknik<br>Elektronika<br>Industri</div>
		<div class="awan"><img src="assets/awan.png"></div>
		<div class="awans"><img src="assets/awan.png"></div>
		<div class="bengkel"><img src="assets/bengkel1.png"></div>
	</main>

	<div class="about"><a href="Tentang/"> Tentang Aplikasi Web</a></div>

	<div class="container">
		<!-- RUANG 1 -->
		<div class="card">
			<div class="title-room">
			<a href="Ruang-1" class="ruang1">
				<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="57.6" cy="39.5" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="7.7" cy="50.6" r=".3" fill="#231f20"/><circle cx="6.1" cy="20.2" r=".3" fill="#231f20"/><circle cx="58.3" cy="16.2" r=".3" fill="#231f20"/><circle cx="22.5" cy="2.3" r=".3" fill="#231f20"/><circle cx="56.3" cy="35.2" r=".3" fill="#231f20"/><circle cx="59" cy="48.3" r=".3" fill="#231f20"/><circle cx="10.1" cy="5" r="1.2" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5.1 42.4h2M6.1 43.3v-1.9"/><circle cx="56.7" cy="12.5" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M55.3 53.1h2M56.3 54.1v-2"/><path fill="#fff" d="M52.9 16.9l-.3-.2v-10H17c-2.8 0-5.1 2.3-5.1 5.1v45.9c0 2.3 1.8 4.1 4.1 4.1h33.1c2.3 0 4.1-1.8 4.1-4.1V17l-.3-.1z"/><path fill="#3768a4" d="M53 16.9l-.3-.2v-10H21.9c-2.5 0-4.4 2.3-4.4 5.1v45.9c0 2.3 1.6 4.1 3.5 4.1h28.6c1.9 0 3.5-1.8 3.5-4.1V17l-.1-.1z"/><path fill="#4d9ad4" d="M49.4 16.9l-.3-.2v-10H19c-2.4 0-4.3 2.3-4.3 5.1v45.9c0 2.3 1.5 4.1 3.5 4.1h28c1.9 0 3.5-1.8 3.5-4.1V17l-.3-.1z"/><path fill="#fff" d="M52.6 17v-6.1c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8s1.4 1.8 4.6 1.9c3.2.1 35 0 35 0z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M16.1 48.3v4.6"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.9 23.7V12.5M11.9 28.6v-3M53.2 41.6v16.3c0 2.3-1.8 4.1-4.1 4.1H16c-2.3 0-4.1-1.8-4.1-4.1V30.5M53.2 17.1v22.4M53.2 17.1H17c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1h35.6v10"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M52.6 17.1V11c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M19.5 19.6c-1.9 0-3.4 1.5-3.4 3.4M16.1 24.8v.7"/><path fill="#fff" d="M37.7 34.4H26.6c-1.2 0-2.2-1-2.2-2.2v-4.8c0-1.2 1-2.2 2.2-2.2h11.1c1.2 0 2.2 1 2.2 2.2v4.8c.1 1.2-.9 2.2-2.2 2.2z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M38.1 34.4h-12c-1 0-1.8-.8-1.8-1.8V27c0-1 .8-1.8 1.8-1.8h12c1 0 1.8.8 1.8 1.8v5.6c.1.9-.8 1.8-1.8 1.8z"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.5 3.3h2M46.5 4.2V2.3"/></svg>
				</div>
					<h4>Ruang 1</h4>
				<div class="teacher">
					<p><?php if ($aktif > 0) { echo $aktif . " Perangkat menyala";}
					else {echo "";} ?></p>
				</div>
			</a>
			</div>
		</div>

		<!-- RUANG 2 -->
		<div class="card">
			<div class="title-room">
			<a href="Ruang-1" class="ruang2">
				<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="57.6" cy="39.5" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="7.7" cy="50.6" r=".3" fill="#231f20"/><circle cx="6.1" cy="20.2" r=".3" fill="#231f20"/><circle cx="58.3" cy="16.2" r=".3" fill="#231f20"/><circle cx="22.5" cy="2.3" r=".3" fill="#231f20"/><circle cx="56.3" cy="35.2" r=".3" fill="#231f20"/><circle cx="59" cy="48.3" r=".3" fill="#231f20"/><circle cx="10.1" cy="5" r="1.2" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5.1 42.4h2M6.1 43.3v-1.9"/><circle cx="56.7" cy="12.5" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M55.3 53.1h2M56.3 54.1v-2"/><path fill="#fff" d="M52.9 16.9l-.3-.2v-10H17c-2.8 0-5.1 2.3-5.1 5.1v45.9c0 2.3 1.8 4.1 4.1 4.1h33.1c2.3 0 4.1-1.8 4.1-4.1V17l-.3-.1z"/><path fill="#3768a4" d="M53 16.9l-.3-.2v-10H21.9c-2.5 0-4.4 2.3-4.4 5.1v45.9c0 2.3 1.6 4.1 3.5 4.1h28.6c1.9 0 3.5-1.8 3.5-4.1V17l-.1-.1z"/><path fill="#4d9ad4" d="M49.4 16.9l-.3-.2v-10H19c-2.4 0-4.3 2.3-4.3 5.1v45.9c0 2.3 1.5 4.1 3.5 4.1h28c1.9 0 3.5-1.8 3.5-4.1V17l-.3-.1z"/><path fill="#fff" d="M52.6 17v-6.1c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8s1.4 1.8 4.6 1.9c3.2.1 35 0 35 0z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M16.1 48.3v4.6"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.9 23.7V12.5M11.9 28.6v-3M53.2 41.6v16.3c0 2.3-1.8 4.1-4.1 4.1H16c-2.3 0-4.1-1.8-4.1-4.1V30.5M53.2 17.1v22.4M53.2 17.1H17c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1h35.6v10"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M52.6 17.1V11c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M19.5 19.6c-1.9 0-3.4 1.5-3.4 3.4M16.1 24.8v.7"/><path fill="#fff" d="M37.7 34.4H26.6c-1.2 0-2.2-1-2.2-2.2v-4.8c0-1.2 1-2.2 2.2-2.2h11.1c1.2 0 2.2 1 2.2 2.2v4.8c.1 1.2-.9 2.2-2.2 2.2z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M38.1 34.4h-12c-1 0-1.8-.8-1.8-1.8V27c0-1 .8-1.8 1.8-1.8h12c1 0 1.8.8 1.8 1.8v5.6c.1.9-.8 1.8-1.8 1.8z"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.5 3.3h2M46.5 4.2V2.3"/></svg>
				</div>
					<h4>Ruang 2</h4>
				<div class="teacher">
					<p></p>
				</div>
			</a>
			</div>
		</div>

		<!-- RUANG 3 -->
		<div class="card">
			<div class="title-room">
				<a href="Ruang-1" class="ruang3">
					<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="57.6" cy="39.5" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="7.7" cy="50.6" r=".3" fill="#231f20"/><circle cx="6.1" cy="20.2" r=".3" fill="#231f20"/><circle cx="58.3" cy="16.2" r=".3" fill="#231f20"/><circle cx="22.5" cy="2.3" r=".3" fill="#231f20"/><circle cx="56.3" cy="35.2" r=".3" fill="#231f20"/><circle cx="59" cy="48.3" r=".3" fill="#231f20"/><circle cx="10.1" cy="5" r="1.2" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5.1 42.4h2M6.1 43.3v-1.9"/><circle cx="56.7" cy="12.5" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M55.3 53.1h2M56.3 54.1v-2"/><path fill="#fff" d="M52.9 16.9l-.3-.2v-10H17c-2.8 0-5.1 2.3-5.1 5.1v45.9c0 2.3 1.8 4.1 4.1 4.1h33.1c2.3 0 4.1-1.8 4.1-4.1V17l-.3-.1z"/><path fill="#3768a4" d="M53 16.9l-.3-.2v-10H21.9c-2.5 0-4.4 2.3-4.4 5.1v45.9c0 2.3 1.6 4.1 3.5 4.1h28.6c1.9 0 3.5-1.8 3.5-4.1V17l-.1-.1z"/><path fill="#4d9ad4" d="M49.4 16.9l-.3-.2v-10H19c-2.4 0-4.3 2.3-4.3 5.1v45.9c0 2.3 1.5 4.1 3.5 4.1h28c1.9 0 3.5-1.8 3.5-4.1V17l-.3-.1z"/><path fill="#fff" d="M52.6 17v-6.1c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8s1.4 1.8 4.6 1.9c3.2.1 35 0 35 0z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M16.1 48.3v4.6"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.9 23.7V12.5M11.9 28.6v-3M53.2 41.6v16.3c0 2.3-1.8 4.1-4.1 4.1H16c-2.3 0-4.1-1.8-4.1-4.1V30.5M53.2 17.1v22.4M53.2 17.1H17c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1h35.6v10"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M52.6 17.1V11c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M19.5 19.6c-1.9 0-3.4 1.5-3.4 3.4M16.1 24.8v.7"/><path fill="#fff" d="M37.7 34.4H26.6c-1.2 0-2.2-1-2.2-2.2v-4.8c0-1.2 1-2.2 2.2-2.2h11.1c1.2 0 2.2 1 2.2 2.2v4.8c.1 1.2-.9 2.2-2.2 2.2z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M38.1 34.4h-12c-1 0-1.8-.8-1.8-1.8V27c0-1 .8-1.8 1.8-1.8h12c1 0 1.8.8 1.8 1.8v5.6c.1.9-.8 1.8-1.8 1.8z"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.5 3.3h2M46.5 4.2V2.3"/></svg>
				</div>
					<h4>Ruang 3</h4>
				<div class="teacher">
					<p></p>
				</div>
			</a>
			</div>
		</div>

		<!-- RUANG 4 -->
		<div class="card">
			<div class="title-room">
			<a href="Ruang-1" class="ruang4">
				<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="57.6" cy="39.5" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="7.7" cy="50.6" r=".3" fill="#231f20"/><circle cx="6.1" cy="20.2" r=".3" fill="#231f20"/><circle cx="58.3" cy="16.2" r=".3" fill="#231f20"/><circle cx="22.5" cy="2.3" r=".3" fill="#231f20"/><circle cx="56.3" cy="35.2" r=".3" fill="#231f20"/><circle cx="59" cy="48.3" r=".3" fill="#231f20"/><circle cx="10.1" cy="5" r="1.2" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5.1 42.4h2M6.1 43.3v-1.9"/><circle cx="56.7" cy="12.5" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M55.3 53.1h2M56.3 54.1v-2"/><path fill="#fff" d="M52.9 16.9l-.3-.2v-10H17c-2.8 0-5.1 2.3-5.1 5.1v45.9c0 2.3 1.8 4.1 4.1 4.1h33.1c2.3 0 4.1-1.8 4.1-4.1V17l-.3-.1z"/><path fill="#3768a4" d="M53 16.9l-.3-.2v-10H21.9c-2.5 0-4.4 2.3-4.4 5.1v45.9c0 2.3 1.6 4.1 3.5 4.1h28.6c1.9 0 3.5-1.8 3.5-4.1V17l-.1-.1z"/><path fill="#4d9ad4" d="M49.4 16.9l-.3-.2v-10H19c-2.4 0-4.3 2.3-4.3 5.1v45.9c0 2.3 1.5 4.1 3.5 4.1h28c1.9 0 3.5-1.8 3.5-4.1V17l-.3-.1z"/><path fill="#fff" d="M52.6 17v-6.1c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8s1.4 1.8 4.6 1.9c3.2.1 35 0 35 0z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M16.1 48.3v4.6"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.9 23.7V12.5M11.9 28.6v-3M53.2 41.6v16.3c0 2.3-1.8 4.1-4.1 4.1H16c-2.3 0-4.1-1.8-4.1-4.1V30.5M53.2 17.1v22.4M53.2 17.1H17c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1h35.6v10"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M52.6 17.1V11c0-1-.8-1.8-1.8-1.8H17.2c-2.3 0-4.2 1.9-4.2 4.2v1.8"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M19.5 19.6c-1.9 0-3.4 1.5-3.4 3.4M16.1 24.8v.7"/><path fill="#fff" d="M37.7 34.4H26.6c-1.2 0-2.2-1-2.2-2.2v-4.8c0-1.2 1-2.2 2.2-2.2h11.1c1.2 0 2.2 1 2.2 2.2v4.8c.1 1.2-.9 2.2-2.2 2.2z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M38.1 34.4h-12c-1 0-1.8-.8-1.8-1.8V27c0-1 .8-1.8 1.8-1.8h12c1 0 1.8.8 1.8 1.8v5.6c.1.9-.8 1.8-1.8 1.8z"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.5 3.3h2M46.5 4.2V2.3"/></svg>
				</div>
					<h4>Ruang 4</h4>
				<div class="teacher">
					<p></p>
				</div>
			</a>
			</div>
		</div>

		<!-- GUDANG  -->
		<div class="card">
			<div class="title-room">
			<a href="Ruang-1" class="ruang7">
				<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="6.4" cy="37.5" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="58.3" cy="30.3" r=".3" fill="#231f20"/><circle cx="21.2" cy="2.3" r=".3" fill="#231f20"/><circle cx="60.1" cy="48.1" r=".3" fill="#231f20"/><circle cx="59" cy="6.4" r="1.2" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M3.6 49.9h1.9M4.5 50.9V49"/><circle cx="5.5" cy="4.2" r=".4" fill="#231f20"/><circle cx="39.4" cy="4.2" r=".4" fill="#231f20"/><circle cx="3.3" cy="42.4" r=".4" fill="#231f20"/><circle cx="58.7" cy="20.2" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M59.2 40.5h1.9M60.1 41.5v-1.9"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.3 22.6h1.9M5.3 23.6v-1.9"/><g><path fill="#fff" d="M13.8 62c-2.4 0-4.3-1.9-4.3-4.3V11.3c0-2.4 1.9-4.3 4.3-4.3v55z"/><path fill="#3768a4" d="M20.6 6.9h3.6v55h-3.6z"/><path fill="#4d9ad4" d="M12.1 7h8.6v55h-8.6z"/><path fill="#fff" d="M24 7h2.8v55H24z"/><path fill="#3768a4" d="M34.8 6.9H39v55h-4.2z"/><path fill="#4d9ad4" d="M26.7 7h8.7v55h-8.7z"/><path fill="#fff" d="M38.6 7h2.8v55h-2.8z"/><path fill="#3768a4" d="M48.2 61.9v-55c2.9 0 5.3 2.4 5.3 5.3v44.5c-.1 2.8-2.4 5.2-5.3 5.2z"/><path fill="#4d9ad4" d="M41.4 7h8.7v55h-8.7z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M17.2 10c-1.9 0-3.4 1.5-3.4 3.4M13.8 15.1v.8M13.8 47.7v4.5M32 10c-1.9 0-3.4 1.5-3.4 3.4M28.6 15.1v.8M28.6 47.7v4.5M46.5 10c-1.9 0-3.4 1.5-3.4 3.4M43.2 15.1v.8M43.2 47.7v4.5"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M24.2 7h14.6v55H24.2zM53.4 47.3v11.2c0 2-1.6 3.6-3.6 3.6h-11V7h11.1c2 0 3.6 1.6 3.6 3.6v34.7M9.6 43.3V17M9.6 47.7v-2.5"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M9.6 15.1v-4.6c0-2 1.6-3.6 3.6-3.6h11.1v55H13.1c-2 0-3.6-1.6-3.6-3.6v-8.7"/><path fill="#ffe4b8" d="M20.8 37.3H13c-1.9 0-3.4-1.5-3.4-3.4v-6.7c0-1.9 1.5-3.4 3.4-3.4h7.8c1.9 0 3.4 1.5 3.4 3.4v6.7c0 1.9-1.5 3.4-3.4 3.4zM35.4 37.3h-7.8c-1.9 0-3.4-1.5-3.4-3.4v-6.7c0-1.9 1.5-3.4 3.4-3.4h7.8c1.9 0 3.4 1.5 3.4 3.4v6.7c0 1.9-1.5 3.4-3.4 3.4zM38.8 24h14.6v13.5H38.8z"/><path fill="#fff" d="M9.6 24h2.6v13H9.6zM24.4 24h2.3v13h-2.3zM39 24h2.3v13H39z"/><path fill="#e7d0a8" d="M50.1 24h2.7v13h-2.7zM35.4 24.1h2.7v13h-2.7zM20.7 24.1h2.7v13h-2.7z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M9.6 24h14.6v13.5H9.6zM24.2 24h14.6v13.5H24.2zM38.8 24h14.6v13.5H38.8zM12.6 28.3h8.5M12.6 31.3h8.5M27.3 28.3h8.4M27.3 31.3h8.4M41.9 28.3h8.5M41.9 31.3h8.5"/><circle cx="46.1" cy="56.2" r="2" fill="#fff"/><circle cx="46.1" cy="56.2" r="2" fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/><circle cx="16.9" cy="56.2" r="2" fill="#fff"/><circle cx="16.9" cy="56.2" r="2" fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/><circle cx="31.5" cy="56.2" r="2" fill="#fff"/><circle cx="31.5" cy="56.2" r="2" fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/></g></svg>
				</div>
					<h4>Gudang</h4>
				<div class="teacher">
					<p></p>
				</div>
			</a>
			</div>
		</div>

		<!-- RUANG GURU -->
		<div class="card">
			<div class="title-room">
			<a href="Ruang-1" class="ruangguru">
				<div class="profile">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 64 65" xml:space="preserve"><circle cx="47.7" cy="9.7" r=".9" fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><circle cx="38.2" cy="10.3" r=".3" fill="#231f20"/><circle cx=".9" cy="46.5" r=".3" fill="#231f20"/><circle cx="62.8" cy="38.4" r=".3" fill="#231f20"/><circle cx="55.3" cy="8" r=".3" fill="#231f20"/><circle cx="14.5" cy="14.9" r="1.1" fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/><path fill="none" stroke="#f16723" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M19.3 6.7h1.9M20.3 7.6V5.7"/><circle cx="6.9" cy="14.5" r=".4" fill="#231f20"/><circle cx="52.4" cy="21.1" r=".4" fill="#231f20"/><path fill="none" stroke="#4d9ad4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4 19.6h1.9M5 20.5v-1.8"/><path fill="none" stroke="#fbd108" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M53.5 16.7h1.9M54.4 17.7v-1.9"/><g><path fill="#fafdff" d="M30.6 18.1h2.9c4.2 0 7.7 3.1 8.3 7.2h5.1c0-6.3-5.1-11.4-11.4-11.4h-6.8c-6.3 0-11.4 5.1-11.4 11.4h5.1c.5-4 4-7.2 8.2-7.2z"/><path fill="#4d9ad4" d="M30.6 18.1h2.9c3.9 0 7.1 2.6 8.1 6.2h5.3l-.9-3.4c-1-3.8-6.2-6.9-10-6.9l-9.5-.1c-3.8 0-6.9 3.1-6.9 7v3.6h2.9c.9-3.7 4.2-6.4 8.1-6.4z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M30.6 18.1h2.9c4.2 0 7.7 3.1 8.3 7.2h5.1c0-6.3-5.1-11.4-11.4-11.4h-6.8c-6.3 0-11.4 5.1-11.4 11.4h5.1c.5-4 4-7.2 8.2-7.2z"/><path fill="#3768a4" d="M58.3 59.3h-3.8V24.4h3.8c1 0 1.7.8 1.7 1.7v31.5c0 .9-.8 1.7-1.7 1.7z"/><path fill="#fafdff" d="M9.3 59.3H6c-1.1 0-1.9-.9-1.9-1.9V26.3c0-1.1.9-1.9 1.9-1.9h3.3v34.9z"/><path fill="#4d9ad4" d="M56.9 59.3H6.5c-.1 0-.1-.1-.1-.1V24.5c0-.1.1-.1.1-.1h50.4c.1 0 .1.1.1.1v34.7s0 .1-.1.1z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M36.6 39l21.3-14.6M27.4 39L6.2 24.4M58.3 59.3H5.7c-.9 0-1.7-.8-1.7-1.7V26.1c0-.9.8-1.7 1.7-1.7h52.6c.9 0 1.7.8 1.7 1.7v31.5c0 .9-.8 1.7-1.7 1.7z"/><path fill="#3768a4" d="M32 46.5c-2.4 0-4.4-2-4.4-4.4v-2.8c0-2.4 2-4.4 4.4-4.4 2.4 0 4.4 2 4.4 4.4v2.8c0 2.5-1.9 4.4-4.4 4.4z"/><path fill="#fafdff" d="M31.8 46.5c-2.3 0-4.2-1.9-4.2-4.2v-3.2c0-2.3 1.9-4.2 4.2-4.2.1 0 .2.1.2.2v11.2c0 .1-.1.2-.2.2z"/><path fill="#4d9ad4" d="M31.7 46.5c-1 0-1.7-.8-1.7-1.7v-8.1c0-1 .8-1.7 1.7-1.7 1 0 1.7.8 1.7 1.7v8.1c.1 1-.7 1.7-1.7 1.7z"/><path fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M32 46.5c-2.4 0-4.4-2-4.4-4.4v-2.8c0-2.4 2-4.4 4.4-4.4 2.4 0 4.4 2 4.4 4.4v2.8c0 2.5-1.9 4.4-4.4 4.4z"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" d="M8.2 51.1v4.4M11.5 27.6c-1.8 0-3.3 1.5-3.3 3.3M8.2 32.6v.8"/></g></svg>
				</div>
					<h4>Ruang Guru</h4>
				<div class="teacher">
					<p></p>
				</div>
			</a>
			</div>
		</div>
	</div>

	<div class="foot">
		<div class="copyright">&copy; Copyright 2022, Dojin. <br>Dibuat Oleh <span><a href="#">Ridho</a></span></div>
		<div class="logout"><a href="Login/logout.php">Logout</a></div>
	</div>
</body>
</html>