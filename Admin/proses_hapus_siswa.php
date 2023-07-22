<?php
include '../koneksi.php';
$nisn = $_GET['nisn'];
mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn='$nisn'") OR die(mysql_error());

header("location:CRUD-Siswa.php?pesan=hapus");
?>