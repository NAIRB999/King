-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 11:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbewsd`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `qryno_of_contributions`
-- (See below for the actual view)
--
CREATE TABLE `qryno_of_contributions` (
`academicyearid` varchar(50)
,`academicyear` varchar(50)
,`title` varchar(50)
,`Number_of_Contribution` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qryno_of_contributors`
-- (See below for the actual view)
--
CREATE TABLE `qryno_of_contributors` (
`academicyearid` varchar(50)
,`academicyear` varchar(50)
,`title` varchar(50)
,`Number_of_Contributors` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qrypercentage_of_contributions`
-- (See below for the actual view)
--
CREATE TABLE `qrypercentage_of_contributions` (
`academicyear` varchar(50)
,`Number_of_Contribution` bigint(21)
,`Percentage` decimal(24,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qry_nocomment`
-- (See below for the actual view)
--
CREATE TABLE `qry_nocomment` (
`academicyear` varchar(50)
,`title` varchar(50)
,`contributionid` varchar(50)
,`documenttype` varchar(50)
,`documenttitleid` varchar(50)
,`date` varchar(50)
,`filename` varchar(100)
,`studentid` varchar(50)
,`description` varchar(50)
,`file` varchar(100)
,`status` varchar(50)
,`comment` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qry_nocommentafter14`
-- (See below for the actual view)
--
CREATE TABLE `qry_nocommentafter14` (
`academicyear` varchar(50)
,`title` varchar(50)
,`contributionid` varchar(50)
,`documenttype` varchar(50)
,`documenttitleid` varchar(50)
,`date` varchar(50)
,`filename` varchar(100)
,`studentid` varchar(50)
,`description` varchar(50)
,`file` varchar(100)
,`status` varchar(50)
,`comment` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `tblacademicyear`
--

CREATE TABLE `tblacademicyear` (
  `academicyearid` varchar(50) NOT NULL,
  `academicyear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblacademicyear`
--

INSERT INTO `tblacademicyear` (`academicyearid`, `academicyear`) VALUES
('DT-000001', '2018-2019'),
('DT-000002', '2017-2018'),
('DT-000003', '2021-2022'),
('DT-000004', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `name`, `email`, `role`, `username`, `password`) VALUES
('A-000001', 'kaung', 'km@gmail.com', 'Administrator', 'a', '111'),
('A-000002', 'Khin', 'khin@gmail.com', 'Marketing Manager', 'mm', '111'),
('A-000003', 'Phyu', 'phyu@gmail.com', 'Marketing Coordinator', 'mc', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontribution`
--

CREATE TABLE `tblcontribution` (
  `contributionid` varchar(50) NOT NULL,
  `documenttype` varchar(50) DEFAULT NULL,
  `documenttitleid` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `studentid` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontribution`
--

INSERT INTO `tblcontribution` (`contributionid`, `documenttype`, `documenttitleid`, `date`, `filename`, `studentid`, `description`, `file`, `status`, `comment`) VALUES
('Con-000001', 'Article', 'Title-000001', '2020-09-26', 'Happy team ', 'S-000001', 'ddddd', 'Document/Con-000001_test.txt', 'contribute', 'perfect'),
('Con-000002', 'Article', 'Title-000002', '2020-09-27', 'Contribution by kyaw kyaw', 'S-000002', 'lsflksjflkfsjf', 'Document/Con-000002_st7.jpg', 'contribute', ''),
('Con-000003', 'Article', 'Title-000002', '2020-10-11', 'hellllllllo', 'S-000002', 'slfl', 'Document/Con-000003_s1.jpg', 'contribute', 'aa'),
('Con-000004', 'Article', 'Title-000002', '2020-10-11', 'abc', 'S-000002', 'aa', 'Document/Con-000004_graduation-2020_420x240_acf_cropped.jpg', 'contribute', 'dd'),
('Con-000005', 'Article', 'Title-000002', '2020-10-11', 'hhhh', 'S-000002', 'aaa', 'Document/Con-000005_s4.jpg', 'contribute', 'ffff'),
('Con-000006', 'Article', 'Title-000002', '2020-10-11', 'abc', 'S-000001', 'sff', 'Document/Con-000006_s1.jpg', 'contribute', 'aa'),
('Con-000007', 'Article', 'Title-000002', '2020-10-11', 'vv', 'S-000002', 'vvvv', 'Document/Con-000007_index.jpg', 'contribute', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocumenttitle`
--

CREATE TABLE `tbldocumenttitle` (
  `documenttitleid` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `academicyearid` varchar(50) DEFAULT NULL,
  `startdate` varchar(50) DEFAULT NULL,
  `enddate` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocumenttitle`
--

INSERT INTO `tbldocumenttitle` (`documenttitleid`, `title`, `image`, `academicyearid`, `startdate`, `enddate`, `status`) VALUES
('Title-000001', 'Summar 2020', 'Magazine/Title-000001_m3.jpg', 'DT-000002', '2020-10-01', '2020-10-10', 'Valid'),
('Title-000002', 'COVID', 'Magazine/Title-000002_m4.jpg', 'DT-000004', '2020-10-01', '2020-11-30', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `studentid` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`studentid`, `name`, `address`, `phone`, `email`, `username`, `password`, `status`) VALUES
('S-000001', 'su', 'ygn', '0923456', 'su@gmail.com', 'su', '111', 'Activated'),
('S-000002', 'Kyaw Kyaw', 'ygnsjfljsfljf', '091234567', 'kyaw@gmail.com', 'kyaw', '111', 'Activated');

-- --------------------------------------------------------

--
-- Structure for view `qryno_of_contributions`
--
DROP TABLE IF EXISTS `qryno_of_contributions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qryno_of_contributions`  AS  select `ay`.`academicyearid` AS `academicyearid`,`ay`.`academicyear` AS `academicyear`,`d`.`title` AS `title`,count(`c`.`contributionid`) AS `Number_of_Contribution` from ((`tblcontribution` `c` join `tblacademicyear` `ay`) join `tbldocumenttitle` `d`) where ((`c`.`documenttitleid` = `d`.`documenttitleid`) and (`d`.`academicyearid` = `ay`.`academicyearid`)) group by `ay`.`academicyearid`,`ay`.`academicyear`,`d`.`title` ;

-- --------------------------------------------------------

--
-- Structure for view `qryno_of_contributors`
--
DROP TABLE IF EXISTS `qryno_of_contributors`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qryno_of_contributors`  AS  select `ay`.`academicyearid` AS `academicyearid`,`ay`.`academicyear` AS `academicyear`,`d`.`title` AS `title`,count(`c`.`studentid`) AS `Number_of_Contributors` from ((`tblcontribution` `c` join `tblacademicyear` `ay`) join `tbldocumenttitle` `d`) where ((`c`.`documenttitleid` = `d`.`documenttitleid`) and (`d`.`academicyearid` = `ay`.`academicyearid`)) group by `ay`.`academicyearid`,`ay`.`academicyear`,`d`.`title` ;

-- --------------------------------------------------------

--
-- Structure for view `qrypercentage_of_contributions`
--
DROP TABLE IF EXISTS `qrypercentage_of_contributions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qrypercentage_of_contributions`  AS  select `qryno_of_contributions`.`academicyear` AS `academicyear`,`qryno_of_contributions`.`Number_of_Contribution` AS `Number_of_Contribution`,round(((100 * `qryno_of_contributions`.`Number_of_Contribution`) / 100),0) AS `Percentage` from `qryno_of_contributions` group by `qryno_of_contributions`.`academicyear`,`qryno_of_contributions`.`Number_of_Contribution` ;

-- --------------------------------------------------------

--
-- Structure for view `qry_nocomment`
--
DROP TABLE IF EXISTS `qry_nocomment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qry_nocomment`  AS  select `ay`.`academicyear` AS `academicyear`,`d`.`title` AS `title`,`c`.`contributionid` AS `contributionid`,`c`.`documenttype` AS `documenttype`,`c`.`documenttitleid` AS `documenttitleid`,`c`.`date` AS `date`,`c`.`filename` AS `filename`,`c`.`studentid` AS `studentid`,`c`.`description` AS `description`,`c`.`file` AS `file`,`c`.`status` AS `status`,`c`.`comment` AS `comment` from ((`tblcontribution` `c` join `tblacademicyear` `ay`) join `tbldocumenttitle` `d`) where ((`c`.`documenttitleid` = `d`.`documenttitleid`) and (`d`.`academicyearid` = `ay`.`academicyearid`) and (`c`.`comment` = '')) ;

-- --------------------------------------------------------

--
-- Structure for view `qry_nocommentafter14`
--
DROP TABLE IF EXISTS `qry_nocommentafter14`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qry_nocommentafter14`  AS  select `ay`.`academicyear` AS `academicyear`,`d`.`title` AS `title`,`c`.`contributionid` AS `contributionid`,`c`.`documenttype` AS `documenttype`,`c`.`documenttitleid` AS `documenttitleid`,`c`.`date` AS `date`,`c`.`filename` AS `filename`,`c`.`studentid` AS `studentid`,`c`.`description` AS `description`,`c`.`file` AS `file`,`c`.`status` AS `status`,`c`.`comment` AS `comment` from ((`tblcontribution` `c` join `tblacademicyear` `ay`) join `tbldocumenttitle` `d`) where ((`c`.`documenttitleid` = `d`.`documenttitleid`) and (`d`.`academicyearid` = `ay`.`academicyearid`) and (`c`.`date` < (curdate() - interval 14 day)) and (`c`.`comment` = '')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblacademicyear`
--
ALTER TABLE `tblacademicyear`
  ADD PRIMARY KEY (`academicyearid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblcontribution`
--
ALTER TABLE `tblcontribution`
  ADD PRIMARY KEY (`contributionid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `documenttitleid` (`documenttitleid`);

--
-- Indexes for table `tbldocumenttitle`
--
ALTER TABLE `tbldocumenttitle`
  ADD PRIMARY KEY (`documenttitleid`),
  ADD KEY `academicyearid` (`academicyearid`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`studentid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcontribution`
--
ALTER TABLE `tblcontribution`
  ADD CONSTRAINT `tblcontribution_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `tblstudent` (`studentid`),
  ADD CONSTRAINT `tblcontribution_ibfk_2` FOREIGN KEY (`documenttitleid`) REFERENCES `tbldocumenttitle` (`documenttitleid`);

--
-- Constraints for table `tbldocumenttitle`
--
ALTER TABLE `tbldocumenttitle`
  ADD CONSTRAINT `tbldocumenttitle_ibfk_1` FOREIGN KEY (`academicyearid`) REFERENCES `tblacademicyear` (`academicyearid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
