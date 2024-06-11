<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Rahwana - Produk</title>
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
        <h1>Hotel Mandala</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">Tentang kami</a>
        <a href="/daftar_harga">Daftar Harga</a>
        <a href="/booking/create">Pesan Kamar</a>
        <a href="/booking">Riwayat</a>
    </nav>
    <div class="container">
        <div class="room">
            <img src="/image/standar.jpg" alt="Standar Room">
            <div class="room-content">
                <h2>Standar Room</h2>
                <p>Standar Room adalah pilihan yang cocok untuk Anda yang mencari kenyamanan sederhana dengan harga terjangkau. Ruangan dilengkapi dengan fasilitas dasar untuk memenuhi kebutuhan penginapan Anda.</p>
            </div>
            <video controls>
                <source src="/image/standar_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="room">
            <img src="/image/deluxe.jpg" alt="Deluxe Room">
            <div class="room-content">
                <h2>Deluxe Room</h2>
                <p>Deluxe Room menawarkan pengalaman menginap yang lebih mewah dengan fasilitas yang lebih lengkap. Nikmati kenyamanan tingkat atas dan pemandangan yang menakjubkan dari kamar ini.</p>
            </div>
            <video controls>
                <source src="/image/deluxe_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="room">
            <img src="/image/family.jpg" alt="Family Room">
            <div class="room-content">
                <h2>Family Room</h2>
                <p>Family Room adalah pilihan ideal untuk liburan keluarga yang menyenangkan. Dengan ruang yang luas dan fasilitas keluarga yang lengkap, Anda dapat menikmati waktu berkualitas bersama orang-orang terkasih.</p>
            </div>
            <video controls>
                <source src="/image/family_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Hotel Mandala. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH D:\E-Serkom\booking_hotel_alip\booking_hotel\resources\views/hotel/produk.blade.php ENDPATH**/ ?>