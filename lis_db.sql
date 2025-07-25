-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 04:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acadinfo`
--

CREATE TABLE `tbl_acadinfo` (
  `AYID` int(11) NOT NULL,
  `AYear` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approvedinfo`
--

CREATE TABLE `tbl_approvedinfo` (
  `ApprovedID` int(11) NOT NULL,
  `RequestID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `qty_approved` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `dateapproved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facultyinfo`
--

CREATE TABLE `tbl_facultyinfo` (
  `EmployeeID` varchar(20) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `addressa` varchar(255) DEFAULT NULL,
  `emailadd` varchar(255) DEFAULT NULL,
  `cnumber` varchar(255) DEFAULT NULL,
  `bdate` varchar(255) DEFAULT NULL,
  `cstatus` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `appdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_facultyinfo`
--

INSERT INTO `tbl_facultyinfo` (`EmployeeID`, `lname`, `fname`, `mname`, `addressa`, `emailadd`, `cnumber`, `bdate`, `cstatus`, `gender`, `position`, `appdate`) VALUES
('123', 'Cataluna', 'Zhyn', 'Valderama', 'Kusan, Banga', 'zhyn@gmail.com', '09122044022', '03/17/1995', 'Single', 'Male', 'Teacher I', '04/24/2024'),
('20240909', 'Cataluna', 'Ricky', 'Valderama', 'Banga City', 'rickcyataluna@gmail.com', '09979569317', '04/24/2024', 'Single', 'Male', 'Teacher I', '9/9/2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fundinfo`
--

CREATE TABLE `tbl_fundinfo` (
  `FundID` int(11) NOT NULL,
  `fundname` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iteminfo`
--

CREATE TABLE `tbl_iteminfo` (
  `ItemID` int(11) NOT NULL,
  `Itemname` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchasedinfo`
--

CREATE TABLE `tbl_purchasedinfo` (
  `PurchasedID` int(11) NOT NULL,
  `Purdate` datetime DEFAULT NULL,
  `dateencoded` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `ItedID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `AcadID` int(11) DEFAULT NULL,
  `FundID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requestinfo`
--

CREATE TABLE `tbl_requestinfo` (
  `RequestID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ItemID` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `AYID` int(11) DEFAULT NULL,
  `daterequest` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `datecreated` varchar(255) DEFAULT NULL,
  `Userlevel` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `EmployeeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userID`, `username`, `password`, `datecreated`, `Userlevel`, `status`, `EmployeeID`) VALUES
(1, 'ricky27', 'Admin123', '11/28/2024', 'Administrator', 'Active', 20240909);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_approvedinfo`
-- (See below for the actual view)
--
CREATE TABLE `view_approvedinfo` (
`ApprovedID` int(11)
,`RequestID` int(11)
,`EmployeeID` varchar(20)
,`lname` varchar(255)
,`fname` varchar(255)
,`mname` varchar(255)
,`emailadd` varchar(255)
,`cnumber` varchar(255)
,`position` varchar(255)
,`ItemID` int(11)
,`Itemname` varchar(255)
,`desc` varchar(255)
,`qty` int(11)
,`unit` varchar(255)
,`AYID` int(11)
,`daterequest` datetime
,`status` varchar(255)
,`qty_approved` int(11)
,`unit_Approved` varchar(255)
,`dateapproved` datetime
,`UserID_Approved` int(11)
,`EmployeeID_Approved` varchar(20)
,`lname_Approved` varchar(255)
,`fname_Approved` varchar(255)
,`mname_Approved` varchar(255)
,`userlevel_Approved` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_requestinfo`
-- (See below for the actual view)
--
CREATE TABLE `view_requestinfo` (
`RequestID` int(11)
,`UserID` int(11)
,`EmployeeID` varchar(20)
,`username` varchar(255)
,`lname` varchar(255)
,`fname` varchar(255)
,`mname` varchar(255)
,`emailadd` varchar(255)
,`cnumber` varchar(255)
,`position` varchar(255)
,`ItemID` int(11)
,`Itemname` varchar(255)
,`desc` varchar(255)
,`qty` int(11)
,`unit` varchar(255)
,`AYID` int(11)
,`daterequest` datetime
,`status` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_userinfo`
-- (See below for the actual view)
--
CREATE TABLE `view_userinfo` (
`userID` int(11)
,`EmployeeID` varchar(20)
,`username` varchar(255)
,`lname` varchar(255)
,`fname` varchar(255)
,`mname` varchar(255)
,`password` varchar(255)
,`datecreated` varchar(255)
,`Userlevel` varchar(255)
,`status` varchar(255)
,`addressa` varchar(255)
,`emailadd` varchar(255)
,`cnumber` varchar(255)
,`bdate` varchar(255)
,`cstatus` varchar(255)
,`gender` varchar(255)
,`position` varchar(255)
,`appdate` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `view_approvedinfo`
--
DROP TABLE IF EXISTS `view_approvedinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Syntrickz`@`localhost` SQL SECURITY DEFINER VIEW `view_approvedinfo`  AS SELECT `tbl_approvedinfo`.`ApprovedID` AS `ApprovedID`, `tbl_approvedinfo`.`RequestID` AS `RequestID`, `view_requestinfo`.`EmployeeID` AS `EmployeeID`, `view_requestinfo`.`lname` AS `lname`, `view_requestinfo`.`fname` AS `fname`, `view_requestinfo`.`mname` AS `mname`, `view_requestinfo`.`emailadd` AS `emailadd`, `view_requestinfo`.`cnumber` AS `cnumber`, `view_requestinfo`.`position` AS `position`, `view_requestinfo`.`ItemID` AS `ItemID`, `view_requestinfo`.`Itemname` AS `Itemname`, `view_requestinfo`.`desc` AS `desc`, `view_requestinfo`.`qty` AS `qty`, `view_requestinfo`.`unit` AS `unit`, `view_requestinfo`.`AYID` AS `AYID`, `view_requestinfo`.`daterequest` AS `daterequest`, `view_requestinfo`.`status` AS `status`, `tbl_approvedinfo`.`qty_approved` AS `qty_approved`, `tbl_approvedinfo`.`unit` AS `unit_Approved`, `tbl_approvedinfo`.`dateapproved` AS `dateapproved`, `tbl_approvedinfo`.`UserID` AS `UserID_Approved`, `view_userinfo`.`EmployeeID` AS `EmployeeID_Approved`, `view_userinfo`.`lname` AS `lname_Approved`, `view_userinfo`.`fname` AS `fname_Approved`, `view_userinfo`.`mname` AS `mname_Approved`, `view_userinfo`.`Userlevel` AS `userlevel_Approved` FROM ((`view_requestinfo` join `tbl_approvedinfo` on(`view_requestinfo`.`RequestID` = `tbl_approvedinfo`.`RequestID`)) join `view_userinfo` on(`tbl_approvedinfo`.`UserID` = `view_userinfo`.`userID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_requestinfo`
--
DROP TABLE IF EXISTS `view_requestinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Syntrickz`@`localhost` SQL SECURITY DEFINER VIEW `view_requestinfo`  AS SELECT `tbl_requestinfo`.`RequestID` AS `RequestID`, `tbl_requestinfo`.`UserID` AS `UserID`, `view_userinfo`.`EmployeeID` AS `EmployeeID`, `view_userinfo`.`username` AS `username`, `view_userinfo`.`lname` AS `lname`, `view_userinfo`.`fname` AS `fname`, `view_userinfo`.`mname` AS `mname`, `view_userinfo`.`emailadd` AS `emailadd`, `view_userinfo`.`cnumber` AS `cnumber`, `view_userinfo`.`position` AS `position`, `tbl_requestinfo`.`ItemID` AS `ItemID`, `tbl_iteminfo`.`Itemname` AS `Itemname`, `tbl_iteminfo`.`desc` AS `desc`, `tbl_requestinfo`.`qty` AS `qty`, `tbl_requestinfo`.`unit` AS `unit`, `tbl_requestinfo`.`AYID` AS `AYID`, `tbl_requestinfo`.`daterequest` AS `daterequest`, `tbl_requestinfo`.`status` AS `status` FROM ((`view_userinfo` join `tbl_requestinfo` on(`view_userinfo`.`userID` = `tbl_requestinfo`.`UserID`)) join `tbl_iteminfo` on(`tbl_requestinfo`.`ItemID` = `tbl_iteminfo`.`ItemID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_userinfo`
--
DROP TABLE IF EXISTS `view_userinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Syntrickz`@`localhost` SQL SECURITY DEFINER VIEW `view_userinfo`  AS SELECT `tbl_userinfo`.`userID` AS `userID`, `tbl_facultyinfo`.`EmployeeID` AS `EmployeeID`, `tbl_userinfo`.`username` AS `username`, `tbl_facultyinfo`.`lname` AS `lname`, `tbl_facultyinfo`.`fname` AS `fname`, `tbl_facultyinfo`.`mname` AS `mname`, `tbl_userinfo`.`password` AS `password`, `tbl_userinfo`.`datecreated` AS `datecreated`, `tbl_userinfo`.`Userlevel` AS `Userlevel`, `tbl_userinfo`.`status` AS `status`, `tbl_facultyinfo`.`addressa` AS `addressa`, `tbl_facultyinfo`.`emailadd` AS `emailadd`, `tbl_facultyinfo`.`cnumber` AS `cnumber`, `tbl_facultyinfo`.`bdate` AS `bdate`, `tbl_facultyinfo`.`cstatus` AS `cstatus`, `tbl_facultyinfo`.`gender` AS `gender`, `tbl_facultyinfo`.`position` AS `position`, `tbl_facultyinfo`.`appdate` AS `appdate` FROM (`tbl_facultyinfo` join `tbl_userinfo` on(`tbl_facultyinfo`.`EmployeeID` = `tbl_userinfo`.`EmployeeID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acadinfo`
--
ALTER TABLE `tbl_acadinfo`
  ADD PRIMARY KEY (`AYID`);

--
-- Indexes for table `tbl_approvedinfo`
--
ALTER TABLE `tbl_approvedinfo`
  ADD PRIMARY KEY (`ApprovedID`);

--
-- Indexes for table `tbl_facultyinfo`
--
ALTER TABLE `tbl_facultyinfo`
  ADD PRIMARY KEY (`EmployeeID`) USING BTREE;

--
-- Indexes for table `tbl_fundinfo`
--
ALTER TABLE `tbl_fundinfo`
  ADD PRIMARY KEY (`FundID`);

--
-- Indexes for table `tbl_iteminfo`
--
ALTER TABLE `tbl_iteminfo`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `tbl_purchasedinfo`
--
ALTER TABLE `tbl_purchasedinfo`
  ADD PRIMARY KEY (`PurchasedID`);

--
-- Indexes for table `tbl_requestinfo`
--
ALTER TABLE `tbl_requestinfo`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acadinfo`
--
ALTER TABLE `tbl_acadinfo`
  MODIFY `AYID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_iteminfo`
--
ALTER TABLE `tbl_iteminfo`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchasedinfo`
--
ALTER TABLE `tbl_purchasedinfo`
  MODIFY `PurchasedID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
