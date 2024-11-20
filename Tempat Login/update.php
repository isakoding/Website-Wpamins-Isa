<?php
session_start();
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "UPDATE ideas SET nama='$nama', judul='$judul', deskripsi='$deskripsi' WHERE id='$id'");

header("location:tambah_aksi_full.php");

?>