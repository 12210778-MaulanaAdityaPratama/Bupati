<div class="container-news">
    <!-- Kontainer Kiri -->
    <div class="left-container">
        <div class="news-header">
            <h2>Berita & Informasi</h2>
        </div>
        <div class="news-grid">
            @foreach($berita as $item)
                <div class="news-item">
                    <img src="{{ asset('storage/berita-images/' . $item->gambar) }}" alt="">
                    <h3>{{ $item->nama_berita }}</h3>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->isi_berita), 100, '...') }}</p>

                </div>
            @endforeach
        </div>
        <button class="more-news-btn">Berita Lainnya</button>
    </div>

    <!-- Kontainer Kanan -->
    <div class="right-container">
        <h2>YANG TERHORMAT</h2>
        <div class="photo-container">
            <div class="photo-item">
                <img src="{{ asset('img/berita/bupati.png') }}" alt="Bupati" class="photo">
                <p class="photo-caption">Dr. Drs. Syarif Kamaruzaman, M.Si. <br>PJ Bupati Kubu Raya 2024</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/berita/wabupati.png') }}" alt="Wakil Bupati" class="photo">
                <p class="photo-caption">SUJIWO, SE., M.Sos <br>Wakil Bupati Kubu Raya Periode 2019-2024</p>
            </div>
        </div>
        <div class="sosmed-kita">
            <h3>TEMUKAN KAMI DI</h3>
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f icon-left"></i> Facebook</i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter icon-left"></i> Twitter </i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-instagram icon-left"></i> Instagram </i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in icon-left"></i> LinkedIn </i>
                </a>
            </div>
            <p>Ikuti kami di facebook, twitter, Instagram, Linkedin dan dapatkan informasi terbaru dari kami disana.
            </p>
        </div>
    </div>
</div>
