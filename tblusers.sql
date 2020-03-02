-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 01:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saugat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `proname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`, `proname`) VALUES
(1, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '987654321', 'sydney,australia', '2020-03-01 11:40:00', '0'),
(2, 'ram', 'basnet', 'ram@gmail.com', '987654', 'sydney', '2020-03-01 11:45:41', '0'),
(3, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '987654321', 'as', '2020-03-01 12:07:22', '0'),
(4, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '987654321', 'as', '2020-03-01 12:08:55', '0'),
(5, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '987654321', 'as', '2020-03-01 12:14:35', '0'),
(6, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '987654321', 'as', '2020-03-01 12:21:51', '0'),
(7, 'ashim', 'basnet', 'ashim.basnet@gmail.com', '2232322442', 'asdfggh', '2020-03-01 12:36:37', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
