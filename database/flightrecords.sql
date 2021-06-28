-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 08:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightrecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'John', 'john@gmail.com', 'IndiGo services', 'Satisfactory'),
(3, 'Raman', 'raman@gmail.com', 'AirAsia Airline', 'AirAsia not available'),
(4, 'RAHUL SRIVASTAVA', 'rahulsriv2000@gmail.com', 'IndiGo services', 'Not good');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `doj` varchar(255) DEFAULT NULL,
  `sourcea` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `dtime` varchar(255) DEFAULT NULL,
  `atime` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `stops` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `name`, `doj`, `sourcea`, `destination`, `dtime`, `atime`, `duration`, `stops`) VALUES
(51, 'IndiGo', '2021-05-31', 'Delhi', 'Cochin', '16:00', '20:10', '4h 10m', '1'),
(103, 'SpiceJet', '2021-06-01', 'Chennai', 'Kolkata', '12:00', '22:50', '10h 50m', '3'),
(105, 'AirIndia', '2021-05-31', 'Delhi', 'Cochin', '12:00', '22:50', '10h 50m', '3'),
(303, 'Sailesh', '2021-05-26', 'Chennai', 'Delhi', '1:00', '4:00', '3hr', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(4, 'Shyam', 'shyam@gmail.com', 'Shyam123'),
(7, 'Ram', 'ram@gmail.com', 'Ram123'),
(8, 'Mohan', 'mohan@gmail.com', 'Mohan123'),
(10, 'Sailesh Nama', 'saileshsathi@gmail.com', 'Sailesh123');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `email`, `mobile`, `gender`, `dob`, `profession`) VALUES
(11, 'Ram', 'ram@gmail.com', '8877887788', 'Male', '1996-06-05', 'Engineer'),
(12, 'Mohan', 'mohan@gmail.com', '4455445566', 'Male', '1989-12-29', 'Entrepreneur'),
(14, 'Shyam', 'shyam@gmail.com', '8855778855', 'Male', '1988-02-18', 'Administrator'),
(18, 'Sailesh Nama', 'saileshsathi@gmail.com', '8300784804', 'Male', '2021-05-26', 'Student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
