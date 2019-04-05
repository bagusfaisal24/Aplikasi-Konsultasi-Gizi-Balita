-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 07:07 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_riset`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `fk_id_kriteria` int(11) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `Bobot` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `fk_id_kriteria`, `gejala`, `klasifikasi`, `Bobot`) VALUES
('G01', 1, 'Berkilau(Bercahaya)', 'Normal', '2'),
('G02', 1, 'Tak mudah lepas', 'Normal', '2'),
('G03', 1, 'Kurang Bercahaya', 'Berhubungan dengan kekurangan gizi ', '1'),
('G04', 1, 'Tipis & Jarang', 'Berhubungan dengan kekurangan gizi', '1'),
('G05', 1, 'Mudah putus', 'Berhubungan dengan kekurangan gizi', '1'),
('G06', 1, 'Tanda bendera(sign flag)', 'Berhubungan dengan kekurangan gizi', '1'),
('G07', 2, 'Membengkak (pipi tembem)', 'Kemungkinan berhubungan dengan kelebihan gizi', '4'),
('G08', 2, 'Dagu ganda (duoble chin)', 'Kemungkinan berhubungan dengan kelebihan gizi', '4'),
('G09', 2, 'Halus', 'Normal', '3'),
('G10', 2, 'Warna sama', 'Normal', '3'),
('G11', 2, 'Tidak Bengkak', 'Normal', '3'),
('G12', 2, 'Perinasal veins', 'Kemungkian berhubungan dengan kekurangan gizi', '2'),
('G13', 2, 'Penurunan pigmentasi', 'Berhubungan dengan kekurangan gizi', '1'),
('G14', 2, 'Moon Face', 'Berhubungan dengan kekurangan gizi', '1'),
('G15', 2, 'Pembesaran kelenjar parotis', 'Berhubungan dengan kekurangan gizi', '1'),
('G16', 3, 'Bercahaya', 'Normal', '4'),
('G17', 3, 'Bersih', 'Normal', '4'),
('G19', 3, 'Tidak Ada Luka', 'Normal', '4'),
('G20', 3, 'Tidak nampak pembuluh darah sklera', 'Normal', '4'),
('G21', 3, 'Pterygium', 'Tidak berhubungan dengan kekurangan gizi', '3'),
('G22', 3, 'Corneal vascularization', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G23', 3, 'Conjungtival infection and circumcorn', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G24', 3, 'Corneal arcus', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G25', 3, 'Xanthomata', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G26', 3, 'Corneal scars', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G27', 3, 'Selaput mata pucat (pale conjungtival)', 'Berhubungan dengan kekurangan gizi', '1'),
('G28', 3, 'Keratomalasia', 'Berhubungan dengan kekurangan gizi', '1'),
('G29', 3, 'Angular palpebritis', 'Berhubungan dengan kekurangan gizi', '1'),
('G30', 4, 'Halus', 'Normal', '3'),
('G31', 4, 'Tidak ada pembengkakan', 'Normal', '3'),
('G32', 4, 'Depigmentasi kronis pada bibir bawah', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G33', 4, 'Jaringan parut angular', 'Berhubungan dengan kekurangan gizi', '1'),
('G34', 4, 'Cheilosis', 'Berhubungan dengan kekurangan gizi', '1'),
('G35', 4, 'Angular stomatitis', 'Berhubungan dengan kekurangan gizi', '1'),
('G36', 5, 'Halus', 'Normal', '4'),
('G37', 5, 'Merah', 'Normal', '4'),
('G38', 5, 'Tak ada pembengkakan', 'Normal', '4'),
('G39', 5, 'Geographic tongue', 'Tidak berhubungan dengan kekurangan gizi', '3'),
('G40', 5, 'Pigmented tongue', 'Tidak berhubungan dengan kekurangan gizi', '3'),
('G41', 5, 'Papilia hipertrophic', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G42', 5, 'Fissures', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G43', 5, 'Scarlet', 'Berhubungan dengan kekurangan gizi', '1'),
('G44', 5, 'Papilla atrophic', 'Berhubungan dengan kekurangan gizi', '1'),
('G45', 5, 'Lidah magenta', 'Berhubungan dengan kekurangan gizi', '1'),
('G46', 6, 'Tak ada lubang', 'Normal', '3'),
('G47', 6, 'Tidak nyeri', 'Normal', '3'),
('G48', 6, 'Bercahaya', 'Normal', '3'),
('G49', 6, 'Pengikisan(Attrition)', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G50', 6, 'Karies gigi', 'Berhubungan dengan kekurangan gizi', '1'),
('G51', 6, 'Erosi email(enamel gums)', 'Berhubungan dengan kekurangan gizi', '1'),
('G52', 6, 'Hipolasia email (enamel hypoplasia)', 'Berhubungan dengan kekurangan gizi', '1'),
('G53', 6, 'Pengikisan (attrition)', 'Berhubungan dengan kekurangan gizi', '1'),
('G54', 6, 'Mottled enamel', 'Berhubungan dengan kekurangan gizi', '1'),
('G55', 7, 'Merah', 'Normal', '4'),
('G56', 7, 'Tak ada pembengkakan', 'Normal', '4'),
('G57', 7, 'Tak ada pendarahan', 'Normal', '4'),
('G58', 7, 'Infeksi Periodontal (pyrrhoca)', 'Tidak berhubungan dengan kekurangan gizi', '3'),
('G59', 7, 'Recession of gums', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G60', 7, 'Spongy, bleeding gums', 'Berhubungan dengan kekurangan gizi', '1'),
('G61', 8, 'Bersih', 'Normal', '3'),
('G62', 8, 'Tak ada pembengkakan', 'Normal', '3'),
('G63', 8, 'Tidak ada bercak-bercak', 'Normal', '3'),
('G64', 8, 'Mosaic dermatosis', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G65', 8, 'Thickening and pigmentation of pressure point', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G66', 8, 'Xerosis', 'Berhubungan dengan kekurangan gizi', '1'),
('G67', 8, 'Follicular hyperkeratosis', 'Berhubungan dengan kekurangan gizi', '1'),
('G68', 8, 'Petechiae', 'Berhubungan dengan kekurangan gizi', '1'),
('G70', 8, 'Pellagrous rash', 'Berhubungan dengan kekurangan gizi', '1'),
('G71', 8, 'Flaky-point rash', 'Berhubungan dengan kekurangan gizi', '1'),
('G72', 8, 'Scrotal and vulva dermatosis', 'Berhubungan dengan kekurangan gizi', '1'),
('G73', 9, 'Kemerahan', 'Normal', '3'),
('G74', 9, 'Keras', 'Normal', '3'),
('G75', 9, 'Transverse ridging or grooving of nails', 'Kemungkinan berhubungan dengan kekurangan gizi', '2'),
('G76', 9, 'Koilonychia(koilanika)', 'Berhubungan dengan kekurangan gizi', '1'),
('G77', 9, 'Rapuh', 'Berhubungan dengan kekurangan gizi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(11) NOT NULL,
  `fk_id_pengguna` int(11) NOT NULL,
  `fk_id_gejala` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tinggi_badan` double NOT NULL,
  `berat_badan` double NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `status_gizi` varchar(50) NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `fk_id_pengguna`, `fk_id_gejala`, `date`, `tinggi_badan`, `berat_badan`, `umur`, `jenis_kelamin`, `status_gizi`, `rekomendasi`) VALUES
