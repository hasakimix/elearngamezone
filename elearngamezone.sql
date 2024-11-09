-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_sessions`
--

INSERT INTO `app_sessions` (`id`, `data`, `ip_address`, `timestamp`) VALUES
(1, '__ci_last_regenerate|i:1731166084;id|s:2:\"17\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(2, '__ci_last_regenerate|i:1730543622;id|s:2:\"17\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(8, '__ci_last_regenerate|i:1731158716;id|s:2:\"17\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(75, '__ci_last_regenerate|i:1731151426;id|s:2:\"17\";email|s:19:\"mickoaira@gmail.com\";logged_in|b:1;', '::1', '0000-00-00 00:00:00'),
(792, '__ci_last_regenerate|i:1731166084;', '::1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `library_name` varchar(255) NOT NULL,
  `image_url` text NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `library_name`, `image_url`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Java', 'assets/img/Java.png', 'eyJ0aXRsZSI6IkphdmEgUHJldmlldyIsIm92ZXJ2aWV3IjoiVW5kZXJzdGFuZGluZyBjb3JlIGNvbmNlcHRzIGxpa2UgdmFyaWFibGVzLCBkYXRhIHR5cGUsIGNvbnRyb2wgc3RydWN0dXJlcywgYW5kIG9iamVjdC1vcmllbnRlZCBwcm9ncmFtbWluZyhPT1ApLiIsIm1vZHVsZXMiOlsiSW50cm9kdWN0aW9uIHRvIEphdmE6IFNldHRpbmcgdXAgeW91ciBlbnZpcm9ubWVudCBhbmQgd3JpdGluZyB5b3VyIGZpcnN0IHByb2dyYW0uIiwiRGF0YSBUeXBlcyAmIFZhcmlhYmxlczogTGVhcm4gaG93IHRvIHN0b3JlIGFuZCBtYW5pcHVsYXRlIGRhdGEuIiwiQ29udHJvbCBGbG93OiBNYXN0ZXIgY29uZGl0aW9uYWwgc3RhdGVtZW50cyBhbmQgbG9vcHMuIiwiT09QIEJhc2ljczogQ2xhc3Nlcywgb2JqZWN0cywgbWV0aG9kcywgYW5kIGluaGVyaXRhbmNlLiJdfQ==', NULL, '2024-11-09 14:15:40'),
(2, 'Hyper Text Markup Language', 'assets/img/HTML.png', 'eyJ0aXRsZSI6IkhUTUwgUHJldmlldyIsIm92ZXJ2aWV3IjoiVGhpcyBpcyBhIHByZXZpZXcgb2YgdGhlIEhUTUwgbW9kdWxlLiBZb3UnbGwgdW5kZXJzdGFuZCB0aGUgc3RydWN0dXJlIG9mIHdlYiBwYWdlcyBhbmQgZWxlbWVudHMuIiwibW9kdWxlcyI6WyJIVE1MIEJhc2ljcyIsIkZvcm1zIGFuZCBJbnB1dCBFbGVtZW50cyIsIlNlbWFudGljIEhUTUwiLCJIVE1MNSBGZWF0dXJlcyIsIkFjY2Vzc2liaWxpdHkgaW4gSFRNTCJdfQ==', NULL, '2024-11-09 14:15:40'),
(3, 'JavaScript', 'assets/img/Javascript.png', 'eyJ0aXRsZSI6IkphdmFTY3JpcHQgUHJldmlldyIsIm92ZXJ2aWV3IjoiVGhpcyBpcyBhIHByZXZpZXcgb2YgdGhlIEphdmFTY3JpcHQgbW9kdWxlLiBZb3UnbGwgZGl2ZSBpbnRvIGR5bmFtaWMgd2ViIGNvbnRlbnQgYW5kIHNjcmlwdGluZy4iLCJtb2R1bGVzIjpbIkphdmFTY3JpcHQgQmFzaWNzIiwiRE9NIE1hbmlwdWxhdGlvbiIsIkV2ZW50IEhhbmRsaW5nIiwiQXN5bmNocm9ub3VzIEphdmFTY3JpcHQiLCJKYXZhU2NyaXB0IEVTNiBGZWF0dXJlcyJdfQ==', NULL, '2024-11-09 14:20:31'),
(4, 'PHP: Hypertext Preprocessor', 'assets/img/php.png', 'eyJ0aXRsZSI6IlBIUCBQcmV2aWV3Iiwib3ZlcnZpZXciOiJUaGlzIGlzIGEgcHJldmlldyBvZiB0aGUgUEhQIG1vZHVsZS4gWW91J2xsIGV4cGxvcmUgc2VydmVyLXNpZGUgc2NyaXB0aW5nIGFuZCBkYXRhYmFzZSBpbnRlcmFjdGlvbnMuIiwibW9kdWxlcyI6WyJQSFAgQmFzaWNzIiwiRm9ybXMgYW5kIFVzZXIgSW5wdXQiLCJEYXRhYmFzZSBJbnRlcmFjdGlvbnMgd2l0aCBNeVNRTCIsIlNlc3Npb25zIGFuZCBDb29raWVzIiwiRXJyb3IgSGFuZGxpbmciXX0=', NULL, '2024-11-09 14:20:31'),
(5, 'Python', 'assets/img/Python.png', 'eyJ0aXRsZSI6IlB5dGhvbiBQcmV2aWV3Iiwib3ZlcnZpZXciOiJUaGlzIGlzIGEgcHJldmlldyBvZiB0aGUgUHl0aG9uIG1vZHVsZS4gWW91J2xsIGNvdmVyIHN5bnRheCwgZGF0YSB0eXBlcywgYW5kIG1vcmUuIiwibW9kdWxlcyI6WyJQeXRob24gQmFzaWNzIiwiRGF0YSBTdHJ1Y3R1cmVzIiwiRmlsZSBIYW5kbGluZyIsIk1vZHVsZXMgYW5kIFBhY2thZ2VzIiwiV2ViIERldmVsb3BtZW50IHdpdGggRmxhc2tcL0RqYW5nbyJdfQ==', NULL, '2024-11-09 14:20:31'),
(6, 'Structured Query Language', 'assets/img/mySql.png', 'eyJ0aXRsZSI6IlNRTCBQcmV2aWV3Iiwib3ZlcnZpZXciOiJUaGlzIGlzIGEgcHJldmlldyBvZiB0aGUgU1FMIG1vZHVsZS4gWW91J2xsIGxlYXJuIGFib3V0IHF1ZXJ5aW5nIGRhdGFiYXNlcyBhbmQgZGF0YSBtYW5pcHVsYXRpb24uIiwibW9kdWxlcyI6WyJJbnRyb2R1Y3Rpb24gdG8gU1FMIiwiSm9pbnMgYW5kIFVuaW9uczoiLCJBZ2dyZWdhdGUgRnVuY3Rpb25zIl19', NULL, '2024-11-09 14:20:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `library_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_library`
--

INSERT INTO `users_library` (`user_library_id`, `user_id`, `library_id`, `created_at`, `updated_at`) VALUES
(1, 17, 3, '2024-11-09 15:47:05', NULL),
(2, 17, 1, '2024-11-09 15:47:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_sessions`
--
ALTER TABLE `app_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=793;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
