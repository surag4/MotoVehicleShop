-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 07:34 PM
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
-- Table structure for table `bankinfo`
--

CREATE TABLE `bankinfo` (
  `depositID` int(11) NOT NULL,
  `depositer_name` varchar(255) NOT NULL,
  `deposit_num` int(11) NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL,
  `depositer_number` int(255) NOT NULL,
  `shid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashondelivery`
--

CREATE TABLE `cashondelivery` (
  `COD_id` int(255) NOT NULL,
  `delivery_name` varchar(255) NOT NULL,
  `delivery_addr` varchar(255) NOT NULL,
  `delivery_phone` varchar(255) NOT NULL,
  `alt_delivery_phone` varchar(255) DEFAULT NULL,
  `shid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `cntFormID` int(255) NOT NULL,
  `custName` varchar(255) NOT NULL,
  `custEmail` varchar(255) NOT NULL,
  `custNum` int(255) DEFAULT NULL,
  `custQues` varchar(255) NOT NULL,
  `staffId` varchar(255) DEFAULT NULL,
  `requestedDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`cntFormID`, `custName`, `custEmail`, `custNum`, `custQues`, `staffId`, `requestedDate`) VALUES
(1, 'Rockey Sigh', 'Sigh.rock@hotmail.com', 2147483647, 'Please show me some expensive rides..', 'staff1', '2022-04-01'),
(2, 'Rosha', 'rosha.adh@gmail.com', 2147483647, 'I need a Scooty!!', 'admin', '2022-04-01');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_by` varchar(255) NOT NULL,
  `message_to` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_id` int(255) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_by`, `message_to`, `message`, `message_id`, `date`, `time`) VALUES
('pandit', 'admin', 'Hello. please respond', 14, '2022-04-01', '19:45:29'),
('admin', 'pandit', 'hi', 15, '2022-04-01', '19:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(255) NOT NULL,
  `notif_title` varchar(255) NOT NULL,
  `notif_msg` varchar(255) NOT NULL,
  `notif_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `userID` int(255) NOT NULL,
  `vehicleID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `notif_title`, `notif_msg`, `notif_date`, `userID`, `vehicleID`) VALUES
(8, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:44:37', 5, 12),
(9, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:51:19', 5, 13),
(10, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:51:31', 6, 14),
(11, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:51:43', 6, 15),
(12, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:07', 8, 17),
(13, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:15', 7, 18),
(14, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:22', 8, 19),
(15, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:27', 10, 21),
(16, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:35', 12, 24),
(17, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:49', 14, 27),
(18, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:52:55', 12, 25),
(19, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:01', 15, 30),
(20, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:17', 13, 28),
(21, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:22', 14, 29),
(22, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:35', 9, 22),
(23, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:42', 13, 26),
(24, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 11:53:47', 16, 32),
(25, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 14:02:02', 15, 31),
(26, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-01 14:02:54', 16, 33),
(27, 'Approval Denied', 'Your upload request has been discarded. Please try again with valid information.', '2022-04-01 14:17:39', 7, 16),
(53, 'Vehicle Approved', 'Your upload request has been approved. Please click here to view.', '2022-04-17 10:05:13', 9, 38),
(54, 'Payment Success', 'Your payment has been approved. We will contact you shortly.', '2022-04-17 10:06:15', 9, 15),
(55, 'Vehicle Sold', 'Your vehicle has been sold. We will contact you shortly.', '2022-04-17 10:06:15', 6, 15),
(56, 'Payment Denied', 'Your payment has been Denied. Please re-request or contact us via chat.', '2022-04-17 17:00:50', 9, 38);

-- --------------------------------------------------------

--
-- Table structure for table `payment_esewa`
--

CREATE TABLE `payment_esewa` (
  `esewa_payment_id` int(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `transaction_by` varchar(255) NOT NULL,
  `transaction_remarks` varchar(255) NOT NULL,
  `shid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shortlist`
--

CREATE TABLE `shortlist` (
  `custID` int(11) DEFAULT NULL,
  `vehicleID` int(11) DEFAULT NULL,
  `shortlistid` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `modelID` int(11) NOT NULL,
  `modelName` varchar(255) NOT NULL,
  `cubicCapacity` int(255) NOT NULL,
  `brandID` int(11) NOT NULL,
  `vehicleType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`modelID`, `modelName`, `cubicCapacity`, `brandID`, `vehicleType`) VALUES
