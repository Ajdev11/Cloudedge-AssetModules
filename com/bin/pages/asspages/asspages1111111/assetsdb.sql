-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assetsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assetref`
--

CREATE TABLE `assetref` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `subCategory` varchar(30) NOT NULL,
  `assetType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetref`
--

INSERT INTO `assetref` (`id`, `categoryName`, `subCategory`, `assetType`) VALUES
(1, 'ict', 'Laptop', 'HP Pavilion'),
(2, 'ict', 'printer', 'Canon 2023'),
(3, 'electrical', 'fan', 'ox'),
(4, 'electrical', 'light', 'led bulb'),
(5, 'electronics', 'amplifier', 'ahuja 1120'),
(6, 'electronics', 'mixer', '24 channel mixer'),
(7, 'music', 'string', 'violin'),
(8, 'music', 'string', 'viola'),
(9, 'music', 'brass', 'trumpet'),
(10, 'music', 'brass', 'trombone'),
(11, 'building', 'blockBuilding', 'singleFloor'),
(12, 'building', 'blockBuilding', 'multiStory'),
(13, 'building', 'blockBuilding', 'gallery'),
(14, 'building', 'wooden', 'wood'),
(15, 'building', 'wooden', 'roofingSheet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assetref`
--
ALTER TABLE `assetref`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assetref`
--
ALTER TABLE `assetref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
