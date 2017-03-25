-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 05:42 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `abatch`
--

DROP TABLE IF EXISTS `abatch`;
CREATE TABLE IF NOT EXISTS `abatch` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abatch`
--

INSERT INTO `abatch` (`bid`, `batch`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersa1`
--

DROP TABLE IF EXISTS `allocteachersa1`;
CREATE TABLE IF NOT EXISTS `allocteachersa1` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersa1`
--

INSERT INTO `allocteachersa1` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, 'DS(PRACTICAL) '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, '- '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, '- '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersa2`
--

DROP TABLE IF EXISTS `allocteachersa2`;
CREATE TABLE IF NOT EXISTS `allocteachersa2` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersa2`
--

INSERT INTO `allocteachersa2` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, 'DS(PRACTICAL) '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, '- '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, '- '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersa3`
--

DROP TABLE IF EXISTS `allocteachersa3`;
CREATE TABLE IF NOT EXISTS `allocteachersa3` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersa3`
--

INSERT INTO `allocteachersa3` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, 'DS(PRACTICAL) '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, '- '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, '- '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersb1`
--

DROP TABLE IF EXISTS `allocteachersb1`;
CREATE TABLE IF NOT EXISTS `allocteachersb1` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersb1`
--

INSERT INTO `allocteachersb1` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, 'DS(PRACTICAL) '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, '- '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, 'M3 '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersb2`
--

DROP TABLE IF EXISTS `allocteachersb2`;
CREATE TABLE IF NOT EXISTS `allocteachersb2` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersb2`
--

INSERT INTO `allocteachersb2` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, 'DS(PRACTICAL) '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, '- '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, '- '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachersb3`
--

DROP TABLE IF EXISTS `allocteachersb3`;
CREATE TABLE IF NOT EXISTS `allocteachersb3` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachersb3`
--

INSERT INTO `allocteachersb3` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'DLDA ', 1, 'DLDA(PRACTICAL) '),
('keerti', 'kharatmol', '- ', 2, '- '),
('Mandar', 'Ganjapurkar', '- ', 3, '- '),
('Manasi', 'Choche', 'OOPM ', 4, 'OOPM(PRACTICAL) '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', 'DIS ', 7, '- '),
('kaushiki', 'upadhyay', 'DS ', 8, 'DS(PRACTICAL) '),
('Kavitha', 'Vishwananthan', 'ECCF ', 9, 'ECCF(PRACTICAL) '),
('Pallavi', 'Madam', 'M3 ', 10, '- '),
('Sheena', 'Unmesh', '- ', 11, '- '),
('Pragati', 'Chandankhede', '- ', 12, '-');

-- --------------------------------------------------------

--
-- Table structure for table `allocteacherta1`
--

DROP TABLE IF EXISTS `allocteacherta1`;
CREATE TABLE IF NOT EXISTS `allocteacherta1` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteacherta1`
--