(1, 'Aprilia Dorsoduro 750 ABS', 750, 1, 'Bike'),
(2, 'Aprilia ETX 150 Enduro', 150, 1, 'Bike'),
(3, 'Aprilia RS4 125', 125, 1, 'Bike'),
(4, 'Aprilia RSV4 RR', 1000, 1, 'Bike'),
(5, 'Aprilia RX 125', 125, 1, 'Bike'),
(6, 'Aprilia Shiver Sport 750 ABS', 750, 1, 'Bike'),
(7, 'Aprilia SR 125', 125, 1, 'Scooter'),
(8, 'Aprilia SR 150', 150, 1, 'Scooter'),
(9, 'Aprilia Storm 125', 125, 1, 'Scooter'),
(10, 'Aprilia STX 150 Road', 150, 1, 'Bike'),
(11, 'Aprilia SX 125', 125, 1, 'Bike'),
(12, 'Aprilia SXR 160', 160, 1, 'Scooter'),
(13, 'Bajaj Avenger 160 Street', 160, 2, 'Bike'),
(14, 'Bajaj Avenger 220 Cruise', 220, 2, 'Bike'),
(15, 'Bajaj Discover 125 Disc', 125, 2, 'Bike'),
(16, 'Bajaj Discover 125 Drum', 125, 2, 'Bike'),
(17, 'Bajaj Discover 125 ST', 125, 2, 'Bike'),
(18, 'Bajaj Dominar D250', 250, 2, 'Bike'),
(19, 'Bajaj Dominar D400', 400, 2, 'Bike'),
(20, 'Bajaj Platina 100 ES', 100, 2, 'Bike'),
(21, 'Bajaj Pulsar 125', 125, 2, 'Bike'),
(22, 'Bajaj Pulsar 150', 150, 2, 'Bike'),
(23, 'Bajaj Pulsar 150 Twin Disc', 150, 2, 'Bike'),
(24, 'Bajaj Pulsar 180', 180, 2, 'Bike'),
(25, 'Bajaj Pulsar 220 F', 220, 2, 'Bike'),
(26, 'Bajaj Pulsar NS 160 ABS', 160, 2, 'Bike'),
(27, 'Bajaj Pulsar NS 160 Twin Disc', 160, 2, 'Bike'),
(28, 'Bajaj Pulsar NS 200 With ABS', 200, 2, 'Bike'),
(29, 'Bajaj Pulsar NS 200 With Fi ABS', 200, 2, 'Bike'),
(30, 'Benelli 180S', 180, 3, 'Bike'),
(31, 'Benelli 302R', 300, 3, 'Bike'),
(32, 'Benelli 302S', 300, 3, 'Bike'),
(33, 'Benelli 752S', 754, 3, 'Bike'),
(34, 'Benelli BN 251', 250, 3, 'Bike'),
(35, 'Benelli Leoncino', 500, 3, 'Bike'),
(36, 'Benelli Leoncino 250', 250, 3, 'Bike'),
(37, 'Benelli Leoncino Trial', 500, 3, 'Bike'),
(38, 'Benelli Panarea 125', 125, 3, 'Scooter'),
(39, 'Benelli TNT 135', 135, 3, 'Bike'),
(40, 'Benelli TNT 15', 150, 3, 'Bike'),
(41, 'Benelli TNT 150I', 150, 3, 'Bike'),
(42, 'Benelli TNT 600 GT', 600, 3, 'Bike'),
(43, 'Benelli TNT 600I', 600, 3, 'Bike'),
(44, 'Benelli TRK 251', 250, 3, 'Bike'),
(45, 'Benelli TRK 502', 500, 3, 'Bike'),
(46, 'Benelli TRK 502X', 500, 3, 'Bike'),
(47, 'BMW G310GS', 313, 4, 'Bike'),
(48, 'BMW G310R', 313, 4, 'Bike'),
(49, 'CF Moto 250NK', 250, 5, 'Bike'),
(50, 'CF Moto 400NK', 400, 5, 'Bike'),
(51, 'CF Moto 650MT', 650, 5, 'Bike'),
(52, 'CF Moto 650NK', 650, 5, 'Bike'),
(53, 'CF Moto 150NK', 150, 5, 'Bike'),
(54, 'Crossfire CF Twin 250 EFI', 250, 6, 'Bike'),
(55, 'Crossfire GR7', 250, 6, 'Bike'),
(56, 'Crossfire XZ250RR (Dirt)', 250, 6, 'Bike'),
(57, 'Ducati 1299 Panigale', 1285, 7, 'Bike'),
(58, 'Ducati Hypermotard 939', 937, 7, 'Bike'),
(59, 'Ducati HyperStrada 939', 937, 7, 'Bike'),
(60, 'Ducati Monster 797', 803, 7, 'Bike'),
(61, 'Ducati Monster 821', 17, 7, 'Bike'),
(62, 'Ducati Multistrada 950', 937, 7, 'Bike'),
(63, 'Ducati Panigale R', 1198, 7, 'Bike'),
(64, 'Ducati Scrambler Caf?? Racer', 803, 7, 'Bike'),
(65, 'Ducati Scrambler Desert Sled', 803, 7, 'Bike'),
(66, 'Ducati Scrambler Italia Independent', 803, 7, 'Bike'),
(67, 'Ducati Scrambler Sixty 2', 399, 7, 'Bike'),
(68, 'Ducati Super Sport', 937, 7, 'Bike'),
(69, 'Ducati SuperSport', 937, 7, 'Bike'),
(70, 'Scrambler Desert Sled', 803, 7, 'Bike'),
(71, 'Haojue NK150', 150, 8, 'Bike'),
(72, 'Hero Achiever', 150, 9, 'Bike'),
(73, 'Hero Destini', 125, 9, 'Scooter'),
(74, 'Hero Duet', 110, 9, 'Scooter'),
(75, 'Hero Glamour', 125, 9, 'Bike'),
(76, 'Hero Glamour IBS', 125, 9, 'Bike'),
(77, 'Hero HF Deluxe', 97, 9, 'Bike'),
(78, 'Hero Maestro Edge', 110, 9, 'Scooter'),
(79, 'Hero Passion Pro', 97, 9, 'Bike'),
(80, 'Hero Pleasure', 102, 9, 'Scooter'),
(81, 'Hero Pleasure Plus', 111, 9, 'Bike'),
(82, 'Hero Splendor', 125, 9, 'Bike'),
(83, 'Hero Splendor Ismart 110', 110, 9, 'Bike'),
(84, 'Hero Splendor+', 110, 9, 'Bike'),
(85, 'Hero Super Splendor', 125, 9, 'Bike'),
(86, 'Hero XPulse 200', 200, 9, 'Bike'),
(87, 'Hero XPulse 200T', 200, 9, 'Bike'),
(88, 'Hero Xtreme 160R', 160, 9, 'Bike'),
(89, 'Hero Xtreme 200R', 200, 9, 'Bike'),
(90, 'Hero Xtreme 200S', 200, 9, 'Bike'),
(91, 'Hero Xtreme Sports', 12, 9, 'Bike'),
(92, 'Honda DIO', 125, 10, 'Scooter'),
(93, 'Honda Activa 125', 110, 10, 'Scooter'),
(94, 'Honda Aviator', 110, 10, 'Scooter'),
(95, 'Honda CB Hornet 160R', 160, 10, 'Bike'),
(96, 'Honda CB Shine', 125, 10, 'Bike'),
(97, 'Honda CB Shine SP', 125, 10, 'Bike'),
(98, 'Honda CB Unicorn 150', 150, 10, 'Bike'),
(99, 'Honda CB Unicorn 160', 160, 10, 'Bike'),
(100, 'Honda CBR 250R', 250, 10, 'Bike'),
(101, 'Honda CBR 600R', 600, 10, 'Bike'),
(102, 'Honda CBR 650F', 650, 10, 'Bike'),
(103, 'Honda CD 110 Dream', 110, 10, 'Bike'),
(104, 'Honda CRF 250', 250, 10, 'Bike'),
(105, 'Honda CRF 250L Rally', 250, 10, 'Bike'),
(106, 'Honda CRF Africa Twin 1100', 1100, 10, 'Bike'),
(107, 'Honda Grazia', 125, 10, 'Bike'),
(108, 'Honda Navi', 110, 10, 'Bike'),
(109, 'Honda Tornado XR250', 250, 10, 'Bike'),
(110, 'Honda X-Blade', 163, 10, 'Bike'),
(111, 'Honda XR 150L', 150, 10, 'Bike'),
(112, 'Honda XR 190L', 190, 10, 'Bike'),
(113, 'Husqvarna FE 350', 350, 11, 'Bike'),
(114, 'Husqvarna FE 501', 500, 11, 'Bike'),
(115, 'Husqvarna FE 701', 700, 11, 'Bike'),
(116, 'Jawa 42', 293, 12, 'Bike'),
(117, 'Jawa Perak', 334, 12, 'Bike'),
(118, 'Jawa Standard', 293, 12, 'Bike'),
(119, 'Kawasaki Versys 650', 650, 13, 'Bike'),
(120, 'KTM 200 Duke', 200, 14, 'Bike'),
(121, 'KTM Adventure 250', 250, 14, 'Bike'),
(122, 'KTM Adventure 390', 390, 14, 'Bike'),
(123, 'KTM Duke 250', 250, 14, 'Bike'),
(124, 'KTM Duke 390', 290, 14, 'Bike'),
(125, 'KTM Duke 790', 790, 14, 'Bike'),
(126, 'KTM RC 200', 200, 14, 'Bike'),
(127, 'KTM RC 390', 300, 14, 'Bike'),
(128, 'Mahindra Gusto', 110, 15, 'Scooter'),
(129, 'Mahindra Gusto RS', 110, 15, 'Scooter'),
(130, 'Mahindra Rodeo RZ', 125, 15, 'Scooter'),
(131, 'Mahindra Rodeo UZO', 125, 15, 'Scooter'),
(132, 'MV Agusta Brutale 1090', 1090, 16, 'Bike'),
(133, 'MV Agusta Brutale 675', 675, 16, 'Bike'),
(134, 'MV Agusta Brutale 800', 800, 16, 'Bike'),
(135, 'MV Agusta F3 675', 675, 16, 'Bike'),
(136, 'MV Agusta rivale 800', 800, 16, 'Bike'),
(137, 'Royal Enfield Bullet 350', 350, 17, 'Bike'),
(138, 'Royal Enfield Bullet 500', 500, 17, 'Bike'),
(139, 'Royal Enfield Bullet Electra', 346, 17, 'Bike'),
(140, 'Royal Enfield Classic 350', 350, 17, 'Bike'),
(141, 'Royal Enfield Classic 500', 500, 17, 'Bike'),
(142, 'Royal Enfield Classic Battle Green', 499, 17, 'Bike'),
(143, 'Royal Enfield Classic Chrome', 499, 17, 'Bike'),
(144, 'Royal Enfield Classic Desert Storm', 499, 17, 'Bike'),
(145, 'Royal Enfield Continental GT', 535, 17, 'Bike'),
(146, 'Royal Enfield Himalayan', 411, 17, 'Bike'),
(147, 'Royal Enfield Interceptor 650', 650, 17, 'Bike'),
(148, 'Royal Enfield Meteor 350', 350, 17, 'Bike'),
(149, 'Royal Enfield Thunderbird 350', 350, 17, 'Bike'),
(150, 'Royal Enfield Thunderbird 500', 500, 17, 'Bike'),
(151, 'Runner Bullet', 125, 18, 'Bike'),
(152, 'Runner Dominator', 250, 18, 'Bike'),
(153, 'Runner Hawk 200', 200, 18, 'Bike'),
(154, 'Runner Kite+', 110, 18, 'Scooter'),
(155, 'Runner Knight Rider', 150, 18, 'Bike'),
(156, 'Runner Royal+', 110, 18, 'Bike'),
(157, 'Runner Turbo 125', 125, 18, 'Bike'),
(158, 'Gixxer SF 150 Moto GP', 150, 19, 'Bike'),
(159, 'Gixxer SF 250 Moto GP', 250, 19, 'Bike'),
(160, 'Suzuki Access 125 (Disc)', 125, 19, 'Scooter'),
(161, 'Suzuki Access 125 Special Edition', 125, 19, 'Scooter'),
(162, 'Suzuki Burgman 125', 125, 19, 'Bike'),
(163, 'Suzuki Gixxer 155', 155, 19, 'Bike'),
(164, 'Suzuki Gixxer 250', 250, 19, 'Bike'),
(165, 'Suzuki Gixxer SF 150', 150, 19, 'Bike'),
(166, 'Suzuki Gixxer SF 250', 250, 19, 'Bike'),
(167, 'Suzuki Gixxer SP With ABS', 155, 19, 'Bike'),
(168, 'Suzuki GS 150R', 150, 19, 'Bike'),
(169, 'Suzuki Hayate EP', 113, 19, 'Bike'),
(170, 'Suzuki Intruder 150', 150, 19, 'Bike'),
(171, 'Suzuki Let???s', 113, 19, 'Scooter'),
(172, 'Suzuki Slingshot Plus', 125, 19, 'Bike'),
(173, 'TVS Apache RR 310', 310, 20, 'Bike'),
(174, 'TVS Apache RTR 160 2V', 160, 20, 'Bike'),
(175, 'TVS Apache RTR 160 4V', 160, 20, 'Bike'),
(176, 'TVS Apache RTR 180 2V', 180, 20, 'Bike'),
(177, 'TVS Apache RTR 200 4V', 200, 20, 'Bike'),
(178, 'TVS Apache RTR 200 4V ABS', 200, 20, 'Bike'),
(179, 'TVS Apache RTR 200 4V RTFI BS6', 200, 20, 'Bike'),
(180, 'TVS Apache RTR 200 4V v2.0', 200, 20, 'Bike'),
(181, 'TVS Dazz', 110, 20, 'Scooter'),
(182, 'TVS Jupiter', 110, 20, 'Scooter'),
(183, 'TVS Max 125', 125, 20, 'Bike'),
(184, 'TVS Ntorq', 125, 20, 'Scooter'),
(185, 'TVS Ntorq Race Edition', 125, 20, 'Scooter'),
(186, 'TVS Ntorq RTFI BS6', 125, 20, 'Scooter'),
(187, 'TVS Ntorq Super Squad Edition', 125, 20, 'Scooter'),
(188, 'TVS Radeon', 125, 20, 'Bike'),
(189, 'TVS Raider 125', 125, 20, 'Bike'),
(190, 'TVS RTR 160 4V Refresh with ABS', 160, 20, 'Bike'),
(191, 'TVS Stryker 125', 125, 20, 'Bike'),
(192, 'TVS Wego', 110, 20, 'Scooter'),
(193, 'TVS XL 100', 100, 20, 'Bike'),
(194, 'TVS Zest', 110, 20, 'Scooter'),
(195, 'Yamaha FASCINO 125 FI', 125, 21, 'Scooter'),
(196, 'Yamaha Fascino-UBS', 113, 21, 'Scooter'),
(197, 'Yamaha Fazer 25', 249, 21, 'Bike'),
(198, 'Yamaha FZ 25', 249, 21, 'Bike'),
(199, 'Yamaha FZ 25 ABS', 249, 21, 'Bike'),
(200, 'Yamaha FZ 25 DUAL ABS', 249, 21, 'Bike'),
(201, 'Yamaha FZ16 FI', 149, 21, 'Bike'),
(202, 'Yamaha FZS FI Dual Disc', 149, 21, 'Bike'),
(203, 'Yamaha FZS FI V3', 149, 21, 'Bike'),
(204, 'Yamaha FZS V2', 149, 21, 'Bike'),
(205, 'Yamaha FZS V3 X-Connect', 149, 21, 'Bike'),
(206, 'Yamaha MT15', 155, 21, 'Bike'),
(207, 'Yamaha NMax', 155, 21, 'Scooter'),
(208, 'Yamaha R15 V3', 155, 21, 'Bike'),
(209, 'Yamaha R15M', 155, 21, 'Bike'),
(210, 'Yamaha R3', 321, 21, 'Bike'),
(211, 'Yamaha Ray Z 113', 113, 21, 'Scooter'),
(212, 'Yamaha Ray Z-UBS', 113, 21, 'Scooter'),
(213, 'Yamaha Ray ZR DISC', 113, 21, 'Scooter'),
(214, 'Yamaha Ray ZR Drum', 113, 21, 'Scooter'),
(215, 'Yamaha Ray ZR Street Rally UBS', 113, 21, 'Scooter'),
(216, 'Yamaha Saluto DISCC_UBS', 125, 21, 'Bike'),
(217, 'Yamaha SZ-RR Version 2.0', 150, 21, 'Bike'),
(218, 'Yamaha XTZ 125', 125, 21, 'Bike'),
(219, 'Yamaha XTZ 150 FI', 150, 21, 'Bike'),
(220, 'Yamaha YZF R15S', 150, 21, 'Bike'),
(221, 'Yamaha YZF R3', 321, 21, 'Bike');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `registeredDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `email`, `password`, `firstName`, `lastName`, `role`, `registeredDate`) VALUES
(3, 'admin', 'admin@admin.com', 'admin', 'admin', 'admin', 'admin', '2022-02-02'),
(5, 'user1', 'amirbhan@gmail.com', 'user1', 'Amir', 'Bhandari', 'user', '2022-03-09'),
(6, 'user2', 'raxitmanandhar@gmail.com', 'user2', 'Raxit', 'Manandhar', 'user', '2022-03-02'),
(7, 'user3', 'sumitmanan@gmail.com', 'user3', 'Sumit', 'Manandhar', 'user', '2022-01-02'),
(8, 'user5', 'andrew.garfield@gmail.com', 'user5', 'Andrew Bahadur', 'Garfield', 'user', '2022-02-02'),
(9, 'user4', 'manish.pandey@gmail.com', 'user4', 'Manish', 'Pandey', 'user', '2022-02-02'),
(10, 'user6', 'ram20@gmail.com', 'user6', 'Ram', 'Bahadur', 'user', '2022-02-02'),
(12, 'user7', 'sauravstha@gmail.com', 'user7', 'Saurav', 'Shrestha', 'user', '2022-03-02'),
(13, 'user8', 'shreya.th89@gmail.com', 'user8', 'Shreya', 'Thapa', 'user', '2022-01-02'),
(14, 'user10', 'prateek.khuy@gmail.com', 'user10', 'Prateek', 'Khuyed', 'user', '2022-03-02'),
(15, 'user9', 'hari.bhad.66@gmail.com', 'user9', 'Hari Ram', 'Bahadur', 'user', '2022-02-02'),
(16, 'user11', 'kennerich@gmail.com', 'user11', 'Kodex', 'Kenner', 'user', '2022-02-02'),
(17, 'staff1', 'staff.adhikari@gmail.com', 'staff1', 'Staff1', 'Adhikari', 'staff', '2022-04-01'),
(18, 'pandit', 'pandit@gmail.com', 'pandit', 'Test5', 'pandit', 'user', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleID` int(11) NOT NULL,
  `modelID` int(255) NOT NULL,
  `modelYear` int(255) NOT NULL,
  `vehicleDescription` text NOT NULL,
  `distanceTravelled` int(255) NOT NULL,
  `locationRegistered` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `vehiclePostDate` date NOT NULL DEFAULT current_timestamp(),
  `uploadStatus` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleID`, `modelID`, `modelYear`, `vehicleDescription`, `distanceTravelled`, `locationRegistered`, `price`, `userID`, `owner`, `vehiclePostDate`, `uploadStatus`) VALUES
(12, 138, 2020, 'This bike is in good condition. Call me if you need further details.', 1500, 'Naxal', 500000, 5, '1st Owner', '2022-03-31', 0),
(13, 12, 2020, 'This scooter is so good. DM for more info.', 25000, 'Kathmandu', 250000, 5, '1st Owner', '2022-03-31', 1),
(14, 26, 2018, 'Good in condition. DM for more info.', 30000, 'kathmandu', 178000, 6, '1st Owner', '2022-03-31', 1),
(17, 7, 2019, 'Message for more information about the scooter.', 430000, 'Kathmandu', 320000, 8, '1st Owner', '2022-03-31', 0),
(19, 115, 2018, 'Message for more information about the bike.', 550000, 'Pokhara', 1000000, 8, '1st Owner', '2022-03-31', 1),
(20, 95, 2017, 'It is an awesome bike in perfect condition. DM for more details.', 26000, 'Chakrapath', 210000, 9, '1st Owner', '2022-03-31', 0),
(23, 131, 2015, 'Message for more information about the scooter.', 3056708, 'Ithari', 250000, 10, '2nd Owner', '2022-03-31', 0),
(24, 55, 2021, 'This is an awesome bike in perfect condition. Price can be negotiable. DM for more details.', 13450, 'Biratnagar', 5200000, 12, '1st Owner', '2022-03-31', 1),
(26, 135, 2021, 'Message for more information about the bike.', 236560, 'Lalitpur', 350000, 13, '1st Owner', '2022-03-31', 1),
(27, 136, 2022, 'Awesome condition\r\nnice looks and lovely\r\nplease dm for several details', 7900, 'Kathmandu', 875000, 14, '1st Owner', '2022-03-31', 1),
(29, 182, 2021, 'Fine condition\r\nmuch mileage \r\ndm for more details', 22000, 'Balaju', 178000, 14, '1st Owner', '2022-03-31', 1),
(30, 52, 2017, 'Message for more information about the bike.', 300000, 'Kathmandu', 1000000, 15, '1st Owner', '2022-03-31', 1),
(31, 162, 2020, 'Message for more information about the scooter.', 565123, 'Dharan', 200000, 15, '1st Owner', '2022-03-31', 1),
(33, 213, 2022, 'Perfect conditions\r\ngood mileage\r\ndm for more', 11000, 'Kathmandu', 2150000, 16, '1st Owner', '2022-03-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecategory`
--

