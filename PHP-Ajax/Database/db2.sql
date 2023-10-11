-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 09:10 PM
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
-- Database: `db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `2php`
--

CREATE TABLE `2php` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `hobies` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `Eligibilty` varchar(100) NOT NULL,
  `Date_Time` varchar(100) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `thumb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2php`
--

INSERT INTO `2php` (`ID`, `name`, `gender`, `hobies`, `city`, `dob`, `time`, `Eligibilty`, `Date_Time`, `pic`, `thumb`) VALUES
(2, 'Ravi', 'male', 'php,java,python,JS', 'lucknow', '1998-10-14', '11:58', 'Eligibile', '2022-06-29T03:43', '', ''),
(4, 'Ravi S', 'male', 'php,python', 'lucknow', '', '', 'Eligibile', '', '', ''),
(5, 'anil', 'male', 'php', 'prayagraj', '2002-07-21', '10:30', 'Eligibile', '2022-06-29T03:40', '', ''),
(7, 'swati singh', 'female', 'python,JS', 'lucknow', '2002-02-13', '10:21', 'Eligibile', '2022-06-29T03:38', '', ''),
(8, 'shevani singh', 'female', 'java', 'lucknow', '2000-12-28', '23:03', 'Eligibile', '2022-06-29T03:40', '', ''),
(9, 'RS', 'male', 'java,python', 'lucknow', '', '', 'Eligibile', '', '', ''),
(10, 'RS Ravi', 'male', 'java,python,JS', 'jaunpur', '1900-06-29', '23:01', '', '2022-06-29T03:41', '', ''),
(11, 'ss singh', 'female', 'php,JS', 'lucknow', '', '', 'Eligibile', '', '', ''),
(12, 'kishan', 'male', 'php', 'lucknow', '2003-03-01', '13:23', 'Eligibile', '', '', ''),
(13, 'pari', 'female', 'JS', 'lucknow', '1998-12-25', '03:06', 'Eligibile', '', '', ''),
(14, 'swati', 'female', 'python', 'lucknow', '2002-08-10', '12:21', 'Eligibile', '2022-06-29T03:31', '', ''),
(15, 'raju', 'male', 'python', 'lucknow', '2001-01-19', '14:49', 'Eligibile', '2022-06-30T14:49', '', ''),
(18, 'arpit', 'male', 'JS', 'lucknow', '2', '0', 'Eligibile', '2022-06-29T16:37', '', ''),
(19, 'GAUTAM', 'male', 'python', 'lucknow', '2', '0', 'Eligibile', '2022-06-29T21:53', '', ''),
(20, 'GAUTAM', 'male', 'python', 'lucknow', '2', 'd', 'Eligibile', '2022-06-29T21:53', '', ''),
(21, 'mahesh', 'male', 'java', 'lucknow', 'd', 'd', 'Eligibile', '2022-06-30T14:45', '', ''),
(22, 'mahesh lal', 'male', 'php,java', 'lucknow', '1999-10-30', '17:45', 'Eligibile', '2022-06-30T14:45', '', ''),
(23, 'mahesh lal', 'male', 'php,java', 'lucknow', '1999-10-30', '17:45', 'Eligibile', '2022-06-30T14:45', '', ''),
(25, 'laki', 'male', 'JS', 'kanpur', '2003-12-25', '15:04', 'Eligibile', '2022-06-30T15:05', '', ''),
(45, 'First Name Middle Name Last Name', 'male', '', 'lucknow', '2022-12-30', '18:54', 'Eligibile', '2022-12-30T18:54', '', ''),
(46, 'First Name Middle Name Last Name', 'male', 'php,java', 'lucknow', '2022-12-30', '18:54', 'Eligibile', '2022-12-30T18:54', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `3php`
--

CREATE TABLE `3php` (
  `id` int(5) NOT NULL,
  `file` varchar(400) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `3php`
--

INSERT INTO `3php` (`id`, `file`, `date`, `time`) VALUES
(5, 'sw2.jpg', '04/07/22', '11:23:28pm'),
(7, 'My Photo.jpg', '23/11/22', '11:17:12am');

-- --------------------------------------------------------

--
-- Table structure for table `mform`
--

CREATE TABLE `mform` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `signature` varchar(500) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mform`
--

INSERT INTO `mform` (`id`, `name`, `email`, `mobile`, `city`, `pincode`, `address`, `picture`, `signature`, `thumb`, `date`, `time`) VALUES
(1, 'ravi', 'raviup198@gmail.com', '8090366678', '', '', '', '', '', '', '', ''),
(2, 'anil', 'anil@gmail.com', '0123456789', '', '', '', '', '', '', '', ''),
(3, 'RAVI SHANKAR GAUTAM', 'raviup198@gmail.com', '07521878485', '', '', '', '', '', '', '', ''),
(4, 'RAVI SHANKAR GAUTAM', 'raviup198@gmail.com', '07521878485', '', '', '', '', '', '', '', ''),
(5, 'RAVI SHANKAR GAUTAM', 'raviup198@gmail.com', '07521878485', 'Varanasi', '222125', 'GADDOPUR', '', '', '', '', ''),
(6, 'RAVI', 'raviup198@gmail.com', '07521878485', '', '', '', '', '', '', '', ''),
(7, 'anil', 'anil@gmail.com', '1234567890', 'janour', '8765433', 'GADDOPUR', '1.jpg', '2.jpg', '3.jpg', '', ''),
(8, 'karan', 'karan@gmail.com', '1234567890', 'lucknow', '123456', 'a1 lalganj', '1.jpg', '2.jpg', '3.jpg', '', ''),
(9, 'mohan', 'mohan@gmail.com', '98765431', 'kaumpur', '0987654', 'k kaumpur', '1.jpg', '2.jpg', '3.jpg', '', ''),
(10, 'ravi', 'raviup198@gmail.com', '8090366678', 'janour', '22219', 'GADDOPUR', '1.jpg', '2.jpg', '3.jpg', '', ''),
(11, 'aman', 'amanup198@gmail.com', '1234567890', '', '', '', '', '', '', '', ''),
(12, 'ravi', 'rav@gmail.com', '234567890', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `sms` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `name`, `email`, `password`, `mobile`, `city`, `sms`) VALUES
(8, 'ankesh', 'ankesh@gmail.com', 'ag@123', '25893357885', 'jaunpur', 'this is good\r\n'),
(10, 'karan', 'karan@gmail.com', 'karan@123', '07521878485', 'Varanasi', 'GADDOPUR\r\nMAHRAJGANJ\r\nBADLAPUR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2php`
--
ALTER TABLE `2php`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `3php`
--
ALTER TABLE `3php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mform`
--
ALTER TABLE `mform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2php`
--
ALTER TABLE `2php`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `3php`
--
ALTER TABLE `3php`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mform`
--
ALTER TABLE `mform`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
