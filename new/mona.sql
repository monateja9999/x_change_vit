-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2018 at 08:44 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mona`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `Block` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Block`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`Block`) VALUES
('A BLOCK'),
('B ANNEXURE'),
('B BLOCK'),
('C BLOCK'),
('D ANNEXURE'),
('D BLOCK'),
('E BLOCK'),
('F BLOCK'),
('G BLOCK'),
('H BLOCK'),
('J BLOCK'),
('K BLOCK'),
('L ANNEXURE'),
('L BLOCK'),
('M BLOCK'),
('N BLOCK'),
('P BLOCK'),
('Q BLOCK');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

DROP TABLE IF EXISTS `hostels`;
CREATE TABLE IF NOT EXISTS `hostels` (
  `Name` varchar(30) DEFAULT NULL,
  `Designation` char(30) DEFAULT NULL,
  `Mobile` bigint(20) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Supervisor` char(30) DEFAULT NULL,
  `Mobile_S` bigint(20) DEFAULT NULL,
  `Phone_S` varchar(15) DEFAULT NULL,
  `Email_S` varchar(30) DEFAULT NULL,
  `Block` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Block`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`Name`, `Designation`, `Mobile`, `Phone`, `Email`, `Supervisor`, `Mobile_S`, `Phone_S`, `Email_S`, `Block`) VALUES
