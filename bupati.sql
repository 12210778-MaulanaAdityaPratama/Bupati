-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2025 at 02:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bupati`
--

-- --------------------------------------------------------

--
-- Table structure for table `air_bersih`
--

CREATE TABLE `air_bersih` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `air_bersih`
--

INSERT INTO `air_bersih` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('79cb1704-b865-4719-88bf-bd3835206d01', 'kuala_mandor_b', 'PDAM', 23, '2025-01-09 20:28:19', '2025-01-09 20:28:19'),
('ba9dca5d-0fb4-4982-883f-5f905e611002', 'rasau_jaya', 'MCK', 2321, '2025-01-08 00:57:57', '2025-01-08 00:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_perekonomian`
--

CREATE TABLE `aktivitas_perekonomian` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas_perekonomian`
--

INSERT INTO `aktivitas_perekonomian` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('9dea1689-f7b3-497e-bdab-901d2af946b7', 'rasau_jaya', 'kooperasi', 2, NULL, NULL),
('9dea1694-4216-4d91-b302-c13e1852747b', 'rasau_jaya', 's', NULL, NULL, NULL),
('9dee1982-a071-4862-a29b-0ee8739e6c57', 'kuala_mandor_b', 's', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alat_tangkap`
--

CREATE TABLE `alat_tangkap` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_tangkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alat_tangkap`
--

INSERT INTO `alat_tangkap` (`id`, `kecamatan`, `alat_tangkap`, `created_at`, `updated_at`) VALUES
('501290b7-82e8-4719-a3bd-55a5758edf3e', 'kuala_mandor_b', 's', '2025-01-09 21:52:43', '2025-01-09 21:52:43'),
('cf679a49-bfdf-46b9-bf93-a69ddc0ff746', 'rasau_jaya', 'pancing', '2025-01-07 20:39:45', '2025-01-07 20:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `batas_wilayah`
--

CREATE TABLE `batas_wilayah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utara` double DEFAULT NULL,
  `selatan` double DEFAULT NULL,
  `barat` double DEFAULT NULL,
  `timur` double DEFAULT NULL,
  `batas` double DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batas_wilayah`
--

