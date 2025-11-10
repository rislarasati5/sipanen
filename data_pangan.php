<?php
// zahira/data_pangan.php
include '../koneksi.php';

if (isset($_POST['tambah'])) {
    $nama_tanaman = $_POST['nama_tanaman'];
    $jenis_tanaman = $_POST['jenis_tanaman'];
    $luas_lahan = $_POST['luas_lahan'];
    $hasil_panen = $_POST['hasil_panen'];
    $tanggal_panen = $_POST['tanggal_panen'];

    mysqli_query($koneksi, "INSERT INTO data_pangan (nama_tanaman, jenis_tanaman, luas_lahan, hasil_panen, tanggal_panen)
                            VALUES ('$nama_tanaman','$jenis_tanaman','$luas_lahan','$hasil_panen','$tanggal_panen')");
    header("Location: data_pangan.php");
}

$data = mysqli_query($koneksi, "SELECT * FROM data_pangan");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Hasil Produksi Tanaman Pangan</title>
</head>
<body>
  <h2>Data Hasil Produksi Tanaman Pangan Politeknik Negeri Lampung</h2>

  <form method="POST">
    <input type="text" name="nama_tanaman" placeholder="Nama Tanaman" required>
    <input type="text" name="jenis_tanaman" placeholder="Jenis Tanaman" required>
    <input type="number" name="luas_lahan" placeholder="Luas Lahan (ha)" required>
    <input type="number" name="hasil_panen" placeholder="Hasil Panen (ton)" required>
    <input type="date" name="tanggal_panen" required>
    <button type="submit" name="tambah">Tambah Data</button>
  </form>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nama Tanaman</th>
      <th>Jenis Tanaman</th>
      <th>Luas Lahan (ha)</th>
      <th>Hasil Panen (ton)</th>
      <th>Tanggal Panen</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['nama_tanaman']; ?></td>
      <td><?= $row['jenis_tanaman']; ?></td>
      <td><?= $row['luas_lahan']; ?></td>
      <td><?= $row['hasil_panen']; ?></td>
      <td><?= $row['tanggal_panen']; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
