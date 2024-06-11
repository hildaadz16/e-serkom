<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/welcome.css')); ?>" rel="stylesheet">
</head>
<body class="antialiased">
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Hotel Laravel</h1>
        <p class="lead">Nikmati pengalaman menginap terbaik di hotel kami.</p>
        <hr class="my-4">
        <p>Silakan jelajahi fasilitas kami dan pesan kamar Anda sekarang!</p>
        <a class="btn btn-primary btn-lg" href="/booking" role="button">Booking Sekarang</a>
    </div>
</div>

<div id="booking-menu" class="container">
    <!-- Konten Menu Booking akan ditambahkan di sini -->
    <h2>Menu Booking</h2>
    <p>Ini adalah tempat di mana Anda bisa melakukan booking kamar.</p>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Booking-Hotel\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>