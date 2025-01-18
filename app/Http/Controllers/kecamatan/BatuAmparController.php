<?php

namespace App\Http\Controllers\kecamatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    AirBersih,
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
    BiodataCamat
};

class BatuAmparController extends Controller
{
    public function index()
    {
        $bulan = now()->month; // Bulan saat ini
        $tahun = now()->year;  // Tahun saat ini
        $kecamatan = 'batu_ampar'; // Kecamatan spesifik yang ingin ditampilkan

        // Ambil data dari database dengan filter kecamatan
        $laporan_harian_camat = LaporanHarianCamat::with('penyelenggara')
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->where('kecamatan', $kecamatan) // Filter berdasarkan kecamatan
            ->get();

        // Proses data untuk chart
        $penyelenggaraData = $laporan_harian_camat->pluck('penyelenggara.nama_penyelenggara')->toArray();
        $jumlahData = $laporan_harian_camat->pluck('jumlah')->toArray();
        $biodata_camat = BiodataCamat::where('kecamatan', 'batu_ampar')->get();
        $batas_wilayah = BatasWilayah::where('kecamatan', 'batu_ampar')->get();
        $luas_wilayah = LuasWilayah::where('kecamatan', 'batu_ampar')->get();
        $luas_kepadatan = LuasKepadatan::where('kecamatan', 'batu_ampar')->get();
        $lahan_garapan = LahanGarapan::where('kecamatan', 'batu_ampar')->get();
        $penggunaan_tanah = PenggunaanTanah::where('kecamatan', 'batu_ampar')->get();
        $penduduk_agama = PendudukAgama::where('kecamatan', 'batu_ampar')->get();
        $penduduk_pendidikan = PendudukPendidikan::where('kecamatan', 'batu_ampar')->get();
        $penduduk_pertumbuhan = PendudukPertumbuhan::where('kecamatan', 'batu_ampar')->get();
        $penduduk_suku = PendudukSuku::where('kecamatan', 'batu_ampar')->get();
        $penduduk_umur = PendudukUmur::where('kecamatan', 'batu_ampar')->get();
        $pekerjaan_penduduk = PekerjaanPenduduk::where('kecamatan', 'batu_ampar')->get();
        $airbersih = AirBersih::where('kecamatan', 'batu_ampar')->get();
        $aktivitas_perekonomian = AktivitasPerekonomian::where('kecamatan', 'batu_ampar')->get();
        $alat_tangkap = AlatTangkap::where('kecamatan', 'batu_ampar')->get();
        $ekonomi_angkatan_kerja = EkonomiAngkatanKerja::where('kecamatan', 'batu_ampar')->get();
        $foto_judul = FotoJudul::where('kecamatan', 'batu_ampar')->get();
        $hasil_produksi_perkebunan = HasilProduksiPerkebunan::where('kecamatan', 'batu_ampar')->get();
        $jarak_waktu_tempuh = JarakWaktuTempuh::where('kecamatan', 'batu_ampar')->get();
        $jumlah_anak_sekolah = JumlahAnakSekolah::where('kecamatan', 'batu_ampar')->get();
        $jumlah_anak_usia_sekolah = JumlahAnakUsiaSekolah::where('kecamatan', 'batu_ampar')->get();
        $jumlah_angkatan_kerja = JumlahAngkatanKerja::where('kecamatan', 'batu_ampar')->get();
        $jumlah_fasilitas_kesehatan = JumlahFasilitasKesehatan::where('kecamatan', 'batu_ampar')->get();
        $jumlah_fasilitas_pendidikan = JumlahFasilitasPendidikan::where('kecamatan', 'batu_ampar')->get();
        $jumlah_fasilitas_pendukung = JumlahFasilitasPendukung::where('kecamatan', 'batu_ampar')->get();
        $jumlah_indurstri_perabotan = JumlahIndurstriPerabotan::where('kecamatan', 'batu_ampar')->get();
        $jumlah_obyek_wisata = JumlahObyekWisata::where('kecamatan', 'batu_ampar')->get()->map(function ($item) {
            if (is_array($item->nama_obyek)) {
                $item->nama_obyek = implode(', ', array_column($item->nama_obyek, 'nama')); // Gabungkan nilai 'nama'
            }
            return $item;
        });



        $jumlah_pelanggan_listrik = JumlahPelangganListrik::where('kecamatan', 'batu_ampar')
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
        $jumlah_pemilik_kendaraan = JumlahPemilikKendaraan::where('kecamatan', 'batu_ampar')->get();
        $jumlah_penduduk = JumlahPenduduk::where('kecamatan', 'batu_ampar')->get();
        $jumlah_penduduk_miskin = JumlahPendudukMiskin::where('kecamatan', 'batu_ampar')->get()
            ->map(function ($item) {
                $item->rasio = $item->jumlah_penduduk > 0
                    ? round(($item->jumlah_penduduk_miskin / $item->jumlah_penduduk) * 100, 2) // Dalam persen
                    : 0;
                return $item;
            });
        $jumlah_sanggar_budaya = JumlahSanggarBudaya::where('kecamatan', 'batu_ampar')
            ->get();

        $jumlah_sarana_ibadag = JumlahSaranaIbadag::where('kecamatan', 'batu_ampar')->get();
        $jumlah_staff = JumlahStaff::where('kecamatan', 'batu_ampar')->get();
        $jumlah_tenaga_guru = JumlahTenagaGuru::where('kecamatan', 'batu_ampar')->get();
        $jumlah_tenaga_guru_menurut_pendidikan = JumlahTenagaGuruMenurutPendidikan::where('kecamatan', 'batu_ampar')->get();
        $jumlah_tenaga_kesehatan = JumlahTenagaKesehatan::where('kecamatan', 'batu_ampar')->get();
        $laporan_camat = LaporanCamat::where('kecamatan', 'batu_ampar')->get();
        $luas_hutan_menurut_penggunaan = LuasHutanMenurutPenggunaan::where('kecamatan', 'batu_ampar')->get();
        $luas_hutan_menurut_status = LuasHutanMenurutStatus::where('kecamatan', 'batu_ampar')->get();
        $pangkatdan_golongan = PangkatdanGolongan::where('kecamatan', 'batu_ampar')->get();
        $panjang_jalan = PanjangJalan::where('kecamatan', 'batu_ampar')->get();
        $pelaksanaan_profil_kecamatan = PelaksanaanProfilKecamatan::where('kecamatan', 'batu_ampar')->get();
        $pemerintahan_kecamatan = PemerintahanKecamatan::where('kecamatan', 'batu_ampar')->get();
        $pengelolaan_pangan = PengelolaanPangan::where('kecamatan', 'batu_ampar')->get();
        $perikanan_darat = PerikananDarat::where('kecamatan', 'batu_ampar')->get();
        $prasarana_pemerintahan = PrasaranaPemerintahan::where('kecamatan', 'batu_ampar')->get();
        $prasarana_pemerintahan_desa = PrasaranaPemerintahDesa::where('kecamatan', 'batu_ampar')->get();
        $sarana_telekomunikasi = SaranaTelekomunikasi::where('kecamatan', 'batu_ampar')->get();
        $tambang_galian = TambangGalian::where('kecamatan', 'batu_ampar')->get();
        $tanah_pemda_di_kecamatan = TanahPemdaDiKecamatan::where('kecamatan', 'batu_ampar')->get();
        $tanah_perkebunan = TanahPerkebunan::where('kecamatan', 'batu_ampar')->get();
        $ternak_besar = TernakBesar::where('kecamatan', 'batu_ampar')->get();
        $ternak_kecil = TernakKecil::where('kecamatan', 'batu_ampar')->get();
        $ternak_unggas = TernakUnggas::where('kecamatan', 'batu_ampar')->get();
        $tingkat_pendidikan_aparat_kecamatan = TingkatPendidikanAparatKecamatan::where('kecamatan', 'batu_ampar')->get();
        $usaha_peternakan = UsahaPeternakan::where('kecamatan', 'batu_ampar')->get();
        $usaha_tambang_galian = UsahaTambangGalian::where('kecamatan', 'batu_ampar')->get();
        return view('kecamatan.batuampar', compact(
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
