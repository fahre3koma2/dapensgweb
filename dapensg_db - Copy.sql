/*
 Navicat Premium Data Transfer

 Source Server         : LocalSQL
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : dapensg_db

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 01/10/2021 05:31:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berkas
-- ----------------------------
DROP TABLE IF EXISTS `berkas`;
CREATE TABLE `berkas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `perihal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `create_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `views` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berkas
-- ----------------------------
INSERT INTO `berkas` VALUES (1, NULL, 'asd', 'asd', '1632980727_asd', NULL, NULL, '2021-09-30 12:45:27', '2021-09-30 12:45:27', NULL, NULL, 7);
INSERT INTO `berkas` VALUES (2, '2312320/2312cHPPP', 'sadqw', 'wqeq', '1632981900_sadqw.pdf', 'berita', NULL, '2021-09-30 13:05:00', '2021-09-30 13:05:00', NULL, NULL, 5);
INSERT INTO `berkas` VALUES (4, '2312320/2312cHPPP', 'Lakukan Ini Jika Penyewa Menunggak dan Enggan Pindah Rumah', 'Pada dasarnya, suatu perjanjian tidak boleh dibuat atas suatu paksaan dan isi perjanjian tersebut tidak boleh bertentangan dengan undang-undang, kesusilaan, dan ketertiban umum.\r\n\r\nDalam hal perjanjian ditandatangani atas dasar paksaan, maka unsur sepakat tidak terpenuhi. Konsekuensinya, perjanjian tersebut menjadi batal sebagaimana disebut dalam Pasal 1323 Kitab Undang-Undang Hukum Perdata. Namun, adanya paksaan tersebut harus dapat dibuktikan.', '1632996713_Lakukan Ini Jika Penyewa Menunggak dan Enggan Pindah Rumah.pdf', 'hukumonline', NULL, '2021-09-30 17:11:53', '2021-09-30 21:48:39', 'Misha Primaresty', NULL, 1);
INSERT INTO `berkas` VALUES (5, '20/POJK.04/2021', 'Peraturan OJK Tentang Perubahan Kedua Atas Peraturan OJK Nomor 11-POJK.03-2020', 'POJK tentang Perubahan Kedua Atas POJK Tentang Stimulus Perekonomian Nasional Sebagai Kebijakan Countercyclical Dampak Penyebaran Coronavirus Disease 2019.', '1633040746_Peraturan OJK Tentang Perubahan Kedua Atas Peraturan OJK Nomor 11-POJK.03-2020.pdf', 'hukumonline', NULL, '2021-10-01 05:25:46', '2021-10-01 05:25:46', 'Admin', NULL, NULL);

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_pegawai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO `biodata` VALUES (1, 1, 'Admin', '12381293', 'Administrator', 'Administrator', 'Jl. Ikan', NULL, NULL, NULL, NULL);
INSERT INTO `biodata` VALUES (3, 3, 'Fajarwati Dwi Ratnaningtias', '081', 'Kabag. Investasi', NULL, NULL, '2021-07-02 14:46:41', '2021-07-02 14:46:41', NULL, '6587009');
INSERT INTO `biodata` VALUES (4, 4, 'Achmad Sobirin', '081', 'Kabag. Kepesertaan', NULL, NULL, '2021-07-02 14:48:59', '2021-07-02 14:48:59', NULL, '6687011');
INSERT INTO `biodata` VALUES (5, 5, 'Isrohman', '081', 'Kasi. Verifikasi', NULL, NULL, '2021-07-02 14:50:19', '2021-07-02 14:50:19', NULL, '6688015');
INSERT INTO `biodata` VALUES (6, 6, 'Amir Yusuf', '081', 'Kasi. Keuangan', NULL, NULL, '2021-07-02 14:51:11', '2021-07-02 14:51:11', NULL, '6788014');
INSERT INTO `biodata` VALUES (7, 7, 'Agus Suhelmi', '081', 'Kasi. Umum', NULL, NULL, '2021-07-02 14:56:23', '2021-07-02 14:56:23', NULL, '6889022');
INSERT INTO `biodata` VALUES (8, 8, 'Andreas Otong Jaya', '081', 'Kasi. Sumber Daya Manusia', NULL, NULL, '2021-07-02 14:57:02', '2021-07-02 14:57:02', NULL, '6810023');
INSERT INTO `biodata` VALUES (9, 9, 'Endang Sri Hartati W.', '081', 'Kabag. Akuntansi & Keuangan', NULL, NULL, '2021-07-02 14:57:42', '2021-07-02 14:57:42', NULL, '7513026');
INSERT INTO `biodata` VALUES (10, 12, 'Ahmad Jeffry Zahidi', '081', 'Kasi. Investasi', NULL, NULL, '2021-07-02 14:59:26', '2021-07-02 14:59:26', NULL, '8712025');
INSERT INTO `biodata` VALUES (11, 14, 'Nur Indah Kurnia Sari', '081', 'Staf Investasi', NULL, NULL, '2021-07-02 15:00:23', '2021-07-02 15:00:23', NULL, '9319302');
INSERT INTO `biodata` VALUES (12, 15, 'Adelia Kumara Alvionita', '081', 'Kasi. Akuntansi & Pelaporan', NULL, NULL, '2021-07-02 15:00:54', '2021-07-02 15:00:54', NULL, '9417301');
INSERT INTO `biodata` VALUES (13, 16, 'Ellen Triana M.', '081', 'Staf Kepesertaan', NULL, NULL, '2021-07-02 15:01:51', '2021-07-02 15:01:51', NULL, 'CP20121');
INSERT INTO `biodata` VALUES (14, 17, 'Misha Primaresty', '081', 'Staf Kepesertaan', NULL, NULL, '2021-07-02 15:02:31', '2021-07-02 15:02:31', NULL, 'CP90172');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_05_07_081928_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2);
INSERT INTO `migrations` VALUES (6, '2019_12_14_000001_create_personal_access_tokens_table', 2);
INSERT INTO `migrations` VALUES (7, '2021_05_08_004737_create_sessions_table', 2);
INSERT INTO `migrations` VALUES (8, '2021_09_30_213621_add_votes_to_berkas', 3);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 3);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 4);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 5);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 6);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 7);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 8);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 9);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 12);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 14);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 15);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 16);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 17);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 38);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'web', '2021-05-07 08:20:47', '2021-05-07 08:20:47');
INSERT INTO `roles` VALUES (2, 'user', 'web', '2021-05-07 08:20:47', '2021-05-07 08:20:47');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('2xJkScWMuwxGHgp131UnfOE6YlhFqhAAapJmUqPH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiQ21oVURjVW95cjhqaXpwVUFFSE52R0NWQUplT1dhS1ZZY3Y0UW8yeiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vZGFwZW5zZ3dlYi5mYXIvcGVuZ2hhcmdhYW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkMTViakguLjdrQUJYdG1MT0ZvYkxndWpPcHl1ZUhaenVNSmlvTVlIekFlU3hqMnlZaGluTi4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDE1YmpILi43a0FCWHRtTE9Gb2JMZ3VqT3B5dWVIWnp1TUppb01ZSHpBZVN4ajJ5WWhpbk4uIjtzOjU6ImFsZXJ0IjthOjA6e319', 1633040961);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admindapensgweb@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-05-07 08:20:47', '2021-05-07 08:20:47', 'Admin Dapen');
INSERT INTO `users` VALUES (3, 'Fajarwati Dwi Ratnaningtias', 'userdapensg1@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:46:41', '2021-07-02 14:46:41', 'Fajarwati');
INSERT INTO `users` VALUES (4, 'Achmad Sobirin', 'userdapensg2@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:48:59', '2021-07-02 14:48:59', 'Achmad Sobirin');
INSERT INTO `users` VALUES (5, 'Isrohman', 'userdapensg3@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:50:19', '2021-07-02 14:50:19', 'Isrohman');
INSERT INTO `users` VALUES (6, 'Amir Yusuf', 'userdapensg4@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:51:11', '2021-07-02 14:51:11', 'Amir');
INSERT INTO `users` VALUES (7, 'Agus Suhelmi', 'userdapensg5@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:56:23', '2021-07-02 14:56:23', 'Agus');
INSERT INTO `users` VALUES (8, 'Andreas Otong Jaya', 'userdapensg6@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:57:02', '2021-07-02 14:57:02', 'Andreas');
INSERT INTO `users` VALUES (9, 'Endang Sri Hartati W.', 'userdapensg7@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:57:42', '2021-07-02 14:57:42', 'Endang');
INSERT INTO `users` VALUES (12, 'Ahmad Jeffry Zahidi', 'userdapensg8@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 14:59:26', '2021-07-02 14:59:26', 'Ahmad Jeffry');
INSERT INTO `users` VALUES (14, 'Nur Indah Kurnia Sari', 'userdapensg9@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 15:00:23', '2021-07-02 15:00:23', 'Nur Indah');
INSERT INTO `users` VALUES (15, 'Adelia Kumara Alvionita', 'userdapensg10@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 15:00:54', '2021-07-02 15:00:54', 'Adelia');
INSERT INTO `users` VALUES (16, 'Ellen Triana M.', 'userdapensg11@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 15:01:51', '2021-07-02 15:01:51', 'Ellen ');
INSERT INTO `users` VALUES (17, 'Misha Primaresty', 'userdapensg12@gmail.com', NULL, '$2y$10$15bjH..7kABXtmLOFobLgujOpyueHZzuMJioMYHzAeSxj2yYhinN.', NULL, NULL, NULL, '2021-07-02 15:02:31', '2021-07-02 15:02:31', 'Misha');

SET FOREIGN_KEY_CHECKS = 1;
