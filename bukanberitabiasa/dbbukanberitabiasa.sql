-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 06:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbukanberitabiasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `sumber` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(5) NOT NULL,
  `vote` int(5) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori`, `judul`, `isi`, `gambar`, `sumber`, `tanggal`, `hits`, `vote`) VALUES
(2, 'Ekonomi', 'Pembangunan dikota semarang', 'Pembangunan dikota semarang berjalan sangat cepat. Hal ini angat berperan dalam pergerakan ekonomi masyarakat di kota semarang. Namun pembangunan ini harus memperhatikan sektor tata lingkup lingkungan.<br><br>\r\n\r\nLingkungan yang tidak diperhatkan dapat memberikan efek dampak buruk pada masyarakat sendiri. Dampak buruk dari hal tersebut dapat langsung dirasakan oleh masyarakat yakni bahanya banjir dan lainnya.<br><br>\r\n\r\nTapi pembangunan sangat dibutuhkan oleh masyarakat<br><br>', 'DSC_0191 - Copy.JPG', 'semarang.com', '2016-01-04', 129, 6),
(3, 'Ekonomi', 'Desain Kreatif', 'Desain kreatif sangat diperlukan untuk dapat mengambangkan ekonomi kreatif .Disektor ini masih sangat berpeluang besar, selain karena masih kurangnya pihak yang melirik bidang ini ,tetapi juga masih tersedianya pangsa pasar yang masih terbuka besar<br><br>\r\n\r\nDibidang ini diharapkan dapat menyerap tenaga kerja yang banyak sehingga dapat mengurangi pengannguran yang semakin banyak<br><br>', 'images.jpg', 'semarang.com', '2016-01-08', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Olahraga'),
(3, 'Ekonomi'),
(4, 'Bisnis'),
(5, 'Seni dan Budaya'),
(6, 'Otomotif'),
(7, 'Teknologi'),
(8, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_berita` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(2, 1, 'Andien', 'sefmkwenwke', 'Tampan dan mempesona :*', '2015-12-28'),
(3, 1, 'Kiki', 'fwfjnewfkgfkgnk', 'Duh....\r\n', '2015-12-28'),
(4, 1, 'admin', 'admin@gmail.com', 'Webnya bagus gan...', '2015-12-29'),
(5, 2, 'Wahyu', 'wahyu@gmail.com', 'wahyu cakep', '2016-01-08'),
(6, 3, 'Amir', 'amirwefw', 'Beritanya bagus', '2016-01-08'),
(7, 3, 'abdul', 'abdul', 'abdul ganteng', '2016-01-08'),
(8, 3, 'ahmed', 'ahmed', 'bagus gan..', '2016-01-08'),
(9, 3, 'dqnbwhfwb', 'huegfkjweh@gmail.com', 'lkdhjwebfjkebfjk', '2016-01-08');

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
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subyek`, `pesan`, `tanggal`) VALUES
(1, 'Wahyu Darojatulloh', 'wahyudarojatulloh@gmail.com', 'Sanjungan', 'Bagus gan, lanjutkan....', '0000-00-00'),
(2, 'Wahyu Darojatulloh', 'wahyudarojatulloh@gmail.com', 'Sanjungan', 'Bagus gan, lanjutkan....', '2015-12-29'),
(3, 'Wahyu Red', 'fojhiahf@wahyu.com', 'Amar', 'Webnya bagus gan.....', '2016-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'wsoewignyo', '61a7770303fefa619646336a331f33dc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
