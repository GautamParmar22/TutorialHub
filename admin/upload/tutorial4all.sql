-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 08:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial4all`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `aid` int(20) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `admin_email`, `admin_pass`) VALUES
(1, 'ravikacha20@gmail.com', '55555'),
(2, 'rdkacha@gmail.com', 'ravikacha');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cnumber` bigint(12) NOT NULL,
  `cquestion` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `cname`, `cemail`, `cnumber`, `cquestion`) VALUES
(3, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'helooo   admin how r u?'),
(4, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'helooo   admin how r u?'),
(5, 'abc', 'abc@gmail.com', 9033037076, 'hellloooo'),
(7, 'rd kacha', 'rdkacha@gmail.com', 9033037076, 'Hello admin h r u??'),
(8, 'rdkacha', 'ravikacha20@gmail.com', 9033037076, 'helloooooooooo'),
(9, 'rvi', 'ravikacha20@gmail.com', 9033037076, 'hiii admin h r u????');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `lid` int(5) NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL,
  `ldefination` varchar(200) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lid`, `lname`, `ldefination`) VALUES
(1, 'php', 'php is stand for hypertext preprocesser'),
(4, 'Asp.Net', 'Active Server Page'),
(6, 'mysql', 'Stucture Query Language'),
(8, 'Web-2 XML & Ajax', 'xml,ajax'),
(9, 'Linux', 'Linux is open source'),
(10, 'Advance Software Engineering', 'advance software engineering'),
(11, 'Advance Php', 'php ,ajax,xml'),
(14, 'Mongodb', 'mongodb is new arrival programming language'),
(15, 'Android', 'Android is Open source programming language which is developed by google');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `sbid` int(5) NOT NULL AUTO_INCREMENT,
  `sbname` varchar(100) NOT NULL,
  PRIMARY KEY (`sbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`sbid`, `sbname`) VALUES
(6, 'Android'),
(8, 'php'),
(9, 'Asp.Net'),
(10, 'mysql'),
(11, 'Mongodb'),
(12, 'Linux'),
(13, 'Web-2 XML & Ajax'),
(14, 'Advance Php');

-- --------------------------------------------------------

--
-- Table structure for table `subtutorial`
--

CREATE TABLE IF NOT EXISTS `subtutorial` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `stutorial` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `subtutorial`
--

INSERT INTO `subtutorial` (`sid`, `sname`, `stutorial`, `fname`, `ftype`) VALUES
(24, 'mysql', 'active Server Page active Server Page', 'ckeditor_4.5.9_full.zip', 'applican/pdf'),
(26, 'Asp.Net', 'active Server Page xkjdvjxkvhkjfd', 'ckeditor_4.5.9_full.zip', 'applican/pdf'),
(27, 'Mongodb', 'Mongodb is newcommer language in saurashtra university                                        introduction of php', 'full.pdf', 'applican/zip'),
(28, 'Advance Software Engineering', 'Mongodb is newcommer language in saurashtra university introduction of php', 'PHP Operators _ PHP _ Tutorialink.com.html', 'applican/html'),
(29, 'Web-2 XML & Ajax', 'Mongodb is newcommer language in saurashtra university', 'ckeditor_4.5.9_full.zip', 'applican/zip'),
(31, 'php', 'introduction of php                            introduction of php introduction of php', 'SkinPack_Auto_UXThemePatcher_4.0.zip', 'applican/zip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
