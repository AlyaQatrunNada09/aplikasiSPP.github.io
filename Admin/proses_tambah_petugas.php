<?php
include '../koneksi.php';
$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];


$query = "INSERT INTO petugas VALUES('".$id_petugas."', '".$username."', '".$password."', '".$nama_petugas."', '".$level."')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:CRUD-petugas.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_tambah_petugas.php'>Kembali Ke Form</a>";
    }
?>
