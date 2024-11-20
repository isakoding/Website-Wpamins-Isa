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
    <title>Contact Form</title>
    <link rel="stylesheet" href="style_kontak.css">
</head>

<body>
    <header>
        <img src="img/Logo.png" alt="">
        <h1>WPAMINS</h1>
        <ul>
            <li class="tekan"><a href='dasboard.php'><img class="tanda" src="img/dashboard.png">dasboard</li>
            <li class="tekan"><a href='artikel.php'><img class="tanda" src="img/research.png">artikel</a></li>
            <li class="tekan active"><a href='kontak.php'><img class="tanda" src="img/kontak.png">kontak</a></li>
            <li class="tekan"><a href='tambah_aksi_full.php'><img class="tanda" src="img/ide.png">ide</a></li>
            <li class="log-out"><a href='index.php'><img class="tanda" src="img/logout.png">logout</a></li>
        </ul>
    </header>

</body>
<div class="container">

    <div class="card-container">
        <div class="left">
            <div class="left-container">
                <h2>Tentang Kami</h2>
                <p>WPAMINS adalah Website yang mempelajari ilmu Sains Seperti Fisika dan Kimia.</p>
                <br>
                <p>Bantu Kami dengan memberi Pesan melalui Kontak ini, Buat Perkembangan Website kami kedepanya</p>
            </div>
        </div>
        <div class="right">
            <div class="right-container">
            <form>
    <h2 class="lg-view">Hubungi Kami</h2>
    <h2 class="sm-view">Hubungi Kami</h2>
    <input type="text" placeholder="Nama" id="nama">
    <input type="email" placeholder="Alamat Email" id="email">
    <input type="text" placeholder="Instansi" autocomplete="off" id="instansi">
    <input type="tel" placeholder="Telepon" autocomplete="off" id="telepon">
    <textarea rows="10" placeholder="Pesan" id="pesan"></textarea>
    <button id="kirim">Kirim</button>
</form>

<script>
    document.getElementById("kirim").addEventListener("click", function(event) {
        event.preventDefault(); // Mencegah form dari mengirimkan permintaan
        var nama = encodeURIComponent(document.getElementById("nama").value);
        var instansi = encodeURIComponent(document.getElementById("instansi").value);
        var pesan = encodeURIComponent(document.getElementById("pesan").value);
        var telepon = encodeURIComponent(document.getElementById("telepon").value);
        var url = "https://wa.me/6281343263644?text=Halo%20saya%20ingin%20memberi%20saran%20untuk%20web%20ini%20";
        url += "%0ANama%3A%20" + nama;
        url += "%0AInstansi%3A%20" + instansi;
        url += "%0APesan%3A%20" + pesan;
        url += "%0ATelepon%3A%20" + telepon;
        window.open(url, '_blank'); // Membuka link WhatsApp di tab baru
    });
</script>
            </div>
        </div>
    </div>

</div>

</body>

</html>