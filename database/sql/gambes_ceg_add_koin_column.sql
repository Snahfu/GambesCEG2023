-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 11:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `clues`
--

CREATE TABLE `clues` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `isi` longtext NOT NULL,
  `combinasi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kartus`
--

CREATE TABLE `kartus` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `jumlahTim` varchar(45) DEFAULT NULL,
  `koin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penpos`
--

INSERT INTO `penpos` (`id`, `nama`, `deskripsi`, `tipe`, `status`, `jumlahTim`, `koin`) VALUES
(1, 'Jasa 1', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(2, 'Jasa 2', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(3, 'Jasa 3', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(4, 'Jasa 4', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(5, 'Jasa 5', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(6, 'Jasa 6', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(7, 'Jasa 7', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(8, 'Jasa 8', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(9, 'Jasa 9', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(10, 'Jasa 10', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(11, 'Jasa 11', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(12, 'Jasa 12', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(13, 'Jasa 13', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(14, 'Jasa 14', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(15, 'Jasa 15', 'Belum Ada', 'Jasa', 'KOSONG', NULL, NULL),
(16, 'Answer correctly and eliminate', 'Belum Ada', 'Battle', 'KOSONG', '2', '100,150,200,300'),
(17, 'Invisible', 'Belum Ada', 'Battle', 'KOSONG', '3', '100,150,200,300'),
(18, 'Bidak berjalan', 'Belum Ada', 'Battle', 'KOSONG', '3', '100,150,200,300'),
(19, 'Bullseye', 'Belum Ada', 'Battle', 'KOSONG', '2', '100,150,200,300'),
(20, 'Flag of eternity', 'Belum Ada', 'Battle', 'KOSONG', '3', '25,50,175,300'),
(21, 'Buka tutup', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(22, 'Food guessing', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(23, 'Plant vs human', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(24, 'Menulis dengan benang', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(25, 'Beautiful lie', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(26, 'Goal to Win', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(27, 'Bom waktu', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(28, 'The royal\'s one', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(29, 'Berpikir sebelum melangkah', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(30, 'Throw and answer', 'Belum Ada', 'Single', 'KOSONG', NULL, '25,50,75,100'),
(31, 'Clue Exchanger 1', 'Belum Ada', 'Penukar', 'KOSONG', NULL, NULL),
(32, 'Clue Exchanger 2', 'Belum Ada', 'Penukar', 'KOSONG', NULL, NULL),
(33, 'Clue Exchanger 3', 'Belum Ada', 'Penukar', 'KOSONG', NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penpos_teams`
--

INSERT INTO `penpos_teams` (`penpos_id`, `teams_id`, `jam`, `hasil`, `koin`) VALUES
(20, 1, '2023-04-13 10:18:12', 'Team Sudu Yu Jiqing 9 kalah melawan Team IdexH_1', 25),
(20, 2, '2023-04-13 10:18:12', 'Team Tenang kalah melawan Team IdexH_1', 50),
(20, 3, '2023-04-13 10:18:12', 'Team IdexH_1 menang melawan Team Sudu Yu Jiqing 9 dan Team Tenang', 300),
(20, 4, '2023-04-13 10:18:49', 'Team Chemistry seri melawan Team StCar Team', 50),
(20, 5, '2023-04-13 10:18:49', 'Team StCar Team seri melawan Team Chemistry', 50),
(20, 6, '2023-04-13 10:19:13', 'Team Camelia seri melawan Team Faraday dan Team ClNO2 Sukses', 50),
(20, 7, '2023-04-13 10:19:13', 'Team Faraday seri melawan Team Camelia dan Team ClNO2 Sukses', 50),
(20, 8, '2023-04-13 10:19:13', 'Team ClNO2 Sukses seri melawan Team Faraday dan Team Camelia', 50),
(20, 9, '2023-04-13 12:55:19', 'Team Antrasena menang melawan Team Peter Echoe', 300),
(20, 10, '2023-04-13 12:55:19', 'Team Peter Echoe kalah melawan Team Antrasena', 50),
(20, 11, '2023-04-13 13:05:05', 'Team Golden kalah melawan Team MHBGGWP', 50),
(20, 12, '2023-04-13 13:05:05', 'Team MHBGGWP menang melawan Team Golden dan Team anak anak pilus', 300),
(20, 13, '2023-04-13 13:05:05', 'Team anak anak pilus kalah melawan Team MHBGGWP', 50),
(20, 14, '2023-04-13 13:07:07', 'Team Sukses kalah melawan Team Titanium', 25),
(20, 15, '2023-04-13 13:07:07', 'Team TAURUS kalah melawan Team Titanium', 25),
(20, 16, '2023-04-13 13:07:07', 'Team Titanium menang melawan Team TAURUS dan Team Sukses', 300);

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
(1, 'Sudu Yu Jiqing 9', 'avatar', 75),
(2, 'Tenang', 'avatar', 400),
(3, 'IdexH_1', 'avatar', 600),
(4, 'Chemistry', 'avatar', 50),
(5, 'StCar Team', 'avatar', 50),
(6, 'Camelia', 'avatar', 50),
(7, 'Faraday', 'avatar', 50),
(8, 'ClNO2 Sukses', 'avatar', 50),
(9, 'Antrasena', 'avatar', 300),
(10, 'Peter Echoe', 'avatar', 50),
(11, 'Golden', 'avatar', 50),
(12, 'MHBGGWP', 'avatar', 300),
(13, 'anak anak pilus', 'avatar', 50),
(14, 'Sukses', 'avatar', 25),
(15, 'TAURUS', 'avatar', 25),
(16, 'Titanium', 'avatar', 300),
(17, 'Tokkii', 'avatar', 0),
(18, 'Kejora', 'avatar', 0),
(19, 'Powerpuff Boys', 'avatar', 0),
(20, 'The Wild Card', 'avatar', 0),
(21, 'neurobion', 'avatar', 0),
(22, 'smatraga', 'avatar', 0),
(23, 'KELAPA', 'avatar', 0),
(24, 'Manggis', 'avatar', 0),
(25, 'Anggur', 'avatar', 0),
(26, 'Durian', 'avatar', 0),
(27, 'Semangka', 'avatar', 0),
(28, 'RAMBUTAN', 'avatar', 0),
(29, 'Strawberry', 'avatar', 0),
(30, 'Delima', 'avatar', 0),
(31, 'SolidSiji', 'avatar', 0),
(32, 'JJAAKK', 'avatar', 0),
(33, 'Cehsttemium', 'avatar', 0),
(34, 'Tim MBI 1', 'avatar', 0),
(35, 'Tim MBI 2', 'avatar', 0),
(36, 'Tim MBI 3', 'avatar', 0),
(37, 'Jujutsu Kaisen', 'avatar', 0),
(38, 'Power Rangers', 'avatar', 0),
(39, 'Chemismysole', 'avatar', 0),
(40, 'Terserah', 'avatar', 0),
(41, 'Tim Edu', 'avatar', 0),
(42, 'Kutub Utara', 'avatar', 0),
(43, 'Russelia', 'avatar', 0),
(44, 'Organics', 'avatar', 0),
(45, 'CASSIA', 'avatar', 0),
(46, 'Friedels', 'avatar', 0),
(47, 'MaSBrO', 'avatar', 0),
(48, 'Tim Satu', 'avatar', 0),
(49, 'Falcon', 'avatar', 0),
(50, 'Mafaron', 'avatar', 0),
(51, 'No Clue', 'avatar', 0),
(52, 'B Kubik', 'avatar', 0),
(53, 'Sainstriker', 'avatar', 0),
(54, 'ManchesterUnited', 'avatar', 0),
(55, 'AnakAnak_Linda', 'avatar', 0),
(56, 'ALKANA', 'avatar', 0),
(57, 'ALKENA', 'avatar', 0),
(58, 'ALKUNA', 'avatar', 0),
(59, 'Edo_the_Explorer', 'avatar', 0),
(60, 'Schrodinger', 'avatar', 0),
(61, 'CARAS2023', 'avatar', 0),
(62, 'PISANG', 'avatar', 0),
(63, 'MELON MANIS', 'avatar', 0),
(64, 'APEL MALANG', 'avatar', 0),
(65, 'Orpheus', 'avatar', 0),
(66, 'Amethyst', 'avatar', 0),
(67, 'Geranium', 'avatar', 0),
(68, 'Pelik G.', 'avatar', 0);

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
(1, 'user1', 'user1@gmail.com', 'penpos', NULL, '$2y$10$GF0ZkS240TBoYAnkycAckOqmJkqLlvJ2XuX3BrYApnQGpkwtLnNwe', NULL, NULL, '2023-04-06 23:57:01', 1, NULL),
(2, 'user2', 'user2@gmail.com', 'penpos', NULL, '$2y$10$DV1KJZWbeU5qqbwc.oPdUOO2Q0R3xAdCz6MWmzNo1BbV.G8NWvbdW', NULL, NULL, NULL, 2, NULL),
(3, 'user3', 'user3@gmail.com', 'penpos', NULL, '$2y$10$YJuQtXSj5gciADigUaYDluWVVmxjQ.RCgTcKf3I23CLWnGd/dbPzq', NULL, NULL, NULL, 3, NULL),
(4, 'user4', 'user4@gmail.com', 'penpos', NULL, '$2y$10$W5KNtyo8qREQJNRG6oaYJOYvTlCARZqgu.wrvfDmYsI9O6dBGGnLq', NULL, NULL, NULL, 4, NULL),
(5, 'user5', 'user5@gmail.com', 'penpos', NULL, '$2y$10$bVWqJMosyctiaaqGtP2LA.wOEhx0dfvfilGMq9BrRjRABMEecQKUu', NULL, NULL, NULL, 5, NULL),
(6, 'user6', 'user6@gmail.com', 'penpos', NULL, '$2y$10$0uR9esuyq/l0kE3j5lLWTeWSHpjqGgUOx5q4HpnuVIzpYbLeHUuoe', NULL, NULL, NULL, 6, NULL),
(7, 'user7', 'user7@gmail.com', 'penpos', NULL, '$2y$10$uljkI4oGuCsR7LX.LxHPV.i/paFexYcKAANuaSzTWOtIERq0IzNPO', NULL, NULL, NULL, 7, NULL),
(8, 'user8', 'user8@gmail.com', 'penpos', NULL, '$2y$10$fIsmXXzEvsAVM1Fva5DFouWzeJgEwvWcrw28E0Wu76NJ8HvxAXYCC', NULL, NULL, NULL, 8, NULL),
(9, 'user9', 'user9@gmail.com', 'penpos', NULL, '$2y$10$0kpTY4m9fWosJ.e15LOhJOY6m.prvIW8e9bxXcoCutqI7JizBeEfW', NULL, NULL, '2023-04-07 21:55:19', 9, NULL),
(10, 'user10', 'user10@gmail.com', 'penpos', NULL, '$2y$10$zb.e5nLv1hnl0pat8byLR.tj5TTh2Ygjd5S20fZbLnUPYLJNKDqXe', NULL, NULL, NULL, 10, NULL),
(11, 'user11', 'user11@gmail.com', 'penpos', NULL, '$2y$10$qQEXx3GxhGo.KihI5gv2QuSL22PUWyFCj/JjdBF8JEgsQqVIQfy9.', NULL, NULL, NULL, 11, NULL),
(12, 'user12', 'user12@gmail.com', 'penpos', NULL, '$2y$10$XWlYrPc2Z4YXOZYocJ8LNucCmNEzEZYb7xDOAiBr8oyS29NSMxStG', NULL, NULL, NULL, 12, NULL),
(13, 'user13', 'user13@gmail.com', 'penpos', NULL, '$2y$10$iL9OzI5UqZRS/yjGlKIrm.2khtVRTFcVFztQP95jyjDWTWc5y9E/W', NULL, NULL, NULL, 13, NULL),
(14, 'user14', 'user14@gmail.com', 'penpos', NULL, '$2y$10$iZPnZJaRf9xNJi9MOIUARObFOdpCaqLVPj/4oVDaw2QFc4G9K3HEy', NULL, NULL, NULL, 14, NULL),
(15, 'user15', 'user15@gmail.com', 'penpos', NULL, '$2y$10$aWRarABTMXTAEC4FMvVS7ewOCxXI57xt4t1OOR94OEMzlFa7Qg5ii', NULL, NULL, '2023-03-30 08:29:07', 15, NULL),
(16, 'user16', 'user16@gmail.com', 'penpos', NULL, '$2y$10$D2ObC63WrixWeLR4n0zgq.fqYHfwZkja4uzcIZ6RUYLyuCEBJJQ8i', NULL, NULL, '2023-04-07 21:55:50', 16, NULL),
(17, 'user17', 'user17@gmail.com', 'penpos', NULL, '$2y$10$UJYQ1405MSin7jFpn22GnusE.d/LKaaqwdd.PS0gSWovxz81Ag03.', NULL, NULL, NULL, 17, NULL),
(18, 'user18', 'user18@gmail.com', 'penpos', NULL, '$2y$10$jVd/w.wKNSe.g9ZVUmwe9u99bPoCItHqBY3Ta5m/3pgyzPgSLv71K', NULL, NULL, '2023-03-18 21:22:47', 18, NULL),
(19, 'user19', 'user19@gmail.com', 'penpos', NULL, '$2y$10$9f/3viCN5jXy7J8kHVH8ueAEUq9wFqV0rpvv.W7mQwmap8JwVQmLi', NULL, NULL, NULL, 19, NULL),
(20, 'user20', 'user20@gmail.com', 'penpos', NULL, '$2y$10$N3Rgu1j3/WNUI2Mu215qz.ZnxjOO2rzxVpaTWBQwjI99sE5lU7.8y', NULL, NULL, '2023-04-13 00:38:14', 20, NULL),
(21, 'user21', 'user21@gmail.com', 'penpos', NULL, '$2y$10$CS4qKklHpWO5oR5WCRSwKeQHz.wP9xRzysJ6iqOMbvKXC7x4L/yW.', NULL, NULL, NULL, 21, NULL),
(22, 'user22', 'user22@gmail.com', 'penpos', NULL, '$2y$10$lCxKY/qW6DENf9TOEqlbPe6WOL8iuNgNQtiqj0B/4JNwUwyjsOwFm', NULL, NULL, NULL, 22, NULL),
(23, 'user23', 'user23@gmail.com', 'penpos', NULL, '$2y$10$sCR3hTUaqhPoQlIktK0t5.aisPtvnXxKv3GfYySutydnNv6ySYFju', NULL, NULL, NULL, 23, NULL),
(24, 'user24', 'user24@gmail.com', 'penpos', NULL, '$2y$10$rbx0XOikH9Gmo2NlNjJcCuCjnrZoyYTFF74EltDJyDzF23p8mgMC2', NULL, NULL, NULL, 24, NULL),
(25, 'user25', 'user25@gmail.com', 'penpos', NULL, '$2y$10$TdfkXium8FPYOHxzmAUgrOjGfwUcfsn/L6RPgZH/xjKFC8p0bp/vy', NULL, NULL, NULL, 25, NULL),
(26, 'user26', 'user26@gmail.com', 'penpos', NULL, '$2y$10$ZhlzmrjEVG.mW1YhrAsSrO8IMRtx5sNKxYLQ2b/OyASvJ1vLE5Uxa', NULL, NULL, NULL, 26, NULL),
(27, 'user27', 'user27@gmail.com', 'penpos', NULL, '$2y$10$qiwPAaMui5YfeNYPCkBo7OtdPYvLfN72iTFKwsp6/aY6PSgbv9IXK', NULL, NULL, NULL, 27, NULL),
(28, 'user28', 'user28@gmail.com', 'penpos', NULL, '$2y$10$QDMDeqqEw1DxaO4zUiaXYuiAJhue/gb50GHZckR84OMoJNJnsfUWy', NULL, NULL, NULL, 28, NULL),
(29, 'user29', 'user29@gmail.com', 'penpos', NULL, '$2y$10$wLsRslyYlAfpbM8ZwthRVOzyqft/FdbhIipR3Svj9FUsN4lu6DCX.', NULL, NULL, NULL, 29, NULL),
(30, 'user30', 'user30@gmail.com', 'penpos', NULL, '$2y$10$kMHYLcKXd8oSShjE4x.n6udGjwxGvLDJ/qHrAl9vzJDypJbW2A1G.', NULL, NULL, '2023-03-31 18:11:47', 30, NULL),
(31, 'Sudu Yu Jiqing 9', 'user31@gmail.com', 'pemain', NULL, '$2y$10$ujpcJ5fdtmEANMas8jVo0u1WMarx2ycdho7ujCklUJfF4LFs23uYG', NULL, NULL, '2023-03-31 21:29:32', NULL, 1),
(32, 'Tenang', 'user32@gmail.com', 'pemain', NULL, '$2y$10$WYFhMknh0t2ytlCX3EA5MOoA.mYYJh/uV43qE2CbMHvNCeoFej3MK', NULL, NULL, NULL, NULL, 2),
(33, 'IdexH_1', 'user33@gmail.com', 'pemain', NULL, '$2y$10$rQcHzSoKLUkmS3Op27OUNe6xvBPXj56iRuirgIEEPDWcarf8mf4va', NULL, NULL, NULL, NULL, 3),
(34, 'Chemistry', 'user34@gmail.com', 'pemain', NULL, '$2y$10$id37m228cbkpk5AE5JvZ7OQYSG9b.PNlQhty.G66s4nkCbO9WF/OO', NULL, NULL, NULL, NULL, 4),
(35, 'StCar Team', 'user35@gmail.com', 'pemain', NULL, '$2y$10$zs.FlRzErQzGY.jxfZ2hoeWbEKC/Wv2kJVfqoZwh3REkwTQRACTGW', NULL, NULL, '2023-03-15 06:48:10', NULL, 5),
(36, 'Camelia', 'user36@gmail.com', 'pemain', NULL, '$2y$10$XIP.VvQFIsv1Q3miNpvVrevP7vjssyiMow7.Iug1hAlTBLSvmSvsm', NULL, NULL, NULL, NULL, 6),
(37, 'Faraday', 'user37@gmail.com', 'pemain', NULL, '$2y$10$M6uROcKQPdj1IKkhmzk7w.ID.1cOOOENXtJVQHcEC3hbqbPx6Pu4q', NULL, NULL, '2023-04-06 15:22:39', NULL, 7),
(38, 'ClNO2 Sukses', 'user38@gmail.com', 'pemain', NULL, '$2y$10$y7R6zu3O8EeQ65RcDarGVekrkKOnZuXcfvnQvyg3jDXHEcRselhKe', NULL, NULL, NULL, NULL, 8),
(39, 'Antrasena', 'user39@gmail.com', 'pemain', NULL, '$2y$10$HFdmMEPj4JB3ckGt9X77Ru5cNXkhRPJhLYkDg/.XGhVmkXkA7klJG', NULL, NULL, NULL, NULL, 9),
(40, 'Peter Echoe', 'user40@gmail.com', 'pemain', NULL, '$2y$10$Ic9tDCjWZ5brSGfawx71gOIVI7M5MgbhFbxBxOKHQW7uIpjxnmqd2', NULL, NULL, NULL, NULL, 10),
(41, 'Golden', 'user41@gmail.com', 'pemain', NULL, '$2y$10$F1r3k01g9d.RBcmrXsuZAeIiluybVfau/UGzT6FIUbmq4B3f.Yl1.', NULL, NULL, '2023-03-25 01:52:15', NULL, 11),
(42, 'MHBGGWP', 'user42@gmail.com', 'pemain', NULL, '$2y$10$XR0T877Kmmw6jpHoJFmsuePveNXUc8yg/aECTDDpjveWG8/UIGpsG', NULL, NULL, '2023-03-17 19:13:48', NULL, 12),
(43, 'anak anak pilus', 'user43@gmail.com', 'pemain', NULL, '$2y$10$7TpF6w0ymC8RfC4dixhKV.QshpZPGF8jfzY9doHdSUB0QrA9ZYyzq', NULL, NULL, NULL, NULL, 13),
(44, 'Sukses', 'user44@gmail.com', 'pemain', NULL, '$2y$10$fW.2KdUundpzE.RaW/NmXuXPWBeLJK2EZrgiDO3SXTgJm4kwXJv9q', NULL, NULL, NULL, NULL, 14),
(45, 'TAURUS', 'user45@gmail.com', 'pemain', NULL, '$2y$10$zZyq0KtTa3d1Lgp4gPT8nuW7B7YG/INTU3K1yyzTyCkpVfXgVblrC', NULL, NULL, '2023-03-31 19:51:21', NULL, 15),
(46, 'Titanium', 'user46@gmail.com', 'pemain', NULL, '$2y$10$ov40EhVxa2AN6/ynH48sEesVuEPHBZLndKda.D5qS1EFD.MlHi42e', NULL, NULL, NULL, NULL, 16),
(47, 'Tokkii', 'user47@gmail.com', 'pemain', NULL, '$2y$10$HUUVneuid0ktI685Q2POiO8oxN/IaiUThI3zEV3Wn7Ma5LTZli2cq', NULL, NULL, NULL, NULL, 17),
(48, 'Kejora', 'user48@gmail.com', 'pemain', NULL, '$2y$10$7IJmsCG5njsYwy0NplOIKOJYk/qaITWgDV6GUh75noctDP04HqO/C', NULL, NULL, NULL, NULL, 18),
(49, 'Powerpuff Boys', 'user49@gmail.com', 'pemain', NULL, '$2y$10$N.7K8xz5M3UKJ9VFiAmwZusAvc8bkrzy5me7A.A8Qr.nmz6T7Oo3W', NULL, NULL, NULL, NULL, 19),
(50, 'The Wild Card', 'user50@gmail.com', 'pemain', NULL, '$2y$10$zvcN0YccqMxT9s8pqufvleNjTaqMDDEsc0QP2T0e7XX6h0.lsi9W6', NULL, NULL, NULL, NULL, 20),
(51, 'neurobion', 'user51@gmail.com', 'pemain', NULL, '$2y$10$2BDhJX4WTFx.9bESebtT/Ol.fLPAHgOPxoIcKtCTUjR.V6JAYg5I2', NULL, NULL, NULL, NULL, 21),
(52, 'smatraga', 'user52@gmail.com', 'pemain', NULL, '$2y$10$PMJpJsVX7yz6pgRt/DH19e5f6E6S4MaVgWDiBecgRa/Ol1/VJY5tO', NULL, NULL, NULL, NULL, 22),
(53, 'KELAPA', 'user53@gmail.com', 'pemain', NULL, '$2y$10$5wm1yn8AJ55GQ9cQlYi85eT19m/49uzuECc500PvyPgtYH4QbSndu', NULL, NULL, NULL, NULL, 23),
(54, 'Manggis', 'user54@gmail.com', 'pemain', NULL, '$2y$10$YhaRS.aY618C20yisFmtteASBjFVYO2x6dlqCSNLoJX6RhPPMbf06', NULL, NULL, NULL, NULL, 24),
(55, 'Anggur', 'user55@gmail.com', 'pemain', NULL, '$2y$10$UCzt4oYlPA0Wku15ukVz2.Jq1rqETeAqXmNrX0lo0PT0eyVvWnkTG', NULL, NULL, NULL, NULL, 25),
(56, 'Durian', 'user56@gmail.com', 'pemain', NULL, '$2y$10$3S8eHH3bzlSTPYSg6m/MGedRyRs5.rODP1Dga..C8.YJhsNcC06na', NULL, NULL, NULL, NULL, 26),
(57, 'Semangka', 'user57@gmail.com', 'pemain', NULL, '$2y$10$UJ69gp.y4f1XiEQaWJdBsOYODs85xl4idRuPylbMnKUiu.qmdx4xC', NULL, NULL, NULL, NULL, 27),
(58, 'RAMBUTAN', 'user58@gmail.com', 'pemain', NULL, '$2y$10$iES7lj1UN5CAxUDkGT2peureexDoGURCragVqkyI4566A/aFOeT6K', NULL, NULL, NULL, NULL, 28),
(59, 'Strawberry', 'user59@gmail.com', 'pemain', NULL, '$2y$10$TDt8Cg5YGpTONc9/rTBxZe5blNM/Rd.BsPgLCF8rGKdaR8C4qQtKq', NULL, NULL, NULL, NULL, 29),
(60, 'Delima', 'user60@gmail.com', 'pemain', NULL, '$2y$10$kIBwjIOvT5p.mrra.VlIlO4DJhFSRwwmxsuKSYAIub5GbDYRFxgky', NULL, NULL, NULL, NULL, 30),
(61, 'SolidSiji', 'user61@gmail.com', 'pemain', NULL, '$2y$10$w.k9/r3x0s62GSa/nlB6YupKwfKksYHaqOVRF9RaVy6bFsPFW0MGO', NULL, NULL, NULL, NULL, 31),
(62, 'JJAAKK', 'user62@gmail.com', 'pemain', NULL, '$2y$10$sfopOfVLmBf0wdnRQOTbH.BjXsG78xyahJ/vVjPq1/6k3yKl.mg6a', NULL, NULL, NULL, NULL, 32),
(63, 'Cehsttemium', 'user63@gmail.com', 'pemain', NULL, '$2y$10$m55Q6WA3KvG3Ua0EHjh9KO8Tc2TZFtA0fZoC/RxHggdtUQ.r/C1Om', NULL, NULL, NULL, NULL, 33),
(64, 'Tim MBI 1', 'user64@gmail.com', 'pemain', NULL, '$2y$10$UKyZddv0d7ShWJier4eQ1uRZWA8MYrObJcT3Sn1WqcU69Lrd4IbUe', NULL, NULL, NULL, NULL, 34),
(65, 'Tim MBI 2', 'user65@gmail.com', 'pemain', NULL, '$2y$10$dGB1BoIR1boiRKwNuuUAg.YlrHjp6ODx4pFAAaj5nfm/uANAetD/e', NULL, NULL, NULL, NULL, 35),
(66, 'Tim MBI 3', 'user66@gmail.com', 'pemain', NULL, '$2y$10$Pnterk9NBsyI.qTZXCvvJeynHO0WFKESuwZNKzvKxwjP4tVBEPo0O', NULL, NULL, NULL, NULL, 36),
(67, 'Jujutsu Kaisen', 'user67@gmail.com', 'pemain', NULL, '$2y$10$cBz43lYzwm1bPK1Y6ZbZaO9k99wsSSinISmQ1UTvo1Cik2x6JLE6m', NULL, NULL, NULL, NULL, 37),
(68, 'Power Rangers', 'user68@gmail.com', 'pemain', NULL, '$2y$10$.Ju9.xAQtYAjQIep8G4i7Oq0HQ9H2rorRcz85Pg8kE4kGqEGJrQVy', NULL, NULL, NULL, NULL, 38),
(69, 'Chemismysole', 'user69@gmail.com', 'pemain', NULL, '$2y$10$tZMrbyMm1jNTMpJbMWy4S.URn1kIeegqCiSDbvYR4qSaXYlELCrh.', NULL, NULL, NULL, NULL, 39),
(70, 'Terserah', 'user70@gmail.com', 'pemain', NULL, '$2y$10$DB5j/JA3.KzG3K5pADsBx.s5qiZCdAlSiYvfzvb7spsROX3CFHlPG', NULL, NULL, NULL, NULL, 40),
(71, 'Tim Edu', 'user71@gmail.com', 'pemain', NULL, '$2y$10$JRysBSj0AXmabkjd.W/rpOtKhg6M/Re..EImFHxEOLCtoFcwMyFeO', NULL, NULL, NULL, NULL, 41),
(72, 'Kutub Utara', 'user72@gmail.com', 'pemain', NULL, '$2y$10$ChEfiRj2XzLyxX9REkdiReVKSxVlVfKNLiDzLfZdjBrcJW25t3niC', NULL, NULL, NULL, NULL, 42),
(73, 'Russelia', 'user73@gmail.com', 'pemain', NULL, '$2y$10$oYnHv3bVkr6DwuWGhY0zQu7lOEEzzwVLkEnRUJClKZqOO2sF4kcp.', NULL, NULL, NULL, NULL, 43),
(74, 'Organics', 'user74@gmail.com', 'pemain', NULL, '$2y$10$R6VW74ffna5IaLtk0/dC0eP0IPSu7I6Wc2Hs3JFnlvPfdqOeF3DhO', NULL, NULL, NULL, NULL, 44),
(75, 'CASSIA', 'user75@gmail.com', 'pemain', NULL, '$2y$10$38.iHMUrRrN5x/uC1/RdM.pf.kAHGAaV3qyvuEpLYZ8TS2Hk8SQQu', NULL, NULL, NULL, NULL, 45),
(76, 'Friedels', 'user76@gmail.com', 'pemain', NULL, '$2y$10$cNZJYC75Es8stdUZik/J2eaqOFxYw/bi/UtWXvweozCAK46fBERxu', NULL, NULL, NULL, NULL, 46),
(77, 'MaSBrO', 'user77@gmail.com', 'pemain', NULL, '$2y$10$8.KizuXhf0aKQbRGz8ew0enzruq36O8MrgE5Az2noZUQWkycW/bda', NULL, NULL, NULL, NULL, 47),
(78, 'Tim Satu', 'user78@gmail.com', 'pemain', NULL, '$2y$10$EgQFoynllrE3JnUQ5oi.aeXp053Z.ca485XQYUJbBDjUV.hYMzn5i', NULL, NULL, NULL, NULL, 48),
(79, 'Falcon', 'user79@gmail.com', 'pemain', NULL, '$2y$10$XMERA8iEbq/7UsxtkVbIg.n40ifVhLmKv/XiBWzUjWkk25IP3tlX.', NULL, NULL, NULL, NULL, 49),
(80, 'Mafaron', 'user80@gmail.com', 'pemain', NULL, '$2y$10$TXbIlYcaLDsGBmCVtiUryer2nsEecbr8NFsR.I4b3UnzR7ctSLpFy', NULL, NULL, NULL, NULL, 50),
(81, 'No Clue', 'user100@gmail.com', 'pemain', NULL, '$2y$10$7R1.movgyU/3tqmAtSfcO.dhEh3eQJxpsClpTwdeDR0tT2644SdwO', NULL, NULL, NULL, NULL, 51),
(82, 'B Kubik', 'user85@gmail.com', 'pemain', NULL, '$2y$10$C1xRKdeYh2bD0JHVqiKu8eZB2Lu3s4E1OEIBg.sWQpqcUPuOLEX7G', NULL, NULL, NULL, NULL, 52),
(83, 'Sainstriker', 'user86@gmail.com', 'pemain', NULL, '$2y$10$k67aPu69ywJkKXeDr9nTZO09lRj9jg.U4qGH75gaqU8c5wkm0LF6G', NULL, NULL, NULL, NULL, 53),
(84, 'ManchesterUnited', 'user87@gmail.com', 'pemain', NULL, '$2y$10$FBolgtr6327n7.35Qv6Ni.Y.FldSrEqe9iD7iIOiLrrC0UvnxUMQu', NULL, NULL, NULL, NULL, 54),
(85, 'AnakAnak_Linda', 'user88@gmail.com', 'pemain', NULL, '$2y$10$pnueH/sCx5645pGcnaBP0.ME82OfWfEKCMbSLmeiL6mkqUw6K/f1e', NULL, NULL, NULL, NULL, 55),
(86, 'ALKANA', 'user89@gmail.com', 'pemain', NULL, '$2y$10$sO8DafB30KTyvjhB.UO5GuozTfKKDsAOLSBxom28iv2QhBTk1BzqG', NULL, NULL, NULL, NULL, 56),
(87, 'ALKENA', 'user90@gmail.com', 'pemain', NULL, '$2y$10$weZaGoxrAtFm4VFzHezouOdxO2dqeSbp3a9mDIPV3isgpA1gPmFg2', NULL, NULL, NULL, NULL, 57),
(88, 'ALKUNA', 'user91@gmail.com', 'pemain', NULL, '$2y$10$E0lCxxHMr.T8UrbVUUKXNOjxfdPvB3Uis8RJyhlLwzEOCTv8CVot2', NULL, NULL, NULL, NULL, 58),
(89, 'Edo_the_Explorer', 'user92@gmail.com', 'pemain', NULL, '$2y$10$aSUReumfrS5USIpL4Q0.4.g.NVsI8wzOTIcP//y3m.QzS.IH6FHhS', NULL, NULL, NULL, NULL, 59),
(90, 'Schrodinger', 'user93@gmail.com', 'pemain', NULL, '$2y$10$WEl01KtpYy0Nx0v/.tuEfOPwj36cXnCPo/hm6WINUw9i5Rzjg./bq', NULL, NULL, NULL, NULL, 60),
(91, 'CARAS2023', 'user94@gmail.com', 'pemain', NULL, '$2y$10$tdk9naEh3ghe0Mf./LTnDOCQcq9EqMybMI4OUPZpSm4a/f7ao30XS', NULL, NULL, NULL, NULL, 61),
(92, 'PISANG', 'user95@gmail.com', 'pemain', NULL, '$2y$10$Vd6SiygnFVLgwAmw5sbVMefq9boUWD.Ydl7QpMjLiuv9.Q9co17.y', NULL, NULL, NULL, NULL, 62),
(93, 'MELON MANIS', 'user96@gmail.com', 'pemain', NULL, '$2y$10$hhDtM7.pkd3mO1XpEf6y0eK8syFvmGipo/dJIsSZJHGa2JdAETr3a', NULL, NULL, NULL, NULL, 63),
(94, 'APEL MALANG', 'user97@gmail.com', 'pemain', NULL, '$2y$10$9ASj36wNCfVeeKmCyLnvZOSYJmhcln3pQt0blkweqaYoyMr6WXeLa', NULL, NULL, NULL, NULL, 64),
(95, 'Orpheus', 'user98@gmail.com', 'pemain', NULL, '$2y$10$JFgGWeylV32oNa17BuHQPeKjxuX7/nYvzsJ4bc0ojaAPFNwZs6P5.', NULL, NULL, NULL, NULL, 65),
(96, 'Amethyst', 'user99@gmail.com', 'pemain', NULL, '$2y$10$CcuuEE3tY1wIxGSpXi9goeIoUJIR3iS0kxWLUzub9oqcHmIJzY/RC', NULL, NULL, NULL, NULL, 66),
(97, 'Geranium', 'email@gmail.com', 'pemain', NULL, '$2y$10$kNMkzjibIifqE8UL00JEaOr7DRl366qTi/DMed/OdKfDHMXNW4eRq', NULL, NULL, NULL, NULL, 67),
(98, 'Pelik G.', 'asfasd@gmail.com', 'pemain', NULL, '$2y$10$vgP4zBh5sob6NmiKMZsOWe77l1jpCHqL75NvEc55.icZMhIJs5jjW', NULL, NULL, NULL, NULL, 68),
(99, 'clue1', 'clue1@gmail.com', 'penpos', NULL, '$2y$10$NeqMpBsCP3fv.pe9UIIB8.Q2iOLU6KTnxGZC9dPD9I9pzwjgjlnga', NULL, NULL, '2023-03-31 19:51:35', 31, NULL),
(100, 'clue2', 'clue2@gmail.com', 'penpos', NULL, '$2y$10$jhKlNPM20CpjyLsEye0zaudFZ6NOIEWkoIDlDZHFN/UZmerpqwCQG', NULL, NULL, NULL, 32, NULL),
(101, 'clue3', 'clue3@gmail.com', 'penpos', NULL, '$2y$10$J43m73ZWcp6iFmcErO.Gbu5BWOl3VM5vyoHYej58zsn7GvFefa6Wy', NULL, NULL, NULL, 33, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `teams_kartus`
--
ALTER TABLE `teams_kartus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

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
