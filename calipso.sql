-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calipso`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Bookname` varchar(40) NOT NULL,
  `bookid` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `room` varchar(4) NOT NULL,
  `block` varchar(4) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`Name`, `email`, `Bookname`, `bookid`, `phone`, `room`, `block`, `bid`) VALUES
('Shreya', 'shreya@gmail.com', 'DATABASE Management', '12345', '981043789', '444', 'G3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Academics'),
(5, 'biography'),
(7, 'fiction'),
(3, 'mystery'),
(8, 'non-fiction'),
(4, 'romance'),
(2, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Bookname` varchar(30) NOT NULL,
  `book_id` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `room` varchar(4) NOT NULL,
  `block` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `l_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lender`
--

INSERT INTO `lender` (`Name`, `email`, `Bookname`, `book_id`, `phone`, `room`, `block`, `category`, `l_id`) VALUES
('shreya', 'shreya@gmail.com', 'Harry Potter', '567439', '9823785043', '225', 'G4', 'Fantasy', 2),
('shreya', 'shreya@gmail.com', 'Operating Systems', '452768', '8994202433', '122', 'G2', 'Academics', 3),
('aditi', 'aditi@gmail.com', 'Sapiens', '12367493', '887654329', '444', 'G2', 'Non-Fiction', 4),
('Palak', 'palak@gmail.com', 'Database Management Essentials', '5467321', '9876543699', '222', 'G2', 'Academics', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(7, 'shreya8', 'shreya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'aditi', 'aditi@gmail.com', '95de1f5f5677a8a4274c071151b25898'),
(9, 'Palak', 'palak@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(10, 'Eva', 'eva@gmail.com', 'f37427482b0311a8f3ea336ba0b60df1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `borrow_ibfk_1` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `lender_ibfk_1` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `lender`
--
ALTER TABLE `lender`
  ADD CONSTRAINT `lender_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
