-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2015 at 05:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `UserName` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`UserName`) VALUES
('abc@gmail.com'),
('ayesha@gmail.com'),
('zaira@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `JobTitle` varchar(20) NOT NULL,
  `CompanyName` varchar(15) NOT NULL,
  `LogoImage` varchar(10) NOT NULL,
  `City` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobTitle`, `CompanyName`, `LogoImage`, `City`) VALUES
('Software Engineer', 'Netsol', '', 'Lahore'),
('Software Engineer', 'Netsol', '', 'Lahore'),
('Hardware Engineer', 'Orange', '', 'islamabad'),
('Computer Engineer', 'Microsoft', '', 'Peshawar'),
('Programmer', 'Google', '', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `mem`
--

CREATE TABLE IF NOT EXISTS `mem` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailID` varchar(35) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Day` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mem`
--

INSERT INTO `mem` (`FirstName`, `LastName`, `EmailID`, `Username`, `Password`, `Month`, `Day`, `Year`, `Gender`) VALUES
('Ayesha', 'Sikander', 'ayesha@gmail.com', 'ayesha_s', 'ayesha123', '', 0, 0, 'on'),
('Ali', 'Abubakar', 'ali@gmail.com', 'ali_a', 'ali123', 'apr', 0, 0, 'on'),
('Ayehsa', 'sikander', 'ayesha123@yahoo.com', 'ayesha123', 'ayesha', 'may', 0, 0, 'on'),
('Zaira', 'Iqbal', 'zaira@yahoo.com', 'zaira_i', 'zaira123', 'dec', 0, 0, 'on'),
('Abcd', 'Efgh', 'abcdefgh', 'abcd_efgh', '123', 'dec', 0, 0, 'on'),
('Ayesha', 'Ayesha', 'ayesha123', 'ayesha1', '12345', 'may', 0, 0, 'on'),
('ayesha', 'sikander', '123', 'abcd', 'qwerty', 'dec', 0, 2007, 'Male'),
('abc', 'efg', 'abcdefg', 'ayesha', '123', 'june', 13, 2001, 'Male'),
('123', '2345', '12345', '1233', 'ddff', 'oct', 10, 1998, 'Male'),
('zaira', 'Iqbal', 'ayesha786', 'ayesha1_2', '123456', 'sep', 8, 2004, 'Male'),
('iffrah', 'irshad', 'iffrah_zaira', 'ayesha123456', 'vbnhfg', 'dec', 14, 2002, 'Female'),
('Ali', 'Ahmed', 'ali_ahmed', 'ali123', 'aliahmed', 'nov', 14, 2003, 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
