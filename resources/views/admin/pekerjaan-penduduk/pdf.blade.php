<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pekerjaan Penduduk</title>
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

    <h1>F. JUMLAH PENDUDUK MENURUT MATA PENCARIAN SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>PNS</th>
                <th>TNI</th>
                <th>POLRI</th>
                <th>PETANI</th>
                <th>NELAYAN</th>
                <th>PEDAGANG</th>
                <th>BURUH</th>
                <th>LAIN-LAIN</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ number_format($w->pns, 0, ',', '.') }}</td>
                <td>{{ number_format($w->tni, 0, ',', '.') }}</td>
                <td>{{ number_format($w->polri, 0, ',', '.') }}</td>
                <td>{{ number_format($w->petani, 0, ',', '.') }}</td>
                <td>{{ number_format($w->nelayan, 0, ',', '.') }}</td>
                <td>{{ number_format($w->pedagang, 0, ',', '.') }}</td>
                <td>{{ number_format($w->buruh, 0, ',', '.') }}</td>
                <td>{{ number_format($w->lain, 0, ',', '.') }}</td>

            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('pns'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('tni'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('polri'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('petani'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('nelayan'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('pedagang'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('buruh'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('lain'), 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
