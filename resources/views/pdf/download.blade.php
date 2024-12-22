<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Camat</title>
    <style>
        /* Mengatur ukuran kertas A4 */
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 10px;
            font-size: 18px;
            text-align: left;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            vertical-align: middle;
            font-size: 14px;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        td {
            background-color: #fafafa;
        }

        .table-title {
            font-weight: bold;
            text-align: center;
            font-size: 16px;
            background-color: #eaeaea;
            padding: 8px;
        }

        ol {
            margin: 0;
            padding-left: 20px;
        }

        .wrap-text {
            white-space: normal;
            word-wrap: break-word;
        }

        .total {
            font-weight: bold;
            background-color: #eaeaea;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #555;
        }

        /* Penyesuaian untuk cetakan */
        @media print {
            body {
                font-size: 12px;
            }

            table {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            th,
            td {
                font-size: 12px;
                padding: 8px;
            }

            .footer {
                font-size: 10px;
            }
        }

        /* Responsif untuk diagram pie chart */
        /* canvas {
            max-width: 100%;
            height: auto;
        } */
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h1>Laporan Kegiatan Camat</h1>

    @php
    $bulanNames = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember',
    ];
    $bulanName = $bulanNames[$bulan] ?? 'Tidak Diketahui';
    @endphp

    <div>
        <h2>Provinsi: Kalimantan Barat</h2>
        <h2>Kabupaten: Kubu Raya</h2>
        <h2>Kecamatan: {{ $kecamatan }}</h2>
        <h2>Bulan: {{ $bulanName }} {{ $tahun }}</h2>
    </div>

    @php
    $penyelenggaraData = [];
    $jumlahData = [];

    foreach ($data as $penyelenggara => $laporans) {
        $totalJumlah = $laporans->sum('jumlah');
        $penyelenggaraData[] = $penyelenggara;
        $jumlahData[] = $totalJumlah;
    }
    @endphp

    @foreach ($data as $penyelenggara => $laporans)
    <!-- Tabel untuk setiap penyelenggara -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Penyelenggaraan Unsur Pelaksanaan Kegiatan</th>
                <th>Kegiatan</th>
                <th>Bobot</th>
                <th>Capai</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $index => $laporan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $laporan->penyelenggara->nama_penyelenggara }}</td>
                <td>
                    <ol>
                        @foreach ($laporan->kegiatan as $kegiatan)
                        <li>{{ $kegiatan->nama_kegiatan }}</li>
                        @endforeach
                    </ol>
                </td>
                <td>{{ $laporan->bobot }}</td>
                <td>{{ $laporan->capai }}</td>
                <td>{{ $laporan->jumlah }}</td>
            </tr>
            @endforeach
            <!-- Baris untuk Rata-rata -->
            <tr>
                <td colspan="3" class="total">RERATA</td>
                <td>{{ number_format($laporans->sum('bobot'), 2) }}</td>
                <td>{{ number_format($laporans->sum('capai'), 2) }}</td>
                <td>{{ number_format($laporans->sum('jumlah'), 2) }}</td>
            </tr>
            <tr>
                <td colspan="5" class="total">NILAI RATA-RATA {{$penyelenggara}} x 25%</td>
                <td>{{ number_format($laporans->sum('jumlah') * 0.25, 2) }}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    <table>
        <tr>
            <td colspan="5" class="total">Nilai Rerata Keseluruhan</td>
            <td>{{ number_format($data->flatten()->sum('jumlah') * 0.25, 2) }}</td>
        </tr>
        <tr>
            <td colspan="5" class="total">Nilai Rata-Rata Keseluruhan x 75%</td>
            <td>{{ number_format($data->flatten()->sum('jumlah') * 0.75, 2) }}</td>
        </tr>
    </table>

    <!-- Canvas untuk Diagram Lingkaran -->
    <canvas id="myPieChart" style="width:250px; height:125px; margin: 0 auto; display: block;"></canvas>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {

                labels: @json($penyelenggaraData),
                datasets: [{
                    data: @json($jumlahData),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
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
                plugins: {
                    title: {
                        display: true,
                        text: 'Laporan Hairan Camat {{$kecamatan}} Bulan {{$bulanName}} {{$tahun}}',
                    },
                    legend: {
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed !== null) {
                                    label += new Intl.NumberFormat('en-US', { style: 'percent' }).format(context.raw / {{ array_sum($jumlahData) }});
                                }
                                return label;
                            }
                        }
                    }
                }
            }
        });
        // Tangkap gambar sebagai Base64 dan kirimkan ke server
        document.getElementById('downloadPDF').addEventListener('click', function() { var pieChartImageBase64 = myPieChart.toBase64Image(); document.getElementById('chartImageInput').value = pieChartImageBase64; document.getElementById('pdfForm').submit(); });
    </script>

</body>
</html>
