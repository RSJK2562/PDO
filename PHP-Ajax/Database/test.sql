-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 09:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE `country_tb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`cid`, `cname`) VALUES
(1, 'india'),
(2, 'Pakishta'),
(3, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `stabe_tb`
--

CREATE TABLE `stabe_tb` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stabe_tb`
--

INSERT INTO `stabe_tb` (`sid`, `sname`, `country`) VALUES
(1, 'Utter Pradesh', '1'),
(2, 'Hriyana', '1'),
(3, 'Delhi', '1'),
(4, 'Madhya Pradhesh', '1'),
(5, 'Bansal', '3'),
(6, 'Chittagong', '3'),
(7, 'Dhaka', '3'),
(8, 'Khulna', '3'),
(9, 'Balochistan', '2'),
(10, 'Sindh', '2'),
(11, 'Lahore', '2'),
(12, 'Punjab', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_tb`
--
ALTER TABLE `country_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `stabe_tb`
--
ALTER TABLE `stabe_tb`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_tb`
--
ALTER TABLE `country_tb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stabe_tb`
--
ALTER TABLE `stabe_tb`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
