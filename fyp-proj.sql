-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp-proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_planners` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `pet_friendly` tinyint(1) NOT NULL,
  `catering_service` tinyint(1) NOT NULL,
  `car_rentals` tinyint(1) NOT NULL,
  `accommodations` tinyint(1) NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Venues', '1579774564.jpg', '2020-01-23 05:16:04', '2020-01-23 05:16:04'),
(2, 'Catering', '1579774582.jpg', '2020-01-23 05:16:22', '2020-01-23 05:16:22'),
(3, 'Photography', '1579774614.jpg', '2020-01-23 05:16:54', '2020-01-23 05:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Lahore', '2020-01-23 05:14:50', '2020-01-23 05:14:50', '1579774490.jpg'),
(2, 'karachi', '2020-01-23 05:15:04', '2020-01-23 05:15:04', '1579774504.jpg'),
(3, 'Islamabad', '2020-01-23 05:15:19', '2020-01-23 05:15:19', '1579774519.jpg'),
(4, 'Peshawar', '2020-01-23 05:15:37', '2020-01-23 05:15:37', '1579774537.jpg'),
(5, 'Multan', '2020-01-23 11:36:51', '2020-01-23 11:36:51', '1579797411.jpg');

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
(1, '2019_09_04_083733_create_cities_table', 1),
(2, '2019_09_09_080845_create_categories_table', 1),
(3, '2019_09_20_133624_vendors_table', 1),
(4, '2019_12_22_120011_services_table', 1),
(5, '2020_01_07_070255_create_users_table', 1),
(6, '2020_01_20_172749_create_blogs_table', 1),
(7, '2020_01_23_004741_create_amenities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `latitude`, `longitude`, `gallery_image`, `cover_image`, `publish`, `created_at`, `updated_at`, `category_id`, `city_id`, `vendor_id`) VALUES
(1, 'Investor Functionality', 'njkcd cdjs cdnjs cjkdns cdnjncd cdjnk cdjsk asdkaskj', '31.52036960000001', '74.35874729999999', '[\"01579774682.jpg\",\"11579774682.jpg\",\"21579774682.jpg\",\"31579774682.jpg\"]', '1579774682.jpg', 1, '2020-01-23 05:18:02', '2020-01-23 05:18:02', 1, 3, 2),
(2, 'bhbh', 'jknds cdnpi sakm cdsklj asmcvnmd cjndn askl cdn', '31.52036960000001', '74.35874729999999', '[\"01579774757.jpg\",\"11579774757.jpg\",\"21579774757.jpg\",\"31579774757.jpg\"]', '1579774757.jpg', 1, '2020-01-23 05:19:17', '2020-01-23 05:19:17', 2, 3, 2),
(3, 'top tigers', 'nfvsk ckd askcmk cdmpo asck cjsdio kcdjio asckdpj cdnmlk casn csdko asckoji ckdl cak cdnki', '33.6844202', '73.04788479999999', '[\"01579775013.jpg\",\"11579775013.jpg\",\"21579775013.jpg\",\"31579775013.jpg\"]', '1579775013.jpg', 1, '2020-01-23 05:23:33', '2020-01-23 05:23:33', 2, 3, 5),
(4, 'Dejah Photography', 'ncjds cduosi cdni cdjn asciojcs', '31.52036960000001', '74.35874729999999', '[\"01579775105.jpg\",\"11579775105.jpg\",\"21579775105.jpg\",\"31579775105.jpg\"]', '1579775105.jpg', 1, '2020-01-23 05:25:05', '2020-01-23 05:25:05', 3, 2, 4),
(5, 'djnsj', 'ncjds cjdns cdjk cksdno dcjc cdnsoj cdjns cnsdj cdsk sauiocjdnsu can cjduo cdjn', '31.52036960000001', '74.35874729999999', '[\"01579775177.jpg\",\"11579775177.jpg\",\"21579775177.jpg\"]', '1579775177.jpg', 1, '2020-01-23 05:26:17', '2020-01-23 05:26:17', 2, 2, 3),
(6, 'vendor catering', 'csdi cusho asuoc cdo cmic caso cdsioj canocsdi cusho asuoc cdo cmic caso cdsioj canocsdi cusho asuoc cdo cmic caso cdsioj canocsdi cusho asuoc cdo cmic caso cdsioj canocsdi cusho asuoc cdo cmic caso cdsioj cano', '33.6844202', '73.04788479999999', '[\"01579775276.jpg\",\"11579775276.jpg\",\"21579775276.jpg\",\"31579775276.jpg\"]', '1579775276.jpg', 1, '2020-01-23 05:27:56', '2020-01-23 05:27:56', 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `role`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Admin1', 1, NULL, '$2y$10$QkgHKbUWjeVkz.KQ01Wg/us3FT.vXe5svrSFISEIBD1cmxCHs3sry', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'vendor', 2, 'tdh06720@zzrgg.com', '$2y$10$evNSCd90PG3XwuY9HYdYj.R1imjuQ8FkHQBHoWC1w26Gbc9q/kmwS', '1579774083.jpg', NULL, '2020-01-23 05:08:04', '2020-01-23 05:08:04'),
(4, NULL, NULL, 'Greta3', 2, 'faker67233@gmail.com', '$2y$10$wAt9R4My7Cbp6kDX.P3Rke/9iJBXILY1pJA4sNcO/GmKpPQ0adCKi', '1579774315.jpg', NULL, '2020-01-23 05:11:55', '2020-01-23 05:11:55'),
(5, NULL, NULL, 'Dejah.Greenholt32', 2, 'faker33107@gmail.com', '$2y$10$TRg.vuFElcDJYXPHTLvS4Or5HM4CV7ao1prnRQGk0PYgWoBk5.RDK', '1579774363.jpg', NULL, '2020-01-23 05:12:43', '2020-01-23 05:12:43'),
(6, NULL, NULL, 'Tess_Kirlin', 2, 'faker37775@gmail.com', '$2y$10$nJLoK.y2u2ajyFdJMO5IluG1iZUxB3rrLgbRrloOOaVTM.puST.mq', '1579774407.jpeg', NULL, '2020-01-23 05:13:27', '2020-01-23 05:13:27'),
(7, NULL, NULL, 'Rico.Fadel', 2, 'faker25816@gmail.com', '$2y$10$Kgb4ny/AH/MldofpzLJGKurQbDXMYMR3S9/JOW/37mNw.XSSDygVK', '1579774448.jpg', NULL, '2020-01-23 05:14:09', '2020-01-23 05:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `user_id`, `country_code`, `company_code`, `phone_number`, `description`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'vnic oo', 3, '+92', '324', '5512345', 'This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description.', '2020-01-23 05:08:04', '2020-01-23 05:08:04', NULL),
(3, 'Verdie Maggio', 4, '+92', '300', '5079875', 'Quod laborum aspernatur exercitationem dolores rerum quo aut et.', '2020-01-23 05:11:55', '2020-01-23 05:11:55', NULL),
(4, 'Cordell Ledner', 5, '+92', '302', '4605643', 'Rerum nisi sapiente in officiis molestiae cumque eligendi.', '2020-01-23 05:12:44', '2020-01-23 05:12:44', NULL),
(5, 'Nakia Murray', 6, '+92', '301', '3286865', 'Quo reprehenderit illo esse fugiat rerum sapiente ut ut impedit.', '2020-01-23 05:13:27', '2020-01-23 05:13:27', NULL),
(6, 'Theresia Prosacco', 7, '+92', '300', '6095687', 'Et fugit ipsa ea optio autem nihil dolor voluptas.', '2020-01-23 05:14:09', '2020-01-23 05:14:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
