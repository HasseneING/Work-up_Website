-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2019 at 02:37 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Account_ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) NOT NULL,
  `password` varchar(250) NOT NULL,
  `Full_name` varchar(30) NOT NULL,
  `Account_Type` varchar(7) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`Account_ID`),
  UNIQUE KEY `email` (`email`(50))
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Account_ID`, `email`, `password`, `Full_name`, `Account_Type`) VALUES
(1, 'mohamedhassene.hamed@esprit.tn', 'TEST', 'Hassene Hamed', 'user'),
(2, 'Hamedhassenekun@gmail.com', '$2y$10$3r1.zATEJgj2MQxnDGZUu.nFvZ9ds1/eQ/iaZzCLeV9ZAEJ22uNYe', 'Hassene Hamed', 'user'),
(3, 'oussemamakni@esprit.tn', '$2y$10$EiyUbhs.oRf8kqQgjJMoou2vD8M6PICkiSjN/yKM68rS3Q3IS8k0u', 'Hassene Hamed', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
