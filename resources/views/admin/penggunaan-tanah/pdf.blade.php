<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penggunaan Tanah</title>
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

    <h1>L. LUAS TANAH MENURUT PENGGUNAAN SE KECAMATAN</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Tanah Sawah</th>
                <th>Tanah Kering</th>
                <th>Tanah Basah</th>
                <th>Tanah Perkebunan</th>
                <th>Tanah Fasilitas Umum</th>
                <th>Tanah Hutan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $w)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $w->kecamatan }}</td>
                <td>{{ $w->tanah_sawah ? number_format($w->tanah_sawah, 2, ',', '.'). 'ha' : '-' }}</td>
                <td>{{ $w->tanah_kering ? number_format($w->tanah_kering, 2, ',', '.') .'ha': '-' }}</td>
                <td>{{ $w->tanah_basah ? number_format($w->tanah_basah, 2, ',', '.') .'ha': '-' }}</td>
                <td>{{ $w->tanah_perkebunan ? number_format($w->tanah_perkebunan, 2, ',', '.') .'ha': '-' }}</td>
                <td>{{ $w->tanah_fasilitas_umum ? number_format($w->tanah_fasilitas, 2, ',', '.') .'ha': '-' }}</td>
                <td>{{ $w->tanah_hutan ? number_format($w->tanah_hutan, 2, ',', '.') .'ha': '-' }}</td>


            </tr>
            @endforeach
            <tr>
                <td colspan="2" style="text-align: center; font-weight: bold;">JUMLAH</td>
                <td>{{ number_format($data->sum('tanah_sawah'), 2, ',', '.'). 'ha' }}</td>
                <td>{{ number_format($data->sum('tanah_kering'), 2, ',', '.') . 'ha'}}</td>
                <td>{{ number_format($data->sum('tanah_basah'), 2, ',', '.') . 'ha'}}</td>
                <td>{{ number_format($data->sum('tanah_perkebunan'), 2, ',', '.') . 'ha'}}</td>
                <td>{{ number_format($data->sum('tanah_fasilitas'), 2, ',', '.') . 'ha'}}</td>
                <td>{{ number_format($data->sum('tanah_hutan'), 2, ',', '.') . 'ha'}}</td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
        <p>Laporan ini disusun oleh Pemerintah Kabupaten Kubu Raya</p>
    </div>

</body>
</html>
