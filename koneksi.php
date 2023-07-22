<?php
$koneksi = mysqli_connect("localhost","root","","spp_alyaqatrunnada_xirpl3");
    if(mysqli_connect_error()){
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>