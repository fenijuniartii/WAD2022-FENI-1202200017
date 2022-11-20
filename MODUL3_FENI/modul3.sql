-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 20, 2022 at 06:43 AM
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
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_nama_table`
--

CREATE TABLE `showroom_nama_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_nama_table`
--

INSERT INTO `showroom_nama_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'CIVIC TURBO', 'Fera', 'Honda', '2022-11-20', 'Jenis Mobil sedan Honda terbaru selanjutnya adalah New Civic RS yang menggunakan mesin 1.500 cc VTEC Turbo dengan transmisi otomatis CVT.', 'civicc.jpg', 'Lunas'),
(2, 'HONDA ACCORD', 'Feni', 'Honda', '2022-11-19', 'Mobil sedan terbaru milik Honda adalah New Honda Accord. Kendaraan mewah ini memiliki mesin 1.500 cc VTEC Turbo dengan teknologi Earth Dream yang dikombinasikan dengan transmisi otomatis CVT', 'accord.jpg', 'Lunas'),
(3, 'HONDA HR-V', 'Robby', 'Honda', '2022-11-18', 'All New HR-V kini memiliki penampilan yang lebih mewah dan elegan dengan pilihan warna two-tone. Mobil ini juga dilengkapi dengan mesin 1.5L VTEC Turbo bertenaga 177 PS (khusus tipe RS Turbo).', 'HR-V.jpg', 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_nama_table`
--
ALTER TABLE `showroom_nama_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_nama_table`
--
ALTER TABLE `showroom_nama_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
