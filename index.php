<?php
// index.php
session_start();

// Jika sudah login, arahkan ke dashboard
if (isset($_SESSION['user'])) {
    header('Location: login/dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIPANEN - Sistem Informasi Produksi Tanaman Pangan</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3176/3176364.png" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4CAF50, #8BC34A);
            color: #fff;
            text-align: center;
        }
        header {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        main {
            padding: 50px 20px;
        }
        .card {
            background: #fff;
            color: #333;
            margin: 30px auto;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #4CAF50;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #388E3C;
        }
        footer {
            background: rgba(0, 0, 0, 0.2);
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIPANEN 🌾</h1>
        <p>Sistem Informasi Monitoring dan Pengolahan Data Hasil Produksi Tanaman Pangan</p>
    </header>

    <main>
        <div class="card">
            <h2>Selamat Datang di SIPANEN</h2>
            <p>Politeknik Negeri Lampung</p>
            <p>Aplikasi ini digunakan untuk memantau, mengolah, dan melaporkan hasil produksi tanaman pangan secara terintegrasi.</p>
            <a href="login/login.php" class="btn">🔑 Masuk ke Sistem</a>
        </div>
    </main>

    <footer>
        &copy; <?= date('Y'); ?> SIPANEN | Politeknik Negeri Lampung
    </footer>
</body>
</html>
