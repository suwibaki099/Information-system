-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2022 at 08:07 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `pic`, `fname`, `lname`, `age`, `bday`, `gender`, `address`, `height`, `weight`, `shot`, `vit`, `meds`, `medhis`, `pfname`, `plname`, `civstatus`, `relate_child`, `guardian_add`, `contact`) VALUES
(1, 0x312e6a7067, 'Ianna', 'Cuasay', 13, '2009-05-14', 'Female', 'San Pablo City, Laguna', 157, 39, 'Hepatitis B.', 'Vitamin C.', 'none', 'Pet Allergy', 'Marilyn', 'Cuasay', 'Married', 'Mother', 'San Pablo City, Laguna', 2147483647),
(3, 0x322e6a7067, 'Julia', 'Cuasay', 13, '2009-03-25', 'Female', 'Brgy. Del Remedio San Pablo City, Laguna', 157, 39, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Numeriano ', 'Cuasay', 'Married', 'Father', 'Brgy. Del Remedio San Pablo City, Laguna', 999556789),
(4, 0x312e6a7067, 'Ellaine Joy', 'Escano', 10, '2012-11-11', 'Female', 'San Pablo City, Laguna', 130, 20, 'Hepatitis B.', 'Vitamin C.', 'Amoxicillin', 'Pet Allergy', 'Sherwin', 'Pedro', 'Married', 'Father', 'Nagcarlan, Laguna', 2147483647),
(5, 0x322e6a7067, 'Steffany', 'Lopera', 2, '2022-07-11', 'Female', 'Brgy. Del Remedio San Pablo City, Laguna', 23, 12, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Sherwin', 'Pedro', 'Divorced', 'Father', 'Nagcarlan, Laguna', 999556789),
(6, 0x322e6a7067, 'Sherwin', 'Pedro', 3, '2019-11-11', 'Male', 'Nagcarlan, Laguna', 25, 15, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Pet Allergy', 'Steffany May', 'Lopera', 'Widowed', 'Mother', 'San Pablo City', 999556789),
(7, 0x322e6a7067, 'Julianne', 'Cuasay', 3, '2022-06-11', 'Female', 'San Pablo City, Laguna', 25, 16, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Analyn', 'Cuasay', 'Married', 'Mother', 'Brgy. Del Remedio San Pablo City, Laguna', 999556789),
(8, 0x312e6a7067, 'Ruth', 'Cuasay', 2, '2020-01-10', 'Female', 'Brgy. Del Remedio San Pablo City, Laguna', 32, 16, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Steffany May', 'Lopera', 'Married', 'Mother', 'San Pablo City', 999556789),
(9, 0x322e6a7067, 'Ruth', 'Cuasay', 16, '2006-11-11', 'Female', 'Brgy. Del Remedio San Pablo City, Laguna', 100, 30, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Sinus Infections', 'Ellaine Joy', 'Escano', 'Married', 'Mother', 'San Pablo City, Laguna', 999556789),
(10, 0x312e6a7067, 'Steffany May', 'Lopera', 0, '2022-09-18', 'Female', 'San Pablo City', 157, 40, 'Hepatitis B.', 'Vitamin A.', 'Amoxicillin', 'Pet Allergy', 'Steffany May', 'Lopera', 'Divorced', 'Mother', 'San Pablo City', 999556789),
(11, 0x322e6a7067, 'Ellaine Joy', 'Escano', 7, '2015-12-11', 'Female', 'San Pablo City, Laguna', 157, 40, 'Hepatitis B.', 'Vitamin C.', 'Amoxicillin', 'Sinus Infections', 'Ruth', 'Cuasay', 'Divorced', 'Mother', 'Brgy. Del Remedio San Pablo City, Laguna', 999556789);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
