-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2020 at 09:27 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `password`) VALUES
(2, '321654', '4dcc4173d80a2817206e196a38f0dbf7850188ff');

-- --------------------------------------------------------

--
-- Table structure for table `business_owner`
--

CREATE TABLE `business_owner` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `category` text NOT NULL,
  `sub_cat` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `pincode` text NOT NULL,
  `password` text NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_owner`
--

INSERT INTO `business_owner` (`id`, `firstname`, `lastname`, `email`, `mobile`, `category`, `sub_cat`, `country`, `state`, `city`, `area`, `pincode`, `password`, `verify`, `active`, `image`) VALUES
(15, 'Dev', 'Thakur', 'thakur@gmail.com', '782168416', 'Public Services', 'ATM', 'India', 'Maharashtra', 'Dhule', '', '424005', '4dcc4173d80a2817206e196a38f0dbf7850188ff', 1, 0, 'Screenshot from 2020-02-22 12-06-26.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `pincode` text NOT NULL,
  `password` text NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `mobile`, `country`, `state`, `city`, `area`, `pincode`, `password`, `verify`, `active`) VALUES
(10, 'Sahil', 'Shinde', 'shindesahil63@gmail.com', '9545727522', 'India', 'Maharashtra', 'Dhule', '', '424005', '4dcc4173d80a2817206e196a38f0dbf7850188ff', 1, 0),
(11, 'Shivani', 'Mekha', 'Shivani@gmail.com', '9988775566', 'USA', 'Ohio', 'Washington', '', '445203', '4dcc4173d80a2817206e196a38f0dbf7850188ff', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_item`
--

CREATE TABLE `data_item` (
  `category` text NOT NULL,
  `sub_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_item`
--

INSERT INTO `data_item` (`category`, `sub_cat`) VALUES
('Public Services', 'ATM'),
('Personal Care', 'Gym');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `pincode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`country`, `state`, `city`, `area`, `pincode`) VALUES
('India', 'Maharashtra', 'Dhule', '', '424005'),
('USA', 'Ohio', 'Washington', '', '445203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_owner`
--
ALTER TABLE `business_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_owner`
--
ALTER TABLE `business_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
