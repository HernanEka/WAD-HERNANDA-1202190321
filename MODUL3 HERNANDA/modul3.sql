-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 05:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) DEFAULT NULL,
  `penulis_buku` varchar(255) DEFAULT NULL,
  `tahun_terbit` int(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `bahasa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(1, 'Pemrograman web', 'Hernanda_1202190321', 2021, 'Website', '3646_Algoritma dan Pemrograman Rinaldi Munir.jpg', 'Pemrograman, Website', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_table`
--
ALTER TABLE `buku_table`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_table`
--
ALTER TABLE `buku_table`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
