-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 08:38 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_izin_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_izin_siswa`
--

CREATE TABLE `form_izin_siswa` (
  `id_izin` int(5) NOT NULL,
  `izin_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `izin_nama` varchar(100) NOT NULL,
  `izin_kelas` varchar(20) NOT NULL,
  `izin_guru` varchar(100) NOT NULL,
  `izin_keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_izin_siswa`
--

INSERT INTO `form_izin_siswa` (`id_izin`, `izin_waktu`, `izin_nama`, `izin_kelas`, `izin_guru`, `izin_keperluan`) VALUES
(1, '2019-04-06 18:26:29', 'Robby', 'XII IPA 1', 'Bu Ashiyyyaaappp', 'perlu'),
(2, '2019-04-06 18:35:52', 'Diar', 'X IPS 2', 'Pak Yogi', 'wdw'),
(3, '2019-04-06 18:36:05', 'Istimiwir', 'X IPA 3', 'Bu Amy', 'wdwd'),
(4, '2019-04-06 18:36:18', 'Istian', 'X IPA 4', 'Pak Nashir', 'dsvds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_izin_siswa`
--
ALTER TABLE `form_izin_siswa`
  ADD PRIMARY KEY (`id_izin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_izin_siswa`
--
ALTER TABLE `form_izin_siswa`
  MODIFY `id_izin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
