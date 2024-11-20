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
            <li class="tekan active"><a href='artikel.php'><img class="tanda" src="img/research.png">artikel</li>
            <li class="tekan"><a href='kontak.php'><img class="tanda" src="img/kontak.png">kontak</li>
            <li class="tekan"><a href='tambah_aksi_full.php'><img class="tanda" src="img/ide.png">ide</li>
            <li class="log-out"><a href='logout.php'><img class="tanda" src="img/logout.png">logout</a></li>

        </ul>
    </header>
    <main>
        <div class="tengah">
            <input id="input_cari" type="text" onkeyup="cari()" class="cari_input" placeholder="Ketik untuk mencari" style="width: 30%; margin: 0 auto; margin-bottom: 15px; margin-top: -20px;">
            <h1><b>Artikel Terkait</b></h1>
            <div class="cards">
                <div class="card" id="MenyalakanApiDenganMenggunakanBaterai">
                    <img src="img/menyalakan baterai.png" alt="">
                    <h1>Menyalakan Api Dengan Menggunakan Baterai</h1>
                    <h3>Kimia</h3>
                    <p>Berikut artikel cara Praktek menyalakan api dengan baterai, serta kamu bisa lihat reaksi kimia yang terjadi dan penjelasanya!</p>
                    <div class="punten"><a href="selengkapnya.php">selengkapnya >></a></div>
                </div>
                <div class="card" id="MembuatBaterai">
                    <img src="img/membuat baterai.png" alt="">
                    <h1>Membuat Baterai</h1>
                    <h3>Kimia</h3>
                    <p>Berikut artikel cara Praktek memebuat baterai, serta kamu bisa lihat reaksi kimia yang terjadi dan penjelasanya!</p>
                    <div class="punten"><a href="selengkapnya1.php">selengkapnya >></a></div>
                </div>
                <div class="card" id="MelawanGravitasidenganmenggunakanbola">
                    <img src="img/melawan gravitasi.png" alt="">
                    <h1>Melawan Gravitasi dengan menggunakan bola</h1>
                    <h3>Fisika</h3>
                    <p>Berikut artikel cara Praktek experimen melawan hukum gravitasi dengan bola, serta kamu bisa tau unsur fisika yang terjadi dan penjelasanya!!</p>
                    <div class="punten"><a href="selengkapnya2.php">selengkapnya >></a></div>
                </div>

                <script>
                    const cari_input = document.getElementById('input_cari');
                    const cards = document.querySelectorAll('.card');

                    function cari() {
                        const isiCari = cari_input.value.toLowerCase();
                        cards.forEach(function(card) {
                            const name = card.id.toLowerCase();
                            if (name.indexOf(isiCari) >= 0) {
                                card.style.display = "block";
                            } else {
                                card.style.display = "none";
                            }
                        })
                    }
                </script>
            </div>
        </div>
    </main>
    <!-- <footer>
        <div class="teks">
            <p>&copy; Isa Asma'ul Husna</p>
            <p style="font-size: 12px; margin-top: -6px">F2 - PTI - UNY - 2022</p>
        </div>
    </footer> -->
</body>        