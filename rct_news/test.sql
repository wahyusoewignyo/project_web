-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 01:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `gambar`, `sumber`) VALUES
(9, 'Wahyu Tampan', 'eqwopjDRHWEJBFRKJWEANGLKER;\r\nRFAG\r\nERTYTYTJEHTJHTJJ\r\nT\r\nHRT\r\nHRTH\r\nTR\r\nHYR\r\nJYTJTUKJYUKYIKIYKLUILIYKLYILKI\r\nJUYKJUYKKKJMIULKYTRHERH\r\nNUMUUUYTT\r\n', '2015-12-07', 'Dislike.png', 'www.wsstore.com'),
(10, 'Wahyu Ganteng', 'WDQWEIhfbarekg''b\r\ngera\r\ng\r\nrtshyrhth\r\nh\r\ntrhtynj\r\nyrhn\r\nrtnb\r\ntr\r\nbrt\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2015-12-09', 'GitHubSetup.exe', 'www.wsstore.com'),
(11, 'pkfqpojfWF', 'FKE;OIJG"wtlkGOPJKAL\r\nG;EPGJE;LGJO\r\nGKJERJHGEOJGIEKG\r\nGKEIGEKLNTGEUHG\r\nGKOIEJGKENRGUHEUIJGKN\r\nOEIJGKESNGUHEUJGNF\r\nKIERHGKERNGJERH\r\n', '2015-12-12', 'DSC_0192.JPG', 'www.wsstore.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subyek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'wsoewignyo', '298ca2a491423f3402dc60379945ff71');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
