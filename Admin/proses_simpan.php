<?php
include '../koneksi.php';
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];


$query = "INSERT INTO kelas VALUES('".$id_kelas."', '".$nama_kelas."', '".$kompetensi_keahlian."')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:CRUD-Kelas.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
?>


