-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 04:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gambes_ceg`
--

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
-- Table structure for table `kartus`
--

CREATE TABLE `kartus` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kartus`
--

INSERT INTO `kartus` (`id`, `nama`, `harga`) VALUES
(1, 'Kartu 1', 100),
(2, 'Kartu 2', 100),
(3, 'Kartu 3', 100),
(4, 'Kartu 4', 100),
(5, 'Kartu 5', 100),
(6, 'Kartu 6', 100),
(7, 'Kartu 7', 100),
(8, 'Kartu 8', 100),
(9, 'Kartu 9', 100),
(10, 'Kartu 10', 100),
(11, 'Kartu 11', 100),
(12, 'Kartu 12', 100),
(13, 'Kartu 13', 100),
(14, 'Kartu 14', 100),
(15, 'Kartu 15', 100);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penpos`
--

CREATE TABLE `penpos` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL DEFAULT 'Belum Ada',
  `tipe` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'KOSONG',
  `jumlahTim` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `penpos`
--

INSERT INTO `penpos` (`id`, `nama`, `deskripsi`, `tipe`, `status`, `jumlahTim`) VALUES
(1, 'Jasa 1', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(2, 'Jasa 2', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(3, 'Jasa 3', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(4, 'Jasa 4', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(5, 'Jasa 5', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(6, 'Jasa 6', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(7, 'Jasa 7', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(8, 'Jasa 8', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(9, 'Jasa 9', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(10, 'Jasa 10', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(11, 'Jasa 11', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(12, 'Jasa 12', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(13, 'Jasa 13', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(14, 'Jasa 14', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(15, 'Jasa 15', 'Belum Ada', 'Jasa', 'KOSONG', NULL),
(16, 'Battle 1', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(17, 'Battle 2', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(18, 'Battle 3', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(19, 'Battle 4', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(20, 'Battle 5', 'Belum Ada', 'Battle', 'KOSONG', '2'),
(21, 'Single 1', 'Belum Ada', 'Single', 'KOSONG', NULL),
(22, 'Single 2', 'Belum Ada', 'Single', 'KOSONG', NULL),
(23, 'Single 3', 'Belum Ada', 'Single', 'KOSONG', NULL),
(24, 'Single 4', 'Belum Ada', 'Single', 'KOSONG', NULL),
(25, 'Single 5', 'Belum Ada', 'Single', 'KOSONG', NULL),
(26, 'Single 6', 'Belum Ada', 'Single', 'KOSONG', NULL),
(27, 'Single 7', 'Belum Ada', 'Single', 'KOSONG', NULL),
(28, 'Single 8', 'Belum Ada', 'Single', 'KOSONG', NULL),
(29, 'Single 9', 'Belum Ada', 'Single', 'KOSONG', NULL),
(30, 'Single 10', 'Belum Ada', 'Single', 'KOSONG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penpos_teams`
--

CREATE TABLE `penpos_teams` (
  `penpos_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hasil` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `avatar` text DEFAULT NULL,
  `coin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`, `avatar`, `coin`) VALUES
