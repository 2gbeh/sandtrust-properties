-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2022 at 01:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandtrus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `password` varchar(64) NOT NULL DEFAULT '7110eda4d09e062aa5e4a390b0a572ac0d2c0220',
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `phone`, `password`, `STATUS`, `DATE`, `ID`) VALUES
('2gbeh', 'webmaster@hwplabs.com', '08169960927', '3e511da7577d1864871b760ab30e05b56943c9b2', 5, '2022-01-27 23:00:00', 1),
('gideon', 'gideon@sandtrustproperties.com', '07063270979', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 4, '2022-01-27 23:00:01', 2),
('godsent', 'admin@sandtrustproperties.com', '08160358572', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 4, '2022-01-27 23:00:02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `photo` varchar(25) DEFAULT 'default.png',
  `names` varchar(50) NOT NULL,
  `sex` enum('m','f') NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(160) NOT NULL,
  `state` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `bank` int(3) DEFAULT '0',
  `acct_name` varchar(50) DEFAULT NULL,
  `acct_no` varchar(25) DEFAULT NULL,
  `ref_my` int(8) NOT NULL,
  `ref_by` int(8) DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`, `names`, `sex`, `email`, `phone`, `address`, `state`, `username`, `password`, `bank`, `acct_name`, `acct_no`, `ref_my`, `ref_by`, `STATUS`, `DATE`, `ID`) VALUES
('424671.png', 'John Doe', 'm', 'john@email.com', '01234567891', 'US', 1, 'john', 'e06664e6d6720996ee4fc662acacb2a6f7ddf5c7', 0, NULL, NULL, 424671, 123456, 0, '2022-01-29 00:55:14', 1),
('455898.png', 'Jane Doe', 'f', 'jane@email.com', '01234567892', 'UK', 2, 'jane', 'befa84d73bb35e0e353647dd0e688f88d85ca182', 0, NULL, NULL, 455898, 123456, 0, '2022-01-29 00:58:02', 2),
('default.png', 'Mark Legendary', 'm', 'mark@email.com', '01234567893', 'NG', 3, 'mark', '7c4a8d09ca3762af61e59520943dc26494f8941b', 8, 'Mark Legendary', '0123456789', 123456, 424671, 0, '2022-01-29 00:58:02', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
