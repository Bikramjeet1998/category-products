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
-- Database: `bikram`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Count` int(10) NOT NULL,
  `Subjects` varchar(150) NOT NULL,
  `Date` date DEFAULT NULL,
  `price` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Count`, `Subjects`, `Date`, `price`) VALUES
(25, 'punjabi', '2525-02-05', 500),
(500, 'math', '2023-03-09', 5600);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) NOT NULL,
  `bookname` varchar(56) DEFAULT NULL,
  `notes_size` int(20) DEFAULT NULL,
  `wriiten_By` varchar(100) DEFAULT NULL,
  `Bookprice` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `bookname`, `notes_size`, `wriiten_By`, `Bookprice`) VALUES
(2, NULL, 200, 'raman', NULL),
(3, 'javascript', 400, 'Aaman', NULL),
(4, 'larawel', 500, 'BIKRAM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDERID` int(10) NOT NULL,
  `PERSON_ID` int(10) DEFAULT NULL,
  `ORDER_NO` int(50) NOT NULL
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDERID`, `PERSON_ID`, `ORDER_NO`) VALUES
(15, 3, 12),
(5, 2, 16),
(4654545, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(10) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(70) NOT NULL,
  `AGE` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `FNAME`, `LNAME`, `AGE`) VALUES
(1, 'BIKRAM', 'JEET', 23),
(2, 'AMAN', 'PREET', 25),
(3, 'HARISH', 'KUMAR', 23);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Name`, `Last_name`, `Email`) VALUES
(1, 'bikram', 'SINGH ', 'klhjll@ER'),
(2, 'AMAN', 'preet ', 'kFDVFDVD@ER'),
(3, 'BIK', 'ghjj ', 'jhdfj@HTH.COM'),
(4, 'bikramjeet', 'SINGH ', 'SFA@HTH.COM'),
(5, 'bikram', 'SINGH ', 'hfghkhk@HTH.COM'),
(6, 'FGFDGFG', 'GFGFG ', 'jhdfj@HTH.COM'),
(7, 'eqfwdfw', 'jeet ', 'SFA@HTH.COM'),
(8, 'yjytytu', 'ytutyu ', 'ytuyt@hh'),
(9, 'teast', 'jeet ', 'teast@gmail.com'),
(10, 'test1', 'Duckfghkjk ', 'klhjll@ER'),
(11, 'dhfdfjfd', 'Duckfghkjk ', 'jhdfj@HTH.COM'),
(12, 'test123', 'ghjj ', 'test123@hh'),
(13, 'tyfty', 'ghjj ', 'hfghkhk@HTH.COM'),
(14, 'test3', 'test ', 'klhjll@ER'),
(15, 'bikram', 'singh ', 'hfghkhk@HTH.COM'),
(16, 'test4', 'wq ', 'SFA@HTH.COM'),
(17, 'last', 'name ', 'SFA@HTH.COM'),
(18, 'dsdfsdfds', 'dfdsf ', 'klhjll@ER'),
(20, 'bikram', 'SINGH ', 'SFA@HTH.COM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `Token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `images`, `Token`) VALUES
(3, 'bikramjeet singh', 'test@email.com', '1234567890', '123456', 'All.jpg', ''),
(4, 'bikram', 'test@email.com', '11111111', '12345', 'gunman.gif', ''),
(5, 'bikram', 'test@email.com', '11111', '123', 'gunman.gif', ''),
(6, 'bikram', 'test@email.com', '123456', '243e61e9410a9f577d2d662c67025ee9', 'All - Copy.jpg', ''),
(7, 'bikram', 'test@email.com', '123', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(8, 'bikramjeet singh', '123df@gmail.com', '456456', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(25, 'bikram', '45612test@email.com', '123', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(26, 'bikram123', '7test@email.com', '456', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(30, 'bikram', '45678@', '456', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(31, 'bikram', '56556@gmail', '456', '243e61e9410a9f577d2d662c67025ee9', 'All.jpg', ''),
(32, 'bikram', '8test@email.com', '5555', '68053af2923e00204c3ca7c6a3150cf7', 'All.jpg', ''),
(33, 'bikram', 'test@email.com', '111', '8eefcfdf5990e441f0fb6f3fad709e21', 'All.jpg', ''),
(34, 'bikram', '423@12GMAIL.COM', '44', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'All.jpg', ''),
(35, 'tyfty', '4423@12GMAIL.COM', '444', '79b7cdcd14db14e9cb498f1793817d69', 'All.jpg', ''),
(36, 'bikram', '44423@12GMAIL.COM', '555', '6074c6aa3488f3c2dddff2a7ca821aab', 'All.jpg', ''),
(37, 'bikram', '424443@12GMAIL.COM', '4444', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'All.jpg', ''),
(38, 'bikram', '1test@email.com', '123', '202cb962ac59075b964b07152d234b70', 'All.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `id` (`PERSON_ID`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`PERSON_ID`) REFERENCES `persons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
