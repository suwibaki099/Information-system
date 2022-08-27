-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2022 at 06:41 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `age`, `bday`, `gender`, `address`, `height`, `weight`, `shot`, `vit`, `meds`, `medhis`, `pfname`, `plname`, `civstatus`, `relate_child`, `guardian_add`, `contact`) VALUES
(1, 'sherwin', 'sdjkfbskdjfb', 234, '0234-04-23', 'Male', 'sdfjbaskdfb', 345, 34, 'sdhfb', 'hsfbjh', 'hbhjb', 'hjb', 'sherwion', 'jkbsdfjk', 'Single', 'sdjkfbs', 'kj', 34),
(2, 'sherwin', 'sdjnfjksb', 234, '0023-04-23', 'Female', 'sdjfnskjd', 34, 34, 'sdjfbskjd', 'jkdbfgksjd', 'jbdfkjsb', 'jbsdjkb', 'asbfhjbd', 'sdhfbsjdhb', 'Single', 'djbfjhsb', 'hsdfbhjsdsd', 34235),
(3, 'she', 'sdfjgkj', 34, '0043-03-31', 'Male', 'dkjfbkgjdsb', 345, 54, 'dfdjnfkj', 'jdbfsdkjb', 'jdfbjksdb', 'jkbsdfjksdb', 'jbsdfb', 'kdjksfbks', 'Single', 'nasfb', 'bsdfkjb', 34523),
(4, 'as', 'as', 12, '0012-12-12', 'Male', '12', 12, 12, '12', '12', '12', '12', '12', '12', 'Single', '12', '12', 12),
(5, 'as', 'as', 12, '0012-12-12', 'Male', '12', 12, 12, '12', '12', '12', '12', '12', '12', 'Single', '12', '12', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
