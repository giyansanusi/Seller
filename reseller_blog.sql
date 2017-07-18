-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 02:59 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reseller_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`IDADMIN` int(11) NOT NULL,
  `USERNAME` char(50) NOT NULL,
  `PASSWORD` char(50) NOT NULL,
  `NAMAADMIN` char(100) NOT NULL,
  `GAMBAR` char(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDADMIN`, `USERNAME`, `PASSWORD`, `NAMAADMIN`, `GAMBAR`) VALUES
(1, 'giyansanusi', 'superadmin', 'Giyan', 'anjrit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`ID_ARTICLE` int(11) NOT NULL,
  `JUDUL` char(50) NOT NULL,
  `KONTEN` longtext NOT NULL,
  `KATEGORI` char(50) NOT NULL,
  `TAG` char(50) NOT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AUTHOR` char(50) NOT NULL,
  `STATUS` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID_ARTICLE`, `JUDUL`, `KONTEN`, `KATEGORI`, `TAG`, `TANGGAL`, `AUTHOR`, `STATUS`) VALUES
(3, 'Kebakaran Hutan Belantara', '<p>Lorem ipsum dolor amet lorem ipsum dolor amet</p>', '4', 'Lorem Ipsum', '2016-10-12 02:16:02', 'Muhammad Giyan Sanusi', 0),
(5, 'Euphoristica', '<p>Just a random Shit</p>', '2', 'Random shit', '2017-01-20 14:01:19', 'Muhammad Giyan Sanusi', 0),
(8, 'a', '<p>asd</p>', '1', 'asd', '2017-01-20 23:58:12', 'Muhammad Giyan Sanusi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`IDBARANG` tinyint(4) NOT NULL,
  `NAMABARANG` char(100) NOT NULL,
  `HARGABARANG` float NOT NULL,
  `BERATBARANG` char(30) NOT NULL,
  `KATEGORI` tinyint(4) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `GAMBAR` char(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IDBARANG`, `NAMABARANG`, `HARGABARANG`, `BERATBARANG`, `KATEGORI`, `DESKRIPSI`, `GAMBAR`) VALUES
(6, 'Mochi cokelat', 40000, '1', 2, '<p>Mochi cokelat asli sukabumi</p>', 'of.png'),
(7, 'Kacang Gurih', 80000, '2', 1, '<p>Kacang dua kelinci khas sukabumi</p>', 'of2.png'),
(8, 'Wafer Banten', 20000, '4', 1, '<p>Wafer&nbsp;<strong>Banten&nbsp;</strong>Coy</p>', 'of1.png'),
(9, 'Minyak Goreng', 50000, '2', 1, '<p>Minyak goreng murini&nbsp;</p>', 'of3.png'),
(10, 'Banana', 30000, '3', 1, '<p>Pisang segar dari kebun</p>', 'of8.png'),
(11, 'Ornamen pedang', 300000, '5', 2, '<p>Ornamen pedang asli cibatu</p>', 'of10.png'),
(12, 'Pacul Cibatu', 400000, '6', 2, '<p>Pacul Asli Cibatu</p>', 'of30.png'),
(13, 'Magento Framework', 30000, '7', 2, '<p>Framework PHP</p>', 'of56.png'),
(14, 'Kristal Jamaika', 3000000, '20', 2, '<p>Ini adalah berlian paing mahal se jamaiak</p>', 'Deadpool_30px.png');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `IDGAMBAR` int(11) NOT NULL,
  `NAMAGAMBAR` char(100) NOT NULL,
  `CAPTION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`IDGAMBAR`, `NAMAGAMBAR`, `CAPTION`) VALUES
(1, 'anjrit.jpg', 'Kasus tiputipu'),
(2, '1473836995536.jpg', 'Jeung Barudak'),
(3, 'Deadpool.png', 'Deadpool'),
(4, 'Deadpool1.png', 'deadpool2');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `WAKTU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ADMIN` char(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM` time NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `ISSEEN` tinyint(1) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`WAKTU`, `ADMIN`, `TANGGAL`, `JAM`, `DESKRIPSI`, `ISSEEN`, `STATUS`) VALUES
('2016-09-14 00:20:26', 'Muhammad Giyan Sanusi', '2016-09-14', '02:26:00', 'Menghapus article dengan judul &nbspRambutan%20Sukabumi', 1, ''),
('2016-09-15 12:58:59', 'Muhammad Giyan Sanusi', '2016-09-15', '14:59:00', 'Menambah article dengan judul &nbspPembunuhan Mirna Wayan Sari', 1, ''),
('2016-09-15 12:59:20', 'Muhammad Giyan Sanusi', '2016-09-15', '14:20:00', 'Mengubah article dengan judul &nbspPembunuhan Mirna Wayan Sari', 1, ''),
('2016-09-15 12:59:27', 'Muhammad Giyan Sanusi', '2016-09-15', '14:27:00', 'Menghapus article dengan judul &nbspPembunuhan%20Mirna%20Wayan%20Sari', 1, ''),
('2016-09-15 16:07:34', 'Muhammad Giyan Sanusi', '2016-09-15', '18:33:00', 'Menambah article dengan judul &nbspMirna Wayan Sari', 1, ''),
('2016-10-12 02:16:02', 'Muhammad Giyan Sanusi', '2016-10-12', '04:02:00', 'Menambah article dengan judul &nbspKebakaran Hutan Belantara', 1, ''),
('2016-11-10 06:19:31', 'Muhammad Giyan Sanusi', '2016-11-10', '07:31:00', 'Menambah article dengan judul &nbspKopi vietnam sianida', 1, ''),
('2016-11-10 06:20:01', 'Muhammad Giyan Sanusi', '2016-11-10', '07:01:00', 'Mengubah article dengan judul &nbspKopi vietnam sianida jessica', 1, ''),
('2016-11-10 06:20:10', 'Muhammad Giyan Sanusi', '2016-11-10', '07:10:00', 'Menghapus article dengan judul &nbspKopi%20vietnam%20sianida%20jessica', 1, ''),
('2017-01-14 03:56:31', 'Muhammad Giyan Sanusi', '2017-01-14', '04:31:00', 'Menambah article dengan judul &nbspKEbakaran hutan', 1, ''),
('2017-01-20 14:01:19', 'Muhammad Giyan Sanusi', '2017-01-20', '21:19:00', 'Menambah article dengan judul &nbspEuphoristica', 1, ''),
('2017-01-20 14:05:54', 'Muhammad Giyan Sanusi', '2017-01-20', '21:54:00', 'Menghapus article dengan judul &nbspKEbakaran%20hutan', 1, ''),
('2017-01-20 14:06:36', 'Muhammad Giyan Sanusi', '2017-01-20', '21:36:00', 'Menghapus article dengan judul &nbspMirna Wayan Sari', 1, ''),
('2017-01-20 23:54:41', 'Giyan', '2017-01-21', '06:41:00', 'Menambah article dengan judul Kapal Titanic Tenggelam', 0, 'Insertion'),
('2017-01-20 23:57:02', 'Giyan', '2017-01-21', '06:02:00', 'Menambah article dengan judul Random', 0, 'Insertion'),
('2017-01-20 23:57:48', 'Giyan', '2017-01-21', '06:48:00', 'Menghapus article dengan judul &nbspRandom', 0, 'Deletion'),
('2017-01-20 23:58:12', 'Giyan', '2017-01-21', '06:12:00', 'Menambah article dengan judul a', 0, 'Insertion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`IDADMIN`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`IDBARANG`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
 ADD PRIMARY KEY (`IDGAMBAR`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`WAKTU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `IDADMIN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `IDBARANG` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
