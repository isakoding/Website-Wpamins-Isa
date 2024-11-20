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
        <h1 class="ukur"><b>Membuat Baterai</b></h1>
        <img class="takon" src="img/membuat baterai.png" alt="Gambar membuat baterai">
        <hr/>
        <h1>Mulai Experimen 1</h1>
        <p>Kita mulai Experimen yang pertama membuat baterai Asam timbal (Lead Acid Battery)</p>
        <p>di temukan pada tahun 1859 oleh fisikawan asal franscis Gaston Plante yang merupakan</p>
        <p>jenis baterai pertama yang dapat di pakai ulang atau di isi ulang berkali-kali.</p>
        <img class="rata" src="img/baterai asam timbal.png" alt="Gambar baterai asam timbal">
        <br />Baterai ini telah di adropsi sebagai keperluan kita sehari-hari dan pasti kalian sudah
        <p>sering lihat, karena sistem ini yang sering di gunakan pada aki, seperti aki motor</p>
        <p>atau aki mobil, itu menggunakan sistem ini.</p>

        <ul>
            <li class="bahan">Asam sulfat</li> 
            <div class="pnh">
                <img class="bahan2" src="img/Asam sulfat.png"> 
                <img class="panah" src="img/right-arrow.png">
                <img class="cairan" src="img/cairan .png">
            </div>
            <li class="bahan">Timbal</li>
            <div class="pnh">
                <img class="bahan2" src="img/Timbal.png"> 
                <img class="panah" src="img/right-arrow.png">
                <img class="cairan" src="img/elektroda.png">
            </div>
        </ul>
        <h2>Langsung Praktekan</h2>
        <ul class="bahan3"><b class="bahan3">Bahan-Bahan</b></ul>
        <li class="bahan3">Asam sulfat</li> 
        <li class="bahan3">Batang Timbal</li> 
        <p>untuk Asam Sulfatnya pakai air aki atau air zuur merah untuk istilahnya yang memiliki</p>
        <p>kandungan Asam Sulfat sebesar 30%. Pastikan Anda memakai sarung tangan, masker, dan kacamata buat</p>
        <p>jaga-jaga karena cukup berbahaya. kemudian masukan Batang Timbalnya ke gelas.</p>
        <br /><p>Inilah yang dimasud dengan sistem Leard Acid Battery atau Baterai Asam timba. kemudian cek Voltasenya</p>
        <p>setelah itu di case dulu Baterainya kita pakai teganggan 50 volt kecil saja</p>
        <img class="rata" src="img/cek voltase.png" alt="cek voltasenya">
        <img class="rata" src="img/case baterainya.png" alt="cek voltasenya">
        <br /><p>Ketika sistem baterai ini di aliri listrik ini akan terjadi reaksi dimana elektron akan berpindah</p>
        <p>dari kutub positif ke kutub negatif. dengan serangkaian reaksi kimia, dan kutub positifnya nanti akan</p>
        <p>berubah menjadi Pb 02 (Timbal Oksida) dan di sinilah nanti energinya itu tersimpan.</p> 
        <img class="rata" src="img/perpindahan kutub.png" alt="Gambar perpindahan kutub">
        <br /><p>Setelah kita case agak lama kita cek voltasenya maka akan berubah, itu artinya baterai itu menggunakan</p>
        <p>sistem ini sudah bekerja.</p><img class="rata" src="img/di tes baterai.png" alt="Gambar di tes baterai">
        <p>Kemudian kalian uji coba entah menggunakan kipas angin atau apapun, (maka akan berhasil). baterai kita yang</p>
        <p>barusan di case itu, energinya tersimpan dalam baterai dan energinyapun bisa kita pakai untuk memutar kipas atau apapun itu.</p>
        <img class="rata" src="img/uji baterai.png" alt="Gambar uji baterai"></br><br/>

        <br><h1>Mulai Experimen ke 2</h1> <br />
        <b>Membuat baterai mangan</b>
    <hr/>
        <ul class="bahan4"><b>Bahan-Bahan</b></ul>
        <li class="bahan4">Seng/Zink</li> 
        <li class="bahan4">Mangan</li> 
        <li class="bahan4">Arang/Karbon</li> 
        <p>Baterai-Baterai sekali pakai yang kita temui setiap hari-hari itu kebanyakan menggunakan jenis baterai</p>
        <p>Mangan, kayak baterai ABC, Alkaline dll. Itu sistemnya pakai mangan baterai.</p>
        <img class="rata" src="img/baterai mangan.png" alt="Gambar baterai mangan"> <hr/>
        <b>Langsung Praktek</b>
        <ul>
            <li class="bahan">Lempengan Zink/Seng</li> 
            <div class="pnh">
                <img class="bahan2" src="img/seng.png"> 
                
            </div>
            <li class="bahan">Mangan</li>
            <div class="pnh">
                <img class="bahan2" src="img/mangan.png"> 
            </div>
            <li class="bahan">Karbon</li>
            <div class="pnh">
                <img class="bahan2" src="img/karbon.png"> 
            </div>
        </ul><hr/>
        <p>Tekuk seng nya menggunakan isolasi untuk wadahnya.</p>
        <img class="rata" src="img/tekuk seng.png" alt="Gambar tekuk seng"> 
        <p>Kemudian masukan manganya kedalam wadah yang dibuat tadi, masukan karbonya dan selesai.</p>
        <img class="rata" src="img/mangan di masukan ke wadah.png" alt="Gambar mangan di masukan ke wadah"> 
        <p>Uji coba teganganya, jika baterai sudah memiliki potensial tegangan misal dapat 1,39V ,</p>
        <img class="rata" src="img/di tes baterai.png" alt="Gambar baterai mangan"> 
        <p>Kemudian uji coba baterai mangan tadi pakai kipas atau yang lainnya</p>
        <img class="rata" src="img/uji baterai mangan.png" alt="Gambar baterai mangan"> 
        <br><h1></h1> <br />
        
    
        <br>Mekanisme kerja yang ada di baterai mangan ini agak berbeda seperti yang kita buat</br>
        <p>pertama tadi. atau Lead Acid Battery, kalau Lead Acid battery itu dia memanfaatkan  </p>
        <p>alat transfer elektron yang memanfaatkan lubang timbal dan cairan Asam Sulfat, dan </p>
        <p>itu bisa di pakai berkali-kali, ketika habis bisa di cash lagi, Sementara sistem baterai</p>
        <p>yang kita buat sekarang itu hanya bisa sekali pakai, karena ketika elektronya sudah berpindah</p>
        <p>dari kutub negatif ke kutub positif itu sudah tidak bisa di balik lagi reaksinya</p>
    
    </div>
</main>

