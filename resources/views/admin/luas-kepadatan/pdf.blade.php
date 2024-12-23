<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas dan Kepadatan Penduduk Se Kecamatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: left;
            font-size: 16px;
        }
        .footer {
                font-size: 10px;
                margin-top: 20px;
                text-align: center;
                color: #555;
                font-style: italic;
                margin-bottom: 10px;

            }
    </style>
</head>
<body>

    <h1>D. LUAS DAN KEPADATAN PENDUDUK SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>JUMLAH</th>
                <th>LUAS WILAYAH (KM²)</th>
                <th>KEPADATAN WILAYAH (KM²)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ $w->jumlah ? number_format($w->jumlah, 2, ',', '.') : '-' }}</td>
                <td>{{ $w->luas ? number_format($w->luas, 2, ',', '.') : '-' }}</td>
                <td>{{ $w->kepadatan ? number_format($w->kepadatan, 2, ',', '.') : '-' }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('jumlah'), 2, ',', '.') }}</td>
                <td>{{ number_format($data->sum('luas'), 2, ',', '.') }}</td>
                <td>{{ number_format($data->sum('kepadatan'), 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
