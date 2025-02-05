<?php
$host = "localhost"; // Sesuaikan dengan host MySQL kamu
$user = "root"; // Username MySQL (default: root)
$pass = ""; // Password MySQL (kosong jika default)
$dbname = "rsvp"; // Nama database

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
