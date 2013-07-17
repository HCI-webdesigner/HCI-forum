-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2013 at 08:34 PM
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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `comment_date` date NOT NULL,
  `deleted` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `user1_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `comment_date`, `deleted`, `post_id`, `user_id`) VALUES
(3, '楼主好人一生平安！', '2013-07-17', 0, 4, 14),
(4, '楼主好人一生平安!！', '2013-07-17', 0, 4, 13),
(5, '楼主好人一生平安!!！', '2013-07-17', 0, 4, 10),
(6, '楼主好人一生平安!!!！', '2013-07-17', 0, 4, 13),
(7, '楼主好人一生平安!!!!！', '2013-07-17', 0, 4, 13),
(8, '楼主好人一生平安!!!!!！', '2013-07-17', 0, 4, 10),
(9, '楼主好人一生平安！', '2013-07-17', 0, 5, 14),
(10, '楼主好人一生平安！!', '2013-07-17', 0, 5, 10),
(11, '楼主好人一生平安！!!', '2013-07-17', 0, 5, 13),
(12, '楼主好人一生平安！!!!', '2013-07-17', 0, 5, 10),
(13, '楼主好人一生平安！!!!!', '2013-07-17', 0, 5, 14),
(14, '楼主好人一生平安！!!!!!', '2013-07-17', 0, 6, 13),
(15, '楼主好人一生平安！', '2013-07-17', 0, 6, 14),
(16, '楼主好人一生平安！!', '2013-07-17', 0, 7, 14),
(17, '楼主好人一生平安！!!', '2013-07-17', 0, 7, 14),
(18, '楼主好人一生平安！!!!', '2013-07-17', 0, 7, 13),
(19, '楼主好人一生平安！!!!!', '2013-07-17', 0, 7, 10);

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
