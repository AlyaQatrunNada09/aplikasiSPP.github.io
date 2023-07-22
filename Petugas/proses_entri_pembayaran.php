<?php
include '../koneksi.php';
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST[' tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_dibayar = $_POST['jumlah_dibayar'];



$query = "INSERT INTO pembayaran VALUES('".$id_pembayaran."', '".$id_petugas."', '".$nisn."', '".$tgl_bayar."', '".$bulan_dibayar."', ".$tahun_dibayar."', ".$id_spp."', ".$jumlah_bayar."',)";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:Histori-Pembayaran.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='Entri-Pembayaran.php'>Kembali Ke Form</a>";
    }
?>