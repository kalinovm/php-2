-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 06:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prodaja zivotinja`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucni ljubimci`
--

CREATE TABLE IF NOT EXISTS `kucni ljubimci` (
  `vrsta` int(11) NOT NULL AUTO_INCREMENT,
  `rasa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `starost` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cena` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Poreklo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vrsta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `kucni ljubimci`
--

INSERT INTO `kucni ljubimci` (`vrsta`, `rasa`, `starost`, `cena`, `Poreklo`) VALUES
(2, 'Jazavicar', '1,5 godina', '200 $', 'Italija'),
(3, 'Sarplaninac', '2 godine', '220 $', 'Belgija'),
(4, 'Bokser', '1 godina', '230 $', 'Holandija'),
(6, 'Erdel terijer', '1 godina i 2 meseca', '250 $', 'Skotska'),
(9, 'Nemacki ovcar', '2 god', '330 $', 'Nemacka');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
