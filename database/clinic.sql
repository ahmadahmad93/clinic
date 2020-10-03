-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 أكتوبر 2017 الساعة 01:49
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- بنية الجدول `advice`
--

CREATE TABLE IF NOT EXISTS `advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- إرجاع أو استيراد بيانات الجدول `advice`
--

INSERT INTO `advice` (`id`, `title`, `body`, `time`) VALUES
(9, 'Ø§Ù„ÙˆÙ‚Ø§ÙŠØ© Ù…Ù† Ù†Ø²Ù„Ø© Ø§Ù„Ø¨Ø±Ø¯ 1', 'Ø§Ù„Ø­Ø±Øµ Ø¹Ù„Ù‰ Ø¥Ø±Ø¶Ø§Ø¹ Ø§Ù„Ø·ÙÙ„ Ø±Ø¶Ø§Ø¹Ø© Ø·Ø¨ÙŠØ¹ÙŠØ©.', '2017-10-12 21:32:57'),
(10, 'Ø§Ù„ÙˆÙ‚Ø§ÙŠØ© Ù…Ù† Ù†Ø²Ù„Ø© Ø§Ù„Ø¨Ø±Ø¯ 2', 'ÙÙ‰ Ø­Ø§Ù„Ø© Ø§Ù„Ø±Ø¶Ø§Ø¹Ø© Ø¨Ø£Ù„Ø¨Ø§Ù† ØµÙ†Ø§Ø¹ÙŠØ© ÙŠØ¬Ø¨ ØºÙ„Ù‰ Ø§Ù„Ø¨Ø¨Ø±ÙˆÙ†Ø© Ù„Ù…Ø¯Ø© 10 Ø¯Ù‚Ø§Ø¦Ù‚ Ø¨Ø¹Ø¯ ÙƒÙ„ Ø±Ø¶Ø¹Ø©ØŒ Ø£Ùˆ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø¬Ù‡Ø§Ø² Ø§Ù„ØªØ¹Ù‚ÙŠÙ… Ø§Ù„Ù…Ø®ØµØµ Ù„Ø°Ù„Ùƒ', '2017-10-12 21:33:14'),
(11, 'Ø§Ù„ÙˆÙ‚Ø§ÙŠØ© Ù…Ù† Ù†Ø²Ù„Ø© Ø§Ù„Ø¨Ø±Ø¯ 3', 'Ø¹Ø¯Ù… Ø§Ù„Ø§Ø­ØªÙØ§Ø¸ Ø¨Ø¨ÙˆØ§Ù‚Ù‰ Ø§Ù„Ø±Ø¶Ø¹Ø© Ù„Ø£ÙƒØ«Ø± Ù…Ù† Ø±Ø¨Ø¹ Ø³Ø§Ø¹Ø© Ù„Ø£Ù† Ø¨Ø¹Ø¯ Ø°Ù„Ùƒ ØªÙ†Ø´Ø· Ø§Ù„Ø¨ÙƒØªÙŠØ±ÙŠØ§ ÙÙ‰ Ø§Ù„Ù„Ø¨Ù†', '2017-10-12 21:33:33'),
(12, 'Ø§Ù„ÙˆÙ‚Ø§ÙŠØ© Ù…Ù† Ù†Ø²Ù„Ø© Ø§Ù„Ø¨Ø±Ø¯ 4', 'Ø§Ù‡ØªÙ…Ø§Ù… Ø§Ù„Ø£Ù… Ø¨Ù†Ø¸Ø§ÙØªÙ‡Ø§ Ø§Ù„Ø´Ø®ØµÙŠØ© ÙˆØºØ³Ù„ Ø­Ù„Ù…Ø© Ø§Ù„Ø«Ø¯Ù‰ Ø¨Ø§Ø³ØªÙ…Ø±Ø§Ø± ÙÙ‰ Ø­Ø§Ù„Ø© Ø§Ù„Ø±Ø¶Ø§Ø¹Ø© Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', '2017-10-12 21:34:16'),
(13, 'ÙÙŠ Ø­Ø§Ù„ Ø§Ù„ØªØ´Ù†Ø¬', 'Ø¶Ø¹ Ø§Ù„Ø·ÙÙ„ Ø¹Ù„Ù‰ Ø¬Ø§Ù†Ø¨Ù‡ Ø£Ùˆ Ø¶Ø¹ Ø±Ø£Ø³Ù‡ Ø¹Ù„Ù‰ Ø¥Ø­Ø¯Ù‰ Ø§Ù„Ø¬Ø§Ù†Ø¨ÙŠÙ† Ø®Ø§ØµØ© ( Ø¥Ø°Ø§ ÙƒØ§Ù† Ù‡Ù†Ø§Ùƒ Ù‚Ø¦ ) Ø­ØªÙ‰ Ù„Ø§ ÙŠØ¨Ù„Ø¹ Ø§Ù„Ø·ÙÙ„ Ø§Ù„Ù„Ø¹Ø§Ø¨ Ø£Ùˆ Ø£ÙŠ Ø¥ÙØ±Ø§Ø²Ø§Øª Ùˆ Ø§Ù„ØªÙŠ ÙŠÙ…ÙƒÙ† Ø£Ù† ØªØ³Ø¨Ø¨ Ù„Ù‡ Ø¨Ø¹Ø¶ Ø§Ù„Ø§Ø®ØªÙ†Ø§Ù‚.', '2017-10-12 21:36:15');

-- --------------------------------------------------------

--
-- بنية الجدول `concult`
--

CREATE TABLE IF NOT EXISTS `concult` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `replay` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `concult`
--

INSERT INTO `concult` (`id`, `name`, `title`, `body`, `replay`, `time`) VALUES
(1, 'ahmad', 'ahad', 'laksdlaksdnaldn', '', '2017-09-24 16:49:03');

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `msg`, `time`) VALUES
(1, 'ÙˆÙØ§Ø¡', 'wad@ad.co', 'alsdbnasbdkadskabsd                        \r\n                    ', '2017-10-06 20:22:19');

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `financial`
--

CREATE TABLE IF NOT EXISTS `financial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `in_cost` int(11) NOT NULL DEFAULT '0',
  `out_cost` int(11) NOT NULL DEFAULT '0',
  `account` int(11) NOT NULL,
  `report` text NOT NULL,
  `notes` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `financial`
