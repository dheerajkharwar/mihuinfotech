-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2023 at 07:44 AM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u768844772_crm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('mihu', 'b4dc743a25a39e3e7020f7015e72a530');

-- --------------------------------------------------------

--
-- Table structure for table `dheeraj`
--

CREATE TABLE `dheeraj` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `feedback` varchar(30) DEFAULT NULL,
  `feed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dheeraj`
--

INSERT INTO `dheeraj` (`id`, `title`, `name`, `mobile`, `email`, `dob`, `gender`, `address`, `feedback`, `feed_date`) VALUES
(1, 'Mr.', 'Raj', '7687768776', 'raj@gmail.com', '2023-10-24', 'Male', 'Pune', 'good', '2023-10-13 10:36:56'),
(2, 'Mr.', 'dheeraj', '07777777777', 'dheeraj@gmail.com', '2023-10-28', 'Male', 'Pune', 'Very good', '2023-10-13 12:35:25'),
(3, 'Mr.', 'dheeraj', '07777777777', 'dheeraj@gmail.com', '2023-10-28', 'Male', 'Pune', 'Very good', '2023-10-13 12:36:34'),
(4, 'Mr.', 'dheeraj', '07777777777', 'dheeraj@gmail.com', '2023-10-28', 'Male', 'Pune', 'Very good', '2023-10-13 12:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `rani`
--

CREATE TABLE `rani` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `feedback` varchar(30) DEFAULT NULL,
  `feed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `address`, `password`, `create_datetime`) VALUES
('dheeraj', '12345', 'dheeraj@gmail.com', 'Pune', '827ccb0eea8a706c4c34a16891f84e7b', '2023-10-13'),
('rani', 'om', 'om@gmail.com', 'Pune', '202cb962ac59075b964b07152d234b70', '2023-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dheeraj`
--
ALTER TABLE `dheeraj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rani`
--
ALTER TABLE `rani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dheeraj`
--
ALTER TABLE `dheeraj`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rani`
--
ALTER TABLE `rani`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
