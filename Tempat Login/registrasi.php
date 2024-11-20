<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPAMINS</title>
    <title>Contact Form</title>
    <link rel="stylesheet" href="style_registrasi.css">
</head>
<div class="container">

    <div class="card-container">
        <div class="left">
            <div class="left-container">
                <img class="bg-senku" src="img/ketawa.png">
            </div>
        </div>
        <div class="right">
            <div class="right-container">
                <form action="registrasi.php" method="post">
                    <h2 class="lg-view">Sign Up</h2>
                    <input type="text" name="nama" required placeholder="Nama">
                    <input type="email" name="email" required placeholder="Alamat Email">
                    <input type="text" name="password" required placeholder="password">
                    <br><button type="submit" name="submit">Buat Akun</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>

<?php
    include('koneksi.php');

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $hasil = mysqli_query($koneksi, "INSERT INTO users(nama, email, password) VALUES('$nama', '$email', '$password')");

        if ($hasil) {
            header('location: login-page.php');
        } else {
            echo 'Akun gagal dibuat!';
        }
        
    }
?>