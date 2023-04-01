-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:01 AM
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
-- Table structure for table `buy_kartus`
--

CREATE TABLE `buy_kartus` (
  `kartus_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Table structure for table `clues`
--

CREATE TABLE `clues` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `isi` longtext NOT NULL,
  `combinasi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clues`
--

INSERT INTO `clues` (`id`, `nama`, `isi`, `combinasi`) VALUES
(1, 'Clue 1', 'Aku perlu disangrai terlebih dahulu agar dapat terjadi pembentukan citarasa, aroma, dan warna coklat, serta mengurangi kadar air dan membunuh mikroorganisme yang ada pada nibs ditambahkan suatu (+) produk olahan dari susu yang memasuki tahap freezing agar menjadi padatan, nah karena aku dingin, enaknya ditambah dengan topping yang menyegarkan seperti (+) produk yang dihasilkan dari pertumbuhan starter bakteri Acetobacter Xylinum.', '2,3,10'),
(2, 'Clue 2', 'Produk yang dihasilkan dengan mengubah bentuk protein kedelai menjadi protein terlarut, peptide, pepton dan asam amino, aku enaknya dibikin sambal bareng sesuatu yang (+) dihasilkan dari penguraian enzim oleh enzim proteolitik dan mikroba asam laktat dari udang dan ikan, agar tidak terlalu pedas dapat ditambahkan (+) sesuatu yang terbuat dari proses ekstraksi buah yang dicampur dengan rempah-rempah dan dikoagulasi untuk menambahkan cita rasa kecut, manis, namun segar kepada hidangan.', '5,12,14'),
(3, 'Clue 3', 'Produk yang dihasilkan dari reaksi kimia yang menghasilkan asam karbonat dan CO2, sepertinya aku cocok dikonsumsi dengan (+) sesuatu yang termasuk dalam golongan permen lunak dengan tekstur lembut menyerupai busa dan ringan serta berwarna-warni, dapat dikombinasikan dengan (+) sesuatu yang teksturnya renyah dan terbuat dari kakao bubuk serta pengembang natrium bikarbonat.', '8,9,15'),
(4, 'Clue 4', 'Aku adalah produk yang dihasilkan dengan cara menguapkan semua air laut yang ada sehingga membuat aku menjadi kering dan dikemas dalam bentuk lembaran tipis, lalu aku dapat disantap dengan sesuatu yang (+) dibuat dengan cara digiling dan dikeringkan agar tahan lama sehingga menghasilkan serabut yang berwarna kecoklatan, dan aku bisa dibuat dengan menambahkan suatu produk yang (+) dihasilkan dari pemisahan zat-zat padat dalam susu melalui proses pengentalan atau koagulasi lalu difermentasi agar mengeras.', '1,6,11'),
(5, 'Clue 5', 'Aku merupakan produk yang perlu disangrai agar warnaku berubah menjadi hitam menghasilkan senyawa asam klorogenat agar rasa dan aroma ku semakin nikmat, jika aku ditambahkan suatu (+) produk yang dibuat dengan karagenan agar menjadi padat dan kenyal serta ditambahkan suatu perisa supaya aku memiliki rasa pahit yang khas, ditambah (+) produk yang diambil pada pagi hari agar kandungan antioksidannya terjaga agar nantinya hasil ekstraksinya tetap bagus.', '4,7,13');

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
-- Table structure for table `inventory_clue`
--

CREATE TABLE `inventory_clue` (
  `id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `clues_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kartus`
--

CREATE TABLE `kartus` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kartus`
--

INSERT INTO `kartus` (`id`, `nama`, `harga`, `url_gambar`) VALUES
(1, 'Kartu Abon', 100, 'Kartu_1.jpg'),
(2, 'Kartu Coklat', 100, 'Kartu_2.png'),
(3, 'Kartu Gelato', 100, 'Kartu_3.png'),
(4, 'Kartu Jelly Kopi', 100, 'Kartu_4.jpg'),
(5, 'Kartu Kecap', 100, 'Kartu_5.jpg'),
(6, 'Kartu Keju', 100, 'Kartu_6.jpg'),
(7, 'Kartu Kopi Kemasan', 100, 'Kartu_7.png'),
(8, 'Kartu Marshmallow', 100, 'Kartu_8.jpg'),
(9, 'Kartu Minuman Karbonasi', 100, 'Kartu_9.jpg'),
(10, 'Kartu Nata de Coco', 100, 'Kartu_10.png'),
(11, 'Kartu Nori', 100, 'Kartu_11.jpg'),
(12, 'Kartu Saus Tomat', 100, 'Kartu_12.jpg'),
(13, 'Kartu Teh Kemasan', 100, 'Kartu_13.png'),
(14, 'Kartu Terasi', 100, 'Kartu_14.jpg'),
(15, 'Kartu Wafer Coklat', 100, 'Kartu_15.jpg');

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
(30, 'Throw and answer', 'Belum Ada', 'Single', 'KOSONG', NULL),
(31, 'Clue Exchanger 1', 'Belum Ada', 'Penukar', 'KOSONG', NULL),
(32, 'Clue Exchanger 2', 'Belum Ada', 'Penukar', 'KOSONG', NULL),
(33, 'Clue Exchanger 3', 'Belum Ada', 'Penukar', 'KOSONG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penpos_teams`
--

CREATE TABLE `penpos_teams` (
  `penpos_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hasil` varchar(99) NOT NULL,
  `koin` int(11) NOT NULL
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
(15, 'Pemain 15', 'avatar', 0),
(16, 'Pemain 16', 'avatar', 0),
(17, 'Pemain 17', 'avatar', 0),
(18, 'Pemain 18', 'avatar', 0),
(19, 'Pemain 19', 'avatar', 0),
(20, 'Pemain 20', 'avatar', 0),
(21, 'Pemain 21', 'avatar', 0),
(22, 'Pemain 22', 'avatar', 0),
(23, 'Pemain 23', 'avatar', 0),
(24, 'Pemain 24', 'avatar', 0),
(25, 'Pemain 25', 'avatar', 0),
(26, 'Pemain 26', 'avatar', 0),
(27, 'Pemain 27', 'avatar', 0),
(28, 'Pemain 28', 'avatar', 0),
(29, 'Pemain 29', 'avatar', 0),
(30, 'Pemain 30', 'avatar', 0),
(31, 'Pemain 31', 'avatar', 0),
(32, 'Pemain 32', 'avatar', 0),
(33, 'Pemain 33', 'avatar', 0),
(34, 'Pemain 34', 'avatar', 0),
(35, 'Pemain 35', 'avatar', 0),
(36, 'Pemain 36', 'avatar', 0),
(37, 'Pemain 37', 'avatar', 0),
(38, 'Pemain 38', 'avatar', 0),
(39, 'Pemain 39', 'avatar', 0),
(40, 'Pemain 40', 'avatar', 0),
(41, 'Pemain 41', 'avatar', 0),
(42, 'Pemain 42', 'avatar', 0),
(43, 'Pemain 43', 'avatar', 0),
(44, 'Pemain 44', 'avatar', 0),
(45, 'Pemain 45', 'avatar', 0),
(46, 'Pemain 46', 'avatar', 0),
(47, 'Pemain 47', 'avatar', 0),
(48, 'Pemain 48', 'avatar', 0),
(49, 'Pemain 49', 'avatar', 0),
(50, 'Pemain 50', 'avatar', 0);

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
(1, 'user1', 'user1@gmail.com', 'penpos', NULL, '$2y$10$xEiapn2I5p9Zxcca8LhV7.gwlLMFaC/UDt.rMPZN6ulMRlWVKCFvG', NULL, NULL, '2023-03-18 03:04:19', 1, NULL),
(2, 'user2', 'user2@gmail.com', 'penpos', NULL, '$2y$10$DV1KJZWbeU5qqbwc.oPdUOO2Q0R3xAdCz6MWmzNo1BbV.G8NWvbdW', NULL, NULL, NULL, 2, NULL),
(3, 'user3', 'user3@gmail.com', 'penpos', NULL, '$2y$10$YJuQtXSj5gciADigUaYDluWVVmxjQ.RCgTcKf3I23CLWnGd/dbPzq', NULL, NULL, NULL, 3, NULL),
(4, 'user4', 'user4@gmail.com', 'penpos', NULL, '$2y$10$W5KNtyo8qREQJNRG6oaYJOYvTlCARZqgu.wrvfDmYsI9O6dBGGnLq', NULL, NULL, NULL, 4, NULL),
(5, 'user5', 'user5@gmail.com', 'penpos', NULL, '$2y$10$bVWqJMosyctiaaqGtP2LA.wOEhx0dfvfilGMq9BrRjRABMEecQKUu', NULL, NULL, NULL, 5, NULL),
(6, 'user6', 'user6@gmail.com', 'penpos', NULL, '$2y$10$0uR9esuyq/l0kE3j5lLWTeWSHpjqGgUOx5q4HpnuVIzpYbLeHUuoe', NULL, NULL, NULL, 6, NULL),
(7, 'user7', 'user7@gmail.com', 'penpos', NULL, '$2y$10$uljkI4oGuCsR7LX.LxHPV.i/paFexYcKAANuaSzTWOtIERq0IzNPO', NULL, NULL, NULL, 7, NULL),
(8, 'user8', 'user8@gmail.com', 'penpos', NULL, '$2y$10$fIsmXXzEvsAVM1Fva5DFouWzeJgEwvWcrw28E0Wu76NJ8HvxAXYCC', NULL, NULL, NULL, 8, NULL),
(9, 'user9', 'user9@gmail.com', 'penpos', NULL, '$2y$10$il.ROh3dkn5FEsvuJmu2ueoPmoCK8pMp/3Vts7qj/jyZhAMHy6Bfi', NULL, NULL, NULL, 9, NULL),
(10, 'user10', 'user10@gmail.com', 'penpos', NULL, '$2y$10$zb.e5nLv1hnl0pat8byLR.tj5TTh2Ygjd5S20fZbLnUPYLJNKDqXe', NULL, NULL, NULL, 10, NULL),
(11, 'user11', 'user11@gmail.com', 'penpos', NULL, '$2y$10$qQEXx3GxhGo.KihI5gv2QuSL22PUWyFCj/JjdBF8JEgsQqVIQfy9.', NULL, NULL, NULL, 11, NULL),
(12, 'user12', 'user12@gmail.com', 'penpos', NULL, '$2y$10$XWlYrPc2Z4YXOZYocJ8LNucCmNEzEZYb7xDOAiBr8oyS29NSMxStG', NULL, NULL, NULL, 12, NULL),
(13, 'user13', 'user13@gmail.com', 'penpos', NULL, '$2y$10$iL9OzI5UqZRS/yjGlKIrm.2khtVRTFcVFztQP95jyjDWTWc5y9E/W', NULL, NULL, NULL, 13, NULL),
(14, 'user14', 'user14@gmail.com', 'penpos', NULL, '$2y$10$iZPnZJaRf9xNJi9MOIUARObFOdpCaqLVPj/4oVDaw2QFc4G9K3HEy', NULL, NULL, NULL, 14, NULL),
(15, 'user15', 'user15@gmail.com', 'penpos', NULL, '$2y$10$aWRarABTMXTAEC4FMvVS7ewOCxXI57xt4t1OOR94OEMzlFa7Qg5ii', NULL, NULL, '2023-03-30 08:29:07', 15, NULL),
(16, 'user16', 'user16@gmail.com', 'penpos', NULL, '$2y$10$G9G2Rd83AQl0gb5p/mE9vuEQ9.VS12av47idvXn5OOFkUEbINPhWm', NULL, NULL, '2023-03-18 00:20:14', 16, NULL),
(17, 'user17', 'user17@gmail.com', 'penpos', NULL, '$2y$10$UJYQ1405MSin7jFpn22GnusE.d/LKaaqwdd.PS0gSWovxz81Ag03.', NULL, NULL, NULL, 17, NULL),
(18, 'user18', 'user18@gmail.com', 'penpos', NULL, '$2y$10$jVd/w.wKNSe.g9ZVUmwe9u99bPoCItHqBY3Ta5m/3pgyzPgSLv71K', NULL, NULL, '2023-03-18 21:22:47', 18, NULL),
(19, 'user19', 'user19@gmail.com', 'penpos', NULL, '$2y$10$9f/3viCN5jXy7J8kHVH8ueAEUq9wFqV0rpvv.W7mQwmap8JwVQmLi', NULL, NULL, NULL, 19, NULL),
(20, 'user20', 'user20@gmail.com', 'penpos', NULL, '$2y$10$/7hCe.T8xYjlcbgzM3Co4.LKR3ysJ8xrNtyUaIv5bLyAh6qetpbsG', NULL, NULL, '2023-03-17 19:29:39', 20, NULL),
(21, 'user21', 'user21@gmail.com', 'penpos', NULL, '$2y$10$CS4qKklHpWO5oR5WCRSwKeQHz.wP9xRzysJ6iqOMbvKXC7x4L/yW.', NULL, NULL, NULL, 21, NULL),
(22, 'user22', 'user22@gmail.com', 'penpos', NULL, '$2y$10$lCxKY/qW6DENf9TOEqlbPe6WOL8iuNgNQtiqj0B/4JNwUwyjsOwFm', NULL, NULL, NULL, 22, NULL),
(23, 'user23', 'user23@gmail.com', 'penpos', NULL, '$2y$10$sCR3hTUaqhPoQlIktK0t5.aisPtvnXxKv3GfYySutydnNv6ySYFju', NULL, NULL, NULL, 23, NULL),
(24, 'user24', 'user24@gmail.com', 'penpos', NULL, '$2y$10$rbx0XOikH9Gmo2NlNjJcCuCjnrZoyYTFF74EltDJyDzF23p8mgMC2', NULL, NULL, NULL, 24, NULL),
(25, 'user25', 'user25@gmail.com', 'penpos', NULL, '$2y$10$TdfkXium8FPYOHxzmAUgrOjGfwUcfsn/L6RPgZH/xjKFC8p0bp/vy', NULL, NULL, NULL, 25, NULL),
(26, 'user26', 'user26@gmail.com', 'penpos', NULL, '$2y$10$ZhlzmrjEVG.mW1YhrAsSrO8IMRtx5sNKxYLQ2b/OyASvJ1vLE5Uxa', NULL, NULL, NULL, 26, NULL),
(27, 'user27', 'user27@gmail.com', 'penpos', NULL, '$2y$10$qiwPAaMui5YfeNYPCkBo7OtdPYvLfN72iTFKwsp6/aY6PSgbv9IXK', NULL, NULL, NULL, 27, NULL),
(28, 'user28', 'user28@gmail.com', 'penpos', NULL, '$2y$10$QDMDeqqEw1DxaO4zUiaXYuiAJhue/gb50GHZckR84OMoJNJnsfUWy', NULL, NULL, NULL, 28, NULL),
(29, 'user29', 'user29@gmail.com', 'penpos', NULL, '$2y$10$wLsRslyYlAfpbM8ZwthRVOzyqft/FdbhIipR3Svj9FUsN4lu6DCX.', NULL, NULL, NULL, 29, NULL),
(30, 'user30', 'user30@gmail.com', 'penpos', NULL, '$2y$10$BhEn1JmJ03efeICn9I24.uLtxEE8stk19agu0yOQyge8kWuEBJo6.', NULL, NULL, NULL, 30, NULL),
(31, 'user31', 'user31@gmail.com', 'pemain', NULL, '$2y$10$4Ze2htzkD75ECmeYjWMwauJRFEKgUGliWsW8A6sGGXynOBfHJdMGy', NULL, NULL, '2023-02-20 19:19:37', NULL, 1),
(32, 'user32', 'user32@gmail.com', 'pemain', NULL, '$2y$10$MU7Pj6mT0aDKtvgYfwIdC.8skRpAvmtfYsRsYY4PXWnzFoGetG3UO', NULL, NULL, NULL, NULL, 2),
(33, 'user33', 'user33@gmail.com', 'pemain', NULL, '$2y$10$b1j7u/MTY1AD3sjukwOo1eRDMwNAaRXDNZY4wiU1FFZtoVKsRZmhq', NULL, NULL, NULL, NULL, 3),
(34, 'user34', 'user34@gmail.com', 'pemain', NULL, '$2y$10$QzQNL38IAtGAW5mrP6fYre0Dfh8OwrxJDBAnIvEXr8Z1QvgqRoYPm', NULL, NULL, NULL, NULL, 4),
(35, 'user35', 'user35@gmail.com', 'pemain', NULL, '$2y$10$7Wpc3d9.bBse3x2aQLb.S.OCSd8MFQBbEd5rEvu0x0u5TQsokzWMi', NULL, NULL, '2023-03-15 06:48:10', NULL, 5),
(36, 'user36', 'user36@gmail.com', 'pemain', NULL, '$2y$10$GspkwJnPUSw2KfBDfHyNQ.ZKuLd2yuGkWtLZKQW40uuw7.PVFSrMC', NULL, NULL, NULL, NULL, 6),
(37, 'user37', 'user37@gmail.com', 'pemain', NULL, '$2y$10$rlBSbwdbW1U330OD1scZv.AhRUHuFZFZVNH805htLsyxtnn6stZOC', NULL, NULL, NULL, NULL, 7),
(38, 'user38', 'user38@gmail.com', 'pemain', NULL, '$2y$10$lNQbnnezFF8.7JcBqtZNbOjiX0LPkLPF6BT5ltdEUtNyyeGbXNSrK', NULL, NULL, NULL, NULL, 8),
(39, 'user39', 'user39@gmail.com', 'pemain', NULL, '$2y$10$oEVvL39g7x2lsufBGWRbvOkUNTMRSat4HXEjjfK3q5y/GXkt.PFf.', NULL, NULL, NULL, NULL, 9),
(40, 'user40', 'user40@gmail.com', 'pemain', NULL, '$2y$10$QI958e1vn99EdABgXYm/R.rSY9.jmkCXuTIINz6v6Ce2zhDW/S6Vm', NULL, NULL, NULL, NULL, 10),
(41, 'user41', 'user41@gmail.com', 'pemain', NULL, '$2y$10$z/OYImEO/P5HlJuXhDaDi.RhkFOIDTRxYBytqImiZ/s6hTRPN1.L.', NULL, NULL, '2023-03-25 01:52:15', NULL, 11),
(42, 'user42', 'user42@gmail.com', 'pemain', NULL, '$2y$10$ba05ZseMe6C85uWZiGRzSuk.ttsq5Wmq3r36ukgmqKY9/sPenCaC2', NULL, NULL, '2023-03-17 19:13:48', NULL, 12),
(43, 'user43', 'user43@gmail.com', 'pemain', NULL, '$2y$10$ne2iY8wNAL0fef.L.vqyMOhzf2nQa/BtvxaOPzoqNvA3QSkbWOvWe', NULL, NULL, NULL, NULL, 13),
(44, 'user44', 'user44@gmail.com', 'pemain', NULL, '$2y$10$WGhVu1knmNmlzHj26w33oufNQcNbtucaAx18j4ZGJXZcVHWrZYjkG', NULL, NULL, NULL, NULL, 14),
(45, 'user45', 'user45@gmail.com', 'pemain', NULL, '$2y$10$FE1UoBbJ5vmIW.P3/RmssuDRf4VhekU2OclCFd0q.PHmwjlNDSNpW', NULL, NULL, '2023-03-31 17:51:47', NULL, 15),
(46, 'user46', 'user46@gmail.com', 'pemain', NULL, '$2y$10$fSvbZijmMSi1xtkY.itIk.H0//j8fljwYbcvNdE.S.o0uaxchEI.6', NULL, NULL, NULL, NULL, 16),
(47, 'user47', 'user47@gmail.com', 'pemain', NULL, '$2y$10$.RDBdKumuocVFrO4S6VkI.E2pbv7caOcVxX0MEkYFlgV1AZbGhjni', NULL, NULL, NULL, NULL, 17),
(48, 'user48', 'user48@gmail.com', 'pemain', NULL, '$2y$10$0a.OrzcLmjimGpPbk3uRz.QzaQm1uymQ4zFl21uNbEqD66EGzK2O2', NULL, NULL, NULL, NULL, 18),
(49, 'user49', 'user49@gmail.com', 'pemain', NULL, '$2y$10$josJn1gLLaZwcupQ0hgLre63/8cXJ7QmcN1KjGileRtTmluEumhd6', NULL, NULL, NULL, NULL, 19),
(50, 'user50', 'user50@gmail.com', 'pemain', NULL, '$2y$10$NizCMRjvTlibMOgTJzKIeuq70snO8xizYYu05xkoNKJ249N4Yy7Fq', NULL, NULL, NULL, NULL, 20),
(51, 'user51', 'user51@gmail.com', 'pemain', NULL, '$2y$10$1GF/r4HQ.gr4BzNelGkd5OFpblP.DHlr3HDkKDgkqSnQXjMnj8ltu', NULL, NULL, NULL, NULL, 21),
(52, 'user52', 'user52@gmail.com', 'pemain', NULL, '$2y$10$Ibdk.pDw3ZSiQ0coJPIh1.KQTqybgERXMTTG5K9a0aM5Zef3wkx8m', NULL, NULL, NULL, NULL, 22),
(53, 'user53', 'user53@gmail.com', 'pemain', NULL, '$2y$10$14vLPJA2sgEqRx6mVlTX2.d0b.tl1fSNov8Zy7Ssjkz6iwM5NQmVq', NULL, NULL, NULL, NULL, 23),
(54, 'user54', 'user54@gmail.com', 'pemain', NULL, '$2y$10$VuRUjJu.NWZtY8Xcd6IsAOfc4P1lgpJgRIEOgWmnrOgiR5oF4pDJm', NULL, NULL, NULL, NULL, 24),
(55, 'user55', 'user55@gmail.com', 'pemain', NULL, '$2y$10$HonRxpJkrjuzRBEIvW.n0uKRjmGOt17hy7.IUB3ECWpt7iQWkK3eu', NULL, NULL, NULL, NULL, 25),
(56, 'user56', 'user56@gmail.com', 'pemain', NULL, '$2y$10$JtRpCytYj/cftd0hNhK/DexLSc/dzFxyP6sKXhwP9RW0SejgI3LDy', NULL, NULL, NULL, NULL, 26),
(57, 'user57', 'user57@gmail.com', 'pemain', NULL, '$2y$10$1gGo.p2E0SjuOnUFMfV2rO.djksYbqj4kzdEG5IczZ/6gDUK8Ro.y', NULL, NULL, NULL, NULL, 27),
(58, 'user58', 'user58@gmail.com', 'pemain', NULL, '$2y$10$dq/ccMkugZ2WAsYM3Ri8MuNXWZyrTeaWCdhemn.P9Ze4jG2jAHBR.', NULL, NULL, NULL, NULL, 28),
(59, 'user59', 'user59@gmail.com', 'pemain', NULL, '$2y$10$6b3GCR9zlqrpQ3BKmg26l.pLGlqRC0iRV0RooA7HXnOQywLLOu.8q', NULL, NULL, NULL, NULL, 29),
(60, 'user60', 'user60@gmail.com', 'pemain', NULL, '$2y$10$P31uRdaEH8NIIqbebI8RuO//M5O6rW7XkKaLVJhl4gpRO7AYrgQ7S', NULL, NULL, NULL, NULL, 30),
(61, 'user61', 'user61@gmail.com', 'pemain', NULL, '$2y$10$R8VsIE1UuQgGo.D9klI0QOR054AhI/5hpkqJ8z8oGtAgwqu/i12Pu', NULL, NULL, NULL, NULL, 31),
(62, 'user62', 'user62@gmail.com', 'pemain', NULL, '$2y$10$iyVUF/j0r7Ig5QqRM4JUKOGtICOLuOkKfIUO0XjIOpsa8xaEmFEue', NULL, NULL, NULL, NULL, 32),
(63, 'user63', 'user63@gmail.com', 'pemain', NULL, '$2y$10$4Sd/nxU55D9XWoczn6swS.CVHZAbI4nvJZWMJFjvDcharjaxSJCwu', NULL, NULL, NULL, NULL, 33),
(64, 'user64', 'user64@gmail.com', 'pemain', NULL, '$2y$10$WHmQVcimH6MbRw.zzb1mneWPeLld9Y/hfUBvlyWglP5UodLKCRdjS', NULL, NULL, NULL, NULL, 34),
(65, 'user65', 'user65@gmail.com', 'pemain', NULL, '$2y$10$Llc/.BcA6wOAJpqRW8.4cunTNVmQ94wmvqsow559C2z2L.lrO5ScO', NULL, NULL, NULL, NULL, 35),
(66, 'user66', 'user66@gmail.com', 'pemain', NULL, '$2y$10$bI8Qn82.VIhR.gy9F0CCoOx6ajmLi7.JjycWybZ5/aLj4JGfpgFEK', NULL, NULL, NULL, NULL, 36),
(67, 'user67', 'user67@gmail.com', 'pemain', NULL, '$2y$10$S0HK/VXTCQP/YnMJ70J3tuEgp5wvJpdrbDXOyMtLVuUkYnSJJHYpS', NULL, NULL, NULL, NULL, 37),
(68, 'user68', 'user68@gmail.com', 'pemain', NULL, '$2y$10$2uptkx.1Y9D.Acpa6w0NsuXyIzpi5xv4ObKF.03pNzvPNamcEwKaW', NULL, NULL, NULL, NULL, 38),
(69, 'user69', 'user69@gmail.com', 'pemain', NULL, '$2y$10$7MskwoVnNJqtzr8L3NFb9OXG2v9R2cR1s.4uOjFJjktVbwd9U4Cse', NULL, NULL, NULL, NULL, 39),
(70, 'user70', 'user70@gmail.com', 'pemain', NULL, '$2y$10$RH6puoTtAVQ.2yA/K.htO.W5OTHZGKoIxeuWBa9Iw/Dm3iZrk/.Cm', NULL, NULL, NULL, NULL, 40),
(71, 'user71', 'user71@gmail.com', 'pemain', NULL, '$2y$10$C2oqh9xstCV1FMVUK25hyex0i3y2Sq3nl1Ty2YXAeKhOWahnqhAKW', NULL, NULL, NULL, NULL, 41),
(72, 'user72', 'user72@gmail.com', 'pemain', NULL, '$2y$10$2khpm6J2bex5RAXqp5bjm.I7C0dnM9HS4CBN2qSlb.ZXSLnlWrfi2', NULL, NULL, NULL, NULL, 42),
(73, 'user73', 'user73@gmail.com', 'pemain', NULL, '$2y$10$EjTzqgsdzpz0Dtd8sNcPzusBVmbM/7BkElKyRVVkB2RwuJpo/HJli', NULL, NULL, NULL, NULL, 43),
(74, 'user74', 'user74@gmail.com', 'pemain', NULL, '$2y$10$PTLd.mUgMAH.J3qQSjRQNeM0V9Z550un69E16KdBAGcVlemgfdEBa', NULL, NULL, NULL, NULL, 44),
(75, 'user75', 'user75@gmail.com', 'pemain', NULL, '$2y$10$OzQ.QlALATm62W/IZbdz7.HWX20DABbz2yDY19rHWlVrjDdhmj0YK', NULL, NULL, NULL, NULL, 45),
(76, 'user76', 'user76@gmail.com', 'pemain', NULL, '$2y$10$kxe5AO90OVvF271WP9ZMU.D6yU9G63O.m70nqGfUuyy8duzXsaOmS', NULL, NULL, NULL, NULL, 46),
(77, 'user77', 'user77@gmail.com', 'pemain', NULL, '$2y$10$oMfyc.cRvsIegvHQiuPPaOkBEbPdZkgxKEAl/5RrATIM0vdfgPgVe', NULL, NULL, NULL, NULL, 47),
(78, 'user78', 'user78@gmail.com', 'pemain', NULL, '$2y$10$GBzlkr8SGAfonNHrUgInEurZ.1568QWiqBcL9iBqLD6H10gxpzYna', NULL, NULL, NULL, NULL, 48),
(79, 'user79', 'user79@gmail.com', 'pemain', NULL, '$2y$10$NF1YJ9DAK5YZdjquxKbXNet62JUYQKLkm.AkHqrIQk2tc7MmnvBdi', NULL, NULL, NULL, NULL, 49),
(80, 'user80', 'user80@gmail.com', 'pemain', NULL, '$2y$10$3tTgOf1JOWXD.dbNRpGZn.4RLNTBStgzt.A60TlwyuTmpbJC3lIDG', NULL, NULL, NULL, NULL, 50),
(81, 'clue1', 'clue1@gmail.com', 'penpos', NULL, '$2y$10$Z4VxVQF8sVXzJpq6i9tYrO903WWkNmrM93lUVoAe5zxnCiGItwpem', NULL, NULL, '2023-03-31 17:56:47', 31, NULL),
(82, 'clue1', 'clue2@gmail.com', 'penpos', NULL, '$2y$10$jhKlNPM20CpjyLsEye0zaudFZ6NOIEWkoIDlDZHFN/UZmerpqwCQG', NULL, NULL, NULL, 32, NULL),
(83, 'clue1', 'clue3@gmail.com', 'penpos', NULL, '$2y$10$J43m73ZWcp6iFmcErO.Gbu5BWOl3VM5vyoHYej58zsn7GvFefa6Wy', NULL, NULL, NULL, 33, NULL);

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
-- Indexes for table `clues`
--
ALTER TABLE `clues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventory_clue`
--
ALTER TABLE `inventory_clue`
  ADD PRIMARY KEY (`id`,`teams_id`,`clues_id`),
  ADD KEY `fk_teams_has_clues_clues1_idx` (`clues_id`),
  ADD KEY `fk_teams_has_clues_teams1_idx` (`teams_id`);

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
-- AUTO_INCREMENT for table `clues`
--
ALTER TABLE `clues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_clue`
--
ALTER TABLE `inventory_clue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `teams_kartus`
--
ALTER TABLE `teams_kartus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
-- Constraints for table `inventory_clue`
--
ALTER TABLE `inventory_clue`
  ADD CONSTRAINT `fk_teams_has_clues_clues1` FOREIGN KEY (`clues_id`) REFERENCES `clues` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teams_has_clues_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
