<?php
// monitoring.php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Data Produksi</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="grafik.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h2 {
            text-align: center;
            color: #2d6a4f;
        }
        .chart-container {
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
    <h2>Monitoring Grafik Produksi Tanaman Pangan POLINELA</h2>
    <div class="chart-container">
        <canvas id="grafikProduksi"></canvas>
    </div>

    <script>
        // Ambil data dari chart-data.php
        fetch('chart-data.php')
            .then(response => response.json())
            .then(data => tampilkanGrafik(data))
            .catch(error => console.error('Gagal memuat data:', error));
    </script>
</body>
</html>
