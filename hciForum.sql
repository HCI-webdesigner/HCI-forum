-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2013 at 02:04 PM
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
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area1_id` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `count` int(11) NOT NULL,
  `icon_url` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL,
  `moderator` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `count`, `icon_url`, `deleted`, `moderator`) VALUES
(1, '前端开发2', 0, '/HCI-forum/images/front.png', 0, ''),
(2, '后台开发', 0, '/HCI-forum/images/backstage.png', 0, ''),
(3, '移动开发', 0, '/HCI-forum/images/mobile.png', 0, ''),
(4, '系统测试', 0, '/HCI-forum/images/os.png', 0, ''),
(5, '资源共享', 0, '/HCI-forum/images/resource.png', 0, ''),
(6, '职场资讯', 0, '/HCI-forum/images/Jobs.png', 0, ''),
(7, '灌水专区', 0, '/HCI-forum/images/chat.png', 0, ''),
(15, 'HCI2', 0, '/HCI-forum/images/aboutus.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area_id` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`id`, `name`, `area_id`) VALUES
(1, 'HTML/HTML5', 1),
(2, 'CSS', 1),
(3, 'Javascript', 1),
(4, '设计与美工', 1),
(5, 'Java', 2),
(6, 'PHP', 2),
(7, 'JSP', 2),
(8, 'Python', 2),
(9, '框架', 2),
(10, 'Android', 3),
(11, 'IOS', 3),
(12, '系统运维', 4),
(13, '系统安全', 4),
(14, '资料', 5),
(15, '书籍', 5),
(16, '软件', 5),
(17, '其他', 5),
(18, '实习资讯', 6),
(19, '求职信息', 6),
(20, '经验交流', 6),
(21, '讲座活动', 6),
(22, '其他', 6),
(23, '情感', 7),
(24, '娱乐', 7),
(25, '其他', 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `comment_date`, `deleted`, `post_id`, `user_id`) VALUES
(3, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 4, 10),
(4, '楼主好人一生平安!！', '2013-07-17 00:00:00', 0, 4, 10),
(5, '楼主好人一生平安!!！', '2013-07-17 00:00:00', 0, 4, 10),
(6, '楼主好人一生平安!!!！', '2013-07-17 00:00:00', 0, 4, 13),
(7, '楼主好人一生平安!!!!！', '2013-07-17 00:00:00', 0, 4, 13),
(8, '楼主好人一生平安!!!!!！', '2013-07-17 00:00:00', 0, 4, 10),
(9, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 5, 13),
(10, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 5, 10),
(11, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 5, 13),
(12, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 5, 10),
(13, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 5, 13),
(14, '楼主好人一生平安！!!!!!', '2013-07-17 00:00:00', 0, 6, 13),
(15, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 6, 13),
(16, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 7, 13),
(17, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 7, 10),
(18, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 7, 13),
(19, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 7, 10),
(20, '沙发', '2013-07-22 14:02:28', 0, 10, 14);

-- --------------------------------------------------------

--
-- Table structure for table `debate`
--

CREATE TABLE IF NOT EXISTS `debate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `side` int(1) NOT NULL,
  `score` int(6) NOT NULL,
  `date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post1_id` (`post_id`),
  KEY `user2_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post3_id` (`post_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `type` int(1) NOT NULL,
  `point` int(5) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL,
  `post_date` datetime NOT NULL,
  `state` int(1) NOT NULL,
  `authority` int(11) NOT NULL,
  `board_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `board_id` (`board_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `type`, `point`, `deleted`, `post_date`, `state`, `authority`, `board_id`, `user_id`) VALUES
(4, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(5, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(6, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(7, 'HTTP代理与 SPDY协议1', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\r\n\r\n代理基础\r\n\r\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\r\n\r\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\r\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(8, 'HTML5', 'HTML5是HTML下一個主要的修訂版本，現在仍處於發展階段。目標是取代1999年所製定的HTML 4.01和XHTML 1.0 標準，以期能在網際網路應用迅速發展的時候，使網路標準達到符合當代的網路需求。廣義論及HTML5時，實際指的是包括HTML、CSS和JavaScript在內的一套技術組合。它希望能夠減少瀏覽器對於需要外掛程式的豐富性網路應用服務（plug-in-based rich internet application，RIA)，如Adobe Flash、Microsoft Silverlight，與Oracle JavaFX的需求，並且提供更多能有效增強網路應用的標準集。\r\n具體來說，HTML5添加了許多新的語法特徵，其中包括<video>, <audio>, 和<canvas>元素，同時整合了SVG內容。這些元素是為了更容易的在網頁中添加和處理多媒體和圖片內容而添加的。其它新的元素包括<section>, <article>, <header>, 和<nav>,是為了豐富文件的資料內容。新的屬性的添加也是為了同樣的目的。同時也有一些屬性和元素被移除掉了。一些元素，像<a>, <cite>和<menu>被修改，重新定義或標準化了。同時APIs和DOM已經成為HTML5中的基礎部分了。[1]HTML5還定義了處理非法文件的具體細節，使得所有瀏覽器和客戶端程式能夠一致地處理語法錯誤。', 0, 0, 0, '2013-07-22 00:00:00', 0, 0, 1, 10),
(9, '后台', '拍黄片', 1, 0, 0, '2013-07-22 00:00:00', 0, 0, 6, 14),
(10, '移动', 'android', 1, 0, 0, '2013-07-22 14:02:15', 0, 0, 10, 14);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `account`, `score`, `level`, `authority`, `password`) VALUES
(10, 'hhq', 0, 0, 1, '9e8ca68bf7de888a350681d2f060c18e'),
(13, '胡华泉', 0, 0, 0, '9e8ca68bf7de888a350681d2f060c18e'),
(14, 'zsl', 0, 0, 1, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE IF NOT EXISTS `verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post2_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `area1_id` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

--
-- Constraints for table `board`
--
ALTER TABLE `board`
  ADD CONSTRAINT `area_id` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `user1_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `debate`
--
ALTER TABLE `debate`
  ADD CONSTRAINT `post1_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `user2_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `comment_id` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `post3_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `board_id` FOREIGN KEY (`board_id`) REFERENCES `board` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `verify`
--
ALTER TABLE `verify`
  ADD CONSTRAINT `post2_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
