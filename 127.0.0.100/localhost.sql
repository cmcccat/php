-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 04 日 01:55
-- 服务器版本: 5.0.90
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my_db`
--
CREATE DATABASE `my_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `BookID` varchar(6) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `Category` int(5) NOT NULL,
  `BookChapter` int(5) NOT NULL,
  `Count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`BookID`, `BookName`, `Category`, `BookChapter`, `Count`) VALUES
('010001', 'Orient', 1, 2, 80),
('010002', 'whitenight', 1, 20, 41),
('030001', 'Hans Christian Andersen', 3, 20, 12),
('010003', 'Notre-Dame de Paris', 1, 20, 0),
('020001', 'Romeo and Juliet', 2, 20, 2),
('010004', 'A Tale of Two Cities', 1, 30, 1),
('010005', 'The Old Man and the Sea', 1, 20, 8),
('020002', 'Tagore', 2, 20, 1),
('020003', 'Hsu Chih-mo', 2, 5, 3),
('030002', 'Green', 3, 20, 7),
('030003', 'Aesop', 3, 20, 2);

-- --------------------------------------------------------

--
-- 表的结构 `ubook`
--

CREATE TABLE IF NOT EXISTS `ubook` (
  `userCound` varchar(15) NOT NULL default '',
  `BookID` varchar(6) NOT NULL default '',
  `BookChapter` int(11) default '0',
  `Category` int(5) NOT NULL,
  PRIMARY KEY  (`userCound`,`BookID`),
  KEY `BookID` (`BookID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ubook`
--

INSERT INTO `ubook` (`userCound`, `BookID`, `BookChapter`, `Category`) VALUES
('zz88dydy', '030002', 5, 3),
('Abc1234', '030003', 1, 3),
('Abc1234', '010001', 4, 1),
('Abc1234', '010002', 1, 1),
('Abc1234', '030002', 1, 3),
('Abc1234', '010004', 4, 1),
('Abc1234', '010005', 4, 1),
('zz88dydy', '010002', 4, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL auto_increment,
  `userCound` varchar(15) NOT NULL default '',
  `userPasscode` varchar(70) default NULL,
  `userbalance` int(11) default '10',
  `usertime` int(11) default '0',
  PRIMARY KEY  (`ID`,`userCound`),
  UNIQUE KEY `userCound` (`userCound`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `userCound`, `userPasscode`, `userbalance`, `usertime`) VALUES
(3, 'Abc1234', '$P$B80FtBRSQrwNIfN3CRnddUPFHCu5AZ1', 204, 1464623821),
(4, 'zz88dydy', '$P$Biw7HskTQk1VntbHZkhW0McxU0SOOf.', 8, 1464974518);
