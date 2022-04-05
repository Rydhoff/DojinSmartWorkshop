<?php 
	require '../../connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data =  mysqli_fetch_array($sql);

	$suhu = $data['suhur1'];

	echo $suhu;
 ?>
