<?php 
	require '../../connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data =  mysqli_fetch_array($sql);

	$kelembapan = $data['kelembapanr1'];

	echo $kelembapan;
 ?>