INSERT INTO `allocteacherta1` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, 'SOAD(PRACTICAL) '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, 'WT '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, '- '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', 'OS ', 12, 'OS(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `allocteacherta2`
--

DROP TABLE IF EXISTS `allocteacherta2`;
CREATE TABLE IF NOT EXISTS `allocteacherta2` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteacherta2`
--

INSERT INTO `allocteacherta2` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, 'SOAD(PRACTICAL) '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, '- '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, 'WT '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', 'OS ', 12, 'OS(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `allocteacherta3`
--

DROP TABLE IF EXISTS `allocteacherta3`;
CREATE TABLE IF NOT EXISTS `allocteacherta3` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteacherta3`
--

INSERT INTO `allocteacherta3` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, 'SOAD(PRACTICAL) '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, 'WT '),
('Hari', 'Rajai', '- ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, '- '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', 'OS ', 12, 'OS(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachertb1`
--

DROP TABLE IF EXISTS `allocteachertb1`;
CREATE TABLE IF NOT EXISTS `allocteachertb1` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachertb1`
--

INSERT INTO `allocteachertb1` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, 'SOAD(PRACTICAL) '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, '- '),
('Hari', 'Rajai', 'OS ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, 'WT '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', '- ', 12, 'OS(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachertb2`
--

DROP TABLE IF EXISTS `allocteachertb2`;
CREATE TABLE IF NOT EXISTS `allocteachertb2` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachertb2`
--

INSERT INTO `allocteachertb2` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, '- '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, '- '),
('Hari', 'Rajai', 'OS ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, 'WT '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', 'OS(PRACTICAL) ', 12, 'SOAD(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `allocteachertb3`
--

DROP TABLE IF EXISTS `allocteachertb3`;
CREATE TABLE IF NOT EXISTS `allocteachertb3` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `practical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocteachertb3`
--

INSERT INTO `allocteachertb3` (`firstname`, `lastname`, `subjects`, `aid`, `practical`) VALUES
('Nilima', 'Patil', 'SOAD ', 1, 'SOAD(PRACTICAL) '),
('keerti', 'kharatmol', 'CN ', 2, 'CN(PRACTICAL) '),
('Mandar', 'Ganjapurkar', 'MP ', 3, 'MP(PRACTICAL) '),
('Manasi', 'Choche', '- ', 4, 'WT '),
('Hari', 'Rajai', 'OS ', 5, '- '),
('Sonal', 'Balpande', '- ', 6, '- '),
('Vaishali', 'Yeole', '- ', 7, '- '),
('kaushiki', 'upadhyay', '- ', 8, '- '),
('Kavitha', 'Vishwananthan', '- ', 9, '- '),
('Pallavi', 'Madam', '- ', 10, '- '),
('Sheena', 'Unmesh', 'BCE ', 11, 'BCE(PRACTICAL) '),
('Pragati', 'Chandankhede', '- ', 12, 'OS(PRACTICAL)');

-- --------------------------------------------------------

--
-- Table structure for table `bbatch`
--

DROP TABLE IF EXISTS `bbatch`;
CREATE TABLE IF NOT EXISTS `bbatch` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbatch`
--

INSERT INTO `bbatch` (`bid`, `batch`) VALUES
(1, 'B1'),
(2, 'B2'),
(3, 'B3');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

DROP TABLE IF EXISTS `demo`;
CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`) VALUES
(1, 'abc'),
(2, 'pqr'),
(3, 'sid'),
(4, 'sid'),
(5, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `sesubjects`
--

DROP TABLE IF EXISTS `sesubjects`;
CREATE TABLE IF NOT EXISTS `sesubjects` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesubjects`
--

INSERT INTO `sesubjects` (`sid`, `sname`) VALUES
(1, 'DS  '),
(2, 'OOPM  '),
(3, 'ECCF  '),
(4, 'M3  '),
(5, 'DLDA  '),
(6, 'DIS  '),
(7, 'DS(PRACTICAL)  '),
(8, 'OOPM(PRACTICAL)  '),
(9, 'ECCF(PRACTICAL)  '),
(10, 'DLDA(PRACTICAL) ');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tpassword` varchar(255) NOT NULL,
  `subject_1` varchar(255) NOT NULL,
  `subject_2` varchar(255) DEFAULT NULL,
  `subject_3` varchar(255) DEFAULT NULL,
  `prac_1` varchar(255) DEFAULT NULL,
  `prac_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `fname`, `lname`, `username`, `tpassword`, `subject_1`, `subject_2`, `subject_3`, `prac_1`, `prac_2`) VALUES
