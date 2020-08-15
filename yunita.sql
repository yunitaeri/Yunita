-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 01:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yunita`
--

-- --------------------------------------------------------

--
-- Table structure for table `acuan`
--

CREATE TABLE `acuan` (
  `id_acuan` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_kandungan` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `pH` double NOT NULL,
  `luas` double NOT NULL,
  `jarak` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acuan`
--

INSERT INTO `acuan` (`id_acuan`, `id_jenis`, `id_kandungan`, `umur`, `pH`, `luas`, `jarak`, `tinggi`) VALUES
(1, 1, 1, 12, 6, 2, 90, 60),
(2, 2, 1, 14, 6, 0.5, 50, 60),
(3, 3, 1, 14, 7, 1, 60, 90),
(5, 4, 1, 12, 6, 0.5, 90, 90),
(6, 5, 1, 10, 7, 1, 40, 50),
(7, 6, 2, 17, 7, 1, 60, 60),
(8, 7, 2, 15, 6, 1, 90, 50),
(9, 8, 2, 20, 7, 2, 50, 40),
(10, 9, 2, 20, 7, 2, 50, 40),
(11, 5, 2, 10, 7, 1, 40, 50),
(12, 10, 3, 10, 7, 0.5, 40, 30),
(13, 11, 3, 10, 8, 0.5, 40, 30),
(14, 5, 3, 10, 7, 1, 40, 50);

-- --------------------------------------------------------

--
-- Table structure for table `detail_riwayat`
--

CREATE TABLE `detail_riwayat` (
  `id_detail` int(11) NOT NULL,
  `id_riwayat` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `rangking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_riwayat`
--

INSERT INTO `detail_riwayat` (`id_detail`, `id_riwayat`, `id_jenis`, `rangking`) VALUES
(1, 1, 6, 2),
(2, 1, 7, 1),
(3, 1, 8, 3),
(4, 1, 9, 4),
(5, 1, 5, 5),
(6, 2, 10, 1),
(7, 2, 11, 2),
(8, 2, 5, 3),
(9, 3, 10, 1),
(10, 3, 11, 2),
(11, 3, 5, 3),
(12, 4, 6, 2),
(13, 4, 7, 1),
(14, 4, 8, 3),
(15, 4, 9, 4),
(16, 4, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kandungan`
--

CREATE TABLE `jenis_kandungan` (
  `id_kandungan` int(11) NOT NULL,
  `jenis_kandungan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kandungan`
--

INSERT INTO `jenis_kandungan` (`id_kandungan`, `jenis_kandungan`) VALUES
(2, 'Fosfor (P)'),
(3, 'Kalium (K)'),
(1, 'Natrium (N)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pupuk`
--

CREATE TABLE `jenis_pupuk` (
  `id_jenis` int(11) NOT NULL,
  `jenis_pupuk` varchar(10) DEFAULT NULL,
  `N` int(45) DEFAULT NULL,
  `F` int(45) DEFAULT NULL,
  `K` int(45) DEFAULT NULL,
  `S` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pupuk`
--

INSERT INTO `jenis_pupuk` (`id_jenis`, `jenis_pupuk`, `N`, `F`, `K`, `S`) VALUES
(1, 'Urea', 47, 0, 0, 0),
(2, 'ZA', 21, 0, 0, 24),
(3, 'NH4Cl', 20, 0, 0, 0),
(4, 'NaNO3', 15, 0, 0, 0),
(5, 'NPK', 15, 15, 15, 10),
(6, 'TSP', 0, 45, 0, 0),
(7, 'Sp-36', 0, 36, 0, 5),
(8, 'DS', 0, 30, 0, 0),
(9, 'ES', 0, 15, 0, 0),
(10, 'KCL', 0, 0, 60, 0),
(11, 'ZK', 0, 0, 53, 0);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `umur` int(2) NOT NULL,
  `pH` double NOT NULL,
  `luas` double NOT NULL,
  `jarak` int(2) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `id_kandungan` int(11) NOT NULL,
  `id_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `umur`, `pH`, `luas`, `jarak`, `tinggi`, `id_kandungan`, `id_User`) VALUES
(1, 9, 5, 2, 120, 90, 2, 4),
(2, 9, 5, 2, 120, 90, 3, 4),
(3, 9, 5, 2, 120, 90, 3, 4),
(4, 9, 5, 2, 120, 90, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_Kriteria` varchar(10) NOT NULL,
  `Nama_Kriteria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_Kriteria`, `Nama_Kriteria`) VALUES
('k001', 'Umur'),
('k002', 'pH Tanah'),
('k003', 'Luas Tanam'),
('k004', 'Jarak Tanam'),
('k005', 'Tinggi  Tanaman');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_User` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Level` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_User`, `Username`, `Password`, `Level`, `Status`, `Nama_Lengkap`) VALUES
(4, 'yunita', 'b706835de79a2b4e80506f582af3676a', '1', NULL, 'Yunita uhuy'),
(5, 'pucuk', '310dcbbf4cce62f762a2aaa148d556bd', '2', NULL, 'harum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acuan`
--
ALTER TABLE `acuan`
  ADD PRIMARY KEY (`id_acuan`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_kandungan` (`id_kandungan`);

--
-- Indexes for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_riwayat` (`id_riwayat`),
  ADD KEY `fk_jenis3` (`id_jenis`);

--
-- Indexes for table `jenis_kandungan`
--
ALTER TABLE `jenis_kandungan`
  ADD PRIMARY KEY (`id_kandungan`),
  ADD KEY `jenis_kandungan` (`jenis_kandungan`);

--
-- Indexes for table `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_kandungan` (`id_kandungan`),
  ADD KEY `id_User` (`id_User`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_Kriteria`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_User`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acuan`
--
ALTER TABLE `acuan`
  MODIFY `id_acuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_kandungan`
--
ALTER TABLE `jenis_kandungan`
  MODIFY `id_kandungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acuan`
--
ALTER TABLE `acuan`
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_pupuk` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kandungan` FOREIGN KEY (`id_kandungan`) REFERENCES `jenis_kandungan` (`id_kandungan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD CONSTRAINT `fk_jenis3` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_pupuk` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_riwayat` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat` (`id_riwayat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `fk_kandungan3` FOREIGN KEY (`id_kandungan`) REFERENCES `jenis_kandungan` (`id_kandungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_User`) REFERENCES `tabel_user` (`id_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
