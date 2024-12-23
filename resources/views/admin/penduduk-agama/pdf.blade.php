<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penduduk Agama</title>
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

    <h1>G. JUMLAH PENDUDUK MENURUT AGAMA / ALIRAN KEPERCAYAAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Islam</th>
                <th>Protestan</th>
                <th>Katolik</th>
                <th>Hindu</th>
                <th>Budha</th>
                <th>Konghucu</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ number_format($w->islam, 0, ',', '.') }}</td>
                <td>{{ number_format($w->kristen, 0, ',', '.') }}</td>
                <td>{{ number_format($w->katolik, 0, ',', '.') }}</td>
                <td>{{ number_format($w->hindu, 0, ',', '.') }}</td>
                <td>{{ number_format($w->budha, 0, ',', '.') }}</td>
                <td>{{ number_format($w->konghucu, 0, ',', '.') }}</td>

            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('islam'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('kristen'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('katolik'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('hindu'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('budha'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('konghucu'), 0, ',', '.') }}</td>

            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
