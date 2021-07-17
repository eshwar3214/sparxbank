-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `sno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sno`, `name`, `email`, `balance`, `date`) VALUES
(1, 'eshwar', 'eshwar.sparx@org', 0, '2021-07-05 06:32:07'),
(2, 'karthik', 'karthik.sparx@org', 990, '2021-07-05 06:32:44'),
(3, 'siraj', 'siraj.sparx@org', 990, '2021-07-05 06:33:39'),
(4, 'dhanush', 'dhanush.sparx@org', 990, '2021-07-05 06:33:39'),
(5, 'praful', 'praful.sparx@org', 490, '2021-07-05 06:34:28'),
(6, 'harish', 'harish.sparx@org', 990, '2021-07-05 06:35:36'),
(7, 'vamshi', 'vamshi.sparx@org', 1439, '2021-07-05 06:35:36'),
(8, 'satish', 'satish.sparx@org', 1090, '2021-07-05 06:36:10'),
(9, 'ranjith', 'ranjith.sparx@org', 990, '2021-07-05 06:37:13'),
(10, 'noobie', 'noobie.sparx@org', 2031, '2021-07-05 06:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `sno` int(6) NOT NULL,
  `transferredfrom` varchar(255) NOT NULL,
  `transferredto` varchar(255) NOT NULL,
  `transferredamount` int(6) NOT NULL,
  `senderbalance` int(6) NOT NULL,
  `recieverbalance` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`sno`, `transferredfrom`, `transferredto`, `transferredamount`, `senderbalance`, `recieverbalance`, `date`) VALUES
(11, 'siraj', 'eshwar', 10, 990, 1010, '2021-07-07 07:47:39'),
(12, 'karthik', 'eshwar', 10, 990, 1020, '2021-07-07 07:49:19'),
(13, 'dhanush', 'eshwar', 10, 990, 1030, '2021-07-07 07:50:06'),
(14, 'praful', 'eshwar', 10, 990, 1040, '2021-07-07 07:50:41'),
(15, 'harish', 'eshwar', 10, 990, 1050, '2021-07-07 07:50:54'),
(16, 'vamshi', 'eshwar', 10, 990, 1060, '2021-07-07 07:51:13'),
(17, 'satish', 'eshwar', 10, 990, 1070, '2021-07-07 07:51:51'),
(18, 'ranjith', 'eshwar', 10, 990, 1080, '2021-07-07 07:52:07'),
(19, 'noobie', 'eshwar', 10, 990, 1090, '2021-07-07 07:52:21'),
(20, 'noobie', 'vamshi', 459, 531, 1449, '2021-07-07 08:24:35'),
(21, 'vamshi', 'satish', 10, 1439, 1000, '2021-07-07 08:27:31'),
(22, 'eshwar', 'karthik', 10, 1080, 1000, '2021-07-07 11:37:58'),
(23, 'praful', 'eshwar', 500, 490, 1580, '2021-07-09 06:31:22'),
(24, 'eshwar', 'noobie', 1500, 80, 2031, '2021-07-09 06:33:25'),
(25, 'eshwar', 'karthik', 79, 1, 1079, '2021-07-09 06:34:17'),
(26, 'eshwar', 'karthik', 1, 0, 1080, '2021-07-11 13:45:01'),
(27, 'karthik', 'satish', 90, 990, 1090, '2021-07-11 15:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
