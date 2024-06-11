<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/booking-list.css') }}" rel="stylesheet">
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

    @foreach($booking as $b)
    <div class="booking-item">
        <p><strong>ID</strong> : {{ $b->id }}</p>
        <p><strong>Nama</strong> : {{ $b->name }}</p>
        <p><strong>Nomor Identitas</strong> : {{ $b->nomor_identitas }}</p>
        <p><strong>Jenis Kelamin</strong> : {{ $b->jenis_kelamin }}</p>
        <p><strong>Tipe Kamar</strong> : {{ $b->tipe_kamar }}</p>
        <p><strong>Tanggal Pesan</strong> : {{ date('d/m/Y', strtotime($b->tgl_pesan)) }}</p> <!-- Format tanggal -->
        <p><strong>Durasi Menginap</strong> : {{ $b->durasi_menginap }} Hari</p>
        <p><strong>Diskon</strong> : {{ $b->diskon }}%</p> <!-- Tampilkan diskon sebagai persentase -->
        <p><strong>Total Harga</strong> : {{ $b->total_harga }}</p>
    </div>
    @endforeach
</div>

</body>
</html>
