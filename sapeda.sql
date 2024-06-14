-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2023 pada 09.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswas_id` bigint(20) UNSIGNED NOT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `akta_kelahiran` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `rapor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `siswas_id`, `kartu_keluarga`, `akta_kelahiran`, `ijazah`, `rapor`, `created_at`, `updated_at`) VALUES
(6, 16, 'assets/documents/65006e7badece.png', 'assets/documents/65006e7bb0c67.jpg', 'assets/documents/65006e7bac135.jpg', 'assets/documents/65006e7b998b3.pdf', '2023-09-12 05:58:19', '2023-09-12 05:58:19'),
(7, 17, 'assets/documents/650072f671157.jpeg', 'assets/documents/650072f675fed.jpeg', 'assets/documents/650072f66c111.jpeg', 'assets/documents/650072f6610c2.pdf', '2023-09-12 06:17:26', '2023-09-12 06:17:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_ruangan`
--

CREATE TABLE `history_ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_ruangan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu_mulai` varchar(255) NOT NULL,
  `waktu_selesai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_ujian`
--

INSERT INTO `jadwal_ujian` (`id`, `id_siswa`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `created_at`, `updated_at`) VALUES
(5, 17, '2023-09-23', '09:00', '11:00', NULL, '2023-09-12 06:20:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_19_140509_create_siswas_table', 1),
(5, '2022_05_21_143843_create_trigger_form_siswa', 1),
(6, '2022_05_26_014739_add_colomn_waktutempu_in_table_user', 1),
(7, '2022_05_26_135917_add_colomn_pekerjaanibu_in_table_user', 1),
(8, '2022_05_29_132301_create_documents', 1),
(9, '2022_06_04_131256_create_sekolah_table', 1),
(10, '2022_06_04_131502_add_colomn_sekolah_id', 1),
(11, '2022_06_07_115927_add_colomn_jalur', 1),
(12, '2022_06_07_131040_create_school_officers_table', 1),
(13, '2022_06_08_134724_add_colomn_idusers', 1),
(14, '2022_06_10_143243_add_colomn_npsn_in_sekolahs', 1),
(15, '2022_06_21_123747_add_colomn_status_in_siswas', 1),
(16, '2022_08_02_131421_create_trigger_from_sekolah', 1),
(17, '2023_08_30_134400_create_ruangan', 2),
(18, '2023_08_30_134550_create_history_ruangan', 2),
(19, '2023_09_05_062203_create_nilai', 3),
(21, '2023_09_09_091340_create_jadwal_ujian', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_sekolah` bigint(20) UNSIGNED NOT NULL,
  `matematika` varchar(255) NOT NULL,
  `bahasa_indonesia` varchar(255) NOT NULL,
  `bahasa_inggris` varchar(255) NOT NULL,
  `ipa` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `bacaan_quran` varchar(255) NOT NULL,
  `praktek_ibadah` varchar(255) NOT NULL,
  `doa_harian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_siswa`, `id_sekolah`, `matematika`, `bahasa_indonesia`, `bahasa_inggris`, `ipa`, `agama`, `bacaan_quran`, `praktek_ibadah`, `doa_harian`, `created_at`, `updated_at`) VALUES
(10, 17, 2, '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama`, `kuota`, `created_at`, `updated_at`) VALUES
(7, 'Ruangan 1', 29, '2023-09-10 14:20:44', '2023-09-10 14:20:44'),
(8, 'Ruangan 2', 25, '2023-09-10 14:21:30', '2023-09-10 14:21:30'),
(9, 'Ruangan 3', 20, '2023-09-10 14:21:49', '2023-09-10 14:21:49'),
(10, 'Ruangan 4', 25, '2023-09-10 14:22:12', '2023-09-10 14:22:12'),
(11, 'Ruangan 5', 26, '2023-09-12 06:19:22', '2023-09-12 06:19:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_officers`
--

CREATE TABLE `school_officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `sekolahs_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nsm` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `jenjang_sekolah` varchar(255) NOT NULL,
  `status_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `kepala_sekolah` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `users_id`, `nsm`, `npsn`, `nama_sekolah`, `jenjang_sekolah`, `status_sekolah`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `no_telpon`, `email`, `website`, `kepala_sekolah`, `nip`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'MA DDI KEMBANG LEMARI', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, 'MAN PANGKAJENE KEPULAUAN', 'MA/SMA/SMK', NULL, 'Jl. Sonrong Dg. Mangung No.13, Sompu', 'Sulawesi Selatan', 'gowa', 'Bontonompo Selatan', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-05 06:45:04'),
(3, 3, NULL, NULL, 'MAS AL-FALAH PAMMAS', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, NULL, NULL, 'MAS DARUL FATH BONTOLANGKASA', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, NULL, NULL, 'MAS DARUL DARUL KAMAL', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, NULL, NULL, 'MAS DARUSSALAM ANRONG APPAKA', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, NULL, NULL, 'MAS DDI AD BONTO-BONTO', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, NULL, NULL, 'MAS DDI BARU-BARU TANGA', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, 'MAS DDI GALLA RAYA', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, 'MAS DDI JAWI-JAWI', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, 'MAS DDI KALUKALUKUANG', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, 'MAS DDI PADANGLAMPE', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, 'MAS DDI TABO-TABO', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, 'MAS DDI-AD BOWONG CINDEA', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 15, NULL, NULL, 'MAS MUHAMMADIYAH SIBATUA PANGKAJENE', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 16, NULL, NULL, 'MAS PP MUJAHIDIN', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 17, NULL, NULL, 'MAS SABUTUNG', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 18, NULL, NULL, 'MAS SYAWIR', 'MA/SMA/SMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `jalur` varchar(255) DEFAULT NULL,
  `sekolahs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_pendaftaran` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `npsn_asal_sekolah` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `kewernegaraan` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL DEFAULT '2023-08-24',
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `anak_dari` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `cita_cita` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `handphone` varchar(255) DEFAULT NULL,
  `biaya_sekolah` varchar(255) DEFAULT NULL,
  `paud` tinyint(1) DEFAULT NULL,
  `tk` tinyint(1) DEFAULT NULL,
  `hepatitis` tinyint(1) DEFAULT NULL,
  `polio` tinyint(1) DEFAULT NULL,
  `bcg` tinyint(1) DEFAULT NULL,
  `campak` tinyint(1) DEFAULT NULL,
  `dpt` tinyint(1) DEFAULT NULL,
  `covid` tinyint(1) DEFAULT NULL,
  `no_kip` varchar(255) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `kepala_keluarga` varchar(255) DEFAULT NULL,
  `stts_tempat_tinggal` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `rw` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `koordinat_alamat` varchar(255) DEFAULT NULL,
  `transportasi` varchar(255) DEFAULT NULL,
  `jarak` varchar(255) DEFAULT NULL,
  `waktu_tempu` varchar(255) DEFAULT NULL,
  `stts_ayah` varchar(255) DEFAULT NULL,
  `nik_ayah` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(255) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `penghasilan_ayah` varchar(255) DEFAULT NULL,
  `no_hp_ayah` varchar(255) DEFAULT NULL,
  `stts_ibu` varchar(255) DEFAULT NULL,
  `nik_ibu` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(255) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` varchar(255) DEFAULT NULL,
  `no_hp_ibu` varchar(255) DEFAULT NULL,
  `nik_wali` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `tgl_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(255) DEFAULT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `penghasilan_wali` varchar(255) DEFAULT NULL,
  `no_hp_wali` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `ruangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `users_id`, `jalur`, `sekolahs_id`, `no_pendaftaran`, `asal_sekolah`, `npsn_asal_sekolah`, `nisn`, `nik`, `kewernegaraan`, `nama_lengkap`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `anak_dari`, `jumlah_saudara`, `agama`, `cita_cita`, `hobi`, `email`, `handphone`, `biaya_sekolah`, `paud`, `tk`, `hepatitis`, `polio`, `bcg`, `campak`, `dpt`, `covid`, `no_kip`, `no_kk`, `kepala_keluarga`, `stts_tempat_tinggal`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `koordinat_alamat`, `transportasi`, `jarak`, `waktu_tempu`, `stts_ayah`, `nik_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `stts_ibu`, `nik_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nik_wali`, `nama_wali`, `tgl_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `foto`, `status`, `ruangan`, `created_at`, `updated_at`) VALUES
(16, 36, 'Jalur Prestasi', 2, 'PPDB202336001', 'SMPN 1 Pangkep', '123456789', '42519048', '7306010210000001', 'WNI', 'Saharuddin', 'pangkep', '2000-10-02', 'Laki-Laki', 1, 3, 'Islam', 'TNI/Polri', 'Olahraga', 'saharuddin.putraallu@gmail.com', '082193359095', 'Orang Tua', 0, 0, 0, 0, 0, 1, 0, 1, '123456789876543', '730612100820000002', 'Abdul Rahim', 'Asrama atau Madrasah', 'Tondong Kura', '02', '02', 'Tondong Kura', 'Tondong Tallasa', 'Pangkep', 'Sulawesi Selatan', '92534', '-5.1486,119.4319', 'Sepeda Motor', 'Kurang dari 5 km', '1-10 menit', 'Masih Hidup', '7306210210000002', 'Rahim', 'Tondong Kura', '1985-02-05', 'SMA/Sederajat', 'Petani/Peternak', '500.000 - 1.000.000', '082193359095', 'Masih Hidup', '7306210210000003', 'Norma', 'Tondong Tallasa', '1992-02-04', 'SMA/Sederajat', 'Tidak Bekerja', 'Tidak Ada', '082193359095', NULL, '-', NULL, NULL, NULL, NULL, '-', 'assets/UserFoto/yPMJHztt6i77nfHo7gTqiZ51rKYZIPcoZPO6ScL9.jpg', 1, '', '2023-09-12 13:50:07', '2023-09-12 05:57:20'),
(17, 37, 'Jalur Tes', 2, 'PPDB202337002', 'SMPN 2 Pangkep', '9876543345', '42519047', '7306010210000009', 'WNI', 'Riswan', 'Bonto-bonto', '2002-02-02', 'Laki-Laki', 2, 5, 'Islam', 'TNI/Polri', 'Menulis', 'riswan0210@gmail.com', '085146464338', 'Orang Tua', 1, 0, 0, 0, 1, 1, 0, 1, '987653244767', '7306410210000023', 'Abdul Rahim', 'Ikut saudara atau kerabat', 'bonto-bonto', '12', '11', 'bonto-bonto', 'Tondong Tallasa', 'Pangkep', 'Sulawesi Selatan', '95234', '-5.125304,119.503074', 'Lainnya', 'Antara 5-10 km', '10-19 menit', 'Masih Hidup', '7306010210000034', 'Rahim', 'pangkep', '1987-06-17', 'D4/S1', 'PNS', 'lebih dari 5.000.000', '081356311746', 'Masih Hidup', '7306010210000043', 'Susan', 'pangkep', '1987-07-08', 'D4/S1', 'PNS', '3.000.000 - 5.000.000', '082345678876', NULL, '-', NULL, NULL, NULL, NULL, '-', 'assets/UserFoto/jK5Cl7Ddf9XGpJIZPJ9BsHCGudkHTE2CQeoMcsBm.jpg', 2, '7', '2023-09-12 14:01:45', '2023-09-13 04:53:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'MA DDI KEMBANG LEMARI', '$2y$10$CL4BuJKYSUkNL615DsLGSerGxHS0NM/dmJkwLJp/h9Vz0AzVsuWpi', 2, '2023-08-23 19:43:42', NULL),
(2, 'MAN PANGKAJENE KEPULAUAN', '$2y$10$8VN7QqE8/LRy0qxt3B5Z3.sd1jTF8X39fvBPWjG7A29WRCthVb5ym', 2, '2023-08-23 19:43:42', NULL),
(3, 'MAS AL-FALAH PAMMAS', '$2y$10$8pnb6/tpnObGmy2QI8Hd3uadY4FGHmETZvHkb9.HW77ikpZbOiLLC', 2, '2023-08-23 19:43:42', NULL),
(4, 'MAS DARUL FATH BONTOLANGKASA', '$2y$10$yI2x8W85Eon75TXtPYNwaOtgd1EwOeoNESO688PC3gEpb9GTsVrnm', 2, '2023-08-23 19:43:43', NULL),
(5, 'MAS DARUL DARUL KAMAL', '$2y$10$xRiDgARoNPlHsiW2tCipYOk5ceNLd50JawEyWi2FJDceO7MaxIKGi', 2, '2023-08-23 19:43:43', NULL),
(6, 'MAS DARUSSALAM ANRONG APPAKA', '$2y$10$c7BPGqmoSllGDVt6Gza1gOu4f4jJp9m5XOqJ9QgaV0EScCvvSNERm', 2, '2023-08-23 19:43:43', NULL),
(7, 'MAS DDI AD BONTO-BONTO', '$2y$10$aOSTe/u6I14uqjcL3XrEh.q2dSWnCTPR1m3e0w3bZd43ES5KBtGda', 2, '2023-08-23 19:43:43', NULL),
(8, 'MAS DDI BARU-BARU TANGA', '$2y$10$54jz3leY3x4xpvkH/zOQ6O9Jtur25E/00HFNR0RBA0RVq1RnJvVQG', 2, '2023-08-23 19:43:43', NULL),
(9, 'MAS DDI GALLA RAYA', '$2y$10$jXvu8vh.S4DhqYXbjvZS6u6VT04/icCWxAW3MVBlvq52ROzNlonfe', 2, '2023-08-23 19:43:43', NULL),
(10, 'MAS DDI JAWI-JAWI', '$2y$10$IASmiIv7YTCRR/dkwQtEz.W4kPMmHKVWPQAi4oAELnmWlj/pwNIgW', 2, '2023-08-23 19:43:43', NULL),
(11, 'MAS DDI KALUKALUKUANG', '$2y$10$uQUYvusm4I40QgXRxLl7Ye9PC7Y26YKqLc4XtXyLlu/DQpEqh2O4O', 2, '2023-08-23 19:43:43', NULL),
(12, 'MAS DDI PADANGLAMPE', '$2y$10$bu8.nmS8dU183ngM/TBxm.wj23fipYqxUQEYEHWVLG2oQjNG.s22S', 2, '2023-08-23 19:43:43', NULL),
(13, 'MAS DDI TABO-TABO', '$2y$10$zO1g2K978vFicgPvHw/3qejbYyoA5GXvLCWOrI45tVA9PvUyDUWdq', 2, '2023-08-23 19:43:43', NULL),
(14, 'MAS DDI-AD BOWONG CINDEA', '$2y$10$TYCLy.cE7eZpx5b3M3qfxuk1jtsUscBMqA9pmS.s5.UVM3dRgJQs6', 2, '2023-08-23 19:43:44', NULL),
(15, 'MAS MUHAMMADIYAH SIBATUA PANGKAJENE', '$2y$10$yx4gA1zgK5r4D5o1e3am8uBJepRAMx25mC7dmB2dAIPogg5xDwc7u', 2, '2023-08-23 19:43:44', NULL),
(16, 'MAS PP MUJAHIDIN', '$2y$10$kK6BUZ4UbaQO8bUWORQI8OrpRcQWWG/O1yjF/eIEduh3Hfl1gOY6m', 2, '2023-08-23 19:43:44', NULL),
(17, 'MAS SABUTUNG', '$2y$10$U.s3AweIgT8bz1N5HIYkceAvl4Aq73mq1o5xREtdSRteZK7aahEVS', 2, '2023-08-23 19:43:44', NULL),
(18, 'MAS SYAWIR', '$2y$10$50FxKgazwBboKujeiubCBOITKMrU41JPUUayNbLKAmC491YDet56W', 2, '2023-08-23 19:43:44', NULL),
(19, 'admin_01', '$2y$10$zzRDxfhI8BzHKH/Jno55Murg3ojgKFBECOT1h7/Ukf2hJbOdtsekG', 3, '2023-08-23 19:43:44', NULL),
(36, '42519048', '$2y$10$vqvta8xm4mNoklgnFrXlG.uF6W..KnetvYixeftgg.PTb9T3bDgIu', 1, '2023-09-12 05:50:06', '2023-09-12 05:50:06'),
(37, '42519047', '$2y$10$PMBjeWE/gVu08/sOV8Jee.XGt0F3ENe6/WgJEnyunnMGqM6IqU0na', 1, '2023-09-12 06:01:45', '2023-09-12 06:01:45');

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `triger_form_sekolah` AFTER INSERT ON `users` FOR EACH ROW BEGIN
                    DECLARE id_sekolah INT;
                    DECLARE nama_sekolah VARCHAR(255);
                    DECLARE jenjang_sekolah VARCHAR(255);
                    SET id_sekolah = NEW.id;
                    SET nama_sekolah = NEW.username;
                    SET jenjang_sekolah = "MA/SMA/SMK";
    
                    if(NEW.role = 2) then
                        INSERT INTO sekolahs (`users_id`,`nama_sekolah`,`jenjang_sekolah`) VALUES (NEW.id,NEW.username,jenjang_sekolah);
                    end if;
                END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `triger_form_siwa` AFTER INSERT ON `users` FOR EACH ROW BEGIN
                    DECLARE id_siswa,maxx INT;
                    SET id_siswa = NEW.id;
                    SET maxx = (SELECT COUNT(id) FROM users WHERE role = 1);

                    if(NEW.role = 1) then
                        SET @nomor_registrasi = CONCAT("PPDB",YEAR(NOW()),id_siswa,LPAD(maxx,3,"0"));
                        INSERT INTO siswas (`users_id`,`no_pendaftaran`,`nisn`,`created_at`) VALUES (NEW.id,@nomor_registrasi,NEW.username,now());
                    end if;
                END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_siswas_id_foreign` (`siswas_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `history_ruangan`
--
ALTER TABLE `history_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_ruangan_id_siswa_foreign` (`id_siswa`),
  ADD KEY `history_ruangan_id_ruangan_foreign` (`id_ruangan`);

--
-- Indeks untuk tabel `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_ujian_id_siswa_foreign` (`id_siswa`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_id_siswa_foreign` (`id_siswa`),
  ADD KEY `nilai_id_sekolah_foreign` (`id_sekolah`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `school_officers`
--
ALTER TABLE `school_officers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_officers_users_id_foreign` (`users_id`),
  ADD KEY `school_officers_sekolahs_id_foreign` (`sekolahs_id`);

--
-- Indeks untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sekolahs_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_no_pendaftaran_unique` (`no_pendaftaran`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`),
  ADD KEY `siswas_users_id_foreign` (`users_id`),
  ADD KEY `siswas_sekolahs_id_foreign` (`sekolahs_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history_ruangan`
--
ALTER TABLE `history_ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `school_officers`
--
ALTER TABLE `school_officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_siswas_id_foreign` FOREIGN KEY (`siswas_id`) REFERENCES `siswas` (`id`);

--
-- Ketidakleluasaan untuk tabel `history_ruangan`
--
ALTER TABLE `history_ruangan`
  ADD CONSTRAINT `history_ruangan_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`),
  ADD CONSTRAINT `history_ruangan_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD CONSTRAINT `jadwal_ujian_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_id_sekolah_foreign` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolahs` (`id`),
  ADD CONSTRAINT `nilai_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id`);

--
-- Ketidakleluasaan untuk tabel `school_officers`
--
ALTER TABLE `school_officers`
  ADD CONSTRAINT `school_officers_sekolahs_id_foreign` FOREIGN KEY (`sekolahs_id`) REFERENCES `sekolahs` (`id`),
  ADD CONSTRAINT `school_officers_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD CONSTRAINT `sekolahs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_sekolahs_id_foreign` FOREIGN KEY (`sekolahs_id`) REFERENCES `sekolahs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswas_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
