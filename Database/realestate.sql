-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2014 at 05:07 AM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE IF NOT EXISTS `creditcard` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cnum` int(255) NOT NULL,
  `month` int(255) NOT NULL,
  `year` int(255) NOT NULL,
  `scode` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`id`, `uname`, `cname`, `cnum`, `month`, `year`, `scode`) VALUES
(11, 'musab', 'czxcxz', 1213336554, 2, 2011, 125),
(12, 'zeeshan', 'xczxc', 21543165, 3, 2012, 212);

-- --------------------------------------------------------

--
-- Table structure for table `mumbai`
--

CREATE TABLE IF NOT EXISTS `mumbai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(50) DEFAULT NULL,
  `rimg_name` varchar(50) DEFAULT NULL,
  `rcity` varchar(50) DEFAULT NULL,
  `rbedroom` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `descp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mumbai`
--

INSERT INTO `mumbai` (`id`, `rname`, `rimg_name`, `rcity`, `rbedroom`, `price`, `descp`) VALUES
(1, 'Songbirds', '12.gif', 'Prabhadevi, Mumbai', '1/2/3', 310000, 'Residential Apartment'),
(2, 'Auris Serenity', '11.gif', 'Malad, Mumbai', '2/3/4', 800000, 'Residential Apartment'),
(3, 'Kanakia Levels', '14.gif', 'Malad (East), Mumbai', '3/4', 850000, 'Residential Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `newmumbai`
--

CREATE TABLE IF NOT EXISTS `newmumbai` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  `rimg_name` varchar(255) NOT NULL,
  `rcity` varchar(255) NOT NULL,
  `rbedroom` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newmumbai`
--

INSERT INTO `newmumbai` (`id`, `rname`, `rimg_name`, `rcity`, `rbedroom`, `price`, `descp`) VALUES
(1, 'Sai Amrut Paradise', '20.gif', 'Sec 2,Karanjade, Panvel, New Mumbai ', '1/2', '450000', 'Residential Apartments '),
(2, 'Greenwood Estate', '21.gif', 'New Panvel, Dist Raigad, New Mumbai ', '1/2/3', '477500', 'Residential Apartments'),
(3, 'Balaji Garden', '25.gif', 'Taloja, New Mumbai ', '2/3', '630000', 'Residential Apartments');

-- --------------------------------------------------------

--
-- Table structure for table `pune`
--

CREATE TABLE IF NOT EXISTS `pune` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(50) DEFAULT NULL,
  `rimg_name` varchar(50) DEFAULT NULL,
  `rcity` varchar(255) NOT NULL,
  `rbedroom` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `descp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pune`
--

INSERT INTO `pune` (`id`, `rname`, `rimg_name`, `rcity`, `rbedroom`, `price`, `descp`) VALUES
(1, 'Songbirds', '12.gif', 'Hinjewari, Pune', '2', 540000, 'Residential Apartment'),
(2, 'Auris', '11.gif', 'Wakad, Pune', '2/3', 810000, 'Residential Apartment'),
(3, 'Shikara Palace Garden', '13.gif', 'Warje, Pune', '3', 630000, 'Residential Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typee` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `typee`, `firstname`, `email`, `password`, `city`, `mobile`) VALUES
(1, 'owner', 'musab', 'musab', 'musab123', '3', 2563),
(2, 'owner', 'zeeshan', 'talktomusab@gmail.com', 'musab123', '2', 986532145);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `area` int(255) NOT NULL,
  `pbedroom` varchar(255) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `poverview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `pname`, `pcity`, `pimg`, `pprice`, `area`, `pbedroom`, `pdesc`, `poverview`) VALUES
(1, 'Songbirds', 'Prabhadevi, Mumbai', '12.gif', 310000, 360, '1/2/3', 'Residential Apartment', 'Realestate.com showcases Songbird by Songbird Group. Songbird is one of the popular residential developments in Prabhadevi, neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing ... Songbird is the new dream home of the new generatio'),
(2, 'Auris Serenity', 'Malad, Mumbai', '11.gif', 800000, 640, '2/3/4', 'Residential Apartment', 'Realestate.com showcases Auris Serenity by Auris Serenity Group. Auris Serenity is one of the popular residential developments in Malad, Mumbai, neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing ... Auris Serenity is the new drea'),
(3, 'Kanakia Levels', 'Malad (East), Mumbai', '14.gif', 850000, 550, '3/4', 'Residential Apartment', 'Realestate.com showcases Kanakia Levels by Kanakia Levels Group. Kanakia Levels is one of the popular residential developments in Malad(East), Mumbai, neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing ... Kanakia Levels is the ne'),
(4, 'Sai Amrut Paradise', 'Sec 2,Karanjade, Panvel, New Mumbai', '20.gif', 450000, 650, '1/2', 'Residential Apartment', 'Realestate.com showcases Sai Amrut Paradise by Sai Amrut Paradise Group. Sai Amrut Paradise is one of the popular residential developments in Sec 2,Karanjade, Panvel, New Mumbai, neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing '),
(5, 'Balaji Garden', 'Taloja, New Mumbai', '25.gif', 630000, 450, '2/3', 'Residential Apartment', 'Realestate.com showcases Balaji Garden by Balaji Garden Group. Balaji Garden is one of the popular residential developments in Taloja, New Mumbai. neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing ... Balaji Garden is the new dre'),
(6, 'Shikara Palace Garden', 'Warje, Pune', '13.gif', 630000, 630, '3', 'Residential Apartment', 'Realestate.com showcases Shikara Palace Garden by Shikara Palace Garden Group. Shikara Palace Garden is one of the popular residential developments in Warje, Pune. neighbourhood of Mumbai.The lifestyle and living in Mumbai is also changing ... Shikara Pal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
