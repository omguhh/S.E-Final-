-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2015 at 08:56 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(12) NOT NULL,
  `admin_name` varchar(35) NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `admin_email` varchar(35) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_password` varchar(18) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `user_id`, `admin_password`) VALUES
('arthedian', 'tarun shrivastava', 5050505, 'tarun@gmail.com', 2, 'tarun123123'),
('samah', 'usamah siddiqui', 50231231, 'uzi@apple.com', 3, 'usamah123'),
('yasdqueen', 'yasmine fadel', 509999, 'yas_fad@gmail.com', 1, 'yasmine123');

-- --------------------------------------------------------

--
-- Table structure for table `calender_meeting`
--

CREATE TABLE IF NOT EXISTS `calender_meeting` (
  `fa_name` varchar(45) NOT NULL,
  `rc_id` varchar(12) NOT NULL,
  `meeting_title` varchar(15) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_content` varchar(150) NOT NULL,
  PRIMARY KEY (`fa_name`,`rc_id`,`meeting_date`),
  KEY `rc_id` (`rc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calender_meeting`
--

INSERT INTO `calender_meeting` (`fa_name`, `rc_id`, `meeting_title`, `meeting_date`, `meeting_content`) VALUES
('ayesha sheriff', 'shamu', 'Cash Money', '2015-02-28', 'Discuss Cash moneh'),
('Mohammed Shaath', 'casper69', 'A meeting', '2015-03-03', 'gief me moar muney');

-- --------------------------------------------------------

--
-- Table structure for table `financial_advisor`
--

CREATE TABLE IF NOT EXISTS `financial_advisor` (
  `fa_id` varchar(12) NOT NULL,
  `fa_name` varchar(45) NOT NULL,
  `fa_email` varchar(45) NOT NULL,
  `fa_address` varchar(65) NOT NULL,
  `fa_phone` int(11) NOT NULL,
  `fa_rating` set('1-star','2-star','3-star','4-star','5-star') NOT NULL,
  `years_experience` int(2) NOT NULL,
  `certificate` varchar(65) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fa_password` varchar(18) NOT NULL,
  PRIMARY KEY (`fa_id`),
  KEY `fa_id` (`fa_id`),
  KEY `fa_name` (`fa_name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_advisor`
--

INSERT INTO `financial_advisor` (`fa_id`, `fa_name`, `fa_email`, `fa_address`, `fa_phone`, `fa_rating`, `years_experience`, `certificate`, `user_id`, `fa_password`) VALUES
('ayesha', 'ayesha sheriff', 'ayesha@gmail.com', 'IC', 505989098, '4-star', 16, 'dubai', 101, 'ayesha123'),
('hakim', 'hakim moti', 'hm11@gmail.com', 'ahome', 12389, '5-star', 11, 'India', 103, 'haki123'),
('ms75', 'Mohammed Shaath', 'shaath@yahoo.com', 'Sharjah', 812309, '5-star', 4, 'New York', 102, 'shaath123'),
('sonia_fa', 'sonia santa', 'soniaisasanta@gmail.com', 'home', 59834732, '5-star', 4, 'heriot watt', 100, 'santa123');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE IF NOT EXISTS `purchase_history` (
  `client_name` varchar(45) NOT NULL,
  `fa_name` varchar(45) NOT NULL,
  `stock_name` varchar(15) NOT NULL,
  `time_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`client_name`,`fa_name`,`stock_name`),
  KEY `stock_id_fk` (`stock_name`),
  KEY `date_brought` (`time_purchased`),
  KEY `date_brought_2` (`time_purchased`),
  KEY `fa_name` (`fa_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`client_name`, `fa_name`, `stock_name`, `time_purchased`, `quantity`) VALUES
('Kasra Ah', 'ayesha sheriff', 'apple', '2015-03-22 16:55:39', 22),
('naiyarah hussain', 'sonia santa', 'airware', '2015-03-22 16:55:20', 4),
('naiyarah hussain', 'sonia santa', 'hrm', '2015-03-22 16:54:59', 9);

-- --------------------------------------------------------

--
-- Table structure for table `registered_client`
--

CREATE TABLE IF NOT EXISTS `registered_client` (
  `rc_id` varchar(12) NOT NULL,
  `rc_name` varchar(45) NOT NULL,
  `rc_email` varchar(45) NOT NULL,
  `rc_address` varchar(65) NOT NULL,
  `rc_phone` int(11) NOT NULL,
  `cash_balance` int(11) NOT NULL,
  `fa_name_fk` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_password` varchar(18) NOT NULL,
  PRIMARY KEY (`rc_id`),
  UNIQUE KEY `wallet_id` (`cash_balance`),
  KEY `fa_name_fk` (`fa_name_fk`),
  KEY `rc_name` (`rc_name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_client`
--

INSERT INTO `registered_client` (`rc_id`, `rc_name`, `rc_email`, `rc_address`, `rc_phone`, `cash_balance`, `fa_name_fk`, `user_id`, `client_password`) VALUES
('aclient', 'clientdude', 'clientdude@email.com', '69th street, 4th floor, 2nd appartment, 0', 81981203, 382391, 'sonia santa', 1004, 'client123'),
('casper69', 'Kasra Ah', 'casper@gmail.com', 'mirdiff', 98129478, 696969, 'Mohammed Shaath', 1002, 'kasra123'),
('nai', 'naiyarah hussain', 'nai_nai@live.com', 'nailand', 58237479, 12938, 'sonia santa', 1001, 'naiyarah123'),
('shamu', 'shamoel khan', 'bollywood@live.com', 'muhaisna', 57879012, 88723, 'ayesha sheriff', 1003, 'shamoel123'),
('sm75', 'shoaib mawani', 'sm143@live.com', 'Nahda', 50505869, 13098, 'hakim moti', 1000, 'shoaib123');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_name` varchar(10) NOT NULL,
  PRIMARY KEY (`role_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_name`) VALUES
('admin'),
('client'),
('FA');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `stock_name` varchar(15) NOT NULL,
  `stock_price` int(11) NOT NULL,
  `fa_name` varchar(45) NOT NULL,
  `date_bookmarked` date NOT NULL,
  PRIMARY KEY (`stock_name`,`fa_name`,`date_bookmarked`),
  UNIQUE KEY `fa_id` (`fa_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_name`, `stock_price`, `fa_name`, `date_bookmarked`) VALUES
('airware', 91, 'hakim moti', '2015-03-27'),
('apple', 58, 'ayesha sheriff', '2015-02-28'),
('samsung', 82, 'sonia santa', '2015-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE IF NOT EXISTS `user_id` (
  `user_id` int(11) NOT NULL,
  `role` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`user_id`, `role`) VALUES
(1, 'admin'),
(2, 'admin'),
(3, 'admin'),
(4, 'admin'),
(5, 'admin'),
(6, 'admin'),
(7, 'admin'),
(8, 'admin'),
(9, 'admin'),
(10, 'admin'),
(1000, 'client'),
(1001, 'client'),
(1002, 'client'),
(1003, 'client'),
(1004, 'client'),
(1005, 'client'),
(1006, 'client'),
(1007, 'client'),
(1008, 'client'),
(1009, 'client'),
(1010, 'client'),
(1011, 'client'),
(1012, 'client'),
(1013, 'client'),
(1014, 'client'),
(1015, 'client'),
(1016, 'client'),
(1017, 'client'),
(1018, 'client'),
(1019, 'client'),
(1020, 'client'),
(1021, 'client'),
(100, 'FA'),
(101, 'FA'),
(102, 'FA'),
(103, 'FA'),
(104, 'FA'),
(105, 'FA'),
(106, 'FA'),
(107, 'FA'),
(108, 'FA'),
(109, 'FA'),
(110, 'FA'),
(111, 'FA'),
(112, 'FA'),
(113, 'FA'),
(114, 'FA'),
(115, 'FA'),
(116, 'FA'),
(117, 'FA'),
(118, 'FA'),
(119, 'FA');

-- --------------------------------------------------------

--
-- Table structure for table `user_score`
--

CREATE TABLE IF NOT EXISTS `user_score` (
  `client_name` varchar(45) NOT NULL,
  `time_of_score` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_score` int(11) DEFAULT NULL,
  PRIMARY KEY (`client_name`,`time_of_score`),
  KEY `client_name` (`client_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_id` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calender_meeting`
--
ALTER TABLE `calender_meeting`
  ADD CONSTRAINT `calender_meeting_ibfk_1` FOREIGN KEY (`fa_name`) REFERENCES `financial_advisor` (`fa_name`),
  ADD CONSTRAINT `calender_meeting_ibfk_2` FOREIGN KEY (`rc_id`) REFERENCES `registered_client` (`rc_id`);

--
-- Constraints for table `financial_advisor`
--
ALTER TABLE `financial_advisor`
  ADD CONSTRAINT `financial_advisor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_id` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD CONSTRAINT `purchase_history_ibfk_1` FOREIGN KEY (`client_name`) REFERENCES `registered_client` (`rc_name`),
  ADD CONSTRAINT `purchase_history_ibfk_2` FOREIGN KEY (`fa_name`) REFERENCES `financial_advisor` (`fa_name`);

--
-- Constraints for table `registered_client`
--
ALTER TABLE `registered_client`
  ADD CONSTRAINT `registered_client_ibfk_1` FOREIGN KEY (`fa_name_fk`) REFERENCES `financial_advisor` (`fa_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_client_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_id` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`fa_name`) REFERENCES `financial_advisor` (`fa_name`);

--
-- Constraints for table `user_id`
--
ALTER TABLE `user_id`
  ADD CONSTRAINT `user_id_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_name`);

--
-- Constraints for table `user_score`
--
ALTER TABLE `user_score`
  ADD CONSTRAINT `user_score_ibfk_1` FOREIGN KEY (`client_name`) REFERENCES `purchase_history` (`client_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