INSERT INTO `batas_wilayah` (`id`, `kecamatan`, `utara`, `selatan`, `barat`, `timur`, `batas`, `keterangan`, `created_at`, `updated_at`) VALUES
('85af5d5e-d7d6-409e-977f-6aab6781113a', 'kuala_mandor_b', 23, 2, 43, 33, 2, '32', '2025-01-10 23:07:25', '2025-01-10 23:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama_berita`, `isi_berita`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'tyu', 'sdfg', '01JGFC6TG1Q3NRPS9A339147JT.png', '2024-12-31 22:08:30', '2024-12-31 22:08:30'),
(2, 'wea', 'asda', '01JGS8WT6QK8V32M6SC1V5W0D0.jpeg', '2025-01-04 18:23:01', '2025-01-04 18:23:01'),
(3, 'judul', 'Solo - Poros Nasional Pemberantasan Korupsi (PNPK) melaporkan sejumlah menteri hingga kepala daerah ke KPK. Salah satu yang dilaporkan adalah Ganjar Pranowo. Ganjar merespons laporan yang dilakukan Adhie Massardi dan kawan-kawan tersebut.  Ganjar Pranowo dilaporkan atas diduga terlibat dalam korupsi e-KTP. Presidium PNPK, Adhie Massardi, mengatakan KPK seharusnya dapat menuntaskan semua dugaan tersebut, agar nama-nama pejabat itu jika maju dalam Pilpres 2024 bersih.  \"Nah kami berharap dari kasus-kasus ini, sehingga ada sejumlah nama di dalamnya yang kami laporkan itu, contoh misalnya kandidat-kandidat yang ramai sekarang ini di pilpres pertama soal Ganjar Pranowo, apakah benar dia terlibat e-KTP atau tidak, kan ini harus dibahas juga,\" kata Adhie Massardi di Gedung Merah Putih KPK, Jakarta Selatan, Kamis (6/1/2022).  Atas pelaporan yang dilakukan Adhie cs tersebut, Ganjar Pranowo yang kini menjabat Gubernur Jawa Tengah, memberikan respons singkat.  Baca artikel detikedu, \"5 Contoh Teks Berita Dilengkapi Penjelasan dan Strukturnya\" selengkapnya https://www.detik.com/edu/detikpedia/d-5886893/5-contoh-teks-berita-dilengkapi-penjelasan-dan-strukturnya.  Download Apps Detikcom Sekarang https://apps.detik.com/detik/', '01JGS8YHYDFZAZD8DH7STCNMVK.png', '2025-01-04 18:23:58', '2025-01-04 18:23:58'),
(4, 'tgdgdfgdf', 'sfsfsdfsfssf', '01JGS90XXH08SVSVEAJB0ER2A5.jpg', '2025-01-04 18:25:16', '2025-01-04 18:25:16'),
(5, 'sfsfs', 'wdasdsad', '01JGS91KHQ5S01ENR71Z1G3NTG.png', '2025-01-04 18:25:38', '2025-01-04 18:25:38'),
(6, 'afdsfsfs', 'qdqwdqad', '01JGS921DPRT39CARWGHZCZYDB.jpg', '2025-01-04 18:25:52', '2025-01-04 18:25:52'),
(7, 'gdfsgf', 'sfdsdfsd', '01JGS92XV12KBS3N7AV0NS2B9W.png', '2025-01-04 18:26:21', '2025-01-04 18:26:21'),
(8, 'berpisah', '<p><strong><em>Good morning, sleepy<br>Today feels good<br>Like it\'s gonna be a good day, hm<br>Are you up?</em></strong></p><p><br></p><p>(<a href=\"https://filamentphp.com/docs/3.x/forms/fields/rich-editor#uploading-images-to-the-editor\">Aku sudah muak dengan perilakumu)<br>(Kau mempermainkanku, kau bukanlah bonekamu)<br>(Mungkin Tuhan memang tak merestui kita)<br></a><br></p><ol><li>Aku sudah muak dengan perilakumu</li><li>Kau mempermainkanku, kku bukanlah bonekamu</li><li>Kau selalu menyakitiku, kausia-siakan waktuku</li><li>Mungkin Tuhan memang tak merestui kita</li></ol><p><br>Ku ingin kita berpisah<br>Sudah tak ingin bersama lagi<br><br>Di bulan April awal, cerita cinta kita telah usai<br>Waktunya kita berpisah, kita tak bisa bersama<br>Ku ingin engkau pergi, ku tak ingin tersakiti<br>Dan mungkin aku sudah lelah dengan yang tak pasti<br><br>Kalau saja ku bisa berharap<br>Ku tak ingin semua hal ini terjadi<br>Dan semua hal yang t\'lah terucap<br>Tetap \'kan terkenang, sampai jumpa di lain hari<br><br>Ku tak mau, aku tak mau<br>Ku tak ingin disakiti sama kamu<br>Ku trauma dengan kamu<br>Kamu pergi saja, aku tak mampu</p>', '01JHCMCAQSH6WYPRFJPC3SWPMQ.jpg', '2025-01-12 06:49:18', '2025-01-12 06:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_camat`
--

CREATE TABLE `biodata_camat` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_camat`
--

INSERT INTO `biodata_camat` (`id`, `kecamatan`, `nama`, `alamat`, `tempat`, `tanggal_lahir`, `pendidikan`, `foto`, `created_at`, `updated_at`) VALUES
('92a28ebd-5bad-41b3-8b1e-c9a91852fb1d', 'kuala_mandor_b', 'Haji Ahmad, Si.Amd', 'Rasau Jaya', 'Rasau Jaya', '2025-01-09', 'D4', 'biodata-camat/01JHHXPSRQ4ZHE8ASGQ9WPQMEW.jpg', '2025-01-14 08:08:30', '2025-01-14 08:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1735682472),
('1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1735682472;', 1735682472),
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1736664616),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1736664616;', 1736664616),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1737209274),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1737209274;', 1737209274),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1736842168),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1736842168;', 1736842168);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_angkatan_kerja`
--

CREATE TABLE `ekonomi_angkatan_kerja` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekonomi_angkatan_kerja`
--

INSERT INTO `ekonomi_angkatan_kerja` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('13e57a13-3855-4846-8e71-35903be5ab14', 'rasau_jaya', 'bagas', 43, '2025-01-09 00:44:40', '2025-01-09 00:44:40'),
('9da0b44e-6e43-4fe5-aa01-2530fcc7a12f', 'kuala_mandor_b', 'd', 2, '2025-01-09 21:52:54', '2025-01-09 21:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_judul`
--

CREATE TABLE `foto_judul` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_judul`
--

INSERT INTO `foto_judul` (`id`, `kecamatan`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
('20eb00ce-4a70-4e48-b8f5-92b8a225f2b0', 'kuala_mandor_b', '<p>ini adalah kecamatan yang memiliki sekian desa dan<strong> bla bla bla</strong></p>', 'foto-judul/01JHHW3XQ00VJ7ABDKS9JAPPEM.jpg', '2025-01-14 07:40:44', '2025-01-14 07:40:44'),
('bcb711ec-a479-46f4-bcdc-00c940990bbe', 'rasau_jaya', 'asdas', 'foto-judul/01JGFBQPCCAVMG60G9K3RYFKDF.png', '2024-12-31 21:58:19', '2024-12-31 22:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_produksi_perkebunan`
--

CREATE TABLE `hasil_produksi_perkebunan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_perkebunan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_produksi_perkebunan`
--

INSERT INTO `hasil_produksi_perkebunan` (`id`, `kecamatan`, `jenis_perkebunan`, `jumlah`, `created_at`, `updated_at`) VALUES
('39d0e1cc-a276-4cc3-90ce-c8793757f030', 'kuala_mandor_b', 'kpo', 23, '2025-01-09 22:39:25', '2025-01-09 22:39:25'),
('5a251d21-88df-4e06-9acd-f857cda59b30', 'rasau_jaya', 'kopi', 23, '2025-01-07 21:20:36', '2025-01-07 21:20:36'),
('d632d31c-2db7-4af2-bc47-89f4b68c6770', 'kuala_mandor_b', 'dsa', 32, '2025-01-09 21:54:10', '2025-01-09 21:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `jarak_waktu_tempuh`
--

CREATE TABLE `jarak_waktu_tempuh` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jarak_waktu_tempuh`
--

INSERT INTO `jarak_waktu_tempuh` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('d5bd8c2a-eeef-4ea9-a01c-e29cc817d70f', 'kuala_mandor_b', 'sad', 2, NULL, NULL),
('f9c53aef-4d00-4b89-a81e-bc10b2f0c78f', 'rasau_jaya', 'waktu tempuh', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_anak_sekolah`
--

CREATE TABLE `jumlah_anak_sekolah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sd` int DEFAULT NULL,
  `mi` int DEFAULT NULL,
  `sltp` int DEFAULT NULL,
  `mts` int DEFAULT NULL,
  `slta` int DEFAULT NULL,
  `aliyah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_anak_sekolah`
--

INSERT INTO `jumlah_anak_sekolah` (`id`, `kecamatan`, `kategori`, `sd`, `mi`, `sltp`, `mts`, `slta`, `aliyah`, `created_at`, `updated_at`) VALUES
('3c671d05-fac7-4806-9744-2c06c7d30a5d', 'rasau_jaya', 'sekolah_negeri', 23, 12, 43, 2, NULL, NULL, NULL, NULL),
('4c0bdb81-876b-4702-bd8a-5d23289d73e5', 'rasau_jaya', 'sekolah_swasta', 2, 2, 2, 2, NULL, NULL, NULL, NULL),
('6ada0845-1dd3-4a3a-8a5f-b8b63840e6c1', 'kuala_mandor_b', 'sekolah_negeri', 2, 32, 1, 2, 3, 2, NULL, NULL),
('a6e5c267-46ae-473d-8736-14231a7b6a87', 'kuala_mandor_b', 'sekolah_swasta', 30, 30, 30, 30, 30, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_anak_usia_sekolah`
--

CREATE TABLE `jumlah_anak_usia_sekolah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk` int NOT NULL DEFAULT '0',
  `sd` int NOT NULL DEFAULT '0',
  `sltp` int NOT NULL DEFAULT '0',
  `slta` int NOT NULL DEFAULT '0',
  `perguruan_tinggi` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_anak_usia_sekolah`
--

INSERT INTO `jumlah_anak_usia_sekolah` (`id`, `kecamatan`, `kategori`, `tk`, `sd`, `sltp`, `slta`, `perguruan_tinggi`, `created_at`, `updated_at`) VALUES
('2099f151-89c3-4c45-92e5-69dabaa582b2', 'kuala_mandor_b', 'jumlah_anak_putus_sekolah', 32, 2, 2, 45, 32, NULL, NULL),
('3a6203ea-9ac8-40b5-8d40-a05da3611da0', 'rasau_jaya', 'jumlah_anak_sekolah', 23, 21, 32, 2, 3, NULL, NULL),
('da20c51e-d9a2-4500-a682-c1edd9cf7311', 'kuala_mandor_b', 'jumlah_anak_sekolah', 2, 0, 0, 0, 0, NULL, NULL),
('eec1af65-e820-44e9-87b0-de03dcf227f8', 'rasau_jaya', 'jumlah_anak_putus_sekolah', 12, 3, 12, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_angkatan_kerja`
--

CREATE TABLE `jumlah_angkatan_kerja` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_angkatan_kerja`
--

INSERT INTO `jumlah_angkatan_kerja` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('6d067bcf-e519-40c1-aac4-c7e7c26ff4dc', 'rasau_jaya', 'preist', 30, '2025-01-09 00:48:33', '2025-01-09 00:48:33'),
('d117c5ae-068b-439d-af8e-052498d78f7a', 'kuala_mandor_b', 'ada', 2, '2025-01-09 21:57:45', '2025-01-09 21:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_fasilitas_kesehatan`
--

CREATE TABLE `jumlah_fasilitas_kesehatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_fasilitas_kesehatan`
--

INSERT INTO `jumlah_fasilitas_kesehatan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('9dea39ae-c8e8-4d7a-a10e-6ed980b79596', 'rasau_jaya', 'puskesmas', 4, '2025-01-07 23:39:16', '2025-01-07 23:39:16'),
('9dee1b65-6757-4548-a4ee-a0ff2c234c7e', 'kuala_mandor_b', 'asda', 2, '2025-01-09 21:57:54', '2025-01-09 21:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_fasilitas_pendidikan`
--

CREATE TABLE `jumlah_fasilitas_pendidikan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_fasilitas_pendidikan`
--

INSERT INTO `jumlah_fasilitas_pendidikan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('2a5a3b75-f21c-48fb-8c72-e7afea868f35', 'kuala_mandor_b', 'asdsa', 2, NULL, NULL),
('be85b17e-8f3f-4a21-94c9-fdae267115e9', 'rasau_jaya', 'SD', 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_fasilitas_pendukung`
--

CREATE TABLE `jumlah_fasilitas_pendukung` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_fasilitas_pendukung`
--

INSERT INTO `jumlah_fasilitas_pendukung` (`id`, `nama`, `kecamatan`, `jumlah`, `created_at`, `updated_at`) VALUES
('0f6a243e-12fe-44d0-ab51-28adabdcce03', 'olahraga', 'rasau_jaya', 32, '2025-01-08 01:29:37', '2025-01-08 01:29:37'),
('b8d9df77-2d5e-4e5c-b644-a27505c04989', 'asdsa', 'kuala_mandor_b', 2, '2025-01-09 21:58:09', '2025-01-09 21:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_industri_perabotan`
--

CREATE TABLE `jumlah_industri_perabotan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_industri_perabotan`
--

INSERT INTO `jumlah_industri_perabotan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('9dea145e-2e74-4d18-9c30-a0e4219cbdbf', 'rasau_jaya', 'psu', 2, NULL, NULL),
('9dee1b89-0650-4c56-9175-3424eb1c3b9a', 'kuala_mandor_b', 'dasda', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_obyek_wisata`
--

CREATE TABLE `jumlah_obyek_wisata` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obyek` json NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_obyek_wisata`
--

INSERT INTO `jumlah_obyek_wisata` (`id`, `nama_obyek`, `jumlah`, `created_at`, `updated_at`, `kecamatan`) VALUES
('9dea2779-988b-4c00-8410-e3504b6d394c', '[{\"nama\": \"coba\"}, {\"nama\": \"ss\"}, {\"nama\": \"paleto\"}, {\"nama\": \"bay\"}]', 0, '2025-01-07 22:48:21', '2025-01-09 23:24:08', 'rasau_jaya'),
('9dea3625-f353-4999-ada0-5a2714784831', '[{\"nama\": \"sendiri\"}, {\"nama\": \"sa\"}]', 0, '2025-01-07 23:29:23', '2025-01-09 23:24:08', 'rasau_jaya'),
('9df009e1-a25e-48f8-a091-181b956f0cdc', '[{\"nama\": \"sd\"}, {\"nama\": \"sd\"}]', 4, '2025-01-10 21:00:34', '2025-01-10 21:00:34', 'kuala_mandor_b');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_pelanggan_listrik`
--

CREATE TABLE `jumlah_pelanggan_listrik` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_penduduk` int NOT NULL,
  `pln` int NOT NULL,
  `non_pln` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_pelanggan_listrik`
--

INSERT INTO `jumlah_pelanggan_listrik` (`id`, `kecamatan`, `jumlah_penduduk`, `pln`, `non_pln`, `created_at`, `updated_at`) VALUES
('638f7f23-eca7-434f-819d-b3f60a6f6d6b', 'rasau_jaya', 5000, 5000, NULL, NULL, NULL),
('d9f1e2fa-9ad8-46b2-ae22-e344e04e9cdf', 'rasau_jaya', 4312, 456, 34, NULL, NULL),
('ddf52342-3fc7-4617-bd38-fff02bf5cca0', 'kuala_mandor_b', 5000, 3000, 2000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_pemilik_kendaraan`
--

CREATE TABLE `jumlah_pemilik_kendaraan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_pemilik_kendaraan`
--

INSERT INTO `jumlah_pemilik_kendaraan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('0247b572-84eb-4b11-8c7e-f137ba39f531', 'rasau_jaya', 'Roda 4', 2321, NULL, NULL),
('5b5e7d38-d909-48fb-bafa-ed01385ec90b', 'kuala_mandor_b', 'asdas', 2, NULL, NULL),
('67c451f0-7196-4fad-bc72-387c3c3981d8', 'kuala_mandor_b', 'mobil', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_penduduk`
--

CREATE TABLE `jumlah_penduduk` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` int DEFAULT NULL,
  `laki_laki` int DEFAULT NULL,
  `perempuan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_penduduk`
--

INSERT INTO `jumlah_penduduk` (`id`, `kecamatan`, `kk`, `laki_laki`, `perempuan`, `created_at`, `updated_at`) VALUES
('72065c06-1a2f-4759-8c5b-51d94703f418', 'kuala_mandor_b', 43, 3, 40, '2025-01-10 23:28:54', '2025-01-10 23:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_penduduk_miskin`
--

CREATE TABLE `jumlah_penduduk_miskin` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_penduduk` int NOT NULL,
  `jumlah_penduduk_miskin` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_penduduk_miskin`
--

INSERT INTO `jumlah_penduduk_miskin` (`id`, `kecamatan`, `jumlah_penduduk`, `jumlah_penduduk_miskin`, `created_at`, `updated_at`) VALUES
('eb0d7819-f44d-4d14-b56c-5e66bebe7289', 'rasau_jaya', 100, 30, NULL, NULL),
('f7054513-1965-49e6-b139-c1a795154768', 'kuala_mandor_b', 300, 200, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_sanggar_budaya`
--

CREATE TABLE `jumlah_sanggar_budaya` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_sanggar_budaya`
--

INSERT INTO `jumlah_sanggar_budaya` (`id`, `kecamatan`, `nama`, `created_at`, `updated_at`) VALUES
('1b8beb37-f750-4c21-8148-a0cf7f4ef4e9', 'rasau_jaya', 'sd', '2025-01-07 23:33:59', '2025-01-07 23:33:59'),
('8873d1a5-65a5-4a35-8a75-4fd11058bf4a', 'rasau_jaya', 'judas', '2025-01-07 23:35:26', '2025-01-07 23:35:26'),
('bde70301-edd1-407d-85e2-8b62da71911f', 'kuala_mandor_b', 's', '2025-01-09 21:59:15', '2025-01-10 21:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_sarana_ibadah`
--

CREATE TABLE `jumlah_sarana_ibadah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarana_ibadah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_sarana_ibadah`
--

INSERT INTO `jumlah_sarana_ibadah` (`id`, `kecamatan`, `sarana_ibadah`, `jumlah`, `created_at`, `updated_at`) VALUES
('16d7503f-8bd9-41a6-a049-9a19e48133f7', 'rasau_jaya', 'masjid', 2, '2025-01-08 00:53:46', '2025-01-08 00:53:46'),
('d417416f-175d-4244-8429-124122aed7dc', 'kuala_mandor_b', 'asda', 2, '2025-01-09 21:59:23', '2025-01-09 21:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_staff`
--

CREATE TABLE `jumlah_staff` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_staff`
--

INSERT INTO `jumlah_staff` (`id`, `kecamatan`, `jumlah_staff`, `created_at`, `updated_at`) VALUES
('5a5526e6-6cf5-47cb-bbcf-d589597c5b24', 'kuala_mandor_b', '2', NULL, NULL),
('894d252e-d627-4ff6-b060-c0fb59be9b9c', 'rasau_jaya', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_tenaga_guru`
--

CREATE TABLE `jumlah_tenaga_guru` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sd` int DEFAULT NULL,
  `sltp` int DEFAULT NULL,
  `slta` int DEFAULT NULL,
  `negeri` int DEFAULT NULL,
  `swasta` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_tenaga_guru`
--

INSERT INTO `jumlah_tenaga_guru` (`id`, `kecamatan`, `sd`, `sltp`, `slta`, `negeri`, `swasta`, `created_at`, `updated_at`) VALUES
('715ffd48-5011-4614-ac5d-b53cad73e0a5', 'rasau_jaya', 23, 1, 2, 0, 0, NULL, NULL),
('9c4583df-42aa-4962-8dbe-22e000837d00', 'kuala_mandor_b', 2, 2, 3, 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_tenaga_guru_menurut_pendidikan`
--

CREATE TABLE `jumlah_tenaga_guru_menurut_pendidikan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_tenaga_guru_menurut_pendidikan`
--

INSERT INTO `jumlah_tenaga_guru_menurut_pendidikan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('5b576bf4-8e2a-4eb1-97d9-611013e99920', 'kuala_mandor_b', 'asdas', 2, NULL, NULL),
('e494f8f0-0765-420b-a453-bc06fb28e6d8', 'rasau_jaya', 'D1', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_tenaga_kesehatan`
--

CREATE TABLE `jumlah_tenaga_kesehatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_tenaga_kesehatan`
--

INSERT INTO `jumlah_tenaga_kesehatan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('70d3e508-387f-4f63-83ca-f6b4fdeafe50', 'kuala_mandor_b', 'asd', 23, NULL, NULL),
('7fe5c455-df34-4049-b9ae-6b42645da4c1', 'rasau_jaya', 'dokter', 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_penyelenggara`
--

CREATE TABLE `kategori_penyelenggara` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_penyelenggara`
--

INSERT INTO `kategori_penyelenggara` (`id`, `nama_penyelenggara`, `created_at`, `updated_at`) VALUES
(1, 'musyawarah', NULL, NULL),
(2, 'baku hantam', '2025-01-01 21:09:57', '2025-01-01 21:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'rasau_jaya', NULL, NULL),
(2, 'terentang', NULL, NULL),
(3, 'sungai_raya', '2025-01-01 19:32:50', '2025-01-01 19:32:50'),
(4, 'kuala_mandor_b', '2025-01-09 20:19:57', '2025-01-09 20:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'MUSYAWARAH', '2024-12-30 21:33:49', '2024-12-30 21:33:49'),
(2, 'olahraga', '2024-12-30 21:33:54', '2024-12-30 21:33:54'),
(3, 'kerja bakti', '2024-12-30 21:54:46', '2024-12-30 21:54:46'),
(4, 'peremajaan', '2025-01-01 19:41:20', '2025-01-01 19:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_laporan_pivot`
--

CREATE TABLE `kegiatan_laporan_pivot` (
  `id` bigint UNSIGNED NOT NULL,
  `laporan_camat_id` bigint UNSIGNED NOT NULL,
  `kegiatan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_laporan_pivot`
--

INSERT INTO `kegiatan_laporan_pivot` (`id`, `laporan_camat_id`, `kegiatan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 3, 3, NULL, NULL),
(5, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lahan_garapan`
--

CREATE TABLE `lahan_garapan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padi` double DEFAULT NULL,
  `jagung` double DEFAULT NULL,
  `ubi_kayu` double DEFAULT NULL,
  `kacang_panjang` double DEFAULT NULL,
  `kangkung` double DEFAULT NULL,
  `cabe` double DEFAULT NULL,
  `jeruk_nipis` double DEFAULT NULL,
  `terong` double DEFAULT NULL,
  `mentimun` double DEFAULT NULL,
  `talas` double DEFAULT NULL,
  `tomat` double DEFAULT NULL,
  `kacang_tahan` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lahan_garapan`
--

INSERT INTO `lahan_garapan` (`id`, `kecamatan`, `padi`, `jagung`, `ubi_kayu`, `kacang_panjang`, `kangkung`, `cabe`, `jeruk_nipis`, `terong`, `mentimun`, `talas`, `tomat`, `kacang_tahan`, `created_at`, `updated_at`) VALUES
('6d6b4657-e0ae-46f2-9cf0-7ea3d54195ce', 'kuala_mandor_b', 32, 21, 43, 43, 21, 54, 234, 23, 22, 434, 455, 3, '2025-01-11 00:12:52', '2025-01-11 00:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_camat`
--

CREATE TABLE `laporan_camat` (
  `id` bigint UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_pelaksanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `kendala` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_camat`
--

INSERT INTO `laporan_camat` (`id`, `kecamatan`, `penyelenggara_id`, `tanggal`, `waktu`, `bulan`, `tahun`, `tempat_pelaksanaan`, `keterangan`, `kendala`, `created_at`, `updated_at`) VALUES
(1, 'rasau_jaya', 1, '2024-12-19', '13:30:00', '12', '2001', 'ruang skb', 'sad', 'asdas', '2024-12-30 21:36:09', '2024-12-30 21:36:09'),
(2, 'rasau_jaya', 1, '2024-12-04', '02:00:00', '5', '2023', 'skb', NULL, NULL, '2024-12-30 21:57:09', '2024-12-30 21:57:09'),
(3, 'rasau_jaya', 1, '2024-12-19', '12:00:00', '12', '2001', 'rumah', NULL, NULL, '2024-12-30 21:59:02', '2024-12-30 21:59:02'),
(4, 'kuala_mandor_b', 2, '2025-01-08', '15:00:00', '1', '2025', 'ruang skb', 'sad', 'asdas', '2025-01-11 00:22:27', '2025-01-11 00:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_harian_camat`
--

CREATE TABLE `laporan_harian_camat` (
  `id` bigint UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` int NOT NULL,
  `tahun` int NOT NULL,
  `penyelenggara_id` bigint UNSIGNED NOT NULL,
  `bobot` int NOT NULL,
  `capai` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_harian_camat`
--

INSERT INTO `laporan_harian_camat` (`id`, `kecamatan`, `bulan`, `tahun`, `penyelenggara_id`, `bobot`, `capai`, `jumlah`, `created_at`, `updated_at`) VALUES
(4, 'sungai_raya', 1, 2024, 2, 15, 15, 15, '2025-01-01 21:44:20', '2025-01-01 21:44:20'),
(5, 'sungai_raya', 1, 2024, 1, 10, 10, 10, '2025-01-01 21:44:40', '2025-01-01 21:44:40'),
(6, 'sungai_raya', 1, 2025, 2, 14, 42, 23, '2025-01-01 21:49:46', '2025-01-01 21:49:46'),
(7, 'sungai_raya', 1, 2025, 1, 54, 43, 34, '2025-01-01 21:50:04', '2025-01-01 21:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kegiatan`
--

CREATE TABLE `laporan_kegiatan` (
  `id` bigint UNSIGNED NOT NULL,
  `laporan_harian_camat_id` bigint UNSIGNED NOT NULL,
  `kegiatan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_kegiatan`
--

INSERT INTO `laporan_kegiatan` (`id`, `laporan_harian_camat_id`, `kegiatan_id`, `created_at`, `updated_at`) VALUES
(5, 4, 1, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 6, 1, NULL, NULL),
(8, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `luas_hutan_menurut_penggunaan`
--

CREATE TABLE `luas_hutan_menurut_penggunaan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hutan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tidak ada',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_hutan_menurut_penggunaan`
--

INSERT INTO `luas_hutan_menurut_penggunaan` (`id`, `kecamatan`, `jenis_hutan`, `status`, `created_at`, `updated_at`) VALUES
('517f1e69-2804-4d42-826a-c0b0fb7de484', 'rasau_jaya', 'lindung', 'Ada', '2025-01-07 21:27:08', '2025-01-07 21:27:08'),
('5c900ecc-b7a9-42b0-b1fe-caa8a71848cd', 'kuala_mandor_b', 'negara', 'Ada', '2025-01-09 22:00:06', '2025-01-09 22:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `luas_hutan_menurut_status`
--

CREATE TABLE `luas_hutan_menurut_status` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hutan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_hutan_menurut_status`
--

INSERT INTO `luas_hutan_menurut_status` (`id`, `kecamatan`, `jenis_hutan`, `jumlah`, `created_at`, `updated_at`) VALUES
('775f8f4e-d1c6-458c-83df-bc7b899d0021', 'kuala_mandor_b', 'lindung', 32, '2025-01-09 22:00:14', '2025-01-09 22:00:14'),
('ab054574-9319-4588-8b88-5795b511cc87', 'rasau_jaya', 'ww', 23, '2025-01-07 21:32:33', '2025-01-07 21:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `luas_kepadatan`
--

CREATE TABLE `luas_kepadatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `luas` double DEFAULT NULL,
  `kepadatan` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_kepadatan`
--

INSERT INTO `luas_kepadatan` (`id`, `kecamatan`, `jumlah`, `luas`, `kepadatan`, `created_at`, `updated_at`) VALUES
('345a60a9-9ff6-4f1d-b624-a0b52d50efcb', 'kuala_mandor_b', 4535, 231, 2, '2025-01-10 23:29:25', '2025-01-10 23:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `luas_wilayah`
--

CREATE TABLE `luas_wilayah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daratan` double DEFAULT NULL,
  `perairan` double DEFAULT NULL,
  `khusus` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_wilayah`
--

INSERT INTO `luas_wilayah` (`id`, `kecamatan`, `daratan`, `perairan`, `khusus`, `created_at`, `updated_at`) VALUES
('89df5cd3-9f42-4de6-9be7-53539b8e35a2', 'kuala_mandor_b', 23, 34, 21, '2025-01-10 23:11:09', '2025-01-10 23:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_13_192747_create_beritas_table', 1),
(5, '2024_12_16_211411_create_kategori_penyelenggaras_table', 1),
(6, '2024_12_16_211511_create_kegiatans_table', 1),
(7, '2024_12_16_211608_create_laporan_harian_camats_table', 1),
(8, '2024_12_16_213050_create_laporan_kegiatan_table', 1),
(9, '2024_12_22_191743_create_luas_wilayahs_table', 1),
(10, '2024_12_23_031144_create_batas_wilayahs_table', 1),
(11, '2024_12_23_034500_create_jumlah_penduduks_table', 1),
(12, '2024_12_23_042847_create_luas_kepadatans_table', 1),
(13, '2024_12_23_045825_create_penduduk_umurs_table', 1),
(14, '2024_12_23_201731_create_pekerjaan_penduduks_table', 1),
(15, '2024_12_23_211153_create_penduduk_pendidikans_table', 1),
(16, '2024_12_23_220258_create_penduduk_agamas_table', 1),
(17, '2024_12_24_000538_create_penduduk_sukus_table', 1),
(18, '2024_12_24_003504_create_penduduk_pertumbuhans_table', 1),
(19, '2024_12_24_011204_create_lahan_garapans_table', 1),
(20, '2024_12_24_014003_create_penggunaan_tanahs_table', 1),
(21, '2024_12_25_163532_create_kecamatans_table', 1),
(22, '2024_12_25_163624_add_role_and_kecamatan_id_to_users_table', 1),
(23, '2024_12_27_024810_add_is_admin_to_users', 1),
(24, '2024_12_29_042109_create_laporan_camats_table', 1),
(25, '2024_12_31_040455_create_kegiatan_laporan_pivot_table', 1),
(26, '2025_01_01_043308_create_foto_juduls_table', 2),
(27, '2025_01_01_044905_add_kecamatan_to_table_judul_foto', 3),
(28, '2025_01_01_053030_create_profiles_table', 4),
(29, '2025_01_05_005029_create_sliders_table', 5),
(30, '2025_01_06_170348_create_ternak_kecils_table', 6),
(31, '2025_01_06_170944_add_kecamatan_to_table_ternak_kecil', 7),
(32, '2025_01_06_172729_create_ternak_besars_table', 8),
(33, '2025_01_06_174329_create_ternak_unggas_table', 9),
(34, '2025_01_06_180012_create_usaha_peternakans_table', 10),
(35, '2025_01_08_033536_create_alat_tangkaps_table', 11),
(36, '2025_01_08_034102_create_perikanan_darats_table', 12),
(37, '2025_01_08_035747_create_tanah_perkebunans_table', 13),
(38, '2025_01_08_041553_create_hasil_produksi_perkebunans_table', 14),
(39, '2025_01_08_042223_create_luas_hutan_menurut_penggunaans_table', 15),
(40, '2025_01_08_042812_create_luas_hutan_menurut_statuses_table', 16),
(41, '2025_01_08_043322_create_tambang_galians_table', 17),
(42, '2025_01_08_043832_create_usaha_tambang_galians_table', 18),
(43, '2025_01_08_044343_create_pengelolaan_pangans_table', 19),
(44, '2025_01_08_044939_create_jumlah_indurstri_perabotans_table', 20),
(45, '2025_01_08_045645_create_aktivitas_perekonomians_table', 21),
(46, '2025_01_08_050233_create_jumlah_obyek_wisatas_table', 22),
(47, '2025_01_08_051143_add_kecamatan_to_table_jumlah_obyek', 23),
(48, '2025_01_08_063035_create_jumlah_sanggar_budayas_table', 24),
(49, '2025_01_08_063617_create_jumlah_fasilitas_kesehatans_table', 25),
(50, '2025_01_08_073559_create_jumlah_tenaga_kesehatans_table', 26),
(51, '2025_01_08_074739_create_jumlah_sarana_ibadags_table', 27),
(52, '2025_01_08_075434_create_air_bersihs_table', 28),
(53, '2025_01_08_080023_create_panjang_jalans_table', 29),
(54, '2025_01_08_081154_create_jumlah_fasilitas_pendukungs_table', 30),
(55, '2025_01_09_073719_create_ekonomi_angkatan_kerjas_table', 31),
(56, '2025_01_09_074527_create_jumlah_angkatan_kerjas_table', 32),
(57, '2025_01_09_081334_create_jumlah_pelanggan_listriks_table', 33),
(58, '2025_01_09_082927_create_jumlah_penduduk_miskins_table', 34),
(59, '2025_01_09_084453_create_jumlah_fasilitas_pendidikans_table', 35),
(60, '2025_01_09_085029_create_jumlah_anak_usia_sekolahs_table', 36),
(61, '2025_01_09_090737_create_jumlah_anak_sekolahs_table', 37),
(62, '2025_01_09_094438_create_jumlah_tenaga_gurus_table', 38),
(63, '2025_01_09_095136_create_jumlah_tenaga_guru_menurut_pendidikans_table', 39),
(64, '2025_01_09_095604_create_jumlah_pemilik_kendaraans_table', 40),
(65, '2025_01_09_100220_create_jarak_waktu_tempuhs_table', 41),
(66, '2025_01_09_100737_create_sarana_telekomunikasis_table', 42),
(67, '2025_01_09_101319_create_prasarana_pemerintah_desas_table', 43),
(68, '2025_01_09_101753_create_pemerintahan_kecamatans_table', 44),
(69, '2025_01_09_104006_create_tingkat_pendidikan_aparat_kecamatans_table', 45),
(70, '2025_01_09_104618_create_pangkatdan_golongans_table', 46),
(71, '2025_01_09_105753_create_jumlah_staff_table', 47),
(72, '2025_01_09_110143_create_prasarana_pemerintahans_table', 48),
(73, '2025_01_09_111032_create_pelaksanaan_profil_kecamatans_table', 49),
(74, '2025_01_09_111405_create_tanah_pemda_di_kecamatans_table', 50),
(75, '2025_01_14_145904_create_biodata_camats_table', 51);

-- --------------------------------------------------------

--
-- Table structure for table `pangkatdan_golongan`
--

CREATE TABLE `pangkatdan_golongan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i` int DEFAULT NULL,
  `ii` int DEFAULT NULL,
  `iii` int DEFAULT NULL,
  `iv` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pangkatdan_golongan`
--

INSERT INTO `pangkatdan_golongan` (`id`, `kecamatan`, `i`, `ii`, `iii`, `iv`, `created_at`, `updated_at`) VALUES
('7de061d7-b178-4505-a245-f3b03ff65b09', 'kuala_mandor_b', 2, 2, 2, NULL, NULL, NULL),
('a7b18a72-97ad-4e6a-bb65-539331257d2f', 'rasau_jaya', 2, 3, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `panjang_jalan`
--

CREATE TABLE `panjang_jalan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panjang` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panjang_jalan`
--

INSERT INTO `panjang_jalan` (`id`, `kecamatan`, `nama`, `panjang`, `created_at`, `updated_at`) VALUES
('5968d8ec-9279-4656-b35f-915cdcb13043', 'rasau_jaya', 'Di Aspal', 32134, '2025-01-08 01:06:52', '2025-01-08 01:06:52'),
('e274d082-1358-4c28-ade6-198cbd9ec8ce', 'kuala_mandor_b', 'asdsa', 2, '2025-01-09 22:00:34', '2025-01-09 22:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan_penduduk`
--

CREATE TABLE `pekerjaan_penduduk` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pns` int DEFAULT NULL,
  `tni` int DEFAULT NULL,
  `polri` int DEFAULT NULL,
  `petani` int DEFAULT NULL,
  `nelayan` int DEFAULT NULL,
  `pedagang` int DEFAULT NULL,
  `buruh` int DEFAULT NULL,
  `lain` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan_penduduk`
--

INSERT INTO `pekerjaan_penduduk` (`id`, `kecamatan`, `pns`, `tni`, `polri`, `petani`, `nelayan`, `pedagang`, `buruh`, `lain`, `created_at`, `updated_at`) VALUES
('b592bb7a-65a2-4783-8e35-898e3be69824', 'kuala_mandor_b', 43, 43, 786, 64, 73, 83, 3, 2, '2025-01-10 23:55:20', '2025-01-10 23:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_profil_kecamatan`
--

CREATE TABLE `pelaksanaan_profil_kecamatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelaksanaan_profil_kecamatan`
--

INSERT INTO `pelaksanaan_profil_kecamatan` (`id`, `kecamatan`, `uraian`, `keterangan`, `created_at`, `updated_at`) VALUES
('175e76ea-03df-4e9d-8d6b-dfcea80fe34f', 'kuala_mandor_b', 'kodam', 'sad', NULL, NULL),
('8f3d081a-5158-4ee4-ab8d-b9b0fb7a6f8d', 'rasau_jaya', 'kodam', 'siap', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemerintahan_kecamatan`
--

CREATE TABLE `pemerintahan_kecamatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekcam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemerintahan_kecamatan`
--

INSERT INTO `pemerintahan_kecamatan` (`id`, `kecamatan`, `camat`, `sekcam`, `staff`, `jumlah`, `created_at`, `updated_at`) VALUES
('328819c6-afbb-4d8e-8e4a-3373ec68368d', 'kuala_mandor_b', 'terisi', 'terisi', 'kosong', 23, NULL, NULL),
('9162f0bf-9a0f-4859-93dd-b883e0269430', 'rasau_jaya', 'terisi', 'terisi', 'kosong', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_agama`
--

CREATE TABLE `penduduk_agama` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `islam` int DEFAULT NULL,
  `kristen` int DEFAULT NULL,
  `katolik` int DEFAULT NULL,
  `hindu` int DEFAULT NULL,
  `budha` int DEFAULT NULL,
  `konghucu` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk_agama`
--

INSERT INTO `penduduk_agama` (`id`, `kecamatan`, `islam`, `kristen`, `katolik`, `hindu`, `budha`, `konghucu`, `created_at`, `updated_at`) VALUES
('1df7e273-18f1-47bd-b099-546e5d3ad845', 'kuala_mandor_b', 3, 3, 2, 1, 1, 43, '2025-01-10 23:56:58', '2025-01-10 23:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_pendidikan`
--

CREATE TABLE `penduduk_pendidikan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidak_sekolah` int DEFAULT NULL,
  `sd` int DEFAULT NULL,
  `smp` int DEFAULT NULL,
  `sma` int DEFAULT NULL,
  `akademi` int DEFAULT NULL,
  `universitas` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk_pendidikan`
--

INSERT INTO `penduduk_pendidikan` (`id`, `kecamatan`, `tidak_sekolah`, `sd`, `smp`, `sma`, `akademi`, `universitas`, `created_at`, `updated_at`) VALUES
('706506ed-9751-489f-9cfb-f68d097fe22e', 'kuala_mandor_b', 32, 32, 32, 1, 32, 3, '2025-01-11 00:07:11', '2025-01-11 00:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_pertumbuhan`
--

CREATE TABLE `penduduk_pertumbuhan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_penduduk_thn_ini` int DEFAULT NULL,
  `jumlah_penduduk_thn_lalu` int DEFAULT NULL,
  `pertumbuhan` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk_pertumbuhan`
--

INSERT INTO `penduduk_pertumbuhan` (`id`, `kecamatan`, `jumlah_penduduk_thn_ini`, `jumlah_penduduk_thn_lalu`, `pertumbuhan`, `created_at`, `updated_at`) VALUES
('6a0c5312-cf70-4a45-a340-57837f4355d1', 'kuala_mandor_b', 200, 10, 45.5, '2025-01-11 00:02:18', '2025-01-11 00:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_suku`
--

CREATE TABLE `penduduk_suku` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawa` int DEFAULT NULL,
  `melayu` int DEFAULT NULL,
  `bugis` int DEFAULT NULL,
  `dayak` int DEFAULT NULL,
  `cina` int DEFAULT NULL,
  `sunda` int DEFAULT NULL,
  `batak` int DEFAULT NULL,
  `madura` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk_suku`
--

INSERT INTO `penduduk_suku` (`id`, `kecamatan`, `jawa`, `melayu`, `bugis`, `dayak`, `cina`, `sunda`, `batak`, `madura`, `created_at`, `updated_at`) VALUES
('9df04a72-e946-442e-91f1-d9f5460505f2', 'kuala_mandor_b', 32, 32, 32, 32, 32, 32, 32, 1, '2025-01-11 00:01:07', '2025-01-11 00:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_umur`
--

CREATE TABLE `penduduk_umur` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_0_4thn` int DEFAULT NULL,
  `thn_5_9thn` int DEFAULT NULL,
  `thn_10_14thn` int DEFAULT NULL,
  `thn_15_19thn` int DEFAULT NULL,
  `thn_20_24thn` int DEFAULT NULL,
  `thn_25_29thn` int DEFAULT NULL,
  `thn_30_34thn` int DEFAULT NULL,
  `thn_35_39thn` int DEFAULT NULL,
  `thn_40_59thn` int DEFAULT NULL,
  `thn_60thn` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk_umur`
--

INSERT INTO `penduduk_umur` (`id`, `kecamatan`, `thn_0_4thn`, `thn_5_9thn`, `thn_10_14thn`, `thn_15_19thn`, `thn_20_24thn`, `thn_25_29thn`, `thn_30_34thn`, `thn_35_39thn`, `thn_40_59thn`, `thn_60thn`, `created_at`, `updated_at`) VALUES
('9df04746-a643-4440-8a2f-2d6db818476a', 'kuala_mandor_b', 32, 21, 32, 32, 45, 31, 24, 34, 21, 5, '2025-01-10 23:52:15', '2025-01-10 23:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `pengelolaan_pangan`
--

CREATE TABLE `pengelolaan_pangan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelolaan_pangan`
--

INSERT INTO `pengelolaan_pangan` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('9dea118d-3787-45dd-90be-243b517de541', 'rasau_jaya', 'coklat', NULL, '2025-01-07 21:47:03', '2025-01-07 21:47:03'),
('9dea119b-f921-4928-a170-53702364f32f', 'rasau_jaya', 'rwe', 2, '2025-01-07 21:47:13', '2025-01-07 21:47:13'),
('9dee1c83-632d-40e5-ad68-b4ee90ad0b49', 'kuala_mandor_b', 'asdsa', 23, '2025-01-09 22:01:01', '2025-01-09 22:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_tanah`
--

CREATE TABLE `penggunaan_tanah` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanah_sawah` double DEFAULT NULL,
  `tanah_kering` double DEFAULT NULL,
  `tanah_basah` double DEFAULT NULL,
  `tanah_perkebunan` double DEFAULT NULL,
  `tanah_fasilitas` double DEFAULT NULL,
  `tanah_hutan` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunaan_tanah`
--

INSERT INTO `penggunaan_tanah` (`id`, `kecamatan`, `tanah_sawah`, `tanah_kering`, `tanah_basah`, `tanah_perkebunan`, `tanah_fasilitas`, `tanah_hutan`, `created_at`, `updated_at`) VALUES
('d58b4f68-94ee-4b54-ba2b-92eb76cc11aa', 'kuala_mandor_b', 43, 43, 43, 43, 4, 3, '2025-01-11 00:16:41', '2025-01-11 00:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `perikanan_darat`
--

CREATE TABLE `perikanan_darat` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perairan` double DEFAULT NULL,
  `tambak` double DEFAULT NULL,
  `kolam` double DEFAULT NULL,
  `mina_padi` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perikanan_darat`
--

INSERT INTO `perikanan_darat` (`id`, `kecamatan`, `perairan`, `tambak`, `kolam`, `mina_padi`, `created_at`, `updated_at`) VALUES
('4388ff0d-062c-4f7f-a10d-fd26d81003c1', 'kuala_mandor_b', 2, 2, 2, 2, '2025-01-09 22:01:11', '2025-01-09 22:01:11'),
('5932995a-7664-4874-ac3a-dd7b98c2f211', 'rasau_jaya', 23.4, 12.2, 23, 2, '2025-01-07 20:47:09', '2025-01-07 20:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_pemerintahan`
--

CREATE TABLE `prasarana_pemerintahan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `baik` int DEFAULT NULL,
  `ringan` int DEFAULT NULL,
  `berat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prasarana_pemerintahan`
--

INSERT INTO `prasarana_pemerintahan` (`id`, `kecamatan`, `nama`, `jumlah`, `baik`, `ringan`, `berat`, `created_at`, `updated_at`) VALUES
('345dd576-4325-403a-9d81-acf4da666fc8', 'rasau_jaya', 'Laut api', 4, 2, NULL, NULL, NULL, NULL),
('c97b09cc-8c1e-4a9c-a629-87e05977f9c4', 'kuala_mandor_b', 's', 32, 2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_pemerintah_desa`
--

CREATE TABLE `prasarana_pemerintah_desa` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prasarana_pemerintah_desa`
--

INSERT INTO `prasarana_pemerintah_desa` (`id`, `kecamatan`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
('a76bd9bd-aee3-4df2-9aca-524a0a0aab7e', 'rasau_jaya', 'balai desa', 'Tidak Tersedia', NULL, NULL),
('b6acfdb5-e64a-448f-9792-ae158431bd19', 'kuala_mandor_b', 'asdas', 'Tersedia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dasar_hukum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koordinat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peta_resmi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `kode`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `tahun`, `dasar_hukum`, `koordinat`, `peta_resmi`, `utara`, `timur`, `selatan`, `barat`, `created_at`, `updated_at`) VALUES
('a07db975-7b8e-410d-9184-31af08fbc486', '543', 'dggf', 'sungai_ambawang', 'kubu raya', 'kalimantan barat', '2025', 'uu kip2', '43', 'Tidak Ada', '32', '21', '23', '12', '2025-01-04 18:04:03', '2025-01-04 18:04:03'),
('fc93a439-e8a8-47f5-9125-ac2567b50cba', '43sd', 'rasau jaya i', 'rasau_jaya', 'kubu raya', 'kalimantan barat', '2024', 'uu kip2', '43', 'Ada', '32', '21', '23', '12', '2024-12-31 22:45:49', '2024-12-31 22:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_telekomunikasi`
--

CREATE TABLE `sarana_telekomunikasi` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana_telekomunikasi`
--

INSERT INTO `sarana_telekomunikasi` (`id`, `kecamatan`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES
('776f995c-0f2a-4e16-a083-deaa6a8700f8', 'rasau_jaya', 23, NULL, NULL, NULL),
('efb832da-6811-456c-920e-167d6d4bc223', 'kuala_mandor_b', 23, 'sad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HwBEINcWppYMCGrG8CeK6Bvcyo2h0xrzicYsuP80', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNkNpb0oxN1ladHlEckgzTnoxRWNraU9rSlhMSUpVcFVjN1lqcGtpeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWNhbWF0YW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkTEFCWFpsaWpaOHYvZTJ6aVVFcGdXLmV6RUxJbnZRbEdJQ29NSEE4U2t6cG8wUFZvNkpIcDYiO30=', 1737210144);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'baner1', '01JHCJ10351K4X389BRHDX0681.png', '2025-01-12 06:08:09', '2025-01-12 06:08:09'),
(3, 'banner2', '01JHCJ1MSTHBZ6WVGXAF2ZSEZQ.png', '2025-01-12 06:08:31', '2025-01-12 06:08:31'),
(4, 'banner3', '01JHCJ27STVF252FMFHPB3592B.png', '2025-01-12 06:08:50', '2025-01-12 06:08:50'),
(5, 'asda', '01JHCM512SWQ9DQC3TJ00MGJKG.jpg', '2025-01-12 06:45:19', '2025-01-12 06:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `tambang_galian`
--

CREATE TABLE `tambang_galian` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tambang_galian`
--

INSERT INTO `tambang_galian` (`id`, `kecamatan`, `nama`, `status`, `created_at`, `updated_at`) VALUES
('9dea0e1a-fa2f-444a-9a10-5b5dab28d855', 'rasau_jaya', 'persuasu', 'ADA', '2025-01-07 21:37:25', '2025-01-07 21:37:25'),
('9dee1cd0-321b-462d-883a-d552e5f61028', 'kuala_mandor_b', 's', 'Tidak ADA', '2025-01-09 22:01:51', '2025-01-09 22:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tanah_pemda_di_kecamatan`
--

CREATE TABLE `tanah_pemda_di_kecamatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `sertifikat` int DEFAULT NULL,
  `skt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanah_pemda_di_kecamatan`
--

INSERT INTO `tanah_pemda_di_kecamatan` (`id`, `kecamatan`, `uraian`, `jumlah`, `sertifikat`, `skt`, `created_at`, `updated_at`) VALUES
('4cdbf871-791f-470f-bdb4-98b0f3522b36', 'rasau_jaya', 'pspsp', 34.2, 2, 2, NULL, NULL),
('b4cc420d-9971-455e-857b-1250beb5166b', 'kuala_mandor_b', 'pspsp', 32, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tanah_perkebunan`
--

CREATE TABLE `tanah_perkebunan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelapa` double DEFAULT NULL,
  `karet` double DEFAULT NULL,
  `kelapa_sawit` double DEFAULT NULL,
  `coklat` double DEFAULT NULL,
  `tebu` double DEFAULT NULL,
  `pinang` double DEFAULT NULL,
  `sagu` double DEFAULT NULL,
  `pala` double DEFAULT NULL,
  `kopi` double DEFAULT NULL,
  `sahang` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanah_perkebunan`
--

INSERT INTO `tanah_perkebunan` (`id`, `kecamatan`, `kelapa`, `karet`, `kelapa_sawit`, `coklat`, `tebu`, `pinang`, `sagu`, `pala`, `kopi`, `sahang`, `created_at`, `updated_at`) VALUES
('1cf0fff9-0d1a-425c-9c90-7a6896bf51c7', 'rasau_jaya', 23, 45, 23.4, 3423.3, 21.34, 34, NULL, NULL, NULL, NULL, '2025-01-07 21:07:48', '2025-01-07 21:07:48'),
('552b4b96-b639-4e7c-8832-a1af720699de', 'kuala_mandor_b', 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-09 22:02:14', '2025-01-09 22:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `ternak_besar`
--

CREATE TABLE `ternak_besar` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sapi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerbau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kuda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ternak_besar`
--

INSERT INTO `ternak_besar` (`id`, `kecamatan`, `sapi`, `kerbau`, `kuda`, `created_at`, `updated_at`) VALUES
('257290dc-c351-4d70-906b-04c14a064f9c', 'kuala_mandor_b', '2', '2', '2', '2025-01-09 22:02:24', '2025-01-09 22:02:24'),
('b19c2ac6-f9e3-45e8-971a-5dc506c2a20d', 'rasau_jaya', '23', NULL, '3', '2025-01-06 10:39:08', '2025-01-06 10:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `ternak_kecil`
--

CREATE TABLE `ternak_kecil` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kambing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domba` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ternak_kecil`
--

INSERT INTO `ternak_kecil` (`id`, `kambing`, `babi`, `domba`, `created_at`, `updated_at`, `kecamatan`) VALUES
('c3e45f3e-4020-49f0-8467-f117aee1f2b9', '23', '34', '1', '2025-01-06 10:22:28', '2025-01-06 10:22:28', 'rasau_jaya'),
('ec23a9ba-ae41-40b9-8e38-5255a3ee2956', '2', '2', '2', '2025-01-09 21:26:21', '2025-01-09 21:26:21', 'kuala_mandor_b');

-- --------------------------------------------------------

--
-- Table structure for table `ternak_unggas`
--

CREATE TABLE `ternak_unggas` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayam_kampung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ayam_ras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bebek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angsa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelinci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ternak_unggas`
--

INSERT INTO `ternak_unggas` (`id`, `kecamatan`, `ayam_kampung`, `ayam_ras`, `bebek`, `angsa`, `kelinci`, `created_at`, `updated_at`) VALUES
('99c475ec-a8fc-4e8c-ad5e-b879e9d73e92', 'kuala_mandor_b', '2', '2', '2', '2', '2', '2025-01-09 22:02:35', '2025-01-09 22:02:35'),
('c9317423-8c05-4539-bb75-a250b7d51f71', 'rasau_jaya', '23', '23', '23', '13', NULL, '2025-01-06 10:56:17', '2025-01-06 10:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_pendidikan_aparat_kecamatan`
--

CREATE TABLE `tingkat_pendidikan_aparat_kecamatan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkat_pendidikan_aparat_kecamatan`
--

INSERT INTO `tingkat_pendidikan_aparat_kecamatan` (`id`, `kecamatan`, `nama`, `tingkat_pendidikan`, `created_at`, `updated_at`) VALUES
('3b346775-c198-4f3f-b7a7-16b4c4feaf32', 'kuala_mandor_b', 's', 'SLTP', NULL, NULL),
('fb1c50a8-ef5a-4a39-8165-e2b4ff1340cd', 'rasau_jaya', 'Sekcam', 'S2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usaha_peternakan`
--

CREATE TABLE `usaha_peternakan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peternakan_besar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peternakan_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ternak_unggas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemotongan_ayam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pakan_ternak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usaha_bibit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usaha_peternakan`
--

INSERT INTO `usaha_peternakan` (`id`, `kecamatan`, `peternakan_besar`, `peternakan_kecil`, `ternak_unggas`, `pemotongan_ayam`, `pakan_ternak`, `usaha_bibit`, `created_at`, `updated_at`) VALUES
('2b7af311-57a2-462a-b61d-cfd2c778c540', 'rasau_jaya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', '2025-01-06 11:09:05', '2025-01-06 11:09:05'),
('655e88dc-b168-42c0-b6c9-3d2d7ffb9355', 'kuala_mandor_b', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', '2025-01-09 22:02:55', '2025-01-09 22:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `usaha_tambang_galian`
--

CREATE TABLE `usaha_tambang_galian` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usaha_tambang_galian`
--

INSERT INTO `usaha_tambang_galian` (`id`, `kecamatan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
('9dea100a-c1c9-4d06-aa0c-ca13cc04e51a', 'rasau_jaya', 'boxit', '23', '2025-01-07 21:42:50', '2025-01-07 21:42:50'),
('9dee1d3e-8bac-45ff-acb7-43d80047b0a3', 'kuala_mandor_b', 'asdas', '32', '2025-01-09 22:03:04', '2025-01-09 22:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'kecamatan',
  `kecamatan_id` bigint UNSIGNED DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `kecamatan_id`, `is_admin`) VALUES
(2, 'terentang', 'terentang@example.com', '2024-12-30 21:23:33', '$2y$12$TIVMYVJ1UrigkKCJYyTd0.YkyH6dBLRNcLU7H6m4AKXzqmqJjDC6K', 'fO3zxx25Sx5IUOdtMCoharCwxF1b294Yqlvw8ZiAC4PswBhUHupLJggUvdhY', '2024-12-30 21:23:33', '2024-12-30 21:23:33', 'kecamatan', 2, 0),
(3, 'user', 'user@example.com', '2024-12-30 21:23:47', '$2y$12$bxVTP2q0I7QmEU3UzirageB0nImVVlrA3ErGZqve5JspY7E5pU3I6', '3owHTyaO8sflHlsqlbIAsjv9SLoUxvDJCvXXtvv7t2meIhMUNCeoYKak19fb', '2024-12-30 21:23:47', '2024-12-30 21:23:47', 'admin', NULL, 1),
(4, 'rasau jaya', 'rasau@example.com', NULL, '$2y$12$LABXZlijZ8v/e2ziUEpgW.ezELInvQlGICoMHA8Skzpo0PVo6JHp6', NULL, '2024-12-30 21:26:24', '2024-12-30 21:26:24', 'kecamatan', 1, 0),
(5, 'kuala mandor b', 'kuala@example.com', NULL, '$2y$12$0gkewKK2hXVEIFg1aUcMB.EiLpJ0QQYf4FAMHpbalT4bbPcujnUP6', NULL, '2025-01-09 20:22:07', '2025-01-09 20:22:07', 'kecamatan', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air_bersih`
--
ALTER TABLE `air_bersih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivitas_perekonomian`
--
ALTER TABLE `aktivitas_perekonomian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat_tangkap`
--
ALTER TABLE `alat_tangkap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batas_wilayah`
--
ALTER TABLE `batas_wilayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata_camat`
--
ALTER TABLE `biodata_camat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `ekonomi_angkatan_kerja`
--
ALTER TABLE `ekonomi_angkatan_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto_judul`
--
ALTER TABLE `foto_judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_produksi_perkebunan`
--
ALTER TABLE `hasil_produksi_perkebunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jarak_waktu_tempuh`
--
ALTER TABLE `jarak_waktu_tempuh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_anak_sekolah`
--
ALTER TABLE `jumlah_anak_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_anak_usia_sekolah`
--
ALTER TABLE `jumlah_anak_usia_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_angkatan_kerja`
--
ALTER TABLE `jumlah_angkatan_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_fasilitas_kesehatan`
--
ALTER TABLE `jumlah_fasilitas_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_fasilitas_pendidikan`
--
ALTER TABLE `jumlah_fasilitas_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_fasilitas_pendukung`
--
ALTER TABLE `jumlah_fasilitas_pendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_industri_perabotan`
--
ALTER TABLE `jumlah_industri_perabotan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_obyek_wisata`
--
ALTER TABLE `jumlah_obyek_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_pelanggan_listrik`
--
ALTER TABLE `jumlah_pelanggan_listrik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_pemilik_kendaraan`
--
ALTER TABLE `jumlah_pemilik_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_penduduk`
--
ALTER TABLE `jumlah_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_penduduk_miskin`
--
ALTER TABLE `jumlah_penduduk_miskin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_sanggar_budaya`
--
ALTER TABLE `jumlah_sanggar_budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_sarana_ibadah`
--
ALTER TABLE `jumlah_sarana_ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_staff`
--
ALTER TABLE `jumlah_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_tenaga_guru`
--
ALTER TABLE `jumlah_tenaga_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_tenaga_guru_menurut_pendidikan`
--
ALTER TABLE `jumlah_tenaga_guru_menurut_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_tenaga_kesehatan`
--
ALTER TABLE `jumlah_tenaga_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_penyelenggara`
--
ALTER TABLE `kategori_penyelenggara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_laporan_pivot`
--
ALTER TABLE `kegiatan_laporan_pivot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kegiatan_laporan_pivot_laporan_camat_id_foreign` (`laporan_camat_id`),
  ADD KEY `kegiatan_laporan_pivot_kegiatan_id_foreign` (`kegiatan_id`);

--
-- Indexes for table `lahan_garapan`
--
ALTER TABLE `lahan_garapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_camat`
--
ALTER TABLE `laporan_camat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_camat_penyelenggara_id_foreign` (`penyelenggara_id`);

--
-- Indexes for table `laporan_harian_camat`
--
ALTER TABLE `laporan_harian_camat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_harian_camat_penyelenggara_id_foreign` (`penyelenggara_id`);

--
-- Indexes for table `laporan_kegiatan`
--
ALTER TABLE `laporan_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_kegiatan_laporan_harian_camat_id_foreign` (`laporan_harian_camat_id`),
  ADD KEY `laporan_kegiatan_kegiatan_id_foreign` (`kegiatan_id`);

--
-- Indexes for table `luas_hutan_menurut_penggunaan`
--
ALTER TABLE `luas_hutan_menurut_penggunaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luas_hutan_menurut_status`
--
ALTER TABLE `luas_hutan_menurut_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luas_kepadatan`
--
ALTER TABLE `luas_kepadatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luas_wilayah`
--
ALTER TABLE `luas_wilayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkatdan_golongan`
--
ALTER TABLE `pangkatdan_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panjang_jalan`
--
ALTER TABLE `panjang_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pekerjaan_penduduk`
--
ALTER TABLE `pekerjaan_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelaksanaan_profil_kecamatan`
--
ALTER TABLE `pelaksanaan_profil_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemerintahan_kecamatan`
--
ALTER TABLE `pemerintahan_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_agama`
--
ALTER TABLE `penduduk_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_pendidikan`
--
ALTER TABLE `penduduk_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_pertumbuhan`
--
ALTER TABLE `penduduk_pertumbuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_suku`
--
ALTER TABLE `penduduk_suku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_umur`
--
ALTER TABLE `penduduk_umur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengelolaan_pangan`
--
ALTER TABLE `pengelolaan_pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunaan_tanah`
--
ALTER TABLE `penggunaan_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perikanan_darat`
--
ALTER TABLE `perikanan_darat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prasarana_pemerintahan`
--
ALTER TABLE `prasarana_pemerintahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prasarana_pemerintah_desa`
--
ALTER TABLE `prasarana_pemerintah_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_telekomunikasi`
--
ALTER TABLE `sarana_telekomunikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambang_galian`
--
ALTER TABLE `tambang_galian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanah_pemda_di_kecamatan`
--
ALTER TABLE `tanah_pemda_di_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanah_perkebunan`
--
ALTER TABLE `tanah_perkebunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ternak_besar`
--
ALTER TABLE `ternak_besar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ternak_kecil`
--
ALTER TABLE `ternak_kecil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ternak_unggas`
--
ALTER TABLE `ternak_unggas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkat_pendidikan_aparat_kecamatan`
--
ALTER TABLE `tingkat_pendidikan_aparat_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usaha_peternakan`
--
ALTER TABLE `usaha_peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usaha_tambang_galian`
--
ALTER TABLE `usaha_tambang_galian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_kecamatan_id_foreign` (`kecamatan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_penyelenggara`
--
ALTER TABLE `kategori_penyelenggara`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan_laporan_pivot`
--
ALTER TABLE `kegiatan_laporan_pivot`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan_camat`
--
ALTER TABLE `laporan_camat`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan_harian_camat`
--
ALTER TABLE `laporan_harian_camat`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan_kegiatan`
--
ALTER TABLE `laporan_kegiatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan_laporan_pivot`
--
ALTER TABLE `kegiatan_laporan_pivot`
  ADD CONSTRAINT `kegiatan_laporan_pivot_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kegiatan_laporan_pivot_laporan_camat_id_foreign` FOREIGN KEY (`laporan_camat_id`) REFERENCES `laporan_camat` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `laporan_camat`
--
ALTER TABLE `laporan_camat`
  ADD CONSTRAINT `laporan_camat_penyelenggara_id_foreign` FOREIGN KEY (`penyelenggara_id`) REFERENCES `kategori_penyelenggara` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `laporan_harian_camat`
--
ALTER TABLE `laporan_harian_camat`
  ADD CONSTRAINT `laporan_harian_camat_penyelenggara_id_foreign` FOREIGN KEY (`penyelenggara_id`) REFERENCES `kategori_penyelenggara` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `laporan_kegiatan`
--
ALTER TABLE `laporan_kegiatan`
  ADD CONSTRAINT `laporan_kegiatan_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_kegiatan_laporan_harian_camat_id_foreign` FOREIGN KEY (`laporan_harian_camat_id`) REFERENCES `laporan_harian_camat` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
