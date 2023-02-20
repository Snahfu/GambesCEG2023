-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2023 at 10:20 PM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1579892_penyisihanCEG`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_kartus`
--

CREATE TABLE `buy_kartus` (
  `kartus_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy_kartus`
--

INSERT INTO `buy_kartus` (`kartus_id`, `teams_id`, `stock`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 1),
(1, 15, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1),
(2, 12, 1),
(2, 13, 1),
(2, 14, 1),
(2, 15, 1),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(3, 6, 1),
(3, 7, 1),
(3, 8, 1),
(3, 9, 1),
(3, 10, 1),
(3, 11, 1),
(3, 12, 1),
(3, 13, 1),
(3, 14, 1),
(3, 15, 1),
(4, 1, 1),
(4, 2, 1),
(4, 3, 1),
(4, 4, 1),
(4, 5, 1),
(4, 6, 1),
(4, 7, 1),
(4, 8, 1),
(4, 9, 1),
(4, 10, 1),
(4, 11, 1),
(4, 12, 1),
(4, 13, 1),
(4, 14, 1),
(4, 15, 1),
(5, 1, 1),
(5, 2, 1),
(5, 3, 1),
(5, 4, 1),
(5, 5, 1),
(5, 6, 1),
(5, 7, 1),
(5, 8, 1),
(5, 9, 1),
(5, 10, 1),
(5, 11, 1),
(5, 12, 1),
(5, 13, 1),
(5, 14, 1),
(5, 15, 1),
(6, 1, 1),
(6, 2, 1),
(6, 3, 1),
(6, 4, 1),
(6, 5, 1),
(6, 6, 1),
(6, 7, 1),
(6, 8, 1),
(6, 9, 1),
(6, 10, 1),
(6, 11, 1),
(6, 12, 1),
(6, 13, 1),
(6, 14, 1),
(6, 15, 1),
(7, 1, 1),
(7, 2, 1),
(7, 3, 1),
(7, 4, 1),
(7, 5, 1),
(7, 6, 1),
(7, 7, 1),
(7, 8, 1),
(7, 9, 1),
(7, 10, 1),
(7, 11, 1),
(7, 12, 1),
(7, 13, 1),
(7, 14, 1),
(7, 15, 1),
(8, 1, 1),
(8, 2, 1),
(8, 3, 1),
(8, 4, 1),
(8, 5, 1),
(8, 6, 1),
(8, 7, 1),
(8, 8, 1),
(8, 9, 1),
(8, 10, 1),
(8, 11, 1),
(8, 12, 1),
(8, 13, 1),
(8, 14, 1),
(8, 15, 1),
(9, 1, 1),
(9, 2, 1),
(9, 3, 1),
(9, 4, 1),
(9, 5, 1),
(9, 6, 1),
(9, 7, 1),
(9, 8, 1),
(9, 9, 1),
(9, 10, 1),
(9, 11, 1),
(9, 12, 1),
(9, 13, 1),
(9, 14, 1),
(9, 15, 1),
(10, 1, 1),
(10, 2, 1),
(10, 3, 1),
(10, 4, 1),
(10, 5, 1),
(10, 6, 1),
(10, 7, 1),
(10, 8, 1),
(10, 9, 1),
(10, 10, 1),
(10, 11, 1),
(10, 12, 1),
(10, 13, 1),
(10, 14, 1),
(10, 15, 1),
(11, 1, 1),
(11, 2, 1),
(11, 3, 1),
(11, 4, 1),
(11, 5, 1),
(11, 6, 1),
(11, 7, 1),
(11, 8, 1),
(11, 9, 1),
(11, 10, 1),
(11, 11, 1),
(11, 12, 1),
(11, 13, 1),
(11, 14, 1),
(11, 15, 1),
(12, 1, 1),
(12, 2, 1),
(12, 3, 1),
(12, 4, 1),
(12, 5, 1),
(12, 6, 1),
(12, 7, 1),
(12, 8, 1),
(12, 9, 1),
(12, 10, 1),
(12, 11, 1),
(12, 12, 1),
(12, 13, 1),
(12, 14, 1),
(12, 15, 1),
(13, 1, 1),
(13, 2, 1),
(13, 3, 1),
(13, 4, 1),
(13, 5, 1),
(13, 6, 1),
(13, 7, 1),
(13, 8, 1),
(13, 9, 1),
(13, 10, 1),
(13, 11, 1),
(13, 12, 1),
(13, 13, 1),
(13, 14, 1),
(13, 15, 1),
(14, 1, 1),
(14, 2, 1),
(14, 3, 1),
(14, 4, 1),
(14, 5, 1),
(14, 6, 1),
(14, 7, 1),
(14, 8, 1),
(14, 9, 1),
(14, 10, 1),
(14, 11, 1),
(14, 12, 1),
(14, 13, 1),
(14, 14, 1),
(14, 15, 1),
(15, 1, 1),
(15, 2, 1),
(15, 3, 1),
(15, 4, 1),
(15, 5, 1),
(15, 6, 1),
(15, 7, 1),
(15, 8, 1),
(15, 9, 1),
(15, 10, 1),
(15, 11, 1),
(15, 12, 1),
(15, 13, 1),
(15, 14, 1),
(15, 15, 1);

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
-- Table structure for table `kartus`
--

CREATE TABLE `kartus` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kartus`
--

INSERT INTO `kartus` (`id`, `nama`, `harga`) VALUES
(1, 'Kartu Coklat', 100),
(2, 'Kartu Kecap', 100),
(3, 'Kartu Biji Kopi Luwak', 100),
(4, 'Kartu Jelly Kopi', 100),
(5, 'Kartu Gelato', 100),
(6, 'Kartu Terasi', 100),
(7, 'Kartu Nata De Coco', 100),
(8, 'Kartu Nori ', 100),
(9, 'Kartu Abon', 100),
(10, 'Kartu Tepung Gandum', 100),
(11, 'Kartu Bubuk Madu', 100),
(12, 'Kartu Marshmallow', 100),
(13, 'Kartu Teh Celup', 100),
(14, 'Kartu Soda', 100),
(15, 'Kartu Saus Tomat', 100);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user22@gmail.com', '$2y$10$oAyS7VHSq.3nhE0h5zI4xObzUIHDSq3.KYdbAgWPU2pr0PCcPYAtO', '2023-02-19 06:25:58');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(16, 'Answer correctly and eliminate', 'Belum Ada', 'Battle', 'KOSONG', '2'),
(17, 'Invisible', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(18, 'Bidak berjalan', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(19, 'Bullseye', 'Belum Ada', 'Battle', 'KOSONG', '2'),
(20, 'Flag of eternity', 'Belum Ada', 'Battle', 'KOSONG', '3'),
(21, 'Buka tutup', 'Belum Ada', 'Single', 'KOSONG', NULL),
(22, 'Food guessing', 'Belum Ada', 'Single', 'KOSONG', NULL),
(23, 'Plant vs human', 'Belum Ada', 'Single', 'KOSONG', NULL),
(24, 'Menulis dengan benang', 'Belum Ada', 'Single', 'KOSONG', NULL),
(25, 'Beautiful lie', 'Belum Ada', 'Single', 'KOSONG', NULL),
(26, 'Goal to Win', 'Belum Ada', 'Single', 'KOSONG', NULL),
(27, 'Bom waktu', 'Belum Ada', 'Single', 'KOSONG', NULL),
(28, 'The royal\'s one', 'Belum Ada', 'Single', 'KOSONG', NULL),
(29, 'Berpikir sebelum melangkah', 'Belum Ada', 'Single', 'KOSONG', NULL),
(30, 'Throw and answer', 'Belum Ada', 'Single', 'KOSONG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penpos_teams`
--

CREATE TABLE `penpos_teams` (
  `penpos_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hasil` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penpos_teams`
--

INSERT INTO `penpos_teams` (`penpos_id`, `teams_id`, `jam`, `hasil`) VALUES
(1, 1, '2023-02-19 12:53:39', 'Team 1 Selesai'),
(1, 2, '2023-02-19 14:31:25', 'Team 2 Selesai'),
(1, 3, '2023-02-19 15:27:11', 'Team 3 Tidak Selesai'),
(1, 4, '2023-02-19 15:34:02', 'Team 4 Tidak Selesai'),
(4, 1, '2023-02-19 16:21:57', 'Team 1 Tidak Selesai'),
(4, 3, '2023-02-19 16:24:08', 'Team 3 Selesai'),
(4, 4, '2023-02-19 16:21:43', 'Team 4 Selesai'),
(4, 10, '2023-02-19 16:22:10', 'Team 10 Selesai'),
(4, 15, '2023-02-19 16:23:20', 'Team 15 Selesai'),
(16, 1, '2023-02-19 14:36:55', 'Team 1 menang Melawan Team 2'),
(16, 2, '2023-02-19 14:36:55', 'Team 2 kalah Melawan Team 1'),
(17, 1, '2023-02-19 15:41:16', 'Team 1 menang Melawan Team 2'),
(17, 2, '2023-02-19 15:41:16', 'Team 2 kalah Melawan Team 1'),
(17, 10, '2023-02-19 15:44:59', 'Team 10 menang Melawan Team 15'),
(17, 14, '2023-02-19 15:44:59', 'Team 14 kalah Melawan Team 10'),
(17, 15, '2023-02-19 15:44:59', 'Team 15 kalah Melawan Team 10'),
(20, 1, '2023-02-19 12:59:03', 'Team 1 menang Melawan Team 2'),
(20, 2, '2023-02-19 12:59:03', 'Team 2 seri Melawan Team 3'),
(20, 3, '2023-02-19 12:59:03', 'Team 3 seri Melawan Team 2'),
(20, 4, '2023-02-19 14:41:21', 'Team 4 menang Melawan Team 5'),
(20, 5, '2023-02-19 14:41:21', 'Team 5 kalah Melawan Team 4'),
(29, 1, '2023-02-19 13:01:12', 'Team 1 Kalah'),
(30, 1, '2023-02-19 15:47:37', 'Team 1 Menang');

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `avatar` text DEFAULT NULL,
  `coin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`, `avatar`, `coin`) VALUES
(1, 'Pemain 1', 'avatar', 575),
(2, 'Pemain 2', 'avatar', 250),
(3, 'Pemain 3', 'avatar', 175),
(4, 'Pemain 4', 'avatar', 125),
(5, 'Pemain 5', 'avatar', 0),
(6, 'Pemain 6', 'avatar', 0),
(7, 'Pemain 7', 'avatar', 0),
(8, 'Pemain 8', 'avatar', 0),
(9, 'Pemain 9', 'avatar', 0),
(10, 'Pemain 10', 'avatar', 175),
(11, 'Pemain 11', 'avatar', 0),
(12, 'Pemain 12', 'avatar', 0),
(13, 'Pemain 13', 'avatar', 0),
(14, 'Pemain 14', 'avatar', 25),
(15, 'Pemain 15', 'avatar', 50);

-- --------------------------------------------------------

--
-- Table structure for table `teams_kartus`
--

CREATE TABLE `teams_kartus` (
  `id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `kartus_id` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sold` enum('Terjual','Belum') NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams_kartus`
--

INSERT INTO `teams_kartus` (`id`, `teams_id`, `kartus_id`, `jam`, `sold`) VALUES
(12, 1, 1, '2023-02-19 12:53:39', 'Belum'),
(13, 2, 1, '2023-02-19 14:31:25', 'Belum'),
(14, 3, 1, '2023-02-19 15:27:11', 'Belum'),
(15, 4, 1, '2023-02-19 15:34:02', 'Belum'),
(16, 4, 4, '2023-02-19 16:21:43', 'Belum'),
(17, 1, 4, '2023-02-19 16:21:57', 'Belum'),
(18, 10, 4, '2023-02-19 16:22:10', 'Belum'),
(19, 15, 4, '2023-02-19 16:23:20', 'Belum'),
(20, 3, 4, '2023-02-19 16:24:08', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penpos_id` int(11) DEFAULT NULL,
  `teams_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `penpos_id`, `teams_id`) VALUES
(1, 'user1', 'user1@gmail.com', 'penpos', NULL, '$2y$10$ilIY8Egeyl8DkCtnArhVaOrurb0afVV6i2.SATnqGcQlTf/RX4TmC', 'sSERvA0Tb67mBQ7jctGy2AV5Yp00tlGXSePZwBqlmjFiUa5yLswwr0QgafzH', NULL, NULL, 1, NULL),
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
-- Indexes for table `buy_kartus`
--
ALTER TABLE `buy_kartus`
  ADD PRIMARY KEY (`kartus_id`,`teams_id`),
  ADD KEY `fk_kartus_has_teams_teams1_idx` (`teams_id`),
  ADD KEY `fk_kartus_has_teams_kartus1_idx` (`kartus_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy_kartus`
--
ALTER TABLE `buy_kartus`
  ADD CONSTRAINT `fk_kartus_has_teams_kartus1` FOREIGN KEY (`kartus_id`) REFERENCES `kartus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kartus_has_teams_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
