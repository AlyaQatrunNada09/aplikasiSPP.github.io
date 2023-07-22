<?php
include '../koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nama_kelas = $_POST['nama_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO siswa VALUES('".$nisn."', '".$nis."', '".$nama."', '".$nama_kelas."', '".$alamat."', '".$no_telp."', '".$nominal."')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:CRUD-Siswa.php");
    }else{
        echo "Maaf, Terjadi Kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_tambah_siswa.php'>Kembali Ke Form</a>";
    }
?>
