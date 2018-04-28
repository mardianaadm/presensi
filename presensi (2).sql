-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2018 pada 15.20
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas_siswa`
--

CREATE TABLE `data_kelas_siswa` (
  `id_data_kelas_siswa` int(11) NOT NULL,
  `id_kelas_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelas_siswa`
--

INSERT INTO `data_kelas_siswa` (`id_data_kelas_siswa`, `id_kelas_siswa`, `id_siswa`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sesi`
--

CREATE TABLE `data_sesi` (
  `id_sesi` int(11) NOT NULL,
  `nama_sesi` varchar(10) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sesi`
--

INSERT INTO `data_sesi` (`id_sesi`, `nama_sesi`, `jam`, `created_at`, `updated_at`) VALUES
(1, 'Sesi 1', '07.00 - 07.45', '2018-04-12 06:38:31', '2018-04-11 23:38:31'),
(2, 'Sesi 2', '07.45 - 08.30', '2018-04-12 06:34:27', '0000-00-00 00:00:00'),
(3, 'Sesi 3', '08.30 - 09.15', '2018-04-20 04:46:49', '2018-04-19 21:46:49'),
(4, 'Sesi 4', '09.15 - 10.00', '2018-04-11 23:38:53', '2018-04-11 23:38:53'),
(5, 'Sesi 5', '10.20 - 11.05', '2018-04-11 23:39:14', '2018-04-11 23:39:14'),
(6, 'Sesi 6', '11.05 - 11.45', '2018-04-12 06:40:10', '2018-04-11 23:40:10'),
(7, 'Sesi 7', '12.10 - 12.50', '2018-04-11 23:40:02', '2018-04-11 23:40:02'),
(8, 'Sesi 8', '12.50 - 13.30', '2018-04-11 23:40:32', '2018-04-11 23:40:32'),
(9, 'Sesi 9', '13.30 - 14.10', '2018-04-11 23:40:53', '2018-04-11 23:40:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `NISN` int(10) NOT NULL,
  `NIS` int(10) NOT NULL,
  `nomor_absen` int(50) NOT NULL,
  `status_siswa` enum('Aktif','Tidak Aktif','','') NOT NULL DEFAULT 'Aktif',
  `id_tahun_ajaran` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `NISN`, `NIS`, `nomor_absen`, `status_siswa`, `id_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, 'Diana', 380436, 1234, 20, 'Aktif', 1, '2018-04-19 10:16:39', '0000-00-00 00:00:00'),
