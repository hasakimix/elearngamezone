-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 02:12 PM
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
(2, '__ci_last_regenerate|i:1730543622;id|s:2:\"17\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00');

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
(13, 'ronaldo', 'burat', 'buratmoto@gmail.com', '$2y$10$ixEwoXVVKfKhiN8S2uCTJ.NdDUNT.4IzV0uWhURb9Yl8xA4XyN2L.', NULL, 0),
(15, 'admin', 'admin', 'admin@gmail.com', '$2y$10$UMrQDQOMQ7E54b60Ywqai.7WRXcn0kz7.sRn3WePnaEbZKfDI.ozu', NULL, 0),
(17, 'test', 'test', 'mickoaira@gmail.com', '$2y$10$6gkfK405TruK/c2weJrInOgRUNU8dgE74x65hMRfoiGPULV51SFK6', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_library`
--

CREATE TABLE `users_library` (
  `user_library_id` int(11) NOT NULL COMMENT 'unique id',
  `user_id` int(11) NOT NULL,
  `library` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_library`
--

INSERT INTO `users_library` (`user_library_id`, `user_id`, `library`, `created_at`) VALUES
(1, 16, 'java', '2024-10-26 17:34:37'),
(2, 17, 'java', '2024-10-29 05:56:27');

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
-- Indexes for table `users_library`
--
ALTER TABLE `users_library`
  ADD PRIMARY KEY (`user_library_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_sessions`
--
ALTER TABLE `app_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=792;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_library`
--
ALTER TABLE `users_library`
  MODIFY `user_library_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
