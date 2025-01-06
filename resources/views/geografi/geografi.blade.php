<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tata Pemerintahan Kubu Raya</title>
    <link rel="stylesheet" href="{{ asset('css/geografi/geografi.css') }}">
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


    <div class="container-geografi">
        <div class="header">
            <img alt="Map of Kabupaten Kubu Raya" src="{{ asset('img/geografi/geografi1.png') }}" />
            <div>
                {{-- <h1>KABUPATEN KUBU RAYA</h1> --}}
                <p>
                    Kabupaten Kubu Raya merupakan bagian terdepan dari Provinsi Kalimantan Barat yang secara geografis
                    terletak di antara koordinat <strong>108° 35’–109° 58’ BT</strong> dan <strong>00° 44’ LU – 1° 01’
                        LS</strong>.
                    Kabupaten Kubu Raya adalah kabupaten hasil pemekaran dari Kabupaten Pontianak yang terbentuk melalui
                    <strong>Undang-Undang No. 35 Tahun 2007</strong>.
                </p>
                <p>
                    Dengan luas wilayah <strong>6.985,20 km²</strong> (sekitar 65% dari kabupaten induk), secara
                    administrasi
                    Kabupaten Kubu Raya berbatasan dengan:
                </p>
                <ul>
                    <li><strong>Utara:</strong> Kabupaten Pontianak</li>
                    <li><strong>Selatan:</strong> Kabupaten Ketapang</li>
                    <li><strong>Timur:</strong> Kabupaten Landak dan Kabupaten Sanggau</li>
                    <li><strong>Barat:</strong> Laut Natuna</li>
                </ul>
                <p>
                    Wilayah administratif Kabupaten Kubu Raya meliputi 9 Kecamatan yaitu: Batu Ampar, Terentang, Kubu,
                    Teluk Pakedai, Sungai Kakap, Rasau Jaya, Sungai Raya, Sungai Ambawang, Kuala Mandor B. Kecamatan
                    terluas adalah Kecamatan Batu Ampar dengan luas 2.002,70 Km2 dan Kecamatan yang terkecil adalah
                    Kecamatan Rasau Jaya dengan luas 111,07 Km2.
                </p>
            </div>
        </div>
        <div class="content">
            <div class="text">
                <p>
                    PENDUDUK <br>

                    Penduduk Kabupaten Kubu Raya berjumlah 518.497 jiwa dengan tingkat kepadatan 72 jiwa per Km2, secara
                    historis hidup rukun dan damai, dengan komposisi penduduk yang multi ras dan multi agama, pemeluk
                    agama sebagian besar adalah Islam (82%), sangat toleran terhadap pendatang sehingga akulturasi antar
                    budaya terjadi secara alami. Jumlah angkatan kerja penduduk Kubu Raya tahun 2008 tercatat sebesar
                    234.144 orang, dengan komposisi sedang bekerja 197.429 orang dan mencari kerja 36.685 orang.
                    Konsentrasi penduduk tertinggi terdapat di tiga kecamatan yaitu Sungai Raya yang merupakan Ibukota
                    Kabupaten, Sungai Kakap dan Sungai Ambawang. Hal ini sangat logis mengingat ketiga kecamatan
                    tersebut merupakan daerah yang mengelilingi Ibukota Propinsi Kalimantan Barat yaitu Kota Pontianak.
                </p>
                <p>
                    TOPOGRAFI DAN IKLIM <br>

                    Kabupaten Kubu Raya secara umum merupakan daerah dataran yang relatif datar dengan kemiringan lahan
                    0 – 3% seluas 792.320 Ha (98%), Daerah lereng 3 – 15 % seluas 7.205 Ha dan kelerengan diatas 40 %
                    seluas 850 Ha. Luas wilayah lautan seluas 2.197 Km2 dari keseluruhan luas wilayah Kabupaten, yaitu
                    6.985,20 Km2, yang terdiri dari 1.437 Km2 Luas Laut dan 760 Km2 Luas Perairan Umum dengan garis
                    pantai sepanjang 149 Km dan memiliki 39 pulau-pulau kecil. Sedangkan luas wilayah daratannya adalah
                    4.785 Km2. Iklim di Kubu Raya termasuk dalam type Iklim A (Schmit & Ferguson) yaitu iklim sangat
                    basah dengan curah hujan bulanan diatas 100 mm dengan total curah hujan tahunan rata-rata berkisar
                    3000mm. Suhu rata-rata maksimum 33,40 C terjadi pada bulan mei dan suhu minimum rata-rata 22,50 C
                    terjadi pada bulan Agustus.  Kondisi topografi dan iklim di Kubu Raya sangat menunjang untuk
                    investasi agrikultur.
                </p>
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