(1, 'Nilima', 'Patil', 'nilimap', 'nilimap', 'SOAD', 'DLDA', '', 'SOAD', 'DLDA'),
(2, 'keerti', 'kharatmol', 'keertik', 'keertik', 'CN', 'COA', '', 'CN', 'COA'),
(3, 'Mandar', 'Ganjapurkar', 'mandarg', 'mandarg', 'MP', '', '', 'MP', ''),
(4, 'Manasi', 'Choche', 'manasic', 'manasic', 'OOPM', 'AOA', '', 'AOA', 'WT'),
(5, 'Hari', 'Rajai', 'harir', 'harir', 'OS', 'COA', '', 'COA', ''),
(6, 'Sonal', 'Balpande', 'sonalb', 'sonalb', 'DBMS', 'DS', '', 'DBMS', 'DS'),
(7, 'Vaishali', 'Yeole', 'vaishaliy', 'vaishaliy', 'DIS', '', '', 'WT', 'DBMS'),
(9, 'Kavitha', 'Vishwananthan', 'kavithav', 'kavithav', 'ECCF', '', '', 'ECCF', ''),
(11, 'Sheena', 'Unmesh', 'sheenau', 'sheenau', 'BCE', '', '', 'BCE', ''),
(12, 'Pragati', 'Chandankhede', 'pragatic', 'pragatic', 'OS', '', '', 'OS', 'SOAD');

-- --------------------------------------------------------

--
-- Table structure for table `tesubjects`
--

DROP TABLE IF EXISTS `tesubjects`;
CREATE TABLE IF NOT EXISTS `tesubjects` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tesubjects`
--

INSERT INTO `tesubjects` (`sid`, `sname`) VALUES
(1, 'SOAD  '),
(2, 'MP  '),
(3, 'CN  '),
(4, 'OS  '),
(5, 'BCE  '),
(6, 'WT  '),
(7, 'SOAD(PRACTICAL)  '),
(8, 'MP(PRACTICAL)  '),
(9, 'CN(PRACTICAL)  '),
(10, 'OS(PRACTICAL)  '),
(11, 'BCE(PRACTICAL) ');

-- --------------------------------------------------------

--
-- Table structure for table `ttsea1`
--

DROP TABLE IF EXISTS `ttsea1`;
CREATE TABLE IF NOT EXISTS `ttsea1` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttsea1`
--

