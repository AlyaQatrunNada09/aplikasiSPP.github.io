<?php
include '../koneksi.php';
$id_petugas = $_GET['id_petugas'];
mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas='$id_petugas'") OR die(mysql_error());

header("location:CRUD-petugas.php?pesan=hapus");
?>