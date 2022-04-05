<?php 
require '../connect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#7BBDFF" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#7BBDFF" />
	<meta name="msapplication-navbutton-color" content="#7BBDFF" />
	<link rel="shortcut icon" href="../assets/Dojin.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="logo">
		<div class="circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.08 87.08"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c3556;}</style></defs><title>main logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M43.54,84.58a41,41,0,1,1,41-41A41.09,41.09,0,0,1,43.54,84.58Zm0-58.85A17.81,17.81,0,1,0,61.35,43.54,17.83,17.83,0,0,0,43.54,25.73Z"/><path class="cls-2" d="M43.54,87.08A43.54,43.54,0,1,1,87.08,43.54,43.59,43.59,0,0,1,43.54,87.08ZM43.54,5A38.54,38.54,0,1,0,82.08,43.54,38.58,38.58,0,0,0,43.54,5Zm0,58.85A20.31,20.31,0,1,1,63.85,43.54,20.33,20.33,0,0,1,43.54,63.85Zm0-35.62A15.31,15.31,0,1,0,58.85,43.54,15.33,15.33,0,0,0,43.54,28.23Z"/></g></g></svg></div>

		<div class="part up"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.94 57.11"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c3556;}</style></defs><title>part logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.37,51.9,35.62,35.11a12.7,12.7,0,0,0,0-13.11L24.37,5.22c-2.43-3.63-6.37-3.63-8.8,0L4.32,22a12.7,12.7,0,0,0,0,13.11L15.57,51.9C18,55.52,21.94,55.52,24.37,51.9Z"/><path class="cls-2" d="M20,57.11a7.91,7.91,0,0,1-6.47-3.82L2.24,36.51a15.21,15.21,0,0,1,0-15.9L13.5,3.82A7.91,7.91,0,0,1,20,0h0a7.91,7.91,0,0,1,6.47,3.82L37.7,20.61a15.21,15.21,0,0,1,0,15.9L26.44,53.29A7.91,7.91,0,0,1,20,57.11ZM20,5a3,3,0,0,0-2.32,1.61L6.39,23.39a10.21,10.21,0,0,0,0,10.33L17.65,50.51A3,3,0,0,0,20,52.11a3,3,0,0,0,2.32-1.6h0L33.55,33.72a10.21,10.21,0,0,0,0-10.33L22.29,6.61A3,3,0,0,0,20,5Z"/></g></g></svg></div>
		<div class="part right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.94 57.11"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c3556;}</style></defs><title>part logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.37,51.9,35.62,35.11a12.7,12.7,0,0,0,0-13.11L24.37,5.22c-2.43-3.63-6.37-3.63-8.8,0L4.32,22a12.7,12.7,0,0,0,0,13.11L15.57,51.9C18,55.52,21.94,55.52,24.37,51.9Z"/><path class="cls-2" d="M20,57.11a7.91,7.91,0,0,1-6.47-3.82L2.24,36.51a15.21,15.21,0,0,1,0-15.9L13.5,3.82A7.91,7.91,0,0,1,20,0h0a7.91,7.91,0,0,1,6.47,3.82L37.7,20.61a15.21,15.21,0,0,1,0,15.9L26.44,53.29A7.91,7.91,0,0,1,20,57.11ZM20,5a3,3,0,0,0-2.32,1.61L6.39,23.39a10.21,10.21,0,0,0,0,10.33L17.65,50.51A3,3,0,0,0,20,52.11a3,3,0,0,0,2.32-1.6h0L33.55,33.72a10.21,10.21,0,0,0,0-10.33L22.29,6.61A3,3,0,0,0,20,5Z"/></g></g></svg></div>
		<div class="part bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.94 57.11"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c3556;}</style></defs><title>part logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.37,51.9,35.62,35.11a12.7,12.7,0,0,0,0-13.11L24.37,5.22c-2.43-3.63-6.37-3.63-8.8,0L4.32,22a12.7,12.7,0,0,0,0,13.11L15.57,51.9C18,55.52,21.94,55.52,24.37,51.9Z"/><path class="cls-2" d="M20,57.11a7.91,7.91,0,0,1-6.47-3.82L2.24,36.51a15.21,15.21,0,0,1,0-15.9L13.5,3.82A7.91,7.91,0,0,1,20,0h0a7.91,7.91,0,0,1,6.47,3.82L37.7,20.61a15.21,15.21,0,0,1,0,15.9L26.44,53.29A7.91,7.91,0,0,1,20,57.11ZM20,5a3,3,0,0,0-2.32,1.61L6.39,23.39a10.21,10.21,0,0,0,0,10.33L17.65,50.51A3,3,0,0,0,20,52.11a3,3,0,0,0,2.32-1.6h0L33.55,33.72a10.21,10.21,0,0,0,0-10.33L22.29,6.61A3,3,0,0,0,20,5Z"/></g></g></svg></div>
		<div class="part left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.94 57.11"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c3556;}</style></defs><title>part logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.37,51.9,35.62,35.11a12.7,12.7,0,0,0,0-13.11L24.37,5.22c-2.43-3.63-6.37-3.63-8.8,0L4.32,22a12.7,12.7,0,0,0,0,13.11L15.57,51.9C18,55.52,21.94,55.52,24.37,51.9Z"/><path class="cls-2" d="M20,57.11a7.91,7.91,0,0,1-6.47-3.82L2.24,36.51a15.21,15.21,0,0,1,0-15.9L13.5,3.82A7.91,7.91,0,0,1,20,0h0a7.91,7.91,0,0,1,6.47,3.82L37.7,20.61a15.21,15.21,0,0,1,0,15.9L26.44,53.29A7.91,7.91,0,0,1,20,57.11ZM20,5a3,3,0,0,0-2.32,1.61L6.39,23.39a10.21,10.21,0,0,0,0,10.33L17.65,50.51A3,3,0,0,0,20,52.11a3,3,0,0,0,2.32-1.6h0L33.55,33.72a10.21,10.21,0,0,0,0-10.33L22.29,6.61A3,3,0,0,0,20,5Z"/></g></g></svg></div>
	</div>

	<div class="container">
	
		<form action="auth.php" method="post">
			<div class="form-wrap">
			<div class="login-title"><h2>Login</h2></div>
				
				<?php if (isset($_GET['user'])) {
					if ($_GET['user'] == "fail") {
					echo "<p>Username dan password tidak sesuai</p>";
					} elseif ($_GET['user'] == "not-login") {
					echo "<p>Login terlebih dahulu</p>";} 
				}
				?>
				
				<div class="inputan">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" placeholder="Username" value="<?php if (isset($_COOKIE['name'])) {echo $_COOKIE['name'];} ?>" >
				</div>

				<div class="inputan"> 
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Password" value="<?php if (isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>" >	
				</div>

				<div class="remember">
					<input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE['name'])) {echo "checked";} ?>>
					<div class="title-remember"><label for="remember">Ingat Aku</label></div>
					
				</div>

				<div class="btn">
					<button type="submit" name="login">Login</button>
				</div>
			</div>

		</form>

	</div>
</body>
</html>