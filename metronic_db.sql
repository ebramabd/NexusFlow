-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2025 at 04:02 PM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_03_26_115531_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'View Dashboard', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(2, 'List Users', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(3, 'Create Users', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(4, 'Update Users', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(5, 'Delete Users', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(6, 'List Roles', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(7, 'View Roles', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(8, 'Create Roles', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(9, 'Update Roles', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(10, 'Delete Roles', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(11, 'List Permissions', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(12, 'Create Permissions', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(13, 'Delete Permissions', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(2, 'Manager', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(3, 'Default User', 'web', '2025-03-29 18:19:29', '2025-03-29 18:19:29'),
(7, 'Creator', 'web', '2025-03-29 19:46:15', '2025-03-29 19:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(1, 3),
(2, 3),
(1, 7),
(2, 7),
(3, 7),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '2025-03-29 18:19:30', '$2y$12$NLWpnyuMHB3ZYnA6pWET3.isb0L/Na4YPvEMp3IB.IJg/fRtp4k76', '1234567890', NULL, '2025-03-29 18:19:30', '2025-03-29 18:19:30'),
(2, 'Manager', 'manager@gmail.com', '2025-03-29 18:19:30', '$2y$12$UIqVoB50MdQaoO/icdRo4ubhefLwT8825m/C9lDQGxbGaO85c8WeO', '01122334455', NULL, '2025-03-29 18:19:30', '2025-03-29 18:19:30'),
(3, 'samuel', 'user@user.com', '2025-03-29 18:19:30', '$2y$12$WOmlR410GYTfVPB/gH1XH.tZ7X563YDKoKBZpE7UCp2n68nt3Ikum', '(283) 559-6984', 'biqmmz2cpdHB2cgnIrHRXYfxQm6bbxYFtNSosymWhm9zusydkFbMnneO3z32', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(4, 'Prof. Bernardo Wehner', 'willa17@example.net', '2025-03-29 18:19:31', '$2y$12$5mfOGR7UMl1IPILQuImBGeyshL9OM01d3BCMagez0SDJRtlSezmbS', '+1-561-653-7921', 'Hv7dvJNEmG', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(5, 'Evelyn Fadel', 'sylvester58@example.org', '2025-03-29 18:19:31', '$2y$12$xifxwMs9mmarunTcvv7F3ujMBtX0ZydGfIH1usMh4ORmTH.O9qxNq', '1-916-695-8732', 'hE8GopLlVL', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(6, 'Sylvester O\'Connell', 'littel.eryn@example.org', '2025-03-29 18:19:31', '$2y$12$P59iNfHZLE9hRW6xv2VYRuvoc7EYHKL2OjpFH3V4x7FYT064gUpam', '+1-414-701-9336', 'hVyPDZDAvd', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(7, 'Prof. Genoveva McLaughlin II', 'nitzsche.princess@example.com', '2025-03-29 18:19:31', '$2y$12$J17JWxAypv79qTQ20QNBHOxUS/yu8P6xPXi9IiPlU.jgexLm5DZRm', '443-834-7093', 'jfEyf9wxIS', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(8, 'Dr. Desmond Robel PhD', 'hbreitenberg@example.net', '2025-03-29 18:19:32', '$2y$12$jGM5thPM9Bww6AAqbz7ROeDl615iiTRHwKWaaQWaagVfy8flgd/9.', '+1-252-722-9356', 'iqglmAWstj', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(9, 'Keira Corkery', 'kelsie.romaguera@example.net', '2025-03-29 18:19:32', '$2y$12$.bfaGg2LfhoJWa064jk9huADTDBHI7MuBTxpkurcVDymAIk7yK6WK', '+1-260-928-4240', 'RXHjZNxyZH', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(10, 'Jordan Padberg', 'ogoodwin@example.org', '2025-03-29 18:19:32', '$2y$12$ifFC.Dc6TKHbGmtYZ0dGE.6CxI87mHkWQVXn0f2W9AZ613HATekR.', '+1 (740) 622-2840', '0kJXD2LrIv', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(11, 'Dr. Antonetta Pfannerstill', 'johnpaul28@example.com', '2025-03-29 18:19:33', '$2y$12$KPaeAK1ShhqbVg1G.Osgp.oR8fkABOoTQbG2j3sUchYZ76AAWWaTe', '+17709124370', 'GoUF2U82AM', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(12, 'Lavinia Kuhlman PhD', 'corwin.malika@example.net', '2025-03-29 18:19:33', '$2y$12$vVBgk0/4dY/AQ0lOBfdQQOX3tWwFVVGonZhDT.AtDEEwAAKYVH/N.', '+1-847-837-8908', 'Q13Dxb8Sme', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(13, 'Angelica Gleason', 'bednar.golden@example.net', '2025-03-29 18:19:33', '$2y$12$w/AEdANDBaZXPcza8QVlM.0NkPFKPNxSN0eiNhO4a9iQyrhd3fib6', '+1.458.386.9122', 'zyIjEODGya', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(14, 'Odell Swift', 'qtreutel@example.net', '2025-03-29 18:19:33', '$2y$12$AKXrEH1Cz5imLj5LlonRROMxclCqTP5HL6tYEvIaLwpvHGC.itGg6', '(541) 573-6524', 'USYQIucT0v', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(15, 'Alanis Runolfsdottir', 'oberbrunner.thora@example.org', '2025-03-29 18:19:34', '$2y$12$s5QXfOqMTA2SBhdNVIBEFe4j85dAlGUkfH2FEJr680C1vgCAfvNEO', '680.684.7383', 'qhxF7vbH5v', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(16, 'Prof. Eleanora Parker V', 'orn.shakira@example.net', '2025-03-29 18:19:34', '$2y$12$gUixP7E4oqByWPZggwz6cO5c1Pnu.YT2e9cLc28BIAb1ew7E2.1IG', '+14096735617', 'Bh6Y9pwShi', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(17, 'Dennis Rodriguez PhD', 'verlie10@example.com', '2025-03-29 18:19:34', '$2y$12$GOS2HswnV3MTJw3WtXrWqewI.fODKjlVzgV4cpcMNyBIGmEeWE92K', '+1 (651) 491-2763', 'Zhir7DiZb1', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(18, 'Prof. Lue Baumbach', 'mcglynn.daisha@example.com', '2025-03-29 18:19:34', '$2y$12$Ei5vq7byNS2NiEt2q6pxKOUeXqlw2kMjB/tqqVLL5RM07ZcHEsB1y', '+1.534.696.2236', 'kBdmTr5d2P', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(19, 'Kallie Jaskolski DDS', 'heidi04@example.com', '2025-03-29 18:19:35', '$2y$12$ZbNdb2HIKzrEEc/Ie52IYefRwJYM6EvDZyZfZu.FWIlYQXEfYdpRG', '1-316-934-9195', 'NlF6xBd8Sl', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(20, 'Marisa Hane Jr.', 'qwehner@example.org', '2025-03-29 18:19:35', '$2y$12$TKEh.9Vh944UAnOJ4/2VMORS4hbNEaaK1TwPSt0qER86wTcMG4Wh6', '(660) 687-6087', 'L3h5eT9yLP', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(21, 'Candido Hane', 'gust.hodkiewicz@example.net', '2025-03-29 18:19:35', '$2y$12$4aTMbozYO1L3.EjMb97dreZ4GfSVOhLjQGPjwiuy4F.AIjvM9OIxS', '+1-918-354-1233', 'ZIi7ls0D5E', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(22, 'Aubrey Brakus', 'tryan@example.org', '2025-03-29 18:19:36', '$2y$12$ztAYWpdEU1OzX5rPnlFiBO4e2DZ8Ekqb8zSAt760rF5s.tMU76wOC', '+1 (360) 780-6324', 'SUSRitr9U6', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(23, 'Cayla Schimmel', 'huel.yasmine@example.org', '2025-03-29 18:19:36', '$2y$12$3k7/YT3KTuckFNiRNCDDdO7.vnB543Bxp.8gjKWhj9kyAIZmzpAG6', '+1-231-932-6929', '30SriKP6GE', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(24, 'Fidel Rohan', 'dsporer@example.net', '2025-03-29 18:19:36', '$2y$12$4YSXOx1UIx4U/qFSfqKUUOC5QvMDGYFomTic.u0YNmCHnr/Vj2/5i', '408-572-1288', 'VwkCW51fGJ', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(25, 'Yasmeen Upton', 'bbosco@example.com', '2025-03-29 18:19:36', '$2y$12$PEpPlMOZqevlEy/skwu9DO9RHnw1Y1iWM9FcERYjRspoc/KKW7LP2', '+1-820-457-3118', 'PFIyo1seH7', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(26, 'Prof. Kristopher Balistreri IV', 'temmerich@example.org', '2025-03-29 18:19:37', '$2y$12$CcnbVHA4oy35Bi77Nbcuzulge//Q5DYC157EP9mFtD/UhIPITL4O2', '+1.847.290.3251', 'OJePCWST4O', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(27, 'Allen Rutherford', 'icie.dare@example.org', '2025-03-29 18:19:37', '$2y$12$4zHI6NvW9SZveeGQ3u/7Ie.Um5dc3XG.RrGhdoiOMq12zXLnS7dIq', '+1-534-553-4237', 'uxoodb0pQ0', '2025-03-29 18:19:42', '2025-03-29 18:19:42'),
(28, 'Prof. Elody Durgan I', 'tconnelly@example.org', '2025-03-29 18:19:37', '$2y$12$BVGUDqqEul3ciS7hc52B7eyxBsz1XWh89fruRY.xkHRE.sptX/q8i', '+1.218.264.9496', '4HZw3Ghtuq', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(29, 'Prof. Clifton Leffler IV', 'karley.damore@example.org', '2025-03-29 18:19:38', '$2y$12$mOUZu26gJRTbfdh0yfqsqeFWTuLAD75b2b3aYgiwyTQBEHALflqom', '+1-484-961-2628', 'aaQp0M7aMq', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(30, 'Alda Auer DVM', 'mertie.sawayn@example.com', '2025-03-29 18:19:38', '$2y$12$oswZCyHg8K9AbPh1QjeAcO6JhSKS3RUoDSBgD1GRUTAdSTCpbCAtS', '847-669-4241', 'VUDxSbS6B5', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(31, 'Mr. Ubaldo Langosh', 'obradtke@example.com', '2025-03-29 18:19:38', '$2y$12$zT4mNBn3p6y5fkZdxjtZhuvreyjdcprCPc5DpUG3S9EVBOpR85p8u', '1-747-355-6683', '7iu7GSnIsx', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(32, 'Clotilde Stamm Jr.', 'stacy.waters@example.net', '2025-03-29 18:19:38', '$2y$12$Hlcj/5n4v0LHo45oKDh6LuQwD8AwN9B72QAGT49bs73.eMn3OaKG.', '240.429.9759', 'woJy53I4GF', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(33, 'Dr. Velda Flatley', 'jannie36@example.net', '2025-03-29 18:19:39', '$2y$12$5OW20S.VtKqL5VvpXNFl.u9BFLVfVvg5rZteAZE694BPDQ3M4ypTG', '1-220-616-4458', 'kzU2KvbFNH', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(34, 'Jasen Satterfield IV', 'haskell.torphy@example.org', '2025-03-29 18:19:39', '$2y$12$4P7PYg0/lh2Nqq0Z7yB43OdXhpAv3etlqPh2Ps2DDkU1TwRhOVIAW', '305.236.1043', 'Q0ni3HA8Oh', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(35, 'Mrs. Francesca Keebler', 'johanna.moen@example.com', '2025-03-29 18:19:39', '$2y$12$NwdOTn5FLCQyzplhn.tPkukK1Mh6vQ0/yhJZoTinNdK9Nn0SuyRPa', '+1-478-502-8274', 'JDntwCV2rT', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(36, 'Jazlyn Orn', 'klocko.virgie@example.net', '2025-03-29 18:19:39', '$2y$12$JdFxZaOfwjAfcnbZHIG8..rRSA5SIGcKNLtBP7z123Q35p4./DoPK', '479.613.3390', 'rBG4WX9ZUu', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(37, 'Mireya Kuhic', 'godfrey.okeefe@example.com', '2025-03-29 18:19:40', '$2y$12$cp8CKPiZeAF2qPHSsp7jZO6NYCLUFPPd4maOrBuWKI5AHhPC4X.O2', '609-360-2907', '8XTQuXrMGy', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(38, 'Frances Price', 'zboncak.alejandra@example.com', '2025-03-29 18:19:40', '$2y$12$b6hkEioLzBhZpBX1jNzuu.dMw69vFQ1x1heHrGPXOsezAL6FfFlCK', '1-224-208-2685', 'wOPoaaP46G', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(39, 'Miss Beaulah Steuber', 'lherzog@example.net', '2025-03-29 18:19:40', '$2y$12$4vlhHtXW1rOEZVdjI4JUO.Q59IP.gz8EXWufZ3Luc9k9hjDIrfNoO', '1-479-524-0656', 'Yn91FhC7jv', '2025-03-29 18:19:43', '2025-03-29 18:19:43'),
(40, 'Prof. Dante Moris', 'mabbott@example.net', '2025-03-29 18:19:41', '$2y$12$FZnePbp/5yntt9VYcELYt.DIvUqqhpcs6j8cbgrDmfVo3nn5rUO9e', '308.527.1092', 'WPfz0qDDjt', '2025-03-29 18:19:43', '2025-03-29 18:23:30'),
(41, 'Mrs. Zelda Muelle', 'durgan.callie@example.org', '2025-03-29 18:19:41', '$2y$12$sWvgMNj0Cs0RPfTuB3lKruW47.hekH739gd/psB23kqXmwqsPBtYu', '1-480-618-0790', '2y4OX3F9MF', '2025-03-29 18:19:43', '2025-03-29 18:23:19'),
(42, 'Laverna Grant', 'test@gmail.com', '2025-03-29 18:19:42', '$2y$12$HzqEsX85icNRixZbol3OXO1GH5hYQ6K20z.bpq8XLbjjkxSgb3HFq', '262.976.2879', 'HLmZpgISfLZpW3RWJytP7uXM4oA2F89p2xJFkPjBNcLrWrxUtixLMFKJ16uk', '2025-03-29 18:19:43', '2025-03-29 18:23:50');

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
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
