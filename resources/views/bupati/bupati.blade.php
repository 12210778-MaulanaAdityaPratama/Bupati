<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bupati/bupati.css') }}">
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
        <div class="container-left">
            <img src="{{ asset('img/berita/bupati.png') }}"
                alt="Profile image of Dr. Drs. Syafri Kamaruzaman, M.Si., PJ Bupati Kubu Raya 2024" />
            <p>Dr. Drs. Syafri Kamaruzaman, M.Si.<br />PJ Bupati Kubu Raya 2024</p>
        </div>
        <div class="container-right">
            <ul>
                <li>Muda Mahendrawan lahir di Pontianak tanggal 17 Agustus 1970. Putera dari pasangan Prof. H. Mahmud
                    Akil, S.H. dan Hj. Sri Puspitawati.  Ayahnya merupakan Rektor Universitas Tanjungpura Pontianak pada
                    1991-1999, yang merupakan universitas terkemuka di Kalimantan Barat. Muda menyelesaikan studi
                    Sarjana Hukum di Fakultas Hukum Untan Pontianak tahun 1994 dilanjutkan dengan Pendidikan Spesialis
                    Magister Notariat Universitas Gadjah Mada (UGM) Yogyakarta 1995-1998. Sebelum menjabat sebagai
                    bupati, sehari-sehari berprofesi sebagai Notaris dan PPAT yang berkantor di Kecamatan Sungai Raya
                    Kabupaten Kubu Raya (dahulu bernama Kabupaten Pontianak sebelum pemekaran) Kalimantan Barat sejak
                    Juni 1998. </li>
            </ul>
            <ul>
                <li>Pada tahun 2004 melahirkan gagasan pembentukan Kabupaten Kubu Raya untuk dimekarkan dari Kabupaten
                    Pontianak sebagai daerah induk ketika itu. Dan pada Juli 2007 Kabupaten Kubu Raya resmi terbentuk
                    dengan Undang-Undang Nomor 35 Tahun 2007 tentang Pembentukan Kabupaten Kubu Raya di Provinsi
                    Kalimantan Barat.</li>
            </ul>
            <ul>
                <li>Dilantik sebagai bupati petama Kubu Raya pada tanggal 17 Februari 2009, setelah memenangkan
                    pemilihan umum langsung kepala daerah tahun 2008 dari jalur independen dengan menggandeng Andreas
                    Muhrotein sebagai wakilnya. Dan menjadi bupati independen pertama yang berhasil terpilih di
                    Indonesia ketika itu. </li>
            </ul>
            <ul>
                <li>Pada masa awal kepemimpinannya, Muda Mahendrawan melakukan gebrakan langkah terobosan dengan
                    mereformasi kebijakan anggaran APBD Kubu Raya yang lebih diarahkan pada program menyentuh langsung
                    kebutuhan rakyat banyak.</li>
            </ul>
            <ul>
                <li>Langkahnya membatalkan anggaran jatah pembelian fasilitas mobil dinas bupati dan wakil bupati yang
                    dialihkan untuk pembelian motor bidan-bidan desa, dan tidak menganggarkan pembangunan rumah jabatan
                    bupati dan wakil bupati hingga tahun terakhir jabatannya untuk menambah anggaran perbaikan
                    sekolah-sekolah rusak berat,  puskesmas, pustu, polindes, dan pengembangan pertanian beras lokal
                    menjadi contoh terobosan keberpihakan yang nyata.</li>
            </ul>
            <ul>
                <li>Di bidang pertanian, Muda juga membuat kebijakan bagi para PNS di lingkungan Pemerintah Kabupaten
                    Kubu Raya wajib membeli beras petani Kubu Raya. Serta program mekanisasi di sektor pertanian dengan
                    program pembelian handtractor. Selain di bidang pertanian, Muda juga membuat gebrakan kebijakan di
                    bidang kependudukan dan pencatatan sipil. Ia mengusahakan e-KTP yang penuh manfaat. Saat itu
                    pihaknya berusaha secara maksimal untuk menyukseskan program e-KTP selama tiga bulan. Menurutnya
                    dengan adanya e-KTP, dapat mempermudah program pemerintah karena dapat diketahui usia, jumlah
                    penduduk, dan jumlah kemiskinan. Selain itu pelayanan kesehatan dan pembagian raskin menurutnya akan
                    lebih cepat diusahakan.</li>
            </ul>
            <ul>
                <li>Prestasi menonjol dan berintegritas selama menjadi bupati periode 2009-2014:</li>
                <ul>
                    <li>Tahun 2011 Kubu Raya mendapat peringkat pertama secara nasional penilaian KPPOD Pusat kategori
                        Perda Terbaik yang dinilai baik dalam pelayanan perizinan dan investasi.</li>
                    <li>Tahun 2012 Pelayanan Terpadu Satu Pintu Kubu Raya berhasil masuk nominasi lima besar nasional
                        dari
                        seluruh kabupaten/kota di Indonesia. Hal ini merupakan sebuah prestasi luar biasa untuk sebuah
                        kabupaten yang baru terbentuk.</li>
                    <li>Akhir tahun 2012 terpilih sebagai salah satu dari tujuh bupati/wali kota terbaik dari 497
                        kabupaten/kota se-Indonesia versi Majalah Tempo “Bukan Bupati Biasa”. Karena dinilai banyak
                        terobosan dan inovasi kebijakan yang pro rakyat.</li>
                </ul>
            </ul>
            <ul>
                <li>
                    Pada pilkada tahun 2013, Muda kembali mencalonkan diri sebagai Bupati Kubu Raya dengan menggandeng
                    Suharjo, yang saat itu menjabat sebagai Kepala Dinas Pertanian dan Peternakan Kabupaten Kubu Raya.
                    Ia kembali memilih jalur independen untuk bersaing dengan dua kandidat bupati lain. Namun sayang,
                    waktu itu ia harus mengaku kalah dan menyerahkan tongkat kepemimpinan Kubu Raya kepada pasangan
                    Rusman Ali-Hermanus, sebagai Bupati/Wakil Bupati kedua Kubu Raya.
                </li>
            </ul>
            <ul>
                <li>
                    Lima tahun berselang, Muda kembali mencalonkan diri sebagai Bupati Kubu Raya pada pilkada tahun
                    2018. Penuh percaya diri kali ini ia menggandeng politikus kawakan PDI Perjuangan, Sujiwo.
                    Muda-Jiwo, dengan didukung enam partai politik akhirnya memenangkan kompetisi pilkada 2018, dan
                    kembali menjabat sebagai Bupati Kubu Raya.
                </li>
            </ul>
            <ul>
                <li>
                    Dengan semangat motto “Berlari lebih Kencang, Berproses lebih Cepat, Bertindak Lebih Nyata-Dari Kubu
                    Raya untuk Indonesia”, bermaksud mengajak rakyat untuk membuktikan bahwa keberadaan Kabupaten Kubu
                    Raya tak boleh menjadi beban bagi negara dan bangsa. Sebaliknya Kubu Raya harus mampu berkontribusi
                    besar dan menjadi bagian penting dari Indonesia.
                </li>
            </ul>
            <ul>
                <li>
                    Program Kemandirian Pangan menjadi fokus kebijakan utama. Kebijakan pro rakyat di bidang pendidikan
                    dengan menggulirkan program Biaya Operasional Sekolah Daerah atau Bosda serta pemberian baju seragam
                    gratis di tahun ajaran baru yang produksinya dilakukan oleh para penjahit lokal Kubu Raya. Kebijakan
                    ini berdampak percepatan menurunnya angka anak putus sekolah di Kubu Raya sekaligus semakin
                    bergeraknya ekonomi rakyat. Di sektor kesehatan Muda memperkuat Pelayanan Puskesmas Rawat Inap,
                    Pustu dan Polindes di tiap kecamatan dan Program Jaminan Kesehatan Daerah (Jamkesda), serta
                    kebijakan menghapus pungutan retribusi dalam pelayanan kesehatan dasar di puskesmas, pustu, dan
                    polindes. Selain itu ia juga mengadakan program Selasa-Jumat (Salju) Terpadu. Salju Terpadu adalah
                    layanan kesehatan jemput-bola yang langsung menyasar rumah tangga-rumah tangga warga. Program Salju
                    Terpadu berhasil masuk sepuluh besar ajang Penghargaan Pembangunan Daerah (PPD) 2020 yang digelar
                    Kementerian Perencanaan Pembangunan Nasional/Badan Perencanaan Pembangunan Nasional Republik
                    Indonesia. Kubu Raya menjadi satu-satunya kabupaten wakil dari Pulau Kalimantan. Oleh pemerintah
                    pusat, program ini dinilai sebagai program yang langsung menyentuh kebutuhan masyarakat khususnya di
                    bidang kesehatan. Menjadi upaya mempercepat target 12 indikator Standar Pelayanan Minimal (SPM)
                    dalam menurunkan angka kematian ibu dan balita (AKI-AKB) serta stunting. Di bidang pelayanan
                    perizinan, Pelayanan Terpadu Satu Pintu dilaksanakan bahkan terintegrasi secara daring (online),
                    sehingga mempermudah dan mempercepat proses izin-izin usaha, yang berdampak meningkatnya kegiatan
                    investasi dan perputaran ekonomi di Kubu Raya. Sektor program pemberdayaan perempuan dan keluarga
                    tak luput dari perhatiannya. Karenanya, sering terlibat aktif bekerja sama dengan berbagai
                    organisasi yang bergiat di pemberdayaan perempuan dan banyak mendesain kebijakan yang mengarahkan
                    sasaran kegiatan kepada kelompok-kelompok perempuan dan ibu-ibu rumah tangga.
                </li>
            </ul>
            <ul>
                <li>
                    Pernikahannya dengan Rosalina dikaruniai tiga orang anak. Yaitu sepasang anak kembar perempuan yang
                    diberi nama Mahesa Maura dan Mahesa Mauri, serta seorang anak laki-laki yang diberi nama Muda
                    Maestro Junior.
                </li>
            </ul>
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
