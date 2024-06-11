<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - Daftar Harga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f5f5; /* Warna latar belakang biru muda */
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #052659; /* Warna latar belakang biru */
            color: #fff; /* Warna teks putih */
        }
    </style>
</head>
<body>
    <header>
        <h1>Hotel Booking</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/produk">Jenis Kamar</a>
        <a href="/about">Tentang Kami</a>
        <a href="/booking/create">Pesan Kamar</a>
        <a href="/booking">Riwayat</a>
        
    </nav>
    <div class="container">
        <h2>Daftar Harga Kamar</h2>
        <table>
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Harga per Malam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Standard</td>
                    <td>Rp. 100.000</td>
                </tr>
                <tr>
                    <td>Deluxe</td>
                    <td>Rp. 200.000</td>
                </tr>
                <tr>
                    <td>Family</td>
                    <td>Rp. 300.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\example-app\resources\views/hotel/daftar_harga.blade.php ENDPATH**/ ?>