('Prof. A. Kubendran', 'Deputy Warden', 9626076256, '0416 - 2202527', 'kubendran.a@vit.ac.in', 'Mr. S. Rajamani', 9841281587, '0416- 2202527', 'rajamani.con@vit.ac.in', 'A BLOCK'),
('Prof. R. Mohanasundaram', 'Warden Attendance & Deputy War', 9894820008, '0416- 2202529', 'mohanasundaramr@vit.ac.in', 'Mr. S. C. Sankar', 9345716146, '0416 - 22025269', 'sankarsc.con@vit.ac.in', 'B ANNEX'),
('Prof. R. Mohanasundaram', 'Warden Attendance & Deputy War', 9894820008, '0416- 2202529', 'mohanasundaramr@vit.ac.in', 'Mr. N. Sagadevan', 8056853476, '0416-2202529', 'nsagadevan.con@vit.ac.in', 'B BLOCK'),
('Prof. A. Kubendran', 'Deputy Warden', 9626076256, '0416-2202531', 'kubendran.a@vit.ac.in', 'Mr. M. Selvam	', 9943619396, '0416- 2202531', 'mselvam.con@vit.ac.in', 'C BLOCK'),
('Prof. G. Siva Shanmugam', 'Deputy Warden', 9944374841, '0416-2202590', 'sivashanmugam.g@vit.ac.in', 'Mr. P. Venugopal', 8903186192, '0416 -2202590', 'pvenugopal.con@vit.ac.in', 'D ANNEX'),
('Prof. G. Siva Shanmugam', 'Deputy Warden', 9944374841, '0416-2202540', 'sivashanmugam.g@vit.ac.in', 'Mr. T. Nagarajan', 9944219516, '0416- 2202540', 'tnagarajan.con@vit.ac.in', 'D BLOCK'),
('Prof. Navin Kumar', 'Warden Events & Deputy Warden', 8124496533, '0416-2202570', 'navin@vit.ac.in', 'Mr. K. Suresh', 9443211228, '0416-2202570', 'sureshk.con@vit.ac.in', 'E BLOCK'),
('Prof. N. Sudhakar', 'Deputy Warden', 9942002947, '0416 -2202632', 'nsudhakar@vit.ac.in', 'Mr. S. Thirumoorthi', 9486253923, '0416 -2202632', 'sthirumoorthi.con@vit.ac.in', 'F BLOCK'),
('Prof. J. Balamurugan', 'Deputy Warden', 9843243414, '0416 -2202560', 'balamurugan.j@vit.ac.in', 'Mr. P. Nandha Gopal', 7418112644, '0416 -2202560', 'pnandhagopal.con@vit.ac.in', 'G BLOCK'),
('Prof. M. P. Gopinath', 'Deputy Warden', 9840697916, '0416-2202580', 'vmpgopinath@vit.ac.in', 'Mr. M. Chinnakannu', 9787904207, '0416-2202580', 'kmsubramanian.con@vit.ac.in', 'H BLOCK'),
('Prof. N. Suresh Kumar', 'Deputy Warden', 9994519950, '0416-2202582', 'sureshkumar.n@vit.ac.in', 'Mr. M. Subramanian', 9790188276, '0416-2202582', 'msubramanian.con@vit.ac.in', 'J BLOCK'),
('Prof. P. Senthilnathan', 'Deputy Warden', 9500385695, '0416-2202687', 'senthilnathan.p@vit.ac.in', 'Mr. C. H. Ezhil Ra', 9942473561, '0416-2202588', 'hezhilraj.con@vit.ac.in', 'K BLOCK'),
(' Prof. B. Senthil Murugan', 'Deputy Warden', 9047151090, '0416-2202684', 'senthilmurugan.b@vit.ac.in', 'Mr. M. Manoharan	', 9952389807, '0416 - 2202587', 'mmanoharan.con@vit.ac.in', 'L BLOCK'),
('Prof. Hemadri Reddy Reganti', 'Deputy Warden', 9791452220, '0416-2202683', 'rhreddy@vit.ac.in', 'Mr. A. Sampath', 9943252988, '0416-2202683', 'asampath.con@vit.ac.in', 'M BLOCK'),
(' Prof. Kaushik Chanda', 'Deputy Warden', 9629783142, '0416-2202684', 'kaushikchanda@vit.ac.in', 'Mr. K. Settu', 8870442306, '0416-2202684', 'ksettu.con@vit.ac.in', 'N BLOCK'),
(' Prof. S. Dinesh Kumar', 'Deputy Warden', 9884335202, '0416-2202687', 'dineshkumar.s@vit.ac.in', 'Mr. M. Vijay Kumar	', 9750871922, '0416-2202687, 2', 'mvijaykumar.con@vit.ac.in', 'P BLOCK'),
(' Prof. K. Santha Kumar', 'Deputy Warden', 9952585037, '0416-2202647', 'ksanthakumar@vit.ac.in', 'Mr. N. Gopala Krishnan', 9994393231, '0416-2202647', 'ngopalakrishnan.con@vit.ac.in', 'Q BLOCK');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `Links` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`Links`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  `M_Block` char(10) DEFAULT NULL,
  `M_Type` varchar(20) DEFAULT NULL,
  `M_Links` varchar(40) DEFAULT NULL,
  `M_Count_Bed` int(1) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `M_Block_FK` (`M_Block`),
  KEY `M_Count_Bed_FK` (`M_Count_Bed`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Id`, `Description`, `M_Block`, `M_Type`, `M_Links`, `M_Count_Bed`) VALUES
(14, 'Ground FLoor and easily reachable', 'F', 'NAC', 'addart/SECRETMSG.jpg', 6),
(18, 'GOOD', 'B', 'AC', 'addart/buddha-wallpaper-768x512.jpg', 2),
(20, '2ND FLOOR SPACIOUS ROOM', 'J', 'NAC', 'addart/images (1).jpg', 3),
(22, 'GOOD', 'B', 'AC', 'addart/2018-07-22.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `no_of_beds`
--

DROP TABLE IF EXISTS `no_of_beds`;
CREATE TABLE IF NOT EXISTS `no_of_beds` (
  `Count_Bed` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Count_Bed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_of_beds`
--

INSERT INTO `no_of_beds` (`Count_Bed`) VALUES
(1),
(2),
(3),
(4),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_room`
--

DROP TABLE IF EXISTS `type_of_room`;
CREATE TABLE IF NOT EXISTS `type_of_room` (
  `Type` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_room`
--

INSERT INTO `type_of_room` (`Type`) VALUES
('AC'),
('NON AC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main` ADD FULLTEXT KEY `M_Type` (`M_Type`);
ALTER TABLE `main` ADD FULLTEXT KEY `M_Links` (`M_Links`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
