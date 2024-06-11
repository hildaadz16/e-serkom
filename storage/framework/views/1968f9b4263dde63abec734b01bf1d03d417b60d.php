<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pemesanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/create-booking.css')); ?>" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-4 p-4">
            <h2 class="mb-4 text-center text-bold">Pemesanan</h2>
    
            <form method="POST" action="/booking/store" onsubmit="return validateForm()">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="male" required>
                        <label class="form-check-label" for="male">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="female" required>
                        <label class="form-check-label" for="female">Perempuan</label>
                    </div>
                    
                </div>
    
                <div class="form-group">
                    <label for="nomor_identitas">Nomor Identitas:</label>
                    <input type="text" id="nomor_identitas" name="nomor_identitas" class="form-control" maxlength="16" required>
                    <div class="error-message" id="error-message-nomor-identitas"></div> <!-- Tambahkan pesan kesalahan di samping input -->
                </div>
    
                <div class="form-group">
                    <label for="tipe_kamar">Tipe Kamar:</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="form-control" onchange="updatePrice()" required>
                        <option value="" selected disabled>Pilih Tipe Kamar</option>
                        <option value="Standard">Standard</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Family">Family</option>
                    </select>
                </div>
                
                <!-- Harga Tipe Kamar -->
                <div class="form-group">
                    <label for="harga">Harga Kamar:</label>
                    <input type="text" id="harga" class="form-control" readonly>
                </div>
                
                <!-- Tanggal Pesan -->
                <div class="form-group">
                    <label for="tgl_pesan">Tanggal Pesan:</label>
                    <input type="date" id="tgl_pesan" name="tgl_pesan" class="form-control" required>
                </div>
    
                <!-- Durasi Menginap -->
                <div class="form-group">
                    <label for="durasi_menginap">Durasi Menginap (Hari):</label>
                    <input type="text" id="durasi_menginap" name="durasi_menginap" class="form-control" required pattern="[0-9]+" title="Input harus berupa angka dan lebih dari 0">
                    <span class="error-message" id="error-message-durasi"></span> <!-- Tambahkan pesan kesalahan di samping input -->
                </div>

                <!-- Breakfast -->
                <div class="form-group">
                    <label>Sarapan:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="breakfast" name="breakfast" value="Ya">
                        <label class="form-check-label" for="breakfast">
                            Ya
                        </label>
                    </div>
                </div>
    
                <div id="total_price_group" style="display: none;"> <!-- Tampilkan hanya setelah tombol "Hitung Total Bayar" ditekan -->
                    <div class="form-group">
                        <label for="total_harga">Total Harga:</label>
                        <input type="text" id="total_harga" name="total_harga" class="form-control" readonly>
                    </div>
                    <input type="hidden" id="diskon" name="diskon" value="0"> <!-- Input tersembunyi untuk menangkap nilai diskon -->
                    <div id="discount_message" class="text-success"></div>
                </div>
    
                <button type="button" id="hitung_button" class="btn btn-info mr-2" onclick="updateTotalPrice()">Hitung Total Bayar</button> <!-- Tombol Hitung Total Bayar -->
                <button type="submit" class="btn btn-primary" id="submit_button" style="display: none;">Submit</button>
                <a href="/" class="btn btn-secondary ml-2">Batal</a> <!-- Tombol Batal -->
                <div id="error-message-submit" class="text-danger" style="display: none;">Hitung Totalnya Dulu Broooo!!!!</div> <!-- Pesan kesalahan untuk tombol submit -->
            </form>
        </div>
    </div>
    <script>
        // Daftar harga untuk setiap tipe kamar
        var hargaTipeKamar = {
            "Standard": 200000,
            "Deluxe": 500000,
            "Family": 1000000
        };

        // Fungsi untuk memperbarui harga saat tipe kamar dipilih
        function updatePrice() {
            var selectedRoomType = document.getElementById("tipe_kamar").value;
            document.getElementById("harga").value = formatRupiah(hargaTipeKamar[selectedRoomType]);
        }

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
            var price = hargaTipeKamar[roomType]; // Ambil harga dari objek hargaTipeKamar

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
            if (document.getElementById("breakfast").checked) {
                totalPrice += (80000 * duration);
            }

            // Tampilkan total harga
            document.getElementById("total_harga").value = formatRupiah(totalPrice);
            // Set nilai diskon pada input tersembunyi
            document.getElementById("diskon").value = diskon * 100; // Ubah diskon menjadi persen

            // Setelah menghitung total harga, tampilkan tombol submit
            document.getElementById("submit_button").style.display = "inline-block";
            // Set flag bahwa total harga sudah dihitung
            isTotalPriceCalculated = true;
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

        // Validasi input nomor identitas dan durasi menginap
        function validateForm() {
            var nomorIdentitas = document.getElementById("nomor_identitas").value;
            var errorMessageNomorIdentitas = document.getElementById("error-message-nomor-identitas"); // Ambil elemen pesan kesalahan untuk nomor identitas
            var durasiMenginap = document.getElementById("durasi_menginap").value;
            var errorMessageDurasi = document.getElementById("error-message-durasi"); // Ambil elemen pesan kesalahan untuk durasi menginap

            if (nomorIdentitas.length !== 16 || isNaN(nomorIdentitas)) {
                errorMessageNomorIdentitas.innerText = "Data tidak valid. Data harus terdiri dari 16 digit angka."; // Set pesan kesalahan untuk nomor identitas
                return false; // Prevent form submission
            } else {
                errorMessageNomorIdentitas.innerText = ""; // Kosongkan pesan kesalahan jika valid
            }

            if (isNaN(durasiMenginap) || durasiMenginap <= 0) {
                errorMessageDurasi.innerText = "Input harus berupa angka dan lebih dari 0."; // Set pesan kesalahan untuk durasi menginap
                return false; // Prevent form submission
            } else {
                errorMessageDurasi.innerText = ""; // Kosongkan pesan kesalahan jika valid
            }

            // Jika total harga belum dihitung, tampilkan pesan kesalahan
            if (!isTotalPriceCalculated) {
                document.getElementById("error-message-submit").style.display = "block";
                return false; // Prevent form submission
            }

            return true; // Submit form jika semua validasi berhasil
        }

        // Variabel global untuk mengecek apakah total harga sudah dihitung atau belum
        var isTotalPriceCalculated = false;
    </script>
</body>
</html>
<?php /**PATH D:\E-Serkom\booking_hotel_alip\booking_hotel\resources\views/hotel/create.blade.php ENDPATH**/ ?>