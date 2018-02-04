-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2014 at 02:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `userto` varchar(255) NOT NULL,
  `userfrom` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status1` int(11) NOT NULL,
  `status2` int(11) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `userto`, `userfrom`, `subject`, `message`, `status`, `sentdate`, `status1`, `status2`) VALUES
(58, 'subhasree', 'somnath', 'demo', 'hello..', 'read', '2014-10-14 23:46:15', 0, 0),
(59, 'arindam', 'somnath', 'demo1', 'hi..', 'unread', '2014-10-14 23:46:40', 1, 0),
(60, 'shreyos', 'somnath', 'demo2', 'byee..', 'unread', '2014-10-14 23:47:07', 0, 0),
(61, 'arindam', 'subhasree', 'sm', 'hi..kamon achis?', 'read', '2014-10-14 23:47:55', 1, 0),
(62, 'arindam', 'subhasree', 'sm', 'hi..kamon achis?', 'read', '2014-10-14 23:47:56', 1, 0),
(63, 'somnath', 'subhasree', 'sm1', 'hi..how r u ?', 'read', '2014-10-14 23:48:28', 0, 1),
(64, 'somnath', 'arindam', 'demo', 'hi... am arin', 'unread', '2014-10-14 23:49:19', 0, 0),
(65, 'subhasree', 'arindam', 'demo1', 'ki re .. kamon achis?', 'unread', '2014-10-14 23:49:44', 1, 0),
(66, 'somnath', 'somnath', 'demo', 'hello', 'unread', '2014-10-14 23:56:20', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
