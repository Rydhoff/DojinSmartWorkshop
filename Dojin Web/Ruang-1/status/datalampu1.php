<?php 
	require '../../connect.php';

	$sql = mysqli_query($conn, "SELECT * FROM perangkat");
	$data =  mysqli_fetch_array($sql);

	$lampu1 = $data['lampur1'];

	echo $lampu1;
 ?>