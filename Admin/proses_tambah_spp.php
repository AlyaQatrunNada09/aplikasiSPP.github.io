<?php
include '../koneksi.php';
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];


$query = "INSERT INTO spp VALUES('".$id_spp."', '".$tahun."', '".$nominal."')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:CRUD-SPP.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_tambah_spp.php'>Kembali Ke Form</a>";
    }
?>