(2, 'hera', 123456, 1, 0, 'Aktif', 1, '2018-04-19 10:16:45', '2018-04-10 23:07:35'),
(3, 'abdur', 78910, 0, 0, 'Aktif', 1, '2018-04-19 10:16:52', '2018-04-09 05:11:00'),
(4, 'fitri', 673443, 0, 0, 'Aktif', 1, '2018-04-19 10:16:56', '2018-04-09 05:12:05'),
(5, 'grace', 345667, 0, 0, 'Tidak Aktif', 1, '2018-04-20 07:37:14', '2018-04-20 00:37:14'),
(7, 'nadya', 43535345, 3453, 0, 'Aktif', 18, '2018-04-19 04:06:30', '2018-04-19 04:06:30'),
(8, 'peni', 43532554, 2312, 0, 'Aktif', 18, '2018-04-21 02:20:17', '2018-04-21 02:20:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mengajar`
--

CREATE TABLE `jadwal_mengajar` (
  `id_jadwal_mengajar` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jum''at','Sabtu') NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_sesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mengajar`
--

INSERT INTO `jadwal_mengajar` (`id_jadwal_mengajar`, `hari`, `id_tahun_ajaran`, `id_sesi`) VALUES
(1, 'Senin', 1, 3),
(3, 'Selasa', 1, 2),
(4, 'Senin', 1, 2),
(5, 'Rabu', 1, 3),
(6, 'Kamis', 1, 9),
(7, 'Jum''at', 1, 1),
(8, 'Sabtu', 1, 6),
(9, 'Senin', 1, 8),
(10, 'Selasa', 1, 8),
(11, 'Senin', 1, 2),
(12, 'Senin', 1, 5),
(14, 'Selasa', 1, 9),
(15, 'Senin', 1, 5),
(16, 'Senin', 1, 5),
(17, 'Senin', 1, 5),
(18, 'Senin', 1, 5),
(19, 'Senin', 1, 5),
(20, 'Rabu', 1, 4),
(21, 'Rabu', 1, 4),
(22, 'Jum''at', 1, 4),
(23, 'Senin', 1, 9),
(24, 'Sabtu', 1, 7),
(25, 'Sabtu', 1, 1),
(26, 'Kamis', 1, 6),
(28, 'Selasa', 1, 2),
(29, 'Selasa', 1, 2),
(30, 'Selasa', 1, 2),
(31, 'Kamis', 1, 3),
(32, 'Senin', 1, 2),
(33, 'Jum''at', 1, 1),
(34, 'Jum''at', 1, 5),
(35, 'Jum''at', 1, 5),
(36, 'Kamis', 1, 8),
(37, 'Selasa', 1, 7),
(38, 'Rabu', 1, 6),
(39, 'Kamis', 1, 3),
(40, 'Sabtu', 1, 2),
(41, 'Rabu', 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mengajar_kelas`
--

CREATE TABLE `jadwal_mengajar_kelas` (
  `id_jadwal_mengajar_kelas` int(11) NOT NULL,
  `id_jadwal_mengajar` int(11) NOT NULL,
  `id_kelas_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mengajar_kelas`
--

INSERT INTO `jadwal_mengajar_kelas` (`id_jadwal_mengajar_kelas`, `id_jadwal_mengajar`, `id_kelas_siswa`) VALUES
(1, 1, 1),
(29, 31, 74),
(30, 32, 75),
(31, 33, 76),
(32, 34, 77),
(33, 35, 78),
(34, 36, 79),
(35, 37, 80),
(36, 38, 81),
(37, 39, 82),
(38, 40, 83),
(39, 41, 84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(10) NOT NULL,
  `status_jurusan` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `status_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'MIPA', 'Aktif', '2018-03-27 09:51:54', '2018-03-27 02:51:54'),
(11, 'SOSIAL', 'Aktif', '2018-03-27 09:52:00', '2018-03-27 02:52:00'),
(12, 'BAHASA', 'Aktif', '2018-04-11 09:38:03', '2018-04-11 02:38:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas_siswa` int(11) NOT NULL,
  `tingkat` varchar(3) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `id_urutan_kelas` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `tingkat`, `id_jurusan`, `id_urutan_kelas`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'X', 1, 1, 2, '2018-03-27 12:11:00', '0000-00-00 00:00:00'),
(38, 'XII', 1, 9, 2, '2018-04-20 11:27:58', '2018-04-14 03:53:13'),
(39, 'XII', 1, 10, 2, '2018-04-20 11:27:58', '2018-04-14 03:53:19'),
(43, 'XII', 11, 1, 2, '2018-04-20 11:27:58', '2018-04-14 03:54:06'),
(44, 'XII', 11, 9, 2, '2018-04-20 11:27:58', '2018-04-14 03:54:12'),
(45, 'XII', 11, 10, 2, '2018-04-20 11:27:58', '2018-04-14 03:54:19'),
(46, 'X', 1, 14, 2, '2018-04-20 11:27:58', '2018-04-16 02:42:08'),
(47, 'X', 1, 15, 2, '2018-04-20 11:27:58', '2018-04-16 02:42:17'),
(48, 'X', 1, 16, 2, '2018-04-20 11:27:58', '2018-04-16 02:42:25'),
(66, 'X', 12, 1, 2, '2018-04-20 11:27:58', '2018-04-19 21:39:32'),
(67, 'X', 12, 9, 2, '2018-04-20 11:27:58', '2018-04-19 21:41:38'),
(68, 'X', 12, 10, 2, '2018-04-20 11:27:58', '2018-04-19 21:48:40'),
(74, 'XI', 11, 9, 2, '2018-04-20 11:27:58', '0000-00-00 00:00:00'),
(75, 'XI', 11, 9, 12, '2018-04-20 11:29:34', '0000-00-00 00:00:00'),
(76, 'XII', 1, 1, 12, '2018-04-20 11:30:07', '0000-00-00 00:00:00'),
(77, 'XII', 11, 9, 12, '2018-04-22 13:14:28', '0000-00-00 00:00:00'),
(78, 'XII', 11, 9, 12, '2018-04-22 13:14:57', '0000-00-00 00:00:00'),
(79, 'X', 1, 9, 12, '2018-04-22 13:29:47', '0000-00-00 00:00:00'),
(80, 'XI', 1, 14, 12, '2018-04-23 11:27:20', '0000-00-00 00:00:00'),
(81, 'XI', 1, 1, 12, '2018-04-24 06:52:43', '0000-00-00 00:00:00'),
(82, 'XI', 11, 10, 12, '2018-04-24 06:54:15', '0000-00-00 00:00:00'),
(83, 'XII', 1, 14, 12, '2018-04-24 06:55:14', '0000-00-00 00:00:00'),
(84, 'X', 11, 15, 12, '2018-04-24 07:29:45', '0000-00-00 00:00:00'),
(85, 'X', 12, 14, 1, '2018-04-25 04:32:50', '2018-04-25 04:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `tanggal`, `jam`, `id_user`, `id_kelas`, `created_at`, `updated_at`) VALUES
(1, '2018-04-24', '14:00:59', 12, 75, '2018-04-24 07:00:59', '2018-04-24 07:00:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi_siswa`
--

CREATE TABLE `presensi_siswa` (
  `id_presensi_siswa` int(11) NOT NULL,
  `status_kehadiran` enum('Aktif','Tidak Aktif','','') NOT NULL,
  `id_presensi` int(11) NOT NULL,
  `id_data_kelas_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `nama_semester` varchar(7) NOT NULL,
  `masa_tahun_ajaran` varchar(10) NOT NULL,
  `status_tahun_ajaran` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `nama_semester`, `masa_tahun_ajaran`, `status_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, 'Ganjil', '2017/2018', 'Aktif', '2018-04-24 08:23:48', '2018-04-24 01:23:48'),
(2, 'Genap', '2014/2015', 'Tidak Aktif', '2018-04-19 03:12:11', '2018-04-18 20:12:11'),
(7, 'Ganjil', '2013/2014', 'Tidak Aktif', '2018-04-24 08:23:48', '2018-04-24 01:23:31'),
(8, 'Genap', '2016/2017', 'Tidak Aktif', '2018-04-14 12:51:22', '2018-04-14 05:51:22'),
(18, 'Ganjil', '2011/2012', 'Tidak Aktif', '2018-04-23 12:41:01', '2018-04-23 05:40:38'),
(19, 'Genap', '2012/2013', 'Tidak Aktif', '2018-04-16 01:16:29', '2018-04-15 18:12:14'),
(20, 'Ganjil', '2018/2019', 'Tidak Aktif', '2018-04-16 01:12:14', '2018-04-15 18:11:33'),
(21, 'Ganjil', '2003/2004', 'Tidak Aktif', '2018-04-16 01:11:33', '2018-04-15 18:10:23'),
(22, 'Ganjil', '2001/2002', 'Tidak Aktif', '2018-04-20 04:28:40', '2018-04-19 21:28:27'),
(23, 'Genap', '2020/2021', 'Tidak Aktif', '2018-04-23 12:40:11', '2018-04-23 05:39:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `urutan_kelas`
--

CREATE TABLE `urutan_kelas` (
  `id_urutan_kelas` int(11) NOT NULL,
  `nama_urutan_kelas` int(11) NOT NULL,
  `status_urutan_kelas` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `urutan_kelas`
--

INSERT INTO `urutan_kelas` (`id_urutan_kelas`, `nama_urutan_kelas`, `status_urutan_kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aktif', '2018-03-27 10:17:18', '2018-03-27 03:17:18'),
(9, 2, 'Aktif', '2018-03-27 12:45:33', '2018-03-27 05:45:33'),
(10, 3, 'Aktif', '2018-04-09 11:46:55', '2018-04-09 04:46:55'),
(14, 4, 'Aktif', '2018-04-14 03:59:46', '2018-04-14 03:59:46'),
(15, 5, 'Aktif', '2018-04-14 03:59:53', '2018-04-14 03:59:53'),
(16, 6, 'Aktif', '2018-04-14 03:59:59', '2018-04-14 03:59:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `NIP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jk_user` enum('Laki - Laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `status_user` enum('Aktif','Tidak Aktif','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Aktif',
  `level` enum('Admin','Guru','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `NIP`, `password`, `nama_user`, `alamat_user`, `jk_user`, `status_user`, `level`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, '1234567', '$2y$10$cbWKXD/cQ/6X14B8Zc116OiOCJ.wIPvsndwVkhuZyxU.HJixV.mba', 'Diana', 'Yogyakarta', 'Perempuan', 'Aktif', 'Admin', '2018-03-06 07:41:43', '2018-04-15 17:37:16', '0000-00-00 00:00:00'),
(2, '7654321', '$2y$10$XPcSQ.S/NufSRWzraT1b5.yovPFYE/VatnTSWhvmsAULrCGr5pK4q', 'Eko Karnianto', 'Magetan', 'Laki - Laki', 'Aktif', 'Guru', '2018-03-18 17:42:54', '2018-03-18 17:42:54', NULL),
(12, '24242424', '$2y$10$cbWKXD/cQ/6X14B8Zc116OiOCJ.wIPvsndwVkhuZyxU.HJixV.mba', 'Abdur', 'sleman', 'Laki - Laki', 'Aktif', 'Guru', '2018-04-11 20:18:14', '2018-04-11 20:18:14', '0000-00-00 00:00:00'),
(13, '2343534', '1234567', 'dvsczds', 'vdgrgb', 'Perempuan', 'Tidak Aktif', 'Guru', '2018-04-15 17:37:02', '2018-04-15 17:37:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kelas_siswa`
--
ALTER TABLE `data_kelas_siswa`
  ADD PRIMARY KEY (`id_data_kelas_siswa`),
  ADD KEY `id_kelas` (`id_kelas_siswa`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`) USING BTREE;

--
-- Indexes for table `data_sesi`
--
ALTER TABLE `data_sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD PRIMARY KEY (`id_jadwal_mengajar`),
  ADD KEY `id_sesi` (`id_sesi`) USING BTREE,
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`) USING BTREE;

--
-- Indexes for table `jadwal_mengajar_kelas`
--
ALTER TABLE `jadwal_mengajar_kelas`
  ADD PRIMARY KEY (`id_jadwal_mengajar_kelas`),
  ADD KEY `id_jadwal` (`id_jadwal_mengajar`) USING BTREE,
  ADD KEY `id_kelas` (`id_kelas_siswa`) USING BTREE;

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`),
  ADD KEY `id_jurusan` (`id_jurusan`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_urutan_kelas` (`id_urutan_kelas`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`) USING BTREE;

--
-- Indexes for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD PRIMARY KEY (`id_presensi_siswa`),
  ADD KEY `id_presensi` (`id_presensi`) USING BTREE,
  ADD KEY `id_data_kelas_siswa` (`id_data_kelas_siswa`) USING BTREE;

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `urutan_kelas`
--
ALTER TABLE `urutan_kelas`
  ADD PRIMARY KEY (`id_urutan_kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kelas_siswa`
--
ALTER TABLE `data_kelas_siswa`
  MODIFY `id_data_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_sesi`
--
ALTER TABLE `data_sesi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  MODIFY `id_jadwal_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `jadwal_mengajar_kelas`
--
ALTER TABLE `jadwal_mengajar_kelas`
  MODIFY `id_jadwal_mengajar_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `id_presensi_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `urutan_kelas`
--
ALTER TABLE `urutan_kelas`
  MODIFY `id_urutan_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kelas_siswa`
--
ALTER TABLE `data_kelas_siswa`
  ADD CONSTRAINT `data_kelas_siswa_ibfk_1` FOREIGN KEY (`id_kelas_siswa`) REFERENCES `kelas_siswa` (`id_kelas_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_kelas_siswa_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD CONSTRAINT `jadwal_mengajar_ibfk_1` FOREIGN KEY (`id_sesi`) REFERENCES `data_sesi` (`id_sesi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_mengajar_ibfk_2` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_mengajar_kelas`
--
ALTER TABLE `jadwal_mengajar_kelas`
  ADD CONSTRAINT `jadwal_mengajar_kelas_ibfk_1` FOREIGN KEY (`id_kelas_siswa`) REFERENCES `kelas_siswa` (`id_kelas_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_mengajar_kelas_ibfk_2` FOREIGN KEY (`id_jadwal_mengajar`) REFERENCES `jadwal_mengajar` (`id_jadwal_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_siswa_ibfk_3` FOREIGN KEY (`id_urutan_kelas`) REFERENCES `urutan_kelas` (`id_urutan_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_siswa_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_siswa` (`id_kelas_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD CONSTRAINT `presensi_siswa_ibfk_1` FOREIGN KEY (`id_presensi`) REFERENCES `presensi` (`id_presensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_siswa_ibfk_2` FOREIGN KEY (`id_data_kelas_siswa`) REFERENCES `data_kelas_siswa` (`id_data_kelas_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
