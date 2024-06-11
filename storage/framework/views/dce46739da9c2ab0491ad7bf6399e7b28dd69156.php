<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/booking-list.css')); ?>" rel="stylesheet">
    <style>
        .header {
            background-color: #021024;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin: 20px auto;
        }
        .booking-item {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .booking-item p {
            margin-bottom: 5px;
        }
        .booking-item strong {
            display: inline-block;
            width: 150px; /* Sesuaikan lebar sesuai kebutuhan */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2 class="mt-4">Booking History</h2>
    </div>

    <a href="/booking/create" class="btn btn-primary mb-4">+ Tambah Pesanan</a>
    <a href="/" class="btn btn-secondary mb-4">Kembali</a> <!-- Tombol kembali -->

    <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="booking-item">
        <p><strong>ID</strong> : <?php echo e($b->id); ?></p>
        <p><strong>Nama</strong> : <?php echo e($b->name); ?></p>
        <p><strong>Nomor Identitas</strong> : <?php echo e($b->nomor_identitas); ?></p>
        <p><strong>Jenis Kelamin</strong> : <?php echo e($b->jenis_kelamin); ?></p>
        <p><strong>Tipe Kamar</strong> : <?php echo e($b->tipe_kamar); ?></p>
        <p><strong>Tanggal Pesan</strong> : <?php echo e(date('d/m/Y', strtotime($b->tgl_pesan))); ?></p> <!-- Format tanggal -->
        <p><strong>Durasi Menginap</strong> : <?php echo e($b->durasi_menginap); ?> Hari</p>
        <p><strong>Diskon</strong> : <?php echo e($b->diskon); ?>%</p> <!-- Tampilkan diskon sebagai persentase -->
        <p><strong>Total Harga</strong> : <?php echo e($b->total_harga); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\booking_hotel\resources\views/hotel/booking.blade.php ENDPATH**/ ?>