-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 13.39
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta.spk-pro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'Dadapayam', 'A1', '2020-08-10 08:16:23', '2020-08-10 08:16:23'),
(2, 'Mluweh', 'A2', '2020-08-10 15:42:06', '2020-08-10 15:42:06'),
(3, 'Lebak', 'A3', '2020-08-10 15:44:22', '2020-08-10 15:44:22'),
(4, 'Pakis', 'A4', '2020-08-10 15:45:03', '2020-08-10 15:45:03'),
(5, 'Jatikurung', 'A5', '2020-08-10 15:49:49', '2020-08-10 15:49:49'),
(6, 'Gogodalem', 'A6', '2020-08-10 15:53:50', '2020-08-10 15:53:50'),
(7, 'Kandangan', 'A7', '2020-08-10 15:54:53', '2020-08-10 15:54:53'),
(8, 'Ngrawan', 'A8', '2020-08-10 16:23:26', '2020-08-10 16:23:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasis`
--

CREATE TABLE `evaluasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` bigint(20) UNSIGNED NOT NULL,
  `kriteria` bigint(20) UNSIGNED NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `submit_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `evaluasis`
--

INSERT INTO `evaluasis` (`id`, `alternatif`, `kriteria`, `nilai`, `submit_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4.00, 22, '2020-08-23 12:52:18', '2020-08-23 12:52:18'),
(2, 1, 2, 1.00, 22, NULL, NULL),
(3, 1, 3, 2.00, 22, NULL, NULL),
(4, 1, 4, 3.00, 22, NULL, NULL),
(5, 1, 5, 4.00, 22, NULL, NULL),
(6, 1, 6, 4.00, 22, NULL, NULL),
(7, 1, 7, 3.00, 22, NULL, NULL),
(8, 2, 1, 1.00, 22, NULL, NULL),
(9, 2, 2, 5.00, 22, NULL, NULL),
(10, 2, 3, 1.00, 22, NULL, NULL),
(11, 2, 4, 1.00, 22, NULL, NULL),
(12, 2, 5, 1.00, 22, NULL, NULL),
(13, 2, 6, 1.00, 22, NULL, NULL),
(14, 2, 7, 2.00, 22, NULL, NULL),
(15, 3, 1, 4.00, 22, NULL, NULL),
(44, 3, 2, 3.00, 22, NULL, NULL),
(45, 3, 3, 1.00, 22, NULL, NULL),
(46, 3, 4, 2.00, 22, NULL, NULL),
(47, 3, 5, 4.00, 22, NULL, NULL),
(48, 3, 6, 1.00, 22, NULL, NULL),
(49, 3, 7, 3.00, 22, NULL, NULL),
(50, 4, 1, 4.00, 22, NULL, NULL),
(51, 4, 2, 1.00, 22, NULL, NULL),
(52, 4, 3, 2.00, 22, NULL, NULL),
(53, 4, 4, 2.00, 22, NULL, NULL),
(54, 4, 5, 4.00, 22, NULL, NULL),
(55, 4, 6, 2.00, 22, NULL, NULL),
(56, 4, 7, 3.00, 22, NULL, NULL),
(57, 5, 1, 1.00, 22, NULL, NULL),
(58, 5, 2, 1.00, 22, NULL, NULL),
(59, 5, 3, 3.00, 22, NULL, NULL),
(60, 5, 4, 5.00, 22, NULL, NULL),
(61, 5, 5, 5.00, 22, NULL, NULL),
(62, 5, 6, 5.00, 22, NULL, NULL),
(63, 5, 7, 3.00, 22, NULL, NULL),
(64, 6, 1, 1.00, 22, NULL, NULL),
(65, 6, 2, 2.00, 22, NULL, NULL),
(66, 6, 3, 4.00, 22, NULL, NULL),
(67, 6, 4, 4.00, 22, NULL, NULL),
(68, 6, 5, 3.00, 22, NULL, NULL),
(69, 6, 6, 5.00, 22, NULL, NULL),
(70, 6, 7, 3.00, 22, NULL, NULL),
(71, 7, 1, 3.00, 22, NULL, NULL),
(72, 7, 2, 2.00, 22, NULL, NULL),
(73, 7, 3, 1.00, 22, NULL, NULL),
(74, 7, 4, 5.00, 22, NULL, NULL),
(75, 7, 5, 5.00, 22, NULL, NULL),
(76, 7, 6, 5.00, 22, NULL, NULL),
(77, 7, 7, 3.00, 22, NULL, NULL),
(78, 8, 1, 3.00, 22, NULL, NULL),
(79, 8, 2, 1.00, 22, NULL, NULL),
(80, 8, 3, 2.00, 22, NULL, NULL),
(81, 8, 4, 5.00, 22, NULL, NULL),
(82, 8, 5, 5.00, 22, NULL, NULL),
(83, 8, 6, 5.00, 22, NULL, NULL),
(84, 8, 7, 2.00, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasis`
--

CREATE TABLE `klasifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` bigint(20) UNSIGNED NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `klasifikasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `klasifikasis`
--

INSERT INTO `klasifikasis` (`id`, `kriteria`, `nilai`, `klasifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 1.00, 'Hutan', '2020-07-23 14:49:08', '2020-11-20 20:20:46'),
(2, 1, 2.00, 'Semak Belukar', '2020-07-23 14:49:08', '2020-08-10 18:30:04'),
(3, 1, 3.00, 'Ladang/Tegalan', '2020-07-23 14:49:08', '2020-07-23 14:51:25'),
(4, 1, 4.00, 'Sawah Tadah Hujan', '2020-07-23 14:49:08', '2020-07-23 14:51:25'),
(5, 1, 5.00, 'Perkampungan', '2020-07-23 14:49:08', '2020-07-23 14:51:25'),
(6, 2, 1.00, '< 40000 m3', '2020-07-23 14:54:16', '2020-07-23 14:54:16'),
(7, 2, 2.00, '40000 m3 ≤ X < 80000 m3', '2020-07-23 14:54:16', '2020-07-23 14:54:16'),
(8, 2, 3.00, '80000 m3 ≤ X < 120000 m3', '2020-07-23 14:54:16', '2020-07-23 14:54:16'),
(9, 2, 4.00, '120000 m3 ≤ X < 160000 m3', '2020-07-23 14:54:16', '2020-07-23 14:54:16'),
(10, 2, 5.00, '160000 m3 ≤ X < 200000 m3', '2020-11-20 20:17:38', '2020-11-20 20:17:38'),
(11, 3, 1.00, '1.5 Ha ≤ X < 3.0 Ha', '2020-07-23 14:56:38', '2020-07-23 14:56:38'),
(12, 3, 2.00, '3.0 Ha ≤ X < 4.5 Ha', '2020-07-23 14:56:38', '2020-07-23 14:56:38'),
(13, 3, 3.00, '4.5 Ha ≤ X < 6.0 Ha', '2020-07-23 14:56:38', '2020-07-23 14:56:38'),
(14, 3, 4.00, '6.0 Ha ≤ X < 7.5 Ha', '2020-07-23 14:56:38', '2020-07-23 14:56:38'),
(15, 3, 5.00, '≥ 7.5 Ha', '2020-07-23 14:56:38', '2020-07-23 14:56:38'),
(16, 4, 1.00, '≥ 1500000 m3', '2020-07-23 14:58:33', '2020-07-23 14:58:33'),
(17, 4, 2.00, '750000 m3 ≤ X < 1500000 m3', '2020-07-23 14:58:33', '2020-07-23 14:58:33'),
(18, 4, 3.00, '500000 m3 ≤ X < 750000 m3', '2020-07-23 14:58:33', '2020-07-23 14:58:33'),
(19, 4, 4.00, '250000 m3 ≤ X < 500000 m3', '2020-07-23 14:58:33', '2020-07-23 14:58:33'),
(20, 4, 5.00, '< 250000 m3', '2020-07-23 14:58:33', '2020-07-23 14:58:33'),
(21, 5, 1.00, '≥ 100 hr', '2020-07-23 15:00:09', '2020-07-23 15:00:09'),
(22, 5, 2.00, '80 hr ≤ X < 100 hr', '2020-07-23 15:00:09', '2020-07-23 15:00:09'),
(23, 5, 3.00, '60 hr ≤ X < 80 hr', '2020-07-23 15:00:09', '2020-07-23 15:00:09'),
(24, 5, 4.00, '40 hr ≤ X < 60 hr', '2020-07-23 15:00:09', '2020-07-23 15:00:09'),
(25, 5, 5.00, '< 40 hr', '2020-07-23 15:00:09', '2020-07-23 15:00:09'),
(26, 6, 1.00, '< Rp 10.000,00', '2020-07-23 15:17:34', '2020-07-23 15:17:34'),
(27, 6, 2.00, 'Rp 10.000,00 ≤ X < Rp 20.000,00', '2020-07-23 15:17:34', '2020-07-23 15:17:34'),
(28, 6, 3.00, 'Rp 20.000,00 ≤ X < Rp 30.000,00', '2020-07-23 15:17:34', '2020-07-23 15:17:34'),
(29, 6, 4.00, 'Rp 30.000,00 ≤ X < Rp 40.000,00', '2020-07-23 15:17:34', '2020-07-23 15:17:34'),
(30, 6, 5.00, '≥ Rp 40.0000,00', '2020-07-23 15:17:34', '2020-07-23 15:17:34'),
(31, 7, 1.00, 'Tersedia Jalan Aspal Sampai Site', '2020-07-23 15:11:45', '2020-07-23 15:13:46'),
(32, 7, 2.00, 'Jalan Makadam/Tanah Sampai Site', '2020-07-23 15:11:45', '2020-07-23 15:13:46'),
(33, 7, 3.00, 'Jalan Setapak', '2020-07-23 15:16:04', '2020-07-23 15:16:04'),
(34, 7, 4.00, 'Tidak Tersedia Jalan', '2020-07-23 15:16:04', '2020-07-23 15:16:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minmaks` set('min','maks') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pref` bigint(20) UNSIGNED NOT NULL,
  `kode` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q` double(8,2) NOT NULL,
  `p` double(8,2) NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama`, `minmaks`, `pref`, `kode`, `q`, `p`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Vegetasi Area G. E.', 'maks', 4, 'K1', 1.00, 4.00, 0.13, '2020-07-21 06:37:14', '2020-09-10 14:23:34'),
(2, 'Volume Material T.', 'min', 3, 'K2', 1.00, 2.75, 0.10, '2020-07-21 06:37:14', '2020-09-10 14:23:34'),
(3, 'Luas Daerah Y. A. D.', 'min', 5, 'K3', 1.00, 2.75, 0.25, '2020-07-21 06:41:31', '2020-09-10 14:23:34'),
(4, 'Volume Tampungan E.', 'maks', 5, 'K4', 2.00, 5.00, 0.13, '2020-07-21 06:41:31', '2020-09-10 14:23:34'),
(5, 'Lama Operasi', 'maks', 5, 'K5', 3.25, 5.00, 0.16, '2020-07-21 06:42:49', '2020-09-10 14:23:34'),
(6, 'Harga Air/M3', 'min', 5, 'K6', 1.25, 5.00, 0.13, '2020-07-21 06:42:49', '2020-09-10 14:23:34'),
(7, 'Akses Jalan Menuju S', 'maks', 2, 'K7', 2.25, 3.00, 0.10, '2020-07-21 06:43:51', '2020-09-10 14:23:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_20_175600_create_preferensis_table', 2),
(5, '2020_07_20_175849_create_kriterias_table', 3),
(6, '2020_07_20_180738_create_alternatifs_table', 4),
(7, '2020_07_20_181250_create_klasifikasis_table', 5),
(8, '2020_07_20_181618_create_evaluasis_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('apklingo@gmail.com', '$2y$10$RCGOcddpguesr5IuKrOcvelf8ov0DogUTJ9e2D9DD82vWd32FDY/O', '2020-09-03 07:59:07'),
('prawitoardiansah17@gmail.com', '$2y$10$MGs4QgR8HINwbyEN4Tc1Deq61s7xxxMiFXbpfyghi7cuQioeAKVV2', '2020-09-15 06:00:10'),
('prawito@student.ce.undip.ac.id', '$2y$10$AvIfawiVgWwbnsFXrr7HA.EyX8DGPgf7qOqDKVm60l5iZIA0i7/qm', '2020-09-15 06:03:32'),
('prawito0798@gmail.com', '$2y$10$a/V9ZycDi9HD9ghDNVYzoO1FQsajPCaIebKsz49YClCEx.OFWeafG', '2020-10-28 04:33:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `preferensis`
--

CREATE TABLE `preferensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `preferensis`
--

INSERT INTO `preferensis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Usual', '2020-07-21 06:31:30', '2020-07-21 06:31:30'),
(2, 'Quasi', '2020-07-21 06:31:30', '2020-07-21 06:31:30'),
(3, 'Linier', '2020-07-21 06:31:54', '2020-07-21 06:31:54'),
(4, 'Level', '2020-07-21 06:31:54', '2020-07-21 06:31:54'),
(5, 'Area', '2020-07-21 06:32:23', '2020-07-21 06:32:23'),
(6, 'Gaussian', '2020-07-21 06:32:23', '2020-07-21 06:32:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` set('Administrator','User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(14, 'prawito', 'prawito@student.ce.undip.ac.id', '2020-08-07 03:16:22', '$2y$10$BhcE2yr1b0ytuwHdoGN0NOTiKk9cK220zUgp7fwh7.nwtGPWOOA/.', '6hZtnXgZTuzyE3VMqur5XObLxCmpSKq0lpO2MDlK0pTWaiyxHrEgGaMTXI77', 'User', 0, '2020-08-07 03:16:22', '2020-11-20 01:28:50'),
(22, 'Prawito', 'prawito0798@gmail.com', '2020-08-08 08:19:02', '$2y$10$InDHzspnZNROGC7/8pdgmOceTvxAuqhawqcc8AbkGejPvOtXQNaXi', NULL, 'Administrator', 1, '2020-08-08 08:19:02', '2020-11-20 01:28:54'),
(38, 'Prawito', 'prawitoardiansah17@gmail.com', '2020-09-15 13:01:38', '$2y$10$4fa2cIDyE2l4UpMofQ89eOVRoP5KAjyABLFApeyeKMScakMuDDyE2', NULL, 'User', 1, '2020-09-15 13:01:38', '2020-09-15 13:03:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `evaluasis`
--
ALTER TABLE `evaluasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif` (`alternatif`),
  ADD KEY `kriteria1` (`kriteria`),
  ADD KEY `submit_by` (`submit_by`);

--
-- Indeks untuk tabel `klasifikasis`
--
ALTER TABLE `klasifikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria` (`kriteria`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pref` (`pref`);

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
-- Indeks untuk tabel `preferensis`
--
ALTER TABLE `preferensis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `evaluasis`
--
ALTER TABLE `evaluasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `klasifikasis`
--
ALTER TABLE `klasifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `preferensis`
--
ALTER TABLE `preferensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `evaluasis`
--
ALTER TABLE `evaluasis`
  ADD CONSTRAINT `alternatif` FOREIGN KEY (`alternatif`) REFERENCES `alternatifs` (`id`),
  ADD CONSTRAINT `kriteria1` FOREIGN KEY (`kriteria`) REFERENCES `kriterias` (`id`),
  ADD CONSTRAINT `submit_by` FOREIGN KEY (`submit_by`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `klasifikasis`
--
ALTER TABLE `klasifikasis`
  ADD CONSTRAINT `kriteria` FOREIGN KEY (`kriteria`) REFERENCES `kriterias` (`id`);

--
-- Ketidakleluasaan untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD CONSTRAINT `pref` FOREIGN KEY (`pref`) REFERENCES `preferensis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
