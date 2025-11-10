<?php
// atila/dashboard.php
include '../koneksi.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$jmlPetani = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM petani"))['total'];
$jmlProduksi = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM produksi"))['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard SIPANEN</title>
</head>
<body>
  <h2>Dashboard SIPANEN</h2>
  <p>Selamat datang, <?= $_SESSION['user']; ?>!</p>
  <ul>
    <li>Jumlah Petani Terdaftar: <?= $jmlPetani; ?></li>
    <li>Jumlah Data Produksi: <?= $jmlProduksi; ?></li>
  </ul>
</body>
</html>