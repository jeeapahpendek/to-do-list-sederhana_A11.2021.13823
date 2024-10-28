<?php
// konfigurasi database
$host = "localhost";
$user = "root"; 
$password = ""; 
$database = "dbbengkod"; 

// membuat koneksi
$mysqli = mysqli_connect($host, $user, $password, $database);

// cek koneksi
if (!$mysqli) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>