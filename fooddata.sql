-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 09:46 PM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooddata`
--

CREATE TABLE IF NOT EXISTS `materials` (
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
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


1	LAST NAME				
2	FIRST INITIAL 			
3	CATEGORY
4	ID
5	MATERIAL	
6	LOCATION
7	DELIVERY_METHOD
8	ECO_IMPACT
9	DELIVERY_DISTANCE
10	CARBON_DIOXIDE_FOOTPRINT
11	LABOR_SOURCE
12	HAZARDOUS_CHEMICALS
13	DURABILITY
14	RF_RATING
15 	COMMENTS
16	DATE AND TIME	




--
-- Dumping data for table `fooddata`
--

INSERT INTO `fooddata` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) VALUES
('grocer', 'g', 'BANANAS', '10,000', '2 pounds', '10-10-10 ', '.56 lbs', 'Imadacloprid', 'weekly', '10,0000000 lbs', 'irragation system', 'daily', 'train', '20,000000,00000 miles', '80%', 'Yes', '', '15:17:03 2017-05-02'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooddata`
--
ALTER TABLE `fooddata`
  ADD UNIQUE KEY `food_id` (`food_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
