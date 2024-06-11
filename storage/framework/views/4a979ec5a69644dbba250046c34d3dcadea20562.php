<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Warna latar belakang biru muda */
        }
        header {
            background-color: #021024; /* Warna latar belakang biru */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #052659; /* Warna latar belakang biru tua */
            padding: 20px 0;
            text-align: center;
        }
        nav a {
            margin: 10px;
            text-decoration: none;
            color: #fff; /* Warna teks putih */
            padding: 10px 20px; /* Padding yang lebih besar */
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
            background-color: #5483b3; /* Warna latar belakang biru lebih gelap */
            border: 2px solid #5483b3; /* Warna border */
        }
        /* Efek hover */
        nav a:hover {
            background-color: #7DA0CA; /* Warna latar belakang biru lebih terang saat hover */
            border-color: #000; /* Warna border hitam saat hover */
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            text-align: center;
            background-color: #fff; /* Warna latar belakang putih */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Bayangan */
        }
        footer {
            background-color: #021024; /* Warna latar belakang abu-abu gelap */
            color: #fff; /* Warna teks putih */
            padding: 10px 0;
            text-align: center;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hotel Booking</h1>
    </header>
    <nav>
        <a href="/produk">Jenis Kamar</a>
        <a href="/daftar_harga">Daftar Harga</a>
        <a href="/about">Tentang Kami</a>
        <a href="/booking/create">Pesan Kamar</a>
        <a href="/booking">Riwayat</a>

    </nav>
    <div class="container">
        <h2>Selamat Datang di Hotel Booking</h2>
        <p>Tempat terbaik untuk memesan kamar hotel dengan harga terjangkau!</p>
        <img src="/image/hotel.jpg" alt="Hotel" width="100%">
    </div>
    <footer>
        <p>&copy; 2024 Hotel Booking. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>