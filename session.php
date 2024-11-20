<?php
session_start();

if (isset($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // periksa_login

    if (($user=="dna" && $pass=="123456")){
        //ciptakan session
        $_SESSION['login'] = $user;
        // menuj ke halaman pemeriksaan session
        echo "<h1>Selamat anda berhasil login!</h1>";
        echo "<h3>Klik <a href='session02.php'>di sini</a>
        untuk menuju ke halaman pemeriksaan session";
    } else {

    }
}
?>

<html>
<head>
    <title>Login here...</title>
</head>
<body>  
    <form action="" method="post">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user"><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>