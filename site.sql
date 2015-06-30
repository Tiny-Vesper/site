/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : site

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-06-29 01:11:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for site_article
-- ----------------------------
DROP TABLE IF EXISTS `site_article`;
CREATE TABLE `site_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `content` longtext,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of site_article
-- ----------------------------
INSERT INTO `site_article` VALUES ('59', '2015-06-25 11:06:44', '我的是张三', '张三');
INSERT INTO `site_article` VALUES ('61', '2015-06-25 11:06:34', '       我是张三 ，我和李四王五一组。我们一起完成了这个程序', '张三');
INSERT INTO `site_article` VALUES ('63', '2015-06-25 11:06:07', '张三，你说的东西我都看到了。', 'admin');
INSERT INTO `site_article` VALUES ('64', '2015-06-25 11:06:18', '我觉得你这个网站做的还是不错的', 'admin');
INSERT INTO `site_article` VALUES ('65', '2015-06-25 11:06:28', '不过你说的话太多了，我需要删除掉一些', 'admin');
INSERT INTO `site_article` VALUES ('70', '2015-06-26 10:06:23', '每个人都可以在这里注册，并且留言', '李四');

-- ----------------------------
-- Table structure for site_user
-- ----------------------------
DROP TABLE IF EXISTS `site_user`;
CREATE TABLE `site_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_time` datetime DEFAULT NULL,
  `last_log_in` varchar(255) DEFAULT NULL,
  `phone_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site_user
-- ----------------------------
INSERT INTO `site_user` VALUES ('18', 'user1', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('19', 'admin', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('20', 'uesr2', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('21', '张三', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('22', '王翔宇', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('23', '李四', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('24', 'fdgfadgadf', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('25', '123', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('26', '谭筠愚', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
INSERT INTO `site_user` VALUES ('27', 'user2', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', null, null);
