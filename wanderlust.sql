-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 01:03 AM
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
-- Database: `traveling`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`about_id`, `name`, `position`, `hotel_name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Md.Jeshan Khan', 'CEO Of', 'WanderLust', 'R-94139.png', '<p><br></p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/FxJ3zPUU6Y4\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', 1, '2024-11-27 18:12:17', '2024-11-27 18:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blog_header` varchar(255) NOT NULL,
  `blog_posted` varchar(255) NOT NULL,
  `user` varchar(2000) DEFAULT NULL,
  `blog_date` varchar(255) NOT NULL,
  `blog_short_description` varchar(255) NOT NULL,
  `blog_main_description` longtext NOT NULL,
  `blog_main_image` varchar(255) NOT NULL,
  `blog_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_header`, `blog_posted`, `user`, `blog_date`, `blog_short_description`, `blog_main_description`, `blog_main_image`, `blog_status`, `created_at`, `updated_at`) VALUES
(7, 'Sylhet', 'Jeshan Khan', NULL, '2024-11-19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/njntwyQtLNw\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p>', 'W-63944.jpg', 1, '2024-11-28 00:45:25', '2024-11-28 00:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `posted_by` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `name`, `email`, `day`, `date`, `destination`, `person`, `package_name`, `posted_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jeshan', 'granparadiso729@gmail.com', '5', '03-12-24', 'Sylhet', '1', 'Sylhet Tea Garden', 'Jeshan', 0, '2024-11-29 10:53:01', '2024-11-29 10:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('princessnaziah41@gmail.com123456789|::1', 'i:1;', 1732635471),
('princessnaziah41@gmail.com123456789|::1:timer', 'i:1732635471;', 1732635471);

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
-- Table structure for table `carosels`
--

CREATE TABLE `carosels` (
  `carosel_id` bigint(20) UNSIGNED NOT NULL,
  `header1` varchar(255) NOT NULL,
  `header2` varchar(255) NOT NULL,
  `header3` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carosels`
--

INSERT INTO `carosels` (`carosel_id`, `header1`, `header2`, `header3`, `link`, `images`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Let\'s Explore Together', 'Best Travel Package', 'Are You Ready ?', 'lets-explore-together', 'B-91332.jpg', '1', '2024-11-27 18:01:38', '2024-11-27 18:01:38'),
(7, 'Hey....', 'You Want To Know', 'Let\'s Explore', 'hey', 'N-70663.jpg', '1', '2024-11-27 18:09:33', '2024-11-27 18:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`contract_id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jeshan Khan', 'jeshan@gmail.com', 'Greeting', 'Plz Contract With Me.', 1, '2024-11-28 00:59:15', '2024-11-28 00:59:15'),
(2, 'Muntaha Tabassum', 'shop@gmail.com', 'Greeting', 'Hello', 1, '2024-11-28 01:00:55', '2024-11-28 01:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `destination_place` varchar(255) NOT NULL,
  `destination_image` varchar(255) NOT NULL,
  `user` varchar(2000) DEFAULT NULL,
  `destination_status` int(11) NOT NULL DEFAULT 1,
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
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `guide_id` bigint(20) UNSIGNED NOT NULL,
  `guide_name` varchar(255) NOT NULL,
  `guide_fb` varchar(255) NOT NULL,
  `guide_instagram` varchar(255) NOT NULL,
  `guide_linkdln` varchar(255) NOT NULL,
  `place` varchar(2000) NOT NULL,
  `user` varchar(2000) DEFAULT NULL,
  `guide_twitter` varchar(255) NOT NULL,
  `guide_image` varchar(255) NOT NULL,
  `guide_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`guide_id`, `guide_name`, `guide_fb`, `guide_instagram`, `guide_linkdln`, `place`, `user`, `guide_twitter`, `guide_image`, `guide_status`, `created_at`, `updated_at`) VALUES
(9, 'Muntaha', 'https://web.facebook.com/profile.php?id=100079122745690', 'https://www.instagram.com/tabassumuntaha/', 'rgr', 'Sylhet', NULL, 'grgrg', 'Y-25757.jpg', 1, '2024-11-28 00:41:30', '2024-11-28 00:41:30'),
(10, 'Syed Amin', 'https://www.facebook.com/syedamin2003', 'https://www.instagram.com/syedamin2003/', 'ckbh;cd', 'Comilla', NULL, 'cbewwid', 'M-19313.jpg', 1, '2024-11-28 03:57:41', '2024-11-28 03:57:41'),
(11, 'Ihfaz', 'https://www.facebook.com/ihfaz.ahmed.1', 'https://www.instagram.com/the_fazboy/', 'wqcq', 'Dhaka', NULL, 'cwc', 'N-16871.jpg', 1, '2024-11-28 03:59:59', '2024-11-28 03:59:59'),
(12, 'Joy', 'https://www.facebook.com/anindapaul.joy', 'ebviwbviw', 'vevewv', 'Sylhet', NULL, 'evwv', 'V-31672.jpg', 1, '2024-11-28 04:02:25', '2024-11-28 04:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_16_160521_create_carosels_table', 2),
(5, '2024_11_19_234027_create_places_table', 3),
(6, '2024_11_21_045900_create_services_table', 4),
(8, '2024_11_22_163929_create_packages_table', 6),
(9, '2024_11_23_105003_create_destinations_table', 7),
(10, '2024_11_23_120440_create_guides_table', 8),
(11, '2024_11_23_234911_create_blogs_table', 9),
(12, '2024_11_24_120201_create_user_roles_table', 10),
(13, '2024_11_25_150156_create_testimonials_table', 11),
(14, '2024_11_26_002338_create_abouts_table', 12),
(15, '2024_11_28_021733_create_bookings_table', 13),
(16, '2024_11_28_064909_create_contracts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_slug` varchar(2000) NOT NULL,
  `place` mediumtext NOT NULL,
  `user` varchar(2000) DEFAULT NULL,
  `short_description` longtext NOT NULL,
  `package_images` varchar(255) NOT NULL,
  `main_description` longtext NOT NULL,
  `package_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_slug`, `place`, `user`, `short_description`, `package_images`, `main_description`, `package_status`, `created_at`, `updated_at`) VALUES
(10, 'Sylhet Tea Garden', 'sylhet-tea-garden', 'Sylhet', 'Jeshan', 'Nestled in the northeastern region of Bangladesh, the Sylhet Tea Gardens are a breathtaking expanse of lush greenery and rolling hills that captivate visitors with their natural beauty.', 'J-88378.jpg', '<h3>Sylhet Tea Garden: A Lush Paradise in Bangladesh</h3><p>Nestled in the northeastern region of Bangladesh, the <strong>Sylhet Tea Gardens</strong> are a breathtaking expanse of lush greenery and rolling hills that captivate visitors with their natural beauty. Renowned as the heart of the country’s tea industry, Sylhet is home to over 150 sprawling tea estates, including some of the oldest and largest in the world.</p><p>The gardens feature meticulously maintained tea plants stretching as far as the eye can see, creating a serene and picturesque landscape. The cool climate, misty mornings, and fertile soil provide the perfect conditions for cultivating high-quality tea, which is cherished both locally and internationally. Walking through the tea estates, you’ll encounter hard-working tea pickers gracefully collecting fresh leaves, a process steeped in tradition and culture.</p><p>Beyond the mesmerizing tea gardens, Sylhet offers scenic waterfalls, diverse wildlife, and a peaceful escape from urban life. It\'s not just a destination for tea lovers but also a haven for nature enthusiasts and travelers seeking tranquility amidst nature’s embrace.</p>', 1, '2024-11-27 18:32:52', '2024-11-27 18:32:52');

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_slug` varchar(255) NOT NULL,
  `place_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_name`, `place_slug`, `place_status`, `created_at`, `updated_at`) VALUES
(2, 'Sylhet', 'sylhet', 1, '2024-11-23 03:02:24', '2024-11-26 07:03:50'),
(3, 'Dhaka', 'dhaka', 1, '2024-11-23 03:02:28', '2024-11-23 03:02:28'),
(4, 'Rajshahi', 'rajshahi', 1, '2024-11-23 03:02:37', '2024-11-23 03:02:37'),
(5, 'Comilla', 'comilla', 1, '2024-11-23 03:02:41', '2024-11-23 03:02:41'),
(9, 'dwedwd', 'dwedwd', 0, '2024-11-26 17:36:30', '2024-11-26 17:36:33'),
(10, 'Sylhet', 'sylhet', 1, '2024-11-26 18:15:25', '2024-11-26 18:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_header` varchar(255) NOT NULL,
  `service_description` longtext NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_header`, `service_description`, `service_icon`, `service_status`, `created_at`, `updated_at`) VALUES
(6, 'WorldWide Tour', 'Looking for the perfect blend of quality and value? Our Best Package is designed to provide you with top-notch services tailored to meet your needs. Whether you\'re seeking efficiency, reliability, or exceptional results, this package guarantees the best solutions at an unbeatable price. Experience premium quality without compromise and elevate your expectations with our carefully crafted services.', 'Z-19220.png', 1, '2024-11-27 18:22:24', '2024-11-27 18:30:34');

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
('642aPFJ2gNBMXMEyZhlSw4f82Nmh3o12tsqq7McT', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0Nsd1hZNnp6Z1BYTHZQMnJGTUFIUjUyZjRUR09xaUxjRGZyQjNxNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3QvV2FuZGVyTHVzdC1Qcm9qZWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732899337),
('EIQOlHxUxxcwcWNEgRzKt2QpnwirVFZLeMD8GlFE', 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib3NGbW9TNnhqTGVxSnFTTTBpRWNSZWVmTkFvSnp1SVJIV092STNnQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvV2FuZGVyTHVzdC1Qcm9qZWN0L2Jsb2ctZGV0YWlscy83Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7fQ==', 1732902953);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_comment` varchar(255) NOT NULL,
  `client_location` varchar(255) NOT NULL,
  `user` varchar(2000) DEFAULT NULL,
  `client_image` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `client_name`, `client_comment`, `client_location`, `user`, `client_image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Muntaha Tabassum', 'The best clothing for men includes tailored suits, classic jeans, versatile blazers, comfortable t-shirts, and stylish sneakers for a modern look.', 'Bangladesh', NULL, 'C-82246.jpg', 1, '2024-11-28 00:46:09', '2024-11-28 00:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `phone`, `state`, `country`, `zipcode`, `image`, `address`, `user_role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Jeshan', 'Khan', '01607906754', 'Sylhet', 'Bangladesh', '3100', 'Black and White Circle Business Logo.jpg', 'Silver Village', 'admin', 'admin@gmail.com', '2024-11-16 07:48:21', '$2y$12$mhbgfUhlHD4CwxnICoI2o.1IS0HsgVi6pcVJLZyClFA2SxwoPU3Me', '8jOHbYN6HRQJNdeXEUp7jnW3yF04jIayLGk09UjK3AumaDtCmQNwyWfxA1YB', '2024-11-16 07:48:22', '2024-11-26 17:50:59', 1),
(10, 'Jeshan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'moderator', 'princessnaziah41@gmail.com', NULL, '$2y$12$msotcESpheIU6EYXFoRu/eoI1b8a.voOcf8mVmoRz5mmkwA9PRuI.', NULL, '2024-11-26 18:40:54', '2024-11-28 01:16:14', 1),
(11, 'Jeshan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'granparadiso729@gmail.com', NULL, '$2y$12$HxmioiGffhKRERct7kelE.eFaQMlnzuBEMABxh1ooEnOO1UB7DQAa', 'TZFkKYUJL6GNpg05xXlKyuZTXzUsd0MaL47uIsz6zOAxyFyfxfXYl2a6r6h8', '2024-11-29 10:33:27', '2024-11-29 10:47:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `user_type`, `user_status`, `created_at`, `updated_at`) VALUES
(5, 'admin', '1', '2024-11-26 06:25:03', '2024-11-26 06:25:03'),
(6, 'shop_kepper', '1', '2024-11-26 06:25:14', '2024-11-26 06:25:14'),
(7, 'moderator', '1', '2024-11-26 06:25:20', '2024-11-26 06:25:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

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
-- Indexes for table `carosels`
--
ALTER TABLE `carosels`
  ADD PRIMARY KEY (`carosel_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `about_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carosels`
--
ALTER TABLE `carosels`
  MODIFY `carosel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contract_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `guide_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
