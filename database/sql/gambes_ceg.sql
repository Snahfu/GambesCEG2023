-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 04:06 AM
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
-- Table structure for table `penpos`
--

CREATE TABLE `penpos` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL DEFAULT 'Belum Ada',
  `tipe` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'KOSONG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `avatar` text DEFAULT NULL,
  `coin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penpos`
--
ALTER TABLE `penpos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penpos_teams`
--
ALTER TABLE `penpos_teams`
  ADD CONSTRAINT `fk_penpos_has_teams_penpos` FOREIGN KEY (`penpos_id`) REFERENCES `penpos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penpos_has_teams_teams1` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
