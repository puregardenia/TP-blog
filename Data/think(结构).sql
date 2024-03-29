-- 建立数据库
create database think default character set utf8;

-- 愿望表
create table hd_wish(
  id int unsigned not null primary key auto_increment,
  username varchar(20) not null default '',
  content varchar(255) not null default '',
  time int(10) not null default '0'
)engine myisam default charset utf8;

-- 用户表
create table hd_user(
  id int unsigned not null primary key auto_increment,
  username char(20) not null default '',
  password char(32) not null default '',
  logintime int(10) unsigned not null,
  loginip varchar(30) not null,
  `lock` tinyint(1) unsigned not null default 0,
  unique(username)
)engine myisam default charset utf8;
-- 插入管理员用户
insert into hd_user set username= 'admin',password = md5('admin'),logintime = unix_timestamp(now()),loginip = '127.0.0.1';

-- 定义session数据库驱动
CREATE TABLE hd_session (
  session_id varchar(255) NOT NULL,
  session_expire int(11) NOT NULL,
  session_data blob,
  UNIQUE KEY `session_id` (`session_id`)
);

/**
 * RBAC权限控制相关表
 */
-- 权限表
CREATE TABLE IF NOT EXISTS `hd_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- 节点表
CREATE TABLE IF NOT EXISTS `hd_node` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
-- 角色表
CREATE TABLE IF NOT EXISTS `hd_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
-- 角色-用户中间表
CREATE TABLE IF NOT EXISTS `hd_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;