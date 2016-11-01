-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 06:14 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID_ARTICLE`, `JUDUL`, `KONTEN`, `KATEGORI`, `TAG`, `TANGGAL`, `AUTHOR`, `STATUS`) VALUES
(1, 'Choco mochi sukabumi', '<p><strong>The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the webmaster. Lorem ipsum dolor amet The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the webmaster.The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the</strong> webmaster.The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the webmaster.The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the webmaster.The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error. If you think this is a server error, please contact the webmaster.</p>', '2', 'kebakaran, hutan, kelapa sawit', '2016-09-09 01:18:56', 'Muhammad Giyan Sanusi', 0),
(4, 'Stardust', '<ol>\r\n<li>asdasd</li>\r\n<li>adsa</li>\r\n<li>adad</li>\r\n<li>afafasf</li>\r\n</ol>', '1', 'adfafd', '2016-09-09 09:53:18', 'Muhammad Giyan Sanusi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`IDBARANG` tinyint(4) NOT NULL,
  `NAMABARANG` char(100) NOT NULL,
  `HARGABARANG` float NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `GAMBAR` char(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IDBARANG`, `NAMABARANG`, `HARGABARANG`, `DESKRIPSI`, `GAMBAR`) VALUES
(1, 'M&M', 20000, '<p>adsd</p>', 'dark-black-dots-desktop-1920x1200-wanted-wallpaper-2.jpg');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `IDBARANG` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
