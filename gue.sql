-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 03:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gue`
--
CREATE DATABASE IF NOT EXISTS `gue` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gue`;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('admin','superadmin') NOT NULL,
  `active` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_auth`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_auth`, `email`, `password`, `level`, `active`) VALUES
(1, 'mpampam5@gmail.com', '$2y$10$LART84KrxxTRbw8ZnAD9JOBJQbEZ6/gHHjPF3eXOiqra9dAAgV1d.', 'superadmin', '1'),
(2, 'admin@mail.com', '$2y$10$x.ovA50pNPb9tQcL6dwPnOzGdYHf1QbZoQ792bxfpAaSg.xzPDswO', 'admin', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
