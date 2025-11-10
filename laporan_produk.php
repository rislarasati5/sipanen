<?php
// yoga/laporan_produksi.php
include '../koneksi.php';
$data = mysqli_query($koneksi, "
    SELECT p.nama_tanaman, p.hasil_panen, p.tanggal_panen, t.nama AS nama_petani
    FROM produksi p
    JOIN petani t ON p.id_petani = t.id
");
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Laporan Produksi</title></head>
<body>
<h2>Laporan Hasil Produksi Tanaman Pangan POLINELA</h2>
<table border="1">
<tr><th>No</th><th>Nama Petani</th><th>Tanaman</th><th>Hasil Panen (kg)</th><th>Tanggal</th></tr>
<?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $row['nama_petani']; ?></td>
  <td><?= $row['nama_tanaman']; ?></td>
  <td><?= $row['hasil_panen']; ?></td>
  <td><?= $row['tanggal_panen']; ?></td>
</tr>
<?php } ?>
</table>
<br>
<button onclick="window.print()">Cetak Laporan</button>
</body>
</html>