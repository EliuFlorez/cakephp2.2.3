-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 12:02 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `department_count` int(11) NOT NULL,
  `registration_number` varchar(100) DEFAULT NULL,
  `location` text NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `college_name` (`company_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `department_count`, `registration_number`, `location`, `contact_number`, `is_deleted`, `created`, `modified`) VALUES
(4, 'Sandip Pvt Ltd', 4, '15453185RWEV548ac1', 'mumbai', '9892684226', 0, '2012-12-09 19:10:45', '2012-12-09 21:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `user_count` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `company_id`, `department_name`, `user_count`, `is_deleted`, `created`, `modified`) VALUES
(11, 4, 'Management', 1, 0, '2012-12-09 19:10:45', '2012-12-09 21:33:23'),
(12, 4, 'HR', 0, 0, '2012-12-09 19:10:45', '2012-12-09 21:33:23'),
(13, 4, 'Staff Members', 0, 0, '2012-12-09 19:10:45', '2012-12-09 21:33:23'),
(14, 4, 'Manager', 0, 0, '2012-12-09 21:32:02', '2012-12-09 21:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `allow_register` tinyint(1) NOT NULL DEFAULT '0',
  `user_count` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_group` (`group_name`,`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `slug`, `allow_register`, `user_count`, `is_deleted`, `created`, `modified`) VALUES
(1, 'Admin', 'admin', 0, 1, 0, '2012-12-09 00:42:27', '2012-12-15 15:14:33'),
(2, 'Teacher', 'teacher', 1, 1, 0, '2012-12-09 00:42:57', '2012-12-15 15:14:56'),
(3, 'Student', 'student', 1, 1, 0, '2012-12-15 15:08:45', '2012-12-15 15:14:43'),
(4, 'Parent', 'parent', 1, 0, 0, '2012-12-15 15:20:00', '2012-12-15 15:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `postal_address` text NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `department_id` int(11) NOT NULL,
  `temporary_password` varchar(255) DEFAULT NULL,
  `performance_points` int(11) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `profile_image`, `date_of_birth`, `gender`, `email_address`, `mobile_number`, `postal_address`, `is_active`, `is_deleted`, `department_id`, `temporary_password`, `performance_points`, `fax`, `telephone_no`, `created`, `modified`) VALUES
(1, 1, 'admin', 'e7b274e25994ffd87a8eb4b4bcfcbc44eee7e5eb', 'Admin', 'Raghunath', 'Ghadage', '', '1992-10-23', 'Male', 'ghadagesandip@gmail.com', '98515644641', 'mumbai', 1, 0, 11, 'e84e54ccb50f', 0, '', '', '2012-12-09 00:53:19', '2012-12-15 23:39:34'),
(8, 2, 'Teacher 2', '926155e0b5b5cb7ce991085be57cdf93559792d6', 'Teacher', NULL, 'Teacher 1', NULL, '2012-12-15', 'Male', '', '', '', 1, 0, 0, NULL, NULL, NULL, NULL, '2012-12-15 22:09:27', '2012-12-15 22:09:27'),
(9, 3, 'pushpa', '4c0e3b8e5112c1f5e75608f58655799d40310cd1', 'Pushpa', NULL, 'Ghadge', NULL, '1992-05-27', 'Female', '', '', '', 1, 0, 0, NULL, NULL, NULL, NULL, '2012-12-15 22:16:56', '2012-12-15 22:16:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
