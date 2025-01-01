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
        .hari-tanggal {
            padding: 0;
        }

        .hari-tanggal div {
            text-align: center;
        }

        .hari-tanggal .line {
            width: 100%;
            height: 1px;
            background-color: #000;
            margin: 5px 0;
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
            .hari-tanggal .line {
        width: 100%;
        height: 1px;
        display: block;
        background-color: #000; /* Garis hitam */
        margin: 20px 0;
    }
        }


    </style>
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
        <h2>Kecamatan: {{ ucwords(str_replace('_', ' ', $kecamatan)) }}</h2>
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
                <th>Hari/Tanggal</th>
                <th>Tempat Pelaksanaan Kegiatan</th>
                <th>Keterangan</th>
                <th>Kendala Yang Dihadapi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $index => $laporan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $laporan->penyelenggaraCamatDetail->nama_penyelenggara }}</td>
                <td>
                    <ol>
                        @foreach ($laporan->kegiatanCamatDetail as $kegiatan)
                        <li>{{ $kegiatan->nama_kegiatan }}</li>
                        @endforeach
                    </ol>
                </td>
                <td class="hari-tanggal">
                    <div>Hari : {{ \Carbon\Carbon::parse($laporan->tanggal)->isoFormat('dddd, D MMMM YYYY') }}</div>
                    <div class="line"></div>
                    <div>Waktu : {{ substr($laporan->waktu, 0, 5) }} WIB</div>
                </td>
                <td>{{ $laporan->tempat_pelaksanaan }}</td>
                <td>{{ $laporan->keterangan }}</td>
                <td>{{ $laporan->kendala }}</td>
            </tr>
            @endforeach
            <!-- Baris untuk Rata-rata -->


        </tbody>
    </table>
    @endforeach


    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kecamatan {{ ucwords(str_replace('_', ' ', $kecamatan)) }}</p>

    </div>


</body>
</html>
