<?php

namespace App\Http\Controllers\kecamatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    AirBersih,
    BiodataCamat,
    LaporanHarianCamat,
    AktivitasPerekonomian,
    BatasWilayah,
    LahanGarapan,
    LuasKepadatan,
    LuasWilayah,
    PendudukAgama,
    PendudukPendidikan,
    PendudukPertumbuhan,
    PekerjaanPenduduk,
    PendudukSuku,
    PendudukUmur,
    PenggunaanTanah,
    AlatTangkap,
    EkonomiAngkatanKerja,
    FotoJudul,
    HasilProduksiPerkebunan,
    JarakWaktuTempuh,
    JumlahAnakSekolah,
    JumlahAnakUsiaSekolah,
    JumlahAngkatanKerja,
    JumlahFasilitasKesehatan,
    JumlahFasilitasPendidikan,
    JumlahFasilitasPendukung,
    JumlahIndurstriPerabotan,
    JumlahObyekWisata,
    JumlahPelangganListrik,
    JumlahPemilikKendaraan,
    JumlahPenduduk,
    JumlahPendudukMiskin,
    JumlahSanggarBudaya,
    JumlahSaranaIbadag,
    JumlahStaff,
    JumlahTenagaGuru,
    JumlahTenagaGuruMenurutPendidikan,
    JumlahTenagaKesehatan,
    LaporanCamat,
    LuasHutanMenurutPenggunaan,
    LuasHutanMenurutStatus,
    PangkatdanGolongan,
    PanjangJalan,
    PelaksanaanProfilKecamatan,
    PemerintahanKecamatan,
    PengelolaanPangan,
    PerikananDarat,
    PrasaranaPemerintahan,
    PrasaranaPemerintahDesa,
    SaranaTelekomunikasi,
    TambangGalian,
    TanahPemdaDiKecamatan,
    TanahPerkebunan,
    TernakBesar,
    TernakKecil,
    TernakUnggas,
    TingkatPendidikanAparatKecamatan,
    UsahaPeternakan,
    UsahaTambangGalian,
};

