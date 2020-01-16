-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 09:10 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awanti`
--
CREATE DATABASE `awanti` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `awanti`;

-- --------------------------------------------------------

--
-- Table structure for table `brightstd`
--

CREATE TABLE IF NOT EXISTS `brightstd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `class` text NOT NULL,
  `percent` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `brightstd`
--

INSERT INTO `brightstd` (`id`, `name`, `class`, `percent`, `img`) VALUES
(4, 'Sameer Prajapati', '4th', '94', 'IMG_20160927_115043.jpg'),
(7, 'Ziya Ali', '1st', '95', 'IMG_20160927_114756.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class10`
--

CREATE TABLE IF NOT EXISTS `class10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '10th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class10`
--

INSERT INTO `class10` (`id`, `stdcode`, `name`, `fname`, `mname`, `rlg`, `cate`, `dob`, `bloodgrp`, `class`, `address`, `adsdate`, `fee`, `pay`, `ref`, `contact`, `img`) VALUES
(3, 'dkhgifd', 'gjf', 'fghfid', 'gf', '', '', '0000-00-00', 'fdgj', 'fdgfh', '', '2016-11-11', 0, 56576, 0, '9876789876', '');

-- --------------------------------------------------------

--
-- Table structure for table `class2`
--

CREATE TABLE IF NOT EXISTS `class2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '2nd',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class3`
--

CREATE TABLE IF NOT EXISTS `class3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '3rd',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(11,0) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class4`
--

CREATE TABLE IF NOT EXISTS `class4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '4th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(11,0) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class5`
--

CREATE TABLE IF NOT EXISTS `class5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '5th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class6`
--

CREATE TABLE IF NOT EXISTS `class6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(15) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '6th',
  `address` varchar(150) NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(11,0) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class7`
--

CREATE TABLE IF NOT EXISTS `class7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '7th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(11,0) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class8`
--

CREATE TABLE IF NOT EXISTS `class8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '8th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class8`
--

INSERT INTO `class8` (`id`, `stdcode`, `name`, `fname`, `mname`, `rlg`, `cate`, `dob`, `bloodgrp`, `class`, `address`, `adsdate`, `fee`, `pay`, `ref`, `contact`, `img`) VALUES
(3, 'bvc', 'bjgjf', 'cvn', 'gnfk', '', '', '0000-00-00', 'dng', 'fgkh', '', '2016-12-01', 0, 654566, 7868, '8687678765', '');

-- --------------------------------------------------------

--
-- Table structure for table `class9`
--

CREATE TABLE IF NOT EXISTS `class9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT '9th',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class9`
--

INSERT INTO `class9` (`id`, `stdcode`, `name`, `fname`, `mname`, `rlg`, `cate`, `dob`, `bloodgrp`, `class`, `address`, `adsdate`, `fee`, `pay`, `ref`, `contact`, `img`) VALUES
(8, 'bjdgh', 'fgnkf', 'fhnfg', 'fhnkfg', '', '', '0000-00-00', 'hjgf', 'cnggf', '', '2016-11-11', 0, 567, 0, '9876567876', '');

-- --------------------------------------------------------

--
-- Table structure for table `cls1`
--

CREATE TABLE IF NOT EXISTS `cls1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(25) NOT NULL,
  `cate` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `class` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(6) NOT NULL,
  `pay` int(5) NOT NULL,
  `ref` int(5) NOT NULL,
  `contact` decimal(11,0) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `sit` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `avisit` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`sno`, `class`, `sit`, `fee`, `avisit`) VALUES
(20, 'kg1', 30, 5000, 5),
(22, 'kg2', 25, 7000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `evname` varchar(100) NOT NULL,
  `evdate` date NOT NULL,
  `evdesc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sno`, `evname`, `evdate`, `evdesc`, `image`) VALUES
(41, 'Exams', '2016-11-11', 'All classes exams start in 15th nov.', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `address`, `contact`, `feedback`) VALUES
(4, 'Jiya khan', 'Khairagarh', '9865657489', 'Your website is very easy to understand.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fdate` date NOT NULL,
  `fdesc` text NOT NULL,
  `fimage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `fdate`, `fdesc`, `fimage`) VALUES
(11, '2016-11-04', 'Annual Function Celebration. ', 'C (435).jpg'),
(17, '2016-09-05', 'Teachers day', '20160321_141013.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kg1`
--

CREATE TABLE IF NOT EXISTS `kg1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(12) NOT NULL,
  `class` varchar(14) NOT NULL DEFAULT 'kg1',
  `address` text NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kg1`
--

INSERT INTO `kg1` (`id`, `stdcode`, `name`, `fname`, `mname`, `rlg`, `cate`, `dob`, `bloodgrp`, `class`, `address`, `adsdate`, `fee`, `pay`, `ref`, `contact`, `pic`) VALUES
(7, 'AWTK1S', 'Saany', 'Rakesh Dewangan', 'Sumitra Dewangan', 'Hinduism', 'O.B.C.', '2016-07-03', 'A+', 'kg1', 'Khairagarh', '2016-07-01', 7000, 5000, 2000, '9875675434', 'IMG_20160927_114756.jpg'),
(8, 'AWTK1M', 'munmun', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, 0, '0', ''),
(9, 'AWTK1N', 'new', '', '', '', '', '0000-00-00', '', 'kg1', '', '0000-00-00', 0, 0, 0, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `kg2`
--

CREATE TABLE IF NOT EXISTS `kg2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdcode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `rlg` varchar(100) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `class` varchar(5) NOT NULL DEFAULT 'kg-2',
  `address` varchar(200) NOT NULL,
  `adsdate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kg2`
--

INSERT INTO `kg2` (`id`, `stdcode`, `name`, `fname`, `mname`, `rlg`, `cate`, `dob`, `bloodgrp`, `class`, `address`, `adsdate`, `fee`, `pay`, `ref`, `contact`, `img`) VALUES
(9, 'AWTK2R', 'Rukhsar Ali', ' Aakram Ali', 'Saniya Ali', 'Islam', 'General', '2016-06-15', 'A+', 'kg2', 'Amlipara', '2016-06-15', 6000, 5000, 1000, '8897967543', '20161026_142132.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `quali` text NOT NULL,
  `working` text NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'principal',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`sno`, `tname`, `fname`, `mname`, `address`, `quali`, `working`, `contact`, `email`, `date`, `image`, `type`) VALUES
(14, 'Mr. D', 'Mr. Ramprakash', 'Mrs. Shila', 'Durg', 'MSC', '1 year', '9876578965', 'dev12345@gmail.com', '2016-11-04', 'DSC_0336.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `quali` varchar(100) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'teacher',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sno`, `tname`, `fname`, `mname`, `address`, `quali`, `contact`, `email`, `date`, `image`, `type`) VALUES
(20, 'Sunit', '', '', '', 'MSC', '0', '', '2016-10-26', 'IMG_20160909_142239.jpg', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `address`, `mobile`, `pass`, `type`) VALUES
(3, 'admiin', '', '0', 'admin', 'admin'),
(4, 'Rama', 'kgh', '9876509876', 'awt', 'user'),
(5, 'komal', 'kgh', '987656789', 'jyoti', 'user'),
(6, 'lali', 'kgh', '987656789', 'joya', 'user'),
(7, 'lali', 'lama', '987656789', '1234', 'user'),
(8, 'chnadan', '', '9876509876', 'vb', 'user'),
(9, 'm', 'add', '9898789876', 'awt1', 'user'),
(10, 'm', 'add', '9898789876', 'awt1', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
