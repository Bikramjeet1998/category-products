-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 07:31 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '1000', '123@t.com'),
(2, 'bikram', '123', 'bikram@123'),
(3, 'bikram', '0000', 'test@email.com'),
(4, 'test', 'test', 'test@test.com'),
(5, 'check', 'check', 'check@check.com'),
(6, 'bikram', '456', 'test@email.com'),
(7, 'testing', '123', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `email`, `image`) VALUES
(2, 'Bikramjeet singh', 'fggjgjk@g.com', 'All - Copy.jpg'),
(7, 'Demo2', 'hhhh@frf', 'Capture.JPG'),
(9, 'Bikramjeet singh', 'bikram@321', 'gunman.gif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`) VALUES
(3, 'bikram', '123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1234567890),
(26, 'user@123', 'user@123', '81dc9bdb52d04dc20036dbd8313ed055', 123),
(27, 'user', 'user@123.com', '81dc9bdb52d04dc20036dbd8313ed055', 123),
(28, 'bikram', 'bikram@000', 'c6f057b86584942e415435ffb1fa93d4', 0),
(29, 'test', 'test@.com', '827ccb0eea8a706c4c34a16891f84e7b', 12345),
(30, 'test123', 'test@123', '202cb962ac59075b964b07152d234b70', 321),
(31, 'check', 'check@111', '698d51a19d8a121ce581499d7b701668', 111),
(32, 'user', 'test@123.com', 'ee11cbb19052e40b07aac0ca060c23ee', 123),
(33, 'bikram', 'kawal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
