-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2020 at 06:17 PM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bglcbd_bgl`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_log`
--

CREATE TABLE `access_log` (
  `id` int(35) NOT NULL,
  `user_id` int(35) NOT NULL,
  `comapny_id` int(35) DEFAULT NULL,
  `acess_id` int(35) DEFAULT NULL,
  `count` int(35) DEFAULT NULL,
  `history` longtext NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_log`
--

INSERT INTO `access_log` (`id`, `user_id`, `comapny_id`, `acess_id`, `count`, `history`, `action`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 1, '{\"id\":1,\"siteTitle\":\"Creating Tomorrow and Beyond\",\"titlePrefix\":\"||\",\"siteName\":\"BGLC\",\"siteLogo\":\"images\\/site_logo\\/logo\\/Untitled-2_55639551209.png\",\"sitefavIcon\":\"images\\/site_logo\\/fav_icon\\/fav-icon_31218892371.png\",\"adminTitle\":\"Admin\",\"adminLogo\":\"images\\/admin_logo\\/main_logo\\/admin_logo_19244641365.png\",\"adminsmalLogo\":\"images\\/admin_logo\\/small_logo\\/small_logo_39805764778.png\",\"adminfavIcon\":\"images\\/admin_logo\\/fav_icon\\/fav-icon_13061964720.png\",\"mobile1\":\"11\",\"mobile2\":null,\"siteEmail1\":null,\"siteEmail2\":null,\"siteAddress1\":\"aaa\",\"siteAddress2\":\"aa\",\"copyright1\":null,\"copyright2\":null,\"sitestatus\":null,\"metaTitle\":\"Kites\",\"metaKeyword\":\"Garments manufacturer,Best garments supplier of bangladesh,Bangladesh best garments supplier,Quality garments manufacturer,Ready made garments manufacturer,World best garments supplier\",\"metaDescription\":\"KITES is a leading garments Buying, Manufacturer and exporter in Bangladesh. We provide our quality garments to many internationally reputable\",\"orderBy\":null,\"created_at\":null,\"updated_at\":\"2020-05-08 09:22:44\"}', 'Website Information Update', NULL, NULL, '2020-05-08 09:22:44', '2020-05-08 09:22:44'),
(2, 1, NULL, NULL, 1, '{\"id\":1,\"siteTitle\":\"Creating Tomorrow and Beyond\",\"titlePrefix\":\"||\",\"siteName\":\"BGLC\",\"siteLogo\":\"images\\/site_logo\\/logo\\/Untitled-2_55639551209.png\",\"sitefavIcon\":\"images\\/site_logo\\/fav_icon\\/fav-icon_31218892371.png\",\"adminTitle\":\"Admin\",\"adminLogo\":\"images\\/admin_logo\\/main_logo\\/admin_logo_19244641365.png\",\"adminsmalLogo\":\"images\\/admin_logo\\/small_logo\\/small_logo_39805764778.png\",\"adminfavIcon\":\"images\\/admin_logo\\/fav_icon\\/fav-icon_13061964720.png\",\"mobile1\":\"+88 01711961926\",\"mobile2\":null,\"siteEmail1\":\"bglc@nebcbd.net\",\"siteEmail2\":null,\"siteAddress1\":null,\"siteAddress2\":null,\"copyright1\":null,\"copyright2\":null,\"sitestatus\":null,\"metaTitle\":\"Kites\",\"metaKeyword\":\"Garments manufacturer,Best garments supplier of bangladesh,Bangladesh best garments supplier,Quality garments manufacturer,Ready made garments manufacturer,World best garments supplier\",\"metaDescription\":\"KITES is a leading garments Buying, Manufacturer and exporter in Bangladesh. We provide our quality garments to many internationally reputable\",\"orderBy\":null,\"created_at\":null,\"updated_at\":\"2020-05-09 05:54:57\"}', 'Website Information Update', NULL, NULL, '2020-05-09 05:54:57', '2020-05-09 05:54:57'),
(3, 1, NULL, NULL, 1, '{\"id\":1,\"siteTitle\":\"Creating Tomorrow and Beyond\",\"titlePrefix\":\"||\",\"siteName\":\"Bangladesh Global Learning Center\",\"siteLogo\":\"images\\/site_logo\\/logo\\/Untitled-2_55639551209.png\",\"sitefavIcon\":\"images\\/site_logo\\/fav_icon\\/fav-icon_31218892371.png\",\"adminTitle\":\"Admin\",\"adminLogo\":\"images\\/admin_logo\\/main_logo\\/admin_logo_19244641365.png\",\"adminsmalLogo\":\"images\\/admin_logo\\/small_logo\\/small_logo_39805764778.png\",\"adminfavIcon\":\"images\\/admin_logo\\/fav_icon\\/fav-icon_13061964720.png\",\"mobile1\":\"+88 01711961926\",\"mobile2\":null,\"siteEmail1\":\"bglc@nebcbd.net\",\"siteEmail2\":null,\"siteAddress1\":null,\"siteAddress2\":null,\"copyright1\":null,\"copyright2\":null,\"sitestatus\":null,\"metaTitle\":\"Kites\",\"metaKeyword\":\"Garments manufacturer,Best garments supplier of bangladesh,Bangladesh best garments supplier,Quality garments manufacturer,Ready made garments manufacturer,World best garments supplier\",\"metaDescription\":\"KITES is a leading garments Buying, Manufacturer and exporter in Bangladesh. We provide our quality garments to many internationally reputable\",\"orderBy\":null,\"created_at\":null,\"updated_at\":\"2020-05-12 05:49:12\"}', 'Website Information Update', NULL, NULL, '2020-05-12 05:49:12', '2020-05-12 05:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `roleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roleLevel` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `role`, `roleName`, `roleLevel`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jisan Ahmed', 'jisanahmed06@gmail.com', 'jisan', 1, 'Super User', 1, '$2y$10$KSdee7hzr.8uJB89YOyV7eKvQG6uXyD45P0Fpf.FNHv9q46VCXM0i', 1, NULL, '2019-08-30 21:43:55', '2020-03-20 23:02:07'),
(2, 'Admin', 'kites@nebcbd.net', 'Admin', 2, 'Admin', 2, '$2y$10$FazjgiFmfZ.dQeh7rY.TYuVWq80vi6VvNepY6EtIdVwsBOmlUydyS', 1, 'HftBsS0WaFhNaeki9GEnbTOdo99h14G9dS1WtBq9AJJkzUuSyNKsUxMufhEx', '2019-04-17 01:04:35', '2020-03-21 00:11:01'),
(9, 'Test', 'test@gmail.com', 'test', 3, 'Editor', 3, '$2y$10$amNfw3ugzCaLUfK1MaQnnuct5EKv4TAKcnZPEATXAGYQAcdaf/3Ta', 1, NULL, '2020-03-20 22:48:04', '2020-06-10 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `menuId` int(11) DEFAULT NULL,
  `parentArticle` int(11) DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `articleStatus` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `menuId`, `parentArticle`, `articleName`, `firstHomeTitle`, `secondHomeTitle`, `firstInnerTitle`, `secondInnerTitle`, `firstHomeImage`, `firstInnerImage`, `homeDescription`, `innerDescription`, `urlLink`, `articleIcon`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `articleStatus`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Reaching Your Potential', 'Reaching Your Potential', NULL, NULL, NULL, 'images/articles/home/bglc_circle_38510443167.png', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h2>Reaching Your Potential</h2>\r\n<p>BGLC is committed to designing the best educational pathway for our students, each one leading to a successful career ahead.</p>\r\n<p>&nbsp;</p>\r\n<h3>The Right Guidance</h3>\r\n<p>We understand and assess your goals, guide you to the best combination of course, university and location and help you achieve the best.<br /><br /></p>\r\n<h3>The Right Subjects</h3>\r\n<p>Let us help you pick the correct specialisation and subjects while pursing your interests and achieve your goals.<br /><br /></p>\r\n<h3>The Right Experience</h3>\r\n<p>Combining the right guidance along with the right course, you can look forward to an amazing experience.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-03-18 04:53:18', '2020-05-10 13:36:00'),
(2, 1, NULL, 'About BGLC', 'B', 'Our Values', NULL, NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>GLC Educational Services was set up in year 2000 to provide high-quality education consultancy to students in Sibu, Sarawak, Malaysia.</p>\r\n<p>Since then, our company has expanded organically, establishing a comprehensive presence in Sarawak, Sabah, and other major locations in East Malaysia. This regional footprint has even extended to Kuala Lumpur in West Malaysia and Singapore, to meet the burgeoning educational needs of more and more students across ASEAN.</p>\r\n<p>Over the last decade, our professionally trained consultants have helped students with advisory and placements into many reputable schools, colleges and universities in Australia, Canada, Malaysia, New Zealand, Singapore, the UK and the USA.</p>\r\n<p>BGLC is committed to designing the best educational pathway for our students, each one leading to a successful career ahead.</p>\r\n<p>Our dedicated team of education consultants works hard to ensure students achieve their maximum potential in their choice of study fields. Even as we work hand-in-hand with reputable partner varsities to make a wider range of quality courses available, we are also buddies to every student that comes to us, ensuring we put their study requirements first and foremost.</p>\r\n<p>From an initial review of the best educational options, to the final selection of the best varsity, our role is to help our students find courses that are the best fit to their abilities and ambition. After completing this, we continue to guide our students through important procedures such as enrolment, UCAS applications, travel and visa arrangements, as well as accommodation sourcing and booking.</p>\r\n<p>Our involvement does not end when students leave for their studies. To ensure they have a smooth transition into their new environment, we help connect them with existing students, and remain in touch throughout their new journey, providing any assistance they might need. We also facilitate regular academic progress follow-ups with parents, to ensure they are updated with how their children are faring.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"column mcb-column one column_column  column-margin-20px\">\r\n<div class=\"column_attr clearfix\">\r\n<h4>To Be Sincere</h4>\r\n<p>Making student welfare and their future career development our top priority, and using this as the foundation for all the advisory and consultation we provide.</p>\r\n</div>\r\n</div>\r\n<div class=\"column mcb-column one column_column  column-margin-20px\">\r\n<div class=\"column_attr clearfix\">\r\n<h4>To Be Genuine</h4>\r\n<p>Providing reliable advisory on the best available study information and guided plans.</p>\r\n</div>\r\n</div>\r\n<div class=\"column mcb-column one column_column  column-margin-20px\">\r\n<div class=\"column_attr clearfix\">\r\n<h4>To Provide Service Excellence</h4>\r\n<p>Personalizing the guidance we offer for each student, to help them meet their study objectives for a successful future career.</p>\r\n</div>\r\n</div>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, 1, '2020-03-18 06:55:26', '2020-05-09 20:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannerStatus` tinyint(1) NOT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `bannerImage`, `urlLink`, `bannerStatus`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `created_at`, `updated_at`) VALUES
(1, 'Study Banner', 'images/banners/GES_UK-Education-Fair2019-Poster_Final2-01_116863464333.jpg', NULL, 0, NULL, NULL, NULL, 1, '2020-03-18 03:17:11', '2020-05-09 09:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `articleStatus` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinationId` int(11) DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `destinationId`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 1, 1, 1, '2020-03-16 07:16:18', '2020-03-19 05:02:32'),
(2, 'Malaysia', NULL, 2, 1, '2020-03-19 03:00:03', '2020-03-19 05:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contactName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactPhone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactEmail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactMessage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contactName`, `contactPhone`, `contactEmail`, `contactAddress`, `contactTitle`, `contactMessage`, `created_at`, `updated_at`) VALUES
(1, 'ashik', NULL, 'parveznimsar@gmail.com', NULL, 'course query', 'hy sir', '2020-05-06 19:55:31', '2020-05-06 19:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new-message',
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE `contact_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `officeLocation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressTitle1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressTitle2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `officeLocation`, `officeName`, `addressTitle1`, `addressTitle2`, `image`, `name`, `designation`, `address1`, `address2`, `email1`, `email2`, `mobile1`, `mobile2`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh Office', 'Bangladesh Global Learning Center', 'Office Address', NULL, NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>House # 2/4, Nawab Habibullah Road<br />1st Floor,Shahbag, Dhaka-100, Bangladesh</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'hrd@kallolgroup.com', NULL, NULL, NULL, 1, 1, '2020-02-13 04:22:57', '2020-03-21 01:10:52'),
(3, NULL, NULL, 'Campus Address', NULL, NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Bashundhara Residential Area<br />Dhaka-1229, Bangladesh</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, '+88 01711961926', '+88 01822111210', 2, 1, '2020-03-21 01:24:40', '2020-05-08 13:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `bn_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `bn_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'ঢাকা', NULL, NULL),
(2, 'Faridpur', 'ফরিদপুর', NULL, NULL),
(3, 'Gazipur', 'গাজীপুর', NULL, NULL),
(4, 'Gopalganj', 'গোপালগঞ্জ', NULL, NULL),
(5, 'Jamalpur', 'জামালপুর', NULL, NULL),
(6, 'Kishoreganj', 'কিশোরগঞ্জ', NULL, NULL),
(7, 'Madaripur', 'মাদারীপুর', NULL, NULL),
(8, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL),
(9, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL),
(10, 'Mymensingh', 'ময়মনসিং', NULL, NULL),
(11, 'Narayanganj', 'নারায়াণগঞ্জ', NULL, NULL),
(12, 'Narsingdi', 'নরসিংদী', NULL, NULL),
(13, 'Netrokona', 'নেত্রকোনা', NULL, NULL),
(14, 'Rajbari', 'রাজবাড়ি', NULL, NULL),
(15, 'Shariatpur', 'শরীয়তপুর', NULL, NULL),
(16, 'Sherpur', 'শেরপুর', NULL, NULL),
(17, 'Tangail', 'টাঙ্গাইল', NULL, NULL),
(18, 'Bogra', 'বগুড়া', NULL, NULL),
(19, 'Joypurhat', 'জয়পুরহাট', NULL, NULL),
(20, 'Naogaon', 'নওগাঁ', NULL, NULL),
(21, 'Natore', 'নাটোর', NULL, NULL),
(22, 'Nawabganj', 'নবাবগঞ্জ', NULL, NULL),
(23, 'Pabna', 'পাবনা', NULL, NULL),
(24, 'Rajshahi', 'রাজশাহী', NULL, NULL),
(25, 'Sirajgonj', 'সিরাজগঞ্জ', NULL, NULL),
(26, 'Dinajpur', 'দিনাজপুর', NULL, NULL),
(27, 'Gaibandha', 'গাইবান্ধা', NULL, NULL),
(28, 'Kurigram', 'কুড়িগ্রাম', NULL, NULL),
(29, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL),
(30, 'Nilphamari', 'নীলফামারী', NULL, NULL),
(31, 'Panchagarh', 'পঞ্চগড়', NULL, NULL),
(32, 'Rangpur', 'রংপুর', NULL, NULL),
(33, 'Thakurgaon', 'ঠাকুরগাঁও', NULL, NULL),
(34, 'Barguna', 'বরগুনা', NULL, NULL),
(35, 'Barisal', 'বরিশাল', NULL, NULL),
(36, 'Bhola', 'ভোলা', NULL, NULL),
(37, 'Jhalokati', 'ঝালকাঠি', NULL, NULL),
(38, 'Patuakhali', 'পটুয়াখালী', NULL, NULL),
(39, 'Pirojpur', 'পিরোজপুর', NULL, NULL),
(40, 'Bandarban', 'বান্দরবান', NULL, NULL),
(41, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', NULL, NULL),
(42, 'Chandpur', 'চাঁদপুর', NULL, NULL),
(43, 'Chittagong', 'চট্টগ্রাম', NULL, NULL),
(44, 'Comilla', 'কুমিল্লা', NULL, NULL),
(45, 'Cox\'s Bazar', 'কক্স বাজার', NULL, NULL),
(46, 'Feni', 'ফেনী', NULL, NULL),
(47, 'Khagrachari', 'খাগড়াছড়ি', NULL, NULL),
(48, 'Lakshmipur', 'লক্ষ্মীপুর', NULL, NULL),
(49, 'Noakhali', 'নোয়াখালী', NULL, NULL),
(50, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL),
(51, 'Habiganj', 'হবিগঞ্জ', NULL, NULL),
(52, 'Maulvibazar', 'মৌলভীবাজার', NULL, NULL),
(53, 'Sunamganj', 'সুনামগঞ্জ', NULL, NULL),
(54, 'Sylhet', 'সিলেট', NULL, NULL),
(55, 'Bagerhat', 'বাগেরহাট', NULL, NULL),
(56, 'Chuadanga', 'চুয়াডাঙ্গা', NULL, NULL),
(57, 'Jessore', 'যশোর', NULL, NULL),
(58, 'Jhenaidah', 'ঝিনাইদহ', NULL, NULL),
(59, 'Khulna', 'খুলনা', NULL, NULL),
(60, 'Kushtia', 'কুষ্টিয়া', NULL, NULL),
(61, 'Magura', 'মাগুরা', NULL, NULL),
(62, 'Meherpur', 'মেহেরপুর', NULL, NULL),
(63, 'Narail', 'নড়াইল', NULL, NULL),
(64, 'Satkhira', 'সাতক্ষীরা', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `header_block`
--

CREATE TABLE `header_block` (
  `id` int(11) UNSIGNED NOT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `articleStatus` int(11) NOT NULL DEFAULT 1,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buttonName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_block`
--

INSERT INTO `header_block` (`id`, `articleName`, `firstHomeTitle`, `secondHomeTitle`, `firstInnerTitle`, `secondInnerTitle`, `firstHomeImage`, `firstInnerImage`, `homeDescription`, `innerDescription`, `urlLink`, `articleIcon`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `articleStatus`, `section`, `buttonName`, `created_at`, `updated_at`) VALUES
(1, 'Working With The Best From Around The World', 'Working With The Best From Around The World', 'Working With The Best From Around The World', 'Working With The Best From Around The World', 'Working With The Best From Around The World', NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We partner with some of the world&rsquo;s leading education institution to offer our students the opportunity to pursue their dreams in different parts of the world.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We partner with some of the world&rsquo;s leading education institution to offer our students the opportunity to pursue their dreams in different parts of the world.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'partners', NULL, '2020-03-18 03:42:33', '2020-03-18 03:42:33'),
(2, 'Scholarships', 'Scholarships', 'Find Out More', NULL, NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Do you have what it takes? Just check out the list of amazing scholarships and opportunities that\'s available to you today!</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"font-size: 24pt;\"><strong><span style=\"color: #993366;\">Depends on Academic Qualificiation and</span></strong></span></p>\r\n<p><span style=\"font-size: 24pt;\"><strong><span style=\"color: #993366;\">University Rules &amp; Regulation</span></strong></span></p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'scholarship', NULL, '2020-03-18 05:36:41', '2020-05-12 09:45:36'),
(3, 'Services', 'Free Counselling & Consultation Services', 'Free Counselling & Consultation Services', 'Free Counselling & Consultation Services', 'Free Counselling & Consultation Services', NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>As a local representatives of schools, colleges and universities in The United Kingdom, United States of America, Australia, New Zealand, Singapore and Malaysia, we offer the following services:</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>As a local representatives of schools, colleges and universities in The United Kingdom, United States of America, Australia, New Zealand, Singapore and Malaysia, we offer the following services:</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'services', NULL, '2020-03-18 23:39:41', '2020-03-18 23:39:41'),
(4, 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Interested to know more about what we can do for you? Leave us a message and our consultants will be in touch with you.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'contacts', 'Send a Messege', '2020-03-19 05:30:13', '2020-03-21 01:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `root_menu` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `menuName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentArticle` int(11) DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `menuStatus` int(11) NOT NULL DEFAULT 1,
  `showInMenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `showInFooterMenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `root_menu`, `parent`, `menuName`, `articleName`, `parentArticle`, `firstHomeTitle`, `firstHomeImage`, `homeDescription`, `urlLink`, `menuIcon`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `menuStatus`, `showInMenu`, `showInFooterMenu`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'BGLC', 'About BGLC', NULL, 'About BGLC', 'public/uploads/menus/4_75955060606.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, 1, 'yes', 'no', '2020-03-18 00:32:26', '2020-05-09 09:58:13'),
(2, NULL, NULL, 'Our Services', 'Our Services', NULL, 'Our Services', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, 1, 'yes', 'no', '2020-03-18 00:33:18', '2020-03-18 00:33:18'),
(3, NULL, NULL, 'Study Destinations', 'Study Destinations', NULL, 'Study Destinations', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 3, 1, 'yes', 'no', '2020-03-18 00:33:37', '2020-03-18 00:33:37'),
(4, NULL, NULL, 'Scholarships', 'Scholarships', NULL, 'Scholarships', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 4, 1, 'yes', 'no', '2020-03-18 00:33:51', '2020-03-18 00:33:51'),
(5, NULL, NULL, 'Contact', 'Contact', NULL, 'Contact', 'images/menus/document_headline_31843718108.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 5, 1, 'yes', 'no', '2020-03-18 00:34:04', '2020-05-08 13:40:41'),
(6, 3, 3, 'UK & Europe', 'Study in UK & Europe', 3, 'UK & Europe', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, 1, 'yes', 'no', '2020-03-18 00:34:47', '2020-05-12 09:06:39'),
(7, 3, 3, 'US & Canada', 'US & Canada', 3, 'US & Canada', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 3, 1, 'yes', 'no', '2020-03-18 00:35:10', '2020-05-12 09:07:02'),
(8, 3, 3, 'Australia & New Zealand', 'Australia & New Zealand', NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 4, 1, 'yes', 'no', '2020-05-11 13:01:00', '2020-05-12 09:07:36'),
(9, 3, 3, 'Malaysia & Singapore', 'Malaysia & Singapore', NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 5, 1, 'yes', 'no', '2020-05-11 13:01:54', '2020-05-12 09:07:55'),
(10, 3, 3, 'India', 'India', NULL, NULL, NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, 1, 'yes', 'no', '2020-05-11 13:03:53', '2020-05-12 09:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_02_180455_create_categories_table', 1),
(4, '2018_07_13_130624_create_sub_categories_table', 1),
(5, '2018_07_14_141212_create_products_table', 1),
(6, '2018_07_18_172951_create_customers_table', 1),
(7, '2018_07_18_173018_create_shippings_table', 1),
(8, '2018_07_18_173045_create_checkouts_table', 1),
(9, '2018_07_18_173051_create_orders_table', 1),
(10, '2018_07_18_173115_create_transactions_table', 1),
(11, '2018_07_21_144649_create_contactuses_table', 1),
(12, '2018_07_22_211328_create_admins_table', 1),
(13, '2018_07_27_082321_create_careers_table', 1),
(14, '2018_07_27_103118_create_teams_table', 1),
(15, '2018_07_27_111833_create_sliders_table', 1),
(16, '2019_01_06_085032_create_packages_table', 1),
(17, '2019_03_13_120816_create_menus_table', 2),
(18, '2019_03_13_121439_create_menus_table', 3),
(19, '2018_11_17_160100_create_verifies_customers_table', 4),
(20, '2018_11_17_160100_create_verify_customers_table', 5),
(21, '2019_03_19_065715_create_settings_table', 6),
(22, '2018_07_02_180455_create_policies_table', 7),
(23, '2018_07_02_180455_create_banners_table', 8),
(24, '2019_03_27_075039_create_product_sections_table', 9),
(25, '2019_03_28_062230_create_product_sections_table', 10),
(26, '2019_03_30_094825_create_socials_table', 11),
(27, '2019_03_30_181906_create_product_sections_table', 12),
(28, '2019_04_03_083641_create_contacts_table', 13),
(29, '2019_04_03_104734_create_reviews_table', 14),
(30, '2019_04_03_105403_create_reviews_table', 15),
(31, '2019_04_04_111431_create_abouts_table', 16),
(32, '2019_04_04_112139_create_abouts_table', 17),
(33, '2019_04_07_042104_create_product_images_table', 18),
(34, '2019_04_05_060258_create_faqs_table', 19),
(35, '2019_04_09_072500_create_delivery_policies_table', 20),
(36, '2019_04_09_075441_create_payment_policies_table', 21),
(37, '2019_04_09_090821_create_refund_policies_table', 22),
(38, '2019_04_10_061020_create_help_centers_table', 22),
(39, '2019_04_10_071450_create_terms_table', 23),
(40, '2019_04_10_073726_create_blogs_table', 24),
(41, '2019_04_10_101945_create_newsletters_table', 25),
(42, '2019_04_17_062734_create_user_roles_table', 26),
(43, '2019_06_15_064819_create_shipping_charges_table', 27),
(44, '2019_06_16_100518_create_invoice_table', 28),
(45, '2019_07_14_074721_create_customer_group_section_table', 29),
(46, '2019_07_14_075751_create_customer_group_sections_table', 30),
(47, '2019_08_31_064148_create_vendors_table', 31),
(48, '2019_09_03_065923_create_cash_purchase_table', 32),
(49, '2019_09_03_070746_create_cash_purchase_item_table', 33),
(50, '2019_09_04_060034_create_credit_purchases_table', 34),
(51, '2019_09_04_060941_create_credit_purchase_items_table', 34),
(52, '2019_09_04_100454_create_purchase_order_items_table', 35),
(53, '2019_09_04_100609_create_purchase_orders_table', 35),
(54, '2019_09_05_053849_create_purchase_order_receives_table', 36),
(55, '2019_09_05_054156_create_purchase_order_receive_items_table', 36),
(56, '2019_09_05_095924_create_supplier_payments_table', 37),
(57, '2019_09_07_070859_create_purchase_returns_table', 38),
(58, '2019_09_07_071132_create_purchase_return_items_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `subscribeEmail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `information`, `image`, `description`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Partner 1', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.13 PM (1)_43132227736.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 1, 1, '2020-03-18 03:43:49', '2020-05-10 20:11:56'),
(2, 'Partner 2', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.11 PM (1)_18481008591.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 2, 1, '2020-03-18 03:47:51', '2020-05-10 20:13:12'),
(3, 'Partner 3', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.11 PM_76260214642.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 3, 1, '2020-03-18 03:48:15', '2020-05-10 20:13:26'),
(4, 'UN4', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.12 PM (1)_89795445859.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 4, 1, '2020-05-10 20:14:02', '2020-05-10 20:14:02'),
(5, 'UN5', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.12 PM (2)_11665487293.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 5, 1, '2020-05-10 20:14:49', '2020-05-10 20:14:49'),
(6, 'UN6', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.12 PM_56385723826.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 6, 1, '2020-05-10 20:15:21', '2020-05-10 20:15:21'),
(7, 'UN7', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.13 PM_52289574926.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 7, 1, '2020-05-10 20:16:04', '2020-05-10 20:16:04'),
(8, 'UN8', NULL, 'images/partners/WhatsApp Image 2020-05-10 at 4.14.14 PM_84476399312.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 8, 1, '2020-05-10 20:16:56', '2020-05-10 20:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jisanahmed06@gmail.com', '$2y$10$39ex0T8QTrw7E5LkLNAJhu48bFuuIiN7.Q4iuH77kORw8uNdvCyV2', '2019-08-31 04:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `menuId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `customerId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `categoryId`, `name`, `image`, `description`, `orderBy`, `status`, `metaTitle`, `metaKeyword`, `metaDescription`, `created_at`, `updated_at`) VALUES
(1, 1, 'Merit Scholarship', 'images/scholarship/pacific_88196178225.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 1, 1, NULL, NULL, NULL, '2020-03-19 01:56:15', '2020-03-21 03:04:23'),
(2, 1, 'Australian Year 12', 'public/uploads/scholarship/curtin-logo-_69506659540.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Scholarship Type :</strong>Australian Year 12 Scholarship<br /><strong>Intake:&nbsp;</strong>July 2017<br /><strong>Application Deadline:</strong>&nbsp;12 July 2017<br /><strong>Scholarship / Bursary Amount:</strong>&nbsp;25% of their first year tuition fee, up to a maximum of AUD$10,000<br /><strong>Requirement:&nbsp;</strong>Must have Australian Year 12 qualification or equivalent.<br /><strong>Remark:&nbsp;</strong>Automatic Merit Based Scholarship<br /><strong>For Inquiry: </strong>bglc@nebcbd.net</p>\r\n</body>\r\n</html>', 2, 1, NULL, NULL, NULL, '2020-03-19 03:08:22', '2020-05-09 20:49:57'),
(3, 2, 'High Achievers’ Scholarship (HAS)', 'public/uploads/scholarship/nottingham-logo2_65348091028.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Scholarship Type:</strong>&nbsp;High Achievers&rsquo; Scholarship (HAS)<br /><strong>Intake:&nbsp;</strong>April 2017 (Foundation), September 2017 (Degree)<br /><strong>Application Deadline: -</strong><br /><strong>Scholarship / Bursary Amount:</strong>&nbsp;25% off tuition fees<br /><strong>Requirement : Foundation :</strong>&nbsp;min SPM 8A&rsquo;s or IGCSE 7A&rsquo;s;<br /><strong>Undergraduate :&nbsp;</strong>min A-level 3A&rsquo;, UEC 7A&rsquo;s, STPM 3A&rsquo;s or IB 36 points<br /><strong>Remarks:</strong>&nbsp;Automatic scholarship<br /><strong>For Inquiry: </strong>bglc@nebcbd.net</p>\r\n</body>\r\n</html>', 1, 1, NULL, NULL, NULL, '2020-03-19 03:49:56', '2020-05-09 20:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) UNSIGNED NOT NULL,
  `menuId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `menuId`, `categoryId`, `name`, `firstHomeTitle`, `secondHomeTitle`, `firstInnerTitle`, `secondInnerTitle`, `firstHomeImage`, `firstInnerImage`, `homeDescription`, `innerDescription`, `urlLink`, `articleIcon`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Assessment', NULL, NULL, NULL, NULL, 'public/uploads/services/home/1-1_186125575751.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Assess your qualifications and provide information on the range of courses available.Assess your qualifications and provide information on the range of courses available.Assess your qualifications and provide information on the range of courses available.Assess your qualifications and provide information on the range of courses available.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-03-18 23:48:05', '2020-03-19 00:24:20'),
(2, NULL, NULL, 'Application', NULL, NULL, NULL, NULL, 'public/uploads/services/home/apply_71600102859.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Assist your application procedures.Assist your application procedures.Assist your application procedures.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2020-03-18 23:58:57', '2020-03-18 23:59:17'),
(3, NULL, NULL, 'Accommodation', NULL, NULL, NULL, NULL, 'public/uploads/services/home/321_7419913012.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Assist with your accommodation applications.Assist with your accommodation applications.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, '2020-03-19 00:00:28', '2020-03-19 00:18:14'),
(4, NULL, NULL, 'Visa', NULL, NULL, NULL, NULL, 'images/services/home/passs_99993454620.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Assist with your visa application.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, '2020-05-12 10:20:30', '2020-05-12 10:20:30'),
(5, NULL, NULL, 'Travel Arrangements', NULL, NULL, NULL, NULL, 'images/services/home/pa_15591292567.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Arrange for ticket flights and airport reception upon arrival (where available/applicable).</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, '2020-05-12 10:22:21', '2020-05-12 10:22:21'),
(6, NULL, NULL, 'Progress Report', NULL, NULL, NULL, NULL, 'images/services/home/report_65770157814.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Continue to keep in touch with the institutions where necessary on behalf of parents i.e: Progress Reports, etc.</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, '2020-05-12 10:23:33', '2020-05-12 10:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `siteTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlePrefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteLogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitefavIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminLogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminsmalLogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminfavIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteEmail1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteEmail2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteAddress1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteAddress2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitestatus` int(11) DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `siteTitle`, `titlePrefix`, `siteName`, `siteLogo`, `sitefavIcon`, `adminTitle`, `adminLogo`, `adminsmalLogo`, `adminfavIcon`, `mobile1`, `mobile2`, `siteEmail1`, `siteEmail2`, `siteAddress1`, `siteAddress2`, `copyright1`, `copyright2`, `sitestatus`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `created_at`, `updated_at`) VALUES
(1, 'Creating Tomorrow and Beyond', '||', 'Bangladesh Global Learning Center', 'images/site_logo/logo/Untitled-2_55639551209.png', 'images/site_logo/fav_icon/fav-icon_31218892371.png', 'Admin', 'images/admin_logo/main_logo/admin_logo_19244641365.png', 'images/admin_logo/small_logo/small_logo_39805764778.png', 'images/admin_logo/fav_icon/fav-icon_13061964720.png', '+88 01711961926', NULL, 'bglc@nebcbd.net', NULL, NULL, NULL, NULL, NULL, NULL, 'Kites', 'Garments manufacturer,Best garments supplier of bangladesh,Bangladesh best garments supplier,Quality garments manufacturer,Ready made garments manufacturer,World best garments supplier', 'KITES is a leading garments Buying, Manufacturer and exporter in Bangladesh. We provide our quality garments to many internationally reputable', NULL, NULL, '2020-05-12 09:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `section` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `firstTitle`, `secondTitle`, `description`, `image`, `productId`, `section`, `link`, `status`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `created_at`, `updated_at`) VALUES
(1, 'Plan for Study Abroad', 'Our Study Destinations', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'public/uploads/slider_image/banner_148124070644.jpg', NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, '2020-03-18 01:24:30', '2020-03-18 02:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `icon`, `link`, `status`, `orderBy`, `created_at`, `updated_at`) VALUES
(3, 'Faccebook', 'fab fa-facebook-f', 'https://www.facebook.com', 1, 2, '2019-12-01 05:54:34', '2020-03-14 13:05:49'),
(4, 'Twiteer', 'fab fa-twitter', 'https://twitter.com', 0, 7, '2019-12-01 05:56:55', '2020-03-14 13:06:17'),
(5, 'whatsapp', 'fab fa-whatsapp', 'https://www.whatsapp.com/', 1, 1, '2020-01-11 04:12:44', '2020-03-14 13:06:07'),
(6, 'Linkdin', 'fab fa-linkedin-in', 'https://bd.linkedin.com/', 0, 4, '2020-01-11 04:13:04', '2020-03-14 13:07:37'),
(7, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com/', 0, 5, '2020-01-11 04:13:29', '2020-03-14 13:07:38'),
(8, 'Google Plus', 'fab fa-google-plus-g', 'http://facebook.com/', 0, 6, '2020-02-11 04:47:23', '2020-03-14 13:07:40'),
(9, 'Viber', 'fab fa-viber', 'viber://contact?number=01778311111', 1, 3, '2020-03-14 13:07:06', '2020-03-14 13:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `study_destination`
--

CREATE TABLE `study_destination` (
  `id` int(11) UNSIGNED NOT NULL,
  `menuId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondHomeTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondInnerTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstHomeImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstInnerImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `innerDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlLink` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleIcon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `buttonName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_destination`
--

INSERT INTO `study_destination` (`id`, `menuId`, `categoryId`, `parent_id`, `name`, `firstHomeTitle`, `secondHomeTitle`, `firstInnerTitle`, `secondInnerTitle`, `firstHomeImage`, `firstInnerImage`, `homeDescription`, `innerDescription`, `urlLink`, `articleIcon`, `metaTitle`, `metaKeyword`, `metaDescription`, `orderBy`, `buttonName`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, 'Uk & Europe', 'U', 'Scholarships', NULL, NULL, 'public/uploads/study_destination/home/london-1_124107641910.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Do you have what it takes? Just check out the list of amazing scholarships and opportunities that\'s available to you today!</p>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, 'Find Out More', 1, '2020-03-18 04:16:06', '2020-05-13 18:21:46'),
(2, 7, NULL, NULL, 'US & Canada', NULL, NULL, NULL, NULL, 'public/uploads/study_destination/home/us_47063770094.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 3, 'Finds', 1, '2020-03-18 04:16:58', '2020-05-12 09:00:53'),
(3, NULL, NULL, 1, 'BIRMINGHAM CITY UNIVERSITY', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.04 PM_91917001153.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul>\r\n<li><strong>Adcote School for Girls</strong></li>\r\n<li><strong>Cardiff Sixth Form College</strong></li>\r\n<li><strong>Concord College</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul>\r\n<li><strong>Oxford International College</strong></li>\r\n<li><strong>Queen Ethelburga&rsquo;s College (QEC)</strong></li>\r\n<li><strong>St Andrew College, Cambridge</strong></li>\r\n</ul>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2020-03-19 01:12:10', '2020-05-13 15:24:08'),
(4, NULL, NULL, 1, 'CITY of OXFORD COLLEGE', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.05 PM_77166204347.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Bellerbys College, Brighton/<br />Cambridge/ London<br /><br /></strong><strong>Astrum Education</strong></p>\r\n<ul>\r\n<li>Chelsea Independent College</li>\r\n<li>Duff Miller Sixth Form College</li>\r\n<li>Lansdowne College</li>\r\n<li>hmghmnghm</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>King\'s Education</strong></p>\r\n<ul>\r\n<li>Aston University</li>\r\n<li>King Brighton</li>\r\n<li>Kings College Bournemouth,London and Oxford</li>\r\n<li>University of Essex International Foundation Program</li>\r\n<li>University of Reading International Foundation Program</li>\r\n</ul>\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1, '2020-03-19 01:15:11', '2020-05-13 15:28:05'),
(5, 8, NULL, NULL, 'Australia & New Zealand', NULL, NULL, NULL, NULL, 'images/study_destination/home/as_18956036901.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 4, NULL, 1, '2020-05-11 13:01:02', '2020-05-12 09:01:27'),
(6, 9, NULL, NULL, 'Malaysia & Singapore', NULL, NULL, NULL, NULL, 'images/study_destination/home/klcc_99169580955.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 5, NULL, 1, '2020-05-11 13:01:54', '2020-05-12 09:01:46'),
(7, 10, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'images/study_destination/home/istock-478831658_63758190133.jpg', NULL, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2020-05-11 13:03:53', '2020-05-12 09:05:13'),
(8, NULL, NULL, 7, 'HIMALAYAN UNIVERSITY', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.43.10 PM_8854615455.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2020-05-13 15:20:02', '2020-05-13 15:20:02'),
(9, NULL, NULL, 7, 'SINGHANIA UNIVERSITY', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.43.11 PM_55267947629.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1, '2020-05-13 15:21:08', '2020-05-13 15:21:08'),
(10, NULL, NULL, 6, 'LINCOLN UNIVERSITY COLLEGE', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.44.11 PM_84182270177.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2020-05-13 15:22:16', '2020-05-13 15:22:16'),
(11, NULL, NULL, 1, 'UNIVERSITY of GREENWHICH', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.05 PM (1)_9845416548.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 3, NULL, 1, '2020-05-13 15:29:26', '2020-05-13 15:29:26'),
(12, NULL, NULL, 1, 'GRIFFITH COLLEGE', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.06 PM_15924494048.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 4, NULL, 1, '2020-05-13 15:30:57', '2020-05-13 15:30:57'),
(13, NULL, NULL, 1, 'MIDDLESEX UNIVERSITY LONDON', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.06 PM (1)_44867164878.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 5, NULL, 1, '2020-05-13 15:32:15', '2020-05-13 15:32:36'),
(14, NULL, NULL, 1, 'UNIVERSITY of SUFFOLK', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.06 PM (2)_97649093327.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 6, NULL, 1, '2020-05-13 15:33:26', '2020-05-13 15:33:53'),
(15, NULL, NULL, 1, 'UNIVERSITY of NORTHAMPTON', NULL, NULL, NULL, NULL, NULL, 'images/study_destination/inner_page/WhatsApp Image 2020-05-13 at 1.45.07 PM_61661770668.jpeg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', NULL, NULL, NULL, NULL, NULL, 7, NULL, 1, '2020-05-13 15:35:01', '2020-05-13 15:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `teamCategory` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiteer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_category`
--

CREATE TABLE `team_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `country`, `information`, `image`, `description`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Robin', 'University of Sunderland', 'M Pharmacy', 'public/uploads/testimonials/brandon-146x146-85x85_151247922522.png', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>I was impressed with the high efficiency services that Global staff offered</p>\r\n</body>\r\n</html>', 1, 1, '2020-03-18 06:00:08', '2020-05-09 10:07:15'),
(2, 'Tiang', 'University of Glasgow, Dentistry', 'NTO course: Newton Programme Science and Medicine pathway', 'public/uploads/testimonials/cynth-146x146-85x85_67302118119.png', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>My most valuable experience was when our Programme Manager arranged work experience for us at Norfolk and Norwich University Hospital. It put me one step ahead of other dental school applicants</p>\r\n</body>\r\n</html>', 2, 1, '2020-03-18 06:01:18', '2020-05-09 10:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(2) UNSIGNED NOT NULL,
  `district_id` int(2) UNSIGNED DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) DEFAULT NULL,
  `is_active` int(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 34, 'Amtali Upazila', 'আমতলী', 1, NULL, NULL),
(2, 34, 'Bamna Upazila', 'বামনা', 1, NULL, NULL),
(3, 34, 'Barguna Sadar Upazila', 'বরগুনা সদর', 1, NULL, NULL),
(4, 34, 'Betagi Upazila', 'বেতাগি', 1, NULL, NULL),
(5, 34, 'Patharghata Upazila', 'পাথরঘাটা', 1, NULL, NULL),
(6, 34, 'Taltali Upazila', 'তালতলী', 1, NULL, NULL),
(7, 35, 'Muladi Upazila', 'মুলাদি', 1, NULL, NULL),
(8, 35, 'Babuganj Upazila', 'বাবুগঞ্জ', 1, NULL, NULL),
(9, 35, 'Agailjhara Upazila', 'আগাইলঝরা', 1, NULL, NULL),
(10, 35, 'Barisal Sadar Upazila', 'বরিশাল সদর', 1, NULL, NULL),
(11, 35, 'Bakerganj Upazila', 'বাকেরগঞ্জ', 1, NULL, NULL),
(12, 35, 'Banaripara Upazila', 'বানাড়িপারা', 1, NULL, NULL),
(13, 35, 'Gaurnadi Upazila', 'গৌরনদী', 1, NULL, NULL),
(14, 35, 'Hizla Upazila', 'হিজলা', 1, NULL, NULL),
(15, 35, 'Mehendiganj Upazila', 'মেহেদিগঞ্জ ', 1, NULL, NULL),
(16, 35, 'Wazirpur Upazila', 'ওয়াজিরপুর', 1, NULL, NULL),
(17, 36, 'Bhola Sadar Upazila', 'ভোলা সদর', 1, NULL, NULL),
(18, 36, 'Burhanuddin Upazila', 'বুরহানউদ্দিন', 1, NULL, NULL),
(19, 36, 'Char Fasson Upazila', 'চর ফ্যাশন', 1, NULL, NULL),
(20, 36, 'Daulatkhan Upazila', 'দৌলতখান', 1, NULL, NULL),
(21, 36, 'Lalmohan Upazila', 'লালমোহন', 1, NULL, NULL),
(22, 36, 'Manpura Upazila', 'মনপুরা', 1, NULL, NULL),
(23, 36, 'Tazumuddin Upazila', 'তাজুমুদ্দিন', 1, NULL, NULL),
(24, 37, 'Jhalokati Sadar Upazila', 'ঝালকাঠি সদর', 1, NULL, NULL),
(25, 37, 'Kathalia Upazila', 'কাঁঠালিয়া', 1, NULL, NULL),
(26, 37, 'Nalchity Upazila', 'নালচিতি', 1, NULL, NULL),
(27, 37, 'Rajapur Upazila', 'রাজাপুর', 1, NULL, NULL),
(28, 38, 'Bauphal Upazila', 'বাউফল', 1, NULL, NULL),
(29, 38, 'Dashmina Upazila', 'দশমিনা', 1, NULL, NULL),
(30, 38, 'Galachipa Upazila', 'গলাচিপা', 1, NULL, NULL),
(31, 38, 'Kalapara Upazila', 'কালাপারা', 1, NULL, NULL),
(32, 38, 'Mirzaganj Upazila', 'মির্জাগঞ্জ ', 1, NULL, NULL),
(33, 38, 'Patuakhali Sadar Upazila', 'পটুয়াখালী সদর', 1, NULL, NULL),
(34, 38, 'Dumki Upazila', 'ডুমকি', 1, NULL, NULL),
(35, 38, 'Rangabali Upazila', 'রাঙ্গাবালি', 1, NULL, NULL),
(36, 39, 'Bhandaria', 'ভ্যান্ডারিয়া', 1, NULL, NULL),
(37, 39, 'Kaukhali', 'কাউখালি', 1, NULL, NULL),
(38, 39, 'Mathbaria', 'মাঠবাড়িয়া', 1, NULL, NULL),
(39, 39, 'Nazirpur', 'নাজিরপুর', 1, NULL, NULL),
(40, 39, 'Nesarabad', 'নেসারাবাদ', 1, NULL, NULL),
(41, 39, 'Pirojpur Sadar', 'পিরোজপুর সদর', 1, NULL, NULL),
(42, 39, 'Zianagar', 'জিয়ানগর', 1, NULL, NULL),
(43, 40, 'Bandarban Sadar', 'বান্দরবন সদর', 1, NULL, NULL),
(44, 40, 'Thanchi', 'থানচি', 1, NULL, NULL),
(45, 40, 'Lama', 'লামা', 1, NULL, NULL),
(46, 40, 'Naikhongchhari', 'নাইখংছড়ি ', 1, NULL, NULL),
(47, 40, 'Ali kadam', 'আলী কদম', 1, NULL, NULL),
(48, 40, 'Rowangchhari', 'রউয়াংছড়ি ', 1, NULL, NULL),
(49, 40, 'Ruma', 'রুমা', 1, NULL, NULL),
(50, 41, 'Brahmanbaria Sadar Upazila', 'ব্রাহ্মণবাড়িয়া সদর', 1, NULL, NULL),
(51, 41, 'Ashuganj Upazila', 'আশুগঞ্জ', 1, NULL, NULL),
(52, 41, 'Nasirnagar Upazila', 'নাসির নগর', 1, NULL, NULL),
(53, 41, 'Nabinagar Upazila', 'নবীনগর', 1, NULL, NULL),
(54, 41, 'Sarail Upazila', 'সরাইল', 1, NULL, NULL),
(55, 41, 'Shahbazpur Town', 'শাহবাজপুর টাউন', 1, NULL, NULL),
(56, 41, 'Kasba Upazila', 'কসবা', 1, NULL, NULL),
(57, 41, 'Akhaura Upazila', 'আখাউরা', 1, NULL, NULL),
(58, 41, 'Bancharampur Upazila', 'বাঞ্ছারামপুর', 1, NULL, NULL),
(59, 41, 'Bijoynagar Upazila', 'বিজয় নগর', 1, NULL, NULL),
(60, 42, 'Chandpur Sadar', 'চাঁদপুর সদর', 1, NULL, NULL),
(61, 42, 'Faridganj', 'ফরিদগঞ্জ', 1, NULL, NULL),
(62, 42, 'Haimchar', 'হাইমচর', 1, NULL, NULL),
(63, 42, 'Haziganj', 'হাজীগঞ্জ', 1, NULL, NULL),
(64, 42, 'Kachua', 'কচুয়া', 1, NULL, NULL),
(65, 42, 'Matlab Uttar', 'মতলব উত্তর', 1, NULL, NULL),
(66, 42, 'Matlab Dakkhin', 'মতলব দক্ষিণ', 1, NULL, NULL),
(67, 42, 'Shahrasti', 'শাহরাস্তি', 1, NULL, NULL),
(68, 43, 'Anwara Upazila', 'আনোয়ারা', 1, NULL, NULL),
(69, 43, 'Banshkhali Upazila', 'বাশখালি', 1, NULL, NULL),
(70, 43, 'Boalkhali Upazila', 'বোয়ালখালি', 1, NULL, NULL),
(71, 43, 'Chandanaish Upazila', 'চন্দনাইশ', 1, NULL, NULL),
(72, 43, 'Fatikchhari Upazila', 'ফটিকছড়ি', 1, NULL, NULL),
(73, 43, 'Hathazari Upazila', 'হাঠহাজারী', 1, NULL, NULL),
(74, 43, 'Lohagara Upazila', 'লোহাগারা', 1, NULL, NULL),
(75, 43, 'Mirsharai Upazila', 'মিরসরাই', 1, NULL, NULL),
(76, 43, 'Patiya Upazila', 'পটিয়া', 1, NULL, NULL),
(77, 43, 'Rangunia Upazila', 'রাঙ্গুনিয়া', 1, NULL, NULL),
(78, 43, 'Raozan Upazila', 'রাউজান', 1, NULL, NULL),
(79, 43, 'Sandwip Upazila', 'সন্দ্বীপ', 1, NULL, NULL),
(80, 43, 'Satkania Upazila', 'সাতকানিয়া', 1, NULL, NULL),
(81, 43, 'Sitakunda Upazila', 'সীতাকুণ্ড', 1, NULL, NULL),
(82, 44, 'Barura Upazila', 'বড়ুরা', 1, NULL, NULL),
(83, 44, 'Brahmanpara Upazila', 'ব্রাহ্মণপাড়া', 1, NULL, NULL),
(84, 44, 'Burichong Upazila', 'বুড়িচং', 1, NULL, NULL),
(85, 44, 'Chandina Upazila', 'চান্দিনা', 1, NULL, NULL),
(86, 44, 'Chauddagram Upazila', 'চৌদ্দগ্রাম', 1, NULL, NULL),
(87, 44, 'Daudkandi Upazila', 'দাউদকান্দি', 1, NULL, NULL),
(88, 44, 'Debidwar Upazila', 'দেবীদ্বার', 1, NULL, NULL),
(89, 44, 'Homna Upazila', 'হোমনা', 1, NULL, NULL),
(90, 44, 'Comilla Sadar Upazila', 'কুমিল্লা সদর', 1, NULL, NULL),
(91, 44, 'Laksam Upazila', 'লাকসাম', 1, NULL, NULL),
(92, 44, 'Monohorgonj Upazila', 'মনোহরগঞ্জ', 1, NULL, NULL),
(93, 44, 'Meghna Upazila', 'মেঘনা', 1, NULL, NULL),
(94, 44, 'Muradnagar Upazila', 'মুরাদনগর', 1, NULL, NULL),
(95, 44, 'Nangalkot Upazila', 'নাঙ্গালকোট', 1, NULL, NULL),
(96, 44, 'Comilla Sadar South Upazila', 'কুমিল্লা সদর দক্ষিণ', 1, NULL, NULL),
(97, 44, 'Titas Upazila', 'তিতাস', 1, NULL, NULL),
(98, 45, 'Chakaria Upazila', 'চকরিয়া', 1, NULL, NULL),
(100, 45, 'Cox\'s Bazar Sadar Upazila', 'কক্স বাজার সদর', 1, NULL, NULL),
(101, 45, 'Kutubdia Upazila', 'কুতুবদিয়া', 1, NULL, NULL),
(102, 45, 'Maheshkhali Upazila', 'মহেশখালী', 1, NULL, NULL),
(103, 45, 'Ramu Upazila', 'রামু', 1, NULL, NULL),
(104, 45, 'Teknaf Upazila', 'টেকনাফ', 1, NULL, NULL),
(105, 45, 'Ukhia Upazila', 'উখিয়া', 1, NULL, NULL),
(106, 45, 'Pekua Upazila', 'পেকুয়া', 1, NULL, NULL),
(107, 46, 'Feni Sadar', 'ফেনী সদর', 1, NULL, NULL),
(108, 46, 'Chagalnaiya', 'ছাগল নাইয়া', 1, NULL, NULL),
(109, 46, 'Daganbhyan', 'দাগানভিয়া', 1, NULL, NULL),
(110, 46, 'Parshuram', 'পরশুরাম', 1, NULL, NULL),
(111, 46, 'Fhulgazi', 'ফুলগাজি', 1, NULL, NULL),
(112, 46, 'Sonagazi', 'সোনাগাজি', 1, NULL, NULL),
(113, 47, 'Dighinala Upazila', 'দিঘিনালা ', 1, NULL, NULL),
(114, 47, 'Khagrachhari Upazila', 'খাগড়াছড়ি', 1, NULL, NULL),
(115, 47, 'Lakshmichhari Upazila', 'লক্ষ্মীছড়ি', 1, NULL, NULL),
(116, 47, 'Mahalchhari Upazila', 'মহলছড়ি', 1, NULL, NULL),
(117, 47, 'Manikchhari Upazila', 'মানিকছড়ি', 1, NULL, NULL),
(118, 47, 'Matiranga Upazila', 'মাটিরাঙ্গা', 1, NULL, NULL),
(119, 47, 'Panchhari Upazila', 'পানছড়ি', 1, NULL, NULL),
(120, 47, 'Ramgarh Upazila', 'রামগড়', 1, NULL, NULL),
(121, 48, 'Lakshmipur Sadar Upazila', 'লক্ষ্মীপুর সদর', 1, NULL, NULL),
(122, 48, 'Raipur Upazila', 'রায়পুর', 1, NULL, NULL),
(123, 48, 'Ramganj Upazila', 'রামগঞ্জ', 1, NULL, NULL),
(124, 48, 'Ramgati Upazila', 'রামগতি', 1, NULL, NULL),
(125, 48, 'Komol Nagar Upazila', 'কমল নগর', 1, NULL, NULL),
(126, 49, 'Noakhali Sadar Upazila', 'নোয়াখালী সদর', 1, NULL, NULL),
(127, 49, 'Begumganj Upazila', 'বেগমগঞ্জ', 1, NULL, NULL),
(128, 49, 'Chatkhil Upazila', 'চাটখিল', 1, NULL, NULL),
(129, 49, 'Companyganj Upazila', 'কোম্পানীগঞ্জ', 1, NULL, NULL),
(130, 49, 'Shenbag Upazila', 'শেনবাগ', 1, NULL, NULL),
(131, 49, 'Hatia Upazila', 'হাতিয়া', 1, NULL, NULL),
(132, 49, 'Kobirhat Upazila', 'কবিরহাট ', 1, NULL, NULL),
(133, 49, 'Sonaimuri Upazila', 'সোনাইমুরি', 1, NULL, NULL),
(134, 49, 'Suborno Char Upazila', 'সুবর্ণ চর ', 1, NULL, NULL),
(135, 50, 'Rangamati Sadar Upazila', 'রাঙ্গামাটি সদর', 1, NULL, NULL),
(136, 50, 'Belaichhari Upazila', 'বেলাইছড়ি', 1, NULL, NULL),
(137, 50, 'Bagaichhari Upazila', 'বাঘাইছড়ি', 1, NULL, NULL),
(138, 50, 'Barkal Upazila', 'বরকল', 1, NULL, NULL),
(139, 50, 'Juraichhari Upazila', 'জুরাইছড়ি', 1, NULL, NULL),
(140, 50, 'Rajasthali Upazila', 'রাজাস্থলি', 1, NULL, NULL),
(141, 50, 'Kaptai Upazila', 'কাপ্তাই', 1, NULL, NULL),
(142, 50, 'Langadu Upazila', 'লাঙ্গাডু', 1, NULL, NULL),
(143, 50, 'Nannerchar Upazila', 'নান্নেরচর ', 1, NULL, NULL),
(144, 50, 'Kaukhali Upazila', 'কাউখালি', 1, NULL, NULL),
(145, 1, 'Dhamrai Upazila', 'ধামরাই', 1, NULL, NULL),
(146, 1, 'Dohar Upazila', 'দোহার', 1, NULL, NULL),
(147, 1, 'Keraniganj Upazila', 'কেরানীগঞ্জ', 1, NULL, NULL),
(148, 1, 'Nawabganj Upazila', 'নবাবগঞ্জ', 1, NULL, NULL),
(149, 1, 'Savar Upazila', 'সাভার', 1, NULL, NULL),
(150, 2, 'Faridpur Sadar Upazila', 'ফরিদপুর সদর', 1, NULL, NULL),
(151, 2, 'Boalmari Upazila', 'বোয়ালমারী', 1, NULL, NULL),
(152, 2, 'Alfadanga Upazila', 'আলফাডাঙ্গা', 1, NULL, NULL),
(153, 2, 'Madhukhali Upazila', 'মধুখালি', 1, NULL, NULL),
(154, 2, 'Bhanga Upazila', 'ভাঙ্গা', 1, NULL, NULL),
(155, 2, 'Nagarkanda Upazila', 'নগরকান্ড', 1, NULL, NULL),
(156, 2, 'Charbhadrasan Upazila', 'চরভদ্রাসন ', 1, NULL, NULL),
(157, 2, 'Sadarpur Upazila', 'সদরপুর', 1, NULL, NULL),
(158, 2, 'Shaltha Upazila', 'শালথা', 1, NULL, NULL),
(159, 3, 'Gazipur Sadar-Joydebpur', 'গাজীপুর সদর', 1, NULL, NULL),
(160, 3, 'Kaliakior', 'কালিয়াকৈর', 1, NULL, NULL),
(161, 3, 'Kapasia', 'কাপাসিয়া', 1, NULL, NULL),
(162, 3, 'Sripur', 'শ্রীপুর', 1, NULL, NULL),
(163, 3, 'Kaliganj', 'কালীগঞ্জ', 1, NULL, NULL),
(164, 3, 'Tongi', 'টঙ্গি', 1, NULL, NULL),
(165, 4, 'Gopalganj Sadar Upazila', 'গোপালগঞ্জ সদর', 1, NULL, NULL),
(166, 4, 'Kashiani Upazila', 'কাশিয়ানি', 1, NULL, NULL),
(167, 4, 'Kotalipara Upazila', 'কোটালিপাড়া', 1, NULL, NULL),
(168, 4, 'Muksudpur Upazila', 'মুকসুদপুর', 1, NULL, NULL),
(169, 4, 'Tungipara Upazila', 'টুঙ্গিপাড়া', 1, NULL, NULL),
(170, 5, 'Dewanganj Upazila', 'দেওয়ানগঞ্জ', 1, NULL, NULL),
(171, 5, 'Baksiganj Upazila', 'বকসিগঞ্জ', 1, NULL, NULL),
(172, 5, 'Islampur Upazila', 'ইসলামপুর', 1, NULL, NULL),
(173, 5, 'Jamalpur Sadar Upazila', 'জামালপুর সদর', 1, NULL, NULL),
(174, 5, 'Madarganj Upazila', 'মাদারগঞ্জ', 1, NULL, NULL),
(175, 5, 'Melandaha Upazila', 'মেলানদাহা', 1, NULL, NULL),
(176, 5, 'Sarishabari Upazila', 'সরিষাবাড়ি ', 1, NULL, NULL),
(177, 5, 'Narundi Police I.C', 'নারুন্দি', 1, NULL, NULL),
(178, 6, 'Astagram Upazila', 'অষ্টগ্রাম', 1, NULL, NULL),
(179, 6, 'Bajitpur Upazila', 'বাজিতপুর', 1, NULL, NULL),
(180, 6, 'Bhairab Upazila', 'ভৈরব', 1, NULL, NULL),
(181, 6, 'Hossainpur Upazila', 'হোসেনপুর ', 1, NULL, NULL),
(182, 6, 'Itna Upazila', 'ইটনা', 1, NULL, NULL),
(183, 6, 'Karimganj Upazila', 'করিমগঞ্জ', 1, NULL, NULL),
(184, 6, 'Katiadi Upazila', 'কতিয়াদি', 1, NULL, NULL),
(185, 6, 'Kishoreganj Sadar Upazila', 'কিশোরগঞ্জ সদর', 1, NULL, NULL),
(186, 6, 'Kuliarchar Upazila', 'কুলিয়ারচর', 1, NULL, NULL),
(187, 6, 'Mithamain Upazila', 'মিঠামাইন', 1, NULL, NULL),
(188, 6, 'Nikli Upazila', 'নিকলি', 1, NULL, NULL),
(189, 6, 'Pakundia Upazila', 'পাকুন্ডা', 1, NULL, NULL),
(190, 6, 'Tarail Upazila', 'তাড়াইল', 1, NULL, NULL),
(191, 7, 'Madaripur Sadar', 'মাদারীপুর সদর', 1, NULL, NULL),
(192, 7, 'Kalkini', 'কালকিনি', 1, NULL, NULL),
(193, 7, 'Rajoir', 'রাজইর', 1, NULL, NULL),
(194, 7, 'Shibchar', 'শিবচর', 1, NULL, NULL),
(195, 8, 'Manikganj Sadar Upazila', 'মানিকগঞ্জ সদর', 1, NULL, NULL),
(196, 8, 'Singair Upazila', 'সিঙ্গাইর', 1, NULL, NULL),
(197, 8, 'Shibalaya Upazila', 'শিবালয়', 1, NULL, NULL),
(198, 8, 'Saturia Upazila', 'সাঠুরিয়া', 1, NULL, NULL),
(199, 8, 'Harirampur Upazila', 'হরিরামপুর', 1, NULL, NULL),
(200, 8, 'Ghior Upazila', 'ঘিওর', 1, NULL, NULL),
(201, 8, 'Daulatpur Upazila', 'দৌলতপুর', 1, NULL, NULL),
(202, 9, 'Lohajang Upazila', 'লোহাজং', 1, NULL, NULL),
(203, 9, 'Sreenagar Upazila', 'শ্রীনগর', 1, NULL, NULL),
(204, 9, 'Munshiganj Sadar Upazila', 'মুন্সিগঞ্জ সদর', 1, NULL, NULL),
(205, 9, 'Sirajdikhan Upazila', 'সিরাজদিখান', 1, NULL, NULL),
(206, 9, 'Tongibari Upazila', 'টঙ্গিবাড়ি', 1, NULL, NULL),
(207, 9, 'Gazaria Upazila', 'গজারিয়া', 1, NULL, NULL),
(208, 10, 'Bhaluka', 'ভালুকা', 1, NULL, NULL),
(209, 10, 'Trishal', 'ত্রিশাল', 1, NULL, NULL),
(210, 10, 'Haluaghat', 'হালুয়াঘাট', 1, NULL, NULL),
(211, 10, 'Muktagachha', 'মুক্তাগাছা', 1, NULL, NULL),
(212, 10, 'Dhobaura', 'ধবারুয়া', 1, NULL, NULL),
(213, 10, 'Fulbaria', 'ফুলবাড়িয়া', 1, NULL, NULL),
(214, 10, 'Gaffargaon', 'গফরগাঁও', 1, NULL, NULL),
(215, 10, 'Gauripur', 'গৌরিপুর', 1, NULL, NULL),
(216, 10, 'Ishwarganj', 'ঈশ্বরগঞ্জ', 1, NULL, NULL),
(217, 10, 'Mymensingh Sadar', 'ময়মনসিং সদর', 1, NULL, NULL),
(218, 10, 'Nandail', 'নন্দাইল', 1, NULL, NULL),
(219, 10, 'Phulpur', 'ফুলপুর', 1, NULL, NULL),
(220, 11, 'Araihazar Upazila', 'আড়াইহাজার', 1, NULL, NULL),
(221, 11, 'Sonargaon Upazila', 'সোনারগাঁও', 1, NULL, NULL),
(222, 11, 'Bandar', 'বান্দার', 1, NULL, NULL),
(223, 11, 'Naryanganj Sadar Upazila', 'নারায়ানগঞ্জ সদর', 1, NULL, NULL),
(224, 11, 'Rupganj Upazila', 'রূপগঞ্জ', 1, NULL, NULL),
(225, 11, 'Siddirgonj Upazila', 'সিদ্ধিরগঞ্জ', 1, NULL, NULL),
(226, 12, 'Belabo Upazila', 'বেলাবো', 1, NULL, NULL),
(227, 12, 'Monohardi Upazila', 'মনোহরদি', 1, NULL, NULL),
(228, 12, 'Narsingdi Sadar Upazila', 'নরসিংদী সদর', 1, NULL, NULL),
(229, 12, 'Palash Upazila', 'পলাশ', 1, NULL, NULL),
(230, 12, 'Raipura Upazila, Narsingdi', 'রায়পুর', 1, NULL, NULL),
(231, 12, 'Shibpur Upazila', 'শিবপুর', 1, NULL, NULL),
(232, 13, 'Kendua Upazilla', 'কেন্দুয়া', 1, NULL, NULL),
(233, 13, 'Atpara Upazilla', 'আটপাড়া', 1, NULL, NULL),
(234, 13, 'Barhatta Upazilla', 'বরহাট্টা', 1, NULL, NULL),
(235, 13, 'Durgapur Upazilla', 'দুর্গাপুর', 1, NULL, NULL),
(236, 13, 'Kalmakanda Upazilla', 'কলমাকান্দা', 1, NULL, NULL),
(237, 13, 'Madan Upazilla', 'মদন', 1, NULL, NULL),
(238, 13, 'Mohanganj Upazilla', 'মোহনগঞ্জ', 1, NULL, NULL),
(239, 13, 'Netrakona-S Upazilla', 'নেত্রকোনা সদর', 1, NULL, NULL),
(240, 13, 'Purbadhala Upazilla', 'পূর্বধলা', 1, NULL, NULL),
(241, 13, 'Khaliajuri Upazilla', 'খালিয়াজুরি', 1, NULL, NULL),
(242, 14, 'Baliakandi Upazila', 'বালিয়াকান্দি', 1, NULL, NULL),
(243, 14, 'Goalandaghat Upazila', 'গোয়ালন্দ ঘাট', 1, NULL, NULL),
(244, 14, 'Pangsha Upazila', 'পাংশা', 1, NULL, NULL),
(245, 14, 'Kalukhali Upazila', 'কালুখালি', 1, NULL, NULL),
(246, 14, 'Rajbari Sadar Upazila', 'রাজবাড়ি সদর', 1, NULL, NULL),
(247, 15, 'Shariatpur Sadar -Palong', 'শরীয়তপুর সদর ', 1, NULL, NULL),
(248, 15, 'Damudya Upazila', 'দামুদিয়া', 1, NULL, NULL),
(249, 15, 'Naria Upazila', 'নড়িয়া', 1, NULL, NULL),
(250, 15, 'Jajira Upazila', 'জাজিরা', 1, NULL, NULL),
(251, 15, 'Bhedarganj Upazila', 'ভেদারগঞ্জ', 1, NULL, NULL),
(252, 15, 'Gosairhat Upazila', 'গোসাইর হাট ', 1, NULL, NULL),
(253, 16, 'Jhenaigati Upazila', 'ঝিনাইগাতি', 1, NULL, NULL),
(254, 16, 'Nakla Upazila', 'নাকলা', 1, NULL, NULL),
(255, 16, 'Nalitabari Upazila', 'নালিতাবাড়ি', 1, NULL, NULL),
(256, 16, 'Sherpur Sadar Upazila', 'শেরপুর সদর', 1, NULL, NULL),
(257, 16, 'Sreebardi Upazila', 'শ্রীবরদি', 1, NULL, NULL),
(258, 17, 'Tangail Sadar Upazila', 'টাঙ্গাইল সদর', 1, NULL, NULL),
(259, 17, 'Sakhipur Upazila', 'সখিপুর', 1, NULL, NULL),
(260, 17, 'Basail Upazila', 'বসাইল', 1, NULL, NULL),
(261, 17, 'Madhupur Upazila', 'মধুপুর', 1, NULL, NULL),
(262, 17, 'Ghatail Upazila', 'ঘাটাইল', 1, NULL, NULL),
(263, 17, 'Kalihati Upazila', 'কালিহাতি', 1, NULL, NULL),
(264, 17, 'Nagarpur Upazila', 'নগরপুর', 1, NULL, NULL),
(265, 17, 'Mirzapur Upazila', 'মির্জাপুর', 1, NULL, NULL),
(266, 17, 'Gopalpur Upazila', 'গোপালপুর', 1, NULL, NULL),
(267, 17, 'Delduar Upazila', 'দেলদুয়ার', 1, NULL, NULL),
(268, 17, 'Bhuapur Upazila', 'ভুয়াপুর', 1, NULL, NULL),
(269, 17, 'Dhanbari Upazila', 'ধানবাড়ি', 1, NULL, NULL),
(270, 55, 'Bagerhat Sadar Upazila', 'বাগেরহাট সদর', 1, NULL, NULL),
(271, 55, 'Chitalmari Upazila', 'চিতলমাড়ি', 1, NULL, NULL),
(272, 55, 'Fakirhat Upazila', 'ফকিরহাট', 1, NULL, NULL),
(273, 55, 'Kachua Upazila', 'কচুয়া', 1, NULL, NULL),
(274, 55, 'Mollahat Upazila', 'মোল্লাহাট ', 1, NULL, NULL),
(275, 55, 'Mongla Upazila', 'মংলা', 1, NULL, NULL),
(276, 55, 'Morrelganj Upazila', 'মরেলগঞ্জ', 1, NULL, NULL),
(277, 55, 'Rampal Upazila', 'রামপাল', 1, NULL, NULL),
(278, 55, 'Sarankhola Upazila', 'স্মরণখোলা', 1, NULL, NULL),
(279, 56, 'Damurhuda Upazila', 'দামুরহুদা', 1, NULL, NULL),
(280, 56, 'Chuadanga-S Upazila', 'চুয়াডাঙ্গা সদর', 1, NULL, NULL),
(281, 56, 'Jibannagar Upazila', 'জীবন নগর ', 1, NULL, NULL),
(282, 56, 'Alamdanga Upazila', 'আলমডাঙ্গা', 1, NULL, NULL),
(283, 57, 'Abhaynagar Upazila', 'অভয়নগর', 1, NULL, NULL),
(284, 57, 'Keshabpur Upazila', 'কেশবপুর', 1, NULL, NULL),
(285, 57, 'Bagherpara Upazila', 'বাঘের পাড়া ', 1, NULL, NULL),
(286, 57, 'Jessore Sadar Upazila', 'যশোর সদর', 1, NULL, NULL),
(287, 57, 'Chaugachha Upazila', 'চৌগাছা', 1, NULL, NULL),
(288, 57, 'Manirampur Upazila', 'মনিরামপুর ', 1, NULL, NULL),
(289, 57, 'Jhikargachha Upazila', 'ঝিকরগাছা', 1, NULL, NULL),
(290, 57, 'Sharsha Upazila', 'সারশা', 1, NULL, NULL),
(291, 58, 'Jhenaidah Sadar Upazila', 'ঝিনাইদহ সদর', 1, NULL, NULL),
(292, 58, 'Maheshpur Upazila', 'মহেশপুর', 1, NULL, NULL),
(293, 58, 'Kaliganj Upazila', 'কালীগঞ্জ', 1, NULL, NULL),
(294, 58, 'Kotchandpur Upazila', 'কোট চাঁদপুর ', 1, NULL, NULL),
(295, 58, 'Shailkupa Upazila', 'শৈলকুপা', 1, NULL, NULL),
(296, 58, 'Harinakunda Upazila', 'হাড়িনাকুন্দা', 1, NULL, NULL),
(297, 59, 'Terokhada Upazila', 'তেরোখাদা', 1, NULL, NULL),
(298, 59, 'Batiaghata Upazila', 'বাটিয়াঘাটা ', 1, NULL, NULL),
(299, 59, 'Dacope Upazila', 'ডাকপে', 1, NULL, NULL),
(300, 59, 'Dumuria Upazila', 'ডুমুরিয়া', 1, NULL, NULL),
(301, 59, 'Dighalia Upazila', 'দিঘলিয়া', 1, NULL, NULL),
(302, 59, 'Koyra Upazila', 'কয়ড়া', 1, NULL, NULL),
(303, 59, 'Paikgachha Upazila', 'পাইকগাছা', 1, NULL, NULL),
(304, 59, 'Phultala Upazila', 'ফুলতলা', 1, NULL, NULL),
(305, 59, 'Rupsa Upazila', 'রূপসা', 1, NULL, NULL),
(306, 60, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 1, NULL, NULL),
(307, 60, 'Kumarkhali', 'কুমারখালি', 1, NULL, NULL),
(308, 60, 'Daulatpur', 'দৌলতপুর', 1, NULL, NULL),
(309, 60, 'Mirpur', 'মিরপুর', 1, NULL, NULL),
(310, 60, 'Bheramara', 'ভেরামারা', 1, NULL, NULL),
(311, 60, 'Khoksa', 'খোকসা', 1, NULL, NULL),
(312, 61, 'Magura Sadar Upazila', 'মাগুরা সদর', 1, NULL, NULL),
(313, 61, 'Mohammadpur Upazila', 'মোহাম্মাদপুর', 1, NULL, NULL),
(314, 61, 'Shalikha Upazila', 'শালিখা', 1, NULL, NULL),
(315, 61, 'Sreepur Upazila', 'শ্রীপুর', 1, NULL, NULL),
(316, 62, 'angni Upazila', 'আংনি', 1, NULL, NULL),
(317, 62, 'Mujib Nagar Upazila', 'মুজিব নগর', 1, NULL, NULL),
(318, 62, 'Meherpur-S Upazila', 'মেহেরপুর সদর', 1, NULL, NULL),
(319, 63, 'Narail-S Upazilla', 'নড়াইল সদর', 1, NULL, NULL),
(320, 63, 'Lohagara Upazilla', 'লোহাগাড়া', 1, NULL, NULL),
(321, 63, 'Kalia Upazilla', 'কালিয়া', 1, NULL, NULL),
(322, 64, 'Satkhira Sadar Upazila', 'সাতক্ষীরা সদর', 1, NULL, NULL),
(323, 64, 'Assasuni Upazila', 'আসসাশুনি ', 1, NULL, NULL),
(324, 64, 'Debhata Upazila', 'দেভাটা', 1, NULL, NULL),
(325, 64, 'Tala Upazila', 'তালা', 1, NULL, NULL),
(326, 64, 'Kalaroa Upazila', 'কলরোয়া', 1, NULL, NULL),
(327, 64, 'Kaliganj Upazila', 'কালীগঞ্জ', 1, NULL, NULL),
(328, 64, 'Shyamnagar Upazila', 'শ্যামনগর', 1, NULL, NULL),
(329, 18, 'Adamdighi', 'আদমদিঘী', 1, NULL, NULL),
(330, 18, 'Bogra Sadar', 'বগুড়া সদর', 1, NULL, NULL),
(331, 18, 'Sherpur', 'শেরপুর', 1, NULL, NULL),
(332, 18, 'Dhunat', 'ধুনট', 1, NULL, NULL),
(333, 18, 'Dhupchanchia', 'দুপচাচিয়া', 1, NULL, NULL),
(334, 18, 'Gabtali', 'গাবতলি', 1, NULL, NULL),
(335, 18, 'Kahaloo', 'কাহালু', 1, NULL, NULL),
(336, 18, 'Nandigram', 'নন্দিগ্রাম', 1, NULL, NULL),
(337, 18, 'Sahajanpur', 'শাহজাহানপুর', 1, NULL, NULL),
(338, 18, 'Sariakandi', 'সারিয়াকান্দি', 1, NULL, NULL),
(339, 18, 'Shibganj', 'শিবগঞ্জ', 1, NULL, NULL),
(340, 18, 'Sonatala', 'সোনাতলা', 1, NULL, NULL),
(341, 19, 'Joypurhat S', 'জয়পুরহাট সদর', 1, NULL, NULL),
(342, 19, 'Akkelpur', 'আক্কেলপুর', 1, NULL, NULL),
(343, 19, 'Kalai', 'কালাই', 1, NULL, NULL),
(344, 19, 'Khetlal', 'খেতলাল', 1, NULL, NULL),
(345, 19, 'Panchbibi', 'পাঁচবিবি', 1, NULL, NULL),
(346, 20, 'Naogaon Sadar Upazila', 'নওগাঁ সদর', 1, NULL, NULL),
(347, 20, 'Mohadevpur Upazila', 'মহাদেবপুর', 1, NULL, NULL),
(348, 20, 'Manda Upazila', 'মান্দা', 1, NULL, NULL),
(349, 20, 'Niamatpur Upazila', 'নিয়ামতপুর', 1, NULL, NULL),
(350, 20, 'Atrai Upazila', 'আত্রাই', 1, NULL, NULL),
(351, 20, 'Raninagar Upazila', 'রাণীনগর', 1, NULL, NULL),
(352, 20, 'Patnitala Upazila', 'পত্নীতলা', 1, NULL, NULL),
(353, 20, 'Dhamoirhat Upazila', 'ধামইরহাট ', 1, NULL, NULL),
(354, 20, 'Sapahar Upazila', 'সাপাহার', 1, NULL, NULL),
(355, 20, 'Porsha Upazila', 'পোরশা', 1, NULL, NULL),
(356, 20, 'Badalgachhi Upazila', 'বদলগাছি', 1, NULL, NULL),
(357, 21, 'Natore Sadar Upazila', 'নাটোর সদর', 1, NULL, NULL),
(358, 21, 'Baraigram Upazila', 'বড়াইগ্রাম', 1, NULL, NULL),
(359, 21, 'Bagatipara Upazila', 'বাগাতিপাড়া', 1, NULL, NULL),
(360, 21, 'Lalpur Upazila', 'লালপুর', 1, NULL, NULL),
(361, 21, 'Natore Sadar Upazila', 'নাটোর সদর', 1, NULL, NULL),
(362, 21, 'Baraigram Upazila', 'বড়াই গ্রাম', 1, NULL, NULL),
(363, 22, 'Bholahat Upazila', 'ভোলাহাট', 1, NULL, NULL),
(364, 22, 'Gomastapur Upazila', 'গোমস্তাপুর', 1, NULL, NULL),
(365, 22, 'Nachole Upazila', 'নাচোল', 1, NULL, NULL),
(366, 22, 'Nawabganj Sadar Upazila', 'নবাবগঞ্জ সদর', 1, NULL, NULL),
(367, 22, 'Shibganj Upazila', 'শিবগঞ্জ', 1, NULL, NULL),
(368, 23, 'Atgharia Upazila', 'আটঘরিয়া', 1, NULL, NULL),
(369, 23, 'Bera Upazila', 'বেড়া', 1, NULL, NULL),
(370, 23, 'Bhangura Upazila', 'ভাঙ্গুরা', 1, NULL, NULL),
(371, 23, 'Chatmohar Upazila', 'চাটমোহর', 1, NULL, NULL),
(372, 23, 'Faridpur Upazila', 'ফরিদপুর', 1, NULL, NULL),
(373, 23, 'Ishwardi Upazila', 'ঈশ্বরদী', 1, NULL, NULL),
(374, 23, 'Pabna Sadar Upazila', 'পাবনা সদর', 1, NULL, NULL),
(375, 23, 'Santhia Upazila', 'সাথিয়া', 1, NULL, NULL),
(376, 23, 'Sujanagar Upazila', 'সুজানগর', 1, NULL, NULL),
(377, 24, 'Bagha', 'বাঘা', 1, NULL, NULL),
(378, 24, 'Bagmara', 'বাগমারা', 1, NULL, NULL),
(379, 24, 'Charghat', 'চারঘাট', 1, NULL, NULL),
(380, 24, 'Durgapur', 'দুর্গাপুর', 1, NULL, NULL),
(381, 24, 'Godagari', 'গোদাগারি', 1, NULL, NULL),
(382, 24, 'Mohanpur', 'মোহনপুর', 1, NULL, NULL),
(383, 24, 'Paba', 'পবা', 1, NULL, NULL),
(384, 24, 'Puthia', 'পুঠিয়া', 1, NULL, NULL),
(385, 24, 'Tanore', 'তানোর', 1, NULL, NULL),
(386, 25, 'Sirajganj Sadar Upazila', 'সিরাজগঞ্জ সদর', 1, NULL, NULL),
(387, 25, 'Belkuchi Upazila', 'বেলকুচি', 1, NULL, NULL),
(388, 25, 'Chauhali Upazila', 'চৌহালি', 1, NULL, NULL),
(389, 25, 'Kamarkhanda Upazila', 'কামারখান্দা', 1, NULL, NULL),
(390, 25, 'Kazipur Upazila', 'কাজীপুর', 1, NULL, NULL),
(391, 25, 'Raiganj Upazila', 'রায়গঞ্জ', 1, NULL, NULL),
(392, 25, 'Shahjadpur Upazila', 'শাহজাদপুর', 1, NULL, NULL),
(393, 25, 'Tarash Upazila', 'তারাশ', 1, NULL, NULL),
(394, 25, 'Ullahpara Upazila', 'উল্লাপাড়া', 1, NULL, NULL),
(395, 26, 'Birampur Upazila', 'বিরামপুর', 1, NULL, NULL),
(396, 26, 'Birganj', 'বীরগঞ্জ', 1, NULL, NULL),
(397, 26, 'Biral Upazila', 'বিড়াল', 1, NULL, NULL),
(398, 26, 'Bochaganj Upazila', 'বোচাগঞ্জ', 1, NULL, NULL),
(399, 26, 'Chirirbandar Upazila', 'চিরিরবন্দর', 1, NULL, NULL),
(400, 26, 'Phulbari Upazila', 'ফুলবাড়ি', 1, NULL, NULL),
(401, 26, 'Ghoraghat Upazila', 'ঘোড়াঘাট', 1, NULL, NULL),
(402, 26, 'Hakimpur Upazila', 'হাকিমপুর', 1, NULL, NULL),
(403, 26, 'Kaharole Upazila', 'কাহারোল', 1, NULL, NULL),
(404, 26, 'Khansama Upazila', 'খানসামা', 1, NULL, NULL),
(405, 26, 'Dinajpur Sadar Upazila', 'দিনাজপুর সদর', 1, NULL, NULL),
(406, 26, 'Nawabganj', 'নবাবগঞ্জ', 1, NULL, NULL),
(407, 26, 'Parbatipur Upazila', 'পার্বতীপুর', 1, NULL, NULL),
(408, 27, 'Fulchhari', 'ফুলছড়ি', 1, NULL, NULL),
(409, 27, 'Gaibandha sadar', 'গাইবান্ধা সদর', 1, NULL, NULL),
(410, 27, 'Gobindaganj', 'গোবিন্দগঞ্জ', 1, NULL, NULL),
(411, 27, 'Palashbari', 'পলাশবাড়ী', 1, NULL, NULL),
(412, 27, 'Sadullapur', 'সাদুল্যাপুর', 1, NULL, NULL),
(413, 27, 'Saghata', 'সাঘাটা', 1, NULL, NULL),
(414, 27, 'Sundarganj', 'সুন্দরগঞ্জ', 1, NULL, NULL),
(415, 28, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 1, NULL, NULL),
(416, 28, 'Nageshwari', 'নাগেশ্বরী', 1, NULL, NULL),
(417, 28, 'Bhurungamari', 'ভুরুঙ্গামারি', 1, NULL, NULL),
(418, 28, 'Phulbari', 'ফুলবাড়ি', 1, NULL, NULL),
(419, 28, 'Rajarhat', 'রাজারহাট', 1, NULL, NULL),
(420, 28, 'Ulipur', 'উলিপুর', 1, NULL, NULL),
(421, 28, 'Chilmari', 'চিলমারি', 1, NULL, NULL),
(422, 28, 'Rowmari', 'রউমারি', 1, NULL, NULL),
(423, 28, 'Char Rajibpur', 'চর রাজিবপুর', 1, NULL, NULL),
(424, 29, 'Lalmanirhat Sadar', 'লালমনিরহাট সদর', 1, NULL, NULL),
(425, 29, 'Aditmari', 'আদিতমারি', 1, NULL, NULL),
(426, 29, 'Kaliganj', 'কালীগঞ্জ', 1, NULL, NULL),
(427, 29, 'Hatibandha', 'হাতিবান্ধা', 1, NULL, NULL),
(428, 29, 'Patgram', 'পাটগ্রাম', 1, NULL, NULL),
(429, 30, 'Nilphamari Sadar', 'নীলফামারী সদর', 1, NULL, NULL),
(430, 30, 'Saidpur', 'সৈয়দপুর', 1, NULL, NULL),
(431, 30, 'Jaldhaka', 'জলঢাকা', 1, NULL, NULL),
(432, 30, 'Kishoreganj', 'কিশোরগঞ্জ', 1, NULL, NULL),
(433, 30, 'Domar', 'ডোমার', 1, NULL, NULL),
(434, 30, 'Dimla', 'ডিমলা', 1, NULL, NULL),
(435, 31, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 1, NULL, NULL),
(436, 31, 'Debiganj', 'দেবীগঞ্জ', 1, NULL, NULL),
(437, 31, 'Boda', 'বোদা', 1, NULL, NULL),
(438, 31, 'Atwari', 'আটোয়ারি', 1, NULL, NULL),
(439, 31, 'Tetulia', 'তেতুলিয়া', 1, NULL, NULL),
(440, 32, 'Badarganj', 'বদরগঞ্জ', 1, NULL, NULL),
(441, 32, 'Mithapukur', 'মিঠাপুকুর', 1, NULL, NULL),
(442, 32, 'Gangachara', 'গঙ্গাচরা', 1, NULL, NULL),
(443, 32, 'Kaunia', 'কাউনিয়া', 1, NULL, NULL),
(444, 32, 'Rangpur Sadar', 'রংপুর সদর', 1, NULL, NULL),
(445, 32, 'Pirgachha', 'পীরগাছা', 1, NULL, NULL),
(446, 32, 'Pirganj', 'পীরগঞ্জ', 1, NULL, NULL),
(447, 32, 'Taraganj', 'তারাগঞ্জ', 1, NULL, NULL),
(448, 33, 'Thakurgaon Sadar Upazila', 'ঠাকুরগাঁও সদর', 1, NULL, NULL),
(449, 33, 'Pirganj Upazila', 'পীরগঞ্জ', 1, NULL, NULL),
(450, 33, 'Baliadangi Upazila', 'বালিয়াডাঙ্গি', 1, NULL, NULL),
(451, 33, 'Haripur Upazila', 'হরিপুর', 1, NULL, NULL),
(452, 33, 'Ranisankail Upazila', 'রাণীসংকইল', 1, NULL, NULL),
(453, 51, 'Ajmiriganj', 'আজমিরিগঞ্জ', 1, NULL, NULL),
(454, 51, 'Baniachang', 'বানিয়াচং', 1, NULL, NULL),
(455, 51, 'Bahubal', 'বাহুবল', 1, NULL, NULL),
(456, 51, 'Chunarughat', 'চুনারুঘাট', 1, NULL, NULL),
(457, 51, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 1, NULL, NULL),
(458, 51, 'Lakhai', 'লাক্ষাই', 1, NULL, NULL),
(459, 51, 'Madhabpur', 'মাধবপুর', 1, NULL, NULL),
(460, 51, 'Nabiganj', 'নবীগঞ্জ', 1, NULL, NULL),
(461, 51, 'Shaistagonj Upazila', 'শায়েস্তাগঞ্জ', 1, NULL, NULL),
(462, 52, 'Moulvibazar Sadar', 'মৌলভীবাজার', 1, NULL, NULL),
(463, 52, 'Barlekha', 'বড়লেখা', 1, NULL, NULL),
(464, 52, 'Juri', 'জুড়ি', 1, NULL, NULL),
(465, 52, 'Kamalganj', 'কামালগঞ্জ', 1, NULL, NULL),
(466, 52, 'Kulaura', 'কুলাউরা', 1, NULL, NULL),
(467, 52, 'Rajnagar', 'রাজনগর', 1, NULL, NULL),
(468, 52, 'Sreemangal', 'শ্রীমঙ্গল', 1, NULL, NULL),
(469, 53, 'Bishwamvarpur', 'বিসশম্ভারপুর', 1, NULL, NULL),
(470, 53, 'Chhatak', 'ছাতক', 1, NULL, NULL),
(471, 53, 'Derai', 'দেড়াই', 1, NULL, NULL),
(472, 53, 'Dharampasha', 'ধরমপাশা', 1, NULL, NULL),
(473, 53, 'Dowarabazar', 'দোয়ারাবাজার', 1, NULL, NULL),
(474, 53, 'Jagannathpur', 'জগন্নাথপুর', 1, NULL, NULL),
(475, 53, 'Jamalganj', 'জামালগঞ্জ', 1, NULL, NULL),
(476, 53, 'Sulla', 'সুল্লা', 1, NULL, NULL),
(477, 53, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 1, NULL, NULL),
(478, 53, 'Shanthiganj', 'শান্তিগঞ্জ', 1, NULL, NULL),
(479, 53, 'Tahirpur', 'তাহিরপুর', 1, NULL, NULL),
(480, 54, 'Sylhet Sadar', 'সিলেট সদর', 1, NULL, NULL),
(481, 54, 'Beanibazar', 'বেয়ানিবাজার', 1, NULL, NULL),
(482, 54, 'Bishwanath', 'বিশ্বনাথ', 1, NULL, NULL),
(483, 54, 'Dakshin Surma Upazila', 'দক্ষিণ সুরমা', 1, NULL, NULL),
(484, 54, 'Balaganj', 'বালাগঞ্জ', 1, NULL, NULL),
(485, 54, 'Companiganj', 'কোম্পানিগঞ্জ', 1, NULL, NULL),
(486, 54, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 1, NULL, NULL),
(487, 54, 'Golapganj', 'গোলাপগঞ্জ', 1, NULL, NULL),
(488, 54, 'Gowainghat', 'গোয়াইনঘাট', 1, NULL, NULL),
(489, 54, 'Jaintiapur', 'জয়ন্তপুর', 1, NULL, NULL),
(490, 54, 'Kanaighat', 'কানাইঘাট', 1, NULL, NULL),
(491, 54, 'Zakiganj', 'জাকিগঞ্জ', 1, NULL, NULL),
(492, 54, 'Nobigonj', 'নবীগঞ্জ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_menus`
--

CREATE TABLE `user_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentMenu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuLink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuIcon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` int(11) NOT NULL,
  `menuStatus` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_menus`
--

INSERT INTO `user_menus` (`id`, `parentMenu`, `menuName`, `menuLink`, `menuIcon`, `orderBy`, `menuStatus`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Dashboard', 'admin.index', 'fa fa-shopping-bag', 0, '1', '2019-08-30 04:08:49', '2020-03-16 03:34:54'),
(15, '77', 'Category', 'category.index', 'fa fa-caret-right', 1, '1', '2019-08-30 05:28:59', '2020-03-16 07:16:00'),
(18, NULL, 'Website Section', 'admin.index', 'fa fa-bars', 1, '1', '2019-08-30 05:47:44', '2020-03-21 02:53:02'),
(19, '18', 'Website Information', 'site.info', 'fa fa-caret-right', 1, '1', '2019-08-30 05:48:51', '2020-02-13 03:46:37'),
(20, '18', 'Menu', 'menu.index', 'fa fa-caret-right', 3, '1', '2019-08-30 05:49:27', '2020-03-16 02:07:32'),
(21, '18', 'Sliders', 'sliders.index', 'fa fa-caret-right', 4, '1', '2019-08-30 05:50:07', '2020-03-16 02:09:34'),
(26, '18', 'Contact List', 'contacts.index', 'fa fa-caret-right', 5, '1', '2019-08-30 05:53:19', '2020-03-16 02:10:08'),
(28, '18', 'Customer Review', 'reviews.index', 'fa fa-caret-right', 9, '0', '2019-08-30 05:55:02', '2020-03-16 02:12:56'),
(34, '18', 'Subscriber', 'subscribers.index', 'fa fa-caret-right', 7, '0', '2019-08-30 05:58:05', '2020-03-16 02:12:01'),
(36, NULL, 'User Management', 'admin.index', 'fa fa-bars', 10, '1', '2019-08-30 06:00:46', '2020-03-20 23:29:08'),
(37, '36', 'Admin Panel Information', 'admin.logo', 'fa fa-caret-right', 1, '1', '2019-08-30 06:01:24', '2020-03-20 23:27:59'),
(38, '36', 'Menus', 'usermenu.index', 'fa fa-caret-right', 2, '1', '2019-08-30 06:01:52', '2020-03-20 23:29:19'),
(39, '36', 'Role', 'user-roles.index', 'fa fa-caret-right', 3, '1', '2019-08-30 06:02:12', '2020-03-20 23:29:56'),
(40, '36', 'User', 'users.index', 'fa fa-caret-right', 4, '1', '2019-08-30 06:02:35', '2020-03-20 23:30:18'),
(70, '77', 'Articles', 'articles.index', 'fa fa-caret', 6, '1', '2019-10-20 06:33:09', '2020-03-16 04:56:56'),
(72, '78', 'Photo Gallery', 'photoGallery.index', 'fa fa-caret', 18, '0', '2019-11-02 00:46:00', '2020-03-21 02:53:59'),
(77, NULL, 'Contents', 'admin.index', 'fa fa-caret', 2, '1', '2019-11-17 00:27:57', '2020-03-21 02:53:12'),
(78, NULL, 'Gallery', 'admin.index', 'fa fa-bars', 3, '0', '2019-11-17 00:30:27', '2020-03-21 02:53:58'),
(81, '18', 'Social Links', 'social.index', 'fa fa-caret', 6, '1', '2019-12-01 05:08:56', '2020-03-16 02:10:34'),
(87, '89', 'Districts', 'district.index', 'fa fa-caret', 1, '0', '2019-12-05 04:01:44', '2020-01-11 00:28:17'),
(88, '89', 'Thana', 'thana.index', 'fa fa-caret', 2, '0', '2019-12-05 04:16:16', '2020-01-11 00:28:41'),
(89, NULL, 'Basic Setup', 'admin.index', 'fa fa-bars', 2, '1', '2020-01-11 00:28:02', '2020-01-11 00:28:02'),
(90, '18', 'Customers', 'customers.index', 'fa fa-caret', 8, '0', '2020-01-15 04:32:13', '2020-03-16 02:12:29'),
(91, NULL, 'Teams', 'admin.index', 'fa fa-bars', 15, '0', '2020-01-16 05:41:51', '2020-03-16 06:33:21'),
(92, '91', 'Team Category', 'teamCategory.index', 'fa fa-caret', 1, '0', '2020-01-16 05:42:25', '2020-02-10 02:15:10'),
(93, '91', 'Team', 'team.index', 'fa fa-caret', 2, '0', '2020-01-16 05:42:56', '2020-03-16 06:33:19'),
(94, '77', 'Products', 'products.index', 'fa fa-caret', 2, '0', '2020-01-16 10:40:09', '2020-03-16 03:37:06'),
(96, '18', 'Blogs', 'blogs.index', 'fa fa-caret', 10, '0', '2020-01-21 03:32:28', '2020-06-07 14:30:16'),
(97, '18', 'Testimonial', 'testimonial.index', 'fa fa-caret', 11, '1', '2020-01-26 09:34:18', '2020-03-16 02:15:04'),
(100, '18', 'Contact Address', 'contactAddress.index', 'fa fa-caret-right', 2, '1', '2020-02-13 03:47:03', '2020-02-13 03:47:03'),
(101, '77', 'Services', 'services.index', 'fa fa-caret-right', 3, '1', '2020-03-16 03:10:29', '2020-03-16 03:10:29'),
(102, '77', 'Study Destination', 'studyDestination.index', 'fa fa-caret-right', 4, '1', '2020-03-16 04:56:46', '2020-03-16 04:56:46'),
(103, '77', 'Scholarship', 'scholarship.index', 'fa fa-caret-right', 5, '1', '2020-03-16 06:46:46', '2020-03-16 06:46:46'),
(104, '18', 'Banners', 'banners.index', 'fa fa-caret-right', 12, '1', '2020-03-18 03:06:26', '2020-03-18 03:06:26'),
(105, '18', 'Partners', 'partners.index', 'fa fa-caret-right', 13, '1', '2020-03-18 03:30:34', '2020-03-18 03:30:34'),
(106, '36', 'My Account', 'user.account', 'fa fa-caret-right', 5, '1', '2020-03-20 23:31:55', '2020-03-20 23:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu_actions`
--

CREATE TABLE `user_menu_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentmenuId` int(11) NOT NULL,
  `menuType` int(11) NOT NULL,
  `actionName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionLink` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `actionStatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_menu_actions`
--

INSERT INTO `user_menu_actions` (`id`, `parentmenuId`, `menuType`, `actionName`, `actionLink`, `orderBy`, `actionStatus`, `created_at`, `updated_at`) VALUES
(4, 15, 1, 'Add', 'category.add', 1, 1, '2019-09-02 08:09:47', '2019-12-01 02:15:03'),
(6, 15, 4, 'Delete', 'category.delete', 4, 1, '2019-09-02 10:25:39', '2019-12-01 02:15:40'),
(7, 15, 2, 'Edit', 'category.edit', 2, 1, '2019-09-02 10:39:20', '2019-12-01 02:15:24'),
(13, 15, 3, 'Status', 'category.status', 10, 1, '2019-09-03 04:57:13', '2019-12-01 02:15:52'),
(24, 20, 1, 'Add', 'menuadd.page', 21, 1, '2019-09-03 10:48:02', '2019-09-03 10:48:02'),
(25, 20, 3, 'Status', 'menu.changeStatus', 22, 1, '2019-09-03 10:48:43', '2019-09-03 10:48:43'),
(26, 20, 2, 'Edit', 'menu.edit', 23, 1, '2019-09-03 10:49:08', '2019-09-03 10:49:08'),
(27, 20, 4, 'Delete', 'menu.delete', 24, 1, '2019-09-03 10:49:40', '2019-09-03 10:49:40'),
(28, 21, 1, 'Add', 'slideradd.page', 25, 1, '2019-09-03 10:50:35', '2019-09-03 10:50:35'),
(29, 21, 3, 'Status', 'sliders.changeStatus', 26, 1, '2019-09-03 10:52:05', '2019-09-03 10:52:05'),
(34, 21, 2, 'Edit', 'slider.edit', 27, 1, '2019-09-03 10:58:11', '2019-09-03 10:58:11'),
(35, 21, 4, 'Delete', 'slider.delete', 28, 1, '2019-09-03 10:58:58', '2019-09-03 10:58:58'),
(44, 28, 3, 'Status', 'reviews.changereviewStatus', 37, 1, '2019-09-03 11:12:16', '2019-09-03 11:12:16'),
(55, 38, 1, 'Add', 'usermenu.add', 47, 1, '2019-09-03 11:19:40', '2019-09-03 11:19:40'),
(56, 38, 2, 'Edit', 'usermenu.edit', 48, 1, '2019-09-03 11:19:55', '2019-09-03 11:19:55'),
(57, 38, 3, 'Status', 'usermenu.status', 49, 1, '2019-09-03 11:20:21', '2019-09-03 11:20:21'),
(58, 38, 4, 'Delete', 'usermenu-delete', 51, 1, '2019-09-03 11:20:37', '2019-09-06 09:25:44'),
(59, 40, 1, 'Add', 'useradd.page', 51, 1, '2019-09-03 11:23:08', '2019-09-03 11:23:08'),
(60, 40, 3, 'Status', 'user.changeuserStatus', 52, 1, '2019-09-03 11:23:26', '2019-09-03 11:23:26'),
(61, 40, 2, 'Edit', 'user.edit', 53, 1, '2019-09-03 11:23:47', '2019-09-03 11:23:47'),
(62, 40, 6, 'Change Password', 'user.password', 54, 1, '2019-09-03 11:24:12', '2019-09-03 11:24:12'),
(63, 40, 8, 'View', 'user.account', 55, 0, '2019-09-03 11:24:50', '2020-03-20 23:46:32'),
(64, 39, 1, 'Add', 'userRoleAdd.page', 56, 1, '2019-09-03 11:25:46', '2019-09-03 11:25:46'),
(65, 39, 3, 'Status', 'userRole.changeuserRoleStatus', 57, 1, '2019-09-03 11:26:03', '2019-09-03 11:26:03'),
(66, 39, 2, 'Edit', 'userRole.edit', 58, 1, '2019-09-03 11:26:24', '2019-09-03 11:26:24'),
(67, 39, 5, 'Permission', 'userRole.permission', 59, 1, '2019-09-03 11:26:59', '2019-09-03 11:26:59'),
(86, 38, 8, 'View Action Menu', 'usermenuLink.index', 50, 1, '2019-09-06 09:26:39', '2019-09-06 09:26:39'),
(88, 40, 4, 'Delete User', 'user.delete', 56, 1, '2019-09-06 09:31:27', '2019-09-06 09:31:27'),
(89, 34, 4, 'Delete', 'subscriber.delete', 74, 1, '2019-09-06 09:36:56', '2019-09-06 09:36:56'),
(174, 70, 1, 'Add', 'articles.add', 1, 1, '2019-10-20 06:33:38', '2019-10-30 06:10:46'),
(175, 70, 2, 'Edit', 'articles.edit', 2, 1, '2019-10-20 06:33:50', '2019-10-30 06:10:52'),
(176, 70, 4, 'Delete', 'articles.delete', 3, 1, '2019-10-20 06:34:04', '2019-10-30 06:10:59'),
(177, 70, 3, 'Status', 'articles.status', 4, 1, '2019-10-20 06:34:20', '2019-10-30 06:11:05'),
(182, 72, 1, 'Add', 'photoGallery.add', 1, 1, '2019-11-02 00:46:51', '2019-12-01 03:13:30'),
(183, 72, 2, 'Edit', 'photoGallery.edit', 2, 1, '2019-11-02 00:47:03', '2019-12-01 03:13:38'),
(184, 72, 4, 'Delete', 'photoGallery.delete', 3, 1, '2019-11-02 00:47:28', '2019-12-01 03:13:46'),
(185, 72, 3, 'Status', 'photoGallery.status', 4, 1, '2019-11-02 00:47:43', '2019-12-01 03:13:54'),
(206, 81, 1, 'Add', 'social.add', 1, 1, '2019-12-01 05:15:10', '2019-12-01 05:15:10'),
(207, 81, 2, 'Edit', 'social.edit', 2, 1, '2019-12-01 05:15:21', '2019-12-01 05:15:21'),
(208, 81, 4, 'Delete', 'social.delete', 3, 1, '2019-12-01 05:15:32', '2019-12-01 05:15:32'),
(209, 81, 3, 'Status', 'social.status', 4, 1, '2019-12-01 05:17:02', '2019-12-01 05:17:02'),
(219, 39, 4, 'Delete', 'userRole.detele', 60, 1, '2019-12-04 05:47:47', '2019-12-04 05:49:01'),
(224, 87, 1, 'Add', 'district.add', 1, 1, '2019-12-05 04:02:05', '2019-12-05 04:02:05'),
(225, 87, 2, 'Edit', 'district.edit', 2, 1, '2019-12-05 04:02:17', '2019-12-05 04:02:17'),
(226, 87, 4, 'Delete', 'district.delete', 3, 1, '2019-12-05 04:02:40', '2019-12-05 04:02:40'),
(227, 87, 3, 'Status', 'district.status', 4, 1, '2019-12-05 04:02:56', '2019-12-05 04:02:56'),
(228, 88, 1, 'Add', 'thana.add', 1, 1, '2019-12-05 04:16:39', '2019-12-05 04:16:39'),
(229, 88, 2, 'Edit', 'thana.edit', 2, 1, '2019-12-05 04:16:53', '2019-12-05 04:16:53'),
(230, 88, 4, 'Delete', 'thana.delete', 3, 1, '2019-12-05 04:17:09', '2019-12-05 04:17:09'),
(231, 90, 1, 'Add', 'customers.add', 1, 1, '2020-01-15 04:33:12', '2020-01-15 04:33:12'),
(232, 90, 2, 'Edit', 'customers.edit', 2, 1, '2020-01-15 04:37:25', '2020-01-15 04:37:25'),
(233, 90, 3, 'Status', 'customers.status', 3, 1, '2020-01-15 04:38:13', '2020-01-15 04:38:13'),
(234, 90, 4, 'Delete', 'customers.delete', 4, 1, '2020-01-15 04:38:29', '2020-01-15 04:38:29'),
(235, 92, 1, 'Add', 'teamCategory.add', 1, 1, '2020-01-16 05:43:38', '2020-01-16 05:43:38'),
(236, 92, 2, 'Edit', 'teamCategory.edit', 2, 1, '2020-01-16 05:43:59', '2020-01-16 05:43:59'),
(237, 92, 4, 'Delete', 'teamCategory.delete', 3, 1, '2020-01-16 05:44:14', '2020-01-16 05:44:14'),
(238, 92, 3, 'Status', 'teamCategory.status', 4, 1, '2020-01-16 05:44:33', '2020-01-16 05:44:33'),
(239, 93, 1, 'Add', 'team.add', 1, 1, '2020-01-16 05:45:43', '2020-01-16 05:45:43'),
(240, 93, 2, 'Edit', 'team.edit', 2, 1, '2020-01-16 05:45:55', '2020-01-16 05:45:55'),
(241, 93, 4, 'Delete', 'team.delete', 3, 1, '2020-01-16 05:46:06', '2020-01-16 05:46:06'),
(242, 93, 3, 'Status', 'team.status', 4, 1, '2020-01-16 05:46:19', '2020-01-16 05:46:19'),
(243, 94, 1, 'Add', 'products.add', 1, 1, '2020-01-16 10:43:50', '2020-01-16 10:43:50'),
(244, 94, 2, 'Edit', 'products.edit', 2, 1, '2020-01-16 10:44:27', '2020-01-16 10:44:27'),
(245, 94, 4, 'Delete', 'products.delete', 3, 1, '2020-01-16 10:46:45', '2020-01-16 10:46:45'),
(246, 94, 3, 'Status', 'products.status', 4, 1, '2020-01-16 10:47:25', '2020-01-16 10:47:25'),
(251, 96, 1, 'Add', 'blogs.add', 1, 1, '2020-01-21 03:34:04', '2020-01-21 03:34:04'),
(252, 96, 2, 'Edit', 'blogs.edit', 2, 1, '2020-01-21 03:34:14', '2020-01-21 03:34:14'),
(253, 96, 4, 'Delete', 'blogs.delete', 3, 1, '2020-01-21 03:35:15', '2020-01-21 03:35:15'),
(254, 96, 3, 'Status', 'blogs.status', 4, 1, '2020-01-21 03:35:52', '2020-01-21 03:35:52'),
(255, 97, 1, 'Add', 'testimonial.add', 1, 1, '2020-01-26 09:35:23', '2020-01-26 09:35:23'),
(256, 97, 2, 'Edit', 'testimonial.edit', 2, 1, '2020-01-26 09:35:36', '2020-01-26 09:35:36'),
(257, 97, 4, 'Delete', 'testimonial.delete', 3, 1, '2020-01-26 09:35:48', '2020-01-26 09:35:48'),
(258, 97, 3, 'Status', 'testimonial.status', 4, 1, '2020-01-26 09:36:06', '2020-01-26 09:36:06'),
(263, 100, 1, 'Add', 'contactAddress.add', 1, 1, '2020-02-13 03:47:34', '2020-02-13 03:47:34'),
(264, 100, 2, 'Edit', 'contactAddress.edit', 2, 1, '2020-02-13 03:48:02', '2020-02-13 03:48:02'),
(265, 100, 4, 'Delete', 'contactAddress.delete', 3, 1, '2020-02-13 03:48:18', '2020-02-13 03:48:18'),
(266, 100, 3, 'Status', 'contactAddress.status', 4, 1, '2020-02-13 03:48:35', '2020-02-13 03:48:35'),
(267, 101, 1, 'Add', 'services.add', 1, 1, '2020-03-16 03:23:45', '2020-03-16 03:23:45'),
(268, 101, 2, 'Edit', 'services.edit', 2, 1, '2020-03-16 03:24:29', '2020-03-16 03:24:29'),
(269, 101, 4, 'Delete', 'services.delete', 3, 1, '2020-03-16 03:26:31', '2020-03-16 03:26:31'),
(270, 101, 3, 'Status', 'services.status', 4, 1, '2020-03-16 03:27:14', '2020-03-16 03:27:14'),
(271, 102, 1, 'Add', 'studyDestination.add', 1, 1, '2020-03-16 04:57:28', '2020-03-16 04:57:28'),
(272, 102, 2, 'Edit', 'studyDestination.edit', 2, 1, '2020-03-16 04:57:47', '2020-03-16 04:57:47'),
(273, 102, 4, 'Delete', 'studyDestination.delete', 3, 1, '2020-03-16 04:58:53', '2020-03-16 04:58:53'),
(274, 102, 3, 'Status', 'studyDestination.status', 4, 1, '2020-03-16 04:59:08', '2020-03-16 04:59:08'),
(275, 103, 1, 'Add', 'scholarship.add', 1, 1, '2020-03-16 06:47:23', '2020-03-16 06:47:23'),
(276, 103, 2, 'Edit', 'scholarship.edit', 2, 1, '2020-03-16 06:47:35', '2020-03-16 06:47:55'),
(277, 103, 4, 'Delete', 'scholarship.delete', 3, 1, '2020-03-16 06:47:48', '2020-03-16 06:47:48'),
(278, 103, 3, 'Status', 'scholarship.status', 4, 1, '2020-03-16 06:54:16', '2020-03-16 06:54:16'),
(279, 104, 1, 'Add', 'banneradd.page', 1, 1, '2020-03-18 03:06:47', '2020-03-18 03:06:47'),
(280, 104, 2, 'Edit', 'banner.edit', 2, 1, '2020-03-18 03:07:08', '2020-03-18 03:07:08'),
(281, 104, 4, 'Delete', 'banner.delete', 3, 1, '2020-03-18 03:07:26', '2020-03-18 03:07:26'),
(282, 104, 3, 'Status', 'banners.changebannerStatus', 4, 1, '2020-03-18 03:07:46', '2020-03-18 03:07:46'),
(283, 105, 1, 'Add', 'partners.add', 1, 1, '2020-03-18 03:30:59', '2020-03-18 03:30:59'),
(284, 105, 2, 'Edit', 'partners.edit', 2, 1, '2020-03-18 03:31:10', '2020-03-18 03:31:10'),
(285, 105, 4, 'Delete', 'partners.delete', 3, 1, '2020-03-18 03:31:28', '2020-03-18 03:31:28'),
(286, 105, 3, 'Status', 'partners.status', 4, 1, '2020-03-18 03:31:49', '2020-03-18 03:31:49'),
(287, 106, 6, 'Change Password', 'userAccount.password', 1, 1, '2020-03-21 00:08:58', '2020-03-21 00:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentRole` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionPermission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `parentRole`, `level`, `status`, `permission`, `actionPermission`, `created_at`, `updated_at`) VALUES
(1, 'Super User', NULL, 1, 1, '3,18,19,20,21,26,81,96,97,100,104,105,36,37,38,39,40,77,15,70,94,101,102,103', '24,25,26,27,28,29,34,35,206,207,208,209,251,252,253,254,255,256,257,258,263,264,265,266,279,280,281,282,283,284,285,286,55,56,57,86,58,64,65,66,67,219,59,60,61,62,88,4,7,6,13,174,175,176,177,243,244,245,246,267,268,269,270,271,272,273,274,275,276,277,278', '2019-04-17 00:50:05', '2020-06-07 14:29:52'),
(2, 'Admin', 1, 2, 1, '3,18,19,21,26,34,81,90,96,97,36,37,38,39,40,106,77,70,94', '28,29,34,35,89,206,207,208,209,231,232,233,234,251,252,253,254,255,256,257,258,55,56,57,86,58,64,65,66,67,59,60,61,62,88,287,174,175,176,177,243,244,245,246', '2019-04-17 00:52:54', '2020-03-21 00:11:20'),
(3, 'Editor', 2, 3, 1, '3,18,19,20,21,26,28,34,81,90,96,97,100,104,105,36,37,38,39,40,74,77,15,70,94,101,102,103,78,72,89,87,88', '24,25,26,27,28,29,34,35,44,89,206,207,208,209,231,232,233,234,251,252,253,254,255,256,257,258,263,264,265,266,279,280,281,282,283,284,285,286,55,56,57,86,58,64,65,66,67,219,59,60,61,62,63,88,4,7,6,13,174,175,176,177,243,244,245,246,267,268,269,270,271,272,273,274,275,276,277,278,182,183,184,185,224,225,226,227,228,229,230', '2020-03-17 10:34:01', '2020-03-20 22:41:48'),
(4, 'Checker', 3, 4, 0, NULL, NULL, '2020-03-17 10:35:17', '2020-03-20 22:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_log`
--
ALTER TABLE `access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_block`
--
ALTER TABLE `header_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_destination`
--
ALTER TABLE `study_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_category`
--
ALTER TABLE `team_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_menus`
--
ALTER TABLE `user_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu_actions`
--
ALTER TABLE `user_menu_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_log`
--
ALTER TABLE `access_log`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `header_block`
--
ALTER TABLE `header_block`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `study_destination`
--
ALTER TABLE `study_destination`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_category`
--
ALTER TABLE `team_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `user_menus`
--
ALTER TABLE `user_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `user_menu_actions`
--
ALTER TABLE `user_menu_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
