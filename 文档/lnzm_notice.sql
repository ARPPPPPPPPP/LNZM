/*
Navicat MySQL Data Transfer

Source Server         : MySQL-MyLabComputer
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lnzm

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-08-09 20:32:15
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
