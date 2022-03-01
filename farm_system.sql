/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : farm_system

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2018-12-13 15:40:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fertilizer
-- ----------------------------
DROP TABLE IF EXISTS `fertilizer`;
CREATE TABLE `fertilizer` (
  `fertilizer_id` int(11) NOT NULL,
  `fertilizer_yield` int(11) DEFAULT NULL,
  `fertilizer_species` tinyint(1) DEFAULT NULL COMMENT '0:氮肥 1：磷肥 2：钾肥',
  `fertilizer_temperature` int(11) DEFAULT NULL,
  `fertilizer_weather` tinyint(1) DEFAULT NULL COMMENT '0:晴天 1:阴天 2:雨天',
  `fertilizer_humidity` int(11) DEFAULT NULL,
  PRIMARY KEY (`fertilizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fertilizer
-- ----------------------------
INSERT INTO `fertilizer` VALUES ('1', '10', '0', '9', '0', '60');
INSERT INTO `fertilizer` VALUES ('2', '20', '2', '6', '1', '70');
INSERT INTO `fertilizer` VALUES ('4', '45', '1', '10', '2', '50');

-- ----------------------------
-- Table structure for pesticide
-- ----------------------------
DROP TABLE IF EXISTS `pesticide`;
CREATE TABLE `pesticide` (
  `pesticide_id` int(11) NOT NULL,
  `pesticide_yield` int(11) DEFAULT NULL,
  `pesticide_species` tinyint(1) DEFAULT NULL COMMENT '0:除虫剂 1：除草剂 ',
  `pesticide_humidity` int(11) DEFAULT NULL,
  `pesticide_temperature` int(11) DEFAULT NULL,
  `pesticide_weather` tinyint(1) DEFAULT NULL COMMENT '0:晴天 1:阴天 2:雨天',
  PRIMARY KEY (`pesticide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pesticide
-- ----------------------------
INSERT INTO `pesticide` VALUES ('1', '0', '1', '60', '9', '0');
INSERT INTO `pesticide` VALUES ('2', '10', '0', '70', '6', '1');
INSERT INTO `pesticide` VALUES ('4', '30', '1', '50', '10', '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for water
-- ----------------------------
DROP TABLE IF EXISTS `water`;
CREATE TABLE `water` (
  `water_id` int(11) NOT NULL,
  `water_yield` int(11) DEFAULT NULL,
  `water_weather` tinyint(1) DEFAULT NULL COMMENT '0:晴天 1:阴天 2:雨天',
  `water_humidity` int(11) DEFAULT NULL,
  `water_farmland` tinyint(1) DEFAULT NULL COMMENT '0:玉米地 1：番薯地',
  PRIMARY KEY (`water_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of water
-- ----------------------------
INSERT INTO `water` VALUES ('10', '50', '1', '30', null);
INSERT INTO `water` VALUES ('11', null, '2', null, null);
INSERT INTO `water` VALUES ('12', null, '0', null, null);
