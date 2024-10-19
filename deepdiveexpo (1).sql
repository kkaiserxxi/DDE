-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2024 at 12:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deepdiveexpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `password`, `admin_id`, `email`) VALUES
('majidfinn22@gmai.com', 'ahmad', 2, 'majidfinn22@gmai.com'),
('majidbarham', 'majid', 3, 'majidfinn22@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `Additional_Requests` varchar(500) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `start_time`, `end_time`, `status`, `Additional_Requests`, `FullName`, `email`) VALUES
(1, '2024-09-15', '10:00:00', '12:00:00', 'Confirmed', 'can we do multiple shots near the coral reeves ', '', ''),
(2, '2024-09-20', '14:00:00', '16:00:00', 'Pending', '', '', ''),
(17, '2024-09-30', '05:14:00', '06:14:00', NULL, 'orange summer challenge ', 'hamza', 'majidbarham8@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking_vr2`
--

CREATE TABLE `booking_vr2` (
  `booking_id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `Additional_Requests` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_vr2`
--

INSERT INTO `booking_vr2` (`booking_id`, `FullName`, `email`, `booking_date`, `start_time`, `end_time`, `Additional_Requests`) VALUES
(1, 'John Doe', 'john.doe@example.com', '2024-09-15', '09:00:00', '11:00:00', 'No special requests'),
(2, 'Jane Smith', 'jane.smith@example.com', '2024-09-16', '13:00:00', '15:00:00', 'Requires wheelchair access'),
(3, 'Alice Johnson', 'alice.johnson@example.com', '2024-09-17', '10:00:00', '12:00:00', 'Extra camera equipment needed'),
(13, 'majid', 'majidfinn22@gmail.com', '2024-09-14', '00:11:00', '02:14:00', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `contact_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `user_id`, `message`, `contact_date`, `status`, `FullName`, `email`) VALUES
(8, NULL, 'help me please', '2024-09-08 13:10:44', NULL, 'yaman58', 'luffymajid434@hotmail.com'),
(9, NULL, 'help me please', '2024-09-08 13:11:11', NULL, 'yaman58', 'luffymajid434@hotmail.com'),
(10, NULL, 'help me please', '2024-09-08 13:11:22', NULL, 'yaman58', 'luffymajid434@hotmail.com'),
(11, NULL, '555555', '2024-09-08 13:11:32', NULL, 'yaman58', 'john666@example.com'),
(12, NULL, 'send help please php is suck', '2024-09-08 13:13:53', NULL, 'majid', 'majidfinn22@gmail.com'),
(13, NULL, 'report', '2024-09-08 13:23:23', NULL, 'ahmad', 'john@gmail.com'),
(14, NULL, 'brazilin miku ', '2024-09-10 17:11:02', NULL, 'yaman58', 'majidfinn22@gmai.com'),
(15, NULL, 'persona 3', '2024-09-10 17:14:20', NULL, 'yaman58', 'majidfinn22@gmail.com'),
(16, NULL, 'persona 6', '2024-09-10 17:15:05', NULL, 'majid', 'majidfinn22@gmai.com'),
(17, NULL, 'persona 7\r\n', '2024-09-10 17:15:19', NULL, 'yaman58', 'majidfinn22@gmail.com'),
(18, NULL, 'my name is jefff', '2024-09-10 17:26:30', NULL, 'majid', 'majidfinn22@gmai.com'),
(19, NULL, 'asdads', '2024-09-10 17:26:36', NULL, 'yaman58', 'majidfinn22@gmai.com'),
(20, NULL, 'aaaa', '2024-09-10 17:46:10', NULL, 'yaman58', 'majidfinn22@gmai.com'),
(21, NULL, 'aaaaa', '2024-09-10 17:47:39', NULL, 'yaman58', 'majidfinn22@gmail.com'),
(22, NULL, 'axadada', '2024-09-15 10:48:25', NULL, 'majid', 'majidfinn22@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `address`, `capacity`) VALUES
(1, 'Downtown Hall', '123 Main St, Cityville', 100),
(2, 'Oceanview Park', '456 Beach Ave, Seaside', 200);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `booking_id`, `order_date`, `total_amount`, `status`) VALUES
(1, 1, '2024-09-10', 250.00, 'Paid'),
(2, 2, '2024-09-15', 300.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `FullName`, `email`) VALUES
(2, 'Jane', 'jane@example.com'),
(3, 'majid', 'majidfinn22@gmail.com'),
(4, 'mahdi', 'mahdi1234@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booking_vr2`
--
ALTER TABLE `booking_vr2`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booking_vr2`
--
ALTER TABLE `booking_vr2`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
