<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kegiatan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .center {
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Laporan Kegiatan</h1>
    <h2>Provinsi : Kalimantan Barat</h2>
    <h2>Kabupaten : Kubu Raya</h2>
    <h2>Kecamatan : {{ $data[0]->kecamatan }}</h2>

    @php
    $bulanNames = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
    $bulan = $bulanNames[$data[0]->bulan] ?? 'Unknown';
@endphp

<h2>Bulan : {{ $bulan }} {{ $data[0]->tahun }}</h2>
    <table>
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Penyelenggaraan Unsur Pelaksanaan Kegiatan</th>
                <th rowspan="2">Kegiatan</th>
                <th colspan="2">Nilai</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>Bobot</th>
                <th>Capaian Maksimal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
            <tr>
                <td class="center">{{ $index + 1 }}</td>
                <td>
                    @if ($item->penyelenggara)
                        {{ $item->penyelenggara->nama_penyelenggara }}
                    @else
                        N/A
                    @endif
                </td>

                <td>
                    <ol>
                        @foreach ($item->kegiatan as $kegiatan)
                        <li>{{ $kegiatan ->nama_kegiatan }}</li>
                        @endforeach
                    </ol>
                </td>
                <td class="center">{{ $item->bobot }}</td>
                <td class="center">{{ $item->capai }}</td>
                <td class="center">{{ $item->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="bold center">Rerata</td>
                <td class="center bold">{{ $item->bobot }}</td>
                <td class="center bold">{{ $item->capai }}</td>
                <td class="center bold">{{ $item->jumlah }}</td>
            </tr>
            <tr>
                <td colspan="5" class="bold">Nilai Rata-rata Urusan Penyelenggaraan x 25%</td>
                <td class="center bold">{{ $item->jumlah }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
