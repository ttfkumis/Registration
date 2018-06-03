-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 06:36 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifdaftarcoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `mostentatif_akun`
--

CREATE TABLE `mostentatif_akun` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mostentatif_akun`
--

INSERT INTO `mostentatif_akun` (`id`, `nim`, `password`) VALUES
(1, '201731202', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `mostentatif_peserta`
--

CREATE TABLE `mostentatif_peserta` (
  `id` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `program_sertifikasi` varchar(10) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL DEFAULT '-',
  `jadwal_training` varchar(50) NOT NULL DEFAULT '-',
  `jadwal_ujian` varchar(50) NOT NULL DEFAULT '-',
  `akun_certiport` varchar(50) NOT NULL DEFAULT '-',
  `password_certiport` varchar(100) NOT NULL DEFAULT '-',
  `skor` varchar(5) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mosumum_akun`
--

CREATE TABLE `mosumum_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mosumum_peserta`
--

CREATE TABLE `mosumum_peserta` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `program_sertifikasi` varchar(10) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL DEFAULT '-',
  `jadwal_training` varchar(50) NOT NULL DEFAULT '-',
  `jadwal_ujian` varchar(50) NOT NULL DEFAULT '-',
  `akun_certiport` varchar(50) NOT NULL DEFAULT '-',
  `password_certiport` varchar(100) NOT NULL DEFAULT '-',
  `skor` varchar(5) NOT NULL DEFAULT '-',
  `bukti_bayar` varchar(200) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mtaumum_akun`
--

CREATE TABLE `mtaumum_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mtaumum_peserta`
--

CREATE TABLE `mtaumum_peserta` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `id_line` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `program_sertifikasi` varchar(10) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL DEFAULT '-',
  `jadwal_training` varchar(50) NOT NULL DEFAULT '-',
  `jadwal_ujian` varchar(50) NOT NULL DEFAULT '-',
  `akun_certiport` varchar(50) NOT NULL DEFAULT '-',
  `password_certiport` varchar(100) NOT NULL DEFAULT '-',
  `skor` varchar(5) NOT NULL DEFAULT '-',
  `bukti_bayar` varchar(200) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mostentatif_akun`
--
ALTER TABLE `mostentatif_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mostentatif_peserta`
--
ALTER TABLE `mostentatif_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mosumum_akun`
--
ALTER TABLE `mosumum_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mosumum_peserta`
--
ALTER TABLE `mosumum_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtaumum_akun`
--
ALTER TABLE `mtaumum_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtaumum_peserta`
--
ALTER TABLE `mtaumum_peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mostentatif_akun`
--
ALTER TABLE `mostentatif_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mostentatif_peserta`
--
ALTER TABLE `mostentatif_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mosumum_akun`
--
ALTER TABLE `mosumum_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mosumum_peserta`
--
ALTER TABLE `mosumum_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtaumum_peserta`
--
ALTER TABLE `mtaumum_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
