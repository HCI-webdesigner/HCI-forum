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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `comment_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `user1_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `comment_date`, `deleted`, `post_id`, `user_id`) VALUES
(3, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 4, 14),
(4, '楼主好人一生平安!！', '2013-07-17 00:00:00', 0, 4, 13),
(5, '楼主好人一生平安!!！', '2013-07-17 00:00:00', 0, 4, 10),
(6, '楼主好人一生平安!!!！', '2013-07-17 00:00:00', 0, 4, 13),
(7, '楼主好人一生平安!!!!！', '2013-07-17 00:00:00', 0, 4, 13),
(8, '楼主好人一生平安!!!!!！', '2013-07-17 00:00:00', 0, 4, 10),
(9, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 5, 14),
(10, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 5, 10),
(11, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 5, 13),
(12, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 5, 10),
(13, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 5, 14),
(14, '楼主好人一生平安！!!!!!', '2013-07-17 00:00:00', 0, 6, 13),
(15, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 6, 14),
(16, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 7, 14),
(17, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 7, 14),
(18, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 7, 13),
(19, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 7, 10),
(20, '兰州烧饼', '2013-07-20 00:00:00', 0, 19, 14),
(21, '兰州真是烧饼', '2013-07-20 00:00:00', 0, 19, 14),
(22, '兰州烧饼到无敌了\r\n\r\n\r\n哈哈', '2013-07-20 00:00:00', 0, 19, 14),
(23, '楼主傻逼', '2013-07-20 00:00:00', 0, 22, 14),
(24, '哈哈', '2013-07-20 00:00:00', 0, 22, 14),
(25, '哈哈哈哈', '2013-07-20 00:00:00', 0, 22, 14),
(26, '哈哈哈哈', '2013-07-20 00:00:00', 0, 10, 14),
(27, '楼主傻逼', '2013-07-20 00:00:00', 0, 10, 14),
(28, '哈哈哈哈', '2013-07-20 00:00:00', 0, 10, 14),
(29, '沙发', '2013-07-20 00:00:00', 0, 24, 14),
(30, '板凳', '2013-07-20 00:00:00', 0, 24, 14),
(31, '地板', '2013-07-20 00:00:00', 0, 24, 14),
(32, '沙发', '2013-07-20 00:00:00', 0, 34, 14),
(33, '板凳', '2013-07-20 00:00:00', 0, 34, 14),
(34, '地板', '2013-07-20 00:00:00', 0, 34, 14),
(35, '哈哈', '2013-07-21 00:00:00', 0, 19, 14),
(36, '哈哈哈哈', '2013-07-21 00:00:00', 0, 19, 14),
(37, '哈哈哈哈哈哈哈', '2013-07-21 00:00:00', 0, 19, 14),
(38, '楼主傻逼', '2013-07-21 00:00:00', 0, 45, 14),
(39, '楼主傻逼', '2013-07-21 17:35:26', 0, 19, 14),
(40, '哈哈哈哈', '2013-07-21 17:35:32', 0, 19, 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `user1_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
