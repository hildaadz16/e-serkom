<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/create-booking.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card mt-4 p-4">
            <h2 class="mb-4 text-center text-bold">Create Booking</h2>
    
            <form method="POST" action="/booking/store">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Gender:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option value="" selected disabled>Pilih jenis kelamin</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="nomor_identitas">Identity Number:</label>
                    <input type="text" id="nomor_identitas" name="nomor_identitas" class="form-control" maxlength="16">
                </div>
    
                <div class="form-group">
                    <label for="tipe_kamar">Room Type:</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="form-control">
                        <option value="" selected disabled>Pilih Tipe Kamar</option>
                        <option value="Standard">Standard</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Executive">Executive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="breakfast">Pilihan Breakfast (Ya/Tidak):</label>
                    <select id="breakfast" name="breakfast" class="form-control">
                        <option value="Ya">Ya</option>
                        <option value="Tidak" selected>Tidak</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="tgl_pesan">Booking Date:</label>
                    <input type="date" id="tgl_pesan" name="tgl_pesan" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="durasi_menginap">Duration of Stay (Hari):</label>
                    <input type="text" id="durasi_menginap" name="durasi_menginap" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="total_harga">Total Price:</label>
                    <input type="text" id="total_harga" name="total_harga" class="form-control" readonly>
                </div>

                <div id="discount_message" class="text-success"></div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        // Event listener untuk memperbarui total harga saat ada perubahan pada tipe kamar atau durasi menginap
        document.getElementById("tipe_kamar").addEventListener("change", updateTotalPrice);
        document.getElementById("durasi_menginap").addEventListener("input", updateTotalPrice);
    
        // Fungsi untuk menghitung total harga
        function updateTotalPrice() {
            var roomType = document.getElementById("tipe_kamar").value;
            var duration = parseInt(document.getElementById("durasi_menginap").value);
            var price;
    
            // Set harga berdasarkan tipe kamar
            if (roomType === "Standard") {
                price = 100000;
            } else if (roomType === "Deluxe") {
                price = 200000;
            } else if (roomType === "Executive") {
                price = 300000;
            }
    
            // Hitung total harga
            var totalPrice = price * duration;
    
            // Berikan diskon 10% jika durasi menginap lebih dari 3 hari
            if (duration > 3) {
                var discount = totalPrice * 0.1;
                totalPrice -= discount;
                document.getElementById("discount_message").innerText = "Anda mendapatkan diskon 10%";
            } else {
                document.getElementById("discount_message").innerText = "";
            }
    
            // Tampilkan total harga dalam format rupiah
            document.getElementById("total_harga").value = formatRupiah(totalPrice);
        }
    
        // Fungsi untuk memformat angka menjadi format rupiah
        function formatRupiah(angka) {
            var numberString = angka.toString();
            var sisa = numberString.length % 3;
            var rupiah = numberString.substr(0, sisa);
            var ribuan = numberString.substr(sisa).match(/\d{3}/g);
    
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
    
            return 'Rp ' + rupiah;
        }
    </script>
    

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Booking-Hotel\example-app\resources\views/hotel/create.blade.php ENDPATH**/ ?>