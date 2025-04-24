-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2025 at 06:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopylov`
--

-- --------------------------------------------------------

--
-- Table structure for table `mt_vyrobce`
--

CREATE TABLE `mt_vyrobce` (
  `idVyrobce` int NOT NULL,
  `vyrobce` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_vyrobce`
--

INSERT INTO `mt_vyrobce` (`idVyrobce`, `vyrobce`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MSI', 'msi', NULL, NULL, NULL),
(2, 'ASUS', 'asus', NULL, NULL, NULL),
(3, 'Intel', 'intel', NULL, NULL, NULL),
(4, 'AMD', 'amd', NULL, NULL, NULL),
(5, 'GIGABYTE', 'gigabyte', NULL, NULL, NULL),
(6, 'ASRock', 'asrock', NULL, NULL, NULL),
(7, 'ADATA', 'adata', NULL, NULL, NULL),
(8, 'Kingston', 'kingston', NULL, NULL, NULL),
(9, 'Corsair', 'corsair', NULL, NULL, NULL),
(10, 'Crucial', 'crucial', NULL, NULL, NULL),
(12, 'G.SKILL', 'gskill', NULL, NULL, NULL),
(13, 'WD', 'wd', NULL, NULL, NULL),
(14, 'Seagate', 'seagate', NULL, NULL, NULL),
(15, 'Samsung', 'gnusmas', NULL, NULL, NULL),
(16, 'SAPPHIRE', 'sapphire', NULL, NULL, NULL),
(17, 'EVGA', 'evga', NULL, NULL, NULL),
(18, 'Seasonic', 'seasonic', NULL, NULL, NULL),
(19, 'Zalman', 'zalman', NULL, NULL, NULL),
(20, 'SilentiumPC', 'silentiumpc', NULL, NULL, NULL),
(21, 'EVOLVEO', 'evolveo', NULL, NULL, NULL),
(22, 'Cooler-Master', 'coolermaster', NULL, NULL, NULL),
(23, 'NZXT', 'nazi', NULL, NULL, NULL),
(24, 'NOCTUA', 'noctua', NULL, NULL, NULL),
(25, 'ARCTIC', 'arctic', NULL, NULL, NULL),
(26, 'LG', 'lg', NULL, NULL, NULL),
(27, 'AverMedia', 'avermedia', NULL, NULL, NULL),
(28, 'Seasonic', 'seasonic', NULL, NULL, NULL),
(29, 'XFX', 'xfx', NULL, NULL, NULL),
(30, 'ZOTAC', 'zotac', NULL, NULL, NULL),
(31, 'Patriot', 'patriot', NULL, NULL, NULL),
(32, 'Fractal Design', 'fractaldesign', NULL, NULL, NULL),
(33, 'SCYTHE', 'scythe', NULL, NULL, NULL),
(34, 'fsdfsd', 'sdfgsdfds', '2025-04-24 06:16:28.000000', '2025-04-24 06:16:28.000000', NULL),
(35, 'fsd', 'fds', '2025-04-24 06:29:26.000000', '2025-04-24 06:29:26.000000', NULL),
(36, 'fsd', 'fds', '2025-04-24 06:30:43.000000', '2025-04-24 06:30:43.000000', NULL),
(37, 'fds', 'fsd', '2025-04-24 06:30:48.000000', '2025-04-24 06:30:48.000000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_vyrobce`
--
ALTER TABLE `mt_vyrobce`
  ADD PRIMARY KEY (`idVyrobce`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mt_vyrobce`
--
ALTER TABLE `mt_vyrobce`
  MODIFY `idVyrobce` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
