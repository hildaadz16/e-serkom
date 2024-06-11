<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/booking-list.css')); ?>" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4 text-center text-bold">Booking List</h2>

    <a href="/booking/create" class="btn btn-primary mb-4">+ Tambah Pesanan</a>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Identity Number</th>
                <th>Room Type</th>
                <th>Booking Date</th>
                <th>Duration of Stay</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1 ?>
            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($counter++); ?></td>
                <td><?php echo e($b->name); ?></td>
                <td><?php echo e($b->jenis_kelamin); ?></td>
                <td><?php echo e($b->nomor_identitas); ?></td>
                <td><?php echo e($b->tipe_kamar); ?></td>
                <td><?php echo e($b->tgl_pesan); ?></td>
                <td><?php echo e($b->durasi_menginap); ?></td>
                <td><?php echo e($b->total_harga); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Booking-Hotel\example-app\resources\views/hotel/booking.blade.php ENDPATH**/ ?>