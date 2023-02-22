-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2023 pada 02.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti`
--

CREATE TABLE `bukti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tps_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bukti`
--

INSERT INTO `bukti` (`id`, `tps_id`, `foto`, `isi`, `created_at`, `updated_at`) VALUES
(3, 2, 'public/bukti/WwhvmXpAUNjUPnu38iWzJJ2y4lhRgVFNt7ffIqsM.jpg', 'Perhitungan Suara di TPS', '2023-01-24 18:15:08', '2023-01-24 18:15:08'),
(4, 2, 'public/bukti/jHdBOmCp6HLD8Q2ig2ay1ASX9pWiUO5CpRTEbPVn.jpg', 'Documentasi Hasil Perhitungan', '2023-01-24 18:15:43', '2023-01-24 18:15:43'),
(5, 2, 'public/bukti/febHHO7GgwTZvG0wD28Bu3mNSSsJ7fxB1IX7Jj5J.jpg', 'Documentasi Hasil Perhitungan 2', '2023-01-24 18:16:14', '2023-01-24 18:16:14'),
(6, 2, 'public/bukti/PfRZ38MmoEisgQtJS6Tk9JCADaGGi2dkGDakU3ax.jpg', 'Documentasi Hasil Perhitungan 3', '2023-01-24 18:16:33', '2023-01-24 18:16:33'),
(7, 2, 'public/bukti/C9OkvZCJDG5wuXQDp3ABg0RFuYp0Svc6ia4vkdYZ.jpg', 'Documentasi Hasil Perhitungan 4', '2023-01-24 18:17:05', '2023-01-24 18:17:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacalon`
--

CREATE TABLE `datacalon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datacalon`
--

