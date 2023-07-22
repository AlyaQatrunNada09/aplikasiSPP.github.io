<?php
include '../koneksi.php';
$id_pembayaran = $_GET['id_pembayaran'];
mysqli_query($koneksi,"DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'") OR die(mysql_error());

header("location:Entri_Pembayaran.php?pesan=hapus");
?>