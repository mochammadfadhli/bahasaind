-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 12:08 PM
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
(8, '7', 1),
(9, 'tahun', 1),
(10, 'kelas', 1),
(11, '1', 2),
(12, 'sekolah', 1),
(13, 'dasar', 1),
(14, 'tinggal', 1),
(15, 'di', 1),
(16, 'jalan', 1),
(17, 'pemuda', 1),
(18, 'nomor', 1);

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
(10, '5c', 1),
(11, 'nomor', 2),
(12, 'anggota', 1),
(13, '576', 1),
(14, 'alamat', 1),
(15, 'rumah', 1),
(16, 'jalan', 1),
(17, 'rawamangun', 1),
(18, 'muka', 1),
(19, '17', 1),
(20, 'jakarta', 1),
(21, 'timur', 1);

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
(5, '6', 1),
(6, 'sekolah', 1),
(7, 'dasar', 1),
(8, 'badan', 1),
(9, 'kurus', 1),
(10, 'dan', 1),
(11, 'tinggi', 1),
(12, 'berkacamata', 1),
(13, 'rambut', 1),
(14, 'dikuncir', 1),
(15, 'dua', 1),
(16, 'berkaos', 1),
(17, 'biru', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `unit_5`
--

CREATE TABLE `unit_5` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_5`
--

INSERT INTO `unit_5` (`id`, `Term`, `Jumlah`) VALUES
(1, 'pak', 1),
(2, 'agus', 1),
(3, 'seorang', 1),
(4, 'pengusaha', 1),
(5, 'dia', 8),
(6, 'bangun', 1),
(7, 'tidur', 2),
(8, 'pukul', 7),
(9, '05.00', 1),
(10, 'pagi', 2),
(11, 'setelah', 1),
(12, 'itu', 1),
(13, 'mandi', 1),
(14, 'dan', 1),
(15, 'sarapan', 1),
(16, 'pergi', 1),
(17, 'ke', 1),
(18, 'kantor', 3),
(19, '06.30', 1),
(20, 'tiba', 2),
(21, 'di', 4),
(22, '07.00', 1),
(23, 'pulang', 1),
(24, 'dari', 1),
(25, 'senang', 1),
(26, 'membeli', 1),
(27, 'buah', 1),
(28, 'segar', 1),
(29, 'untuk', 1),
(30, 'rumah', 2),
(31, '04.00', 1),
(32, 'sore', 1),
(33, 'kadang-kadang', 1),
(34, 'berjalan-jalan', 1),
(35, 'bersama', 2),
(36, 'anjingnya', 1),
(37, '19.00', 1),
(38, 'makan', 1),
(39, 'malam', 3),
(40, 'keluarganya', 1),
(41, 'biasanya', 1),
(42, 'menonton', 1),
(43, 'berita', 1),
(44, 'TV', 1),
(45, '20.00', 1),
(46, '22.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_6`
--

CREATE TABLE `unit_6` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_6`
--

INSERT INTO `unit_6` (`id`, `Term`, `Jumlah`) VALUES
(1, 'namaku', 1),
(2, 'amelia', 1),
(3, 'umurku', 1),
(4, '10', 1),
(5, 'tahun', 1),
(6, 'aku', 6),
(7, 'sekolah', 1),
(8, 'di', 3),
(9, 'SD', 1),
(10, 'kusuma', 1),
(11, 'membaca', 5),
(12, 'adalah', 1),
(13, 'hobiku', 1),
(14, 'sejak', 1),
(15, 'kecil', 1),
(16, 'ibu', 3),
(17, 'sering', 3),
(18, 'membacakan', 1),
(19, 'dongeng', 1),
(20, 'untukku', 1),
(21, 'kini', 1),
(22, 'sudah', 2),
(23, 'bisa', 3),
(24, 'mengajakku', 1),
(25, 'ke', 2),
(26, 'toko', 2),
(27, 'buku', 5),
(28, 'senang', 1),
(29, 'jika', 1),
(30, 'membawaku', 1),
(31, 'sana', 1),
(32, 'perpustakaan', 1),
(33, 'bersama', 1),
(34, 'teman-teman', 1),
(35, 'ayah', 1),
(36, 'membuatku', 1),
(37, 'rak', 1),
(38, 'setiap', 1),
(39, 'hari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_7`
--

CREATE TABLE `unit_7` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_7`
--

INSERT INTO `unit_7` (`id`, `Term`, `Jumlah`) VALUES
(1, 'selamat', 1),
(2, 'malam', 1),
(3, 'bu', 1),
(4, 'maaf', 2),
(5, 'mengganggu', 2),
(6, 'untuk', 1),
(7, 'ruangan', 1),
(8, 'kelas', 1),
(9, 'besok', 1),
(10, 'ada', 1),
(11, 'perubahan', 1),
(12, 'kita', 1),
(13, 'akan', 2),
(14, 'belajar', 1),
(15, 'di', 1),
(16, 'ruang', 1),
(17, 'serbaguna', 1),
(18, 'karena', 1),
(19, 'aula', 1),
(20, 'dipakai', 1),
(21, 'latihan', 1),
(22, 'terima', 1),
(23, 'kasih', 1),
(24, 'oke', 1),
(25, 'tolong', 1),
(26, 'disiapkan', 1),
(27, 'ya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_8`
--

CREATE TABLE `unit_8` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_8`
--

INSERT INTO `unit_8` (`id`, `Term`, `Jumlah`) VALUES
(1, 'di', 4),
(2, 'Indonesia', 1),
(3, 'transportasi', 3),
(4, 'terbagi', 1),
(5, 'menjadi', 1),
(6, 'tiga', 1),
(7, 'jenis', 1),
(8, 'laut', 3),
(9, 'udara', 3),
(10, 'dan', 5),
(11, 'darat', 2),
(12, 'ada', 3),
(13, 'kapal', 2),
(14, 'feri', 1),
(15, 'pesawat', 1),
(16, 'helikopter', 1),
(17, 'bermacam-macam', 1),
(18, 'misalnya', 1),
(19, 'becak', 1),
(20, 'delman', 1),
(21, 'transjakarta', 2),
(22, 'ojek', 1),
(23, 'bajaj', 1),
(24, 'mobil', 1),
(25, 'taksi', 1),
(26, 'metromini', 1),
(27, 'angkot', 1),
(28, 'kereta', 1),
(29, 'api', 1),
(30, 'sepeda', 1),
(31, 'motor', 1),
(32, 'bus', 2),
(33, 'kota', 1),
(34, 'adalah', 1),
(35, 'satu', 1),
(36, 'dari', 1),
(37, 'beberapa', 1),
(38, 'kendaraan', 1),
(39, 'umum', 1),
(40, 'yang', 3),
(41, 'banyak', 2),
(42, 'digunakan', 1),
(43, 'masyarakat', 1),
(44, 'pendingin', 1),
(45, 'ruangan', 1),
(46, 'harga', 1),
(47, 'murah', 1),
(48, 'membuat', 1),
(49, 'ini', 1),
(50, 'digemari', 1),
(51, 'orang', 1),
(52, 'cukup', 1),
(53, 'dengan', 1),
(54, 'rp3.500', 1),
(55, 'kamu', 2),
(56, 'bisa', 1),
(57, 'pergi', 1),
(58, 'ke', 1),
(59, 'tempat', 1),
(60, 'mau', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_9`
--

CREATE TABLE `unit_9` (
  `id` int(11) NOT NULL,
  `Term` text NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_9`
--

INSERT INTO `unit_9` (`id`, `Term`, `Jumlah`) VALUES
(1, 'pasar', 10),
(2, 'beringharjo', 3),
(3, 'terletak', 1),
(4, 'di', 8),
(5, 'jalan', 1),
(6, 'jenderal', 1),
(7, 'Ahmad', 1),
(8, 'yani', 1),
(9, 'nomor', 1),
(10, '16', 1),
(11, 'Yogyakarta', 1),
(12, 'banyak', 1),
(13, 'barang', 2),
(14, 'yang', 3),
(15, 'dapat', 1),
(16, 'dibeli', 1),
(17, 'mulai', 2),
(18, 'dari', 2),
(19, 'batik', 10),
(20, 'jajanan', 1),
(21, 'uang', 1),
(22, 'kuno', 1),
(23, 'pakaian', 5),
(24, 'anak', 1),
(25, 'dan', 3),
(26, 'dewasa', 1),
(27, 'makanan', 1),
(28, 'cepat', 1),
(29, 'saji', 1),
(30, 'bahan', 2),
(31, 'dasar', 1),
(32, 'jamu', 1),
(33, 'tradisional', 1),
(34, 'sembako', 1),
(35, 'hingga', 2),
(36, 'antik', 1),
(37, 'memiliki', 1),
(38, 'berbagai', 1),
(39, 'jenis', 1),
(40, 'kain', 2),
(41, 'maupun', 2),
(42, 'sudah', 1),
(43, 'jadi', 1),
(44, 'katun', 1),
(45, 'sutra', 1),
(46, 'koleksi', 2),
(47, 'dijumpai', 2),
(48, 'kios', 2),
(49, 'bagian', 4),
(50, 'barat', 4),
(51, 'sebelah', 1),
(52, 'utara', 1),
(53, 'hampir', 1),
(54, 'seluruh', 1),
(55, 'selain', 2),
(56, 'juga', 1),
(57, 'menawarkan', 1),
(58, 'baju', 1),
(59, 'surjan', 1),
(60, 'blangkon', 1),
(61, 'sarung', 1),
(62, 'itu', 1),
(63, 'dijual', 1),
(64, 'pula', 1),
(65, 'sandal', 1),
(66, 'tas', 1),
(67, 'sekitar', 1),
(68, 'eskalator', 1),
(69, 'harga', 4),
(70, 'ini', 2),
(71, 'bervariasi', 1),
(72, 'ada', 2),
(73, 'murah', 2),
(74, 'mahal', 1),
(75, 'satu', 1),
(76, 'buah', 1),
(77, 'rata-rata', 1),
(78, 'rp50.000', 1),
(79, 'masih', 1),
(80, 'bisa', 1),
(81, 'ditawar', 1),
(82, 'lebih', 1),
(83, 'tenun', 1),
(84, 'daripada', 1),
(85, 'Jakarta', 1);

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
-- Indexes for table `unit_5`
--
ALTER TABLE `unit_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_6`
--
ALTER TABLE `unit_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_7`
--
ALTER TABLE `unit_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_8`
--
ALTER TABLE `unit_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_9`
--
ALTER TABLE `unit_9`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unit_3`
--
ALTER TABLE `unit_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `unit_4`
--
ALTER TABLE `unit_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `unit_5`
--
ALTER TABLE `unit_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `unit_6`
--
ALTER TABLE `unit_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `unit_7`
--
ALTER TABLE `unit_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `unit_8`
--
ALTER TABLE `unit_8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `unit_9`
--
ALTER TABLE `unit_9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
