-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2013 at 10:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `viewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `classId` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=86 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classId`, `className`) VALUES
(67, 'Mechanical'),
(68, 'Electronic'),
(69, 'Software'),
(70, 'System'),
(71, 'Algorithm'),
(72, 'BOM'),
(73, 'Schematics'),
(74, 'Drawings'),
(75, 'Pdf'),
(76, 'Brochures'),
(77, 'Technicalguides'),
(78, 'GerberFiles'),
(79, 'SolidWorks'),
(80, 'Specification'),
(81, 'TestPlans'),
(82, 'TestReports'),
(83, 'AppNotes'),
(84, 'Tutorials'),
(85, 'MechanicalDrawings');

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `objectId` int(11) NOT NULL AUTO_INCREMENT,
  `objectName` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`objectId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=58 ;

--
-- Dumping data for table `objects`
--

INSERT INTO `objects` (`objectId`, `objectName`) VALUES
(55, 'Engineering'),
(56, 'Documents'),
(57, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `ID` int(11) NOT NULL,
  `className` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`ID`, `className`) VALUES
(55, 'Mechanical'),
(55, 'Electronic'),
(55, 'Software'),
(55, 'System'),
(55, 'Algorithm'),
(56, 'BOM'),
(56, 'Schematics'),
(56, 'Drawings'),
(56, 'Pdf'),
(57, 'Brochures'),
(57, 'Technicalguides');

-- --------------------------------------------------------

--
-- Table structure for table `subobject`
--

CREATE TABLE IF NOT EXISTS `subobject` (
  `ID` int(11) NOT NULL,
  `objectName` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `subrelation`
--

CREATE TABLE IF NOT EXISTS `subrelation` (
  `ID` int(11) NOT NULL,
  `className` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
