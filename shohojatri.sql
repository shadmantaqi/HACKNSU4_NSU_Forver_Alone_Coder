-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 01:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shohojatri`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `accepterd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `req_id`, `driver_id`, `bid_amount`, `accepterd`) VALUES
(2, 3, 1, 500, ''),
(3, 3, 1, 400, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `booking_bydate`
--

CREATE TABLE `booking_bydate` (
  `id` int(11) NOT NULL,
  `pickTime` varchar(255) NOT NULL,
  `pickDate` varchar(255) NOT NULL,
  `pickLocation` varchar(255) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `dropLocation` varchar(255) NOT NULL,
  `maxBudget` varchar(20) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_bydate`
--

INSERT INTO `booking_bydate` (`id`, `pickTime`, `pickDate`, `pickLocation`, `ac`, `dropLocation`, `maxBudget`, `userID`) VALUES
(3, '15:00', '2022-08-19', 'Narayanganj', 'ac', 'Shonir Akrah', '500', 8),
(4, '15:00', '2022-08-19', 'Narayanganj', 'ac', 'Shonir Akrah', '500', 8);

-- --------------------------------------------------------

--
-- Table structure for table `booking_bydays`
--

CREATE TABLE `booking_bydays` (
  `id` int(11) NOT NULL,
  `pickTime` varchar(255) NOT NULL,
  `pickDays` varchar(255) NOT NULL,
  `pickLocation` varchar(255) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `maxBudget` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `noplate` varchar(255) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `model`, `noplate`, `ac`, `type`, `seat`, `driver_id`) VALUES
(1, '', '', '', '', 0, 2),
(2, '123', '206824', '', 'AC', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `driving_license` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `driving_license`, `phoneNo`, `nid`, `address`, `password`, `otp`) VALUES
(1, 'Nahid', '5555', '01554518620', '1234', 'Dania', '123456', '3480'),
(2, '', '', '0155418620', '', '', '123', '6565');

--
-- Triggers `driver`
--
DELIMITER $$
CREATE TRIGGER `carAssign` AFTER INSERT ON `driver` FOR EACH ROW BEGIN
INSERT INTO `car` (car.driver_id) VALUES (NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `name`, `nid`, `phoneNo`, `gender`, `address`, `password`, `otp`) VALUES
(7, '', '', '01554518620', '', '', '123', '6592'),
(8, 'nahid', '123654', '01554518620', 'male', 'Dhakja', '123', '8430'),
(9, '', '', '01774881164', '', '', '123456', '8131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_bydate`
--
ALTER TABLE `booking_bydate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_bydate`
--
ALTER TABLE `booking_bydate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