CREATE TABLE `vehiclecategory` (
  `categoryID` int(255) NOT NULL,
  `vehicleID` int(255) NOT NULL,
  `hitcount` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehiclecategory`
--

INSERT INTO `vehiclecategory` (`categoryID`, `vehicleID`, `hitcount`, `category`) VALUES
(1, 12, 6, 'normal'),
(2, 13, 8, 'normal'),
(3, 14, 0, 'normal'),
(4, 15, 12, 'normal'),
(5, 17, 0, 'normal'),
(6, 18, 21, 'normal'),
(7, 19, 0, 'premium'),
(8, 21, 16, 'normal'),
(9, 24, 0, 'premium'),
(10, 27, 0, 'normal'),
(11, 25, 6, 'normal'),
(12, 30, 0, 'normal'),
(13, 28, 43, 'normal'),
(14, 29, 0, 'normal'),
(15, 22, 22, 'normal'),
(16, 26, 0, 'premium'),
(17, 32, 17, 'normal'),
(18, 31, 0, 'normal'),
(19, 33, 1, 'normal'),
(20, 34, 8, 'normal'),
(21, 35, 4, 'normal'),
(22, 36, 4, 'normal'),
(23, 37, 6, 'normal'),
(24, 38, 6, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE `vehicleregistration` (
  `custID` int(11) NOT NULL,
  `vehicleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankinfo`
--
ALTER TABLE `bankinfo`
  ADD PRIMARY KEY (`depositID`);

--
-- Indexes for table `cashondelivery`
--
ALTER TABLE `cashondelivery`
  ADD PRIMARY KEY (`COD_id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`cntFormID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `payment_esewa`
--
ALTER TABLE `payment_esewa`
  ADD PRIMARY KEY (`esewa_payment_id`);

--
-- Indexes for table `shortlist`
--
ALTER TABLE `shortlist`
  ADD PRIMARY KEY (`shortlistid`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`modelID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`);

--
-- Indexes for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  ADD PRIMARY KEY (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankinfo`
--
ALTER TABLE `bankinfo`
  MODIFY `depositID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashondelivery`
--
ALTER TABLE `cashondelivery`
  MODIFY `COD_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `cntFormID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `payment_esewa`
--
ALTER TABLE `payment_esewa`
  MODIFY `esewa_payment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shortlist`
--
ALTER TABLE `shortlist`
  MODIFY `shortlistid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `modelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  MODIFY `categoryID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