(71, 8, 'G01', '2018-05-24 02:51:48', 92, 31, 43, 'Perempuan', 'Gizi Lebih', 'Penyeimbangan masukan energi dilakukan dengan membatasi konsumsi karbohidrat dan lemak'),
(72, 8, 'G07,G08', '2018-05-24 02:52:22', 92, 31, 43, 'Perempuan', 'Gizi Lebih', 'Penyeimbangan masukan energi dilakukan dengan membatasi konsumsi karbohidrat dan lemak'),
(73, 12, 'G16', '2018-05-24 04:15:32', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(74, 12, 'G16', '2018-05-24 04:31:19', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(75, 12, 'G16', '2018-05-24 04:34:51', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(76, 12, 'G16', '2018-05-24 04:35:32', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(77, 8, 'G16', '2018-06-05 14:25:17', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(78, 8, 'G16', '2018-06-05 14:26:03', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(79, 8, 'G16', '2018-06-05 14:26:56', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Tidak Ada'),
(80, 8, 'G16', '2018-06-05 14:31:05', 94, 15.2, 45, 'Laki-laki', 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(81, 8, '', '2018-08-27 13:21:23', 94, 15.2, 41, 'Laki-laki', 'Gizi Baik', 'Pertahankan Status Gizi Anda');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Rambut'),
(2, 'Wajah / muka'),
(3, 'Mata'),
(4, 'Bibir'),
(5, 'Lidah'),
(6, 'Gigi'),
(7, 'Gusi'),
(8, 'Kulit'),
(9, 'Kuku');

-- --------------------------------------------------------

--
-- Table structure for table `master_databayi`
--

CREATE TABLE `master_databayi` (
  `id_master` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tinggi_badan` double NOT NULL,
  `berat_badan` double NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_databayi`
--

INSERT INTO `master_databayi` (`id_master`, `nama`, `tinggi_badan`, `berat_badan`, `umur`, `jenis_kelamin`) VALUES
(12, 'Khalifano NS', 94, 15.2, 41, 'Laki-laki'),
(13, 'Asyifa Zahra', 94, 14.8, 39, 'Perempuan'),
(14, 'Artha Wirya', 89, 11.2, 38, 'Laki-laki'),
(15, 'Nadia', 91, 11.8, 36, 'Perempuan'),
(16, 'Meyvel Salva', 90, 11.1, 35, 'Perempuan'),
(17, 'Beatrix Betania A D', 104, 13.5, 57, 'Perempuan'),
(18, 'Rizqi Putra Haryanto', 93, 14.5, 31, 'Laki-laki'),
(19, 'Aljafar Fadlan R', 92, 13.5, 31, 'Laki-laki'),
(20, 'Najwa Qanita', 67, 6.7, 12, 'Perempuan'),
(21, 'Khayla Farzana', 92, 31, 43, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `new_case`
--

CREATE TABLE `new_case` (
  `id` int(11) NOT NULL,
  `fk_id_gejala` varchar(20) NOT NULL,
  `tinggi_badan` double NOT NULL,
  `berat_badan` double NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_case`
--

INSERT INTO `new_case` (`id`, `fk_id_gejala`, `tinggi_badan`, `berat_badan`, `umur`, `jenis_kelamin`) VALUES
(15, 'G02', 12, 12, 21, 'Laki-laki'),
(16, 'G16', 94, 15.2, 45, 'Laki-laki'),
(17, 'G01', 40, 30, 45, 'Laki-laki'),
(18, 'G01', 94, 15.2, 45, 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('0','1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `alamat`, `jenis_kelamin`, `username`, `password`, `level`) VALUES
(5, 'Bagus', 'asa', 'Laki-Laki', 'pakar', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(7, 'Bagus Faisal KH', 'Tegal', 'Laki-laki', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '0'),
(8, 'Bagus', 'Suradadi', 'Laki-Laki', 'bagus24', '202cb962ac59075b964b07152d234b70', '2'),
(11, 'Bejo', 'Jogja', 'Laki-laki', 'bejo', '202cb962ac59075b964b07152d234b70', '2'),
(12, 'imam', 'jogja', 'Laki-laki', 'imam', '202cb962ac59075b964b07152d234b70', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_case`
--

CREATE TABLE `tb_case` (
  `id_case` int(11) NOT NULL,
  `fk_id_gejala` varchar(20) NOT NULL,
  `fk_id_master` int(11) NOT NULL,
  `status_gizi` varchar(50) NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_case`
--

INSERT INTO `tb_case` (`id_case`, `fk_id_gejala`, `fk_id_master`, `status_gizi`, `rekomendasi`) VALUES
(32, 'G16', 12, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(33, 'G17', 13, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(34, 'G12', 14, 'Gizi Kurang', 'Pemberian makanan tambahan (PMT), distribusi vitamin A dosis tinggi, tablet dan sirop besi serta kapsul minyak beriodium.'),
(35, 'G37', 15, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(36, 'G55', 16, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(37, 'G30,G31', 17, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(39, 'G17', 18, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(40, 'G38', 19, 'Gizi Baik', 'Pertahankan Status Gizi Anda'),
(41, 'G32', 20, 'Gizi Kurang', 'Pemberian makanan tambahan (PMT), distribusi vitamin A dosis tinggi, tablet dan sirop besi serta kapsul minyak beriodium.'),
(42, 'G07,G08', 21, 'Gizi Lebih', 'Penyeimbangan masukan energi dilakukan dengan membatasi konsumsi karbohidrat dan lemak'),
(78, '', 0, 'Gizi Lebih', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`),
  ADD KEY `fk_id_pengguna` (`fk_id_pengguna`),
  ADD KEY `fk_id_gejala` (`fk_id_gejala`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `master_databayi`
--
ALTER TABLE `master_databayi`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `new_case`
--
ALTER TABLE `new_case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_gejala` (`fk_id_gejala`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_case`
--
ALTER TABLE `tb_case`
  ADD PRIMARY KEY (`id_case`),
  ADD KEY `fk_id_gejala` (`fk_id_gejala`),
  ADD KEY `fk_id_gejala_2` (`fk_id_gejala`),
  ADD KEY `fk_id_master` (`fk_id_master`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `master_databayi`
--
ALTER TABLE `master_databayi`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `new_case`
--
ALTER TABLE `new_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_case`
--
ALTER TABLE `tb_case`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
