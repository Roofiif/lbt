-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `slogan1` varchar(255) NOT NULL,
  `slogan2` varchar(255) NOT NULL,
  `slogan3` varchar(255) NOT NULL,
  `slogan4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `description`, `slogan1`, `slogan2`, `slogan3`, `slogan4`, `created_at`, `updated_at`) VALUES
(1, 'aboutus.png', 'Berdiri sejak pada tahun 2021, PT. Luar Biasa Teknologi merupakan perusahaan Business Process Outsourcing (BPO) berfokus pada aktifitas Collection yang telah di naungi AFPI dan OJK. Kami menyediakan seluruh kebutuhan bisnis collection anda dengan Sumber Daya Manusia yang berkualitas & Bertanggung Jawab. PT. Luar Biasa Teknologi adalah salah satu Business Processing Outscoursing (BPO) terbesar di Yogyakarta yang menyediakan berbagai macam pilihan Call Center dan Data Verification bagi perusahaan maupun bisnis untuk mencapai efisiensi dan tujuan operasional terbaik perusahaan yang lebih baik.', 'INTEGRITY', 'DINAMIC', 'EXCELLENT', 'ADAPTIVE', '2023-08-10 18:27:13', '2023-08-10 18:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `utama_img` varchar(255) NOT NULL,
  `desc_ttg` varchar(255) NOT NULL,
  `sert_logo` varchar(255) NOT NULL,
  `sert_link` varchar(255) NOT NULL,
  `sert_desc` varchar(255) NOT NULL,
  `awasi_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `utama_img`, `desc_ttg`, `sert_logo`, `sert_link`, `sert_desc`, `awasi_logo`, `created_at`, `updated_at`) VALUES
