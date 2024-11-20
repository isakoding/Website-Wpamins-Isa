<!DOCTYPE html>
<html lang="en">

<head>
    <title>Membuat CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .judul {
            text-align: center;
            margin-bottom: 20px;
        }

        .judul h2 {
            color: #333;
        }

        a {
            display: block;
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
        }

        h3 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        table input[type="text"] {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table input[type="submit"] {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="judul">
        <h2>Edit Data</h2>
    </div>
    <br>
    <a href="full.php">Lihat semua data</a>
    <br>
    <h3>Edit data</h3>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * from ideas WHERE id='$id'") or die(mysqli_error($koneksi));
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>