<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - About Us</title>
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
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang putih dengan transparansi */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .about-section {
            margin-bottom: 30px;
        }
        .about-section h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .about-section p {
            line-height: 1.6;
        }
    </style>
</head>
<body style="background-image: url('/image/hotel.jpg'); background-size: cover;">
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
        <div class="about-section">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et nisi tortor. Morbi auctor velit ac mauris accumsan, eu mollis magna bibendum. Mauris hendrerit ex ac sapien molestie, et ultricies metus semper. Nulla eget luctus lorem, ut placerat erat. Integer ultrices, velit id sodales tristique, risus nulla suscipit velit, id fermentum metus enim nec magna. Vivamus lobortis enim vitae sem convallis consequat. Ut et dictum enim, vel varius eros. Sed nec tortor non est tincidunt vehicula.</p>
            <p>Phasellus vel risus quis libero scelerisque gravida. Vivamus vestibulum nulla sit amet eleifend auctor. Duis sed est luctus, aliquam odio eget, convallis magna. Mauris et tempor ligula. Fusce eget nisl dui. Pellentesque non urna vitae ipsum lobortis posuere. Mauris sed dolor ut ex placerat dapibus vel ac urna.</p>
        </div>
        <div class="about-section">
            <h2>Our Mission</h2>
            <p>Nullam vestibulum mattis nibh a laoreet. Integer in lacinia leo, et fringilla diam. Aliquam sed justo tellus. Cras quis rutrum neque, non fermentum risus. Duis in consequat ex. Phasellus molestie ultrices tempor. Donec at sagittis dolor. Pellentesque ac tristique mauris, eu pharetra ex. Vivamus at semper felis.</p>
            <p>Proin nec dui ac turpis accumsan rutrum. Nulla et nisi elementum, lobortis justo at, efficitur magna. Fusce posuere odio vel congue luctus. Donec non urna malesuada, aliquam purus vitae, fringilla risus. Praesent luctus tincidunt odio, ut eleifend tortor luctus at. Nulla facilisi. Phasellus auctor urna at mauris laoreet, sit amet ultricies turpis malesuada. Sed ultricies purus ac aliquet malesuada. Aliquam nec luctus sem.</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\example-app\resources\views/hotel/about.blade.php ENDPATH**/ ?>