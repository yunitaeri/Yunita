-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2020 pada 15.31
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `acuan`
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
-- Dumping data untuk tabel `acuan`
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
-- Struktur dari tabel `detail_riwayat`
--

CREATE TABLE `detail_riwayat` (
  `id_detail` int(11) NOT NULL,
  `id_riwayat` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `rangking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kandungan`
--

CREATE TABLE `jenis_kandungan` (
  `id_kandungan` int(11) NOT NULL,
  `jenis_kandungan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kandungan`
--

INSERT INTO `jenis_kandungan` (`id_kandungan`, `jenis_kandungan`) VALUES
(2, 'Fosfor (P)'),
(3, 'Kalium (K)'),
(1, 'Natrium (N)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pupuk`
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
-- Dumping data untuk tabel `jenis_pupuk`
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
-- Struktur dari tabel `riwayat`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_Kriteria` varchar(10) NOT NULL,
  `Nama_Kriteria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_Kriteria`, `Nama_Kriteria`) VALUES
('k001', 'Umur'),
('k002', 'pH Tanah'),
('k003', 'Luas Tanam'),
('k004', 'Jarak Tanam'),
('k005', 'Tinggi  Tanaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
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
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_User`, `Username`, `Password`, `Level`, `Status`, `Nama_Lengkap`) VALUES
(4, 'yunita', 'b706835de79a2b4e80506f582af3676a', '1', '', 'Yunita uhuy'),
(5, 'pucuk', '310dcbbf4cce62f762a2aaa148d556bd', '2', NULL, 'harum'),
(7, 'arum', 'f1c1592588411002af340cbaedd6fc33', '2', '', 'Bariklana');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_riwayat` (`id_riwayat`),
  ADD KEY `fk_jenis3` (`id_jenis`);

--
-- Indeks untuk tabel `jenis_kandungan`
--
ALTER TABLE `jenis_kandungan`
  ADD PRIMARY KEY (`id_kandungan`),
  ADD KEY `jenis_kandungan` (`jenis_kandungan`);

--
-- Indeks untuk tabel `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_kandungan` (`id_kandungan`),
  ADD KEY `id_User` (`id_User`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_Kriteria`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_User`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `jenis_kandungan`
--
ALTER TABLE `jenis_kandungan`
  MODIFY `id_kandungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_pupuk`
--
ALTER TABLE `jenis_pupuk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD CONSTRAINT `fk_jenis3` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_pupuk` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_riwayat` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat` (`id_riwayat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `fk_kandungan3` FOREIGN KEY (`id_kandungan`) REFERENCES `jenis_kandungan` (`id_kandungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_User`) REFERENCES `tabel_user` (`id_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
