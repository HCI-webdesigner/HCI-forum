-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2013 at 09:32 PM
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
  `anm_date` datetime NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area1_id` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `content`, `anm_date`, `area_id`) VALUES
(1, '今日公告', '中国工商银行股份有限公司董事会于2013年7月22日召开会议，会议审议并通过了关于提名衣锡群先生为中国工商银行股份有限公司独立董事候选人的议案、关于提名傅仲君先生为中国工商银行股份有限公司非执行董事候选人的议案、关于召集2013年第二次临时股东大会的议案。 仅供参考，请查阅当日公告全文。', '2013-07-23 06:00:00', 1),
(2, '哈哈', '中国工商银行股份有限公司董事会于2013年7月22日召开会议，会议审议并通过了关于提名衣锡群先生为中国工商银行股份有限公司独立董事候选人的议案、关于提名傅仲君先生为中国工商银行股份有限公司非执行董事候选人的议案、关于召集2013年第二次临时股东大会的议案。 仅供参考，请查阅当日公告全文。', '2013-07-23 12:00:00', 1),
(3, '今日公告', '中国工商银行股份有限公司董事会于2013年7月22日召开会议，会议审议并通过了关于提名衣锡群先生为中国工商银行股份有限公司独立董事候选人的议案、关于提名傅仲君先生为中国工商银行股份有限公司非执行董事候选人的议案、关于召集2013年第二次临时股东大会的议案。 仅供参考，请查阅当日公告全文。', '2013-07-23 13:07:09', 1),
(4, '今日公告', '中国工商银行股份有限公司董事会于2013年7月22日召开会议，会议审议并通过了关于提名衣锡群先生为中国工商银行股份有限公司独立董事候选人的议案、关于提名傅仲君先生为中国工商银行股份有限公司非执行董事候选人的议案、关于召集2013年第二次临时股东大会的议案。 仅供参考，请查阅当日公告全文。', '2013-07-23 14:25:39', 1),
(8, '范德萨发速度', '发送范德萨放松的', '2013-07-24 16:18:31', 1);

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
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user3_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `count`, `icon_url`, `deleted`, `user_id`) VALUES
(1, '前端开发2', 8, '/HCI-forum/images/front.png', 0, 10),
(2, '后台开发', 0, '/HCI-forum/images/back.png', 0, 10),
(3, '移动开发', 0, '/HCI-forum/images/mobile.png', 0, 10),
(4, '系统测试', 0, '/HCI-forum/images/os.png', 0, 10),
(5, '资源共享', 0, '/HCI-forum/images/resource.png', 0, 10),
(6, '职场资讯', 0, '/HCI-forum/images/Jobs.png', 0, 10),
(7, '灌水专区', 0, '/HCI-forum/images/chat.png', 1, 10),
(15, 'HCI2', 0, '/HCI-forum/images/aboutus.jpg', 1, 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

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
  `cpoint` int(5) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `user1_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `comment_date`, `deleted`, `cpoint`, `post_id`, `user_id`) VALUES
