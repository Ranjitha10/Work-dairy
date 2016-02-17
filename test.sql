-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2015 at 05:17 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `13ise40`
--

CREATE TABLE IF NOT EXISTS `13ise40` (
  `pid` varchar(10) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `topics` varchar(100) DEFAULT NULL,
  `attendence` varchar(10) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `13ise40`
--

INSERT INTO `13ise40` (`pid`, `date`, `semester`, `section`, `subject`, `topics`, `attendence`, `remarks`) VALUES
('13ISE40', '12/16/2015', '6', 'B', 'oop', 'inheritance', '30', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('pooja', 'poo123'),
('', ''),
('12POO34', 'abcdefghij'),
('45PKA67', 'pradnyak'),
('11PPP11', 'pppppppp'),
('13PPP45', 'jjjjjjjj'),
('13ISE44', 'kapsepradn'),
('13MCA01', 'password'),
('11PUJ22', '12345678'),
('15MCA29', 'password'),
('13ISE40', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `alldata`
--

CREATE TABLE IF NOT EXISTS `alldata` (
  `pid` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `topics` varchar(100) NOT NULL,
  `attendence` varchar(10) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldata`
--

INSERT INTO `alldata` (`pid`, `date`, `semester`, `section`, `subject`, `topics`, `attendence`, `remarks`) VALUES
('13ISE40', '12/16/2015', '6', 'B', 'oop', 'inheritance', '30', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_uname` varchar(30) NOT NULL,
  `f_pass` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_uname`, `f_pass`) VALUES
('pooja', 'pn123');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `password`, `fname`, `lname`, `department`, `phone`, `email`, `date`) VALUES
('13ISE40', '12345678', 'pradnya', '', 'CSE', '9877654321', 'pk@yahoo.in', '18/11/2015');
