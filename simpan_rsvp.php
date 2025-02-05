<?php
include 'db_config.php'; // Panggil koneksi database

// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $conn->real_escape_string($_POST["nama"]);
    $jumlah = intval($_POST["jumlah"]);
    $status = $conn->real_escape_string($_POST["status"]);

    // Query insert
    $sql = "INSERT INTO kehadiran (nama, jumlah, status) VALUES ('$nama', $jumlah, '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Konfirmasi berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
