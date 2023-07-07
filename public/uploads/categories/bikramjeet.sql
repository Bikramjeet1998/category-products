-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikramjeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(50) NOT NULL,
  `categori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `categori`) VALUES
(11, 'punjabi'),
(25, 'english'),
(26, 'HINDI'),
(28, 'abc'),
(30, 'COMPUTER'),
(31, 'Science'),
(32, 'KJBKBKB');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'aman', 'preet', 'Bfsdgg@.COM'),
(2, 'bikram', 'jeet', 'Bfsdgg@.COM'),
(3, 'Raman', 'preet', 'Bfsdgsvddg@.COM'),
(4, 'Akash', 'preet', 'Bfsdgsvddg@.COM'),
(5, 'Priya', 'preet', 'Bfsdgsvddg@.COM');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`first_name`, `last_name`) VALUES
('bikram', 'jeet'),
('aman', 'deep'),
('', ''),
('', ''),
('raman', 'deep'),
('harpreet', 'singh'),
('prabh', 'deep'),
('harman', 'deep'),
('harman', 'deep'),
('harman', 'deep'),
('harman', 'deep'),
('vishal', 'preet'),
('bikram', 'deep'),
('bikram', 'deep'),
('bikram', 'jeet'),
('bikram', 'jeet'),
('bikram', 'jeet'),
('bikram', 'jeet');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Id` int(10) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(70) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Id`, `First_name`, `Last_name`, `Email`) VALUES
(22, 'bikram', 'singh', 'klhjll@ER'),
(23, 'bikram', 'SINGH', 'SFA@HTH.COM'),
(24, 'bikram', 'SINGH', 'SFA@HTH.COM');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `categori` varchar(150) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `categori`, `images`) VALUES
(31, 'punjabi', '[\"gunman.gif\",\"school.PNG\",\"All - Copy.jpg\",\"school - Copy.PNG\"]'),
(32, 'punjabi', '[\"fun.PNG\"]');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `categori` varchar(150) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categori`, `images`) VALUES
(1, 'fun', 'upload-images/school.PNG'),
(2, 'happy', 'upload-images/19.12.2022_17.30.20_REC.png'),
(3, 'COMPUTER', 'upload-images/All.jpg'),
(4, 'punjabi', 'upload-images/19.12.2022_17.30.20_REC.png'),
(5, 'punjabi', 'upload-images/All.jpg'),
(6, 'punjabi', 'upload-images/All.jpg'),
(22, 'COMPUTER', 'upload-images/leave error.png'),
(23, 'COMPUTER', 'upload-images/All.jpg'),
(24, 'punjabi', 'upload-images/All.jpg'),
(25, 'punjabi', 'upload-images/Capture.JPG1.JPG'),
(29, 'abc', 'upload-images/star.JPG'),
(30, 'punjabi', 'upload-images/leave error.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `father_name`, `address`) VALUES
(1, 'bikram', 'SFA@HTH.COM', 2147483647, 'wdfwefwe', 'sdfwefwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
