-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2013 at 02:59 PM
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
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `type` int(1) NOT NULL,
  `point` int(5) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL,
  `post_date` date NOT NULL,
  `state` int(1) NOT NULL,
  `board_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `board_id` (`board_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `type`, `point`, `deleted`, `post_date`, `state`, `board_id`, `user_id`) VALUES
(4, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16', 0, 1, 10),
(5, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16', 0, 1, 10),
(6, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16', 0, 1, 10),
(7, 'HTTP代理与 SPDY协议', 'HTTP代理是最经典最常见的代理协议。其用途非常广泛，普遍见于公司内网环境，一般员工都需要给浏览器配置一个HTTP代理才能访问互联网。起初，HTTP代理也用来翻越G*W，但是因为G*W不断发展，普通的HTTP代理早已无效了。但是，基于仍然有不少人使用明文的HTTP代理协议结合 stunnel之类的软件进行加密翻Q，有时这种代理又被称为HTTPS代理。再后来，又出现了WebVpn via Spdy之类的代理协议，特点是Chrome浏览器直接支持。再加上HTTP代理协议可以代理什么？是只能代理HTTP还是也可以代理HTTPS，还是可 以用来实现SOCKS代理？总之，非常混乱。在fqsocks项目里用python实现了HTTP代理的各种主流变种，终于明白了不同称谓之后的真正含义。本文试图总结一二。\n\n代理基础\n\n所有的代理，其原理都是类似的。其网络拓扑结构都是这样的：\n\n[客户端] <-TCP连接-> [代理] <-TCP连接-> [服务器]\n代理左手拿着与客户端的连接，右手拿着与服务器的连接，然后在两个TCP连接之间做数据的对拷。各种不同的代理协议，不同的只是TCP连接之上跑的 是什么的协议，数据是怎么经过包装，拆包的。不存在客户端与服务器之间建立TCP连接的情况。只有VPN这种在IP包这一层工作的，才能实现客户端与服务 器的之间连接。', 0, 0, 0, '2013-07-16', 0, 1, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `board_id` FOREIGN KEY (`board_id`) REFERENCES `board` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
