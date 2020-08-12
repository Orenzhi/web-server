-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 12:55 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectso`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarpeserta`
--

CREATE TABLE `daftarpeserta` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `intansi` varchar(50) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarpeserta`
--

INSERT INTO `daftarpeserta` (`no`, `nama`, `jenis_kelamin`, `intansi`, `alamat`) VALUES
(1, 'Muallimatus Sa\'diyah', 'Perempuan', 'UPN Veteran Jakarta', 'Cipedak'),
(4, 'Rezhi Saputra', 'Laki-laki', 'UPNVJ', 'Pangkalan Jati'),
(5, 'sandi oge', 'Perempuan', 'upnvj', 'bintaro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarpeserta`
--
ALTER TABLE `daftarpeserta`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarpeserta`
--
ALTER TABLE `daftarpeserta`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
