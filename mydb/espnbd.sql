-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 05:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espnbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'BAKOLITE SERIES', 'This is Bakolite Series Item Very Good Quality Product hibsdf', 1, '2017-10-10 03:44:44', '2017-10-16 11:40:56'),
(2, 'PLASTIC SERIES', 'This is Plastic Series item', 1, '2017-10-10 03:47:03', '2017-10-16 11:41:16'),
(3, 'BULB ITEMS', 'This is Bulb Series Item', 1, '2017-10-10 03:47:49', '2017-10-10 03:47:49'),
(5, 'MULTI PLUG SERIES', 'This is MultiPlug Series item', 1, '2017-10-10 03:48:19', '2017-10-10 03:48:19'),
(6, 'GANG SERIES', 'This is Gang Series Item', 1, '2017-10-10 03:48:43', '2017-10-10 09:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_designation`, `client_message`, `client_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Kamal', 'Desinger', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'client_images/testi1.jpg', 1, '2017-10-14 11:08:24', '2017-10-16 11:07:29'),
(4, 'Nazmul', 'CEO', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'client_images/testi3.jpg', 1, '2017-10-15 08:23:34', '2017-10-16 11:23:30'),
(7, 'John Abram', 'Web Developer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'client_images/testi2.jpg', 1, '2017-10-16 11:24:59', '2017-10-16 12:13:37'),
(9, 'Kamal', 'Web Developer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'client_images/testi4.jpg', 1, '2017-10-16 11:26:39', '2017-10-16 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customer_name`, `customer_email`, `customer_comment`, `created_at`, `updated_at`) VALUES
(1, 'nazmul', 'nazmulh62@gmail.com', 'hi nazmul', '2017-10-15 12:01:20', '2017-10-15 12:01:20'),
(4, 'Kamal', 'kamal@gmail.com', 'hi fgbgfhfh', '2017-10-15 12:13:48', '2017-10-15 12:13:48'),
(5, 'jibon', 'jibon@gmail.com', 'hi ksjdfsjfksf', '2017-10-16 11:31:21', '2017-10-16 11:31:21'),
(6, 'jibon', 'jibon@gmail.com', 'hi fgfhfgh', '2017-10-17 00:29:21', '2017-10-17 00:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_image`, `feature_title`, `feature_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'feature_images/icon1.JPG', 'Price', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 04:12:07', '2017-10-16 11:38:27'),
(3, 'feature_images/icon2.JPG', 'Quality', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 04:24:34', '2017-10-16 23:17:09'),
(4, 'feature_images/icon3.JPG', 'Service', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 04:25:54', '2017-10-12 04:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2017_10_08_044219_create_frontends_table', 1),
(4, '2017_10_09_183911_create_useradmins_table', 2),
(5, '2017_10_09_191926_create_categories_table', 2),
(6, '2017_10_09_193206_create_products_table', 2),
(7, '2017_10_11_042142_create_sliders_table', 3),
(8, '2017_10_11_181826_create_features_table', 4),
(9, '2017_10_13_111804_create_notices_table', 5),
(10, '2017_10_14_164453_create_clients_table', 6),
(11, '2017_10_14_174902_create_teams_table', 7),
(12, '2017_10_15_174040_create_comments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `author_name`, `notice_description`, `notice_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(9, 'BEST MOBILE DEVICE', 'Nazmul Hossain', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'notice_images/blog-img-3.jpg', 1, '2017-10-16 10:32:16', '2017-10-16 12:31:36'),
(10, 'PERSONAL NOTE DETAILS', 'Nazmul Hossain', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'notice_images/blog-img-2.jpg', 1, '2017-10-16 10:33:21', '2017-10-17 00:06:41'),
(11, 'ALL ABOUT WRITING STORY', 'Nazmul Hossain', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the\r\n\r\nRead More', 'notice_images/blog-img-1.jpg', 1, '2017-10-16 11:58:04', '2017-10-17 00:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_price`, `product_code`, `product_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'WALL LAMP HOLDER DIAMOND', 390.00, '1', 'This is Wall lamp Holder Diamond  New Series', 'product_images/9f3c86e8157553b714f586454af5ad02.jpg', 1, '2017-10-10 05:57:03', '2017-10-12 04:46:39'),
(2, 1, 'WALL LAMP HOLDER DIAMOND', 370.00, '2', 'This is wall Lamp Holder Diamond Third 02', 'product_images/ecbc59b5f355e2a6208013bee2ad3b34.jpg', 1, '2017-10-10 05:59:15', '2017-10-15 10:36:10'),
(3, 1, 'WALL LAMP HOLDER DIAMOND', 390.00, '3', 'This Is WALL LAMP HOLDER DIAMOND', 'product_images/img2.jpg', 1, '2017-10-12 04:39:36', '2017-10-12 04:39:36'),
(4, 1, 'WALL LAMP DIAMOND SWITCH', 390.00, '4', 'This Is WALL LAMP DIAMOND SWITCH', 'product_images/d807edbaa0d669ce94c59ecff2359945.jpg', 1, '2017-10-12 04:49:22', '2017-10-16 11:27:45'),
(5, 3, 'CLEAR BULB- 60 WATT', 100.00, '5', 'WALL LAMP DIAMOND SWITCH', 'product_images/18ba6fc0252c1037bd36ac1e22e87ff1.jpg', 1, '2017-10-15 10:34:22', '2017-10-15 10:48:37'),
(6, 3, 'COLOUR COTED-05 WATT', 200.00, '6', 'COLOUR COTED-05 WATT', 'product_images/121d64bfcd7f1e9d2c1d316fba8563a4.jpg', 1, '2017-10-15 10:46:04', '2017-10-15 10:46:04'),
(7, 3, 'CANDEL-05 WATT', 200.00, '7', 'CANDEL-05 WATT', 'product_images/5a35d487507ee6ebaa0d3ad55663759b.jpg', 1, '2017-10-15 10:47:09', '2017-10-15 10:47:09'),
(8, 3, 'CLEAR BULB- 60 WATT', 200.00, '8', 'CLEAR BULB- 60 WATT', 'product_images/ad821afbfdc6a8e43431b66a053f218f.jpg', 1, '2017-10-15 10:47:30', '2017-10-15 10:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'slider-1', 'slider_images/slider-1.jpg', 1, '2017-10-11 10:42:27', '2017-10-16 11:05:41'),
(2, 'slider-2', 'slider_images/slider-2.jpg', 1, '2017-10-11 10:44:48', '2017-10-16 11:05:30'),
(6, 'slider-3', 'slider_images/slider-3.jpg', 1, '2017-10-11 11:37:48', '2017-10-17 00:08:53'),
(7, 'slider-4', 'slider_images/slider-4.jpg', 1, '2017-10-11 11:38:10', '2017-10-16 12:40:02'),
(8, 'slider-5', 'slider_images/slider-5.jpg', 1, '2017-10-17 00:09:14', '2017-10-17 00:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `member_name`, `member_designation`, `member_message`, `team_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(12, 'Nazmul Hossain', 'CEO', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'team_images/team-member-2.png', 1, '2017-10-15 10:59:31', '2017-10-15 10:59:31'),
(13, 'BERNICE NEUMANN', 'Designer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'team_images/team-member-4.png', 1, '2017-10-15 10:59:48', '2017-10-17 00:10:28'),
(15, 'BERNICE NEUMANN', 'Web Developer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'team_images/team-member-04.png', 1, '2017-10-15 11:00:28', '2017-10-16 11:30:14'),
(17, 'JOHN DOE', 'Designer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'team_images/team-member-2.png', 1, '2017-10-15 11:02:07', '2017-10-16 12:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `useradmins`
--

CREATE TABLE `useradmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useradmins`
--

INSERT INTO `useradmins` (`id`, `name`, `email`, `password`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Jibon', 'jibon@gmail.com', '123456', 0, '2017-10-10 12:32:15', '2017-10-10 12:32:15'),
(2, 'rezaun', 'rezaun@gmail.com', '123456', 0, '2017-10-13 04:14:43', '2017-10-13 04:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `access_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nazmul', '2013nazmulhossain@gmail.com', '$2y$10$pxWqkrgAbX2ISgAvcLOQQeAHxJKoTMuyP3.JkaIDLVqrZXCd6mLwi', 1, 'vxy2TeItwNIrw0XLx1vGjC2D8DEvh1hm3Fl4S1tewvk2Esy7g67kujvb5JUE', '2017-10-08 04:12:36', '2017-10-16 12:25:46'),
(3, 'nazmul', 'najmul@gmail.com', '$2y$10$ALJvs/E3vAH8OiquE3YaMeUurMbDfN9nmjj/WTyiwRFfKitNTqxAi', 1, '4Sdy8yzYsUtcpmWZa23Joq8ZCy4Ue1dqLd6bfTBhPtPZIZ7gJIgYxDmLVW09', '2017-10-16 12:06:55', '2017-10-16 12:27:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmins`
--
ALTER TABLE `useradmins`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `useradmins`
--
ALTER TABLE `useradmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
