-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2012 at 01:04 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `blood_group` varchar(8) NOT NULL,
  `area` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `mob_no` varchar(30) NOT NULL,
  `dontn_date` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `temp` varchar(20) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`index`, `name`, `uname`, `pswd`, `dob`, `gender`, `blood_group`, `area`, `pin`, `city`, `state`, `weight`, `mob_no`, `dontn_date`, `email`, `temp`) VALUES
(5, 'sfdsfggg', 'sdsdfdfdd', '1234567', '6 02 2012', 'male', 'O+', 'sreekaryam', '695003', 'tvm', 'INKR', '223', '1234567892', '1 02 2012', 'rahulr92@gmail.com', ''),
(6, 'Ramesh', 'ramesh', 'ramu', '10 11 1985', 'male', 'A+', 'ulloor', '695003', 'tvm', 'INKR', '67', '9567647745', '12 1 2012', 'raagu@rahesh.com', ''),
(7, 'Mahesh', 'ramesh', 'ramu', '10 11 1985', 'male', 'A+', 'pattom', '695003', 'tvm', 'INKR', '67', '9567647745', '12 1 2012', 'raagu@rahesh.com', ''),
(8, 'Anu', 'ramesh', 'ramu', '10 11 1985', 'male', 'B-', 'chinnakada', '695003', 'kollam', 'INKR', '67', '9567647745', '12 1 2012', 'raagu@rahesh.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
