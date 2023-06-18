-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 10:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old_book_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `image`, `body`, `created_at`, `updated_at`) VALUES
(2, 'Mahbubr rahman', 'image/author/JbPakOCxiTevX1bcMDvs.jpg', 'Inspire with passion. Dream big and do something. Be brave and have integrity while leading.', '2023-06-18 13:06:34', '2023-06-18 13:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `location_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `ISBN`, `category_id`, `location_id`, `user_id`, `title`, `author`, `image`, `description`, `location`, `price`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '1577', '3', '2', 1, 'বাইশের বন্যা (হার্ডকভার)', 'Tasrif khan', 'image/vSjHHB2yFgFlYc15WBQq.jpg', 'A book description is a short summary of a book\'s story or content that is designed to “hook” a reader and lead to a sale. Typically, the book\'s description conveys important information about its topic or focus (in nonfiction) or the plot and tone (for a novel or any other piece of fiction).', '', 40, 1, '1', '2023-06-13 12:04:38', '2023-06-13 12:04:45'),
(3, '1577', '3', '2', 1, 'শঙ্খচূড় (হার্ডকভার)', 'জুনায়েদ ইভান', 'image/gUKnsPkmGiqg7bbFT205.jpg', 'Book Description : A book description is a short summary of a book\'s story or content that is designed to “hook” a reader and lead to a sale. Typically, the book\'s description conveys important information about its topic or focus (in nonfiction) or the plot and tone (for a novel or any other piece of fiction).', '', 60, 1, '1', '2023-06-13 12:06:10', '2023-06-13 12:06:13'),
(4, '1577', '3', '2', 1, 'নিকটবর্তী ব্যবধান (হার্ডকভার)', 'জুনায়েদ ইভান', 'image/5Z4yakeEzS0BG97KOqme.jpg', 'Book Description : A book description is a short summary of a book\'s story or content that is designed to “hook” a reader and lead to a sale. Typically, the book\'s description conveys important information about its topic or focus (in nonfiction) or the plot and tone (for a novel or any other piece of fiction).', '', 44, 1, '1', '2023-06-13 12:09:27', '2023-06-13 12:09:33'),
(5, '1577', '4', '3', 1, 'বিজনেস ব্লুপ্রিন্ট (হার্ডকভার)', 'মুহাম্মদ ইলিয়াস কাঞ্চন (কোচ কাঞ্চন)', 'image/VwbyM7zNvtjh70aS7t6O.jpg', 'Book Description : A book description is a short summary of a book\'s story or content that is designed to “hook” a reader and lead to a sale. Typically, the book\'s description conveys important information about its topic or focus (in nonfiction) or the plot and tone (for a novel or any other piece of fiction).', '', 323, 1, '1', '2023-06-13 12:11:24', '2023-06-13 12:11:28'),
(6, '232323', '3', '2', 1, 'Test', 'জুনায়েদ ইভান', 'image/7gFfbu3iJ8jGCZ4HaJDV.jpg', 'asdfasdf', 'Ashulia saver dhaka <br> asdfasdf asdfad', 23, 1, '0', '2023-06-18 10:00:09', '2023-06-18 10:00:09'),
(7, '232323', '13', '2', 1, 'test', 'জুনায়েদ ইভান', 'image/ktkYHV80PkP5XggIVMgE.jpg', 'asdfasdf', 'Ashulia saver dhaka', 323, 1, '0', '2023-06-18 12:54:14', '2023-06-18 12:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'normale',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'image/DJcJrjGQjEyx94Fr9Xdd.jpg', 'normale', '2023-05-27 09:16:58', '2023-06-13 13:33:37'),
(2, 'test', 'test', 'image/nEOXSo0ahcoayvob6ZrH.jpg', 'normale', '2023-05-27 09:39:42', '2023-06-13 13:33:25'),
(3, 'Fracktion book', 'fracktion-book', 'image/kKKEy3z7XXr40RXsKl4C.jpg', 'home', '2023-06-13 11:54:04', '2023-06-13 13:33:16'),
(4, 'non-fracktion book', 'non-fracktion-book', 'image/IB3GEn8totRx97EeYiza.jpg', 'home', '2023-06-13 12:09:57', '2023-06-13 13:33:05'),
(5, 'test test2', 'test-test2', 'image/4DOUY1skh0BCMxg1VPTb.jpg', 'normale', '2023-06-13 13:31:34', '2023-06-13 13:31:34'),
(8, 'Sprite Can', 'sprite-can', 'image/p7fODkWP82kHxuOaFjDU.jpg', 'normale', '2023-06-13 13:48:32', '2023-06-13 13:48:32'),
(10, 'Bcs exam', 'bcs-exam', 'image/uaqAAjHHYmws8Cxvyz6s.jpg', 'exam', '2023-06-18 09:14:08', '2023-06-18 09:14:08'),
(12, 'Admission', 'admission', 'image/3JMRXLjRBmZkiMllx1bZ.jpg', 'exam', '2023-06-18 09:17:23', '2023-06-18 09:17:23'),
(13, 'Admission', 'admission', 'image/i69IozIpg1HKrVaDbgyq.jpg', 'exam', '2023-06-18 09:18:07', '2023-06-18 09:18:07'),
(14, 'Job Peparation', 'job-peparation', 'image/cwMnCs4glKnDyOUKHOsJ.jpg', 'exam', '2023-06-18 09:19:23', '2023-06-18 09:19:23'),
(15, 'Hsc', 'hsc', 'image/HdY18JxIG9AfuJqBIxKK.jpg', 'exam', '2023-06-18 09:19:44', '2023-06-18 09:19:44'),
(16, 'গণমাধ্যম ও সাংবাদিকতা', 'gnmadhzm-oo-sangbadikta', 'image/zzbAjkU2p7mFx0HmTVwK.jpg', 'home2', '2023-06-18 13:30:17', '2023-06-18 13:30:17'),
(17, 'গণিত, বিজ্ঞান ও প্রযুক্তি', 'gnit-bijngan-oo-przukti', 'image/6kt72LqBiKwJrOayiSDu.jpg', 'home2', '2023-06-18 13:30:40', '2023-06-18 13:30:40'),
(18, 'গল্প', 'glp', 'image/LTdCjOpx4dN4K2hDWC0a.jpg', 'home2', '2023-06-18 13:31:21', '2023-06-18 13:31:21'),
(19, 'ছড়া, কবিতা ও আবৃত্তি', 'chra-kbita-oo-abrritti', 'image/jUeUdrrFhg7TIxCtZztn.jpg', 'home2', '2023-06-18 13:31:46', '2023-06-18 13:31:46'),
(20, 'জীবনী, স্মৃতিচারণ ও সাক্ষাৎকার', 'jeebnee-smrriticarn-oo-sakshattkar', 'image/c11IFlU50UjRGV4peTXi.jpg', 'home2', '2023-06-18 13:32:08', '2023-06-18 13:32:08'),
(22, 'জীবনী, স্মৃতিচারণ ও সাক্ষাৎকার', 'jeebnee-smrriticarn-oo-sakshattkar', 'image/c11IFlU50UjRGV4peTXi.jpg', 'home2', '2023-06-18 13:32:08', '2023-06-18 13:32:08'),
(23, 'জীবনী, স্মৃতিচারণ ও সাক্ষাৎকার', 'jeebnee-smrriticarn-oo-sakshattkar', 'image/c11IFlU50UjRGV4peTXi.jpg', 'home2', '2023-06-18 13:32:08', '2023-06-18 13:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `payment_number` varchar(255) NOT NULL,
  `payment_secret` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'testssss', 'testssss', '2023-05-27 09:44:00', '2023-05-27 09:48:54'),
(3, 'ss', 'ss', '2023-05-27 09:45:35', '2023-05-27 09:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `name`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', 'test', 'aasdasd', 'asdfasdfasdf', '0', '2023-06-14 13:11:58', '2023-06-14 13:11:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_09_164227_create_roles_table', 1),
(5, '2021_04_10_120357_create_categories_table', 1),
(6, '2021_04_10_124002_create_locations_table', 1),
(7, '2021_04_10_130141_create_books_table', 1),
(8, '2021_04_15_195204_create_carts_table', 1),
(9, '2021_04_15_205712_create_checkouts_table', 1),
(10, '2021_04_16_063300_create_messages_table', 1),
(11, '2023_06_18_182338_create_authors_table', 2);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `payment_number` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `payment`, `payment_number`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '019832323', 'Bkash', '01820322323', '1', NULL, '$2y$10$JTg4ohgK1HzcugJiuRpxqeG0TJJjloc9TBEh1Wr7DqC0OxxYhLRgC', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', '019832323', 'Bkash', '01820322323', '2', NULL, '$2y$10$JsReIbIL/58o6J0hoPoTp.AYpKYAa64.P1tWuGeUKLOw/Wc8HfiyC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
