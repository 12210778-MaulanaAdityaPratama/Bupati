<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tata Pemerintahan Kubu Raya</title>
    <link rel="stylesheet" href="{{ asset('css/lambang/lambang.css') }}">
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
            <img alt="Map of Kabupaten Kubu Raya" src="{{ asset('img/logo.png') }}" />
            <div>
                <h1>MAKNA LAMBANG KABUPATEN KUBU RAYA</h1>
                <p>
                    Lambang berbentuk perisai dengan garis lengkung dan garis lurus menyatu berwarna hitam dan biru
                    didalamnya, mengandung arti bahwa wilayah Kabupaten Kubu Raya merupakan daerah daratan dan
                    pulaupulau yang dipisahkan oleh sungai dan laut, serta mempunyai potensi sebagai daerah lalu lintas
                    perdagangan dan pariwisata.
                </p>
                <p>
                    Pada sisi kanan benteng terdapat butiran padi yang berjumlah 17 dan pada sisi kirinya terdapat 7
                    lembar daun kelapa yang berpangkal pada angka 2007 dibawahnya terdapat tulisan Kubu Raya, yang
                    mengandung arti bahwa berdirinya Kabupaten Kubu Raya pada Tanggal 17 Juli 2007. Butiran padi dan
                    lembar daun kelapa menunjukan bahwa Kabupaten Kubu Raya merupakan daerah dengan potensi hasil
                    pertanian dan perkebunan yang subur.
                </p>
            </div>
        </div>
        <div class="content">
            <div class="text">
                <p>
                    Ditengah Lambang terdapat benteng (kubu pertahanan) yang terdiri dari 9 bagian yaitu 1 ditengah, 4
                    disisi kanan dan 4 disisi kiri, yang mengandung arti bahwa Kabupaten Kubu Raya pada saat pembentukan
                    terdiri dari 9 Kecamatan, dengan pusat pemerintahan berada di Kecamatan sungai Raya.
                </p>
                <p>
                    Pada sisi bawah benteng terbantang perahu yang sarat muatan dengan riak ombak didepannya dan layer
                    mengembang serta tiang perahu yang kokoh, mengandung arti transportasi air sebagai media lalu lintas
                    perdagangan hasil usaha keras masyarakat yaitu hasil laut, pertanian, perkebunan, industri dan
                    tambang, menuju kehidupan yang bermartabat dan sejahtera.
                </p>
                <p>
                    Pada sisi paling bawah terdapat pita bertuliskan Kubu Raya, mengandung arti budaya masyarakat Kubu
                    Raya heterogen selalu bersatu, harmonis sebagai pencerminan rasa persatuan dan kesatuan.
                </p>
                <p>
                    Pada sisi atas benteng terdapat bintang segi lima dan enam sinar yang memancar mengadung arti
                    Pancasila sebagai dasar dalam mewujudkan enam harapan masyarakat yang tertib, aman, mudah pelayanan,
                    adil dan merata, makmur, indah, lestari, beriman dan bertaqwa dalam ridho Tuhan Yang Maha Esa.
                </p>
                <p>
                    Arti/Warna Komposisi Warna :
                </p>
                <ul>
                    <li>
                        Warna Dasar biru laut, melambangkan keyakinan. Dengan daerah perairan sebagai pemisah daratan,
                        tetapi masyarakat yakin lautan raya sangat berpotensi dengan hasil lautnya juga sebagai lalu
                        lintas pertumbuhan ekonomi sekaligus membuka kerjasama pada bidang pariwisata dan perdagangan
                        baik Nasional maupun Internasional.
                    </li>
                    <li>Warna hitam, melambangkan perjuangan dan kerja keras dalam menggali dan mengelola potensi daerah
                        menuju masyarakat adil dan makmur.
                    </li>
                    <li>Warna merah dan putih melambangkan keberanian dan kesucian. Berani bersaing dengan daerah lain
                        atas dasar keberanian dan kesucian jiwa di bawah panji Merah Putih Negara Kesatuan Republik
                        Indonesia.
                    </li>
                    <li>Warna hijau melambangkan kesuburan. Dengan Potensi daerah pertanian dan perkebunan yang subur
                        menjadikan masyarakat yang produktif bekerja sesuai dengan keahlian dan kemampuannya dengan
                        memanfaatkan ilmu pengetahuan dan teknologi sebagai penunjangnya.
                    </li>
                    <li>
                        Warna kuning emas melambangkan keagungan, berawal dari sejarah perjuangan mengusir penjajah oleh
                        pejuang-pejuang Kubu Raya.
                    </li>
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
