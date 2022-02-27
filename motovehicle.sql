-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motovehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `custID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`custID`, `userName`, `email`, `password`, `firstName`, `lastName`, `role`) VALUES
(1, 'imageb', 'image@bhandari.com', 'image', 'Image', 'Bhandari', 'user'),
(2, 'dikshantk', 'dikshant@koirala.com', 'koirala.com', 'Dikshant', 'Koirala', 'user'),
(3, 'admin', 'admin@admin.com', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`brandID`, `brandName`) VALUES
(1, 'Aprilia'),
(2, 'Bajaj'),
(3, 'Benelli'),
(4, 'BMW'),
(5, 'CF Moto'),
(6, 'Cross Fire'),
(7, 'Ducati'),
(8, 'Haojue'),
(9, 'Hero'),
(10, 'Honda'),
(11, 'Husqvarna'),
(12, 'Jawa'),
(13, 'Kawasaki'),
(14, 'KTM'),
(15, 'Mahindra'),
(16, 'Mvagusta'),
(17, 'Royal Enfield'),
(18, 'Runner'),
(19, 'Suzuki'),
(20, 'TVS'),
(21, 'Yamaha');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(255) NOT NULL,
  `notif_title` varchar(255) NOT NULL,
  `notif_msg` varchar(255) NOT NULL,
  `notif_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `notif_title`, `notif_msg`, `notif_date`, `role`) VALUES
(1, 'Covid Safety', 'Mask lagam chill basam', '2022-02-27 06:54:35', 'Everyone');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `vec_id` int(255) NOT NULL,
  `vec_name` varchar(255) NOT NULL,
  `vec_distance` int(255) NOT NULL,
  `vec_location` varchar(255) NOT NULL,
  `vec_engine` varchar(255) NOT NULL,
  `vec_price` int(255) NOT NULL,
  `vec_upload_date` date NOT NULL,
  `custID` int(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `vec_brand` varchar(255) NOT NULL,
  `vec_model` varchar(255) NOT NULL,
  `upload_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`vec_id`, `vec_name`, `vec_distance`, `vec_location`, `vec_engine`, `vec_price`, `vec_upload_date`, `custID`, `type`, `vec_brand`, `vec_model`, `upload_status`) VALUES
(1, 'pulsar', 344556, 'ktm', '125', 454554, '2026-02-22', 0, 'Bike', '0', '0', 0),
(2, 'Dio', 435566, 'pok', '90', 90000, '2027-02-22', 1, 'Scooter', '0', '0', 0),
(4, 'Amir2', 36, 'lainchour', '45', 65, '2027-02-22', 1, 'Bike', 'Honda', 'horney', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shortlist`
--

CREATE TABLE `shortlist` (
  `custID` int(11) DEFAULT NULL,
  `vehicleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `staffUserName` varchar(255) NOT NULL,
  `staffFirstName` varchar(255) NOT NULL,
  `staffLastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `previlidge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffUserName`, `staffFirstName`, `staffLastName`, `email`, `password`, `previlidge`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'noreply@motovehicle.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `modelID` int(11) NOT NULL,
  `modelName` varchar(255) NOT NULL,
  `brandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`modelID`, `modelName`, `brandID`) VALUES
(1, 'Aprilia Dorsoduro 750 ABS', 1),
(2, 'Aprilia ETX 150 Enduro', 1),
(3, 'Aprilia RS4 125', 1),
(4, 'Aprilia RSV4 RR', 1),
(5, 'Aprilia RX 125', 1),
(6, 'Aprilia Shiver Sport 750 ABS', 1),
(7, 'Aprilia SR 125', 1),
(8, 'Aprilia SR 150', 1),
(9, 'Aprilia Storm 125', 1),
(10, 'Aprilia STX 150 Road', 1),
(11, 'Aprilia SX 125', 1),
(12, 'Aprilia SXR 160', 1),
(13, 'Bajaj Avenger 160 Street', 2),
(14, 'Bajaj Avenger 220 Cruise', 2),
(15, 'Bajaj Discover 125 Disc', 2),
(16, 'Bajaj Discover 125 Drum', 2),
(17, 'Bajaj Discover 125 ST', 2),
(18, 'Bajaj Dominar D250', 2),
(19, 'Bajaj Dominar D400', 2),
(20, 'Bajaj Platina 100 ES', 2),
(21, 'Bajaj Pulsar 125', 2),
(22, 'Bajaj Pulsar 150', 2),
(23, 'Bajaj Pulsar 150 Twin Disc', 2),
(24, 'Bajaj Pulsar 180', 2),
(25, 'Bajaj Pulsar 220 F', 2),
(26, 'Bajaj Pulsar NS 160 ABS', 2),
(27, 'Bajaj Pulsar NS 160 Twin Disc', 2),
(28, 'Bajaj Pulsar NS 200 With ABS', 2),
(29, 'Bajaj Pulsar NS 200 With Fi ABS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleID` int(11) NOT NULL,
  `vehicleType` varchar(255) NOT NULL,
  `brandID` int(11) NOT NULL,
  `modelID` int(11) NOT NULL,
  `yearManufactured` int(11) NOT NULL,
  `insurance` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `serviceLog` int(11) NOT NULL,
  `distanceTravelled` int(11) NOT NULL,
  `cubicCapacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `viewCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE `vehicleregistration` (
  `custID` int(11) NOT NULL,
  `vehicleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `cat_id` int(255) NOT NULL,
  `vec_id` int(255) NOT NULL,
  `hitcount` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_category`
--

INSERT INTO `vehicle_category` (`cat_id`, `vec_id`, `hitcount`, `category`) VALUES
(1, 4, 0, 'normal'),
(2, 4, 0, 'normal'),
(3, 4, 0, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`vec_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`modelID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`);

--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `vec_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `modelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
