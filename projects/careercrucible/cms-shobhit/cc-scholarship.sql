-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 09:00 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc-scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_application_list`
--

DROP TABLE IF EXISTS `scholarship_application_list`;
CREATE TABLE IF NOT EXISTS `scholarship_application_list` (
  `scholarship_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `application_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`scholarship_id`,`users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_college_list`
--

DROP TABLE IF EXISTS `scholarship_college_list`;
CREATE TABLE IF NOT EXISTS `scholarship_college_list` (
  `scholarship_id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  PRIMARY KEY (`scholarship_id`,`clg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_list`
--

DROP TABLE IF EXISTS `scholarship_list`;
CREATE TABLE IF NOT EXISTS `scholarship_list` (
  `scholarship_id` int(11) NOT NULL AUTO_INCREMENT,
  `scholarship_name` varchar(255) NOT NULL,
  `scholarship_description` longtext NOT NULL,
  `scholarship_amount` int(11) NOT NULL,
  `scholarship_deadline` date NOT NULL,
  PRIMARY KEY (`scholarship_id`),
  UNIQUE KEY `scholarship_name` (`scholarship_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
