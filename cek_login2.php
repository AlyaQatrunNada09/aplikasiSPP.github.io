<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select*from petugas where username='$username'and password='$password'");

$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;
        $_SESSION['level']= "admin";
        header("location:Admin/Dashboard-Admin.php");
    }else if($data['level']=="petugas"){
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;
        $_SESSION['level']= "petugas";
        header("location:Petugas/Dashboard-petugas.php");
}else{
    header("location:loginAdmin.php?pesan=gagal");
}
}
?>