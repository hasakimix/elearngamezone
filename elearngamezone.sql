-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 06:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearngamezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_sessions`
--

CREATE TABLE `app_sessions` (
  `id` int(11) NOT NULL,
  `data` text NOT NULL,
  `ip_address` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_sessions`
--

INSERT INTO `app_sessions` (`id`, `data`, `ip_address`, `timestamp`) VALUES
(1, '__ci_last_regenerate|i:1715533685;id|s:1:\"3\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(2, '__ci_last_regenerate|i:1715533775;', '::1', '0000-00-00 00:00:00'),
(4, '__ci_last_regenerate|i:1715672164;id|s:2:\"15\";email|s:15:\"admin@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(7, '__ci_last_regenerate|i:1715610348;id|s:1:\"6\";email|s:14:\"hiho@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(9, '__ci_last_regenerate|i:1715533775;id|s:1:\"3\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(10, '__ci_last_regenerate|i:1715610340;id|s:1:\"4\";email|s:17:\"pagibig@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(11, '__ci_last_regenerate|i:1715610341;', '::1', '0000-00-00 00:00:00'),
(12, '__ci_last_regenerate|i:1715671362;', '::1', '0000-00-00 00:00:00'),
(13, '__ci_last_regenerate|i:1715671549;', '::1', '0000-00-00 00:00:00'),
(14, '__ci_last_regenerate|i:1715671933;id|s:2:\"13\";email|s:19:\"buratmoto@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(15, '__ci_last_regenerate|i:1715671933;', '::1', '0000-00-00 00:00:00'),
(16, '__ci_last_regenerate|i:1715671934;', '::1', '0000-00-00 00:00:00'),
(17, '__ci_last_regenerate|i:1715671935;', '::1', '0000-00-00 00:00:00'),
(18, '__ci_last_regenerate|i:1715671937;', '::1', '0000-00-00 00:00:00'),
(19, '__ci_last_regenerate|i:1715671937;', '::1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `otp`, `is_verified`) VALUES
(3, 'micko', 'esguerra', 'mickoaira@gmail.com', '$2y$10$S5ORjJlPqQO.qVIQMENw3u7IaKvL7HPj2Xtg8mC2mq5zp0ah5I78C', NULL, 0),
(13, 'ronaldo', 'burat', 'buratmoto@gmail.com', '$2y$10$ixEwoXVVKfKhiN8S2uCTJ.NdDUNT.4IzV0uWhURb9Yl8xA4XyN2L.', NULL, 0),
(15, 'admin', 'admin', 'admin@gmail.com', '$2y$10$UMrQDQOMQ7E54b60Ywqai.7WRXcn0kz7.sRn3WePnaEbZKfDI.ozu', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_sessions`
--
ALTER TABLE `app_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_sessions`
--
ALTER TABLE `app_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