INSERT INTO `ttsea1` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'DS(PRACTICAL) ', '- ', '- ', '- ', 'OOPM(PRACTICAL) '),
('10:30-11:30', 'DS(PRACTICAL) ', '- ', '- ', '- ', 'OOPM(PRACTICAL) '),
('11:30-12:30', 'ECCF ', 'DIS ', 'DS ', 'DLDA(PRACTICAL) ', 'DS '),
('12:30-1:30', 'DLDA ', 'DS ', 'DIS ', 'DLDA(PRACTICAL) ', 'DIS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OOPM ', 'ECCF(PRACTICAL) ', 'M3 ', 'OOPM ', 'DLDA '),
('3:00-4:00', 'OOPM ', 'ECCF(PRACTICAL) ', 'ECCF ', 'DS ', 'OOPM '),
('4:00-5:00', 'M3 ', 'M3 ', 'DLDA ', 'ECCF ', 'DIS '),
('5:00-6:00', 'M3 ', 'ECCF ', 'M3 ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttsea2`
--

DROP TABLE IF EXISTS `ttsea2`;
CREATE TABLE IF NOT EXISTS `ttsea2` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttsea2`
--

INSERT INTO `ttsea2` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'DLDA(PRACTICAL) ', '- ', '- ', '- ', 'ECCF(PRACTICAL) '),
('10:30-11:30', 'DLDA(PRACTICAL) ', '- ', '- ', '- ', 'ECCF(PRACTICAL) '),
('11:30-12:30', 'ECCF ', 'DIS ', 'DS ', 'DS(PRACTICAL) ', 'DS '),
('12:30-1:30', 'DLDA ', 'DS ', 'DIS ', 'DS(PRACTICAL) ', 'DIS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OOPM ', 'ECCF(PRACTICAL) ', 'M3 ', 'OOPM ', 'DLDA '),
('3:00-4:00', 'OOPM ', 'ECCF(PRACTICAL) ', 'ECCF ', 'DS ', 'OOPM '),
('4:00-5:00', 'M3 ', 'M3 ', 'DLDA ', 'ECCF ', 'DIS '),
('5:00-6:00', 'M3 ', 'ECCF ', 'M3 ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttsea3`
--

DROP TABLE IF EXISTS `ttsea3`;
CREATE TABLE IF NOT EXISTS `ttsea3` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttsea3`
--

INSERT INTO `ttsea3` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'OOPM(PRACTICAL) ', '- ', '- ', '- ', 'DLDA(PRACTICAL) '),
('10:30-11:30', 'OOPM(PRACTICAL) ', '- ', '- ', '- ', 'DLDA(PRACTICAL) '),
('11:30-12:30', 'ECCF ', 'DIS ', 'DS ', 'ECCF(PRACTICAL) ', 'DS '),
('12:30-1:30', 'DLDA ', 'DS ', 'DIS ', 'ECCF(PRACTICAL) ', 'DIS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OOPM ', 'DS(PRACTICAL) ', 'M3 ', 'OOPM ', 'DLDA '),
('3:00-4:00', 'OOPM ', 'DS(PRACTICAL) ', 'ECCF ', 'DS ', 'OOPM '),
('4:00-5:00', 'M3 ', 'M3 ', 'DLDA ', 'ECCF ', 'DIS '),
('5:00-6:00', 'M3 ', 'ECCF ', 'M3 ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttseb1`
--

DROP TABLE IF EXISTS `ttseb1`;
CREATE TABLE IF NOT EXISTS `ttseb1` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttseb1`
--

INSERT INTO `ttseb1` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'DS(PRACTICAL) ', 'ECCF(PRACTICAL) ', '- ', '- '),
('10:30-11:30', '- ', 'DS(PRACTICAL) ', 'ECCF(PRACTICAL) ', '- ', '- '),
('11:30-12:30', 'M3 ', 'M3 ', 'OOPM ', 'OOPM ', 'OOPM(PRACTICAL) '),
('12:30-1:30', 'OOPM ', 'ECCF ', 'ECCF ', 'DS ', 'OOPM(PRACTICAL) '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'M3 ', 'M3 ', 'DLDA ', 'DLDA(PRACTICAL) ', 'DIS '),
('3:00-4:00', 'DIS ', 'DS ', 'M3 ', 'DLDA(PRACTICAL) ', 'ECCF '),
('4:00-5:00', 'DLDA ', 'DIS ', 'DIS ', 'DS ', 'OOPM '),
('5:00-6:00', 'ECCF ', '- ', '- ', 'DLDA ', 'DS ');

-- --------------------------------------------------------

--
-- Table structure for table `ttseb2`
--

DROP TABLE IF EXISTS `ttseb2`;
CREATE TABLE IF NOT EXISTS `ttseb2` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttseb2`
--

INSERT INTO `ttseb2` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'DLDA(PRACTICAL) ', 'OOPM(PRACTICAL) ', '- ', '- '),
('10:30-11:30', '- ', 'DLDA(PRACTICAL) ', 'OOPM(PRACTICAL) ', '- ', '- '),
('11:30-12:30', 'M3 ', 'OOPM ', 'OOPM ', 'OOPM ', 'ECCF(PRACTICAL) '),
('12:30-1:30', 'OOPM ', 'ECCF ', 'ECCF ', 'DS ', 'ECCF(PRACTICAL) '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'M3 ', 'M3 ', 'DLDA ', 'DS(PRACTICAL) ', 'DIS '),
('3:00-4:00', 'DIS ', 'DS ', 'M3 ', 'DS(PRACTICAL) ', 'ECCF '),
('4:00-5:00', 'DLDA ', 'DIS ', 'DIS ', 'DS ', 'OOPM '),
('5:00-6:00', 'ECCF ', '- ', '- ', 'DLDA ', 'DS ');

-- --------------------------------------------------------

--
-- Table structure for table `ttseb3`
--

