-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23 يناير 2019 الساعة 20:58
-- إصدار الخادم: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `army`
--

-- --------------------------------------------------------

--
-- بنية الجدول `battlion`
--

DROP TABLE IF EXISTS `battlion`;
CREATE TABLE IF NOT EXISTS `battlion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `battlion_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `faction`
--

DROP TABLE IF EXISTS `faction`;
CREATE TABLE IF NOT EXISTS `faction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faction_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `rank`
--

DROP TABLE IF EXISTS `rank`;
CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `solider`
--

DROP TABLE IF EXISTS `solider`;
CREATE TABLE IF NOT EXISTS `solider` (
  `id` int(20) UNSIGNED NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directorate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gendar` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_faction` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_battlion` int(11) NOT NULL,
  `id_rank` int(11) DEFAULT NULL,
  `phone` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imag` mediumblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rank` (`id_rank`),
  KEY `id_group` (`id_group`),
  KEY `id_faction` (`id_faction`),
  KEY `id_company` (`id_company`),
  KEY `id_battlion` (`id_battlion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insertt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showw` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updatee` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `searchh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deletee` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `show_users` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `delete_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `vechile`
--

DROP TABLE IF EXISTS `vechile`;
CREATE TABLE IF NOT EXISTS `vechile` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `speed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maximum_load` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `weapon`
--

DROP TABLE IF EXISTS `weapon`;
CREATE TABLE IF NOT EXISTS `weapon` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `caliber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `range` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `imag` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
