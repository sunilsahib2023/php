-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 10:50 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--
CREATE DATABASE IF NOT EXISTS `customer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `customer`;

-- --------------------------------------------------------

--
-- Table structure for table `custdetail`
--

CREATE TABLE `custdetail` (
  `custid` int(10) NOT NULL,
  `custname` varchar(20) DEFAULT NULL,
  `custpass` text NOT NULL,
  `custphone` int(10) DEFAULT NULL,
  `custaddress` varchar(30) DEFAULT NULL,
  `custcity` varchar(10) DEFAULT NULL,
  `pin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custdetail`
--

INSERT INTO `custdetail` (`custid`, `custname`, `custpass`, `custphone`, `custaddress`, `custcity`, `pin`) VALUES
(101, 'Ravi Kumar', 'abc@12', 98778384, 'A-23 Raja Garden', 'Delhi', 110093),
(102, 'Mani', 'abc@125', 666384, 'A-23 Moti Nagar', 'New Delhi', 1144493),
(104, 'Amit', 'abc@123', 47474743, NULL, NULL, NULL),
(106, 'Harri', 'aa123@', 200, 'asds', 'dasdas', 0),
(107, 'Anil kumar', 'www123', 9494949, 'A-34 Moti Nagar', 'New Bombay', 494949497),
(108, 'mona walia', 'abc@1234', 23546587, 'New Delhi', 'Delhi', 110000),
(109, 'mona walia', 'abc321@', 23546587, 'New Delhi', 'Delhi', 110000),
(110, 'shilpa', 'shi878', 3459834, 'delhi', 'del', 0),
(111, 'shilpa', 'y@123a', 3459834, 'delhi', 'delhi', 110011),
(112, 'kavi', 'abc@123', 200, 'bombay', '', 0),
(113, 'aman', 'abc123', 100, 'delhi', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custdetail`
--
ALTER TABLE `custdetail`
  ADD PRIMARY KEY (`custid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custdetail`
--
ALTER TABLE `custdetail`
  MODIFY `custid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
