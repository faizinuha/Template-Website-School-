<?php
$server   = "localhost"; // Lokasi server database (biasanya localhost)
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "users"; // Nama database yang digunakan

// Membuat koneksi ke database
$koneksi = mysqli_connect($server, $username, $password, $database);

// Cek koneksi
if(!$koneksi) {
    die("Koneksi gagal: ".mysqli_connect_error());
    } else {
    echo "Koneksi berhasil!";
    }
?>

