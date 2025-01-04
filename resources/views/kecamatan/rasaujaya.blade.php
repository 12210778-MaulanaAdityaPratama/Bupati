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
                            <a href="#">Visi dan Misi</a>
                            <a href="#">Bupati</a>
                            <a href="#">Wakil bupati</a>
                            <a href="#">Makna Lambang</a>
                        </div>
                    </div>
                    <div class="sub-dropdown">
                        <a href="#">Profil Kecamatan <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="#">Sungai Raya</a>
                            <a href="#">Sungai Kakap</a>
                            <a href="#">Sungai Ambawang</a>
                            <a href="#">Kuala Mandor B</a>
                            <a href="#">Rasau Jaya</a>
                            <a href="#">Kubu</a>
                            <a href="#">Teluk Pekedai</a>
                            <a href="#">Batuampar</a>
                            <a href="#">Terentang</a>
                        </div>
                    </div>
                    <div class="sub-dropdown">
                        <a href="#">Tata Pemerintahan <i class="fas fa-caret-right"></i></a>
                        <div class="sub-dropdown-content">
                            <a href="#">Struktur organisasi</a>
                            <a href="#">Kata sambutan</a>
                            <a href="#">Tugas pokok dan fungsi</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#">Berita</a>
            <div class="dropdown">
                <a href="#">Informasi <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#">Pengumuman</a>
                    <a href="#">Dokumen perancangan</a>
                    <a href="#">Laporan keuangan</a>
                </div>
            </div>
            <a href="#">Hubungi Kami</a>
        </div>
    </div>

    <div class="container">
        <div class="header-suiraya">
            <h1>Kecamatan Rasau Jaya</h1>
            <p>Kabupaten Kubu Raya - Kalimantan Barat</p>
            <p>Memiliki 22 Desa</p>
        </div>

        <div class="map">
            <img src="{{ asset('img/kecamatan/rasaujaya.png') }}" alt="Peta Kecamatan Sungai Raya">
        </div>

        <div class="description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis ducimus minus magni obcaecati at pariatur
            explicabo ad laborum distinctio consequatur architecto accusamus iste eligendi commodi, eius cumque? Quidem
            velit perspiciatis officiis omnis qui. Vero fuga, dolorum illo accusamus atque ullam similique. Deserunt
            cumque consectetur quae nulla iusto exercitationem nobis voluptate assumenda laborum sequi possimus saepe
            blanditiis minus dolor ad excepturi, ipsum ullam? In quam impedit error molestiae mollitia quaerat. Dolores
            ex accusamus exercitationem corporis aperiam? Assumenda quos commodi, aspernatur incidunt consequatur odit
            provident nisi voluptas, id possimus tenetur non quam sapiente libero quasi molestiae optio reiciendis
            magnam impedit eum architecto, praesentium voluptatem mollitia? Quidem, corporis iste ipsam cumque itaque
            tempore quaerat quod maxime cupiditate. Ab assumenda quos beatae iste aliquam expedita autem eaque
            reprehenderit quisquam. Incidunt tempore praesentium possimus expedita quos, rem, nisi vitae laudantium
            consequuntur quaerat iusto harum. Porro sequi obcaecati incidunt ullam ea laboriosam aperiam et praesentium
            corporis!
        </div>

        <div class="section-title">Profile Kecamatan Rasau Jaya</div>

        <div class="profile">
            <div class="biodata">
                <img src="{{ asset('img/kecamatan/camatsungairaya.png') }}" alt="Foto Camat">
                <h3>Biodata Camat</h3>
                <p>Nama: Drs. M. Ikhsan Sukendra, M.Si</p>
                <p>Alamat: -</p>
                <p>Tempat, Tanggal Lahir: -</p>
                <p>Pendidikan Terakhir: -</p>
            </div>

            <div class="report">
                <h3>Laporan Bulanan</h3>
                <div class="dropdown">
                    <select id="monthSelector" onchange="updateChart()">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="chart-container">
                    <canvas id="monthlyReportChart"></canvas>
                </div>
                <div class="pdf-box">
                    <button onclick="openPDF()">Lihat Laporan PDF</button>
                </div>
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
        // Data asli
        const chartData = {
            1: [74.77, 25.23], // Data bulan Januari
            2: [65.34, 34.66], // Data bulan Februari
            3: [70.21, 29.79], // Data bulan Maret
            4: [67.89, 32.11], // Data bulan April
            5: [60.12, 39.88], // Data bulan Mei
            6: [64.67, 35.33], // Data bulan Juni
            7: [68.95, 31.05], // Data bulan Juli
            8: [72.41, 27.59], // Data bulan Agustus
            9: [75.19, 24.81], // Data bulan September
            10: [70.55, 29.45], // Data bulan Oktober
            11: [66.78, 33.22], // Data bulan November
            12: [71.23, 28.77] // Data bulan Desember
        };

        // Fungsi untuk mengonversi data ke dalam persentase
        const convertToPercentage = (data) => {
            const result = {};
            Object.entries(data).forEach(([month, values]) => {
                const total = values.reduce((sum, value) => sum + value, 0);
                result[month] = values.map(value => ((value / total) * 100).toFixed(2));
            });
            return result;
        };

        // Data dalam bentuk persentase
        const percentageData = convertToPercentage(chartData);

        // Konfigurasi Chart.js
        const ctx = document.getElementById('monthlyReportChart').getContext('2d');
        const monthlyReportChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Penyelenggaraan Pemerintahan Kecamatan Umum',
                    'Penyelenggaraan Penyusunan Perencanaan Pembangunan'
                ],
                datasets: [{
                    label: 'Laporan Bulanan',
                    data: percentageData[1], // Default bulan Januari
                    backgroundColor: ['#4caf50', '#ff9800']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label || '';
                                const value = tooltipItem.raw; // Data mentah persentase
                                return `${label} ${value}%`; // Menampilkan label dengan persentase
                            }
                        }
                    }
                }
            }
        });

        // Fungsi untuk memperbarui data chart berdasarkan bulan yang dipilih
        const updateChart = () => {
            const selectedMonth = document.getElementById('monthSelector').value;
            monthlyReportChart.data.datasets[0].data = percentageData[selectedMonth];
            monthlyReportChart.update();
        };

        // Fungsi untuk membuka PDF laporan bulanan
        const openPDF = () => {
            const selectedMonth = document.getElementById('monthSelector').value;
            window.open(`laporan-bulanan-${selectedMonth}.pdf`, '_blank'); // Ganti nama file sesuai pola
        };
    </script>


</body>

</html>
