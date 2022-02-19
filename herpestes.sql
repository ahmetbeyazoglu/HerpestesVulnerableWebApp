-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2022 at 11:06 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herpestes`
--

-- --------------------------------------------------------

--
-- Table structure for table `sqlinjection`
--

CREATE TABLE `sqlinjection` (
  `movie_name` text COLLATE utf8_turkish_ci NOT NULL,
  `director` text COLLATE utf8_turkish_ci NOT NULL,
  `release` text COLLATE utf8_turkish_ci NOT NULL,
  `type` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sqlinjection`
--

INSERT INTO `sqlinjection` (`movie_name`, `director`, `release`, `type`) VALUES
('Iron Man', 'Jon Favreau', '2008', 'Action'),
('Captain America', 'Joe Johnston', '2011', 'Action'),
('Iron Man', 'Jon Favreau', '2008', 'Action'),
('Captain America', 'Joe Johnston', '2011', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `xss`
--

CREATE TABLE `xss` (
  `first_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `last_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `xss`
--

INSERT INTO `xss` (`first_name`, `last_name`, `email`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
