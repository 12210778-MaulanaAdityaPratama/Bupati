<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pengumuman/pengumuman.css') }}">
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
        <div class="header-pengumuman">Pengumuman</div>
        <div class="announcement">
            <img alt="Poster Dirgahayu Republik Indonesia ke-79" height="150"
                src="{{ asset('img/pengumuman/pengumuman.png') }}" width="150" />
            <div class="announcement-content">
                <h2>MEMPERINGATI HUT KE-79, 17 AGUSTUS 2024</h2>
                <p>
                    Peringati Hari Kemerdekaan Indonesia ke-79 tahun ini, mengambil tema “Nusantara Baru, Indonesia
                    Baru” mencerminkan momentum transisi besar yang dihadapi pemerintah indonesia.
                </p>
                <p>
                    Selain itu, juga menadai perubahan penting dalam perjalanan bangsa indonesia Sebab, tahun 2024
                    dianggap sebagai titik awal bagi beberapa transisi besar, termasuk perpindahan ibu kota negara ke
                    Kalimantan, pergantian kepemimpinan, hingga persiapan menuju visi Indonesia Emas 2045.
                </p>
                <div class="announcement-footer">
                    <i class="fas fa-user"></i> Admin Tapem
                    <i class="fas fa-calendar-alt" style="margin-left: 10px;"></i> 17 Agustus 2024
                    <i class="fas fa-info-circle" style="margin-left: 10px;"></i>
                    <a href="{{ route('detailpengumuman') }}">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <button>&lt;</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>&gt;</button>
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
