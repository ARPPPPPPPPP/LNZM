/*
Navicat MySQL Data Transfer

Source Server         : MySQL-MyLabComputer
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lnzm

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-08-09 01:16:58
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_academy
-- ----------------------------
INSERT INTO `lnzm_academy` VALUES ('1', '计算机科学与工程', '计算机学院，南校区', null);
INSERT INTO `lnzm_academy` VALUES ('3', '环境学院', '环院，南校区', null);
INSERT INTO `lnzm_academy` VALUES ('14', '法学院', '南校区', null);
INSERT INTO `lnzm_academy` VALUES ('15', '艺术学院', '南校区', null);
INSERT INTO `lnzm_academy` VALUES ('16', '经贸学院', '南校区', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_activitypractice
-- ----------------------------
INSERT INTO `lnzm_activitypractice` VALUES ('5', '这里是活动实践编辑测试，现在我们需要测试一个名字长一点的活动实践', '', '1', '2015-08-07 21:08:49', './Public/contentHtml/143900356223032.html', '0', '1', '1', '2015-08-07 21:08:49', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of lnzm_download
-- ----------------------------
INSERT INTO `lnzm_download` VALUES ('7', '1234', '', '1', '2015-08-04 20:47:27', '55c0b45f8d2e5.JPG', '0', 'IMG_0292.JPG');
INSERT INTO `lnzm_download` VALUES ('8', '123456', '', '1', '2015-08-04 21:07:26', '55c0b90e71fa1.JPG', '0', 'IMG_0290.JPG');
INSERT INTO `lnzm_download` VALUES ('9', '1234567', '', '1', '2015-08-04 21:07:33', '55c0b9157fbf5.JPG', '0', 'IMG_0292.JPG');
INSERT INTO `lnzm_download` VALUES ('10', '12345678', '', '1', '2015-08-04 21:07:40', '55c0b91cc5ac6.PNG', '0', 'IMG_0294.PNG');
INSERT INTO `lnzm_download` VALUES ('11', '123456789', '', '1', '2015-08-04 21:07:47', '55c0b923956db.JPG', '0', 'IMG_0293.JPG');
INSERT INTO `lnzm_download` VALUES ('12', '123412', '', '1', '2015-08-04 21:07:55', '55c0bf860e0c8.PNG', '0', 'IMG_0294.PNG');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_notice
-- ----------------------------
INSERT INTO `lnzm_notice` VALUES ('9', '12345', '', '1', '2015-08-08 14:54:44', './Public/contentHtml/143901842023395.html', '0', '1', '1', '2015-08-08 14:54:44', '0');

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
INSERT INTO `lnzm_user` VALUES ('2', '张贵旭', '', 'zgx', '123', '516001066123@qq.com', '15989192385', '516001066123@qq.com', '无描述', '2015-07-30 11:08:07', '0', '21', '1', '8', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_worktendency
-- ----------------------------
INSERT INTO `lnzm_worktendency` VALUES ('15', '测试1', '', '1', '2015-07-31 14:06:29', './Public/contentHtml/14383227892102949693.html', '12');
INSERT INTO `lnzm_worktendency` VALUES ('16', '测试2', '', '0', '2015-07-31 14:04:27', './Public/contentHtml/14383226671897751511.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('17', '测试3', '', '0', '2015-07-31 14:08:31', './Public/contentHtml/14383229111402342416.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('18', '测试4', '', '0', '2015-07-31 14:09:38', './Public/contentHtml/14383229781914937041.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('19', '测试5', '', '0', '2015-07-31 14:10:01', './Public/contentHtml/14383230011211041904.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('20', '测试6', '', '0', '2015-07-31 14:10:26', './Public/contentHtml/14383230261349254879.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('21', '测试7', '', '0', '2015-07-31 14:10:56', './Public/contentHtml/14383230561086849105.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('22', '测试8', '', '0', '2015-07-31 14:11:29', './Public/contentHtml/14383230891676512137.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('23', '测试9', '', '0', '2015-07-31 14:11:47', './Public/contentHtml/1438323107506848589.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('24', '测试10', '', '0', '2015-07-31 14:12:12', './Public/contentHtml/14383231321049856954.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('25', '测试11', '', '0', '2015-07-31 14:34:26', './Public/contentHtml/1438324466669735106.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('26', '测试12', '', '1', '2015-07-31 14:36:34', './Public/contentHtml/1438324594827082445.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('27', '测试13', '', '1', '2015-07-31 15:49:50', './Public/contentHtml/14383289902136839132.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('28', '测试14', '', '1', '2015-07-31 15:50:07', './Public/contentHtml/1438329007574692184.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('29', '测试15', '', '1', '2015-07-31 15:50:21', './Public/contentHtml/14383290211201715968.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('30', '测试16', '', '1', '2015-07-31 15:50:36', './Public/contentHtml/143832903651904573.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('31', '测试17', '', '1', '2015-07-31 15:50:51', './Public/contentHtml/1438329051549476571.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('32', '测试18', '', '1', '2015-07-31 15:51:05', './Public/contentHtml/1438329065231596999.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('33', '测试19', '', '1', '2015-07-31 15:51:18', './Public/contentHtml/14383290781781977939.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('34', '测试20', '', '1', '2015-07-31 15:51:31', './Public/contentHtml/1438329091865930050.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('35', '测试21', '', '1', '2015-08-06 01:23:20', './Public/contentHtml/14387954006458.html', '0');
INSERT INTO `lnzm_worktendency` VALUES ('36', '1234567', '', '1', '2015-08-08 10:56:19', './Public/contentHtml/143900274627079.html', '0');
