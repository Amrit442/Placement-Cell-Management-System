-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 10:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User`, `pwd`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `CGPA` varchar(10) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `Name`, `Branch`, `Semester`, `CGPA`, `Phone`, `Email`) VALUES
('1BY16CS088', 'Tarun Jain', 'ISE', '8', '7.5', '8073169523', '1BY16CS088@gmail.com'),
('1BY16IS001', 'Abhijit Baruah', 'CSE', '7', '7.4', '8073169567', '1BY16IS001@gmail.com'),
('1BY16IS006', 'Amrit Raj', 'ISE', '8', '7.4', '8073169505', 'rajamrit.18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tier1`
--

CREATE TABLE `tier1` (
  `USN` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tier1`
--

INSERT INTO `tier1` (`USN`, `Name`, `Company`, `Package`) VALUES
('1BY16CS088', 'Tarun Jain', 'SAP Labs', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tier2`
--

CREATE TABLE `tier2` (
  `USN` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tier2`
--

INSERT INTO `tier2` (`USN`, `Name`, `Company`, `Package`) VALUES
('1BY16IS006', 'Amrit Raj', 'Cognizant', '5.4'),
('1BY16CS088', 'Tarun Jain', 'Sonic Wall', '6.4');

-- --------------------------------------------------------

--
-- Table structure for table `tier3`
--

CREATE TABLE `tier3` (
  `USN` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tier3`
--

INSERT INTO `tier3` (`USN`, `Name`, `Company`, `Package`) VALUES
('1BY16IS006', 'Amrit Raj', 'Wipro', '3.5'),
('1BY16IS001', 'Abhijit Baruah', 'PWC', '4.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
