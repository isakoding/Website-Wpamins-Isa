<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login-page.php');
}
$userid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPAMINS</title>
    <link rel="stylesheet" href="style_tambah_aksi_full.css">
</head>

<body>
    <header>
        <img src="img/Logo.png" alt="">
        <h1>WPAMINS</h1>
        <ul>
            <li class="tekan"><a href='dasboard.php'><img class="tanda" src="img/dashboard.png">dashboard</li>
            <li class="tekan"><a href='artikel.php'><img class="tanda" src="img/research.png">artikel</li>
            <li class="tekan"><a href='kontak.php'><img class="tanda" src="img/kontak.png">kontak</li>
            <li class="tekan active"><a href='tambah_aksi_full.php'><img class="tanda" src="img/ide.png">ide</li>
            <li class="log-out"><a href='logout.php'><img class="tanda" src="img/logout.png">logout</a></li>
        </ul>
    </header>
    <?php
    include 'koneksi.php';
    if (isset($_POST['SIMPAN'])) {
        $nama = $_POST['nama'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $id_user = $userid;

        $hasil = mysqli_query($koneksi, "INSERT INTO ideas(nama,judul,deskripsi,id_user) VALUES('$nama','$judul','$deskripsi','$id_user')");

        if ($hasil) {
            header('location:tambah_aksi_full.php');
            exit;
        } else {
            echo 'Gagal menambahkan data';
        }
    }
    ?>

    <body>
        <div class="pala">

        </div>
        <div class="judul">
            <h3 class="">Ayo Berikan Ide Sains mu di sini</h3>
            <h5>Menambah data ide disini ya</h5>
        </div>
        <form method="post" action="tambah_aksi_full.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : <input type="text" required name="nama"></td>
                </tr>
                <tr>
                    <td>Judul Karya</td>
                    <td> : <input type="text" required name="judul"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td> : <textarea required name="deskripsi"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <h5>Menampilkan data ide</h5>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Menu</th>
            </tr>
            <?php

            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from ideas WHERE id_user='$userid'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['judul']; ?></td>
                    <td><?= $d['deskripsi']; ?></td>
                    <td class="menu">
                        <a href="lihat.php?id=<?= $d['id']; ?>">
                            <img src="img/lihat.png" alt="Lihat">
                            Lihat
                        </a>
                        <a href="edit.php?id=<?= $d['id']; ?>">
                            <img src="img/edit.png" alt="Edit">
                            Edit
                        </a>
                        <a href="#" onclick="confirmDelete('<?= $d['judul']; ?>', '<?= $d['id']; ?>')" class="delete">
                            <img src="img/hapus.png" alt="Hapus">
                            Hapus
                        </a>
                    </td>

                    <script>
                        function confirmDelete(judul, id) {
                            if (confirm("Apakah Anda yakin ingin menghapus data karya dengan judul karya " + judul + "?")) {
                                window.location.href = "hapus.php?id=" + id;
                            }
                        }
                    </script>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>

</html>