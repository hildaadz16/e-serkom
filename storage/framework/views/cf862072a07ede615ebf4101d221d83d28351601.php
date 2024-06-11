<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Chart</title>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            width: 600px; /* Tentukan lebar kontainer */
            height: 400px; /* Tentukan tinggi kontainer */
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        Booking Chart by Room Type
    </div>
    <div class="container">
        <canvas id="bookingChart" width="600" height="400"></canvas> <!-- Tentukan lebar dan tinggi canvas -->
    </div>

    <a href="/" class="btn">Back to Home</a>

    <script>
        // Ambil data tipe kamar dari PHP dan simpan dalam variabel JavaScript
        var bookingData = <?php echo json_encode($bookingData); ?>;

        // Siapkan data untuk grafik pie
        var labels = Object.keys(bookingData);
        var data = Object.values(bookingData);

        // Buat grafik pie
        var ctx = document.getElementById('bookingChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Room Type',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: 'Booking by Room Type',
                    fontSize: 20,
                    fontColor: '#333'
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH F:\apa aja yang penting kuliah\booking_hotel\resources\views/hotel/chart.blade.php ENDPATH**/ ?>