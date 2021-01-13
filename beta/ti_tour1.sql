-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 02:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ti_tour1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen_tour`
--

CREATE TABLE `agen_tour` (
  `id_agen_tour` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agen_tour` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen_tour`
--

INSERT INTO `agen_tour` (`id_agen_tour`, `nama`, `agen_tour`, `deskripsi`, `alamat`) VALUES
(2, 'fan', 'PT MUDAH PERCAYA', 'hay hay hay hiiiii22', 'palangkaraya');

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
(5, '2011'),
(8, '2014 ');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_info`
--

CREATE TABLE `tabel_info` (
  `id_info` int(11) NOT NULL,
  `nama_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_info`
--

INSERT INTO `tabel_info` (`id_info`, `nama_info`) VALUES
(1, 'tgl 20 sd 28 feb pendaftaran 2020');

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
(1, '2019-11-13', '2020-01-10');

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
(11, 'standar', 8, '3', 'harga'),
(14, 'standar', 12, '3', 'Fasilitas'),
(21, 'Biasa', 8, '2', 'Harga');

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
(18, 9, 'dbc114001', 'rifani2', 'Teknik Informatika', '2013', 'L'),
(19, 20, 'DBC114000', 'farfan', 'Teknik Informatika', '2014 ', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_master_kriteria`
--

CREATE TABLE `tabel_master_kriteria` (
  `id_master_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_master_kriteria`
--

INSERT INTO `tabel_master_kriteria` (`id_master_kriteria`, `nama_kriteria`) VALUES
(1, 'Harga'),
(2, 'Fasilitas');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(9, 'fannn', '12345', 'member', '0'),
(18, 'admin', '123456', 'admin', '0'),
(20, 'fanii', '12345', 'member', '1'),
(21, 'admin1', '123456', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_voting`
--

CREATE TABLE `tabel_voting` (
  `id_voting` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_agen_tour` int(11) NOT NULL,
  `hari_ini` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_voting`
--

INSERT INTO `tabel_voting` (`id_voting`, `id_user`, `id_agen_tour`, `hari_ini`) VALUES
(15, 9, 5, '2019-12-29 08:14:27');

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
-- Indexes for table `tabel_info`
--
ALTER TABLE `tabel_info`
  ADD PRIMARY KEY (`id_info`);

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
-- Indexes for table `tabel_master_kriteria`
--
ALTER TABLE `tabel_master_kriteria`
  ADD PRIMARY KEY (`id_master_kriteria`);

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
  MODIFY `id_agen_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_angkatan`
--
ALTER TABLE `tabel_angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabel_info`
--
ALTER TABLE `tabel_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_tabel_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tabel_master_kriteria`
--
ALTER TABLE `tabel_master_kriteria`
  MODIFY `id_master_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tabel_voting`
--
ALTER TABLE `tabel_voting`
  MODIFY `id_voting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