(1, 'homepagewoman.jpg', 'Berdiri sejak pada tahun 2021, PT. Luar Biasa Teknologi merupakan perusahaan Business Process Outsourcing (BPO) berfokus pada aktifitas Collection yang telah di naungi AFPI dan OJK.', 'AFPI.png', 'https://afpi.or.id/members-support?cat=&srt=&keyword=Luar%20biasa', 'Terdaftar sebagai Anggota<br> Asosiasi Fintech Pendanaan Bersama Indonesia <br> Nomor 032/REG/DCO/202', 'OJK.png', '2023-08-10 18:25:21', '2023-08-10 18:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `company`, `created_at`, `updated_at`) VALUES
(24, 'uatas.png', 'U Atas', '2023-08-10 18:20:28', '2023-08-11 01:38:23'),
(25, '6estate.png', '6estate', '2023-08-10 18:20:55', '2023-08-10 18:20:55'),
(26, 'DanaRupiah.png', 'Dana rupiah', '2023-08-10 18:21:14', '2023-08-10 18:21:14'),
(27, 'bantusaku.png', 'Bantu Saku', '2023-08-10 18:21:29', '2023-08-10 18:21:29'),
(28, 'finPlus.png', 'Fin Plus', '2023-08-10 18:21:40', '2023-08-10 18:21:40'),
(29, 'samir.png', 'Samir', '2023-08-10 18:21:53', '2023-08-10 18:21:53'),
(30, 'singaHijau.png', 'Singa Fintech', '2023-08-10 18:22:14', '2023-08-10 18:22:14'),
(31, 'solusi.png', 'Solusiku', '2023-08-10 18:23:27', '2023-08-10 18:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kontak.png', '2023-08-10 12:00:18', '2023-08-10 12:00:18'),
(2, 'Box3.jpg', '2023-08-10 18:29:59', '2023-08-10 18:29:59'),
(4, 'carier.jpg', '2023-08-11 01:40:17', '2023-08-11 01:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `karirs`
--

CREATE TABLE `karirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL,
  `job_requirment` varchar(255) NOT NULL,
  `deskripsi_pekerjaan` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `benefit` varchar(255) NOT NULL,
  `linkgf` varchar(255) NOT NULL,
  `fulltime_magang` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karirs`
--

INSERT INTO `karirs` (`id`, `nama_pekerjaan`, `job_requirment`, `deskripsi_pekerjaan`, `salary`, `benefit`, `linkgf`, `fulltime_magang`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Human Resouce', 'dqwwdq', 'adwa', 'Rp 5.000.000 bonus Rp 2.000.000', 'adw', 'https://docs.google.com/forms/d/1vp6Ty5znCUB0I5KoYY36xEcI2V0OY2uAvIyU7Cup810/prefill', 'Fulltime', 'human-resouce', '2023-08-10 21:42:52', '2023-08-10 21:42:52'),
(3, 'Desc Collection', '1. sma/smk', '1. Menghubungi nasabah', 'Rp 5.000.000 bonus Rp 2.000.000', 'BPJS', 'https://docs.google.com/forms/d/1vp6Ty5znCUB0I5KoYY36xEcI2V0OY2uAvIyU7Cup810/prefill', 'Fulltime', 'desc-collection', '2023-08-11 01:42:16', '2023-08-11 01:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email_pt` varchar(255) NOT NULL,
  `email_rec` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `maps_embed` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `image`, `wa`, `telephone`, `alamat`, `email_pt`, `email_rec`, `linkedin`, `maps_embed`, `created_at`, `updated_at`) VALUES
(1, 'kontak.png', '083829912480', '0274-453053', 'Jl. Wates No.185, Onggobayan, Ngestiharjo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184', 'luarbiasatek@gmail.com', 'recruitment@ptlbt.com', 'https://www.linkedin.com/company/pt-luarbiasateknologi/', '!1m14!1m8!1m3!1d7905.802117930041!2d110.333228!3d-7.800299000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b144f4e4f3%3A0xec833a1a245fd6a0!2sPT.%20Luar%20Biasa%20Teknologi!5e0!3m2!1sid!2sid!4v1691716787599!5m2!1sid!2sid', '2023-08-10 18:49:07', '2023-08-10 19:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama_layanan`, `deskripsi_layanan`, `created_at`, `updated_at`) VALUES
(1, 'Desk Collection', 'Pada proses pengumpulan pembayaran atau penagihan terhadap dana atau tagihan yang belum dibayar oleh pelanggan, yang dilakukan melalui meja atau unit khusus dalam perusahaan, dengan tujuan untuk mendapatkan pembayaran yang tertunda atau melalui negosiasi penyelesaian yang adil.', '2023-08-07 07:47:52', '2023-08-07 07:49:18'),
(2, 'Data Checker', 'Individu atau tim yang bertugas untuk memeriksa, memvalidasi, dan memastikan keakuratan data yang terkumpul dalam suatu sistem atau database, dengan melakukan verifikasi terhadap kesalahan, ketidaksesuaian, atau inkonsistensi yang ada dalam data tersebut.', '2023-08-07 07:49:46', '2023-08-07 07:49:46'),
(3, 'Data Analyst', 'Seorang profesional yang memiliki keahlian dalam menganalisis data yang dikumpulkan oleh suatu perusahaan, dengan menggunakan alat atau teknik analisis yang relevan, untuk mengidentifikasi tren, pola, atau wawasan penting yang dapat digunakan sebagai dasar pengambilan keputusan strategis oleh perusahaan.', '2023-08-10 18:12:37', '2023-08-10 18:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_31_070707_create_karir_table', 2),
(6, '2023_08_03_042806_create_karirs_table', 3),
(7, '2023_08_03_132117_create_clients_table', 4),
(8, '2023_08_07_140655_create_layanans_table', 5),
(9, '2023_08_07_155741_create_karirs_table', 6),
(10, '2023_08_10_160202_create_perusahaans_table', 7),
(11, '2023_08_10_171417_create_karirs_table', 8),
(12, '2023_08_10_174306_create_about_table', 9),
(13, '2023_08_10_181150_create_beranda_table', 10),
(14, '2023_08_10_183820_create_kontak_table', 11),
(15, '2023_08_10_185256_create_galeris_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `logo`, `nama_perusahaan`, `created_at`, `updated_at`) VALUES
(1, 'image/gHdpawEL961691717580.png', 'Luar Biasa Teknologi', '2023-08-10 18:41:55', '2023-08-10 18:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Loopinfinity', 'loopinfinity@gmail.com', NULL, '$2y$10$3AMJQ4LDuCiJBacOLBGABe.icALWlmDowL9fErhF6GsxkJFfVrJgO', NULL, '2023-07-28 09:04:14', '2023-07-28 09:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karirs`
--
ALTER TABLE `karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karirs`
--
ALTER TABLE `karirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
