<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Detail Berita
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/berita/detailberita.css') }}">
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
        <div class="main-content">
            <img alt="A group of people standing in a field with trees in the background" height="400"
                src="{{ asset('img/news/beritaterkini.png') }}" width="800" />
            <h1>
                PJ BUPATI Survey mendatangi Lokasi Kecamatan Baru Kumpai Raya
            </h1>
            <div class="meta">
                <i class="far fa-clock">
                </i>
                13:52 WIB
                <i class="fas fa-calendar-alt" style="margin-left: 20px;">
                </i>
                SELASA
                <i class="fas fa-calendar-day" style="margin-left: 20px;">
                </i>
                07 NOVEMBER 2023
            </div>
            <p>
                PROKOPIM KUBU RAYA - Bupati Kubu Raya Muda Mahendrawan membuka kegiatan Penguatan Konsep Pola Pengasuhan
                Bahagia bagi Komunitas (Parenting) Pendidikan Anak Usia Dini (PAUD), Senin (6/11), di Hotel Dangau Kubu
                Raya.
            </p>
            <p>
                Bupati Muda menyampaikan kegiatan penguatan konsep pola pengasuhan bagi komunitas PAUD merupakan upaya
                menyamakan langkah untuk melatih dan mengingatkan bahwa pola asuh sangat penting. Khususnya dengan
                melihat ekosistem yang ada di sekitar, yaitu semua yang dapat memengaruhi.
            </p>
            <p>
                “Terkait parenting atau pola asuh ini, ada pelatihan dengan tujuan untuk menciptakan adanya rasa tenang
                dan kenyamanan di dalam PAUD itu,” kata Bupati Muda.
            </p>
            <p>
                Melalui upaya penguatan PAUD, pemerintah kabupaten melalui Dinas Pendidikan dan Kebudayaan, kata Bupati
                Muda, hingga kini sudah berupaya untuk meningkatkan insentif bagi guru PAUD, penguatan mutu dan mengejar
                kegiatan Gebyar PAUD di tingkat kecamatan.
            </p>
            <p>
                “Ini berarti sudah menunjukkan rasa bahagia dan optimis. Semua bisa ikut terlibat pada Gebyar PAUD di
                tingkat kecamatan. Kalau Gebyar PAUD di tingkat Kabupaten, yang ikut itu hanya keterwakilan saja,” ujar
                Bupati Muda.
            </p>
            <p>
                Gebyar PAUD ini, kata Bupati Muda, sangat bermakna dan berkontribusi. Karena anak-anak usia dini akan
                lebih optimis dan bahagia serta akan menumbuhkan daya imajinasi yang baik.
            </p>
            <p>
                “PAUD-PAUD di Kubu Raya ini sudah jauh punya terobosan-terobosan. Terlebih dengan langkah-langkah yang
                sudah menjamin pelayanan kesehatan yang sudah bebas biaya, maka di situ sudah memunculkan keterangan,”
                ucap Bupati Muda.
            </p>
            <p>
                Bahagia, kata Bupati Muda, harus terus diperjuangkan. Semua pihak harus punya nyali untuk bahagia.
                Karena itu, membangun dan mewujudkan suasana bahagia itu menjadi visi Kabupaten Kubu Raya.
            </p>
            <p>
                “Karena itu adalah sebuah proses perjuangan hidup kita. Dari mulai anak dan kalangan ibu wajib
                membahagiakannya,” kata Bupati Muda.
            </p>
            <p>
                (Jaka)
            </p>
        </div>
        <div class="sidebar">
            <div class="search-bar">
                <input placeholder="cari berita lainnya" type="text" />
                <button>
                    <i class="fas fa-search">
                    </i>
                </button>
            </div>
            <div class="news-item">
                <img alt="A group of people standing and holding certificates" height="150"
                    src="{{ asset('img/news/sideberita1.png') }}" width="150" />
                <div class="news-item-content">
                    <h3>
                        Bupati Muda Serahkan Bantuan untuk 89 Rumah Ibadah
                    </h3>
                    <div class="meta">
                        <i class="fas fa-calendar-alt">
                        </i>
                        SELASA
                        <i class="fas fa-calendar-day" style="margin-left: 10px;">
                        </i>
                        07 NOVEMBER 2023
                    </div>
                    <p>
                        Bupati Muda memberikan bantuan kepada 89 rumah ibadah di wilayah Kubu Raya sebagai bagian dari
                        program sosial pemerintah daerah.
                    </p>
                </div>
            </div>
            <div class="news-item">
                <img alt="A group of people standing and holding certificates" height="150"
                    src="{{ asset('img/news/sideberita2.png') }}" width="150" />
                <div class="news-item-content">
                    <h3>
                        Bupati Muda Serahkan Bantuan untuk 89 Rumah Ibadah
                    </h3>
                    <div class="meta">
                        <i class="fas fa-calendar-alt">
                        </i>
                        SELASA
                        <i class="fas fa-calendar-day" style="margin-left: 10px;">
                        </i>
                        07 NOVEMBER 2023
                    </div>
                    <p>
                        Bupati Muda memberikan bantuan kepada 89 rumah ibadah di wilayah Kubu Raya sebagai bagian dari
                        program sosial pemerintah daerah.
                    </p>
                </div>
            </div>
            <div class="news-item">
                <img alt="A group of people standing and holding certificates" height="150"
                    src="{{ asset('img/news/sideberita1.png') }}" width="150" />
                <div class="news-item-content">
                    <h3>
                        Bupati Muda Serahkan Bantuan untuk 89 Rumah Ibadah
                    </h3>
                    <div class="meta">
                        <i class="fas fa-calendar-alt">
                        </i>
                        SELASA
                        <i class="fas fa-calendar-day" style="margin-left: 10px;">
                        </i>
                        07 NOVEMBER 2023
                    </div>
                    <p>
                        Bupati Muda memberikan bantuan kepada 89 rumah ibadah di wilayah Kubu Raya sebagai bagian dari
                        program sosial pemerintah daerah.
                    </p>
                </div>
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
