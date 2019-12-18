-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 04:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen_tour`
--

CREATE TABLE `agen_tour` (
  `id_agen_tour` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agen_tour` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen_tour`
--

INSERT INTO `agen_tour` (`id_agen_tour`, `nama`, `agen_tour`, `alamat`) VALUES
(2, 'fan', 'PT MUDAH PERCAYA', 'palangkaraya'),
(3, 'fan fan', 'PT MUDAH PERCAYA 2', 'kalimantan tengah'),
(4, 'liko', 'PT MUDAH PERCAYA 3', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_angkatan`
--

CREATE TABLE `tabel_angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `angkatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_angkatan`
--

INSERT INTO `tabel_angkatan` (`id_angkatan`, `angkatan`) VALUES
(3, '2013'),
(4, '2018'),
(5, '2011');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_tabel_jadwal` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`id_tabel_jadwal`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, '2019-11-13', '2019-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `sub`, `kriteria`) VALUES
(10, 'murah', 25, '2', 'harga'),
(11, 'standar', 8, '3', 'harga'),
(12, 'mahal', 5, '4', 'harga'),
(13, 'Biasa', 12, '2', 'Fasilitas'),
(14, 'standar', 12, '3', 'Fasilitas'),
(15, ' Mewah ', 25, '4', 'Fasilitas');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `id_user`, `nim`, `nama`, `jurusan`, `angkatan`, `jenis_kelamin`) VALUES
(17, 2, 'dbc114004', 'ariska benda', 'Teknik Informatika', '2011', 'P'),
(18, 8, 'dbc114001', 'rifani2', 'Teknik Informatika', '2013', 'L'),
(19, 10, 'dbc114001', 'rifani2', 'Teknik Informatika', '2014', 'L'),
(23, 17, 'DBC114083', 'Hahaaaa', 'Teknik Informatika', '2012', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'ARISKA A', '12345', 'member'),
(6, 'admin1', '123456', 'admin'),
(7, 'farfan 1234', '12345', 'admin'),
(8, 'admin1', '12345', 'admin'),
(9, 'fannn', '12345', 'member'),
(10, 'fannn', '12345', 'member'),
(11, 'rifanimuhamad', '12345', 'admin'),
(12, 'fanfanfan123', '12345', 'member'),
(13, 'fanfanfan123', '12345', 'member'),
(17, 'HAHAHAA', '12345', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_voting`
--

CREATE TABLE `tabel_voting` (
  `id_voting` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_agen_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_voting`
--

INSERT INTO `tabel_voting` (`id_voting`, `id_user`, `id_agen_tour`) VALUES
(7, 2, 2),
(8, 9, 2),
(9, 9, 2),
(10, 9, 2),
(11, 9, 2),
(12, 9, 2),
(13, 9, 2),
(14, 9, 2),
(15, 2, 2),
(16, 2, 2),
(17, 2, 2),
(18, 2, 2),
(19, 2, 2),
(20, 2, 2),
(21, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen_tour`
--
ALTER TABLE `agen_tour`
  ADD PRIMARY KEY (`id_agen_tour`);

--
-- Indexes for table `tabel_angkatan`
--
ALTER TABLE `tabel_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id_tabel_jadwal`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tabel_voting`
--
ALTER TABLE `tabel_voting`
  ADD PRIMARY KEY (`id_voting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen_tour`
--
ALTER TABLE `agen_tour`
  MODIFY `id_agen_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_angkatan`
--
ALTER TABLE `tabel_angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_tabel_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tabel_voting`
--
ALTER TABLE `tabel_voting`
  MODIFY `id_voting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
