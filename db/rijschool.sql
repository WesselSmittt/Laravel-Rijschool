-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rijschool`
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
-- Table structure for table `instructeurs`
--

CREATE TABLE `instructeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voornaam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tussenvoegsel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achternaam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobiel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum_in_dienst` date NOT NULL,
  `aantal_sterren` int(11) NOT NULL,
  `voertuig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_actief` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructeurs`
--

INSERT INTO `instructeurs` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `mobiel`, `datum_in_dienst`, `aantal_sterren`, `voertuig`, `is_actief`, `created_at`, `updated_at`) VALUES
(1, 'Li', '', 'Zhan', '06-28493827', '2015-04-17', 3, NULL, 1, '2024-01-24 13:45:15', '2024-01-29 08:12:52'),
(2, 'Leroy', '', 'Boerhaven', '06-39398734', '2018-06-25', 1, NULL, 1, '2024-01-24 13:45:15', '2024-01-24 13:45:15'),
(3, 'Yoeri', '', 'Van Veen', '06-24383291', '2010-05-12', 3, NULL, 1, '2024-01-24 13:45:15', '2024-01-29 08:12:49'),
(4, 'Bert', 'Van', 'Sali', '06-48293823', '2023-01-10', 4, NULL, 1, '2024-01-24 13:45:15', '2024-01-29 08:12:26'),
(5, 'Mohammed El', '', 'Yassidi', '06-34291234', '2010-06-14', 5, NULL, 1, '2024-01-24 13:45:15', '2024-01-29 08:39:27');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_09_104544_create_instructeurs_table', 1),
(6, '2024_01_23_183314_create_type_voertuigs_table', 1),
(7, '2024_01_23_183345_create_voertuigs_table', 1),
(8, '2024_01_23_183434_create_voertuig_instructeurs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_voertuigs`
--

CREATE TABLE `type_voertuigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_voertuig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rijbewijscategorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_voertuigs`
--

INSERT INTO `type_voertuigs` (`id`, `type_voertuig`, `rijbewijscategorie`, `created_at`, `updated_at`) VALUES
(1, 'Personenauto', 'B', NULL, NULL),
(2, 'Vrachtwagen', 'C', NULL, NULL),
(3, 'Bus', 'D', NULL, NULL),
(4, 'Bromfiets', 'AM', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voertuigs`
--

CREATE TABLE `voertuigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kenteken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bouwjaar` date NOT NULL,
  `brandstof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_voertuig_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voertuigs`
--

INSERT INTO `voertuigs` (`id`, `kenteken`, `type`, `bouwjaar`, `brandstof`, `type_voertuig_id`, `created_at`, `updated_at`) VALUES
(1, 'AU-67-IO', 'Golf', '2017-06-12', 'Diesel', 1, '2024-01-24 13:45:15', '2024-01-24 13:45:15'),
(2, '45-SD-23', 'Renault', '2023-01-01', 'Diesel', 3, '2024-01-24 13:45:15', '2024-01-24 13:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `voertuig_instructeurs`
--

CREATE TABLE `voertuig_instructeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voertuig_id` bigint(20) UNSIGNED NOT NULL,
  `instructeur_id` bigint(20) UNSIGNED NOT NULL,
  `datum_toekenning` date NOT NULL,
  `is_actief` tinyint(1) NOT NULL DEFAULT 1,
  `opmerking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `instructeurs`
--
ALTER TABLE `instructeurs`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `type_voertuigs`
--
ALTER TABLE `type_voertuigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voertuigs`
--
ALTER TABLE `voertuigs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voertuigs_type_voertuig_id_foreign` (`type_voertuig_id`);

--
-- Indexes for table `voertuig_instructeurs`
--
ALTER TABLE `voertuig_instructeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voertuig_instructeurs_voertuig_id_foreign` (`voertuig_id`),
  ADD KEY `voertuig_instructeurs_instructeur_id_foreign` (`instructeur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructeurs`
--
ALTER TABLE `instructeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_voertuigs`
--
ALTER TABLE `type_voertuigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voertuigs`
--
ALTER TABLE `voertuigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voertuig_instructeurs`
--
ALTER TABLE `voertuig_instructeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voertuigs`
--
ALTER TABLE `voertuigs`
  ADD CONSTRAINT `voertuigs_type_voertuig_id_foreign` FOREIGN KEY (`type_voertuig_id`) REFERENCES `type_voertuigs` (`id`);

--
-- Constraints for table `voertuig_instructeurs`
--
ALTER TABLE `voertuig_instructeurs`
  ADD CONSTRAINT `voertuig_instructeurs_instructeur_id_foreign` FOREIGN KEY (`instructeur_id`) REFERENCES `instructeurs` (`id`),
  ADD CONSTRAINT `voertuig_instructeurs_voertuig_id_foreign` FOREIGN KEY (`voertuig_id`) REFERENCES `voertuigs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
