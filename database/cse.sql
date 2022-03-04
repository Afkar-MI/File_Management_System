-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2021 at 06:12 AM
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
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `batch_name` (`batch_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`bid`, `batch_name`) VALUES
(1, 'E11'),
(2, 'E12'),
(3, 'E13'),
(4, 'E14'),
(5, 'E15'),
(6, 'E16'),
(7, 'E17'),
(8, 'E18'),
(9, 'E19');

-- --------------------------------------------------------

--
-- Table structure for table `file_details`
--

DROP TABLE IF EXISTS `file_details`;
CREATE TABLE IF NOT EXISTS `file_details` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `file_number` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `file_name` (`file_name`),
  UNIQUE KEY `file_number` (`file_number`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_details`
--

INSERT INTO `file_details` (`fid`, `file_number`, `file_name`) VALUES
(23, '02', 'Lecture Notes'),
(22, '01', 'Syllabus'),
(5, '03', 'Practical lab sheets, model answers, marking scheme'),
(6, '04', 'Copies of the best, average, weakest lab reports for each lab'),
(7, '05', 'Assignments, model answers, marking scheme'),
(8, '06', 'Copies of the best, average, weakest assignment answers'),
(9, '07', 'Peer review report'),
(10, '08', 'Summary of the student feedback for lecture/ practical'),
(11, '09', 'Attendance'),
(12, '10', 'Lecture/ practical registry'),
(13, '11', 'Copies of the Moodle pages'),
(14, '12', 'Continuous assessment marks'),
(15, '13.1', 'Exam paper'),
(16, '13.2', 'Model answers and marking scheme'),
(17, '14', 'Moderation report'),
(18, '15', '2nd marking report'),
(19, '16', 'Copies of the best, average, weakest exam answers'),
(20, '17', 'Final grading with distribution chart'),
(21, '18', 'Course review form');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `subject_code` (`subject_code`),
  UNIQUE KEY `subject_name` (`subject_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `subject_code`, `subject_name`) VALUES
(1, 'CS13001', 'INTRODUCTION TO COMPUTING'),
(2, 'CS32080', 'COMPUTER PROGRAMMING'),
(3, 'CS33001', 'COMPUTER  ARCHITECTURE'),
(4, 'CS43002', 'OPERATING SYSTEMS'),
(5, 'CS53001', 'COMPUTER NETWORKS'),
(6, 'CS53003', 'DATA STRUCTURES AND ALGORITHMS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
