<?php
// File: config/database.php

// Detail koneksi database
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "BroGym";

// Buat koneksi
$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