DROP TABLE IF EXISTS `ttseb3`;
CREATE TABLE IF NOT EXISTS `ttseb3` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttseb3`
--

INSERT INTO `ttseb3` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'OOPM(PRACTICAL) ', 'DS(PRACTICAL) ', '- ', '- '),
('10:30-11:30', '- ', 'OOPM(PRACTICAL) ', 'DS(PRACTICAL) ', '- ', '- '),
('11:30-12:30', 'M3 ', 'M3 ', 'OOPM ', 'OOPM ', 'DLDA(PRACTICAL) '),
('12:30-1:30', 'OOPM ', 'ECCF ', 'ECCF ', 'DS ', 'DLDA(PRACTICAL) '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'M3 ', 'M3 ', 'DLDA ', 'ECCF(PRACTICAL) ', 'DIS '),
('3:00-4:00', 'DIS ', 'DS ', 'M3 ', 'ECCF(PRACTICAL) ', 'ECCF '),
('4:00-5:00', 'DLDA ', 'DIS ', 'DIS ', 'DS ', 'OOPM '),
('5:00-6:00', 'ECCF ', '- ', '- ', 'DLDA ', 'DS ');

-- --------------------------------------------------------

--
-- Table structure for table `tttea1`
--

DROP TABLE IF EXISTS `tttea1`;
CREATE TABLE IF NOT EXISTS `tttea1` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tttea1`
--

