-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 05:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wijesinghejewellers`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gem_businesses_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'null',
  `shape` varchar(255) NOT NULL,
  `carat` decimal(7,2) NOT NULL,
  `width` decimal(5,2) NOT NULL,
  `length` decimal(5,2) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customize_chats`
--

CREATE TABLE `customize_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_req_id` bigint(20) UNSIGNED NOT NULL,
  `owner` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customize_chats`
--

INSERT INTO `customize_chats` (`id`, `cus_req_id`, `owner`, `type`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-14 09:21:08', '2024-07-14 09:21:08'),
(2, 1, 'manager', 'text', 'Hello, I need some assistance.', '2024-07-14 14:56:13', '2024-07-14 14:56:13'),
(3, 1, 'user', 'text', 'Your request has been received.', '2024-07-14 14:56:13', '2024-07-14 14:56:13'),
(4, 1, 'manager', 'text', 'Could you please update my account information?', '2024-07-14 14:56:13', '2024-07-14 14:56:13'),
(5, 1, 'manager', 'text', 'Sure, I will update it right away.', '2024-07-14 14:56:13', '2024-07-14 14:56:13'),
(14, 2, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-14 10:00:04', '2024-07-14 10:00:04'),
(15, 3, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-14 10:06:11', '2024-07-14 10:06:11'),
(16, 4, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-14 10:06:11', '2024-07-14 10:06:11'),
(17, 1, 'user', 'text', 'Hello, I need some assistance.', '2024-07-14 15:36:47', '2024-07-14 15:36:47'),
(18, 1, 'manager', 'text', 'Your request has been received.', '2024-07-14 15:36:47', '2024-07-14 15:36:47'),
(19, 1, 'user', 'text', 'Could you please update my account information?', '2024-07-14 15:36:47', '2024-07-14 15:36:47'),
(20, 1, 'manager', 'text', 'Sure, I will update it right away.', '2024-07-14 15:36:47', '2024-07-14 15:36:47'),
(21, 1, 'user', 'text', 'Hello, I need some assistance.', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(22, 1, 'manager', 'text', 'Your request has been received.', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(23, 1, 'user', 'img', '/storage/necklaces/4.jpg', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(24, 1, 'manager', 'text', 'Sure, I will update it right away.', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(25, 1, 'user', 'text', 'Hello, I need some assistance.', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(26, 1, 'manager', 'img', '/storage/necklaces/1.jpg', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(27, 1, 'user', 'text', 'Could you please update my account information now?', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(28, 1, 'manager', 'text', 'Sure, I will update it right away.', '2024-07-14 15:37:03', '2024-07-14 15:37:03'),
(29, 3, 'user', 'text', 'hi', '2024-07-14 12:07:33', '2024-07-14 12:07:33'),
(30, 3, 'user', 'text', 'i need customize necklace', '2024-07-14 12:08:55', '2024-07-14 12:08:55'),
(31, 3, 'user', 'text', 'hellow my name is migara', '2024-07-14 12:09:39', '2024-07-14 12:09:39'),
(32, 5, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-14 23:36:33', '2024-07-14 23:36:33'),
(33, 3, 'user', 'text', 'looooooooooooooool', '2024-07-15 00:37:21', '2024-07-15 00:37:21'),
(34, 3, 'user', 'image', 'chats/34635426920.jpg', '2024-07-15 01:22:05', '2024-07-15 01:22:05'),
(35, 3, 'user', 'image', 'chats/37779893462.jpg', '2024-07-15 01:28:20', '2024-07-15 01:28:20'),
(36, 3, 'manager', 'text', 'hellow', '2024-07-15 12:23:19', '2024-07-15 12:23:19'),
(37, 3, 'user', 'text', 'good night', '2024-07-15 12:24:23', '2024-07-15 12:24:23'),
(38, 3, 'user', 'text', 'hiiii', '2024-07-15 12:24:40', '2024-07-15 12:24:40'),
(39, 3, 'manager', 'image', 'chats/37787216842.jpg', '2024-07-15 12:27:12', '2024-07-15 12:27:12'),
(40, 3, 'user', 'text', 'can you customize this for me?', '2024-07-15 12:34:00', '2024-07-15 12:34:00'),
(41, 3, 'manager', 'text', 'yes sure!', '2024-07-15 12:35:27', '2024-07-15 12:35:27'),
(42, 3, 'user', 'text', 'thank you very much', '2024-07-15 12:35:42', '2024-07-15 12:35:42'),
(43, 3, 'manager', 'text', 'can you send me a image to customize?', '2024-07-15 12:35:58', '2024-07-15 12:35:58'),
(44, 3, 'user', 'text', 'yes sure!', '2024-07-15 12:36:06', '2024-07-15 12:36:06'),
(45, 3, 'user', 'image', 'chats/35204268612.jpg', '2024-07-15 12:36:36', '2024-07-15 12:36:36'),
(46, 3, 'manager', 'text', 'okay thank you.', '2024-07-15 12:36:50', '2024-07-15 12:36:50'),
(47, 3, 'manager', 'text', 'i will customize this', '2024-07-15 12:36:57', '2024-07-15 12:36:57'),
(48, 4, 'manager', 'text', 'yes you can', '2024-07-16 06:37:58', '2024-07-16 06:37:58'),
(49, 6, 'user', 'text', 'Hellow!, I need to customize a Ring With Gems', '2024-07-17 02:07:46', '2024-07-17 02:07:46'),
(50, 4, 'user', 'text', 'ok thank you', '2024-07-23 07:12:12', '2024-07-23 07:12:12'),
(51, 4, 'manager', 'text', '❤️', '2024-07-23 07:12:49', '2024-07-23 07:12:49'),
(52, 7, 'user', 'text', 'Hellow!, I need to customize a Ring With Gems', '2024-07-25 01:57:38', '2024-07-25 01:57:38'),
(53, 8, 'user', 'text', 'Hellow!, I need to customize a necklace.', '2024-07-25 02:02:01', '2024-07-25 02:02:01'),
(54, 9, 'user', 'text', 'Hellow!, I need to customize a Ring With Gems', '2024-08-04 08:14:08', '2024-08-04 08:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `customize_orders`
--

CREATE TABLE `customize_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_req_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `transaction` varchar(255) NOT NULL DEFAULT 'pending',
  `model` varchar(255) NOT NULL,
  `totalBill` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customize_orders`
--

INSERT INTO `customize_orders` (`id`, `cus_req_id`, `user_id`, `status`, `transaction`, `model`, `totalBill`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pending', 'pending', 'pending', 0.00, '2024-07-14 09:21:08', '2024-07-14 09:21:08'),
(2, 2, 1, 'reject', 'pending', 'pending', 0.00, '2024-07-14 10:00:04', '2024-07-15 11:44:55'),
(3, 3, 1, 'pending', 'pending', 'pending', 0.00, '2024-07-14 10:06:11', '2024-07-14 10:06:11'),
(4, 4, 1, 'quality', 'pending', 'pendin', 300000.00, '2024-07-14 10:06:11', '2024-08-01 00:24:31'),
(5, 5, 1, 'sold', 'success', 'ready', 40000.00, '2024-07-14 23:36:33', '2024-08-01 00:24:38'),
(6, 6, 1, 'cad', 'success', 'ready', 45000.00, '2024-07-17 02:07:46', '2024-07-25 23:29:17'),
(7, 7, 1, 'pending', 'pending', 'pending', 0.00, '2024-07-25 01:57:38', '2024-07-25 01:57:38'),
(8, 8, 1, 'pending', 'pending', 'pending', 0.00, '2024-07-25 02:02:01', '2024-07-25 02:02:01'),
(9, 9, 1, 'pending', 'pending', 'pending', 0.00, '2024-08-04 08:14:08', '2024-08-04 08:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `customize_requests`
--

CREATE TABLE `customize_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `style` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `weight` decimal(8,2) NOT NULL,
  `measurement` decimal(8,2) NOT NULL,
  `gemdetails` text NOT NULL,
  `estimation` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customize_requests`
--

INSERT INTO `customize_requests` (`id`, `user_id`, `style`, `material`, `gender`, `weight`, `measurement`, `gemdetails`, `estimation`, `created_at`, `updated_at`) VALUES
(1, 1, 'snake', 'Gold 22K', 'male', 2.00, 12.00, 'No Gems', 340000.00, '2024-07-14 09:21:08', '2024-07-14 09:21:08'),
(2, 1, 'box', 'Gold 14K', 'male', 2.00, 34.00, 'No Gems', 200000.00, '2024-07-14 10:00:04', '2024-07-14 10:00:04'),
(3, 1, 'figaro', 'Gold 18K', 'male', 2.00, 23.00, 'No Gems', 280000.00, '2024-07-14 10:06:11', '2024-07-14 10:06:11'),
(4, 1, 'figaro', 'Gold 18K', 'male', 2.00, 23.00, 'No Gems', 280000.00, '2024-07-14 10:06:11', '2024-07-14 10:06:11'),
(5, 1, 'rope', 'Gold 22K', 'male', 2.00, 35.00, 'No Gems', 340000.00, '2024-07-14 23:36:33', '2024-07-14 23:36:33'),
(6, 1, 'bypass', 'Gold 18K', 'female', 0.50, 15.00, 'I need Sapphire Gem with size = 2, Garnet Gem with size = 1, ', 32850.00, '2024-07-17 02:07:46', '2024-07-17 02:07:46'),
(7, 1, 'bypass', 'Gold 22K', 'male', 2.00, 15.00, 'I need Emerald Gem with size = 2, Sapphire Gem with size = 1, ', 3950.00, '2024-07-25 01:57:38', '2024-07-25 01:57:38'),
(8, 1, 'figaro', 'Gold 18K', 'male', 2.00, 20.00, 'No Gems', 130000.00, '2024-07-25 02:02:01', '2024-07-25 02:02:01'),
(9, 1, 'bypass', 'Gold 18K', 'male', 2.00, 23.00, 'I need Sapphire Gem with size = 2, ', 130220.00, '2024-08-04 08:14:08', '2024-08-04 08:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `cus_gem_prices`
--

CREATE TABLE `cus_gem_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gem_type_id` bigint(20) UNSIGNED NOT NULL,
  `gem_size_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus_gem_prices`
--

INSERT INTO `cus_gem_prices` (`id`, `gem_type_id`, `gem_size_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4000.00, '2024-07-17 05:38:23', '2024-07-17 00:45:13'),
(2, 1, 2, 200.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(3, 1, 3, 300.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(4, 1, 4, 400.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(5, 1, 5, 500.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(6, 2, 1, 110.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(7, 2, 2, 220.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(8, 2, 3, 330.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(9, 2, 4, 440.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(10, 2, 5, 550.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(11, 3, 1, 120.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(12, 3, 2, 240.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(13, 3, 3, 360.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(14, 3, 4, 480.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(15, 3, 5, 600.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(16, 4, 1, 130.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(17, 4, 2, 260.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(18, 4, 3, 390.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(19, 4, 4, 520.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(20, 4, 5, 650.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(21, 5, 1, 140.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(22, 5, 2, 280.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(23, 5, 3, 420.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(24, 5, 4, 560.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(25, 5, 5, 700.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(26, 6, 1, 150.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(27, 6, 2, 300.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(28, 6, 3, 450.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(29, 6, 4, 600.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23'),
(30, 6, 5, 750.00, '2024-07-17 05:38:23', '2024-07-17 05:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `cus_gem_sizes`
--

CREATE TABLE `cus_gem_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus_gem_sizes`
--

INSERT INTO `cus_gem_sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, '1', '2024-07-17 05:36:18', '2024-07-17 05:36:18'),
(2, '2', '2024-07-17 05:36:18', '2024-07-17 05:36:18'),
(3, '3', '2024-07-17 05:36:18', '2024-07-17 05:36:18'),
(4, '4', '2024-07-17 05:36:18', '2024-07-17 05:36:18'),
(5, '5', '2024-07-17 05:36:18', '2024-07-17 05:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `cus_gem_types`
--

CREATE TABLE `cus_gem_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus_gem_types`
--

INSERT INTO `cus_gem_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Diamond', '2024-07-17 05:35:49', '2024-07-17 05:35:49'),
(2, 'Sapphire', '2024-07-17 05:35:49', '2024-07-17 05:35:49'),
(3, 'Emerald', '2024-07-17 05:35:49', '2024-07-17 05:35:49'),
(4, 'Garnet', '2024-07-17 05:35:49', '2024-07-17 05:35:49'),
(5, 'Morganite', '2024-07-17 05:35:49', '2024-07-17 05:35:49'),
(6, 'Aquamarine', '2024-07-17 05:35:49', '2024-07-17 05:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `cus_materials`
--

CREATE TABLE `cus_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus_materials`
--

INSERT INTO `cus_materials` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Gold 14K', 1500.00, '2024-07-16 18:14:23', '2024-07-16 18:14:23'),
(2, 'Gold 18K', 65000.00, '2024-07-16 18:14:23', '2024-07-16 12:59:33'),
(3, 'Gold 22K', 1800.00, '2024-07-16 18:14:23', '2024-07-16 18:14:23'),
(4, 'Silver', 5000.00, '2024-07-16 18:14:23', '2024-07-16 18:14:23'),
(5, 'Platinum', 900.00, '2024-07-16 18:14:23', '2024-07-16 18:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'none',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `specification` text NOT NULL,
  `note` text NOT NULL,
  `discount` varchar(255) NOT NULL DEFAULT 'none',
  `discountPrice` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `price`, `image`, `name`, `description`, `specification`, `note`, `discount`, `discountPrice`, `created_at`, `updated_at`) VALUES
(2, 'Wedding', 25000.00, 'events/2.png', 'Eternal Romance Package', 'Includes two platinum rings and a diamond necklace. Symbolizes everlasting love and commitment with timeless elegance.', 'Platinum rings, diamond necklace, total 1.00 carat diamond weight, elegant designs.', 'Perfect for couples seeking timeless elegance. This beautiful set symbolizes eternal love.', 'none', 0.00, '2024-08-01 02:43:43', '2024-08-01 02:43:44'),
(3, 'Wedding', 15000.00, 'events/3.png', 'Forever Yours Set', 'Two white gold rings and a sapphire necklace. Celebrates your forever bond with modern sophistication.', '14K white gold rings, sapphire necklace, total 0.75 carat sapphire weight, modern designs.', 'Ideal for modern couples. This set is an affordable yet luxurious choice for your special day.', 'none', 0.00, '2024-08-01 02:45:35', '2024-08-01 02:45:35'),
(4, 'Wedding', 20000.00, 'events/4.png', 'Classic Elegance Bundle', 'Includes two yellow gold rings and a ruby necklace. Embrace classic elegance with traditional charm.', '18K yellow gold rings, ruby necklace, total 1.00 carat ruby weight, traditional designs.', 'Perfect for traditionalists. This set exudes timeless charm and sophistication.', 'none', 0.00, '2024-08-01 02:54:57', '2024-08-01 02:54:57'),
(5, 'Wedding', 30000.00, 'events/5.png', 'Radiant Love Package', 'Two rose gold rings and an emerald necklace. Reflects your radiant love with unique beauty.', '14K rose gold rings, emerald necklace, total 0.80 carat emerald weight, elegant designs.', 'Great for those who love unique beauty. This beautifully radiant set is perfect for your wedding day.', 'none', 0.00, '2024-08-01 03:05:42', '2024-08-01 03:05:42'),
(6, 'Wedding', 23000.00, 'events/6.png', 'Timeless Treasure Set', 'Two vintage-style rings and a pearl necklace. Captures timeless beauty with intricate design.', 'Vintage rings, pearl necklace, intricate designs, 0.50 carat total diamond weight.', 'Ideal for vintage enthusiasts. This set is perfect for celebrating your timeless love.', 'none', 0.00, '2024-08-01 03:06:26', '2024-08-01 03:06:26'),
(7, 'Wedding', 24500.00, 'events/7.png', 'Enchanted Harmony Bundle', 'Includes two two-tone rings and an opal necklace. Harmonizes your love with unique design.', 'Two-tone rings, opal necklace, unique designs, 0.60 carat total diamond weight.', 'Great for unique couples. This harmonious and beautiful set is ideal for your wedding day.', 'none', 0.00, '2024-08-01 03:08:03', '2024-08-01 03:08:03'),
(8, 'Wedding', 34000.00, 'events/8.png', 'Pure Romance Package', 'Two heart-motif rings and a topaz necklace. Celebrate pure romance with heartfelt design.', 'Heart-motif rings, topaz necklace, 0.70 carat total topaz weight, romantic designs.', 'Perfect for romantics. This set symbolizes your pure and enduring love.', 'none', 0.00, '2024-08-01 03:08:48', '2024-08-01 03:08:48'),
(9, 'Wedding', 22000.00, 'events/9.png', 'Royal Splendor Set', 'Two regal rings and a diamond necklace. Exude royal elegance with luxurious design.', 'Regal rings, diamond necklace, 1.00 carat total diamond weight, luxurious designs.', 'Ideal for those who love luxury. This set is fit for royalty, perfect for your special day.', 'none', 0.00, '2024-08-01 03:10:14', '2024-08-01 03:10:14'),
(10, 'Wedding', 32000.00, 'events/10.png', 'Nature’s Whisper Bundle', 'Two nature-inspired rings and a turquoise necklace. Celebrate nature’s beauty with organic design.', 'Nature-inspired rings, turquoise necklace, 0.50 carat total diamond weight, organic designs.', 'Great for nature lovers. This set captures the beauty of nature.', 'none', 0.00, '2024-08-01 03:11:54', '2024-08-01 03:11:54'),
(11, 'Wedding', 18200.00, 'events/11.png', 'Mystical Beauty Package', 'Two black diamond rings and a moonstone necklace. Embrace mystical beauty with enchanting design.', 'Black diamond rings, moonstone necklace, 0.75 carat total diamond weight, mystical designs.', 'Perfect for those who love unique gems. This set exudes mystical charm.', 'none', 0.00, '2024-08-01 03:13:10', '2024-08-01 03:13:10'),
(12, 'Panchayudha', 32000.00, 'events/12.png', 'Box Shape Baby Pendent', 'A sparkling star-shaped pendant designed for children, symbolizing their bright future and endless possibilities.', 'Sterling gold, star shape, 0.10 carat total diamond weight, 14-inch chain, secure clasp, lightweight design.', 'Perfect for young dreamers. The star symbolizes aspirations and achievements, making it an inspiring gift for children.', 'none', 0.00, '2024-08-03 23:05:59', '2024-08-03 23:05:59'),
(13, 'Panchayudha', 38500.00, 'events/13.png', 'Boy Pendent With Dharmachakra', 'An adorable elephant-shaped pendant, symbolizing strength and wisdom, designed to inspire and protect children.', 'Sterling silver, elephant shape, 0.05 carat diamond, 14-inch chain, secure clasp, lightweight design.', 'Ideal for cheerful children. The sun pendant represents warmth and positivity, making it a joyful gift for young ones.', 'none', 0.00, '2024-08-03 23:10:43', '2024-08-03 23:10:43'),
(14, 'Panchayudha', 32900.00, 'events/14.png', 'Girl Flower Shape Pendent', 'A delicate flower-shaped pendant, symbolizing growth and beauty, designed to enchant and inspire children.', 'Sterling silver, flower shape, 0.08 carat total diamond weight, 14-inch chain, secure clasp, lightweight design.', 'Perfect for nature lovers. The flower represents growth and beauty, making it a charming gift for young ones.', 'none', 0.00, '2024-08-03 23:12:31', '2024-08-03 23:12:31'),
(15, 'Panchayudha', 40000.00, 'events/15.png', 'Boo Kola Shape Pendent', 'A delicate boo kola-shaped pendant, symbolizing transformation and growth, designed to charm and delight young ones.', '14K gold, crown shape, 0.10 carat sapphire, 14-inch chain, secure clasp, child-friendly design.', 'Ideal for showing affection. This pendant is a sweet and meaningful gift for a beloved child.', 'none', 0.00, '2024-08-03 23:17:06', '2024-08-03 23:17:06'),
(16, 'Panchayudha', 45000.00, 'events/16.png', 'Peacock Pendent', 'An Peacock -shaped pendant with tiny emerald eyes, symbolizing wisdom and curiosity, perfect for inquisitive young minds.', '14K gold, owl shape, 0.05 carat emeralds, 14-inch chain, secure clasp, child-friendly design.', 'Ideal for curious children. The Peacock represents wisdom and knowledge, making it a meaningful gift for young learners.', 'none', 0.00, '2024-08-03 23:20:53', '2024-08-03 23:20:53'),
(17, 'Panchayudha', 34000.00, 'events/17.png', 'Round Shape Panchayudha', 'A round-shaped pendant adorned with a small sapphire, perfect for the little princess in your life.', '14K gold, crown shape, 0.10 carat sapphire, 14-inch chain, secure clasp, child-friendly design.', 'Ideal for princess fans. The crown symbolizes royalty and specialness, making it a delightful gift for a little girl.', 'none', 0.00, '2024-08-03 23:24:44', '2024-08-03 23:24:44'),
(18, 'Panchayudha', 28000.00, 'events/18.png', 'Girls Sweet Pendent', 'A sparkling round-shaped pendant designed for children, symbolizing their bright future and endless possibilities.', '14K gold, heart shape, 0.05 carat diamond, 14-inch chain, secure clasp, child-safe design.', 'Perfect for young dreamers. making it an inspiring gift for children.', 'none', 0.00, '2024-08-03 23:28:58', '2024-08-03 23:28:58'),
(19, 'Panchayudha', 34000.00, 'events/19.png', 'Little Princess Pendant', 'A round-shaped pendant adorned with a small sapphire, perfect for the little princess in your life.', '14K gold, heart shape, 0.05 carat diamond, 14-inch chain, secure clasp, child-safe design.', 'Ideal for princess fans. The crown symbolizes royalty and specialness, making it a delightful gift for a little girl.', 'none', 0.00, '2024-08-03 23:38:37', '2024-08-03 23:38:37'),
(20, 'Panchayudha', 40000.00, 'events/20.png', 'Happy Heart Pendant', 'A heart-shaped pendant with a tiny diamond, representing the love and joy children bring into our lives.', '14K gold, heart shape, 0.05 carat diamond, 14-inch chain, secure clasp, child-safe design.', 'Ideal for showing affection. The heart pendant is a sweet and meaningful gift for a beloved child.', 'none', 0.00, '2024-08-03 23:41:03', '2024-08-03 23:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `event_orders`
--

CREATE TABLE `event_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `price` decimal(8,2) NOT NULL,
  `payment` varchar(255) NOT NULL DEFAULT 'pending',
  `receiverName` varchar(255) NOT NULL,
  `deliveryAddress` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_orders`
--

INSERT INTO `event_orders` (`id`, `event_id`, `user_id`, `status`, `price`, `payment`, `receiverName`, `deliveryAddress`, `contact_no`, `created_at`, `updated_at`) VALUES
(6, 13, 1, 'pending', 38500.00, 'success', 'Migara Thiyunuwan', '58/1, waragoda, attanagalla.', '0771416968', '2024-08-03 23:48:34', '2024-08-03 23:51:15'),
(7, 3, 1, 'accept', 15000.00, 'success', 'Tharindu lakshan', 'No 26, Temple Road, Kelaniya', '0771527182', '2024-08-04 04:58:18', '2024-08-04 05:07:01'),
(8, 16, 1, 'pending', 45000.00, 'success', 'malki madhubhashini', 'abcd', '0771526789', '2024-08-04 05:04:48', '2024-08-04 05:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gem_businesses`
--

CREATE TABLE `gem_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `market_name` varchar(255) NOT NULL DEFAULT 'Market_Name',
  `owner_name` varchar(255) NOT NULL,
  `gem_asso_num` varchar(255) NOT NULL,
  `business_num` varchar(255) NOT NULL DEFAULT 'Business_Num',
  `verified` varchar(255) NOT NULL DEFAULT 'false',
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `certificate_image` varchar(255) NOT NULL DEFAULT 'null',
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gem_businesses`
--

INSERT INTO `gem_businesses` (`id`, `market_name`, `owner_name`, `gem_asso_num`, `business_num`, `verified`, `address`, `contact_no`, `email`, `certificate_image`, `time_from`, `time_to`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Vinil Manik', 'Migara Thiyunuwan', '199933200145', '199933200145', 'accepted', '58/1, waragoda, attanagalla.', '0771416968', 'migarathiyunuwan@gmail.com', 'uploads/2.jpg', '17:00:00', '05:00:00', '$2y$10$asGAwBiwnEbEn3nq/7.D8uvPNX5z/E0cce9PDYLhGLwCveOioj5aK', '2024-05-29 06:01:01', '2024-06-29 11:06:16'),
(3, 'Raja Jewellers', 'Saman Kumara', '199933200145', '199933200145', 'false', '58/1, waragoda, attanagalla.', '0771416968', 'wrong@gmail.com', 'uploads/3.jpg', '05:04:00', '17:04:00', '$2y$10$k/yo/likR8f7di8MDYiep.dqJBWt.moHW.kSgA6tKWDCtkFJ5zukW', '2024-05-29 06:05:06', '2024-05-29 08:07:28'),
(6, 'ceylon jewellery', 'Sarath Gunapala', '19993320234', '19993320234', 'false', 'No, 43, Main Street, Kurunegala', '0561728152', 'ceylonjewellery@gmail.com', 'uploads/6.jpg', '08:45:00', '18:45:00', '$2y$10$InKTbEKHlBr.LA1ujs7Pp.ZKfCLGORLyPyF1jwnac2.FW8YS9.Bvm', '2024-07-07 12:43:17', '2024-07-07 12:43:17'),
(7, 'Nileka Jewellery', 'Nuwan Thushara', '78117722291', '3458791291', 'false', 'Main Street, Kegalle.', '0357281923', 'nileka@gmail.com', 'uploads/7.jpg', '08:00:00', '17:00:00', '$2y$10$VNHo3zoEcP5Ifb6JULzafesdI9fm2K2YMVmXA/GAguEnJN5SUKU/a', '2024-07-07 12:46:29', '2024-07-07 12:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `customize` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `price`, `quantity`, `image`, `customize`, `description`, `specification`, `created_at`, `updated_at`) VALUES
(1, 'Choker', 'Necklace', 15000.00, 1, 'necklaces/1.jpg', 'false', 'A close-fitting necklace worn high on the neck. Typically 14 to 16 inches long, made from various materials like velvet, leather, or metal.', 'Adjustable length, suitable for various neck sizes, can feature embellishments like pearls or gemstones.', '2024-06-11 08:54:19', '2024-07-12 09:53:30'),
(2, 'Princess Necklace', 'Necklace', 20000.00, 4, 'necklaces/2.jpg', 'true', 'A versatile necklace length, measuring about 18 inches. It rests just below the collarbone and suits almost any neckline.', 'Ideal for pendants, available in various materials like gold, silver, and platinum.', '2024-06-11 08:55:00', '2024-07-12 03:22:35'),
(3, 'Matinee Necklace', 'Necklace', 15000.00, 7, 'necklaces/3.jpg', 'true', 'Usually 20 to 24 inches long, perfect for both business and casual wear. Falls at the top of the bust.', 'Often used with semi-precious stones, beads, or simple chains.', '2024-06-11 08:56:41', '2024-07-12 03:29:58'),
(4, 'Opera Necklace', 'Necklace', 45000.00, 4, 'necklaces/4.jpg', 'true', 'Long necklace, around 28 to 36 inches. Can be worn as a single strand or doubled for a layered look. Falls below the bust or near the waist.', 'Suitable for formal occasions, often made with pearls or layered chains.', '2024-06-11 08:57:50', '2024-07-12 03:27:05'),
(5, 'Rope Necklace', 'Necklace', 5000.00, 9, 'necklaces/5.jpg', 'false', 'Extremely long, over 36 inches. Can be worn in multiple layers or knotted for a unique style. Very versatile and elegant.', 'Can include multiple strands, tassels, or intricate designs.', '2024-06-11 09:21:49', '2024-07-08 01:38:56'),
(6, 'Bib Necklace', 'Necklace', 45000.00, 2, 'necklaces/6.jpg', 'true', 'Features multiple strands or a wide front section that covers the upper chest, resembling a bib. Often ornate and statement-making.', 'Often encrusted with beads, gemstones, or crystals for a dramatic effect.', '2024-06-11 09:26:52', '2024-07-07 22:36:33'),
(7, 'Collar Necklace', 'Necklace', 30000.00, 0, 'necklaces/7.jpg', 'false', 'Fits snugly around the middle of the neck. Generally 12 to 14 inches long, often made of beads or thick bands of metal.', 'Can be a single band or multiple strands, great for high-neck outfits.', '2024-06-11 09:28:20', '2024-07-07 12:32:06'),
(8, 'Lariat Necklace', 'Necklace', 40000.00, 9, 'necklaces/8.jpg', 'false', 'An open-ended necklace, often looped or knotted at the front. Typically very long and versatile in styling.', 'Can be styled in various ways, often simple chains or leather cords with decorative ends.', '2024-06-11 09:29:03', '2024-07-12 09:51:18'),
(9, 'Pendant Necklace', 'Necklace', 80000.00, 10, 'necklaces/9.jpg', 'false', 'Features a single hanging piece or charm. The chain length varies, and the pendant can range from minimalist to ornate.', 'Ideal for showcasing individual style, available in various materials and designs.', '2024-06-11 09:29:55', '2024-07-03 08:28:54'),
(10, 'Station Necklace', 'Necklace', 55000.00, 10, 'necklaces/10.jpg', 'true', 'A chain interspersed with gems or other adornments at regular intervals. Elegant and understated.', 'Lightweight, can be layered with other necklaces.', '2024-06-11 09:30:45', '2024-07-03 08:29:00'),
(11, 'Locket Necklace', 'Necklace', 33000.00, 2, 'necklaces/11.jpg', 'true', 'A pendant that opens to reveal a space used for storing a photograph or other small item. Often sentimental.', 'Typically made of precious metals, can be engraved or decorated.', '2024-06-11 09:31:39', '2024-07-03 08:30:16'),
(12, 'Y-Necklace', 'Necklace', 44500.00, 19, 'necklaces/12.jpg', 'false', 'Shaped like a “Y”, with a chain that drops down in the center. Stylish and elongates the neckline.', 'Can feature various drop lengths, often with a small pendant or charm at the end.', '2024-06-11 09:32:50', '2024-07-12 09:51:18'),
(13, 'Tennis Necklace', 'Necklace', 90000.00, 13, 'necklaces/13.jpg', 'true', 'Features a single strand of small, uniform diamonds or gemstones. Classic and sophisticated.', 'High-quality gemstones, usually set in gold or platinum.', '2024-06-11 09:33:36', '2024-07-03 08:30:35'),
(14, 'Festoon Necklace', 'Necklace', 110000.00, 0, 'necklaces/14.jpg', 'false', 'A garland or draped design that hangs gracefully around the neck. Often elaborate and vintage-inspired.', 'Can include multiple draped chains, often with pearls or gemstones.', '2024-06-11 09:35:07', '2024-06-11 09:35:07'),
(15, 'Torque Necklace', 'Necklace', 90000.00, 11, 'necklaces/15.jpg', 'true', 'A rigid, open-ended metal collar that wraps around the neck. Bold and minimalist.', 'Typically made of metal, can be plain or adorned with simple designs.', '2024-06-11 09:37:18', '2024-07-03 08:30:42'),
(16, 'Bead Necklace', 'Necklace', 40000.00, 13, 'necklaces/16.jpg', 'false', 'Composed of a series of beads, which can be of any material. Length and style vary widely.', 'Versatile in style, can be simple or elaborate.', '2024-06-11 09:39:10', '2024-07-03 08:30:49'),
(21, 'Eternal Diamond Ring', 'Ring', 12000.00, 5, 'necklaces/21.png', 'false', 'A timeless diamond ring symbolizing eternal love, featuring a solitaire diamond set in a platinum band. Perfect for engagements and special anniversaries.', 'Platinum band, 1-carat round diamond, size 6-9, GIA certified, 4-prong setting, polished finish.', '2024-07-10 12:26:46', '2024-07-13 03:58:51'),
(22, 'Sapphire Halo Ring', 'Ring', 10000.00, 0, 'necklaces/22.png', 'true', 'Stunning sapphire encircled by diamonds on a white gold band, ideal for special occasions or daily elegance.', '14k white gold, 0.5-carat sapphire, 0.25-carat diamonds, size 5-8, prong setting, polished finish, hypoallergenic.', '2024-07-10 12:27:24', '2024-07-10 12:27:24'),
(23, 'Rose Gold Twist Ring', 'Ring', 8000.00, 5, 'necklaces/23.png', 'true', 'Elegant rose gold band with a twisted design, offering a modern and stylish look for any occasion.', '18k rose gold, twisted design, size 5-9, polished finish, hypoallergenic, comfort fit, available in custom sizes.', '2024-07-10 12:28:13', '2024-07-12 07:05:11'),
(24, 'Vintage Emerald Ring', 'Ring', 14000.00, 8, 'necklaces/24.png', 'true', 'Antique-style ring featuring a large emerald and intricate detailing, bringing a touch of vintage charm to any outfit.', 'Sterling silver, 1.2-carat emerald, size 6-10, filigree detailing, antique finish, hypoallergenic, bezel setting.', '2024-07-10 12:29:04', '2024-07-26 08:42:16'),
(25, 'Infinity Knot Ring', 'Ring', 6700.00, 13, 'necklaces/25.png', 'false', 'Symbolizing everlasting love, this infinity knot ring is crafted in sterling silver, making it a meaningful and stylish piece.', 'Sterling silver, infinity knot design, size 5-10, polished finish, hypoallergenic, comfort fit, available in custom sizes.', '2024-07-10 12:30:08', '2024-07-13 04:06:47'),
(26, 'Amethyst Heart Ring', 'Ring', 11400.00, 3, 'necklaces/26.png', 'false', 'Heart-shaped amethyst set in a delicate gold band, perfect for expressing love and affection on special occasions.', '14k gold, heart-shaped amethyst, size 5-8, bezel setting, polished finish, hypoallergenic, lightweight.', '2024-07-10 12:31:09', '2024-07-11 10:14:48'),
(27, 'Diamond Eternity Band', 'Ring', 15000.00, 13, 'necklaces/27.png', 'false', 'Continuous line of diamonds set in a gold band, symbolizing unending love and commitment. Ideal for anniversaries.', '14k gold, 1-carat total diamond weight, size 5-9, prong setting, comfort fit, polished finish, hypoallergenic.', '2024-07-10 12:32:21', '2024-07-13 04:07:45'),
(28, 'Turquoise Cocktail Ring', 'Ring', 12600.00, 5, 'necklaces/28.png', 'true', 'Bold turquoise stone set in an intricate silver band, perfect for adding a pop of color to any outfit.', 'Sterling silver, 2-carat turquoise, size 6-9, intricate band design, polished finish, hypoallergenic, comfort fit.', '2024-07-10 12:32:54', '2024-07-12 09:50:12'),
(29, 'Black Onyx Signet Ring', 'Ring', 16400.00, 7, 'necklaces/29.png', 'false', 'Sleek black onyx set in a classic signet ring design, exuding sophistication and style. Great for formal wear.', 'Sterling silver, black onyx, size 7-10, signet design, polished finish, hypoallergenic, comfort fit.', '2024-07-10 12:33:51', '2024-07-11 10:14:29'),
(30, 'Ruby Cluster Ring', 'Ring', 9900.00, 9, 'necklaces/30.png', 'true', 'Cluster of rubies set in a gold band, creating a vibrant and eye-catching piece. Perfect for special occasions.', '14k gold, 0.75-carat total ruby weight, size 5-9, cluster setting, polished finish, hypoallergenic, lightweight.', '2024-07-10 12:34:26', '2024-07-11 10:15:34'),
(31, 'White Gold Solitaire Ring', 'Ring', 13500.00, 12, 'necklaces/31.png', 'false', 'Classic solitaire ring with a single diamond set in white gold. Timeless and elegant for any occasion.', '14k white gold, 0.5-carat diamond, size 5-9, prong setting, polished finish, hypoallergenic, lightweight.', '2024-07-10 12:35:19', '2024-07-11 10:15:03'),
(32, 'Pearl Engagement Ring', 'Ring', 11000.00, 2, 'necklaces/32.png', 'true', 'Unique engagement ring featuring a lustrous pearl set in a delicate gold band. Elegant and timeless.', '14k gold, 7mm pearl, size 5-8, bezel setting, polished finish, hypoallergenic, lightweight.', '2024-07-10 12:36:04', '2024-07-11 10:15:30'),
(33, 'Pearl Engagement Ring', 'Ring', 11000.00, 12, 'necklaces/33.png', 'true', 'Unique engagement ring featuring a lustrous pearl set in a delicate gold band. Elegant and timeless.', '14k gold, 7mm pearl, size 5-8, bezel setting, polished finish, hypoallergenic, lightweight.', '2024-07-10 12:36:04', '2024-07-11 10:15:09'),
(34, 'Aquamarine Birthstone Ring', 'Ring', 18200.00, 14, 'necklaces/34.png', 'true', 'Beautiful aquamarine set in a simple silver band. Perfect for March birthdays or as a thoughtful gift.', 'Sterling silver, 1-carat aquamarine, size 5-9, prong setting, polished finish, hypoallergenic, comfort fit.', '2024-07-10 12:36:41', '2024-07-11 10:14:59'),
(35, 'Aquamarine Birthstone Ring', 'Ring', 18200.00, 16, 'necklaces/35.png', 'true', 'Beautiful aquamarine set in a simple silver band. Perfect for March birthdays or as a thoughtful gift.', 'Sterling silver, 1-carat aquamarine, size 5-9, prong setting, polished finish, hypoallergenic, comfort fit.', '2024-07-10 12:36:41', '2024-07-11 10:15:26'),
(36, 'Celtic Knot Ring', 'Ring', 13200.00, 13, 'necklaces/36.png', 'false', 'Intricate Celtic knot design on a sterling silver band, symbolizing unity and eternity. Great for everyday wear.', 'Sterling silver, Celtic knot design, size 6-10, polished finish, hypoallergenic, comfort fit, available in custom sizes.', '2024-07-10 12:37:12', '2024-07-11 10:15:20'),
(37, 'Diamond Tennis Bracelet', 'Bracelet', 20000.00, 10, 'necklaces/37.png', 'false', 'Classic diamond tennis bracelet in white gold, perfect for adding sparkle to any outfit.', '14k white gold, 2-carat diamonds, prong setting, secure clasp, hypoallergenic, polished finish, 7-inch length.', '2024-07-11 07:11:08', '2024-07-11 10:16:33'),
(38, 'Charm Bracelet', 'Bracelet', 18500.00, 14, 'necklaces/38.png', 'true', 'Customizable charm bracelet in sterling silver, allowing for personalized charms and designs.', 'Sterling silver, lobster clasp, hypoallergenic, polished finish, adjustable length, customizable, secure closure.', '2024-07-11 07:12:20', '2024-07-11 10:16:37'),
(39, 'Cuff Bracelet', 'Bracelet', 25000.00, 15, 'necklaces/39.png', 'false', 'Stylish cuff bracelet in rose gold, perfect for a modern and chic look.', '18k rose gold, adjustable size, hypoallergenic, polished finish, lightweight, secure fit, modern design.', '2024-07-11 07:12:53', '2024-07-11 10:16:45'),
(40, 'Beaded Bracelet', 'Bracelet', 19500.00, 10, 'necklaces/40.png', 'true', 'Colorful beaded bracelet with semi-precious stones, perfect for casual wear.', 'Semi-precious stones, stretch fit, hypoallergenic, polished finish, 7-inch length, lightweight, vibrant colors.', '2024-07-11 07:13:32', '2024-07-11 10:16:50'),
(41, 'Infinity Bracelet', 'Bracelet', 22500.00, 2, 'necklaces/41.png', 'true', 'Elegant infinity bracelet in sterling silver, symbolizing everlasting love and friendship.', 'Sterling silver, infinity symbol, lobster clasp, hypoallergenic, polished finish, adjustable length, secure closure.', '2024-07-11 07:14:48', '2024-07-11 10:16:54'),
(42, 'Bangle Bracelet', 'Bracelet', 16500.00, 10, 'necklaces/42.png', 'false', 'Classic bangle bracelet in gold, perfect for stacking or wearing alone.', '14k gold, slip-on style, hypoallergenic, polished finish, 7-inch length, lightweight, classic design.', '2024-07-11 07:20:05', '2024-07-11 10:16:57'),
(43, 'Leather Wrap Bracelet', 'Bracelet', 23400.00, 10, 'necklaces/43.png', 'false', 'Stylish leather wrap bracelet with a silver clasp, perfect for a casual look.', 'Genuine leather, sterling silver clasp, hypoallergenic, adjustable length, secure closure, lightweight, stylish design.', '2024-07-11 07:20:34', '2024-07-11 10:17:02'),
(44, 'Pearl Strand Bracelet', 'Bracelet', 27900.00, 19, 'necklaces/44.png', 'false', 'Elegant pearl strand bracelet, perfect for formal occasions or adding sophistication to any outfit.', 'Freshwater pearls, 7-inch length, hypoallergenic, polished finish, secure clasp, classic design, lightweight.', '2024-07-11 07:21:12', '2024-07-11 10:17:07'),
(45, 'Turquoise Beaded Bracelet', 'Bracelet', 28000.00, 9, 'necklaces/45.png', 'false', 'Vibrant turquoise beaded bracelet, perfect for adding a pop of color to any look.', 'Turquoise beads, stretch fit, hypoallergenic, polished finish, 7-inch length, lightweight, vibrant colors.', '2024-07-11 07:26:22', '2024-07-11 10:17:12'),
(46, 'Opal Bracelet', 'Bracelet', 23400.00, 3, 'necklaces/46.png', 'true', 'Dazzling opal bracelet in a silver setting, perfect for adding a touch of elegance.', 'Sterling silver, 1-carat opals, prong setting, secure clasp, hypoallergenic, polished finish, 7-inch length.', '2024-07-11 07:26:56', '2024-07-11 10:17:17'),
(47, 'Amethyst Cuff Bracelet', 'Bracelet', 24300.00, 12, 'necklaces/47.png', 'false', 'Elegant amethyst cuff bracelet in a gold setting, perfect for adding a touch of sophistication.', '14k gold, 1-carat amethysts, adjustable size, hypoallergenic, polished finish, lightweight, secure fit.', '2024-07-11 07:27:28', '2024-07-11 10:17:31'),
(48, 'Garnet Tennis Bracelet', 'Bracelet', 27900.00, 15, 'necklaces/48.png', 'true', 'Classic garnet tennis bracelet in silver, perfect for adding a touch of elegance.', 'Sterling silver, 2-carat garnets, prong setting, secure clasp, hypoallergenic, polished finish, 7-inch length.', '2024-07-11 07:28:00', '2024-07-11 10:17:36'),
(49, 'Citrine Beaded Bracelet', 'Bracelet', 17400.00, 16, 'necklaces/49.png', 'true', 'Beautiful citrine beaded bracelet, perfect for adding warmth and elegance.', 'Citrine beads, stretch fit, hypoallergenic, polished finish, 7-inch length, lightweight, vibrant colors.', '2024-07-11 07:30:45', '2024-07-11 10:17:41'),
(50, 'Topaz Charm Bracelet', 'Bracelet', 18900.00, 14, 'necklaces/50.png', 'false', 'Elegant topaz charm bracelet in a gold setting, perfect for adding a touch of glamour.', '14k gold, 1-carat topaz, lobster clasp, hypoallergenic, polished finish, adjustable length, secure closure.', '2024-07-11 07:31:15', '2024-07-11 10:17:59'),
(51, 'Peridot Cuff Bracelet', 'Bracelet', 20000.00, 15, 'necklaces/51.png', 'false', 'Stunning peridot cuff bracelet in a silver setting, perfect for adding a touch of elegance.', 'Sterling silver, 1-carat peridot, adjustable size, hypoallergenic, polished finish, lightweight, secure fit.', '2024-07-11 07:31:48', '2024-07-11 10:17:55'),
(52, 'Moonstone Beaded Bracelet', 'Bracelet', 23400.00, 14, 'necklaces/52.png', 'false', 'Mystical moonstone beaded bracelet, perfect for adding a touch of boho-chic.', 'Moonstone beads, stretch fit, hypoallergenic, polished finish, 7-inch length, lightweight, vibrant colors.', '2024-07-11 07:32:17', '2024-07-11 10:18:05'),
(53, 'Diamond Stud Earrings', 'Earring', 17500.00, 0, 'necklaces/53.png', 'false', 'Classic diamond stud earrings in white gold, perfect for everyday elegance and timeless style.', '14k white gold, 0.5-carat diamonds, 4-prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:45:14', '2024-07-11 09:45:14'),
(54, 'Pearl Drop Earrings', 'Earring', 13000.00, 0, 'necklaces/54.png', 'true', 'Elegant pearl drop earrings with a gold setting, adding sophistication to any outfit.', '14k gold, 7mm pearls, French hook, hypoallergenic, polished finish, secure closure, timeless design.', '2024-07-11 09:45:55', '2024-07-11 09:45:55'),
(55, 'Sapphire Hoop Earrings', 'Earring', 20000.00, 0, 'necklaces/55.png', 'true', 'Sparkling sapphire hoop earrings in sterling silver, ideal for special occasions.', 'Sterling silver, 0.3-carat sapphires, hinged back, hypoallergenic, polished finish, secure clasp, lightweight.', '2024-07-11 09:46:29', '2024-07-11 09:46:29'),
(56, 'Emerald Stud Earrings', 'Earring', 18500.00, 0, 'necklaces/56.png', 'false', 'Stunning emerald stud earrings in white gold, perfect for adding a pop of color.', '14k white gold, 0.5-carat emeralds, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:47:02', '2024-07-11 09:47:03'),
(57, 'Ruby Teardrop Earrings', 'Earring', 17500.00, 0, 'necklaces/57.png', 'false', 'Gorgeous ruby teardrop earrings in a gold setting, perfect for a bold statement.', '14k gold, 0.7-carat rubies, French hook, hypoallergenic, polished finish, secure closure, teardrop shape.', '2024-07-11 09:47:48', '2024-07-11 09:47:48'),
(58, 'Amethyst Stud Earrings', 'Earring', 18300.00, 0, 'necklaces/58.png', 'false', 'Elegant amethyst stud earrings in a silver setting, perfect for adding a touch of color and elegance.', 'Sterling silver, 0.4-carat amethysts, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:48:23', '2024-07-11 09:48:23'),
(59, 'Topaz Dangle Earrings', 'Earring', 21000.00, 0, 'necklaces/59.png', 'true', 'Beautiful topaz dangle earrings in gold, adding a touch of glamour to any outfit.', '14k gold, 1-carat topaz, French hook, hypoallergenic, polished finish, secure closure, dangle design.', '2024-07-11 09:49:43', '2024-07-11 09:49:43'),
(60, 'Garnet Stud Earrings', 'Earring', 19900.00, 0, 'necklaces/60.png', 'false', 'Deep red garnet stud earrings in a gold setting, perfect for January birthdays.', '14k gold, 0.5-carat garnets, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:50:16', '2024-07-11 09:50:16'),
(61, 'Peridot Hoop Earrings', 'Earring', 21000.00, 0, 'necklaces/61.png', 'false', 'Sparkling peridot hoop earrings in silver, perfect for adding a pop of green.', 'Sterling silver, 0.3-carat peridots, hinged back, hypoallergenic, polished finish, secure clasp, lightweight.', '2024-07-11 09:51:00', '2024-07-11 09:51:00'),
(63, 'Opal Stud Earrings', 'Earring', 18400.00, 0, 'necklaces/63.png', 'false', 'Dazzling opal stud earrings in a gold setting, perfect for October birthdays.', 'Dazzling opal stud earrings in a gold setting, perfect for October birthdays.', '2024-07-11 09:52:05', '2024-07-11 09:52:05'),
(64, 'Citrine Drop Earrings', 'Earring', 23500.00, 0, 'necklaces/64.png', 'true', 'Beautiful citrine drop earrings in a silver setting, adding warmth and elegance.', 'Sterling silver, 1-carat citrines, French hook, hypoallergenic, polished finish, secure closure, dangle design.', '2024-07-11 09:52:59', '2024-07-11 09:52:59'),
(65, 'Aquamarine Stud Earrings', 'Earring', 24200.00, 0, 'necklaces/65.png', 'false', 'Light blue aquamarine stud earrings in a gold setting, perfect for March birthdays.', '14k gold, 0.5-carat aquamarines, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:53:28', '2024-07-11 09:53:28'),
(66, 'Tanzanite Hoop Earrings', 'Earring', 14900.00, 0, 'necklaces/66.png', 'true', 'Elegant tanzanite hoop earrings in sterling silver, perfect for adding a touch of luxury.', 'Sterling silver, 0.3-carat tanzanites, hinged back, hypoallergenic, polished finish, secure clasp, lightweight.', '2024-07-11 09:54:33', '2024-07-11 09:54:33'),
(67, 'Moonstone Dangle Earrings', 'Earring', 16400.00, 0, 'necklaces/67.png', 'true', 'Mystical moonstone dangle earrings in a silver setting, adding a touch of boho-chic.', 'Sterling silver, 1-carat moonstones, French hook, hypoallergenic, polished finish, secure closure, dangle design.', '2024-07-11 09:55:11', '2024-07-11 09:55:11'),
(69, 'Morganite Stud Earrings', 'Earring', 18500.00, 0, 'necklaces/69.png', 'false', 'Blush pink morganite stud earrings in a rose gold setting, perfect for adding romance.', '14k rose gold, 0.5-carat morganites, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:56:13', '2024-07-11 09:56:13'),
(70, 'Tourmaline Stud Earrings', 'Earring', 19000.00, 0, 'necklaces/70.png', 'false', 'Elegant tourmaline stud earrings in a gold setting, perfect for adding a touch of sophistication.', '14k gold, 0.5-carat tourmalines, prong setting, butterfly backs, hypoallergenic, polished finish, round cut.', '2024-07-11 09:56:49', '2024-07-11 09:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `first_name`, `last_name`, `address`, `nic`, `contact_no`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Migara', 'Thiyunuwan', '58/1, waragoda, attanagalla.', '199933200145', '0771416968', 'migarathiyunuwan@gmail.com', '$2y$10$Gww9LXUucKRiJteyv3yC9etRZA9HYWgqrHRUjzHrfB42GKrSn8a66', '2024-07-15 10:07:37', '2024-07-15 10:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `first_name`, `last_name`, `username`, `address`, `nic`, `contact_no`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Migara', 'Thiyunuwan', 'migara99', '58/1,waragoda,attanagalla.', '199933200145', '+94771416968', 'migarathiyunuwan@gmail.com', '$2y$10$eJ1fu7RUkZD1TPk2STSZwOxzkW/FOJZ6nUa4UPiA1MVOwILHvOlB6', '2024-05-13 07:50:54', '2024-05-14 22:51:16'),
(5, 'Ruwan', 'Perera', 'ruwan99', '58/1, waragoda, attanagalla.', '199933100310', '0771416968', 'manager@gmail.com', '$2y$10$q3NxASxIbmNJ5uz0gbNfXOmej./0a2/uae7Aqs4VxiuoZLkJ8K/lm', '2024-07-07 12:57:35', '2024-07-07 12:57:35');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_05_13_111435_create_managers_table', 2),
(16, '2024_05_28_132242_create_gem_businesses_table', 3),
(20, '2024_06_09_094009_create_items_table', 4),
(22, '2024_06_12_120202_create_carts_table', 5),
(29, '2024_06_13_190740_create_orders_table', 6),
(30, '2024_06_13_190806_create_order_items_table', 6),
(48, '2024_07_04_121957_create_leaders_table', 7),
(49, '2024_07_05_124119_create_advertisements_table', 7),
(50, '2024_07_14_104023_create_customize_requests_table', 7),
(51, '2024_07_14_104101_create_customize_orders_table', 7),
(52, '2024_07_14_104133_create_customize_chats_table', 7),
(53, '2024_07_16_175556_create_cus_gem_types_table', 8),
(54, '2024_07_16_175616_create_cus_gem_sizes_table', 8),
(55, '2024_07_16_175635_create_cus_gem_prices_table', 8),
(56, '2024_07_16_175658_create_cus_materials_table', 8),
(58, '2024_07_25_153311_create_events_table', 9),
(59, '2024_07_26_043803_create_event_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `totalPrice` decimal(8,2) NOT NULL,
  `deliveryAddress` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `receiverName` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL DEFAULT 'false',
  `orderStatus` varchar(255) NOT NULL DEFAULT 'pending',
  `deliveryStatus` varchar(255) NOT NULL DEFAULT 'placed',
  `placed_at` timestamp NULL DEFAULT NULL,
  `processed_at` timestamp NULL DEFAULT NULL,
  `shipped_at` timestamp NULL DEFAULT NULL,
  `out_at` timestamp NULL DEFAULT NULL,
  `delivered_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `totalPrice`, `deliveryAddress`, `country`, `receiverName`, `contact_no`, `transaction`, `orderStatus`, `deliveryStatus`, `placed_at`, `processed_at`, `shipped_at`, `out_at`, `delivered_at`, `created_at`, `updated_at`) VALUES
(1, 1, 563000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'accept', 'placed', '2024-06-26 13:35:08', '2024-06-28 10:57:36', '2024-06-28 11:00:23', '2024-06-28 11:00:29', '2024-06-28 11:00:41', '2024-06-26 13:35:08', '2024-06-28 11:00:41'),
(2, 1, 178000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Malki Madhu', '0771416934', 'false', 'reject', 'placed', '2024-06-26 13:36:05', NULL, NULL, NULL, NULL, '2024-06-26 13:36:05', '2024-06-27 10:55:10'),
(3, 1, 175000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Psycho', '0771416934', 'false', 'accept', 'placed', '2024-06-27 11:01:22', '2024-06-28 11:01:41', '2024-07-01 10:45:34', NULL, NULL, '2024-06-27 11:01:22', '2024-07-01 10:45:34'),
(4, 1, 920000.00, 'No. 48, Temple Road, Kelaniya.', 'Sri Lanka', 'Nimal Perera', '0771416959', 'false', 'accept', 'placed', '2024-07-01 10:16:01', '2024-08-05 06:19:32', NULL, NULL, NULL, '2024-07-01 10:16:01', '2024-08-05 06:19:32'),
(5, 1, 135000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'saman kumara', '0771416945', 'false', 'accept', 'placed', '2024-07-06 05:25:00', '2024-07-06 05:29:15', '2024-07-08 01:40:37', '2024-08-04 07:17:45', '2024-08-04 12:54:07', '2024-07-06 05:25:00', '2024-08-04 12:54:07'),
(11, 1, 30000.00, '58/1, waragoda, attanagalla.', 'Saint Lucia', 'Migara Thiyunuwan', '0771416945', 'false', 'accept', 'placed', '2024-07-07 10:17:03', NULL, NULL, NULL, NULL, '2024-07-07 10:17:03', '2024-08-05 06:27:41'),
(12, 1, 60000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416978', 'false', 'pending', 'placed', '2024-07-07 10:36:34', NULL, NULL, NULL, NULL, '2024-07-07 10:36:34', '2024-07-07 10:36:34'),
(13, 1, 45000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416934', 'false', 'accept', 'placed', '2024-07-07 11:42:37', NULL, NULL, NULL, NULL, '2024-07-07 11:42:37', '2024-08-05 06:19:04'),
(14, 1, 45000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'accept', 'placed', '2024-07-07 12:06:43', '2024-07-07 22:37:17', NULL, NULL, NULL, '2024-07-07 12:06:43', '2024-07-07 22:37:17'),
(15, 10, 540000.00, 'No.26, Temple Road, Kelaniya', 'Sri Lanka', 'Pasindu', '0771416968', 'false', 'pending', 'placed', '2024-07-07 12:32:06', NULL, NULL, NULL, NULL, '2024-07-07 12:32:06', '2024-07-07 12:32:06'),
(16, 10, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771425617', 'false', 'pending', 'placed', '2024-07-07 22:35:35', NULL, NULL, NULL, NULL, '2024-07-07 22:35:35', '2024-07-07 22:35:35'),
(17, 10, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'pasindu', '0771416968', 'false', 'pending', 'placed', '2024-07-08 01:38:56', NULL, NULL, NULL, NULL, '2024-07-08 01:38:56', '2024-07-08 01:38:56'),
(18, 1, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-08 12:59:20', NULL, NULL, NULL, NULL, '2024-07-08 12:59:20', '2024-07-08 12:59:20'),
(19, 1, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-08 12:59:51', NULL, NULL, NULL, NULL, '2024-07-08 12:59:51', '2024-07-08 12:59:51'),
(20, 1, 20000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-08 13:21:53', NULL, NULL, NULL, NULL, '2024-07-08 13:21:53', '2024-07-08 13:21:53'),
(21, 1, 0.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-08 13:21:53', NULL, NULL, NULL, NULL, '2024-07-08 13:21:53', '2024-07-08 13:21:53'),
(22, 1, 20000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'success', 'pending', 'placed', '2024-07-12 03:22:35', NULL, NULL, NULL, NULL, '2024-07-12 03:22:35', '2024-07-27 23:58:12'),
(23, 1, 450000.00, 'testing address', 'Sri Lanka', 'testing', '0779999999', 'false', 'pending', 'placed', '2024-07-12 03:27:05', NULL, NULL, NULL, NULL, '2024-07-12 03:27:05', '2024-07-12 03:27:05'),
(24, 1, 15000.00, 'testing address2', 'Sri Lanka', 'testing2', '0771416968', 'false', 'pending', 'placed', '2024-07-12 03:29:58', NULL, NULL, NULL, NULL, '2024-07-12 03:29:58', '2024-07-12 03:29:58'),
(25, 1, 8000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771415627', 'false', 'pending', 'placed', '2024-07-12 07:05:11', NULL, NULL, NULL, NULL, '2024-07-12 07:05:11', '2024-07-12 07:05:11'),
(26, 1, 25200.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-12 09:50:12', NULL, NULL, NULL, NULL, '2024-07-12 09:50:12', '2024-07-12 09:50:12'),
(27, 1, 0.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-12 09:50:12', NULL, NULL, NULL, NULL, '2024-07-12 09:50:12', '2024-07-12 09:50:12'),
(28, 1, 173500.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-12 09:51:18', NULL, NULL, NULL, NULL, '2024-07-12 09:51:18', '2024-07-12 09:51:18'),
(29, 1, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-12 09:51:54', NULL, NULL, NULL, NULL, '2024-07-12 09:51:54', '2024-07-12 09:51:54'),
(30, 1, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'placed', '2024-07-12 09:53:30', NULL, NULL, NULL, NULL, '2024-07-12 09:53:30', '2024-07-12 09:53:30'),
(31, 1, 12000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771415627', 'success', 'pending', 'placed', '2024-07-13 03:58:51', NULL, NULL, NULL, NULL, '2024-07-13 03:58:51', '2024-07-13 04:03:22'),
(32, 1, 14000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'success', 'pending', 'placed', '2024-07-13 04:05:07', NULL, NULL, NULL, NULL, '2024-07-13 04:05:07', '2024-07-28 00:02:00'),
(33, 1, 6700.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'fwefqwerfw', '0771416968', 'success', 'pending', 'placed', '2024-07-13 04:06:47', NULL, NULL, NULL, NULL, '2024-07-13 04:06:47', '2024-07-13 04:07:11'),
(34, 1, 15000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'dgdfgetghert hrth', '0771416968', 'success', 'pending', 'placed', '2024-07-13 04:07:45', NULL, NULL, NULL, NULL, '2024-07-13 04:07:45', '2024-07-27 23:59:12'),
(35, 1, 14000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'success', 'pending', 'placed', '2024-07-26 08:42:16', NULL, NULL, NULL, NULL, '2024-07-26 08:42:16', '2024-07-26 08:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `itemQuantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `itemQuantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2024-06-26 13:35:08', '2024-06-26 13:35:08'),
(2, 1, 2, 4, '2024-06-26 13:35:08', '2024-06-26 13:35:08'),
(3, 1, 4, 1, '2024-06-26 13:35:08', '2024-06-26 13:35:08'),
(4, 1, 5, 1, '2024-06-26 13:35:08', '2024-06-26 13:35:08'),
(5, 2, 6, 3, '2024-06-26 13:36:05', '2024-06-26 13:36:05'),
(6, 2, 8, 1, '2024-06-26 13:36:05', '2024-06-26 13:36:05'),
(7, 2, 5, 1, '2024-06-26 13:36:05', '2024-06-26 13:36:05'),
(8, 3, 1, 1, '2024-06-27 11:01:22', '2024-06-27 11:01:22'),
(9, 3, 9, 2, '2024-06-27 11:01:22', '2024-06-27 11:01:22'),
(10, 4, 2, 1, '2024-07-01 10:16:01', '2024-07-01 10:16:01'),
(11, 4, 4, 2, '2024-07-01 10:16:01', '2024-07-01 10:16:01'),
(12, 5, 5, 3, '2024-07-06 05:25:00', '2024-07-06 05:25:00'),
(13, 5, 7, 4, '2024-07-06 05:25:00', '2024-07-06 05:25:00'),
(19, 11, 3, 2, '2024-07-07 10:17:03', '2024-07-07 10:17:03'),
(20, 12, 2, 3, '2024-07-07 10:36:34', '2024-07-07 10:36:34'),
(21, 13, 3, 3, '2024-07-07 11:42:37', '2024-07-07 11:42:37'),
(22, 14, 1, 3, '2024-07-07 12:06:43', '2024-07-07 12:06:43'),
(23, 15, 4, 1, '2024-07-07 12:32:06', '2024-07-07 12:32:06'),
(24, 15, 5, 3, '2024-07-07 12:32:06', '2024-07-07 12:32:06'),
(25, 15, 1, 3, '2024-07-07 12:32:06', '2024-07-07 12:32:06'),
(26, 15, 7, 1, '2024-07-07 12:32:06', '2024-07-07 12:32:06'),
(27, 16, 5, 3, '2024-07-07 22:35:35', '2024-07-07 22:35:35'),
(28, 17, 5, 3, '2024-07-08 01:38:56', '2024-07-08 01:38:56'),
(29, 18, 1, 1, '2024-07-08 12:59:20', '2024-07-08 12:59:20'),
(30, 19, 1, 1, '2024-07-08 12:59:51', '2024-07-08 12:59:51'),
(31, 20, 2, 1, '2024-07-08 13:21:53', '2024-07-08 13:21:53'),
(32, 22, 2, 1, '2024-07-12 03:22:35', '2024-07-12 03:22:35'),
(33, 23, 4, 1, '2024-07-12 03:27:05', '2024-07-12 03:27:05'),
(34, 24, 3, 1, '2024-07-12 03:29:58', '2024-07-12 03:29:58'),
(35, 25, 23, 1, '2024-07-12 07:05:11', '2024-07-12 07:05:11'),
(36, 26, 28, 2, '2024-07-12 09:50:12', '2024-07-12 09:50:12'),
(37, 28, 8, 1, '2024-07-12 09:51:18', '2024-07-12 09:51:18'),
(38, 28, 12, 3, '2024-07-12 09:51:18', '2024-07-12 09:51:18'),
(39, 29, 1, 1, '2024-07-12 09:51:54', '2024-07-12 09:51:54'),
(40, 30, 1, 1, '2024-07-12 09:53:30', '2024-07-12 09:53:30'),
(41, 31, 21, 1, '2024-07-13 03:58:51', '2024-07-13 03:58:51'),
(42, 32, 24, 1, '2024-07-13 04:05:07', '2024-07-13 04:05:07'),
(43, 33, 25, 1, '2024-07-13 04:06:47', '2024-07-13 04:06:47'),
(44, 34, 27, 1, '2024-07-13 04:07:45', '2024-07-13 04:07:45'),
(45, 35, 24, 1, '2024-07-26 08:42:16', '2024-07-26 08:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `address`, `city`, `country`, `contact_no`, `about`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Migara', 'Thiyunuwan', 'migara99', '58/1,waragoda,attanagalla.', 'Attanagalla.', 'Sri Lanka.', '+94771416968', 'Hello! I\'m Migara Thiyunuwan passionate computer science undergraduate at Uva Wellassa University.', 'migarathiyunuwan@gmail.com', NULL, '$2y$10$eJ1fu7RUkZD1TPk2STSZwOxzkW/FOJZ6nUa4UPiA1MVOwILHvOlB6', NULL, '2024-05-10 01:26:33', '2024-05-14 22:32:30'),
(2, 'Malki', 'Madhubhashini', 'malki2001', 'kotiyakubura, ruwanwella', 'Kegalla', 'Sri Lanka', '0771415627', 'malki', 'malki@gmail.com', NULL, '$2y$10$EjT9UaKNuRa7ClFaDHK8cuR26tDPBkDjwt2l5eVMoVBiouqNUTfOK', NULL, '2024-05-10 01:31:00', '2024-05-10 01:31:00'),
(9, 'Tharindu', 'siriwardana', 'tharindu', '58/1, waragoda, attanagalla.', 'Attanagalla', 'Sri Lanka', '0771416923', 'hii im tharindu', 'tharindu@gmail.com', NULL, '$2y$10$e4GsbsvhUDzj2FeDfLDd9.u5IKwBElpq4qWltweX6hGEiWNX5humy', NULL, '2024-07-07 10:01:48', '2024-07-07 10:01:48'),
(10, 'Pasindu', 'Gunawardana', 'pasindu846', 'No.26, Temple Road, Kelaniya', 'Kelaniya', 'Sri Lanka', '0712381925', 'Hellow! I\'m Pasindu', 'pasindu@gmail.com', NULL, '$2y$10$q01MMgs0epPsG72YurgyOOix46paa4cEi3H34iYbjistWXrOG0Ie.', NULL, '2024-07-07 12:30:59', '2024-07-07 12:30:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisements_gem_businesses_id_foreign` (`gem_businesses_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_item_id_foreign` (`item_id`);

--
-- Indexes for table `customize_chats`
--
ALTER TABLE `customize_chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customize_chats_cus_req_id_foreign` (`cus_req_id`);

--
-- Indexes for table `customize_orders`
--
ALTER TABLE `customize_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customize_orders_cus_req_id_foreign` (`cus_req_id`),
  ADD KEY `customize_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `customize_requests`
--
ALTER TABLE `customize_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customize_requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `cus_gem_prices`
--
ALTER TABLE `cus_gem_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_gem_prices_gem_type_id_foreign` (`gem_type_id`),
  ADD KEY `cus_gem_prices_gem_size_id_foreign` (`gem_size_id`);

--
-- Indexes for table `cus_gem_sizes`
--
ALTER TABLE `cus_gem_sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cus_gem_sizes_size_unique` (`size`);

--
-- Indexes for table `cus_gem_types`
--
ALTER TABLE `cus_gem_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cus_gem_types_name_unique` (`name`);

--
-- Indexes for table `cus_materials`
--
ALTER TABLE `cus_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_orders`
--
ALTER TABLE `event_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_orders_event_id_foreign` (`event_id`),
  ADD KEY `event_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gem_businesses`
--
ALTER TABLE `gem_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_item_id_foreign` (`item_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `customize_chats`
--
ALTER TABLE `customize_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customize_orders`
--
ALTER TABLE `customize_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customize_requests`
--
ALTER TABLE `customize_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cus_gem_prices`
--
ALTER TABLE `cus_gem_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cus_gem_sizes`
--
ALTER TABLE `cus_gem_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cus_gem_types`
--
ALTER TABLE `cus_gem_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cus_materials`
--
ALTER TABLE `cus_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event_orders`
--
ALTER TABLE `event_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gem_businesses`
--
ALTER TABLE `gem_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_gem_businesses_id_foreign` FOREIGN KEY (`gem_businesses_id`) REFERENCES `gem_businesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customize_chats`
--
ALTER TABLE `customize_chats`
  ADD CONSTRAINT `customize_chats_cus_req_id_foreign` FOREIGN KEY (`cus_req_id`) REFERENCES `customize_requests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customize_orders`
--
ALTER TABLE `customize_orders`
  ADD CONSTRAINT `customize_orders_cus_req_id_foreign` FOREIGN KEY (`cus_req_id`) REFERENCES `customize_requests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customize_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customize_requests`
--
ALTER TABLE `customize_requests`
  ADD CONSTRAINT `customize_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cus_gem_prices`
--
ALTER TABLE `cus_gem_prices`
  ADD CONSTRAINT `cus_gem_prices_gem_size_id_foreign` FOREIGN KEY (`gem_size_id`) REFERENCES `cus_gem_sizes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cus_gem_prices_gem_type_id_foreign` FOREIGN KEY (`gem_type_id`) REFERENCES `cus_gem_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_orders`
--
ALTER TABLE `event_orders`
  ADD CONSTRAINT `event_orders_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `event_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
