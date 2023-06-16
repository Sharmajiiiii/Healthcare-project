-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 04:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `address`) VALUES
('ww', 'w@gmail.com', 'w', 'w'),
('ww', 'w@gmail.com', 'w', 'w'),
('Nitesh', 'nitesh@gmail.com', 'nitesh@12', 'bulandshahr'),
('m', 'm@gmai.com', 'sdi', 'aoj'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('nitesh', 'nitesh@gmail.com', 'nitesh@12', 'nnnnn'),
('nitte', 'asas@gmail.com', 'nitte@12', 'dcwub'),
('Nitesh', 'nitesh@gmail.com', 'nitesh@1', 'bulandshahe'),
('Nitesh', 'nitesh@gmail.com', 'nitesh@1', 'bulandshahe'),
('nnn', 'nn@gmail.com', 'ddt', 'rrs'),
('Mohit', 'mohit@gmail.com', 'Mohit@12', 'bulandshahr'),
('Nitesh', 'nitesh@gmail.com', 'nitesh@12', 'bulanddshahr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
