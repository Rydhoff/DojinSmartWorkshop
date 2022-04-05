<?php 
	require '../../connect.php';
	$result = mysqli_query($conn, "SELECT * FROM perangkat");

	$stat = $_GET['stat'];


	if ($stat == "true") {
		mysqli_query($conn, "UPDATE perangkat SET lampur1=1");
	} else {
		mysqli_query($conn, "UPDATE perangkat SET lampur1=0");
	} 

 ?>