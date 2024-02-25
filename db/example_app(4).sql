-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 08:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2023_09_20_095749_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 992),
(3, 'App\\Models\\User', 992),
(4, 'App\\Models\\User', 992),
(5, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 992),
(6, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 992),
(8, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 992),
(9, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 992),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 992),
(12, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 992),
(13, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 992),
(14, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 3),
(15, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 3),
(15, 'App\\Models\\User', 992),
(16, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 3),
(16, 'App\\Models\\User', 992),
(17, 'App\\Models\\User', 992),
(19, 'App\\Models\\User', 992),
(20, 'App\\Models\\User', 992),
(21, 'App\\Models\\User', 992),
(23, 'App\\Models\\User', 992),
(24, 'App\\Models\\User', 992),
(25, 'App\\Models\\User', 992),
(27, 'App\\Models\\User', 992),
(28, 'App\\Models\\User', 992),
(29, 'App\\Models\\User', 992),
(31, 'App\\Models\\User', 992),
(32, 'App\\Models\\User', 992),
(33, 'App\\Models\\User', 992),
(35, 'App\\Models\\User', 992),
(36, 'App\\Models\\User', 992),
(37, 'App\\Models\\User', 992),
(39, 'App\\Models\\User', 992),
(40, 'App\\Models\\User', 992),
(41, 'App\\Models\\User', 992),
(43, 'App\\Models\\User', 992),
(44, 'App\\Models\\User', 992),
(45, 'App\\Models\\User', 992),
(47, 'App\\Models\\User', 992),
(48, 'App\\Models\\User', 992),
(49, 'App\\Models\\User', 992),
(51, 'App\\Models\\User', 992),
(52, 'App\\Models\\User', 992),
(53, 'App\\Models\\User', 992),
(55, 'App\\Models\\User', 992),
(56, 'App\\Models\\User', 992),
(57, 'App\\Models\\User', 992),
(59, 'App\\Models\\User', 992),
(60, 'App\\Models\\User', 992),
(61, 'App\\Models\\User', 992),
(63, 'App\\Models\\User', 992),
(64, 'App\\Models\\User', 992),
(65, 'App\\Models\\User', 992),
(67, 'App\\Models\\User', 992),
(68, 'App\\Models\\User', 992),
(69, 'App\\Models\\User', 992),
(71, 'App\\Models\\User', 992),
(72, 'App\\Models\\User', 992),
(73, 'App\\Models\\User', 992),
(75, 'App\\Models\\User', 992),
(76, 'App\\Models\\User', 992),
(77, 'App\\Models\\User', 992),
(79, 'App\\Models\\User', 992),
(80, 'App\\Models\\User', 992),
(81, 'App\\Models\\User', 992),
(83, 'App\\Models\\User', 992),
(84, 'App\\Models\\User', 992),
(85, 'App\\Models\\User', 992),
(87, 'App\\Models\\User', 992),
(88, 'App\\Models\\User', 992),
(89, 'App\\Models\\User', 992),
(91, 'App\\Models\\User', 992),
(92, 'App\\Models\\User', 992),
(93, 'App\\Models\\User', 992),
(94, 'App\\Models\\User', 992),
(95, 'App\\Models\\User', 992),
(96, 'App\\Models\\User', 992),
(97, 'App\\Models\\User', 992),
(98, 'App\\Models\\User', 992),
(99, 'App\\Models\\User', 992),
(100, 'App\\Models\\User', 992),
(101, 'App\\Models\\User', 992),
(102, 'App\\Models\\User', 992),
(103, 'App\\Models\\User', 992),
(104, 'App\\Models\\User', 992),
(105, 'App\\Models\\User', 992),
(106, 'App\\Models\\User', 992),
(107, 'App\\Models\\User', 992),
(108, 'App\\Models\\User', 992),
(109, 'App\\Models\\User', 992),
(110, 'App\\Models\\User', 992),
(111, 'App\\Models\\User', 992),
(112, 'App\\Models\\User', 992),
(113, 'App\\Models\\User', 992),
(114, 'App\\Models\\User', 992),
(115, 'App\\Models\\User', 992),
(116, 'App\\Models\\User', 992),
(117, 'App\\Models\\User', 992),
(118, 'App\\Models\\User', 992),
(119, 'App\\Models\\User', 992),
(123, 'App\\Models\\User', 992),
(124, 'App\\Models\\User', 992),
(125, 'App\\Models\\User', 992),
(126, 'App\\Models\\User', 992),
(127, 'App\\Models\\User', 992),
(128, 'App\\Models\\User', 992),
(129, 'App\\Models\\User', 992),
(130, 'App\\Models\\User', 992),
(131, 'App\\Models\\User', 992),
(132, 'App\\Models\\User', 992),
(133, 'App\\Models\\User', 992),
(134, 'App\\Models\\User', 992),
(135, 'App\\Models\\User', 992),
(136, 'App\\Models\\User', 992),
(137, 'App\\Models\\User', 992),
(138, 'App\\Models\\User', 992),
(139, 'App\\Models\\User', 992),
(140, 'App\\Models\\User', 992),
(141, 'App\\Models\\User', 992),
(142, 'App\\Models\\User', 992),
(143, 'App\\Models\\User', 992),
(144, 'App\\Models\\User', 992),
(145, 'App\\Models\\User', 992),
(146, 'App\\Models\\User', 992),
(147, 'App\\Models\\User', 992),
(148, 'App\\Models\\User', 992),
(149, 'App\\Models\\User', 992),
(150, 'App\\Models\\User', 992),
(151, 'App\\Models\\User', 992),
(152, 'App\\Models\\User', 992),
(153, 'App\\Models\\User', 992),
(154, 'App\\Models\\User', 992),
(155, 'App\\Models\\User', 992),
(156, 'App\\Models\\User', 992),
(157, 'App\\Models\\User', 992),
(158, 'App\\Models\\User', 992),
(159, 'App\\Models\\User', 992),
(160, 'App\\Models\\User', 992),
(161, 'App\\Models\\User', 992),
(162, 'App\\Models\\User', 992),
(163, 'App\\Models\\User', 992),
(164, 'App\\Models\\User', 992),
(165, 'App\\Models\\User', 992),
(166, 'App\\Models\\User', 992),
(167, 'App\\Models\\User', 992),
(168, 'App\\Models\\User', 992),
(169, 'App\\Models\\User', 992),
(170, 'App\\Models\\User', 992),
(171, 'App\\Models\\User', 992),
(172, 'App\\Models\\User', 992),
(173, 'App\\Models\\User', 992),
(174, 'App\\Models\\User', 992),
(175, 'App\\Models\\User', 992),
(176, 'App\\Models\\User', 992),
(177, 'App\\Models\\User', 992),
(178, 'App\\Models\\User', 992),
(179, 'App\\Models\\User', 992),
(180, 'App\\Models\\User', 992),
(181, 'App\\Models\\User', 992),
(182, 'App\\Models\\User', 992),
(183, 'App\\Models\\User', 992),
(184, 'App\\Models\\User', 992),
(185, 'App\\Models\\User', 992),
(186, 'App\\Models\\User', 992),
(187, 'App\\Models\\User', 992),
(188, 'App\\Models\\User', 992),
(189, 'App\\Models\\User', 992),
(190, 'App\\Models\\User', 992),
(191, 'App\\Models\\User', 992),
(192, 'App\\Models\\User', 992),
(193, 'App\\Models\\User', 992),
(194, 'App\\Models\\User', 992),
(195, 'App\\Models\\User', 992),
(196, 'App\\Models\\User', 992),
(197, 'App\\Models\\User', 992),
(198, 'App\\Models\\User', 992),
(199, 'App\\Models\\User', 992),
(200, 'App\\Models\\User', 992),
(201, 'App\\Models\\User', 992),
(202, 'App\\Models\\User', 992),
(203, 'App\\Models\\User', 992),
(213, 'App\\Models\\User', 992),
(214, 'App\\Models\\User', 992),
(215, 'App\\Models\\User', 992),
(216, 'App\\Models\\User', 992),
(217, 'App\\Models\\User', 992),
(218, 'App\\Models\\User', 992),
(222, 'App\\Models\\User', 992),
(223, 'App\\Models\\User', 992),
(224, 'App\\Models\\User', 992),
(231, 'App\\Models\\User', 992),
(232, 'App\\Models\\User', 992),
(233, 'App\\Models\\User', 992),
(234, 'App\\Models\\User', 992),
(235, 'App\\Models\\User', 992),
(236, 'App\\Models\\User', 992),
(237, 'App\\Models\\User', 992),
(238, 'App\\Models\\User', 992),
(239, 'App\\Models\\User', 992),
(240, 'App\\Models\\User', 992),
(241, 'App\\Models\\User', 992),
(242, 'App\\Models\\User', 992),
(243, 'App\\Models\\User', 992),
(244, 'App\\Models\\User', 992),
(245, 'App\\Models\\User', 992),
(246, 'App\\Models\\User', 992),
(247, 'App\\Models\\User', 992),
(248, 'App\\Models\\User', 992),
(252, 'App\\Models\\User', 992),
(253, 'App\\Models\\User', 992),
(254, 'App\\Models\\User', 992);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit articles', 'web', '2023-09-22 21:38:03', '2023-09-22 21:38:03'),
(2, 'view user_management', 'web', '2023-09-22 22:18:33', '2023-09-22 22:18:33'),
(3, 'edit user_management', 'web', '2023-09-22 22:18:33', '2023-09-22 22:18:33'),
(4, 'delete user_management', 'web', '2023-09-22 22:18:33', '2023-09-22 22:18:33'),
(5, 'view category', 'web', '2023-09-23 02:14:32', '2023-09-23 02:14:32'),
(6, 'edit category', 'web', '2023-09-23 02:14:32', '2023-09-23 02:14:32'),
(7, 'delete category', 'web', '2023-09-23 02:14:32', '2023-09-23 02:14:32'),
(8, 'view sub_category', 'web', '2023-09-23 02:14:37', '2023-09-23 02:14:37'),
(9, 'edit sub_category', 'web', '2023-09-23 02:14:37', '2023-09-23 02:14:37'),
(10, 'delete sub_category', 'web', '2023-09-23 02:14:37', '2023-09-23 02:14:37'),
(11, 'view brand', 'web', '2023-09-23 02:14:41', '2023-09-23 02:14:41'),
(12, 'edit brand', 'web', '2023-09-23 02:14:41', '2023-09-23 02:14:41'),
(13, 'delete brand', 'web', '2023-09-23 02:14:41', '2023-09-23 02:14:41'),
(14, 'view service_name', 'web', '2023-11-28 23:23:25', '2023-11-28 23:23:25'),
(15, 'edit service_name', 'web', '2023-11-28 23:23:26', '2023-11-28 23:23:26'),
(16, 'delete service_name', 'web', '2023-11-28 23:23:26', '2023-11-28 23:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `permission_categories`
--

CREATE TABLE `permission_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local` timestamp NULL DEFAULT NULL,
  `online` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_categories`
--

INSERT INTO `permission_categories` (`id`, `title`, `name`, `type`, `status`, `local`, `online`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'User Management', 'user_management', 'setting', 'Active', NULL, NULL, NULL, '2023-09-22 22:18:33', '2023-09-22 22:18:33'),
(2, 'Category', 'category', 'products', 'Active', NULL, NULL, NULL, '2023-09-23 02:14:31', '2023-09-23 02:14:31'),
(3, 'Sub Category', 'sub_category', 'products', 'Active', NULL, NULL, NULL, '2023-09-23 02:14:37', '2023-09-23 02:14:37'),
(4, 'Brand', 'brand', 'products', 'Active', NULL, NULL, NULL, '2023-09-23 02:14:41', '2023-09-23 02:14:41'),
(5, 'Service Name', 'service_name', 'products', 'Active', NULL, NULL, NULL, '2023-11-28 23:23:25', '2023-11-28 23:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(2, 'admin', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(3, 'user', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(4, 'agent', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(5, 'support', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(6, 'member', 'web', '2020-03-12 14:19:59', '2020-03-12 14:19:59'),
(7, 'Employee', 'web', '2023-09-09 11:52:30', '2023-09-09 11:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('I5IHyDM2h6psFA4rH1bth71WbCV5DjwysLNWentO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGMxYTE3ZnR1elk0eFdIMnBhRXByT2JDUGdpOVZZSnlJbDdsRzNTVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1698552730);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Avijit\'s Team', 1, '2023-09-21 02:34:04', '2023-09-21 02:34:04'),
(2, 2, 'Admin\'s Team', 1, '2023-09-23 00:08:01', '2023-09-23 00:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Avijit Ghosh', 'avijit@gmail.com', NULL, '$2y$10$ljW8camDgCV1DmWAFGM/KOs9BicyqFDi04pSBXk0O3bhSUd8OLzFG', NULL, NULL, NULL, 'yaFyzGVGLRMOrvdujAboxDOvriIRUdQaxQJ0aPIR0j6CfHNHNIO8DlEeUB9F', 1, NULL, '2023-09-21 02:34:03', '2024-01-18 12:58:25', NULL),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$xAKfG4nGD0u5D8T2dRP5Iu6PHzw.t8sxjY9CBF3vYbGQuXO1L/Ioq', NULL, NULL, NULL, NULL, 2, NULL, '2023-09-23 00:08:01', '2023-09-23 00:08:01', NULL),
(3, 'Tusher', 'tusher@gmail.com', NULL, '$2y$10$rOqV0AhZDc5N4cR9w6e.0eycTI5ABJb2iBQXyoL.9/ha.7TEevm8m', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-28 22:33:24', '2023-11-28 22:33:24', NULL),
(4, 'Pranto', 'pranto@gmail.com', NULL, '$2y$10$PP7jT6SDAQNq06kvH6LgPuJVtkoIKjA.IcOKyIoWPnjOdLS8CDrX.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 10:58:10', '2024-01-18 10:58:10', NULL),
(5, 'MR. KHONDOKER MONIR UDDIN', 'admin@aa.com', NULL, '$2y$10$Gc9oJNgydyeawDazXCxxSOgV5uLWvcasNgLv0/vHiCYFcUz6AFHfC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:01:17', '2024-01-18 12:49:07', '2024-01-18 12:49:07'),
(7, 'Samsung A74', 'admin@abf.com', NULL, '$2y$10$p1u6fxpgOO/D98C4AvuoTuKcmiUAUp9SbJDIKiUwQwFFWz3BXaXFK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:03:26', '2024-01-18 12:49:19', '2024-01-18 12:49:19'),
(8, 'aa', 'aa@aa.aa', NULL, '$2y$10$LBK9mA1ezlcIaX61S3daAuR1wmcSHUV1wdRuaW9tm5eB1/5mYIWeq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:04:08', '2024-01-18 12:49:00', '2024-01-18 12:49:00'),
(9, 'bb', 'bb@bb.bb', NULL, '$2y$10$Sv39NZWdmEslxBGTcu09tenXFv6UkZUaGGereJaPSczCL7eAuMoS.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:42:50', '2024-01-18 12:49:14', '2024-01-18 12:49:14'),
(11, 'cc', 'cc@cc.cc', NULL, '$2y$10$q68FG0FfJaDlq6DlJBqURO7VipvBQQNpOuCyef60CaNEpt0JHw.lK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:43:11', '2024-01-18 12:48:12', '2024-01-18 12:48:12'),
(12, 'Sajib', 'sajib@gmail.com', NULL, '$2y$10$t36aoNLnkbuac7890AqfvusA9Utv7GUjYquC3Bbbx3N9x1.qq6ANe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:43:43', '2024-01-18 11:43:43', NULL),
(13, 'asdfad', 'asdf@dfs.sdfsd', NULL, '$2y$10$Lt4yJIY9GXb57oFwPrJh8eP/EgsVPvSaq7ylKensO9.gvYq1iWMMi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:43:56', '2024-01-18 12:46:22', '2024-01-18 12:46:22'),
(14, 'asdfasdf', 'asdrewr@sdf.sdf', NULL, '$2y$10$ARWosIiEMTTKfH/QPv50ReLDxCMq.TRt3239T4fyr/.No5hC5tCga', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:54:30', '2024-01-18 12:45:53', '2024-01-18 12:45:53'),
(15, 'asdfasd@ewrew', 'asdfa@weqw.drtwer', NULL, '$2y$10$wowrJXlNIh0DZ45Nv3RgzevJmIRpJ200/Sl8mqnI7a/V9ZGjLrCDW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:55:36', '2024-01-18 12:44:57', '2024-01-18 12:44:57'),
(16, 'aaa', 'jljljk@jkjk.se', NULL, '$2y$10$y4QTb3VJWSLCGZiGsOjpRuBYy7ffmnN4Y48VkWevydULhoi8BEJ2i', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 11:56:03', '2024-01-18 12:42:18', '2024-01-18 12:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_has_permissions`
--

INSERT INTO `user_has_permissions` (`permission_id`, `model_type`, `user_id`) VALUES
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_categories`
--
ALTER TABLE `permission_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`user_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`user_id`,`model_type`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`user_id`,`model_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permission_categories`
--
ALTER TABLE `permission_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
