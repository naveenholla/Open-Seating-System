-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 03:13 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `honeywell`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `E_ID` int(11) NOT NULL,
  `E_MAC` varchar(64) NOT NULL,
  `DESIGNATION` varchar(64) NOT NULL,
  `E_NAME` varchar(11) NOT NULL,
  `MOBILE` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`E_ID`, `E_MAC`, `DESIGNATION`, `E_NAME`, `MOBILE`) VALUES
(1, '00:A0:C9:14:C8:29', 'Engineer', 'Sourabh', '9739488086'),
(2, '00:A0:C9:14:C8:29', 'Engineer', 'Vaibhav', '9739488086'),
(3, '00:A0:C9:14:C8:31', 'Engineer', 'Naveen', '9739488086'),
(4, '00:A0:C9:14:C8:29', 'Engineer', 'Sachin', '9739488086'),
(7, '00:A0:C9:14:C8:30', 'Engineer', 'Arun', '9900158969');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `R_MAC` varchar(64) NOT NULL,
  `C_MAC` varchar(64) NOT NULL,
  `C_IP` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`R_MAC`, `C_MAC`, `C_IP`) VALUES
('00:A0:C9:14:C8:67', '01:A0:C9:14:C8:39', '192.168.1.7');

-- --------------------------------------------------------

--
-- Table structure for table `routerinfo`
--

CREATE TABLE IF NOT EXISTS `routerinfo` (
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
(1, '00-50-56-C0-00-08', 4, 6, 3);

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
  ADD PRIMARY KEY (`R_MAC`), ADD UNIQUE KEY `R_MAC` (`R_MAC`), ADD UNIQUE KEY `C_MAC` (`C_MAC`), ADD UNIQUE KEY `C_IP` (`C_IP`);

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
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
