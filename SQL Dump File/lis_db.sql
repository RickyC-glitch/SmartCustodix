/*
 Navicat Premium Data Transfer

 Source Server         : LIS_con
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : lis_db

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 26/07/2025 06:53:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_acadinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_acadinfo`;
CREATE TABLE `tbl_acadinfo`  (
  `AYID` int NOT NULL AUTO_INCREMENT,
  `AYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`AYID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_acadinfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_approvedinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_approvedinfo`;
CREATE TABLE `tbl_approvedinfo`  (
  `ApprovedID` int NOT NULL,
  `RequestID` int NULL DEFAULT NULL,
  `UserID` int NULL DEFAULT NULL,
  `qty_approved` int NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dateapproved` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`ApprovedID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_approvedinfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_facultyinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_facultyinfo`;
CREATE TABLE `tbl_facultyinfo`  (
  `EmployeeID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `addressa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `emailadd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cnumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bdate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cstatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `appdate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_facultyinfo
-- ----------------------------
INSERT INTO `tbl_facultyinfo` VALUES ('1234678', 'Marcela', 'Rene', 'Z', 'Sk', 'rene@mail.com', '098563558744', '1996-07-15', 'Married', 'Male', 'Mater Teacher I', '2024-07-15');
INSERT INTO `tbl_facultyinfo` VALUES ('20240909', 'Cataluna', 'Ricky', 'Valderama', 'Banga City', 'rickcyataluna@gmail.com', '09979569317', '07-24-2025', 'Single', 'Male', 'Teacher II', '9/9/2024');
INSERT INTO `tbl_facultyinfo` VALUES ('498011', 'Malan', 'Marcelo', 'M', 'Tboli, South Cotabato', 'M3@gmail.com', '0997865433', '07-25-2025', 'Single', 'Male', 'Teacher I', '07-24-2025');

-- ----------------------------
-- Table structure for tbl_fundinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_fundinfo`;
CREATE TABLE `tbl_fundinfo`  (
  `FundID` int NOT NULL,
  `fundname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`FundID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_fundinfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_iteminfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_iteminfo`;
CREATE TABLE `tbl_iteminfo`  (
  `ItemID` int NOT NULL AUTO_INCREMENT,
  `Itemname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ItemID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_iteminfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_purchasedinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_purchasedinfo`;
CREATE TABLE `tbl_purchasedinfo`  (
  `PurchasedID` int NOT NULL AUTO_INCREMENT,
  `Purdate` datetime NULL DEFAULT NULL,
  `dateencoded` datetime NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ItedID` int NULL DEFAULT NULL,
  `UserID` int NULL DEFAULT NULL,
  `AcadID` int NULL DEFAULT NULL,
  PRIMARY KEY (`PurchasedID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_purchasedinfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_requestinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_requestinfo`;
CREATE TABLE `tbl_requestinfo`  (
  `RequestID` int NOT NULL,
  `UserID` int NULL DEFAULT NULL,
  `ItemID` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `AYID` int NULL DEFAULT NULL,
  `daterequest` datetime NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`RequestID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_requestinfo
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `tbl_userinfo`;
CREATE TABLE `tbl_userinfo`  (
  `userID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datecreated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Userlevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `EmployeeID` int NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_userinfo
-- ----------------------------
INSERT INTO `tbl_userinfo` VALUES (1, 'ricky27', 'Admin123', '11/28/2024', 'Administrator', 'Active', 20240909);

-- ----------------------------
-- View structure for view_approvedinfo
-- ----------------------------
DROP VIEW IF EXISTS `view_approvedinfo`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_approvedinfo` AS SELECT
	tbl_approvedinfo.ApprovedID, 
	tbl_approvedinfo.RequestID, 
	view_requestinfo.EmployeeID, 
	view_requestinfo.lname, 
	view_requestinfo.fname, 
	view_requestinfo.mname, 
	view_requestinfo.emailadd, 
	view_requestinfo.cnumber, 
	view_requestinfo.position, 
	view_requestinfo.ItemID, 
	view_requestinfo.Itemname, 
	view_requestinfo.`desc`, 
	view_requestinfo.qty, 
	view_requestinfo.unit, 
	view_requestinfo.AYID, 
	view_requestinfo.daterequest, 
	view_requestinfo.`status`, 
	tbl_approvedinfo.qty_approved, 
	tbl_approvedinfo.unit AS unit_Approved, 
	tbl_approvedinfo.dateapproved, 
	tbl_approvedinfo.UserID AS UserID_Approved, 
	view_userinfo.EmployeeID AS EmployeeID_Approved, 
	view_userinfo.lname AS lname_Approved, 
	view_userinfo.fname AS fname_Approved, 
	view_userinfo.mname AS mname_Approved, 
	view_userinfo.Userlevel AS userlevel_Approved
FROM
	view_requestinfo
	INNER JOIN
	tbl_approvedinfo
	ON 
		view_requestinfo.RequestID = tbl_approvedinfo.RequestID
	INNER JOIN
	view_userinfo
	ON 
		tbl_approvedinfo.UserID = view_userinfo.userID ;

-- ----------------------------
-- View structure for view_requestinfo
-- ----------------------------
DROP VIEW IF EXISTS `view_requestinfo`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_requestinfo` AS SELECT
	tbl_requestinfo.RequestID, 
	tbl_requestinfo.UserID, 
	view_userinfo.EmployeeID, 
	view_userinfo.username, 
	view_userinfo.lname, 
	view_userinfo.fname, 
	view_userinfo.mname, 
	view_userinfo.emailadd, 
	view_userinfo.cnumber, 
	view_userinfo.position, 
	tbl_requestinfo.ItemID, 
	tbl_iteminfo.Itemname, 
	tbl_iteminfo.`desc`, 
	tbl_requestinfo.qty, 
	tbl_requestinfo.unit, 
	tbl_requestinfo.AYID, 
	tbl_requestinfo.daterequest, 
	tbl_requestinfo.`status`
FROM
	view_userinfo
	INNER JOIN
	tbl_requestinfo
	ON 
		view_userinfo.userID = tbl_requestinfo.UserID
	INNER JOIN
	tbl_iteminfo
	ON 
		tbl_requestinfo.ItemID = tbl_iteminfo.ItemID ;

-- ----------------------------
-- View structure for view_userinfo
-- ----------------------------
DROP VIEW IF EXISTS `view_userinfo`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_userinfo` AS SELECT
	tbl_userinfo.userID, 
	tbl_facultyinfo.EmployeeID, 
	tbl_userinfo.username, 
	tbl_facultyinfo.lname, 
	tbl_facultyinfo.fname, 
	tbl_facultyinfo.mname, 
	tbl_userinfo.`password`, 
	tbl_userinfo.datecreated, 
	tbl_userinfo.Userlevel, 
	tbl_userinfo.`status`, 
	tbl_facultyinfo.addressa, 
	tbl_facultyinfo.emailadd, 
	tbl_facultyinfo.cnumber, 
	tbl_facultyinfo.bdate, 
	tbl_facultyinfo.cstatus, 
	tbl_facultyinfo.gender, 
	tbl_facultyinfo.position, 
	tbl_facultyinfo.appdate
FROM
	tbl_facultyinfo
	INNER JOIN
	tbl_userinfo
	ON 
		tbl_facultyinfo.EmployeeID = tbl_userinfo.EmployeeID ;

SET FOREIGN_KEY_CHECKS = 1;
