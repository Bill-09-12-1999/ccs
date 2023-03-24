-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2023 at 06:43 AM
-- Server version: 5.7.21
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
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

DROP TABLE IF EXISTS `clerk`;
CREATE TABLE IF NOT EXISTS `clerk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`id`, `username`, `password`) VALUES
(1, 'clerk', 'clerk123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `username`, `password`) VALUES
(1, 'faculty', 'faculty123');

-- --------------------------------------------------------

--
-- Table structure for table `isgrade`
--

DROP TABLE IF EXISTS `isgrade`;
CREATE TABLE IF NOT EXISTS `isgrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` text NOT NULL,
  `AY` text NOT NULL,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `course` text NOT NULL,
  `section` text NOT NULL,
  `sub1` text NOT NULL,
  `grade1` text NOT NULL,
  `sub2` text NOT NULL,
  `grade2` text NOT NULL,
  `sub3` text NOT NULL,
  `grade3` text NOT NULL,
  `sub4` text NOT NULL,
  `grade4` text NOT NULL,
  `sub5` text NOT NULL,
  `grade5` text NOT NULL,
  `sub6` text NOT NULL,
  `grade6` text NOT NULL,
  `sub7` text NOT NULL,
  `grade7` text NOT NULL,
  `sub8` text NOT NULL,
  `grade8` text NOT NULL,
  `sub9` text NOT NULL,
  `grade9` text NOT NULL,
  `sub10` text NOT NULL,
  `grade10` text NOT NULL,
  `sem2` text NOT NULL,
  `AY2` text NOT NULL,
  `section2` text NOT NULL,
  `sub11` text NOT NULL,
  `grade11` text NOT NULL,
  `sub12` text NOT NULL,
  `grade12` text NOT NULL,
  `sub13` text NOT NULL,
  `grade13` text NOT NULL,
  `sub14` text NOT NULL,
  `grade14` text NOT NULL,
  `sub15` text NOT NULL,
  `grade15` text NOT NULL,
  `sub16` text NOT NULL,
  `grade16` text NOT NULL,
  `sub17` text NOT NULL,
  `grade17` text NOT NULL,
  `sub18` text NOT NULL,
  `grade18` text NOT NULL,
  `sub19` text NOT NULL,
  `grade19` text NOT NULL,
  `sub20` text NOT NULL,
  `grade20` text NOT NULL,
  `sem3` text NOT NULL,
  `AY3` text NOT NULL,
  `section3` text NOT NULL,
  `sub21` text NOT NULL,
  `grade21` text NOT NULL,
  `sub22` text NOT NULL,
  `grade22` text NOT NULL,
  `sub23` text NOT NULL,
  `grade23` text NOT NULL,
  `sub24` text NOT NULL,
  `grade24` text NOT NULL,
  `sub25` text NOT NULL,
  `grade25` text NOT NULL,
  `sub26` text NOT NULL,
  `grade26` text NOT NULL,
  `sub27` text NOT NULL,
  `grade27` text NOT NULL,
  `sub28` text NOT NULL,
  `grade28` text NOT NULL,
  `sub29` text NOT NULL,
  `grade29` text NOT NULL,
  `sub30` text NOT NULL,
  `grade30` text NOT NULL,
  `sem4` text NOT NULL,
  `AY4` text NOT NULL,
  `section4` text NOT NULL,
  `sub31` text NOT NULL,
  `grade31` text NOT NULL,
  `sub32` text NOT NULL,
  `grade32` text NOT NULL,
  `sub33` text NOT NULL,
  `grade33` text NOT NULL,
  `sub34` text NOT NULL,
  `grade34` text NOT NULL,
  `sub35` text NOT NULL,
  `grade35` text NOT NULL,
  `sub36` text NOT NULL,
  `grade36` text NOT NULL,
  `sub37` text NOT NULL,
  `grade37` text NOT NULL,
  `sub38` text NOT NULL,
  `grade38` text NOT NULL,
  `sub39` text NOT NULL,
  `grade39` text NOT NULL,
  `sub40` text NOT NULL,
  `grade40` text NOT NULL,
  `sem5` text NOT NULL,
  `AY5` text NOT NULL,
  `section5` text NOT NULL,
  `sub41` text NOT NULL,
  `grade41` text NOT NULL,
  `sub42` text NOT NULL,
  `grade42` text NOT NULL,
  `sub43` text NOT NULL,
  `grade43` text NOT NULL,
  `sub44` text NOT NULL,
  `grade44` text NOT NULL,
  `sub45` text NOT NULL,
  `grade45` text NOT NULL,
  `sub46` text NOT NULL,
  `grade46` text NOT NULL,
  `sub47` text NOT NULL,
  `grade47` text NOT NULL,
  `sub48` text NOT NULL,
  `grade48` text NOT NULL,
  `sub49` text NOT NULL,
  `grade49` text NOT NULL,
  `sub50` text NOT NULL,
  `grade50` text NOT NULL,
  `sem6` text NOT NULL,
  `AY6` text NOT NULL,
  `section6` text NOT NULL,
  `sub51` text NOT NULL,
  `grade51` text NOT NULL,
  `sub52` text NOT NULL,
  `grade52` text NOT NULL,
  `sub53` text NOT NULL,
  `grade53` text NOT NULL,
  `sub54` text NOT NULL,
  `grade54` text NOT NULL,
  `sub55` text NOT NULL,
  `grade55` text NOT NULL,
  `sub56` text NOT NULL,
  `grade56` text NOT NULL,
  `sub57` text NOT NULL,
  `grade57` text NOT NULL,
  `sub58` text NOT NULL,
  `grade58` text NOT NULL,
  `sub59` text NOT NULL,
  `grade59` text NOT NULL,
  `sub60` text NOT NULL,
  `grade60` text NOT NULL,
  `sem7` text NOT NULL,
  `AY7` text NOT NULL,
  `section7` text NOT NULL,
  `sub61` text NOT NULL,
  `grade61` text NOT NULL,
  `sub62` text NOT NULL,
  `grade62` text NOT NULL,
  `sub63` text NOT NULL,
  `grade63` text NOT NULL,
  `sub64` text NOT NULL,
  `grade64` text NOT NULL,
  `sub65` text NOT NULL,
  `grade65` text NOT NULL,
  `sub66` text NOT NULL,
  `grade66` text NOT NULL,
  `sub67` text NOT NULL,
  `grade67` text NOT NULL,
  `sub68` text NOT NULL,
  `grade68` text NOT NULL,
  `sub69` text NOT NULL,
  `grade69` text NOT NULL,
  `sub70` text NOT NULL,
  `grade70` text NOT NULL,
  `sem8` text NOT NULL,
  `AY8` text NOT NULL,
  `section8` text NOT NULL,
  `sub71` text NOT NULL,
  `grade71` text NOT NULL,
  `sub72` text NOT NULL,
  `grade72` text NOT NULL,
  `sub73` text NOT NULL,
  `grade73` text NOT NULL,
  `sub74` text NOT NULL,
  `grade74` text NOT NULL,
  `sub75` text NOT NULL,
  `grade75` text NOT NULL,
  `sub76` text NOT NULL,
  `grade76` text NOT NULL,
  `sub77` text NOT NULL,
  `grade77` text NOT NULL,
  `sub78` text NOT NULL,
  `grade78` text NOT NULL,
  `sub79` text NOT NULL,
  `grade79` text NOT NULL,
  `sub80` text NOT NULL,
  `grade80` text NOT NULL,
  `sem9` text NOT NULL,
  `AY9` text NOT NULL,
  `section9` text NOT NULL,
  `sub81` text NOT NULL,
  `grade81` text NOT NULL,
  `sub82` text NOT NULL,
  `grade82` text NOT NULL,
  `sub83` text NOT NULL,
  `grade83` text NOT NULL,
  `sub84` text NOT NULL,
  `grade84` text NOT NULL,
  `sub85` text NOT NULL,
  `grade85` text NOT NULL,
  `sub86` text NOT NULL,
  `grade86` text NOT NULL,
  `sub87` text NOT NULL,
  `grade87` text NOT NULL,
  `sub88` text NOT NULL,
  `grade88` text NOT NULL,
  `sub89` text NOT NULL,
  `grade89` text NOT NULL,
  `sub90` text NOT NULL,
  `grade90` text NOT NULL,
  `acquire` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isgrade`
