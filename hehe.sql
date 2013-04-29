-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 04 月 29 日 09:47
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hehe`
--

-- --------------------------------------------------------

--
-- 表的结构 `hehe_content`
--

CREATE TABLE IF NOT EXISTS `hehe_content` (
  `id` int(11) NOT NULL,
  `title` char(32) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hehe_content`
--

INSERT INTO `hehe_content` (`id`, `title`, `content`) VALUES
(1, 'hehe', 'fuck '),
(2, '呵呵呵', '改一下～'),
(12, '123', '123');

-- --------------------------------------------------------

--
-- 表的结构 `hehe_user`
--

CREATE TABLE IF NOT EXISTS `hehe_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(30) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hehe_user`
--

INSERT INTO `hehe_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'josephstalin', '123456'),
(12, '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
