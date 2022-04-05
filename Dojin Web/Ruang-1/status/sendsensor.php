<?php 
	require '../../connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data =  mysqli_fetch_array($sql);

	$ac = $data['acr1'];

	$suhu = $_GET ['suhu'];
	$kelembapan = $_GET ['kelembapan'];

	$send = mysqli_query($conn, "UPDATE perangkat SET suhur1='$suhu', kelembapanr1='$kelembapan'");

	if ($send) {
		echo "Terkirim";
	} else {
		echo "Gagal";
	}
 ?>