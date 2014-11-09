-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2014 at 06:11 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs252`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `announcement` text NOT NULL,
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`date`, `course_name`, `course_code`, `announcement`, `topic`) VALUES
('2014-11-06 15:53:05', 'Computing Laboratory', 'cs252', 'this is my first announcement', 'Announcement 1'),
('2014-11-06 15:53:36', 'Computing Laboratory', 'cs252', 'this is my second announcement', 'Announcement 2'),
('2014-11-06 15:54:21', 'Computing Laboratory', 'cs252', 'this is my third announcement', 'Announcement 3'),
('2014-11-06 15:56:31', 'Operating Systems', 'cs330', 'this is my first announcement of cs330', 'Announcement 1'),
('2014-11-06 16:53:39', 'Algo', 'cs340', 'bla bla', 'bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `course_instructor`
--

CREATE TABLE IF NOT EXISTS `course_instructor` (
  `instructor_name` varchar(255) NOT NULL,
  `instructor_username` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `no_of_ta` int(255) NOT NULL,
  `test1_weightage` int(100) NOT NULL DEFAULT '0',
  `test1_date` date DEFAULT NULL,
  `test2_weightage` int(100) NOT NULL DEFAULT '0',
  `test2_date` date DEFAULT NULL,
  `test3_weightage` int(100) NOT NULL DEFAULT '0',
  `test3_date` date DEFAULT NULL,
  `test4_weightage` int(100) NOT NULL DEFAULT '0',
  `test4_date` date DEFAULT NULL,
  `test5_weightage` int(100) NOT NULL DEFAULT '0',
  `test5_date` date DEFAULT NULL,
  `assignment1_weightage` int(100) NOT NULL DEFAULT '0',
  `assignment1_date` date DEFAULT NULL,
  `assignment2_weightage` int(100) NOT NULL DEFAULT '0',
  `assignment2_date` date DEFAULT NULL,
  `assignment3_weightage` int(100) NOT NULL DEFAULT '0',
  `assignment3_date` date DEFAULT NULL,
  `assignment4_weightage` int(100) NOT NULL DEFAULT '0',
  `assignment4_date` date DEFAULT NULL,
  `assignment5_weightage` int(100) NOT NULL DEFAULT '0',
  `assignment5_date` date DEFAULT NULL,
  `mid_sem_weightage` int(100) NOT NULL DEFAULT '0',
  `mid_sem_date` date DEFAULT NULL,
  `end_sem_weightage` int(100) NOT NULL DEFAULT '0',
  `end_sem_date` date DEFAULT NULL,
  PRIMARY KEY (`instructor_name`,`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_instructor`
--

INSERT INTO `course_instructor` (`instructor_name`, `instructor_username`, `course_name`, `course_code`, `no_of_ta`, `test1_weightage`, `test1_date`, `test2_weightage`, `test2_date`, `test3_weightage`, `test3_date`, `test4_weightage`, `test4_date`, `test5_weightage`, `test5_date`, `assignment1_weightage`, `assignment1_date`, `assignment2_weightage`, `assignment2_date`, `assignment3_weightage`, `assignment3_date`, `assignment4_weightage`, `assignment4_date`, `assignment5_weightage`, `assignment5_date`, `mid_sem_weightage`, `mid_sem_date`, `end_sem_weightage`, `end_sem_date`) VALUES
('Arnab Bhattacharya', 'arnabb', 'Computing Laboratory', 'cs252', 10, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 20, NULL, 30, NULL),
('Mainak Chaudhary', 'mainakc', 'Operating Systems', 'cs330', 4, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 0, NULL, 0, NULL),
('Piyush K Kurur', 'pkurur', 'Algorithm 2', 'cs345', 5, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 0, NULL, 0, NULL),
('Sunil Simon', 'simon', 'Theory Of Computation', 'cs340', 5, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, '0000-00-00', 10, NULL, 10, NULL, 10, NULL, 10, NULL),
('Vinay Nimboodari', 'vinayn', 'Computer Graphics', 'cs360', 10, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 10, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_ta`
--

