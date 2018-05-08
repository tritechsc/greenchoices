-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 06:27 AM
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
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '05:22:49 2018-05-04'),
('TEST', 'T', 'FLOORING', '1001', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '1', '3 Type comments or remove this this text.', '04:42:43 2018-05-02'),
('TEST', 'T', 'FLOORING', '1002', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '04:41:52 2018-05-02'),
('TEST', 'T', 'FLOORING', '1003', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3 Type comments or remove this this text.', '04:42:43 2018-05-02'),
('TEST', 'T', 'FLOORING', '1004', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '4', 'Type comments or remove this this text.', '04:42:43 2018-05-02'),
('2001', '2', 'COUNTER_TOPS', '2001', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'Type comments or remove this this text.', '04:48:09 2018-05-02'),
('2002', '2', 'COUNTER_TOPS', '2002', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'Type comments or remove this this text.', '04:50:44 2018-05-02'),
('2003', '3', 'COUNTER_TOPS', '2003', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'Type comments or remove this this text.', '04:51:17 2018-05-02');

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
