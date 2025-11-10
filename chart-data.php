<?php
// chart-data.php
include '../koneksi.php';
header('Content-Type: application/json');

// Ambil total hasil panen per jenis tanaman
$query = mysqli_query($koneksi, "
    SELECT nama_tanaman, SUM(hasil_panen) AS total_panen
    FROM produksi
    GROUP BY nama_tanaman
");

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data);
?>
