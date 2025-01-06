<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/wakilbupati/wakilbupati.css') }}">
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


    <div class="profil-bupati">
        <!-- Left Container -->
        <div class="container-left">
            <img src="{{ asset('img/berita/wabupati.png') }}"
                alt="Profile image of Dr. Drs. Syafri Kamaruzaman, M.Si., PJ Bupati Kubu Raya 2024" />
            <p>Sujiwo, SE., M.Sos<br />Wakil Bupati Kubu Raya Periode 2019-2024</p>
        </div>

        <!-- Right Container -->
        <div class="container-right">
            <!-- Biodata Section -->
            <div class="section">
                <h2>Biodata</h2>
                <ul>
                    <li>Nama: SUJIWO, S.E., M.Sos</li>
                    <li>Tanggal Lahir: 5 September 1969</li>
                    <li>Istri: Atzeby Yatir Lensi, S.E</li>
                    <li>Anak:
                        <ul>
                            <li>Irwan Ferdian</li>
                            <li>Monika Putri</li>
                            <li>Farahma Salsabila</li>
                            <li>Erlangga Pangestu</li>
                        </ul>
                    </li>
                    <li>Orang Tua: Padmin Sudiyo (Ayah), Srini (Ibu)</li>
                    <li>Agama: Islam</li>
                </ul>
            </div>

            <!-- Riwayat Pendidikan Section -->
            <div class="section">
                <h2>Riwayat Pendidikan</h2>
                <ul>
                    <li>SD Negeri 4 Rasau Jaya, 1983</li>
                    <li>SMP Negeri 1 Rasau Jaya, 1986</li>
                    <li>Akademi Sekretaris Manajemen Indonesia Pontianak (ASMI), 1994</li>
                    <li>Sekolah Tinggi Ilmu Ekonomi, 2005</li>
                    <li>Magister Ilmu Politik Fakultas Ilmu Sosial dan Ilmu Politik, Universitas Tanjungpura, 2020</li>
                </ul>
            </div>

            <!-- Karir/Jabatan Section -->
            <div class="section">
                <h2>Karir/Jabatan</h2>
                <ul>
                    <li>Staff SDM PT. Samalindo Lestari Jaya Kalimantan Timur (PT. ASTRA International Group), 1997-1998
                    </li>
                    <li>Kepala Bagian PT. Nitiyasa Idola Kalimantan Barat, 1997-1998</li>
                    <li>Ketua Komisi C DPRD Kabupaten Pontianak, 1999-2004</li>
                    <li>Wakil Ketua DPRD Kabupaten Pontianak, 2004-2007</li>
                    <li>Ketua DPRD Kabupaten Kubu Raya, 2007-2009</li>
                    <li>Ketua DPRD Kabupaten Kubu Raya, 2009-2014</li>
                    <li>Anggota DPRD Kabupaten Kubu Raya, 2014-2018</li>
                    <li>Wakil Bupati Kubu Raya, 2019-sekarang</li>
                </ul>
            </div>

            <!-- Karir Politik Section -->
            <div class="section">
                <h2>Karir Politik</h2>
                <ul>
                    <li>Ketua Departemen PDI Perjuangan Kabupaten Pontianak, 1999-2000</li>
                    <li>Ketua DPC PDI Perjuangan Kabupaten Pontianak, 2000-2005</li>
                    <li>Wakil Ketua DPD PDI Perjuangan Provinsi Kalimantan Barat, 2005-2010</li>
                    <li>Ketua DPC PDI Perjuangan Kabupaten Pontianak, 2005-2007</li>
                    <li>Ketua DPC PDI Perjuangan Kabupaten Kubu Raya, 2007-2010</li>
                    <li>Ketua DPC PDI Perjuangan Kabupaten Kubu Raya, 2010-2015</li>
                    <li>Bendahara DPD PDI Perjuangan Kalimantan Barat, 2020-2025</li>
                </ul>
            </div>

            <!-- Penghargaan Section -->
            <div class="section">
                <h2>Penghargaan</h2>
                <ul>
                    <li>Warga Kehormatan Korps BRIMOB POLRI</li>
                </ul>
            </div>
        </div>
    </div>

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
</body>

</html>
