<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        ekonomi
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/wilayah/wilayah.css') }}">
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
        <div class="map">
            <img alt="Map of Kabupaten Kubu Raya with highlighted regions" height="200"
                src="{{ asset('img/wilayah/map1.png') }}"
                width="300" />
        </div>
        <div class="content">
            <b>
                Dari sisi administrasi Kabupaten Kubu Raya terdiri atas 9 kecamatan, 118 desa, dan 448 dusun dengan luas
                keseluruhan 6.985,20 km², yaitu:
            </b>
            <ol>
                <li>
                    Kecamatan Batu Ampar, terdiri dari 15 desa, 54 dusun dan luas wilayah 2.002,00 km².
                </li>
                <li>
                    Kecamatan Terentang, terdiri dari 10 desa, 29 dusun dan luas wilayah 786,40 km².
                </li>
                <li>
                    Kecamatan Kubu, terdiri dari 20 desa, 73 dusun dan luas wilayah 1.211,60 km².
                </li>
                <li>
                    Kecamatan Teluk Pakedai, terdiri dari 14 desa, 46 dusun dan luas wilayah 291,90 km².
                </li>
                <li>
                    Kecamatan Sungai Kakap, terdiri dari 13 desa, 55 dusun dan luas wilayah 453,13 km².
                </li>
                <li>
                    Kecamatan Rasau Jaya, terdiri dari 6 desa, 27 dusun dan luas wilayah 11,07 km².
                </li>
                <li>
                    Kecamatan Sungai Raya, terdiri dari 22 desa, 78 dusun dan luas wilayah 929,30 km².
                </li>
                <li>
                    Kecamatan Sungai Ambawang, terdiri dari 15 desa, 65 dusun dan luas wilayah 726,10 km².
                </li>
                <li>
                    Kecamatan Kuala Mandor B, terdiri dari 5 desa, 21 dusun dan luas wilayah 473,00 km².
                </li>
            </ol>
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
