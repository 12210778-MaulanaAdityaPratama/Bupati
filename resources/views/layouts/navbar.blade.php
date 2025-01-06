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
