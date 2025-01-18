<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kecamatan Sungai Raya</title>
    <link rel="stylesheet" href="{{ asset('css/kecamatan/kecamatan.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo of Kabupaten Kubu Raya" />
            <div class="logo-text">
                <div class="title">BAGIAN TATA PEMERINTAHAN</div>
                <div class="subtitle">KABUPATEN KUBU RAYA</div>
            </div>
        </div>
        <div class="nav">
            <a href="{{ route('home') }}">Beranda</a>
            <div class="dropdown">
                <a href="#">Profil <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <div class="sub-dropdown">
                        <a href="#">Daerah <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="{{ route('geografi') }}">geografi</a>
                            <a href="{{ route('ekonomi') }}">Ekonomi</a>
                            <a href="{{ route('wilayah') }}">Wilayah administratif</a>
                        </div>
                    </div>
                    <div class="sub-dropdown">
                        <a href="#">Pemerintahan <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="{{ route('sejarah') }}">Sejarah</a>
                            <a href="{{ route('visimisi') }}">Visi dan Misi</a>
                            <a href="{{ route('bupati') }}">Bupati</a>
                            <a href="{{ route('wakilbupati') }}">Wakil bupati</a>
                            <a href="{{ route('lambang') }}">Makna Lambang</a>
                        </div>
                    </div>
                    <div class="sub-dropdown">
                        <a href="#">Profil Kecamatan <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="{{ route('sungairaya') }}">Sungai Raya</a>
                            <a href="{{ route('sungaikakap') }}">Sungai Kakap</a>
                            <a href="{{ route('sungaiambawang') }}">Sungai Ambawang</a>
                            <a href="{{ route('kualamandor') }}">Kuala Mandor B</a>
                            <a href="{{ route('rasaujaya') }}">Rasau Jaya</a>
                            <a href="{{ route('kubu') }}">Kubu</a>
                            <a href="{{ route('telukpekedai') }}">Teluk Pekedai</a>
                            <a href="{{ route('batuampar') }}">Batuampar</a>
                            <a href="{{ route('terentang') }}">Terentang</a>
                        </div>
                    </div>
                    <div class="sub-dropdown">
                        <a href="#">Tata Pemerintahan <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="{{ route('strukturorganisasi') }}">Struktur organisasi</a>
                            <a href="{{ route('sambutan') }}">Kata sambutan</a>
                            <a href="{{ route('tugaspokok') }}">Tugas pokok dan fungsi</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('berita') }}">Berita</a>
            <div class="dropdown">
                <a href="#">Informasi <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="{{ route('pengumuman') }}">Pengumuman</a>
                    <a href="{{ route('dokumenperancangan') }}">Dokumen perancangan</a>
                    <a href="{{ route('laporankeuangan') }}">Laporan keuangan</a>
                </div>
            </div>
            <a href="{{ route('contact') }}">Hubungi Kami</a>
        </div>
    </div>


    <div class="container">
        <div class="header-suiraya">
            <h1>Kecamatan Sungai Raya</h1>
            <p>Kabupaten Kubu Raya - Kalimantan Barat</p>
            <p>Memiliki 22 Desa</p>
        </div>

        <div class="map">
            <img src="{{ asset('img/kecamatan/sungairaya.png') }}" alt="Peta Kecamatan Sungai Raya">
        </div>


        <div class="description">
            @foreach ($foto_judul as $f )
                {!! $f->judul !!}
            @endforeach
          </div>

        <div class="section-title">Profile Kecamatan Sungai Raya</div>

        <div class="profile">
            <div class="biodata">
                @foreach ($biodata_camat as $bc )


                <img src="{{ asset('storage/' . $bc->foto) }}" alt="Foto Camat">
                <h3>Biodata Camat</h3>
                <p>Nama: {{$bc->nama}}</p>
                <p>Alamat: {{$bc->alamat}}</p>
                <p>Tempat, Tanggal Lahir: {{$bc->tempat}}, {{ date('d-m-Y', strtotime($bc->tanggal_lahir)) }}</p>

                <p>Pendidikan Terakhir: {{$bc->pendidikan}}</p>
                @endforeach
            </div>

            <div class="report">
                <h3>Laporan Bulanan</h3>
                <canvas id="myPieChart" style="width:250px; height:125px; margin: 0 auto; display: block;"></canvas>




            </div>
        </div>
    </div>

    <div class="container-wrapper" id="content">
        <div class="item" data-modal="modal1">Luas Wilayah (KM²)</div>
        <div class="item" data-modal="modal2">Batas Wilayah Administrasi</div>
        <div class="item" data-modal="modal3">Jumlah Penduduk</div>
        <div class="item" data-modal="modal4">Luas dan Kepadatan Penduduk</div>
        <div class="item" data-modal="modal5">Penduduk Menurut Kelompok Umur</div>
        <div class="item" data-modal="modal6">Jumlah Penduduk Menurut Mata Pencarian</div>
        <div class="item" data-modal="modal7">Jumlah Penduduk Menurut Agama</div>
        <div class="item" data-modal="modal8">Jumlah Penduduk Menurut Etnis/Suku</div>
        <div class="item" data-modal="modal9">Pertumbuhan Penduduk</div>
        <div class="item" data-modal="modal10">Jumlah Penduduk Menurut Pendidikan</div>
        <div class="item" data-modal="modal11">Luas Lahan Garapan Jenis Tanaman</div>
        <div class="item" data-modal="modal12">Luas Tanah Menurut Penggunaan</div>
        <div class="item" data-modal="modal13">Populasi Ternak Kecil</div>
        <div class="item" data-modal="modal14">Populasi Ternak Besar</div>
        <div class="item" data-modal="modal15">Populasi Ternak Unggas</div>
        <div class="item" data-modal="modal16">Usaha Peternakan</div>
        <div class="item" data-modal="modal17">Jenis Alat Tanggap</div>
        <div class="item" data-modal="modal18">Budidaya Perikanan Darat</div>
        <div class="item" data-modal="modal19">Jenis Sarana Tangkap</div>
        <div class="item" data-modal="modal20">Luas Tanah Perkebunan</div>
        <div class="item" data-modal="modal21">Hasil Produksi Perkebunan</div>
        <div class="item" data-modal="modal22">Luas Hutan Menurut Penggunaan</div>
        <div class="item" data-modal="modal23">Luas Hutan Menurut Status</div>
        <div class="item" data-modal="modal24">Tambang Galian</div>
        <div class="item" data-modal="modal25">Usaha Tambang Galian</div>
        <div class="item" data-modal="modal26">Pengelolaan Pangan</div>
        <div class="item" data-modal="modal27">Jumlah Industri Perabotan</div>
        <div class="item" data-modal="modal28">Aktivitas Perekonomian</div>
        <div class="item" data-modal="modal29">Jumlah Objek Wisata</div>
        <div class="item" data-modal="modal30">Jumlah Sanggar Budaya</div>
        <div class="item" data-modal="modal31">Jumlah Fasilitas Kesehatan</div>
        <div class="item" data-modal="modal32">Jumlah Tenaga Kesehatan</div>
        <div class="item" data-modal="modal33">Air Bersih</div>
        <div class="item" data-modal="modal34">Jumlah Sarana Ibadah Menurut Jenisnya</div>
        <div class="item" data-modal="modal35">Panjang Jalan Menurut Jenis Pemukiman(KM)</div>
        <div class="item" data-modal="modal36">Jumlah Fasilitas Olahraga dan Balai Pertemuan</div>
        <div class="item" data-modal="modal37">Ekonomi Angkatan Kerja</div>
        <div class="item" data-modal="modal38">Jumlah Angkatan Kerja Menurut Pendidikan</div>
        <div class="item" data-modal="modal39">Jumlah Pelanggan Listrik</div>
        <div class="item" data-modal="modal40">Jumlah Penduduk Miskin</div>
        <div class="item" data-modal="modal41">Jumlah Fasilitas Pendidikan</div>
        <div class="item" data-modal="modal42">Jumlah Anak Usia Sekolah</div>
        <div class="item" data-modal="modal43">Jumlah Anak Sekolah Menurut Tingkat dan Status</div>
        <div class="item" data-modal="modal44">Jumlah Tenaga Guru Menurut Tingkat dan Status</div>
        <div class="item" data-modal="modal45">Jumlah Tenaga Guru Menurut Tingkat Pendidikan</div>
        <div class="item" data-modal="modal46">Jumlah Pemilik Kendaraan</div>
        <div class="item" data-modal="modal47">Jarak dan Waktu Tempuh Dari Desa Ke Kota</div>
        <div class="item" data-modal="modal48">Sarana Telekomunikasi(Tower)</div>
        <div class="item" data-modal="modal49">Prasarana Pemerintah Desa</div>
        <div class="item" data-modal="modal50">Pemerintahan Kecamatan</div>
        <div class="item" data-modal="modal51">Tingkat Pendidikan Jumlah Aparat Kecamatan</div>
        <div class="item" data-modal="modal52">Menurut Pangkat dan Golongan</div>
        <div class="item" data-modal="modal53">Jumlah Staff Kecamatan</div>
        <div class="item" data-modal="modal54">Prasarana Pemerintahan Kecamatan</div>
        <div class="item" data-modal="modal55">Pelaksanaan Profil Kecamatan</div>
        <div class="item" data-modal="modal56">Pelaksanaan Profil Kecamatan</div>
    </div>

    @include('modals.allmodal')

    <div class="header-footer">
        <div class="left-header">
            <img alt="Kabupaten Kubu Raya logo" src="{{ asset('img/logo.png') }}" width="150" height="150" />
            <h1>TATA PEMERINTAHAN</h1>
            <p>Sekretariat Daerah</p>
            <p>KABUPATEN KUBU RAYA</p>
        </div>

        <div class="gmap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.23399357538!2d109.38484568715819!3d-0.12713349999999327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d503e6dd19233%3A0xc0f1be5d8b37f3b2!2sKantor%20Bupati%20Kubu%20Raya!5e0!3m2!1sid!2sid!4v1734956575601!5m2!1sid!2sid"
                width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <p>2024 © All Rights Reserved, TATA PEMERINTAHAN KAB KUBU RAYA</p>
        </div>
        <div class="footer-right">
            <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Tambahkan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- data untuk modal -->
    <script>
        const items = document.querySelectorAll('.item');
        const modals = document.querySelectorAll('.modal');
        const content = document.getElementById('content');

        items.forEach(item => {
            item.addEventListener('click', () => {
                const modalId = item.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('active');
                    content.classList.add('blur');
                }
            });
        });

        document.querySelectorAll('.close-modal').forEach(button => {
            button.addEventListener('click', () => {
                modals.forEach(modal => modal.classList.remove('active'));
                content.classList.remove('blur');
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data dari controller (dikirim melalui Blade)
        const penyelenggaraData = @json($penyelenggaraData);
        const jumlahData = @json($jumlahData);

        // Hitung total data untuk persentase
        const totalJumlah = jumlahData.reduce((sum, value) => sum + value, 0);

        // Buat chart
        var ctx = document.getElementById('myPieChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: penyelenggaraData, // Nama penyelenggara
                datasets: [{
                    label: 'Jumlah Data',
                    data: jumlahData, // Jumlah data
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: 'Laporan Harian Camat Kecamatan {{ $kecamatan }} Bulan {{ now()->format("F Y") }}'
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let percentage = Math.round((context.raw / totalJumlah) * 100); // Hitung dan bulatkan persentase
                                return `${context.label}: ${percentage}%`; // Tampilkan persentase
                            }
                        }
                    }
                }
            }
        });
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>
