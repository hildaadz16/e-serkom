<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Rahwana - Daftar Harga</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2; /* Warna latar belakang abu-abu muda */
        }
        header {
            background-color: #4CAF50; /* Warna latar belakang hijau */
            color: #fff; /* Warna teks putih */
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #2E8B57; /* Warna latar belakang hijau tua */
            padding: 20px 0;
            text-align: center;
        }
        nav a {
            margin: 10px;
            text-decoration: none;
            color: #fff; /* Warna teks putih */
            padding: 10px 20px; /* Padding yang lebih besar */
            border-radius: 25px; /* Bentuk tombol bulat */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
            background-color: #3CB371; /* Warna latar belakang hijau muda */
            border: 2px solid #3CB371; /* Warna border */
        }
        /* Efek hover */
        nav a:hover {
            background-color: #32CD32; /* Warna latar belakang hijau lebih terang saat hover */
            border-color: #228B22; /* Warna border hijau tua saat hover */
        }
        .container {
            max-width: 1200px; /* Lebar kontainer */
            margin: auto;
            padding: 20px;
            display: flex; /* Gunakan display flex untuk menyusun elemen sejajar */
            justify-content: space-between; /* Posisikan elemen secara sejajar dengan jarak di antara */
            flex-wrap: wrap; /* Izinkan wrapping pada elemen jika tidak cukup ruang */
        }
        .room {
            width: calc(33.33% - 20px); /* Lebar tipe kamar, dikurangi jarak antar elemen */
            border: 1px solid #ccc;
            border-radius: 20px; /* Sudut border yang lebih bulat */
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            text-align: center;
            margin-bottom: 20px; /* Tambahkan margin bawah */
            background-color: #fff; /* Warna latar belakang putih */
        }
        .room:hover {
            transform: translateY(-5px);
        }
        .room img, .room video {
            width: 100%; /* Agar gambar dan video mengisi lebar div */
            height: auto;
            display: block;
            border-radius: 20px 20px 0 0; /* Agar sudut atas gambar/video terbulat */
        }
        .room-content {
            padding: 15px;
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
            background-color: #4CAF50; /* Warna latar belakang biru */
            color: #fff; /* Warna teks putih */
        }
        footer {
            background-color: #4CAF50; /* Warna latar belakang abu-abu gelap */
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
        <h1>Hotel Rahwana</h1>
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
                    <th>Fasilitas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Standard</td>
                    <td>Rp. 200.000</td>
                    <td>- Tempat tidur ukuran Queen<br>- Kamar mandi dalam<br>- AC</td>
                </tr>
                <tr>
                    <td>Deluxe</td>
                    <td>Rp. 500.000</td>
                    <td>- Tempat tidur ukuran King<br>- Kamar mandi dalam<br>- AC<br>- TV kabel</td>
                </tr>
                <tr>
                    <td>Family</td>
                    <td>Rp. 1.000.000</td>
                    <td>- Tempat tidur ukuran King dan Queen<br>- Kamar mandi dalam<br>- AC<br>- TV kabel<br>- Balkon</td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2024 Hotel Mandala. All rights reserved.</p>
    </footer>
</body>
</html>
