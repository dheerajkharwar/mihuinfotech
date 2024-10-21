-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2024 at 12:16 PM
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
-- Database: `u768844772_fuel_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(55) NOT NULL,
  `unit` varchar(55) NOT NULL,
  `price` double NOT NULL,
  `gst` float NOT NULL,
  `hsn_code` varchar(55) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_name`, `unit`, `price`, `gst`, `hsn_code`, `updated_on`) VALUES
(1, 'Diesel', 'L', 80, 5, 'C001', '2024-07-28 09:17:39'),
(2, 'Petrol', 'L', 500, 5, '5bvcde', '2024-07-28 09:17:39'),
(3, 'LPG', 'kg', 400, 5, 'ed33333', '2024-07-28 09:17:39'),
(4, 'Item1', 'aaa', 12.5, 12.5, 'NH001234', '2024-08-09 07:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `vch_no` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `vehicle_no` varchar(55) NOT NULL,
  `orders` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`orders`)),
  `attachment` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `delivery_time` timestamp NULL DEFAULT NULL,
  `delivered_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`vch_no`, `user`, `order_date`, `booking_time`, `vehicle_no`, `orders`, `attachment`, `status`, `delivery_time`, `delivered_by`) VALUES
(1, 3, '2024-08-15', '2024-08-10 10:53:04', 'A10005', '[{\"item_name\":\"Petrol\",\"unit\":\"L\",\"price\":500,\"qty\":6,\"amt\":3000},{\"item_name\":\"Diesel\",\"unit\":\"L\",\"price\":80,\"qty\":6,\"amt\":480}]', NULL, 1, '2024-08-10 10:58:10', 1),
(2, 3, '2024-08-14', '2024-08-10 10:53:23', 'A10005', '[{\"item_name\":\"Petrol\",\"unit\":\"L\",\"price\":500,\"qty\":11,\"amt\":5500}]', NULL, 1, '2024-10-14 07:25:26', 1),
(3, 3, '2024-08-10', '2024-08-10 11:09:05', 'A10005', '[{\"item_name\":\"Petrol\",\"unit\":\"L\",\"price\":500,\"qty\":51,\"amt\":25500},{\"item_name\":\"LPG\",\"unit\":\"kg\",\"price\":400,\"qty\":51.6,\"amt\":20640}]', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `place` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `saler` varchar(55) NOT NULL,
  `company_name` varchar(55) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `state` varchar(55) NOT NULL,
  `credit_period` int(11) NOT NULL,
  `slip_range` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone_no`, `place`, `user_type`, `saler`, `company_name`, `company_address`, `state`, `credit_period`, `slip_range`, `updated_on`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', '3535353535', 'kanopur', 1, 'Bolero', 'Bokaro', 'Abc Company', 'Uttar pradesh', 2300, 2300, '2024-08-08 12:13:52'),
(3, 'balaji', '25d55ad283aa400af464c76d713c07ad', '2222222222', 'kdkdkd', 3, 'jfkdjkjj', 'kjfkdjkj', 'kjfkdkdj', 'kdfkdfk', 3400, 1200, '2024-08-08 13:19:36'),
(9, 'tokio', 'f5bb0c8de146c67b44babbf4e6584cc0', '2221112222', 'asdfgh', 2, 'sdfghvbn', 'wertghjkkjhgf', 'dggfasdf', 'sdfghjhgfd', 23, 900, '2024-08-10 11:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `user_type`, `updated_on`) VALUES
(1, 'admin', '2024-08-09 04:33:43'),
(2, 'user', '2024-07-28 09:18:37'),
(3, 'client', '2024-07-28 09:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `vehicle_no` varchar(55) NOT NULL,
  `company_name` varchar(55) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `user`, `vehicle_no`, `company_name`, `updated_on`) VALUES
(5, 3, 'A10005', 'ddddddd', '2024-08-09 07:08:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`vch_no`),
  ADD KEY `user` (`user`),
  ADD KEY `delivered_by` (`delivered_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`user_type`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key constraint` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `vch_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`delivered_by`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`user_type`) REFERENCES `usertype` (`id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `foreign key constraint` FOREIGN KEY (`user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
