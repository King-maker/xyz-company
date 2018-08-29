-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 08:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_info`
--

CREATE TABLE `employees_info` (
  `EMP_id` int(11) NOT NULL,
  `FNAME` varchar(128) NOT NULL,
  `NAME` varchar(128) NOT NULL,
  `DEPT` varchar(128) NOT NULL,
  `DEPT_ID` int(12) NOT NULL,
  `SALARY` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees_info`
--

INSERT INTO `employees_info` (`EMP_id`, `FNAME`, `NAME`, `DEPT`, `DEPT_ID`, `SALARY`) VALUES
(18, 'monicah', 'wanjiru', 'finance', 123, 20000),
(19, 'Mike', 'wamae', 'Human Resource', 2200, 190000),
(20, 'Mary', 'Kambo', 'IT', 2121, 146700),
(21, 'Amanda', 'william', 'marketing', 2110, 500000),
(22, 'John', 'Kihiu', 'management', 1, 750000),
(23, 'Veronica', 'wayua', 'finance', 2200, 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_info`
--
ALTER TABLE `employees_info`
  ADD PRIMARY KEY (`EMP_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees_info`
--
ALTER TABLE `employees_info`
  MODIFY `EMP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