class RasauJayaController extends Controller
{
    public function index()
    {
        $bulan = now()->month; // Bulan saat ini
        $tahun = now()->year;  // Tahun saat ini
        $kecamatan = 'rasau_jaya'; // Kecamatan spesifik yang ingin ditampilkan

        // Ambil data dari database dengan filter kecamatan
        $laporan_harian_camat = LaporanHarianCamat::with('penyelenggara')
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->where('kecamatan', $kecamatan) // Filter berdasarkan kecamatan
            ->get();

        // Proses data untuk chart
        $penyelenggaraData = $laporan_harian_camat->pluck('penyelenggara.nama_penyelenggara')->toArray();
        $jumlahData = $laporan_harian_camat->pluck('jumlah')->toArray();
        $biodata_camat = BiodataCamat::where('kecamatan', 'rasau_jaya')->get();
        $batas_wilayah = BatasWilayah::where('kecamatan', 'rasau_jaya')->get();
        $luas_wilayah = LuasWilayah::where('kecamatan', 'rasau_jaya')->get();
        $luas_kepadatan = LuasKepadatan::where('kecamatan', 'rasau_jaya')->get();
        $lahan_garapan = LahanGarapan::where('kecamatan', 'rasau_jaya')->get();
        $penggunaan_tanah = PenggunaanTanah::where('kecamatan', 'rasau_jaya')->get();
        $penduduk_agama = PendudukAgama::where('kecamatan', 'rasau_jaya')->get();
        $penduduk_pendidikan = PendudukPendidikan::where('kecamatan', 'rasau_jaya')->get();
        $penduduk_pertumbuhan = PendudukPertumbuhan::where('kecamatan', 'rasau_jaya')->get();
        $penduduk_suku = PendudukSuku::where('kecamatan', 'rasau_jaya')->get();
        $penduduk_umur = PendudukUmur::where('kecamatan', 'rasau_jaya')->get();
        $pekerjaan_penduduk = PekerjaanPenduduk::where('kecamatan', 'rasau_jaya')->get();
        $airbersih = AirBersih::where('kecamatan', 'rasau_jaya')->get();
        $aktivitas_perekonomian = AktivitasPerekonomian::where('kecamatan', 'rasau_jaya')->get();
        $alat_tangkap = AlatTangkap::where('kecamatan', 'rasau_jaya')->get();
        $ekonomi_angkatan_kerja = EkonomiAngkatanKerja::where('kecamatan', 'rasau_jaya')->get();
        $foto_judul = FotoJudul::where('kecamatan', 'rasau_jaya')->get();
        $hasil_produksi_perkebunan = HasilProduksiPerkebunan::where('kecamatan', 'rasau_jaya')->get();
        $jarak_waktu_tempuh = JarakWaktuTempuh::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_anak_sekolah = JumlahAnakSekolah::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_anak_usia_sekolah = JumlahAnakUsiaSekolah::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_angkatan_kerja = JumlahAngkatanKerja::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_fasilitas_kesehatan = JumlahFasilitasKesehatan::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_fasilitas_pendidikan = JumlahFasilitasPendidikan::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_fasilitas_pendukung = JumlahFasilitasPendukung::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_indurstri_perabotan = JumlahIndurstriPerabotan::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_obyek_wisata = JumlahObyekWisata::where('kecamatan', 'rasau_jaya')->get()->map(function ($item) {
            if (is_array($item->nama_obyek)) {
                $item->nama_obyek = implode(', ', array_column($item->nama_obyek, 'nama')); // Gabungkan nilai 'nama'
            }
            return $item;
        });



        $jumlah_pelanggan_listrik = JumlahPelangganListrik::where('kecamatan', 'rasau_jaya')
            ->get()
            ->map(function ($item) {
                // Hitung jumlah PLN + Non-PLN
                $item->jumlah_pln = $item->pln + $item->non_pln;

                // Hitung rasio jumlah PLN terhadap jumlah penduduk
                $item->rasio = $item->jumlah_penduduk > 0
                    ? round(($item->pln / $item->jumlah_penduduk) * 100, 2) // Dalam persen
                    : 0;

                return $item;
            });
        $jumlah_pemilik_kendaraan = JumlahPemilikKendaraan::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_penduduk = JumlahPenduduk::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_penduduk_miskin = JumlahPendudukMiskin::where('kecamatan', 'rasau_jaya')->get()
            ->map(function ($item) {
                $item->rasio = $item->jumlah_penduduk > 0
                    ? round(($item->jumlah_penduduk_miskin / $item->jumlah_penduduk) * 100, 2) // Dalam persen
                    : 0;
                return $item;
            });
        $jumlah_sanggar_budaya = JumlahSanggarBudaya::where('kecamatan', 'rasau_jaya')
            ->get();

        $jumlah_sarana_ibadag = JumlahSaranaIbadag::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_staff = JumlahStaff::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_tenaga_guru = JumlahTenagaGuru::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_tenaga_guru_menurut_pendidikan = JumlahTenagaGuruMenurutPendidikan::where('kecamatan', 'rasau_jaya')->get();
        $jumlah_tenaga_kesehatan = JumlahTenagaKesehatan::where('kecamatan', 'rasau_jaya')->get();
        $laporan_camat = LaporanCamat::where('kecamatan', 'rasau_jaya')->get();
        $luas_hutan_menurut_penggunaan = LuasHutanMenurutPenggunaan::where('kecamatan', 'rasau_jaya')->get();
        $luas_hutan_menurut_status = LuasHutanMenurutStatus::where('kecamatan', 'rasau_jaya')->get();
        $pangkatdan_golongan = PangkatdanGolongan::where('kecamatan', 'rasau_jaya')->get();
        $panjang_jalan = PanjangJalan::where('kecamatan', 'rasau_jaya')->get();
        $pelaksanaan_profil_kecamatan = PelaksanaanProfilKecamatan::where('kecamatan', 'rasau_jaya')->get();
        $pemerintahan_kecamatan = PemerintahanKecamatan::where('kecamatan', 'rasau_jaya')->get();
        $pengelolaan_pangan = PengelolaanPangan::where('kecamatan', 'rasau_jaya')->get();
        $perikanan_darat = PerikananDarat::where('kecamatan', 'rasau_jaya')->get();
        $prasarana_pemerintahan = PrasaranaPemerintahan::where('kecamatan', 'rasau_jaya')->get();
        $prasarana_pemerintahan_desa = PrasaranaPemerintahDesa::where('kecamatan', 'rasau_jaya')->get();
        $sarana_telekomunikasi = SaranaTelekomunikasi::where('kecamatan', 'rasau_jaya')->get();
        $tambang_galian = TambangGalian::where('kecamatan', 'rasau_jaya')->get();
        $tanah_pemda_di_kecamatan = TanahPemdaDiKecamatan::where('kecamatan', 'rasau_jaya')->get();
        $tanah_perkebunan = TanahPerkebunan::where('kecamatan', 'rasau_jaya')->get();
        $ternak_besar = TernakBesar::where('kecamatan', 'rasau_jaya')->get();
        $ternak_kecil = TernakKecil::where('kecamatan', 'rasau_jaya')->get();
        $ternak_unggas = TernakUnggas::where('kecamatan', 'rasau_jaya')->get();
        $tingkat_pendidikan_aparat_kecamatan = TingkatPendidikanAparatKecamatan::where('kecamatan', 'rasau_jaya')->get();
        $usaha_peternakan = UsahaPeternakan::where('kecamatan', 'rasau_jaya')->get();
        $usaha_tambang_galian = UsahaTambangGalian::where('kecamatan', 'rasau_jaya')->get();
        return view('kecamatan.rasaujaya', compact(
            'airbersih',
            'biodata_camat',
            'aktivitas_perekonomian',
            'penyelenggaraData',
            'kecamatan',
            'jumlahData',
            'alat_tangkap',
            'ekonomi_angkatan_kerja',
            'foto_judul',
            'hasil_produksi_perkebunan',
            'jarak_waktu_tempuh',
            'jumlah_anak_sekolah',
            'jumlah_anak_usia_sekolah',
            'jumlah_angkatan_kerja',
            'jumlah_fasilitas_kesehatan',
            'jumlah_fasilitas_pendidikan',
            'jumlah_fasilitas_pendukung',
            'jumlah_indurstri_perabotan',
            'jumlah_obyek_wisata',
            'jumlah_pelanggan_listrik',
            'jumlah_pemilik_kendaraan',
            'jumlah_penduduk',
            'jumlah_penduduk_miskin',
            'jumlah_sanggar_budaya',
            'jumlah_sarana_ibadag',
            'jumlah_staff',
            'jumlah_tenaga_guru',
            'jumlah_tenaga_guru_menurut_pendidikan',
            'jumlah_tenaga_kesehatan',
            'laporan_camat',
            'luas_hutan_menurut_penggunaan',
            'luas_hutan_menurut_status',
            'pangkatdan_golongan',
            'panjang_jalan',
            'pelaksanaan_profil_kecamatan',
            'pemerintahan_kecamatan',
            'pengelolaan_pangan',
            'perikanan_darat',
            'prasarana_pemerintahan',
            'prasarana_pemerintahan_desa',
            'sarana_telekomunikasi',
            'tambang_galian',
            'tanah_pemda_di_kecamatan',
            'tanah_perkebunan',
            'ternak_besar',
            'ternak_kecil',
            'ternak_unggas',
            'tingkat_pendidikan_aparat_kecamatan',
            'usaha_peternakan',
            'usaha_tambang_galian',
            'luas_wilayah',
            'luas_kepadatan',
            'batas_wilayah',
            'lahan_garapan',
            'penggunaan_tanah',
            'penduduk_agama',
            'penduduk_pendidikan',
            'pekerjaan_penduduk',
            'penduduk_pertumbuhan',
            'penduduk_suku',
            'penduduk_umur',

        ));
    }
}
