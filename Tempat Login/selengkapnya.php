<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login-page.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPAMINS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="img/Logo.png" alt="">
        <h1>WPAMINS</h1>
        <ul>
            <li class="tekan"><a href='dasboard.php'><img class="tanda" src="img/dashboard.png">dasboard</li>
            <li class="tekan"><a href='artikel.php'><img class="tanda" src="img/research.png">Artikel</li>
            <li class="tekan"><a href='kontak.php'><img class="tanda" src="img/kontak.png">Kontak</li>
            <li class="tekan"><a href='tambah_aksi_full.php'><img class="tanda" src="img/ide.png">ide</li>
            <li class="log-out"><a href='logout.php'>Logout</a></li>
        </ul>
    </header>

    <main>
    <div class="tengah">
        <h1 class="ukur"><b>Menyalakan Api Dengan Menggunakan Baterai</b></h1>
        <img class="takon" src="img/menyalakan baterai.png" alt="Gambar menyalakan baterai">
        <hr/>
        <b>Bahan-Bahan</b>
        <ul>
            <li class="bahan">Kertas Aluminium foil</li>
            <li class="bahan">Baterai</li>
            <li class="bahan">Tisu</li>
        </ul>
        <h1>Mulai Experimen</h1>
        <p>Langkah Pertama Potong kertas Aluminium foilnya seperti pada gambar di bawah:</p>
        <img class="rata" src="img/memotong kertas.png" alt="Gambar memotong kertas">
        <p>Agar panasnya bisa terkonsentrasi di ujung kertasnya, sehingga akan lebih mudah terbakar seperti pada gambar di bawah:</p>
        <img class="rata" src="img/tisu terbakar.png" alt="Gambar tisu terbakar">
        <p>Hal ini bisa terjadi karena ketika baterai disambungkan kutub positif dan kutub negatifnya </p>
        <p>dengan menggunakan kertas Aluminium foil, maka arus listrik akan mengalir dalam jumlah besar.</p>
        <p>Arus listrik yang besar ini kemudian menghasilkan panas. Ketika foil tidak bisa menahannya,kemungkinan akan terbakar.</p> 
        <img class="rata" src="img/arus listrik .png" alt="Gambar arus listrik"><p>Proses ini mirip dengan terjadinya konsleting pada kabel yang dapat</p>
        <p>menyebabkan kebakaran. Proses tersebut dapat dipercepat dengan membuat bagian tengah foil lebih kecil,
        </p> karena jika lebih kecil, foil tidak dapat menahan panas dan lebih mudah terbakar.</p>
        <img class="rata" src="img/diperkecill.png" alt="Gambar diperkecil">
    </div>
</main>
