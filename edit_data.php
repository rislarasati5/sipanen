<?php
// zahira/edit_data.php
include '../koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data yang mau diedit
$result = mysqli_query($koneksi, "SELECT * FROM data_produksi WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

// Proses update data
if (isset($_POST['update'])) {
    $nama_tanaman = $_POST['nama_tanaman'];
    $jenis_tanaman = $_POST['jenis_tanaman'];
    $luas_lahan = $_POST['luas_lahan'];
    $hasil_panen = $_POST['hasil_panen'];
    $tanggal_panen = $_POST['tanggal_panen'];

    $query = "UPDATE data_produksi 
              SET nama_tanaman='$nama_tanaman', 
                  jenis_tanaman='$jenis_tanaman',
                  luas_lahan='$luas_lahan',
                  hasil_panen='$hasil_panen',
                  tanggal_panen='$tanggal_panen'
              WHERE id='$id'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='data_produksi.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Produksi</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f6f6f6; padding: 20px; }
        h2 { color: #1565c0; }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        input, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #1565c0;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
    <h2>Edit Data Produksi Tanaman Pangan</h2>

    <form method="POST">
        <label>Nama Tanaman:</label>
        <input type="text" name="nama_tanaman" value="<?= $data['nama_tanaman']; ?>" required>

        <label>Jenis Tanaman:</label>
        <input type="text" name="jenis_tanaman" value="<?= $data['jenis_tanaman']; ?>" required>

        <label>Luas Lahan (ha):</label>
        <input type="number" step="0.01" name="luas_lahan" value="<?= $data['luas_lahan']; ?>" required>

        <label>Hasil Panen (ton):</label>
        <input type="number" step="0.01" name="hasil_panen" value="<?= $data['hasil_panen']; ?>" required>

        <label>Tanggal Panen:</label>
        <input type="date" name="tanggal_panen" value="<?= $data['tanggal_panen']; ?>" required>

        <button type="submit" name="update">Perbarui Data</button>
    </form>
</body>
</html>
