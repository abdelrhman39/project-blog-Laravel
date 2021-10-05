-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 01:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_special1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition_special1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_special2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition_special2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_special3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition_special3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_special4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definition_special4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `img`, `special1`, `icon_special1`, `definition_special1`, `special2`, `icon_special2`, `definition_special2`, `special3`, `icon_special3`, `definition_special3`, `special4`, `icon_special4`, `definition_special4`, `created_at`, `updated_at`) VALUES
(1, '615b91868c6352.62967446.png', 'Data Analysis', '615b915f42d767.97511611.png', 'Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter', 'Data Reporting', '615b915f4315e5.41970705.png', 'Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter', 'Web Analytics', '615b915f435464.70953866.png', 'Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter', 'SEO Suggestions', '615b915f4392e3.84087538.png', 'Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter', NULL, '2021-10-04 21:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `about_me`, `created_at`, `updated_at`) VALUES
(1, '012-409-376-45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores', NULL, '2021-10-04 21:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brief_summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `company_name`, `special1`, `special2`, `brief_summary`, `img`, `created_at`, `updated_at`) VALUES
(1, 'SPACE DYNAMIC', 'Data Analysis', 'Data Reporting', 'Space Dynamic is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template is free for you provided by TemplateMo.', '615b9136cdecd2.64611437.png', NULL, '2021-10-04 21:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `message_contacts`
--

CREATE TABLE `message_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_contacts`
--

INSERT INTO `message_contacts` (`id`, `name`, `subject`, `email`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Ivy Noel', 'Fleming', 'pejetaxode@mailinator.com', 'Quia natus nulla mol', '2021-10-04 19:22:06', '2021-10-04 19:22:06'),
(6, 'Kylynn Andrews', 'Dean', 'nofuzomen@mailinator.com', 'Commodi cillum dolor Commodi cillum dolor\r\nCommodi cillum dolorCommodi cillum dolor', '2021-10-04 20:30:05', '2021-10-04 20:30:05'),
(7, 'Buffy Caldwell', 'Dyer', 'pozigocovo@mailinator.com', 'Fugiat reiciendis v', '2021-10-04 20:31:32', '2021-10-04 20:31:32'),
(8, 'Kasimir Maldonado', 'Weber', 'fexaz@mailinator.com', 'Maxime laborum aliqu', '2021-10-04 21:32:58', '2021-10-04 21:32:58'),
(9, 'Chloe Holder', 'Morin', 'pamiku@mailinator.com', 'In eos omnis necess', '2021-10-04 21:35:09', '2021-10-04 21:35:09'),
(10, 'Michael Fischer', 'Carter', 'goditidusy@mailinator.com', 'Molestiae porro do e', '2021-10-04 21:48:50', '2021-10-04 21:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2021_10_01_180458_create_posts_table', 1),
(15, '2021_10_02_203733_create_roles_table', 1),
(16, '2021_10_03_112703_create_headers_table', 1),
(17, '2021_10_03_125416_create_abouts_table', 1),
(18, '2021_10_03_160756_create_services_table', 1),
(19, '2021_10_04_163700_create_portfolios_table', 2),
(20, '2021_10_04_182113_create_contacts_table', 3),
(21, '2021_10_04_190845_create_message_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `img`, `work_name`, `description_work`, `created_at`, `updated_at`) VALUES
(8, '615b928e7b13d1.16883049.png', 'Data Analysis', 'Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter', '2021-10-04 16:11:49', '2021-10-04 21:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `img`, `created_at`, `updated_at`) VALUES
(2, 'Voluptates nostrum vitae cupiditate.2', 'Quis voluptatem rerum ipsum dolorum eum pariatur. Aliquam vitae aut cumque qui quaerat consectetur. Nulla a ut error.', '4.jpg', '2021-10-04 19:16:36', '2021-10-04 19:21:21'),
(3, 'Et odio est.', 'Dolor porro magnam laboriosam facilis quam laudantium. Laboriosam repellat et eligendi quasi omnis sed vel accusantium.', '7.jpg', '2021-10-04 19:16:36', '2021-10-04 19:16:36'),
(4, 'Eos ullam hic facere.', 'Officia voluptas nam aut. Molestias sint ut voluptatem aspernatur numquam quia minus. Deleniti ullam et itaque sit perspiciatis. Vel quo cum facere eum.', '3.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(5, 'Ipsa et.', 'Molestiae assumenda et quae aliquam. Ducimus vitae consequatur sunt temporibus est a porro. Dolorem ut nesciunt quasi mollitia porro. Quia fugiat libero saepe corporis aut.', '3.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(6, 'Debitis cum accusantium.', 'Facilis sint ipsam et quas. Beatae veritatis quis et repellat in sit. Minus sed maxime et et optio.', '10.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(7, 'Libero distinctio aut.', 'Officiis dolor dolorum voluptatibus consequatur tempora fuga occaecati. Molestiae unde qui maxime aut eos aspernatur. Nisi qui non itaque est. Aut voluptas aut magni non natus architecto possimus laboriosam.', '9.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(8, 'Et accusamus et.', 'Eligendi aut fuga fugiat dolorem dicta molestiae consequatur et. Sunt eos autem doloribus. In perspiciatis quis eligendi veniam deleniti occaecati.', '7.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(11, 'Ratione quibusdam ducimus.', 'Voluptatem consequuntur modi excepturi dolorum non est. Voluptatem deleniti et eligendi voluptate sit. Dolores autem repellat voluptatum ipsam dolore libero sunt.', '1.jpg', '2021-10-04 19:16:37', '2021-10-04 19:16:37'),
(12, 'Quibusdam atque.', 'Rerum voluptatem quis perferendis natus vel. Voluptate voluptatum consequatur ut quo velit nulla. Eos minus voluptatem vel porro ut quia labore. Enim veniam nobis animi accusamus velit minima.', '6.jpg', '2021-10-04 19:16:38', '2021-10-04 19:16:38'),
(13, 'Rerum corporis velit.', 'Praesentium voluptate voluptatem voluptatem quisquam. Quod labore quibusdam aut quia. Minus corporis commodi totam.', '6.jpg', '2021-10-04 19:16:38', '2021-10-04 19:16:38'),
(14, 'Quia culpa voluptas.', 'Autem nemo ea quas reiciendis ut. Repellendus doloribus eveniet molestiae assumenda. Quibusdam et voluptas impedit molestiae quod saepe dolore. Reprehenderit voluptate et tempora amet quo ut necessitatibus.', '12.jpg', '2021-10-04 19:16:38', '2021-10-04 19:16:38'),
(15, 'Ut repudiandae harum vitae.', 'Eius occaecati et aperiam sunt. Beatae doloribus facere est a consectetur reiciendis mollitia. Aut culpa culpa sit voluptates ab ut quia. Et eum officiis eos id enim in nobis.', '11.jpg', '2021-10-04 19:16:38', '2021-10-04 19:16:38'),
(17, 'Nostrum dolorem provident.', 'Sapiente aut excepturi ipsum aliquid repellendus expedita. Eos magnam voluptatibus natus consectetur.', '3.jpg', '2021-10-04 19:16:39', '2021-10-04 19:16:39'),
(19, 'Aspernatur corporis inventore hic.', 'Eligendi blanditiis velit eius qui et. Aut quisquam saepe ipsa. Rerum velit suscipit voluptas atque iure non iure. Commodi sunt occaecati quas expedita cupiditate nostrum dignissimos iusto.', '9.jpg', '2021-10-04 19:16:39', '2021-10-04 19:16:39'),
(20, 'Voluptate placeat laudantium est.', 'Est similique at aut. Quo quae quia et delectus. Id debitis et explicabo nobis harum. Et saepe voluptate est eos.', '1.jpg', '2021-10-04 19:16:39', '2021-10-04 19:16:39'),
(22, 'Perspiciatis cum sint.', 'Quos et reiciendis quibusdam ullam est mollitia. Aspernatur rerum rerum provident ut dolorem nam. Sunt sed sapiente voluptate veritatis.', '8.jpg', '2021-10-04 19:16:40', '2021-10-04 19:16:40'),
(23, 'Adipisci qui quo.', 'Non mollitia natus eligendi minus sapiente similique. Temporibus sapiente deserunt nobis aliquid cum harum. Sint autem explicabo iusto voluptas.', '10.jpg', '2021-10-04 19:16:40', '2021-10-04 19:16:40'),
(26, 'Aut omnis et.', 'Similique eum dolorum magnam exercitationem quo ea repellat est. Delectus et est repellendus adipisci. Voluptate aliquid quo quia cum assumenda qui quos atque. Consequuntur aut libero pariatur alias.', '6.jpg', '2021-10-04 19:16:40', '2021-10-04 19:16:40'),
(27, 'Voluptatum qui quam.', 'Aut delectus qui pariatur et cumque alias. Facilis vero rem odit qui excepturi sapiente. Harum perferendis rem ullam ut.', '3.jpg', '2021-10-04 19:16:40', '2021-10-04 19:16:40'),
(28, 'Commodi iure.', 'Nesciunt velit sit molestiae qui et. Rerum quae maiores reprehenderit aliquid. Dolor modi sed culpa ipsa.', '11.jpg', '2021-10-04 19:16:40', '2021-10-04 19:16:40'),
(29, 'Vitae ad explicabo.', 'Labore qui beatae numquam qui fugit. In eligendi velit ducimus voluptatem omnis. Et error quis et velit voluptates.', '3.jpg', '2021-10-04 19:16:41', '2021-10-04 19:16:41'),
(30, 'Corporis porro temporibus dignissimos.', 'Veritatis ducimus rerum nihil quos odio iure aspernatur. Quasi id voluptatem impedit nihil autem.', '6.jpg', '2021-10-04 19:16:41', '2021-10-04 19:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_definition` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `services1_progress` int(11) NOT NULL,
  `services2_progress` int(11) NOT NULL,
  `services3_progress` int(11) NOT NULL,
  `services4_progress` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `img`, `service1`, `service2`, `service_definition`, `services1_progress`, `services2_progress`, `services3_progress`, `services4_progress`, `created_at`, `updated_at`) VALUES
(1, '615b9214cbe5e8.52248504.png', 'SEO Service', 'Project Ideas', 'Space Dynamic HTML5 template is free to use for your website projects. However, you are not permitted to redistribute the template ZIP file on any CSS template collection websites. Please contact us for more information. Thank you for your kind cooperation.', 84, 77, 94, 80, NULL, '2021-10-04 21:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'abdelrhmana twa', 'admin@admin.com', NULL, '$2y$10$PC5wIsUN8mn4.Jn4QKauA.MNoD37ALqY8OSHXc04CWnMSapto.Qni', 1, NULL, '2021-10-04 14:31:00', '2021-10-04 14:31:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_contacts`
--
ALTER TABLE `message_contacts`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_contacts`
--
ALTER TABLE `message_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
