-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2022 at 07:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `verification_code` text NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verification_code`, `email_verified_at`) VALUES
(8, 'Ruth Cuasay', 'ruthcuasay28@gmail.com', '$2y$10$VeKrecVSBetS/IqkL8fdi.ANl6NqA0TPrHcRyjsQqOLv9QPMRgNgG', '467211', '2022-09-21 14:16:26'),
(9, 'xinxin', 'xinxinnie28@gmail.com', '$2y$10$qNl6ImzaN9ws02NvEyjIxOK/lITlU2LY8.W79ksLgFaQKSt2jNExy', '284915', '2022-09-21 14:41:44'),
(10, 'cuasay-ruth', 'ruthcuasay2000@gmail.com', '$2y$10$3LB39sgvJoMgO72v3w1o6ew/KqzeAlzoWWxiUFu7EU/VZsUwtyWKa', '199532', '2022-09-21 14:43:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
