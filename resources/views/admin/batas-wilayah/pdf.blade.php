<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batas Wilayah Se Kecamatan</title>
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

    <h1>B. BATAS WILAYAH SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Utara</th>
                <th>Timur</th>
                <th>Selatan</th>
                <th>Barat</th>
                <th>Tahapan Penegasan Batas Wilayah Sekecamatan</th>
                <th>Keterangan</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ $w->utara }}</td>
                <td>{{ $w->timur }}</td>
                <td>{{ $w->selatan }}</td>
                <td>{{ $w->barat }}</td>
                <td>{{ $w->batas }}</td>
                <td>{{ $w->keterangan }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('utara'), 2, ',', '.') }}</td>
                <td>{{ number_format($data->sum('timur'), 2, ',', '.') }}</td>
                <td>{{ number_format($data->sum('selatan'), 2, ',', '.') }}</td>
                <td>{{ number_format($data->sum('barat'), 2, ',', '.') }}</td>
                <td>-</td>
                <td>-</td>

            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
