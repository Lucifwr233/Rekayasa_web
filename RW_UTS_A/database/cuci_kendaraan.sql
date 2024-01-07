-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 12:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw_tugas_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuci_kendaraan`
--

CREATE TABLE `cuci_kendaraan` (
  `id_nota` int(15) NOT NULL,
  `plat_nomor_kendaraan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jenis_kendaraan` enum('Mobil','Motor') NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_cuci` enum('Cuci Kilat','Cuci Lambat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuci_kendaraan`
--

INSERT INTO `cuci_kendaraan` (`id_nota`, `plat_nomor_kendaraan`, `nama_pelanggan`, `jenis_kendaraan`, `total_bayar`, `tanggal`, `jenis_cuci`) VALUES
(1, 'K-212-KKS', 'John Cena', 'Motor', 20000, '2023-11-04', 'Cuci Kilat'),
(2, 'H-212-OL', 'John PP', 'Motor', 30000, '2023-11-23', 'Cuci Kilat'),
(3, 'H-312-KK', 'Matt', 'Motor', 30000, '2023-11-06', 'Cuci Lambat'),
(4, 'F-912-PP', 'ULIL', 'Motor', 20000, '2023-11-07', 'Cuci Lambat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuci_kendaraan`
--
ALTER TABLE `cuci_kendaraan`
  ADD PRIMARY KEY (`id_nota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
