<?php 
	require '../../connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data =  mysqli_fetch_array($sql);

	$lampu2 = $data['lampu2r1'];

	echo $lampu2;
 ?>