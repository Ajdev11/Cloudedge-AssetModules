-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 12:09 PM
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
-- Table structure for table `assetcategory`
--

CREATE TABLE `assetcategory` (
  `cat_ID` int(5) NOT NULL,
  `categoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetcategory`
--

INSERT INTO `assetcategory` (`cat_ID`, `categoryName`) VALUES
(1, 'Land'),
(2, 'Building'),
(3, 'Music'),
(4, 'ICT'),
(5, 'Furniture'),
(6, 'Electronics'),
(8, 'Electricals'),
(9, 'Automobiles');

-- --------------------------------------------------------

--
-- Table structure for table `assetname`
--

CREATE TABLE `assetname` (
  `asset_ID` int(5) NOT NULL,
  `assetName` varchar(30) NOT NULL,
  `type_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetname`
--

INSERT INTO `assetname` (`asset_ID`, `assetName`, `type_ID`) VALUES
(1, 'Violin', 1),
(2, 'Viola', 1),
(3, 'Cello', 1),
(4, 'Double Bass', 1),
(5, 'Trumpet', 2),
(6, 'Trombone', 2),
(7, 'Euphonium', 2),
(8, 'Flute', 3),
(9, 'Clarinet', 3),
(10, 'Alto Soprano', 3),
(11, 'Tuba', 2),
(12, 'HP ProBook', 4);

-- --------------------------------------------------------

--
-- Table structure for table `assets_tbl`
--

CREATE TABLE `assets_tbl` (
  `sn` int(5) NOT NULL,
  `assetName` varchar(100) NOT NULL,
  `assetDescription` varchar(300) DEFAULT NULL,
  `assetType` varchar(100) DEFAULT NULL,
  `costAtAcquisition` decimal(10,0) DEFAULT NULL,
  `estimatedCost` decimal(10,0) DEFAULT NULL,
  `serialNo` varchar(20) DEFAULT NULL,
  `assetLocation` varchar(100) DEFAULT NULL,
  `assetStatus` varchar(20) DEFAULT NULL,
  `enteredBy` varchar(100) DEFAULT NULL,
  `assetOwner` varchar(100) DEFAULT NULL,
  `dateAcquired` date DEFAULT NULL,
  `timeAcquired` timestamp(6) NULL DEFAULT current_timestamp(6),
  `country` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `ogroup` varchar(30) DEFAULT NULL,
  `ugroup` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `loc` varchar(30) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `dimension` varchar(10) DEFAULT NULL,
  `propertyType` varchar(20) DEFAULT NULL,
  `propertyStatus` varchar(10) DEFAULT NULL,
  `renewalDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets_tbl`
--

INSERT INTO `assets_tbl` (`sn`, `assetName`, `assetDescription`, `assetType`, `costAtAcquisition`, `estimatedCost`, `serialNo`, `assetLocation`, `assetStatus`, `enteredBy`, `assetOwner`, `dateAcquired`, `timeAcquired`, `country`, `state`, `region`, `ogroup`, `ugroup`, `district`, `loc`, `qty`, `size`, `dimension`, `propertyType`, `propertyStatus`, `renewalDate`) VALUES
(1, 'TV', '72\" Flat Screen Television', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Pulpit', 'Cyramic Pulpit with gold edges', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 17:05:05.975235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Microphone', 'Wired Microphone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 17:13:53.181921', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Desktop Computer', 'Dual core Desktop Computer                                                                              Dual Core Computer                     ', 'ELECTRONICS', '320000', '375000', '47686', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', NULL, '2022-09-19 14:44:45.595860', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Microph', 'Wired Microphone2', 'ELECTRONICS', '12000', '15000', '154', 'District Church', 'GOOD', 'A.S.A', 'Port Harcourt Region ', '2022-09-12', '2022-09-19 14:48:13.226965', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '43\" TV', 'LG Television', 'ELECTRONICS', '129', '120000', '133', 'District', 'SELECT STATUS', 'A.S.A', 'Port Harcourt', '0000-00-00', '2022-09-19 14:52:38.754653', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '32\" TV', 'Samsung Television', 'ELECTRONICS', '129', '120000', '133', 'District', 'SELECT STATUS', 'A.S.A', 'Port Harcourt', '0000-00-00', '2022-09-19 15:00:53.819755', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '32\" TV', 'Samsung Television', 'ELECTRONICS', '129', '120000', '133', 'District', 'SELECT STATUS', 'A.S.A', 'Port Harcourt', '0000-00-00', '2022-09-19 15:00:59.559930', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Generator', '2.5 kva Generator', 'ELECTRONICS', '240000', '280000', '4311', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', '0000-00-00', '2022-09-19 15:27:10.538229', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Pulpit', 'Cyramic Pulpit', 'CHURCH ITEMS', '321000', '350000', '2434', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', '0000-00-00', '2022-09-19 15:33:12.342076', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Church Bus', 'Toyota Hiace Bus', 'CHURCH ITEMS', '2500000', '3000000', '2432', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', '0000-00-00', '2022-09-19 15:36:49.612441', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Church Bus', 'Toyota Hiace Bus', 'CHURCH ITEMS', '2500000', '3000000', '2432', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', '0000-00-00', '2022-09-20 10:18:57.573800', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Church Bus', 'Toyota Hiace Bus', 'VEHICLES', '2500000', '3000000', '2432', 'District', 'SELECT STATUS', 'Adewale', 'Port Harcourt', '0000-00-00', '2022-09-20 10:19:41.391733', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-31'),
(14, 'Speakers', 'MX Speakers', 'ELECTRONICS', '201500', '200000', '342', 'District Church', 'GOOD', 'A.S.A', 'Rivers State', '0000-00-00', '2022-09-20 10:24:41.876682', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Church Building', 'Cathedral Building', 'CHURCH ITEMS', '13000000', '18000000', '544', 'District', 'GOOD', 'A.S.A', 'Port Harcourt Church', '2022-10-05', '2022-10-05 16:19:49.000000', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', '', 1, '2 plots', '200 x 100', 'Building', 'In Use', '0000-00-00'),
(20, 'HONDA', 'HONDA Accord', 'VEHICLES', '4500000', '3540000', '4321', 'PHC', 'N', 'A.S', '', '2022-11-02', '2022-11-02 11:40:02.000000', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', '', 0, '', '', '', '', '0000-00-00'),
(27, 'FORD', 'FORD Explorer', 'VEHICLES', '129', '280000', '6363', 'District', 'NEEDS SERVICING', 'Adewale S.', 'Port Harcourt', '2023-01-29', '2023-01-29 17:20:13.000000', 'Nigeria', 'Rivers', 'Port Harcourt', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', '', 1, '1', '2', 'Car Park', 'In Use', '0000-00-00'),
(33, 'Tecno 2F', 'Tecno Phone with android OS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-01 10:46:05.686980', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Ipad', 'Ipad Computer', 'ELECTRONICS', '150000', '145000', '37', 'Ada George Road', 'GOOD', 'Solomon King', 'DLBC Okilton District', '2008-07-14', '0000-00-00 00:00:00.000000', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Tecno 3F', 'Tecno Phone with android OS', 'ELECTRONICS', '78000', '79000', '38', 'Ada George Road', 'GOOD', 'Solomon King', 'DLBC Okilton District', '2023-02-26', '0000-00-00 00:00:00.000000', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Building', 'District Church Building', 'ELECTRONICS', '34000000', '38000000', '753', 'Aggrey Road, PHC', 'GOOD', 'A.S. Adewale', 'Harbour District', '2010-11-04', '0000-00-00 00:00:00.000000', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Laptop', 'HP EliteBook ', 'ELECTRONICS', '310000', '346000', '3567', NULL, NULL, NULL, NULL, '2022-02-07', '0000-00-00 00:00:00.000000', 'Nigeria', 'Rivers', 'Port Harcourt', 'Town', 'Gbundu', 'Harbour', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Desktop Computer', 'DELL Tower PC', 'ELECTRONICS', '123000', '160000', 'sn3356', 'YKC', 'GOOD', 'A.S. Adewale', 'Church', '2023-02-28', '0000-00-00 00:00:00.000000', 'Nigeria', 'Rivers', 'Port Harcourt', 'Town', 'Gbundu', 'Harbour', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assettype`
--

CREATE TABLE `assettype` (
  `type_ID` int(5) NOT NULL,
  `assetType` varchar(30) NOT NULL,
  `cat_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assettype`
--

INSERT INTO `assettype` (`type_ID`, `assetType`, `cat_ID`) VALUES
(1, ' String', 3),
(2, ' Brass', 3),
(3, ' Woodwind', 3),
(4, ' Laptop', 4),
(5, ' Printer', 4),
(6, ' Traditional', 0),
(7, ' Toyota', 0),
(8, ' String', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `sn` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`sn`, `username`, `pwd`, `fullname`) VALUES
(1, 'adewale.adebayo', 'Kadmiel23', 'Adewale Samuel Adebayo'),
(2, 'isaac.newton', 'Isaac@123', 'Isaac Newton'),
(3, 'john.wesley', 'myPwd', 'John Wesley'),
(4, 'charles.wesley', 'wesley', 'Charles Wesley');

-- --------------------------------------------------------

--
-- Table structure for table `tblbld`
--

CREATE TABLE `tblbld` (
  `id` int(7) NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building_plan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fence` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_floors` int(2) NOT NULL,
  `national_grid` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_cost` decimal(10,0) NOT NULL,
  `year_completed` int(4) NOT NULL,
  `building_state` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_holder` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building_material` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblict`
--

CREATE TABLE `tblict` (
  `id` int(5) NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assetName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oem` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dop` date NOT NULL,
  `cap` decimal(10,0) NOT NULL,
  `location` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblict`
--

INSERT INTO `tblict` (`id`, `country`, `state`, `region`, `ogroup`, `ugroup`, `district`, `loc`, `address`, `item_category`, `item_type`, `assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`) VALUES
(1, 'Naija', 'Riv', 'PHC', 'Rumuigbo', 'Mgbuoba', 'Aganorlu', 'Non', '5 Aganorlu street, Mguoba, PHC.', '4', 'Select Asset Type', 'HP EliteBook 5593', 'HP', 'EliteBook 5590', '65478', '2022-08-02', '175000', 'Ault Chuch', 'Ok'),
(4, '', '', '', '', '', '', '', 'nta', 'ICT', 'ICT', ' In Use', 'ICT', 'HP', ' Pavillion 2259', '0000-00-00', '2023', '210000', 'Campus Church'),
(5, '', '', '', '', '', '', '', 'nta', 'ICT', 'ICT', 'ICT', 'HP', ' Pavillion 2259', '234546', '2023-02-15', '210000', 'Campus Church', ' In Use'),
(8, '', '', '', '', '', '', '', '#67 Location Road, PHC', 'ICT', 'ICT', 'Electronics', 'DELL', ' DELL Inspiron 1170', '8765', '2021-08-10', '170000', 'Campus Church', ' In Use'),
(9, '', '', '', '', '', '', '', '#7, Harold Wilson Street; PHC.', 'ICT', 'Electronics', 'ICT', 'HP', ' HP Flatbed 2210', '0123', '2023-04-11', '185000', 'Campus Church', ' Abandoned'),
(10, '', '', '', '', '', '', '', '#30 Aggrey Road', 'ICT', 'Electricals', 'ICT', 'HP', ' HP PrintSmart', '44222', '2023-06-04', '340000', 'Campus Church', ' In Use'),
(12, '', '', '', '', '', '', '', '#34 Woji Road, PHC', 'ICT', 'ICT', 'ICT', 'HP', ' Pavillion 2024', '980', '2015-05-12', '230000', 'Campus Church', ' In Use'),
(13, '', '', '', '', '', '', '', 'church street', '3', '2', '5', 'Yamaha', ' Yamaha Silver', '64782', '2023-04-04', '56000', 'Adult Church', ' In Use');

-- --------------------------------------------------------

--
-- Table structure for table `tbllands`
--

CREATE TABLE `tbllands` (
  `id` int(7) NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_plots` int(3) NOT NULL,
  `larea` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_price` decimal(10,0) NOT NULL,
  `year_of_purchase` int(4) NOT NULL,
  `survey_plans` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fenced` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orig_owner_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orig_owner_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orig_owner_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_by` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_surveyplan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_deed` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_receipt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_cofo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmusic`
--

CREATE TABLE `tblmusic` (
  `id` int(7) NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ogroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_categ` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oem` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dop` date NOT NULL,
  `cap` decimal(10,0) NOT NULL,
  `location` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assetcategory`
--
ALTER TABLE `assetcategory`
  ADD PRIMARY KEY (`cat_ID`);

--
-- Indexes for table `assetname`
--
ALTER TABLE `assetname`
  ADD PRIMARY KEY (`asset_ID`);

--
-- Indexes for table `assets_tbl`
--
ALTER TABLE `assets_tbl`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `assettype`
--
ALTER TABLE `assettype`
  ADD PRIMARY KEY (`type_ID`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tblbld`
--
ALTER TABLE `tblbld`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblict`
--
ALTER TABLE `tblict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllands`
--
ALTER TABLE `tbllands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmusic`
--
ALTER TABLE `tblmusic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assetcategory`
--
ALTER TABLE `assetcategory`
  MODIFY `cat_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assetname`
--
ALTER TABLE `assetname`
  MODIFY `asset_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assets_tbl`
--
ALTER TABLE `assets_tbl`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `assettype`
--
ALTER TABLE `assettype`
  MODIFY `type_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblbld`
--
ALTER TABLE `tblbld`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblict`
--
ALTER TABLE `tblict`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbllands`
--
ALTER TABLE `tbllands`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
