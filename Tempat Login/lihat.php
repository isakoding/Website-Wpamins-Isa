<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/>css" href="style.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .judul {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            background-color: #333;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .judul {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .btn-kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-kembali:hover {
            background-color: #555;
        }
    </style>

</head>

<body>
    <div clss="judul">
        <h1>Detail Data</h1>
    </div>

    <br />

    <br />

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * from ideas WHERE id='$id'") or die(mysqli_error($koneksi));
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['nama'] ?></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>: <?php echo $d['judul'] ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>: <?php echo $d['deskripsi'] ?></td>
            </tr>
            <tr>
                <td>ID Penulis</td>
                <td>: <?php echo $d['id_user'] ?></td>
            </tr>
            <tr>
            </tr>
        </table>
    <?php } ?>
    <br>
    <button class="btn-kembali" onclick="window.location.href='tambah_aksi_full.php'">
        <<< Kembali Lihat Semua Data</button>
</body>

</html>