-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 10:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winabwangu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `phonenumber`, `password`, `address`, `gender`) VALUES
('Brian ', 'brianmbewe75@gmail.com', '260974149099', 'e10adc3949ba59abbe56e057f20f883e', 'Lusaka', 'Male'),
('admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`username`, `email`, `phonenumber`, `password`, `address`, `gender`) VALUES
('Brian ', 'brianmbewe75@gmail.com', '260974149099', 'e10adc3949ba59abbe56e057f20f883e', 'Lusaka', 'Male'),
('admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('agent', 'agent@agent.com', '260974149099', 'b33aed8f3134996703dc39f9a7c95783', 'Home Tows', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`username`, `phone`, `email`, `password`) VALUES
('Brian', '33333', 'brian@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
('admin', '1111111', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
('clement ', '0972117504', 'clementhambala@gmail.com', '8a31703b1b5caee2d0ab2189bbfb295b');

-- --------------------------------------------------------

--
-- Table structure for table `booth`
--

CREATE TABLE `booth` (
  `booth` varchar(255) NOT NULL,
  `revenuePerBooth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booth`
--

INSERT INTO `booth` (`booth`, `revenuePerBooth`) VALUES
('Wina1', '2510.05'),
('Wina2', '2.5'),
('Wina3', ' 5600'),
('Wina4', '1750'),
('Wina5', '900'),
('Wina6', '200');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `email`, `number`, `address`, `occupation`, `gender`, `amount`) VALUES
('Brian Mbewe', 'brianmbewe75@gmail.com', '260971071399', 'Avondale', 'Boss', 'Male', '62409'),
('Brian Mbewe', 'brianmbewe75@gmail.com', '510-5050', 'gfgfgfg', 'Counter', 'Female', '');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `service` varchar(255) NOT NULL,
  `revenueGen` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`service`, `revenueGen`, `capital`) VALUES
('Airtel Money', '2512.05', '350000'),
('FNB', '70', '80000'),
('MTN Money', '902.5', '160000'),
('Zamtel Money', '2020', '70000'),
('Zanaco', '1890', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service` varchar(255) NOT NULL,
  `MonthlyLimit` varchar(255) NOT NULL,
  `RevenuePerKwacha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service`, `MonthlyLimit`, `RevenuePerKwacha`) VALUES
('Airtel Money', '299749', '0.05'),
('FNB', '78000', '0.04'),
('MTN Money', '139950', '0.06'),
('Zamtel Money', '14000', '0.045'),
('Zanaco', '88000', '0.035');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` varchar(255) NOT NULL,
  `MobileBooths` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `RevenuePerKwacha` varchar(255) NOT NULL,
  `TransactionAmount` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionID`, `MobileBooths`, `Location`, `Service`, `RevenuePerKwacha`, `TransactionAmount`, `total`) VALUES
('555', 'Wina2', 'Libala', 'Airtel Money', '0.04', '50', ''),
('CHIVA', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '400', ''),
('CRYSTAL', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '50000', ''),
('CRYSTAL4', '', '', '', '0.05', '200', ''),
('CRYSTAL46', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '201', ''),
('FB0876', 'Wina2', 'Libala', 'MTN Money', '0.05', '50', ''),
('ff', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '50', ''),
('GABTHETXD', 'Wina 1', 'Woodlands', 'Zananco', '0.035', '2000', ''),
('JGFJFYUFYJH', 'Wina 1', 'Lusaka CBD', 'FNB', '0.035', '2000', ''),
('NJR07', 'Wina 4', 'Matero', 'Zamtel Money', '0.045', '6000', ''),
('RIQUE', 'Wina5', 'Woodlands', 'Zanaco', '0.045', '20000', ''),
('rrrgrgerg', 'Wina 1', 'Lusaka CBD', 'Zanaco', '0.045', '20000', ''),
('TRNSXID', 'Wina4', 'Mandevu', 'Zamtel Money', '0.035', '50000', ''),
('TRY', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '557777', ''),
('WB000001', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '964', ''),
('WB000002', 'Wina1', 'Lusaka CPD', 'MTN Money', '0.06', '220', ''),
('WB000003', 'Wina2', 'Libala', 'MTN Money', '0.06', '582', ''),
('WB000004', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '349', ''),
('WB000005', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '328', ''),
('WB000006', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '192', ''),
('WB000007', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1519', ''),
('WB000008', 'Wina4', 'Mandevu', 'Zamtel Money', '0.045', '1113', ''),
('WB000009', 'Wina1', 'Lusaka CPD', 'FNB', '0.04', '1999', ''),
('WB000010', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '3810', ''),
('WB000011', 'Wina6', 'Matero East', 'Zamtel Money', '0.045', '3270', ''),
('WB000012', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1092', ''),
('WB000013', 'Wina2', 'Libala', 'Airtel Money', '0.05', '1056', ''),
('WB000014', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '509', ''),
('WB000015', 'Wina5', 'Woodlands', 'FNB', '0.04', '34', ''),
('WB000016', 'Wina2', 'Libala', 'MTN Money', '0.06', '1658', ''),
('WB000017', 'Wina5', 'Woodlands', 'FNB', '0.04', '2167', ''),
('WB000018', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2594', ''),
('WB000019', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '3656', ''),
('WB000020', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '4030', ''),
('WB000021', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '989', ''),
('WB000022', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '4081', ''),
('WB000023', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '925', ''),
('WB000024', 'Wina2', 'Libala', 'MTN Money', '0.06', '2312', ''),
('WB000025', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '3280', ''),
('WB000026', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '90', ''),
('WB000027', 'Wina5', 'Woodlands', 'FNB', '0.04', '2556', ''),
('WB000028', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '673', ''),
('WB000029', 'Wina4', 'Mandevu', 'MTN Money', '0.06', '4185', ''),
('WB000030', 'Wina1', 'Lusaka CPD', 'Zanaco', '0.035', '412', ''),
('WB000031', 'Wina1', 'Lusaka CPD', 'MTN Money', '0.06', '310', ''),
('WB000032', 'Wina2', 'Libala', 'MTN Money', '0.06', '4248', ''),
('WB000033', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '4105', ''),
('WB000034', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1147', ''),
('WB000035', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '1815', ''),
('WB000036', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1653', ''),
('WB000037', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1045', ''),
('WB000038', 'Wina1', 'Lusaka CPD', 'FNB', '0.04', '4364', ''),
('WB000039', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '2822', ''),
('WB000040', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '2046', ''),
('WB000041', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '1985', ''),
('WB000042', 'Wina2', 'Libala', 'MTN Money', '0.06', '3023', ''),
('WB000043', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '3728', ''),
('WB000044', 'Wina5', 'Woodlands', 'MTN Money', '0.06', '58', ''),
('WB000045', 'Wina2', 'Libala', 'Airtel Money', '0.05', '2744', ''),
('WB000046', 'Wina5', 'Woodlands', 'FNB', '0.04', '1654', ''),
('WB000047', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '1331', ''),
('WB000048', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '801', ''),
('WB000049', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '967', ''),
('WB000050', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '1988', ''),
('WB000051', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '3646', ''),
('WB000052', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '54', ''),
('WB000053', 'Wina2', 'Libala', 'Zamtel Money', '0.045', '2121', ''),
('WB000054', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '564', ''),
('WB000055', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1011', ''),
('WB000056', 'Wina5', 'Woodlands', 'FNB', '0.04', '2950', ''),
('WB000057', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '57', ''),
('WB000058', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '2382', ''),
('WB000059', 'Wina1', 'Lusaka CPD', 'MTN Money', '0.06', '349', ''),
('WB000060', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '2479', ''),
('WB000061', 'Wina2', 'Libala', 'Airtel Money', '0.05', '1537', ''),
('WB000062', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '2802', ''),
('WB000063', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1290', ''),
('WB000064', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '4331', ''),
('WB000065', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1338', ''),
('WB000066', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1477', ''),
('WB000067', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '3430', ''),
('WB000068', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '451', ''),
('WB000069', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '80', ''),
('WB000070', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '2002', ''),
('WB000071', 'Wina2', 'Libala', 'Airtel Money', '0.05', '3235', ''),
('WB000072', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '4156', ''),
('WB000073', 'Wina5', 'Woodlands', 'Airtel Money', '0.05', '22', ''),
('WB000074', 'Wina2', 'Libala', 'Airtel Money', '0.05', '2156', ''),
('WB000075', 'Wina5', 'Woodlands', 'MTN Money', '0.06', '2267', ''),
('WB000076', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '2419', ''),
('WB000077', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1691', ''),
('WB000078', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2736', ''),
('WB000079', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '4282', ''),
('WB000080', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '2331', ''),
('WB000081', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1405', ''),
('WB000082', 'Wina2', 'Libala', 'Airtel Money', '0.05', '945', ''),
('WB000083', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '688', ''),
('WB000084', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '189', ''),
('WB000085', 'Wina5', 'Woodlands', 'FNB', '0.04', '3787', ''),
('WB000086', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '3407', ''),
('WB000087', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1105', ''),
('WB000088', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '174', ''),
('WB000089', 'Wina2', 'Libala', 'MTN Money', '0.06', '1440', ''),
('WB000090', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '3344', ''),
('WB000091', 'Wina2', 'Libala', 'Airtel Money', '0.05', '2676', ''),
('WB000092', 'Wina2', 'Libala', 'Airtel Money', '0.05', '812', ''),
('WB000093', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '4224', ''),
('WB000094', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '592', ''),
('WB000095', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '1662', ''),
('WB000096', 'Wina2', 'Libala', 'Airtel Money', '0.05', '1915', ''),
('WB000097', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '1866', ''),
('WB000098', 'Wina6', 'Matero East', 'MTN Money', '0.06', '4320', ''),
('WB000099', 'Wina2', 'Libala', 'Airtel Money', '0.05', '228', ''),
('WB000100', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '3318', ''),
('WB000101', 'Wina2', 'Libala', 'Airtel Money', '0.05', '3615', ''),
('WB000102', 'Wina2', 'Libala', 'Airtel Money', '0.05', '4156', ''),
('WB000103', 'Wina3', 'Kabwata', 'Zamtel Money', '0.045', '1401', ''),
('WB000104', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2014', ''),
('WB000105', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '3475', ''),
('WB000106', 'Wina2', 'Libala', 'MTN Money', '0.06', '2452', ''),
('WB000107', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1720', ''),
('WB000108', 'Wina2', 'Libala', 'Airtel Money', '0.05', '118', ''),
('WB000109', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '779', ''),
('WB000110', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1623', ''),
('WB000111', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2679', ''),
('WB000112', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1976', ''),
('WB000113', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '974', ''),
('WB000114', 'Wina1', 'Lusaka CPD', 'Airtel Money', '0.05', '2911', ''),
('WB000115', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '279', ''),
('WB000116', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '3646', ''),
('WB000117', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '855', ''),
('WB000118', 'Wina2', 'Libala', 'Airtel Money', '0.05', '1412', ''),
('WB000119', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2137', ''),
('WB000120', 'Wina5', 'Woodlands', 'FNB', '0.04', '1800', ''),
('WB000121', 'Wina2', 'Libala', 'Airtel Money', '0.05', '1219', ''),
('WB000122', 'Wina5', 'Woodlands', 'FNB', '0.04', '3582', ''),
('WB000123', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '760', ''),
('WB000124', 'Wina4', 'Mandevu', 'MTN Money', '0.06', '2308', ''),
('WB000125', 'Wina1', 'Lusaka CPD', 'Zamtel Money', '0.045', '1941', ''),
('WB000126', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2068', ''),
('WB000127', 'Wina6', 'Matero East', 'MTN Money', '0.06', '4242', ''),
('WB000128', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2587', ''),
('WB000129', 'Wina2', 'Libala', 'Zamtel Money', '0.045', '4196', ''),
('WB000130', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '1463', ''),
('WB000131', 'Wina5', 'Woodlands', 'FNB', '0.04', '2199', ''),
('WB000132', 'Wina2', 'Libala', 'Airtel Money', '0.05', '2956', ''),
('WB000133', 'Wina5', 'Woodlands', 'FNB', '0.04', '1663', ''),
('WB000134', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2525', ''),
('WB000135', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '4404', ''),
('WB000136', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '1012', ''),
('WB000137', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '69', ''),
('WB000138', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '4241', ''),
('WB000139', 'Wina4', 'Mandevu', 'MTN Money', '0.06', '3379', ''),
('WB000140', 'Wina2', 'Libala', 'MTN Money', '0.06', '3255', ''),
('WB000141', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1705', ''),
('WB000142', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1039', ''),
('WB000143', 'Wina5', 'Woodlands', 'FNB', '0.04', '254', ''),
('WB000144', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '870', ''),
('WB000145', 'Wina4', 'Mandevu', 'MTN Money', '0.06', '772', ''),
('WB000146', 'Wina1', 'Lusaka CPD', 'Zamtel Money', '0.045', '1791', ''),
('WB000147', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '3320', ''),
('WB000148', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '4185', ''),
('WB000149', 'Wina1', 'Lusaka CPD', 'MTN Money', '0.06', '100', ''),
('WB000150', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '3794', ''),
('WB000151', 'Wina6', 'Matero East', 'Airtel Money', '0.05', '498', ''),
('WB000152', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2566', ''),
('WB000153', 'Wina2', 'Libala', 'Airtel Money', '0.05', '4459', ''),
('WB000154', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '3916', ''),
('WB000155', 'Wina5', 'Woodlands', 'FNB', '0.04', '528', ''),
('WB000156', 'Wina2', 'Libala', 'FNB', '0.04', '2067', ''),
('WB000157', 'Wina5', 'Woodlands', 'FNB', '0.04', '1119', ''),
('WB000158', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '1209', ''),
('WB000159', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '1950', ''),
('WB000160', 'Wina3', 'Kabwata', 'MTN Money', '0.06', '1268', ''),
('WB000161', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1066', ''),
('WB000162', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '4419', ''),
('WB000163', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '2065', ''),
('WB000164', 'Wina2', 'Libala', 'FNB', '0.04', '2663', ''),
('WB000165', 'Wina3', 'Kabwata', 'Airtel Money', '0.05', '2075', ''),
('WB000166', 'Wina4', 'Mandevu', 'Zamtel Money', '0.045', '3284', ''),
('WB000167', 'Wina5', 'Woodlands', 'Airtel Money', '0.05', '425', ''),
('WB000168', 'Wina3', 'Kabwata', 'Zanaco', '0.035', '1856', ''),
('WB000169', 'Wina4', 'Mandevu', 'Airtel Money', '0.05', '405', ''),
('WB000170', 'Wina1', 'Lusaka CPD', 'FNB', '0.04', '608', ''),
('WWW', 'Wina 2', 'Libala', 'MTN Money', '0.045', '20000', ''),
('ZNXTXDID', 'Wina 6', 'Mandevu', 'Zanaco', '0.045', '2000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`phonenumber`);

--
-- Indexes for table `booth`
--
ALTER TABLE `booth`
  ADD PRIMARY KEY (`booth`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`service`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
