-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2013 at 05:36 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hciForum`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `score` int(10) NOT NULL,
  `level` int(3) NOT NULL,
  `authority` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `account`, `score`, `level`, `authority`, `password`) VALUES
(10, 'hhq', 0, 0, 0, '9e8ca68bf7de888a350681d2f060c18e'),
(13, '胡华泉', 0, 0, 0, '9e8ca68bf7de888a350681d2f060c18e'),
(14, 'zsl', 999, 999, 1, 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'passer-by', 0, 0, 0, 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
