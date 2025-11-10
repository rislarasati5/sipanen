<?php
// config.php — koneksi ke database
function db_connect() {
    $host = '127.0.0.1';
    $user = 'root';     // sesuaikan dengan Laragon
    $pass = '';         // kosong jika pakai Laragon default
    $db   = 'sipanen_db'; // pastikan database ini sudah ada

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}
?>
