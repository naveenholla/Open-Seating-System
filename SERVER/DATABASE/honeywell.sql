-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2016 at 09:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honeywell`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `E_ID` int(11) NOT NULL,
  `E_MAC` varchar(64) NOT NULL,
  `DESIGNATION` varchar(64) NOT NULL,
  `E_NAME` varchar(11) NOT NULL,
  `DEPARTMENT` varchar(64) NOT NULL,
  `Time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`E_ID`, `E_MAC`, `DESIGNATION`, `E_NAME`, `DEPARTMENT`, `Time`) VALUES
(1, '00:0c:29:83:e2:9f', 'Senior Engineer', 'Sourabh', 'Research and Development', '2016-10-02 19:33:291475429609'),
(2, '00:A0:C9:14:C8:30', 'Senior Mechanical Engineer', 'Vaibhav', 'Accounting and Finance', '2016-10-02 19:33:291475429609'),
(3, '00:A0:C9:14:C8:29', 'Tester Engineer', 'Naveen', 'Research and Development', '2016-10-02 19:33:291475429609'),
(4, '00:A0:C9:14:C8:28', 'System Admin', 'Sachin', 'Human Resource Management', '2016-10-02 19:33:291475429609'),
(17, '9C:D2:1E:15:63:27', 'Coder', 'Adithya', 'IT', '2016-10-02 19:33:291475429609'),
(33, '00:0c:29:83:e2:9f', '', '', '', '1475436511'),
(34, '00:0c:29:83:e2:9f', '', '', '', '1475436600'),
(35, '00:0c:29:83:e2:9f', 'Sherlock', 'Sathyajith', 'IT', '1475436697'),
(36, '00:0c:29:83:e2:9f', '', '', '', '1475436709'),
(37, '00:0c:29:83:e2:9f', '', '', '', '1475436952'),
(38, '00:0c:29:83:e2:9f', '', '', '', '1475437176');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE `lookup` (
  `R_MAC` varchar(64) NOT NULL,
  `C_MAC` varchar(64) NOT NULL,
  `C_IP` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`R_MAC`, `C_MAC`, `C_IP`) VALUES
('00:50:56:e3:08:d9', '00:0c:29:83:e2:9f', '192.168.109.140');

-- --------------------------------------------------------

--
-- Table structure for table `routerinfo`
--

CREATE TABLE `routerinfo` (
  `R_ID` int(11) NOT NULL,
  `MAC` varchar(64) NOT NULL,
  `FLOOR` int(11) NOT NULL,
  `BLOCK` int(11) NOT NULL,
  `PILLAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routerinfo`
--

INSERT INTO `routerinfo` (`R_ID`, `MAC`, `FLOOR`, `BLOCK`, `PILLAR`) VALUES
(1, '00:50:56:e3:08:d9', 4, 6, 3),
(2, 'A0:00:A9:13:C8:30', 2, 4, 2),
(3, 'A0:00:A9:13:C8:28', 3, 4, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`C_MAC`),
  ADD UNIQUE KEY `R_MAC` (`R_MAC`),
  ADD UNIQUE KEY `C_MAC` (`C_MAC`),
  ADD UNIQUE KEY `C_IP` (`C_IP`),
  ADD UNIQUE KEY `R_MAC_2` (`R_MAC`),
  ADD UNIQUE KEY `R_MAC_3` (`R_MAC`),
  ADD UNIQUE KEY `R_MAC_6` (`R_MAC`),
  ADD UNIQUE KEY `R_MAC_7` (`R_MAC`),
  ADD KEY `R_MAC_4` (`R_MAC`),
  ADD KEY `R_MAC_5` (`R_MAC`);

--
-- Indexes for table `routerinfo`
--
ALTER TABLE `routerinfo`
  ADD PRIMARY KEY (`R_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
