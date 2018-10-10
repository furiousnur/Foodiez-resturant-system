-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 01:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodiez`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `first_name`, `last_name`, `email`, `pass`) VALUES
(4, 'kona', 'islam', 'kona@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'nur', 'alam', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `resturant_id` int(11) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `o_time` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resturant`
--

INSERT INTO `resturant` (`resturant_id`, `r_name`, `f_name`, `address`, `price`, `o_time`, `image`) VALUES
(5, 'KFC', 'Barger', 'Dhanmondi 27', '350', '12th march to 15th march', '02_KFC_NG.jpg'),
(7, 'BFC', 'Pizza', 'Dhanmondi 32', '250', '12th march to 15th march', 'download.jpg'),
(8, 'KFC', 'Barger', 'Dhanmondi 32', '350', '12th march to 15th march', 'G15022_KFC_BucketMeal_RGB-copy.jpg'),
(9, 'KFC', 'Pizza', 'Dhanmondi 32', '250', '12th march to 15th march', 'images.jpg'),
(10, 'BFC', 'Chicken', 'Dhanmondi 15', '150', '12th 4th octobor to 10th octobor', 'KFC_ChknShareBuckets_InSit_7746_.jpg'),
(11, 'KFC', 'Pizza', 'Dhanmondi 32', '250', '12th 4th octobor to 10th octobor', 'KFC-New-Zinger-feat-2-1-Mar-2018-550x288.jpg'),
(12, 'BFC', 'Barger', 'Dhanmondi 27', '300', '12th march to 15th march', 'kfcs-latest-plan-beat-its-chicken-competition.jpg'),
(13, 'KFC', 'Chicken', 'Dhanmondi 15', '350', '12th 4th octobor to 10th octobor', 'nuggets-tenders-en.jpg'),
(14, 'BFC', 'Chicken', 'Dhanmondi 27', '350', '12th 4th octobor to 10th octobor', 'this-is-what-kfc-is-famous.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'kona', 'kona@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resturant`
--
ALTER TABLE `resturant`
  ADD PRIMARY KEY (`resturant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resturant`
--
ALTER TABLE `resturant`
  MODIFY `resturant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
