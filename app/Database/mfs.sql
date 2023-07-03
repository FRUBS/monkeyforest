-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 01:28 AM
-- Server version: 10.4.24-MariaDB-log
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'Regular User'),
(3, 'guest', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 10),
(2, 14),
(2, 15),
(2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'yogaraharja', 1, '2023-06-01 09:33:22', 0),
(2, '::1', 'jayak', 11, '2023-06-07 05:48:14', 0),
(3, '::1', 'jayak@gmail.com', 15, '2023-06-07 06:24:01', 1),
(4, '::1', 'admin', NULL, '2023-06-07 09:58:16', 0),
(5, '::1', 'admin', NULL, '2023-06-07 09:58:26', 0),
(6, '::1', 'admin', NULL, '2023-06-07 09:58:53', 0),
(7, '::1', 'admin@gmail.com', 16, '2023-06-07 10:00:51', 1),
(8, '::1', 'admin@gmail.com', 16, '2023-06-07 10:50:11', 1),
(9, '::1', 'admin@gmail.com', 1, '2023-06-07 10:57:10', 1),
(10, '::1', 'gedekaton@gmail.com', 14, '2023-06-07 11:02:29', 1),
(11, '::1', 'admin@gmail.com', 1, '2023-06-08 09:21:06', 1),
(12, '::1', 'admin@gmail.com', 1, '2023-06-08 09:28:28', 1),
(13, '::1', 'admin@gmail.com', 1, '2023-06-08 09:46:32', 1),
(14, '::1', 'admin@gmail.com', 1, '2023-06-08 10:07:14', 1),
(15, '::1', 'yogaraharja', 10, '2023-06-08 14:56:00', 0),
(16, '::1', 'admin@gmail.com', 1, '2023-06-08 14:56:05', 1),
(17, '::1', 'gedekaton@gmail.com', 14, '2023-06-08 14:56:18', 1),
(18, '::1', 'yogaraharja', 10, '2023-06-08 14:56:30', 0),
(19, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 14:57:12', 1),
(20, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 15:02:17', 1),
(21, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 15:16:31', 1),
(22, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 15:17:08', 1),
(23, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 15:17:42', 1),
(24, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 15:20:43', 1),
(25, '::1', 'admin@gmail.com', 1, '2023-06-08 15:33:14', 1),
(26, '::1', 'admin@gmail.com', 1, '2023-06-08 23:00:26', 1),
(27, '::1', 'admin@gmail.com', 1, '2023-06-08 23:02:47', 1),
(28, '::1', 'admin@gmail.com', 1, '2023-06-08 23:23:51', 1),
(29, '::1', 'admin@gmail.com', 1, '2023-06-08 23:26:28', 1),
(30, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 23:26:40', 1),
(31, '::1', 'admin@gmail.com', 1, '2023-06-08 23:30:20', 1),
(32, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-08 23:34:31', 1),
(33, '::1', 'admin@gmail.com', 1, '2023-06-09 00:56:12', 1),
(34, '::1', 'admin@gmail.com', 1, '2023-06-09 01:02:06', 1),
(35, '::1', 'sepia', NULL, '2023-06-09 02:13:38', 0),
(36, '::1', 'ayudewitunjuk13@gmail.com', 18, '2023-06-09 02:14:00', 1),
(37, '::1', 'admin@gmail.com', 1, '2023-06-09 02:17:27', 1),
(38, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-09 02:41:28', 1),
(39, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-09 02:47:59', 1),
(40, '::1', 'admin@gmail.com', 1, '2023-06-09 03:00:02', 1),
(41, '::1', 'admin@gmail.com', 1, '2023-06-09 08:44:30', 1),
(42, '::1', 'admin@gmail.com', 1, '2023-06-15 01:03:13', 1),
(43, '::1', 'admin@gmail.com', 1, '2023-06-15 01:09:33', 1),
(44, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:23:22', 1),
(45, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:27:46', 1),
(46, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:30:41', 1),
(47, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:35:17', 1),
(48, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:39:53', 1),
(49, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:42:15', 1),
(50, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:43:44', 1),
(51, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:45:15', 1),
(52, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:47:43', 1),
(53, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:50:26', 1),
(54, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:52:15', 1),
(55, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:53:24', 1),
(56, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:53:42', 1),
(57, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:54:32', 1),
(58, '::1', 'yogaraharja', NULL, '2023-06-15 01:55:02', 0),
(59, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:55:21', 1),
(60, '::1', 'yogaraharja', NULL, '2023-06-15 01:55:43', 0),
(61, '::1', 'admin', NULL, '2023-06-15 01:55:52', 0),
(62, '::1', 'admin@gmail.com', 1, '2023-06-15 01:56:01', 1),
(63, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 01:59:15', 1),
(64, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:01:04', 1),
(65, '::1', 'yogaraharja', NULL, '2023-06-15 02:02:14', 0),
(66, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:02:30', 1),
(67, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:02:40', 1),
(68, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:02:50', 1),
(69, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:03:12', 1),
(70, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:05:07', 1),
(71, '::1', 'yogaraharja2007@gmail.com', 10, '2023-06-15 02:05:19', 1),
(72, '::1', 'admin@gmail.com', 1, '2023-06-15 02:07:49', 1),
(73, '::1', 'admin@gmail.com', 1, '2023-06-15 02:54:11', 1),
(74, '::1', 'admin@gmail.com', 1, '2023-06-15 02:54:25', 1),
(75, '::1', 'abcabc@gmail.com', 19, '2023-06-15 02:56:02', 1),
(76, '::1', 'admin@gmail.com', 1, '2023-06-15 02:56:10', 1),
(77, '::1', 'admin@gmail.com', 1, '2023-06-15 05:09:55', 1),
(78, '::1', 'admin@gmail.com', 1, '2023-06-28 04:00:37', 1),
(79, '::1', 'admin@gmail.com', 1, '2023-06-28 04:28:57', 1),
(80, '::1', 'admin@gmail.com', 1, '2023-06-28 08:53:49', 1),
(81, '::1', 'admin@gmail.com', 1, '2023-06-29 02:30:12', 1),
(82, '::1', 'admin@gmail.com', 1, '2023-06-29 06:36:10', 1),
(83, '::1', 'admin@gmail.com', 1, '2023-06-29 06:43:36', 1),
(84, '::1', 'admin@gmail.com', 1, '2023-06-29 06:44:18', 1),
(85, '::1', 'admin@gmail.com', 1, '2023-07-03 05:40:28', 1),
(86, '::1', 'admin@gmail.com', 1, '2023-07-03 06:52:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Hanya Admin yang boleh manage users'),
(2, 'manage-profile', 'Admin & User bisa');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galerybm`
--

CREATE TABLE `galerybm` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('All','Landscape','Portrait','') NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('All','Landscape','Portrait','') NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `sampul`, `judul`, `slug`, `kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(10, 'DSC1.jpg', 'DSC 2580', 'dsc-2580', 'Landscape', 'This is a photo', NULL, NULL),
(17, '3ac683c63a8a791f1bf0dd138bd9_1.jpeg', 'Hello world!', 'hello-world', 'Portrait', 'say hello!', '2023-06-15 17:59:45', '2023-06-15 17:59:45'),
(20, '1500x500.jpeg', 'p', 'p', 'Portrait', 'p', '2023-07-03 05:47:52', '2023-07-03 05:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `gallerytg`
--

CREATE TABLE `gallerytg` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('All','Landscape','Portrait','') NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galleryubud`
--

CREATE TABLE `galleryubud` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('All','Landscape','Portrait','') NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1685611138, 1);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `namatempat` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile_mf`
--

CREATE TABLE `profile_mf` (
  `id` int(11) NOT NULL,
  `welcome_header` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_image` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_image`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'default.jpg', 'admin@gmail.com', 'admin', '$2y$10$tbr3veq4CGA3f0Mi18sImuCdpVnP82HzQIUkPt1waya0EHc1NziHe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-07 10:56:24', '2023-06-07 10:56:24', NULL),
(10, '', 'yogaraharja2007@gmail.com', 'yogaraharja', '$2y$10$t0q8zgrC5hdickdxkhiQUe1RLtYHxD/XWOh3EKLha9xLj9lXThMIC', NULL, NULL, NULL, '', NULL, NULL, 1, 0, '2023-06-07 05:40:27', '2023-06-07 05:40:27', NULL),
(14, '', 'gedekaton@gmail.com', 'katonjaya', '$2y$10$vd2uPsDPM6IBzoKKx/w81ebDRK33Cn8I0oRd1/vkW9vbmruNQElbm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-07 06:07:09', '2023-06-07 06:07:09', NULL),
(15, '', 'jayak@gmail.com', 'jayak', '$2y$10$kS9atSNjRmujwUrvWgW/8.G6avRWqUyvd6Y8GFhcjS7dmPgTiELF6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-07 06:20:59', '2023-06-07 06:20:59', NULL),
(18, '', 'ayudewitunjuk13@gmail.com', 'sepia', '$2y$10$953S3UwXSWKy.IAAZ2CyD.9RAOob1lCCojjtuxr/Ovn6FN/qf6SDa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-09 02:13:08', '2023-06-09 02:13:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerybm`
--
ALTER TABLE `galerybm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerytg`
--
ALTER TABLE `gallerytg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryubud`
--
ALTER TABLE `galleryubud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_mf`
--
ALTER TABLE `profile_mf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galerybm`
--
ALTER TABLE `galerybm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallerytg`
--
ALTER TABLE `gallerytg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleryubud`
--
ALTER TABLE `galleryubud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_mf`
--
ALTER TABLE `profile_mf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
