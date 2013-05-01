-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 05 月 01 日 14:00
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
-- 表的结构 `hehe_article`
--

CREATE TABLE IF NOT EXISTS `hehe_article` (
  `Aid` int(30) NOT NULL AUTO_INCREMENT,
  `id` int(30) NOT NULL,
  `Title` char(30) NOT NULL,
  `Date` int(11) NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `hehe_article`
--

INSERT INTO `hehe_article` (`Aid`, `id`, `Title`, `Date`) VALUES
(21, 1, '你好', 2013),
(20, 1, 'hehe', 2013),
(19, 2, '窝巢', 2013),
(18, 2, 'hehe', 2013),
(17, 2, '123', 2013);

-- --------------------------------------------------------

--
-- 表的结构 `hehe_content`
--

CREATE TABLE IF NOT EXISTS `hehe_content` (
  `Aid` int(30) NOT NULL,
  `Content` text NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hehe_content`
--

INSERT INTO `hehe_content` (`Aid`, `Content`) VALUES
(21, 'hello world'),
(20, '123'),
(19, '肢体～'),
(18, 'wakaka'),
(17, '1234');

-- --------------------------------------------------------

--
-- 表的结构 `hehe_user`
--

CREATE TABLE IF NOT EXISTS `hehe_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(30) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `hehe_user`
--

INSERT INTO `hehe_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'josephstalin', '123456'),
(15, 'feige', '123'),
(14, 'fangge', '123'),
(13, 'chigix', 'hehe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