--

INSERT INTO `isgrade` (`id`, `sem`, `AY`, `name`, `studentid`, `course`, `section`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `sub4`, `grade4`, `sub5`, `grade5`, `sub6`, `grade6`, `sub7`, `grade7`, `sub8`, `grade8`, `sub9`, `grade9`, `sub10`, `grade10`, `sem2`, `AY2`, `section2`, `sub11`, `grade11`, `sub12`, `grade12`, `sub13`, `grade13`, `sub14`, `grade14`, `sub15`, `grade15`, `sub16`, `grade16`, `sub17`, `grade17`, `sub18`, `grade18`, `sub19`, `grade19`, `sub20`, `grade20`, `sem3`, `AY3`, `section3`, `sub21`, `grade21`, `sub22`, `grade22`, `sub23`, `grade23`, `sub24`, `grade24`, `sub25`, `grade25`, `sub26`, `grade26`, `sub27`, `grade27`, `sub28`, `grade28`, `sub29`, `grade29`, `sub30`, `grade30`, `sem4`, `AY4`, `section4`, `sub31`, `grade31`, `sub32`, `grade32`, `sub33`, `grade33`, `sub34`, `grade34`, `sub35`, `grade35`, `sub36`, `grade36`, `sub37`, `grade37`, `sub38`, `grade38`, `sub39`, `grade39`, `sub40`, `grade40`, `sem5`, `AY5`, `section5`, `sub41`, `grade41`, `sub42`, `grade42`, `sub43`, `grade43`, `sub44`, `grade44`, `sub45`, `grade45`, `sub46`, `grade46`, `sub47`, `grade47`, `sub48`, `grade48`, `sub49`, `grade49`, `sub50`, `grade50`, `sem6`, `AY6`, `section6`, `sub51`, `grade51`, `sub52`, `grade52`, `sub53`, `grade53`, `sub54`, `grade54`, `sub55`, `grade55`, `sub56`, `grade56`, `sub57`, `grade57`, `sub58`, `grade58`, `sub59`, `grade59`, `sub60`, `grade60`, `sem7`, `AY7`, `section7`, `sub61`, `grade61`, `sub62`, `grade62`, `sub63`, `grade63`, `sub64`, `grade64`, `sub65`, `grade65`, `sub66`, `grade66`, `sub67`, `grade67`, `sub68`, `grade68`, `sub69`, `grade69`, `sub70`, `grade70`, `sem8`, `AY8`, `section8`, `sub71`, `grade71`, `sub72`, `grade72`, `sub73`, `grade73`, `sub74`, `grade74`, `sub75`, `grade75`, `sub76`, `grade76`, `sub77`, `grade77`, `sub78`, `grade78`, `sub79`, `grade79`, `sub80`, `grade80`, `sem9`, `AY9`, `section9`, `sub81`, `grade81`, `sub82`, `grade82`, `sub83`, `grade83`, `sub84`, `grade84`, `sub85`, `grade85`, `sub86`, `grade86`, `sub87`, `grade87`, `sub88`, `grade88`, `sub89`, `grade89`, `sub90`, `grade90`, `acquire`) VALUES
(1, '1st', '', 'Angela Y. Caberto', 'A19-00334', 'BSIS', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2021-2022', 'III - C', 'IT 169', '2.25', 'IT 170', '2.0', 'IT 171', '2.0', 'IT 172', '2.0', 'IT 173', '2.50', 'IT ELECT 1', '1.50', 'Lit 101', '2.0', 'FL 1', '2.00', '', '', '', '', '2nd', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Midyear', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Already Acquired'),
(2, '1st', '', 'Lykha A. Campilla', 'A19-00187', 'BSIS', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2020 - 2021', 'II - ', '', '', 'IT 104', '2.00', 'IT 161', '1.75', 'IT 162', '1.75', 'IT 163', '1.75', 'Fil 101', '2.00', 'Rizal', '1.75', 'PE 103', '2.00', '', '', '', '', '2nd', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2021 - 2022', 'III - C', '', '', 'IT 169', '1.50', 'IT 170', '1.25', 'IT 171', '1.25', 'IT 172', '1.50', 'IT 173', '2.50', 'IT Elect 1', '1.75', 'Lit 101', '2.0', 'FL 1', '2.0', '', '', '2nd', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Midyear', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `itgrade`
--

DROP TABLE IF EXISTS `itgrade`;
CREATE TABLE IF NOT EXISTS `itgrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` text NOT NULL,
  `AY` text NOT NULL,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `course` text NOT NULL,
  `section` text NOT NULL,
  `sub1` text NOT NULL,
  `grade1` text NOT NULL,
  `sub2` text NOT NULL,
  `grade2` text NOT NULL,
  `sub3` text NOT NULL,
  `grade3` text NOT NULL,
  `sub4` text NOT NULL,
  `grade4` text NOT NULL,
  `sub5` text NOT NULL,
  `grade5` text NOT NULL,
  `sub6` text NOT NULL,
  `grade6` text NOT NULL,
  `sub7` text NOT NULL,
  `grade7` text NOT NULL,
  `sub8` text NOT NULL,
  `grade8` text NOT NULL,
  `sub9` text NOT NULL,
  `grade9` text NOT NULL,
  `sub10` text NOT NULL,
  `grade10` text NOT NULL,
  `sem2` text NOT NULL,
  `AY2` text NOT NULL,
  `section2` text NOT NULL,
  `sub11` text NOT NULL,
  `grade11` text NOT NULL,
  `sub12` text NOT NULL,
  `grade12` text NOT NULL,
  `sub13` text NOT NULL,
  `grade13` text NOT NULL,
  `sub14` text NOT NULL,
  `grade14` text NOT NULL,
  `sub15` text NOT NULL,
  `grade15` text NOT NULL,
  `sub16` text NOT NULL,
  `grade16` text NOT NULL,
  `sub17` text NOT NULL,
  `grade17` text NOT NULL,
  `sub18` text NOT NULL,
  `grade18` text NOT NULL,
  `sub19` text NOT NULL,
  `grade19` text NOT NULL,
  `sub20` text NOT NULL,
  `grade20` text NOT NULL,
  `sem3` text NOT NULL,
  `AY3` text NOT NULL,
  `section3` text NOT NULL,
  `sub21` text NOT NULL,
  `grade21` text NOT NULL,
  `sub22` text NOT NULL,
  `grade22` text NOT NULL,
  `sub23` text NOT NULL,
  `grade23` text NOT NULL,
  `sub24` text NOT NULL,
  `grade24` text NOT NULL,
  `sub25` text NOT NULL,
  `grade25` text NOT NULL,
  `sub26` text NOT NULL,
  `grade26` text NOT NULL,
  `sub27` text NOT NULL,
  `grade27` text NOT NULL,
  `sub28` text NOT NULL,
  `grade28` text NOT NULL,
  `sub29` text NOT NULL,
  `grade29` text NOT NULL,
  `sub30` text NOT NULL,
  `grade30` text NOT NULL,
  `sem4` text NOT NULL,
  `AY4` text NOT NULL,
  `section4` text NOT NULL,
  `sub31` text NOT NULL,
  `grade31` text NOT NULL,
  `sub32` text NOT NULL,
  `grade32` text NOT NULL,
  `sub33` text NOT NULL,
  `grade33` text NOT NULL,
  `sub34` text NOT NULL,
  `grade34` text NOT NULL,
  `sub35` text NOT NULL,
  `grade35` text NOT NULL,
  `sub36` text NOT NULL,
  `grade36` text NOT NULL,
  `sub37` text NOT NULL,
  `grade37` text NOT NULL,
  `sub38` text NOT NULL,
  `grade38` text NOT NULL,
  `sub39` text NOT NULL,
  `grade39` text NOT NULL,
  `sub40` text NOT NULL,
  `grade40` text NOT NULL,
  `sem5` text NOT NULL,
  `AY5` text NOT NULL,
  `section5` text NOT NULL,
  `sub41` text NOT NULL,
  `grade41` text NOT NULL,
  `sub42` text NOT NULL,
  `grade42` text NOT NULL,
  `sub43` text NOT NULL,
  `grade43` text NOT NULL,
  `sub44` text NOT NULL,
  `grade44` text NOT NULL,
  `sub45` text NOT NULL,
  `grade45` text NOT NULL,
  `sub46` text NOT NULL,
  `grade46` text NOT NULL,
  `sub47` text NOT NULL,
  `grade47` text NOT NULL,
  `sub48` text NOT NULL,
  `grade48` text NOT NULL,
  `sub49` text NOT NULL,
  `grade49` text NOT NULL,
  `sub50` text NOT NULL,
  `grade50` text NOT NULL,
  `sem6` text NOT NULL,
  `AY6` text NOT NULL,
  `section6` text NOT NULL,
  `sub51` text NOT NULL,
  `grade51` text NOT NULL,
  `sub52` text NOT NULL,
  `grade52` text NOT NULL,
  `sub53` text NOT NULL,
  `grade53` text NOT NULL,
  `sub54` text NOT NULL,
  `grade54` text NOT NULL,
  `sub55` text NOT NULL,
  `grade55` text NOT NULL,
  `sub56` text NOT NULL,
  `grade56` text NOT NULL,
  `sub57` text NOT NULL,
  `grade57` text NOT NULL,
  `sub58` text NOT NULL,
  `grade58` text NOT NULL,
  `sub59` text NOT NULL,
  `grade59` text NOT NULL,
  `sub60` text NOT NULL,
  `grade60` text NOT NULL,
  `sem7` text NOT NULL,
  `AY7` text NOT NULL,
  `section7` text NOT NULL,
  `sub61` text NOT NULL,
  `grade61` text NOT NULL,
  `sub62` text NOT NULL,
  `grade62` text NOT NULL,
  `sub63` text NOT NULL,
  `grade63` text NOT NULL,
  `sub64` text NOT NULL,
  `grade64` text NOT NULL,
  `sub65` text NOT NULL,
  `grade65` text NOT NULL,
  `sub66` text NOT NULL,
  `grade66` text NOT NULL,
  `sub67` text NOT NULL,
  `grade67` text NOT NULL,
  `sub68` text NOT NULL,
  `grade68` text NOT NULL,
  `sub69` text NOT NULL,
  `grade69` text NOT NULL,
  `sub70` text NOT NULL,
  `grade70` text NOT NULL,
  `sem8` text NOT NULL,
  `AY8` text NOT NULL,
  `section8` text NOT NULL,
  `sub71` text NOT NULL,
  `grade71` text NOT NULL,
  `sub72` text NOT NULL,
  `grade72` text NOT NULL,
  `sub73` text NOT NULL,
  `grade73` text NOT NULL,
  `sub74` text NOT NULL,
  `grade74` text NOT NULL,
  `sub75` text NOT NULL,
  `grade75` text NOT NULL,
  `sub76` text NOT NULL,
  `grade76` text NOT NULL,
  `sub77` text NOT NULL,
  `grade77` text NOT NULL,
  `sub78` text NOT NULL,
  `grade78` text NOT NULL,
  `sub79` text NOT NULL,
  `grade79` text NOT NULL,
  `sub80` text NOT NULL,
  `grade80` text NOT NULL,
  `sem9` text NOT NULL,
  `AY9` text NOT NULL,
  `section9` text NOT NULL,
  `sub81` text NOT NULL,
  `grade81` text NOT NULL,
  `sub82` text NOT NULL,
  `grade82` text NOT NULL,
  `sub83` text NOT NULL,
  `grade83` text NOT NULL,
  `sub84` text NOT NULL,
  `grade84` text NOT NULL,
  `sub85` text NOT NULL,
  `grade85` text NOT NULL,
  `sub86` text NOT NULL,
  `grade86` text NOT NULL,
  `sub87` text NOT NULL,
  `grade87` text NOT NULL,
  `sub88` text NOT NULL,
  `grade88` text NOT NULL,
  `sub89` text NOT NULL,
  `grade89` text NOT NULL,
  `sub90` text NOT NULL,
  `grade90` text NOT NULL,
  `acquire` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itgrade`
--

INSERT INTO `itgrade` (`id`, `sem`, `AY`, `name`, `studentid`, `course`, `section`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `sub4`, `grade4`, `sub5`, `grade5`, `sub6`, `grade6`, `sub7`, `grade7`, `sub8`, `grade8`, `sub9`, `grade9`, `sub10`, `grade10`, `sem2`, `AY2`, `section2`, `sub11`, `grade11`, `sub12`, `grade12`, `sub13`, `grade13`, `sub14`, `grade14`, `sub15`, `grade15`, `sub16`, `grade16`, `sub17`, `grade17`, `sub18`, `grade18`, `sub19`, `grade19`, `sub20`, `grade20`, `sem3`, `AY3`, `section3`, `sub21`, `grade21`, `sub22`, `grade22`, `sub23`, `grade23`, `sub24`, `grade24`, `sub25`, `grade25`, `sub26`, `grade26`, `sub27`, `grade27`, `sub28`, `grade28`, `sub29`, `grade29`, `sub30`, `grade30`, `sem4`, `AY4`, `section4`, `sub31`, `grade31`, `sub32`, `grade32`, `sub33`, `grade33`, `sub34`, `grade34`, `sub35`, `grade35`, `sub36`, `grade36`, `sub37`, `grade37`, `sub38`, `grade38`, `sub39`, `grade39`, `sub40`, `grade40`, `sem5`, `AY5`, `section5`, `sub41`, `grade41`, `sub42`, `grade42`, `sub43`, `grade43`, `sub44`, `grade44`, `sub45`, `grade45`, `sub46`, `grade46`, `sub47`, `grade47`, `sub48`, `grade48`, `sub49`, `grade49`, `sub50`, `grade50`, `sem6`, `AY6`, `section6`, `sub51`, `grade51`, `sub52`, `grade52`, `sub53`, `grade53`, `sub54`, `grade54`, `sub55`, `grade55`, `sub56`, `grade56`, `sub57`, `grade57`, `sub58`, `grade58`, `sub59`, `grade59`, `sub60`, `grade60`, `sem7`, `AY7`, `section7`, `sub61`, `grade61`, `sub62`, `grade62`, `sub63`, `grade63`, `sub64`, `grade64`, `sub65`, `grade65`, `sub66`, `grade66`, `sub67`, `grade67`, `sub68`, `grade68`, `sub69`, `grade69`, `sub70`, `grade70`, `sem8`, `AY8`, `section8`, `sub71`, `grade71`, `sub72`, `grade72`, `sub73`, `grade73`, `sub74`, `grade74`, `sub75`, `grade75`, `sub76`, `grade76`, `sub77`, `grade77`, `sub78`, `grade78`, `sub79`, `grade79`, `sub80`, `grade80`, `sem9`, `AY9`, `section9`, `sub81`, `grade81`, `sub82`, `grade82`, `sub83`, `grade83`, `sub84`, `grade84`, `sub85`, `grade85`, `sub86`, `grade86`, `sub87`, `grade87`, `sub88`, `grade88`, `sub89`, `grade89`, `sub90`, `grade90`, `acquire`) VALUES
(4, '1st', '2018-2019', 'Mark Christian P. Rubia', 'A18-00277', 'BSIT', 'I - A', 'IT 101', '1.50', 'IT 102', '2.25', 'Gen Ed 101', '2.00', 'Gen Ed 102', '1.50', 'Gen Ed 103', '2.25', 'Gen Ed 104', '2.00', 'NSTP 1', '1.00', 'PE 101', '2.25', '', '', '', '', '2nd', '2018-2019', 'I - A', 'IT 160', '2.00', 'IT 103', '2.00', 'Gen Ed 105', '1.75', 'Gen Ed 106', '1.75', 'Gen Ed 107', '2.50', 'Gen Ed 108', '2.00', 'NSTP 2', '1.25', 'PE 102', '1.00', '', '', '', '', '1st', '2019-2020', 'II - A', 'IT 104', '1.75', 'IT 161', '1.50', 'IT 162', '1.75', 'IT 163', '1.50', 'Fil 101', '2.00', 'Rizal', '1.50', 'PE 103', '1.50', '', '', '', '', '', '', '2nd', '2019-2020', 'II - A', 'IT 105', '1.50', 'IT 164', '2.00', 'IT 165', '2.00', 'IT 166', '1.50', 'IT 167', '2.00', 'IT 168', '2.00', 'Fil 102', '2.00', 'PE 104', '2.25', '', '', '', '', '1st', '2020-2021', 'III - B', 'IT 169', '2.25', 'IT 170', '2.00', 'IT 171', '1.75', 'IT 172', '1.75', 'IT 173', '2.00', 'IT Elect 1', '1.75', 'FL 1', '1.50', 'Lit 101', '2.00', '', '', '', '', '2nd', '2020-2021', 'III - B', 'IT 174', '1.75', 'IT 106', '2.00', 'IT 175', '1.50', 'IT 176', '1.00', 'IT Elect 2', '1.75', 'IT Elect 3', '1.75', 'Free Elect 101', '1.50', 'FL 2', '1.50', 'Lit 102', '1.50', '', '', 'Midyear', '2021', 'III - B', 'IT 177', '1.50', 'IT 164', '1.50', 'IT 178', '1.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2021-2022', 'IV - D', 'IT 179', '2.00', 'Capstone 2', '1.25', 'IT Elect 4', '2.25', 'IT Elect 5', '2.25', 'Free Elect 102', '2.00', '', '', '', '', '', '', '', '', '', '', '2nd', '2021-2022', 'IV - D', 'PRCT 100', '1.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Already Acquired'),
(5, '1st', '', 'Micha Joy B. Castro', 'A19-00442', 'BSIT', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'II - A', 'IT 104', '2.00', 'IT 161', '2.00', 'IT 162', '2.00', 'IT 163', '2.00', 'Fil 101', '1.75', 'Rizal', '1.75', 'PE 103', '2.25', '', '', '', '', '', '', '1st', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Midyear', '', 'III - ', '', '2.00', 'IT 161', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Already Acquired');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `studentid`, `message`, `date`) VALUES
(5, 'A18-00277', 'You have IP on Capstone 2', '2022-12-18'),
(4, 'A19-00334', 'You have IP on IT 169', '2022-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `registrarisrecords`
--

DROP TABLE IF EXISTS `registrarisrecords`;
CREATE TABLE IF NOT EXISTS `registrarisrecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` text NOT NULL,
  `AY` text NOT NULL,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `course` text NOT NULL,
  `section` text NOT NULL,
  `sub1` text NOT NULL,
  `grade1` text NOT NULL,
  `sub2` text NOT NULL,
  `grade2` text NOT NULL,
  `sub3` text NOT NULL,
  `grade3` text NOT NULL,
  `sub4` text NOT NULL,
  `grade4` text NOT NULL,
  `sub5` text NOT NULL,
  `grade5` text NOT NULL,
  `sub6` text NOT NULL,
  `grade6` text NOT NULL,
  `sub7` text NOT NULL,
  `grade7` text NOT NULL,
  `sub8` text NOT NULL,
  `grade8` text NOT NULL,
  `sub9` text NOT NULL,
  `grade9` text NOT NULL,
  `sub10` text NOT NULL,
  `grade10` text NOT NULL,
  `sem2` text NOT NULL,
  `AY2` text NOT NULL,
  `section2` text NOT NULL,
  `sub11` text NOT NULL,
  `grade11` text NOT NULL,
  `sub12` text NOT NULL,
  `grade12` text NOT NULL,
  `sub13` text NOT NULL,
  `grade13` text NOT NULL,
  `sub14` text NOT NULL,
  `grade14` text NOT NULL,
  `sub15` text NOT NULL,
  `grade15` text NOT NULL,
  `sub16` text NOT NULL,
  `grade16` text NOT NULL,
  `sub17` text NOT NULL,
  `grade17` text NOT NULL,
  `sub18` text NOT NULL,
  `grade18` text NOT NULL,
  `sub19` text NOT NULL,
  `grade19` text NOT NULL,
  `sub20` text NOT NULL,
  `grade20` text NOT NULL,
  `sem3` text NOT NULL,
  `AY3` text NOT NULL,
  `section3` text NOT NULL,
  `sub21` text NOT NULL,
  `grade21` text NOT NULL,
  `sub22` text NOT NULL,
  `grade22` text NOT NULL,
  `sub23` text NOT NULL,
  `grade23` text NOT NULL,
  `sub24` text NOT NULL,
  `grade24` text NOT NULL,
  `sub25` text NOT NULL,
  `grade25` text NOT NULL,
  `sub26` text NOT NULL,
  `grade26` text NOT NULL,
  `sub27` text NOT NULL,
  `grade27` text NOT NULL,
  `sub28` text NOT NULL,
  `grade28` text NOT NULL,
  `sub29` text NOT NULL,
  `grade29` text NOT NULL,
  `sub30` text NOT NULL,
  `grade30` text NOT NULL,
  `sem4` text NOT NULL,
  `AY4` text NOT NULL,
  `section4` text NOT NULL,
  `sub31` text NOT NULL,
  `grade31` text NOT NULL,
  `sub32` text NOT NULL,
  `grade32` text NOT NULL,
  `sub33` text NOT NULL,
  `grade33` text NOT NULL,
  `sub34` text NOT NULL,
  `grade34` text NOT NULL,
  `sub35` text NOT NULL,
  `grade35` text NOT NULL,
  `sub36` text NOT NULL,
  `grade36` text NOT NULL,
  `sub37` text NOT NULL,
  `grade37` text NOT NULL,
  `sub38` text NOT NULL,
  `grade38` text NOT NULL,
  `sub39` text NOT NULL,
  `grade39` text NOT NULL,
  `sub40` text NOT NULL,
  `grade40` text NOT NULL,
  `sem5` text NOT NULL,
  `AY5` text NOT NULL,
  `section5` text NOT NULL,
  `sub41` text NOT NULL,
  `grade41` text NOT NULL,
  `sub42` text NOT NULL,
  `grade42` text NOT NULL,
  `sub43` text NOT NULL,
  `grade43` text NOT NULL,
  `sub44` text NOT NULL,
  `grade44` text NOT NULL,
  `sub45` text NOT NULL,
  `grade45` text NOT NULL,
  `sub46` text NOT NULL,
  `grade46` text NOT NULL,
  `sub47` text NOT NULL,
  `grade47` text NOT NULL,
  `sub48` text NOT NULL,
  `grade48` text NOT NULL,
  `sub49` text NOT NULL,
  `grade49` text NOT NULL,
  `sub50` text NOT NULL,
  `grade50` text NOT NULL,
  `sem6` text NOT NULL,
  `AY6` text NOT NULL,
  `section6` text NOT NULL,
  `sub51` text NOT NULL,
  `grade51` text NOT NULL,
  `sub52` text NOT NULL,
  `grade52` text NOT NULL,
  `sub53` text NOT NULL,
  `grade53` text NOT NULL,
  `sub54` text NOT NULL,
  `grade54` text NOT NULL,
  `sub55` text NOT NULL,
  `grade55` text NOT NULL,
  `sub56` text NOT NULL,
  `grade56` text NOT NULL,
  `sub57` text NOT NULL,
  `grade57` text NOT NULL,
  `sub58` text NOT NULL,
  `grade58` text NOT NULL,
  `sub59` text NOT NULL,
  `grade59` text NOT NULL,
  `sub60` text NOT NULL,
  `grade60` text NOT NULL,
  `sem7` text NOT NULL,
  `AY7` text NOT NULL,
  `section7` text NOT NULL,
  `sub61` text NOT NULL,
  `grade61` text NOT NULL,
  `sub62` text NOT NULL,
  `grade62` text NOT NULL,
  `sub63` text NOT NULL,
  `grade63` text NOT NULL,
  `sub64` text NOT NULL,
  `grade64` text NOT NULL,
  `sub65` text NOT NULL,
  `grade65` text NOT NULL,
  `sub66` text NOT NULL,
  `grade66` text NOT NULL,
  `sub67` text NOT NULL,
  `grade67` text NOT NULL,
  `sub68` text NOT NULL,
  `grade68` text NOT NULL,
  `sub69` text NOT NULL,
  `grade69` text NOT NULL,
  `sub70` text NOT NULL,
  `grade70` text NOT NULL,
  `sem8` text NOT NULL,
  `AY8` text NOT NULL,
  `section8` text NOT NULL,
  `sub71` text NOT NULL,
  `grade71` text NOT NULL,
  `sub72` text NOT NULL,
  `grade72` text NOT NULL,
  `sub73` text NOT NULL,
  `grade73` text NOT NULL,
  `sub74` text NOT NULL,
  `grade74` text NOT NULL,
  `sub75` text NOT NULL,
  `grade75` text NOT NULL,
  `sub76` text NOT NULL,
  `grade76` text NOT NULL,
  `sub77` text NOT NULL,
  `grade77` text NOT NULL,
  `sub78` text NOT NULL,
  `grade78` text NOT NULL,
  `sub79` text NOT NULL,
  `grade79` text NOT NULL,
  `sub80` text NOT NULL,
  `grade80` text NOT NULL,
  `sem9` text NOT NULL,
  `AY9` text NOT NULL,
  `section9` text NOT NULL,
  `sub81` text NOT NULL,
  `grade81` text NOT NULL,
  `sub82` text NOT NULL,
  `grade82` text NOT NULL,
  `sub83` text NOT NULL,
  `grade83` text NOT NULL,
  `sub84` text NOT NULL,
  `grade84` text NOT NULL,
  `sub85` text NOT NULL,
  `grade85` text NOT NULL,
  `sub86` text NOT NULL,
  `grade86` text NOT NULL,
  `sub87` text NOT NULL,
  `grade87` text NOT NULL,
  `sub88` text NOT NULL,
  `grade88` text NOT NULL,
  `sub89` text NOT NULL,
  `grade89` text NOT NULL,
  `sub90` text NOT NULL,
  `grade90` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrarisrecords`
--

INSERT INTO `registrarisrecords` (`id`, `sem`, `AY`, `name`, `studentid`, `course`, `section`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `sub4`, `grade4`, `sub5`, `grade5`, `sub6`, `grade6`, `sub7`, `grade7`, `sub8`, `grade8`, `sub9`, `grade9`, `sub10`, `grade10`, `sem2`, `AY2`, `section2`, `sub11`, `grade11`, `sub12`, `grade12`, `sub13`, `grade13`, `sub14`, `grade14`, `sub15`, `grade15`, `sub16`, `grade16`, `sub17`, `grade17`, `sub18`, `grade18`, `sub19`, `grade19`, `sub20`, `grade20`, `sem3`, `AY3`, `section3`, `sub21`, `grade21`, `sub22`, `grade22`, `sub23`, `grade23`, `sub24`, `grade24`, `sub25`, `grade25`, `sub26`, `grade26`, `sub27`, `grade27`, `sub28`, `grade28`, `sub29`, `grade29`, `sub30`, `grade30`, `sem4`, `AY4`, `section4`, `sub31`, `grade31`, `sub32`, `grade32`, `sub33`, `grade33`, `sub34`, `grade34`, `sub35`, `grade35`, `sub36`, `grade36`, `sub37`, `grade37`, `sub38`, `grade38`, `sub39`, `grade39`, `sub40`, `grade40`, `sem5`, `AY5`, `section5`, `sub41`, `grade41`, `sub42`, `grade42`, `sub43`, `grade43`, `sub44`, `grade44`, `sub45`, `grade45`, `sub46`, `grade46`, `sub47`, `grade47`, `sub48`, `grade48`, `sub49`, `grade49`, `sub50`, `grade50`, `sem6`, `AY6`, `section6`, `sub51`, `grade51`, `sub52`, `grade52`, `sub53`, `grade53`, `sub54`, `grade54`, `sub55`, `grade55`, `sub56`, `grade56`, `sub57`, `grade57`, `sub58`, `grade58`, `sub59`, `grade59`, `sub60`, `grade60`, `sem7`, `AY7`, `section7`, `sub61`, `grade61`, `sub62`, `grade62`, `sub63`, `grade63`, `sub64`, `grade64`, `sub65`, `grade65`, `sub66`, `grade66`, `sub67`, `grade67`, `sub68`, `grade68`, `sub69`, `grade69`, `sub70`, `grade70`, `sem8`, `AY8`, `section8`, `sub71`, `grade71`, `sub72`, `grade72`, `sub73`, `grade73`, `sub74`, `grade74`, `sub75`, `grade75`, `sub76`, `grade76`, `sub77`, `grade77`, `sub78`, `grade78`, `sub79`, `grade79`, `sub80`, `grade80`, `sem9`, `AY9`, `section9`, `sub81`, `grade81`, `sub82`, `grade82`, `sub83`, `grade83`, `sub84`, `grade84`, `sub85`, `grade85`, `sub86`, `grade86`, `sub87`, `grade87`, `sub88`, `grade88`, `sub89`, `grade89`, `sub90`, `grade90`) VALUES
(5, '1st', '', 'Angela Y. Caberto', 'A19-00334', 'BSIS', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2021-2022', 'III - C', 'IT 169', 'IP / 2.25', 'IT 170', '2.0', 'IT 171', '2.0', 'IT 172', '2.0', 'IT 173', '2.50', 'IT ELECT 1', '1.50', 'Lit 101', '2.0', 'FL 1', '2.00', '', '', '', '', '2nd', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Midyear', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registraritrecords`
--

DROP TABLE IF EXISTS `registraritrecords`;
CREATE TABLE IF NOT EXISTS `registraritrecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` text NOT NULL,
  `AY` text NOT NULL,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `course` text NOT NULL,
  `section` text NOT NULL,
  `sub1` text NOT NULL,
  `grade1` text NOT NULL,
  `sub2` text NOT NULL,
  `grade2` text NOT NULL,
  `sub3` text NOT NULL,
  `grade3` text NOT NULL,
  `sub4` text NOT NULL,
  `grade4` text NOT NULL,
  `sub5` text NOT NULL,
  `grade5` text NOT NULL,
  `sub6` text NOT NULL,
  `grade6` text NOT NULL,
  `sub7` text NOT NULL,
  `grade7` text NOT NULL,
  `sub8` text NOT NULL,
  `grade8` text NOT NULL,
  `sub9` text NOT NULL,
  `grade9` text NOT NULL,
  `sub10` text NOT NULL,
  `grade10` text NOT NULL,
  `sem2` text NOT NULL,
  `AY2` text NOT NULL,
  `section2` text NOT NULL,
  `sub11` text NOT NULL,
  `grade11` text NOT NULL,
  `sub12` text NOT NULL,
  `grade12` text NOT NULL,
  `sub13` text NOT NULL,
  `grade13` text NOT NULL,
  `sub14` text NOT NULL,
  `grade14` text NOT NULL,
  `sub15` text NOT NULL,
  `grade15` text NOT NULL,
  `sub16` text NOT NULL,
  `grade16` text NOT NULL,
  `sub17` text NOT NULL,
  `grade17` text NOT NULL,
  `sub18` text NOT NULL,
  `grade18` text NOT NULL,
  `sub19` text NOT NULL,
  `grade19` text NOT NULL,
  `sub20` text NOT NULL,
  `grade20` text NOT NULL,
  `sem3` text NOT NULL,
  `AY3` text NOT NULL,
  `section3` text NOT NULL,
  `sub21` text NOT NULL,
  `grade21` text NOT NULL,
  `sub22` text NOT NULL,
  `grade22` text NOT NULL,
  `sub23` text NOT NULL,
  `grade23` text NOT NULL,
  `sub24` text NOT NULL,
  `grade24` text NOT NULL,
  `sub25` text NOT NULL,
  `grade25` text NOT NULL,
  `sub26` text NOT NULL,
  `grade26` text NOT NULL,
  `sub27` text NOT NULL,
  `grade27` text NOT NULL,
  `sub28` text NOT NULL,
  `grade28` text NOT NULL,
  `sub29` text NOT NULL,
  `grade29` text NOT NULL,
  `sub30` text NOT NULL,
  `grade30` text NOT NULL,
  `sem4` text NOT NULL,
  `AY4` text NOT NULL,
  `section4` text NOT NULL,
  `sub31` text NOT NULL,
  `grade31` text NOT NULL,
  `sub32` text NOT NULL,
  `grade32` text NOT NULL,
  `sub33` text NOT NULL,
  `grade33` text NOT NULL,
  `sub34` text NOT NULL,
  `grade34` text NOT NULL,
  `sub35` text NOT NULL,
  `grade35` text NOT NULL,
  `sub36` text NOT NULL,
  `grade36` text NOT NULL,
  `sub37` text NOT NULL,
  `grade37` text NOT NULL,
  `sub38` text NOT NULL,
  `grade38` text NOT NULL,
  `sub39` text NOT NULL,
  `grade39` text NOT NULL,
  `sub40` text NOT NULL,
  `grade40` text NOT NULL,
  `sem5` text NOT NULL,
  `AY5` text NOT NULL,
  `section5` text NOT NULL,
  `sub41` text NOT NULL,
  `grade41` text NOT NULL,
  `sub42` text NOT NULL,
  `grade42` text NOT NULL,
  `sub43` text NOT NULL,
  `grade43` text NOT NULL,
  `sub44` text NOT NULL,
  `grade44` text NOT NULL,
  `sub45` text NOT NULL,
  `grade45` text NOT NULL,
  `sub46` text NOT NULL,
  `grade46` text NOT NULL,
  `sub47` text NOT NULL,
  `grade47` text NOT NULL,
  `sub48` text NOT NULL,
  `grade48` text NOT NULL,
  `sub49` text NOT NULL,
  `grade49` text NOT NULL,
  `sub50` text NOT NULL,
  `grade50` text NOT NULL,
  `sem6` text NOT NULL,
  `AY6` text NOT NULL,
  `section6` text NOT NULL,
  `sub51` text NOT NULL,
  `grade51` text NOT NULL,
  `sub52` text NOT NULL,
  `grade52` text NOT NULL,
  `sub53` text NOT NULL,
  `grade53` text NOT NULL,
  `sub54` text NOT NULL,
  `grade54` text NOT NULL,
  `sub55` text NOT NULL,
  `grade55` text NOT NULL,
  `sub56` text NOT NULL,
  `grade56` text NOT NULL,
  `sub57` text NOT NULL,
  `grade57` text NOT NULL,
  `sub58` text NOT NULL,
  `grade58` text NOT NULL,
  `sub59` text NOT NULL,
  `grade59` text NOT NULL,
  `sub60` text NOT NULL,
  `grade60` text NOT NULL,
  `sem7` text NOT NULL,
  `AY7` text NOT NULL,
  `section7` text NOT NULL,
  `sub61` text NOT NULL,
  `grade61` text NOT NULL,
  `sub62` text NOT NULL,
  `grade62` text NOT NULL,
  `sub63` text NOT NULL,
  `grade63` text NOT NULL,
  `sub64` text NOT NULL,
  `grade64` text NOT NULL,
  `sub65` text NOT NULL,
  `grade65` text NOT NULL,
  `sub66` text NOT NULL,
  `grade66` text NOT NULL,
  `sub67` text NOT NULL,
  `grade67` text NOT NULL,
  `sub68` text NOT NULL,
  `grade68` text NOT NULL,
  `sub69` text NOT NULL,
  `grade69` text NOT NULL,
  `sub70` text NOT NULL,
  `grade70` text NOT NULL,
  `sem8` text NOT NULL,
  `AY8` text NOT NULL,
  `section8` text NOT NULL,
  `sub71` text NOT NULL,
  `grade71` text NOT NULL,
  `sub72` text NOT NULL,
  `grade72` text NOT NULL,
  `sub73` text NOT NULL,
  `grade73` text NOT NULL,
  `sub74` text NOT NULL,
  `grade74` text NOT NULL,
  `sub75` text NOT NULL,
  `grade75` text NOT NULL,
  `sub76` text NOT NULL,
  `grade76` text NOT NULL,
  `sub77` text NOT NULL,
  `grade77` text NOT NULL,
  `sub78` text NOT NULL,
  `grade78` text NOT NULL,
  `sub79` text NOT NULL,
  `grade79` text NOT NULL,
  `sub80` text NOT NULL,
  `grade80` text NOT NULL,
  `sem9` text NOT NULL,
  `AY9` text NOT NULL,
  `section9` text NOT NULL,
  `sub81` text NOT NULL,
  `grade81` text NOT NULL,
  `sub82` text NOT NULL,
  `grade82` text NOT NULL,
  `sub83` text NOT NULL,
  `grade83` text NOT NULL,
  `sub84` text NOT NULL,
  `grade84` text NOT NULL,
  `sub85` text NOT NULL,
  `grade85` text NOT NULL,
  `sub86` text NOT NULL,
  `grade86` text NOT NULL,
  `sub87` text NOT NULL,
  `grade87` text NOT NULL,
  `sub88` text NOT NULL,
  `grade88` text NOT NULL,
  `sub89` text NOT NULL,
  `grade89` text NOT NULL,
  `sub90` text NOT NULL,
  `grade90` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registraritrecords`
--

INSERT INTO `registraritrecords` (`id`, `sem`, `AY`, `name`, `studentid`, `course`, `section`, `sub1`, `grade1`, `sub2`, `grade2`, `sub3`, `grade3`, `sub4`, `grade4`, `sub5`, `grade5`, `sub6`, `grade6`, `sub7`, `grade7`, `sub8`, `grade8`, `sub9`, `grade9`, `sub10`, `grade10`, `sem2`, `AY2`, `section2`, `sub11`, `grade11`, `sub12`, `grade12`, `sub13`, `grade13`, `sub14`, `grade14`, `sub15`, `grade15`, `sub16`, `grade16`, `sub17`, `grade17`, `sub18`, `grade18`, `sub19`, `grade19`, `sub20`, `grade20`, `sem3`, `AY3`, `section3`, `sub21`, `grade21`, `sub22`, `grade22`, `sub23`, `grade23`, `sub24`, `grade24`, `sub25`, `grade25`, `sub26`, `grade26`, `sub27`, `grade27`, `sub28`, `grade28`, `sub29`, `grade29`, `sub30`, `grade30`, `sem4`, `AY4`, `section4`, `sub31`, `grade31`, `sub32`, `grade32`, `sub33`, `grade33`, `sub34`, `grade34`, `sub35`, `grade35`, `sub36`, `grade36`, `sub37`, `grade37`, `sub38`, `grade38`, `sub39`, `grade39`, `sub40`, `grade40`, `sem5`, `AY5`, `section5`, `sub41`, `grade41`, `sub42`, `grade42`, `sub43`, `grade43`, `sub44`, `grade44`, `sub45`, `grade45`, `sub46`, `grade46`, `sub47`, `grade47`, `sub48`, `grade48`, `sub49`, `grade49`, `sub50`, `grade50`, `sem6`, `AY6`, `section6`, `sub51`, `grade51`, `sub52`, `grade52`, `sub53`, `grade53`, `sub54`, `grade54`, `sub55`, `grade55`, `sub56`, `grade56`, `sub57`, `grade57`, `sub58`, `grade58`, `sub59`, `grade59`, `sub60`, `grade60`, `sem7`, `AY7`, `section7`, `sub61`, `grade61`, `sub62`, `grade62`, `sub63`, `grade63`, `sub64`, `grade64`, `sub65`, `grade65`, `sub66`, `grade66`, `sub67`, `grade67`, `sub68`, `grade68`, `sub69`, `grade69`, `sub70`, `grade70`, `sem8`, `AY8`, `section8`, `sub71`, `grade71`, `sub72`, `grade72`, `sub73`, `grade73`, `sub74`, `grade74`, `sub75`, `grade75`, `sub76`, `grade76`, `sub77`, `grade77`, `sub78`, `grade78`, `sub79`, `grade79`, `sub80`, `grade80`, `sem9`, `AY9`, `section9`, `sub81`, `grade81`, `sub82`, `grade82`, `sub83`, `grade83`, `sub84`, `grade84`, `sub85`, `grade85`, `sub86`, `grade86`, `sub87`, `grade87`, `sub88`, `grade88`, `sub89`, `grade89`, `sub90`, `grade90`) VALUES
(3, '1st', '', 'Micha Joy B. Castro', 'A19-00442', 'BSIT', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'I - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'II - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'II - A', 'IT 104', '2.00', 'IT 161', '2.00', 'IT 162', '2.00', 'IT 163', '2.00', 'Fil 101', '1.75', 'Rizal', '1.75', 'PE 103', '2.25', '', '', '', '', '', '', '1st', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'III - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Midyear', '', 'III - ', '', '2.00', 'IT 161', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2nd', '', 'IV - ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1st', '2018-2019', 'Mark Christian P. Rubia', 'A18-00277', 'BSIT', 'I - A', 'IT 101', '1.50', 'IT 102', '2.25', 'Gen Ed 101', '2.00', 'Gen Ed 102', '1.50', 'Gen Ed 103', '2.25', 'Gen Ed 104', '2.00', 'NSTP 1', '1.00', 'PE 101', '2.25', '', '', '', '', '2nd', '2018-2019', 'I - A', 'IT 160', '2.00', 'IT 103', '2.00', 'Gen Ed 105', '1.75', 'Gen Ed 106', '1.75', 'Gen Ed 107', '2.50', 'Gen Ed 108', '2.00', 'NSTP 2', '1.25', 'PE 102', '1.00', '', '', '', '', '1st', '2019-2020', 'II - A', 'IT 104', '1.75', 'IT 161', '1.50', 'IT 162', '1.75', 'IT 163', '1.50', 'Fil 101', '2.00', 'Rizal', '1.50', 'PE 103', '1.50', '', '', '', '', '', '', '2nd', '2019-2020', 'II - A', 'IT 105', '1.50', 'IT 164', '2.00', 'IT 165', '2.00', 'IT 166', '1.50', 'IT 167', '2.00', 'IT 168', '2.00', 'Fil 102', '2.00', 'PE 104', '2.25', '', '', '', '', '1st', '2020-2021', 'III - B', 'IT 169', '2.25', 'IT 170', '2.00', 'IT 171', '1.75', 'IT 172', '1.75', 'IT 173', '2.00', 'IT Elect 1', '1.75', 'FL 1', '1.50', 'Lit 101', '2.00', '', '', '', '', '2nd', '2020-2021', 'III - B', 'IT 174', '1.75', 'IT 106', '2.00', 'IT 175', '1.50', 'IT 176', '1.00', 'IT Elect 2', '1.75', 'IT Elect 3', '1.75', 'Free Elect 101', '1.50', 'FL 2', '1.50', 'Lit 102', '1.50', '', '', 'Midyear', '2021', 'III - B', 'IT 177', '1.50', 'IT 164', '1.50', 'IT 178', '1.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1st', '2021-2022', 'IV - D', 'IT 179', '2.00', 'Capstone 2', 'IP / 1.25', 'IT Elect 4', '2.25', 'IT Elect 5', '2.25', 'Free Elect 102', '2.00', '', '', '', '', '', '', '', '', '', '', '2nd', '2021-2022', 'IV - D', 'PRCT 100', '1.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `studentid` text NOT NULL,
  `course` text NOT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `studentid`, `course`, `date`, `image`) VALUES
(10, 'Mark Christian P. Rubia', 'A18-00277', 'BSIT', '2022-12-18', 'IMG-639e9e1ed81ad6.88867344.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `studentid`, `password`) VALUES
(2, 'A18-00277', 'mark22'),
(6, 'A19-00442', 'ispsc123');

-- --------------------------------------------------------

--
-- Table structure for table `useris`
--

DROP TABLE IF EXISTS `useris`;
CREATE TABLE IF NOT EXISTS `useris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useris`
--

INSERT INTO `useris` (`id`, `studentid`, `password`) VALUES
(3, 'A19-00334', 'ispsc123'),
(4, 'A19-00187', 'ispsc123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
