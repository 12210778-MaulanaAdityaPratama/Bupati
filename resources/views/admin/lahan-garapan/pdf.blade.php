<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lahan Garapan</title>
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

    <h1>K. LUAS LAHAN GARAPAN SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Padi</th>
                <th>Jagung</th>
                <th>Ubi Kayu</th>
                <th>Kacang Panjang</th>
                <th>Kangkung</th>
                <th>Cabe</th>
                <th>Jeruk Nipis</th>
                <th>Terong</th>
                <th>Mentimun</th>
                <th>Talas</th>
                <th>Tomat</th>
                <th>Kacang Tanah</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ number_format($w->padi, 1, ',', '.') }}</td>
                <td>{{ number_format($w->jagung, 1, ',', '.') }}</td>
                <td>{{ number_format($w->ubi_kayu, 1, ',', '.') }}</td>
                <td>{{ number_format($w->kacang_panjang, 1, ',', '.') }}</td>
                <td>{{ number_format($w->kangkung, 1, ',', '.') }}</td>
                <td>{{ number_format($w->cabe, 1, ',', '.') }}</td>
                <td>{{ number_format($w->jeruk_nipis, 1, ',', '.') }}</td>
                <td>{{ number_format($w->terong, 1, ',', '.') }}</td>
                <td>{{ number_format($w->mentimun, 1, ',', '.') }}</td>
                <td>{{ number_format($w->talas, 1, ',', '.') }}</td>
                <td>{{ number_format($w->tomat, 1, ',', '.') }}</td>
                <td>{{ number_format($w->kacang_tahan, 1, ',', '.') }}</td>

            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('padi'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('jagung'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('ubi_kayu'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('kacang_panjang'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('kangkung'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('cabe'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('jeruk_nipis'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('terong'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('mentimun'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('talas'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('tomat'), 1, ',', '.') }}</td>
                <td>{{ number_format($data->sum('kacang_tahan'), 1, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
