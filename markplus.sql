/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : markplus

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-01-26 22:47:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `developers`
-- ----------------------------
DROP TABLE IF EXISTS `developers`;
CREATE TABLE `developers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of developers
-- ----------------------------
INSERT INTO `developers` VALUES ('1', 'Developer 1');
INSERT INTO `developers` VALUES ('2', 'Developer 2');
INSERT INTO `developers` VALUES ('3', 'Developer 3');
INSERT INTO `developers` VALUES ('4', 'Developer 4');
INSERT INTO `developers` VALUES ('9', 'Developer 5');
INSERT INTO `developers` VALUES ('10', 'Developer 6');
INSERT INTO `developers` VALUES ('11', 'Developer 7');
INSERT INTO `developers` VALUES ('12', 'Developer 8');

-- ----------------------------
-- Table structure for `job_list`
-- ----------------------------
DROP TABLE IF EXISTS `job_list`;
CREATE TABLE `job_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `assign` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of job_list
-- ----------------------------
INSERT INTO `job_list` VALUES ('1', 'Project 1', '1');
INSERT INTO `job_list` VALUES ('2', 'Project 1', '2');
INSERT INTO `job_list` VALUES ('3', 'Project 2', '3');
INSERT INTO `job_list` VALUES ('4', 'Project 3', '4');
INSERT INTO `job_list` VALUES ('5', 'Project 3', '9');
INSERT INTO `job_list` VALUES ('6', 'Project 3', '10');
INSERT INTO `job_list` VALUES ('7', 'Project 3', '11');
INSERT INTO `job_list` VALUES ('8', 'Project 3', '12');