(1, 'Pemain 1', 'avatar', 0),
(2, 'Pemain 2', 'avatar', 0),
(3, 'Pemain 3', 'avatar', 0),
(4, 'Pemain 4', 'avatar', 0),
(5, 'Pemain 5', 'avatar', 0),
(6, 'Pemain 6', 'avatar', 0),
(7, 'Pemain 7', 'avatar', 0),
(8, 'Pemain 8', 'avatar', 0),
(9, 'Pemain 9', 'avatar', 0),
(10, 'Pemain 10', 'avatar', 0),
(11, 'Pemain 11', 'avatar', 0),
(12, 'Pemain 12', 'avatar', 0),
(13, 'Pemain 13', 'avatar', 0),
(14, 'Pemain 14', 'avatar', 0),
(15, 'Pemain 15', 'avatar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams_kartus`
--

CREATE TABLE `teams_kartus` (
  `id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `kartus_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penpos_id` int(11) DEFAULT NULL,
  `teams_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `penpos_id`, `teams_id`) VALUES
(1, 'user1', 'user1@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 1, NULL),
(2, 'user2', 'user2@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 2, NULL),
(3, 'user3', 'user3@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 3, NULL),
(4, 'user4', 'user4@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 4, NULL),
(5, 'user5', 'user5@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 5, NULL),
(6, 'user6', 'user6@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 6, NULL),
(7, 'user7', 'user7@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 7, NULL),
(8, 'user8', 'user8@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 8, NULL),
(9, 'user9', 'user9@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 9, NULL),
(10, 'user10', 'user10@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 10, NULL),
(11, 'user11', 'user11@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 11, NULL),
(12, 'user12', 'user12@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 12, NULL),
(13, 'user13', 'user13@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 13, NULL),
(14, 'user14', 'user14@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 14, NULL),
(15, 'user15', 'user15@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 15, NULL),
(16, 'user16', 'user16@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 16, NULL),
(17, 'user17', 'user17@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 17, NULL),
(18, 'user18', 'user18@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 18, NULL),
(19, 'user19', 'user19@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 19, NULL),
(20, 'user20', 'user20@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 20, NULL),
(21, 'user21', 'user21@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 21, NULL),
(22, 'user22', 'user22@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 22, NULL),
(23, 'user23', 'user23@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 23, NULL),
(24, 'user24', 'user24@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 24, NULL),
(25, 'user25', 'user25@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 25, NULL),
(26, 'user26', 'user26@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 26, NULL),
(27, 'user27', 'user27@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 27, NULL),
(28, 'user28', 'user28@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 28, NULL),
(29, 'user29', 'user29@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 29, NULL),
(30, 'user30', 'user30@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, 30, NULL),
(31, 'user31', 'user31@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 1),
(32, 'user32', 'user32@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 2),
(33, 'user33', 'user33@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 3),
(34, 'user34', 'user34@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 4),
(35, 'user35', 'user35@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 5),
(36, 'user36', 'user36@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 6),
(37, 'user37', 'user37@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 7),
(38, 'user38', 'user38@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 8),
(39, 'user39', 'user39@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 9),
(40, 'user40', 'user40@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 10),
(41, 'user41', 'user41@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 11),
(42, 'user42', 'user42@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 12),
(43, 'user43', 'user43@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 13),
(44, 'user44', 'user44@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 14),
(45, 'user45', 'user45@gmail.com', 'pemain', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', NULL, NULL, NULL, NULL, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kartus`
--
ALTER TABLE `kartus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penpos`
--
ALTER TABLE `penpos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penpos_teams`
--
ALTER TABLE `penpos_teams`
  ADD PRIMARY KEY (`penpos_id`,`teams_id`),
  ADD KEY `fk_penpos_has_teams_teams1` (`teams_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams_kartus`
--
ALTER TABLE `teams_kartus`
  ADD PRIMARY KEY (`id`,`teams_id`,`kartus_id`),
  ADD KEY `fk_teams_has_kartus_kartus1_idx` (`kartus_id`),
  ADD KEY `fk_teams_has_kartus_teams1_idx` (`teams_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_users_penpos1_idx` (`penpos_id`),
  ADD KEY `fk_users_teams1_idx` (`teams_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartus`
--
ALTER TABLE `kartus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penpos`
--
ALTER TABLE `penpos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teams_kartus`
--
ALTER TABLE `teams_kartus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penpos_teams`
--
ALTER TABLE `penpos_teams`
  ADD CONSTRAINT `fk_penpos_has_teams_penpos` FOREIGN KEY (`penpos_id`) REFERENCES `penpos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penpos_has_teams_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teams_kartus`
--
ALTER TABLE `teams_kartus`
  ADD CONSTRAINT `fk_teams_has_kartus_kartus1` FOREIGN KEY (`kartus_id`) REFERENCES `kartus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teams_has_kartus_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_penpos1` FOREIGN KEY (`penpos_id`) REFERENCES `penpos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
