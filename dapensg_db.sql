-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 08:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapensg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `no_pegawai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `user_id`, `name`, `nohp`, `jabatan`, `unit`, `alamat`, `created_at`, `updated_at`, `status`, `no_pegawai`) VALUES
(1, 1, 'Admin', '12381293', 'Administrator', 'Administrator', 'Jl. Ikan', NULL, NULL, NULL, NULL),
(3, 3, 'Fajarwati Dwi Ratnaningtias', '081', 'Kabag. Investasi', NULL, NULL, '2021-07-02 07:46:41', '2021-07-02 07:46:41', NULL, '6587009'),
(4, 4, 'Achmad Sobirin', '081', 'Kabag. Kepesertaan', NULL, NULL, '2021-07-02 07:48:59', '2021-07-02 07:48:59', NULL, '6687011'),
(5, 5, 'Isrohman', '081', 'Kasi. Verifikasi', NULL, NULL, '2021-07-02 07:50:19', '2021-07-02 07:50:19', NULL, '6688015'),
(6, 6, 'Amir Yusuf', '081', 'Kasi. Keuangan', NULL, NULL, '2021-07-02 07:51:11', '2021-07-02 07:51:11', NULL, '6788014'),
(7, 7, 'Agus Suhelmi', '081', 'Kasi. Umum', NULL, NULL, '2021-07-02 07:56:23', '2021-07-02 07:56:23', NULL, '6889022'),
(8, 8, 'Andreas Otong Jaya', '081', 'Kasi. Sumber Daya Manusia', NULL, NULL, '2021-07-02 07:57:02', '2021-07-02 07:57:02', NULL, '6810023'),
(9, 9, 'Endang Sri Hartati W.', '081', 'Kabag. Akuntansi & Keuangan', NULL, NULL, '2021-07-02 07:57:42', '2021-07-02 07:57:42', NULL, '7513026'),
(10, 12, 'Ahmad Jeffry Zahidi', '081', 'Kasi. Investasi', NULL, NULL, '2021-07-02 07:59:26', '2021-07-02 07:59:26', NULL, '8712025'),
(11, 14, 'Nur Indah Kurnia Sari', '081', 'Staf Investasi', NULL, NULL, '2021-07-02 08:00:23', '2021-07-02 08:00:23', NULL, '9319302'),
(12, 15, 'Adelia Kumara Alvionita', '081', 'Kasi. Akuntansi & Pelaporan', NULL, NULL, '2021-07-02 08:00:54', '2021-07-02 08:00:54', NULL, '9417301'),
(13, 16, 'Ellen Triana M.', '081', 'Staf Kepesertaan', NULL, NULL, '2021-07-02 08:01:51', '2021-07-02 08:01:51', NULL, 'CP20121'),
(14, 17, 'Misha Primaresty', '081', 'Staf Kepesertaan', NULL, NULL, '2021-07-02 08:02:31', '2021-07-02 08:02:31', NULL, 'CP90172');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_07_081928_create_permission_tables', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2021_05_08_004737_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 38);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-05-07 01:20:47', '2021-05-07 01:20:47'),
(2, 'user', 'web', '2021-05-07 01:20:47', '2021-05-07 01:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nbuJ7IjpqoTtF0YSi08BljsiqC36KeSAhPCQA2vt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHdLN3Vza1lDSkQ4a3YxV0d1Yll5dVVSUHljQktaMlFSb2RLc0pqYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9kYXBlbnNnd2ViLmZhciI7fX0=', 1625213671);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admindapensgweb@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-05-07 01:20:47', '2021-05-07 01:20:47'),
(3, 'Fajarwati Dwi Ratnaningtias', 'userdapensg1@gmail.com', NULL, '$2y$10$YHZOulob4X/71WUN6kOEQud6.Asfh8aUibfveH1IkHYxM2GN0UDe6', NULL, NULL, NULL, '2021-07-02 07:46:41', '2021-07-02 07:46:41'),
(4, 'Achmad Sobirin', 'userdapensg2@gmail.com', NULL, '$2y$10$Y8WPpYe5IJOvdWRbmBn4f.6WFn83K2YDWiFpSV/UkEf5LubbYsr.S', NULL, NULL, NULL, '2021-07-02 07:48:59', '2021-07-02 07:48:59'),
(5, 'Isrohman', 'userdapensg3@gmail.com', NULL, '$2y$10$04mhFCx1MvjnfoBy18f3NuQMLM1K5j92OKzp8L6x1Pm6RmuYTWBS2', NULL, NULL, NULL, '2021-07-02 07:50:19', '2021-07-02 07:50:19'),
(6, 'Amir Yusuf', 'userdapensg4@gmail.com', NULL, '$2y$10$MWWQSXlKX9cfZykVIAwUCOssC3pnTSy4ZxkkdAV9U59XeBAONlE5.', NULL, NULL, NULL, '2021-07-02 07:51:11', '2021-07-02 07:51:11'),
(7, 'Agus Suhelmi', 'userdapensg5@gmail.com', NULL, '$2y$10$Rqh07w/M/qSdX2wc90xV.O3a1zGSTAOM8r6pUqgW25fj96D9uiLq2', NULL, NULL, NULL, '2021-07-02 07:56:23', '2021-07-02 07:56:23'),
(8, 'Andreas Otong Jaya', 'userdapensg6@gmail.com', NULL, '$2y$10$BfbEKO0eZflIL2inKoC5Ge2.bd6/9JM2ORe9Ku1DucKpWjJJ0HWlq', NULL, NULL, NULL, '2021-07-02 07:57:02', '2021-07-02 07:57:02'),
(9, 'Endang Sri Hartati W.', 'userdapensg7@gmail.com', NULL, '$2y$10$8pWVcLV78gttrDL/rfjNpeR4M5KvniSpIBKjSsem3rtIUq7zZeWiq', NULL, NULL, NULL, '2021-07-02 07:57:42', '2021-07-02 07:57:42'),
(12, 'Ahmad Jeffry Zahidi', 'userdapensg8@gmail.com', NULL, '$2y$10$pFY708I.F0ENDjWdaEstJeQ6rmHCf0rn26uDXaldZzQsX5ZL2Rma2', NULL, NULL, NULL, '2021-07-02 07:59:26', '2021-07-02 07:59:26'),
(14, 'Nur Indah Kurnia Sari', 'userdapensg9@gmail.com', NULL, '$2y$10$sOove15ATNQoZxw4kcCDY.p8rQO6QC7uc83L7tSPQePaNnw0WMJQW', NULL, NULL, NULL, '2021-07-02 08:00:23', '2021-07-02 08:00:23'),
(15, 'Adelia Kumara Alvionita', 'userdapensg10@gmail.com', NULL, '$2y$10$f/WOz/.asAQd1dTx7/npz.Rdn4hjBKG7E2qy/17kcvqnNSr32I7HK', NULL, NULL, NULL, '2021-07-02 08:00:54', '2021-07-02 08:00:54'),
(16, 'Ellen Triana M.', 'userdapensg11@gmail.com', NULL, '$2y$10$PN0J11uFR7Qhp81Cf6mNZuTrpO/rsGogO8rjNIYgavcGuEuupQAhq', NULL, NULL, NULL, '2021-07-02 08:01:51', '2021-07-02 08:01:51'),
(17, 'Misha Primaresty', 'userdapensg12@gmail.com', NULL, '$2y$10$Odr4H23rnCM55L0qjzx9mO6JQBpHBYvggcUPj6TLu0rHuMT9Guzs.', NULL, NULL, NULL, '2021-07-02 08:02:31', '2021-07-02 08:02:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`) USING BTREE,
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE;

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`) USING BTREE,
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`) USING BTREE;

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`) USING BTREE,
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `sessions_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `sessions_last_activity_index` (`last_activity`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