INSERT INTO `tttea1` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'WT ', 'MP ', 'BCE(PRACTICAL) ', '- '),
('10:30-11:30', 'SOAD ', 'WT ', 'OS ', 'BCE(PRACTICAL) ', 'CN '),
('11:30-12:30', 'MP(PRACTICAL) ', 'OS ', 'SOAD ', 'CN ', 'SOAD '),
('12:30-1:30', 'MP(PRACTICAL) ', 'SOAD ', 'CN ', 'MP ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OS ', 'BCE ', 'WT ', 'SOAD(PRACTICAL) ', 'MP '),
('3:00-4:00', 'CN ', 'MP ', 'WT ', 'SOAD(PRACTICAL) ', 'OS(PRACTICAL) '),
('4:00-5:00', 'CN(PRACTICAL) ', '- ', 'BCE ', '- ', 'OS(PRACTICAL) '),
('5:00-6:00', 'CN(PRACTICAL) ', '- ', '- ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `tttea2`
--

DROP TABLE IF EXISTS `tttea2`;
CREATE TABLE IF NOT EXISTS `tttea2` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tttea2`
--

INSERT INTO `tttea2` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'OS(PRACTICAL) ', 'MP ', 'CN(PRACTICAL) ', '- '),
('10:30-11:30', 'SOAD ', 'OS(PRACTICAL) ', 'OS ', 'CN(PRACTICAL) ', 'CN '),
('11:30-12:30', 'WT ', 'OS ', 'SOAD ', 'CN ', 'SOAD '),
('12:30-1:30', 'WT ', 'SOAD ', 'CN ', 'MP ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OS ', 'BCE ', 'SOAD(PRACTICAL) ', 'WT ', 'MP '),
('3:00-4:00', 'CN ', 'MP ', 'SOAD(PRACTICAL) ', 'WT ', 'MP(PRACTICAL) '),
('4:00-5:00', 'BCE(PRACTICAL) ', '- ', 'BCE ', '- ', 'MP(PRACTICAL) '),
('5:00-6:00', 'BCE(PRACTICAL) ', '- ', '- ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `tttea3`
--

DROP TABLE IF EXISTS `tttea3`;
CREATE TABLE IF NOT EXISTS `tttea3` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tttea3`
--

INSERT INTO `tttea3` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', '- ', 'MP(PRACTICAL) ', 'MP ', 'SOAD(PRACTICAL) ', '- '),
('10:30-11:30', 'SOAD ', 'MP(PRACTICAL) ', 'OS ', 'SOAD(PRACTICAL) ', 'CN '),
('11:30-12:30', 'BCE(PRACTICAL) ', 'OS ', 'SOAD ', 'CN ', 'SOAD '),
('12:30-1:30', 'BCE(PRACTICAL) ', 'SOAD ', 'CN ', 'MP ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'OS ', 'BCE ', 'CN(PRACTICAL) ', 'WT ', 'MP '),
('3:00-4:00', 'CN ', 'MP ', 'CN(PRACTICAL) ', 'WT ', 'WT '),
('4:00-5:00', 'OS(PRACTICAL) ', '- ', 'BCE ', '- ', 'WT '),
('5:00-6:00', 'OS(PRACTICAL) ', '- ', '- ', '- ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttteb`
--

DROP TABLE IF EXISTS `ttteb`;
CREATE TABLE IF NOT EXISTS `ttteb` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttteb`
--

INSERT INTO `ttteb` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'WT ', '- ', 'SOAD ', '- ', 'SOAD(PRACTICAL) '),
('10:30-11:30', 'WT ', 'OS ', 'CN ', 'OS ', 'SOAD(PRACTICAL) '),
('11:30-12:30', 'OS ', 'CN(PRACTICAL) ', 'MP(PRACTICAL) ', 'BCE(PRACTICAL) ', 'MP '),
('12:30-1:30', 'CN ', 'CN(PRACTICAL) ', 'MP(PRACTICAL) ', 'BCE(PRACTICAL) ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'SOAD ', 'CN ', 'BCE ', 'CN ', 'SOAD '),
('3:00-4:00', 'MP ', 'SOAD ', 'MP ', 'MP ', 'BCE '),
('4:00-5:00', '- ', 'WT ', '- ', 'OS(PRACTICAL) ', '- '),
('5:00-6:00', '- ', 'WT ', '- ', 'OS(PRACTICAL) ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttteb2`
--

DROP TABLE IF EXISTS `ttteb2`;
CREATE TABLE IF NOT EXISTS `ttteb2` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttteb2`
--

INSERT INTO `ttteb2` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'MP(PRACTICAL) ', '- ', 'SOAD ', '- ', 'WT '),
('10:30-11:30', 'MP(PRACTICAL) ', 'OS ', 'CN ', 'OS ', 'WT '),
('11:30-12:30', 'OS ', 'OS(PRACTICAL) ', 'BCE(PRACTICAL) ', 'SOAD(PRACTICAL) ', 'MP '),
('12:30-1:30', 'CN ', 'OS(PRACTICAL) ', 'BCE(PRACTICAL) ', 'SOAD(PRACTICAL) ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'SOAD ', 'CN ', 'BCE ', 'CN ', 'SOAD '),
('3:00-4:00', 'MP ', 'SOAD ', 'MP ', 'MP ', 'BCE(PRACTICAL) '),
('4:00-5:00', '- ', 'CN(PRACTICAL) ', '- ', 'WT ', '- '),
('5:00-6:00', '- ', 'CN(PRACTICAL) ', '- ', 'WT ', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `ttteb3`
--

DROP TABLE IF EXISTS `ttteb3`;
CREATE TABLE IF NOT EXISTS `ttteb3` (
  `timing` varchar(255) NOT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttteb3`
--

INSERT INTO `ttteb3` (`timing`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('9:30-10:30', 'CN(PRACTICAL) ', '- ', 'SOAD ', '- ', 'BCE(PRACTICAL) '),
('10:30-11:30', 'CN(PRACTICAL) ', 'OS ', 'CN ', 'OS ', 'BCE(PRACTICAL) '),
('11:30-12:30', 'OS ', 'MP(PRACTICAL) ', 'OS(PRACTICAL) ', 'WT ', 'MP '),
('12:30-1:30', 'CN ', 'MP(PRACTICAL) ', 'OS(PRACTICAL) ', 'WT ', 'OS '),
('1:30-2:00', 'BREAK', 'BREAK', 'BREAK', 'BREAK', 'BREAK'),
('2:00-3:00', 'SOAD ', 'CN ', 'BCE ', 'CN ', 'SOAD '),
('3:00-4:00', 'MP ', 'SOAD ', 'MP ', 'MP ', 'BCE '),
('4:00-5:00', '- ', 'SOAD(PRACTICAL) ', '- ', 'WT ', '- '),
('5:00-6:00', '- ', 'SOAD(PRACTICAL) ', '- ', 'WT ', '- ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
