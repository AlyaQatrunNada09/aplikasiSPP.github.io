<?php
include '../koneksi.php';
$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

mysqli_query($koneksi,"UPDATE petugas SET id_petugas='$id_petugas', username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas' ");

header("location:CRUD-petugas.php?pesan=update");
?>