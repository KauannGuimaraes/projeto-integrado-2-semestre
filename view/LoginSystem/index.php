<?php 

//include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['logged'])) {
    header("Location: welcome.php");
}

// if (isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$password = md5($_POST['password']);

// 	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['username'] = $row['username'];
// 		header("Location: welcome.php");
// 	} else {
// 		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
// 	}
// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Área</title>
</head>
<body>
	<div class="container">
		<form action="login-instance.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Senha" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Você não tem conta? <a href="register.php">Registre-se aqui</a>.</p>
		</form>
	</div>
</body>
</html>