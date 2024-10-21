-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2024 at 12:18 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u768844772_licdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityId` int(5) NOT NULL,
  `activityType` int(2) NOT NULL,
  `activityTitle` text DEFAULT NULL,
  `activityDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ipAddress` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `userAgent` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityId`, `activityType`, `activityTitle`, `activityDate`, `ipAddress`, `userAgent`) VALUES
(1, 2, 'Invalid license: NONE', '2023-09-18 18:50:43', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(2, 3, 'Valid license: Test', '2023-09-18 18:50:53', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(3, 2, 'Invalid license: Test1', '2023-09-18 18:51:13', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(4, 2, 'Invalid license: NONE', '2023-09-18 18:51:44', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(5, 2, 'Invalid license: NONE', '2023-09-18 19:05:09', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(6, 3, 'Valid license: Test', '2023-09-19 06:24:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(7, 2, 'Invalid license: Testn', '2023-09-19 06:24:24', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(8, 3, 'Valid license: Test', '2023-09-19 06:29:03', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(9, 3, 'Valid license: test', '2023-09-19 06:29:27', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(10, 6, 'Created license \'12345\'.', '2023-09-19 06:33:59', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(11, 3, 'Valid license: 12345', '2023-09-19 06:34:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(12, 6, 'Created license \'\'.', '2023-09-19 06:38:25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(13, 7, 'Tried to create license \'\' but already existed.', '2023-09-19 06:38:54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(14, 7, 'Tried to create license \'\' but already existed.', '2023-09-19 06:38:59', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(15, 6, 'Created license \'\'.', '2023-09-19 06:41:24', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(16, 6, 'Created license \'\'.', '2023-09-19 06:42:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(17, 3, 'Valid license: Test', '2023-09-19 09:55:17', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(18, 2, 'Invalid license: 12345', '2023-09-19 09:55:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(19, 11, 'Licence change (update.php)', '2023-09-19 10:06:01', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(20, 3, 'Valid license: abcdef', '2023-09-19 10:06:01', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(21, 11, 'Licence changed (update.php)', '2023-09-19 10:07:37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(22, 3, 'Valid license: abcdef', '2023-09-19 10:07:37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(23, 11, 'Licence changed (update.php)', '2023-09-19 10:46:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(24, 3, 'Valid license: abcdef', '2023-09-19 10:46:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(25, 11, 'Licence changed (update.php)', '2023-09-19 10:46:32', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(26, 3, 'Valid license: abcdef', '2023-09-19 10:46:32', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(27, 11, 'Licence changed (update.php)', '2023-09-19 10:51:54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(28, 2, 'Invalid license: abcdef', '2023-09-19 10:51:54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(29, 11, 'Licence changed (update.php)', '2023-09-19 10:54:02', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(30, 3, 'Valid license: 2bA9YdX99w', '2023-09-19 10:54:49', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(31, 11, 'Licence changed (update.php)', '2023-09-19 10:56:56', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(32, 11, 'Licence changed (update.php)', '2023-09-19 10:57:55', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(33, 11, 'Licence changed (update.php)', '2023-09-19 10:58:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(34, 11, 'Licence changed (update.php)', '2023-09-19 10:59:29', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(35, 11, 'Licence changed (update.php)', '2023-09-19 11:00:22', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(36, 2, 'Invalid license: Test', '2023-09-19 11:03:06', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(37, 11, 'Licence changed (update.php)', '2023-09-19 11:03:22', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(38, 11, 'Licence changed (update.php)', '2023-09-19 11:04:25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(39, 11, 'Licence changed (update.php)', '2023-09-19 11:05:25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(40, 11, 'Licence changed (update.php)', '2023-09-19 11:05:38', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(41, 2, 'Invalid license: test', '2023-09-19 11:25:27', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(42, 2, 'Invalid license: abcdef', '2023-09-19 11:25:31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(43, 2, 'Invalid license: 12345', '2023-09-19 11:25:33', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(44, 11, 'Licence changed (update.php)', '2023-09-19 11:25:47', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(45, 3, 'Valid license: a4pdFCEZeP', '2023-09-19 11:25:47', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(46, 3, 'Valid license: XT9ClW0AHU', '2023-09-19 11:31:04', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(47, 11, 'Licence changed (update.php)', '2023-09-19 11:31:23', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(48, 3, 'Valid license: XT9ClW0AHU', '2023-09-19 11:31:23', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(49, 2, 'Invalid license: XT9ClW0AHU', '2023-09-19 11:31:40', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(50, 2, 'Invalid license: Test', '2023-09-19 11:32:39', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(51, 3, 'Valid license: e1UG4jPuld', '2023-09-19 11:40:47', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(52, 11, 'Licence changed (update.php)', '2023-09-19 11:41:02', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(53, 3, 'Valid license: YunSyoQKDH', '2023-09-19 11:41:02', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(54, 2, 'Invalid license: e1UG4jPuld', '2023-09-19 11:41:19', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(55, 3, 'Valid license: YunSyoQKDH', '2023-09-19 11:41:41', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(56, 3, 'Valid license: 2bA9YdX99w', '2023-09-19 12:33:59', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(57, 3, 'Valid license: YunSyoQKDH', '2023-09-19 12:34:03', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(58, 3, 'Valid license: 2bA9YdX99w', '2023-09-19 12:34:10', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(59, 2, 'Invalid license: Test', '2023-09-20 11:44:35', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(60, 2, 'Invalid license: Test', '2023-09-20 11:46:18', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(61, 11, 'Licence changed (update.php)', '2023-09-20 11:46:43', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(62, 3, 'Valid license: hMRZJmHaEx', '2023-09-20 11:46:43', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(63, 2, 'Invalid license: 12345', '2023-09-20 12:38:08', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(64, 3, 'Valid license: hMRZJmHaEx', '2023-09-20 12:48:35', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(65, 2, 'Invalid license: NONE', '2023-09-20 13:53:56', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(66, 3, 'Valid license: hMRZJmHaEx', '2023-09-20 13:54:03', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31'),
(67, 2, 'Invalid license: NONE', '2023-09-21 17:33:06', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(68, 2, 'Invalid license: Test', '2023-09-21 17:33:25', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(69, 2, 'Invalid license: 8zkJUsXrGL', '2023-09-21 17:33:47', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(70, 2, 'Invalid license: 8zkJUsXrGL', '2023-09-21 17:34:27', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(71, 2, 'Invalid license: NONE', '2023-09-21 17:41:26', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(72, 3, 'Valid license: hMRZJmHaEx', '2023-09-21 17:41:44', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(73, 3, 'Valid license: hMRZJmHaEx', '2023-09-21 17:42:28', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(74, 3, 'Valid license: hMRZJmHaEx', '2023-09-21 17:42:45', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(75, 2, 'Invalid license: NONE', '2023-09-23 07:07:33', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36'),
(76, 3, 'Valid license: 2bA9YdX99w', '2023-09-26 18:00:50', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(77, 3, 'Valid license: hMRZJmHaEx', '2023-09-26 18:00:57', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(78, 6, 'Created license \'fMvfe6\'.', '2023-09-26 19:00:09', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(79, 3, 'Valid license: fMvfe6', '2023-09-26 19:00:16', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(80, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-26 19:12:41', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(81, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-26 19:12:45', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(82, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-26 19:12:54', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(83, 5, 'Deleted license \'hMRZJmHaEx\'.', '2023-09-26 19:21:12', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(84, 5, 'Deleted license \'2bA9YdX99w\'.', '2023-09-26 19:21:49', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(85, 4, 'Tried to delete license \'2bA9YdX99w\' but it didn\'t exist', '2023-09-26 19:24:45', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(86, 4, 'Tried to delete license \'2bA9YdX99w\' but it didn\'t exist', '2023-09-26 19:24:47', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(87, 4, 'Tried to delete license \'2bA9YdX99w\' but it didn\'t exist', '2023-09-26 19:25:01', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(88, 4, 'Tried to delete license \'2bA9YdX99w\' but it didn\'t exist', '2023-09-26 19:25:15', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(89, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-27 05:41:24', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(90, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-27 05:41:36', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(91, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-27 05:41:41', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(92, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-27 05:41:47', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(93, 7, 'Tried to create license \'fMvfe6\' but already existed.', '2023-09-27 05:41:53', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(94, 6, 'Created license \'xnDmCM\'.', '2023-09-27 05:42:20', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(95, 6, 'Created license \'xnDmCM\'.', '2023-09-27 05:42:50', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(96, 7, 'Tried to create license \'xnDmCM\' but already existed.', '2023-09-27 05:43:04', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(97, 5, 'Deleted license \'xnDmCM\'.', '2023-09-27 05:43:21', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(98, 4, 'Tried to delete license \'xnDmCM\' but it didn\'t exist', '2023-09-27 05:44:32', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(99, 5, 'Deleted license \'xCkWi5\'.', '2023-09-27 05:45:52', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(100, 5, 'Deleted license \'fMvfe6\'.', '2023-09-27 05:46:17', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(101, 4, 'Tried to delete license \'fMvfe6\' but it didn\'t exist', '2023-09-27 05:46:44', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(102, 6, 'Created license \'12345A\'.', '2023-09-27 05:46:44', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(103, 6, 'Created license \'B6SHzV\'.', '2023-09-27 06:07:09', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(104, 5, 'Deleted license \'12345A\'.', '2023-09-27 06:07:28', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(105, 6, 'Created license \'12345A\'.', '2023-09-27 06:07:45', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(106, 6, 'Created license \'aaaaaaa\'.', '2023-09-27 07:04:36', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(107, 7, 'Tried to create license \'aaaaaaa\' but already existed.', '2023-09-27 07:45:00', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(108, 6, 'Created license \'dddddd\'.', '2023-09-27 07:45:54', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(109, 5, 'Deleted license \'aaaaaaa\'.', '2023-09-28 09:01:33', '103.176.238.251', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Mobile Safari/537.36'),
(110, 4, 'Tried to delete license \'aaaaaaa\' but it didn\'t exist', '2023-09-28 09:01:54', '103.176.238.251', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36'),
(111, 4, 'Tried to delete license \'aaaaaaa\' but it didn\'t exist', '2023-09-28 09:01:58', '103.176.238.251', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Mobile Safari/537.36'),
(112, 5, 'Deleted license \'dddddd\'.', '2023-09-30 04:32:16', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(113, 5, 'Deleted license \'12345A\'.', '2023-09-30 04:32:18', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(114, 5, 'Deleted license \'6uoKT8\'.', '2023-09-30 04:32:20', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(115, 6, 'Created license \'M1RFKD\'.', '2023-09-30 04:34:33', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(116, 6, 'Created license \'AAA123\'.', '2023-09-30 04:35:26', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(117, 6, 'Created license \'ZZZ123\'.', '2023-09-30 04:36:55', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(118, 4, 'Tried to delete license \'AAA123\' but it didn\'t exist', '2023-09-30 05:14:06', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(119, 5, 'Deleted license \'eAfkky\'.', '2023-09-30 05:14:13', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(120, 6, 'Created license \'AAAAAA\'.', '2023-09-30 05:40:37', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.43'),
(121, 6, 'Created license \'Pank123\'.', '2023-09-30 14:12:36', '2401:4900:5199:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Mobile Safari/537.36'),
(122, 6, 'Created license \'ZZZZZ1\'.', '2023-10-02 04:49:05', '103.176.238.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.47'),
(123, 6, 'Created license \'abcdefx123\'.', '2023-10-24 09:06:44', '103.176.238.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(124, 5, 'Deleted license \'ZZZ123\'.', '2023-10-24 11:35:18', '103.176.238.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(125, 5, 'Deleted license \'O6guEa\'.', '2023-10-24 11:35:21', '103.176.238.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(126, 5, 'Deleted license \'Pank123\'.', '2023-10-24 11:35:22', '103.176.238.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(127, 5, 'Deleted license \'yBAIRM\'.', '2023-10-24 11:35:24', '103.176.238.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(128, 5, 'Deleted license \'7WWWaO\'.', '2023-10-29 07:09:20', '103.176.238.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(129, 6, 'Created license \'ABC123\'.', '2023-10-29 07:10:04', '103.176.238.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'),
(130, 6, 'Created license \'AASSDD\'.', '2023-11-21 06:58:01', '2401:4900:82ab:', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36'),
(131, 6, 'Created license \'ABCABC\'.', '2023-12-19 05:08:26', '2401:4900:585d:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(132, 6, 'Created license \'XCOMfT99\'.', '2023-12-19 08:28:21', '2401:4900:585d:', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'),
(133, 5, 'Deleted license \'0SUwjz\'.', '2023-12-21 22:41:01', '2401:4900:802c:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(134, 6, 'Created license \'ZZZZZZ\'.', '2023-12-21 22:42:35', '2401:4900:802c:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(135, 6, 'Created license \'BBBGGG\'.', '2024-01-09 07:17:49', '2401:4900:5aaf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(136, 5, 'Deleted license \'qOuEKM\'.', '2024-01-09 07:28:03', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(137, 5, 'Deleted license \'2Tvy5S\'.', '2024-01-09 07:28:28', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(138, 6, 'Created license \'USER1\'.', '2024-01-09 07:29:54', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(139, 6, 'Created license \'USER2\'.', '2024-01-09 07:30:36', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(140, 6, 'Created license \'USER3\'.', '2024-01-09 07:31:17', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(141, 6, 'Created license \'USER4\'.', '2024-01-09 07:31:52', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(142, 6, 'Created license \'USER5\'.', '2024-01-09 07:32:50', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(143, 6, 'Created license \'USER6\'.', '2024-01-09 07:33:39', '2401:4900:45cf:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(144, 6, 'Created license \'USER7\'.', '2024-01-09 07:37:10', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(145, 6, 'Created license \'USER8\'.', '2024-01-09 07:37:50', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(146, 6, 'Created license \'USER9\'.', '2024-01-09 08:16:25', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(147, 6, 'Created license \'USER10\'.', '2024-01-09 08:17:17', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(148, 6, 'Created license \'USER11\'.', '2024-01-09 08:17:59', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(149, 6, 'Created license \'USER12\'.', '2024-01-09 08:18:29', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(150, 6, 'Created license \'USER13\'.', '2024-01-09 08:19:00', '2401:4900:4715:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(151, 6, 'Created license \'BBBGGG\'.', '2024-01-09 09:44:32', '2401:4900:4712:', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'),
(152, 5, 'Deleted license \'BBBGGG\'.', '2024-01-09 09:46:16', '2401:4900:4712:', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'),
(153, 5, 'Deleted license \'ZZZZZZ\'.', '2024-01-09 09:46:58', '2401:4900:4712:', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'),
(154, 5, 'Deleted license \'zwtxvH\'.', '2024-01-10 09:12:52', '2401:4900:45c0:', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36'),
(155, 5, 'Deleted license \'USER13\'.', '2024-01-31 07:20:43', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(156, 5, 'Deleted license \'USER12\'.', '2024-01-31 07:20:50', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(157, 5, 'Deleted license \'USER11\'.', '2024-01-31 07:20:57', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(158, 5, 'Deleted license \'USER10\'.', '2024-01-31 07:21:00', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(159, 5, 'Deleted license \'USER9\'.', '2024-01-31 07:21:05', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(160, 5, 'Deleted license \'OLjYgW\'.', '2024-01-31 07:31:04', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(161, 5, 'Deleted license \'vUlfeD\'.', '2024-01-31 07:31:08', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(162, 5, 'Deleted license \'wQVuWk\'.', '2024-01-31 07:31:16', '223.225.120.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(163, 5, 'Deleted license \'C1bLwD\'.', '2024-02-13 08:30:17', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(164, 5, 'Deleted license \'UqW2Ea\'.', '2024-02-13 08:30:19', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(165, 5, 'Deleted license \'DVGsE5\'.', '2024-02-13 08:30:20', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(166, 5, 'Deleted license \'x01ObS\'.', '2024-02-13 08:30:21', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(167, 5, 'Deleted license \'EBaEyg\'.', '2024-02-13 08:30:23', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(168, 5, 'Deleted license \'ZJfUy6\'.', '2024-02-13 08:30:24', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(169, 5, 'Deleted license \'JkXbdd\'.', '2024-02-13 08:30:25', '117.96.186.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36'),
(170, 6, 'Created license \'u99\'.', '2024-03-18 06:53:02', '106.221.230.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36'),
(171, 6, 'Created license \'vBTiNf\'.', '2024-04-05 11:57:49', '103.108.5.58', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36'),
(172, 6, 'Created license \'kkZghS\'.', '2024-05-21 10:24:25', '106.221.230.162', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36'),
(173, 6, 'Created license \'iw1fse\'.', '2024-05-22 12:12:14', '106.221.224.105', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36'),
(174, 5, 'Deleted license \'iw1fse\'.', '2024-08-16 15:25:00', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'),
(175, 5, 'Deleted license \'MoPclm\'.', '2024-08-16 15:25:02', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'),
(176, 5, 'Deleted license \'9sFFl2\'.', '2024-08-16 15:25:04', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'),
(177, 5, 'Deleted license \'FZq0d0\'.', '2024-08-16 15:25:06', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'),
(178, 6, 'Created license \'ABC555\'.', '2024-08-16 15:25:47', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36'),
(179, 6, 'Created license \'nEnsZw\'.', '2024-08-16 15:57:12', '27.59.108.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `license_data`
--

CREATE TABLE `license_data` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `purchase_code` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `license_data`
--

INSERT INTO `license_data` (`ID`, `name`, `address`, `email`, `contact`, `purchase_code`, `purchase_date`, `expiry`) VALUES
(1005, 'test', 'test', 'dheeraj@gmail.com', '75260180174 ', 'D6M2XJ', '2024-08-16', '2024-08-30'),
(1006, 'test om', 'test', 'mihuinfotech1@gmail.com', '5555555555', 'QCro5D', '2024-08-16', '2024-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `ID` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'dheeraj12345kharwar', '$2y$10$nH3NHqVsO.sbGGjGrJ9oIeJb2tfQyuFDTfTLOATd/jaFK.QBGQm.W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityId`);

--
-- Indexes for table `license_data`
--
ALTER TABLE `license_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `purchase_code` (`purchase_code`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `license_data`
--
ALTER TABLE `license_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
