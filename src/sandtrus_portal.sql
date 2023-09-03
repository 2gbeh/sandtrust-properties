-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB-log
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandtrus_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `password` varchar(64) NOT NULL DEFAULT '7110eda4d09e062aa5e4a390b0a572ac0d2c0220',
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `user` (
  `photo` varchar(25) DEFAULT 'default.png',
  `names` varchar(50) NOT NULL,
  `sex` enum('m','f') NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(160) NOT NULL,
  `state` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `bank` int(3) DEFAULT 0,
  `acct_name` varchar(50) DEFAULT NULL,
  `acct_no` varchar(25) DEFAULT NULL,
  `ref_my` int(8) NOT NULL,
  `ref_by` int(8) DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`, `names`, `sex`, `dob`, `email`, `phone`, `address`, `state`, `username`, `password`, `bank`, `acct_name`, `acct_no`, `ref_my`, `ref_by`, `STATUS`, `DATE`, `ID`) VALUES
('424671.png', 'John Doe', 'm', NULL, 'john@email.com', '01234567891', 'US', 1, 'john', 'e06664e6d6720996ee4fc662acacb2a6f7ddf5c7', 0, NULL, NULL, 424671, 123456, 0, '2022-01-29 00:55:14', 1),
('455898.png', 'Jane Doe', 'f', NULL, 'jane@email.com', '01234567892', 'UK', 2, 'jane', 'befa84d73bb35e0e353647dd0e688f88d85ca182', 0, NULL, NULL, 455898, 123456, 0, '2022-01-29 00:58:02', 2),
('default.png', 'Mark Legendary', 'm', NULL, 'mark@email.com', '01234567893', 'NG', 3, 'mark', '7c4a8d09ca3762af61e59520943dc26494f8941b', 8, 'Mark Legendary', '0123456789', 123456, 424671, 0, '2022-01-29 00:58:02', 3),
('default.png', 'Gideon Mariochukwu', 'm', NULL, 'gideonclayton@gmail.com', '+2347063270979', '3,Peace Venue, Off Powerline, Boji-Boji, Owa', 11, 'gideonclayton', '6628d164a3033c343f9c571fc533b30187b8dd90', 6, 'Fhh', '2130852439', 516182, 0, 0, '2022-02-01 19:04:07', 5),
('default.png', 'Godsent Adingwupu', 'm', NULL, 'godsentadingwupu@gmail.com', '08160358572', 'Irewole close, Harmony estate, Ajah', 11, 'godsentadingwupu', 'ed916d00a52b0120eaa0ef31a86e7d5b42906107', 7, 'Godsent Adingwupu', '3019986422', 131246, 0, 0, '2022-02-01 20:47:28', 6),
('473144.jpg', 'Emenike Fidelis Uche', 'f', NULL, 'emenikeucdelia@gmail.com', '08100590389', '15 wale osholonge street', 5, 'emenikeucdelia', '421b2ef04cb506d4ce7624e0dbf42f237104127b', 19, 'Emenike Fidelis Uche', '2129280996', 473144, 0, 0, '2022-02-02 09:50:40', 7),
('924612.jpg', 'Emenike Fidelia Uche', 'f', NULL, 'emenikedelia@gmail.com', '+2348100590389', 'No 15 wale osholonge street beside blenco supermarket sangotedo Ajah, Lagos', 5, 'emenikedelia', '04b9710a49a5d35297f930c1fd2ae4cf08488093', 19, 'Emenike Fidelia Uche', '2129280996', 924612, 0, 0, '2022-02-02 09:53:58', 8),
('959936.jpg', 'Effiong Blessing Raphael', 'f', NULL, 'blessingraphael.e@gmail.com', '+2347032360477', 'Greenville Estate Badore, Ajah', 4, 'blessingraphael.e', 'ec86a94cef38b65e9a4e021c1e86bf562e0c812e', 8, 'Effiong Blessing Raphael', '0122558479', 959936, 0, 0, '2022-02-02 10:08:36', 9),
('default.png', 'Ufuoma Adingwupu', 'f', NULL, 'odjegbau@gmail.com', '08105371327', 'Ajah', 25, 'odjegbau', '5d83450f707bd4b1ed1ef54668fb2900be8a3e82', 22, 'Ufuoma Adingwupu', '0231919548', 658192, 0, 0, '2022-02-03 18:58:50', 10),
('465563.jpg', 'Odjegba Onoriode', 'f', NULL, 'onoriodeodjegba6@yahoo.com', '07064370054', '6, Birisibe lane off etuwewe Deco road Warri', 11, 'onoriodeodjegba6', 'e7763985a3ece3d61b5f60a8bc89da518da0a28a', 23, 'Odjegba Onoriode', '2110379494', 465563, 658192, 0, '2022-02-03 19:09:10', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
