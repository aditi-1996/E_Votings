-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2013 at 08:21 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `position`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussc_pos`
--

CREATE TABLE IF NOT EXISTS `bussc_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(50) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bussc_pos`
--

INSERT INTO `bussc_pos` (`pID`, `pNAME`) VALUES
(1, 'aaaa'),
(2, 'MUSE'),
(3, 'full time'),
(4, 'full time'),
(5, 'full time');

-- --------------------------------------------------------

--
-- Table structure for table `cas_pos`
--

CREATE TABLE IF NOT EXISTS `cas_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cas_pos`
--

INSERT INTO `cas_pos` (`pID`, `pNAME`) VALUES
(1, 'cas_secret');

-- --------------------------------------------------------

--
-- Table structure for table `cbaa_pos`
--

CREATE TABLE IF NOT EXISTS `cbaa_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cbaa_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `cede_pos`
--

CREATE TABLE IF NOT EXISTS `cede_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cede_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `conursing_pos`
--

CREATE TABLE IF NOT EXISTS `conursing_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `conursing_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `educ_pos`
--

CREATE TABLE IF NOT EXISTS `educ_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `educ_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `shmt_pos`
--

CREATE TABLE IF NOT EXISTS `shmt_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shmt_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `site_pos`
--

CREATE TABLE IF NOT EXISTS `site_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(40) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `site_pos`
--


-- --------------------------------------------------------

--
-- Table structure for table `stc_pos`
--

CREATE TABLE IF NOT EXISTS `stc_pos` (
  `pID` int(11) NOT NULL AUTO_INCREMENT,
  `pNAME` varchar(50) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stc_pos`
--

INSERT INTO `stc_pos` (`pID`, `pNAME`) VALUES
(1, 'full time'),
(2, 'STC Manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
