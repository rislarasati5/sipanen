<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM produksi");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Produksi Tanaman Pangan</title>
</head>
<body>
  <h2>Data Produksi Tanaman Pangan</h2>
  <a href="form_input.php">+ Tambah Data Produksi</a><br><br>

  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nama Petani</th>
      <th>Nama Tanaman</th>
      <th>Jumlah Produksi (kg)</th>
      <th>Tanggal Panen</th>
      <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)) { ?>
      <tr>
        <td><?= $row['id_produksi']; ?></td>
        <td><?= $row['nama_petani']; ?></td>
        <td><?= $row['nama_tanaman']; ?></td>
        <td><?= $row['jumlah_produksi']; ?></td>
        <td><?= $row['tanggal_panen']; ?></td>
        <td>
          <a href="edit_data.php?id=<?= $row['id_produksi']; ?>">Edit</a> |
          <a href="hapus_data.php?id=<?= $row['id_produksi']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
