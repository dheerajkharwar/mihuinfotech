-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2024 at 12:17 PM
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
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `feedback` varchar(30) DEFAULT NULL,
  `feed_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `title`, `name`, `mobile`, `email`, `dob`, `gender`, `address`, `feedback`, `feed_date`) VALUES
(1, 'Mr.', 'Dheeraj Kharwar', '07526018014', 'dheerajkharwar9@gmail.com', '2009-06-10', 'Male', 'Bans Ghati, Sarayan, Deoria', 'Ffggg hhjgg hhjgg hikvh hkkhgj', '2023-11-25'),
(2, 'Mr.', 'anisa', '7567567678', 'fd@gmail.com', '9888-12-12', 'Male', 'village - Basghati', 'good', '2023-11-25'),
(3, 'Mr.', 'Lata', '5544554455', 'ff@dd.mm', '1998-05-12', 'Male', 'New Delhi - 234506', 'Best', '2023-11-25'),
(4, 'Mr.', 'Dheeraj Kharwar', '07526018014', 'admin@example.com', '2023-11-24', 'Male', 'Bans Ghati, Sarayan, Deoria', 'Ffggg hhjg', '2023-11-25'),
(5, 'Mr.', 'Dheeraj Kharwar', '07526018014', 'admin@example.com', '2023-11-25', 'Male', 'Bans Ghati, Sarayan, Deoria', 'good', '2023-11-25'),
(6, 'Mr.', 'Rita', '6655555555', 'dd@dd.nn', '2004-07-12', 'Male', 'village - Basghati', 'Best', '2023-11-25');

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
('user1', 'Dheeraj Kharwar', 'admin@gmail.com', 'Bans Ghati, Sarayan, Deoria', 'user1', '2023-11-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
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
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
