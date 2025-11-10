<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_petani = $_POST['nama_petani'];
    $nama_tanaman = $_POST['nama_tanaman'];
    $jumlah_produksi = $_POST['jumlah_produksi'];
    $tanggal_panen = $_POST['tanggal_panen'];

    $query = "INSERT INTO produksi (nama_petani, nama_tanaman, jumlah_produksi, tanggal_panen)
              VALUES ('$nama_petani', '$nama_tanaman', '$jumlah_produksi', '$tanggal_panen')";
    mysqli_query($koneksi, $query);

    header("Location: data_produksi.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Tambah Data Produksi</title></head>
<body>
<h2>Form Tambah Data Produksi</h2>
<form method="POST">
  <label>Nama Petani:</label><br>
  <input type="text" name="nama_petani" required><br><br>

  <label>Nama Tanaman:</label><br>
  <input type="text" name="nama_tanaman" required><br><br>

  <label>Jumlah Produksi (kg):</label><br>
  <input type="number" name="jumlah_produksi" required><br><br>

  <label>Tanggal Panen:</label><br>
  <input type="date" name="tanggal_panen" required><br><br>

  <button type="submit" name="simpan">Simpan</button>
  <a href="data_produksi.php">Kembali</a>
</form>
</body>
</html>
