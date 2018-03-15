-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showtimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_202126_create_movies_table', 1),
(4, '2018_03_15_173320_create_theaters_table', 2),
(5, '2018_03_15_192223_create_shows_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tailer_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cast`, `dir`, `release`, `hour`, `minut`, `language`, `tailer_link`, `poster`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Balck Panther', 'Chadwick Boseman, Michael B. Jordan, Lupita Nyong\'o', 'Ryan Coogler', '2018-03-10', '2', '10', 'English', 'https://www.youtube.com/embed/xjDjIWPwcPU', '1521093290.jpg', 'Now', '2018-03-15 00:24:50', '2018-03-15 02:47:11'),
(4, 'Rampage', 'Dwayne Johnson, Jeffrey Dean Morgan', 'Brad Peyton', '2018-03-11', '2', '10', 'English', 'https://www.youtube.com/embed/coOKvrsmQiI', '1521093390.jpeg', 'Now', '2018-03-15 00:26:30', '2018-03-15 00:26:30'),
(8, 'Sonu Ke Titu Ki Sweety', 'Kartik Aaryan, Nushrat Bharucha, Sunny Singh Nijjar', 'Luv Ranjan', '2018-03-02', '2', '3', 'Hindi', 'https://www.youtube.com/embed/M2q64UowX9g', '1521146330.jpg', 'Now', '2018-03-15 15:08:50', '2018-03-15 15:08:50'),
(9, 'Raid', 'Ajay Devgn, Saurabh Shukla, Ileana D\'Cruz', 'Raj Kumar Gupta', '2018-03-14', '2', '10', 'Hindi', 'https://www.youtube.com/embed/3h4thS-Hcrk', '1521146409.jpg', 'Now', '2018-03-15 15:10:09', '2018-03-15 15:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showtime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `movie`, `showtime`, `theater`, `created_at`, `updated_at`) VALUES
(1, 'Balck Panther', '02:30 PM', 'PVR', '2018-03-15 14:28:09', '2018-03-15 14:58:45'),
(2, 'Sonu Ke Titu Ki Sweety', '10:30 AM', 'PVR', '2018-03-15 14:30:50', '2018-03-15 14:30:50'),
(4, 'Raid', '02:30 PM', 'Raj Hansh', '2018-03-15 14:39:41', '2018-03-15 14:39:41'),
(6, 'Rampage', '10:30 AM', 'PVR', '2018-03-15 17:08:21', '2018-03-15 17:08:21'),
(7, 'Balck Panther', '10:30 AM', 'Raj Hansh', '2018-03-15 17:35:08', '2018-03-15 17:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `location`, `owner`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Raj Hansh', 'Nikol', 'piyush', '9876543210', '2018-03-15 12:17:46', '2018-03-15 12:47:15'),
(3, 'PVR', 'iscon', 'suresh', '9865321245', '2018-03-15 14:29:19', '2018-03-15 14:29:19'),
(4, 'Cinepolis', 'Vastrapur', 'raj', '2356984512', '2018-03-15 14:30:22', '2018-03-15 14:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'piyush', 'piyush@gmail.com', '$2y$10$P8AW/xE3Bav75N.BqRLccupgjtdwIFQvnLszdnyZ2PTB8MAvPpj4W', '9724963534', 'fzFyTLRfpIUQdNelI15VBvwKfUDoZbCHorueVkgYhpFu3UNyIgXJl1vWnIlH', '2018-03-15 04:04:01', '2018-03-15 04:04:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
