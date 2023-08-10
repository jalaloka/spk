-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2023 pada 15.20
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id` char(36) NOT NULL,
  `1` int(36) DEFAULT NULL,
  `2` int(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `k1` varchar(255) DEFAULT NULL,
  `k2` varchar(255) DEFAULT NULL,
  `k3` varchar(255) DEFAULT NULL,
  `k4` varchar(255) DEFAULT NULL,
  `k5` varchar(255) DEFAULT NULL,
  `k6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `id_pegawai`, `nama`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `created_at`, `updated_at`) VALUES
(21, '99b0b0f4-075e-4f19-9ad5-848cbc05269f', NULL, 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'cukup', 'Sangat Baik', '2023-08-10 06:08:56', '2023-08-10 06:08:56'),
(22, '99beb0d7-abd7-4493-8d9b-26efd8380315', NULL, 'kurang', 'kurang', 'kurang', 'kurang', 'kurang', 'kurang', '2023-08-10 06:16:14', '2023-08-10 06:16:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen`
--

CREATE TABLE `komponen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` char(36) NOT NULL,
  `kode` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bobot` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
('99bea402-7bca-46ea-bf69-88ebafce3152', 'K1', 'Prestasi Kerja', '15%', '2023-07-26 23:52:24', '2023-07-26 23:52:24'),
('99bea491-4626-42a4-83d1-be2f667b6fde', 'K2', 'Disiplin', '15%', '2023-07-26 23:53:58', '2023-07-26 23:53:58'),
('99bea4b3-34c3-4735-af2e-73e3ba0316be', 'K3', 'Kehadiran', '20%', '2023-07-26 23:54:20', '2023-07-26 23:54:20'),
('99bea4e1-426f-4503-9ace-33a59a99737f', 'K4', 'Tanggung Jawab', '10%', '2023-07-26 23:54:50', '2023-07-26 23:54:50'),
('99bea506-fa74-4f47-9c26-8665db623662', 'K5', 'Kejujuran', '15%', '2023-07-26 23:55:15', '2023-07-26 23:55:15'),
('99bea52d-cae3-4ff3-b9b4-24e8b1d5522e', 'K6', 'Kerjasama', '15%', '2023-07-26 23:55:40', '2023-07-26 23:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_komponen`
--

CREATE TABLE `kriteria_komponen` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_komponen`
--

INSERT INTO `kriteria_komponen` (`id`, `status`, `nama`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sangat Baik', '2023-08-07 09:36:10', '2023-08-07 09:36:10'),
(2, '2', 'Baik', '2023-08-07 09:36:10', '2023-08-07 09:36:10'),
(3, '3', 'cukup', '2023-08-07 09:36:10', '2023-08-07 09:36:10'),
(4, '4', 'kurang', '2023-08-07 09:36:10', '2023-08-07 09:36:10');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` char(36) NOT NULL,
  `nik` char(36) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `agama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pendidikan`, `created_at`, `updated_at`) VALUES
('99b0b0f4-075e-4f19-9ad5-848cbc05269f', '6111010110020001', 'Jalal Oka Saputra', 'Islam', 'Laki-laki', 'Desa Pampang Harapan, Dusun Pasir Mayang', '2002-10-01', 'Jln. Pasir mayang', 'DIII', '2023-07-20 01:27:00', '2023-07-20 01:27:00'),
('99beb0d7-abd7-4493-8d9b-26efd8380315', '6111010110021234', 'Zaki', 'Islam', 'Laki-laki', 'Sandai', '2021-09-08', 'Mulia Kerta', 'DIII', '2023-07-27 00:28:17', '2023-07-27 00:28:17');

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
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`, `update_at`) VALUES
(1, 'admin', '$2a$12$yhHCl01OFVUB5./EcKFEZOJj5LYCHfhu7qZydlEtERro8L2q37e3G', '2023-07-31 16:11:22', '2023-07-31 16:11:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria_komponen`
--
ALTER TABLE `kriteria_komponen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kriteria_komponen`
--
ALTER TABLE `kriteria_komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
