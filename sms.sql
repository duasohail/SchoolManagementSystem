-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2019 at 06:52 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(22, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `std_record`
--

CREATE TABLE IF NOT EXISTS `std_record` (
  `std_id` int(15) NOT NULL AUTO_INCREMENT,
  `std_rollno` int(15) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_city` varchar(100) NOT NULL,
  `std_contact` int(11) NOT NULL,
  `std_course` varchar(50) NOT NULL,
  `std_profile` int(100) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `std_record`
--

INSERT INTO `std_record` (`std_id`, `std_rollno`, `std_name`, `std_city`, `std_contact`, `std_course`, `std_profile`) VALUES
(1, 22, 'dua khan', 'hyderabad', 1234567, 'graphic designing', 0),
(2, 35, 'isbah', 'kotri', 45789674, 'web designing', 0),
(3, 12, 'anousha', 'hyderabad', 657575, 'web developing', 0);
