-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 11, 2014 at 01:00 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wfh_original`
--
CREATE DATABASE IF NOT EXISTS `wfh_original` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wfh_original`;

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(225) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `text`, `timestamp`) VALUES
(1, 'wfh', '2014-06-10 20:32:41'),
(2, 'stay at home', '2014-06-10 22:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `endings`
--

CREATE TABLE IF NOT EXISTS `endings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(225) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `endings`
--

INSERT INTO `endings` (`id`, `text`, `timestamp`) VALUES
(1, '.', '2014-06-10 20:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `excuses`
--

CREATE TABLE IF NOT EXISTS `excuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(225) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `excuses`
--

INSERT INTO `excuses` (`id`, `text`, `timestamp`) VALUES
(1, 'herpes', '2014-06-10 20:33:02'),
(2, 'cuccipox', '2014-06-10 22:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `timestamp`) VALUES
(1, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', '2014-06-10 20:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `memes`
--

CREATE TABLE IF NOT EXISTS `memes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) NOT NULL,
  `statement` varchar(225) NOT NULL,
  `action` varchar(225) NOT NULL,
  `operator` varchar(225) NOT NULL,
  `excuse` varchar(225) NOT NULL,
  `ending` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`id`, `image`, `statement`, `action`, `operator`, `excuse`, `ending`, `timestamp`) VALUES
(53, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'stay at home', 'due to', 'herpes', '.', '0000-00-00 00:00:00'),
(54, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'stay at home', 'in case of', 'herpes', '.', '0000-00-00 00:00:00'),
(55, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'wfh', 'due to', 'herpes', '.', '0000-00-00 00:00:00'),
(56, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'wfh', 'due to', 'cuccipox', '.', '0000-00-00 00:00:00'),
(57, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'wfh', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00'),
(58, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'stay at home', 'due to', 'herpes', '.', '0000-00-00 00:00:00'),
(59, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'wfh', 'in case of', 'herpes', '.', '0000-00-00 00:00:00'),
(60, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'wfh', 'due to', 'cuccipox', '.', '0000-00-00 00:00:00'),
(61, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'stay at home', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00'),
(62, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'wfh', 'in case of', 'herpes', '.', '0000-00-00 00:00:00'),
(63, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'stay at home', 'due to', 'cuccipox', '.', '0000-00-00 00:00:00'),
(64, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'stay at home', 'due to', 'cuccipox', '.', '0000-00-00 00:00:00'),
(65, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'wfh', 'in case of', 'herpes', '.', '0000-00-00 00:00:00'),
(66, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'stay at home', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00'),
(67, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'wfh', 'due to', 'cuccipox', '.', '0000-00-00 00:00:00'),
(68, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'wfh', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00'),
(69, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I think I will', 'wfh', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00'),
(70, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'wfh', 'due to', 'herpes', '.', '0000-00-00 00:00:00'),
(71, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'stay at home', 'in case of', 'herpes', '.', '0000-00-00 00:00:00'),
(72, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'I must', 'stay at home', 'due to', 'herpes', '.', '0000-00-00 00:00:00'),
(73, 'https://scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg', 'Methinks I am going to', 'stay at home', 'in case of', 'cuccipox', '.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE IF NOT EXISTS `operators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(225) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `text`, `timestamp`) VALUES
(1, 'due to', '2014-06-10 20:32:53'),
(2, 'in case of', '2014-06-10 22:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE IF NOT EXISTS `statements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(225) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`id`, `text`, `timestamp`) VALUES
(1, 'I think I will', '2014-06-10 18:09:22'),
(2, 'Methinks I am going to', '2014-06-10 18:13:05'),
(3, 'I must', '2014-06-10 22:21:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
