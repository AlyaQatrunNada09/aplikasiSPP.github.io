<?php
include '../koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nama_kelas = $_POST['nama_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$nominal = $_POST['nominal'];


mysqli_query($koneksi,"UPDATE siswa SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$nama_kelas', 
alamat='$alamat', no_telp='$no_telp', id_spp='$nominal' WHERE nisn='$nisn' ");

header("location:CRUD-Siswa.php?pesan=update");
?>
