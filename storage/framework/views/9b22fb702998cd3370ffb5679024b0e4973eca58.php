<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            text-align: justify;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }
        .room {
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .room:hover {
            transform: translateY(-5px);
        }
        .room img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px; /* Tambahkan margin bawah */
        }
        .room video {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px; /* Tambahkan margin bawah */
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
        <a href="/daftar_harga">Daftar Harga</a>
        <a href="/booking/create">Pesan Kamar</a>
        <a href="/booking">Riwayat</a>
    </nav>
    <div class="container">
        <div class="room">
            <h2>Standar Room</h2>
            <img src="/image/standar.jpg" alt="Standar Room">
            <video controls>
                <source src="/image/standar_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="room">
            <h2>Deluxe Room</h2>
            <img src="/image/deluxe.jpg" alt="Deluxe Room">
            <video controls>
                <source src="/image/deluxe_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="room">
            <h2>Family Room</h2>
            <img src="/image/family.jpg" alt="Family Room">
            <video controls>
                <source src="/image/family_room.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\example-app\resources\views/hotel/produk.blade.php ENDPATH**/ ?>