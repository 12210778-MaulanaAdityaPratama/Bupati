<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penduduk Umur</title>
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

    <h1>E. LUAS DAN KEPADATAN PENDUDUK SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>0-4 TAHUN</th>
                <th>5-9 TAHUN</th>
                <th>10-14 TAHUN</th>
                <th>15-19 TAHUN</th>
                <th>20-24 TAHUN</th>
                <th>25-29 TAHUN</th>
                <th>30-34 TAHUN</th>
                <th>35-39 TAHUN</th>
                <th>40-59 TAHUN</th>
                <th>60 TAHUN KE ATAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ $w->thn_0_4thn ? number_format($w->thn_0_4thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_5_9thn ? number_format($w->thn_5_9thn, 0, ',', '.') : '-' }} </td>
                <td>{{ $w->thn_10_14thn ? number_format($w->thn_10_14thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_15_19thn ? number_format($w->thn_15_19thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_20_24thn ? number_format($w->thn_20_24thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_25_29thn ? number_format($w->thn_25_29thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_30_34thn ? number_format($w->thn_30_34thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_35_39thn ? number_format($w->thn_35_39thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_40_59thn ? number_format($w->thn_40_59thn, 0, ',', '.') : '-' }}</td>
                <td>{{ $w->thn_60thn ? number_format($w->thn_60thn, 0, ',', '.') : '-' }}</td>

            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('thn_0_4thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_5_9thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_10_14thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_15_19thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_20_24thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_25_29thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_30_34thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_35_39thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_40_59thn'), 0, ',', '.') }}</td>
                <td>{{ number_format($data->sum('thn_60thn'), 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
