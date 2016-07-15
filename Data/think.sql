/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50130
Source Host           : localhost:3306
Source Database       : think

Target Server Type    : MYSQL
Target Server Version : 50130
File Encoding         : 65001

Date: 2016-01-10 21:32:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hd_access
-- ----------------------------
DROP TABLE IF EXISTS `hd_access`;
CREATE TABLE `hd_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_access
-- ----------------------------
INSERT INTO `hd_access` VALUES ('1', '8', '3', null);
INSERT INTO `hd_access` VALUES ('2', '6', '3', null);
INSERT INTO `hd_access` VALUES ('1', '9', '3', null);
INSERT INTO `hd_access` VALUES ('1', '10', '3', null);
INSERT INTO `hd_access` VALUES ('1', '12', '3', null);
INSERT INTO `hd_access` VALUES ('2', '7', '3', null);
INSERT INTO `hd_access` VALUES ('1', '5', '2', null);
INSERT INTO `hd_access` VALUES ('2', '4', '2', null);
INSERT INTO `hd_access` VALUES ('1', '1', '1', null);
INSERT INTO `hd_access` VALUES ('2', '1', '1', null);

-- ----------------------------
-- Table structure for hd_node
-- ----------------------------
DROP TABLE IF EXISTS `hd_node`;
CREATE TABLE `hd_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_node
-- ----------------------------
INSERT INTO `hd_node` VALUES ('1', 'Admin', '后台应用', '1', null, '1', '0', '1');
INSERT INTO `hd_node` VALUES ('2', 'Index', '前端应用', '1', null, '1', '0', '1');
INSERT INTO `hd_node` VALUES ('3', 'Index', '后台首页', '1', null, '1', '1', '2');
INSERT INTO `hd_node` VALUES ('4', 'MsgManage', '帖子管理', '1', null, '1', '1', '2');
INSERT INTO `hd_node` VALUES ('5', 'Rbac', 'Rbac权限控制', '1', null, '1', '1', '2');
INSERT INTO `hd_node` VALUES ('6', 'Index', '帖子列表', '1', null, '1', '4', '3');
INSERT INTO `hd_node` VALUES ('7', 'delete', '删除帖子', '1', null, '1', '4', '3');
INSERT INTO `hd_node` VALUES ('8', 'Index', '用户列表', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('9', 'role', '角色列表', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('10', 'node', '节点列表', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('11', 'addUser', '添加用户', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('12', 'addRole', '添加角色', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('13', 'addNode', '添加节点', '1', null, '1', '5', '3');
INSERT INTO `hd_node` VALUES ('14', 'Member', '会员中心', '1', null, '1', '0', '1');
INSERT INTO `hd_node` VALUES ('15', 'index', '后台首页', '1', null, '1', '3', '3');

-- ----------------------------
-- Table structure for hd_role
-- ----------------------------
DROP TABLE IF EXISTS `hd_role`;
CREATE TABLE `hd_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_role
-- ----------------------------
INSERT INTO `hd_role` VALUES ('1', 'Manager', null, '1', '普通管理员');
INSERT INTO `hd_role` VALUES ('2', 'Editor', null, '1', '网站编辑');
INSERT INTO `hd_role` VALUES ('3', 'houdunwang', null, '1', '后盾网');

-- ----------------------------
-- Table structure for hd_role_user
-- ----------------------------
DROP TABLE IF EXISTS `hd_role_user`;
CREATE TABLE `hd_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_role_user
-- ----------------------------
INSERT INTO `hd_role_user` VALUES ('1', '6');
INSERT INTO `hd_role_user` VALUES ('2', '7');
INSERT INTO `hd_role_user` VALUES ('1', '8');
INSERT INTO `hd_role_user` VALUES ('2', '8');
INSERT INTO `hd_role_user` VALUES ('1', '9');

-- ----------------------------
-- Table structure for hd_session
-- ----------------------------
DROP TABLE IF EXISTS `hd_session`;
CREATE TABLE `hd_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_session
-- ----------------------------
INSERT INTO `hd_session` VALUES ('mjqv4p6ce8jc5bed84erh4kre3', '1452434061', 0x7665726966797C733A33323A226138376666363739613266336537316439313831613637623735343231323263223B7569647C733A313A2231223B757365726E616D657C733A353A2261646D696E223B6C6F67696E74696D657C733A31363A22323031362D30312D31302032313A3330223B6C6F67696E69707C733A393A223132372E302E302E31223B737570657261646D696E7C623A313B);

-- ----------------------------
-- Table structure for hd_user
-- ----------------------------
DROP TABLE IF EXISTS `hd_user`;
CREATE TABLE `hd_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_user
-- ----------------------------
INSERT INTO `hd_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1452432621', '127.0.0.1', '0');
INSERT INTO `hd_user` VALUES ('8', 'wangwu', '9f001e4166cf26bfbdd3b4f67d9ef617', '1444568550', '127.0.0.1', '0');
INSERT INTO `hd_user` VALUES ('9', 'pure', '6b341881ce7c5bfb0fbbbe7171f27cdc', '1442291319', '127.0.0.1', '0');
INSERT INTO `hd_user` VALUES ('7', 'lisi', 'dc3a8f1670d65bea69b7b65048a0ac40', '1443151737', '127.0.0.1', '0');
INSERT INTO `hd_user` VALUES ('6', 'zhangsan', '01d7f40760960e7bd9443513f22ab9af', '1444832773', '127.0.0.1', '0');

-- ----------------------------
-- Table structure for hd_wish
-- ----------------------------
DROP TABLE IF EXISTS `hd_wish`;
CREATE TABLE `hd_wish` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_wish
-- ----------------------------
INSERT INTO `hd_wish` VALUES ('31', '111111111111', '111111111111111', '1443062044');
INSERT INTO `hd_wish` VALUES ('28', '许愿墙', '许愿墙 许愿墙[嘻嘻][抱抱][害羞]', '1443054238');
INSERT INTO `hd_wish` VALUES ('29', 'pure', 'I\'am a PROGRAMMER[酷]', '1443061819');
INSERT INTO `hd_wish` VALUES ('30', 'puregardenia', 'Tody is hard,torrow will be fine,but many people is going to die at tonight.[酷]', '1443061990');
INSERT INTO `hd_wish` VALUES ('11', 'TP', 'ThinkPHP', '1439350634');
INSERT INTO `hd_wish` VALUES ('32', '2222222222', '2222222222', '1443062069');
INSERT INTO `hd_wish` VALUES ('33', '111111111111111', '1111111111111', '1444144266');
INSERT INTO `hd_wish` VALUES ('26', 'Guanghua', 'woleigequ!!!!![抓狂]', '1442627173');
INSERT INTO `hd_wish` VALUES ('25', 'weapon', '吃豆腐', '1442298151');
INSERT INTO `hd_wish` VALUES ('16', 'hello', '你好', '1441592754');
INSERT INTO `hd_wish` VALUES ('34', 'qqqqqqqqqqq', '1111111111111[嘻嘻][酷][害羞][抱抱][抓狂][太开心][偷笑][钱]', '1444832569');
INSERT INTO `hd_wish` VALUES ('27', 'aaaaa', 'bbbbb', '1443053292');
INSERT INTO `hd_wish` VALUES ('21', '000000000', '0000000000000[抓狂][抱抱][害羞][酷][钱][花心][挤眼]', '1441627129');
INSERT INTO `hd_wish` VALUES ('23', '冯达', '我想做一个ceo', '1441694409');
INSERT INTO `hd_wish` VALUES ('35', 'aaaaaaaa', 'aaaaaaa', '1444832633');
INSERT INTO `hd_wish` VALUES ('36', 'mmm', '111\n', '1452432409');
