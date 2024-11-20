<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM ideas WHERE id='$id'") or
    die(mysqli_error($koneksi));
header("location:tambah_aksi_full.php");
