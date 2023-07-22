<?php
include '../koneksi.php';
$id_pembayaran = $_POST['id_pembayaran'];
$nama_petugas = $_POST['nama_petugas'];
$nama = $_POST['nama'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$nominal = $_POST['nominal'];
$jumlah_dibayar = $_POST['jumlah_dibayar'];

mysqli_query($koneksi,"UPDATE pembayaran SET id_pembayaran='$id_pembayaran', id_petugas='$nama_petugas', nisn='$nama', tgl_bayar='$tgl_bayar', bulan_dibayar='$bulan_dibayar', tahun_dibayar='$tahun_dibayar', id_spp='$nominal', jumlah_dibayar='$jumlah_dibayar' WHERE id_pembayaran='$id_pembayaran' ");

header("location:Entri_Pembayaran.php?pesan=update");
?>