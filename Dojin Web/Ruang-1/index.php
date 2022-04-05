<?php 
require '../connect.php';

session_start();
if ($_SESSION['login'] != true) {
		header("location:../Login/index.php?user=not-login");
}

$sql = mysqli_query($conn, "SELECT * FROM perangkat");
$data =  mysqli_fetch_array($sql);

$lampu1 = $data['lampur1'];
$lampu2 = $data['lampu2r1'];
$ac = $data['acr1'];
$kipas = $data['kipasr1'];
$proyektor = $data['proyektorr1'];
$suhu = $data['suhur1'];
$kelembapan = $data['kelembapanr1'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ruang 1</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#7BBDFF" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#7BBDFF" />
	<meta name="msapplication-navbutton-color" content="#7BBDFF" />
	<link rel="shortcut icon" href="../assets/Dojin.png">
</head>
<body onload="sensorSuhu();
			sensorLembap();">
	<header>
		<div class="back"><a href="../"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 57.61"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:8px;}</style></defs><title>back</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polyline class="cls-1" points="28.61 52.61 5 29 29 5"/></g></g></svg></a> </div>
		<h2 class="ruang">Ruang 1</h2>
		<div class="suhudankelembapan">
			<div class="suhu"><span id="suhu"></span><span class="celcius">&degC</span><br>Suhu</div> 
			<div class="kelembapan"><span id="kelembapan"></span><span class="humidity">%<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#fff" d="M18 3a2 2 0 0 0-2 2 2 2 0 0 0 2 2 2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0 1a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zM18 14.7c0 3.479394-2.686291 6.3-6 6.3-3.3137078 0-6-2.820606-6-6.3 2e-7-3.479394 6-11.7 6-11.7s6 8.220606 6 11.7z" paint-order="stroke fill markers"/></svg></span><br>Lembap</div>
		</div>
	</header>
	<div class="container">

		<!-- LAMPU -->
		<div class="card">
			<div class="card-list">
				<div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#7BBDFF" d="M17.09,2.82a8,8,0,0,0-6.68-1.66A8,8,0,0,0,4.14,7.48a8.07,8.07,0,0,0,1.72,6.65A4.54,4.54,0,0,1,7,17v3a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V17.19A5.17,5.17,0,0,1,18.22,14a8,8,0,0,0-1.13-11.2ZM15,20a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V19h6Zm1.67-7.24A7.13,7.13,0,0,0,15,17H13V14a1,1,0,0,0-2,0v3H9a6.5,6.5,0,0,0-1.6-4.16,6,6,0,0,1,3.39-9.72A6,6,0,0,1,18,9,5.89,5.89,0,0,1,16.67,12.76Z"/></svg></div>
				<div class="card-title">Lampu 1</div>
			</div>
			<label class="switch">
			  <input type="checkbox" onchange="ubahStatusLampu(this.checked)" <?php if($lampu1 == 1) echo "checked"; ?>>
			  <span class="slider"></span>
			</label>
		</div>

		<!-- LAMPU 2 -->
		<div class="card">
			<div class="card-list">
				<div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#7BBDFF" d="M17.09,2.82a8,8,0,0,0-6.68-1.66A8,8,0,0,0,4.14,7.48a8.07,8.07,0,0,0,1.72,6.65A4.54,4.54,0,0,1,7,17v3a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V17.19A5.17,5.17,0,0,1,18.22,14a8,8,0,0,0-1.13-11.2ZM15,20a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V19h6Zm1.67-7.24A7.13,7.13,0,0,0,15,17H13V14a1,1,0,0,0-2,0v3H9a6.5,6.5,0,0,0-1.6-4.16,6,6,0,0,1,3.39-9.72A6,6,0,0,1,18,9,5.89,5.89,0,0,1,16.67,12.76Z"/></svg></div>
				<div class="card-title">Lampu 2</div>
			</div>
			<label class="switch">
			  <input type="checkbox" onchange="ubahStatusLampu2(this.checked)" <?php if($lampu2 == 1) echo "checked"; ?>>
			  <span class="slider"></span>
			</label>
		</div>

		<!-- AC -->
		<div class="card">
			<div class="card-list">
				<div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#7BBDFF" d="M27,5H5A3,3,0,0,0,2,8V18a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V8A3,3,0,0,0,27,5ZM25,19H7V18H25Zm3-1a1,1,0,0,1-1,1V17a1,1,0,0,0-1-1H6a1,1,0,0,0-1,1v2a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7H27a1,1,0,0,1,1,1Z"/><path fill="#7BBDFF" d="M26 8H6a1 1 0 0 0 0 2H26a1 1 0 0 0 0-2zM16 22a1 1 0 0 0-1 1v3a1 1 0 0 0 2 0V23A1 1 0 0 0 16 22zM22 22a1 1 0 0 0-1 1v3a1 1 0 0 0 2 0V23A1 1 0 0 0 22 22zM10 22a1 1 0 0 0-1 1v3a1 1 0 0 0 2 0V23A1 1 0 0 0 10 22z"/></svg></div>
				<div class="card-title">Air Conditioner</div>
			</div>
			<label class="switch">
			  <input type="checkbox" onchange="ubahStatusAc(this.checked)" <?php if($ac == 1) echo "checked"; ?>>
			  <span class="slider"></span>
			</label>
		</div>

		<!-- KIPAS -->
		<div class="card">
			<div class="card-list">
				<div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 220 220"><path fill="#7BBDFF" d="M140.4,210c-.64,0-1.28,0-2,0-11-.4-22-4.28-32.66-11.39-15.23-10.2-20.5-28.87-15.39-54.25-1-.48-1.88-1-2.8-1.6a83.45,83.45,0,0,0-4.31,7.44C79.8,157,78,164,76.32,170.06c-1.4,5.28-2.64,9.84-4.64,13.56-2.79,5.15-6.91,7.95-12.19,8.35-14.75,1.08-32.18-9.51-41.49-25.22a51.78,51.78,0,0,1-7.28-27.51c.24-11,3.88-22,10.87-32.86C31.19,91.47,49,85.76,73.32,89.71c.36-.68.76-1.35,1.16-2a86.35,86.35,0,0,0-8.67-5.32C59,78.76,52.1,76.8,46,75.08c-5.24-1.48-9.79-2.79-13.47-4.87-5.12-2.88-7.88-7-8.16-12.36-.84-14.75,10.08-32,25.91-41A51.27,51.27,0,0,1,77.92,10c11,.4,22,4.28,32.66,11.4,14.51,9.71,20,27.22,16,50.85a42,42,0,0,1,5.56,3.27,83,83,0,0,0,4.55-7.83c3.48-6.88,5.32-13.79,7-19.91,1.4-5.28,2.64-9.83,4.64-13.55,2.79-5.16,6.91-8,12.19-8.36,14.75-1.08,32.18,9.52,41.49,25.23a51.74,51.74,0,0,1,7.28,27.5c-.24,11-3.88,22-10.87,32.86-7.64,11.87-20.43,17.91-37.54,17.91a90.43,90.43,0,0,1-16.43-1.6,37.79,37.79,0,0,1-2.72,4.36,87.61,87.61,0,0,0,8.91,5.47c6.8,3.6,13.72,5.56,19.79,7.28,5.24,1.48,9.8,2.8,13.47,4.88,5.12,2.88,7.88,7,8.16,12.35.84,14.75-10.07,32-25.9,41A52.84,52.84,0,0,1,140.4,210ZM86.15,128.17a5.94,5.94,0,0,1,4,1.52,28.26,28.26,0,0,0,9.2,5.48,6,6,0,0,1,3.79,7.07c-5.63,22.87-2.51,38.46,9.32,46.33,22,14.71,39.33,8.92,47.69,4.16,13.55-7.75,20.35-21.23,19.87-30,0-.72-.08-1.44-2.08-2.56-2.44-1.36-6.32-2.48-10.84-3.76-6.31-1.8-14.19-4-22.1-8.19a117.44,117.44,0,0,1-15.75-10.32,6,6,0,0,1-.52-9,28.12,28.12,0,0,0,6.63-10,6,6,0,0,1,6.92-3.68c22.87,5.2,38.34,1.8,46-10.12,14.35-22.26,8.28-39.45,3.36-47.73-8-13.43-21.55-20-30.3-19.34-.72,0-1.44.12-2.52,2.11-1.32,2.44-2.36,6.36-3.6,10.92-1.68,6.35-3.8,14.23-7.83,22.22A111.29,111.29,0,0,1,138.2,88a5.91,5.91,0,0,1-4.39,2.43,6.08,6.08,0,0,1-4.72-1.76,27.77,27.77,0,0,0-11.19-6.91,5.94,5.94,0,0,1-4-7c4.59-21.22,1.24-35.77-10-43.29-22.06-14.83-39.37-9-47.73-4.28C42.66,35,35.87,48.46,36.35,57.21c0,.72.08,1.44,2.07,2.56,2.44,1.36,6.32,2.48,10.84,3.76,6.31,1.8,14.19,4,22.1,8.2a107.79,107.79,0,0,1,15,9.79,5.87,5.87,0,0,1,2.32,4.12,6,6,0,0,1-1.4,4.51,28.62,28.62,0,0,0-4.91,8.36,6,6,0,0,1-6.84,3.76c-21.75-4.52-36.54-1-43.93,10.55-14.31,22.35-8.24,39.54-3.32,47.81,8,13.43,21.55,20,30.3,19.35.72,0,1.44-.12,2.52-2.12,1.32-2.44,2.36-6.36,3.6-10.91,1.68-6.36,3.8-14.23,7.83-22.23a110.29,110.29,0,0,1,8.72-14.07,6,6,0,0,1,4.2-2.44c.24,0,.47,0,.67,0Z"/><path fill="#7BBDFF" d="M106.74,121.33A12,12,0,1,0,113,98.16h0a12,12,0,0,0-6.21,23.17Z"/></svg></div>
				<div class="card-title">Kipas</div>
			</div>
			<label class="switch">
			  <input type="checkbox" onchange="ubahStatusKipas(this.checked)" <?php if($kipas == 1) echo "checked"; ?>>
			  <span class="slider"></span>
			</label>

		</div>

			<!-- PROYEKTOR -->
		<div class="card">
			<div class="card-list">
				<div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="Layer 2"><path fill="#7BBDFF" d="M28.58,23H3.42A2.42,2.42,0,0,1,1,20.58V12.42A2.42,2.42,0,0,1,3.42,10H7v1a3.94,3.94,0,0,0,7.87,0V10h13.7A2.42,2.42,0,0,1,31,12.42v8.17A2.42,2.42,0,0,1,28.58,23ZM3.42,12a.42.42,0,0,0-.42.42v8.17a.42.42,0,0,0,.42.42H28.58a.42.42,0,0,0,.42-.42V12.42a.42.42,0,0,0-.42-.42H16.78A5.94,5.94,0,0,1,5.09,12Z"/><path fill="#7BBDFF" d="M10.94,16.88a5.94,5.94,0,1,1,5.93-5.94V11A6,6,0,0,1,10.94,16.88Zm0-9.88a3.94,3.94,0,1,0,3.93,4l1,0h-1A3.94,3.94,0,0,0,10.94,7Z"/><rect fill="#7BBDFF" width="4.63" height="2" x="21.75" y="13.13" rx="1" ry="1"/><rect fill="#7BBDFF" width="2" height="4.25" x="5" y="21.75" rx="1" ry="1"/><rect fill="#7BBDFF" width="2" height="4.25" x="25" y="21.75" rx="1" ry="1"/><rect fill="#7BBDFF" width="2" height="2" x="9.94" y="9.94" rx="1" ry="1"/></g></svg></div>
				<div class="card-title">Proyektor</div>
			</div>
			<label class="switch">
			  <input type="checkbox" onchange="ubahStatusProyektor(this.checked)" <?php if($proyektor == 1) echo "checked"; ?>>
			  <span class="slider"></span>
			</label>
		</div>

	</div>

	<script type="text/javascript">

		//SENSOR SUHU
		function sensorSuhu(){
			var ajax = new XMLHttpRequest();

			ajax.onload = function() {
				document.getElementById("suhu").innerHTML = ajax.responseText;
				console.log(ajax.responseText);
			}

			ajax.open( "GET", "status/datasuhu.php", true);
			ajax.send();
		} 

		setInterval(function(){
			sensorSuhu();
		}, 1000);

		//SENSOR KELEMBAPAN
		function sensorLembap(){
			var ajax = new XMLHttpRequest();

			ajax.onload = function() {
				document.getElementById("kelembapan").innerHTML = ajax.responseText
			}

			ajax.open( "GET", "status/datakelembapan.php", true);
			ajax.send();
		} 

		setInterval(function(){
			sensorLembap();
		}, 1000);

		// LAMPU 1
		function ubahStatusLampu(status){
			var ajax = new XMLHttpRequest();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
				}
			}

			ajax.open( "GET", "device/lampu1.php?stat=" + status, true);
			ajax.send();
		} 

		// LAMPU 2
		function ubahStatusLampu2(status){
			var ajax = new XMLHttpRequest();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
				}
			}

			ajax.open( "GET", "device/lampu2.php?stat=" + status, true);
			ajax.send();
		} 

		// AC
		function ubahStatusAc(status){
			var ajax = new XMLHttpRequest();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
				}
			}

			ajax.open( "GET", "device/ac.php?stat=" + status, true);
			ajax.send();
		} 

		// KIPAS
		function ubahStatusKipas(status){
			var ajax = new XMLHttpRequest();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
				}
			}

			ajax.open( "GET", "device/kipas.php?stat=" + status, true);
			ajax.send();
		} 

		// PROYEKTOR
		function ubahStatusProyektor(status){
			var ajax = new XMLHttpRequest();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
				}
			}

			ajax.open( "GET", "device/proyektor.php?stat=" + status, true);
			ajax.send();
		} 
	</script>
</body>
</html>