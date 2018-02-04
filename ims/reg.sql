-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2014 at 02:21 AM
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
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adds` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ph` bigint(11) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `user`, `pass`, `email`, `adds`, `city`, `ph`, `gen`, `day`, `month`, `year`, `pic`) VALUES
(1, 'subhasree', '1234', 's@gmail.com', 'kolkata', 'Kolkata', 1234567898, 'female', 0, '', 0, ''),
(2, 'arindam', '4321', 'a@gmail.com', 'kolkata', 'Kolkata', 8976543210, 'male', 0, '', 0, ''),
(3, 'shreyos', '12345', 'sh@gmail.com', 'mumbay', 'Mum', 7981234547, 'male', 0, '', 0, ''),
(4, 'ashima', '123456', 'v@gmail.com', 'delhi', 'Del', 1324534689, 'female', 0, '', 0, ''),
(5, 'ram', 'ramram', 'ram@gmail.com', 'kolkata', 'Kolkata', 4748364775, 'male', 0, '', 0, ''),
(6, 'mistu', 'mistu', 'mistu@gmail.com', 'delhi', 'Del', 9876543210, 'female', 0, '', 0, ''),
(27, 'somnath', 'somnath', 'sm@gmail.com', 'kolkata', 'Kolkata', 1231234567, 'male', 19, 'jan', 1968, 'NULL'),
(28, 'u', 'uuuu', 'u@gmail.com', 'kol', 'Kolkata', 7687656765, 'male', 19, 'feb', 1967, 'img/14133315645120140116_103804-1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
