-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2016 at 02:22 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kalotsavam`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ename` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL,
  PRIMARY KEY  (`ename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ename`, `status`, `year`) VALUES
('Amritakalotsavam', '1', '2016'),
('Amritakalotsavam2016', '0', '2016'),
('Sports', '1', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `groupevents`
--

CREATE TABLE `groupevents` (
  `gname` varchar(30) NOT NULL,
  `house` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `mem1` varchar(30) default NULL,
  `mem2` varchar(30) default NULL,
  `mem3` varchar(30) default NULL,
  `mem4` varchar(30) default NULL,
  `mem5` varchar(30) default NULL,
  `mem6` varchar(30) default NULL,
  `mem7` varchar(30) default NULL,
  `mem8` varchar(30) default NULL,
  `mem9` varchar(30) default NULL,
  `mem10` varchar(30) default NULL,
  PRIMARY KEY  (`gname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupevents`
--

INSERT INTO `groupevents` (`gname`, `house`, `pname`, `mem1`, `mem2`, `mem3`, `mem4`, `mem5`, `mem6`, `mem7`, `mem8`, `mem9`, `mem10`) VALUES
('aayudh', 'Amritamayi', ' Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('acm', 'Amritamayi', ' Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('asdd', 'Anandamayi', ' Drama ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('dreems', 'Amritamayi', ' Drama ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('garuda', 'Anandamayi', ' Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('m5', 'Anandamayi', ' Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mazha', 'Anandamayi', ' Drama ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mj5', 'Amritamayi', ' Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('zg', 'Amritamayi', ' Drama ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pid` varchar(30) NOT NULL default '',
  `name` varchar(40) default NULL,
  `type` varchar(30) default NULL,
  `score` int(10) default NULL,
  `maxpart` int(10) NOT NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`pid`, `name`, `type`, `score`, `maxpart`) VALUES
('1', 'Song', 'single', 10, 1),
('2', 'Drawing', 'single', 10, 1),
('3', 'Dance', 'group', 10, 10),
('4', 'Story Writing', 'single', 10, 1),
('5', 'Drama', 'group', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `house` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `batch`, `house`, `department`) VALUES
('', '', '', '', ''),
('123', 'Vyshak', 'Bca', 'Amritamayi', 'CSA'),
('147', 'Vinu', 'Bsc', 'Amritamayi', 'CSA'),
('159', 'Sonu', 'Bsc', 'Anandamayi', 'CSA'),
('258', 'Kumar', 'Mca', 'Anandamayi', 'CSA'),
('357', 'Gokul', 'Mca', 'Amritamayi', 'CSA'),
('369', 'Vyshu', 'msc', 'Anandamayi', 'CSA'),
('456', 'Syam', 'Bca', 'Anandamayi', 'CSA'),
('687', 'Rohit', 'Mca', 'Anandamayi', 'CSA'),
('789', 'Manu', 'msc', 'Amritamayi', 'CSA'),
('963', 'Shan', 'Msc', 'Amritamayi', 'CSA');

-- --------------------------------------------------------

--
-- Table structure for table `student_personal`
--

CREATE TABLE `student_personal` (
  `event` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `house` varchar(30) NOT NULL,
  `email` varchar(30) default NULL,
  `mobile` varchar(15) default NULL,
  `dorh` varchar(15) default NULL,
  `sp1` varchar(30) default NULL,
  `sp2` varchar(30) default NULL,
  `sp3` varchar(30) default NULL,
  `gp` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal`
--

INSERT INTO `student_personal` (`event`, `id`, `house`, `email`, `mobile`, `dorh`, `sp1`, `sp2`, `sp3`, `gp`) VALUES
(' Amritakalotsavam ', '123', 'Amritamayi', 'V@gmail.com', '9876543210', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Amritakalotsavam ', '147', 'Amritamayi', 'vi@gmail.com', '1234567890', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Amritakalotsavam ', '159', 'Anandamayi', 'so@gmail.com', '25875526552', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Amritakalotsavam ', '258', 'Anandamayi', 'K@gmail.com', '9632587410', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Sports ', '357', 'Amritamayi', 'go@gmail.com', '2587894560', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Sports ', '369', 'Anandamayi', 'Vy@gmail.com', '3692587450', 'Dayscholar', NULL, NULL, NULL, NULL),
(' Sports ', '456', 'Anandamayi', 'sy@gmail.com', '3579512583', 'Dayscholar', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `value` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table to check login credentials ';

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `password`, `value`) VALUES
('123', 'asd', 2),
('147', 'asd', 1),
('159', 'asd', 2),
('258', 'asd', 1),
('357', 'asd', 1),
('369', 'asd', 1),
('456', 'asd', 1),
('admin', 'admin', 5);
