-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 04:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-job-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_position`, `location`, `company`, `description`, `salary`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Software Engineer', 'New York, NY', 'Tech Solutions Inc.', 'Develop and maintain web applications.', '85000', NULL, NULL, 1),
(2, 'Project Manager', 'San Francisco, CA', 'Innovative Projects LLC', 'Oversee project timelines and deliverables.', '95000', NULL, NULL, 2),
(3, 'Data Analyst', 'Chicago, IL', 'Data Insights Co.', 'Analyze data trends and provide insights.', '70000', NULL, NULL, 1),
(4, 'UX Designer', 'Austin, TX', 'Creative Designs Ltd.', 'Design user-friendly interfaces.', '75000', NULL, NULL, 1),
(5, 'Marketing Specialist', 'Los Angeles, CA', 'Market Masters Inc.', 'Create and implement marketing strategies.', '68000', NULL, NULL, 2),
(6, 'HR Manager', 'Seattle, WA', 'People First Corp.', 'Manage recruitment and employee relations.', '80000', NULL, NULL, 1),
(7, 'Sales Representative', 'Miami, FL', 'Sales Unlimited LLC', 'Drive sales and build client relationships.', '60000', NULL, NULL, 1),
(8, 'Accountant', 'Denver, CO', 'Finance Experts Co.', 'Handle financial records and reports.', '72000', NULL, NULL, 2),
(9, 'Customer Support Specialist', 'Boston, MA', 'Support Hub Inc.', 'Assist customers with inquiries and issues.', '54000', NULL, NULL, 2),
(10, 'Network Engineer', 'Houston, TX', 'NetTech Solutions', 'Maintain and troubleshoot network infrastructure.', '82000', NULL, NULL, 1),
(13, 'DevOps', 'Belgrade', 'MojaKompanija', 'Lorem, ipsum dolor sit amet csagahaonsectetur adipisicing elit. Reprehenderit, at nulla assumenda aliquam sit alias modi voluptates suscipit temporibus voluptas perspiciatis in ipsam quas praesentium veniam eos inventore non consectetur possimus. Beatae inventore tempore officiis culpa dolor, quaerat doloremque ab illo est adipisci impedit incidunt ipsam fugiat qui aliquid deserun', '6516116', '2025-02-13 11:46:28', '2025-02-13 11:46:28', 2),
(14, 'FrontendDev', 'Novi Sad', 'NSCompany', 'We are looking for expirienced FrontEnd developer with at least 2yr of expirience in React and Next.js', '50000', '2025-02-13 14:44:24', '2025-02-13 14:44:24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Rvp4eZOqDN2caEEt1lzCsfdv2fvfSXmL0gZDTj80', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1laWlRUMnVRYW5uaVM1aVFjMDBlRUxqbVhnVzNRNjllODJMajV5ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1739461624);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$qQn68866ArhWoJjVMoFU/OtFqCue0OXG0KRmLgkp.MTunnAiT.IvG', NULL, '2025-02-13 10:18:46', '2025-02-13 10:18:46'),
(2, 'Milan', 'milan@gmail.com', NULL, '$2y$12$HlvxR2PZc.sW4tC/cMATK.9SlHLKwFTFOKrt/2/57gURCCPnJ3LWu', NULL, '2025-02-13 10:21:53', '2025-02-13 10:21:53'),
(3, 'Milan123', 'milanmikig@gmail.com', NULL, '$2y$12$2UrmJq7b10oII5Ip.ZpOMeNQVHfAN6AxeXLl8/Y0qsiwyF5ONdOZO', NULL, '2025-02-13 14:42:44', '2025-02-13 14:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
