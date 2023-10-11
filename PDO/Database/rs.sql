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
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `apiregis`
--

CREATE TABLE `apiregis` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apiregis`
--

INSERT INTO `apiregis` (`id`, `name`, `mobile`, `email`, `city`, `state`, `pincode`, `password`, `otp`, `date_time`) VALUES
(1, 'Ravi', '7521878485', 'raviup@gmail.com', 'jaunpur', 'UP', '222125', '4321', '1234', '12-01-202303:31:11 PM'),
(2, 'ravi', '07521878480', 'ravi@gmail.com', 'jaunpur', 'UP', '22125', '12345', '', '12-01-202303:31:36 PM'),
(3, 'shudhanshu', '9234567891', 'shudhanshu', 'lucknow', 'utter pradesh', '226007', '@123', '', '25-01-202308:00:03 AM'),
(4, 'ravi', '7521878480', 'ravi@gmail.com', 'jaunpur', 'UP', '22125', '1234', '', '14-03-202308:18:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cstudent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `cname`, `cstudent`) VALUES
(1, 'Jaunpur', '5'),
(2, 'lucknow', '2'),
(3, 'prayagraj', '2'),
(4, 'kaunpur', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ci_file`
--

CREATE TABLE `ci_file` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_file`
--

INSERT INTO `ci_file` (`id`, `filename`, `datetime`) VALUES
(1, '1696000956_profile.jpg', '2023-09-29 20:35:38'),
(2, '1695999942_profile.jpg', '2023-09-29 20:35:42'),
(3, '1695999947_profile.jpg', '2023-09-29 20:35:47'),
(4, '1695999954_profile.jpg', '2023-09-29 20:35:54'),
(5, '1695999958_profile.jpg', '2023-09-29 20:35:58'),
(6, '1695999963_profile.jpg', '2023-09-29 20:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`) VALUES
(1, 'BCA'),
(2, 'B.Sc IT');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `name`, `email`, `password`) VALUES
(3, 'Coders', 'coder@gmail.com', 'coder123'),
(4, 'mohan', 'mohan@gmai.com', '1223'),
(5, 'ravi', 'anju@gmail.com', '0000'),
(6, 'manjeet', 'manjeet@gmail.com', '23445'),
(7, 'kishan', 'kishan@gmail.com', '9876'),
(8, 'shahil', 'shail@gmail.com', '7654'),
(9, 'ravi', 'raviup198@gmail.com', 'ravi@123'),
(10, 'saurabh', 'saubh@gmail.com', '1234'),
(11, 'aman', 'aman@gmail.com', 'aman@123'),
(12, 'abc', 'abc@gmail.com', 'abc@123'),
(16, 'fdbdfv', 'erg@gmail.com', 'zxcv'),
(22, 'Swati', 'swati@gmail.com', '2002'),
(23, 'RS RAVI', 'rsravi@gmail.com', 'rs@172'),
(25, 'RS RAVI', 'rsravi@gmail.com', 'rs@172'),
(26, 'Mr', 'hubwaylucknow@gmail.com', '@hubway'),
(27, 'MrCoder', 'coder@gmail.com', 'Coder@12'),
(28, 'Coder', 'coder@gmail.com', 'Coder12');

-- --------------------------------------------------------

--
-- Table structure for table `name&lang`
--

CREATE TABLE `name&lang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `languages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `name&lang`
--

INSERT INTO `name&lang` (`id`, `name`, `languages`) VALUES
(1, 'MR RAVI', 'Python,PHP'),
(2, 'RAVI', 'PHP,JavaScript'),
(3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `serialize`
--

CREATE TABLE `serialize` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serialize`
--

INSERT INTO `serialize` (`id`, `name`, `age`, `gender`, `city`) VALUES
(1, 'Mr Ravi', '15', 'Male', 'Jaunpur'),
(2, 'ss singh', '20', 'Female', 'Lucknow'),
(3, 'RS Ravi', '20', 'Male', 'Lucknow'),
(4, 'Anil', '20', 'Male', 'New_Delhi'),
(5, 'aman', '22', 'Male', 'Varanashi'),
(7, 'ankesh', '20', 'Male', 'Lucknow'),
(8, 'LAPTOP-03OFGFCJ', '12', 'Male', 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `city`, `phone`, `email`) VALUES
(1, 'Ravi', 'Jaunpur', '7521878485', 'raviup198@gmail.com'),
(2, 'aman', 'Jaunpur', '123456789', 'aman@gmail.com'),
(5, 'anil', 'prayagraj', '1478523690', 'anil@gmail.com'),
(6, 'amank', 'prayagraj', '01478523369', 'amank@gmail.com'),
(16, 'kumar', 'kaunpur', '4567899876', 'kumar@gmail.com'),
(17, 'rkumar', 'kaunpur', '4567899876', 'kumar@gmail.com'),
(24, 'mohan', 'kaunpur', '4567899876', 'kumar@gmail.com'),
(49, 'sdsa', 'Varanashi', '123456789', 'abc@digicoders.in'),
(50, 'ravi shankar gautam', 'Varanashi', '23456789', 'abc@digicoders.in');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `f_name`, `l_name`, `class`, `city`) VALUES
(1, 'Ravi', 'Kumar', 1, 'Jaunpur'),
(2, 'Anil', 'Pal', 2, 'Jaunpur'),
(3, 'Aman', 'Kumar', 2, 'Kanpur'),
(4, 'Aman', 'K', 1, 'Varanashi'),
(5, 'Ankesh', 'G', 1, 'Kanpur'),
(6, 'Ravi', 'K', 2, 'Mumbai '),
(7, 'SS', 'Singh', 1, 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apiregis`
--
ALTER TABLE `apiregis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_file`
--
ALTER TABLE `ci_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `name&lang`
--
ALTER TABLE `name&lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serialize`
--
ALTER TABLE `serialize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apiregis`
--
ALTER TABLE `apiregis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_file`
--
ALTER TABLE `ci_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `name&lang`
--
ALTER TABLE `name&lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `serialize`
--
ALTER TABLE `serialize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
