-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 05:31 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `child_bmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi_calculator`
--

CREATE TABLE IF NOT EXISTS `bmi_calculator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `height` varchar(55) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `score` varchar(55) NOT NULL,
  `date_now` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `bmi_calculator`
--

INSERT INTO `bmi_calculator` (`id`, `height`, `weight`, `score`, `date_now`) VALUES
(1, '157', '38', '15.4', '2022-09-22'),
(2, '157', '38', '15.4', '2022-09-22'),
(3, '157', '38', '15.4', '2022-09-22'),
(4, '157', '99', '40.2', '2022-09-22'),
(5, '157', '40', '16.2', '2022-09-22'),
(6, '157', '40', '16.2', '2022-09-22'),
(7, '200', '43', '10.8', '2022-09-22'),
(8, '200', '43', '10.8', '2022-09-22'),
(9, '157', '38', '15.4', '2022-09-22'),
(10, '157', '38', '15.4', '2022-09-22'),
(11, '157', '38', '15.4', '2022-09-22'),
(12, '157', '38', '15.4', '2022-09-22'),
(13, '157', '38', '15.4', '2022-09-22'),
(14, '157', '38', '15.4', '2022-09-22'),
(15, '157', '38', '15.4', '2022-09-22'),
(16, '157', '38', '15.4', '2022-09-22'),
(17, '157', '38', '15.4', '2022-09-22'),
(18, '157', '38', '15.4', '2022-09-22'),
(19, '157', '43', '17.4', '2022-09-22'),
(20, '159', '99', '39.2', '2022-09-22'),
(21, '159', '38', '15', '2022-09-22'),
(22, '300', '21', '2.3', '2022-09-22'),
(23, '157', '40', '16.2', '2022-09-22'),
(24, '157', '38', '15.4', '2022-09-23'),
(25, '157', '38', '15.4', '2022-09-23'),
(26, '157', '38', '15.4', '2022-09-23'),
(27, '157', '38', '15.4', '2022-09-23'),
(28, '135', '38', '20.9', '2022-09-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
