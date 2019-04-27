-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 11:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jc451631_liesa_art`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `num_kids` int(1) NOT NULL,
  `Event_name` varchar(100) NOT NULL,
  `Total_booking_cost` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Phone_num` int(100) NOT NULL,
  `Query` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Image_name` varchar(200) NOT NULL,
  `Event_name` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vister`
--

CREATE TABLE IF NOT EXISTS `vister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `vister`
--

INSERT INTO `vister` (`id`, `ip`) VALUES
(1, '192.168.1.1'),
(2, '192.168.1.1'),
(3, '192.168.1.1'),
(4, '192.168.1.1'),
(5, '192.168.1.1'),
(6, '192.168.1.1'),
(7, '192.168.1.1'),
(8, '192.168.1.1'),
(9, '192.168.1.1'),
(10, '192.168.1.1'),
(11, '192.168.1.1'),
(12, '192.168.1.1'),
(13, '192.168.1.1'),
(14, '192.168.1.1'),
(15, '192.168.1.1'),
(16, '192.168.1.1'),
(17, '192.168.1.1'),
(18, '192.168.1.1'),
(19, '192.168.1.1'),
(20, '192.168.1.1'),
(21, '192.168.1.1'),
(22, '192.168.1.1');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `work_desc` varchar(500) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `age_group` varchar(50) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `price`, `work_desc`, `event_date`, `duration`, `age_group`, `pic_url`) VALUES
(13, 'zx', '1321', 'sada', '2018-09-06', '5', '11-16', './pics/5ba7e62c74d82.jpg'),
(14, 'asd', '323', 'asdas', '2018-09-04', '21', '10-10', './pics/5ba7e6639dc17.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
