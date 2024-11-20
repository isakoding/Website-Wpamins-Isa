<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
			background: url('img/botol.png');
		}
	</style>
</head>
<body>
	<form method="post" action="login-page.php">
    <h1>Access to the platform</h1>
		<label>Email:</label>
		<input type="text" name="email" placeholder="Masukan Email Anda" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Masukan Password Anda" required><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
include('koneksi.php');

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$hasil = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	
	$cek = mysqli_num_rows($hasil);
	
	$data = $hasil->fetch_array();
	
	if ($cek > 0) {
		session_start();
		$_SESSION['id'] = $data['id'];
		header('location: dasboard.php');
	} else {
		echo 'Email atau password salah!';
	}
	
}
?>