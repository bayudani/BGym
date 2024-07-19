<?php
$koneksi = mysqli_connect("localhost","root","","BroGym");

// check connection

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}else{
    echo "Koneksi database sukses";
}
?>