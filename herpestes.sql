-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Generation Time: May 15, 2022 at 06:46 PM
-- Server version: 8.0.29
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `movie_name` text CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `director` text CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sqlinjection`
--

INSERT INTO `sqlinjection` (`movie_name`, `director`) VALUES
('Esaretin Bedeli', '1994'),
('The Godfather', '1972'),
('Fight Club', '1999'),
('Inception', '2010'),
('Se7en', '1995'),
('The matrix', '1999'),
('Iron Man', '2008'),
('Hulk', '2008'),
('Captan America', '2011'),
('Dağ 2', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'admin', '$2y$10$h/2NpkbQ97BQ1z87iKFGQ.CZgi8uvG/NZBplfhwuYH6NU9s/qpeAW', '2022-03-19 10:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `xss`
--

CREATE TABLE `xss` (
  `first_name` varchar(12) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
