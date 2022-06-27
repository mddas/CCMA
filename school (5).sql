-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2022 at 02:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `contents`, `image`, `feature`, `created_at`, `updated_at`) VALUES
(3, 'Radiant Manpower agency', 'The Radiant Manpower agency Pvt.Ltd. One of the reputed and leading manpower agencies in Nepal. Our company Established in 2007 under the Company Act 2053 B.S.(1996 A.D.) of Nepal Government Registration No. 163840/073/074 and Department of Foreign Employment. Government of Nepal with and License No.1253/074/075 And Under Nepal Association of Foreign Employment Agencies (NAFEA) member ID no.1201. It was established by the leading experts in the ﬁeld of recruitment service. Since the establishment, the company has gained vast experience in the ﬁeld of recruitment which has enabled it to be one of the reputed companies in the country. Within the short period of time company has owned remarkable achievement and has ensured the total satisfaction of many renewed companies and organization inside the country and overseas. Radiant Manpower agency. is Nepali manpower agency and This manpower won award by Nepal Government for Best recruitment Service in Nepal and got listed in Nepal\'s top 10 manpower. Radiant Manpower agency pvt.Ltd has dispatched thousands of professional (skilled, semi-skilled and unskilled) from Nepal to Qatar, U.A.E. (United Arab Emirates), Saudi Arabia, Kuwait, Oman, Bahrain, Malaysia, East Asia, Cyprus & Romania etc... Its highly qualiﬁed professional makes our clients get maximum output at minimum cost and eﬀort. Our clients can rely on us. We have never failed them in the past and will make it equally easy for them in future. We complete in the employment service industry by oﬀering a complete range of recruitment service.', '202206220428manpoweragency.jpeg', 'To solve the ever increasing unemployment problem of the nation.\r\n\r\nTo provide well experienced & skillful manpower to the client companies around the globe.\r\n\r\nTo utilise the skill & experience of the people for their betterment.\r\n\r\nTo focus on the upliftment of the basic living standard of the socially discriminated group of people.\r\n\r\nTo provide a better & reliable source of remittance to the nation.', '2022-06-21 22:43:43', '2022-06-21 22:43:43'),
(4, 'nepal', 'jgsd d jg', '202206220648barber.jpeg', 'iuyiuy', '2022-06-22 01:03:35', '2022-06-22 01:03:35'),
(5, 'About us', 'this is best companay', '202206220928manpoweragency.jpeg', 'feature', '2022-06-22 03:43:57', '2022-06-22 03:43:57'),
(6, 'About  My Company', 'ka ksdjhakjs hdkajshd kjjahsddasakjkdjd haas\r\nd\r\nasd asjdh kjajshd kahsdd', '202206221130cleaning.jpg', 'fkh aksahsdk kassdlk jajasskldj asd', '2022-06-22 05:45:21', '2022-06-22 05:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, '/images/banner/202206271130banner.jpg', '2022-06-27 05:45:31', '2022-06-27 05:45:31'),
(5, '/images/banner/202206271134banner1.jpg', '2022-06-27 05:49:46', '2022-06-27 05:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `common_pages`
--

CREATE TABLE `common_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadto` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_photo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `contents`, `manager_name`, `manager_photo`, `created_at`, `updated_at`) VALUES
(1, 'my Office Location', 'this ofiice is at Lokhandwala', 'Manoj das', '202206211917WhatsApp Image 2022-06-15 at 3.13.48 PM.jpeg', '2022-06-21 13:32:38', '2022-06-21 13:32:38'),
(2, 'My Contact', 'Kathmandu', 'Md', '202206211919WhatsApp Image 2022-06-15 at 3.13.48 PM.jpeg', '2022-06-21 13:34:01', '2022-06-21 13:34:01'),
(3, 'About my company', 'number :102709\r\ngmail:jhadkj@hs.com', 'Suraj', NULL, '2022-06-22 01:05:11', '2022-06-22 01:05:11'),
(4, 'About company', 'this is kjhkj jhs', 'manoj', NULL, '2022-06-22 03:43:05', '2022-06-22 03:43:05');

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
-- Table structure for table `galary_pages`
--

CREATE TABLE `galary_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploadto` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institute_details`
--

CREATE TABLE `institute_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `number` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(6000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_details`
--

INSERT INTO `institute_details` (`id`, `name`, `date`, `number`, `email`, `address`, `discription`, `logo`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Manoj das md', '2022-06-15', '980820809', 'mddasgudiya@gmail.com', 'Janakpur', 'he', NULL, NULL, '2022-06-24 12:59:49', '2022-06-25 05:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_required_post` int(10) DEFAULT NULL,
  `agent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `job_description`, `category_id`, `subcategory_id`, `qualification`, `salary`, `country`, `company_name`, `company_image`, `job_image`, `number_of_required_post`, `agent_name`, `created_at`, `updated_at`) VALUES
(20, 'waiter', 'waiter job', NULL, NULL, '+2', '4800', 'Usa', '5 star hotel pvt.ltd', '202206220710hotel.jpg', '202206220710hotel.jpg', 12, NULL, '2022-06-22 01:25:21', '2022-06-22 01:25:21'),
(21, 'Civil Engineer', 'construct the building', NULL, NULL, 'degree', '120000', 'Usa', 'USA construction pvt.ltd.', NULL, '202206220712constructor.jpeg', 19, NULL, '2022-06-22 01:27:37', '2022-06-22 01:27:37'),
(22, 'Security Guard', 'A Security Guard, or Security Officer, is responsible for protecting a person, organization or asset in the case of an incident. Their duties include monitoring a specific area, evicting trespassers and writing reports detailing any occurrences during their shift.The overall duty of a Security Guard is to protect a company’s property, employees and visitors. Here are some of their typical daily responsibilities that you can include in a job description:\r\n\r\nPatrolling and monitoring activities on the company’s premises regularly to discourage criminals and ensure the environment is safe and secure\r\nEvicting trespassers and violators and detaining perpetrators while following legal protocols before relevant authorities arrive to take over\r\nControlling the entrance and departure of employees, visitors and vehicles according to protocols\r\nMonitoring surveillance cameras to watch out for any disruptions or unlawful activities\r\nProviding detailed reports on daily activities and any incidents that may have occurred to management\r\nTesting security systems and, if needed, operating X-ray machines and metal detectors\r\nUsing provided communication devices such as two-way radios in a clear and concise manner\r\nPerforming CPR or first aid when needed', NULL, NULL, '+2', '120000', 'Malaysia', 'Secure the world', '202206220714security.jpeg', '202206220714security.jpeg', 12, NULL, '2022-06-22 01:29:09', '2022-06-22 01:29:09'),
(23, 'waiter', 'waiter job', NULL, NULL, '+2', '4800', 'Usa', '5 star hotel pvt.ltd', '202206220714hotel.jpg', '202206220714hotel.jpg', 12, NULL, '2022-06-22 01:29:21', '2022-06-22 01:29:21'),
(24, 'cleaner', 'clea', NULL, NULL, 'degree', '76', 'Malaysia', 'hjhjgjh g', '202206220925cleaning.jpg', '202206220925barber.jpeg', 76876, NULL, '2022-06-22 03:40:36', '2022-06-22 03:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Manoj das', 'mddasgudiya@gmail.com', 'please give me access of pending cloud hosting and domain noble-school.com', 'i have prorblem', '2022-06-22 00:52:15', '2022-06-22 00:52:15'),
(3, 'saroj', 'neplovip@gmail.com', 'jkhsdkj  h', 'skjdh', '2022-06-22 01:04:03', '2022-06-22 01:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `message_froms`
--

CREATE TABLE `message_froms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_froms`
--

INSERT INTO `message_froms` (`id`, `name`, `position`, `messages`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Manoj das', 'CHAirman', 'this is message', '/images/message_from/202206270621vest.jpg', '2022-06-27 00:22:10', '2022-06-27 00:36:25'),
(4, 'Md', 'Principal', 'this is message from Md', '/images/message_from/202206270703chairman.png', '2022-06-27 01:18:10', '2022-06-27 01:18:10');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_23_111151_create_permission_tables', 2),
(6, '2022_06_23_111902_create_admins_table', 2),
(7, '2022_06_24_073120_create_institute_details_table', 2),
(8, '2022_06_24_083241_create_links_table', 2),
(9, '2022_06_24_083302_create_seos_table', 2),
(10, '2022_06_24_083630_create_staff_table', 2),
(11, '2022_06_24_083956_create_students_table', 2),
(12, '2022_06_24_085643_create_categories_table', 2),
(13, '2022_06_24_085659_create_sub_categories_table', 2),
(14, '2022_06_25_174502_create_common_pages_table', 3),
(15, '2022_06_25_174528_create_video_pages_table', 3),
(16, '2022_06_25_174557_create_notice_pages_table', 3),
(17, '2022_06_25_180550_create_galary_pages_table', 3),
(18, '2022_06_27_051627_create_message_froms_table', 4),
(19, '2022_06_27_095305_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_pages`
--

CREATE TABLE `notice_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadto` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slidders`
--

CREATE TABLE `slidders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidders`
--

INSERT INTO `slidders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '/images/slidder/202206271036barber.jpeg', '2022-06-27 04:51:48', '2022-06-27 04:51:48'),
(7, '/images/slidder/202206271136md.jpg', '2022-06-27 05:51:02', '2022-06-27 05:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describes` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `describes`, `subject`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Manoj das', NULL, 'please give me access of pending cloud hosting and domain noble-school.com', '/images/staff/202206271238barber.jpeg', '2022-06-27 06:53:05', '2022-06-27 06:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `rank`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Manoj das', '7th Rank All Nepal Merit CAP-I Dec. 2017 Exam', '/images/student/202206271220vest.jpg', '2022-06-27 06:35:06', '2022-06-27 06:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manoj das', 'mddasgudiya@gmail.com', NULL, '$2y$10$CPqw1uZ3fJ4OgMvqfhUkye1eWnopeHiOwRV56hch2/pTv37OxBvUG', NULL, '2022-06-22 03:06:17', '2022-06-22 03:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `video_pages`
--

CREATE TABLE `video_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploadto` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
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
-- Indexes for table `common_pages`
--
ALTER TABLE `common_pages`
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
-- Indexes for table `galary_pages`
--
ALTER TABLE `galary_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_details`
--
ALTER TABLE `institute_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_froms`
--
ALTER TABLE `message_froms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notice_pages`
--
ALTER TABLE `notice_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidders`
--
ALTER TABLE `slidders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_pages`
--
ALTER TABLE `video_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `common_pages`
--
ALTER TABLE `common_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galary_pages`
--
ALTER TABLE `galary_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `institute_details`
--
ALTER TABLE `institute_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_froms`
--
ALTER TABLE `message_froms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notice_pages`
--
ALTER TABLE `notice_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slidders`
--
ALTER TABLE `slidders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_pages`
--
ALTER TABLE `video_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