(3, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 0, 4, 10),
(4, '楼主好人一生平安!！', '2013-07-17 00:00:00', 0, 0, 4, 10),
(5, '楼主好人一生平安!!！', '2013-07-17 00:00:00', 0, 0, 4, 10),
(6, '楼主好人一生平安!!!！', '2013-07-17 00:00:00', 0, 0, 4, 13),
(7, '楼主好人一生平安!!!!！', '2013-07-17 00:00:00', 0, 0, 4, 13),
(8, '楼主好人一生平安!!!!!！', '2013-07-17 00:00:00', 0, 0, 4, 10),
(9, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 0, 5, 13),
(10, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 0, 5, 10),
(11, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 0, 5, 13),
(12, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 0, 5, 10),
(13, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 0, 5, 13),
(14, '楼主好人一生平安！!!!!!', '2013-07-17 00:00:00', 0, 0, 6, 13),
(15, '楼主好人一生平安！', '2013-07-17 00:00:00', 0, 0, 6, 13),
(16, '楼主好人一生平安！!', '2013-07-17 00:00:00', 0, 0, 7, 13),
(17, '楼主好人一生平安！!!', '2013-07-17 00:00:00', 0, 0, 7, 10),
(18, '楼主好人一生平安！!!!', '2013-07-17 00:00:00', 0, 0, 7, 13),
(19, '楼主好人一生平安！!!!!', '2013-07-17 00:00:00', 0, 0, 7, 10),
(20, '飘过', '2013-07-24 20:41:09', 0, 0, 21, 10),
(21, '顶一顶', '2013-07-24 20:41:20', 0, 0, 21, 10),
(22, '三个梵蒂冈', '2013-07-24 20:42:00', 0, 0, 15, 10),
(23, 'var', '2013-07-25 11:40:58', 0, 24, 22, 10),
(24, 'var', '2013-07-25 13:26:30', 0, 6, 22, 10);

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
  `fb_date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post3_id` (`post_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `type`, `point`, `deleted`, `post_date`, `state`, `authority`, `board_id`, `user_id`) VALUES
(4, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 1, 0, 1, 10),
(5, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 2, 10),
(6, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(7, 'HTTP代理与 SPDY协议1', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\r\n\r\n代理基础\r\n\r\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\r\n\r\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\r\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16 00:00:00', 0, 0, 1, 10),
(8, 'HTML5', 'HTML5是HTML下一個主要的修訂版本，現在仍處於發展階段。目標是取代1999年所製定的HTML 4.01和XHTML 1.0 標準，以期能在網際網路應用迅速發展的時候，使網路標準達到符合當代的網路需求。廣義論及HTML5時，實際指的是包括HTML、CSS和JavaScript在內的一套技術組合。它希望能夠減少瀏覽器對於需要外掛程式的豐富性網路應用服務（plug-in-based rich internet application，RIA)，如Adobe Flash、Microsoft Silverlight，與Oracle JavaFX的需求，並且提供更多能有效增強網路應用的標準集。\r\n具體來說，HTML5添加了許多新的語法特徵，其中包括<video>, <audio>, 和<canvas>元素，同時整合了SVG內容。這些元素是為了更容易的在網頁中添加和處理多媒體和圖片內容而添加的。其它新的元素包括<section>, <article>, <header>, 和<nav>,是為了豐富文件的資料內容。新的屬性的添加也是為了同樣的目的。同時也有一些屬性和元素被移除掉了。一些元素，像<a>, <cite>和<menu>被修改，重新定義或標準化了。同時APIs和DOM已經成為HTML5中的基礎部分了。[1]HTML5還定義了處理非法文件的具體細節，使得所有瀏覽器和客戶端程式能夠一致地處理語法錯誤。', 0, 0, 0, '2013-07-22 00:00:00', 0, 0, 1, 10),
(9, 'hello', 'hello world', 0, 0, 0, '2013-07-23 17:31:46', 1, 0, 1, 10),
(10, '移动', 'android', 1, 0, 0, '2013-07-22 14:02:15', 0, 0, 10, 13),
(11, '系统', '运维', 3, 0, 0, '2013-07-22 14:19:24', 0, 0, 12, 13),
(12, '灌水', '情感', 2, 0, 0, '2013-07-22 14:35:36', 0, 0, 23, 13),
(13, '职场', '呵呵', 0, 0, 0, '2013-07-22 14:37:41', 0, 0, 19, 13),
(14, '资源', '叔叔叔', 0, 0, 0, '2013-07-22 14:43:58', 0, 0, 15, 10),
(15, '前端', '美工', 0, 0, 0, '2013-07-22 14:44:19', 0, 0, 4, 10),
(16, '后台', '哈哈哈', 0, 0, 0, '2013-07-22 14:46:01', 0, 0, 8, 10),
(17, '系统', '安全', 0, 0, 0, '2013-07-22 15:02:23', 0, 0, 13, 10),
(18, '系统', '还是安全', 0, 0, 0, '2013-07-22 15:03:00', 0, 0, 13, 10),
(19, '移动！！！', 'IOS！！！！', 0, 0, 0, '2013-07-22 15:03:27', 0, 0, 11, 10),
(20, '职场。。。', '活动。。。', 0, 0, 0, '2013-07-22 15:06:32', 0, 0, 21, 10),
(21, '灌水', '水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水', 0, 0, 0, '2013-07-22 15:07:10', 0, 0, 25, 10),
(22, 'qiujiu', 'javascript中的变量怎么定义', 1, 0, 0, '2013-07-25 11:36:05', 0, 0, 3, 10);

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
(10, 'hhq', 105, 6, 1, '9e8ca68bf7de888a350681d2f060c18e'),
(13, '胡华泉', 0, 0, 2, '9e8ca68bf7de888a350681d2f060c18e'),
(14, 'zsl', 999, 999, 1, '202cb962ac59075b964b07152d234b70');

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
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `user3_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

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
