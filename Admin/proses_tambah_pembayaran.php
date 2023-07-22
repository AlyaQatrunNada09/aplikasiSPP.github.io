<?php
include '../koneksi.php';
$id_pembayaran = $_POST['id_pembayaran'];
$nama_petugas = $_POST['nama_petugas'];
$nama = $_POST['nama'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$nominal = $_POST['nominal'];
$jumlah_bayar = $_POST['jumlah_bayar'];



$query = "INSERT INTO pembayaran VALUES('".$id_pembayaran."', '".$nama_petugas."', '".$nama."', '".$tgl_bayar."', '".$bulan_dibayar."', '".$tahun_dibayar."', '".$nominal."', '".$jumlah_bayar."')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:Entri_Pembayaran.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='Entri_Pembayaran.php'>Kembali Ke Form</a>";
    }
?>