INSERT INTO `datacalon` (`id`, `foto`, `nama`, `created_at`, `updated_at`) VALUES
(6, 'datacalon/KumhSNskrPY8tJGxiSoaiwEfzfRPsdycPbdqDF6b.jpg', 'Pasangan Calon 1', '2023-01-24 08:43:36', '2023-01-24 08:43:36'),
(7, 'datacalon/sp85E1R7xIfSTIcK5dfkdxvEom5Brwd4ifnXhOkd.jpg', 'Pasangan Calon 2', '2023-01-24 08:44:04', '2023-01-24 08:44:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_rekap`
--

CREATE TABLE `judul_rekap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_acara` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts_acara` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `judul_rekap`
--

INSERT INTO `judul_rekap` (`id`, `nama_acara`, `sts_acara`, `created_at`, `updated_at`) VALUES
(1, 'PEMILIHAN BUPATI DAN WAKIL BUPATI KABUPATEN DEMAK TAHUN 2020', 1, '2023-01-23 20:54:43', '2023-01-24 08:44:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(234, '2022_10_02_071727_create_data_calons_table', 1),
(860, '2014_10_12_000000_create_users_table', 2),
(861, '2014_10_12_100000_create_password_resets_table', 2),
(862, '2017_05_02_140432_create_provinces_tables', 2),
(863, '2017_05_02_140444_create_regencies_tables', 2),
(864, '2017_05_02_142019_create_districts_tables', 2),
(865, '2017_05_02_143454_create_villages_tables', 2),
(866, '2019_08_19_000000_create_failed_jobs_table', 2),
(867, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(868, '2022_08_24_085043_create_tps_table', 2),
(869, '2022_08_24_091952_pencoblos', 2),
(870, '2022_08_24_092307_datacalon', 2),
(871, '2022_08_24_092405_suara', 2),
(872, '2022_10_02_063819_create_judul_rekaps_table', 2),
(873, '2022_10_02_064005_create_penguruses_table', 2),
(874, '2022_10_18_143422_create_saksis_table', 2),
(875, '2023_01_06_155801_create_buktis_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencoblos`
--

CREATE TABLE `pencoblos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hadir` tinyint(1) NOT NULL DEFAULT 0,
  `kk` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts_kawin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jns_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `jns_dpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilitas` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pencoblos`
--

INSERT INTO `pencoblos` (`id`, `hadir`, `kk`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `umur`, `sts_kawin`, `jns_kelamin`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `jalan`, `rt`, `rw`, `jns_dpt`, `disabilitas`, `created_at`, `updated_at`) VALUES
(1, 1, 6011866133187425, 4929675267854189, 'Viman Rajata', 'SEMARANG', '1998-11-04', '27', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, '2023-01-24 11:11:22'),
(2, 1, 5389661486773608, 4716547548477493, 'Lasmono Bagas Waskita', 'SEMARANG', '2010-02-08', '27', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, '2023-01-24 11:11:20'),
(3, 1, 6011552109331987, 4556032329769114, 'Purwa Situmorang', 'SEMARANG', '2002-12-27', '33', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, '2023-01-24 11:11:04'),
(4, 1, 370972568221768, 4916191864112042, 'Banawi Mahmud Setiawan M.Pd', 'DEMAK', '1999-07-03', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, '2023-01-24 11:11:17'),
(5, 1, 378553291847327, 2303341062445752, 'Ikhsan Nashiruddin S.Pt', 'SEMARANG', '2000-07-29', '37', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, '2023-01-24 11:11:26'),
(6, 0, 6011957851857024, 2458679773016492, 'Gabriella Yuliarti', 'SEMARANG', '2012-12-13', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, '2023-01-24 12:48:13'),
(7, 0, 6011257820005999, 4485273425701199, 'Zalindra Hassanah', 'DEMAK', '2005-09-01', '27', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(8, 0, 5460434943016868, 2720178683326689, 'Oni Yuniar', 'SEMARANG', '2001-08-17', '37', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(9, 0, 2441908570663598, 2605469011132695, 'Widya Mardhiyah', 'DEMAK', '1998-09-28', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(10, 0, 5289915972979546, 6011007656900320, 'Mumpuni Nababan', 'DEMAK', '1998-09-28', '38', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(11, 0, 6011700468954804, 370379989135744, 'Karen Rahayu', 'SEMARANG', '1993-08-17', '33', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(12, 0, 5528579806913252, 5402817235410495, 'Malika Rahimah', 'SEMARANG', '2011-09-14', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(13, 0, 5511363808623337, 4795654969751564, 'Agnes Maria Kusmawati S.Farm', 'DEMAK', '1990-03-22', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(14, 0, 5210409630486122, 3528967977769246, 'Uda Kurniawan', 'DEMAK', '2005-09-30', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(15, 0, 4539052792670427, 4539862556529498, 'Latika Zulaikha Pudjiastuti', 'DEMAK', '2012-02-07', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(16, 0, 2720283573440051, 4024007198381, 'Mutia Nadia Usamah', 'DEMAK', '1998-09-30', '25', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(17, 0, 4556166903369162, 4532221114433460, 'Cinta Puspasari S.Ked', 'DEMAK', '2002-03-05', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(18, 0, 6011222596360994, 4550224325696, 'Aswani Galar Hardiansyah', 'DEMAK', '1994-04-23', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(19, 0, 5124134566051949, 2422215513001818, 'Wardaya Gunarto', 'DEMAK', '2004-07-03', '29', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(20, 0, 2499139211634969, 4556245890600, 'Shania Mayasari', 'SEMARANG', '1995-02-01', '40', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(21, 0, 342456192846310, 4485395258956564, 'Suci Pudjiastuti', 'SEMARANG', '1992-04-19', '37', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(22, 0, 2446858528160590, 5238760756287472, 'Kunthara Sinaga', 'SEMARANG', '1995-04-11', '27', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(23, 0, 6011422910610922, 4024007174226067, 'Nurul Rahayu', 'SEMARANG', '2012-12-14', '36', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(24, 0, 3528198913066303, 4916872006791427, 'Ifa Mutia Kusmawati S.IP', 'DEMAK', '1993-10-22', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(25, 0, 4716042340710002, 4024007160402284, 'Patricia Wijayanti S.IP', 'SEMARANG', '1994-09-14', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(26, 0, 4929557086010, 6011181272020407, 'Putri Jessica Usamah S.Gz', 'SEMARANG', '2009-10-23', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(27, 0, 4916524631622408, 5201522226529419, 'Cinta Hariyah S.Farm', 'SEMARANG', '1990-09-12', '36', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(28, 0, 4929973350219968, 5521801333726784, 'Opung Setiawan', 'DEMAK', '2002-07-03', '36', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(29, 0, 2459081691860516, 373440126561429, 'Rusman Nashiruddin M.Kom.', 'DEMAK', '1993-01-16', '37', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(30, 0, 2313427284185454, 2309357532298526, 'Dasa Situmorang M.Ak', 'DEMAK', '2001-05-08', '32', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(31, 0, 5256698603357279, 4024007160790282, 'Enteng Saputra', 'SEMARANG', '1998-12-18', '37', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(32, 0, 4916754367633556, 5399617984342708, 'Rini Novitasari', 'SEMARANG', '2008-01-21', '30', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(33, 0, 4929120334661457, 4929074115710209, 'Eli Usamah', 'DEMAK', '1996-03-25', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(34, 0, 4929735954085917, 4916283184964689, 'Mursinin Slamet Ardianto', 'SEMARANG', '2009-10-23', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(35, 0, 4916278265499688, 340914958496599, 'Umaya Bagus Prakasa S.Pt', 'DEMAK', '2004-01-07', '32', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(36, 0, 5337098344996449, 5351525811529510, 'Cindy Namaga', 'SEMARANG', '1993-07-17', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(37, 0, 4916480803169860, 4539208405164790, 'Ulya Yulianti', 'DEMAK', '2002-07-03', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(38, 0, 2221954418005978, 5582922159032853, 'Jessica Najwa Fujiati M.Kom.', 'DEMAK', '1993-01-15', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(39, 0, 2221954929379292, 4916315804410675, 'Yani Wastuti M.TI.', 'SEMARANG', '2009-12-23', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(40, 0, 4485803501377, 2221792500197927, 'Maria Laksmiwati', 'DEMAK', '1996-02-23', '26', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(41, 0, 6011654399557808, 4716192669414288, 'Prabawa Hardiansyah', 'SEMARANG', '2011-02-09', '40', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(42, 0, 5438308205277146, 4833912358389, 'Pandu Waluyo', 'DEMAK', '2007-04-24', '29', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(43, 0, 5288809391505019, 4532377393937835, 'Prabowo Naradi Zulkarnain', 'SEMARANG', '1992-11-05', '30', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(44, 0, 4556765532917943, 4288141346608, 'Maimunah Haryanti S.Gz', 'SEMARANG', '2003-02-21', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(45, 0, 4916168583630421, 5337742016658692, 'Daruna Mansur', 'DEMAK', '1992-03-16', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(46, 0, 2720316164302387, 5276356338492699, 'Melinda Hassanah M.M.', 'DEMAK', '2010-06-11', '40', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(47, 0, 5379892046003796, 4916528322351847, 'Kardi Budiman', 'DEMAK', '1997-11-21', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(48, 0, 4556991773579081, 378664962373111, 'Wani Hassanah', 'DEMAK', '2004-03-12', '30', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPPh', 0, NULL, NULL),
(49, 0, 6011622917065489, 2625836767543687, 'Yulia Padmi Nurdiyanti S.E.I', 'SEMARANG', '2012-02-03', '38', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPT', 0, NULL, NULL),
(50, 0, 4532865538495735, 6011286434492095, 'Gaman Firmansyah M.Pd', 'DEMAK', '2004-05-08', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 'DPTb', 0, NULL, NULL),
(51, 0, 2316926418224953, 4929238942727583, 'Yono Firmansyah S.I.Kom', 'DEMAK', '1992-10-19', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, '2023-01-24 10:58:16'),
(52, 0, 370242355135617, 4027658305273613, 'Bagiya Simanjuntak S.Sos', 'DEMAK', '2004-10-18', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, '2023-01-24 10:58:19'),
(53, 0, 5349735195335104, 5233852113073979, 'Agus Wahyudin', 'DEMAK', '1998-09-04', '27', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, '2023-01-24 10:58:22'),
(54, 0, 2385341075446301, 4716115194067, 'Silvia Usamah', 'SEMARANG', '1999-09-10', '37', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, '2023-01-24 10:58:26'),
(55, 0, 5397479329402073, 2400440120252655, 'Purwanto Kambali Salahudin M.Farm', 'DEMAK', '2004-11-27', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(56, 0, 2221463487038290, 4556019783977333, 'Virman Tarihoran', 'SEMARANG', '2011-11-08', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(57, 0, 374043161434095, 6011561129112715, 'Ajimin Kenes Rajata S.Ked', 'SEMARANG', '1991-10-03', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(58, 0, 3528383500053571, 5113515810927772, 'Labuh Nugroho', 'SEMARANG', '1990-01-30', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(59, 0, 343923332331189, 4556036417119876, 'Slamet Omar Firgantoro S.Pd', 'SEMARANG', '1990-05-06', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(60, 0, 2378226726429633, 4556975011477521, 'Sabar Siregar S.Pd', 'SEMARANG', '1990-02-21', '28', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(61, 0, 345164152404271, 4024007120483333, 'Icha Palastri', 'SEMARANG', '2007-01-21', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(62, 0, 349158015047661, 3589570637152013, 'Satya Pranowo', 'DEMAK', '1997-08-18', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(63, 0, 5154742052092111, 4024007118520294, 'Emin Latupono', 'SEMARANG', '1999-11-11', '34', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(64, 0, 4916988692868244, 2479806952450417, 'Ibrahim Utama M.Kom.', 'SEMARANG', '2011-12-27', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(65, 0, 4929836329967, 2329600606328513, 'Kalim Dagel Mahendra', 'SEMARANG', '1992-06-04', '29', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(66, 0, 4485376823035647, 2540400813819229, 'Makuta Pangestu', 'DEMAK', '1994-10-16', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(67, 0, 2221212107355984, 4024007101494010, 'Gandewa Lazuardi', 'DEMAK', '2002-01-22', '40', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(68, 0, 4532495069773, 4485285666041515, 'Ira Yunita Yulianti', 'SEMARANG', '2001-03-30', '32', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(69, 0, 4541832063297729, 373940942012093, 'Chelsea Susanti S.Sos', 'DEMAK', '2005-10-17', '30', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(70, 0, 4556465967248902, 4485414290916088, 'Eja Permadi', 'SEMARANG', '2008-04-03', '26', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(71, 0, 3589238014299233, 3528012716826609, 'Hardi Kurniawan S.I.Kom', 'SEMARANG', '2005-08-04', '26', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(72, 0, 2392770162304406, 4532274225392273, 'Laksana Iswahyudi', 'DEMAK', '2002-12-11', '27', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(73, 0, 2450484555010138, 3528737769835228, 'Ira Maryati', 'SEMARANG', '1990-01-13', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(74, 0, 5478531264472404, 3589637603358237, 'Calista Vicky Yuliarti S.E.I', 'DEMAK', '2005-06-30', '26', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(75, 0, 5391722319477282, 6011290773309043, 'Hilda Tina Namaga', 'SEMARANG', '1996-01-08', '36', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(76, 0, 5274143263968808, 4532618273503522, 'Iriana Winarsih', 'DEMAK', '1997-05-24', '29', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(77, 0, 5448770896764492, 2221309241461536, 'Victoria Salwa Permata', 'SEMARANG', '1991-07-25', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(78, 0, 4532967850701847, 4532991810414846, 'Zaenab Purwanti', 'SEMARANG', '1990-01-15', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(79, 0, 4539398305535, 5430961794507360, 'Rahmi Rachel Suryatmi', 'DEMAK', '2004-09-15', '39', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(80, 0, 373293435570106, 4532540591603067, 'Parman Tamba', 'DEMAK', '2005-06-14', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(81, 0, 371188243597683, 2518237377092993, 'Dono Waskita', 'DEMAK', '2000-08-01', '38', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(82, 0, 347459419389077, 5455639299172894, 'Balidin Kurniawan', 'DEMAK', '2003-07-25', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(83, 0, 4024007190830975, 5329122281996038, 'Utama Bakidin Wibowo M.Kom.', 'SEMARANG', '1992-09-09', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(84, 0, 5198365779458619, 2402633954349930, 'Ika Fujiati', 'DEMAK', '2003-07-07', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(85, 0, 4716340462029676, 4929108311181722, 'Banawa Sitorus M.Ak', 'DEMAK', '1992-10-27', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(86, 0, 4916592600048608, 4556224576592, 'Diah Kusmawati S.Kom', 'SEMARANG', '1997-08-23', '27', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(87, 0, 3589475674564825, 4990968956852, 'Vero Permadi', 'SEMARANG', '2009-08-08', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(88, 0, 348841571300787, 5489186115544419, 'Kezia Andriani', 'DEMAK', '1999-09-13', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(89, 0, 4539344850575956, 4024007140744318, 'Gawati Rahayu', 'DEMAK', '1996-02-25', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(90, 0, 4532825431702157, 2386707858075286, 'Panji Sihombing S.Farm', 'SEMARANG', '1999-12-19', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(91, 0, 4532083792812609, 6011698483839093, 'Padmi Nuraini M.Pd', 'SEMARANG', '1993-01-26', '28', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(92, 0, 340132612639252, 2530055825737975, 'Kartika Nasyiah', 'SEMARANG', '1991-05-27', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(93, 0, 4485350184180102, 5462115085778104, 'Adhiarja Mustofa', 'DEMAK', '2006-05-01', '26', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(94, 0, 6011771513751107, 4485008630310729, 'Kani Mulyani', 'SEMARANG', '1997-07-14', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(95, 0, 4916601176996, 2221498720656250, 'Tania Lalita Hariyah', 'DEMAK', '2005-05-26', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(96, 0, 3528029535917765, 2684531674424471, 'Kamaria Hassanah', 'DEMAK', '2004-04-06', '38', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(97, 0, 4916059624327442, 4556482228226304, 'Elisa Rahimah S.H.', 'SEMARANG', '1999-04-04', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(98, 0, 4532970174435027, 4485140743484, 'Bambang Prasetyo', 'SEMARANG', '2000-08-15', '35', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(99, 0, 2646683655154556, 3589217972738259, 'Hilda Kusmawati', 'SEMARANG', '2005-01-20', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(100, 0, 5227727363688031, 5172387491542678, 'Fathonah Pratiwi', 'DEMAK', '1990-08-01', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(101, 0, 379233982011934, 5347551084847261, 'Wirda Mayasari', 'SEMARANG', '1999-07-14', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(102, 0, 2720460217764548, 3589154547667384, 'Cawisadi Kurniawan', 'DEMAK', '2007-01-20', '34', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(103, 0, 2357384585645602, 4716804912479732, 'Aisyah Sudiati', 'DEMAK', '2012-06-28', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(104, 0, 2418258833114800, 2407412725333100, 'Jagaraga Sihombing', 'SEMARANG', '1995-07-02', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(105, 0, 5419276011075009, 4716630489040130, 'Winda Lailasari', 'SEMARANG', '2001-05-02', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(106, 0, 4485368052493, 3528048092360730, 'Ikin Mustofa', 'DEMAK', '1996-04-07', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(107, 0, 4606763653328180, 2313497031331289, 'Nadia Melani', 'DEMAK', '1994-05-15', '28', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(108, 0, 2720853331182037, 5494825099696074, 'Pia Laksmiwati', 'SEMARANG', '1992-01-04', '37', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPTb', 0, NULL, NULL),
(109, 0, 4716720488708918, 6011411512332829, 'Eja Rudi Rajasa', 'DEMAK', '2003-07-07', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPT', 0, NULL, NULL),
(110, 0, 2400068671247335, 4532956598360032, 'Laras Suartini', 'SEMARANG', '2001-06-01', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 'DPPh', 0, NULL, NULL),
(113, 0, 3321040912039485, 3321040908000086, 'Zumroh', 'Demak', '1999-01-09', '23', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 2, 3, 'DPT', 0, '2023-01-30 03:07:03', '2023-01-30 03:07:03'),
(114, 1, 3321040912039108, 3321040912039190, 'Saitama', 'Demak', '2000-01-02', '22', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 3, 'DPT', 0, '2023-01-30 08:55:31', '2023-01-30 08:57:13'),
(115, 1, 3321040912039485, 3012104091203948, 'Fubuki', 'Demak', '1999-01-01', '23', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 3, 'DPTb', 0, '2023-01-30 08:56:48', '2023-01-30 08:57:15'),
(116, 1, 4532389688661616, 2526244441198020, 'Zulaikha Laksita', 'SEMARANG', '1999-03-08', '29', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, '2023-01-31 01:37:34'),
(117, 1, 5469920423471699, 4532458374650629, 'Latif Sihombing', 'SEMARANG', '2003-05-19', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, '2023-01-31 01:37:37'),
(118, 0, 4929783125708330, 5288353171333102, 'Jagaraga Kusumo', 'DEMAK', '1995-12-13', '29', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(119, 0, 4539757271660000, 4929542369816815, 'Suci Mulyani', 'SEMARANG', '2007-11-21', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(120, 0, 2720705494224180, 4097590779156831, 'Oni Melani', 'SEMARANG', '2005-03-15', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(121, 0, 5257533040302639, 4716881524737772, 'Elma Widiastuti', 'DEMAK', '1993-01-05', '27', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(122, 0, 6011317410495651, 4929609313292441, 'Harja Saragih', 'SEMARANG', '2001-08-10', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(123, 0, 5391387053943079, 342387917687863, 'Elma Mulyani', 'SEMARANG', '2009-08-22', '38', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(124, 0, 4532569249350, 4024007129113162, 'Gadang Sihotang', 'DEMAK', '1996-11-26', '39', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(125, 0, 5342042129081400, 6011733435426713, 'Almira Haryanti', 'DEMAK', '1997-02-23', '29', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(126, 0, 4532317030871518, 2502375358471402, 'Dian Yessi Susanti', 'SEMARANG', '2004-12-17', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(127, 0, 3589427867327361, 2221057702070235, 'Dagel Wasita', 'SEMARANG', '1994-08-24', '36', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(128, 0, 2320942394465407, 4532540697731366, 'Citra Wastuti M.Farm', 'DEMAK', '1998-07-22', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(129, 0, 4850567900299398, 5197013525197872, 'Bahuwarna Prakasa', 'DEMAK', '1991-11-22', '32', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(130, 0, 4916811280721759, 349430523081544, 'Belinda Suryatmi', 'SEMARANG', '2002-09-29', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(131, 0, 372803469560137, 4556087896803415, 'Emil Gaiman Suwarno S.Farm', 'DEMAK', '2009-04-28', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(132, 0, 4716504740264, 4716459831097352, 'Hesti Pratiwi S.H.', 'DEMAK', '2008-12-07', '29', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(133, 0, 2396783614619186, 6011294093945882, 'Juli Farah Winarsih', 'SEMARANG', '1993-11-17', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(134, 0, 2335789070089297, 4556156550325609, 'Rahmat Wijaya', 'DEMAK', '2008-11-24', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(135, 0, 4539176714754017, 3589574931013368, 'Ade Wani Winarsih M.Ak', 'DEMAK', '1991-11-28', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(136, 0, 2720092586678932, 4757639583184678, 'Nadine Permata', 'SEMARANG', '1995-08-28', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(137, 0, 6011802555487282, 3589963475987378, 'Yuni Halima Pertiwi', 'DEMAK', '2011-12-24', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(138, 0, 341237698666464, 4556408806765, 'Zizi Novitasari', 'DEMAK', '2008-11-27', '40', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(139, 0, 4929317521882686, 4556214143025804, 'Melinda Kuswandari', 'DEMAK', '1998-04-24', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(140, 0, 2443721136995802, 4716080568576, 'Ina Salwa Wulandari S.Pd', 'DEMAK', '2007-01-17', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(141, 0, 4024007113536147, 6011525056925316, 'Devi Kuswandari', 'SEMARANG', '1990-03-12', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(142, 0, 2532050112133291, 4556998091547, 'Mila Nilam Halimah M.Pd', 'DEMAK', '2005-05-23', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(143, 0, 4916681432081596, 4929118827533688, 'Ina Nurdiyanti', 'DEMAK', '1999-09-15', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(144, 0, 4024007108968, 4539869074309782, 'Talia Sudiati', 'DEMAK', '1994-05-30', '28', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(145, 0, 3589160720385108, 5190404473009721, 'Raharja Muni Utama', 'SEMARANG', '2001-03-22', '25', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(146, 0, 5429546638621429, 4929327791493, 'Uchita Palastri', 'DEMAK', '1990-06-18', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(147, 0, 2636109348741791, 2221079087195692, 'Hamima Purwanti', 'DEMAK', '2003-06-05', '25', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(148, 0, 4716596374299810, 2377603488649593, 'Artanto Situmorang', 'SEMARANG', '1999-09-04', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(149, 0, 2221929588328384, 5131336994391844, 'Bakti Dongoran S.E.', 'DEMAK', '2009-06-29', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(150, 0, 4532101960559529, 6011540992259407, 'Purwa Laksana Siregar S.Ked', 'SEMARANG', '1990-01-15', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(151, 0, 4434743684513, 4556765051948, 'Aisyah Nasyiah', 'SEMARANG', '2002-12-25', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(152, 0, 4716131054105663, 5202472153362252, 'Putri Ika Mayasari', 'SEMARANG', '1999-03-18', '26', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(153, 0, 5259532870379921, 5413010129221031, 'Rika Nasyiah', 'DEMAK', '1997-08-29', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(154, 0, 2391983368141297, 2221240244548849, 'Taufan Mahendra S.IP', 'SEMARANG', '1999-01-01', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(155, 0, 4024007165785014, 2720360225939472, 'Puput Fitriani Rahmawati', 'DEMAK', '2007-02-28', '34', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(156, 0, 4556129390132501, 4024007144612149, 'Olivia Halimah', 'DEMAK', '1993-07-19', '27', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(157, 0, 4532276126292379, 4532879938869282, 'Puput Rahimah', 'DEMAK', '2004-04-29', '33', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(158, 0, 5407353606270487, 375483227226532, 'Agnes Salwa Nuraini', 'SEMARANG', '1994-05-22', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(159, 0, 4716542867390831, 6011189203589754, 'Uda Gaiman Uwais', 'DEMAK', '2004-12-03', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(160, 0, 5227634932383500, 5596226569444896, 'Hesti Pratiwi', 'DEMAK', '1992-11-25', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(161, 0, 4929038824512115, 4412949318985555, 'Murti Pangestu S.E.', 'DEMAK', '1992-09-21', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(162, 0, 4532016512924080, 2684832913772658, 'Gamani Mangunsong', 'DEMAK', '2005-08-23', '32', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(163, 0, 4024007171081, 2221794972172750, 'Zelaya Wahyuni', 'SEMARANG', '2007-03-24', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(164, 0, 4916119583323913, 3528668861655976, 'Umaya Prasetyo S.T.', 'DEMAK', '2007-08-07', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(165, 0, 5319897412116497, 6011965123680777, 'Hairyanto Eja Sihombing S.Sos', 'SEMARANG', '1991-12-15', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(166, 0, 4532232241534104, 4532804181657135, 'Ganda Haryanto S.Psi', 'DEMAK', '1996-09-27', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(167, 0, 4485888492882851, 4539192016894245, 'Imam Salahudin', 'DEMAK', '1994-02-05', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(168, 0, 2337620036373731, 4929901024257916, 'Jelita Ajeng Laksita S.Pt', 'SEMARANG', '2010-08-02', '25', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(169, 0, 2344557638058255, 5472703150437082, 'Hari Sihombing', 'DEMAK', '2003-03-10', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(170, 0, 3528651613412862, 2553154064605084, 'Kusuma Hakim', 'SEMARANG', '1994-09-04', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(171, 0, 5565776418894706, 2221278487489610, 'Yessi Lailasari S.T.', 'DEMAK', '2011-04-22', '32', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(172, 0, 4916795512036484, 4929968355751684, 'Betania Purwanti', 'SEMARANG', '2000-11-23', '28', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(173, 0, 4929998204332725, 4024007177589156, 'Tari Hasna Hastuti S.Ked', 'SEMARANG', '2006-12-11', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPTb', 0, NULL, NULL),
(174, 0, 5166897012250138, 4024007184449, 'Michelle Fathonah Laksmiwati', 'SEMARANG', '1998-03-08', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPPh', 0, NULL, NULL),
(175, 0, 5326388938885402, 4485081323935300, 'Rini Purnawati S.Kom', 'DEMAK', '2003-05-29', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, NULL, NULL),
(176, 0, 2596419639855160, 4916991527485, 'Satya Irawan', 'SEMARANG', '1992-07-14', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(177, 0, 5417963366209034, 5290153664525859, 'Luwes Prakasa S.Gz', 'DEMAK', '1990-04-28', '30', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(178, 0, 4854129739091755, 2315967189797976, 'Argono Najmudin', 'SEMARANG', '2008-11-02', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(179, 0, 2720128528985785, 4716675055329102, 'Rachel Hastuti', 'SEMARANG', '1990-01-17', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(180, 0, 4485422913429124, 370307245041695, 'Yani Hafshah Padmasari S.IP', 'DEMAK', '1995-11-17', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(181, 0, 4929475876380142, 2221739936472044, 'Icha Hartati', 'DEMAK', '2001-09-27', '29', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(182, 0, 5310901367776054, 4556777018023195, 'Perkasa Anggriawan', 'DEMAK', '2000-12-10', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(183, 0, 4485144595190812, 346569835600625, 'Koko Utama S.Farm', 'DEMAK', '2004-03-16', '34', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(184, 0, 2720985025212124, 5331557519167835, 'Darman Santoso', 'SEMARANG', '2005-11-28', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(185, 0, 5503118611632960, 4916182608258167, 'Bala Nashiruddin', 'SEMARANG', '1998-06-05', '38', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(186, 0, 3528544368216614, 4916733297665888, 'Farhunnisa Mayasari M.Farm', 'SEMARANG', '2011-07-26', '27', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(187, 0, 4485086385992800, 5101623090184652, 'Padmi Wahyuni S.Ked', 'DEMAK', '2012-10-23', '35', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(188, 0, 4916777658671597, 2530378864153155, 'Kayla Astuti', 'SEMARANG', '2002-11-02', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(189, 0, 348020360103526, 4556036518196, 'Sakura Ratih Wijayanti', 'DEMAK', '2010-01-23', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(190, 0, 4929475396825634, 4485446188786900, 'Embuh Prakasa', 'SEMARANG', '2003-11-01', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(191, 0, 5126667416411738, 4556910796172476, 'Cagak Ikhsan Nashiruddin S.E.', 'DEMAK', '1998-06-03', '36', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(192, 0, 371098409101818, 5257543642511297, 'Adikara Ardianto', 'DEMAK', '2005-05-05', '34', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(193, 0, 4722433046385, 5416200051562125, 'Dariati Hasan Maulana', 'SEMARANG', '1990-10-09', '35', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(194, 0, 5558222400616384, 4024007153510671, 'Caturangga Habibi M.TI.', 'DEMAK', '2011-01-05', '26', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(195, 0, 4716368426752083, 4929280653703213, 'Gandi Nainggolan S.Pt', 'DEMAK', '2005-05-24', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(196, 0, 4692348694852, 4532968488203, 'Zaenab Hariyah', 'SEMARANG', '2012-09-05', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(197, 0, 2579090752214807, 2634637605239036, 'Uchita Palastri S.T.', 'SEMARANG', '2009-12-29', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(198, 0, 2343491138857746, 5232651778512342, 'Galih Samosir', 'SEMARANG', '2005-01-29', '35', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(199, 0, 6011834955720103, 2221924759388598, 'Ida Halimah', 'SEMARANG', '1990-12-25', '27', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(200, 0, 4716988543416, 5363673384957951, 'Hana Widiastuti S.T.', 'SEMARANG', '2011-11-23', '26', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(201, 0, 3528651868940039, 4929365071915, 'Ami Permata', 'SEMARANG', '2000-09-23', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(202, 0, 4556393612910207, 4849885336836078, 'Tari Queen Laksmiwati', 'SEMARANG', '2002-05-03', '35', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(203, 0, 2221724778727259, 4916862126395662, 'Nyana Lazuardi', 'DEMAK', '2009-09-04', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(204, 0, 4024007107208018, 6011566092663552, 'Winda Qori Sudiati', 'SEMARANG', '1996-01-20', '40', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(205, 0, 2452773500683066, 4929911749790, 'Nadia Jasmin Pertiwi', 'SEMARANG', '2007-09-16', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(206, 0, 4539892366427179, 4716207551657479, 'Azalea Wulandari', 'SEMARANG', '1990-04-25', '32', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(207, 0, 378477838128837, 4683837485760970, 'Gandewa Irawan M.TI.', 'SEMARANG', '1997-04-04', '38', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(208, 0, 4485469622658311, 4916906343878164, 'Cengkir Widodo', 'DEMAK', '2004-04-18', '40', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(209, 0, 4556372505942170, 5158986472513539, 'Jaeman Argono Prabowo', 'SEMARANG', '2003-07-19', '32', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(210, 0, 3589846757045025, 6011961559520389, 'Tugiman Leo Tamba', 'DEMAK', '2003-08-11', '31', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(211, 0, 2221133799869753, 6011549963212204, 'Wani Purwanti', 'DEMAK', '2001-11-28', '30', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(212, 0, 4769489620715456, 349590414225573, 'Asmianto Digdaya Januar S.Farm', 'DEMAK', '2004-03-31', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(213, 0, 4716216986107240, 4929813085145940, 'Capa Salahudin', 'SEMARANG', '2004-06-30', '33', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(214, 0, 2575339464227167, 4485538639271746, 'Wirda Putri Wastuti S.T.', 'SEMARANG', '2004-03-05', '33', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(215, 0, 4916314846463230, 5187271745072570, 'Gaiman Januar S.Pd', 'SEMARANG', '2001-05-01', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(216, 0, 5369718121268727, 4539564038710528, 'Almira Sabrina Novitasari', 'SEMARANG', '2012-09-09', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(217, 0, 4929661369449458, 348860533791560, 'Zaenab Salwa Pertiwi', 'DEMAK', '2003-08-16', '30', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(218, 0, 2302247076626082, 5498628005800830, 'Naradi Estiono Sihotang S.Pt', 'SEMARANG', '1997-05-29', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(219, 0, 2720491668440692, 4716249612056994, 'Aris Sihotang M.Kom.', 'SEMARANG', '2012-08-31', '35', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(220, 0, 5480472013227482, 2618669615937127, 'Jumari Nashiruddin', 'SEMARANG', '1997-01-21', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(221, 0, 347354783768966, 4485689810290565, 'Jagaraga Manullang', 'DEMAK', '1994-06-19', '33', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(222, 0, 6011858347110467, 4556551882754015, 'Galang Wasita S.Psi', 'DEMAK', '2009-07-25', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(223, 0, 4485476072573, 6011499425395553, 'Garan Tarihoran', 'DEMAK', '2009-09-27', '33', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(224, 0, 5405610271382307, 5153048571949992, 'Jaga Wasita', 'DEMAK', '1998-09-08', '27', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(225, 0, 4556728556162564, 5302103830701781, 'Ade Hamima Yuliarti S.E.I', 'SEMARANG', '1992-06-19', '26', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(226, 0, 4610881548996278, 5277751821357657, 'Queen Hariyah', 'SEMARANG', '1999-12-01', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(227, 0, 5416280661107412, 2720678463208072, 'Empluk Utama Hutapea M.Ak', 'DEMAK', '1997-04-09', '27', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(228, 0, 4716512762719657, 4532398218233390, 'Elvin Napitupulu', 'SEMARANG', '2010-08-15', '25', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(229, 0, 4716513801657247, 4532769473200581, 'Jaeman Prasetyo', 'DEMAK', '1992-01-19', '40', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(230, 0, 2606106333083037, 2507774911124794, 'Clara Novitasari', 'SEMARANG', '2001-03-04', '31', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(231, 0, 2635484395293967, 2330633877470653, 'Umi Qori Puspita S.E.', 'DEMAK', '2000-10-27', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPT', 0, NULL, NULL),
(232, 0, 2582435687749333, 377865151054823, 'Hamima Suartini', 'DEMAK', '1996-03-17', '26', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(233, 0, 5339612486951216, 3528065256869769, 'Halim Kusumo', 'DEMAK', '2001-04-19', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(234, 0, 5445018112368919, 5126099178663290, 'Gara Ibrani Waluyo S.H.', 'DEMAK', '2009-04-19', '28', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPTb', 0, NULL, NULL),
(235, 0, 4929122934115157, 4532108525927901, 'Prayoga Wijaya', 'DEMAK', '2004-12-25', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 6, 'DPPh', 0, NULL, NULL),
(236, 1, 2327290480022150, 4556543069532173, 'Malik Ivan Sinaga', 'SEMARANG', '2003-03-26', '31', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, '2023-01-30 17:58:40'),
(237, 1, 2720999169883343, 4857604586485075, 'Hendri Jaga Waskita', 'DEMAK', '1995-09-27', '35', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, '2023-01-30 17:58:43'),
(238, 1, 6011633809258843, 4539149766300005, 'Irfan Luis Hidayat S.Pt', 'DEMAK', '1990-04-10', '35', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, '2023-01-30 18:02:11'),
(239, 1, 2440258559724966, 4716832364021330, 'Dimaz Waluyo', 'DEMAK', '2003-07-29', '36', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, '2023-01-31 00:36:06'),
(240, 0, 4929537911081397, 4024007108016824, 'Fathonah Belinda Andriani M.Pd', 'SEMARANG', '1992-07-13', '27', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL);
INSERT INTO `pencoblos` (`id`, `hadir`, `kk`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `umur`, `sts_kawin`, `jns_kelamin`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `jalan`, `rt`, `rw`, `jns_dpt`, `disabilitas`, `created_at`, `updated_at`) VALUES
(241, 0, 4929362555266, 2386544020111271, 'Aris Budiyanto', 'DEMAK', '1999-06-05', '30', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(242, 0, 347507073781177, 4929264228228948, 'Wardi Hakim', 'SEMARANG', '2010-04-29', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(243, 0, 2221841070139338, 5571052740180020, 'Kunthara Jumari Simanjuntak', 'SEMARANG', '1997-11-17', '40', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(244, 0, 2720694157669222, 4024007162636541, 'Rudi Hardiansyah', 'SEMARANG', '2001-08-24', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(245, 0, 5167249002468073, 4485159615375, 'Janet Mayasari', 'SEMARANG', '2007-06-13', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(246, 0, 2452743764929265, 4532520084402078, 'Agnes Ana Purwanti S.Pd', 'SEMARANG', '2012-01-28', '38', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(247, 0, 4485937524536363, 2378882624350386, 'Cawuk Cager Uwais M.Pd', 'DEMAK', '1999-09-18', '29', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(248, 0, 4556262530136106, 2720521529307837, 'Mulyono Cengkir Napitupulu S.Gz', 'SEMARANG', '2005-07-12', '38', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(249, 0, 4024007152115, 2455031901197559, 'Virman Wasita', 'SEMARANG', '1998-04-12', '38', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(250, 0, 2474976229199835, 4539525480302817, 'Asirwanda Sirait', 'SEMARANG', '2000-04-19', '25', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(251, 0, 4045551108013, 2667914996378347, 'Pranawa Mahendra M.M.', 'DEMAK', '2012-08-08', '27', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(252, 0, 5282035129841429, 2529238929450793, 'Harja Asman Firgantoro', 'SEMARANG', '2012-01-08', '31', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(253, 0, 5490575075892049, 6011044700839477, 'Bagus Manullang', 'SEMARANG', '2012-12-17', '34', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(254, 0, 5485051407325105, 345560781864274, 'Darmaji Wijaya', 'DEMAK', '1991-09-19', '40', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(255, 0, 4556277617415363, 2407017957240772, 'Vinsen Natsir', 'DEMAK', '2012-10-06', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(256, 0, 4929354899623, 373049210912917, 'Eka Hilda Yolanda', 'SEMARANG', '1993-11-02', '35', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(257, 0, 2720950157615874, 5276741266973135, 'Gina Yuliarti', 'DEMAK', '1994-05-01', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(258, 0, 5238539648640241, 4716501876764, 'Bella Intan Namaga', 'DEMAK', '1994-11-26', '28', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(259, 0, 6011135703091494, 2542278217967226, 'Ade Padmasari', 'SEMARANG', '2001-04-04', '34', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(260, 0, 5573202448094712, 2221735477018139, 'Jaya Hutagalung S.Farm', 'SEMARANG', '1993-02-06', '29', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(261, 0, 5169516476071049, 4929071348040123, 'Yuliana Elvina Astuti S.Psi', 'DEMAK', '2012-03-01', '34', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(262, 0, 6011851333814424, 4635147829884141, 'Puput Eva Lestari S.E.', 'SEMARANG', '2011-10-24', '33', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(263, 0, 4929671087506, 4716600893083042, 'Paris Hafshah Riyanti S.Farm', 'SEMARANG', '1995-10-01', '34', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(264, 0, 345012042041169, 4861819422271, 'Yance Genta Yuliarti', 'DEMAK', '2002-10-31', '29', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(265, 0, 379943914535905, 4916227375139, 'Rudi Gangsar Prasetyo', 'SEMARANG', '1999-10-19', '28', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(266, 0, 4929964385912651, 370690040770786, 'Gawati Pertiwi', 'DEMAK', '1995-11-29', '39', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(267, 0, 4485966434291, 4916322510468039, 'Liman Narpati S.IP', 'SEMARANG', '1993-12-08', '31', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(268, 0, 4929775822456783, 3589230179830670, 'Indra Jatmiko Simanjuntak', 'SEMARANG', '1995-12-21', '35', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(269, 0, 341752571730344, 4485880915241765, 'Jamalia Astuti', 'DEMAK', '2002-06-22', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(270, 0, 2611133030276261, 2221013990934582, 'Agnes Zulaika', 'SEMARANG', '2009-07-18', '29', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(271, 0, 2720678221369315, 5387923200668890, 'Restu Hastuti', 'SEMARANG', '1998-08-25', '26', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(272, 0, 4916821838069791, 4556881679446065, 'Margana Wibowo', 'DEMAK', '2003-10-17', '26', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(273, 0, 2720032169288733, 4556036792432241, 'Juli Oktaviani', 'SEMARANG', '1997-05-08', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(274, 0, 6011590859313581, 3528448970563142, 'Maida Zulaika M.Pd', 'DEMAK', '2008-04-09', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(275, 0, 4353281050491, 4539988437623, 'Kamaria Riyanti', 'DEMAK', '1999-11-11', '33', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(276, 0, 4716720600789812, 5222219112315368, 'Maria Jamalia Kusmawati', 'DEMAK', '2009-11-18', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(277, 0, 4556951245403, 4412526324820511, 'Oman Saefullah', 'DEMAK', '1995-07-01', '36', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(278, 0, 6011546119850952, 6011668163514548, 'Ridwan Nugroho S.IP', 'SEMARANG', '2004-11-29', '34', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(279, 0, 4539909514292832, 4024007117472, 'Maya Belinda Melani', 'DEMAK', '2010-12-01', '29', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(280, 0, 4556990614783, 2390085791208965, 'Endah Hassanah', 'DEMAK', '2011-07-03', '38', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(281, 0, 2221262724971572, 2340499831928188, 'Ida Pratiwi', 'SEMARANG', '1997-07-18', '38', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(282, 0, 4024007113140213, 5313775175271848, 'Makara Samosir', 'SEMARANG', '2003-01-05', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(283, 0, 4556803814695, 4121037887468914, 'Banawa Prayoga', 'DEMAK', '2001-09-28', '30', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(284, 0, 2661950999232855, 5569137787876012, 'Bella Safitri', 'DEMAK', '2006-11-24', '28', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(285, 0, 2410415288551880, 3589249120910282, 'Warta Darman Narpati S.E.I', 'SEMARANG', '2006-10-18', '32', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(286, 0, 5441105626355286, 4024007124261156, 'Lantar Edward Putra', 'DEMAK', '2001-01-07', '39', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(287, 0, 4929667955518, 5449095991712678, 'Lidya Natalia Usada', 'DEMAK', '1993-02-02', '37', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(288, 0, 4556893232302602, 4916816905530345, 'Natalia Nasyiah', 'DEMAK', '2012-11-20', '35', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(289, 0, 4556843340669251, 4532680045895321, 'Karna Cawuk Sihombing S.Psi', 'DEMAK', '1997-01-04', '36', 'Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(290, 0, 2457165997250829, 4716926952358656, 'Ian Nababan', 'SEMARANG', '1992-12-19', '39', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(291, 0, 4485580379567, 6011374331674823, 'Winda Nurul Lailasari', 'DEMAK', '2002-05-01', '35', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, NULL, NULL),
(292, 0, 376062086356801, 4024007160872239, 'Wisnu Mustofa', 'SEMARANG', '2012-06-30', '25', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(293, 0, 4539478743413122, 4024007140443739, 'Rendy Santoso', 'SEMARANG', '1996-08-05', '29', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPPh', 0, NULL, NULL),
(294, 0, 4228947807817, 4556205618321785, 'Ina Anggraini', 'SEMARANG', '2008-06-03', '36', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(295, 0, 4076485316257, 3589724598939195, 'Salwa Hastuti', 'SEMARANG', '2006-04-29', '29', 'Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, NULL, NULL),
(296, 0, 1234567890123456, 6543210987654321, 'Juwariyah', 'Demak', '1980-08-09', '22', 'Sudah Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, '2023-01-30 17:52:47', '2023-01-30 17:52:47'),
(297, 0, 987654321234567, 765432109876543, 'Kurniawan', 'Demak', '1989-11-08', '29', 'Sudah Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, '2023-01-30 17:57:24', '2023-01-30 17:57:24'),
(298, 0, 3320870200000127, 3320870200230127, 'Arsya', 'Demak', '2000-08-09', '23', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPTb', 0, '2023-01-30 18:00:14', '2023-01-30 18:00:14'),
(299, 0, 3321040912039485, 3321040908000006, 'Muhammad Miftahul Huda', 'Demak', '2000-08-09', '23', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 'DPT', 0, '2023-01-31 00:41:37', '2023-01-31 00:41:37'),
(300, 0, 3208171512160006, 3208171009890004, 'Rinda', 'Demak', '2000-08-09', '23', 'Belum Menikah', 'perempuan', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, '2023-01-31 00:50:44', '2023-01-31 00:50:44'),
(301, 0, 3321040912039485, 6543210987654321, 'Muhammad Fajar', 'Demak', '2000-09-09', '23', 'Belum Menikah', 'laki-laki', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 'DPT', 0, '2023-01-31 01:33:30', '2023-01-31 01:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tps_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id`, `tps_id`, `nama`, `status`, `foto`, `created_at`, `updated_at`) VALUES
(1, 2, 'Huda', 'Ketua Panitia', 'pengurus/IG4pcRM3jWcCnYwPZbIKtQ5oB0dISw99dHGI6ydN.jpg', '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(2, 2, 'Paijo', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(3, 2, 'Kurniawan', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(4, 2, 'Kasino', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(5, 2, 'Dono', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(6, 2, 'Hendro', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(7, 2, 'Mulyono', 'Anggota', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(8, 3, 'Kurnian', 'Ketua Panitia', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(9, 3, 'Imron', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(10, 3, 'Makin', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(11, 3, 'Varus', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(12, 3, 'Maskuri', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(13, 3, 'Jhin', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(14, 3, 'Dono', 'Anggota', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(15, 4, 'Pantheon', 'Ketua Panitia', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(16, 4, 'Asol', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(17, 4, 'Aphelios', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(18, 4, 'Rakan', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(19, 4, 'Zoe', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(20, 4, 'Zeri', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(21, 4, 'Twich', 'Anggota', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(22, 5, 'Totok', 'Ketua Panitia', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(23, 5, 'Sulis', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(24, 5, 'Riyan', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(25, 5, 'DIlan', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(26, 5, 'Gilang', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(27, 5, 'Bayu', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(28, 5, 'Saputra', 'Anggota', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(29, 6, 'Sulaiman', 'Ketua Panitia', NULL, '2023-01-31 01:36:17', '2023-01-31 01:36:17'),
(30, 6, 'Surya', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18'),
(31, 6, 'Sukimin', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18'),
(32, 6, 'Sutejo', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18'),
(33, 6, 'Subejo', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18'),
(34, 6, 'Susatyo', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18'),
(35, 6, 'Sepermen', 'Anggota', NULL, '2023-01-31 01:36:18', '2023-01-31 01:36:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi`
--

CREATE TABLE `saksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tps_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saksi`
--

INSERT INTO `saksi` (`id`, `tps_id`, `nama`, `status`, `email`, `kode`, `konfirmasi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 2, 'Masko', 'Pengawas', 'masko@gmail.com', '544501', '544501', 'saksi/BoXtJ5Zlkq1iEZZscjZIQMq7ZG6xOPcKPdXdiakC.jpg', '2023-01-24 08:50:28', '2023-01-24 12:32:55'),
(2, 2, 'Kozia', 'Saksi 1', 'kozia@gmail.com', '322537', '322537', NULL, '2023-01-24 08:50:28', '2023-01-24 12:32:55'),
(3, 2, 'Gwen', 'Saksi 2', 'gwen@gmail.com', '352310', '352310', NULL, '2023-01-24 08:50:28', '2023-01-24 12:32:55'),
(4, 3, 'Riot', 'Pengawas', 'riot@gmail.com', '937558', '937558', NULL, '2023-01-24 09:18:31', '2023-01-30 08:59:53'),
(5, 3, 'Kozia', 'Saksi 1', 'kozia@gmail.com', '692851', '692851', NULL, '2023-01-24 09:18:31', '2023-01-30 08:59:53'),
(6, 3, 'Naah', 'Saksi 2', 'naah@gmail.com', '883060', '883060', NULL, '2023-01-24 09:18:31', '2023-01-30 08:59:54'),
(7, 4, 'Yuummi', 'Pengawas', 'yuumi@gmail.com', '910995', '910995', NULL, '2023-01-30 03:33:39', '2023-01-30 04:46:05'),
(8, 4, 'Jannah', 'Saksi 1', 'jannah@gmail.com', '666883', '666883', NULL, '2023-01-30 03:33:39', '2023-01-30 04:51:46'),
(9, 4, 'Nami', 'Saksi 2', 'nami@gmail.com', '820804', '820804', NULL, '2023-01-30 03:33:39', '2023-01-30 04:51:46'),
(10, 5, 'lukman', 'Pengawas', 'lukman@gmail.com', '884202', NULL, NULL, '2023-01-30 17:55:35', '2023-01-30 18:01:48'),
(11, 5, 'Tresno', 'Saksi 1', 'tresno@gmail.com', '709600', NULL, NULL, '2023-01-30 17:55:35', '2023-01-30 18:01:48'),
(12, 5, 'Sulaiman', 'Saksi 2', 'sulaimana@gmail.com', '623561', NULL, NULL, '2023-01-30 17:55:35', '2023-01-30 18:01:48'),
(13, 6, 'Pengawas 1', 'Pengawas', 'pengawas@gmail.com', '314663', '314663', NULL, '2023-01-31 01:36:18', '2023-01-31 01:41:06'),
(14, 6, 'Saksi 1', 'Saksi 1', 'saks1i@gmail.com', '954970', '954970', NULL, '2023-01-31 01:36:18', '2023-01-31 01:41:06'),
(15, 6, 'Saksi 2', 'Saksi 2', 'saksi2@gmail.com', '137754', '137754', NULL, '2023-01-31 01:36:18', '2023-01-31 01:41:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tps_id` bigint(20) UNSIGNED NOT NULL,
  `suara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_suara` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id`, `tps_id`, `suara`, `jml_suara`, `created_at`, `updated_at`) VALUES
(1, 2, 'Suara 1', 3, '2023-01-24 08:50:28', '2023-01-24 12:33:51'),
(2, 2, 'Suara 2', 1, '2023-01-24 08:50:28', '2023-01-24 12:33:51'),
(3, 2, 'Suara Tidak Sah', 1, '2023-01-24 08:50:28', '2023-01-24 12:33:51'),
(4, 3, 'Suara 1', 0, '2023-01-24 09:18:31', '2023-01-24 09:28:48'),
(5, 3, 'Suara 2', 0, '2023-01-24 09:18:31', '2023-01-24 09:28:48'),
(6, 3, 'Suara Tidak Sah', 0, '2023-01-24 09:18:31', '2023-01-24 09:28:48'),
(7, 4, 'Suara 1', 1, '2023-01-30 03:33:39', '2023-01-30 08:57:28'),
(8, 4, 'Suara 2', 1, '2023-01-30 03:33:40', '2023-01-30 08:57:28'),
(9, 4, 'Suara Tidak Sah', 0, '2023-01-30 03:33:40', '2023-01-30 08:57:28'),
(10, 5, 'Suara 1', 0, '2023-01-30 17:55:35', '2023-01-30 18:02:21'),
(11, 5, 'Suara 2', 0, '2023-01-30 17:55:35', '2023-01-30 18:02:21'),
(12, 5, 'Suara Tidak Sah', 0, '2023-01-30 17:55:35', '2023-01-30 18:02:21'),
(13, 6, 'Suara 1', 2, '2023-01-31 01:36:18', '2023-01-31 01:41:24'),
(14, 6, 'Suara 2', 0, '2023-01-31 01:36:18', '2023-01-31 01:41:24'),
(15, 6, 'Suara Tidak Sah', 0, '2023-01-31 01:36:18', '2023-01-31 01:41:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tps`
--

CREATE TABLE `tps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suara_id` bigint(20) UNSIGNED NOT NULL,
  `pengurus_id` bigint(20) UNSIGNED NOT NULL,
  `saksi_id` bigint(20) UNSIGNED NOT NULL,
  `tutup` tinyint(1) NOT NULL DEFAULT 0,
  `namatps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `jml_srt_suara` int(11) NOT NULL,
  `jml_srt_rusak` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tps`
--

INSERT INTO `tps` (`id`, `suara_id`, `pengurus_id`, `saksi_id`, `tutup`, `namatps`, `slug`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `jalan`, `rt`, `rw`, `jml_srt_suara`, `jml_srt_rusak`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 1, 'TPS 1', 'tps-1', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 1, 50, 0, '2023-01-24 08:50:28', '2023-01-24 18:12:59'),
(2, 3, 3, 3, 1, 'TPS 2', 'tps-2', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 2, 100, 0, '2023-01-24 09:18:31', '2023-01-24 09:28:48'),
(3, 4, 4, 4, 1, 'TPS 3', 'tps-3', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 3, 100, 0, '2023-01-30 03:33:39', '2023-01-30 08:57:35'),
(4, 5, 5, 5, 0, 'TPS 4', 'tps-4', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 4, 80, 0, '2023-01-30 17:55:35', '2023-01-30 18:02:47'),
(5, 6, 6, 6, 1, 'TPS 5', 'tps-5', 'JAWA TENGAH', 'DEMAK', 'SAYUNG', 'KALISARI', 'DUKUHAN', 1, 5, 63, 0, '2023-01-31 01:36:17', '2023-01-31 01:41:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tps_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `tps_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', '2023-01-23 20:54:43', '$2y$10$7fuI482eVtdG9BnV1/VYpe5fA3c.U4XqCNeN8U3xZUMqUPFhnwBQC', 'z9cFTLoxyDhubs0DbD7x3xW9vCbRqvFd5YWQ3V21fSZBTAIHVpqcjSShAqyD', '2023-01-23 20:54:43', '2023-01-23 20:54:43'),
(2, 2, 'TPS 1', 'tps1@gmail.com', '2023-01-24 08:50:27', '$2y$10$YThPP4VIovmzMeIsLqoCPO2q8mSf3HRkYmvqLPK3wadqf8j2GFC/y', NULL, '2023-01-24 08:50:28', '2023-01-24 08:50:28'),
(3, 3, 'TPS 2', 'tps2@gmail.com', '2023-01-24 09:18:31', '$2y$10$7EngkXt4wG98FmPVa09tee/FjcXYDbexwgNVbvrVhcVBLsr9xSuv.', NULL, '2023-01-24 09:18:31', '2023-01-24 09:18:31'),
(4, 4, 'TPS 3', 'tps3@gmail.com', '2023-01-30 03:33:39', '$2y$10$YYZj1y0UgjRzSpNRmSs7uOOP1agIMIDPayVP7U.BAkWGmSUcDhRY6', NULL, '2023-01-30 03:33:39', '2023-01-30 03:33:39'),
(5, 5, 'TPS 4', 'tps4@gmail.com', '2023-01-30 17:55:35', '$2y$10$JpK0JaAs3PlhH.bUiLian.B97VA7Hd7tdM816b3h9w0FMekYkdi16', NULL, '2023-01-30 17:55:35', '2023-01-30 17:55:35'),
(6, 6, 'TPS 5', 'tps5@gmail.com', '2023-01-31 01:36:17', '$2y$10$YHiLVETR/3gVgyXPejy5ce0yIaNVwVPckBjQFx7Dx.1XfpRKA1r4q', NULL, '2023-01-31 01:36:17', '2023-01-31 01:36:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `villages`
--

CREATE TABLE `villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datacalon`
--
ALTER TABLE `datacalon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD KEY `districts_regency_id_foreign` (`regency_id`),
  ADD KEY `districts_id_index` (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `judul_rekap`
--
ALTER TABLE `judul_rekap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pencoblos`
--
ALTER TABLE `pencoblos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD KEY `provinces_id_index` (`id`);

--
-- Indeks untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD KEY `regencies_province_id_foreign` (`province_id`),
  ADD KEY `regencies_id_index` (`id`);

--
-- Indeks untuk tabel `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD KEY `villages_district_id_foreign` (`district_id`),
  ADD KEY `villages_id_index` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `datacalon`
--
ALTER TABLE `datacalon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `judul_rekap`
--
ALTER TABLE `judul_rekap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=876;

--
-- AUTO_INCREMENT untuk tabel `pencoblos`
--
ALTER TABLE `pencoblos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tps`
--
ALTER TABLE `tps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_regency_id_foreign` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
