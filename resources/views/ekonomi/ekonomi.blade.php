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
    <link rel="stylesheet" href="{{ asset('css/ekonomi/ekonomi.css') }}">
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
            <a href="#">Beranda</a>
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
                            <a href="#">Sejarah</a>
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
        <img alt="" class="header-image"
            src="{{ asset('img/ekonomi/ekonomi1.png') }}"/>
        <p class="highlight">
            Perekonomian Kabupaten Kubu Raya digerakkan oleh sektor primer sebagai sektor basis dan sektor sekunder
            sebagai sektor penunjang. Pergerakan perekonomian Kubu Raya di dukung oleh berbagai potensi sumber daya alam
            yang kaya, seperti: pertanian, perkebunan dan peternakan.
        </p>
        <h2>
            Pertanian
        </h2>
        <p>
            Pertanian di kabupaten Kubu Raya baik pertanian lahan kering maupun lahan basah sangat potensial, terdapat
            beberapa komoditas yang dibudidayakan yaitu: padi, jagung, ubi, kedelai, kacang tanah serta sayur dan
            buah-buahan. Daerah-daerah sentra penghasil komoditas tersebut antara lain adalah kecamatan Sungai Kakap,
            Terentang, Batu Ampar, Rasau Jaya dan Teluk Pakedai. Bahkan daerah-daerah ini merupakan daerah yang terkenal
            di Kalimantan Barat sebagai sentra pertanian dengan produksi pertanian yang cukup besar. Bahkan untuk
            kecamatan Sungai Kakap telah diusulkan menjadi Kawasan Usaha Agropolitan Terpadu (KUAT) dan juga kecamatan
            Rasau Jaya sebagai Kota Mandiri Terpadu (KTM), dengan basis industri pertanian, peternakan dan perikanan
            dengan daya dukung lahan yang memadai.
        </p>
        <h2>
            Perkebunan
        </h2>
        <p>
            Kegiatan perkebunan di kabupaten Kubu Raya untuk komoditas dalam skala industri membudidayakan jenis
            komoditas antara lain karet, kelapa dan kelapa sawit. Sebenarnya meliputi kecamatan Sungai Ambawang, Kuala
            Mandor B, Batu Ampar, Kubu dan Sungai Kakap dengan produksi yang cukup berarti. Bahkan untuk komoditas
            kelapa sawit diperkirakan produksinya akan terus meningkat seiring makin banyaknya pelaku usaha yang
            melakukan pembukaan areal baru untuk perkebunan kelapa sawit.
        </p>
        <h2>
            Perikanan
        </h2>
        <p>
            Sektor perikanan produksinya didominasi oleh perikanan laut, disamping juga terdapat dari budidaya kolam dan
            keramba dalam jumlah yang cukup berarti.
        </p>
        <h2>
            Peternakan
        </h2>
        <p>
            Peternakan hewan dan unggas dengan jumlah yang potensial terdapat disetiap kecamatan kabupaten Kubu Raya
            dengan jenis sapi, kambing, kerbau dan babi. Kelompok unggas didominasi oleh jenis ayam dan bebek. Potensi
            peternakan potensinya sejalan dengan potensi pertanian dan perkebunan.
        </p>
        <h2>
            Kehutanan
        </h2>
        <p>
            Potensi sektor Kehutanan masih didominasi pada industri pengolahan lanjutan, dengan sebaran dominan di
            kecamatan Sungai Raya dan Batu Ampar, bahan baku lebih banyak dipasok dari luar daerah. Selain sisi
            kontribusi pendapatan tak dapat dipungkiri sektor industri pengolahan kayu ini merupakan sektor yang cukup
            banyak menyerap tenaga kerja. Potensi hutan alam produksi di wilayah kabupaten Kubu Raya boleh dikatakan
            sudah tidak memadai untuk skala industri. Namun masih terdapat jenis pemanfaatan hutan alam skala yang cukup
            luas di kecamatan batu ampar yaitu jenis hasil hutan kayu bakau (mangrove) dalam skala industri yang cukup
            berarti dengan pangsa pasar ekspor dalam bentuk komoditas arang briket dan juga Hutan Tanaman Industri.
            Disamping pemanfaatan hutan dalam bidang perindustrian, saat ini mulai dikembangkan hutan wisata dan hutan
            mangrove sebagai pengembangan potensi hutan di sektor pariwisata.
        </p>
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
