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
        <h1 class="ukur"><b>Melawan Gravitasi dengan menggunakan bola madu</b></h1>
        <img class="takon" src="img/melawan gravitasi.png" alt="Gambar membuat baterai">
        <hr/>
        <ul class="bahan3"><b class="bahan3">Bahan-Bahan Yang Diperlukan</b></ul>
        <li class="bahan3">Bola Akrilik</li> <img class="bahan2" src="img/bola akrilik.png"> 
        <li class="bahan3">Madu</li> <img class="bahan2" src="img/madu.png"><hr/>
        <p>Isikan Madu kedalam Bola Akrilik, Kemudian uji cobalah bola yang berisi madu tadi dengan bola yang</p>
        <p>tidak berisi madu di bidang yang miring.</p>
        <p>Nah ketika kedua bola tadi diletakan dan dijadikan maka bola yang berisikan madu tadi akan turun perlahan</p> 
        <img class="bahan5" src="img/uji coba bola.png">
        <br/><p>Nah yang jadi pertanyaan kok bisa bola berisikan madu tersebut turun secara perlahan ?</p>
        <p>,Nah ketika diperhatikan lagi ketika turun/mengelinding itu madunya akan ketinggalan dibelakang</p>
        <p>karena dia kental, jadinya ketika bolanya bergerak kedepan sebagian madunya, masih ada yang ketinggalan</p>
        <p>di belakang, dan madu yang di belakang akan menahan gerakan dari bola ini dan untuk melanjutkan gerakanya,</p>
        <p>bola perlu menunggu sebentar agar madu yang dibelakang turun ke bawah, dan ketika sudah turun dibawah dia</p>
        <p>mengelinding lagi dan ada yang ketinggalan dan proses itu akan terus berulang jadi prinsipnya seperti itu.</p>
        </main>    
            