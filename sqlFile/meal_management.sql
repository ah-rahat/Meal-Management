-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 03:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_costs`
--

CREATE TABLE `daily_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daily_cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_costs`
--

INSERT INTO `daily_costs` (`id`, `daily_cost`, `created_at`, `updated_at`) VALUES
(6, 250, '2020-09-12 19:44:38', NULL),
(7, 250, '2020-09-12 19:44:43', NULL),
(8, 350, '2020-09-12 19:44:49', NULL),
(9, 450, '2020-09-12 19:44:53', NULL),
(10, 630, '2020-09-12 19:44:59', NULL),
(11, 250, '2020-10-17 17:14:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_des`
--

CREATE TABLE `member_des` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `daily_meal` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_des`
--

INSERT INTO `member_des` (`id`, `member_id`, `daily_meal`, `deposit`, `created_at`, `updated_at`) VALUES
(35, 8, 2, 500, '2020-09-12 19:41:04', NULL),
(36, 8, 2, 0, '2020-09-12 19:41:38', NULL),
(37, 8, 2, 0, '2020-09-12 19:41:42', NULL),
(38, 8, 2, 0, '2020-09-12 19:41:45', NULL),
(39, 8, 2, 0, '2020-09-12 19:41:49', NULL),
(40, 9, 2, 0, '2020-09-12 19:42:01', NULL),
(41, 9, 2, 500, '2020-09-12 19:42:09', NULL),
(42, 9, 2, 0, '2020-09-12 19:42:13', NULL),
(43, 9, 2, 0, '2020-09-12 19:42:16', NULL),
(44, 9, 2, 0, '2020-09-12 19:42:19', NULL),
(45, 9, 2, 0, '2020-09-12 19:42:22', NULL),
(46, 9, 2, 0, '2020-09-12 19:42:25', NULL),
(47, 9, 2, 0, '2020-09-12 19:42:28', NULL),
(48, 9, 2, 0, '2020-09-12 19:42:31', NULL),
(49, 10, 2, 0, '2020-09-12 19:42:41', NULL),
(50, 10, 3, 0, '2020-09-12 19:42:45', NULL),
(51, 10, 3, 0, '2020-09-12 19:42:49', NULL),
(52, 10, 3, 0, '2020-09-12 19:42:55', NULL),
(53, 10, 3, 0, '2020-09-12 19:42:58', NULL),
(54, 10, 3, 0, '2020-09-12 19:43:02', NULL),
(55, 10, 2, 500, '2020-09-12 19:43:10', NULL),
(56, 11, 4, 0, '2020-09-12 19:43:20', NULL),
(57, 11, 2, 0, '2020-09-12 19:43:24', NULL),
(58, 11, 4, 0, '2020-09-12 19:43:28', NULL),
(59, 11, 3, 0, '2020-09-12 19:43:32', NULL),
(60, 11, 2, 0, '2020-09-12 19:43:37', NULL),
(61, 11, 2, 500, '2020-09-12 19:43:42', NULL),
(62, 12, 2, 500, '2020-09-12 19:43:55', NULL),
(63, 12, 3, 0, '2020-09-12 19:44:00', NULL),
(64, 12, 3, 0, '2020-09-12 19:44:05', NULL),
(65, 12, 2, 0, '2020-09-12 19:44:08', NULL),
(66, 12, 3, 0, '2020-09-12 19:44:11', NULL),
(67, 12, 2, 0, '2020-09-12 19:44:13', NULL),
(68, 8, 2, 0, '2020-09-12 20:04:23', NULL),
(69, 9, 2, 0, '2020-09-12 20:04:32', NULL),
(70, 10, 2, 0, '2020-09-12 20:04:38', NULL),
(71, 11, 2, 0, '2020-09-12 20:04:50', NULL),
(72, 12, 2, 0, '2020-09-12 20:04:59', NULL),
(73, 13, 2, 0, '2020-09-12 20:05:33', NULL),
(74, 14, 2, 0, '2020-10-17 17:12:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2020_09_05_204704_create_member_des_table', 2),
(7, '2020_09_05_180127_create_room_members_table', 3),
(8, '2020_09_12_174806_create_daily_costs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_members`
--

CREATE TABLE `room_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_Age` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_members`
--

INSERT INTO `room_members` (`id`, `member_name`, `member_Age`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Asikul Hoque', 21, '2020-09-12 19:39:25', NULL, NULL),
(9, 'Muntacer muttqi', 21, '2020-09-12 19:39:31', NULL, NULL),
(10, 'Abdur Rahim jony', 21, '2020-09-12 19:39:36', NULL, NULL),
(11, 'Shariful Islam', 21, '2020-09-12 19:39:44', NULL, NULL),
(12, 'Iqbal Ahmed', 21, '2020-09-12 19:40:03', NULL, NULL),
(13, 'Sharif Khan millon', 21, '2020-09-12 19:40:16', NULL, NULL),
(14, 'demo', 21, '2020-10-17 17:11:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manager', 'manager@gmail.com', NULL, '$2y$10$WcGkcZG6c4jqGpg57sVwSu./zoNcqQoXhmamDVTUYbWk0g56bLV2m', NULL, '2020-09-05 11:26:29', '2020-09-05 11:26:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_costs`
--
ALTER TABLE `daily_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_des`
--
ALTER TABLE `member_des`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `room_members`
--
ALTER TABLE `room_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_costs`
--
ALTER TABLE `daily_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member_des`
--
ALTER TABLE `member_des`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_members`
--
ALTER TABLE `room_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
