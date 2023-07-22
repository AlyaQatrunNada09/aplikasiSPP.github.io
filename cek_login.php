<?php
session_start();
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$login = mysqli_query($koneksi,"select*from siswa where nisn='$nisn'and nama='$nama'");

$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
     if($data['level']=="siswa"){
        $_SESSION['nisn']= $nisn;
        $_SESSION['nama']= $nama;
        header("location:Siswa/Histori_Pembayaran.php");
}else{
    header("location:Login.php?pesan=gagal");
}
}
?>