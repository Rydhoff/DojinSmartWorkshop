<?php 
session_start();
require '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' ");
$result = mysqli_fetch_array($data);

if ($result['username'] == $username && $result['password'] == md5($password)) {
	$_SESSION['login'] = "true";
	
	if (isset($_POST['remember'])) {
		setcookie('name', $username, time() + 60 * 60 * 24 * 3);
		setcookie('pass', $password, time() + 60 * 60 * 24 * 3);
		setcookie('cookie', 'true', time() + 60 * 60 * 24 * 3);
	} else {
		setcookie('name', '', time() - 60 * 60 * 24 * 3);
		setcookie('pass', '', time() - 60 * 60 * 24 * 3);
		setcookie('cookie', '', time() - 60 * 60 * 24 * 3);
	}
	header("location:../");
} else {
	header("location:index.php?user=fail");
}
?>