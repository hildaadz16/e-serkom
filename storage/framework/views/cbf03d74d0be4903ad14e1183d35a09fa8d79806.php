<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Rahwana - About Us</title>
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
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            background-color: #fff; /* Warna latar belakang putih */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Bayangan */
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
        .about-section {
            margin-bottom: 30px;
        }
        .about-section h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }
        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        body {
            background: linear-gradient(to bottom, #00ff00, #0000ff, #00ff00); /* Gradien warna dari hijau ke biru, kemudian kembali ke hijau */
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
        <a href="/daftar_harga">Daftar Harga</a>
        <a href="/booking/create">Pesan Kamar</a>
        <a href="/booking">Riwayat</a>
        
    </nav>
    <div class="container">
        <div class="about-section">
            <h2>About Us</h2>
            <p>Selamat Datang di Hotel Rahwana, Pengalaman Terbaik Bintang Lima</p>
            <p>Di Hotel Rahwana, kami bangga menyajikan pengalaman menginap yang tak terlupakan bagi setiap tamu kami. Terletak di pusat kota yang ramai, kami menawarkan kemewahan, kenyamanan, dan layanan terbaik yang akan membuat Anda merasa di rumah.</p>
            <p>Dengan desain interior yang elegan dan modern, setiap sudut hotel kami dirancang untuk memberikan kenyamanan maksimal. Mulai dari kamar-kamar yang luas dan nyaman, fasilitas mewah, hingga pemandangan spektakuler dari atap hotel kami, Hotel Rahwana adalah pilihan ideal untuk wisatawan yang mencari pengalaman menginap yang tak tertandingi.</p>
            <p>Nikmati hidangan lezat dari restoran kami yang mewah, bersantai di lounge yang nyaman, atau jelajahi berbagai kegiatan rekreasi yang tersedia di sekitar hotel. Staf kami yang ramah dan profesional siap membantu Anda dengan setiap kebutuhan Anda, dari reservasi hingga rekomendasi wisata.</p>
            <p>Saat Anda memilih untuk menginap di Hotel Rahwana, Anda memilih untuk merasakan kemewahan sejati bintang lima. Mari nikmati pengalaman tak terlupakan bersama kami dan buat kenangan indah yang akan terus menginspirasi Anda.</p>
        </div>
        <div class="about-section">
            <h2>Alamat Hotel</h2>
            <p>Jl. Merdeka No. 123</p>
            <p>Kota Bahagia, Negara Sentosa</p>
            <p>Telp: (123) 456-7890</p>
            <p>Email: info@hotelrahwana.com</p>
        </div>
        <div class="about-section">
            <h2>Google Maps</h2>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.011631931366!2d109.2490926!3d-7.4352631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e0!3m2!1sen!2sid!4v1644302193834!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Hotel Mandala. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH D:\E-Serkom\booking_hotel_alip\booking_hotel\resources\views/hotel/about.blade.php ENDPATH**/ ?>