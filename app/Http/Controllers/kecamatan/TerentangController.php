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

class TerentangController extends Controller
{
    public function index()
    {
        $bulan = now()->month; // Bulan saat ini
        $tahun = now()->year;  // Tahun saat ini
        $kecamatan = 'terentang'; // Kecamatan spesifik yang ingin ditampilkan

        // Ambil data dari database dengan filter kecamatan
        $laporan_harian_camat = LaporanHarianCamat::with('penyelenggara')
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->where('kecamatan', $kecamatan) // Filter berdasarkan kecamatan
            ->get();

        // Proses data untuk chart
        $penyelenggaraData = $laporan_harian_camat->pluck('penyelenggara.nama_penyelenggara')->toArray();
        $jumlahData = $laporan_harian_camat->pluck('jumlah')->toArray();
        $biodata_camat = BiodataCamat::where('kecamatan', 'terentang')->get();
        $batas_wilayah = BatasWilayah::where('kecamatan', 'terentang')->get();
        $luas_wilayah = LuasWilayah::where('kecamatan', 'terentang')->get();
        $luas_kepadatan = LuasKepadatan::where('kecamatan', 'terentang')->get();
        $lahan_garapan = LahanGarapan::where('kecamatan', 'terentang')->get();
        $penggunaan_tanah = PenggunaanTanah::where('kecamatan', 'terentang')->get();
        $penduduk_agama = PendudukAgama::where('kecamatan', 'terentang')->get();
        $penduduk_pendidikan = PendudukPendidikan::where('kecamatan', 'terentang')->get();
        $penduduk_pertumbuhan = PendudukPertumbuhan::where('kecamatan', 'terentang')->get();
        $penduduk_suku = PendudukSuku::where('kecamatan', 'terentang')->get();
        $penduduk_umur = PendudukUmur::where('kecamatan', 'terentang')->get();
        $pekerjaan_penduduk = PekerjaanPenduduk::where('kecamatan', 'terentang')->get();
        $airbersih = AirBersih::where('kecamatan', 'terentang')->get();
        $aktivitas_perekonomian = AktivitasPerekonomian::where('kecamatan', 'terentang')->get();
        $alat_tangkap = AlatTangkap::where('kecamatan', 'terentang')->get();
        $ekonomi_angkatan_kerja = EkonomiAngkatanKerja::where('kecamatan', 'terentang')->get();
        $foto_judul = FotoJudul::where('kecamatan', 'terentang')->get();
        $hasil_produksi_perkebunan = HasilProduksiPerkebunan::where('kecamatan', 'terentang')->get();
        $jarak_waktu_tempuh = JarakWaktuTempuh::where('kecamatan', 'terentang')->get();
        $jumlah_anak_sekolah = JumlahAnakSekolah::where('kecamatan', 'terentang')->get();
        $jumlah_anak_usia_sekolah = JumlahAnakUsiaSekolah::where('kecamatan', 'terentang')->get();
        $jumlah_angkatan_kerja = JumlahAngkatanKerja::where('kecamatan', 'terentang')->get();
        $jumlah_fasilitas_kesehatan = JumlahFasilitasKesehatan::where('kecamatan', 'terentang')->get();
        $jumlah_fasilitas_pendidikan = JumlahFasilitasPendidikan::where('kecamatan', 'terentang')->get();
        $jumlah_fasilitas_pendukung = JumlahFasilitasPendukung::where('kecamatan', 'terentang')->get();
        $jumlah_indurstri_perabotan = JumlahIndurstriPerabotan::where('kecamatan', 'terentang')->get();
        $jumlah_obyek_wisata = JumlahObyekWisata::where('kecamatan', 'terentang')->get()->map(function ($item) {
            if (is_array($item->nama_obyek)) {
                $item->nama_obyek = implode(', ', array_column($item->nama_obyek, 'nama')); // Gabungkan nilai 'nama'
            }
            return $item;
        });



        $jumlah_pelanggan_listrik = JumlahPelangganListrik::where('kecamatan', 'terentang')
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
        $jumlah_pemilik_kendaraan = JumlahPemilikKendaraan::where('kecamatan', 'terentang')->get();
        $jumlah_penduduk = JumlahPenduduk::where('kecamatan', 'terentang')->get();
        $jumlah_penduduk_miskin = JumlahPendudukMiskin::where('kecamatan', 'terentang')->get()
            ->map(function ($item) {
                $item->rasio = $item->jumlah_penduduk > 0
                    ? round(($item->jumlah_penduduk_miskin / $item->jumlah_penduduk) * 100, 2) // Dalam persen
                    : 0;
                return $item;
            });
        $jumlah_sanggar_budaya = JumlahSanggarBudaya::where('kecamatan', 'terentang')
            ->get();

        $jumlah_sarana_ibadag = JumlahSaranaIbadag::where('kecamatan', 'terentang')->get();
        $jumlah_staff = JumlahStaff::where('kecamatan', 'terentang')->get();
        $jumlah_tenaga_guru = JumlahTenagaGuru::where('kecamatan', 'terentang')->get();
        $jumlah_tenaga_guru_menurut_pendidikan = JumlahTenagaGuruMenurutPendidikan::where('kecamatan', 'terentang')->get();
        $jumlah_tenaga_kesehatan = JumlahTenagaKesehatan::where('kecamatan', 'terentang')->get();
        $laporan_camat = LaporanCamat::where('kecamatan', 'terentang')->get();
        $luas_hutan_menurut_penggunaan = LuasHutanMenurutPenggunaan::where('kecamatan', 'terentang')->get();
        $luas_hutan_menurut_status = LuasHutanMenurutStatus::where('kecamatan', 'terentang')->get();
        $pangkatdan_golongan = PangkatdanGolongan::where('kecamatan', 'terentang')->get();
        $panjang_jalan = PanjangJalan::where('kecamatan', 'terentang')->get();
        $pelaksanaan_profil_kecamatan = PelaksanaanProfilKecamatan::where('kecamatan', 'terentang')->get();
        $pemerintahan_kecamatan = PemerintahanKecamatan::where('kecamatan', 'terentang')->get();
        $pengelolaan_pangan = PengelolaanPangan::where('kecamatan', 'terentang')->get();
        $perikanan_darat = PerikananDarat::where('kecamatan', 'terentang')->get();
        $prasarana_pemerintahan = PrasaranaPemerintahan::where('kecamatan', 'terentang')->get();
        $prasarana_pemerintahan_desa = PrasaranaPemerintahDesa::where('kecamatan', 'terentang')->get();
        $sarana_telekomunikasi = SaranaTelekomunikasi::where('kecamatan', 'terentang')->get();
        $tambang_galian = TambangGalian::where('kecamatan', 'terentang')->get();
        $tanah_pemda_di_kecamatan = TanahPemdaDiKecamatan::where('kecamatan', 'terentang')->get();
        $tanah_perkebunan = TanahPerkebunan::where('kecamatan', 'terentang')->get();
        $ternak_besar = TernakBesar::where('kecamatan', 'terentang')->get();
        $ternak_kecil = TernakKecil::where('kecamatan', 'terentang')->get();
        $ternak_unggas = TernakUnggas::where('kecamatan', 'terentang')->get();
        $tingkat_pendidikan_aparat_kecamatan = TingkatPendidikanAparatKecamatan::where('kecamatan', 'terentang')->get();
        $usaha_peternakan = UsahaPeternakan::where('kecamatan', 'terentang')->get();
        $usaha_tambang_galian = UsahaTambangGalian::where('kecamatan', 'terentang')->get();
        return view('kecamatan.terentang', compact(
            'airbersih',
            'biodata_camat',
            'penyelenggaraData',
            'kecamatan',
            'jumlahData',
            'aktivitas_perekonomian',
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
