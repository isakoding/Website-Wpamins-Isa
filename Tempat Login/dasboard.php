<?php
session_start();
include('koneksi.php');
?>

<?php
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
            <li class="tekan active"><a href='dasboard.php'><img class="tanda" src="img/dashboard.png">dasboard</li>
            <li class="tekan"><a href='artikel.php'><img class="tanda" src="img/research.png">artikel</li>
            <li class="tekan"><a href='kontak.php'><img class="tanda" src="img/kontak.png">kontak</li>
            <li class="tekan"><a href='tambah_aksi_full.php'><img class="tanda" src="img/ide.png">ide</li>
            <li class="log-out"><a href='logout.php'><img class="tanda" src="img/logout.png">logout</a></li>
        </ul>
    </header>
    <main>
        <div class="tengah">
            <?php

            ?>
            <h1>Berikut Pemanfaat Ilmu Sains Yang Perlu Kalian Coba</h1>
            <div class="cards">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/-I8ge1wEGQc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h1>Video Membuktikan Eksperimen Sains Detektif Konan</h1>
                    <h3>Kimia</h3>
                    <p>di dalam Video ini dijelaskan secara detail tentang praktek menyalakn Api </p>
                    <p>dengan baterai dan penjelasan reaksi kimianya! </p>
                </div>
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/uP5ZKqTFoPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h1>Video Membuktikan Eksperimen Sains Dr.Stone</h1>
                    <h3>Fisika</h3>
                    <p>di dalam Video ini dijelaskan secara detail tentang praktek membuat katrol</p>
                    <p>buat mengangkat beban yang berat serta perhitungan fisikanya!</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="teks">
            <p>&copy; Isa Asma'ul Husna</p>
            <p style="font-size: 12px; margin-top: -6px">F2 - PTI - UNY - 2024</p>
        </div>
    </footer>
</body>

</html>