-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 12:28 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `building`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `last` varchar(64) NOT NULL,
  `first` varchar(1) NOT NULL,
  `catagory` varchar(16) NOT NULL,
  `id` varchar(16) NOT NULL,
  `material` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `delivery_method` varchar(64) NOT NULL,
  `eco_impact` varchar(64) NOT NULL,
  `delivery_distance` varchar(64) NOT NULL,
  `co2_footprint` varchar(64) NOT NULL,
  `labor_source` varchar(64) NOT NULL,
  `hazardous_chemicals` varchar(64) NOT NULL,
  `durability` varchar(64) NOT NULL,
  `rf_rating` varchar(64) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`last`, `first`, `catagory`, `id`, `material`, `location`, `delivery_method`, `eco_impact`, `delivery_distance`, `co2_footprint`, `labor_source`, `hazardous_chemicals`, `durability`, `rf_rating`, `rating`, `comments`, `date_time`) VALUES
('COLEMAN', 'C', 'FLOORING', '1001', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'LType comments or remove this this text.', '12:16:32 2018-04-27'),
('PHILLIS', 'J', 'COUNTER_TOPS', '1002', 'SILK', 'THE MOON', 'DELIVERY BOY NAMED STEVEN', 'NO CLUE', '12 MILES', 'A', 'B', 'D', 'C', 'E', 'F', 'Type comments or remove this this text.', '12:17:38 2018-04-27'),
('Hernandez', 'B', 'FLOORING', '1003', 'Wood', 'TTSC', 'FedWrecks', 'what?', 'long', 'too-much', 'never-never-land', 'all', 'none', 'what', '9', 'Deliver to None-Uvya Business INC.', '12:18:40 2018-04-27'),
('Dichemann', 'Q', 'FLOORING', '20118', 'granite', 'Venus', 'courier pigeon', 'a lot', '38 million kilometers', 'very little', 'courier pigeon', 'none', 'fg', 'yes', 'M', 'I need it ASAP', '12:20:50 2018-04-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
