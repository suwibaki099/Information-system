-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2022 at 04:31 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `bday` text NOT NULL,
  `gender` text NOT NULL COMMENT 'address',
  `address` text NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `shot` text NOT NULL,
  `vit` text NOT NULL,
  `meds` text NOT NULL,
  `medhis` text NOT NULL,
  `pfname` text NOT NULL,
  `plname` text NOT NULL,
  `civstatus` text NOT NULL,
  `relate_child` text NOT NULL,
  `guardian_add` text NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `pic`, `fname`, `lname`, `age`, `bday`, `gender`, `address`, `height`, `weight`, `shot`, `vit`, `meds`, `medhis`, `pfname`, `plname`, `civstatus`, `relate_child`, `guardian_add`, `contact`) VALUES
(1, 0x312e6a7067, 'Ianna', 'Cuasay', 13, '2009-05-14', 'Female', 'San Pablo City, Laguna', 157, 39, 'Hepatitis B.', 'Vitamin C.', 'none', 'Pet Allergy', 'Marilyn', 'Cuasay', 'Married', 'Mother', 'San Pablo City, Laguna', 2147483647),
(2, 0x352d312d38313978313032342e6a7067, 'Julia', 'Cuasay', 13, '2009-03-25', 'Female', 'Brgy. Del Remedio San Pablo City, Laguna', 150, 42, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Numeriano', 'Cuasay', 'Married', 'Father', 'Brgy. Del Remedio San Pablo City, Laguna', 999556789);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
