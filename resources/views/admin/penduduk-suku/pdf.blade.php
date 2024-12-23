<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penduduk Suku</title>
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

    <h1>I. JUMLAH PENDUDUK MENURUT ETNIS / SUKU SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Jawa</th>
                <th>Melayu</th>
                <th>Bugis</th>
                <th>Dayak</th>
                <th>Cina</th>
                <th>Sunda</th>
                <th>Batak</th>
                <th>Madura</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ number_format($w->jawa, 0, ',', '.') }}</td>
                <td>{{ number_format($w->melayu, 0, ',', '.') }}</td>
                <td>{{ number_format($w->bugis, 0, ',', '.') }}</td>
                <td>{{ number_format($w->dayak, 0, ',', '.') }}</td>
                <td>{{ number_format($w->cina, 0, ',', '.') }}</td>
                <td>{{ number_format($w->sunda, 0, ',', '.') }}</td>
                <td>{{ number_format($w->batak, 0, ',', '.') }}</td>
                <td>{{ number_format($w->madura, 0, ',', '.') }}</td>

            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('jawa'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('melayu'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('bugis'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('dayak'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('cina'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('sunda'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('batak'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('madura'), 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
