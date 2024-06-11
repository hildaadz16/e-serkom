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
    <style>

                /* create-booking.css */
        .card {
            background-color: #f8f9fa; /* Warna latar belakang abu-abu muda */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Bayangan */
        }

        .form-group label {
            color: #343a40; /* Warna teks abu-abu tua */
        }

        .btn-info {
            background-color: #007bff; /* Warna latar belakang biru */
            border-color: #007bff; /* Warna border biru */
        }

        .btn-info:hover {
            background-color: #0056b3; /* Warna latar belakang biru tua saat hover */
            border-color: #0056b3; /* Warna border biru tua saat hover */
        }

        .btn-primary {
            background-color: #007bff; /* Warna latar belakang biru */
            border-color: #007bff; /* Warna border biru */
        }

        .btn-secondary {
            background-color: #6c757d; /* Warna latar belakang abu-abu gelap */
            border-color: #6c757d; /* Warna border abu-abu gelap */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna latar belakang biru tua saat hover */
            border-color: #0056b3; /* Warna border biru tua saat hover */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Warna latar belakang abu-abu gelap saat hover */
            border-color: #545b62; /* Warna border abu-abu gelap saat hover */
        }

        .text-success {
            color: #28a745; /* Warna teks hijau */
        }

    </style>

</head>
<body>
    <div class="container">
        <div class="card mt-4 p-4">
            <h2 class="mb-4 text-center text-bold">Create Booking</h2>
    
            <form method="POST" action="/booking/store" onsubmit="return validateForm()">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Gender:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                        <option value="" selected disabled>Pilih jenis kelamin</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="nomor_identitas">Identity Number:</label>
                    <input type="text" id="nomor_identitas" name="nomor_identitas" class="form-control" maxlength="16" required>
                </div>
    
                <div class="form-group">
                    <label for="tipe_kamar">Room Type:</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="form-control" required>
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
                    <input type="date" id="tgl_pesan" name="tgl_pesan" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="durasi_menginap">Duration of Stay (Hari):</label>
                    <input type="number" id="durasi_menginap" name="durasi_menginap" class="form-control" min="1" required>
                </div>
    
                <div id="total_price_group" style="display: none;"> <!-- Tampilkan hanya setelah tombol "Hitung Total Bayar" ditekan -->
                    <div class="form-group">
                        <label for="total_harga">Total Price:</label>
                        <input type="text" id="total_harga" name="total_harga" class="form-control" readonly>
                    </div>
                    <input type="hidden" id="diskon" name="diskon" value="0"> <!-- Input tersembunyi untuk menangkap nilai diskon -->
                    <div id="discount_message" class="text-success"></div>
                </div>
    
                <button type="button" id="hitung_button" class="btn btn-info mr-2" onclick="updateTotalPrice()">Hitung Total Bayar</button> <!-- Tombol Hitung Total Bayar -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-secondary ml-2">Cancel</a> <!-- Tombol Cancel -->
            </form>
        </div>
    </div>
    <script>
        // Event listener untuk memperbarui total harga saat ada perubahan pada tipe kamar atau durasi menginap
        document.getElementById("tipe_kamar").addEventListener("change", checkTotalPriceVisibility);
        document.getElementById("durasi_menginap").addEventListener("input", checkTotalPriceVisibility);
    
        // Fungsi untuk menampilkan atau menyembunyikan total harga berdasarkan tombol "Hitung Total Bayar"
        function checkTotalPriceVisibility() {
            var roomType = document.getElementById("tipe_kamar").value;
            var duration = parseInt(document.getElementById("durasi_menginap").value);
            
            if (roomType !== "" && !isNaN(duration) && duration > 0) {
                document.getElementById("total_price_group").style.display = "block";
            } else {
                document.getElementById("total_price_group").style.display = "none";
            }
        }
    
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
            var diskon = 0; // Inisialisasi nilai diskon
            if (duration >= 3) {
                diskon = 0.1; // Set nilai diskon
                totalPrice -= totalPrice * diskon; // Kurangi total harga dengan nilai diskon
                document.getElementById("discount_message").innerText = "Anda mendapatkan diskon 10%";
            } else {
                document.getElementById("discount_message").innerText = "";
            }

            // Tambahkan biaya breakfast jika dipilih
            if (document.getElementById("breakfast").value === "Ya") {
                totalPrice += 80000;
            }
    
            // Tampilkan total harga
            document.getElementById("total_harga").value = formatRupiah(totalPrice);
            // Set nilai diskon pada input tersembunyi
            document.getElementById("diskon").value = diskon * 100; // Ubah diskon menjadi persen
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

        // Validasi input nomor identitas
        function validateForm() {
            var nomorIdentitas = document.getElementById("nomor_identitas").value;
            if (nomorIdentitas.length !== 16 || isNaN(nomorIdentitas)) {
                alert("Isian salah. Data harus terdiri dari 16 digit angka.");
                return false; // Prevent form submission
            }
            return true;
        }
    </script>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\example-app\resources\views/hotel/create.blade.php ENDPATH**/ ?>