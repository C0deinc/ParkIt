-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 12:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `barangay` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(250) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `contactpersonname` varchar(250) NOT NULL,
  `contactpersonposition` varchar(250) NOT NULL,
  `idverification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rates`
--

CREATE TABLE `tbl_rates` (
  `id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `time_allowance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rates`
--

INSERT INTO `tbl_rates` (`id`, `space_id`, `type`, `amount`, `time_allowance`) VALUES
(1, 16, 'hourly', 50, 15),
(2, 16, 'weekly', 65, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_space`
--

CREATE TABLE `tbl_space` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `location` text NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_space`
--

INSERT INTO `tbl_space` (`id`, `name`, `location`, `width`, `length`, `payment_method`, `description`, `image`) VALUES
(16, 'CCS Parking Lot', 'WMSU', 25, 15, 'cash', 'Test', 'ccs-img.png'),
(17, 'kcc', 'sta. maria', 5, 5, 'cash', 'qwerty', 'Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spaces_available`
--

CREATE TABLE `tbl_spaces_available` (
  `id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_spaces_available`
--

INSERT INTO `tbl_spaces_available` (`id`, `space_id`, `type`, `count`) VALUES
(11, 16, 'A', 181),
(12, 16, 'B', 34);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `vehicletype` varchar(250) NOT NULL,
  `platenumber` varchar(20) NOT NULL,
  `model` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rates`
--
ALTER TABLE `tbl_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkc` (`space_id`);

--
-- Indexes for table `tbl_space`
--
ALTER TABLE `tbl_space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_spaces_available`
--
ALTER TABLE `tbl_spaces_available`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkc_space` (`space_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_rates`
--
ALTER TABLE `tbl_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_space`
--
ALTER TABLE `tbl_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_spaces_available`
--
ALTER TABLE `tbl_spaces_available`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_rates`
--
ALTER TABLE `tbl_rates`
  ADD CONSTRAINT `fkc` FOREIGN KEY (`space_id`) REFERENCES `tbl_space` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_spaces_available`
--
ALTER TABLE `tbl_spaces_available`
  ADD CONSTRAINT `fkc_space` FOREIGN KEY (`space_id`) REFERENCES `tbl_space` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
