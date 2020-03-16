-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_cemara_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sample Client', '0681211', '123@gmail.com', 'AS ahjkbsa jsb', '2020-03-03 09:36:30', '2020-03-03 09:36:30'),
(2, 'Sample Client ke 2', '08121511', 'email@email.com', 'adajsba nsa', '2020-03-03 09:36:13', '2020-03-03 09:36:13'),
(3, 'Client ke 3', '08123456789', 'email@domain.com', 'asasasasasaj sahsbash', '2020-03-03 09:53:18', '2020-03-03 09:53:18'),
(13, 'Angga Elang Dev', '0212121212', NULL, NULL, '2020-03-04 04:01:03', '2020-03-04 04:01:03'),
(14, 'Testing Client Baru', '2704421214', 'admin@cemara', NULL, '2020-03-13 03:46:10', '2020-03-13 03:46:10'),
(15, 'Test New Client From AJAX', 'sasas', 'asasasas', NULL, '2020-03-13 23:51:13', '2020-03-13 23:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `notes`, `image_url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tanpa Divisi', NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(2, 'Divisi IT', NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(3, 'Divisi Produksi', NULL, NULL, NULL, '2020-02-25 07:24:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_brands`
--

CREATE TABLE `inventory_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_brands`
--

INSERT INTO `inventory_brands` (`id`, `name`, `notes`, `image_url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tanpa Merk', NULL, NULL, NULL, NULL, NULL),
(2, '555', NULL, NULL, NULL, NULL, NULL),
(3, 'A3', NULL, NULL, NULL, NULL, NULL),
(4, 'Aceclafied', NULL, NULL, NULL, NULL, NULL),
(5, 'Acer', NULL, NULL, NULL, NULL, NULL),
(6, 'Alfamart', NULL, NULL, NULL, NULL, NULL),
(7, 'Alison', NULL, NULL, NULL, NULL, NULL),
(8, 'Aqua', NULL, NULL, NULL, NULL, NULL),
(9, 'Araldite', NULL, NULL, NULL, NULL, NULL),
(10, 'Artline', NULL, NULL, NULL, NULL, NULL),
(11, 'Asus', NULL, NULL, NULL, NULL, NULL),
(12, 'ATS', NULL, NULL, NULL, NULL, NULL),
(13, 'Avx', NULL, NULL, NULL, NULL, NULL),
(14, 'Axeel', NULL, NULL, NULL, NULL, NULL),
(15, 'Bantex', NULL, NULL, NULL, NULL, NULL),
(16, 'Baofeng', NULL, NULL, NULL, NULL, NULL),
(17, 'Benex', NULL, NULL, NULL, NULL, NULL),
(18, 'Bison', NULL, NULL, NULL, NULL, NULL),
(19, 'Bitec', NULL, NULL, NULL, NULL, NULL),
(20, 'Black & D', NULL, NULL, NULL, NULL, NULL),
(21, 'Borma', NULL, NULL, NULL, NULL, NULL),
(22, 'Bosch', NULL, NULL, NULL, NULL, NULL),
(23, 'Broco', NULL, NULL, NULL, NULL, NULL),
(24, 'Camel', NULL, NULL, NULL, NULL, NULL),
(25, 'Canon M100', NULL, NULL, NULL, NULL, NULL),
(26, 'Casio', NULL, NULL, NULL, NULL, NULL),
(27, 'China', NULL, NULL, NULL, NULL, NULL),
(28, 'Dacom', NULL, NULL, NULL, NULL, NULL),
(29, 'Dca', NULL, NULL, NULL, NULL, NULL),
(30, 'Deli', NULL, NULL, NULL, NULL, NULL),
(31, 'Dexsta', NULL, NULL, NULL, NULL, NULL),
(32, 'Dextone', NULL, NULL, NULL, NULL, NULL),
(33, 'Drekcell', NULL, NULL, NULL, NULL, NULL),
(34, 'Dunia Mas', NULL, NULL, NULL, NULL, NULL),
(35, 'Ekonomi', NULL, NULL, NULL, NULL, NULL),
(36, 'Entena', NULL, NULL, NULL, NULL, NULL),
(37, 'Epson', NULL, NULL, NULL, NULL, NULL),
(38, 'Essen', NULL, NULL, NULL, NULL, NULL),
(39, 'Eterna', NULL, NULL, NULL, NULL, NULL),
(40, 'Etona', NULL, NULL, NULL, NULL, NULL),
(41, 'Excel', NULL, NULL, NULL, NULL, NULL),
(42, 'F75', NULL, NULL, NULL, NULL, NULL),
(43, 'Faber', NULL, NULL, NULL, NULL, NULL),
(44, 'Fox', NULL, NULL, NULL, NULL, NULL),
(45, 'FSK', NULL, NULL, NULL, NULL, NULL),
(46, 'GCC', NULL, NULL, NULL, NULL, NULL),
(47, 'Genius', NULL, NULL, NULL, NULL, NULL),
(48, 'Gold Fox', NULL, NULL, NULL, NULL, NULL),
(49, 'Grebel', NULL, NULL, NULL, NULL, NULL),
(50, 'Gunindo', NULL, NULL, NULL, NULL, NULL),
(51, 'Haier', NULL, NULL, NULL, NULL, NULL),
(52, 'Haston', NULL, NULL, NULL, NULL, NULL),
(53, 'HP', NULL, NULL, NULL, NULL, NULL),
(54, 'Hurica', NULL, NULL, NULL, NULL, NULL),
(55, 'Imudex', NULL, NULL, NULL, NULL, NULL),
(56, 'IN3106', NULL, NULL, NULL, NULL, NULL),
(57, 'Index', NULL, NULL, NULL, NULL, NULL),
(58, 'Informa', NULL, NULL, NULL, NULL, NULL),
(59, 'Inspiroy', NULL, NULL, NULL, NULL, NULL),
(60, 'Joyko', NULL, NULL, NULL, NULL, NULL),
(61, 'Kangaro', NULL, NULL, NULL, NULL, NULL),
(62, 'Ken Master', NULL, NULL, NULL, NULL, NULL),
(63, 'Kenko', NULL, NULL, NULL, NULL, NULL),
(64, 'Kiki', NULL, NULL, NULL, NULL, NULL),
(65, 'Kin', NULL, NULL, NULL, NULL, NULL),
(66, 'Kingstone', NULL, NULL, NULL, NULL, NULL),
(67, 'Kingstone Tape', NULL, NULL, NULL, NULL, NULL),
(68, 'Kirin', NULL, NULL, NULL, NULL, NULL),
(69, 'Korea', NULL, NULL, NULL, NULL, NULL),
(70, 'Kris', NULL, NULL, NULL, NULL, NULL),
(71, 'Krisbow', NULL, NULL, NULL, NULL, NULL),
(72, 'Laba Laba', NULL, NULL, NULL, NULL, NULL),
(73, 'Larkin', NULL, NULL, NULL, NULL, NULL),
(74, 'Leister', NULL, NULL, NULL, NULL, NULL),
(75, 'Lenovo', NULL, NULL, NULL, NULL, NULL),
(76, 'LG', NULL, NULL, NULL, NULL, NULL),
(77, 'Linex', NULL, NULL, NULL, NULL, NULL),
(78, 'Lionstar', NULL, NULL, NULL, NULL, NULL),
(79, 'Logitech', NULL, NULL, NULL, NULL, NULL),
(80, 'Max', NULL, NULL, NULL, NULL, NULL),
(81, 'MDM', NULL, NULL, NULL, NULL, NULL),
(82, 'Meiden', NULL, NULL, NULL, NULL, NULL),
(83, 'Metabo', NULL, NULL, NULL, NULL, NULL),
(84, 'Mimaki', NULL, NULL, NULL, NULL, NULL),
(85, 'Molab', NULL, NULL, NULL, NULL, NULL),
(86, 'MTM', NULL, NULL, NULL, NULL, NULL),
(87, 'Multiopro', NULL, NULL, NULL, NULL, NULL),
(88, 'Mutoh', NULL, NULL, NULL, NULL, NULL),
(89, 'Nachi Tape', NULL, NULL, NULL, NULL, NULL),
(90, 'Nelson', NULL, NULL, NULL, NULL, NULL),
(91, 'Neudelan', NULL, NULL, NULL, NULL, NULL),
(92, 'Nipon Tape', NULL, NULL, NULL, NULL, NULL),
(93, 'Nito', NULL, NULL, NULL, NULL, NULL),
(94, 'Ocean', NULL, NULL, NULL, NULL, NULL),
(95, 'Onemed', NULL, NULL, NULL, NULL, NULL),
(96, 'Panasonic', NULL, NULL, NULL, NULL, NULL),
(97, 'Paperline', NULL, NULL, NULL, NULL, NULL),
(98, 'Paperone', NULL, NULL, NULL, NULL, NULL),
(99, 'Pextons', NULL, NULL, NULL, NULL, NULL),
(100, 'Philip', NULL, NULL, NULL, NULL, NULL),
(101, 'Piorus', NULL, NULL, NULL, NULL, NULL),
(102, 'Post It', NULL, NULL, NULL, NULL, NULL),
(103, 'Prohek', NULL, NULL, NULL, NULL, NULL),
(104, 'Propan', NULL, NULL, NULL, NULL, NULL),
(105, 'Rakitan Intel', NULL, NULL, NULL, NULL, NULL),
(106, 'Repil x', NULL, NULL, NULL, NULL, NULL),
(107, 'Roland', NULL, NULL, NULL, NULL, NULL),
(108, 'Rotring', NULL, NULL, NULL, NULL, NULL),
(109, 'Ryu', NULL, NULL, NULL, NULL, NULL),
(110, 'Salery', NULL, NULL, NULL, NULL, NULL),
(111, 'Samsung', NULL, NULL, NULL, NULL, NULL),
(112, 'Samurai Paint', NULL, NULL, NULL, NULL, NULL),
(113, 'Sandplex', NULL, NULL, NULL, NULL, NULL),
(114, 'Sapord', NULL, NULL, NULL, NULL, NULL),
(115, 'SC', NULL, NULL, NULL, NULL, NULL),
(116, 'SDI', NULL, NULL, NULL, NULL, NULL),
(117, 'Seagate', NULL, NULL, NULL, NULL, NULL),
(118, 'Sensi', NULL, NULL, NULL, NULL, NULL),
(119, 'Sharp', NULL, NULL, NULL, NULL, NULL),
(120, 'Shayu', NULL, NULL, NULL, NULL, NULL),
(121, 'Sidu', NULL, NULL, NULL, NULL, NULL),
(122, 'Smartfren', NULL, NULL, NULL, NULL, NULL),
(123, 'Snowman', NULL, NULL, NULL, NULL, NULL),
(124, 'SPC', NULL, NULL, NULL, NULL, NULL),
(125, 'SPS', NULL, NULL, NULL, NULL, NULL),
(126, 'Staedtier', NULL, NULL, NULL, NULL, NULL),
(127, 'Standard', NULL, NULL, NULL, NULL, NULL),
(128, 'Stanly', NULL, NULL, NULL, NULL, NULL),
(129, 'Stanvik', NULL, NULL, NULL, NULL, NULL),
(130, 'Suzuki', NULL, NULL, NULL, NULL, NULL),
(131, 'Tangit', NULL, NULL, NULL, NULL, NULL),
(132, 'Targus', NULL, NULL, NULL, NULL, NULL),
(133, 'Tekiro', NULL, NULL, NULL, NULL, NULL),
(134, 'Tiger', NULL, NULL, NULL, NULL, NULL),
(135, 'Tokay', NULL, NULL, NULL, NULL, NULL),
(136, 'Top', NULL, NULL, NULL, NULL, NULL),
(137, 'Toshiba', NULL, NULL, NULL, NULL, NULL),
(138, 'Toyo', NULL, NULL, NULL, NULL, NULL),
(139, 'TP-LINK', NULL, NULL, NULL, NULL, NULL),
(140, 'Turbo', NULL, NULL, NULL, NULL, NULL),
(141, 'Type Super', NULL, NULL, NULL, NULL, NULL),
(142, 'Ultra', NULL, NULL, NULL, NULL, NULL),
(143, 'Uniken', NULL, NULL, NULL, NULL, NULL),
(144, 'Uticon', NULL, NULL, NULL, NULL, NULL),
(145, 'Velix', NULL, NULL, NULL, NULL, NULL),
(146, 'Vezel', NULL, NULL, NULL, NULL, NULL),
(147, 'Votre', NULL, NULL, NULL, NULL, NULL),
(148, 'Vtec', NULL, NULL, NULL, NULL, NULL),
(149, 'WD40', NULL, NULL, NULL, NULL, NULL),
(150, 'Wipol', NULL, NULL, NULL, NULL, NULL),
(151, 'Workpro 24\"', NULL, NULL, NULL, NULL, NULL),
(152, 'Xiaomi', NULL, NULL, NULL, NULL, NULL),
(153, 'Xinta', NULL, NULL, NULL, NULL, NULL),
(154, 'Zebra', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_categories`
--

CREATE TABLE `inventory_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_categories`
--

INSERT INTO `inventory_categories` (`id`, `name`, `notes`, `image_url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tanpa Kategori', NULL, NULL, NULL, NULL, NULL),
(2, 'Alat Kerja', NULL, NULL, NULL, NULL, NULL),
(3, 'Alat Laser', NULL, NULL, NULL, NULL, NULL),
(4, 'Alat Produksi', NULL, NULL, NULL, NULL, NULL),
(5, 'ATK', NULL, NULL, NULL, NULL, NULL),
(6, 'Bahan Laser', NULL, NULL, NULL, NULL, NULL),
(7, 'Elektronik', NULL, NULL, NULL, NULL, NULL),
(8, 'Rumah Tangga', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `unit_price` decimal(12,0) UNSIGNED DEFAULT NULL,
  `price` decimal(12,0) UNSIGNED DEFAULT NULL,
  `qty` bigint(20) UNSIGNED DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_purchase` timestamp NULL DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_items`
--

INSERT INTO `inventory_items` (`id`, `name`, `user_id`, `category_id`, `brand_id`, `supplier_id`, `division_id`, `unit_price`, `price`, `qty`, `image_url`, `year_of_purchase`, `notes`, `serial_number`, `barcode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1 Set Kunci', 1, 2, 128, 1, 1, '73100', '73100', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0001', NULL, NULL, '2020-02-25 07:28:37', '2020-02-25 07:28:37'),
(2, '1 Set Kunci Bintang', 1, 2, 128, 1, 1, '62000', '62000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0002', NULL, NULL, '2020-02-25 07:28:37', '2020-02-25 07:28:37'),
(3, 'Paket Tool Box Tekiro', 1, 2, 133, 1, 1, NULL, '5000000', 18, NULL, '2019-02-21 11:32:43', '<table dir=\"ltr\" style=\"table-layout: fixed; font-size: 10pt; font-family: Arial; width: 0px; border-collapse: collapse; border: none;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\"><colgroup><col width=\"55\" /><col width=\"284\" /><col width=\"100\" /></colgroup>\r\n<tbody>\r\n<tr style=\"height: 37px;\">\r\n<td style=\"border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: middle; font-size: 12pt; font-weight: bold; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;No&quot;}\">No</td>\r\n<td style=\"border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: middle; font-size: 12pt; font-weight: bold; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Nama Barang&quot;}\">Nama Barang</td>\r\n<td style=\"border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: middle; font-size: 12pt; font-weight: bold; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;QTY&quot;}\">QTY</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;1 Set Kunci Shock 10 - 32&quot;}\">1 Set Kunci Shock 10 - 32</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:18}\">18</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:2}\">2</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Filter Compressor&quot;}\">Filter Compressor</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:3}\">3</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Kunci L 1/2 - 10&quot;}\">Kunci L 1/2 - 10</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:9}\">9</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:4}\">4</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Kunci L 2-10&quot;}\">Kunci L 2-10</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:7}\">7</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:5}\">5</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Obeng + Kecil&quot;}\">Obeng + Kecil</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:6}\">6</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Obeng + Sedang&quot;}\">Obeng + Sedang</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:7}\">7</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Obeng Min Besar&quot;}\">Obeng Min Besar</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:8}\">8</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Obeng Min Sedang&quot;}\">Obeng Min Sedang</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:9}\">9</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Obeng Mini Kecil&quot;}\">Obeng Mini Kecil</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:10}\">10</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Palu Bulat Kecil&quot;}\">Palu Bulat Kecil</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:11}\">11</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Palu Karet&quot;}\">Palu Karet</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:12}\">12</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Ring Pas 22&quot;}\">Ring Pas 22</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:13}\">13</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Stang Kunci Shock&quot;}\">Stang Kunci Shock</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:14}\">14</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Stang Kunci Shock Sedang&quot;}\">Stang Kunci Shock Sedang</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:15}\">15</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Stang Sambung Kunci Shock Panjang&quot;}\">Stang Sambung Kunci Shock Panjang</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:16}\">16</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Stang Sambung Kunci Shock Pendek&quot;}\">Stang Sambung Kunci Shock Pendek</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:17}\">17</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Stang Sambung Kunci Shock Sedang&quot;}\">Stang Sambung Kunci Shock Sedang</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:18}\">18</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt;\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Tang Jepit&quot;}\">Tang Jepit</td>\r\n<td style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000; overflow: hidden; padding: 2px 3px 2px 3px; vertical-align: bottom; font-size: 12pt; text-align: center;\" data-sheets-value=\"{&quot;1&quot;:3,&quot;3&quot;:1}\">1</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p></p>', 'CMK-AK0003', NULL, NULL, '2020-02-25 07:28:37', '2020-02-27 01:36:21'),
(4, '1 Set Kunci SOK P3-P10', 1, 2, 128, 1, 1, '245000', '245000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0004', NULL, NULL, '2020-02-25 07:28:37', '2020-02-25 07:28:37'),
(5, '1 Set Mata Bor', 1, 2, 128, 1, 1, '2606', '86000', 33, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0005', NULL, NULL, '2020-02-25 07:28:37', '2020-02-25 07:28:37'),
(6, '1 Set Mata Obeng - + Panjang', 1, 2, 128, 1, 1, '58000', '58000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0006', NULL, NULL, '2020-02-25 07:28:37', '2020-02-25 07:28:37'),
(7, '1 Set Mata Obeng Pembolong', 1, 2, 45, 1, 1, '52000', '52000', 7, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0007', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(8, 'Amplas 60', 1, 2, 1, 1, 1, '60000', '60000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0008', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(9, 'Bor Cordles + Charger', 1, 2, 71, 1, 1, '550000', '550000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0009', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(10, 'Bor Kaca', 1, 2, 23, 1, 1, '60000', '60000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0010', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(11, 'Cashing Saklar', 1, 2, 96, 1, 1, '7000', '63000', 9, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0011', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(12, 'Catok Akrilik', 1, 2, 74, 1, 1, '700000', '700000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0012', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(13, 'Catok Besar', 1, 2, 52, 1, 1, '43000', '43000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0013', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(14, 'Catok Kecil', 1, 2, 52, 1, 1, '43000', '43000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0014', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(15, 'Catok Sedang', 1, 2, 52, 1, 1, '43000', '43000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0015', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(16, 'Cuter Besar', 1, 2, 22, 1, 1, '96000', '96000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0016', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(17, 'Cuter Besar', 1, 2, 128, 1, 1, '13000', '13000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0017', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(18, 'Cuter Kecil', 1, 2, 63, 1, 1, '6500', '6500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0018', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(19, 'Dongrak Mobil Buaya', 1, 2, 130, 1, 1, '275000', '275000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0019', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(20, 'Dudukan Lampu LED', 1, 2, 100, 1, 1, '85000', '85000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0020', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(21, 'Dudukan Saklar', 1, 2, 23, 1, 1, '4000', '4000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0021', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(22, 'Electric Glinder', 1, 2, 104, 1, 1, '1000000', '1000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0022', NULL, NULL, '2020-02-25 07:28:38', '2020-02-25 07:28:38'),
(23, 'Gegef', 1, 2, 146, 1, 1, '16900', '16900', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0023', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(24, 'Gergaji Besi', 1, 2, 113, 1, 1, '90000', '90000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0024', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(25, 'Gergaji Besi Kecil', 1, 2, 22, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0025', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(26, 'Gergaji Duduk', 1, 2, 109, 1, 1, '559900', '559900', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0026', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(27, 'Gergaji Kayu', 1, 2, 18, 1, 1, '18500', '18500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0027', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(28, 'Gun Tacker', 1, 2, 61, 1, 1, '138500', '138500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0028', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(29, 'Gun Tacker Kecil', 1, 2, 71, 1, 1, '150000', '150000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0029', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(30, 'Gunting Seng', 1, 2, 1, 1, 1, '77000', '77000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0030', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(31, 'Hekter Besar', 1, 2, 60, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0031', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(32, 'Helm Proyek', 1, 2, 3, 1, 1, '29700', '29700', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0032', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(33, 'Hot Gun', 1, 2, 83, 1, 1, '1400000', '1400000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0033', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(34, 'Isi Stepgun 10mm', 1, 2, 61, 1, 1, '22000', '22000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0034', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(35, 'Isi Stepgun 12mm', 1, 2, 80, 1, 1, '22000', '22000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0035', NULL, NULL, '2020-02-25 07:28:39', '2020-02-25 07:28:39'),
(36, 'Jigsaw', 1, 2, 20, 1, 1, '385000', '385000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0036', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(37, 'Jigsaw', 1, 2, 54, 1, 1, '600000', '600000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0037', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(38, 'Kabel Tease', 1, 2, 1, 1, 1, '20000', '40000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0038', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(39, 'Kap Lampu 1/2 Bola', 1, 2, 73, 1, 1, '19000', '114000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0039', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(40, 'Kape Plastik', 1, 2, 1, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0040', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(41, 'Kape Sedang', 1, 2, 14, 1, 1, '8500', '8500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0041', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(42, 'Kater Besar', 1, 2, 63, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0042', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(43, 'Katrol Kecil', 1, 2, 125, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0043', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(44, 'Kikir Besi B', 1, 2, 146, 1, 1, '41800', '41800', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0044', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(45, 'Koas 1 1/2 in', 1, 2, 39, 1, 1, '6000', '6000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0045', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(46, 'Koas 2in', 1, 2, 36, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0046', NULL, NULL, '2020-02-25 07:28:40', '2020-02-25 07:28:40'),
(47, 'Koas 4in', 1, 2, 142, 1, 1, '32000', '32000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0047', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(48, 'Kompresor Kuning', 1, 2, 87, 1, 1, '1450000', '1450000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0048', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(49, 'Kunci Inggris Kecil', 1, 2, 22, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0049', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(50, 'Kunci Inggris Sedang', 1, 2, 91, 1, 1, '53000', '53000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0050', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(51, 'Kunci Kecil', 1, 2, 1, 1, 1, '38000', '190000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0051', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(52, 'Kunci Pas 10', 1, 2, 86, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0052', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(53, 'Kunci Pas 10 + 12', 1, 2, 1, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0053', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(54, 'Kunci Pas 10-11', 1, 2, 16, 1, 1, '38000', '38000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0054', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(55, 'Kunci Pas No.10', 1, 2, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0055', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(56, 'Kunci Pipa', 1, 2, 52, 1, 1, '80000', '80000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0056', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(57, 'Kunci Ring + Pas No.9', 1, 2, 129, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0057', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(58, 'Kunci Ring 18+19', 1, 2, 33, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0058', NULL, NULL, '2020-02-25 07:28:41', '2020-02-25 07:28:41'),
(59, 'Kunci Ring Pas 11', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0059', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(60, 'Kunci Ring Pas 12', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0060', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(61, 'Kunci Ring Pas 13', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0061', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(62, 'Kunci Ring Pas 14', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0062', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(63, 'Kunci Ring Pas 15', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0063', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(64, 'Kunci Ring Pas 19', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0064', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(65, 'Kunci Ring Pas 24', 1, 2, 129, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0065', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(66, 'Kunci Ring Pas 8', 1, 2, 110, 1, 1, '21500', '21500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0066', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(67, 'Kunci Ring Pas 8 -32', 1, 2, 133, 1, 1, '595000', '595000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0067', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(68, 'Kunci Ring Pas 9', 1, 2, 110, 1, 1, '290000', '290000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0068', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(69, 'Kunci Roda', 1, 2, 86, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0069', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(70, 'Kunci Shock', 1, 2, 133, 1, 1, '664100', '664100', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0070', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(71, 'Kunci Shock 10', 1, 2, 28, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0071', NULL, NULL, '2020-02-25 07:28:42', '2020-02-25 07:28:42'),
(72, 'Kunci T 10', 1, 2, 133, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0072', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(73, 'Kunci T 10\"', 1, 2, 133, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0073', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(74, 'Kunci T 12\"', 1, 2, 1, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0074', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(75, 'Kunci T 14\"', 1, 2, 66, 1, 1, '17500', '17500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0075', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(76, 'Lampu LED', 1, 2, 100, 1, 1, '10000', '30000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0076', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(77, 'Lampu LED', 1, 2, 100, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0077', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(78, 'Lamu Spot + Stand', 1, 2, 100, 1, 1, '155000', '155000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0078', NULL, NULL, '2020-02-25 07:28:43', '2020-02-25 07:28:43'),
(79, 'Lem Aibon 2,5 Kg', 1, 2, 144, 1, 1, '148000', '444000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0079', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(80, 'Lem PPC', 1, 2, 131, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0080', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(81, 'Lem Tembak', 1, 2, 99, 1, 1, '29000', '29000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0081', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(82, 'Linggis', 1, 2, 151, 1, 1, '49200', '49200', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0082', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(83, 'Masker', 1, 2, 52, 1, 1, '45000', '45000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0083', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(84, 'Mata Bor ', 1, 2, 22, 1, 1, '55000', '55000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0084', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(85, 'Mata Bor + -', 1, 2, 1, 1, 1, '8000', '72000', 9, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0085', NULL, NULL, '2020-02-25 07:28:44', '2020-02-25 07:28:44'),
(86, 'Mata Jigsaw 1 Set', 1, 2, 22, 1, 1, '136000', '136000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0086', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(87, 'Mata Obeng ', 1, 2, 22, 1, 1, '15000', '60000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0087', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(88, 'Mata Obeng ', 1, 2, 1, 1, 1, '5000', '60000', 12, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0088', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(89, 'Mata Obeng + Pendek', 1, 2, 128, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0089', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(90, 'Mata Obeng Bor Kecil', 1, 2, 1, 1, 1, '9200', '92000', 10, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0090', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(91, 'Mata Obeng Min Pendek', 1, 2, 128, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0091', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(92, 'Mata Shock', 1, 2, 22, 1, 1, '10000', '40000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0092', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(93, 'Mesin Amplas Kecil', 1, 2, 29, 1, 1, '385000', '385000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0093', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(94, 'Mesin Gurindra Sedang', 1, 2, 85, 1, 1, '620000', '620000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0094', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(95, 'Mesin Paku Tembak', 1, 2, 19, 1, 1, '575000', '575000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0095', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(96, 'Mesin Router', 1, 2, 22, 1, 1, '527000', '527000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0096', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(97, 'Meteran Rol', 1, 2, 81, 1, 1, '55000', '55000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0097', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(98, 'Obeng Min Besar', 1, 2, 52, 1, 1, '90000', '90000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0098', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(99, 'Obeng Min Besar', 1, 2, 52, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0099', NULL, NULL, '2020-02-25 07:28:45', '2020-02-25 07:28:45'),
(100, 'Obeng Min Merah Besar', 1, 2, 1, 1, 1, '22000', '22000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0100', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(101, 'Obeng Min Plus Kecil Panjang', 1, 2, 52, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0101', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(102, 'Obeng Min Sedang', 1, 2, 52, 1, 1, '68000', '68000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0102', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(103, 'Obeng Min Sedang', 1, 2, 71, 1, 1, '65000', '65000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0103', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(104, 'Obeng Plus Kecil', 1, 2, 133, 1, 1, '47300', '47300', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0104', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(105, 'Obeng Plus Merah Kecil', 1, 2, 1, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0105', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(106, 'Obeng Plus Pendek', 1, 2, 1, 1, 1, '24000', '24000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0106', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(107, 'Obeng Plus Sedang', 1, 2, 52, 1, 1, '45000', '135000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0107', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(108, 'Obeng Plus Sedang Amerika', 1, 2, 1, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0108', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(109, 'Obeng Sedang +', 1, 2, 71, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0109', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(110, 'Organiser Krisbow', 1, 2, 71, 1, 1, '153000', '612000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0110', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(111, 'Pahat 1 Set', 1, 2, 133, 1, 1, '127500', '127500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0111', NULL, NULL, '2020-02-25 07:28:46', '2020-02-25 07:28:46'),
(112, 'Pahat Kecil', 1, 2, 103, 1, 1, '30000', '30000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0112', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(113, 'Paku Tembak Besar', 1, 2, 40, 1, 1, '60000', '60000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0113', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(114, 'PakuTembak Kecil', 1, 2, 80, 1, 1, '45000', '45000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0114', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(115, 'Palu Bulet Besar', 1, 2, 133, 1, 1, '45000', '45000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0115', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(116, 'Palu Karet', 1, 2, 128, 1, 1, '30300', '30300', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0116', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(117, 'Palu Ungkit', 1, 2, 24, 1, 1, '65700', '65700', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0117', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(118, 'Palu Ungkit', 1, 2, 110, 1, 1, '65000', '65000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0118', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(119, 'Palu Ungkit K', 1, 2, 22, 1, 1, '65700', '65700', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0119', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(120, 'Pasekon', 1, 2, 1, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0120', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(121, 'Patri Besar', 1, 2, 2, 1, 1, '70000', '70000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0121', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(122, 'Phiser S6', 1, 2, 55, 1, 1, '7500', '45000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0122', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(123, 'Pisau Router 1/4', 1, 2, 143, 1, 1, '48000', '48000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0123', NULL, NULL, '2020-02-25 07:28:47', '2020-02-25 07:28:47'),
(124, 'Pisau Router 1/4 x 3/8', 1, 2, 143, 1, 1, '70000', '70000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0124', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(125, 'Pisau Router 1/4,5', 1, 2, 143, 1, 1, '135000', '135000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0125', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(126, 'Redos 3 LB', 1, 2, 1, 1, 1, '7000', '7000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0126', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(127, 'Resibon Cutting Besi', 1, 2, 149, 1, 1, '15000', '105000', 7, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0127', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(128, 'Resibon Gurindra', 1, 2, 65, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0128', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(129, 'Resibon Keramik', 1, 2, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0129', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(130, 'Ring Pas', 1, 2, 128, 1, 1, '95000', '95000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0130', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(131, 'Saklar 1', 1, 2, 31, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0131', NULL, NULL, '2020-02-25 07:28:48', '2020-02-25 07:28:48'),
(132, 'Saklar 2', 1, 2, 23, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0132', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(133, 'Sarung Tangan Kain', 1, 2, 21, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0133', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(134, 'Senar', 1, 2, 94, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0134', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(135, 'Senter Kecil', 1, 2, 22, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0135', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(136, 'Sikat Kawat', 1, 2, 52, 1, 1, '6000', '6000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0136', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(137, 'Sikat Kawat Kecil', 1, 2, 52, 1, 1, '16900', '16900', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0137', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(138, 'Siltip', 1, 2, 1, 1, 1, '28000', '28000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0138', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(139, 'Skrap Besar Plastik', 1, 2, 1, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0139', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(140, 'Skrap Besi', 1, 2, 1, 1, 1, '28000', '28000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0140', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(141, 'Solder Tembak', 1, 2, 62, 1, 1, '29700', '29700', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0141', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(142, 'Solder Tembak', 1, 2, 1, 1, 1, '29700', '29700', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0142', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(143, 'Spray Gun', 1, 2, 42, 1, 1, '418000', '418000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0143', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(144, 'Spray Gun Plastik', 1, 2, 109, 1, 1, '317000', '317000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0144', NULL, NULL, '2020-02-25 07:28:49', '2020-02-25 07:28:49'),
(145, 'Steker', 1, 2, 96, 1, 1, '11000', '11000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0145', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(146, 'Tambang Plastik', 1, 2, 1, 1, 1, '15000', '150000', 10, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0146', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(147, 'Tang Besar', 1, 2, 38, 1, 1, '49000', '49000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0147', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(148, 'Tang Biasa Sedang', 1, 2, 133, 1, 1, '55000', '55000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0148', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(149, 'Tang Buaya', 1, 2, 133, 1, 1, '79500', '79500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0149', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(150, 'Tang Buaya Sedang', 1, 2, 52, 1, 1, '65000', '65000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0150', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(151, 'Tang Kabel', 1, 2, 128, 1, 1, '120000', '120000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0151', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(152, 'Tang Knip Sedang', 1, 2, 133, 1, 1, '99000', '99000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0152', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(153, 'Tang Ripet', 1, 2, 110, 1, 1, '80000', '80000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0153', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(154, 'Tang Sedang', 1, 2, 22, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0154', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(155, 'Tang SKnip Kecil', 1, 2, 133, 1, 1, '39500', '39500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0155', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(156, 'Terminal 3 Lubang', 1, 2, 1, 1, 1, '15000', '30000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0156', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(157, 'Terminal 5 Lubang', 1, 2, 1, 1, 1, '200000', '200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0157', NULL, NULL, '2020-02-25 07:28:50', '2020-02-25 07:28:50'),
(158, 'Thiner 1 Liter', 1, 2, 72, 1, 1, '12000', '12000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0158', NULL, NULL, '2020-02-25 07:28:51', '2020-02-25 07:28:51'),
(159, 'Thiner Herin', 1, 2, 44, 1, 1, '19000', '57000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0159', NULL, NULL, '2020-02-25 07:28:51', '2020-02-25 07:28:51'),
(160, 'vinyl welding roll', 1, 2, 69, 1, 1, '1400000', '1400000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0160', NULL, NULL, '2020-02-25 07:28:51', '2020-02-25 07:28:51'),
(161, 'Walkie Talkie', 1, 2, 16, 1, 1, '213000', '639000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0161', NULL, NULL, '2020-02-25 07:28:51', '2020-02-25 07:28:51'),
(162, 'Waterpas', 1, 2, 12, 1, 1, '65000', '65000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AK0162', NULL, NULL, '2020-02-25 07:28:51', '2020-02-25 07:28:51'),
(163, '1 Set Janka', 1, 5, 1, 1, 1, '126000', '126000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0001', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(164, 'Alat Potong Cutter', 1, 5, 60, 1, 1, '48000', '192000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0002', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(165, 'Amplop', 1, 5, 64, 1, 1, '2000', '8000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0003', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(166, 'Bensin Gas', 1, 5, 135, 1, 1, '26000', '26000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0004', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(167, 'Binder Clip Besar', 1, 5, 63, 1, 1, '1000', '2000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0005', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(168, 'Binder Klip Besar', 1, 5, 60, 1, 1, '45000', '45000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0006', NULL, NULL, '2020-02-25 07:35:51', '2020-02-25 07:35:51'),
(169, 'Binder Klip Kecil', 1, 5, 30, 1, 1, '25000', '25000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0007', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(170, 'Binder Klip Sedang', 1, 5, 60, 1, 1, '30000', '30000', 12, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0008', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(171, 'Buku Batik', 1, 5, 97, 1, 1, '27000', '27000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0009', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(172, 'Cutter Bekas Besar', 1, 5, 63, 1, 1, '15000', '30000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0010', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(173, 'Cutter Bekas Besar', 1, 5, 63, 1, 1, '5000', '30000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0011', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(174, 'Cutter Besar', 1, 5, 60, 1, 1, '11000', '88000', 8, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0012', NULL, NULL, '2020-02-25 07:35:52', '2020-02-25 07:35:52'),
(175, 'Cutter Kecil', 1, 5, 60, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0013', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(176, 'Cutter Kecil', 1, 5, 60, 1, 1, '5000', '35000', 7, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0014', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(177, 'Cutter Pisau', 1, 5, 153, 1, 1, '15400', '15400', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0015', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(178, 'Double Tape 1/2 in', 1, 5, 60, 1, 1, '4000', '52000', 13, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0016', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(179, 'Double Tape 1in', 1, 5, 60, 1, 1, '5000', '55000', 11, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0017', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(180, 'Double Tape 2in', 1, 5, 60, 1, 1, '5900', '17700', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0018', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(181, 'Double Tape Foam', 1, 5, 92, 1, 1, '7000', '14000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0019', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(182, 'Double Tape kecil', 1, 5, 60, 1, 1, '4500', '18000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0020', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(183, 'Glue Stik', 1, 5, 32, 1, 1, '11800', '94400', 8, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0021', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(184, 'Gunting', 1, 5, 60, 1, 1, '37000', '74000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0022', NULL, NULL, '2020-02-25 07:35:53', '2020-02-25 07:35:53'),
(185, 'Gunting Bedah', 1, 5, 82, 1, 1, '20000', '40000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0023', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(186, 'Gunting Besar', 1, 5, 50, 1, 1, '37000', '74000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0024', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(187, 'Gunting Besar', 1, 5, 60, 1, 1, '15000', '45000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0025', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(188, 'Gunting Besar', 1, 5, 60, 1, 1, '15000', '75000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0026', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(189, 'Gunting Kecil', 1, 5, 60, 1, 1, '12000', '36000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0027', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(190, 'Gunting Kecil', 1, 5, 1, 1, 1, '17000', '17000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0028', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(191, 'Hekter', 1, 5, 1, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0029', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(192, 'Isi Cutter', 1, 5, 60, 1, 1, '5000', '35000', 7, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0030', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(193, 'Isi Cutter Besar', 1, 5, 60, 1, 1, '5000', '5000', 12, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0031', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(194, 'Isi Cutter Kecil', 1, 5, 116, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0032', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(195, 'Isi Cutter Kecil', 1, 5, 116, 1, 1, '3000', '42000', 14, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0033', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(196, 'Kalkulator', 1, 5, 26, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0034', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(197, 'Kalkulator Besar', 1, 5, 26, 1, 1, '117000', '117000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0035', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(198, 'Kertas A3', 1, 5, 121, 1, 1, '85000', '85000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0036', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54');
INSERT INTO `inventory_items` (`id`, `name`, `user_id`, `category_id`, `brand_id`, `supplier_id`, `division_id`, `unit_price`, `price`, `qty`, `image_url`, `year_of_purchase`, `notes`, `serial_number`, `barcode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(199, 'Kertas A3 809', 1, 5, 98, 1, 1, '451000', '451000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0037', NULL, NULL, '2020-02-25 07:35:54', '2020-02-25 07:35:54'),
(200, 'Kertas A4', 1, 5, 34, 1, 1, '39000', '39000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0038', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(201, 'Kertas B5 709', 1, 5, 98, 1, 1, '34000', '34000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0039', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(202, 'Kertas ID Card', 1, 5, 1, 1, 1, '47000', '47000', 35, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0040', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(203, 'Kertas ID Card Baru', 1, 5, 1, 1, 1, '47000', '47000', 35, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0041', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(204, 'Kertas ID Card Lama', 1, 5, 1, 1, 1, '47000', '47000', 69, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0042', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(205, 'Kertas NCR', 1, 5, 97, 1, 1, '200000', '200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0043', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(206, 'Kompas Cutter', 1, 5, 77, 1, 1, '96500', '96500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0044', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(207, 'Kuas 6mm', 1, 5, 4, 1, 1, '9000', '9000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0045', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(208, 'Lakban Bening', 1, 5, 89, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0046', NULL, NULL, '2020-02-25 07:35:55', '2020-02-25 07:35:55'),
(209, 'Lem Araldite', 1, 5, 9, 1, 1, '25000', '75000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0047', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(210, 'Lem Korea', 1, 5, 1, 1, 1, '5000', '15000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0048', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(211, 'Map Bening', 1, 5, 145, 1, 1, '2000', '2000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0049', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(212, 'Masker', 1, 5, 95, 1, 1, '23000', '23000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0050', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(213, 'Mata Jangka', 1, 5, 1, 1, 1, '51000', '51000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0051', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(214, 'Mouse Pad', 1, 5, 15, 1, 1, '15000', '30000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0052', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(215, 'Mouse Pad', 1, 5, 1, 1, 1, '25000', '75000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0053', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(216, 'Name tag', 1, 5, 1, 1, 1, '7900', '71100', 9, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0054', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(217, 'Notebook AS', 1, 5, 1, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0055', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(218, 'Odner Besar', 1, 5, 138, 1, 1, '19000', '57000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0056', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(219, 'Odner Sedang', 1, 5, 17, 1, 1, '28000', '28000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0057', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(220, 'Odner Sedang', 1, 5, 57, 1, 1, '22000', '22000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0058', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(221, 'Ordner Besar', 1, 5, 15, 1, 1, '28000', '56000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0059', NULL, NULL, '2020-02-25 07:35:56', '2020-02-25 07:35:56'),
(222, 'Ordner Kecil', 1, 5, 15, 1, 1, '19000', '19000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0060', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(223, 'Ordner Sedang', 1, 5, 15, 1, 1, '22000', '44000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0061', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(224, 'Paper Clip ', 1, 5, 30, 1, 1, '7000', '14000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0062', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(225, 'Paper Clip Sedang', 1, 5, 30, 1, 1, '63000', '378000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0063', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(226, 'Paperclip', 1, 5, 60, 1, 1, '3950', '3950', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0064', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(227, 'Pembolong Kertas', 1, 5, 61, 1, 1, '11800', '11800', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0065', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(228, 'Penggaris 100cm', 1, 5, 63, 1, 1, '44000', '352000', 8, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0066', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(229, 'Penggaris 15m', 1, 5, 60, 1, 1, '8000', '16000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0067', NULL, NULL, '2020-02-25 07:35:57', '2020-02-25 07:35:57'),
(230, 'Penggaris 20cm', 1, 5, 120, 1, 1, '7000', '7000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0068', NULL, NULL, '2020-02-25 07:35:58', '2020-02-25 07:35:58'),
(231, 'Penggaris 30cm', 1, 5, 60, 1, 1, '8000', '24000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0069', NULL, NULL, '2020-02-25 07:35:58', '2020-02-25 07:35:58'),
(232, 'Penggaris 60cm', 1, 5, 60, 1, 1, '42000', '42000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0070', NULL, NULL, '2020-02-25 07:35:58', '2020-02-25 07:35:58'),
(233, 'Penggaris 60cm', 1, 5, 60, 1, 1, '42000', '84000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0071', NULL, NULL, '2020-02-25 07:35:58', '2020-02-25 07:35:58'),
(234, 'Penggaris BS Kertas', 1, 5, 98, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0072', NULL, NULL, '2020-02-25 07:35:58', '2020-02-25 07:35:58'),
(235, 'Penggaris Plastik 30cm', 1, 5, 1, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0073', NULL, NULL, '2020-02-25 07:35:59', '2020-02-25 07:35:59'),
(236, 'Penggaris Segitiga', 1, 5, 108, 1, 1, '150000', '150000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0074', NULL, NULL, '2020-02-25 07:35:59', '2020-02-25 07:35:59'),
(237, 'Penggaris Setiga 1 Set', 1, 5, 30, 1, 1, '28500', '28500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0075', NULL, NULL, '2020-02-25 07:35:59', '2020-02-25 07:35:59'),
(238, 'Penghapus', 1, 5, 126, 1, 1, '10000', '30000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0076', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(239, 'Perforator', 1, 5, 30, 1, 1, '42000', '42000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0077', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(240, 'Pingset Besar ', 1, 5, 1, 1, 1, '12000', '48000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0078', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(241, 'Pingset Kecil', 1, 5, 1, 1, 1, '10000', '40000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0079', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(242, 'Pulpen', 1, 5, 123, 1, 1, '3900', '3900', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0080', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(243, 'Pulpen', 1, 5, 127, 1, 1, '1500', '1500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0081', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(244, 'Pulpen', 1, 5, 127, 1, 1, '1500', '4500', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0082', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(245, 'Push Pins', 1, 5, 30, 1, 1, '6500', '6500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0083', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(246, 'Pvc Tape 3/4 in', 1, 5, 93, 1, 1, '5800', '29000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0084', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(247, 'Serutan', 1, 5, 43, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0085', NULL, NULL, '2020-02-25 07:36:00', '2020-02-25 07:36:00'),
(248, 'Solasi', 1, 5, 6, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0086', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(249, 'Solasi', 1, 5, 89, 1, 1, '12000', '12000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0087', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(250, 'Solasi Bening', 1, 5, 89, 1, 1, '10000', '50000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0088', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(251, 'Solasi Bening 1/2 in', 1, 5, 6, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0089', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(252, 'Solasi Bening 1/2 in', 1, 5, 89, 1, 1, '6000', '78000', 13, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0090', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(253, 'Solasi Kertas 1in', 1, 5, 48, 1, 1, '7000', '189000', 27, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0091', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(254, 'Solasi Kertas 2in', 1, 5, 67, 1, 1, '6500', '13000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0092', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(255, 'Spidol Snowman', 1, 5, 123, 1, 1, '8000', '32000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0093', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(256, 'Spidol Snowman', 1, 5, 123, 1, 1, '6300', '31500', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0094', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(257, 'Stabilo', 1, 5, 60, 1, 1, '4000', '36000', 9, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0095', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(258, 'Stabilo Pink', 1, 5, 60, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0096', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(259, 'Stabilo Pulpen', 1, 5, 154, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0097', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(260, 'Stabilo Yellow', 1, 5, 60, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0098', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(261, 'Stampad', 1, 5, 30, 1, 1, '23000', '23000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0099', NULL, NULL, '2020-02-25 07:36:01', '2020-02-25 07:36:01'),
(262, 'Stampel', 1, 5, 136, 1, 1, '70000', '140000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0100', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(263, 'Stample', 1, 5, 136, 1, 1, '70000', '140000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0101', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(264, 'Staple Lunas', 1, 5, 60, 1, 1, '70000', '70000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0102', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(265, 'Stapler', 1, 5, 60, 1, 1, '8800', '26400', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0103', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(266, 'Staples / Isi Hekter', 1, 5, 40, 1, 1, '1200', '1200', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0104', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(267, 'Staples Etong', 1, 5, 40, 1, 1, '60000', '60000', 20, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0105', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(268, 'Staples Kenko', 1, 5, 63, 1, 1, '28000', '28000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0106', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(269, 'Stempel', 1, 5, 136, 1, 1, '70000', '140000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0107', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(270, 'Sticky Notes', 1, 5, 102, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0108', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(271, 'Stiker Label Kain', 1, 5, 1, 1, 1, '5000', '20000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0109', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(272, 'Tali Nametag', 1, 5, 1, 1, 1, '0', '0', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0110', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(273, 'Tali Rapia', 1, 5, 1, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0111', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(274, 'Tempat Solatip', 1, 5, 30, 1, 1, '17000', '17000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0112', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(275, 'Tempat Solatip', 1, 5, 63, 1, 1, '25000', '50000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0113', NULL, NULL, '2020-02-25 07:36:02', '2020-02-25 07:36:02'),
(276, 'Tinta Printer', 1, 5, 1, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0114', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(277, 'Tinta Stampad', 1, 5, 10, 1, 1, '7500', '7500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0115', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(278, 'Tip X', 1, 5, 60, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0116', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(279, 'Tip X', 1, 5, 63, 1, 1, '5000', '10000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0117', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(280, 'Tip X Kertas', 1, 5, 60, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0118', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(281, 'Water Glue', 1, 5, 49, 1, 1, '3000', '3000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-ATK0119', NULL, NULL, '2020-02-25 07:36:03', '2020-02-25 07:36:03'),
(282, 'Akrilik Bening 12mm', 1, 6, 1, 6, 1, '1200000', '1200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0001', NULL, NULL, '2020-02-25 07:45:12', '2020-02-25 07:45:12'),
(283, 'Akrilik Bening 10m', 1, 6, 1, 6, 1, '841000', '841000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0002', NULL, NULL, '2020-02-25 07:45:12', '2020-02-25 07:45:12'),
(284, 'Akrilik Hitam 8mm', 1, 6, 1, 6, 1, '760000', '760000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0003', NULL, NULL, '2020-02-25 07:45:12', '2020-02-25 07:45:12'),
(285, 'Akrilik Bening 8mm', 1, 6, 1, 6, 1, '673000', '673000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0004', NULL, NULL, '2020-02-25 07:45:12', '2020-02-25 07:45:12'),
(286, 'Akrilik Blue Transparan 5m', 1, 6, 1, 6, 1, '469500', '177374', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0005', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(287, 'Akrilik Bening 5mm', 1, 6, 1, 6, 1, '439000', '73200', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0006', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(288, 'Akrilik Hitam 3mm', 1, 6, 1, 6, 1, '304000', '76000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0007', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(289, 'Akrilik Bening 3mm', 1, 6, 1, 6, 1, '269000', '605250', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0008', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(290, 'Akrilik Hitam 2mm', 1, 6, 1, 6, 1, '212800', '638400', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0009', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(291, 'Akrilik Susu 2mm', 1, 6, 1, 6, 1, '194000', '388000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0010', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(292, 'Akrilik Susu 3mm', 1, 6, 1, 6, 1, '194000', '582000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0011', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(293, 'Akrilik Bening 2mm', 1, 6, 1, 6, 1, '188300', '188300', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0012', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(294, 'Modul RGB 12V', 1, 6, 1, 1, 1, '150000', '150000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0013', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(295, 'Led Strip 220c/10m', 1, 6, 1, 1, 1, '125000', '500000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0014', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(296, 'Lem Akrilik 500ml', 1, 6, 141, 1, 1, '110000', '105000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0015', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(297, 'Socket RGB', 1, 6, 1, 1, 1, '105000', '105000', 13, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0016', NULL, NULL, '2020-02-25 07:45:13', '2020-02-25 07:45:13'),
(298, 'Led Strip 12v / 5m', 1, 6, 115, 1, 1, '40000', '40000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0017', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(299, 'Aerosol Cat Clear', 1, 6, 112, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0018', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(300, 'Aerosol Cat Clear', 1, 6, 114, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0019', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(301, 'Aerosol Cat Grape', 1, 6, 114, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0020', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(302, 'Aerosol Cat Green', 1, 6, 114, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0021', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(303, 'Aerosol Cat Pearl', 1, 6, 114, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0022', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(304, 'Aerosol Cat Silver', 1, 6, 112, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0023', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(305, 'Aerosol Cat White', 1, 6, 114, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0024', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(306, 'Kabel Jack Female', 1, 6, 1, 1, 1, '35000', '35000', 13, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0025', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(307, 'Aerosol Cat Gold', 1, 6, 112, 1, 1, '35000', '70000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0026', NULL, NULL, '2020-02-25 07:45:14', '2020-02-25 07:45:14'),
(308, 'Aerosol Cat Hologram', 1, 6, 112, 1, 1, '35000', '70000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0027', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(309, 'Aerosol Cat White', 1, 6, 112, 1, 1, '35000', '70000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0028', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(310, 'Pen Iklan Stainless', 1, 6, 1, 1, 1, '35000', '70000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0029', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(311, 'Pen Iklan Stainless', 1, 6, 1, 1, 1, '35000', '210000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0030', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(312, 'Led Strip 12v / 5m', 1, 6, 115, 1, 1, '29000', '29000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0031', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(313, 'Led Strip 12v / 5m', 1, 6, 115, 1, 1, '29000', '29000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0032', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(314, 'Led Strip 12v / 5m', 1, 6, 115, 1, 1, '29000', '29000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0033', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(315, 'Led Strip 12v / 5m', 1, 6, 115, 1, 1, '29000', '29000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0034', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(316, 'Lemfox 300gr', 1, 6, 44, 1, 1, '26000', '26000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0035', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(317, 'Lem Bakar', 1, 6, 112, 1, 1, '25000', '70000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0036', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(318, 'Lem Araldite', 1, 6, 1, 1, 1, '25000', '75000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0037', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(319, 'Cover Plat LED', 1, 6, 44, 1, 1, '24000', '24000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0038', NULL, NULL, '2020-02-25 07:45:15', '2020-02-25 07:45:15'),
(320, 'Peniti Pin Plastik', 1, 6, 1, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0039', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(321, 'Reflektor Stiker', 1, 6, 112, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0040', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(322, 'Resin Lical Catalist', 1, 6, 118, 1, 1, '15000', '15000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0041', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(323, 'Cover Plat Nomor', 1, 6, 44, 1, 1, '13000', '13000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0042', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(324, 'Adaptor 12 v', 1, 6, 1, 1, 1, '13000', '26000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0043', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(325, 'Voucher Sticker', 1, 6, 118, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0044', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(326, 'Layerd Hitam', 1, 6, 114, 1, 1, '10000', '110000', 11, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0045', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(327, 'Pin Tusuk Peniti', 1, 6, 114, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0046', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(328, 'Timah Solder', 1, 6, 7, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0047', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(329, 'Senar Nylon', 1, 6, 7, 1, 1, '5000', '25000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0048', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(330, 'Pin Plastik', 1, 6, 114, 1, 1, '5000', '30000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0049', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(331, 'Ganci Pin Plastik', 1, 6, 114, 1, 1, '4000', '52000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0050', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(332, 'Gravo Gold 2mm', 1, 6, 1, 6, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0051', NULL, NULL, '2020-02-25 07:45:16', '2020-02-25 07:45:16'),
(333, 'Gravo Silver 2mm', 1, 6, 1, 6, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0052', NULL, NULL, '2020-02-25 07:45:17', '2020-02-25 07:45:17'),
(334, 'MDF 2mm', 1, 6, 1, 6, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0053', NULL, NULL, '2020-02-25 07:45:17', '2020-02-25 07:45:17'),
(335, 'MDF 6mm', 1, 6, 1, 6, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0054', NULL, NULL, '2020-02-25 07:45:17', '2020-02-25 07:45:17'),
(336, 'PVC Board Large', 1, 6, 1, 6, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMKBL-0055', NULL, NULL, '2020-02-25 07:45:17', '2020-02-25 07:45:17'),
(337, 'PC (IVAN)', 1, 7, 105, 1, 1, '10000000', '10000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 102.516%; height: 154px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Gigabyte H110M-DS2</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i7 3770 3.4Ghz</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 22px;\">8 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">AMD HD Radeon 550 LP</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">1 TB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Super Flowers 500w</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Armageddon Infenion 1000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 'CMK-E0001', NULL, NULL, '2020-02-25 07:51:28', '2020-02-27 00:35:14'),
(338, 'PC Poppy', 1, 7, 105, 1, 1, '10000000', '10000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 102.516%; height: 154px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">H61M-DS2</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i7 3770 3.4Ghz</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 22px;\">8 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">GT 630 LP</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">500GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Armageddon</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Armageddon Infinion 1000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 'CMK-E0002', NULL, NULL, '2020-02-25 07:51:28', '2020-02-27 00:39:13'),
(339, 'Laptop Cm 1475au (Angga)', 1, 7, 53, 2, 1, '7750000', '7750000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0003', NULL, NULL, '2020-02-25 07:51:28', '2020-02-25 07:51:28'),
(340, 'Printer Epson L1800', 1, 7, 37, 1, 1, '7000000', '7000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0004', NULL, NULL, '2020-02-25 07:51:28', '2020-02-25 07:51:28'),
(341, 'Laptop Asus TP-300L (Panji)', 1, 7, 11, 2, 1, '6000000', '6000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0005', NULL, NULL, '2020-02-25 07:51:28', '2020-02-25 07:51:28'),
(342, 'PC (PC-LASER)', 1, 7, 105, 1, 1, '6000000', '6000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 102.516%; height: 154px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">&nbsp;MSI MS 1159</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i7 3770K 3.4Ghz</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 22px;\">8 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel HD</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">1 TB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Hexa 400W</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Coler Master</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 'CMK-E0006', NULL, NULL, '2020-02-25 07:51:28', '2020-02-27 00:36:40'),
(343, 'PC (PC-PRINT)', 1, 7, 105, 1, 1, '6000000', '6000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 102.516%; height: 167px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Gigabyte H110M-DS2 </td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i3 6100 3.7Ghz</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 22px;\">12 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">AMD HD 7400 Series 1GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">2x 500GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 'CMK-E0007', NULL, NULL, '2020-02-25 07:51:28', '2020-02-27 00:31:57'),
(344, 'PC Vita', 1, 7, 105, 1, 1, '6000000', '6000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 102.516%; height: 148px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">H110M-DS2</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i3 6100 3.7Ghz</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 16px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 16px;\">4 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel HD</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">2x 500GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 'CMK-E0008', NULL, NULL, '2020-02-25 07:51:28', '2020-02-27 00:37:57'),
(345, 'Kamera', 1, 7, 25, 3, 1, '5500000', '5500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0009', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(346, 'CCTV + Endcoder', 1, 7, 27, 1, 1, '5000000', '5000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0010', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(347, 'PC (Riski)', 1, 7, 105, 1, 1, '5000000', '5000000', 1, NULL, '2019-02-21 11:32:43', '<table style=\"border-collapse: collapse; width: 100%; height: 198px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Mobo</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Gigabyte H110M-DS2</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">CPU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel Core i5 6400</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">RAM</td>\r\n<td style=\"width: 79.717%; height: 22px;\">8 GB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">VGA</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Intel HD 530 (Onboard)</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">HDD</td>\r\n<td style=\"width: 79.717%; height: 22px;\">1 TB</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">PSU</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Case</td>\r\n<td style=\"width: 79.717%; height: 22px;\">Biasa</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">OS</td>\r\n<td style=\"width: 79.717%; height: 22px;\">KDE Neon</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"width: 20.283%; height: 22px;\">Kernel</td>\r\n<td style=\"width: 79.717%; height: 22px;\">5.3.0-40-generic </td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'CMK-E0011', NULL, NULL, '2020-02-25 07:51:29', '2020-02-27 00:29:02'),
(348, 'AC Haier', 1, 7, 51, 1, 1, '4000000', '4000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0012', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(349, 'Printer Dot Matrix LX 310', 1, 7, 37, 1, 1, '4000000', '4000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0013', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(350, 'Laptop (Pak Agus)', 1, 7, 11, 1, 1, '3900000', '3900000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0014', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(351, 'Infocus IN3106', 1, 7, 56, 1, 1, '3500000', '3500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0015', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(352, 'Handphone Ivan ', 1, 7, 1, 1, 1, '3200000', '3200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0016', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(353, 'Laptop Asus A8 (Adam)', 1, 7, 11, 1, 1, '3000000', '3000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0017', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(354, 'Printer Epson M110B (Helm)', 1, 7, 37, 1, 1, '2500000', '2500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0018', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(355, 'Samsung J7 Prime', 1, 7, 111, 1, 1, '1700000', '1700000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0019', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(356, 'Hardisk Eks 4TB', 1, 7, 117, 1, 1, '1500000', '1500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0020', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(357, 'Monitor Samsung 24\" Curved (Poppy)', 1, 7, 111, 1, 1, '1500000', '1500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0021', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(358, 'TV LG 22 in (CCTV)', 1, 7, 76, 1, 1, '1500000', '3000000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0022', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(359, 'Hardisk Eks 2TB', 1, 7, 117, 1, 1, '1300000', '1300000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0023', NULL, NULL, '2020-02-25 07:51:29', '2020-02-25 07:51:29'),
(360, 'Redmi 6a (Poppy)', 1, 7, 152, 1, 1, '900000', '900000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0024', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(361, 'Redmi Note 4', 1, 7, 152, 1, 1, '900000', '900000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0025', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(362, 'Monitor 24\" Lenovo (pc print)', 1, 7, 75, 1, 1, '800000', '800000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0026', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(363, 'Monitor 24\" Lenovo (pc-print)', 1, 7, 75, 1, 1, '800000', '800000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0027', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(364, 'Pen Tablet ', 1, 7, 59, 1, 1, '800000', '800000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0028', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(365, 'FingerPrint', 1, 7, 1, 1, 1, '700000', '700000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0029', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(366, 'Modem M6x', 1, 7, 122, 1, 1, '550000', '550000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0030', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(367, 'LCD LG 19 in (Riski)', 1, 7, 76, 1, 1, '500000', '500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0031', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(368, 'Kipas Basement', 1, 7, 68, 1, 1, '350000', '350000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0032', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(369, 'Kipas Kirin', 1, 7, 68, 5, 1, '350000', '350000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0033', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(370, 'Monitor Acer 17\" Kotak (Vita)', 1, 7, 5, 1, 1, '300000', '300000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0034', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(371, 'Monitor Laser', 1, 7, 111, 1, 1, '300000', '300000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0035', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(372, 'Tripod', 1, 7, 41, 4, 1, '250000', '250000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0036', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(373, 'Paket Mouse Key Logitech (Riski)', 1, 7, 79, 1, 1, '200000', '200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0037', NULL, NULL, '2020-02-25 07:51:30', '2020-02-25 07:51:30'),
(374, 'Mouse M170', 1, 7, 79, 4, 1, '170000', '340000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0038', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(375, 'Router Basement', 1, 7, 139, 1, 1, '150000', '150000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0039', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(376, 'Router Lantai 1', 1, 7, 139, 1, 1, '150000', '150000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0040', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(377, 'Kabel Hdmi 5m (Infocus)', 1, 7, 1, 1, 1, '135000', '135000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0041', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(378, 'Flashdisk 32GB', 1, 7, 137, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0042', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(379, 'Keyboard SPC (Poppy)', 1, 7, 124, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0043', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(380, 'Mouse Targus AMW600 (Poppy)', 1, 7, 132, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0044', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(381, 'Keyboard Genius (Ivan)', 1, 7, 47, 1, 1, '98000', '98000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0045', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(382, 'Mouse Logitech b100 (PC-LASER)', 1, 7, 79, 1, 1, '95000', '95000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0046', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(383, 'Mouse Logitech M185 (Ivan)', 1, 7, 79, 1, 1, '85000', '85000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0047', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(384, 'USB Wifi Adapter ', 1, 7, 139, 1, 1, '85000', '170000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0048', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(385, 'Keyboard Logitech k100', 1, 7, 79, 1, 1, '80000', '80000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0049', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(386, 'Mouse Genius (pc-print)', 1, 7, 47, 1, 1, '45000', '45000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0050', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(387, 'Tang Crimping', 1, 7, 1, 1, 1, '45000', '45000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0051', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(388, 'Konverter HDMI to VGA', 1, 7, 1, 1, 1, '30000', '60000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0052', NULL, NULL, '2020-02-25 07:51:31', '2020-02-25 07:51:31'),
(389, 'Tong Sampah', 1, 7, 1, 1, 1, '26000', '26000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0053', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(390, 'Keyboard Votre Biasa', 1, 7, 147, 1, 1, '25000', '75000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0054', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(391, 'Kabel HDMI 1,5m', 1, 7, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-E0055', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(392, 'Obeng Set (Mini)', 1, 7, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:44', NULL, 'CMK-E0056', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(393, 'Mouse Votre ', 1, 7, 147, 1, 1, '15000', '60000', 4, NULL, '2019-02-21 11:32:45', NULL, 'CMK-E0057', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(394, 'Card Reader', 1, 7, 1, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:46', NULL, 'CMK-E0058', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(395, 'Ripet Kabel IT', 1, 7, 1, 1, 1, '14000', '14000', 1, NULL, '2019-02-21 11:32:47', NULL, 'CMK-E0059', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(396, 'Konektor RJ 45', 1, 7, 1, 5, 1, '400', '20000', 50, NULL, '2019-02-21 11:32:48', NULL, 'CMK-E0060', NULL, NULL, '2020-02-25 07:51:32', '2020-02-25 07:51:32'),
(397, 'Cutting', 1, 4, 84, 1, 1, '45000000', '45000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0001', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(398, 'Inverter', 1, 4, 46, 1, 1, '5500000', '5500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0002', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(399, 'Laminator Dingin', 1, 4, 148, 1, 1, '15000000', '15000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0003', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(400, 'Laminator hot', 1, 4, 148, 1, 1, '1000000', '1000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0004', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(401, 'Mesin Laser', 1, 4, 46, 1, 1, '285000000', '285000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0005', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(402, 'Mesin Mata Titik', 1, 4, 148, 1, 1, '850000', '850000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0006', NULL, NULL, '2020-02-25 07:54:58', '2020-02-25 07:54:58'),
(403, 'Oksigen', 1, 4, 46, 1, 1, '8000000', '8000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0007', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(404, 'Paper Trimer', 1, 4, 148, 1, 1, '250000', '250000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0008', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(405, 'Printer', 1, 4, 88, 1, 1, '160000000', '160000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0009', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(406, 'Printer', 1, 4, 107, 1, 1, '180000000', '180000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0010', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(407, 'Punch id card', 1, 4, 148, 1, 1, '900000', '900000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0011', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(408, 'Stablizer', 1, 4, 71, 1, 1, '2000000', '2000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AP0012', NULL, NULL, '2020-02-25 07:54:59', '2020-02-25 07:54:59'),
(409, 'Corong Plastik', 1, 3, 90, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0001', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(410, 'Cutter Akrilik', 1, 3, 1, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0002', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(411, 'Latex Glover', 1, 3, 118, 1, 1, '18000', '18000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0003', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(412, 'Pematik Api', 1, 3, 106, 1, 1, '65000', '65000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0004', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(413, 'Sigmat', 1, 3, 1, 1, 1, '124000', '124000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0005', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(414, 'Suntikan Lem Akrilik', 1, 3, 1, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0006', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(415, 'Terminal 6 Lubang', 1, 3, 144, 1, 1, '21800', '21800', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0007', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(416, 'WD40', 1, 3, 149, 1, 1, '25000', '25000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-AL0008', NULL, NULL, '2020-02-25 07:57:54', '2020-02-25 07:57:54'),
(492, 'AC AVX', 1, 8, 13, 1, 1, '4000000', '4000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0001', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(493, 'Ac Cooler', 1, 8, 70, 1, 1, '1000000', '1000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0002', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(494, 'Asbak', 1, 8, 1, 1, 1, '32000', '96000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0003', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(495, 'Cangkir', 1, 8, 1, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0004', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(496, 'Dispenser', 1, 8, 1, 1, 1, '110000', '110000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0005', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(497, 'Dispenser Sabun', 1, 8, 1, 1, 1, '28000', '56000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0006', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(498, 'Ember Kecil', 1, 8, 1, 1, 1, '10000', '40000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0007', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(499, 'Ember Sedang', 1, 8, 1, 1, 1, '26000', '52000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0008', NULL, NULL, '2020-02-25 08:30:41', '2020-02-25 08:30:41'),
(500, 'Etalase Display Helm', 1, 8, 1, 1, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0009', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(501, 'Etalase Display Printing', 1, 8, 1, 1, 1, '15000000', '15000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0010', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(502, 'Galon Aqua', 1, 8, 8, 1, 1, '65000', '195000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0011', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(503, 'Garpu Plastik', 1, 8, 1, 1, 1, '2000', '6000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0012', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(504, 'Garpu Stainless', 1, 8, 1, 1, 1, '5500', '27500', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0013', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(505, 'Gas Besar', 1, 8, 1, 1, 1, '400000', '400000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0014', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(506, 'Gas Sedang', 1, 8, 1, 1, 1, '250000', '250000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0015', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(507, 'Gayung', 1, 8, 1, 1, 1, '10000', '20000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0016', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(508, 'Gelas Kaca Besar', 1, 8, 1, 1, 1, '60000', '120000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0017', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(509, 'Gelas Kaca Kecil', 1, 8, 1, 1, 1, '15000', '75000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0018', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(510, 'Gelas Plastik', 1, 8, 1, 1, 1, '1800', '10800', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0019', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(511, 'Gordeng', 1, 8, 1, 1, 1, '200000', '200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0020', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(512, 'Jam Dinding', 1, 8, 101, 1, 1, '59000', '59000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0021', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(513, 'Jam Dinding', 1, 8, 127, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0022', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(514, 'Karbol 450ml', 1, 8, 150, 1, 1, '18000', '36000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0023', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(515, 'Kipas Angin', 1, 8, 140, 1, 1, '35000', '35000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0024', NULL, NULL, '2020-02-25 08:30:42', '2020-02-25 08:30:42'),
(516, 'Kompor Gas', 1, 8, 1, 1, 1, '250000', '250000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0025', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(517, 'Kulkas 2 Pintu', 1, 8, 111, 1, 1, '4000000', '4000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0026', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(518, 'Kulkas 2 Pintu', 1, 8, 1, 1, 1, '3000000', '3000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0027', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(519, 'Kulkas Chiler', 1, 8, 119, 1, 1, '1000000', '1000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0028', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(520, 'Kursi Besi', 1, 8, 1, 1, 1, '160000', '960000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0029', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(521, 'Kursi Besi Bulat', 1, 8, 58, 1, 1, '105000', '525000', 5, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0030', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43');
INSERT INTO `inventory_items` (`id`, `name`, `user_id`, `category_id`, `brand_id`, `supplier_id`, `division_id`, `unit_price`, `price`, `qty`, `image_url`, `year_of_purchase`, `notes`, `serial_number`, `barcode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(522, 'Kursi Kantor', 1, 8, 134, 1, 1, '250000', '500000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0031', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(523, 'Kursi Mebel', 1, 8, 1, 1, 1, NULL, NULL, 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0032', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(524, 'Kursi Sofa', 1, 8, 1, 1, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0033', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(525, 'Lemari Exel', 1, 8, 1, 1, 1, '250000', '1000000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0034', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(526, 'Lemari Kayu ATK', 1, 8, 1, 1, 1, '1000000', '1000000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0035', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(527, 'Lemari Stainless', 1, 8, 1, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0036', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(528, 'Meja Bulat    Kayu', 1, 8, 1, 1, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0037', NULL, NULL, '2020-02-25 08:30:43', '2020-02-25 08:30:43'),
(529, 'Meja Kotak', 1, 8, 1, 1, 1, '775000', '6200000', 8, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0038', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(530, 'Microwave', 1, 8, 1, 1, 1, '500000', '500000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0039', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(531, 'Papan Tulis', 1, 8, 1, 1, 1, '200000', '200000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0040', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(532, 'Payung', 1, 8, 1, 1, 1, '20000', '40000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0041', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(533, 'Payung Lipat', 1, 8, 1, 1, 1, '20000', '40000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0042', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(534, 'Penghapus Papan Tulis', 1, 8, 1, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0043', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(535, 'Pengki', 1, 8, 1, 1, 1, '37400', '112200', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0044', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(536, 'Piring Plastik', 1, 8, 1, 1, 1, '6000', '42000', 7, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0045', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(537, 'Pompa Galon', 1, 8, 1, 1, 1, '30000', '90000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0046', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(538, 'Pot Bunga Item Kecil', 1, 8, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0047', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(539, 'Pot Bunga Item Sedang', 1, 8, 1, 1, 1, '30000', '120000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0048', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(540, 'Pot Bunga No .10', 1, 8, 1, 1, 1, '32000', '64000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0049', NULL, NULL, '2020-02-25 08:30:44', '2020-02-25 08:30:44'),
(541, 'Pot Bunga No. 5', 1, 8, 78, 1, 1, '110000', '220000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0050', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(542, 'Pot Bunga No.12', 1, 8, 1, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0051', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(543, 'Pot Bunga No.6', 1, 8, 1, 1, 1, '18000', '36000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0052', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(544, 'Rak Lemari Pendek', 1, 8, 1, 1, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0053', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(545, 'Rak Lemari Tinggi', 1, 8, 1, 1, 1, NULL, NULL, 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0054', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(546, 'Rak Piring', 1, 8, 1, 1, 1, '63000', '63000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0055', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(547, 'Rak Sepatu', 1, 8, 1, 1, 1, '150000', '150000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0056', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(548, 'Regulator Gas', 1, 8, 1, 1, 1, '100000', '100000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0057', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(549, 'Sabun Cream', 1, 8, 35, 1, 1, '4000', '4000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0058', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(550, 'Sapu', 1, 8, 1, 1, 1, '20000', '40000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0059', NULL, NULL, '2020-02-25 08:30:45', '2020-02-25 08:30:45'),
(551, 'Sapu', 1, 8, 1, 1, 1, '20000', '20000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0060', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(552, 'Saringan', 1, 8, 1, 1, 1, '10000', '10000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0061', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(553, 'Sendok Plastik', 1, 8, 1, 1, 1, '5000', '15000', 3, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0062', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(554, 'Sendok Stainless', 1, 8, 1, 1, 1, '6000', '12000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0063', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(555, 'Sikat', 1, 8, 1, 1, 1, '5000', '5000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0064', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(556, 'Sikat WC', 1, 8, 1, 1, 1, '15000', '60000', 4, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0065', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(557, 'Steak Weper Kaca', 1, 8, 1, 1, 1, '6500', '13000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0066', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(558, 'Superpel 770ml', 1, 8, 1, 1, 1, '8500', '8500', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0067', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(559, 'Tempat Pel', 1, 8, 1, 1, 1, '150000', '300000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0068', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(560, 'Tempat Sendok', 1, 8, 1, 1, 1, '30000', '60000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0069', NULL, NULL, '2020-02-25 08:30:46', '2020-02-25 08:30:46'),
(561, 'Tempat Tisu Toilet', 1, 8, 1, 1, 1, '32000', '64000', 2, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0070', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47'),
(562, 'Tong Sampah Besar', 1, 8, 1, 1, 1, '90000', '90000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0071', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47'),
(563, 'Tong Sampah Bulat Plastik', 1, 8, 1, 1, 1, '17000', '17000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0072', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47'),
(564, 'Trashbag', 1, 8, 1, 1, 1, '2000', '12000', 6, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0073', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47'),
(565, 'Tunggu Kompor', 1, 8, 1, 1, 1, '50000', '50000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0074', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47'),
(566, 'Vacum Cleaner', 1, 8, 71, 1, 1, '600000', '600000', 1, NULL, '2019-02-21 11:32:43', NULL, 'CMK-RT0075', NULL, NULL, '2020-02-25 08:30:47', '2020-02-25 08:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_materials`
--

CREATE TABLE `inventory_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_suppliers`
--

CREATE TABLE `inventory_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_suppliers`
--

INSERT INTO `inventory_suppliers` (`id`, `name`, `phone`, `email`, `address`, `notes`, `image_url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Diketahui', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(2, 'Abdurahman Store', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(3, 'Akulaku', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(4, 'BEC', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(5, 'Borma', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL),
(6, 'Marga Cipta', NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-25 07:24:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jo`
--

CREATE TABLE `jo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jo_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deadline` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finishing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `jo_status_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='User id';

--
-- Dumping data for table `jo`
--

INSERT INTO `jo` (`id`, `jo_code`, `client_id`, `size`, `title`, `start_date`, `deadline`, `description`, `image_url`, `material`, `finishing`, `qty`, `notes`, `user_id`, `parent_id`, `category_id`, `jo_status_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'CK00916', 1, '10x10CM', 'Testing JO', '2020-03-12 05:16:27', '2020-03-04 22:23:00', '<p>Testing Deskripsi JO</p>', NULL, 'Sample Material', 'Sample Finishing', 1, '<p>Sample notes jo</p>', 1, 1, 1, 1, NULL, '2020-03-02 22:26:39', '2020-03-02 22:26:39'),
(2, 'CK00917', 1, '10x5CM', 'Lorem ipsum', '2020-03-12 05:16:28', '2020-03-03 05:36:03', 'asasa', NULL, NULL, NULL, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL),
(3, 'CK00918', 1, '5x10 CM', 'Testing JO Lagi', '2020-03-14 12:56:15', '2020-03-05 23:04:35', '<p>Testing deskripsi</p>', NULL, 'Sample Material', 'Sample Finishing', 10, '<p>Testing notes&nbsp;</p>', 1, 1, 1, 1, NULL, '2020-03-02 23:05:20', '2020-03-02 23:05:20'),
(4, 'CK00919', 1, '10x10CM', 'Testing lagiiiii', '2020-03-14 12:56:26', '2020-03-06 23:05:36', '<p>Testing testingtesing</p>', NULL, 'Material Name', 'asasa', 10, '<p>Notes here......</p>', 1, 1, 1, 1, NULL, '2020-03-02 23:06:22', '2020-03-12 03:59:21'),
(27, 'CK00920', 13, 'asasas', 'Testing JOOOOOOOOOOOOOO', '2020-03-13 12:10:35', '2020-03-04 04:02:48', '<p>asasasasasasasasasa</p>', NULL, 'asasas', 'sasasas', 0, '<p>asasasas</p>', 1, 1, 1, 3, NULL, '2020-03-04 04:03:30', '2020-03-12 03:59:27'),
(28, 'CK00921', 3, '5x10 CM', 'Testing JOOOOOOOOO', '2020-03-13 12:10:32', '2020-03-11 23:13:06', '<p>asasa</p>', NULL, 'sasas', 'asasa', 1, '<p>asasas</p>', 1, 1, 1, 3, NULL, '2020-03-11 23:13:40', '2020-03-12 00:32:15'),
(30, 'CK00922', 13, '10x10CM', 'Just testing', '2020-03-13 12:10:40', '2020-03-11 23:21:59', '<p>asas</p>', NULL, 'as12w', 'Sample Finishing', 10, '<p>asasasasasasasas</p>', 1, 1, 1, 3, NULL, '2020-03-11 23:22:35', '2020-03-12 00:32:17'),
(31, 'CK00919', 13, '5x10 CM', 'asasas', '2020-03-13 12:09:35', '2020-03-12 05:29:15', '<p>aasasa</p>', NULL, 'Sample Material', 'asasa', 1, '<p>asas</p>', 1, 1, 1, 3, NULL, '2020-03-12 05:29:31', '2020-03-12 05:29:31'),
(32, 'CK00920', 3, '5x10 CM', 'asasq wqwqwqwqwqwqwqw', '2020-03-12 05:29:35', '2020-03-12 05:29:35', '<p>asasasas</p>', NULL, 'Material Name', 'Sample Finishing', 10, '<p>asasas</p>', 1, 1, 1, 1, NULL, '2020-03-12 05:29:53', '2020-03-12 05:29:53'),
(33, 'CK00921', 13, '5x10 CM', 'asasq wqwqwqwqwqwqwqw', '2020-03-12 05:29:58', '2020-03-12 05:29:58', '<p>sasasasa</p>', NULL, 'Sample Material', 'Sample Finishing', 1, '<p>asas</p>', 1, 1, 1, 1, NULL, '2020-03-12 05:30:10', '2020-03-12 05:30:10'),
(34, 'CK00922', 1, '10x10CM', 'Testing JO Terbaru', '2020-03-13 12:09:37', '2020-03-13 01:59:02', '<p>Sasasas</p>', NULL, 'Sample Material', 'Sample Finishing', 10, '<p>asasasasasasas</p>', 1, 1, 1, 3, NULL, '2020-03-13 01:59:28', '2020-03-13 01:59:28'),
(35, 'CK00923', 14, '5x10 CM', 'Testing JO dari ID client dengan AJAX', '2020-03-14 12:58:37', '2020-03-13 03:46:11', '<p>asasas</p>', NULL, 'Material Name', 'Sample Finishing', 10, '<p>asasasasas</p>', 1, 1, 1, 1, NULL, '2020-03-13 03:46:37', '2020-03-13 03:46:37'),
(36, 'CK00924', 14, '10x10cm', 'Sample JO Name NOT GENERATE RANDOM STRING', '2020-03-14 00:11:21', '2020-03-14 00:11:21', '<p>This is a sample description</p>', 'C:\\xampp\\tmp\\php836F.tmp', 'Sample Material', 'Sample Finishing', 5, '<p>Sample note a jo</p>', 1, 1, 1, 1, NULL, '2020-03-14 00:14:40', '2020-03-14 00:14:40'),
(37, 'CK00925', 1, '10x10cm', 'Tes JO With Image', '2020-03-14 08:33:16', '2020-03-14 00:56:43', '<p>sample desc</p>', 'C:\\xampp\\tmp\\php87D9.tmp', 'Sample Material', 'Sample Finishing', 5, '<p>Sample note</p>', 1, 1, 1, 1, NULL, '2020-03-14 00:57:17', '2020-03-14 00:57:17'),
(38, 'CK00926', 1, '10x10cm', 'asasasasasasasa', '2020-03-14 08:33:15', '2020-03-14 01:01:15', '<p>asasa</p>', 'C:\\xampp\\tmp\\phpB84D.tmp', 'Sample Material', 'Sample Finishing', 5, '<p>asasa</p>', 1, 1, 1, 1, NULL, '2020-03-14 01:01:51', '2020-03-14 01:01:51'),
(39, 'CK00927', 1, '10x10cm', 'Tes JO With Image', '2020-03-14 08:33:30', '2020-03-14 01:10:02', NULL, '15841734161584173416.jpg', 'Sample Material', 'Sample Finishing', 5, NULL, 1, 1, 1, 1, NULL, '2020-03-14 01:10:16', '2020-03-14 01:10:16'),
(40, 'CK00928', 3, '10x10cm', 'Testing Jo with new Image', '2020-03-14 01:16:08', '2020-03-14 01:16:08', '<p>asasasa</p>', '15841738091584173809.webp', 'Sample Material', 'Sample Finishing', 5, '<p>sasasasasas</p>', 1, 1, 1, 1, NULL, '2020-03-14 01:16:49', '2020-03-14 01:16:49'),
(41, 'CK00929', 1, '10x10cm', 'Testing JO mungkin kali ini sukses', '2020-03-14 12:58:18', '2020-03-14 01:28:52', NULL, 'CK00929_jpg', 'Sample Material', 'Sample Finishing', 5, '<p>asasas</p>', 1, 1, 1, 2, NULL, '2020-03-14 01:29:25', '2020-03-14 05:58:18'),
(42, 'CK00930', 13, '10x10cm', 'testing joooo lagi ahhhhhh', '2020-03-14 12:56:18', '2020-03-14 02:10:36', '<p>asasasasas</p>', NULL, 'Sample Material', 'Sample Finishing', 5, '<p>asasa</p>', 1, 1, 1, 1, NULL, '2020-03-14 02:11:59', '2020-03-14 05:55:11'),
(43, 'CK00931', 1, '10x10cm', 'Testing JO bismillah', '2020-03-14 12:56:20', '2020-03-14 02:14:25', '<p>asasas</p>', 'CK00931_Testing JO bismillah.jpg', 'Sample Material', 'Sample Finishing', 5, NULL, 1, 1, 1, 1, NULL, '2020-03-14 02:16:23', '2020-03-14 05:55:13'),
(45, 'CK00932', 13, '10x10cm', 'What is Lorem Ipsum?', '2020-03-14 12:58:13', '2020-03-14 02:27:09', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s s</span></p>', 'CK00932_what-is-lorem-ipsum.jpg', 'What is Lorem Ipsum?', 'Sample Finishing', 5, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s s</span><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s s</span></p>', 1, 1, 1, 2, NULL, '2020-03-14 02:28:16', '2020-03-14 05:58:13'),
(46, 'CK00933', 3, '10x10cm', 'Testing jo ngetest file upload aja', '2020-03-14 12:57:04', '2020-03-14 02:42:30', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">sum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy</span></p>', NULL, 'Sample Material', 'Sample Finishing', 5, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">sum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> is simply dummy</span><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">sum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> is simply dummy</span><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">sum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> is simply dummy</span></p>', 1, 1, 1, 2, NULL, '2020-03-14 02:43:39', '2020-03-14 05:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `jo_categories`
--

CREATE TABLE `jo_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jo_jo_tag`
--

CREATE TABLE `jo_jo_tag` (
  `jo_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jo_parents`
--

CREATE TABLE `jo_parents` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama lokasi kantor, misal MIM'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jo_parents`
--

INSERT INTO `jo_parents` (`id`, `name`) VALUES
(1, 'Cemara Kreatif'),
(2, 'MIM');

-- --------------------------------------------------------

--
-- Table structure for table `jo_status`
--

CREATE TABLE `jo_status` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jo_status`
--

INSERT INTO `jo_status` (`id`, `name`, `color`) VALUES
(1, 'Waiting List', '#ef8f00'),
(2, 'Progress', '#1794ff'),
(3, 'Selesai', '#2fa97c');

-- --------------------------------------------------------

--
-- Table structure for table `jo_tags`
--

CREATE TABLE `jo_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL
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
(3, '2020_02_18_161825_create_divisions_table', 1),
(4, '2020_02_18_161825_create_inventory_categories_table', 1),
(5, '2020_02_18_161942_create_inventory_suppliers_table', 1),
(6, '2020_02_18_162016_create_inventory_brands_table', 1),
(7, '2020_02_18_163956_create_inventory_items_table', 1),
(8, '2020_02_25_053711_create_inventory_materials_table', 1),
(9, '2020_03_02_072752_create_clients_table', 2),
(10, '2020_03_02_075211_create_jo_parents_table', 2),
(11, '2020_03_02_075221_create_jo_categories_table', 2),
(12, '2020_03_02_075241_create_jo_tags_table', 2),
(13, '2020_03_02_075248_create_jo_status_table', 2),
(14, '2020_03_02_075257_create_jo_table', 2),
(15, '2020_03_02_081711_create_jo_jo_tag_table', 3),
(16, '2020_03_13_051557_create_profiles_table', 4);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', NULL, NULL),
(2, 2, 'staff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilege` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'JSON Privilege',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 is inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `privilege`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@cemara', NULL, NULL, '$2y$10$N4fvPpKce7zAIrRmr/4XHuRjUKaFSaiUVxqJqSz3JJClf7EgZ.5Si', NULL, 1, NULL, NULL, '2020-02-25 07:24:14', NULL),
(2, 'Staff', 'staff@cemara', NULL, NULL, '$2y$10$N4fvPpKce7zAIrRmr/4XHuRjUKaFSaiUVxqJqSz3JJClf7EgZ.5Si', NULL, 1, NULL, NULL, '2020-02-25 07:24:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_name_unique` (`name`);

--
-- Indexes for table `inventory_brands`
--
ALTER TABLE `inventory_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_brands_name_unique` (`name`);

--
-- Indexes for table `inventory_categories`
--
ALTER TABLE `inventory_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_categories_name_unique` (`name`);

--
-- Indexes for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_items_serial_number_unique` (`serial_number`),
  ADD KEY `inventory_items_user_id_foreign` (`user_id`),
  ADD KEY `inventory_items_category_id_foreign` (`category_id`),
  ADD KEY `inventory_items_brand_id_foreign` (`brand_id`),
  ADD KEY `inventory_items_supplier_id_foreign` (`supplier_id`),
  ADD KEY `inventory_items_division_id_foreign` (`division_id`);

--
-- Indexes for table `inventory_materials`
--
ALTER TABLE `inventory_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_suppliers`
--
ALTER TABLE `inventory_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_suppliers_name_unique` (`name`);

--
-- Indexes for table `jo`
--
ALTER TABLE `jo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jo_user_id_foreign` (`user_id`),
  ADD KEY `jo_parent_id_foreign` (`parent_id`),
  ADD KEY `jo_status_id` (`jo_status_id`);

--
-- Indexes for table `jo_categories`
--
ALTER TABLE `jo_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jo_jo_tag`
--
ALTER TABLE `jo_jo_tag`
  ADD KEY `jo_jo_tag_jo_id_foreign` (`jo_id`),
  ADD KEY `jo_jo_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `jo_parents`
--
ALTER TABLE `jo_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jo_status`
--
ALTER TABLE `jo_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jo_tags`
--
ALTER TABLE `jo_tags`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory_brands`
--
ALTER TABLE `inventory_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `inventory_categories`
--
ALTER TABLE `inventory_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory_items`
--
ALTER TABLE `inventory_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT for table `inventory_materials`
--
ALTER TABLE `inventory_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_suppliers`
--
ALTER TABLE `inventory_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jo`
--
ALTER TABLE `jo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `jo_categories`
--
ALTER TABLE `jo_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jo_parents`
--
ALTER TABLE `jo_parents`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jo_status`
--
ALTER TABLE `jo_status`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jo_tags`
--
ALTER TABLE `jo_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD CONSTRAINT `inventory_items_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `inventory_brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `inventory_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_items_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_items_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `inventory_suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jo`
--
ALTER TABLE `jo`
  ADD CONSTRAINT `jo_ibfk_1` FOREIGN KEY (`jo_status_id`) REFERENCES `jo_status` (`id`),
  ADD CONSTRAINT `jo_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `jo_parents` (`id`),
  ADD CONSTRAINT `jo_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jo_jo_tag`
--
ALTER TABLE `jo_jo_tag`
  ADD CONSTRAINT `jo_jo_tag_jo_id_foreign` FOREIGN KEY (`jo_id`) REFERENCES `jo` (`id`),
  ADD CONSTRAINT `jo_jo_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `jo_tags` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