CREATE TABLE IF NOT EXISTS `course_ta` (
  `ta_name` varchar(255) NOT NULL,
  `ta_username` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  PRIMARY KEY (`ta_name`,`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_ta`
--

INSERT INTO `course_ta` (`ta_name`, `ta_username`, `course_name`, `course_code`) VALUES
('Shashwat Chandra', 'shashwat', 'Computing Laboratory', 'CS252');

-- --------------------------------------------------------

--
-- Table structure for table `cs252`
--

CREATE TABLE IF NOT EXISTS `cs252` (
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `test1_marks` int(100) NOT NULL DEFAULT '0',
  `test2_marks` int(100) NOT NULL DEFAULT '0',
  `test3_marks` int(100) NOT NULL DEFAULT '0',
  `test4_marks` int(100) NOT NULL DEFAULT '0',
  `test5_marks` int(100) NOT NULL DEFAULT '0',
  `assignment1_name` text NOT NULL,
  `assignment1_link` text NOT NULL,
  `assignment1_marks` int(100) NOT NULL DEFAULT '0',
  `assignment2_name` text NOT NULL,
  `assignment2_link` text NOT NULL,
  `assignment2_marks` int(100) NOT NULL DEFAULT '0',
  `assignment3_name` text NOT NULL,
  `assignment3_link` text NOT NULL,
  `assignment3_marks` int(100) NOT NULL DEFAULT '0',
  `assignment4_name` text NOT NULL,
  `assignment4_link` text NOT NULL,
  `assignment4_marks` int(100) NOT NULL DEFAULT '0',
  `assignment5_name` text NOT NULL,
  `assignment5_link` text NOT NULL,
  `assignment5_marks` int(100) NOT NULL DEFAULT '0',
  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
  `grade` varchar(2) DEFAULT '0',
  `max_marks` int(10) DEFAULT '100',
  `marks_obtained` int(10) DEFAULT '0',
  PRIMARY KEY (`student_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs252`
--

INSERT INTO `cs252` (`student_name`, `student_username`, `test1_marks`, `test2_marks`, `test3_marks`, `test4_marks`, `test5_marks`, `assignment1_name`, `assignment1_link`, `assignment1_marks`, `assignment2_name`, `assignment2_link`, `assignment2_marks`, `assignment3_name`, `assignment3_link`, `assignment3_marks`, `assignment4_name`, `assignment4_link`, `assignment4_marks`, `assignment5_name`, `assignment5_link`, `assignment5_marks`, `mid_sem_marks`, `end_sem_marks`, `grade`, `max_marks`, `marks_obtained`) VALUES
('Nikhil Patil', 'nikhilp', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0),
('Priyaranjan', 'pranjan', 10, 10, 10, 10, 10, '', '', 10, '', '', 10, '', '', 10, '', '', 10, '', '', 10, 0, 0, '0', 100, 0),
('Raunak Shamnani', 'raunak', 10, 10, 10, 10, 10, '', '', 10, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cs330`
--

CREATE TABLE IF NOT EXISTS `cs330` (
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `test1_marks` int(100) NOT NULL DEFAULT '0',
  `test2_marks` int(100) NOT NULL DEFAULT '0',
  `test3_marks` int(100) NOT NULL DEFAULT '0',
  `test4_marks` int(100) NOT NULL DEFAULT '0',
  `test5_marks` int(100) NOT NULL DEFAULT '0',
  `assignment1_name` text NOT NULL,
  `assignment1_link` text NOT NULL,
  `assignment1_marks` int(100) NOT NULL DEFAULT '0',
  `assignment2_name` text NOT NULL,
  `assignment2_link` text NOT NULL,
  `assignment2_marks` int(100) NOT NULL DEFAULT '0',
  `assignment3_name` text NOT NULL,
  `assignment3_link` text NOT NULL,
  `assignment3_marks` int(100) NOT NULL DEFAULT '0',
  `assignment4_name` text NOT NULL,
  `assignment4_link` text NOT NULL,
  `assignment4_marks` int(100) NOT NULL DEFAULT '0',
  `assignment5_name` text NOT NULL,
  `assignment5_link` text NOT NULL,
  `assignment5_marks` int(100) NOT NULL DEFAULT '0',
  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
  `grade` varchar(2) DEFAULT '0',
  `max_marks` int(10) DEFAULT '100',
  `marks_obtained` int(10) DEFAULT '0',
  PRIMARY KEY (`student_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs330`
--

INSERT INTO `cs330` (`student_name`, `student_username`, `test1_marks`, `test2_marks`, `test3_marks`, `test4_marks`, `test5_marks`, `assignment1_name`, `assignment1_link`, `assignment1_marks`, `assignment2_name`, `assignment2_link`, `assignment2_marks`, `assignment3_name`, `assignment3_link`, `assignment3_marks`, `assignment4_name`, `assignment4_link`, `assignment4_marks`, `assignment5_name`, `assignment5_link`, `assignment5_marks`, `mid_sem_marks`, `end_sem_marks`, `grade`, `max_marks`, `marks_obtained`) VALUES
('Nikhil Patil', 'nikhilp', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0),
('Priyaranjan', 'pranjan', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0),
('Raunak Shamnani', 'raunak', 10, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cs340`
--

CREATE TABLE IF NOT EXISTS `cs340` (
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `test1_marks` int(100) NOT NULL DEFAULT '0',
  `test2_marks` int(100) NOT NULL DEFAULT '0',
  `test3_marks` int(100) NOT NULL DEFAULT '0',
  `test4_marks` int(100) NOT NULL DEFAULT '0',
  `test5_marks` int(100) NOT NULL DEFAULT '0',
  `assignment1_name` text NOT NULL,
  `assignment1_link` text NOT NULL,
  `assignment1_marks` int(100) NOT NULL DEFAULT '0',
  `assignment2_name` text NOT NULL,
  `assignment2_link` text NOT NULL,
  `assignment2_marks` int(100) NOT NULL DEFAULT '0',
  `assignment3_name` text NOT NULL,
  `assignment3_link` text NOT NULL,
  `assignment3_marks` int(100) NOT NULL DEFAULT '0',
  `assignment4_name` text NOT NULL,
  `assignment4_link` text NOT NULL,
  `assignment4_marks` int(100) NOT NULL DEFAULT '0',
  `assignment5_name` text NOT NULL,
  `assignment5_link` text NOT NULL,
  `assignment5_marks` int(100) NOT NULL DEFAULT '0',
  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
  `grade` varchar(2) DEFAULT '0',
  `max_marks` int(10) DEFAULT '100',
  `marks_obtained` int(10) DEFAULT '0',
  PRIMARY KEY (`student_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs340`
--

INSERT INTO `cs340` (`student_name`, `student_username`, `test1_marks`, `test2_marks`, `test3_marks`, `test4_marks`, `test5_marks`, `assignment1_name`, `assignment1_link`, `assignment1_marks`, `assignment2_name`, `assignment2_link`, `assignment2_marks`, `assignment3_name`, `assignment3_link`, `assignment3_marks`, `assignment4_name`, `assignment4_link`, `assignment4_marks`, `assignment5_name`, `assignment5_link`, `assignment5_marks`, `mid_sem_marks`, `end_sem_marks`, `grade`, `max_marks`, `marks_obtained`) VALUES
('Nikhil Patil', 'nikhilp', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cs345`
--

CREATE TABLE IF NOT EXISTS `cs345` (
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `test1_marks` int(100) NOT NULL DEFAULT '0',
  `test2_marks` int(100) NOT NULL DEFAULT '0',
  `test3_marks` int(100) NOT NULL DEFAULT '0',
  `test4_marks` int(100) NOT NULL DEFAULT '0',
  `test5_marks` int(100) NOT NULL DEFAULT '0',
  `assignment1_name` text NOT NULL,
  `assignment1_link` text NOT NULL,
  `assignment1_marks` int(100) NOT NULL DEFAULT '0',
  `assignment2_name` text NOT NULL,
  `assignment2_link` text NOT NULL,
  `assignment2_marks` int(100) NOT NULL DEFAULT '0',
  `assignment3_name` text NOT NULL,
  `assignment3_link` text NOT NULL,
  `assignment3_marks` int(100) NOT NULL DEFAULT '0',
  `assignment4_name` text NOT NULL,
  `assignment4_link` text NOT NULL,
  `assignment4_marks` int(100) NOT NULL DEFAULT '0',
  `assignment5_name` text NOT NULL,
  `assignment5_link` text NOT NULL,
  `assignment5_marks` int(100) NOT NULL DEFAULT '0',
  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
  `grade` varchar(2) DEFAULT '0',
  `max_marks` int(10) DEFAULT '100',
  `marks_obtained` int(10) DEFAULT '0',
  PRIMARY KEY (`student_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs345`
--

INSERT INTO `cs345` (`student_name`, `student_username`, `test1_marks`, `test2_marks`, `test3_marks`, `test4_marks`, `test5_marks`, `assignment1_name`, `assignment1_link`, `assignment1_marks`, `assignment2_name`, `assignment2_link`, `assignment2_marks`, `assignment3_name`, `assignment3_link`, `assignment3_marks`, `assignment4_name`, `assignment4_link`, `assignment4_marks`, `assignment5_name`, `assignment5_link`, `assignment5_marks`, `mid_sem_marks`, `end_sem_marks`, `grade`, `max_marks`, `marks_obtained`) VALUES
('Nikhil Patil', 'nikhilp', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0),
('Raunak Shamnani', 'raunak', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cs360`
--

CREATE TABLE IF NOT EXISTS `cs360` (
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `test1_marks` int(100) NOT NULL DEFAULT '0',
  `test2_marks` int(100) NOT NULL DEFAULT '0',
  `test3_marks` int(100) NOT NULL DEFAULT '0',
  `test4_marks` int(100) NOT NULL DEFAULT '0',
  `test5_marks` int(100) NOT NULL DEFAULT '0',
  `assignment1_name` text NOT NULL,
  `assignment1_link` text NOT NULL,
  `assignment1_marks` int(100) NOT NULL DEFAULT '0',
  `assignment2_name` text NOT NULL,
  `assignment2_link` text NOT NULL,
  `assignment2_marks` int(100) NOT NULL DEFAULT '0',
  `assignment3_name` text NOT NULL,
  `assignment3_link` text NOT NULL,
  `assignment3_marks` int(100) NOT NULL DEFAULT '0',
  `assignment4_name` text NOT NULL,
  `assignment4_link` text NOT NULL,
  `assignment4_marks` int(100) NOT NULL DEFAULT '0',
  `assignment5_name` text NOT NULL,
  `assignment5_link` text NOT NULL,
  `assignment5_marks` int(100) NOT NULL DEFAULT '0',
  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
  `grade` varchar(2) DEFAULT '0',
  `max_marks` int(10) DEFAULT '100',
  `marks_obtained` int(10) DEFAULT '0',
  PRIMARY KEY (`student_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs360`
--

INSERT INTO `cs360` (`student_name`, `student_username`, `test1_marks`, `test2_marks`, `test3_marks`, `test4_marks`, `test5_marks`, `assignment1_name`, `assignment1_link`, `assignment1_marks`, `assignment2_name`, `assignment2_link`, `assignment2_marks`, `assignment3_name`, `assignment3_link`, `assignment3_marks`, `assignment4_name`, `assignment4_link`, `assignment4_marks`, `assignment5_name`, `assignment5_link`, `assignment5_marks`, `mid_sem_marks`, `end_sem_marks`, `grade`, `max_marks`, `marks_obtained`) VALUES
('Nikhil Patil', 'nikhilp', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0),
('Priyaranjan', 'pranjan', 0, 0, 0, 0, 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, '0', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tors` varchar(2) NOT NULL,
  `roll` int(10) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`, `tors`, `roll`, `phone`) VALUES
('Nikhil Patil', 'nikhilp', 'nikhilp@iitk.ac.in', 'nikhilp', 's', 12470, NULL),
('Priyaranjan', 'pranjan', 'pranjan@iitk.ac.in', 'pranjan', 's', 12519, '9621989900'),
('Raunak Shamnani', 'raunak', 'raunak@iitk.ac.in', 'raunak', 's', 12562, '9621989900');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
