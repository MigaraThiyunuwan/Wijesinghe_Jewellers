-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 02:12 PM
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
(2, 'Vinil Manik', 'Migara Thiyunuwan', '199933200145', '199933200145', 'accepted', '58/1, waragoda, attanagalla.', '0771416968', 'tin@gmail.com', 'uploads/2.jpg', '17:00:00', '05:00:00', '$2y$10$o4SDBYFxNtRiqKtDZomKvuHZA2StmoaHRN4XMRTnf6dzoMWPxdfu.', '2024-05-29 06:01:01', '2024-05-31 03:05:12'),
(3, 'Raja Jewellers', 'Saman Kumara', '199933200145', '199933200145', 'false', '58/1, waragoda, attanagalla.', '0771416968', 'wrong@gmail.com', 'uploads/3.jpg', '05:04:00', '17:04:00', '$2y$10$k/yo/likR8f7di8MDYiep.dqJBWt.moHW.kSgA6tKWDCtkFJ5zukW', '2024-05-29 06:05:06', '2024-05-29 08:07:28');

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
(1, 'Choker', 'Necklace', 15000.00, 5, 'necklaces/1.jpg', 'false', 'A close-fitting necklace worn high on the neck. Typically 14 to 16 inches long, made from various materials like velvet, leather, or metal.', 'Adjustable length, suitable for various neck sizes, can feature embellishments like pearls or gemstones.', '2024-06-11 08:54:19', '2024-06-11 08:54:19'),
(2, 'Princess Necklace', 'Necklace', 20000.00, 10, 'necklaces/2.jpg', 'true', 'A versatile necklace length, measuring about 18 inches. It rests just below the collarbone and suits almost any neckline.', 'Ideal for pendants, available in various materials like gold, silver, and platinum.', '2024-06-11 08:55:00', '2024-06-11 08:55:00'),
(3, 'Matinee Necklace', 'Necklace', 15000.00, 4, 'necklaces/3.jpg', 'true', 'Usually 20 to 24 inches long, perfect for both business and casual wear. Falls at the top of the bust.', 'Often used with semi-precious stones, beads, or simple chains.', '2024-06-11 08:56:41', '2024-06-11 08:56:41'),
(4, 'Opera Necklace', 'Necklace', 450000.00, 5, 'necklaces/4.jpg', 'true', 'Long necklace, around 28 to 36 inches. Can be worn as a single strand or doubled for a layered look. Falls below the bust or near the waist.', 'Suitable for formal occasions, often made with pearls or layered chains.', '2024-06-11 08:57:50', '2024-06-11 08:57:50'),
(5, 'Rope Necklace', 'Necklace', 3000.00, 23, 'necklaces/5.jpg', 'false', 'Extremely long, over 36 inches. Can be worn in multiple layers or knotted for a unique style. Very versatile and elegant.', 'Can include multiple strands, tassels, or intricate designs.', '2024-06-11 09:21:49', '2024-06-11 09:21:49'),
(6, 'Bib Necklace', 'Necklace', 45000.00, 10, 'necklaces/6.jpg', 'true', 'Features multiple strands or a wide front section that covers the upper chest, resembling a bib. Often ornate and statement-making.', 'Often encrusted with beads, gemstones, or crystals for a dramatic effect.', '2024-06-11 09:26:52', '2024-06-11 09:26:52'),
(7, 'Collar Necklace', 'Necklace', 30000.00, 12, 'necklaces/7.jpg', 'false', 'Fits snugly around the middle of the neck. Generally 12 to 14 inches long, often made of beads or thick bands of metal.', 'Can be a single band or multiple strands, great for high-neck outfits.', '2024-06-11 09:28:20', '2024-06-11 09:28:20'),
(8, 'Lariat Necklace', 'Necklace', 40000.00, 5, 'necklaces/8.jpg', 'false', 'An open-ended necklace, often looped or knotted at the front. Typically very long and versatile in styling.', 'Can be styled in various ways, often simple chains or leather cords with decorative ends.', '2024-06-11 09:29:03', '2024-06-11 09:29:03'),
(9, 'Pendant Necklace', 'Necklace', 80000.00, 2, 'necklaces/9.jpg', 'false', 'Features a single hanging piece or charm. The chain length varies, and the pendant can range from minimalist to ornate.', 'Ideal for showcasing individual style, available in various materials and designs.', '2024-06-11 09:29:55', '2024-06-11 09:29:55'),
(10, 'Station Necklace', 'Necklace', 55000.00, 0, 'necklaces/10.jpg', 'true', 'A chain interspersed with gems or other adornments at regular intervals. Elegant and understated.', 'Lightweight, can be layered with other necklaces.', '2024-06-11 09:30:45', '2024-06-11 09:30:45'),
(11, 'Locket Necklace', 'Necklace', 33000.00, 0, 'necklaces/11.jpg', 'true', 'A pendant that opens to reveal a space used for storing a photograph or other small item. Often sentimental.', 'Typically made of precious metals, can be engraved or decorated.', '2024-06-11 09:31:39', '2024-06-11 09:31:39'),
(12, 'Y-Necklace', 'Necklace', 44500.00, 0, 'necklaces/12.jpg', 'false', 'Shaped like a “Y”, with a chain that drops down in the center. Stylish and elongates the neckline.', 'Can feature various drop lengths, often with a small pendant or charm at the end.', '2024-06-11 09:32:50', '2024-06-11 09:32:50'),
(13, 'Tennis Necklace', 'Necklace', 90000.00, 0, 'necklaces/13.jpg', 'true', 'Features a single strand of small, uniform diamonds or gemstones. Classic and sophisticated.', 'High-quality gemstones, usually set in gold or platinum.', '2024-06-11 09:33:36', '2024-06-11 09:33:36'),
(14, 'Festoon Necklace', 'Necklace', 110000.00, 0, 'necklaces/14.jpg', 'false', 'A garland or draped design that hangs gracefully around the neck. Often elaborate and vintage-inspired.', 'Can include multiple draped chains, often with pearls or gemstones.', '2024-06-11 09:35:07', '2024-06-11 09:35:07'),
(15, 'Torque Necklace', 'Necklace', 90000.00, 0, 'necklaces/15.jpg', 'true', 'A rigid, open-ended metal collar that wraps around the neck. Bold and minimalist.', 'Typically made of metal, can be plain or adorned with simple designs.', '2024-06-11 09:37:18', '2024-06-11 09:37:18'),
(16, 'Bead Necklace', 'Necklace', 40000.00, 0, 'necklaces/16.jpg', 'false', 'Composed of a series of beads, which can be of any material. Length and style vary widely.', 'Versatile in style, can be simple or elaborate.', '2024-06-11 09:39:10', '2024-06-11 09:39:10');

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
(1, 'Migara', 'Thiyunuwan', 'migara99', '58/1,waragoda,attanagalla.', '199933200145', '+94771416968', 'migarathiyunuwan@gmail.com', '$2y$10$eJ1fu7RUkZD1TPk2STSZwOxzkW/FOJZ6nUa4UPiA1MVOwILHvOlB6', '2024-05-13 07:50:54', '2024-05-14 22:51:16');

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
(25, '2024_06_13_190740_create_orders_table', 6),
(26, '2024_06_13_190806_create_order_items_table', 6);

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
  `deliveryStatus` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `totalPrice`, `deliveryAddress`, `country`, `receiverName`, `contact_no`, `transaction`, `orderStatus`, `deliveryStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 510000.00, '58/1, waragoda, attanagalla.', 'Sri Lanka', 'Migara Thiyunuwan', '0771416968', 'false', 'pending', 'pending', '2024-06-23 09:09:18', '2024-06-23 09:09:18');

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
(1, 1, 3, 4, '2024-06-23 09:09:18', '2024-06-23 09:09:18'),
(2, 1, 4, 1, '2024-06-23 09:09:18', '2024-06-23 09:09:18');

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
(2, 'Malki', 'Madhubhashini', 'malki2001', 'kotiyakubura, ruwanwella', 'Kegalla', 'Sri Lanka', '0771415627', 'malki', 'malki@gmail.com', NULL, '$2y$10$EjT9UaKNuRa7ClFaDHK8cuR26tDPBkDjwt2l5eVMoVBiouqNUTfOK', NULL, '2024-05-10 01:31:00', '2024-05-10 01:31:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_item_id_foreign` (`item_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gem_businesses`
--
ALTER TABLE `gem_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
