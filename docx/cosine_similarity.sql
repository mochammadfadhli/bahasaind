-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 11:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosine_similarity`
--

-- --------------------------------------------------------

--
-- Table structure for table `unit_1`
--

CREATE TABLE `unit_1` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_1`
--

INSERT INTO `unit_1` (`id`, `Term`, `Jumlah`) VALUES
(1, 'nama', 1),
(2, 'saya', 5),
(3, 'julia', 1),
(4, 'biasa', 1),
(5, 'dipanggil', 1),
(6, 'juli', 1),
(7, 'usia', 1),
(8, 'tujuh', 1),
(9, 'tahun', 1),
(10, 'kelas', 1),
(11, 'satu', 1),
(12, 'sekolah', 1),
(13, 'dasar', 1),
(14, 'tinggal', 1),
(15, 'dijalan', 1),
(16, 'pemuda', 1),
(17, 'nomor', 1),
(18, 'satu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_2`
--

CREATE TABLE `unit_2` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_2`
--

INSERT INTO `unit_2` (`id`, `Term`, `Jumlah`) VALUES
(1, 'perpustakaan', 1),
(2, 'sekolah', 1),
(3, 'dasar', 1),
(4, 'tunas', 1),
(5, 'muda', 1),
(6, 'nama', 1),
(7, 'alia', 1),
(8, 'julia', 1),
(9, 'kelas', 1),
(10, 'lima', 2),
(11, 'c', 1),
(12, 'nomor', 2),
(13, 'anggota', 1),
(14, 'tujuh', 1),
(15, 'enam', 1),
(16, 'alamat', 1),
(17, 'rumah', 1),
(18, 'jalan', 1),
(19, 'rawamangun', 1),
(20, 'muka', 1),
(21, 'tujuh', 1),
(22, 'belas', 1),
(23, 'jakarta', 1),
(24, 'timur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_3`
--

CREATE TABLE `unit_3` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_3`
--

INSERT INTO `unit_3` (`id`, `Term`, `Jumlah`) VALUES
(1, 'nama', 1),
(2, 'saya', 6),
(3, 'ira', 1),
(4, 'kelas', 1),
(5, 'enam', 1),
(6, 'sekolah', 1),
(7, 'dasar', 1),
(8, 'badan', 1),
(9, 'kurus', 1),
(10, 'dan', 1),
(11, 'tinggi', 1),
(12, 'berkaca', 1),
(13, 'mata', 1),
(14, 'rambut', 1),
(15, 'dikuncir', 1),
(16, 'dua', 1),
(17, 'berkaos', 1),
(18, 'biru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_4`
--

CREATE TABLE `unit_4` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_4`
--

INSERT INTO `unit_4` (`id`, `Term`, `Jumlah`) VALUES
(1, 'nama', 1),
(2, 'saya', 6),
(3, 'mira', 1),
(4, 'anak', 1),
(5, 'kedua', 1),
(6, 'kakak', 1),
(7, 'bernama', 4),
(8, 'rama', 1),
(9, 'adik', 1),
(10, 'roni', 1),
(11, 'kami', 1),
(12, 'tinggal', 1),
(13, 'bersama', 1),
(14, 'nenek', 1),
(15, 'dan', 1),
(16, 'kakek', 1),
(17, 'ibu', 1),
(18, 'lana', 1),
(19, 'dia', 2),
(20, 'guru', 1),
(21, 'ayah', 1),
(22, 'toni', 1),
(23, 'seorang', 1),
(24, 'arsitek', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unit_1`
--
ALTER TABLE `unit_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_2`
--
ALTER TABLE `unit_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_3`
--
ALTER TABLE `unit_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_4`
--
ALTER TABLE `unit_4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unit_1`
--
ALTER TABLE `unit_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `unit_2`
--
ALTER TABLE `unit_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `unit_3`
--
ALTER TABLE `unit_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `unit_4`
--
ALTER TABLE `unit_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