--

INSERT INTO `financial` (`id`, `in_cost`, `out_cost`, `account`, `report`, `notes`, `time`) VALUES
(1, 1522, 0, 11, ' Ù‚Ø¨Ø¶ Ù…Ø¨Ù„Øº 1522 Ù…Ù† Ø§Ù„Ù…Ø±ÙŠØ¶ ØµØ§Ø­Ø¨ Ø§Ù„Ø±Ù‚Ù… Ø§Ù„Ø°Ø§ØªÙŠ 1 Ù…Ø¹Ø§ÙŠÙ†Ø© Ø¹Ù† Ø²ÙŠØ§Ø±ØªÙ‡ Ø±Ù‚Ù… 3', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', '2017-10-08 19:33:52');

-- --------------------------------------------------------

--
-- بنية الجدول `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `p_num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `prescription`
--

INSERT INTO `prescription` (`id`, `p_id`, `v_id`, `p_num`, `name`, `notes`, `time`) VALUES
(1, 1, 3, 13, 'name', 'lasndl', '2017-09-23 01:06:48'),
(3, 1, 3, 13, 'kasjd', 'lknlasdas', '2017-09-23 01:45:19'),
(4, 2, 1, 21, 'citamol', '', '2017-10-08 19:29:34');

-- --------------------------------------------------------

--
-- بنية الجدول `p_appointment`
--

CREATE TABLE IF NOT EXISTS `p_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `familly` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `ssid` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `book_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `p_appointment`
--

INSERT INTO `p_appointment` (`id`, `p_id`, `name`, `father`, `familly`, `phone`, `ssid`, `day`, `month`, `year`, `time`, `notes`, `book_time`, `state`) VALUES
(1, 0, 'Ø´Ø³ÙŠ', 'Ø´Ø³ÙŠ', 'Ø´Ù…Ø³ÙŠ', '345', 234, 20, 9, 2017, '12:00', '', '2017-09-19 21:46:35', 0),
(2, 2, 'ÙˆÙ„ÙŠØ¯', 'Ø³Ù…ÙŠØ±', 'Ù…Ø­Ù…Ø¯', '15935712', 123456789, 8, 10, 2017, '11:00', '', '2017-10-08 16:27:50', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `p_personal_info`
--

CREATE TABLE IF NOT EXISTS `p_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `familly` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `ssid` bigint(20) NOT NULL,
  `year` int(11) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `assistant` varchar(50) NOT NULL,
  `a_phone` int(11) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `notes` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `p_personal_info`
--

INSERT INTO `p_personal_info` (`id`, `name`, `father`, `familly`, `mother`, `ssid`, `year`, `sex`, `assistant`, `a_phone`, `relation`, `address`, `phone`, `notes`, `reg_date`, `active`) VALUES
(1, 'Ø§Ø­Ù…Ø¯', 'Ù…Ø­Ù…Ø¯', 'Ø§Ø­Ù…Ø¯', 'ÙˆÙØ§Ø¡', 2147483647, 1993, 'Ø°ÙƒØ±', 'Ù…Ø­Ù…Ø¯', 949075453, 'Ø§Ø¨', 'Ù…Ø³Ù†Ù‰ÙŠ', 43228912, 'Ø´Ù†Ø³ÙŠÙ‰', '2017-09-15 11:52:38', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `p_visit`
--

CREATE TABLE IF NOT EXISTS `p_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `heat` int(11) NOT NULL,
  `Diarrhea` varchar(50) NOT NULL,
  `Vibrant` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `stool` varchar(50) NOT NULL,
  `breath` varchar(50) NOT NULL,
  `Diagnosis` text NOT NULL,
  `notes` text NOT NULL,
  `cost` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- إرجاع أو استيراد بيانات الجدول `p_visit`
--

INSERT INTO `p_visit` (`id`, `p_id`, `v_id`, `weight`, `height`, `heat`, `Diarrhea`, `Vibrant`, `color`, `stool`, `breath`, `Diagnosis`, `notes`, `cost`, `time`) VALUES
(1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', 0, '2017-09-22 12:52:08'),
(2, 1, 2, 15, 350, 23, '', '', '', '', '', '', '', 1500, '2017-09-22 12:52:34'),
(3, 1, 3, 150, 15, 15, '323', '32', '321', '321', '1', '321', '321', 1522, '2017-09-22 20:58:18'),
(4, 1, 3, 150, 15, 15, '323', '32', '321', '321', '1', '321', '321', 1522, '2017-09-22 21:02:30');

-- --------------------------------------------------------

--
-- بنية الجدول `unconfirmed_entries`
--

CREATE TABLE IF NOT EXISTS `unconfirmed_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `report` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
