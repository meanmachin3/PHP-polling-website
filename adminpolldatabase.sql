-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2014 at 12:19 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adminpolldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `vote_result`
--

CREATE TABLE IF NOT EXISTS `vote_result` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(50) NOT NULL,
  `vote_count` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vote_result`
--

INSERT INTO `vote_result` (`id`, `candidate_name`, `vote_count`) VALUES
(1, 'Sharad Pawar', 0),
(2, 'Manmohan Singh', 1),
(3, 'Rahul Gandhi', 0),
(4, 'Arvind Kejriwal', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
