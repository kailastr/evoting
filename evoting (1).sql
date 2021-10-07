-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2021 at 11:22 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `aname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `aname`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(3, 'abc', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` bigint DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `approve_status` int DEFAULT '0' COMMENT '0 for pending , 1 for approve 2 for reject',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `email`, `mobile`, `branch`, `approve_status`) VALUES
(36, 'Gautham', 'gautham321@gmail.com', 8290869976, 'Computer Science', 1),
(35, 'Ayimen ', 'mailtoayimen@gmail.com', 9082378122, 'Information Technology', 1),
(37, 'Karthika', 'karthia@cusat.ac.in', 1234567, 'Information Technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_3rd`
--

DROP TABLE IF EXISTS `candidate_3rd`;
CREATE TABLE IF NOT EXISTS `candidate_3rd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `mobile` bigint DEFAULT NULL,
  `branch` varchar(60) DEFAULT NULL,
  `rollno` bigint DEFAULT NULL,
  `enrollid` varchar(40) DEFAULT NULL,
  `approve_status` int DEFAULT '0' COMMENT '	0 for pending , 1 for approve 2 for reject',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_3rd`
--

INSERT INTO `candidate_3rd` (`id`, `name`, `email`, `mobile`, `branch`, `rollno`, `enrollid`, `approve_status`) VALUES
(1, 'Mayank', 'mayank@gmail.com', 32412, 'Information Technology', 3342, '432', 1),
(2, 'Parinay', 'mayank@gmail.com', 6269888, 'Mechanical', 6849545, '32432', 1),
(3, 'Abhay', 'mayank@gmail.com', 626887802, 'Information Technology', 5255152, '3242134', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

DROP TABLE IF EXISTS `comm`;
CREATE TABLE IF NOT EXISTS `comm` (
  `id` int NOT NULL,
  `start` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`id`, `start`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE IF NOT EXISTS `suggestion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` bigint DEFAULT NULL,
  `rollno` bigint DEFAULT NULL,
  `suggestion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `Branch` text,
  `number` bigint DEFAULT NULL,
  `candidate` varchar(60) DEFAULT NULL,
  `rollno` bigint DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Branch`, `number`, `candidate`, `rollno`, `reason`, `status`) VALUES
(46, 'Kailas', '19it048kail@ug.ac.cusat.in', 'I T', 8281867676, 'Ayimen', 1, '58436', 'yes'),
(47, 'NewVoter', 'newvoter@cusat.ac.in', 'Information Technology', 123456789, 'Ayimen', 12345, '63515', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users_3rd`
--

DROP TABLE IF EXISTS `users_3rd`;
CREATE TABLE IF NOT EXISTS `users_3rd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `Branch` varchar(60) DEFAULT NULL,
  `number` bigint DEFAULT NULL,
  `candidate` varchar(60) DEFAULT NULL,
  `rollno` bigint DEFAULT NULL,
  `reason` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_3rd`
--

INSERT INTO `users_3rd` (`id`, `name`, `email`, `Branch`, `number`, `candidate`, `rollno`, `reason`) VALUES
(1, 'Abhay', 'mayank@gmail.com', 'IT', 684565, 'Parinay', 651, 'sade'),
(2, 'Aditya', 'adityakumarverified@gmail.com', 'IT', 6268887802, 'Parinay', 205503318002, 'nothing\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `voterlogin`
--

DROP TABLE IF EXISTS `voterlogin`;
CREATE TABLE IF NOT EXISTS `voterlogin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` bigint DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `IsCand` varchar(5) DEFAULT NULL,
  `voterid` int NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterlogin`
--

INSERT INTO `voterlogin` (`id`, `name`, `email`, `mobile`, `branch`, `IsCand`, `voterid`, `password`) VALUES
(7, 'Kailas', '19it048kail@ug.ac.cusat.in', 8281867676, 'Information Technology', 'No', 58436, '12345678'),
(8, 'NewVoter', 'newvoter@cusat.ac.in', 123456789, 'Information Technology', 'No', 63515, 'abc@123'),
(10, 'Kavya', 'kavya@cusat.ac.in', 1234567, 'Information Technology', 'No', 28378, '123'),
(12, 'Karthika', 'karthia@cusat.ac.in', 1234567, 'Information Technology', 'No', 47136, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
