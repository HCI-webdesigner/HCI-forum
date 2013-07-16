-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2013 at 03:38 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.1

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
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `moderator` varchar(20) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area_id` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`id`, `name`, `moderator`, `area_id`) VALUES
(1, 'HTML/HTML5', '', 1),
(2, 'CSS', '', 1),
(3, 'Javascript', '', 1),
(4, '设计与美工', '', 1),
(5, 'Java', '', 2),
(6, 'PHP', '', 2),
(8, 'JSP', '', 2),
(9, 'Python', '', 2),
(10, '框架', '', 2),
(11, 'Android', '', 3),
(12, 'IOS', '', 3),
(13, '系统运维', '', 4),
(14, '系统安全', '', 4),
(15, '资料', '', 5),
(16, '书籍', '', 5),
(17, '软件', '', 5),
(18, '其他', '', 5),
(19, '实习资讯', '', 6),
(20, '求职信息', '', 6),
(21, '经验交流', '', 6),
(22, '讲座活动', '', 6),
(23, '其他', '', 6),
(24, '情感', '', 7),
(25, '娱乐', '', 7),
(26, '其他', '', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `board`
--
ALTER TABLE `board`
  ADD CONSTRAINT `area_id` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
