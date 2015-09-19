/*
Navicat MySQL Data Transfer

Source Server         : lab
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lnzm

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-09-18 15:40:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lnzm_academy
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_academy`;
CREATE TABLE `lnzm_academy` (
  `academyId` bigint(20) NOT NULL AUTO_INCREMENT,
  `academyName` varchar(255) NOT NULL DEFAULT '',
  `academyDescription` varchar(255) DEFAULT '',
  `academyOther1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`academyId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_academy
-- ----------------------------
INSERT INTO `lnzm_academy` VALUES ('25', '机械与汽车工程学院', '', null);
INSERT INTO `lnzm_academy` VALUES ('26', '建筑学院', '', null);
INSERT INTO `lnzm_academy` VALUES ('27', '土木与交通学院　', '', null);
INSERT INTO `lnzm_academy` VALUES ('28', '电子与信息学院', '', null);
INSERT INTO `lnzm_academy` VALUES ('29', '材料科学与工程学院', '', null);

-- ----------------------------
-- Table structure for lnzm_activitypractice
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_activitypractice`;
CREATE TABLE `lnzm_activitypractice` (
  `activityPracticeId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `activityPracticeTitle` varchar(255) NOT NULL DEFAULT '',
  `activityPracticeInformation` varchar(255) DEFAULT '',
  `activityPracticeReleaseId` bigint(20) NOT NULL DEFAULT '0',
  `activityPracticeReleaseDate` datetime DEFAULT NULL,
  `activityPracticeContentURL` varchar(255) NOT NULL DEFAULT '',
  `activityPracticePageView` bigint(20) NOT NULL DEFAULT '0',
  `activityPracticeAuditStatus` bigint(20) NOT NULL DEFAULT '0',
  `activityPracticeAuditId` bigint(20) NOT NULL DEFAULT '0',
  `activityPracticeAuditDate` datetime DEFAULT NULL,
  `activityPracticeType` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activityPracticeId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_activitypractice
-- ----------------------------
INSERT INTO `lnzm_activitypractice` VALUES ('20', '江西省科学技术厅领导来访我园', '', '1', '2015-08-23 15:27:36', './Public/contentHtml/144031485611367.html', '3', '1', '1', '2015-08-23 15:27:36', '0');
INSERT INTO `lnzm_activitypractice` VALUES ('21', '关于举行美国普度大学Andrea Vacca教授学术报告会的通知', '', '1', '2015-08-23 15:29:16', './Public/contentHtml/144031495626773.html', '3', '1', '1', '2015-08-23 15:29:16', '1');

-- ----------------------------
-- Table structure for lnzm_branch
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_branch`;
CREATE TABLE `lnzm_branch` (
  `branchId` bigint(20) NOT NULL AUTO_INCREMENT,
  `branchName` varchar(255) NOT NULL DEFAULT '',
  `branchAcademy` bigint(20) NOT NULL DEFAULT '0',
  `branchDescription` varchar(255) DEFAULT '',
  `branchOther1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`branchId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_branch
-- ----------------------------
INSERT INTO `lnzm_branch` VALUES ('1', '计科二班', '1', '南校区', null);
INSERT INTO `lnzm_branch` VALUES ('6', '计科一班', '1', '南校区', null);
INSERT INTO `lnzm_branch` VALUES ('8', '计科三班', '16', '南校区', null);
INSERT INTO `lnzm_branch` VALUES ('9', '环工一班', '3', '南校区', null);

-- ----------------------------
-- Table structure for lnzm_branchapperance
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_branchapperance`;
CREATE TABLE `lnzm_branchapperance` (
  `branchApperanceId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `branchApperanceTitle` varchar(255) NOT NULL DEFAULT '',
  `branchApperanceInformation` varchar(255) DEFAULT '',
  `branchApperanceReleaseId` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceReleaseDate` datetime DEFAULT NULL,
  `branchApperanceContentURL` varchar(255) NOT NULL DEFAULT '',
  `branchApperancePageView` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceAcademyAuditStatus` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceAcademyAuditId` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceAcademyAuditDate` datetime DEFAULT NULL,
  `branchApperanceOrangizationAuditStatus` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceOrangizationAuditId` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceOrangizationAuditDate` datetime DEFAULT NULL,
  `branchApperanceType` bigint(20) NOT NULL DEFAULT '0',
  `branchApperanceBranch` varchar(255) NOT NULL DEFAULT '',
  `branchApperanceAcademy` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`branchApperanceId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_branchapperance
-- ----------------------------
INSERT INTO `lnzm_branchapperance` VALUES ('20', '关于给予肖金刚等旷课学生通报批评处分的处理决定', '', '1', '2015-08-23 15:31:04', './Public/contentHtml/14403150647632.html', '1', '1', '1', '2015-08-23 15:31:04', '1', '1', '2015-08-23 15:31:04', '0', '计科二班', '计算机科学与工程');

-- ----------------------------
-- Table structure for lnzm_download
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_download`;
CREATE TABLE `lnzm_download` (
  `downloadId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `downloadTitle` varchar(255) NOT NULL DEFAULT '',
  `downloadReleaseInformation` varchar(255) DEFAULT '',
  `downloadReleaseId` bigint(20) unsigned NOT NULL DEFAULT '0',
  `downloadReleaseDate` datetime DEFAULT NULL,
  `downloadURL` varchar(255) NOT NULL DEFAULT '',
  `downloadPageView` bigint(20) unsigned NOT NULL DEFAULT '0',
  `fileName` varchar(255) DEFAULT '',
  PRIMARY KEY (`downloadId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lnzm_download
-- ----------------------------
INSERT INTO `lnzm_download` VALUES ('7', '1234', '', '1', '2015-08-04 20:47:27', '55c0b45f8d2e5.JPG', '0', 'IMG_0292.JPG');
INSERT INTO `lnzm_download` VALUES ('8', '123456', '', '1', '2015-08-04 21:07:26', '55c0b90e71fa1.JPG', '0', 'IMG_0290.JPG');
INSERT INTO `lnzm_download` VALUES ('9', '1234567', '', '1', '2015-08-04 21:07:33', '55c0b9157fbf5.JPG', '0', 'IMG_0292.JPG');
INSERT INTO `lnzm_download` VALUES ('10', '12345678', '', '1', '2015-08-04 21:07:40', '55c0b91cc5ac6.PNG', '0', 'IMG_0294.PNG');
INSERT INTO `lnzm_download` VALUES ('11', '123456789', '', '1', '2015-08-04 21:07:47', '55c0b923956db.JPG', '0', 'IMG_0293.JPG');
INSERT INTO `lnzm_download` VALUES ('12', '123412', '', '1', '2015-08-04 21:07:55', '55c0bf860e0c8.PNG', '0', 'IMG_0294.PNG');
INSERT INTO `lnzm_download` VALUES ('13', '12345', '', '1', '2015-08-09 15:57:50', '55c707fe51821.doc', '0', 'JMeter.doc');

-- ----------------------------
-- Table structure for lnzm_notice
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_notice`;
CREATE TABLE `lnzm_notice` (
  `noticeId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noticeTitle` varchar(255) NOT NULL DEFAULT '',
  `noticeInformation` varchar(255) DEFAULT '',
  `noticeReleaseId` bigint(20) NOT NULL DEFAULT '0',
  `noticeReleaseDate` datetime DEFAULT NULL,
  `noticeContentURL` varchar(255) NOT NULL DEFAULT '',
  `noticePageView` bigint(20) NOT NULL DEFAULT '0',
  `noticeAuditStatus` bigint(20) NOT NULL DEFAULT '0',
  `noticeAuditId` bigint(20) NOT NULL DEFAULT '0',
  `noticeAuditDate` datetime DEFAULT NULL,
  `noticeType` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`noticeId`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_notice
-- ----------------------------
INSERT INTO `lnzm_notice` VALUES ('18', '关于暑假放假的通知', '', '1', '2015-08-23 01:48:16', './Public/contentHtml/14402656968472.html', '4', '1', '1', '2015-08-23 01:48:16', '0');
INSERT INTO `lnzm_notice` VALUES ('19', '关于做好好暑假期间实验室安全管理工作的通知', '', '1', '2015-08-23 01:49:03', './Public/contentHtml/14402657436001.html', '1', '1', '1', '2015-08-23 01:49:03', '0');
INSERT INTO `lnzm_notice` VALUES ('20', '关于转发学校2015年端午节放假通知', '', '1', '2015-08-23 01:49:22', './Public/contentHtml/144026576217822.html', '1', '1', '1', '2015-08-23 01:49:22', '0');
INSERT INTO `lnzm_notice` VALUES ('21', '关于转发学校“2015年清明节放假的通知”', '', '1', '2015-08-23 01:49:45', './Public/contentHtml/144026578530847.html', '1', '1', '1', '2015-08-23 01:49:45', '0');
INSERT INTO `lnzm_notice` VALUES ('22', '转发学校“关于2015年寒假放假的通知', '', '1', '2015-08-23 01:50:16', './Public/contentHtml/144026581612364.html', '1', '1', '1', '2015-08-23 01:50:16', '0');
INSERT INTO `lnzm_notice` VALUES ('23', '关于转发学校2014年国庆节放假通知', '', '1', '2015-08-23 01:50:39', './Public/contentHtml/144253116630877.html', '9', '1', '1', '2015-08-23 01:50:39', '0');

-- ----------------------------
-- Table structure for lnzm_user
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_user`;
CREATE TABLE `lnzm_user` (
  `userId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userNickname` varchar(255) NOT NULL,
  `userPhotourl` varchar(255) DEFAULT '',
  `userAccount` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userAddress` varchar(255) DEFAULT NULL,
  `userTelnumber` varchar(255) DEFAULT NULL,
  `userMail` varchar(255) DEFAULT NULL,
  `userDescription` varchar(255) DEFAULT NULL,
  `userCreatetime` datetime DEFAULT NULL,
  `userStatus` tinyint(1) NOT NULL DEFAULT '0',
  `userLevel` tinyint(4) NOT NULL DEFAULT '1',
  `userAcademy` bigint(20) NOT NULL DEFAULT '0',
  `userBranch` bigint(20) NOT NULL,
  `userOther1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_user
-- ----------------------------
INSERT INTO `lnzm_user` VALUES ('1', 'Ai就是我', '', 'admin', 'admin', '516001066123@qq.com', '15989192385', '516001066@qq.com', '无描述', '2015-07-30 11:03:59', '0', '1', '0', '0', null);
INSERT INTO `lnzm_user` VALUES ('2', '张贵旭', '', 'zgx', '123', '516001066123@qq.com', '15989192385', '516001066123@qq.com', '无描述', '2015-07-30 11:08:07', '0', '1', '1', '8', null);

-- ----------------------------
-- Table structure for lnzm_worktendency
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_worktendency`;
CREATE TABLE `lnzm_worktendency` (
  `workTendencyId` bigint(20) NOT NULL AUTO_INCREMENT,
  `workTendencyTitle` varchar(255) NOT NULL DEFAULT '',
  `workTendencyReleaseInformation` varchar(255) DEFAULT '',
  `workTendencyReleaseId` bigint(20) NOT NULL DEFAULT '0',
  `workTendencyReleaseDate` datetime DEFAULT NULL,
  `workTendencyContentURL` varchar(255) NOT NULL DEFAULT '',
  `workTendencyPageView` bigint(20) DEFAULT '0',
  PRIMARY KEY (`workTendencyId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_worktendency
-- ----------------------------
INSERT INTO `lnzm_worktendency` VALUES ('39', '华南理工建筑作品服务抗战胜利70周年 亮相新闻联播', '', '1', '2015-08-23 01:45:01', './Public/contentHtml/144026550110201.html', '15');
