-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 27, 2022 at 09:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_feni`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_feni_table`
--

CREATE TABLE `showroom_feni_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_feni`
--

CREATE TABLE `users_feni` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_feni_table`
--
ALTER TABLE `showroom_feni_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `users_feni`
--
ALTER TABLE `users_feni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_feni_table`
--
ALTER TABLE `showroom_feni_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_feni`
--
ALTER TABLE `users_feni`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
