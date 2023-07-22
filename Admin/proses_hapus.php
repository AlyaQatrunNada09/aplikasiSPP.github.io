<?php
include '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas='$id_kelas'") OR die(mysql_error());

header("location:CRUD-Kelas.php?pesan=hapus");
?>